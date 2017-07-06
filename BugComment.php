<?php
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

include_once 'includes/functions.php';
include_once 'includes/database2.php';
// @ob_start ();

if (isset ( $_POST ['bug_val'] ) && isset ( $_POST ['comment'] )) {
	$bugid = $_POST ['bug_val'];
	$comment = $_POST ['comment'];
	
	$comment_edit = new database ( 'EDIT' );
	
	$query = 'INSERT INTO `bug_comments` (`bug_comment`,`bug_comment_user`,`bug_comment_time`,`bug_id`,`bug_comment_file`) values 
			(:bug_comment, :bug_comment_user, now(), :bug_id,:bug_comment_file)';
	$condition = [ 
			'bug_comment' => $comment,
			'bug_comment_user' => $_SESSION ['userid'],
			'bug_id' => $bugid,
			'bug_comment_file' => '' 
	];
	$ins_result = $comment_edit->query_result ( $query, $condition );
	if ($ins_result == 1) {
		$comment_view = new database ( 'VIEW' );
		$query = 'SELECT `s_no`,   `bug_comment`, `bug_comment_user`,  `bug_comment_time`,  `bug_id`, `bug_comment_file` FROM `bug_comment_view` where bug_id = :bug_id order by bug_comment_time desc;';
		$condition = [ 
				'bug_id' => $bugid 
		];
		$result_comment = $comment_view->query_result ( $query, $condition );
		// echo $result_comment;
		foreach ( $result_comment as $bug_val ) {
			echo '<span style="margin-left:50px;"><b>' . $bug_val ['bug_comment_user'] . ': </b>' . $bug_val ['bug_comment'] . '</span><br>';
			// echo $bug_val ['bug_comment'] . '<br>';
		}
	}
} else {
	echo 'Invalid Input';
}
