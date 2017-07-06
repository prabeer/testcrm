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
$bug_id = $id ['1'];

if (! is_empty ( $status_val ) && ! is_empty ( $bug_id )) {
	
	$update_db = new database ( "EDIT" );
	$query = "update bug_details set bug_status = :bug_status where `s.no` = :bug_id";
	$condition = [ 
			"bug_status" => $status_val,
			"bug_id" => $bug_id 
	];
	//print_r($condition);
	$res = $update_db->query_result ( $query, $condition );

	echo $res;
	//print_r($condition);
} else {
	echo 'Invalid Request';
}

///bug_tracking table to be updated