<style>
    .container-prestasi {
        padding-left: 26px;
        padding-right: 32px;
    }

    .prestasi-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 60px 50px 120px;
    }

    .judulbesar-prestasi {
        margin-bottom: 100px;
    }

    .judulbesar-prestasi h2 {
        font-family: Open Sans, sans-serif;
        color: #2e3b44;
        font-size: 50px;
        font-weight: 700;
    }

    .judulbesar-prestasi::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .8rem;
        margin: 1.5rem 0 0;
        position: absolute;
        width: 7rem;
    }

    .isi-prestasi {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .kartu-wrapper-prestasi {
        display: flex;
        flex-direction: row;
        padding: 25px;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .1);
    }

    .kartu-wrapper-prestasi:not(:last-child) {
        margin-bottom: 40px;
    }

    .wrapper-foto {
        width: 30%;
        height: 100%;
    }

    .wrapper-deskripsi-prestasi {
        display: flex;
        flex-direction: column;
        padding: 0 20px;
        width: 100%;
    }

    .foto-prestasi {
        width: 100%;
        height: 200px;
    }

    .foto-prestasi img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .judul-prestasi a {
        font-family: "Open Sans", sans-serif;
        font-size: 27px;
        font-weight: 500;
        color: #3E4D5C;
        text-decoration: none;
    }

    .judul-prestasi a:hover {
        color: #2762AE;
        font-weight: 500;
    }

    .tanggal time {
        font-family: "Open Sans", Arial, sans-serif;
        font-size: 13px;
        padding-left: 5px;
        color: #555;
    }

    .penjelasan-prestasi {
        font-size: 15px;
        font-weight: 600;
        padding-top: 5px;
        color: #555;
    }

    .link-baca-selengkapnya {
        margin-top: auto;
        padding-top: 20px;
    }

    .link-baca-selengkapnya a {
        font-size: 15px;
        font-weight: 600;
        color: #2e3b44;
        text-decoration: none;
    }

    .link-baca-selengkapnya a:hover {
        color: #2762AE;
    }

    @media (min-width: 991px) and (max-width: 1199.98px) {
        .judulbesar-prestasi h2 {
            font-size: 44px;
        }

        .judulbesar-prestasi::after {
            width: 6rem;
        }

        .judul-prestasi a {
            font-size: 24px;
        }

        .penjelasan-prestasi {
            font-size: 14.5px;
        }

        .link-baca-selengkapnya a {
            font-size: 14px;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .judulbesar-prestasi h2 {
            font-size: 42px;
        }

        .judulbesar-prestasi::after {
            width: 5.8rem;
        }

        .wrapper-foto {
            width: 45%;
        }

        .foto-prestasi {
            height: 180px;
        }

        .fa-calendar {
            font-size: 0.70em !important;
        }

        .tanggal time {
            font-size: 12.5px;
        }

        .judul-prestasi a {
            font-size: 22px;
        }

        .penjelasan-prestasi {
            font-size: 14.2px;
        }

        .link-baca-selengkapnya a {
            font-size: 13.8px;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .judulbesar-prestasi h2 {
            font-size: 38px;
        }

        .judulbesar-prestasi::after {
            width: 5.5rem;
        }

        .wrapper-foto {
            width: 55%;
        }

        .foto-prestasi {
            height: 150px;
        }

        .fa-calendar {
            font-size: 0.70em !important;
        }

        .tanggal time {
            font-size: 12.5px;
        }

        .judul-prestasi a {
            font-size: 22px;
        }

        .penjelasan-prestasi {
            font-size: 14.2px;
        }

        .link-baca-selengkapnya a {
            font-size: 13.8px;
        }
    }

    @media (min-width: 500px) and (max-width: 543.98px) {
        .judulbesar-prestasi h2 {
            font-size: 36px;
        }

        .judulbesar-prestasi::after {
            width: 5rem;
        }

        .wrapper-foto {
            width: 70%;
        }

        .foto-prestasi {
            height: 130px;
        }

        .fa-calendar {
            font-size: 0.70em !important;
        }

        .tanggal time {
            font-size: 12px;
        }

        .judul-prestasi a {
            font-size: 21px;
        }

        .penjelasan-prestasi {
            font-size: 14px;
        }

        .link-baca-selengkapnya a {
            font-size: 13.5px;
        }
    }

    @media (min-width: 432px) and (max-width: 499.98px) {
        .prestasi-wrapper {
            align-items: center;
        }

        .judulbesar-prestasi h2 {
            font-size: 34px;
        }

        .judulbesar-prestasi::after {
            width: 4.8rem;
            height: .7rem;
            margin: 1.4rem 0 0;
            margin-left: 28px;
        }

        .kartu-wrapper-prestasi {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .wrapper-foto {
            width: 80%;
        }

        .foto-prestasi {
            height: 100%;
            width: 100%;
        }

        .judul-prestasi {
            margin-top: 10px;
            margin-bottom: 3px;
        }

        .judul-prestasi a {
            font-size: 20px;
        }

        .wrapper-deskripsi-prestasi {
            padding: 0 10px;
        }

        .fa-calendar {
            font-size: 0.80em !important;
        }

        .tanggal time {
            font-size: 12px;
            margin-bottom: 3px;
        }

        .penjelasan-prestasi {
            font-size: 13.5px;
            padding-top: 8px;
        }

        .link-baca-selengkapnya a {
            font-size: 13px;
        }
    }

    @media (min-width: 400px) and (max-width: 431.98px) {
        .prestasi-wrapper {
            align-items: center;
        }

        .judulbesar-prestasi h2 {
            font-size: 32px;
        }

        .judulbesar-prestasi::after {
            width: 4.5rem;
            height: .65rem;
            margin: 1.3rem 0 0;
            margin-left: 28px;
        }

        .kartu-wrapper-prestasi {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .wrapper-foto {
            width: 90%;
        }

        .foto-prestasi {
            height: 100%;
            width: 100%;
        }

        .judul-prestasi {
            margin-top: 10px;
            margin-bottom: 3px;
        }

        .judul-prestasi a {
            font-size: 20px;
        }

        .wrapper-deskripsi-prestasi {
            padding: 0 8px;
        }

        .fa-calendar {
            font-size: 0.80em !important;
        }

        .tanggal time {
            font-size: 12px;
            margin-bottom: 3px;
        }

        .penjelasan-prestasi {
            font-size: 13.5px;
            padding-top: 8px;
        }

        .link-baca-selengkapnya a {
            font-size: 13px;
        }
    }

    @media (min-width: 360px) and (max-width: 399.98px) {
        .prestasi-wrapper {
            align-items: center;
            padding: 60px 30px 120px;
        }

        .judulbesar-prestasi h2 {
            font-size: 32px;
        }

        .judulbesar-prestasi::after {
            width: 4.5rem;
            height: .65rem;
            margin: 1.3rem 0 0;
            margin-left: 28px;
        }

        .kartu-wrapper-prestasi {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 25px 15px;
        }

        .wrapper-foto {
            width: 90%;
        }

        .foto-prestasi {
            height: 100%;
            width: 100%;
        }

        .judul-prestasi {
            margin-top: 10px;
            margin-bottom: 3px;
        }

        .judul-prestasi a {
            font-size: 18px;
        }

        .wrapper-deskripsi-prestasi {
            padding: 0 8px;
        }

        .fa-calendar {
            font-size: 0.75em !important;
        }

        .tanggal time {
            font-size: 11.8px;
            margin-bottom: 3px;
        }

        .penjelasan-prestasi {
            font-size: 13.2px;
            padding-top: 8px;
        }

        .link-baca-selengkapnya a {
            font-size: 12.8px;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {
        .prestasi-wrapper {
            align-items: center;
            padding: 60px 15px 120px;
        }

        .judulbesar-prestasi h2 {
            font-size: 26px;
        }

        .judulbesar-prestasi::after {
            width: 4rem;
            height: .6rem;
            margin: 1.2rem 0 0;
            margin-left: 20px;
        }

        .kartu-wrapper-prestasi {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 25px 20px;
        }

        .wrapper-foto {
            width: 85%;
        }

        .foto-prestasi {
            height: 100%;
            width: 100%;
        }

        .judul-prestasi {
            margin-top: 10px;
            margin-bottom: 3px;
        }

        .judul-prestasi a {
            font-size: 17px;
        }

        .wrapper-deskripsi-prestasi {
            padding: 0 8px;
        }

        .fa-calendar {
            font-size: 0.75em !important;
        }

        .tanggal time {
            font-size: 11.8px;
            margin-bottom: 3px;
        }

        .penjelasan-prestasi {
            font-size: 12.7px;
            padding-top: 8px;
        }

        .link-baca-selengkapnya a {
            font-size: 12.4px;
        }
    }
</style>
<div class="container-fluid container-prestasi" id="container-prestasi">
    <div class="prestasi-wrapper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50"
        data-aos-once="true">
        <div class="judulbesar-prestasi">
            <h2>
                Prestasi
            </h2>
        </div>
        <div class="isi-prestasi">
            <?php
            include_once "koneksi.php";
            $sql = mysqli_query($db, "SELECT * FROM tbl_prestasi ORDER BY tanggal_prestasi DESC;;");
            $no = 1;
            while ($rdata = mysqli_fetch_array($sql)) {
                ?>
                <div class="kartu-wrapper-prestasi">
                    <div class="wrapper-foto">
                        <div class="foto-prestasi">
                            <a
                                href="index.php?page=prestasi<?php echo $rdata['id_prestasi']; ?>&id=<?php echo $rdata['id_prestasi']; ?>">
                                <?php echo "<img src='images/$rdata[gambar_prestasi]' alt='Gambar Prestasi'>" ?>
                            </a>
                        </div>
                    </div>
                    <div class="wrapper-deskripsi-prestasi">
                        <div class="judul-prestasi">
                            <a
                                href="index.php?page=prestasi<?php echo $rdata['id_prestasi']; ?>&id=<?php echo $rdata['id_prestasi']; ?>">
                                <?php echo "$rdata[judul_prestasi]"; ?>
                            </a>
                        </div>
                        <div class="tanggal">
                            <i class="fa fa-calendar"><time>
                                    <?php echo "$rdata[tanggal_prestasi]"; ?>
                                </time></i>
                        </div>
                        <div class="penjelasan-prestasi">
                            <?php
                            $isi_prestasi = substr($rdata['isi_prestasi'], 0, 750);
                            echo $isi_prestasi . (strlen($rdata['isi_prestasi']) > 750 ? ' ...' : '');
                            ?>
                        </div>
                        <div class="link-baca-selengkapnya">
                            <a
                                href="index.php?page=prestasi<?php echo $rdata['id_prestasi']; ?>&id=<?php echo $rdata['id_prestasi']; ?>">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                $no++;
            }
            ?>
        </div>
    </div>
</div>