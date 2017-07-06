<?php
/*
 * Update Group in user details table also
 *
 */
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';

$rights = $_POST ['rights'];
$user = $_POST ['select_user'];
$user_import = $_POST ['user_name'];
$group_import = $_POST ['group_name'];
if (isset ( $rights )) {
	$rights = explode ( ',', $rights );
	
	$user_edit = new database ( 'EDIT' );
	$user_view = new database ( 'VIEW' );
	$condition = [ 
			'user_id' => $user 
	];
	$query = 'select rights_id, user_id from user_rights_match where user_id = :user_id;';
	
	$result = $user_view->query_result ( $query, $condition );
	
	if (is_array ( $result ) && ! empty ( $result )) {
		$condition = [ 
				'user_id' => $user 
		];
		$query = "UPDATE `user_rights_match` SET `rights_id` = '0',rights_insert_time=now() WHERE `user_id` = :user_id;";
		$result = $user_edit->query_result ( $query, $condition );
	}
	foreach ( $rights as $val ) {
		if ($val > 0) {
			
			$condition = [ 
					'rights_id' => $val,
					'user_id' => $user 
			];
			
			$query = 'insert into user_rights_match (rights_id, user_id, rights_insert_time) values (:rights_id, :user_id, now());';
			$result = $user_edit->query_result ( $query, $condition );
		}
	}
	
	if (isset ( $group_import )) {
		$condition = [ 
				'group_id' => $group_import,
				'user_id' => $user 
		];
		$query = 'UPDATE `group_user_match` SET `group_id` = :group_id WHERE `user_id` = :user_id;';
		$result = $user_edit->query_result ( $query, $condition );
	}
	if ($result == 1) {
		echo 'Rights Updated successfully';
	} else {
		if ($result != 0) {
			echo 'Error: ' . $result;
		}
		echo 'Rights Updated successfully';
	}
}

