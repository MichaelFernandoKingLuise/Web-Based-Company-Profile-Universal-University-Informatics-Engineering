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
        <a href="admin.php?page=inputkaryailmiah" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Karya Ilmiah
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Judul Karya Ilmiah</th>
                    <th>Oleh Karya Ilmiah (Pembuat)</th>
                    <th>Link Karya Ilmiah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_karyailmiah;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $rdata['judul_karyailmiah']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['oleh_karyailmiah']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['link_karyailmiah']; ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_karyailmiah&idkaryailmiah=<?php echo $rdata['id_karyailmiah']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_karyailmiah&idkaryailmiah=<?php echo $rdata['id_karyailmiah']; ?>" class=" d-none
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