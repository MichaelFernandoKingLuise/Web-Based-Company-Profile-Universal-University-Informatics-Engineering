<style>
    .container-galeri {
        padding-left: 26px;
        padding-right: 32px;
    }

    .galeri-wrapper {
        padding: 60px 0 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .judulbesar-galeri {
        padding: 0 100px;
    }

    .judulbesar-galeri h2 {
        font-family: Open Sans, sans-serif;
        color: #2e3b44;
        font-size: 50px;
        font-weight: 700;
    }

    .judulbesar-galeri::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .7rem;
        margin: 1.5rem 0 0;
        margin-left: 33px;
        position: absolute;
        width: 5rem;
    }

    .isi-galeri {
        width: 100%;
        height: 100%;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .05);
        padding: 50px;
        margin-top: 80px;
        margin-top: 75px;
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .kartu-galeri {
        width: 30%;
        margin: 20px;
    }

    .wrapper-image {
        width: 100%;
        height: 240px;
    }

    .kartu-galeri img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s;
    }

    .kartu-galeri img:hover {
        transform: scale(1.05);
    }

    .lb-outerContainer {
        width: 50% !important;
        height: 50% !important;
    }

    .lb-container {
        width: 100% !important;
        height: 100% !important;
    }

    .lb-image {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }

    .lb-number {
        display: none !important;
    }

    .lb-data {
        margin-top: 4px;
    }

    .lb-data .lb-details {
        width: 100%;
        float: none;
        text-align: center;
    }

    @media (min-width: 992px) and (max-width: 1357.98px) {
        .isi-galeri {
            padding: 50px 15px !important;
        }

        .kartu-galeri {
            width: 29% !important;
        }

        .lb-outerContainer {
            width: 75% !important;
            height: 75% !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1189.98px) {
        .lb-details {
            padding: 0 35px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1011px) {
        .kartu-galeri {
            width: 25% !important;
        }

        .wrapper-image {
            height: 200px;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .judulbesar-galeri h2 {
            font-size: 44px;
        }

        .judulbesar-galeri::after {
            margin-left: 24px;
        }

        .isi-galeri {
            padding: 50px 15px !important;
        }

        .kartu-galeri {
            width: 40% !important;
        }

        .lb-outerContainer {
            width: 80% !important;
            height: 80% !important;
        }

        .lb-details {
            padding: 0 25px !important;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .judulbesar-galeri h2 {
            font-size: 40px;
        }

        .judulbesar-galeri::after {
            margin-left: 20px;
        }

        .isi-galeri {
            padding: 30px 5px !important;
        }

        .wrapper-image {
            height: 170px !important;
        }

        .kartu-galeri {
            width: 40% !important;
        }

        .lb-outerContainer {
            width: 75% !important;
            height: 75% !important;
        }

        .lb-details {
            padding: 0 25px !important;
        }
    }

    @media (min-width: 400px) and (max-width: 543.98px) {
        .judulbesar-galeri h2 {
            font-size: 36px;
        }

        .judulbesar-galeri::after {
            margin-left: 18px;
            height: .6rem;
            margin: 1rem 0 0;
            margin-left: 22px;
            width: 4rem;
        }

        .isi-galeri {
            padding: 30px 10px !important;
        }

        .kartu-galeri {
            width: 80% !important;
        }

        .lb-outerContainer {
            width: 75% !important;
            height: 75% !important;
        }

        .lb-details {
            padding: 0 25px !important;
        }
    }

    @media (min-width: 360px) and (max-width: 399.98px) {
        .judulbesar-galeri h2 {
            font-size: 32px;
        }

        .judulbesar-galeri::after {
            margin-left: 18px;
            height: .6rem;
            margin: 1rem 0 0;
            margin-left: 20px;
            width: 3.5rem;
        }

        .isi-galeri {
            padding: 30px 5px !important;
        }

        .wrapper-image {
            height: 180px !important;
        }

        .kartu-galeri {
            width: 95% !important;
        }

        .lb-outerContainer {
            width: 80% !important;
            height: 80% !important;
        }

        .lb-details {
            padding: 0 25px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {
        .judulbesar-galeri h2 {
            font-size: 28px;
        }

        .judulbesar-galeri::after {
            margin-left: 18px;
            height: .5rem;
            margin: .8rem 0 0;
            margin-left: 18px;
            width: 3rem;
        }

        .isi-galeri {
            padding: 30px 5px !important;
            margin-top: 55px;
        }

        .wrapper-image {
            height: 200px !important;
        }

        .kartu-galeri {
            width: 95% !important;
        }

        .lb-outerContainer {
            width: 85% !important;
            height: 85% !important;
        }

        .lb-details {
            padding: 0 25px !important;
        }
    }
</style>

<div class="container-fluid container-galeri">
    <div class="galeri-wrapper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50" data-aos-once="true">
        <div class="judulbesar-galeri">
            <h2>
                Galeri
            </h2>
        </div>
        <div class="isi-galeri">
            <?php
            include_once "koneksi.php";
            $sql = mysqli_query($db, "SELECT * FROM tbl_galeri ORDER BY id_galeri DESC;");
            $no = 1;
            while ($rdata = mysqli_fetch_array($sql)) {
                ?>
                <div class="kartu-galeri">
                    <div class="wrapper-image">
                        <?php echo "<a href='images/$rdata[gambar_galeri]' data-lightbox='galeri' data-title='$rdata[judul_galeri]'><img src='images/$rdata[gambar_galeri]'></a>" ?>
                    </div>
                </div>
                <?php
                $no++;
            }
            ?>
        </div>
    </div>
</div>