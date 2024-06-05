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
        <a href="admin.php?page=inputkarir" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Karir
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Judul Karir</th>
                    <th>Gambar Galeri</th>
                    <th>Isi Karir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_karir;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $rdata['judul_karir']; ?>
                        </td>
                        <td style="width: 30%">
                            <?php echo "<img src = 'images/$rdata[gambar_karir]' width = '50%' height = '300px'>" ?>
                        </td>
                        <td>
                            <?php echo $rdata['isi_karir']; ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_karir&idkarir=<?php echo $rdata['id_karir']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_karir&idkarir=<?php echo $rdata['id_karir']; ?>" class=" d-none
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