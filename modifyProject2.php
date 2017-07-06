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
									<li role="presentation" class="active"><a
										href="modifyProject2.php" aria-controls="home-5" role="tab"><i
											class="fa fa-user" id="PrInventry-tab"></i><br> <span
											class="hidden-xs hidden-sm">Project Inventry</span></a></li>
									<li role="presentation"><a href="modifyProject3.php"
										aria-controls="messages-5" role="tab"><i
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
							<h3 class="module-title">Insert Inventry</h3>
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
												data-placeholder="Choose a Country..." style="width: 240px;">
												<option value="">Please select</option>
												<option value="United States">Project</option>
												<option value="United Kingdom">Test Instruments</option>
												<option value="United Kingdom">Misc</option>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Select Project:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="Choose a Country..." style="width: 240px;">
												<option value="">Please select</option>
												<option value="United States">Project 1</option>
												<option value="United Kingdom">Project 2</option>

											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Device ID:</label>
										<div class="col-sm-9">
											<button class="btn btn-success" data-toggle="modal"
												data-target="#modal-new-project">
												<i class="fa fa-plus"></i> Generate ID
											</button>
											<br>
											<h4>
												<b>or</b>
												<h4>
													<br> <input type="text" class="form-control" id="textinput"
														placeholder="Input Id">
										
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Issue To:</label>
										<div class="col-sm-9">
											<select class="chosen form-control"
												data-placeholder="User..." style="width: 240px;">
												<option value="">Please select</option>
												<option value="United States">User1</option>
												<option value="United Kingdom">User2</option>
												<option value="United Kingdom">User3</option>

											</select>
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
										<a href="createProject3.php"><button type="button"
												class="btn btn-primary pull-right">Next</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div
				class="module-wrapper masonry-item col-lg-8 col-md-6 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Project Inventry</h3>
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
									<table id="datatables-1" class="table table-striped display">
										<thead>
											<tr>
												<th>ID</th>
												<th>Device Name</th>
												<th>Issued To</th>
												<th>Entry Date</th>
												<th>Status</th>
												<th>Edit</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>ID</th>
												<th>Device Name</th>
												<th>Issued To</th>
												<th>Entry Date</th>
												<th>Status</th>
												<th>Edit</th>
											</tr>
										</tfoot>
										<tbody>
											<tr>
												<td>237862378</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>2011/07/25</td>
												<td>In Inventry</td>
												<td>&nbsp&nbsp<a href="#" data-toggle="tooltip"
													data-placement="top" title="" data-original-title="Edit"><i
														class="fa fa-pencil"></i></a> &nbsp&nbsp<a href="#"
													data-toggle="tooltip" data-placement="top" title=""
													data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
											</tr>
											<tr>
												<td>3563746545</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>2011/07/25</td>
												<td>In Inventry</td>
												<td>&nbsp&nbsp<a href="#" data-toggle="tooltip"
													data-placement="top" title="" data-original-title="Edit"><i
														class="fa fa-pencil"></i></a> &nbsp&nbsp<a href="#"
													data-toggle="tooltip" data-placement="top" title=""
													data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
											</tr>
											<tr>
												<td>3563746545</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>2011/07/25</td>
												<td>In Inventry</td>
												<td>&nbsp&nbsp<a href="#" data-toggle="tooltip"
													data-placement="top" title="" data-original-title="Edit"><i
														class="fa fa-pencil"></i></a> &nbsp&nbsp<a href="#"
													data-toggle="tooltip" data-placement="top" title=""
													data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
											</tr>
											<tr>
												<td>3563746545</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>2011/07/25</td>
												<td>In Inventry</td>
												<td>&nbsp&nbsp<a href="#" data-toggle="tooltip"
													data-placement="top" title="" data-original-title="Edit"><i
														class="fa fa-pencil"></i></a> &nbsp&nbsp<a href="#"
													data-toggle="tooltip" data-placement="top" title=""
													data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>

						</div>

					</div>

				</section>


			</div>
		</div>
	</div>
	

<?php include_once 'footer.php';?>