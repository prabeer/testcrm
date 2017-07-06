<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$priority = $_POST ['priority'];
$testcase_type = $_POST ['tc_type'];
$title = $_POST ['title'];
$tc_precondition = $_POST ['precondition'];
$tc_result = $_POST ['expected'];
$tc_step = $_POST ['reproduce'];
$user = $_SESSION ['userid'];
$catagory = $_POST ['catagory'];
$form_type = $_POST ['form_type'];

if (! is_empty ( $title ) && ! is_empty ( $tc_precondition ) && ! is_empty ( $testcase_type ) && ! is_empty ( $tc_result ) && ! is_empty ( $tc_step ) && ! is_empty ( $user ) && ! is_empty ( $catagory )) {
	$tc_edit = new database ( 'EDIT' );
	$tc_select = new database ( 'VIEW' );
	$query = "select `s.no`,`testcase_title` from testcase_details where upper(testcase_title) = upper(:testcase_title);";
	$condition = [ 
			'testcase_title' => $title 
	];
	$res = $tc_select->query_result ( $query, $condition );
	//echo count ( $res );
	//echo $form_type;
	if ((count ( $res ) == 0) && ($form_type == 'insert')) {
		
		$query = "INSERT INTO `testcase_details`
(`testcase_title`,
		`testcase_type`,
		`testcase_preconditions`,
		`testcase_steps`,
		`testcase_required_result`,
		`testcase_status`,
		`testcase_create_date`,
		`testcase_create_user`,
				testcase_priority,
				testcase_catagory
		)
		VALUES
		(:testcase_title, :testcase_type, :testcase_preconditions, :testcase_steps, :testcase_required_result, :testcase_status, now(), :testcase_create_user,:testcase_priority,:testcase_catagory  );";
		
		$condition = [ 
				'testcase_title' => $title,
				'testcase_type' => $testcase_type,
				'testcase_preconditions' => $tc_precondition,
				'testcase_required_result' => $tc_result,
				'testcase_steps' => $tc_step,
				'testcase_status' => '1',
				'testcase_create_user' => $user,
				'testcase_priority' => $priority,
				'testcase_catagory' => $catagory 
		];
		
		$result = $tc_edit->query_result ( $query, $condition );
		if ($result == 1) {
			echo "Test Case successfully Added";
		} else {
			echo "some error occured";
		}
	} elseif (($form_type == 'update') && count ( $res ) > 0) {
		if (isset ( $_POST ['test_val'] )) {
			$s_no = $_POST ['test_val'];
		}
		$query = "UPDATE `testcase_details` 
SET 
    `testcase_title` = :testcase_title,
    `testcase_type` = :testcase_type ,
    `testcase_preconditions` = :testcase_preconditions,
    `testcase_steps` = :testcase_steps,
    `testcase_required_result` = :testcase_required_result,
    `testcase_status` = :testcase_status,
    `testcase_create_date` = NOW(),
    `testcase_create_user` = :testcase_create_user,
    `testcase_priority` = :testcase_priority,
    `testcase_catagory` = :testcase_catagory
WHERE
    `s.no` = :s_no;";
		
		$condition = [ 
				'testcase_title' => $title,
				'testcase_type' => $testcase_type,
				'testcase_preconditions' => $tc_precondition,
				'testcase_required_result' => $tc_result,
				'testcase_steps' => $tc_step,
				'testcase_status' => '1',
				'testcase_create_user' => $user,
				'testcase_priority' => $priority,
				'testcase_catagory' => $catagory,
				's_no' => $s_no 
		];
		
		$result = $tc_edit->query_result ( $query, $condition );
		if ($result == 1) {
			echo "Test Case successfully Update";
		} else {
			echo "some error occured".$result;
		}
	} else {
		echo 'Invalid test type';
	}
	
	$tc_edit->conn_close ();
	$tc_select->conn_close ();
}