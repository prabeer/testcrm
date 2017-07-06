<?php
ob_start ();
include_once 'includes/functions.php';
include_once 'includes/database2.php';
include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$inventry_type = $_POST ['inventry_type'];
$project_name = $_POST ['project'];
$project_description = $_POST ['inventry_description'];
$q = 0;
$project_view = new database ( 'VIEW' );


if ($q == 0) {
	$project_db = new database ( 'EDIT' );
	$condition = [ 
			'inventry_name' => $project_name,
			'inventry_description' => $project_description,
			'inventry_type' => $inventry_type,
			'inventry_status' => 'ACTIVE',
			'inventry_insert_user' => '1' 
	];
//	echo  $condition;
	$query = 'INSERT INTO inventry_details (inventry_name, inventry_description, inventry_type, inventry_status,  inventry_insert_date, inventry_insert_user) VALUES';
	$query .= ' (:inventry_name, :inventry_description, :inventry_type, :inventry_status,  now(), :inventry_insert_user)';
	$result_data = $project_db->query_result ( $query, $condition );
	//echo $result_data;
	if ($result_data == 1) {
		$_SESSION ['project_id'] = $project_name;
		
		$query = 'select max(`s.no`) s_no from inventry_details';
		
		$result_data = $project_view->query_result ( $query );
		$_SESSION ['inventry_id'] = $result_data [0] ['s_no'];
	}
	$project_db->conn_close ();
} else {
	$_SESSION ['inventry_id'] = $result [0] ['s_no'];
}

?>


<div class="form-group">
	<label class="col-sm-3 control-label">Select Type:</label>
	<div class="col-sm-9">
			<?php echo 'Project';?>
		</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label">Select Project:</label>
	<div class="col-sm-9">
			<?php
			$query = 'select project_topic from project_details where `s.no` = :s_no;';
			$condition = [ 
					's_no' => $project_name 
			];
			
			$res = $project_view->query_result ( $query, $condition );
			echo $res [0] ['project_topic'];
			
			?>
		</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label">Inventry Description</label>
	<div class="col-sm-9">
			<?php echo $project_description;?>
		</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label"></label>
	<div class="col-sm-9">
		<button class="btn btn-success" data-toggle="modal"
			data-target="#modal-new-project" type="submit" id="edit">Add New Inventry</button>
	</div>
</div>
</form>
<?php
