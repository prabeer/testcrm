<?php include_once 'head.php';?>
<?php include_once 'header.main.php';?>
<?php include_once 'sidebar.main.php';?>

<div id="content-wrapper" class="content-wrapper view view-account">
	<div class="container-fluid">
		<h2 class="view-title">My Account</h2>
		<div class="row">
			<div class="module-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module">
					<div class="module-inner">
						<div class="side-bar">
							<div class="user-info">
								<img class="img-profile img-circle img-responsive center-block"
									src="assets/images/profiles/profile-square-1-lg.png" alt="" />
								<ul class="meta list list-unstyled">
									<li class="name">Rebecca Sanders <label
										class="label label-info">UX Designer</label>
									</li>
									<li class="email"><a href="#">Rebecca.S@website.com</a></li>
									<li class="activity">Last logged in: Today at 2:18pm</li>
								</ul>
							</div>
							<nav class="side-menu">
								<ul class="nav">
									<li><a href="user-profile.html"><span
											class="pe-icon pe-7s-user icon"></span> Profile</a></li>
									<li><a href="user-settings.html"><span
											class="pe-icon pe-7s-config icon"></span> Settings</a></li>
									<li><a href="user-billing.html"><span
											class="pe-icon pe-7s-credit icon"></span> Billing</a></li>
									<li class="active"><a href="user-messages"><span
											class="pe-icon pe-7s-chat icon"></span> Messages</a></li>
									<li><a href="user-drive.html"><span
											class="pe-icon pe-7s-pendrive icon"></span> Drive</a></li>
									<li><a href="user-reminders.html"><span
											class="pe-icon pe-7s-clock icon"></span> Reminders</a></li>
								</ul>
							</nav>
						</div>
						<div class="content-panel">
							<div class="content-header-wrapper">
								<h2 class="title">My Messages</h2>
								<div class="actions">
									<button class="btn btn-success">
										<i class="fa fa-plus"></i> New Message
									</button>
								</div>
							</div>
							<div class="content-utilities">
								<div class="actions">
									<div class="btn-group">
										<button class="btn btn-default dropdown-toggle"
											data-toggle="dropdown" type="button" aria-expanded="false">
											All Messages <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Unread</a></li>
											<li><a href="#">Important</a></li>
											<li><a href="#">Sent</a></li>
											<li><a href="#">Draft</a></li>
											<li><a href="#">Archived</a></li>
											<li><a href="#">Spam</a></li>
											<li><a href="#">Bin</a></li>
										</ul>
									</div>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default"
											data-toggle="tooltip" data-placement="bottom" title=""
											data-original-title="Refresh">
											<i class="fa fa-refresh"></i>
										</button>
										<button type="button" class="btn btn-default"
											data-toggle="tooltip" data-placement="bottom" title=""
											data-original-title="Archive">
											<i class="fa fa-archive"></i>
										</button>
										<button type="button" class="btn btn-default"
											data-toggle="tooltip" data-placement="bottom" title=""
											data-original-title="Report spam">
											<i class="fa fa-exclamation-triangle"></i>
										</button>
										<button type="button" class="btn btn-default"
											data-toggle="tooltip" data-placement="bottom" title=""
											data-original-title="Delete">
											<i class="fa fa-trash-o"></i>
										</button>
									</div>
									<div class="btn-group">
										<button class="btn btn-default dropdown-toggle"
											data-toggle="dropdown" type="button" aria-expanded="false">
											More <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Mark as read</a></li>
											<li><a href="#">Mark as unread</a></li>
											<li><a href="#">Mark as important</a></li>
											<li><a href="#">Mark as not important</a></li>
											<li><a href="#">Add to star</a></li>
										</ul>
									</div>
								</div>
								<div class="page-nav">
									<span class="indicator">1-12 of 18</span>
									<div class="btn-group" role="group">
										<button type="button" class="btn btn-default">
											<i class="fa fa-angle-left"></i>
										</button>
										<button type="button" class="btn btn-default">
											<i class="fa fa-angle-right"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="mails-wrapper">
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Julia Arnold</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">Great News</a></span>
									</div>
									<div class="time-container">
										<span class="time">Apr 6</span>
									</div>
								</div>
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Ken Davison, me (6)</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">Help Needed</a></span>
									</div>
									<div class="time-container">
										<span class="time">Apr 2</span>
									</div>
								</div>
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Ryan Baker, me (2)</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">UX resources for Nike</a></span>
									</div>
									<div class="time-container">
										<span class="attachment-container hidden-xs"> <i
											class="fa fa-paperclip"></i>
										</span> <span class="time">Mar 28</span>
									</div>
								</div>
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Anthony May, me (9)</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">Design Resource Request</a></span>
									</div>
									<div class="time-container">
										<span class="time">10 Apr</span>
									</div>
								</div>
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Doris Martinez</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">Aenean posuere tortor sed
												cursus feugiat nunc augue </a></span>
									</div>
									<div class="time-container">
										<span class="time">03/03/2015</span>
									</div>
								</div>
								<div class="mail-item">
									<div class="checkbox-container">
										<input class="icheck-minimal-grey" type="checkbox" />
									</div>
									<div class="star-container">
										<a href="#"><i class="fa fa-star"></i></a>
									</div>
									<div class="mail-to hidden-xs">
										<a href="#">Albert Hicks</a>
									</div>
									<div class="mail-subject">
										<span class="subject"><a href="#">Phasellus consectetuer
												vestibulum elit viverra rhoncus pede</a></span>
									</div>
									<div class="time-container">
										<span class="time">03/02/2015</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>