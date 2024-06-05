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
$id = $_GET['idberita'];
$sql = mysqli_query($db, "SELECT * FROM tbl_berita where id_berita = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_beritaaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit isi Berita: </label>
                    <br>
                    <textarea name="isi_berita" cols="169" rows="20"><?php echo $rdata['isi_berita']; ?></textarea>
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
                    <label>Input Judul Berita: </label>
                    <br>
                    <textarea name="judul_berita" cols="169" rows="3"><?php echo $rdata['judul_berita']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Tanggal: </label>
                    <br>
                    <input type="date" name="tanggal_berita">
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_berita" value="<?php echo $rdata['id_berita']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>