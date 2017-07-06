<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>

<div id="content-wrapper" class="content-wrapper view members-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Members</h2>
			<div class="actions">
				<a href="AddNewUser.php">
					<button class="btn btn-success" data-toggle="modal"
						data-target="#modal-new-member">
						<i class="fa fa-plus"></i> New Member
					</button>
				</a>
			</div>
		</div>
		<?php 
		//**************Filter 
		/*
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module members-module ">
					<div class="module-inner">
					<h3 class="view-title" style="padding: 0;margin:0;">Filters</h3>
						<div class="module-content">
							<div class="module-content-inner">
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Type:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Group Type" style="width: 240px;"
												name="group_type" id="group_type">
												<option value="">Please select</option>
												<option value="Testing">Development/Testing Team</option>
												<option value="Vendors">Vendors</option>
												<option value="Marketing">Marketing</option>
												<option value="Sales">Sales</option>
												<option value="HR">HR</option>
												<option value="Accounts">Accounts</option>
												<option value="Others">Others</option>

											</select>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Type:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Group Type" style="width: 240px;"
												name="group_type" id="group_type">
												<option value="">Please select</option>
												<option value="Testing">Development/Testing Team</option>
												<option value="Vendors">Vendors</option>
												<option value="Marketing">Marketing</option>
												<option value="Sales">Sales</option>
												<option value="HR">HR</option>
												<option value="Accounts">Accounts</option>
												<option value="Others">Others</option>

											</select>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Type:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Group Type" style="width: 240px;"
												name="group_type" id="group_type">
												<option value="">Please select</option>
												<option value="Testing">Development/Testing Team</option>
												<option value="Vendors">Vendors</option>
												<option value="Marketing">Marketing</option>
												<option value="Sales">Sales</option>
												<option value="HR">HR</option>
												<option value="Accounts">Accounts</option>
												<option value="Others">Others</option>

											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		*/
		?>
		<div class="clearfix"></div>
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module members-module module-no-heading">
					<div class="module-inner">
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="members-list">
									<?php
									
									$user_db = new database ( 'VIEW' );
									$query = "SELECT `s.no` S_NO,user_first_name, user_last_name,user_designation,user_profile_photo, user_email, user_contact_no   FROM user_details where user_type = 'Human';";
									$result = $user_db->query_result ( $query );
									$user_db->conn_close ();
									foreach ( $result as $val ) {
										?>
									<div class="item">
										<div class="row">
											<div class="profile col-md-3 col-sm-3 col-xs-12">
												<a class="profile-img" href="#"><img
													src="#" alt="" /></a>
												<ul class="info list-unstyled">
													<li class="name"><a href="UserDetail.php?u=<?php echo encryptor('encrypt', xssafe($val ['S_NO'])); ?>"><?php echo xssafe($val ['user_first_name']).' '.xssafe($val ['user_last_name']);?></a></li>
													<li class="role"><?php //echo xssafe($val ['user_designation']);?></li>
													<li class="team"><a href="#"><?php echo xssafe($val ['user_email']);?></a></li>
												</ul>
											</div>
											
											<div class="contact col-md-6 col-sm-6 col-xs-12">
												<?php /*
												<ul class="list-inline">

													<li class="chat"><a href="#"><span
															class="pe-icon pe-7s-chat icon"></span></a></li>
													<li class="message"><a href="#"><span
															class="pe-icon pe-7s-mail icon"></span></a></li>
													<li class="location"><a href="#"><span
															class="pe-icon pe-7s-map-marker icon"></span></a></li>
												</ul>
												*/
												?>
											</div>
										
											<div class="data col-md-3 col-sm-3 col-xs-12">
												<ul class="list-inline text-center">
													<li class="projects"><span class="figure">5</span><span>Projects</span></li>
													<li class="discussions"><span class="figure">3</span><span>Inventry</span></li>
													<li class="commits"><span class="figure">0</span><span>Raised Bugs</span></li>
												</ul>
											</div>
										</div>
									</div>
									<?php }?>
									
<?php /*
									<nav class="text-center pagination-wrapper">
										<p class="pagination-info">Displaying members 1-10 of 356</p>
										<ul class="pagination pagination-sm">
											<li class="disabled"><a href="#" aria-label="Previous"><span
													aria-hidden="true">&laquo;</span></a></li>
											<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
										</ul>
									</nav>
							*/?>
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