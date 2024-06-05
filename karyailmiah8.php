<?php
include_once "koneksi.php";
$sql = mysqli_query($db, "SELECT * FROM tbl_karyailmiah ORDER BY id_karyailmiah DESC LIMIT 2 OFFSET 14;");
$no = 1;
while ($rdata = mysqli_fetch_array($sql)) {
    ?>
    <ul class="list-karyailmiah">
        <li class="item-karyailmiah">
            <div class="card-item-karyailmiah">
                <h6 class="judul-karyailmiah">
                    <?php echo "$rdata[judul_karyailmiah]"; ?>
                </h6>
                <p class="penulis-karyailmiah">
                    <?php echo "Oleh: $rdata[oleh_karyailmiah]"; ?>
                </p>
                <?php echo "<a href='$rdata[link_karyailmiah]' class='btn btn-primary link-karyailmiah' target='_blank'>Lihat Publikasi</a>"; ?>
            </div>
        </li>
    </ul>
    <?php
    $no++;
}
?>