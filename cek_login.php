<?php
session_start();
include "koneksi.php";

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, md5($_POST['password']));
$login = mysqli_query($db, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
$cekdata = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);

if ($cekdata > 0) {
    session_start();
    $_SESSION['username'] = $data['username'];
    header("Location:admin.php");
} else {
    echo "<script>alert('Maaf, username dan password tidak ditemukan'); window.location.replace('index.php?page=login') </script>";
}
?>