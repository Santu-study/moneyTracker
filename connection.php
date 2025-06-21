<?php
$server_name = "localhost";
$username = "root";
$password ="";
$database_name ="login/register_data";
$conn = mysqli_connect($server_name, $username, $password, $database_name);
if (!$conn){ die("connection failed ". mysqli_connect_error()); }
else{
    echo "connection successful";
}
?>