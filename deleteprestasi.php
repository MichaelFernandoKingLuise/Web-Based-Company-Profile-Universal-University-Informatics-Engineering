<?php
include "koneksi.php";
$id = $_GET['idprestasi'];
$sql = mysqli_query($db, "DELETE FROM tbl_prestasi WHERE id_prestasi = '$id'");

echo "<script>window.location.replace('admin.php?page=eprestasi'); </script>";
?>