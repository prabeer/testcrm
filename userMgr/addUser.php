<?php
error_reporting ( E_ALL & ~ E_NOTICE );
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
$group_name = "";
$group_type = "";
$user_name = "";
$project_id = "";

if (isset ( $_POST ['group_name'] )) {
	$group_name = $_POST ['group_name'];
}
if (isset ( $_POST ['group_type'] )) {
	$group_type = $_POST ['group_type'];
}
if (isset ( $_POST ['user_name'] )) {
	$user_name = $_POST ['user_name'];
}
if (isset ( $_POST ['project_id'] )) {
	$project_id = $_POST ['project_id'];
}

if (! is_empty ( $group_name ) && ! is_empty ( $group_type ) && ! is_empty ( $user_name ) && ! is_empty ( $project_id )) {
	$user_insert = new database ( 'EDIT' );
	
	$query = "insert into user_project_rights (project_id, user_id) values (:project_id, :user_id)";
	$condition = [ 
			"project_id" => $project_id,
			"user_id" => $user_name 
	];
	$usr_result = $user_insert->query_result ( $query, $condition );
	if ($usr_result == 1) {
		$user_select = new database ( 'VIEW' );
		$query = "select uname, gname, project_id from  user_project_view where project_id = :project_id;";
		$condition = [ 
				'project_id' => $project_id 
		];
		$user_result = $user_select->query_result ( $query, $condition );
		if (is_array ( $user_result )) {
			echo json_encode ( $user_result );
		} else {
			$error = [ 
					'error' => $user_name 
			];
			echo json_encode ( $error );
		}
	}else{
		$error = [
				'error' => $user_result
		];
		echo json_encode ( $error ); 
	}
}else{
		$error = [
				'error' => 'empty:-'.$group_name.'|'.$group_type.'|'.$user_name.'|'.$project_id
		];
		echo  ( $error ); 
	}