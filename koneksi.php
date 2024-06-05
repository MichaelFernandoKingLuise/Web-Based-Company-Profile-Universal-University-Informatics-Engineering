<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "uverstif";

$db = mysqli_connect($host, $user, $pass, $database);

if (!$db) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
}
?>

