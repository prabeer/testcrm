<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
if ((! is_empty ( $_POST ['username'] )) && (! is_empty ( $_POST ['first_name'] )) && (! is_empty ( $_POST ['email'] ))) {
	
	$username = $_POST ['username'];
	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$email = $_POST ['email'];
	$group_id = $_POST ['jobs'];
	$country = $_POST ['country'];
	$qq = $_POST ['qq'];
	$skype = $_POST ['skype'];
	$description = $_POST ['description'];
	
	$user_select = new database ( 'VIEW' );
	$query = 'select count(user_name) count from  user_details where user_name = :user_name;';
	$conditions = [ 
			'user_name' => $username 
	];
	$count_result = $user_select->query_result ( $query, $conditions );
	if ($count_result [0] ['count'] != 0) {
		redirect ( 'AddNewUser.php?q=fail' );
		exit ();
	} else {
		$a = rand ( 0, 22 );
		$barcode = strtoupper ( substr ( md5 ( date ( 'dmYHis' ) . rand ( 10000, 99999 ) ), $a, 10 ) );
		
		$user_db = new database ( 'EDIT' );
		$conditions = [ 
				'user_name' => $username,
				'user_first_name' => $first_name,
				'user_designation' => $group_id,
				'user_description' => $description,
				'user_creation_id' => $_SESSION ['userid'],
				'user_last_name' => $last_name,
				'user_type' => 'Human',
				'user_location' => $country,
				'user_bar_code' => $barcode,
				'user_email' => $email 
		];
		
		$query = 'INSERT INTO user_details (user_name, user_first_name, user_designation,  user_description, user_create_time, user_creation_id, user_last_name, 
		user_type, user_location, user_bar_code, user_email) VALUES	(:user_name, :user_first_name, :user_designation,  :user_description, now(), :user_creation_id, :user_last_name,  
		:user_type, :user_location, :user_bar_code, :user_email);';
		$result_data = $user_db->query_result ( $query, $conditions );
		 print_r($result_data);
		if ($result_data == 1) {
			$akey = key_generator();
			$query = "INSERT INTO userid_details (username, user_status, user_attempts,akey) values (:username, '0','0',:akey);";
			$conditions = [ 
					'username' => $username,
					'akey' => $akey
			];
			$result_data = $user_db->query_result ( $query, $conditions );
			// print_r($result_data);
			if ($group_id != "") {
				$user_view = new database ( 'VIEW' );
				$query = 'select max(`s.no`) S_NO from user_details';
				$result_data = $user_view->query_result ( $query );
				// print_r ( $result_data );
				$user_id = $result_data [0] ['S_NO'];
				
				$conditions = [ 
						
						'user_id' => $user_id,
						'group_id' => $group_id 
				];
				
				$query = 'insert into group_user_match (user_id, group_id) values (:user_id, :group_id);';
				$result_data = $user_db->query_result ( $query, $conditions );
			}
			$user_db->conn_close ();
			
			if ($result_data == 1) {
				header ( 'Location: AddNewUser.php?q=save' );
			} else {
				header ( 'Location: AddNewUser.php?q=fail1' );
			}
		} else {
			header ( 'Location: AddNewUser.php?q=fail2' );
		}
	}
} else {
	header ( 'Location: AddNewUser.php?q=fail3' );
}


