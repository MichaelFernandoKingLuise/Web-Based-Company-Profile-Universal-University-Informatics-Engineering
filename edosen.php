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
        <a href="admin.php?page=inputdosen" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Dosen
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Gambar Dosen</th>
                    <th>Nama Dosen</th>
                    <th>Jabatan Dosen</th>
                    <th>NIDN Dosen</th>
                    <th>Link Scholar Dosen</th>
                    <th>Link Sinta Dosen</th>
                    <th>Link Scopus Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_dosen;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td style="width: 20%">
                            <?php echo "<img src = 'images/$rdata[gambar_dosen]' width = '100%' height = '300px'>" ?>
                        </td>
                        <td>
                            <?php echo $rdata['nama_dosen']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['jabatan_dosen']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['nidn_dosen']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['scholar_dosen']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['sinta_dosen']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['scopus_dosen']; ?>
                        </td>
                        <td style="width: 10%">
                            <a href="admin.php?page=edit_dosen&iddosen=<?php echo $rdata['id_dosen']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_dosen&iddosen=<?php echo $rdata['id_dosen']; ?>" class=" d-none
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