<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_berita'];
    $isi_berita = $_POST['isi_berita'];
    $judul_berita = $_POST['judul_berita'];
    $tanggal_berita = $_POST['tanggal_berita'];

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
            mysqli_query($db, "UPDATE tbl_berita SET isi_berita = '$isi_berita', gambar_berita = '$ft', judul_berita = '$judul_berita', tanggal_berita = '$tanggal_berita' WHERE id_berita = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=eberita'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>