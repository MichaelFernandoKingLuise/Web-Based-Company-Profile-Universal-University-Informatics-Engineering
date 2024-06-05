<?php
include "koneksi.php";
$id = $_GET['iddosen'];
$sql = mysqli_query($db, "DELETE FROM tbl_dosen WHERE id_dosen = '$id'");

echo "<script>window.location.replace('admin.php?page=edosen'); </script>";
?>