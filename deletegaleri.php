<?php
include "koneksi.php";
$id = $_GET['idgaleri'];
$sql = mysqli_query($db, "DELETE FROM tbl_galeri WHERE id_galeri = '$id'");

echo "<script>window.location.replace('admin.php?page=egaleri'); </script>";
?>