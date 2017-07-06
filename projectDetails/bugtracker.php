<div class="module-wrapper">
	<section class="module project-module">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">Bugs Tracker</h3>
			</div>

			<div class="module-content">
				<div class="module-content-inner no-padding-bottom">
					<div class="table-responsive">
									<?php
									$query = "SELECT  S_NO , bug_titles, project_title, bug_status, bug_priority FROM  bug_view where bug_project = :bug_project and bug_status <> '6' order by bug_raise_time desc limit 7;";
									$condition = [ 
											'bug_project' => $project_id 
									];
									;
									
									$bug_data = $project_view->query_result ( $query, $condition );
									// print_r($bug_data);
									if (is_array ( $bug_data ) && count ( $bug_data ) > 0) {
										?>
										<table class="table table-hover">
							<thead>
								<tr>
									<th class="number">NO.</th>
									<th class="name">Bug Title</th>
									<th class="priority">Priority</th>
									<th class="status">Status</th>
								</tr>
							</thead>
							<tbody>
											<?php
										include_once 'configure.php';
										foreach ( $bug_data as $bug ) {
											?>
												<tr>
									<td class="number"><span class="label label-number"><?php echo $bug['S_NO']?></span></td>
									<td class="name"><a href="#"><?php echo $bug['bug_titles'];?></a></td>

									<td class="priority"><span class="label label-normal"><?php echo calc_flag('PRIORITY',$bug['bug_priority']);?></span></td>

									<td class="status"><span class="label label-open"><?php echo calc_flag('BUGSTATUS',$bug['bug_status'])?></span></td>
								</tr>
												<?php }?>
												
											</tbody>
						</table>
										<?php }?>
									</div>
					<a class="more-link"
						href="BugList.php?a=<?php echo encryptor('encrypt', $project_id);?>">View
						all bugs</a>
				</div>
			</div>
		</div>
	</section>
</div>