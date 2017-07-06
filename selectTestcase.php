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
FROM `testcase_details`";

$result = $project_view->query_result ( $query );
if (isset ( $_GET ['pr'] ) && ! is_empty ( $_GET ['pr'] )) {
	$project_id =  encryptor('decrypt',$_GET ['pr']) ;
} else {
	if (! is_empty ( $_SESSION ['project_id'] )) {
		$project_id = $_SESSION ['project_id'];
	} else {
		$project_id = "";
	}
}
?>
<div id="content-wrapper" class="content-wrapper view tickets-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Select Test Cases for project</h2>
		</div>
		<div class="clearfix"></div>
		<form action="testcase/savetestform.php" name="save-tc" method="post">
			<div class="row">
				<div class="module-wrapper col-md-12 col-sm-12 col-xs-12">
					<section class="module tickets-module">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="title">Complete Test Case List</h3>
								<div class="actions">
									<button class="btn btn-success" type="submit">
										<i class="fa fa-plus"></i>Save
									</button>
								</div>
							</div>
							<div class="module-content">
								<div class="module-content-inner no-padding-bottom">

									<div class="table-responsive">
								<?php
								
								include_once 'configure.php';
								?>
								<input type="hidden" name="project_id"
											value="<?php echo encryptor('encrypt', $project_id);?>">
										<table class="table table-hover">
											<thead>
												<tr>
													<th class="number">Check Box.</th>
													<th class="name">TestCase Catagory</th>
													<th class="name">TestCase Title</th>
													<th class="name">Priority</th>

													<th class="assignee">Create Date</th>


												</tr>
											</thead>


											<tbody>
										<?php foreach($result as $val){?>
											<tr>
													<td><input type="checkbox"
														value="<?php echo xssafe($val['s.no']);?>" name="sno[]"
														checked /></td>
													<td><?php echo xssafe($val['testcase_catagory']);?></td>
													<td><?php echo xssafe($val['testcase_title']);?></td>
													<td><?php echo calc_flag('PRIORITY', xssafe($val['testcase_priority'])); ?></td>
													<td><?php echo xssafe($val['testcase_create_date']); ?></td>


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
		</form>
	</div>
</div>


<!--//modal-->
<?php include_once 'footer.php';?>