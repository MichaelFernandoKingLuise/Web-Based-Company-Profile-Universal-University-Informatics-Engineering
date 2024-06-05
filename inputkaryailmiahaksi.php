<?php
include "koneksi.php";
    $sql = mysqli_query($db, "INSERT INTO tbl_karyailmiah VALUES (NULL, '$_POST[judul_karyailmiah]', '$_POST[oleh_karyailmiah]', '$_POST[link_karyailmiah]') ");
    if ($sql) {
        echo "<script> window.alert('Data Berhasil Disimpan'), window.location.replace('admin.php?page=ekaryailmiah'); </script>";
    } else {
        die("Gagal!");
    }
?>