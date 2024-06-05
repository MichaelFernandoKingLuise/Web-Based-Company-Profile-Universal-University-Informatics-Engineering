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
$id = $_GET['idkarir'];
$sql = mysqli_query($db, "SELECT * FROM tbl_karir where id_karir = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_kariraksi" enctype="multipart/form-data">
    <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Ubah Judul karir: </label>
                    <br>
                    <textarea name="judul_karir" cols="169" rows="3"><?php echo $rdata['judul_karir']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Ubah Isi karir: </label>
                    <br>
                    <textarea name="isi_karir" cols="169" rows="3"><?php echo $rdata['isi_karir']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_karir" value="<?php echo $rdata['id_karir']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>