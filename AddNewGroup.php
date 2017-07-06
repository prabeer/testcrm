<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';	?>
	<?php
	/*
	 * 1. Import from group is pending.
	 * 2.
	 */
	?>

<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Add Group</h2>
		<div class="row">
			<div
				class="module-wrapper masonry-item col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Group Details</h3>
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
										<form action="groupFormSubmit.php" method="post"
											enctype="multipart/form-data" id="group_form">
											<div class="form-group">
												<label class="col-sm-3 control-label">Select Type:</label>
												<div class="col-sm-9">
												<?php
												$project_view = new database ( 'VIEW' );
												$query = 'select S_NO, group_name from main_group_catagory;';
												$result = $project_view->query_result ( $query );
												?>
													<select class="chosen form-control"
														data-placeholder="Choose a Group Type"
														style="width: 240px;" name="group_type" id="group_type">
														<option value="">Please select</option>
														<?php foreach ($result as $grp){?>
														<option value="<?php echo $grp['S_NO'];?>"><?php echo $grp['group_name'];?></option>
														<?php }?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Import From Other
													Groups:</label>
												<div class="col-sm-9">
													<select class="chosen form-control"
														data-placeholder="Choose a Group Name"
														style="width: 240px;" name="group_name" id="group_name">
														<option value="">Please select</option>
													<?php
													
													$query = "select `s.no` S_NO,user_group_name from group_details;";
													
													$result_data = $project_view->query_result ( $query );
													foreach ( $result_data as $val ) {
														echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_group_name'] . "</option>";
													}
													
													?>

													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label">Group Name:</label>
												<div class="col-sm-9">
													<input type="text" name="newgroup_name"
														class="form-control" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Group Description</label>
												<div class="col-sm-9">
													<textarea rows="6" cols="40" name="group_description"
														class="form-control"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Group Icon</label>
												<div class="col-sm-9">
													<input type="file" name="group_image" />

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label"></label>
												<div class="col-sm-9">
													<button class="btn btn-warning" data-toggle="modal"
														data-target="#modal-new-project" type="reset">Cancel</button>
													&nbsp&nbsp&nbsp&nbsp
													<button class="btn btn-success" data-toggle="modal"
														data-target="#modal-new-project" type="button"
														id="form_save">Save</button>
												</div>
											</div>
									
									</div>
								</div>

							</div>

						</div>
				
				</section>
			</div>





			<div
				class="module-wrapper masonry-item col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Group Rights</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-1" aria-expanded="false"
									aria-controls="content-1"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-1">
							<div class="module-content-inner no-padding-bottom">
								<div class="table-responsive">
								<?php
								$project_view = new database ( 'VIEW' );
								$user_rights_type = "%";
								$condition = [ 
										'user_right_type' => $user_rights_type 
								];
								$query = 'SELECT user_right_name, user_right_details,`s.no`,user_right_type FROM rights_details ;';
								$result_data = $project_view->query_result ( $query, $condition );
								if (is_array ( $result_data )) {
									// $_SESSION ['CurrentProject'] = $title;
									// echo '<script>window.location.href = "createProject2.php"</script>';
									?>
								<div id="list">
								<?php
									
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
									foreach ( $result_data as $data ) {
										$i ++;
										echo "		<tr>\n";
										echo "			<td>" . $i . "</td>\n";
										echo "			<td>" . $data ['user_right_type'] . "</td>\n";
										echo "			<td>" . $data ['user_right_name'] . "</td>\n";
										echo "			<td>" . $data ['user_right_details'] . "</td>\n";
										echo "			<td> <input type='checkbox' id='rights_id'  name='rights[]' value='" . $data ['s.no'] . "' class='form-control'></td>\n";
										echo "		</tr>";
									}
									
									echo "	</tbody>\n";
									echo "</table>";
									echo "</form>";
									$project_view->conn_close ();
								}
								?>
							</div>

								</div>

							</div>

						</div>
				
				</section>

			</div>



			</section>

		</div>
	</div>
</div>


<?php include_once 'footer.php';?>