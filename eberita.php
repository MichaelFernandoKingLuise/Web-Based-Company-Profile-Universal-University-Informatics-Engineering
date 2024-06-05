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
        <a href="admin.php?page=inputberita" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
            <i class="fa fa-plus"></i>
            Berita
        </a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Isi Berita</th>
                    <th>Gambar Berita</th>
                    <th>Judul Berita</th>
                    <th>Tanggal Berita</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_berita;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no; ?>
                        </td>
                        <td>
                            <?php echo $rdata['isi_berita']; ?>
                        </td>
                        <td style="width: 30%">
                            <?php echo "<img src = 'images/$rdata[gambar_berita]' width = '50%' height = '300px'>" ?>
                        </td>
                        <td>
                            <?php echo $rdata['judul_berita']; ?>
                        </td>
                        <td>
                            <?php echo $rdata['tanggal_berita']; ?>
                        </td>
                        <td>
                            <a href="admin.php?page=edit_berita&idberita=<?php echo $rdata['id_berita']; ?>" class=" d-none
                                    d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="admin.php?page=del_berita&idberita=<?php echo $rdata['id_berita']; ?>" class=" d-none
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