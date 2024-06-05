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
    <form method="POST" action="admin.php?page=inputdosenaksi" enctype="multipart/form-data">
        <div class="form-group">
            <label>Pilih Gambar (maksimal 2 mb)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Nama Dosen: </label>
                    <br>
                    <textarea name="nama_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Jabatan Dosen: </label>
                    <br>
                    <textarea name="jabatan_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input NIDN Dosen: </label>
                    <br>
                    <textarea name="nidn_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Link Scholar Dosen: </label>
                    <br>
                    <textarea name="scholar_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Link Sinta Dosen: </label>
                    <br>
                    <textarea name="sinta_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Input Link Scopus Dosen: </label>
                    <br>
                    <textarea name="scopus_dosen" cols="169" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
        </div>
    </form>
</div>