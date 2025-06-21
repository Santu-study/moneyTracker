<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "login/register_data";
$conn = mysqli_connect($server_name, $username, $password, $database_name);
if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
else{
    echo "connection successful";
}
// Only run if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];

    if($password !== $confirm_password){
        die("Passwords do not match");
    }
    mysqli_query($conn,"INSERT INTO data  (username, password) VALUES('$username', '$password' ,'$confirm_password', '$gender', '$address', '$email', '$phone_no')");
}
?>