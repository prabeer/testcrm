<?php
error_reporting(E_ALL & ~E_NOTICE);
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
$data = new database ( 'VIEW' );
if(isset($_POST ['group_type'])){
	$group_catagory =  $_POST ['group_type'];
}
if(isset($_POST ['group_name'])){
	$group_catagory =  $_POST ['group_name'];
}
if (! is_empty ( $_POST ['group_type'] )) {
	$group_catagory = $_POST ['group_type'];
	
	$condition = [ 
			'group_catagory' => $group_catagory 
	];
	$query = "select `s.no` S_NO,user_group_name from group_details where group_catagory = :group_catagory;";
	$result_data = $data->query_result ( $query, $condition );
	
	if (count ( $result_data ) == 0) {
		$query = "select `s.no` S_NO,user_group_name from group_details;";
		$result_data = $data->query_result ( $query );
	}
	
	echo json_encode($result_data);

} elseif (! is_empty ( $_POST ['group_name'] )) {
	$group_name = $_POST ['group_name'];
	$condition = [ 
			'group_id' => $group_name 
	];
	$query = "select uname, user_id, group_id from group_user_view where group_id = :group_id;";
	$result_data = $data->query_result($query,$condition);
	echo json_encode($result_data);
}

?>
