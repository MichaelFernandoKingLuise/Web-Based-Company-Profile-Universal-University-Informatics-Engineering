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
    }
</style>

<div class="card-body">
    <h2>PASTIKAN DATA BERJUMLAH 3 SAJA !!!</h2>
    <div class="table-responsive">
        <a href="admin.php?page=inputterkini" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Terkini
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Isi Terkini</th>
                    <th>Gambar Terkini</th>
                    <th>Judul Terkini</th>
                    <th>Tanggal Terkini</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_terkini;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td style="width: 20%;">
                            <?php echo $rdata['isi_terkini']; ?>
                        </td>
                        <td style="width: 40%;">
                            <?php echo "<img src = 'images/$rdata[gambar_terkini]' width = '50%' height = '300px'>" ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $rdata['judul_terkini']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['tanggal_terkini']; ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_terkini&idterkini=<?php echo $rdata['id_terkini']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_terkini&idterkini=<?php echo $rdata['id_terkini']; ?>" class=" d-none
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