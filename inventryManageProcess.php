<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$comments = "";
$form_type = "";
$inventry_type = "";
$user_id = "";
$new_user_id = "";
$item_id = "";
$user_viewdb = new database ( 'VIEW' );
function user_bardecode($barcode) {
	$condition = [ 
			'user_bar_code' => $barcode 
	];
	$query = "SELECT `s.no` S_NO FROM `user_details` where `user_bar_code` = :user_bar_code;";
	$user_result = $user_viewdb->query_result ( $query, $condition );
	
	$user_id = $user_result [0] ['S_NO'];
	return $user_id;
}
function item_bardecode($barcode) {
	$condition = [ 
			'bar_code' => $barcode 
	];
	$query = "select `s.no` S_NO_ITEM from item_details where bar_code = :bar_code;";
	$query .= "where bar_code = :bar_code;  ";
	$result_barcode = $user_viewdb->query_result ( $query, $condition );
	$item_id = $result_barcode [0] ['S_NO_ITEM'];
	return $item_id;
}
//MySQL DB Version.
$query = "SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(VERSION(),' - ',1),' . ',2) as mysql_version;";
$ver_a = $user_viewdb->query_result ( $query );
$ver = $ver_a [0] ['mysql_version'];
////
if (isset ( $_POST ['form_type'] ) && ! is_empty ( $_POST ['form_type'] )) {
	$form_type = xssafe ( $_POST ['form_type'] );
}

