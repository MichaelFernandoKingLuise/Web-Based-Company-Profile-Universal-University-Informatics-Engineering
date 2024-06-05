<?php
include "koneksi.php";
$id = $_GET['idterkini'];
$sql = mysqli_query($db, "DELETE FROM tbl_terkini WHERE id_terkini = '$id'");

echo "<script>window.location.replace('admin.php?page=eterkini'); </script>";
?>