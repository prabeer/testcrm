<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$status_val = $_POST ['stat'];
$id = explode ( "_", $_POST ['id'] );
$req_type = $id ['0'];
$device_id = $id ['1'];
$testcase_id = $id ['2'];

if (! is_empty ( $status_val ) && ! is_empty ( $req_type ) && ! is_empty ( $device_id ) && ! is_empty ( $testcase_id )) {
	if ($req_type == 'status') {
		$update_db = new database ( "EDIT" );
		$query = "update testcase_for_device set testcase_status = :testcase_status, testcase_status_change_datetime = now(), testcase_change_user = :testcase_change_user where testcase_id = :testcase_id and device_id = :device_id";
		$condition = [ 
				"testcase_status" => $status_val,
				"testcase_change_user" => $_SESSION ['userid'],
				"testcase_id" => $testcase_id,
				"device_id" => $device_id 
		];
		$res = $update_db->query_result ( $query, $condition );
		echo $res . ' Updated';
	} elseif ($req_type == 'comment') {
		$update_db = new database ( "EDIT" );
		$query = "update testcase_for_device set testcase_comment = :testcase_comment, testcase_status_change_datetime = now(), testcase_change_user = :testcase_change_user where testcase_id = :testcase_id and device_id = :device_id";
		$condition = [ 
				"testcase_comment" => $status_val,
				"testcase_change_user" => $_SESSION ['userid'],
				"testcase_id" => $testcase_id,
				"device_id" => $device_id 
		];
		$res = $update_db->query_result ( $query, $condition );
		echo $res . ' Updated';
	}
} else {
	echo 'Invalid Request';
}