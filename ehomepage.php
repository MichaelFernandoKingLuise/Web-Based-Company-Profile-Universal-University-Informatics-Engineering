<style>
    .card-body {
        margin: 60px 32px 60px 26px;
    }

    .fa-plus {
        font-size: 14px;
    }

    .card-body h2 {
        text-align: center;
        font-weight: 600;
        font-size: 26px;
    }
</style>

<div class="card-body">
    <div class="table-responsive">

        <h2>PASTIKAN GAMBAR MEMILIKI HEIGHT (TINGGI) 540PX HINGGA 600PX DAN HARUS SAMA TINGGINYA !!!</h2>
        <br>
        <a href="admin.php?page=inputhomepage" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Halaman Utama
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Gambar Home</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_home;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo "<img src = 'images/$rdata[gambar_home]' width = '50%' height = '300px'>" ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_homepage&idhome=<?php echo $rdata['id_home']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_homepage&idhome=<?php echo $rdata['id_home']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-danger shadow-sm"
                                onclick="return confirm('Yakin Hapus Data Ini..?')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>