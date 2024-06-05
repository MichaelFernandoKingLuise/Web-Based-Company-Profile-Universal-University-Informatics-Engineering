<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_terkini'];
    $isi_terkini = $_POST['isi_terkini'];
    $judul_terkini = $_POST['judul_terkini'];
    $tanggal_terkini = $_POST['tanggal_terkini'];

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
            mysqli_query($db, "UPDATE tbl_terkini SET isi_terkini = '$isi_terkini', gambar_terkini = '$ft', judul_terkini = '$judul_terkini', tanggal_terkini = '$tanggal_terkini' WHERE id_terkini = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=eterkini'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>