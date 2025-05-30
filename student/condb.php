<?php
$host = "localhost";
$username = "zdmtyqaz_dbIS";
$password = "vn3G5B9yTerhSXJRYJ6G";
$database = "zdmtyqaz_dbIS";

$condb = mysqli_connect($host, $username, $password, $database);

if (!$condb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
