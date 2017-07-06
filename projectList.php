<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>
<?php
if (rights_data($rights, 'Project')){

?>
<div id="content-wrapper" class="content-wrapper view projects-view">
	<div class="container-fluid">
		<div class="projects-heading">
			<h2 class="view-title">Projects</h2>
                       <?php if(rights_data($rights, 'Project','Write All Project')){?>
			<div class="actions">

				<a href="createProject.php"><button class="btn btn-success"
						data-toggle="modal" data-target="#modal-new-project">
						<i class="fa fa-plus"></i> New Project
					</button></a>
			</div>
                       <?php }?>
		</div>
		<div class="clearfix"></div>
		<?php
		$project_list = new database ( 'VIEW' );
		$project_progress = 0;
		if(rights_data($rights, 'Project','View All Project')){
		$query = 'select `s.no`,project_topic, project_description, project_progress from project_details;';
                $result = $project_list->query_result ( $query );
                }elseif(rights_data($rights, 'Project','View Assigned Project')){
                   $query = 'select project_id,project_topic, project_description, project_progress from user_project_view where user_id = :user_id;'; 
                   $condition = array('user_id' => $_SESSION['userid']);
                   $result = $project_list->query_result ( $query,$condition );
                }
		
		$end = 0;
		$c = 0;
		$count = count ( $result );
		$i = 1;
		
		if (is_array ( array_filter ( $result ) )) {
			
			foreach ( $result as $val ) {
				if (! is_empty ( $val ['project_progress'] )) {
					$project_progress = $val ['project_progress'];
				}
				if ($i == 1) {
					echo "<div id=\"masonry\" class=\"row\">\n";
				}
				
				if ($end == 0) {
					
					?>
				<div
			class="module-wrapper masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<section class="module project-module">
				<div class="module-inner">
					<div class="module-heading">
						<h3 class="module-title">
							<a
								href="projectDetails.php?a=<?php echo encryptor('encrypt', $val['s.no'])?>"><?php echo $val['project_topic']?> </a>
						</h3>

					</div>

					<div class="module-content">
						<div class="module-content-inner">
							<div class="project-intro">
								<?php echo $val['project_description']?>
							</div>
							<ul class="actions list-inline">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>

						</div>
					</div>
				</div>
				<div class="module-footer text-center">
					<ul class="utilities list-inline">


					</ul>
				</div>
			</section>
		</div>
				<?php
				}
				if ($i == $count) {
					echo "</div>\n";
					$end = 1;
				} elseif (($i / 4) == 1) {
					echo "</div>\n";
					echo "<div id=\"masonry\" class=\"row\">\n";
				}
				$i ++;
			}
		} else {
			echo $result;
		}
		?>		
<?php } else{
    echo 'You do not have the rights to view this page, Please ask admin to provide rights';
}include_once 'footer.php';?>