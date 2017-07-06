<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
$title = $_POST ['title'];
$content = $_POST ['content'];
$vendor = $_POST['vendor'];
//echo $title;
//echo $content;
$start_date = date ( 'Y-m-d H:i:s', strtotime ( $_POST ['start'] ) );
$end_date = date ( 'Y-m-d H:i:s', strtotime ( $_POST ['end'] ) );
$project_view = new database ( 'VIEW' );

$query = 'select project_topic from project_details where ucase(project_topic) = ucase(:project_topic)';
$condition = [ 
		'project_topic' => $title 
];
$project_view = $project_view->query_result ( $query, $condition );



if (! empty ( $project_view )) {
	
	// print_r ( $project_view );
	echo '<script>window.location.href = "createProject.php?error=e"</script>';
	exit ();
} else {
	$project_db = new database ( 'EDIT' );
	$condition = [ 
			'project_topic' => $title,
                        'project_vendor' => $vendor,
			'project_description' => $content,
			'project_start_date' => $start_date,
			'project_end_date' => $end_date,
			'project_insert_user_id' => '1',
                        'project_status' => 'In Progress'
	];
	$query = 'INSERT INTO project_details (project_topic, project_description, Project_insert_date, project_start_date, project_end_date,project_insert_user_id, project_progress, project_vendor, project_status)';
	$query .= 'VALUES (:project_topic, :project_description, sysdate(),:project_start_date, :project_end_date, :project_insert_user_id, "0", :project_vendor, :project_status);';
	$result_data = $project_db->query_result ( $query, $condition );
	$project_db->conn_close ();
	if ($result_data == 1) {
		$_SESSION ['CurrentProject'] = $title;
		$projectid_db = new database ( 'VIEW' );
		$query = 'select max(`s.no`) project_id from project_details';
		$result_data = $projectid_db->query_result ( $query, $condition );
		// print_r($result_data);
		if (! is_empty ( $result_data [0] ['project_id'] )) {
			$_SESSION ['project_id'] = $result_data [0] ['project_id'];
			//echo "Success";
			redirect ( "createProject2.php?wizard=1" );
		} else {
			echo "Error:Invalid Entry";
		}
	}else{
		echo "Error:Insert error:".$result_data;
	}
}