<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<div id="content-wrapper" class="content-wrapper view members-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Groups</h2>
			<div class="actions">
				<a href="AddNewGroup.php">
					<button class="btn btn-success" data-toggle="modal"
						data-target="#modal-new-member">
						<i class="fa fa-plus"></i> New Group
					</button>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module members-module module-no-heading">
					<div class="module-inner">
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="members-list">
								<?php
								
								$select_db = new database ( 'VIEW' );
								$query = 'select `s.no` S_NO, user_group_name, user_group_create_time,user_group_details, user_group_image, rights_count, user_count, user_group_status, alter_group from group_list where user_group_status = 1;';
								$result_data = $select_db->query_result ( $query );
								foreach ( $result_data as $group_list ) {
									?>
									<div class="item">
										<div class="row">
											<div class="profile col-md-3 col-sm-3 col-xs-12">
												<a class="profile-img" href="#"><img src="#" alt="" /></a>
												<ul class="info list-unstyled">
													<li class="name"><a
														href="groupDetails.php?a=<?php echo encryptor('encrypt', $group_list['S_NO']);?>"><?php echo $group_list['user_group_name'];?></a></li>
													<li class="role"><?php echo $group_list['user_group_details'];?></li>
												</ul>
											</div>
											<div class="contact col-md-6 col-sm-6 col-xs-12">
												<?php 
/*
									       * <ul class="list-inline">
									       *
									       * <li class="chat"><a href="#"><span
									       * class="pe-icon pe-7s-chat icon"></span></a></li>
									       * <li class="message"><a href="#"><span
									       * class="pe-icon pe-7s-mail icon"></span></a></li>
									       * <li class="location"><a href="#"><span
									       * class="pe-icon pe-7s-map-marker icon"></span></a></li>
									       * </ul>
									       */
									?>
											</div>
											<div class="data col-md-3 col-sm-3 col-xs-12">
												<ul class="list-inline text-center">
													<li class="projects"><span class="figure"><?php echo  $group_list['user_count'];?></span><span>Members</span></li>
													<li class="discussions"><span class="figure"><?php echo  $group_list['rights_count'];?></span><span>Rights</span></li>

												</ul>
											</div>
										</div>
									</div>
									<?php
								}
								$select_db->conn_close ();
								?>
									
<?php
/*
 * <nav class="text-center pagination-wrapper">
 * <p class="pagination-info">Displaying members 1-10 of 356</p>
 * <ul class="pagination pagination-sm">
 * <li class="disabled"><a href="#" aria-label="Previous"><span
 * aria-hidden="true">&laquo;</span></a></li>
 * <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
 * <li><a href="#">2</a></li>
 * <li><a href="#">3</a></li>
 * <li><a href="#">4</a></li>
 * <li><a href="#">5</a></li>
 * <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
 * </ul>
 * </nav>
 */
?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>