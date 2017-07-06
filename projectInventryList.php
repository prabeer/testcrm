<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php

include_once 'sidebar.main.php';
include_once 'includes/functions.php';
?>
<div id="content-wrapper" class="content-wrapper view invoices-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">
				Inventory
				<div class="pull-right">
					<a href="createProject2.php" class="btn btn-large btn-success"> <span
						style="font-size: medium;"><b>+ Add Inventory</b></span>

					</a>
				</div>
			</h2>

		</div>
		<div class="clearfix"></div>
		<div class="row">


			<div class="module-wrapper col-md-6 col-sm-12 col-xs-12">
				<section class="module module-no-heading invoices-module">
				<?php
				$project_view = new database ( 'VIEW' );
				
				$query = 'SELECT  inventry_id, project_name, count, last_added, inventry_name FROM `project_inventry_count` where last_added >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH);';
				$result_data = $project_view->query_result ( $query );
				// $project_view->conn_close ();
				
				?>
					<div class="module-inner">
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="heading-wrapper">
									<h3>Inventory Project Wise</h3>
									<div class="actions">
										<div class="btn-group"></div>
									</div>
								</div>
								<!--/heading-wrapper-->
								<div class="table-responsive">
									<table class="table table-simple table-striped">
										<thead>
											<tr>
												<th class="number">Project ID</th>
												<th>Project Name</th>
												<th>Total Count</th>
												<th>Last Updated</th>
											</tr>
										</thead>
										<tbody>
										
									<?php foreach ($result_data as $data){ ?>
											<tr>
												<td><a
													href="projectInventry.php?id=
													<?php echo encryptor('encrypt',$data ['inventry_name']);?>"
													class="label label-number-alt"><?php
										
										echo $data ['inventry_id'];
										?></a></td>
												<td class="date truncate"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $data['inventry_name']);?>"><?php echo $data['project_name'];?></a></td>
												<td class="client truncate"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $data['inventry_name']);?>"><?php echo $data['count']; ?></a></td>
												<td class="total"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $data['inventry_name']);?>"><?php echo $data['last_added']; ?></a></td>
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
			<div class="module-wrapper col-md-6 col-sm-12 col-xs-12">
				<section class="module module-no-heading invoices-module">
					<div class="module-inner">
						<div class="module-content">
							<div class="module-content-inner no-padding-bottom">
								<div class="heading-wrapper">
									<h3>Other Equipment Inventory</h3>
									<div class="actions">
										<div class="btn-group"></div>
									</div>
								</div>
								<!--/heading-wrapper-->
								<div class="table-responsive">
									<table class="table table-simple table-striped">
										<thead>
											<tr>
												<th class="number">Equipment ID</th>
												<th>Equipment Name</th>
												<th>Total Count</th>
												<th>In Inventory</th>
											</tr>
										</thead>
										<tbody>
										<?php
										$query = 'SELECT `s.no` S_NO, inventry_name, count, item_add_datetime  FROM equipment_inventry_count;';
										$result_data = $project_view->query_result ( $query );
										foreach ( $result_data as $eqp ) {
											?>
											<tr>
												<td><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $eqp['S_NO']);?>"
													class="label label-number-alt"><?php echo $eqp['S_NO'];?></a></td>
												<td class="date truncate"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $eqp['S_NO']);?>"><?php echo $eqp['inventry_name'];?></a></td>
												<td class="client truncate"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $eqp['S_NO']);?>"><?php echo $eqp['count'];?></a></td>
												<td class="total"><a
													href="projectInventry.php?id=<?php echo encryptor('encrypt', $eqp['S_NO']);?>"><?php echo $eqp['item_add_datetime'];?></a></td>
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
<?php include_once 'footer.php';?>