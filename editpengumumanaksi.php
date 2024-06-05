<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_pengumuman'];
    $isi_pengumuman = $_POST['isi_pengumuman'];
    $judul_pengumuman = $_POST['judul_pengumuman'];
    $tanggal_pengumuman = $_POST['tanggal_pengumuman'];

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
            mysqli_query($db, "UPDATE tbl_pengumuman SET isi_pengumuman = '$isi_pengumuman', gambar_pengumuman = '$ft', judul_pengumuman = '$judul_pengumuman', tanggal_pengumuman = '$tanggal_pengumuman' WHERE id_pengumuman = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=epengumuman'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>