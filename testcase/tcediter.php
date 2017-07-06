<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

if (isset ( $_GET ['id'] )) {
	$tc_id = $_GET ['id'];
} else {
	$tc_id = 0;
}
if (! is_empty ( $tc_id )) {
	$tc_select = new database ( 'VIEW' );
	$query = "SELECT `s.no` S_NO,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_status`,
    `testcase_create_date`,
    `testcase_create_user`,
    `testcase_version`,
    `testcase_group`,
    `testcase_priority`,
    `testcase_catagory`
FROM `testcase_details` where `s.no` =:s_no;";
	
	$condition = [ 
			's_no' => $tc_id 
	];
	$res = $tc_select->query_result ( $query, $condition );
	//echo count ( $res );
	if (count ( $res ) == 1) {
		echo json_encode ( $res );
	} else {
		$error = [ 
				'error' => 'No result found' 
		];
		echo json_encode ( $error );
	}
} else {
	$error = [ 
			'error' => 'Invalid Data' 
	];
	echo json_encode ( $error );
}
