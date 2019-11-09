<?php
$db_connection = pg_connect("host=ec2-184-73-232-93.compute-1.amazonaws.com dbname=dfr5diqgclghcj user=jiyfrexzyevjgb
password=c62964fdc99205e14046ec51c65dc8effb2fde516b1c72aaa009deac12401aa5");

$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$verify = pg_query($db_connection, "SELECT * from siteusers where '$hashed_password' 
as matched from siteusers where email = '$email'");

$num_rows = pg_affected_rows($verify);

if(isset($_POST['submit'])){

    if($num_rows > 0){
        header("Location: result.html");
    } else{
        header("Location: login.html");
    }
}

?>