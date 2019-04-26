<?php


$dbServername ="mysql.aba.ae";
$dbUsername = "Kirollos";
$dbPassword = "Mysql02051996";
$dbName = "kirollos";

//connecting to database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}