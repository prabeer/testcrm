<div class="module-wrapper ">
	<section class="module project-module">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">TestCase Tracker</h3>
			</div>

			<div class="module-content">
				<div class="module-content-inner no-padding-bottom">
					<div class="table-responsive">
									<?php
									$query = "SELECT testcase_title, testcase_catagory,testcase_status FROM testcase_device_view where project_id = :project_id order by testcase_id desc;";
									$condition = [ 
											'project_id' => $project_id 
									];
						
									
									$tcdata = $project_view->query_result ( $query, $condition );
									if (is_array ( $tcdata ) && count ( $tcdata ) > 0) {
										?>
										<table class="table table-hover">
							<thead>
								<tr>

									<th class="name">TC Title</th>
									<th class="priority">Catagory</th>
									<th class="status">Status</th>
								</tr>
							</thead>
							<tbody>
											<?php
										include_once 'configure.php';
										foreach ( $tcdata as $bug ) {
											?>
												<tr>

									<td class="name"><a href="#"><?php echo $bug['testcase_title'];?></a></td>

									<td class="status"><span class="label label-open"><?php echo $bug['testcase_catagory'];?></span></td>

									<td class="priority"><span class="label label-normal"><?php echo calc_flag('TCSTATUS',$bug['testcase_status'])?></span></td>
								</tr>
												<?php }?>
												
											</tbody>
						</table>
										<?php }?>
									</div>
					<a class="more-link"
						href="projectTestcase.php?d=<?php echo encryptor('encrypt', $project_id);?>">View
						all Test Cases</a>
				</div>
			</div>
		</div>
	</section>
</div>