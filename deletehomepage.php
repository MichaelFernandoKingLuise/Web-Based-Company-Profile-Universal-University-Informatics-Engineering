<?php
include "koneksi.php";
$id = $_GET['idhome'];
$sql = mysqli_query($db, "DELETE FROM tbl_home WHERE id_home = '$id'");

echo "<script>window.location.replace('admin.php?page=ehomepage'); </script>";
?>