if ($form_type == 'barcode-form') {
	if (isset ( $_POST ['user_barcode'] ) && ! is_empty ( $_POST ['user_barcode'] )) {
		$user_id = user_bardecode ( $_POST ['user_barcode'] );
	}
	if (isset ( $_POST ['new_user_barcode'] ) && ! is_empty ( $_POST ['new_user_barcode'] )) {
		$new_user_id = user_bardecode ( $_POST ['new_user_barcode'] );
	}
	if (isset ( $_POST ['item_barcode'] ) && ! is_empty ( $_POST ['item_barcode'] )) {
		$item_id = item_bardecode ( $_POST ['item_barcode'] );
	}
} elseif ($form_type == 'user-form') {
	if (isset ( $_POST ['item_barcode'] ) && ! is_empty ( $_POST ['item_barcode'] )) {
		$item_id = item_bardecode ( $_POST ['item_barcode'] );
	}
	if (isset ( $_POST ['item_user'] ) && ! is_empty ( $_POST ['item_user'] )) {
		$user_id = $_POST ['item_user'];
	}
	if (isset ( $_POST ['new_item_user'] ) && ! is_empty ( $_POST ['new_item_user'] )) {
		$new_user_id = $_POST ['new_item_user'];
	}
}
if (isset ( $_POST ['inventry_type'] )) {
	$inventry_type = $_POST ['inventry_type'];
	if (! is_empty ( $inventry_type )) {
		
		if ($inventry_type == 'issue') {
			if (! is_empty ( $user_id ) && ! is_empty ( $item_id )) {
				
				if ($ver > 5.6) {
					$query = 'select item_assigned_datetime, any_value(item_id) item_id, any_value(item_assigned_to) item_assigned_to, any_value(Item_assigned_by) Item_assigned_by from item_assignment where item_id = :item_id group by item_assigned_datetime order by item_assigned_datetime desc;';
				} else {
					$query = 'select item_assigned_datetime, item_id , item_assigned_to, Item_assigned_by from item_assignment where item_id = :item_id group by item_assigned_datetime order by item_assigned_datetime desc;';
				}
				$condition = [ 
						'item_id' => $item_id 
				];
				$result_data = $user_viewdb->query_result ( $query, $condition );
				if (count ( $result_data ) >= 1) {
					if (($result_data [0] ['item_assigned_to']) == 1) {
						$insert = 1;
					} else {
						$error = 'Item not in inventry';
					}
				} else {
					$error = 'Item not in inventry';
				}
			} else {
				$error = 'User/Item Cannot be empty';
			}
		} elseif ($inventry_type == 'transfer') {
			if (! is_empty ( $user_id ) && ! is_empty ( $item_id ) && ! is_empty ( $new_user_id )) {
				if ($ver > 5.6) {
					$query = 'select item_assigned_datetime, any_value(item_id) item_id, any_value(item_assigned_to) item_assigned_to, any_value(Item_assigned_by) Item_assigned_by from item_assignment where item_id = :item_id order by item_assigned_datetime desc;';
				} else {
					$query = 'select item_assigned_datetime, item_id , item_assigned_to, Item_assigned_by from item_assignment where item_id = :item_id  order by item_assigned_datetime desc;';
				}
				$condition = [ 
						'item_id' => $item_id 
				];
				$result_data = $user_viewdb->query_result ( $query, $condition );
				if (count ( $result_data ) > 0) {
					if (($result_data [0] ['item_assigned_to']) == $user_id) {
						$query = 'SELECT `s.no` FROM user_details where `s.no` = :user_id;';
						$condition = [ 
								'user_id' => $user_id 
						];
						$result_data = $user_viewdb->query_result ( $query, $condition );
						if (count ( $result_data > 0 )) {
							$insert = 1;
						} else {
							$error = 'new user doesnt exists';
						}
					} else {
						$error = 'Item not exists with the issuer';
					}
				} else {
					$error = 'Item is not added';
				}
			} else {
				$error = 'User/Item Cannot be empty';
			}
		} elseif ($inventry_type == 'return') {
			if ($ver > 5.6) {
				$query = 'select item_assigned_datetime, any_value(item_id) item_id, any_value(item_assigned_to) item_assigned_to, any_value(Item_assigned_by) Item_assigned_by from item_assignment where item_id = :item_id order by item_assigned_datetime desc;';
			} else {
				$query = 'select item_assigned_datetime, item_id , item_assigned_to, Item_assigned_by from item_assignment where item_id = :item_id  order by item_assigned_datetime desc;';
			}
			$condition = [ 
					'item_id' => $item_id 
			];
			$result_data = $user_viewdb->query_result ( $query, $condition );
			if (count ( $result_data ) > 0) {
				if (($result_data [0] ['item_assigned_to']) > 1) {
					$insert = 1;
				} else {
					$error = 'Item is lost or is already in inventry';
				}
			} else {
				$error = 'Item not in inventry';
			}
		} elseif ($inventry_type == 'lost') {
			if ($ver > 5.6) {
				$query = 'select item_assigned_datetime, any_value(item_id) item_id, any_value(item_assigned_to) item_assigned_to, any_value(Item_assigned_by) Item_assigned_by from item_assignment where item_id = :item_id order by item_assigned_datetime desc;';
			} else {
				$query = 'select item_assigned_datetime, item_id , item_assigned_to, Item_assigned_by from item_assignment where item_id = :item_id  order by item_assigned_datetime desc;';
			}
			$condition = [ 
					'item_id' => $item_id 
			];
			$result_data = $user_viewdb->query_result ( $query, $condition );
			if (count ( $result_data ) > 0) {
				if (($result_data [0] ['item_assigned_to']) != 0) {
					$insert = 1;
				} else {
					$error = 'Item is already lost';
				}
			} else {
				$error = 'Item not in inventry';
			}
		}
	}
}

if (isset ( $_POST ['comments'] )) {
	$comments = $_POST ['comments'];
}

