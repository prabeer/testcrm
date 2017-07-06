<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view tickets-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Tickets</h2>
			<div class="actions">
				<button class="btn btn-success" data-toggle="modal"
					data-target="#modal-new-ticket">
					<i class="fa fa-plus"></i> New Ticket
				</button>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module tickets-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="title">Project: Web App for Aenean</h3>
						</div>
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="summary-container margin-bottom-md">
									<div class="row">
										<div class="item item-tickets col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Total Tickets</h4>
											<p class="item-figure text-success">98</p>
										</div>

										<div
											class="item item-closed-tickets col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Closed Tickets</h4>
											<p class="item-figure text-danger">30</p>
										</div>

										<div class="item item-commits col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Commits</h4>
											<p class="item-figure text-info">193</p>
										</div>

										<div class="item item-comments  col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Comments</h4>
											<p class="item-figure text-purple">63</p>
										</div>

									</div>

								</div>

								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="number">NO.</th>
												<th class="name">Ticket Name</th>
												<th class="priority">Priority</th>
												<th class="assignee">Assignee</th>
												<th class="status">Status</th>
												<th class="comment">Comment</th>
												<th class="commit">Commit</th>
												<th class="updated">Updated</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="number"><span class="label label-number">#TR37</span></td>
												<td class="name"><a href="#">Ticket lorem ipsum sodales
														sagittis</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-18.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-3.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-19.png" alt="" /></td>
												<td class="status"><span class="label label-open">Open</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">5</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">2</span></a></td>
												<td class="updated">13 hrs ago</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR42</span></td>
												<td class="name"><a href="#">Refactor fringilla mauris code</a></td>


												<td class="priority"><span class="label label-low">Low</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-13.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-11.png" alt="" /></td>
												<td class="status"><span class="label label-progress">In
														progress</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">8</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">16</span></a></td>
												<td class="updated">1 day ago</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR36</span></td>
												<td class="name"><a href="#">UX workshop for Sodales
														Sagittis</a></td>
												<td class="priority"><span class="label label-high">High</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-5.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-1.png" alt="" /></td>
												<td class="status"><span class="label label-review">In
														review</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">1</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">2 days ago</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR32</span></td>
												<td class="name"><a href="#">Build form modules</a></td>

												<td class="priority"><span class="label label-critical">Critical</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-8.png" alt="" /></td>
												<td class="status"><span class="label label-todo">Todo</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">2</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">3</span></a></td>
												<td class="updated">Mar 23</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR5</span></td>
												<td class="name"><a href="#">Hook up dashboard</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-14.png" alt="" /></td>
												<td class="status"><span class="label label-open">Open</span></td>
												<td class="comment no-comment"><a href="#"><i
														class="fa fa-comment"></i><span class="count">0</span></a></td>
												<td class="commit no-comment"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Mar 22</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR11</span></td>
												<td class="name"><a href="#">Fix minor bug</a></td>

												<td class="priority"><span class="label label-low">Low</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-14.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-17.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-7.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-19.png" alt="" /> <a
													href="#">2+</a></td>
												<td class="status"><span class="label label-closed">Closed</span></td>
												<td class="comment no-comment"><a href="#"><i
														class="fa fa-comment"></i><span class="count">0</span></a></td>
												<td class="commit no-comment"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Mar 20</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR17</span></td>
												<td class="name"><a href="#">Competitor Analysis</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-14.png" alt="" /></td>
												<td class="status"><span class="label label-open">Open</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">3</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Mar 20</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR27</span></td>
												<td class="name"><a href="#">Add PayPal option</a></td>

												<td class="priority"><span class="label label-high">High</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-15.png" alt="" /></td>
												<td class="status"><span class="label label-progress">In
														Progress</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">6</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">2</span></a></td>
												<td class="updated">Mar 16</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR22</span></td>
												<td class="name"><a href="#">User testing</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-20.png" alt="" /></td>
												<td class="status"><span class="label label-todo">Todo</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">1</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Feb 28</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR21</span></td>
												<td class="name"><a href="#">Quisque Rutrum</a></td>
												<td class="priority"><span class="label label-critical">Critical</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-19.png" alt="" /></td>
												<td class="status"><span class="label label-review">In
														review</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">2</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">3</span></a></td>
												<td class="updated">Feb 26</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR20</span></td>
												<td class="name"><a href="#">User testing</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-20.png" alt="" /></td>
												<td class="status"><span class="label label-todo">Todo</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">1</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Feb 27</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR30</span></td>
												<td class="name"><a href="#">Quisque Rutrum</a></td>
												<td class="priority"><span class="label label-low">Low</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-16.png" alt="" /></td>
												<td class="status"><span class="label label-closed">Closed</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">2</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">3</span></a></td>
												<td class="updated">Feb 25</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR17</span></td>
												<td class="name"><a href="#">Potential solution for Lorem</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-14.png" alt="" /></td>
												<td class="status"><span class="label label-open">Open</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">3</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Mar 20</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR17</span></td>
												<td class="name"><a href="#">Add Amex to the checkout page</a></td>

												<td class="priority"><span class="label label-high">High</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-13.png" alt="" /> <img
													class="assignee-profile"
													src="assets/images/profiles/profile-16.png" alt="" /></td>
												<td class="status"><span class="label label-progress">In
														Progress</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">6</span></a></td>
												<td class="commit"><a href="#"><i class="fa fa-code-fork"></i><span
														class="count">2</span></a></td>
												<td class="updated">Mar 16</td>
											</tr>
											<tr>
												<td class="number"><span class="label label-number">#TR12</span></td>
												<td class="name"><a href="#">Fix tooltip styling</a></td>

												<td class="priority"><span class="label label-normal">Normal</span></td>
												<td class="assignee"><img class="assignee-profile"
													src="assets/images/profiles/profile-4.png" alt="" /></td>
												<td class="status"><span class="label label-open">Open</span></td>
												<td class="comment"><a href="#"><i class="fa fa-comment"></i><span
														class="count">1</span></a></td>
												<td class="commit no-commit"><a href="#"><i
														class="fa fa-code-fork"></i><span class="count">0</span></a></td>
												<td class="updated">Feb 28</td>
											</tr>
										</tbody>
									</table>
									<nav class="text-center pagination-wrapper">
										<p class="pagination-info">Displaying tickets 1-15 of 98</p>
										<ul class="pagination pagination-sm">
											<li class="disabled"><a href="#" aria-label="Previous"><span
													aria-hidden="true">&laquo;</span></a></li>
											<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<!-- Modal (New Ticket) -->
<div class="modal" id="modal-new-ticket" tabindex="-1" role="dialog"
	aria-labelledby="modal-new-ticket-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modal-new-ticket-label">Create New
					Ticket</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label class="sr-only">Ticket Name</label> <input type="text"
							class="form-control" placeholder="Ticket Name">
					</div>
					<div class="form-group">
						<label class="sr-only">Description</label>
						<textarea class="form-control" rows="6"
							placeholder="Enter your description..."></textarea>
					</div>
					<div class="form-group">
						<select class="chosen form-control"
							data-placeholder="Choose assignees..." style="width: 100%;"
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
						data-dismiss="modal">Create Ticket</button>

				</form>
			</div>
		</div>
	</div>
</div>
<!--//modal-->
<?php include_once 'footer.php';?>