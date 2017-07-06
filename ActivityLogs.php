<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>

<div id="content-wrapper" class="content-wrapper view activities-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Activity Stream</h2>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div
				class="sidebar col-md-3 col-sm-12 col-xs-12 col-md-push-9 col-sm-push-0">
				<div class="module-wrapper">
					<div class="module">
						<h3 class="subtitle text-center">View by project</h3>
						<div class="avatar-wrapper text-center">
							<img class="center-block img-responsive"
								src="assets/images/profiles/profile-3.png" alt="">
						</div>
						<ul class="list-unstyled filter-list">
							<li class="active"><a href="#">All Projects</a></li>
							<li><a href="#">Project Lorem Ipsum</a></li>
							<li><a href="#">Aenean Vulputate</a></li>
							<li><a href="#">Sed fringilla</a></li>
							<li><a href="#">Vivamus Elementum Semper</a></li>
							<li><a href="#">Nam Quam Nunc</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div
				class="stream-wrapper col-md-9 col-sm-12 col-xs-12 col-md-pull-3 col-sm-pull-0">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-tabs-theme-1" role="tablist">
					<li role="presentation" class="active"><a href="#tab-1"
						aria-controls="tab-1" role="tab" data-toggle="tab">All types</a></li>
					<li role="presentation"><a href="#tab-2" aria-controls="tab-2"
						role="tab" data-toggle="tab">Projects</a></li>
					<li role="presentation"><a href="#tab-3" aria-controls="tab-3"
						role="tab" data-toggle="tab">Tickets</a></li>
					<li role="presentation"><a href="#tab-4" aria-controls="tab-4"
						role="tab" data-toggle="tab">Discussions</a></li>
					<li role="presentation"><a href="#tab-5" aria-controls="tab-5"
						role="tab" data-toggle="tab">Files</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="tab-1">
						<h4 class="subtitle">Today</h4>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-1.png" alt="" />
															<span class="status offline" data-toggle="tooltip"
																data-placement="top" title="Offline"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Ken D</a> created a new
															project <a href="#">[Project fringilla vel aliquet nec]</a>
														</p>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>2 mins ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_toolbox_alt"></span><a href="#">Project</a></li>
														</ul>

													</div>

												</div>
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-4.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Kevin R</a> pushed to <a
																href="#">master</a> at <a href="#">[#23 Maecenas tempus
																adipiscing]</a>
														</p>
														<div class="excerpt">
															<a href="#"><span class="label label-default">a5dced8</span>
																Fixed drag and drop javascript bug</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>30 mins ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-7.png" alt="" />
															<span class="status busy" data-toggle="tooltip"
																data-placement="top" title="Busy"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Kathy D</a> commented on
															ticket <a href="#">[#21 App page design]</a>
														</p>
														<div class="excerpt">
															<a href="#">Can we have a screenshot of the current
																checkout page? Aenean massa. Cum sociis natoque
																penatibus et magnis dis parturient montes...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>1 hr ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<h3 class="subtitle">Yesterday</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-10.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Jim T</a> started a new
															discussion <a href="#">[Sed sit amet ante eget ante]</a>
														</p>
														<div class="excerpt">
															<a href="#">Cras dapibus. Vivamus elementum semper nisi.
																Aenean vulputate eleifend tellus. Aenean leo ligula
																porttitor eu consequat vitae...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>17:34am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_chat_alt"></span><a href="#">Discussion</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-13.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Mark A</a> created a new
															ticket <a href="#">[#28 Fringilla vel aliquet nec]</a>
														</p>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>14:30pm Yesterday</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

														<div class="excerpt">
															<a href="#">Aenean hendrerit, metus quis hendrerit
																tincidunt, ligula nisi egestas velit, vulputate porta
																nisi mi a magna. Etiam ultricies ipsum nec rhoncus
																rhoncus...</a>
														</div>
													</div>

												</div>
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-2.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Rachel W</a> shared a
															folder <a href="#">[UI mocks]</a>
														</p>
														<div class="excerpt">
															<a href="#">I’m sharing this folder ahead of the team
																meeting. Let me know if orem sed massa bibendum maximus
																quis sit amet diam...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>12:10pm Yesterday</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_paperclip"></span><a href="#">File</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-18.png" alt="" />
															<span class="status busy" data-toggle="tooltip"
																data-placement="top" title="Busy"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Jason B</a> commented on
															ticket <a href="#">[#22 Maecenas tempus adipiscing]</a>
														</p>
														<div class="excerpt">
															<a href="#">Pellentesque mattis libero at vestibulum
																vehicula. Lorem ipsum dolor sit amet, consectetur...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>10:24am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<h3 class="subtitle">June 23, 2015</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-11.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">James K</a> started a
															new discussion <a href="#">[Some suggestions regarding
																the code review process]</a>
														</p>
														<div class="excerpt">
															<a href="#">Cras dapibus. Vivamus elementum semper nisi.
																Aenean vulputate eleifend tellus. Aenean leo ligula
																porttitor eu consequat vitae...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>15:18pm</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_chat_alt"></span><a href="#">Discussion</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-8.png" alt="" />
															<span class="status busy" data-toggle="tooltip"
																data-placement="top" title="Busy"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Nick M</a> created a new
															project <a href="#">[Project Lorem Ipsum]</a>
														</p>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>13:26pm</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_toolbox_alt"></span><a href="#">Project</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-12.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Tom W</a> commented on
															ticket <a href="#">[#103 Nullam dictum felis eu pede ]</a>
														</p>
														<div class="excerpt">
															<a href="#">Proin id risus diam. Sed diam dui, maximus
																mollis gravida sit amet, molestie id libero. Ut dictum
																id sapien sagittis condimentum. Nunc nec massa vel augue
																pharetra mattis hendrerit nec orci. Sed ultricies enim
																ac tincidunt efficitur. Curabitur varius, nibh ac
																ultricies lobortis...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>11:43am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-4.png" alt="" />
															<span class="status offline" data-toggle="tooltip"
																data-placement="top" title="Offline"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Ryan B</a> pushed to <a
																href="#">master</a> at <a href="#">[#23 Maecenas nec
																odio et ante]</a>
														</p>
														<div class="excerpt">
															<a href="#"><span class="label label-default">f9f6228</span>
																Improved etiam ut facilisis neque</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>09:16am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="tab-2">
						<h4 class="subtitle">Today</h4>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-1.png" alt="" />
															<span class="status offline" data-toggle="tooltip"
																data-placement="top" title="Offline"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Ken D</a> created a new
															project <a href="#">[Project fringilla vel aliquet nec]</a>
														</p>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>2 mins ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_toolbox_alt"></span><a href="#">Project</a></li>
														</ul>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>

						<h3 class="subtitle">June 23, 2015</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-12.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Tom W</a> commented on
															ticket <a href="#">[#103 Nullam dictum felis eu pede ]</a>
														</p>
														<div class="excerpt">
															<a href="#">Proin id risus diam. Sed diam dui, maximus
																mollis gravida sit amet, molestie id libero. Ut dictum
																id sapien sagittis condimentum. Nunc nec massa vel augue
																pharetra mattis hendrerit nec orci. Sed ultricies enim
																ac tincidunt efficitur. Curabitur varius, nibh ac
																ultricies lobortis...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>11:43am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

					<!-- Tab panes -->
					<div role="tabpanel" class="tab-pane active" id="tab-3">
						<h4 class="subtitle">Today</h4>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-4.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Kevin R</a> pushed to <a
																href="#">master</a> at <a href="#">[#23 Maecenas tempus
																adipiscing]</a>
														</p>
														<div class="excerpt">
															<a href="#"><span class="label label-default">a5dced8</span>
																Fixed drag and drop javascript bug</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>30 mins ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-7.png" alt="" />
															<span class="status busy" data-toggle="tooltip"
																data-placement="top" title="Busy"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Kathy D</a> commented on
															ticket <a href="#">[#21 App page design]</a>
														</p>
														<div class="excerpt">
															<a href="#">Can we have a screenshot of the current
																checkout page? Aenean massa. Cum sociis natoque
																penatibus et magnis dis parturient montes...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>1 hr ago</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<h3 class="subtitle">Yesterday</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-13.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Mark A</a> created a new
															ticket <a href="#">[#28 Fringilla vel aliquet nec]</a>
														</p>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>14:30pm Yesterday</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

														<div class="excerpt">
															<a href="#">Aenean hendrerit, metus quis hendrerit
																tincidunt, ligula nisi egestas velit, vulputate porta
																nisi mi a magna. Etiam ultricies ipsum nec rhoncus
																rhoncus...</a>
														</div>
													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-18.png" alt="" />
															<span class="status busy" data-toggle="tooltip"
																data-placement="top" title="Busy"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Jason B</a> commented on
															ticket <a href="#">[#22 Maecenas tempus adipiscing]</a>
														</p>
														<div class="excerpt">
															<a href="#">Pellentesque mattis libero at vestibulum
																vehicula. Lorem ipsum dolor sit amet, consectetur...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>10:24am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<h3 class="subtitle">June 23, 2015</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-12.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Tom W</a> commented on
															ticket <a href="#">[#103 Nullam dictum felis eu pede ]</a>
														</p>
														<div class="excerpt">
															<a href="#">Proin id risus diam. Sed diam dui, maximus
																mollis gravida sit amet, molestie id libero. Ut dictum
																id sapien sagittis condimentum. Nunc nec massa vel augue
																pharetra mattis hendrerit nec orci. Sed ultricies enim
																ac tincidunt efficitur. Curabitur varius, nibh ac
																ultricies lobortis...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>11:43am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-4.png" alt="" />
															<span class="status offline" data-toggle="tooltip"
																data-placement="top" title="Offline"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Ryan B</a> pushed to <a
																href="#">master</a> at <a href="#">[#23 Maecenas nec
																odio et ante]</a>
														</p>
														<div class="excerpt">
															<a href="#"><span class="label label-default">f9f6228</span>
																Improved etiam ut facilisis neque</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>09:16am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_box-checked"></span><a href="#">Ticket</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="tab-4">

						<h3 class="subtitle">Yesterday</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-10.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Jim T</a> started a new
															discussion <a href="#">[Sed sit amet ante eget ante]</a>
														</p>
														<div class="excerpt">
															<a href="#">Cras dapibus. Vivamus elementum semper nisi.
																Aenean vulputate eleifend tellus. Aenean leo ligula
																porttitor eu consequat vitae...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>17:34am</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_chat_alt"></span><a href="#">Discussion</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<h3 class="subtitle">June 23, 2015</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-11.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">James K</a> started a
															new discussion <a href="#">[Some suggestions regarding
																the code review process]</a>
														</p>
														<div class="excerpt">
															<a href="#">Cras dapibus. Vivamus elementum semper nisi.
																Aenean vulputate eleifend tellus. Aenean leo ligula
																porttitor eu consequat vitae...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>15:18pm</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_chat_alt"></span><a href="#">Discussion</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="tab-5">
						<h3 class="subtitle">Yesterday</h3>
						<div class="module-wrapper">
							<section class="module activities-module">
								<div class="module-inner">
									<div class="module-content">
										<div class="module-content-inner no-padding-bottom">
											<div class="items-wrapper">
												<div class="item">
													<div class="profile">
														<div class="profile-inner">
															<img src="assets/images/profiles/profile-2.png" alt="" />
															<span class="status online" data-toggle="tooltip"
																data-placement="top" title="Online"></span>
														</div>

													</div>

													<div class="activity">
														<p class="summary">
															<a class="profile-name" href="#">Rachel W</a> shared a
															folder <a href="#">[UI mocks]</a>
														</p>
														<div class="excerpt">
															<a href="#">I’m sharing this folder ahead of the team
																meeting. Let me know if orem sed massa bibendum maximus
																quis sit amet diam...</a>
														</div>
														<ul class="meta list-inline">
															<li class="time"><span aria-hidden="true"
																class="icon icon_clock_alt"></span>12:10pm Yesterday</li>
															<li class="type"><span aria-hidden="true"
																class="icon icon_paperclip"></span><a href="#">File</a></li>
														</ul>

													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php include_once 'footer.php';?>
