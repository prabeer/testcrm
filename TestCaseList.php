<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php

include_once 'sidebar.main.php';

$project_view = new database ( 'VIEW' );
$query = "SELECT `s.no`,
    `testcase_title`,
    `testcase_type`,
    `testcase_preconditions`,
    `testcase_steps`,
    `testcase_required_result`,
    `testcase_status`,
    `testcase_create_date`,
    `testcase_create_user`,
		 testcase_priority,
		testcase_catagory
FROM `testcase_details` order by testcase_catagory,testcase_create_date desc";

$result = $project_view->query_result ( $query );

$query = "SELECT distinct(testcase_catagory) category FROM `testcase_details` order by testcase_catagory asc";

$result_category = $project_view->query_result ( $query );
?>
<div id="content-wrapper" class="content-wrapper view tickets-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Test Cases List</h2>
			<div class="actions">
				<button class="btn btn-success" data-toggle="modal"
					data-target="#modal-new-tc" id="add_testcase">
					<i class="fa fa-plus"></i> Add New Test Case
				</button>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
				<section class="module tickets-module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="title">Complete Test Case List</h3>
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
											<h4 class="item-title">Filter TestCases by Category</h4>
											
												<select id=category_filter>
													<option value="">All</option>
													<?php foreach ($result_category as $category){?>
													<option value="<?php echo $category['category']?>"><?php echo $category['category']?></option>
													<?php }?>
												</select>
											
										</div>



									</div>

								</div>
								<div class="table-responsive">
								
								<?php
								
								include_once 'configure.php';
								
								?>
									<table class="table table-hover" id="tclist">
										<thead>
											<tr>
												<th class="number">NO.</th>
												<th class="name">TestCase Category</th>
												<th class="name">TestCase Title</th>

												<th class="name">Details</th>
												<th class="priority">Priority</th>
												<th class="assignee">Create Date</th>

												<th class="updated">Status</th>
											</tr>
										</thead>


										<tbody>
										<?php foreach($result as $val){?>
											<tr>
												<td><?php echo xssafe($val['s.no']);?></td>
												<td><?php echo xssafe($val['testcase_catagory']);?></td>
												<td><?php echo xssafe($val['testcase_title']);?></td>

												<td><?php echo xssafe($val['testcase_preconditions']).'<hr>'.xssafe($val['testcase_steps']).'<hr>'.xssafe($val['testcase_required_result']);?></td>
												<td><?php echo calc_flag('PRIORITY', xssafe($val['testcase_priority'])); ?></td>
												<td><?php echo xssafe($val['testcase_create_date']); ?></td>

												<td><a
													href="testcase/tcediter.php?id=<?php echo xssafe($val['s.no']);?>"
													class="editer"><?php echo 'Edit' ?></a></td>
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
<!-- Modal (New Ticket) -->
<?php include_once 'testcase/testcaseform.php';?>

<!--//modal-->
<?php include_once 'footer.php';?>