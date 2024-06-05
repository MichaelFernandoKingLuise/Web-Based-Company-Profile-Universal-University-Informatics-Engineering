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
$id = $_GET['idhome'];
$sql = mysqli_query($db, "SELECT * FROM tbl_home where id_home = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_homepageaksi" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id_home" value="<?php echo $rdata['id_home'] ?>" class="form-control">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="simpan" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>