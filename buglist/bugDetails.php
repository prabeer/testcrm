<?php
ob_start ();
include_once '../includes/functions.php';
include_once '../includes/database2.php';
include_once '../includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );

$id = explode ( "_", $_POST ['id'] );
$bug_id = $id ['1'];
include_once '../configure.php';

if (! is_empty ( $bug_id )) {
	$project_view = new database ( 'VIEW' );
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
FROM `bug_view` where S_NO = :bug_id;";
	$condition = [ 
			'bug_id' => $bug_id 
	];
	// print_r($condition);
	$project_result = $project_view->query_result ( $query, $condition );
	if (count ( $project_result == 1 )) {
		$bug = array ();
		$bug ['S_NO'] = $project_result [0] ['S_NO'];
		$bug ['bug_priority'] = calc_flag ( 'PRIORITY', $project_result [0] ['bug_priority'] );
		$bug ['bug_frequency'] = calc_flag ( 'BUGFREQUENCY', $project_result [0] ['bug_frequency'] );
		$bug ['bug_status'] = $project_result [0] ['bug_status'];
		
		include_once '../rights_check.php';
		
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
			$bug_stat = '<select id="bugm_' . $bug ['S_NO'] . '" class="form-control bug_stat">\n';
			$bug_stat .= '<option value="1" ';
			if ($bug ['bug_status'] == 1) {
				$bug_stat .= 'selected';
			}
			$bug_stat .= ' >Open</option>';
			if (rights_data ( $rights, 'Buglist', 'Fixed by ODM Bugs' )) {
				$bug_stat .= '<option value="2" ';
				if ($bug ['bug_status'] == 2) {
					$bug_stat .= 'selected';
				}
				$bug_stat .= ' >Fixed by ODM</option>';
			}
			if (rights_data ( $rights, 'Buglist', 'Resolve Bugs' )) {
				$bug_stat .= '<option value="3" ';
				if ($bug ['bug_status'] == 3) {
					$bug_stat .= 'selected';
				}
				$bug_stat .= ' >Resolved</option>';
			}
			if (rights_data ( $rights, 'Buglist', 'Running change bugs' )) {
				$bug_stat .= '<option value="4" ';
				if ($bug ['bug_status'] == 4) {
					$bug_stat .= 'selected';
				}
				$bug_stat .= ' >Running Change</option>';
			}
			if (rights_data ( $rights, 'Buglist', 'Closed' )) {
				$bug_stat .= '<option value="5" ';
				if ($bug ['bug_status'] == 5) {
					$bug_stat .= 'selected';
				}
				$bug_stat .= ' >Closed</option>';
			}
			if (rights_data ( $rights, 'Buglist', 'Removed' )) {
				$bug_stat .= '<option value="6"';
				if ($bug ['bug_status'] == 6) {
					echo 'selected';
				}
				$bug_stat .= ' >Removed</option>';
			}
			$bug_stat .= '</select>';
		} else {
			$bug_stat = calc_flag ( 'BUGSTATUS', $bug ['bug_status'] );
		}
		$bug ['bug_status'] = $bug_stat;
		
		$bug ['bug_titles'] = $project_result [0] ['bug_titles'];
		$bug ['bug_precondition'] = $project_result [0] ['bug_precondition'];
		$bug ['bug_reproduce'] = $project_result [0] ['bug_reproduce'];
		$bug ['bug_expected'] = $project_result [0] ['bug_expected'];
		$bug ['bug_project'] = $project_result [0] ['bug_project'];
		$bug ['bug_raise_user_id'] = $project_result [0] ['bug_raise_user_id'];
		$bug ['uname'] = $project_result [0] ['uname'];
		$bug ['project_title'] = $project_result [0] ['project_title'];
		$bug ['bug_raise_time'] = date ( 'd-m-Y H:i:s', strtotime ( $project_result [0] ['bug_raise_time'] ) );
	}
	echo json_encode ( $bug );
}

?>
	