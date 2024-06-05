<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_karir'];
    $judul_karir = $_POST['judul_karir'];
    $isi_karir = $_POST['isi_karir'];

    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        echo "Gagal menyimpan gambar";
    } else {
        if ($ukuran < 11044070) {
            $ft = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/' . $rand . '_' . $filename);
            mysqli_query($db, "UPDATE tbl_karir SET judul_karir = '$judul_karir', gambar_karir = '$ft', isi_karir = '$isi_karir' WHERE id_karir = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=ekarir'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>