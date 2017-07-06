<?php
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
if (isset ( $_POST ['id'] )) {
	$comment_view = new database ( 'VIEW' );
	$query = 'select bug_comment, bug_comment_time, bug_comment_user, bug_comment_file from bug_comments where bug_id = :bug_id';
	$condition = [ 
			'bug_id' => $bug ['S_NO'] 
	];
	$result_comment = $project_view->query_result ( $query, $condition );
	$comments = "";
	if (count ( $result_comment ) > 0) {
		
		foreach ( $result_comment as $val ) {
			$comments .= $val ['bug_comment'] . '<br>';
		}
	}
}