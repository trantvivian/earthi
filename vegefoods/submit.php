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

$prequery = "SELECT * FROM siteusers (email)
            WHERE $password = *";

$query = "INSERT into siteusers 
        VALUES ('$full_name', '$email', '$address', '$city', '$state', '$zipcode', '$hashed_password')
        ON CONFLICT (email) DO NOTHING";

// IF ($prequery == "") THEN
    $result = pg_query($db_connection, $query);
    header("Location: result.html");
// ELSE
//     header("Location: about.html");
// END IF;
exit;

?>


