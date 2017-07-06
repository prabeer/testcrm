<?php include_once 'configure.php'; ?>
<div id="content-wrapper" class="content-wrapper view projects-view">
    <div class="container-fluid">
        <h2 class="view-title"><?php
            if (is_empty($_SESSION ['username']) || is_empty($_SESSION ['userid'])) {
                redirect('login.php');
                echo ('Invalid Login! Enable Javascript');
                exit();
            } else {
                echo xssafe($_SESSION ['username']);
            }
            ?> Dashboard</h2>
        <div class="row">
            <div class="col-wrapper col-lg-8 col-md-7 col-sm-12 col-xs-12">
                <?php if (rights_data($rights, 'Reports', 'graphs')) { ?>
                    <div class="module-wrapper">
                        <section class="module module-has-footer module-projects-overview">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">Overview</h3>
                                    <?php
                                    $dashboard = new database('VIEW');
                                    $query = "select count(*) project_count from project_details where project_status = 'OPEN' or upper(project_status) = 'IN PROGRESS';";
                                    $project_count_a = $dashboard->query_result($query);

                                    if (!is_empty($project_count_a [0] ['project_count'])) {
                                        $project_count = $project_count_a [0] ['project_count'];
                                    } else {
                                        $project_count = '0';
                                    }

                                    $query = 'SELECT count(*) bug_count FROM bug_details where bug_status not in (4,5);';
                                    $bug_count_a = $dashboard->query_result($query);
                                    if (!is_empty($bug_count_a [0] ['bug_count'])) {
                                        $bug_count = $bug_count_a [0] ['bug_count'];
                                    } else {
                                        $bug_count = '0';
                                    }

                                    $query = "SELECT count(1) inv_count  FROM inventry_details where inventry_status = 'ACTIVE';";
                                    $inv_count_a = $dashboard->query_result($query);
                                    if (!is_empty($inv_count_a [0] ['inv_count'])) {
                                        $inv_count = $inv_count_a [0] ['inv_count'];
                                    } else {
                                        $inv_count = '0';
                                    }
                                    $query = 'SELECT count(1) testcase_count FROM testcase_details where testcase_status = 1;';

                                    $test_case_a = $dashboard->query_result($query);
                                    if (!is_empty($test_case_a [0] ['testcase_count'])) {
                                        $test_case = $test_case_a [0] ['testcase_count'];
                                    } else {
                                        $test_case = '0';
                                    }
                                    ?>


                                </div>

                                <div class="module-content collapse in" id="content-overview">
                                    <div class="module-content-inner">
                                        <ul class="data-list row text-center">
                                            
                                                <li class="item item-1 col-lg-3 col-md-6 col-sm-6 col-xs-6"><a
                                                        href="#"> <span aria-hidden="true"
                                                                                  class="icon icon_toolbox_alt"></span> <span class="data"><?php echo $project_count; ?></span>
                                                        <span class="desc">Open <br>Projects
                                                        </span>
                                                    </a></li>
                                            
                                            <li class="item item-2 col-lg-3 col-md-6 col-sm-6 col-xs-6"><a
                                                    href="#"> <span aria-hidden="true"
                                                                              class="icon icon_box-checked"></span> <span class="data"><?php echo $bug_count; ?></span>
                                                    <span class="desc">Open <br>Bugs
                                                    </span>
                                                </a></li>
                                            <li class="item item-3 col-lg-3 col-md-6 col-sm-6 col-xs-6"><a
                                                    href="#"> <span aria-hidden="true"
                                                                           class="icon icon_chat_alt"></span> <span class="data"><?php echo $inv_count; ?></span>
                                                    <span class="desc">Total <br>Inventory
                                                    </span>
                                                </a></li>
                                            <li class="item item-4 col-lg-3 col-md-6 col-sm-6 col-xs-6"><a
                                                    href="#"> <span aria-hidden="true"
                                                                               class="icon icon_documents_alt"></span> <span class="data"><?php echo $test_case; ?></span>
                                                    <span class="desc">Test<br>Cases
                                                    </span>
                                                </a></li>
                                        </ul>
                                        <div class="row">
                                            <div class="time-overview col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <h4 class="title">
                                                        <span aria-hidden="true" class="icon icon_clock_alt"></span>Bugs
                                                        Reported Per Day

                                                    </h4>
                                                    <div class="chart-container">
                                                        <div id="time-chart" class="flot-chart"
                                                             style="height: 160px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type-overview col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <h4 class="title">
                                                        <span aria-hidden="true" class="icon icon_datareport"></span>Time
                                                        spent on each project
                                                    </h4>
                                                    <div class="chart-container">
                                                        <div id="type-chart" class="flot-chart"
                                                             style="height: 140px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>


                        </section>

                    </div>
                <?php } ?>

                <div class="row">
                    <?php
                    if (rights_data($rights, 'project', 'View All Project')) {
                        ?>
                        <div class="module-wrapper col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <section class="module module-has-footer module-projects-list">
                                <div class="module-inner">
                                    <div class="module-heading">
                                        <h3 class="module-title">Latest Projects</h3>

                                    </div>
    <?php
    $query = "select  `s.no` S_NO,project_topic, project_progress from project_details where  upper(project_status) = 'OPEN' or upper(project_status) = 'IN PROGRESS' order by Project_insert_date limit 5;";
    $results = $dashboard->query_result($query);
    $project_count = count($results);
    //  print_r($results);
    ?>
                                    <div class="module-content collapse in" id="content-projects">
                                        <div class="module-content-inner">
                                            <div class="table-responsive">
                                                <table class="table table-simple">
                                                    <thead>
                                                        <tr>
                                                            <th class="truncate">Project Name</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
    <?php
    $res = array_filter($results);
    if (!empty($res)) {
        foreach ($results as $pr) {
            ?>
                                                                <tr>
                                                                    <td class="truncate"><a
                                                                            href="projectDetails.php?a=<?php echo encryptor('encrypt', xssafe($pr['S_NO'])); ?>"> <?php echo xssafe($pr['project_topic']); ?></a></td>
                                                                    <td>
                                                                        <div class="progress-container">
            <?php
            if (!is_empty($pr ['project_progress'])) {

                $project_progress = xssafe($pr ['project_progress']);
            } else {
                $project_progress = '0';
            }
            ?>
                                                                            <span class="progress progress-sm"> <span
                                                                                    class="progress-bar progress-bar-info"
                                                                                    role="progressbar" aria-valuenow="<?php echo $project_progress; ?>" aria-valuemin="0"
                                                                                    aria-valuemax="100" style="width: <?php echo $project_progress; ?>%">
                                                                                </span>
                                                                            </span> <span class="progress-pc hidden-xs"><?php echo $project_progress; ?>%</span>
                                                                        </div>

                                                                    </td>
                                                                </tr>
            <?php
        }
    } else {
        ?>
                                                            <tr>
                                                                <td rowspan="2">Projects Not Started</td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="module-footer text-center">
                                    <ul class="shortcuts list-inline">
                                        <?php if (rights_data($rights, 'project', 'View All Project')) { ?>
                                            <li class="first"><a href="projectList.php">View all projects
                                                    (<?php echo $project_count; ?>)</a></li>
                                        <?php } ?>
                                        <?php if (rights_data($rights, 'project', 'Write All Project')) { ?>
                                            <li><a href="createProject.php">Add Project</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </section>

                        </div>
<?php } ?>
 <?php
                    if (rights_data($rights, 'Buglist', 'View Buglist')) {
                        ?>
                        <div class="module-wrapper col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <section class="module module-has-footer module-tickets">
                                <div class="module-inner">
                                    <div class="module-heading">
                                        <h3 class="module-title">Latest Bugs</h3>


                                    </div>

                                    <div class="module-content collapse in" id="content-tickets">
                                        <div class="module-content-inner">
                                            <div class="table-responsive">
    <?php
    $query = "select bug_id,project_topic, bug_titles, bug_priority from dashboard_bug_list;";
    $bug_list = $dashboard->query_result($query);
    ?>
                                                <table class="table table-simple">
                                                    <thead>
                                                        <tr>
                                                            <th class="number">Project</th>
                                                            <th class="truncate">Bug Name</th>
                                                            <th>Priority</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
    <?php foreach ($bug_list as $bug) { ?>
                                                            <tr>
                                                                <td><span class="truncate"><?php echo $bug['project_topic']; ?></span></td>
                                                                <td class="truncate"><a href="#"><?php echo $bug['bug_titles']; ?></a></td>
                                                                <td><span class="label label-normal"><?php echo calc_flag('PRIORITY', $bug['bug_priority']); ?></span></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="module-footer text-center">
                                    <ul class="shortcuts list-inline">

                                    </ul>
                                </div>

                            </section>

                        </div>
<?php } ?>

                </div>

<?php
if (rights_data($rights, 'Inventory', 'Issue Inventry')) {

    ?>
                    <div class="module-wrapper">
                        <section class="module module-projects-invoices">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">New Inventory</h3>
                                    <ul class="actions list-inline">

                                        <li><a class="collapse-module" data-toggle="collapse"
                                               href="#content-invoices" aria-expanded="false"
                                               aria-controls="content-invoices"><span aria-hidden="true"
                                                                                   class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true"
                                                                                   class="icon icon_close"></span></a></li>
                                    </ul>

                                </div>

                                <div class="module-content collapse in" id="content-invoices">
                                    <div class="module-content-inner">
                                        <div class="table-responsive">
    <?php
    $query = "SELECT bar_code, item_name, item_assigned_datetime, to_user_Name FROM inventry_transaction order by item_assigned_datetime desc limit 10;";
    $inv_result = $dashboard->query_result($query);
    // print_r($inv_result);
    if (!empty($inv_result) || is_array($inv_result)) {
        ?>
                                                <table class="table table-simple table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="number">Inventory Code</th>
                                                            <th>Project Name</th>
                                                            <th>Added Date</th>
                                                            <th>Item Assighnment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
        <?php foreach ($inv_result as $inv) { ?>
                                                            <tr>
                                                                <td><a
                                                                        href="projectInventry.php?b=<?php echo encryptor('encrypt', $inv['bar_code']); ?>"
                                                                        class="label label-number-alt"><?php echo xssafe($inv['bar_code']); ?></a></td>
                                                                <td class="truncate"><a
                                                                        href="projectInventry.php?b=<?php echo encryptor('encrypt', $inv['bar_code']); ?>"><?php echo xssafe($inv['item_name']); ?></a></td>
                                                                <td class="total"><a
                                                                        href="projectInventry.php?b=<?php echo encryptor('encrypt', $inv['bar_code']); ?>"><?php echo xssafe($inv['item_assigned_datetime']); ?></a></td>
                                                                <td class="total"><a
                                                                        href="projectInventry.php?b=<?php echo encryptor('encrypt', $inv['bar_code']); ?>"><?php echo xssafe($inv['to_user_Name']); ?></a></td>
                                                            </tr>
        <?php } ?>

                                                    </tbody>
                                                </table>
    <?php } ?>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </section>

                    </div>

<?php } ?>

            </div>

            <div class="col-wrapper col-lg-4 col-md-5 col-sm-12 col-xs-12">
<?php
if (rights_data($rights, 'Project', 'View All Project')) {
    ?>
                    <div class="module-wrapper">
                        <section class="module module-projects-sales">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">Project Wise Bug Count</h3>
                    <?php
                    $query = "select project_topic, bug_count from project_wise_bug_count;";
                    $project_bug_count_a = $dashboard->query_result($query);
                    ?>
                                    <ul class="actions list-inline">

                                        <li><a class="collapse-module" data-toggle="collapse"
                                               href="#content-sales" aria-expanded="false"
                                               aria-controls="content-sales"><span aria-hidden="true"
                                                                                class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true"
                                                                                   class="icon icon_close"></span></a></li>
                                    </ul>

                                </div>

                                <div class="module-content collapse in" id="content-sales">
                                    <div class="module-content-inner">
                                        <div class="table-responsive">
                                            <table class="table table-simple">
                                                <thead>
                                                    <tr>
                                                        <th class="number">Project</th>
                                                        <th class="truncate">Bug Count</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php foreach ($project_bug_count_a as $project_bug_count) { ?>
                                                        <tr>
                                                            <td><span class="truncate"> <a href="#"><?php echo $project_bug_count['project_topic']; ?></a></span></td>
                                                            <td><?php echo $project_bug_count['bug_count']; ?></td>
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
<?php } ?>
<?php
$val = array();
$val = rights_data($rights, null, 'activity');

if (!empty($val)) {
    ?>
                    <div class="module-wrapper">
                        <section class="module module-projects-activities">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">Recent Activities</h3>
                                    <ul class="actions list-inline">

                                        <li><a class="collapse-module" data-toggle="collapse"
                                               href="#content-activities" aria-expanded="false"
                                               aria-controls="content-activities"><span aria-hidden="true"
                                                                                     class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true"
                                                                                   class="icon icon_close"></span></a></li>
                                    </ul>

                                </div>

                                <div class="module-content collapse in" id="content-activities">
                                    <div class="module-content-inner">
                                        <div role="tabpanel" class="tab-wrapper">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-theme-1" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab-1"
                                                                                          aria-controls="tab-1" role="tab" data-toggle="tab">All</a></li>
                                                <li role="presentation"><a href="#tab-2"
                                                                           aria-controls="tab-2" role="tab" data-toggle="tab">Projects</a></li>
                                                <li role="presentation"><a href="#tab-3"
                                                                           aria-controls="tab-3" role="tab" data-toggle="tab">Bugs</a></li>
                                                <li role="presentation"><a href="#tab-4"
                                                                           aria-controls="tab-4" role="tab" data-toggle="tab">Discussions</a></li>
                                                <li role="presentation"><a href="#tab-5"
                                                                           aria-controls="tab-5" role="tab" data-toggle="tab">Files</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="tab-1">
                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-1.png" alt="" />
                                                                <span class="status offline" data-toggle="tooltip"
                                                                      data-placement="right" title="Offline"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Ken D</a> created a new
                                                                project <a href="#">[Project fringilla vel aliquet nec]</a>
                                                            </p>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 2 mins ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon  icon_toolbox_alt"></span> <a href="#">Project</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-2.png" alt="" />
                                                                <span class="status online" data-toggle="tooltip"
                                                                      data-placement="right" title="Online"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Rachel W</a> shared a
                                                                folder <a href="#">[UI mocks]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">I’m sharing this folder ahead of the team
                                                                    meeting. Let me know if orem sed massa bibendum maximus
                                                                    quis sit amet diam...</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 5 hrs ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon  icon_paperclip"></span> <a href="#">File</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-3.png" alt="" />
                                                                <span class="status busy" data-toggle="tooltip"
                                                                      data-placement="right" title="Busy"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Rebecca S</a> commented
                                                                on bug <a href="#">[#22 Maecenas tempus adipiscing]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">Hmm, is it possible to move mattis semper.
                                                                    Pellentesque mattis libero at vestibulum vehicula. Lorem
                                                                    ipsum dolor sit amet, consectetur. :)</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 3 days ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon icon_box-checked"></span> <a href="#">bug</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-4.png" alt="" />
                                                                <span class="status online" data-toggle="tooltip"
                                                                      data-placement="right" title="Online"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Ryan B</a> started a new
                                                                discussion <a href="#">[Some suggestions regarding the
                                                                    code review process]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">Cras dapibus. Vivamus elementum semper nisi.
                                                                    Aenean vulputate eleifend tellus. Aenean leo ligula
                                                                    porttitor eu consequat vitae...</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> Mar 23, 2015</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon icon_chat_alt"></span> <a href="#">Discussion</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tab-2">
                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-1.png" alt="" />
                                                                <span class="status offline" data-toggle="tooltip"
                                                                      data-placement="right" title="Offline"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Ken D</a> created a new
                                                                project <a href="#">[Project fringilla vel aliquet nec]</a>
                                                            </p>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 2 mins ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon  icon_toolbox_alt"></span> <a href="#">Project</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tab-3">
                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-3.png" alt="" />
                                                                <span class="status busy" data-toggle="tooltip"
                                                                      data-placement="right" title="Busy"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Rebecca S</a> commented
                                                                on bug <a href="#">[#22 Maecenas tempus adipiscing]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">Hmm, is it possible to move mattis semper.
                                                                    Pellentesque mattis libero at vestibulum vehicula. Lorem
                                                                    ipsum dolor sit amet, consectetur. :)</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 3 days ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon icon_box-checked"></span> <a href="#">bug</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tab-4">
                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-4.png" alt="" />
                                                                <span class="status online" data-toggle="tooltip"
                                                                      data-placement="right" title="Online"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Ryan B</a> started a new
                                                                discussion <a href="#">[Some suggestions regarding the
                                                                    code review process]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">Cras dapibus. Vivamus elementum semper nisi.
                                                                    Aenean vulputate eleifend tellus. Aenean leo ligula
                                                                    porttitor eu consequat vitae...</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> Mar 23, 2015</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon icon_chat_alt"></span> <a href="#">Discussion</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div role="tabpanel" class="tab-pane" id="tab-5">
                                                    <div class="item">
                                                        <div class="profile">
                                                            <div class="profile-inner">
                                                                <img src="assets/images/profiles/profile-2.png" alt="" />
                                                                <span class="status online" data-toggle="tooltip"
                                                                      data-placement="right" title="Online"></span>
                                                            </div>

                                                        </div>

                                                        <div class="activity">
                                                            <p class="summary">
                                                                <a class="profile-name" href="#">Rachel W</a> shared a
                                                                folder <a href="#">[UI mocks]</a>
                                                            </p>
                                                            <div class="excerpt">
                                                                <a href="#">I’m sharing this folder ahead of the team
                                                                    meeting. Let me know if orem sed massa bibendum maximus
                                                                    quis sit amet diam...</a>
                                                            </div>
                                                            <ul class="meta list-inline">
                                                                <li class="time"><span aria-hidden="true"
                                                                                       class="icon icon_clock_alt"></span> 5 hrs ago</li>
                                                                <li class="type"><span aria-hidden="true"
                                                                                       class="icon  icon_paperclip"></span> <a href="#">File</a></li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                    </div>
<?php } ?>

            </div>

        </div>

    </div>

</div>