<?php
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

// @ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';

if (! is_empty ( $_POST ['newgroup_name'] ) && ! is_empty ( $_POST ['group_type'] )) {
	$group_type = $_POST ['group_type'];
	if (! is_empty ( $_POST ['group_name'] )) {
		$grp_name = $_POST ['group_name'];
	} else {
		$grp_name = "";
	}
	if (! is_empty ( $_POST ['group_description'] )) {
		$group_description = $_POST ['group_description'];
	} else {
		$group_description = "";
	}
	$newgrp_name = $_POST ['newgroup_name'];
} else {
	?>
<div class="alert alert-theme alert-danger alert-dismissible"
	role="alert">
	<button type="button" class="close" data-dismiss="alert"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Oh Snap!</strong> Invalid Details
</div>
<a href="AddNewGroup.php"> Back</a>
<?php
	exit ();
}
if (! is_empty ( $_POST ['rights'] )) {
	$rights = $_POST ['rights'];
	$rights = explode ( ',', $rights );
} else {
	?>
<div class="alert alert-theme alert-danger alert-dismissible"
	role="alert">
	<button type="button" class="close" data-dismiss="alert"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Oh Snap!</strong> Rights not selected
</div>
<a href="AddNewGroup.php">Back</a>
<?php
	exit ();
}

$project_edit = new database ( 'EDIT' );
$project_view = new database ( 'VIEW' );
$query = 'select count(user_group_name) COUNT from group_details where upper(user_group_name) = upper(:user_group_name);';
$condition = [ 
		'user_group_name' => $newgrp_name 
];
$re = $project_view->query_result ( $query, $condition );
// print_r($re);
if (($re [0] ['COUNT']) == 0) {
	$condition = [ 
			'user_group_name' => $newgrp_name,
			'alter_group' => $grp_name,
			'user_group_details' => $group_description 
	];
	
	$query = "INSERT INTO `group_details` (`alter_group`,`user_group_name`, `user_group_details`, `user_group_create_time`, `user_group_image`, `user_group_status`)";
	$query .= " VALUES (:alter_group, :user_group_name, :user_group_details, now(), '', '1');";
	
	$result_data = $project_edit->query_result ( $query, $condition );
	
	if ($result_data == 1) {
		
		$query = "select max(`s.no`) S_NO from group_details;";
		
		$result_data = $project_view->query_result ( $query );
		$group_id = $result_data [0] ['S_NO'];
		// echo $group_id;
		foreach ( $rights as $val ) {
			if ($val > 0) {
				// echo $val.',';
				$condition = [ 
						'rights_id' => $val,
						'group_id' => $group_id 
				];
				$query = 'insert into group_rights_match (rights_id,  group_id) values (:rights_id, :group_id);';
				$result_data = $project_edit->query_result ( $query, $condition );
			}
		}
		?>
<div class="alert alert-theme alert-success alert-dismissible"
	role="alert">
	<button type="button" class="close" data-dismiss="alert"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Well done!</strong> You Have created a New Group. Now Start
	assigning users.
</div>
<a href="AddNewGroup.php"> Back</a>
<?php
	}
} else {
	?>
<div class="alert alert-theme alert-danger alert-dismissible"
	role="alert">
	<button type="button" class="close" data-dismiss="alert"
		aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Oh Snap!</strong> Group Already Exists.
</div>
<a href="AddNewGroup.php"> Back</a>
<?php
}
$project_edit->conn_close ();
$project_view->conn_close ();