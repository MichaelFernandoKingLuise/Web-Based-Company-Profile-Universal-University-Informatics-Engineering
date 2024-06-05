<?php
include "koneksi.php";
$id = $_GET['idkaryailmiah'];
$sql = mysqli_query($db, "DELETE FROM tbl_karyailmiah WHERE id_karyailmiah = '$id'");

echo "<script>window.location.replace('admin.php?page=ekaryailmiah'); </script>";
?>