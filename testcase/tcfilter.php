<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$project_view = new database ( 'VIEW' );

if (isset ( $_POST ['category'] )) {
	if (! is_empty ( $_POST ['category'] )) {
		$category = $_POST ['category'];
	} else {
		$category = '';
	}
} else {
	$category = '';
}
// / echo json_encode($_POST);
if (! is_empty ( $category )) {
	$query = "SELECT `s.no` S_NO,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_status`,
    `testcase_create_date`,
    `testcase_create_user`,
		 testcase_priority,
		testcase_catagory
FROM `testcase_details` where upper(testcase_catagory) = upper(:testcase_catagory) order by testcase_catagory,testcase_create_date desc";
	
	$conditions = [ 
			'testcase_catagory' => $category 
	];
	
	$result = $project_view->query_result ( $query, $conditions );
} else {
	$query = "SELECT `s.no` S_NO,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_status`,
    `testcase_create_date`,
    `testcase_create_user`,
		 testcase_priority,
		testcase_catagory
FROM `testcase_details` order by testcase_catagory,testcase_create_date desc";
	
	$result = $project_view->query_result ( $query );
}
// print_r ( $result );
echo json_encode ( $result );