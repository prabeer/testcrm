<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view projects-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Projects</h2>
			<div class="actions">
				<div class="btn-group utility">
					<button class="btn btn-default dropdown-toggle"
						data-toggle="dropdown" type="button">
						All Projects <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">My Projects</a></li>
						<li><a href="#">Open Projects</a></li>
						<li><a href="#">Closed Projects</a></li>
						<li><a href="#">Archived Projects</a></li>
					</ul>
				</div>
				<button class="btn btn-success" data-toggle="modal"
					data-target="#modal-new-project">
					<i class="fa fa-plus"></i> New Project
				</button>
			</div>
		</div>
		<div class="clearfix"></div>
		<div id="masonry" class="row">
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title"><a href="projectDetails.php">Project lorem ipsum</a></h3>
							<div class="meta">
								Last updated <span class="time">yesterday at 14:02pm</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
										Aenean commodo ligula eget dolor aenean massa.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
											style="width: 25%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-1.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-3.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Mobile app for egestas vehicula</h3>
							<div class="meta">
								Last updated <span class="time">3 days ago</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Duis hendrerit erat a gravida dignissim. Proin a malesuada
										quam, et congue sapien. Fusce sed pretium quam, et tristique
										nisl.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"
											style="width: 65%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-2.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-4.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-6.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-8.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-10.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-12.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-14.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-16.png" alt="" /></a></li>
										<li class="member"><a href="#" class="more-member">3+</a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Campaign for vivamus elementum fringilla
								mauris amet adipiscing</h3>
							<div class="meta">
								Last updated <span class="time">June 23, 2015</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
											style="width: 75%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-5.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-7.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-9.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-11.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-13.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-15.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-17.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Marketing Campaign for Etiam Sit Amet</h3>
							<div class="meta">
								Last updated <span class="time">2 days ago</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
											style="width: 75%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-2.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-3.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-5.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-6.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-8.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-9.png" alt="" /></a></li>

										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Marketing Campaign for Etiam Sit Amet</h3>
							<div class="meta">
								Last updated <span class="time">2 days ago</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"
											style="width: 15%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-20.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-18.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-16.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-14.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">IOS App for Nullam Efficitur</h3>
							<div class="meta">
								Last updated <span class="time">today at 8:45am</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
											style="width: 35%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-4.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-19.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-13.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Android App for Nullam Efficitur</h3>
							<div class="meta">
								Last updated <span class="time">May 26, 2015</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
											style="width: 45%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-5.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-15.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-14.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-11.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-18.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<section class="module project-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Android App for Nullam Efficitur</h3>
							<div class="meta">
								Last updated <span class="time">May 26, 2015</span>
							</div>
						</div>

						<div class="module-content">
							<div class="module-content-inner">
								<div class="project-intro">
									<p>Proin a auctor libero, eget iaculis nisl. Nullam efficitur
										ipsum sit amet lectus dictum, ac luctus nibh semper.</p>
								</div>
								<div class="project-progress">
									<h4 class="subtitle">Progress</h4>
									<div class="progress-container">
										<span class="progress progress-sm"> <span
											class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
											style="width: 45%"> </span>
										</span>
									</div>
								</div>
								<div class="project-team">
									<h4 class="subtitle">Team</h4>
									<ul class="list-inline">
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-17.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-13.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-6.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-5.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-2.png" alt="" /></a></li>
										<li class="member"><a href="#"><img
												src="assets/images/profiles/profile-1.png" alt="" /></a></li>
										<li class="member"><a href="#" class="add-new-member"
											data-toggle="modal" data-target="#modal-add-member"><i
												class="fa fa-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="module-footer text-center">
						<ul class="utilities list-inline">
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Copy"><i class="fa fa-files-o"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Favourite"><i class="fa fa-star"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Archive"><i class="fa fa-archive"></i></a></li>
							<li><a href="#" data-toggle="tooltip" data-placement="top"
								title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>



<!-- Modal (New Project) -->
<div class="modal" id="modal-new-project" tabindex="-1" role="dialog"
	aria-labelledby="modal-new-project-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modal-new-project-label">Create New
					Project</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label class="sr-only">Project Name</label> <input type="text"
							class="form-control" placeholder="Project Name">
					</div>
					<div class="form-group">
						<label class="sr-only">Project Type</label> <select
							class="form-control">
							<option selected="selected">Select project type</option>
							<option>Type 1</option>
							<option>Type 2</option>
							<option>Type 3</option>
							<option>Type 4</option>
							<option>Type 5</option>
						</select>
					</div>
					<div class="form-group">
						<label class="sr-only">Description</label>
						<textarea class="form-control" rows="6"
							placeholder="Enter your project description..."></textarea>
					</div>

					<button type="button"
						class="btn btn-success margin-top-md center-block"
						data-dismiss="modal">Create Project</button>

				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="modal-add-member" tabindex="-1" role="dialog"
	aria-labelledby="modal-add-member-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modal-add-member-label">Add Member(s)</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Choose members</label> <select class="chosen form-control"
							data-placeholder="Choose members..." style="width: 100%;"
							multiple>
							<option value="">Please Select</option>
							<option value="Vincent Alexander">Vincent Alexander</option>
							<option value="Lisa Price">Lisa Price</option>
							<option value="Anthony Delgado">Anthony Delgado</option>
							<option value="Ralph Franklin">Ralph Franklin</option>
							<option value="Amanda Guerrero">Amanda Guerrero</option>
							<option value="Stephen Thompson">Stephen Thompson</option>
						</select>
					</div>
					<button type="button"
						class="btn btn-success margin-top-md center-block"
						data-dismiss="modal">Add to project</button>

				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>