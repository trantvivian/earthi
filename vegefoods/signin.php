<?php
session_start();
$db_connection = pg_connect("host=ec2-184-73-232-93.compute-1.amazonaws.com dbname=dfr5diqgclghcj user=jiyfrexzyevjgb
password=c62964fdc99205e14046ec51c65dc8effb2fde516b1c72aaa009deac12401aa5");

$email = $_POST['email'];
$password = $_POST['password'];

$verify = pg_query($db_connection, "SELECT * from siteusers where email = '$email'");
$verify_row = pg_fetch_row($verify);
$grab_password = $verify_row[6];

echo $grab_password;
echo $password;

$num_rows = pg_affected_rows($verify);

if(isset($_POST['submit'])){

    if(password_verify($password, $grab_password)){
        // echo session_status();
        $_SESSION["session_secret"] = "earthi123";
        header("Location: member.php");
    }
    else if($num_rows == 0){
        header("Location: login_error.php");
    }
    else{
        header("Location: login_error2.php");
    }
}

?>