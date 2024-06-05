<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {

    $id = $_POST['id_home'];
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
            mysqli_query($db, "UPDATE tbl_home SET gambar_home ='$ft' WHERE id_home = '$id'");
            echo "<script> window.alert('Data Berhasil Diubah'), window.location.replace('admin.php?page=ehomepage'); </script>";
        } else {
            echo "ukuran terlalu besar";
        }
    }
}
?>