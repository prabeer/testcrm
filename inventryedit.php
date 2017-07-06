<?php include_once 'includes/sessionV2.php';
$session = new session ();
// Set to true if using https
$session->start_session ( '_s', false );
unset($_SESSION['project_id']);
//header('Location: createProject2.php');
echo '<script>window.location.href = "createProject2.php"</script>';
