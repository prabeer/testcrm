<div class="module-wrapper">
	<section class="module project-module module-no-footer">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">Overview</h3>
				<div class="meta"></div>
			</div>
<?php

if ($project_id != "" && is_numeric ( $project_id )) {
	$bug_cnt = 0;
	$tc_cnt = 0;
	$inv_cnt = 0;
	$mem_cnt = 0;
	if (is_empty ( $project_progress )) {
		$project_progress = 0;
	}
	$query = "SELECT bug_count FROM project_wise_bug_count where project_id = :project_id;";
	$condition = [ 
			'project_id' => $project_id 
	];
	$rs = $project_view->query_result ( $query, $condition );
	// print_r($rs);
	if (! empty ( $rs )) {
		$bug_cnt = $rs [0] ['bug_count'];
	}
	$query = "SELECT count(*) count FROM testcase_device_view where upper(testcase_status) = 'PENDING' and project_id = :project_id;";
	
	$rs = $project_view->query_result ( $query, $condition );
	// print_r($rs);
	if (! empty ( $rs )) {
		$tc_cnt = $rs [0] ['count'];
	}
	$query = "SELECT count FROM project_inventry_count where project_name = :project_id;";
	
	$rs = $project_view->query_result ( $query, $condition );
	// print_r($rs);
	if (! empty ( $rs )) {
		$inv_cnt = $rs [0] ['count'];
	}
	$query = "SELECT count(*) count FROM user_project_view where project_id = :project_id;";
	
	$rs = $project_view->query_result ( $query, $condition );
	// print_r($rs);
	if (! empty ( $rs )) {
		$mem_cnt = $rs [0] ['count'];
	}
	// print_r($project_result);
}
?>
							<div class="module-content">
				<div class="module-content-inner no-padding-bottom">

					<div class="row">
						<div class="data-box col-md-6 col-sm-12 col-xs-12">
							<ul class="row list-unstyled">
								<li class="item item-1 col-lg-6 col-md-6 col-sm-6 col-xs-6"><span
									aria-hidden="true" class="icon icon_box-checked text-success"></span>
									<span class="data text-success"><?php echo $bug_cnt;?></span> <span
									class="desc">Bugs</span></li>
								<li class="item item-3 col-lg-6 col-md-6 col-sm-6 col-xs-6"><span
									aria-hidden="true" class="icon icon_easel text-purple"></span>
									<span class="data text-purple"><?php echo $tc_cnt;?></span> <span
									class="desc">Test Cases Pending</span></li>
								<li class="item item-2 col-lg-6 col-md-6 col-sm-6 col-xs-6"><span
									aria-hidden="true" class="icon icon_chat_alt text-info"></span>
									<span class="data text-info"><?php echo $inv_cnt;?></span> <span
									class="desc">Inventry</span></li>
								<li class="item item-3 col-lg-6 col-md-6 col-sm-6 col-xs-6"><span
									aria-hidden="true" class="icon icon_group text-pink"></span> <span
									class="data text-pink"><?php echo $mem_cnt;?></span> <span
									class="desc">Members</span></li>
							</ul>
						</div>
						<div class="charts-box col-md-6 col-sm-12 col-xs-12">
							<div class="item col-md-6 col-sm-6 col-xs-12">
								<div class="chart-easy-pie text-center">

									<div id="pie-1" class="percentage text-success"
										data-percent="<?php echo $project_progress;?>">
										<span><?php echo $project_progress;?></span>%
									</div>
									<div class="note">Project Progress</div>

								</div>
							</div>
							<div class="item col-md-6 col-sm-6 col-xs-12">
								<div class="chart-easy-pie text-center">

									<div id="pie-2" class="percentage text-danger"
										data-percent="<?php echo $project_progress;?>">
										<span><?php echo $project_progress;?></span>%
									</div>
									<div class="note">Test Cases</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="chart-container">
							<div id="commits-chart" class="commits-chart"
								style="height: 200px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>