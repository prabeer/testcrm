<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php

include_once 'sidebar.main.php';
if (! is_empty ( $_GET ['pr'] )) {
	$enc_id = xssafe ( $_GET ['pr'] );
	$project_id = encryptor ( 'decrypt', $_GET ['pr'] );
	if (! is_empty ( $_GET ['page'] )) {
		$page = $_GET ['page'];
	} else {
		redirect ( 'modProject.php?pr=' . $_GET ['pr'] . '&page=description' );
	}
} else {
	redirect ( 'projectList.php' );
}
$project_view = new database ( 'VIEW' );

?>
<div id="content-wrapper" class="content-wrapper view view-account">
	<div class="container-fluid">
		<h2 class="view-title">Modify Project</h2>
		<div class="row">
			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="side-bar">
							<div class="user-info">
								<img class="img-profile img-circle img-responsive center-block"
									src="#" alt="" />
								<ul class="meta list list-unstyled">
									<li class="name"><label class="label label-info"></label></li>
									<li class="email"><a href="#"></a></li>
									<li class="activity"></li>
								</ul>
							</div>

							<nav class="side-menu">
								<ul class="nav">
									<li
										<?php
										if ($_GET ['page'] === 'description') {
											echo 'class="active"';
										}
										?>><a
										href="modProject.php?a=<?php echo $_GET ['pr']?>&page=description"><span
											class="pe-icon pe-7s-user icon"></span>Description</a></li>
									<li
										<?php
										if ($_GET ['page'] === 'inventry') {
											echo 'class="active"';
										}
										?>><a
										href="modProject.php?a=<?php echo $_GET ['pr']?>&page=inventry"><span
											class="pe-icon pe-7s-user icon"></span> Inventry</a></li>
									<li
										<?php
										if ($_GET ['page'] === 'members') {
											echo 'class="active"';
										}
										?>><a
										href="modProject.php?a=<?php echo $_GET ['pr']?>&page=members"><span
											class="pe-icon pe-7s-user icon"></span> Members</a></li>
									<li
									<?php
										if ($_GET ['page'] === 'specifications') {
											echo 'class="active"';
										}
										?>
									><a
										href="modProject.php?a=<?php echo $_GET ['pr']?>&page=specifications"><span
											class="pe-icon pe-7s-user icon"></span> Specifications</a></li>
									<li
									<?php
										if ($_GET ['page'] === 'checklist') {
											echo 'class="active"';
										}
										?>
									><a
										href="modProject.php?a=<?php echo $_GET ['pr']?>&page=checklist"><span
											class="pe-icon pe-7s-user icon"></span> Check List</a></li>
							
							</nav>

						</div>

						<div class="content-panel">
						
							<?php
							if ($page === 'description') {
								include_once 'modProject/modDescription.php';
							} elseif ($page === 'inventry') {
								include_once 'modProject/modInventry.php';
							} else {
								redirect ( 'modProject.php?pr=' . $_GET ['pr'] . '&page=description' );
							}
							?>
							
						</div>

					</div>

				</section>

			</div>

		</div>

	</div>

</div>
<?php include_once 'footer.php';?>