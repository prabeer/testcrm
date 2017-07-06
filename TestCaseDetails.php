<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>

<div id="content-wrapper"
	class="content-wrapper view project-single-view">
	<div class="container-fluid">
		<div class="project-heading">
			<h2 class="view-title">Test Case Group 1</h2>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-wrapper col-md-8 col-sm-6 col-xs-12">
				<div class="module-wrapper">
					<section class="module project-module module-no-footer">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Overview</h3>
								<div class="meta">Created 3 months ago</div>
							</div>

							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">

									<div class="row">
										<div class="data-box col-md-6 col-sm-12 col-xs-12">
											<ul class="row list-unstyled">
												<li class="item item-1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
													<a href="#"> <span aria-hidden="true"
														class="icon icon_box-checked text-success"></span> <span
														class="data text-success">78</span> <span class="desc">Tickets</span>
												</a>
												</li>
												<li class="item item-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
													<a href="#"> <span aria-hidden="true"
														class="icon icon_easel text-purple"></span> <span
														class="data text-purple">236</span> <span class="desc">Activities</span>
												</a>
												</li>
												<li class="item item-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
													<a href="#"> <span aria-hidden="true"
														class="icon icon_chat_alt text-info"></span> <span
														class="data text-info">162</span> <span class="desc">Discussions</span>
												</a>
												</li>
												<li class="item item-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
													<a href="#"> <span aria-hidden="true"
														class="icon icon_group text-pink"></span> <span
														class="data text-pink">12</span> <span class="desc">Members</span>
												</a>
												</li>
											</ul>
										</div>
										<div class="charts-box col-md-6 col-sm-12 col-xs-12">
											<div class="item col-md-6 col-sm-6 col-xs-12">
												<div class="chart-easy-pie text-center">

													<div id="pie-1" class="percentage text-success"
														data-percent="56">
														<span>56</span>%
													</div>
													<div class="note">Project Progress</div>

												</div>
											</div>
											<div class="item col-md-6 col-sm-6 col-xs-12">
												<div class="chart-easy-pie text-center">

													<div id="pie-2" class="percentage text-danger"
														data-percent="72">
														<span>72</span>%
													</div>
													<div class="note">Budget</div>

												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="chart-container">
											<div id="commits-chart" class="commits-chart"
												style="height: 200px;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>


				<div class="module-wrapper">
					<section class="module project-module">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Test Cases List</h3>
							</div>

							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th class="number">NO.</th>
													<th class="name">Ticket Name</th>
													<th class="priority">Priority</th>
													<th class="status">Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="number"><span class="label label-number">#TR37</span></td>
													<td class="name"><a href="#">Ticket lorem ipsum sodales
															sagittis</a></td>

													<td class="priority"><span class="label label-normal">Normal</span></td>

													<td class="status"><span class="label label-open">Open</span></td>
												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR42</span></td>
													<td class="name"><a href="#">Refactor fringilla mauris code</a></td>


													<td class="priority"><span class="label label-low">Low</span></td>
													<td class="status"><span class="label label-progress">In
															progress</span></td>
												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR36</span></td>
													<td class="name"><a href="#">UX workshop for Sodales
															Sagittis</a></td>
													<td class="priority"><span class="label label-high">High</span></td>
													<td class="status"><span class="label label-review">In
															review</span></td>
												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR21</span></td>
													<td class="name"><a href="#">Quisque Rutrum</a></td>
													<td class="priority"><span class="label label-normal">Normal</span></td>
													<td class="status"><span class="label label-todo">Todo</span></td>

												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR16</span></td>
													<td class="name"><a href="#">Libero venenatis UX</a></td>
													<td class="priority"><span class="label label-critical">Critical</span></td>
													<td class="status"><span class="label label-todo">Todo</span></td>

												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR13</span></td>
													<td class="name"><a href="#">Maecenas tempus</a></td>
													<td class="priority"><span class="label label-high">High</span></td>
													<td class="status"><span class="label label-todo">Todo</span></td>

												</tr>
												<tr>
													<td class="number"><span class="label label-number">#TR12</span></td>
													<td class="name"><a href="#">Lorem ipsum dolor sit</a></td>
													<td class="priority"><span class="label label-critical">Critical</span></td>
													<td class="status"><span class="label label-todo">Todo</span></td>

												</tr>
											</tbody>
										</table>
									</div>
									<a class="more-link" href="tickets.html">View all tickets</a>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="col-wrapper col-md-4 col-sm-6 col-xs-12">
				<div class="module-wrapper">
					<section class="module summary-module">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Summary</h3>
							</div>

							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">
									<div class="description">
										<p>Project description goes here. Condimentum consectetuer.
											Vel, magnis eleifend vel potenti phasellus. Non integer.
											Conubia mus. Aliquam rutrum.</p>
									</div>
									<div class="meta-data">
										<dl class="dl-horizontal">
											<dt>Status:</dt>
											<dd>
												<span class="label label-warning">In Progress</span>
											</dd>
											<dt>Created:</dt>
											<dd>Nov 23, 2015</dd>
											<dt>Client:</dt>
											<dd>
												<a href="#">Media Studio</a>
											</dd>
											<dt>Last updated:</dt>
											<dd>Jan 23, 2016 at 10:23am</dd>
											<dt>Deadline:</dt>
											<dd>March 01, 2016</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

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
													class="status online" data-toggle="tooltip"
													data-placement="right" title=""
													data-original-title="Online"></span>
											</span></li>
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
									<a class="btn btn-success" href="#" data-toggle="modal"
										data-target="#modal-add-member">+ Add New</a>

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal (Add Member) -->
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
<footer id="footer" class="site-footer" style="display: none">
	<div class="copyright">
		Copyright &copy; 2016 - <a href="#">Bootstrap Admin Theme</a>
	</div>
