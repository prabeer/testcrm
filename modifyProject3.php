<?php
include_once 'head.php';
include_once 'header.main.php';
include_once 'sidebar.main.php';
?><div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Modify Project</h2>
		<div id="masonry" class="row">
			<div
				class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Project 1</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-5" aria-expanded="false"
									aria-controls="content-5"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-5">
							<div class="module-content-inner no-padding-bottom">
								<h4 class="has-divider">Modify Project</h4>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs-theme-3" role="tablist">
									<li role="presentation"><a href="modifyProject.php"
										aria-controls="home-5" role="tab"><i class="fa fa-home"></i><br>
											<span class="hidden-xs hidden-sm">Project Description</span></a></li>
									<li role="presentation"><a
										href="modifyProject2.php" aria-controls="home-5" role="tab"><i
											class="fa fa-user" id="PrInventry-tab"></i><br> <span
											class="hidden-xs hidden-sm">Project Inventry</span></a></li>
									<li role="presentation"  class="active"><a href="modifyProject3.php"
										aria-controls="messages-5" role="tab" ><i
											class="fa fa-comments"></i><br> <span
											class="hidden-xs hidden-sm">Project Members</span></a></li>
									<li class="last" role="presentation"><a href="#settings-5"
										aria-controls="settings-5" role="tab" data-toggle="tab"><i
											class="fa fa-gears"></i><br> <span
											class="hidden-xs hidden-sm">Specifications</span></a></li>
									<li class="last" role="presentation"><a href="#settings-5"
										aria-controls="settings-5" role="tab" data-toggle="tab"><i
											class="fa fa-gears"></i><br> <span
											class="hidden-xs hidden-sm">To Do List</span></a></li>
								</ul>
								<!-- Tab panes -->


							</div>

						</div>

					</div>

				</section>

			</div>
		</div>
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
											<select class="chosen form-control"
												data-placeholder="Choose Member ..." style="width: 240px;"
												multiple>
												<option value="">Select Members</option>
												<option value="United States">Name 1</option>
												<option value="United Kingdom">Name 2</option>
												<option value="United Kingdom">Name 3</option>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Role:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Country..." style="width: 240px;">
												<option value="">Please select</option>
												<option value="United States">Role 1</option>
												<option value="United Kingdom">Role 2</option>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Add New Member:</label>
										<div class="col-sm-9">
											<button class="btn btn-success" data-toggle="modal"
												data-target="#modal-new-project">
												<i class="fa fa-plus"></i> Add New Member
											</button>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label"></label>
										<div class="col-sm-9">
											<button class="btn btn-warning" data-toggle="modal"
												data-target="#modal-new-project">Cancel</button>
											&nbsp&nbsp&nbsp&nbsp
											<button class="btn btn-success" data-toggle="modal"
												data-target="#modal-new-project">Save</button>
										</div>
									</div>
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
									<div class="team-group">
										<h4 class="group-title">Project Lead</h4>
										<ul class="list-inline">
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-13.png" alt=""></a> <span
													class="status busy" data-toggle="tooltip"
													data-placement="right" title="" data-original-title="Busy"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-7.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
										</ul>
									</div>
									<div class="team-group">
										<h4 class="group-title">Developers</h4>
										<ul class="list-inline">
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-14.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-16.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-10.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-5.png" alt=""></a> <span
													class="status offline" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Offline"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-9.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-15.png" alt=""></a> <span
													class="status offline" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Offline"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-13.png" alt=""></a> <span
													class="status offline" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Offline"></span>
											</span>
											
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-12.png" alt=""></a> <span
													class="status busy" data-toggle="tooltip"
													data-placement="right" title="" data-original-title="Busy"></span>
											</span></li>
										</ul>
									</div>
									<div class="team-group">
										<h4 class="group-title">Designers</h4>
										<ul class="list-inline">
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-3.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-2.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>

										</ul>
									</div>
									<div class="team-group">
										<h4 class="group-title">Product Manager</h4>
										<ul class="list-inline">
											<li class="profile"><span class="profile-inner"> <a href="#"><img
														src="assets/images/profiles/profile-17.png" alt=""></a> <span
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>

										</ul>
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