<style>
    .container-kartu1 {
        padding-left: 26px;
        padding-right: 32px;
    }

    .kartu1-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px 30px;
        margin: 40px 140px;
        padding-bottom: 30px;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .03);
    }

    .judul-kartu {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .judul-kartu h3 {
        color: #2e3b44;
        font-size: 22px;
        font-weight: 600;
        text-align: center;
        line-height: 1.45;
    }

    .gambar-kartu-wrapper {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gambar-kartu {
        width: 80%;
        display: flex;
        justify-content: center;
    }

    .gambar-kartu img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .wrapper-penjelasan {
        width: 100%;
        margin-top: 10px;
        margin-bottom: 30px;
        padding-left: 115px;
        padding-right: 115px;
    }

    .text-penjelasan {
        color: #2e3b44;
        line-height: 1.6;
        font-size: 17px;
    }

    .tanggal {
        margin-left: 115px;
        margin-right: 115px;
        padding: 6px 3px;
        text-align: center;
        border-top: 2px solid #ECEBEB;
        border-bottom: 2px solid #ECEBEB;
    }

    .tanggal time {
        font-family: "Open Sans", Arial, sans-serif;
        font-size: 13px;
        color: #555;
        text-align: center;
        padding-left: 4px;
    }

    .tanggal a {
        font-family: "Open Sans", Arial, sans-serif;
        color: #555;
        text-align: center;
        padding-left: 4px;
        font-size: 14px;
        text-decoration: none;
        font-weight: 400;
    }

    .fa-calendar {
        border-right: 2px solid #ECEBEB;
        padding-right: 15px;
    }

    .fa-tags {
        padding-left: 15px;
    }

    .fa-calendar,
    .fa-tags {
        font-size: 15.5px;
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .kartu1-wrapper {
            margin: 40px 110px;
        }

        .judul-kartu h3 {
            font-size: 20px;
        }

        .wrapper-penjelasan {
            padding: 0 85px;
        }

        .text-penjelasan {
            font-size: 16.5px;
        }

        .tanggal {
            margin: 0 85px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 15px;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .kartu1-wrapper {
            margin: 40px 80px;
        }

        .judul-kartu h3 {
            font-size: 20px;
        }

        .wrapper-penjelasan {
            padding: 0 70px;
        }

        .text-penjelasan {
            font-size: 16px;
        }

        .tanggal {
            margin: 0 70px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 14.5px;
        }

        .tanggal time {
            font-size: 12.5px;
        }

        .tanggal a {
            font-size: 13.5px;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .kartu1-wrapper {
            margin: 40px 30px;
        }

        .judul-kartu h3 {
            font-size: 18.5px;
        }

        .wrapper-penjelasan {
            padding: 0 45px;
        }

        .text-penjelasan {
            font-size: 15.1px;
        }

        .tanggal {
            margin: 0 45px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 14.1px;
        }

        .tanggal time {
            font-size: 12.1px;
        }

        .tanggal a {
            font-size: 13.1px;
        }
    }

    @media (min-width: 432px) and (max-width: 543.98px) {
        .kartu1-wrapper {
            margin: 30px 15px;
        }

        .judul-kartu h3 {
            font-size: 18px;
        }

        .wrapper-penjelasan {
            padding: 0 40px;
        }

        .text-penjelasan {
            font-size: 14.5px;
        }

        .tanggal {
            margin: 0 40px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 13.8px;
        }

        .tanggal time {
            font-size: 11.8px;
        }

        .tanggal a {
            font-size: 12.5px;
        }
    }

    @media (min-width: 360px) and (max-width: 431.98px) {
        .kartu1-wrapper {
            margin: 30px 5px;
        }

        .judul-kartu h3 {
            font-size: 17px;
        }

        .wrapper-penjelasan {
            padding: 0 30px;
        }

        .text-penjelasan {
            font-size: 14.1px;
        }

        .tanggal {
            margin: 0 30px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 13.5px;
        }

        .tanggal time {
            font-size: 11.8px;
        }

        .tanggal a {
            font-size: 12.2px;
        }
    }

    @media (min-width: 300px) and (max-width: 359.98px) {
        .kartu1-wrapper {
            margin: 20px 0;
        }

        .judul-kartu h3 {
            font-size: 16px;
        }

        .wrapper-penjelasan {
            padding: 0 25px;
        }

        .text-penjelasan {
            font-size: 13.7px;
        }

        .tanggal {
            margin: 0 25px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 13.1px;
        }

        .tanggal time {
            font-size: 11.5px;
        }

        .tanggal a {
            font-size: 12px;
        }
    }

    @media (min-width: 0px) and (max-width: 299.98px) {
        .kartu1-wrapper {
            margin: 20px 0;
        }

        .judul-kartu h3 {
            font-size: 15px;
        }

        .wrapper-penjelasan {
            padding: 0 17px;
        }

        .text-penjelasan {
            font-size: 13px;
        }

        .tanggal {
            margin: 0 17px;
            padding: 5px 3px;
        }

        .fa-calendar,
        .fa-tags {
            font-size: 13px;
        }

        .tanggal time {
            font-size: 11.6px;
        }

        .tanggal a {
            font-size: 12px;
        }
    }
</style>

<div class="container-fluid container-kartu1">
    <div class="kartu1-wrapper">
        <?php
        include_once "koneksi.php";
        $id = $_GET['id'];
        $sql = mysqli_query($db, "SELECT * FROM tbl_berita WHERE id_berita = $id LIMIT 1;");
        $no = 1;
        while ($rdata = mysqli_fetch_array($sql)) {
            ?>
            <div class="judul-kartu">
                <h3>
                    <?php echo "$rdata[judul_berita]"; ?>
                </h3>
            </div>
            <div class="gambar-kartu-wrapper">
                <div class="gambar-kartu">
                    <?php echo "<img src='images/$rdata[gambar_berita]' alt='Gambar Berita'>" ?>
                </div>
            </div>
            <div class="wrapper-penjelasan">
                <div class="text-penjelasan">
                    <?php echo "$rdata[isi_berita]"; ?>
                </div>
            </div>
            <div class="tanggal">
                <i class="fa fa-calendar"><time>
                        <?php echo "$rdata[tanggal_berita]"; ?>
                    </time></i>
                <i class="fa fa-tags"><a href="index.php?page=berita#container-berita">Berita</a></i>
            </div>
            <?php
            $no++;
        }
        ?>

    </div>
</div>