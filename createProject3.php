<?php
include_once 'head.php';
include_once 'header.main.php';
include_once 'sidebar.main.php';
if (isset ( $_GET ['p'] )) {
	if (! is_empty ( $_GET ['p'] )) {
		$_SESSION ['project_id'] = encryptor ( 'decrypt', $_GET ['p'] );
	}
}
if (is_empty ( $_SESSION ['project_id'] )) {
	redirect ( 'createProject.php' );
}
?>


<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Start Project</h2>
		<div class="row">


			<div
				class="module-wrapper masonry-item col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Add Members</h3>
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
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Type:</label>
										<div class="col-sm-9">
												<?php
												$project_view = new database ( 'VIEW' );
												$query = 'select S_NO, group_name from main_group_catagory;';
												$result = $project_view->query_result ( $query );
												?>
													<select class="chosen form-control"
												data-placeholder="Choose a Group Type" style="width: 240px;"
												name="group_type" id="group_type">
												<option value="">Please select</option>
														<?php foreach ($result as $grp){?>
														<option value="<?php echo $grp['S_NO'];?>"><?php echo $grp['group_name'];?></option>
														<?php }?>
													</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Groups:</label>
										<div class="col-sm-9">
											<div id="group_select">
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
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Select User:</label>
										<div class="col-sm-9">
											<div id="group_user">
												<select class="chosen form-control"
													data-placeholder="Choose a Group Name"
													style="width: 240px;" name="user_name" id="user_name">
													<option value="">Please select</option>
											<?php
											
											$query = "select `s.no` S_NO,user_name from user_details;";
											
											$result_data = $project_view->query_result ( $query );
											foreach ( $result_data as $val ) {
												echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_name'] . "</option>";
											}
											
											?>

													</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Add New Member:</label>
										<div class="col-sm-9">
											<a href="AddNewUser.php">
												<button class="btn btn-success" data-toggle="modal"
													data-target="#modal-new-project">
													<i class="fa fa-plus"></i> Add New Member
												</button>
											</a>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label"></label>
										<div class="col-sm-9">
											<button class="btn btn-warning" data-toggle="modal"
												data-target="#modal-new-project">Cancel</button>
											&nbsp&nbsp&nbsp&nbsp
											<button class="btn btn-success" data-toggle="modal"
												data-target="#modal-new-project" id="add_user">Add</button>
										</div>
									</div>
									<div class="col-sm-6"></div>
									<div class="col-sm-3">
										<a href="selectTestcase.php"><button type="submit"
												class="btn btn-success pull-right">Next</button></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-8 col-md-6 col-sm-12 col-xs-12">
				<div class="module-wrapper">
					<section class="module team-module">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">The Team</h3>
							</div>

							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">
									<div id="team_id">
									<?php
									$project_id = $_SESSION ['project_id'];
									$query = "select uname, gname, project_id from  user_project_view where project_id = :project_id;";
									$condition = [ 
											'project_id' => $project_id 
									];
									$user_result = $project_view->query_result ( $query, $condition );
								//	print_r($user_result);
									if (! empty ( $user_result ) && is_array($user_result)) {
										echo '<div class="table-responsive"><table class="table table-simple"><thead><tr><th class="truncate">User Name</th><th>Group Name</th></tr><tbody>';
										foreach ( $user_result as $a ) {
										echo	'<tr><td>'.$a['uname'].'</td><td>'.$a['gname'].'</td></tr>';
										}
										echo '</tbody></table>';
									}
									?>
									</div>

								</div>
							</div>
						</div>
					</section>
				</div>

			</div>

		</div>

		</section>

	</div>

		
	
	<?php include_once 'footer.php';?>