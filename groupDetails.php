<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<?php

$grp_id = encryptor ( 'decrypt', $_GET ['a'] );
$select_db = new database ( 'VIEW' );
$condition = [ 
		's_no' => $grp_id 
];
$query = 'select `s.no` S_NO, user_group_name, user_group_create_time,user_group_details, user_group_image, rights_count, user_count, user_group_status, alter_group from group_list where user_group_status = 1 and `s.no` = :s_no;';
$result_data = $select_db->query_result ( $query, $condition );
if (count ( $result_data ) == 1) {
	foreach ( $result_data as $group_details ) {
		?>

<div id="content-wrapper"
	class="content-wrapper view project-single-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">
				Group Details <a href="AddNewGroup.php"><button
						class="btn btn-success pull-right">
						<i class="fa fa-plus"></i> New Group
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
											<?php echo xssafe($group_details['user_group_name']);?></li>
										<li><span aria-hidden="true" class="icon icon_pin_alt"></span>
											<?php echo xssafe($group_details['user_group_details']);?></li>
										<li><span aria-hidden="true" class="icon icon_mail_alt"></span>
											<?php echo xssafe($group_details['user_group_create_time']);?></li>

									</ul>
									
									<hr>
									<div class="data-overview">
										<ul class="list-inline text-center">
											<li class="projects"><span class="figure"><?php echo xssafe($group_details['rights_count']);?></span><span>Rights
													Count</span></li>
											<li class="discussions"><span class="figure"><?php echo xssafe($group_details['user_count']);?></span><span>User
													Count</span></li>

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
								<h3 class="module-title">Group Members</h3>
							</div>
<?php
		
		$query = "SELECT `group_id`,
    `gname`,
    `user_id`,
    `uname`
FROM `group_user_view` where group_id = :group_id;";
		
		$condition = [ 
				'group_id' => $grp_id 
		];
		$group_user = $select_db->query_result ( $query, $condition );
		?>
		<div class="table-responsive">
											<table class="table table-simple">
												<thead>
													<tr>
														<th class="truncate">Members Name</th>
														
													</tr>
												</thead>
												<tbody>
											
											<?php foreach ($group_user as $user){?>
												<tr>
														<td class="truncate"><a
															href="UserDetails.php?u=<?php echo encryptor('encrypt', $user['user_id']) ?>"><?php echo  $user['uname'];?></a></td>
														
													</tr>
												
												<?php }?>
												
											</tbody>
											</table>
										</div>
						</div>
					</section>
				</div>
				<div class="module-wrapper">
					<section class="module commits-module module-no-footer">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Group Members</h3>
							</div>
<?php
		
		$query = "SELECT `rights_id`,
    `group_id`,
    `rights_title`,
    `group_title`
FROM `group_rights_view` where group_id = :group_id;";
		
		$condition = [ 
				'group_id' => $grp_id 
		];
		$group_rights = $select_db->query_result ( $query, $condition );
		?>
		<div class="table-responsive">
											<table class="table table-simple">
												<thead>
													<tr>
														<th class="truncate">Group Rights</th>
														
													</tr>
												</thead>
												<tbody>
											
											<?php foreach ($group_rights as $rights){?>
												<tr>
														<td class="truncate"><a
															href="UserDetails.php?u=<?php echo encryptor('encrypt', $rights['rights_id']) ?>"><?php echo  $rights['rights_title'];?></a></td>
														
													</tr>
												
												<?php }?>
												
											</tbody>
											</table>
										</div>
						</div>
					</section>
				</div>
				

			</div>
			
			</div>
		</div>
	</div>
</div>
<?php
	}
} else {
	redirect ( 'GroupList.php' );
	echo 'Invalid Request';
	exit ();
}
?>

<?php include_once 'footer.php';?>