<div
				class="module-wrapper masonry-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Insert Items</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-12" aria-expanded="false"
									aria-controls="content-12"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>
						</div>
						<form action="itemInsert.php" method="post" id="item_form">
							<div class="module-content collapse in" id="content-12">
								<div class="module-content-inner">
									<div class="form-horizontal">

										<div class="form-group">
											<label class="col-sm-3 control-label">Device ID:</label>
											<div class="col-sm-9">
												<button class="btn btn-success" data-toggle="modal"
													data-target="#modal-new-project" id="gen_button"
													type="button">
													<i class="fa fa-plus"></i> Generate Barcode
												</button>
												<br>
												<h4>
													<b>or</b>
													<h4>
														<br>
														<div id="gen_id">
															<input type="text" class="form-control required-value" id="textinput"
																placeholder="Input Barcode" name="barcode">
														</div>
											
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Issue To:</label>
											<div class="col-sm-9">
												<select class="chosen form-control"
													data-placeholder="User..." style="width: 240px;"
													name="item_user">
													<option value="">Please select</option>
													<?php
													$user_view = new database ( 'VIEW' );
													$q = 'SELECT  `s.no` S_NO, USER_NAME, USER_FIRST_NAME FROM user_details;';
													$result = $user_view->query_result ( $q );
													foreach ( $result as $val ) {
														echo "<option value=" . $val ['S_NO'] . ">" . $val ['USER_NAME'] . "  " . $val ['USER_FIRST_NAME'] . "</option>";
													}
													$user_view->conn_close ();
													?>

												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Issue Comments</label>
											<div class="col-sm-9">
												<textarea rows="3" cols="40" class="form-control"></textarea>
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
									</div>
						
						</form>
						<div class="col-sm-6"></div>
						<?php if($wizard == 1){?>
						<div class="col-sm-3">
							<a href="createProject3.php"><button type="button"
									class="btn btn-primary pull-right">Next</button></a>
						</div>
						<?php }?>
					</div>
			
			</div>
