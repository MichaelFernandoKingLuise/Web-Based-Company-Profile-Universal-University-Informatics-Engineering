<?php
include "koneksi.php";
$id = $_GET['idkarir'];
$sql = mysqli_query($db, "DELETE FROM tbl_karir WHERE id_karir = '$id'");

echo "<script>window.location.replace('admin.php?page=ekarir'); </script>";
?>