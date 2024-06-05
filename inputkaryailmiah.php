<style>
    .container-inputhomepage {
        padding-left: 26px;
        padding-right: 32px;
    }

    form {
        margin: 40px 0;
    }
</style>

<div class="container-fluid container-inputhomepage">
    <form method="POST" action="admin.php?page=inputkaryailmiahaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Judul Karya Ilmiah: </label>
                    <br>
                    <textarea name="judul_karyailmiah" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Oleh Karya Ilmiah (Pembuat): </label>
                    <br>
                    <textarea name="oleh_karyailmiah" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Link Karya Ilmiah: </label>
                    <br>
                    <textarea name="link_karyailmiah" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
        </div>
    </form>
</div>