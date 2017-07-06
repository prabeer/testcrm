<?php
$query = "SELECT project_topic, project_description FROM project_details where `s.no` = :S_NO;";
$condition = [ 
		'S_NO' => $project_id 
];
$project_desc = $project_view->query_result ( $query, $condition );

?>
<h2 class="title">
								Change Description
							<?php
							if (isset ( $_GET ['q'] )) {
								if ($_GET ['q'] === 'save') {
									echo "<div class=\"alert alert-theme alert-success alert-dismissible\" role=\"alert\">\n";
									echo "									<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>\n";
									echo "									<strong>Well done!</strong> Project is successfully updated\n";
			
									echo "								</div>";
								} elseif ($_GET ['q'] === 'fail') {
									echo "<div class=\"alert alert-danger alert-theme-solid alert-dismissible\" role=\"alert\">\n";
									echo "									<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>\n";
									echo "									<strong>Oh snap!</strong> Change a few things up and try submitting again.\n";
									echo "								</div>";
								}
							}
							?>
							</h2>

<form class="form-horizontal" action="modProject/projectProcess.php"
	method="post" enctype="multipart/form-data">
	<fieldset class="fieldset">
		<h3 class="fieldset-title">Modify Project Name</h3>

		<div class="form-group">
			<label class="col-md-2 col-sm-3 col-xs-12 control-label">Project Name</label>
			<div class="col-md-10 col-sm-9 col-xs-12">
				<input type="text" class="form-control"
					value="<?php
					
					if (! is_empty ( $project_desc [0] ['project_topic'] )) {
						echo $project_desc [0] ['project_topic'];
					} else {
						echo "";
					}
					?>"`
					placeholder="Project Name" name="project_name">
			</div>
		</div>
		<input name="project_id" value="<?php echo xssafe($enc_id);?>" type="hidden" />
		<fieldset class="fieldset">
			<h3 class="fieldset-title">Modify Description</h3>
			<div class="form-group">
				<label class="col-md-2  col-sm-3 col-xs-12 control-label">Description</label>
				<div class="col-md-10 col-sm-9 col-xs-12">
					<textarea id="wysihtml5-editor" rows="10" class="form-control"
						name="description">						
						<?php
						
						if (! is_empty ( $project_desc [0] ['project_description'] )) {
							echo $project_desc [0] ['project_description'];
						} else {
							echo "";
						}
						?>
						</textarea>

				</div>
			</div>

		</fieldset>
		<hr>
		<div class="form-group">
			<div
				class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
				<input class="btn btn-primary" type="submit" value="Update">
			</div>
		</div>

</form>

<?php

?>