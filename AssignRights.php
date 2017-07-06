<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view view-account">
	<div class="container-fluid">
		<h2 class="view-title">My Account</h2>
		<div class="row">
			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="side-bar">
							<div class="user-info">
								
								<ul class="meta list list-unstyled">
									<li class="name"><?php
									
									if (isset ( $_SESSION ['username'] )) {
										echo $_SESSION ['username'];
									}
									
									?> <label class="label label-info"><?php
									
									if (isset ( $_SESSION ['Job'] )) {
										echo $_SESSION ['Job'];
									}
									?></label></li>
									<li class="email"><a href="#"><?php
									
									if (isset ( $_SESSION ['email'] )) {
										echo $_SESSION ['email'];
									}
									?></a></li>
									
								</ul>
							</div>

							<nav class="side-menu">
								<ul class="nav">
									<li><a href="AddNewUser.php"><span
											class="pe-icon pe-7s-user icon"></span> Profile</a></li>
									<li class="active"><a href="AssignRights.php"><span
											class="pe-icon pe-7s-user icon"></span> User Rights</a></li>
							
							</nav>

						</div>

						<div class="content-panel">
							<div
								class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<section class="module">
									<div class="module-inner">
										<div class="module-heading">
											<h3 class="module-title">Assign Rights</h3>
											<ul class="actions list-inline">
												<li><a class="collapse-module" data-toggle="collapse"
													href="#content-12" aria-expanded="false"
													aria-controls="content-12"><span aria-hidden="true"
														class="icon arrow_carrot-up"></span></a></li>
												<li><a class="close-module" href="#"><span
														aria-hidden="true" class="icon icon_close"></span></a></li>
											</ul>
										</div>
										<div class="module-content collapse in" id="content-12">
											<div class="module-content-inner">
												<div class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3 control-label">Select Users:</label>
														<div class="col-sm-9">
															<select class="chosen form-control"
																data-placeholder="Select Users" style="width: 100%;"
																id="select_user">
																<option value="">Please select</option>
																<?php
																
																$project_view = new database ( 'VIEW' );
																
																$query = "select `s.no` S_NO,user_first_name, user_last_name, user_name from user_details;";
																
																$result_data = $project_view->query_result ( $query );
																// print_r($result_data);
																if (! empty ( $result_data )) {
																	foreach ( $result_data as $val ) {
																		echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_name'] , "</option>";
																	}
																}
																$user_data = $result_data;
																$project_view->conn_close ();
																?>

															</select>
														</div>
													</div>
                                                                                                    
													<div class="form-group">
														<label class="col-sm-3 control-label">Select Group:</label>
														<div class="col-sm-9">
															<select class="chosen form-control"
																data-placeholder="Select Group" id="group_name"
																style="width: 100%;">
																<option value="">Please select</option>
																<?php
																
																$project_view = new database ( 'VIEW' );
																
																$query = "select `s.no` S_NO,user_group_name from group_details;";
																
																$result_data = $project_view->query_result ( $query );
																foreach ( $result_data as $val ) {
																	echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_group_name'] . "</option>";
																}
																$project_view->conn_close ();
																?>

															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Copy Rights from
															Other Users:</label>
														<div class="col-sm-9">
															<select class="chosen form-control"
																data-placeholder="Select Users" style="width: 100%;"
																id="user_name">
																<option value="">Please select</option>
																<?php
																foreach ( $user_data as $val ) {
																	echo "<option value='" . $val ['S_NO'] . "'>" . $val ['user_first_name'] . " " . $val ['user_last_login'] . "</option>";
																}
																?>

															</select>
														</div>
													</div>

													<div class="col-sm-6"></div>
													
													<div class="col-sm-3">
														<button type="button" id="user_save"
															class="btn btn-primary pull-right">Save</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
                                                    
							<div
								class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            
								<section class="module module-headings">
									<div class="module-inner">
										<div class="module-heading">
											<h3 class="module-title">User Rights</h3>
											<ul class="actions list-inline">
												<li><a class="collapse-module" data-toggle="collapse"
													href="#content-1" aria-expanded="false"
													aria-controls="content-1"><span aria-hidden="true"
														class="icon arrow_carrot-up"></span></a></li>
												<li><a class="close-module" href="#"><span
														aria-hidden="true" class="icon icon_close"></span></a></li>
											</ul>

										</div>

										<div class="module-content collapse in" id="content-1">
											<div class="module-content-inner no-padding-bottom">
												<div class="table-responsive">
								<?php
								$project_view = new database ( 'VIEW' );
								$user_rights_type = "%";
								$condition = [ 
										'user_right_type' => $user_rights_type 
								];
								$query = 'SELECT user_right_name, user_right_details,  `s.no` , user_right_type, rights_page_part FROM rights_details ORDER BY user_right_type ASC , rights_page_part DESC ;';
								$result_data = $project_view->query_result ( $query, $condition );
								if (is_array ( $result_data )) {
									// $_SESSION ['CurrentProject'] = $title;
									// echo '<script>window.location.href = "createProject2.php"</script>';
									?>
								<div id="list">
								<?php
									
									echo "<table id=\"datatables-1\" class=\"table table-striped display\">\n";
									echo "	<thead>\n";
									echo "		<tr>\n";
									echo "			<th>S.No</th>\n";
									echo "			<th>Rights Type</th>\n";
									echo "			<th>Rights Name</th>\n";
									echo "			<th>Rights Description</th>\n";
									echo "			<th>Mark</th>\n";
									echo "		</tr>\n";
									echo "	</thead>\n";
									echo "	<tfoot>\n";
									echo "		<tr>\n";
									echo "			<th>S.No</th>\n";
									echo "			<th>Rights Type</th>\n";
									echo "			<th>Rights Name</th>\n";
									echo "			<th>Rights Description</th>\n";
									echo "			<th>Mark</th>\n";
									echo "		</tr>\n";
									echo "	</tfoot>\n";
									echo "	<tbody>";
									$i = 0;
									foreach ( $result_data as $data ) {
										$i ++;
                                                                                if($data ['rights_page_part'] == 'Parent')
                                                                                {
										echo "		<tr>\n";
										echo "			<td><b>" . $i . "</b></td>\n";
										echo "			<td><b>" . $data ['user_right_type'] . "</b></td>\n";
										echo "			<td><b>" . $data ['user_right_name'] . "</b></td>\n";
										echo "			<td><b>" . $data ['user_right_details'] . "</b></td>\n";
										echo "			<td> <input type='checkbox' id='rights_id'  name='rights[]' value='" . $data ['s.no'] . "' class='form-control'></td>\n";
										echo "		</tr>";
                                                                                }else{
                                                                                    echo "		<tr>\n";
										echo "			<td>" . $i . "</td>\n";
										echo "			<td>" . $data ['user_right_type'] . "</td>\n";
										echo "			<td>" . $data ['user_right_name'] . "</td>\n";
										echo "			<td>" . $data ['user_right_details'] . "</td>\n";
										echo "			<td> <input type='checkbox' id='rights_id'  name='rights[]' value='" . $data ['s.no'] . "' class='form-control'></td>\n";
										echo "		</tr>";
                                                                                }
									}
									
									echo "	</tbody>\n";
									echo "</table>";
									echo "</form>";
									$project_view->conn_close ();
								}
								?>
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

		</div>

	</div>

</div>
<?php include_once 'footer.php';?>