<div
				class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Inventory Details</h3>
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
									<div id="target">
										<form action="inventryInsert.php" method="post"
											enctype="multipart/form-data" id="inventry_form">
											<div class="form-group">
												<label class="col-sm-3 control-label">Select Type:</label>
												<div class="col-sm-9">
													<select class="chosen form-control"
														data-placeholder="Choose a Inventry Type"
														style="width: 240px;" name="inventry_type" id="inventry_type">
														<option value="">Please select</option>
														<option value="Project" selected>Project</option>
														<option value="Test Instruments">Test Instruments</option>
														<option value="Misc">Misc</option>

													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label">Select Project:</label>
												<div class="col-sm-9">
													<select class="chosen form-control"
														data-placeholder="Choose a Project..."
														style="width: 240px;" name="project" id="s_project">
														<option value="">Please select</option>
														<?php
										$q = 'select `s.no` S_NO,project_topic from  project_details';
										$result = $project_view->query_result ( $q );
										
										foreach ( $result as $val ) {
											if ($val ['S_NO'] == $project) {
												$s = 'selected';
											} else {
												$s = '';
											}
											echo '<option value="' . $val ['S_NO'].'" ' . $s . '>' . xssafe ( $val ['project_topic'] ) . '</option>';
										}
										$project_view->conn_close ();
										?>
														

													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label">Inventory Description</label>
												<div class="col-sm-9">
													<textarea rows="6" cols="40"
														style="border: solid lightgrey 1px;"
														name="inventry_description"></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-3 control-label"></label>
												<div class="col-sm-9">
													<button class="btn btn-warning" data-toggle="modal"
														data-target="#modal-new-project" type="reset">Cancel</button>
													&nbsp&nbsp&nbsp&nbsp
													<button class="btn btn-success" data-toggle="modal"
														data-target="#modal-new-project" type="submit">Save</button>
												</div>
											</div>
										</form>
									</div>
									
								</div>

							</div>

						</div>
				
				</section>
			</div>