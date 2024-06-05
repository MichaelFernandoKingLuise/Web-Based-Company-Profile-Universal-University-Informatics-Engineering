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
    <form method="POST" action="admin.php?page=inputprestasiaksi" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Isi Prestasi: </label>
                    <br>
                    <textarea name="isi_prestasi" cols="169" rows="20"></textarea>
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
                    <label>Input Judul Prestasi: </label>
                    <br>
                    <textarea name="judul_prestasi" cols="169" rows="3"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Tanggal: </label>
                    <br>
                    <input type="date" name="tanggal_prestasi">
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
        </div>
    </form>
</div>