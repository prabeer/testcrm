<?php include_once 'head.php'; ?>
<?php include_once 'header.main.php'; ?>
<?php include_once 'sidebar.main.php'; ?>

<?php

if (rights_data($rights, 'Reports')) {
    include_once 'main.dashboard.php';
} else {
    redirect('projectList.php');
}
?>
<?php include_once 'footer.php'; ?>