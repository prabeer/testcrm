<?php

// error_reporting(E_ALL & ~E_NOTICE);
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';

$data = new database ( 'VIEW' );

$project_name = xssafe($_POST['project_name']);

$condition = [
		'inventry_name' => $project_name
];
// print_r( $condition);
$query = "SELECT bar_code, `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`, `bar_code`, `to_user_Name` FROM `inventry_transaction` where inventry_name = :inventry_name ;";
$result_data = $data->query_result ( $query, $condition );
$data->conn_close ();
// print_r($result_data);
$data_arr = array_filter ( $result_data );

echo json_encode($data_arr);