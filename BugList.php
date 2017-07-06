<?php
error_reporting ( E_ALL & ~ E_NOTICE );
include_once 'head.php';
?>
<?php include_once 'header.main.php'; ?>
<?php

include_once 'sidebar.main.php';
if (rights_data ( $rights, 'Buglist' )) {
	if (is_empty ( $_GET ['a'] ) && is_empty ( $_GET ['u'] )) {
		redirect ( 'projectList.php' );
	} else {
		if (! is_empty ( $_GET ['a'] )) {
			$project_id = encryptor ( 'decrypt', $_GET ['a'] );
		} else {
			$project_id = "";
		}
		if (! is_empty ( $_GET ['u'] )) {
			$user_id = encryptor ( 'decrypt', $_GET ['u'] );
		} else {
			$user_id = "";
		}
	}
	// echo $project_id.'pr';
	$project_view = new database ( 'VIEW' );
	if ($project_id !== "" && is_numeric ( $project_id )) {
		
		$query = "SELECT `S_NO`,
    `bug_priority`,
    `bug_frequency`,
    `bug_status`,
    `bug_titles`,
    `bug_precondition`,
    `bug_reproduce`,
    `bug_expected`,
    `bug_project`,
    `bug_raise_user_id`,
    `uname`,
    `project_title`,
    `bug_raise_time`
FROM `bug_view` where bug_project = :bug_project and bug_status <> '6';";
		$condition = [ 
				'bug_project' => $project_id 
		];
		// print_r($condition);
		$project_result = $project_view->query_result ( $query, $condition );
		// print_r($project_result);
	} elseif ($user_id !== "" && is_numeric ( $user_id )) {
		$query = "SELECT `S_NO`,
    `bug_priority`,
    `bug_frequency`,
    `bug_status`,
    `bug_titles`,
    `bug_precondition`,
    `bug_reproduce`,
    `bug_expected`,
    `bug_project`,
    `bug_raise_user_id`,
    `uname`,
    `project_title`,
    `bug_raise_time`
FROM `bug_view` where bug_raise_user_id = :bug_raise_user_id  and bug_status <> '6'";
		// echo $query;
		$condition = [ 
				'bug_raise_user_id' => $user_id 
		];
		$project_result = $project_view->query_result ( $query, $condition );
		// print_r($project_result);
	}
	?>
<div id="content-wrapper" class="content-wrapper view">
	<div class="container-fluid">
		<h2 class="view-title">Bug List</h2>


		<div id="masonry" class="row">
			<div
				class="module-wrapper masonry-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<section class="module module-headings">
					<div class="module-inner">
						<div class="module-heading">
							<h3 class="title"><?php
	if (isset ( $project_result [0] ['project_title'] )) {
		echo xssafe ( $project_result [0] ['project_title'] );
		$project_name = $project_result [0] ['project_title'];
	}
	?></h3>
							<ul class="actions list-inline">
								<li><?php if (rights_data($rights, 'Buglist', 'Create Bugs')) { ?>
                    <div class="actions">

										<button class="btn btn-success" data-toggle="modal"
											data-target="#modal-add-member">
											<i class="fa fa-plus"></i> New Bug
										</button>
									</div>
                <?php } ?></li>

							</ul>

						</div>
<?php
	include_once 'configure.php';
	?>
						<div class="module-content collapse in" id="content-1">
							<div class="module-content-inner no-padding-bottom">
								<div class="table-responsive">
									<table id="datatables-1" class="table table-striped display">
										<thead>
											<tr>
												<th class="number">NO.</th>
												<th class="name">Bug Title</th>
												<th class="priority">Priority</th>
												<th class="priority">Bug Frequency</th>
												<th class="assignee">Bug Raiser</th>
												<th class="status">Time</th>
												<th class="comment">Comment</th>
												<th class="updated">Status</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th class="number">NO.</th>
												<th class="name">Bug Title</th>
												<th class="priority">Priority</th>
												<th class="priority">Bug Frequency</th>
												<th class="assignee">Bug Raiser</th>
												<th class="status">Time</th>
												<th class="comment">Comment</th>
												<th class="updated">Status</th>
											</tr>
										</tfoot>
										<tbody>
											 <?php
	// print_r($project_result);
	foreach ( $project_result as $bug ) {
		$query = 'SELECT `s_no`,   `bug_comment`, `bug_comment_user`,  `bug_comment_time`,  `bug_id`, `bug_comment_file` FROM `bug_comment_view` where bug_id = :bug_id order by bug_comment_time desc';
		$condition = [ 
				'bug_id' => $bug ['S_NO'] 
		];
		$result_comment = $project_view->query_result ( $query, $condition );
		$comments = "";
		$comments_more = "";
		if (count ( $result_comment ) > 0) {
			$i = 1;
			foreach ( $result_comment as $val ) {
				if ($i < 6) {
					$comments .= '<b>' . $val ['bug_comment_user'] . ': </b>' . $val ['bug_comment'] . '<br>';
				}
				$comments_more .= '<span style="margin-left:10px;"><b>' . $val ['bug_comment_user'] . ': </b>' . $val ['bug_comment'] . '</span><br>';
				$i ++;
			}
			$i = 1;
		}
		// echo $comments;
		?>
                                                    <?php
		$add_comment = '<a href="#" class="add-new-member" data-toggle="modal"class="add-new-member" data-toggle="modal"
													data-target="#modal-add-comment_' . $bug ['S_NO'] . '">Add Comment</a>';
		
		$bug_details = $bug ['bug_precondition'] . '<hr>' . $bug ['bug_reproduce'] . '<hr>' . $bug ['bug_expected'];
		?>
                                                    <tr>
												<td class="number"><span class="label label-number"><?php echo substr(str_replace(' ','_','#' . $bug['S_NO'] . '_' . $bug['project_title']),0,10); ?></span></td>
												<td class="name"><a href="#"
													id="project_<?php echo $bug ['S_NO'];?>"><?php echo $bug['bug_titles']; ?></a></td>


												<td class="priority"><span class="label label-number"><?php echo calc_flag('PRIORITY', $bug ['bug_priority']); ?></span></td>
												<td class="status"><span class="label label-number"><?php echo calc_flag('BUGFREQUENCY', $bug['bug_frequency']); ?></span></td>
												<td class="comment"><span class="count"><?php echo $bug['uname']; ?></span></td>
												<td class="commit"><span class="count"><?php echo  date( 'd-m-Y H:i:s',strtotime($bug ['bug_raise_time'])); ?></span></td>
												<td class="name">
                                                            <?php echo $comments; ?>
                                                            <span
													class=""><i class="fa fa-comment"></i><?php echo $add_comment; ?></span>
													<div class="modal"
														id="modal-add-comment_<?php echo $bug['S_NO']; ?>"
														tabindex="-1" role="dialog"
														aria-labelledby="modal-add-member-label">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																	<h4 class="modal-title" id="modal-add-member-label">Add
																		Comment(s)</h4>
																</div>


																<div class="modal-body" style="overflow: auto;">
																	<div id="print_<?php echo $bug ['S_NO']; ?>">
																		<p style="word-wrap: break-word;"><?php echo $comments_more; ?></p>
																	</div>
																	<form action="BugComment.php" method="POST"
																		enctype="multipart/form-data"
																		id="form_<?php echo $bug ['S_NO']; ?>">

																		<input type="text" name="comment"
																			id="<?php echo $bug ['S_NO']; ?>"
																			class="form-control" /> <input type="hidden"
																			value="<?php echo $bug ['S_NO']; ?>" name="bug_val"
																			id="hid_id" />

																		<button type="submit"
																			class="btn btn-success margin-top-md center-block">Add
																			Comment</button>

																	</form>
																</div>
															</div>
														</div>
													</div>
												</td>

												<td class="updated">
                                                            <?php
		$arr_rights = array (
				'1' => 'Open',
				'2' => 'Fixed by ODM Bugs',
				'3' => 'Resolve Bugs',
				'4' => 'Running change bugs',
				'5' => 'Closed',
				'6' => 'Removed' 
		);
		foreach ( $arr_rights as $key => $value ) {
			if (rights_data ( $rights, 'Buglist', $value )) {
				if ($bug ['bug_status'] == $key) {
					$select = 1;
					break;
				} else {
					$select = 0;
					if ($bug ['bug_status'] == '1') {
						$select = 1;
						break;
					}
				}
			}
		}
		if ($select == 1) {
			?>
                                                            <select
													id="bug_<?php echo $bug ['S_NO']; ?>"
													class="form-control bug_stat">
														<option value="1"
															<?php
			if ($bug ['bug_status'] == 1) {
				echo 'selected';
			}
			?>>Open</option>
                                                                <?php if (rights_data($rights, 'Buglist', 'Fixed by ODM Bugs')) { ?><option
															value="2"
															<?php
				if ($bug ['bug_status'] == 2) {
					echo 'selected';
				}
				?>>Fixed by ODM</option><?php }if (rights_data($rights, 'Buglist', 'Resolve Bugs')) { ?>
                                                                    <option
															value="3"
															<?php
				if ($bug ['bug_status'] == 3) {
					echo 'selected';
				}
				?>>Resolved</option><?php }if (rights_data($rights, 'Buglist', 'Running change bugs')) { ?>
                                                                    <option
															value="4"
															<?php
				if ($bug ['bug_status'] == 4) {
					echo 'selected';
				}
				?>>Running Change</option><?php }if (rights_data($rights, 'Buglist', 'Closed')) { ?>
                                                                    <option
															value="5"
															<?php
				if ($bug ['bug_status'] == 5) {
					echo 'selected';
				}
				?>>Closed</option><?php } if (rights_data($rights, 'Buglist', 'Removed')) { ?>
                                                                    <option
															value="6"
															<?php
				if ($bug ['bug_status'] == 6) {
					echo 'selected';
				}
				?>>Removed</option><?php } ?>
                                                            </select>
                                                            <?php
		} else {
			echo $arr_rights [$bug ['bug_status']];
		}
		?>
                                                        </td>
											</tr>
                                                <?php } ?>
											
										</tbody>
									</table>
								</div>

							</div>

						</div>

					</div>

				</section>

			</div>

		</div>

	</div>

</div>
<?php
	include_once 'raiseBugModal.php';
	include_once 'buglist/ViewBugModal.php';
} else {
	echo 'You do not have access to this page please contact admin.';
}
?>
<!--//modal-->
<?php include_once 'footer.php'; ?>
    