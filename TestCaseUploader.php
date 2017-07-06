<?php include_once 'head.php';?>
	<?php include_once 'header.main.php';?>
	<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">File Upload</h2>
		<div class="row">


			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Bulk Upload Test Cases</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-2" aria-expanded="false"
									aria-controls="content-2"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-2">
							<div class="module-content-inner no-padding-bottom">
								<div id="demo-upload"></div>

							</div>

						</div>

					</div>

				</section>

			</div>

		</div>
		<div class="row">
			<div
				class="module-wrapper masonry-item col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Uploaded Data</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-1" aria-expanded="false"
									aria-controls="content-1"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>
						<div class="row">
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
			<div
				class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Current Test Case Group</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-6" aria-expanded="false"
									aria-controls="content-6"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-6">
							<div class="module-content-inner no-padding-bottom">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr class="active">
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr class="success">
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr class="info">
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
											</tr>
											<tr class="warning">
												<th scope="row">4</th>
												<td>Tom</td>
												<td>Wallace</td>
												<td>@twallace</td>
											</tr>
											<tr class="danger">
												<th scope="row">5</th>
												<td>Adam</td>
												<td>Fox</td>
												<td>@foxadam</td>
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

</div>

<?php

include_once 'footer.php';
/*
<div class="row">
<div
class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
<section class="module module-headings">
<div class="module-inner">
<div class="module-heading">
<h3 class="module-title">Uploaded Data</h3>
<ul class="actions list-inline">
<li><a class="collapse-module" data-toggle="collapse"
		href="#content-1" aria-expanded="false"
				aria-controls="content-1"><span aria-hidden="true"
						class="icon arrow_carrot-up"></span></a></li>
						<li><a class="close-module" href="#"><span aria-hidden="true"
								class="icon icon_close"></span></a></li>
								</ul>

								</div>
								<div class="row">
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
?>