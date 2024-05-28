<style>
    .container-pengumuman {
        padding-left: 26px;
        padding-right: 32px;
    }

    .pengumuman-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 120px;
        padding-top: 60px;
    }

    .judulbesar-pengumuman {
        display: inline-block;
        position: relative;
    }

    .judulbesar-pengumuman h2 {
        font-family: Open Sans, sans-serif;
        color: #2e3b44;
        font-size: 50px;
        font-weight: 700;
    }

    .judulbesar-pengumuman::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .8rem;
        left: 0;
        margin: 1.5rem 0 0;
        position: absolute;
        width: 10rem;
        margin-left: 75px;
    }

    .kartu-pengumuman {
        width: 30% !important;
        border-radius: 15px !important;
    }

    .kartu-pengumuman:not(:nth-child(1), :nth-child(2), :nth-child(3)) {
        margin-top: 40px !important;
    }

    .pengumuman-card-wrapper {
        height: 100%;
    }

    .kartu-pengumuman a {
        text-decoration: none;
        color: #212529;
        height: 100%;
        transition: .3s ease-in-out;
    }

    .kartu-pengumuman a:hover {
        transform: scale(1.02);
    }

    .isi-pengumuman {
        width: 100%;
        height: 100%;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .05);
        padding: 50px;
        margin-top: 80px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .isi-pengumuman .row {
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-text,
    .card-tanggal {
        text-align: center;
        padding: 5px 2px;
        margin: 0 !important;
    }

    .card-text {
        font-size: 21px;
        font-weight: 700;
        padding: 15px 20px 0;
        line-height: 1.6;
        margin-bottom: 8px !important;
    }

    .card-tanggal {
        margin-top: auto !important;
        color: #707070;
        font-weight: 700 !important;
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .judulbesar-pengumuman h2 {
            font-size: 40px !important;
        }

        .judulbesar-pengumuman::after {
            margin-left: 47px !important;
        }

        .kartu-pengumuman {
            width: 45% !important;
        }

        .kartu-pengumuman:not(:nth-child(1), :nth-child(2)) {
            margin-top: 40px !important;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .kartu-pengumuman {
            width: 90% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 30px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
        }

        .judulbesar-pengumuman h2 {
            font-size: 38px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 45px;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .kartu-pengumuman {
            width: 95% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 20px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
        }

        .judulbesar-pengumuman h2 {
            font-size: 37px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 43px;
        }
    }

    @media (min-width: 432px) and (max-width: 543.98px) {
        .kartu-pengumuman {
            width: 95% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 20px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
        }

        .judulbesar-pengumuman h2 {
            font-size: 35px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 35px;
        }

        .card-text {
            font-size: 20px !important;
        }

        .card-tanggal {
            font-size: 15px !important;
        }
    }

    @media (min-width: 360px) and (max-width: 431.98px) {
        .kartu-pengumuman {
            width: 100% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 15px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
            padding: 50px 30px 50px 30px !important;
        }

        .judulbesar-pengumuman h2 {
            font-size: 32px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 40px !important;
            height: .6rem;
            width: 8rem;
            margin: 1rem 0 0;
        }

        .card-text {
            font-size: 18px !important;
        }

        .card-tanggal {
            font-size: 13px !important;
        }
    }

    @media (min-width: 320px) and (max-width: 359.98px) {
        .pengumuman-wrapper {
            padding-top: 45px !important;
        }

        .kartu-pengumuman {
            width: 100% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 10px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
            padding: 40px 15px 40px 15px !important;
            margin-top: 60px !important;
        }

        .judulbesar-pengumuman h2 {
            font-size: 28px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 37px !important;
            height: .55rem;
            width: 7rem;
            margin: 1rem 0 0;
        }

        .card-text {
            font-size: 16px !important;
        }

        .card-tanggal {
            font-size: 12px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 319.98px) {
        .pengumuman-wrapper {
            padding-top: 45px !important;
        }

        .kartu-pengumuman {
            width: 100% !important;
        }

        .kartu-pengumuman:not(:nth-child(1)) {
            margin-top: 10px !important;
        }

        .isi-pengumuman {
            flex-direction: column;
            align-items: center;
            padding: 40px 15px 40px 15px !important;
            margin-top: 60px !important;
        }

        .judulbesar-pengumuman h2 {
            font-size: 24px;
        }

        .judulbesar-pengumuman::after {
            margin-left: 24px !important;
            height: .55rem;
            width: 7rem;
            margin: 1rem 0 0;
        }

        .card-text {
            font-size: 14px !important;
            padding: 5px 10px 0 !important;
        }

        .card-tanggal {
            font-size: 11px !important;
        }
    }
</style>

<div class="container-fluid container-pengumuman" id="container-pengumuman">
    <div class="pengumuman-wrapper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50"
        data-aos-once="true">
        <div class="judulbesar-pengumuman">
            <h2>
                Pengumuman
            </h2>
        </div>
        <div class="isi-pengumuman">
            <?php
            include_once "koneksi.php";
            $sql = mysqli_query($db, "SELECT * FROM tbl_pengumuman ORDER BY tanggal_pengumuman DESC;");
            $no = 1;
            while ($rdata = mysqli_fetch_array($sql)) {
                ?>
                <div class="card mb-3 kartu-pengumuman" style="max-width: 540px;">
                    <a
                        href="index.php?page=pengumuman<?php echo $rdata['id_pengumuman']; ?>&id=<?php echo $rdata['id_pengumuman']; ?>">
                        <div class="row g-0">
                            <div class="pengumuman-card-wrapper">
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php
                                        $judul_pengumuman = implode(' ', array_slice(explode(' ', $rdata['judul_pengumuman']), 0, 12));
                                        echo $judul_pengumuman . (str_word_count($rdata['judul_pengumuman']) > 12 ? ' ...' : '');
                                        ?>
                                    </p>
                                    <p class="card-tanggal">
                                        <?php echo "$rdata[tanggal_pengumuman]"; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                $no++;
            }
            ?>
        </div>
    </div>
</div>