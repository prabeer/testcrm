<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Inventry List</h2>
		<div id="masonry" class="row">
		<?php
		
		$project_view = new database ( 'VIEW' );
		if (! is_empty ( $_GET ['id'] )) {
			$id = $_GET ['id'];
			$inventryid = encryptor ( 'decrypt', $id );
			// echo $inventryid;
			$condition = [ 
					'inventry_name' => $inventryid 
			];
		
			$query = 'SELECT bar_code, `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`, `bar_code`, `to_user_Name` FROM `inventry_transaction` where inventry_name = :inventry_name ;';
			$result_data = $project_view->query_result ( $query, $condition );
			$project_view->conn_close ();
			//print_r($result_data);
			// $project_view->conn_close ();
		} else {
			redirect ( 'projectInventryList.php' );
		}
		?>
			<div
				class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title"><?php
							if (!is_empty( $result_data [0] ['item_name'] )) {
								echo xssafe ( $result_data [0] ['item_name'] );
							}
							?></h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-1" aria-expanded="false"
									aria-controls="content-1"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>
						<?php
						
						if (isset ( $_GET ['id'] )) {
							$id = $_GET ['id'];
							$inventryid = encryptor ( 'decrypt', $id );
							
							// print_r($result_data);
						}
						?>
						<div class="row">
						
							<div class="pull-right">
								<a href="createProject2.php?pr=<?php echo $id;?>" class="btn btn-large btn-success">
									<span style="font-size: medium;"><b>+ Add Items</b></span>

								</a>
							</div>

						</div>
						
						<div class="module-content collapse in" id="content-1">
							<div class="module-content-inner no-padding-bottom">
								<div class="table-responsive">
									<table id="datatables-1" class="table table-striped display">
										<thead>
											<tr>
												<th>Barcode</th>
												<th>Device Name</th>
												<th>Inventry Description</th>
												<th>Issued To</th>
												<th>Entry Date</th>
												<th>Status</th>
												
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Barcode</th>
												<th>Device Name</th>
												<th>Inventry Description</th>
												<th>Issued To</th>
												<th>Entry Date</th>
												<th>Status</th>
												
											</tr>
										</tfoot>
										<tbody>
										<?php
										
										foreach ( $result_data as $data ) {
											echo "		<tr>\n";
											echo "			<td>" . $data ['bar_code'] . "</td>\n";
											echo "			<td>" . $data ['item_name'] . "</td>\n";
											echo "			<td>" . $data ['inv_comments'] . "</td>\n";
											echo "			<td>" . $data ['to_user_Name'] . "</td>\n";
											echo "			<td>" . $data ['item_assigned_datetime'] . "</td>\n";
											echo "			<td>" . $data ['item_assign_status'] . "</td>\n";
											echo "		</tr>";
										}
										?>

										</tbody>
									</table>
								</div>

							</div>

						</div>

					</div>

				</section>

			</div>

		</div>

	</div>

</div>

<?php include_once 'footer.php';?>
<script src="assets/js/forms-chosen.js"></script>
