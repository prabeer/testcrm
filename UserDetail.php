<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<?php

if (! is_empty ( $_GET ['u'] )) {
	$userid = encryptor ( 'decrypt', $_GET ['u'] );
} else {
	redirect ( 'UserList.php' );
}
$user_list = new database ( 'VIEW' );

$query = "SELECT `s.no` ,
   `user_name`,
   `user_first_name`,
   `user_designation`,
   `user_profile_photo`,
   `user_description`,
   `user_create_time`,
   `user_last_mod_time`,
   `user_creation_id`,
   `user_last_name`,
   `user_contact_no`,
   `user_address`,
   `user_type`,
   `user_location`,
   `user_bar_code`,
   `user_email`
FROM `user_view` where `s.no` = :s_no;";

$condition = [ 
		's_no' => $userid 
];
$result = $user_list->query_result ( $query, $condition );
$user_name = xssafe ( $result [0] ['user_first_name'] ) . " " . xssafe ( $result [0] ['user_last_name'] );
?>
<div id="content-wrapper"
	class="content-wrapper view project-single-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">
				<?php echo 'Welcome ' . $user_name?> <a href="AddNewUser.php"><button
						class="btn btn-success pull-right">
						<i class="fa fa-plus"></i> Edit Member
					</button></a>
			</h2>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-wrapper col-md-3 col-sm-12 col-xs-12">
				<div class="module-wrapper">
					<section
						class="module member-module module-no-heading module-no-footer">
						<div class="module-inner">
							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">
									<div class="profile">
										<img class="img-responsive" src="#" alt="" />
									</div>
									<ul class="meta-data list-unstyled">
										<li><span aria-hidden="true" class="icon icon icon_id"></span>
											<?php echo xssafe($result[0]['user_designation']);?></li>
										<li><span aria-hidden="true" class="icon icon_pin_alt"></span>
											<?php echo $result[0]['user_description'];?></li>
										<li><span aria-hidden="true" class="icon icon_mail_alt"></span>
											<?php echo xssafe($result[0]['user_bar_code']);?></li>

									</ul>
									
									<hr>
									<div class="data-overview">
										<ul class="list-inline text-center">
											<li class="projects"><span class="figure">6</span><span>projects</span></li>

											<li class="commits"><span class="figure">6</span><span>Bugs</span></li>
										</ul>
									</div>
									<hr>

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="col-wrapper col-md-7 col-sm-12 col-xs-12">
				<div class="module-wrapper">
					<section class="module commits-module module-no-footer">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Bugs History</h3>
							</div>

							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">
									<div class="chart-container">
										<div id="commits-chart" class="morris-chart"
											style="height: 220px;"></div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
					<div class="module-wrapper">
						<section class="module projects-module module-no-footer">
							<div class="module-inner">
								<div class="module-heading">
									<h3 class="module-title">Project Allocation</h3>
								</div>
<?php

$query = "SELECT `user_id`,
    `uname`,
    `gname`,
    `project_id`,
    `pname`,
    `project_progress`
FROM `user_project_view` where `user_id` = :user_id;";
$condition = [ 
		"user_id" => $userid 
];
$project_details = $user_list->query_result ( $query, $condition );
?>
							<div class="module-content">
									<div class="module-content-inner no-padding-bottom">
										<div class="table-responsive">
											<table class="table table-simple">
												<thead>
													<tr>
														<th class="truncate">Project Name</th>
														<th>Time Allocation</th>
													</tr>
												</thead>
												<tbody>
											
											<?php foreach ($project_details as $project){?>
												<tr>
														<td class="truncate"><a
															href="projectDetails.php?a=<?php echo encryptor('encrypt', $project['project_id']) ?>"><?php echo  $project['pname'];?></a></td>
														<td>
															<div class="progress-container">
																<span class="progress progress-sm"> <span
																class="progress-bar progress-bar-theme"
																role="progressbar" aria-valuenow="<?php echo $project['project_progress'];?>" aria-valuemin="0"
																aria-valuemax="100" style="width: <?php echo $project['project_progress'];?>%">
																</span>
																</span> <span class="progress-pc hidden-xs"><?php echo $project['project_progress'];?>%</span>
															</div>

														</td>
													</tr>
												
												<?php }?>
												
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
</div>
<?php include_once 'footer.php';?>