<div
		class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<section class="module module-headings">
			<div class="module-inner">
				<div class="module-heading">
					<h3 class="module-title">Project Inventory</h3>
					<ul class="actions list-inline">
						<li><a class="collapse-module" data-toggle="collapse"
							href="#content-1" aria-expanded="false" aria-controls="content-1"><span
								aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
						<li><a class="close-module" href="#"><span aria-hidden="true"
								class="icon icon_close"></span></a></li>
					</ul>

				</div>

				<div class="module-content collapse in" id="content-1">
					<div class="module-content-inner no-padding-bottom">
						<div class="table-responsive">

							<div id="list">
								<?php
								
								echo "<table id=\"datatables-1\" class=\"table table-striped display\">\n";
								echo "	<thead>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Device Comments</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "		</tr>\n";
								echo "	</thead>\n";
								echo "	<tfoot>\n";
								echo "		<tr>\n";
								echo "			<th>ID</th>\n";
								echo "			<th>Device Name</th>\n";
								echo "			<th>Device Comments</th>\n";
								echo "			<th>Issued To</th>\n";
								echo "			<th>Entry Date</th>\n";
								echo "			<th>Status</th>\n";
								echo "		</tr>\n";
								echo "	</tfoot>\n";
								echo "	<tbody>";
								if (! is_empty ( $project )) {
									$catch = new database ( 'VIEW' );
									$condition = [ 
											'inventry_name' => $project 
									];
									// print_r( $condition);
                                                                        $query = 'SELECT bar_code, `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`,  `to_user_Name` FROM `inventry_transaction` where inventry_name = :inventry_name ;';
									$result_data = $catch->query_result ( $query, $condition );
									$catch->conn_close ();
									// print_r($result_data);
									$data_arr = array_filter ( $result_data );
									if (! empty ( $data_arr )) {
										foreach ( $result_data as $data ) {
											echo "		<tr>\n";
											echo "			<td>" . $data ['bar_code'] . "</td>\n";
											echo "			<td>" . $data ['item_name'] . "</td>\n";
											echo "			<td>" . $data ['inv_comments'] . "</td>\n";
											echo "			<td>" . $data ['to_user_Name'] . "</td>\n";
											echo "			<td>" . $data ['item_assigned_datetime'] . "</td>\n";
											echo "			<td>" . $data ['item_assign_status'] . "</td>\n";
											echo "		</tr>";
										}
									} else {
										echo "<tr><td rowspan='5'>No Data Found</td></tr>";
									}
									echo "	</tbody>\n";
									echo "</table>";
								}
								$project_view->conn_close ();
								?>
							</div>

						</div>

					</div>

				</div>
		
		</section>

	</div>
