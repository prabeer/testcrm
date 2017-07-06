<div class="module-wrapper">
	<section class="module summary-module">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">Summary</h3>
			</div>
<?php
if ($project_id != "" && is_numeric ( $project_id )) {
	$query = "SELECT  project_description, project_topic, project_vendor, project_status, date_format(project_start_date, '%d-%m-%Y') project_start_date, date_format(project_end_date,'%d-%m-%Y') project_end_date, project_progress  FROM project_details where `s.no` = :project_id;";
	$condition = [ 
			'project_id' => $project_id 
	];
	$rs = $project_view->query_result ( $query, $condition );
	if (is_array ( $rs ) && ! empty ( $rs )) {
		$p_description = $rs [0] ['project_description'];
		$p_topic = xssafe ( $rs [0] ['project_topic'] );
		$p_vendor = xssafe ( $rs [0] ['project_vendor'] );
		$p_status = xssafe ( $rs [0] ['project_status'] );
		$p_startDate = xssafe ( $rs [0] ['project_start_date'] );
		$p_endDate = xssafe ( $rs [0] ['project_end_date'] );
		$p_progress = xssafe ( $rs [0] ['project_progress'] );
		
		?>
			<div class="module-content">
				<div class="module-content-inner no-padding-bottom">
					<div class="description">
						<p><?php echo $p_description;?></p>
					</div>
					<div class="meta-data">
						<dl class="dl-horizontal">
							<dt>Status:</dt>
							<dd>
								<span
									class="label 
								<?php
		
		if ($p_status == 'In Progress') {
			echo "label-warning";
		} elseif ($p_status == 'Closed') {
			echo "label-success";
		} else {
			echo "label-danger";
		}
		?>
								"><?php echo $p_status;?></span>
							</dd>
							<dt>Created:</dt>
							<dd><?php echo $p_startDate;?></dd>
							<dt>Vendor:</dt>
							<dd>
								<a href="#"><?php echo $p_vendor;?></a>
							</dd>
							<dt>Progress:</dt>
							<dd><?php echo $p_progress;?>%</dd>
							<dt>Deadline:</dt>
							<dd><?php echo $p_endDate;?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
	} else {
		echo 'Error:' . $rs;
	}
}
?>