<style>
    .card-body {
        margin: 60px 32px 60px 26px;
    }

    .fa-plus {
        font-size: 14px;
    }
</style>

<div class="card-body">
    <div class="table-responsive">
        <a href="admin.php?page=inputprestasi" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Prestasi
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Isi Prestasi</th>
                    <th>Gambar Prestasi</th>
                    <th>Judul Prestasi</th>
                    <th>Tanggal Prestasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_prestasi;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $rdata['isi_prestasi']; ?>
                        </td>
                        <td style="width: 30%">
                            <?php echo "<img src = 'images/$rdata[gambar_prestasi]' width = '50%' height = '300px'>" ?>
                        </td>
                        <td>
                            <?php echo $rdata['judul_prestasi']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['tanggal_prestasi']; ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_prestasi&idprestasi=<?php echo $rdata['id_prestasi']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_prestasi&idprestasi=<?php echo $rdata['id_prestasi']; ?>" class=" d-none
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