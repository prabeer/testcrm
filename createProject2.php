<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
	<?php
	
	include_once 'sidebar.main.php';
	$display_flag = 0;
	$project_view = new database ( 'VIEW' );
	$project = "";
	$wizard = 0;
	if (isset ( $_GET ['wizard'] )) {
		if ($_GET ['wizard'] == 1) {
			$wizard = 1;
		} else {
			$wizard = 0;
		}
	} else {
		$wizard = 0;
	}
	if (isset ( $_GET ['pr'] )) {
		$project = encryptor ( 'decrypt', ($_GET ['pr']) );
	} else {
		if (isset ( $_SESSION ['project_id'] )) {
			$project = $_SESSION ['project_id'];
		}
		
		$project = "";
	}
	if (! is_empty ( $project )) {
		
		// $project = encryptor ( 'decrypt', $_GET ['pr'] )
		
		if ($project != "" && is_numeric ( $project )) {
			
			$query = 'SELECT bar_code, `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`,  `to_user_Name` FROM `inventry_transaction` where inventry_name = :inventry_name ;';
			$condition = [ 
					'inventry_name' => $project 
			];
			$result = $project_view->query_result ( $query, $condition );
			// echo '<script>alert('.count($result).')</script>';
			if ((is_array ( $result )) && (count ( $result ) > 0)) {
				$display_flag = 1;
				$_SESSION ['project_id'] = $project;
				$_SESSION ['inventry_id'] = $result [0] ['s_no'];
			}
		}
	}
	
	?>
<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Add Inventory</h2>
		<div class="row">
			<?php include_once 'inv_details/inventryDetails.php'; ?>
			<?php include_once 'inv_details/insertInventry.php';?>
		</div>
		</section>
	</div>
</div>
<div class="row">
	<?php include_once 'inv_details/inventryList.php';?>

</div>

</section>

</div>


<?php include_once 'footer.php';?>
