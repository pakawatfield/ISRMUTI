<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "isfact";

$condb = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($condb, "UTF8");

if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

