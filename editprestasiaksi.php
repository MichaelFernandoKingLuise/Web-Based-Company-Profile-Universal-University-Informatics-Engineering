<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_prestasi'];
    $isi_prestasi = $_POST['isi_prestasi'];
    $judul_prestasi = $_POST['judul_prestasi'];
    $tanggal_prestasi = $_POST['tanggal_prestasi'];

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
            mysqli_query($db, "UPDATE tbl_prestasi SET isi_prestasi = '$isi_prestasi', gambar_prestasi = '$ft', judul_prestasi = '$judul_prestasi', tanggal_prestasi = '$tanggal_prestasi' WHERE id_prestasi = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=eprestasi'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>