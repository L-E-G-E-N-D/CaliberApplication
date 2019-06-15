<?php   

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$exerdbName = "exerdata";
$connec = mysqli_connect($dbServername, $dbUsername, $dbPassword, $exerdbName);

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);