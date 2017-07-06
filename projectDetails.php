<?php include_once 'head.php'; ?>
<?php include_once 'header.main.php'; ?>
<?php include_once 'sidebar.main.php'; ?>
<?php
$project_id = encryptor('decrypt', $_GET ['a']);
if ($project_id != "" && is_numeric($project_id)) {
    $project_progress = 0;
    $project_view = new database('VIEW');
    $query = "select project_topic, project_description, project_start_date, project_end_date, project_progress, project_insert_user_id, project_status from project_details where `s.no` = :s_no";
    $condition = [
        's_no' => $project_id
    ];
    $project_result = $project_view->query_result($query, $condition);
    if (!is_empty($project_result [0] ['project_progress'])) {
        $project_progress = $project_result [0] ['project_progress'];
    }
    // print_r($project_result);
} else {
    redirect('projectList.php');
}
?>

<div id="content-wrapper"
     class="content-wrapper view project-single-view">
    <div class="container-fluid">
        <div class="project-heading"> 	
            <h2 class="view-title"><?php
                if (isset($project_result [0] ['project_topic'])) {
                    echo $project_result [0] ['project_topic'];
                }
                ?></h2>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-wrapper col-md-8 col-sm-6 col-xs-12">
                <?php
                if (rights_data($rights, 'Reports', 'Graphs')) {
                    include_once 'projectDetails/overview.php';
                }
                ?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <?php
                        if (rights_data($rights, 'Buglist', 'View Buglist')) {
                            include_once 'projectDetails/bugtracker.php';
                        }
                        ?>


                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        if (rights_data($rights, 'TestCase', 'Perform Testcase')) {
                            include_once 'projectDetails/testcase.php';
                        }
                        ?>
                    </div>
                </div>

                <?php
                if (rights_data($rights, 'Inventory', 'Issue Inventry')) {
                    include_once 'projectDetails/inventrydetails.php';
                }
                ?>
            </div>
            <div class="col-wrapper col-md-4 col-sm-6 col-xs-12">
                <?php 
                if (rights_data($rights, 'Reports', 'quickfunction')) {
                include_once 'projectDetails/quickfunctions.php'; 
                }?>
                <?php include_once 'projectDetails/summary.php'; ?>
                <?php include_once 'projectDetails/team.php'; ?>


            </div>
        </div>
    </div>
</div>


<?php include_once 'raiseBugModal.php'; ?>
<footer id="footer" class="site-footer" style="display: none">
    <div class="copyright">
        Copyright &copy; 2016 - <a href="#">Weattach CRM</a>
    </div>
</footer>

<!-- Modal (Add Member) -->

<!-- *****DEMO THEME CONFIG****** -->
<?php include_once 'footer.php'; ?>