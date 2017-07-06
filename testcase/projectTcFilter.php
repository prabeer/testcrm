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

if (isset ( $_POST ['device_id'] )) {
	if (! is_empty ( $_POST ['device_id'] )) {
		$device_id = $_POST ['device_id'];
	} else {
		$device_id = '';
	}
} else {
	$device_id = '';
}
// / echo json_encode($_POST);
if (! is_empty ( $category )) {
	$query = "SELECT `testcase_id`,
    `device_id`,
    `testcase_status`,
    `testcase_status_change_datetime`,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_create_date`,
    `testcase_create_user`,
		testcase_catagory,
		testcase_priority,
		testcase_comment
FROM `testcase_device_view` where device_id = :device_id and testcase_catagory = :testcase_catagory order by testcase_catagory asc;";
	$condition = [ 
			'device_id' => $device_id,
			'testcase_catagory' => $category 
	];
	$result = $project_view->query_result ( $query, $condition );
} else {
	$query = "SELECT `testcase_id`,
    `device_id`,
    `testcase_status`,
    `testcase_status_change_datetime`,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_create_date`,
    `testcase_create_user`,
		testcase_catagory,
		testcase_priority,
		testcase_comment
FROM `testcase_device_view` where device_id = :device_id order by testcase_catagory asc;";
	
	$condition = [ 
			'device_id' => $device_id 
	];
	$result = $project_view->query_result ( $query, $condition );
}
// print_r ( $result );
echo json_encode ( $result );