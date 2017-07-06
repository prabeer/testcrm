<?php
$display_flag = 0;
$project_view = new database ( 'VIEW' );
/*
if (! is_empty ( $_GET ['pr'] )) {
	
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
}*/

?>

<h2 class="view-title">Modify Inventry</h2>
<div class="row">
	<div
		class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<section class="module">
			<div class="module-inner">
				<div class="module-heading">
					<h3 class="module-title">Inventry Details</h3>
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
									<?php
									
									if ($display_flag == 0) {
										?>
										<form action="inventryInsert.php" method="post"
									enctype="multipart/form-data" id="inventry_form">
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Type:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Inventry Type"
												style="width: 240px;" name="inventry_type">
												<option value="">Please select</option>
												<option value="Project" selected>Project</option>
												<option value="Test Instruments">Test Instruments</option>
												<option value="Misc">Misc</option>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Project:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Project..." style="width: 240px;"
												name="project">
												<option value="">Please select</option>
														<?php
										$q = 'select `s.no` S_NO,project_topic from  project_details';
										$result = $project_view->query_result ( $q );
										
										foreach ( $result as $val ) {
											echo "<option value=" . $val ['S_NO'] . ">" . $val ['project_topic'] . "</option>";
										}
										$project_view->conn_close ();
										?>
														

													</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Inventry Description</label>
										<div class="col-sm-9">
											<textarea rows="6" cols="40"
												style="border: solid lightgrey 1px;"
												name="inventry_description"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Inventry Image</label>
										<div class="col-sm-9">
											<input type="file" name="inventry_image" />

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
								</form>
							</div>
									<?php
									} else {
										?>
									

<div class="form-group">
								<label class="col-sm-3 control-label">Select Type:</label>
								<div class="col-sm-9">
			<?php echo 'Project';?>
		</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Select Project:</label>
								<div class="col-sm-9">
			<?php
										if ($project != "") {
											$query = 'select project_topic, project_description from project_details where `s.no` = :s_no;';
											$condition = [ 
													's_no' => $project 
											];
											
											$res = $project_view->query_result ( $query, $condition );
											echo $res [0] ['project_topic'];
											$project_description = $res [0] ['project_description'];
										}
										
										?>
		</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Inventry Description</label>
								<div class="col-sm-9">
			<?php echo $project_description;?>
		</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Inventry Image</label>
								<div class="col-sm-9">
									<input type="file" name="inventry_image" />

								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label"></label>
								<div class="col-sm-9">
									<button class="btn btn-success" data-toggle="modal"
										data-target="#modal-new-project" type="button" id="edit">Edit</button>
								</div>
							</div>
							</form>	
										
										<?php
									}
									?>
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
					<h3 class="module-title">Insert Items</h3>
					<ul class="actions list-inline">
						<li><a class="collapse-module" data-toggle="collapse"
							href="#content-12" aria-expanded="false"
							aria-controls="content-12"><span aria-hidden="true"
								class="icon arrow_carrot-up"></span></a></li>
						<li><a class="close-module" href="#"><span aria-hidden="true"
								class="icon icon_close"></span></a></li>
					</ul>
				</div>
				<form action="itemInsert.php" method="post" id="item_form">
					<div class="module-content collapse in" id="content-12">
						<div class="module-content-inner">
							<div class="form-horizontal">

								<div class="form-group">
									<label class="col-sm-3 control-label">Device ID:</label>
									<div class="col-sm-9">
										<button class="btn btn-success" data-toggle="modal"
											data-target="#modal-new-project" id="gen_button"
											type="button">
											<i class="fa fa-plus"></i> Generate Barcode
										</button>
										<br>
										<h4>
											<b>or</b>
											<h4>
												<br>
												<div id="gen_id">
													<input type="text" class="form-control" id="textinput"
														placeholder="Input Barcode" name="barcode">
												</div>
									
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Issue To:</label>
									<div class="col-sm-9">
										<select class="chosen form-control" data-placeholder="User..."
											style="width: 240px;" name="item_user">
											<option value="">Please select</option>
													<?php
													$user_view = new database ( 'VIEW' );
													$q = 'SELECT  `s.no` S_NO, USER_NAME, USER_FIRST_NAME FROM user_details;';
													$result = $user_view->query_result ( $q );
													foreach ( $result as $val ) {
														echo "<option value=" . $val ['S_NO'] . ">" . $val ['USER_NAME'] . "  " . $val ['USER_FIRST_NAME'] . "</option>";
													}
													$user_view->conn_close ();
													?>

												</select>
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
				<div class="col-sm-6"></div>
				<div class="col-sm-3">
					<button type="submit" class="btn btn-success pull-right">Skip</button>
				</div>
				<div class="col-sm-3">
					<button type="submit" class="btn btn-primary pull-right">Next</button>
				</div>
			</div>
	
	</div>
</div>
</section>

</div>


<div class="row">
	<div
		class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<section class="module module-headings">
			<div class="module-inner">
				<div class="module-heading">
					<h3 class="module-title">Project Inventry</h3>
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
								
								echo "<table id=\"datatables-1\" class=\"table table-striped display\">\n";
								echo "	<thead>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "			<th>Edit</th>\n";
								echo "		</tr>\n";
								echo "	</thead>\n";
								echo "	<tfoot>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "			<th>Edit</th>\n";
								echo "		</tr>\n";
								echo "	</tfoot>\n";
								echo "	<tbody>";
								$project_id = encryptor ( 'decrypt', $_GET ['pr'] );
								if (! is_empty ( $project_id )) {
									$catch = new database ( 'VIEW' );
									$condition = [ 
											'inventry_id' => $project_id
									];
									// print_r( $condition);
									$query = "SELECT `Project_Inventry_Name`,`item_add_datetime`,`item_status`, `bar_code`, `Item_Assignment` FROM `Inventry_List` where inventry_id = :inventry_id;";
									$result_data = $catch->query_result ( $query, $condition );
									$catch->conn_close ();
									// print_r($result_data);
									if (! empty ( array_filter ( $result_data ) )) {
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
									} else {
										echo "<tr><td rowspan='5'>No Data Found</td></tr>";
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


