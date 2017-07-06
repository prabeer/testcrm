<?php
ob_start ();
include_once '../configure.php';
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
//echo URI;
if ((! is_empty ( $_POST ['project_name'] )) && (! is_empty ( $_POST ['description'] ))) {
	
	//print_r($_POST);
	$project_name = xssafe ( $_POST ['project_name'] );
	$description = $_POST ['description'];
	$project_id = encryptor('decrypt',$_POST['project_id']);
	$update_db = new database ( 'EDIT' );
	$condition = [ 
			'project_topic' => $project_name,
			'project_description' => $description,
			'project_id' => $project_id 
	];
	//print_r($condition);
	$query = 'update project_details set project_topic = :project_topic, project_description = :project_description where `s.no` = :project_id;';
	
	$result = $update_db->query_result ( $query, $condition );
	if ($result == '1') {
		//echo 'save';
		redirect ( '/'.URI.'/modProject.php?pr=' . $_POST['project_id'] . '&page=description&q=save' );
	} else {
		//echo 'fail'.$result;
		redirect ( '/'.URI.'/modProject.php?pr=' . $_POST['project_id'] . '&page=description&q=fail' );
	}
} else {
	//redirect ( 'modProject.php?pr=' . $project_id . '&page=description&q=fail' );
}