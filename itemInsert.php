<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
$ins_flag = 1;
if (isset ( $_SESSION )) {
	$inventry_id = $_SESSION ['inventry_id'];
	$inventry_name = $_SESSION['project_id'];
} else {
	$ins_flag = 0;
	$error =  'No Inventry Selected';
}

if (isset ( $_POST ['barcode'] )) {
	$barcode = $_POST ['barcode'];
	$project_view = new database ( 'VIEW' );
	$condition = [ 
			'barcode' => $barcode 
	];
	$query = 'select count(*) count from item_details where bar_code = :barcode';
	
	$c = $project_view->query_result ( $query, $condition );
	if (($c [0] ['count']) > 0) {
		$ins_flag = 0;
		$error =  'barcode already exists';
	}
} else {
	$ins_flag = 0;
	$error =  'barcode is required';
}

if ($ins_flag == 1) {
	
	if ($_POST ['item_user'] == '') {
		$user = '0';
		$item_status = 'In Inventry';
	} else {
		$user = $_POST ['item_user'];
		$item_status = 'Issued';
	}
	$project_db = new database ( 'EDIT' );
	$condition = [ 
			'inventry_id' => $inventry_id,
			'bar_code' => $barcode 
	];
	$query = 'INSERT INTO item_details (inventry_id, bar_code, item_add_datetime, item_status) ';
	$query .= "VALUES (:inventry_id, :bar_code, now(),'ACTIVE');";
	$result_data = $project_db->query_result ( $query, $condition );
	if ($result_data == 1) {
		
		$query = 'select max(`s.no`) s_no from item_details';
		
		$result_data = $project_view->query_result ( $query );
		
		$condition = [ 
				'item_id' => $result_data [0] ['s_no'],
				'item_assigned_to' => $user,
				'Item_assigned_by' => $_SESSION ['userid'],
				'item_assign_status' => $item_status 
		];
		$query = 'INSERT INTO item_assignment (item_id, item_assigned_to, Item_assigned_by, item_assigned_datetime, item_assign_status) ';
		$query .= "VALUES (:item_id, :item_assigned_to,:Item_assigned_by, now(),:item_assign_status);";
		$result_data = $project_db->query_result ( $query, $condition );
		//print_r($result_data);
		if ($result_data == 1) {
			if ($inventry_name != "") {
				$condition = [ 
						'inventry_name' => $inventry_name 
				];
				$query = 'SELECT bar_code, `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`,  `to_user_Name` FROM `inventry_transaction` where inventry_name = :inventry_name ;';
				$sel_result_data = $project_view->query_result ( $query, $condition );
				//print_r($sel_result_data);
				if (is_array ( $sel_result_data )) {
					echo "<table id=\"datatables-1\" class=\"table table-striped display\">\n";
								echo "	<thead>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Device Comments</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "		</tr>\n";
								echo "	</thead>\n";
								echo "	<tfoot>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Device Comments</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "		</tr>\n";
								echo "	</tfoot>\n";
								echo "	<tbody>";
					
					foreach ( $sel_result_data as $data ) {
						echo "		<tr>\n";
											echo "			<td>" . $data ['bar_code'] . "</td>\n";
											echo "			<td>" . $data ['item_name'] . "</td>\n";
											echo "			<td>" . $data ['inv_comments'] . "</td>\n";
											echo "			<td>" . $data ['to_user_Name'] . "</td>\n";
											echo "			<td>" . $data ['item_assigned_datetime'] . "</td>\n";
											echo "			<td>" . $data ['item_assign_status'] . "</td>\n";
											echo "		</tr>";
					}
					
					echo "	</tbody>\n";
					echo "</table>";
				} else {
					echo $sel_result_data;
				}
			} else {
				echo 'inventry id not selected';
			}
			
			$project_view->conn_close ();
		}
	}
} else {
	echo $error;
	
}

?>