</footer>
<div id="side-panel" class="side-panel">
	<div class="side-panel-inner">
		<button type="button" class="close" data-dismiss="modal"
			aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="title text-center">
			<i class="fa fa-signal"></i>Activities
		</h4>
		<div class="items-wrapper">
			<div class="item">
				<div class="symbol-holder">
					<button class="icon-container btn btn-warning btn-circle">
						<i class="icon fa fa-flag"></i>
					</button>
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<strong>We have increased your storage to 10GB for Free!</strong>
					</div>
					<div class="excerpt">System notification</div>
					<div class="time-stamp">5 days ago</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<img class="user-profile"
						src="assets/images/profiles/profile-20.png" alt="" />
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="member.html">David Thomson</a> followed you.
					</div>
					<div class="excerpt">
						<div class="role">Full-Stack Developer</div>
						<div class="folowers">
							<span>12 Projects</span> | <span class="folowers">43 Followers</span>
						</div>
					</div>
					<div class="time-stamp">3 mins ago</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<button class="icon-container btn btn-danger btn-circle">
						<i class="icon fa fa-heart"></i>
					</button>
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="#">Julie Wu</a> favourited your post.
					</div>
					<div class="excerpt">
						<div class="quote-text">
							<em>"Love your new design! Keep up the great work..."</em>
						</div>
					</div>
					<div class="time-stamp">1 week ago</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<img class="user-profile"
						src="assets/images/profiles/profile-15.png" alt="" />
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="#">Julie Wu</a> followed you.
					</div>
					<div class="excerpt">
						<div class="role">Product Designer</div>
						<div class="folowers">
							<span>3 Projects</span> | <span class="folowers">8 Followers</span>
						</div>
					</div>
					<div class="time-stamp">2 weeks ago</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<button class="icon-container btn btn-info btn-circle">
						<i class="icon fa fa-at"></i>
					</button>
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="#">James Lee</a> mentioned you on <a
							href="#">Project Lorem</a>.
					</div>
					<div class="excerpt">
						<div class="quote-text">
							<em>"Looks cool @Rebecca White"</em>
						</div>
					</div>
					<div class="time-stamp">2 weeks ago</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<button class="icon-container btn btn-success btn-circle">
						<i class="icon fa fa-commenting"></i>
					</button>
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="#">Chris Adams</a> commented on <a href="#">Discussion
							Lorem</a>.
					</div>
					<div class="excerpt">
						<div class="quote-text">
							<em>"Can we improve the review process? At the moment
								consectetuer adipiscing elit..."</em>
						</div>
					</div>
					<div class="time-stamp">Jan 10, 2016</div>
				</div>
			</div>
			<div class="item">
				<div class="symbol-holder">
					<button class="icon-container btn btn-pink btn-circle">
						<i class="icon fa fa-thumbs-up"></i>
					</button>
				</div>
				<div class="content-holder">
					<div class="subject-line">
						<a class="name" href="#">Kat Schultz</a> liked your discussion <a
							href="#">Discussion Lorem</a>.
					</div>
					<div class="time-stamp">Jan 8, 2016</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- *****DEMO THEME CONFIG****** -->
<?php include_once 'footer.php';?>