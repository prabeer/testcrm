<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view view-account">
	<div class="container-fluid">
		<h2 class="view-title">Add New Member</h2>
		<div class="row">
			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="side-bar">
							<div class="user-info">
								
								<ul class="meta list list-unstyled">
									<li class="name"><label class="label label-info"></label></li>
									<li class="email"><a href="#"></a></li>
									<li class="activity"></li>
								</ul>
							</div>

							<nav class="side-menu">
								<ul class="nav">
									<li class="active"><a href="AddNewUser.php"><span
											class="pe-icon pe-7s-user icon"></span>Profile</a></li>
									<li><a href="AssignRights.php"><span
											class="pe-icon pe-7s-user icon"></span> User Rights</a></li>
							
							</nav>

						</div>

						<div class="content-panel">
							<h2 class="title">
								New Profile
							<?php
							
							if (isset ( $_GET ['q'] )) {
								if ($_GET ['q'] === 'save') {
									echo "<div class=\"alert alert-theme alert-success alert-dismissible\" role=\"alert\">\n";
									echo "									<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>\n";
									echo "									<strong>Well done!</strong> You have created the new user. Now you can change or update the rights\n";
									echo "<a href='AssignRights.php'><button type=\"button\" class=\"btn btn-success\" id=\"notify-success-trigger\">Assign Rights</button></a>";
									echo "								</div>";
								} elseif ($_GET ['q'] === 'fail') {
									echo "<div class=\"alert alert-danger alert-theme-solid alert-dismissible\" role=\"alert\">\n";
									echo "									<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>\n";
									echo "									<strong>Oh snap!</strong> Change a few things up and try submitting again.\n";
									echo "								</div>";
								}
							}
							?>
							</h2>
							<form class="form-horizontal" action="createProfile.php"
								method="post" enctype="multipart/form-data">
								<fieldset class="fieldset">
									<h3 class="fieldset-title">Personal Info</h3>
									
									<div class="form-group">
										<label class="col-md-2 col-sm-3 col-xs-12 control-label">User
											Name</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value=""
												placeholder="Username" name="username">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 col-sm-3 col-xs-12 control-label">First
											Name</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value=""
												placeholder="First Name" name="first_name">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 col-sm-3 col-xs-12 control-label">Last
											Name</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value=""
												name="last_name" placeholder="Last Name">

										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">Group
											Details </label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<select class="chosen form-control" name="jobs">
												<option value=""></option>
													<?php
													
													$project_view = new database ( 'VIEW' );
													
													$query = "select `s.no` S_NO,user_group_name from group_details;";
													
													$result_data = $project_view->query_result ( $query );
													foreach ( $result_data as $val ) {
														echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_group_name'] . "</option>";
													}
													$project_view->conn_close ();
													?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">Country</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<select class="chosen form-control"
												data-placeholder="Choose a Country..." name="country">
												<option value="us">US</option>
												<option value="uk">UK</option>
												<option value="in" selected>India</option>
												<option value="cn">China</option>
												<option value="ca">Canada</option>
												<option value="de">Germany</option>
											</select>
										</div>
									</div>

								</fieldset>


								<fieldset class="fieldset">
									<h3 class="fieldset-title">Contact Info</h3>
									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="email" class="form-control" value=""
												name="email">
											<p class="help-block">Your Work Email Only</p>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">QQ</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="" name="qq">
											<p class="help-block">Your QQ Id</p>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">Skype</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="" name="skype">
											<p class="help-block">eg.</p>
										</div>
									</div>

								</fieldset>
								<fieldset class="fieldset">
									<h3 class="fieldset-title">About Yourself</h3>
									<div class="form-group">
										<label class="col-md-2  col-sm-3 col-xs-12 control-label">Bio</label>
										<div class="col-md-10 col-sm-9 col-xs-12">
											<textarea id="wysihtml5-editor" rows="10"
												class="form-control" name="description"></textarea>
											<p class="help-block">Share a little biographical information
												to fill out your profile. This may be shown publicly.</p>
										</div>
									</div>

								</fieldset>
								<hr>
								<div class="form-group">
									<div
										class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
										<input class="btn btn-primary" type="submit"
											value="Create Profile">
									</div>
								</div>
							</form>
						</div>

					</div>

				</section>

			</div>

		</div>

	</div>

</div>
<?php include_once 'footer.php';?>