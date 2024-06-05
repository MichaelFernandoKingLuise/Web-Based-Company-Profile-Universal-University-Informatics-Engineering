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
$id = $_GET['iddosen'];
$sql = mysqli_query($db, "SELECT * FROM tbl_dosen where id_dosen = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_dosenaksi" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Nama Dosen: </label>
                    <br>
                    <textarea name="nama_dosen" cols="169"><?php echo $rdata['nama_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Jabatan Dosen: </label>
                    <br>
                    <textarea name="jabatan_dosen" cols="169"><?php echo $rdata['jabatan_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit NIDN Dosen: </label>
                    <br>
                    <textarea name="nidn_dosen" cols="169"><?php echo $rdata['nidn_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Link Scholar Dosen: </label>
                    <br>
                    <textarea name="scholar_dosen" cols="169"><?php echo $rdata['scholar_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Link Sinta Dosen: </label>
                    <br>
                    <textarea name="sinta_dosen" cols="169"><?php echo $rdata['sinta_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Link Scopus Dosen: </label>
                    <br>
                    <textarea name="scopus_dosen" cols="169"><?php echo $rdata['scopus_dosen']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_dosen" value="<?php echo $rdata['id_dosen']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>