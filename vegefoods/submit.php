<?php $db_connection = pg_connect("host=ec2-184-73-232-93.compute-1.amazonaws.com dbname=dfr5diqgclghcj user=jiyfrexzyevjgb
password=c62964fdc99205e14046ec51c65dc8effb2fde516b1c72aaa009deac12401aa5");

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT into siteusers 
        VALUES ('$full_name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')";

$test = pg_query($db_connection, "SELECT * from siteusers where email='$email'");
$result = pg_query($db_connection, $query);
$num_rows = pg_affected_rows($test);

if($num_rows == 0) {
    header("Location: result.html");
} else {
    header("Location: signup_error.html");
}

?>


