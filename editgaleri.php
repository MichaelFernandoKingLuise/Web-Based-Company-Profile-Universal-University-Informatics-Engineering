<style>
    .container-inputhomepage {
        padding-left: 26px;
        padding-right: 32px;
    }

    form {
        margin: 40px 0;
    }
</style>

<?php
include "koneksi.php";
$id = $_GET['idgaleri'];
$sql = mysqli_query($db, "SELECT * FROM tbl_galeri where id_galeri = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_galeriaksi" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Ubah Judul Galeri: </label>
                    <br>
                    <textarea name="judul_galeri" cols="169" rows="3"><?php echo $rdata['judul_galeri']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_galeri" value="<?php echo $rdata['id_galeri']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>