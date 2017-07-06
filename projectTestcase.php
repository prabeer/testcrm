<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php

include_once 'sidebar.main.php';
$project_id = encryptor ( 'decrypt', $_GET ['d'] );

if (isset ( $_GET ['category'] )) {
	if (! is_empty ( $_GET ['category'] )) {
		$category = $_GET ['category'];
	} else {
		$category = '';
	}
} else {
	$category = '';
}
if (! is_empty ( $project_id )) {
	if (is_empty ( $category )) {
		$project_view = new database ( 'VIEW' );
		$query = "SELECT `testcase_id`,
    `project_id`,
    `testcase_status`,
    `testcase_status_change_datetime`,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_create_date`,
    `testcase_create_user`,
		testcase_catagory,
		testcase_priority,
		testcase_comment
FROM `testcase_device_view` where project_id = :project_id order by testcase_catagory asc;";
		$condition = [ 
				'project_id' => $project_id 
		];
		$result = $project_view->query_result ( $query, $condition );
	} else {
		$project_view = new database ( 'VIEW' );
		$query = "SELECT `testcase_id`,
    `project_id`,
    `testcase_status`,
    `testcase_status_change_datetime`,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_create_date`,
    `testcase_create_user`,
		testcase_catagory,
		testcase_priority,
		testcase_comment
FROM `testcase_device_view` where project_id = :project_id and testcase_catagory = :testcase_catagory order by testcase_catagory asc;";
		$condition = [ 
				'project_id' => $project_id,
				'testcase_catagory' => $category 
		];
		$result = $project_view->query_result ( $query, $condition );
	}
	
	$query = "SELECT distinct(testcase_catagory) category FROM `testcase_details` order by testcase_catagory asc";
	
	$result_category = $project_view->query_result ( $query );
	
	// /print_r($result_category);
	
	?>
<div id="content-wrapper" class="content-wrapper view tickets-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Test Cases Update</h2>
		</div>
		<div class="clearfix"></div>
		<input type="hidden" value="<?php echo $project_id;?>"
			name="device_id" id="device_id">
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module tickets-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="title">TestCase Execution List</h3>
						</div>
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="summary-container margin-bottom-md">
									<div class="row">
										<div class="item item-tickets col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Total TestCases</h4>
											<p class="item-figure text-success"><?php echo count($result);?></p>
										</div>

										<div class="item item-tickets col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Catagory wise Filter</h4>

											<select id="tc_filter" class="chosen form-control"><option value="">All</option>
													<?php
	
foreach ( $result_category as $category ) {
		$cat = "";
		if (isset ( $_GET ['category'] )) {
			$cat = $_GET ['category'];
		}
		?>
													<option
													value="<?php
		
echo $category ['category'] . '"';
		if ($category ['category'] == $cat) {
			echo ' selected';
		}
		?>><?php echo $category['category']?></option>
													<?php }?></select>

										</div>
<?php 
$pending_count = 0;
$failed_count = 0;
foreach ($result as $r){
                if($r['testcase_status'] == 3){
                   $failed_count++; 
                }elseif($r['testcase_status'] == 1){
                   $pending_count++; 
                }                                                                            
}?>
										<div class="item item-commits col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Test Cases Execution Pending</h4>
                                                                                        <p class="item-figure text-info"><?php echo $pending_count; ?></p>
										</div>

										<div class="item item-comments  col-md-3 col-sm-6 col-xs-6">
											<h4 class="item-title">Failed Test Cases</h4>
											<p class="item-figure text-purple"><?php echo $failed_count; ?></p>
										</div>

									</div>


								</div>
								<div class="table-responsive">
								<?php
	
	include_once 'configure.php';
	// print_r ( $result );
	?>
									<table class="table table-hover" id="project_tc">
										<thead>
											<tr>
												<th class="number">NO.</th>
												<th class="name">TestCase Catagory</th>
												<th class="name">TestCase Title</th>

												<th class="name">Details</th>
												<th class="priority">Priority</th>
												<th class="assignee">Create Date</th>

												<th class="updated">Status</th>
												<th class="updated">Comment</th>
											</tr>
										</thead>


										<tbody>
										<?php
	$i = 1;
	foreach ( $result as $val ) {
		?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo xssafe($val['testcase_catagory']);?></td>
												<td><?php echo xssafe($val['testcase_title']);?></td>

												<td><?php echo xssafe($val['testcase_preconditions']).'<hr>'.xssafe($val['testcase_steps']).'<hr>'.xssafe($val['testcase_required_result']);?></td>
												<td><?php echo calc_flag('PRIORITY',xssafe($val['testcase_priority'])); ?></td>
												<td><?php echo xssafe($val['testcase_create_date']); ?></td>

												<td><select class="chosen form-control tc_status"
													data-placeholder="Choose Status..." style="width: 50%;"
													name="status"
													id="status_<?php echo xssafe($val['project_id']);?>_<?php echo xssafe($val['testcase_id']); ?>">
														<option value="1"
															<?php
		
		if (xssafe ( $val ['testcase_status'] ) == 1) {
			echo ' selected';
		}
		?>>Not Executed</option>
														<option value="2"
															<?php
		
		if (xssafe ( $val ['testcase_status'] ) == 2) {
			echo ' selected';
		}
		?>>Pass</option>
														<option value="3"
															<?php
		
		if (xssafe ( $val ['testcase_status'] ) == 3) {
			echo ' selected';
		}
		?>>Fail</option>
														<option value="4"
															<?php
		
		if (xssafe ( $val ['testcase_status'] ) == 4) {
			echo ' selected';
		}
		?>>Invalid Test</option>
														<option value="5"
															<?php
		
		if (xssafe ( $val ['testcase_status'] ) == 5) {
			echo ' selected';
		}
		?>>Lack of resources</option>
												</select></td>
												<td><textarea class="tc_comment form-control"
														id="comment_<?php echo xssafe($val['project_id']);?>_<?php echo xssafe($val['testcase_id']); ?>"><?php echo xssafe($val['testcase_comment']); ?></textarea></td>
											</tr>
										<?php
		$i ++;
	}
	?>
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
} else {
	redirect ( 'projectList.php' );
}
?>
<!-- Modal (New Ticket) -->


<!--//modal-->
<?php include_once 'footer.php';?>