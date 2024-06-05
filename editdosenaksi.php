<?php
include "koneksi.php";
if (isset($_POST['ubah'])) {

    $id = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $jabatan_dosen = $_POST['jabatan_dosen'];
    $nidn_dosen = $_POST['nidn_dosen'];
    $scholar_dosen = $_POST['scholar_dosen'];
    $sinta_dosen = $_POST['sinta_dosen'];
    $scopus_dosen = $_POST['scopus_dosen'];

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
            mysqli_query($db, "UPDATE tbl_dosen SET gambar_dosen = '$ft', nama_dosen = '$nama_dosen', jabatan_dosen = '$jabatan_dosen', nidn_dosen = '$nidn_dosen', scholar_dosen = '$scholar_dosen', sinta_dosen = '$sinta_dosen', scopus_dosen = '$scopus_dosen' WHERE id_dosen = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=edosen'); </script>";
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>