if (! is_empty ( $user_barcode ) && ! is_empty ( $item_barcode )) {
	$user_viewdb = new database ( 'VIEW' );
	$condition = [ 
			'bar_code' => $item_barcode 
	];
	$query = "select `s.no` S_NO_ITEM from item_details where bar_code = :bar_code;";
	$query .= "where bar_code = :bar_code;  ";
	$result_barcode = $user_viewdb->query_result ( $query, $condition );
	
	if ((is_array ( $result_barcode )) && (count ( $result_barcode ) == 1)) {
		if ($user_barcode == 'Lost') {
			$user_id = '0';
		} elseif ($user_barcode == 'return') {
			$user_id = '0';
		} else {
			$condition = [ 
					'user_bar_code' => $user_barcode 
			];
			$query = "SELECT `s.no` S_NO FROM `user_details` where `user_bar_code` = :user_bar_code;";
			$user_result = $user_viewdb->query_result ( $query, $condition );
			
			$user_id = $user_result [0] ['S_NO'];
		}
		$user_editdb = new database ( 'EDIT' );
		$condition = [ 
				'item_id' => xssafe ( $result_barcode [0] ['S_NO_ITEM'] ),
				'item_assigned_to' => xssafe ( $user_id ),
				'Item_assigned_by' => xssafe ( $_SESSION ['userid'] ),
				'assignment_comments' => xssafe ( $comments ) 
		];
		// print_r($condition);
		$query = 'insert into item_assignment (item_id, item_assigned_to, Item_assigned_by, item_assigned_datetime, assignment_comments)';
		$query .= ' values (:item_id, :item_assigned_to, :Item_assigned_by, now(), :assignment_comments);';
		$assgn_insert = $user_editdb->query_result ( $query, $condition );
		// print_r($assgn_insert);
		// $assgn_insert = 1;
		if ($assgn_insert == 1) {
			
			// print_r($condition);
			$query = "SELECT `item_id`,
    date_format(`item_assigned_datetime`, '%d-%m-%Y %H:%i') item_assigned_datetime,
    `Item_assigned_by`,
    `item_assigned_to`,
    `item_assign_status`,
    `assignment_comments`,
    `item_name`,
    `bar_code`,
    `to_user_Name`,
    `by_user_Name`
FROM `inventry_transaction` where date(item_assigned_datetime) = curdate() ;";
			$result_html = $user_viewdb->query_result ( $query );
			$j = 0;
			foreach ( $result_html as $results ) {
				
				$c = count ( $results );
				$i = 0;
				if ($i < $c) {
					foreach ( $results as $key => $val ) {
						$result [$i] = $val;
						$i ++;
					}
				}
				$result_html [$j] = $result;
				$j ++;
			}
			if (count ( $result_html ) > 0) {
				echo (json_encode ( $result_html ));
			} else {
				$error = "No data Found";
				echo $error;
			}
		} else {
			$error = 'unable to insert';
			echo $error;
		}
	}
} else {
	$error = 'invalid barcodes';
}
	


/*
if (($user_barcode != "") && ($item_barcode != "")) {
	$user_viewdb = new database ( 'VIEW' );
	$condition = [ 
			'bar_code' => $item_barcode 
	];
	$query = "select `s.no` S_NO_ITEM from item_details where bar_code = :bar_code;";
	$query .= "where bar_code = :bar_code;  ";
	
	$result_barcode = $user_viewdb->query_result ( $query, $condition );
	
	
	if ((is_array ( $result_barcode )) && (count ( $result_barcode ) == 1)) {
		$condition = [ 
				'user_bar_code' => $user_barcode 
		];
		$query = "SELECT `s.no` S_NO FROM `user_details` where `user_bar_code` = :user_bar_code;";
		$user_result = $user_viewdb->query_result ( $query, $condition );
		
		$user_editdb = new database ( 'EDIT' );
		$condition = [ 
				'item_id' => xssafe ( $result_barcode [0] ['S_NO'] ),
				'item_assigned_to' => xssafe ( $user_result [0] ['S_NO'] ),
				'Item_assigned_by' => xssafe ( $_SESSION ['userid'] ),
				'comments' => xssafe ( $comments ) 
		];
		$query = 'insert into item_assignment (item_id, item_assigned_to, Item_assigned_by, item_assigned_datetime, assignment_comments)';
		$query .= ' values (:item_id, :item_assigned_to, :Item_assigned_by, now(), :assignment_comments);';
		$assgn_insert = $user_editdb->query_result($query,$condition);
		if($assgn_insert == 1){
			$result = 'Assign Complete';
			/*$condition = [
					'S_NO' => 
			];
					$query = "SELECT   `Project_Inventry_Name`,  `item_add_datetime`, `item_status`, `bar_code`, `Item_Assignment` FROM `Inventry_List` where `S_NO` = :S_NO;";
					
			$result_html = '';*/
/*
		}
	} else {
		$error = 'invalid barcodes';
	}
	$user_viewdb->conn_close ();
} elseif (($item_user != "") && ($item_barcode != "")) {
}
*/
