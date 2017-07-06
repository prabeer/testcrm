<div class="module-wrapper">
	<section class="module team-module">
		<div class="module-inner">
			<div class="module-heading">
				<h3 class="module-title">The Team</h3>
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
	$query = "SELECT user_id, uname, gname,  project_id  FROM user_project_view where project_id = :project_id order by gname;";
	$condition = [ 
			'project_id' => $project_id 
	];
	$rs = $project_view->query_result ( $query, $condition );
	// print_r($rs);
	if (is_array ( $rs ) && ! empty ( $rs )) {
		
		echo '<div class="table-responsive"><table class="table table-simple"><thead><tr><th class="truncate">User Name</th><th>Group Name</th></tr><tbody>';
		foreach ( $rs as $a ) {
			echo '<tr><td>' . $a ['uname'] . '</td><td>' . $a ['gname'] . '</td></tr>';
		}
		echo '</tbody></table>';
	} else {
		echo 'No Team Available';
	}
}
?>
		</div>
	</section>
</div>