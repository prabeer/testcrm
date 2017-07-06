<?php
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
if (isset ( $_POST ['group_name'] )) {
	$grp_name = $_POST ['group_name'];
} else {
	$grp_name = 0;
}
if (isset ( $_POST ['user_name'] )) {
	$user_id = $_POST ['user_name'];
} else {
	$user_id = 0;
}

if (isset ( $_POST ['group_type'] )) {
	$user_rights_type = $_POST ['group_type'];
} else {
	$user_rights_type = "0";
}
$project_view = new database ( 'VIEW' );

$query = 'SELECT user_right_name, user_right_details,`s.no` S_NO,user_right_type FROM rights_details;';
$result_data = $project_view->query_result ( $query );

if (is_array ( $result_data )) {
	// $_SESSION ['CurrentProject'] = $title;
	// echo '<script>window.location.href = "createProject2.php"</script>';
	
	echo "<table id=\"datatables-1\" class=\"table table-striped display\">\n";
	echo "	<thead>\n";
	echo "		<tr>\n";
	echo "			<th>S.No</th>\n";
	echo "			<th>Rights Type</th>\n";
	echo "			<th>Rights Name</th>\n";
	echo "			<th>Rights Description</th>\n";
	echo "			<th>Mark</th>\n";
	echo "		</tr>\n";
	echo "	</thead>\n";
	echo "	<tfoot>\n";
	echo "		<tr>\n";
	echo "			<th>S.No</th>\n";
	echo "			<th>Rights Type</th>\n";
	echo "			<th>Rights Name</th>\n";
	echo "			<th>Rights Description</th>\n";
	echo "			<th>Mark</th>\n";
	echo "		</tr>\n";
	echo "	</tfoot>\n";
	echo "	<tbody>";
	$i = 0;
	
	if ($user_rights_type !== "0") {
		//echo $user_rights_type;
		foreach ( $result_data as $data ) {
			$i ++;
			echo "		<tr>\n";
			echo "			<td>" . $i . "</td>\n";
			echo "			<td>" . $data ['user_right_type'] . "</td>\n";
			echo "			<td>" . $data ['user_right_name'] . "</td>\n";
			echo "			<td>" . $data ['user_right_details'] . "</td>\n";
			if ($data ['user_right_type'] == $user_rights_type) {
				echo "<td> <input type='checkbox' id='rights_id' name='rights[]' checked value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
			} else {
				echo "<td> <input type='checkbox' id='rights_id' name='rights[]' value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
			}
			echo "		</tr>";
		}
		
		echo "	</tbody>\n";
		echo "</table>";
		echo "</form>";
	} elseif ($grp_name > 0) {
		
		$condition = [ 
				'group_id' => $grp_name 
		];
		$query = 'SELECT rights_id, group_id  FROM group_rights_match where group_id = :group_id order by rights_id asc;';
		$result_data2 = $project_view->query_result ( $query, $condition );
		
		foreach ( $result_data as $data ) {
			$i ++;
			echo "		<tr>\n";
			echo "			<td>" . $i . "</td>\n";
			echo "			<td>" . $data ['user_right_type'] . "</td>\n";
			echo "			<td>" . $data ['user_right_name'] . "</td>\n";
			echo "			<td>" . $data ['user_right_details'] . "</td>\n";
			$m = 0;
			foreach ( $result_data2 as $grp ) {
				if ($grp ['rights_id'] == $data ['S_NO']) {
					echo "<td> <input type='checkbox' id='rights_id' name='rights[]' checked value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
					$m = 1;
				}
			}
			if ($m == 0) {
				echo "<td>  <input type='checkbox' id='rights_id' name='rights[]' value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
			}
			echo "		</tr>";
		}
	} elseif ($user_id > 0) {
		$condition = [ 
				'user_id' => $user_id 
		];
		$query = "SELECT rights_id, user_id  FROM user_rights_match where user_id = :user_id and rights_id <> '0';";
		$result_data2 = $project_view->query_result ( $query, $condition );
		
		foreach ( $result_data as $data ) {
			$i ++;
			echo "		<tr>\n";
			echo "			<td>" . $i . "</td>\n";
			echo "			<td>" . $data ['user_right_type'] . "</td>\n";
			echo "			<td>" . $data ['user_right_name'] . "</td>\n";
			echo "			<td>" . $data ['user_right_details'] . "</td>\n";
			$m = 0;
			foreach ( $result_data2 as $grp ) {
				if ($grp ['rights_id'] == $data ['S_NO']) {
					echo "<td> <input type='checkbox' id='rights_id' name='rights[]' checked value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
					$m = 1;
				}
			}
			if ($m == 0) {
				echo "<td>  <input type='checkbox' id='rights_id' name='rights[]' value='" . $data ['S_NO'] . "' class='form-control'></td>\n";
			}
			echo "		</tr>";
		}
	}
}

$project_view->conn_close ();

?>


