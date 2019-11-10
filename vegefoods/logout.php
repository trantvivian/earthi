<?php
session_start();
?>
<?php
session_start();
// Unset all of the session variables.
unset($_SESSION['username']);
// Finally, destroy the session.    
session_destroy();

header("Location: signin.php");
exit;
?>