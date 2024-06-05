<?php
include "koneksi.php";
$id = $_GET['idpengumuman'];
$sql = mysqli_query($db, "DELETE FROM tbl_pengumuman WHERE id_pengumuman = '$id'");

echo "<script>window.location.replace('admin.php?page=epengumuman'); </script>";
?>