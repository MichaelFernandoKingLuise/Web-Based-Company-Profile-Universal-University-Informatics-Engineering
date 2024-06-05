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
$id = $_GET['idkaryailmiah'];
$sql = mysqli_query($db, "SELECT * FROM tbl_karyailmiah where id_karyailmiah = '$id'");
$rdata = mysqli_fetch_array($sql);
?>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=edit_karyailmiahaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Judul Karya Ilmiah: </label>
                    <br>
                    <textarea name="judul_karyailmiah" cols="169"><?php echo $rdata['judul_karyailmiah']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Oleh Karya Ilmiah (Pembuat): </label>
                    <br>
                    <textarea name="oleh_karyailmiah" cols="169"><?php echo $rdata['oleh_karyailmiah']; ?></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Edit Link Karya Ilmiah: </label>
                    <br>
                    <textarea name="link_karyailmiah" cols="169"><?php echo $rdata['link_karyailmiah']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="hidden" name="id_karyailmiah" value="<?php echo $rdata['id_karyailmiah']; ?>">
            <input type="submit" name="ubah" value="Ubah" class="btn btn-warning">
        </div>
    </form>
</div>