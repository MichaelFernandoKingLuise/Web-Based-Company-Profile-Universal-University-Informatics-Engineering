<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_karyailmiah'];
    $judul_karyailmiah = $_POST['judul_karyailmiah'];
    $oleh_karyailmiah = $_POST['oleh_karyailmiah'];
    $link_karyailmiah = $_POST['link_karyailmiah'];

    mysqli_query($db, "UPDATE tbl_karyailmiah SET judul_karyailmiah = '$judul_karyailmiah', oleh_karyailmiah = '$oleh_karyailmiah', link_karyailmiah = '$link_karyailmiah' WHERE id_karyailmiah = '$id'");
    echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=ekaryailmiah'); </script>";

}
?>