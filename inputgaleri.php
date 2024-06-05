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
    <form method="POST" action="admin.php?page=inputgaleriaksi" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Judul Galeri: </label>
                    <br>
                    <textarea name="judul_galeri" cols="169" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
        </div>
    </form>
</div>