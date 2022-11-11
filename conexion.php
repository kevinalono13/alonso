<?php
$servername = "localhost";
$database = "northwind";
$username = "root";
$password = "";
$mysqli = new mysqli($servername, $username, $password, $database);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";