<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
$password = $_POST ['password'];
$re_password = $_POST ['repassword'];
$key = $_POST ['id'];
if (strlen ( $key ) == 128) {
	if ($password === $re_password) {
		$user_db = new database ( 'EDIT' );
		
		$user_view = new database ( 'VIEW' );
		if(!haslength($password)){
			echo 'Invalid Password Length';
			//echo strlen($password);
			//redirect ( 'login_reset.php?p=iv' );
			exit();
		}
		$enc_password = password_hashing ( $password );
	//	echo $enc_password;
		$condition = [ 
				'password' => $enc_password,
				'akey' => $key 
		];
		$query = "update userid_details set user_status = '1', password = :password  where akey = :akey";
		
		$result = $user_db->query_result ( $query, $condition );
		echo $result;
		if ($result == 1) {
			echo 'pass';
			redirect ( 'login.php?p=sc' );
			exit ();
		} else {
			
			redirect ( 'login.php?p=iv' );
			exit ();
		}
	} else {
		
		redirect ( 'login.php?p=nm' );
		exit ();
	}
}else{
	
	redirect ( 'login.php?p=ki' );
	exit ();
}