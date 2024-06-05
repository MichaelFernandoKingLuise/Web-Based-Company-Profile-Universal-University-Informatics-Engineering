<style>
    .main-karir-wrapper {
        flex: 5;
        min-height: 90vh;
        padding: 40px !important;
    }

    .judul-karir h2 {
        font-family: 'Open Sans', sans-serif !important;
        font-size: 35px;
        font-weight: 700;
        color: #2E3B44;
    }

    .judul-karir::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .5rem;
        margin-top: 10px;
        position: absolute;
        width: 3rem;
    }

    .judul-multimedia,
    .judul-iot {
        position: relative;
    }

    .judul-multimedia h2,
    .judul-iot h2 {
        font-family: 'Open Sans', sans-serif !important;
        font-size: 26px;
        font-weight: 700;
        color: #2E3B44;
        margin-bottom: 25px;
    }

    .judul-multimedia h2::after,
    .judul-iot h2::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 40%;
        height: .5rem;
        margin-top: 20px;
        background-color: #3ec9eb;
        border-radius: 5rem;
    }

    .isi-karir {
        margin-top: 4rem;
    }

    .multimedia-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px 20px;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .1);
        border-radius: 10px;
        margin-bottom: 50px;
    }

    .iot-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px 20px;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .1);
        border-radius: 10px;
        margin-bottom: 50px;
    }

    .gambar-iot,
    .gambar-multimedia {
        margin-top: 20px;
        width: 50%;
        text-align: center;
        margin-bottom: 20px !important;
    }


    .gambar-multimedia img {
        width: 70%;
        height: 100%;
        object-fit: cover;
    }

    .gambar-iot img {
        width: 70%;
        height: 100%;
        object-fit: cover;
    }

    .paragraf-multimedia {
        padding-left: 200px;
        padding-right: 200px;
        text-align: center;
    }

    .paragraf-multimedia p {
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .03);
        font-family: Open Sans, sans-serif;
        color: #000000;
        line-height: 1.7;
        font-size: 17px;
        font-weight: 500;
        padding: 10px 20px;
        transition: all .3s;
        cursor: default;
    }

    .paragraf-iot p:hover {
        transform: scale(1.01);
        font-size: 17.5;
    }

    .paragraf-iot {
        padding-left: 200px;
        padding-right: 200px;
        text-align: center;
    }

    .paragraf-iot p {
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .03);
        font-family: Open Sans, sans-serif;
        color: #000000;
        line-height: 1.7;
        font-size: 17px;
        font-weight: 500;
        padding: 10px 20px;
        transition: all .3s;
        cursor: default;
    }

    .paragraf-multimedia p:hover {
        transform: scale(1.01);
        font-size: 17.5;
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 56.5%;
            left: 0;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 150px !important;
            padding-right: 150px !important;
        }
    }

    @media (min-width: 850px) and (max-width: 991.98px) {

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 47.3%;
            left: 0;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 100px !important;
            padding-right: 100px !important;
        }
    }

    @media (min-width: 622px) and (max-width: 849.98px) {
        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 46.8%;
            left: 0;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 65% !important;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 60px !important;
            padding-right: 60px !important;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .judul-karir h2 {
            font-size: 33px !important;
        }

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 46%;
            left: 0;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 90% !important;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }
    }

    @media (min-width: 460px) and (max-width: 543.98px) {
        .judul-karir h2 {
            font-size: 32px !important;
        }

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 45.2%;
            left: 0;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 95% !important;
        }

        .judul-multimedia h2,
        .judul-iot h2 {
            font-size: 24px !important;
        }

        .paragraf-multimedia p,
        .paragraf-iot p {
            font-size: 15px;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
    }

    @media (min-width: 432px) and (max-width: 459.98px) {
        .judul-karir h2 {
            font-size: 29px !important;
        }

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 44.5%;
            left: 0;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 100% !important;
        }

        .judul-multimedia h2,
        .judul-iot h2 {
            font-size: 21px !important;
        }

        .paragraf-multimedia p,
        .paragraf-iot p {
            font-size: 14px;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 5px !important;
            padding-right: 5px !important;
        }
    }

    @media (min-width: 360px) and (max-width: 431.98px) {
        .main-karir-wrapper {
            padding: 40px 10px !important;
        }

        .judul-karir h2 {
            font-size: 29px !important;
        }

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 44.2%;
            left: 0;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 100% !important;
        }

        .judul-multimedia h2,
        .judul-iot h2 {
            font-size: 21px !important;
        }

        .paragraf-multimedia p,
        .paragraf-iot p {
            font-size: 13.5px;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 5px !important;
            padding-right: 5px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {
        .main-karir-wrapper {
            padding: 40px 0 !important;
        }

        .judul-karir h2 {
            font-size: 26px !important;
        }

        .judul-karir {
            text-align: center !important;
        }

        .judul-karir::after {
            margin-left: 43.3%;
            left: 0;
            height: .4rem;
            margin-top: 8px;
            width: 2.7rem;
        }

        .gambar-multimedia,
        .gambar-iot {
            width: 100% !important;
        }

        .judul-multimedia h2,
        .judul-iot h2 {
            font-size: 20px !important;
        }

        .paragraf-multimedia p,
        .paragraf-iot p {
            font-size: 13.5px;
        }

        .paragraf-multimedia,
        .paragraf-iot {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
    }
</style>

<div class="container-fluid profil">
    <div class="profil-wrapper">
        <aside class="sidebar">
            <ul class="sidebar-list">
                <li class="sidebar-item">
                    <a href="index.php?page=tentangkami" class="sidebar-link">Tentang
                        Kami</a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?page=visimisi" class="sidebar-link">Visi
                        dan Misi</a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?page=dosen" class="sidebar-link">Dosen</a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?page=kurikulum" class="sidebar-link">Kurikulum</a>
                </li>
                <li class="sidebar-item active">
                    <a href="index.php?page=karir" class="sidebar-link">Karir</a>
                </li>
            </ul>
        </aside>
        <div class="main-karir-wrapper">
            <div class="judul-karir" data-aos="fade-down" data-aos-duration="800" data-aos-delay="50"
                data-aos-once="true">
                <h2>
                    Karir
                </h2>
            </div>

            <div class="isi-karir">
                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_karir;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="iot-wrapper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"
                        data-aos-once="true">
                        <div class="judul-iot">
                            <h2>
                                <?php echo "$rdata[judul_karir]"; ?>
                            </h2>
                        </div>
                        <div class="gambar-iot">
                            <?php echo "<img src='images/$rdata[gambar_karir]' alt='Gambar Karir'>" ?>
                        </div>
                        <div class="paragraf-iot">
                            <p>
                                <?php echo "$rdata[isi_karir]"; ?>
                            </p>
                        </div>
                    </div>

                    <?php
                    $no++;
                }
                ?>
            </div>
        </div>
    </div>
</div>