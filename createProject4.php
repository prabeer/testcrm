<?php
include_once 'head.php';
include_once 'header.main.php';
include_once 'sidebar.main.php';
?>


<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Manage Project Specifications</h2>
		<div class="row">
			<div
				class="module-wrapper masonry-item col-lg-8 col-md-6 col-sm-12 col-xs-12">
				<div class="module-wrapper">
					<section class="module team-module">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title"><?php if(isset($_SESSION['project_title'])){
									echo xssafe($_SESSION['project_title']);
								}else{
									
								}?></h3>
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

		</section>

	</div>

		
	
	<?php include_once 'footer.php';?>