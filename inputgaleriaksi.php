<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
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
            echo "Berhasil menyimpan gambar";
        } else {
            echo "ukuran terlalu besar";
        }
    }

    $sql = mysqli_query($db, "INSERT INTO tbl_galeri VALUES (NULL, '$ft', '$_POST[judul_galeri]') ");
    if ($sql) {
        echo "<script> window.alert('Data Berhasil Disimpan'), window.location.replace('admin.php?page=egaleri'); </script>";
    } else {
        die("Gagal!");
    }
}
?>