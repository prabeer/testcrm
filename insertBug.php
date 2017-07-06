<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$priority = xssafe ( $_POST ['priority'] );
$frequency = xssafe ( $_POST ['frequency'] );
$title = xssafe ( $_POST ['title'] );
$precondition = xssafe ( $_POST ['precondition'] );
$reproduce = xssafe ( $_POST ['reproduce'] );
$expected = xssafe ( $_POST ['expected'] );
$comment = xssafe ( $_POST ['comment'] );

$penc = $_POST ['project_id'];
$project_id = encryptor ( 'decrypt', $_POST ['project_id'] );
$user = xssafe ( $_SESSION ['userid'] );

if (! is_empty ( $user ) && ! is_empty ( $priority ) && ! is_empty ( $frequency ) && ! is_empty ( $title ) && ! is_empty ( $precondition ) && ! is_empty ( $reproduce ) && ! is_empty ( $expected ) && ! is_empty ( $project_id )) {
	
	$bug_db = new database ( 'EDIT' );
	
	$condition = [ 
			'bug_precondition' => $precondition,
			'bug_priority' => $priority,
			'bug_status' => '1',
			'bug_titles' => $title,
			'bug_raise_user_id' => $user,
			'bug_reproduce' => $reproduce,
			'bug_expected' => $expected,
			'bug_frequency' => $frequency,
			'bug_project' => $project_id 
	];
	
	$query = "INSERT INTO `bug_details`
(`bug_precondition`,
`bug_priority`,
`bug_status`,
`bug_titles`,
`bug_raise_user_id`,
`bug_reproduce`,
`bug_expected`,
`bug_frequency`,
`bug_project`,
`bug_raise_time`)
VALUES
(:bug_precondition,
:bug_priority,
:bug_status,
:bug_titles,
:bug_raise_user_id,
:bug_reproduce,
:bug_expected,
:bug_frequency,
:bug_project,
now());";
	$result = $bug_db->query_result ( $query, $condition );
	// echo $result;
	if ($result == 1) {
		header ( "Location: BugList.php?a=" . $penc . "&r=save" ); /* Redirect browser */
		exit ();
		// redirect ( 'BugList.php?a=' . $penc . '&r=save' );
	} else {
		header ( "Location: BugList.php?a=" . $penc . "&r=fail" ); /* Redirect browser */
		exit ();
	}
	$bug_db->conn_close ();
} else {
	
	header ( "Location: BugList.php?a=" . $penc . "&r=fail" ); /* Redirect browser */
	exit ();
}
	