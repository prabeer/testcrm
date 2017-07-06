<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
$project_id_main = $_POST ['project_id'];
$project_id = encryptor ( 'decrypt', $project_id_main );
$testcase_id = $_POST ['sno'];
//print_r($testcase_id);
//echo "<br>".$project_id;
$j = 0;
$i = 0;
if (is_array ( $testcase_id ) && ! is_empty ( $project_id ) && count($testcase_id) > 0) {
	$testcase = new database ( 'EDIT' );
	$testcase_select = new database ( 'VIEW' );
	foreach ( $testcase_id as $val ) {
		$condition = [ 
				'testcase_id' => $val,
				'device_id' => $project_id 
		];
		$query = "select testcase_status from testcase_for_device where testcase_id = :testcase_id and device_id = :device_id;";
		$s = $testcase_select->query_result ( $query, $condition );
		if (count ( $s ) == 0) {
			$query = "insert into testcase_for_device (testcase_id, device_id, testcase_status, testcase_status_change_datetime) values (:testcase_id, :device_id, 0, now());";
			$r = $testcase->query_result ( $query, $condition );
			echo $r;
			//break;
			if ($r != 1) {
				echo 'Insert Failed';
				break;
			} else {
				$i ++;
				// echo 'Insert Success';
			}
		} else {
			$j ++;
		}
	}
redirect ( '../selectTestcase.php?f=' . $j . '&p=' . $i .'&pr='.$project_id_main);
	echo '<b>' . $j . '</b> Testcase update failed<hr>';
	echo '<b>' . $i . '</b> Testcases updated successfully';
} else {
	redirect ( '../selectTestcase.php'.'?pr='.$project_id_main );
}