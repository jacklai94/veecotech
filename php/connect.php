<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "invoice_sys";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: %s\n " . mysqli_connect_error());
    exit();
}
?>