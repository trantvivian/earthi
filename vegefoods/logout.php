<?php
session_start();
$_SESSION['session_secret'] = null;
// $_SESSION = array();
session_unset();

// echo session_status();

header("Location: login.php");
session_destroy();
exit;
?>