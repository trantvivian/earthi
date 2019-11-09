<?php
// Unset all of the session variables.
unset($_SESSION['username']);
// Finally, destroy the session.    
session_destroy();

header("Location: login.html");
exit;
?>