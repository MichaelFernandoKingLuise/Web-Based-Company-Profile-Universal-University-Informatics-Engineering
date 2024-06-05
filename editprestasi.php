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
$id = $_GET['idprestasi'];
$sql = mysqli_query($db, "SELECT * FROM tbl_prestasi where id_prestasi = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_prestasiaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit isi Prestasi: </label>
                    <br>
                    <textarea name="isi_prestasi" cols="169" rows="20"><?php echo $rdata['isi_prestasi']; ?></textarea>
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
                    <label>Ubah Judul Prestasi: </label>
                    <br>
                    <textarea name="judul_prestasi" cols="169" rows="3"><?php echo $rdata['judul_prestasi']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Ubah Tanggal: </label>
                    <br>
                    <input type="date" name="tanggal_prestasi">
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_prestasi" value="<?php echo $rdata['id_prestasi']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>