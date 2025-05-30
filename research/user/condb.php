<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "isfact";

$condb = mysqli_connect($host, $username, $password, $database);

if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
