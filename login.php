<?php
//FOR CONNECT THE DATABASE TO CONNECTION PAGE
include("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];
mysqli_query($conn,"INSERT INTO data  (username, password) VALUES('$username', '$password')");
?>