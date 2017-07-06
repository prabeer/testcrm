<div class="module-wrapper">
	<section class="module project-module">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">Inventry Details</h3>
			</div>

			<div class="module-content">
				<div class="module-content-inner no-padding-bottom">
					<div class="table-responsive">
									<?php
									$query = "SELECT `item_name`, inv_comments, `item_assigned_datetime`,`item_assign_status`, `bar_code`, `to_user_Name`, inventry_name FROM `inventry_transaction` where inventry_name = :inventry_name  order by item_assigned_datetime desc limit 7;";
									$condition = [ 
											'inventry_name' => $project_id 
									];
									
									$inv_data = $project_view->query_result ( $query, $condition );
									//print_r($inv_data);
									if (is_array ( $inv_data ) && count ( $inv_data ) > 0) {
										?>
										<table class="table table-hover">
							<thead>
								<tr>
									<th class="number">NO.</th>
									<th class="name">Inv Barcode</th>
									<th class="priority">Assigned To</th>
									<th class="status">Item Add Date</th>
								</tr>
							</thead>
							<tbody>
											<?php
										include_once 'configure.php';
										$i = 1;
										foreach ( $inv_data as $inv ) {
											?>
												<tr>
									<td class="number"><span class="label label-number"><?php echo $i;?></span></td>
									<td class="name"><a
										href="projectInventry.php?id=<?php echo encryptor('encrypt', $inv['inventry_name']);?>"><?php echo $inv['bar_code'];?></a></td>

									<td class="priority"><span class="label label-normal"><?php echo $inv['to_user_Name'];?></span></td>

									<td class="status"><span class="label label-open"><?php echo $inv['item_assigned_datetime']?></span></td>
								</tr>
												<?php
											$i ++;
										}
										?>
												
											</tbody>
						</table>
										<?php }?>
									</div>
					<a class="more-link"
						href="projectInventry.php?id=<?php echo encryptor('encrypt', $inv_data[0]['inventry_name']);?>">View
						all Inventry</a>
				</div>
			</div>
		</div>
	</section>
</div>