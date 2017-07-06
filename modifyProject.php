<?php
include_once 'head.php';
include_once 'header.main.php';
include_once 'sidebar.main.php';
?><div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Modify Project</h2>
		<div id="masonry" class="row">
			<div
				class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Project 1</h3>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-5" aria-expanded="false"
									aria-controls="content-5"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-5">
							<div class="module-content-inner no-padding-bottom">
								<h4 class="has-divider">Modify Project</h4>

								<!-- Nav tabs -->
								<ul class="nav nav-tabs nav-tabs-theme-3" role="tablist">
									<li role="presentation" class="active"><a href="modifyProject.php"
										aria-controls="home-5" role="tab"><i class="fa fa-home"></i><br>
											<span class="hidden-xs hidden-sm">Project Description</span></a></li>
									<li role="presentation"><a href="modifyProject2.php"
										aria-controls="home-5" role="tab"><i class="fa fa-user"
											id="PrInventry-tab"></i><br> <span
											class="hidden-xs hidden-sm">Project Inventry</span></a></li>
									<li role="presentation"><a
										href="modifyProject3.php" aria-controls="messages-5"
										role="tab"><i class="fa fa-comments"></i><br> <span
											class="hidden-xs hidden-sm">Project Members</span></a></li>
									<li class="last" role="presentation"><a href="#settings-5"
										aria-controls="settings-5" role="tab" data-toggle="tab"><i
											class="fa fa-gears"></i><br> <span
											class="hidden-xs hidden-sm">Specifications</span></a></li>
									<li class="last" role="presentation"><a href="#settings-5"
										aria-controls="settings-5" role="tab" data-toggle="tab"><i
											class="fa fa-gears"></i><br> <span
											class="hidden-xs hidden-sm">To Do List</span></a></li>
								</ul>
								<!-- Tab panes -->


							</div>

						</div>
						<div class="module-content collapse in" id="content-1">
							<div class="module-content-inner no-padding-bottom">
								<p class="intro">Project Description</p>
								<form class="margin-bottom-lg" action="createProject2.php">
									<div class="form-group">
										<input name="title" type="text" class="form-control"
											placeholder="Project Title" value="Project 1" />
									</div>
									<textarea name="content" id="wysihtml5-editor" rows="10"
										class="form-control"> Already data </textarea>

									<button type="submit" class="btn btn-primary">Next</button>
								</form>

							</div>

						</div>
				
				</section>

			</div>
		</div>



	</div>
</div>

<?php include_once 'footer.php';?>