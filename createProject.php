<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
	<?php
	
	include_once 'sidebar.main.php';
	if (isset ( $_GET ['error'] )) {
		$error = $_GET ['error'];
	}
	?>
<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Start Project</h2>
		<div class="row">
			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="module-title">Create Project</h3>
                                                        <div class="error"></div>
							<ul class="actions list-inline">
								<li><a class="collapse-module" data-toggle="collapse"
									href="#content-1" aria-expanded="false"
									aria-controls="content-1"><span aria-hidden="true"
										class="icon arrow_carrot-up"></span></a></li>
								<li><a class="close-module" href="#"><span aria-hidden="true"
										class="icon icon_close"></span></a></li>
							</ul>

						</div>

						<div class="module-content collapse in" id="content-1">
							<div class="module-content-inner no-padding-bottom">
								<p class="intro">Project Description</p>
								<form class="margin-bottom-lg" action="insertData.php"
									method="post" id="dataForm">
									<div class="form-group">
										<input name="title" type="text" class="form-control required-value title-value"
											placeholder="Project Title" />
									</div>
									<div class="form-group">
										<textarea name="content" id="wysihtml5-editor" rows="10"
											class="form-control required-value description-value"></textarea>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="form-group">
											<label class="label-control col-sm-3">Project Period</label>
											<div class="col-sm-9">
												<div
													class="input-daterange input-group input-group-icon-click"
													id="datepicker5">
													<input type="text" class=" form-control" name="start"
														value="<?php echo date("m/d/Y") ?>"> <span class="input-group-addon">to</span>
													<input type="text" class="form-control" name="end"
														value="<?php echo date("m/d/Y" , strtotime( date("m/d/Y"). ' +1 month')) ?>">
												</div>
											</div>
										</div>
									</div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
										<input name="vendor" type="text" class="form-control required-value"
											placeholder="Project Vendor" />
                                                                        </div>
                                                                    </div>
									<button type="submit" class="btn btn-primary">Next</button>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div id="target"></div>
									</div>

								</form>

							</div>

						</div>

					</div>

				</section>

			</div>

		</div>

	</div>

</div>
<?php include_once 'footer.php';?>