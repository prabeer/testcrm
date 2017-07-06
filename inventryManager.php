<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
	<?php
	
	include_once 'sidebar.main.php';
	$display_flag = 0;
	$project_view = new database ( 'VIEW' );
	if (isset ( $_GET ['pr'] )) {
		
		// $project = encryptor ( 'decrypt', $_GET ['pr'] );
		$project = ($_GET ['pr']);
		
		if ($project != "" && is_numeric ( $project )) {
			
			$query = 'select `s.no` s_no,inventry_name, inventry_description, inventry_type, inventry_status,  inventry_insert_date, inventry_insert_user from inventry_details where inventry_name = :inventry_name;';
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
		<h2 class="view-title">Manage Inventory</h2>
		<div class="row">
			<div
				class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Issue Inventory Using Barcode</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-12" aria-expanded="false"
									aria-controls="content-12"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>
						</div>

						<div class="module-content collapse in" id="content-12">
							<div class="module-content-inner">
								<div class="form-horizontal">
									<div id="target">
										<form action="inventryManageProcess.php" method="post"
											enctype="multipart/form-data" id="barcode-form">

											<div class="form-group">
												<label class="col-sm-3 control-label">Item Barcode:</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="textinput"
														placeholder="Item Barcode" name="item_barcode">
														<input type="hidden" class="form-control" value="barcode-form"
														 name="form_type">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Select Status:</label>
												<div class="col-sm-9">
													<select class="chosen form-control"
														data-placeholder="Choose a Inventry Type"
														style="width: 240px;" name="inventry_type"
														id="inventry_type">
														<option value="">Please select</option>
														<option value="issue" selected>Issue from Inventory</option>
														<option value="transfer">Transfer between users</option>
														<option value="return">Return to Inventory</option>
														<option value="lost">Device Lost</option>

													</select>
												</div>
											</div>
											<div id="inv_field">
												<div class="form-group">
													<label class="col-sm-3 control-label">User Barcode:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="textinput"
															placeholder="User Barcode" name="user_barcode">
													</div>
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label">Comments</label>
												<div class="col-sm-9">
													<textarea rows="6" cols="40"
														style="border: solid lightgrey 1px;" name="comments"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label"></label>
												<div class="col-sm-9">
													<button class="btn btn-warning" data-toggle="modal"
														data-target="#modal-new-project" type="reset">Cancel</button>
													&nbsp&nbsp&nbsp&nbsp
													<button class="btn btn-success" data-toggle="modal"
														data-target="#modal-new-project" type="submit"
														id="save_barcode">Save</button>
												</div>
											</div>
										</form>
									</div>


								</div>

							</div>

						</div>
				
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Issue Item By User Id</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-12" aria-expanded="false"
									aria-controls="content-12"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>
						</div>
						<form action="inventryManageProcess.php" method="post"
							id="user-form">
							<div class="module-content collapse in" id="content-12">
								<div class="module-content-inner">
									<div class="form-horizontal">

										<div class="form-group">
											<label class="col-sm-3 control-label">Device ID:</label>
											<div class="col-sm-9">

												<div id="gen_id">
													<input type="text" class="form-control" id="textinput"
														placeholder="Input Barcode" name="item_barcode">
														<input type="hidden" class="form-control" value="user-form"
														 name="form_type">
												</div>

											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Select Status:</label>
											<div class="col-sm-9">
												<select class="chosen form-control"
													data-placeholder="Choose a Inventry Type"
													style="width: 240px;" name="inventry_type2"
													id="inventry_type2">
													<option value="">Please select</option>
													<option value="issue" selected>Issue from Inventory</option>
													<option value="transfer">Transfer between users</option>
													<option value="return">Return to Inventory</option>
													<option value="lost">Device Lost</option>

												</select>
											</div>
										</div>
										<div id="inv_field2">
											<div class="form-group">
												<label class="col-sm-3 control-label">Issue To:</label>
												<div class="col-sm-9">
													<select class="chosen form-control"
														data-placeholder="User..." style="width: 240px;"
														name="item_user">
														<option value="">Please select</option>
													<?php
													$user_view = new database ( 'VIEW' );
													$q = 'SELECT  `s.no` S_NO, USER_NAME, USER_FIRST_NAME FROM user_details;';
													$result = $user_view->query_result ( $q );
													$opts = "";
													foreach ( $result as $val ) {
														$opts .= "<option value=" . $val ['S_NO'] . ">" . $val ['USER_NAME'] . "  " . $val ['USER_FIRST_NAME'] . "</option>";
													}
													echo $opts;
													$user_view->conn_close ();
													?>

												</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Issue Comments</label>
											<div class="col-sm-9">
												<textarea rows="3" cols="40" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-9">
												<button class="btn btn-warning" data-toggle="modal"
													data-target="#modal-new-project" type="reset">Cancel</button>
												&nbsp&nbsp&nbsp&nbsp
												<button class="btn btn-success" data-toggle="modal"
													data-target="#modal-new-project" type="submit">Save</button>
											</div>
										</div>
									</div>
						
						</form>

					</div>
			
			</div>
		</div>
	</div>
	</section>
</div>
</div>
<div class="row">
	<div
		class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<section class="module module-headings">
			<div class="module-inner">
				<div class="module-heading">
					<h3 class="module-title">Device Issue Report</h3>
					<ul class="actions list-inline">
						<li><a class="collapse-module" data-toggle="collapse"
							href="#content-1" aria-expanded="false" aria-controls="content-1"><span
								aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
						<li><a class="close-module" href="#"><span aria-hidden="true"
								class="icon icon_close"></span></a></li>
					</ul>

				</div>

				<div class="module-content collapse in" id="content-1">
					<div class="module-content-inner no-padding-bottom">
						<div class="table-responsive">

							<div id="list">
								<?php
								
								echo "<table id=\"issue_log\" class=\"table table-striped display\">\n";
								echo "	<thead>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device/Project Name</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "			<th>Comments</th>\n";
								echo "		</tr>\n";
								echo "	</thead>\n";
								echo "	<tfoot>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device/Project Name</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "			<th>Comments</th>\n";
								echo "		</tr>\n";
								echo "	</tfoot>\n";
								
								echo "	<tbody>";
								if (isset ( $_SESSION ['project_id'] )) {
									$condition = [ 
											'inventry_id' => $_SESSION ['inventry_id'] 
									];
									$query = 'SELECT `Project_Inventry_Name`,	`item_add_datetime`,`item_status`, `bar_code`, `Item_Assignment` FROM `Inventry_List` where inventry_id = :inventry_id ;';
									$result_data = $project_view->query_result ( $query, $condition );
									foreach ( $result_data as $data ) {
										echo "		<tr>\n";
										echo "			<td>" . $data ['bar_code'] . "</td>\n";
										echo "			<td>" . $data ['Project_Inventry_Name'] . "</td>\n";
										echo "			<td>" . $data ['Item_Assignment'] . "</td>\n";
										echo "			<td>" . $data ['item_add_datetime'] . "</td>\n";
										echo "			<td>" . $data ['item_status'] . "</td>\n";
										echo "			<td>  <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"\n";
										echo "				title=\"\" data-original-title=\"Edit\"><i class=\"fa fa-pencil\"></i></a>\n";
										echo "				  <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"\n";
										echo "				title=\"\" data-original-title=\"Delete\"><i class=\"fa fa-trash\"></i></a></td>\n";
										echo "		</tr>";
									}
									
									echo "	</tbody>\n";

									echo "</table>";
								}
								$project_view->conn_close ();
								?>
							</div>

						</div>

					</div>

				</div>
		
		</section>

	</div>

</div>

</section>

</div>


<?php include_once 'footer.php';?>
