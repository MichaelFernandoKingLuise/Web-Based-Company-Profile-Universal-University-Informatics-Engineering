<style>
    .swiper {
        width: 100%;
        margin-top: 50px;
        overflow: hidden;
    }

    .swiper-wrapper {
        width: 100%;
    }

    .card {
        width: 30% !important;
        height: 100%;
        background-color: #FFFFFF;
        border-radius: 15px;
        box-shadow: 0 0 16px rgb(0, 0, 0, .1);
        padding: 32px 16px;
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 0 32px;
    }

    .swiper-slide:not(.swiper-slide-active) {
        filter: blur(0.8px);
        -webkit-filter: blur(0.8px);
    }

    .card__image {
        width: 50%;
        height: 10em;
        border-radius: 50%;
        margin-bottom: 15px;
    }


    .card__image img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .card__content {
        display: flex;
        align-items: center;
        flex-direction: column;
        padding-left: 10px;
        padding-right: 10px;
        height: 60%;
    }

    .card__name {
        color: #61b5e6;
        font-size: 25px;
        font-weight: 600;
        margin: 15px 0 5px;
        padding: 0;
        text-align: center;
        line-height: 40.5px;
    }

    .card__text {
        color: #999;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.7;
    }


    .profile__list {
        list-style: none;
        margin-top: auto;
    }

    .profile__item {
        display: inline-block;
        margin: 0 2.5px;
    }

    .profile__link {
        background-color: #acacac;
        border-radius: 10px;
        display: block;
        padding: 10px;
        transition: background-color .2s ease-in-out;
        cursor: pointer;

    }

    .profile__link:hover {
        background-color: #61b5e6;
    }

    .profile__icon {
        height: 25px;
        width: 25px;
    }

    @media (min-width: 1252px) and (max-width: 1355px) {
        .card__image {
            height: 8em !important;
        }
    }

    @media (min-width: 1200px) and (max-width: 1251.98px) {

        .card__content {
            height: 70%;
        }

        .card {
            width: 40% !important;
        }
    }

    @media (min-width: 1090px) and (max-width: 1199.98px) {

        .card__content {
            height: 70%;
        }

        .card {
            width: 40% !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1089.98px) {
        .card__image {
            height: 9em;
        }

        .card__content {
            height: 80%;
        }

        .card {
            width: 40% !important;
        }
    }

    @media (min-width: 900px) and (max-width: 991.98px) {
        .card__image {
            width: 40%;
        }

        .card__content {
            height: 60%;
        }

        .card {
            width: 50% !important;
        }

        .card:first-child {
            width: 50% !important;
        }
    }

    @media (min-width: 850px) and (max-width: 899.98px) {
        .card__image {
            width: 45%;
        }

        .card__content {
            height: 65%;
        }

        .card {
            width: 50% !important;
        }

        .card:first-child {
            width: 50% !important;
        }
    }

    @media (min-width: 800px) and (max-width: 849.98px) {
        .card__image {
            width: 45%;
        }

        .card__content {
            height: 70%;
        }

        .card {
            width: 55% !important;
        }

        .card:first-child {
            width: 55% !important;
        }
    }

    @media (min-width: 700px) and (max-width: 799.98px) {
        .card__image {
            width: 45%;
        }

        .card__content {
            height: 65%;
        }

        .card {
            width: 60% !important;
        }

        .card:first-child {
            width: 60% !important;
        }
    }

    @media (min-width: 640px) and (max-width: 699.98px) {
        .card__image {
            width: 50%;
        }

        .card__content {
            height: 65%;
        }

        .card {
            width: 60% !important;
        }

        .card:first-child {
            width: 60% !important;
        }
    }

    @media (min-width: 544px) and (max-width: 639.98px) {
        .card__image {
            width: 55%;
        }

        .card__content {
            height: 65%;
        }

        .card {
            width: 65% !important;
        }

        .card:first-child {
            width: 65% !important;
        }
    }

    @media (min-width: 450px) and (max-width: 621.98px) {
        .judul-dosen h2 {
            font-size: 32px;
        }

        .judul-dosen::after {
            width: 4rem;
            margin-left: 17px;
        }
    }

    @media (min-width: 500px) and (max-width: 543.98px) {
        .card__image {
            width: 55%;
        }

        .card__content {
            height: 70%;
        }

        .card {
            width: 80% !important;
        }

        .card:first-child {
            width: 80% !important;
        }
    }

    @media (min-width: 450px) and (max-width: 499.98px) {
        .card__image {
            width: 55%;
        }

        .card__content {
            height: 70%;
        }

        .card {
            width: 90% !important;
        }

        .card:first-child {
            width: 90% !important;
        }
    }

    @media (min-width: 420px) and (max-width: 449.98px) {
        .card__image {
            width: 60%;
        }

        .card__content {
            height: 66%;
        }

        .card {
            width: 90% !important;
        }

        .card:first-child {
            width: 90% !important;
        }

        .judul-dosen h2 {
            font-size: 30px;
        }

        .judul-dosen::after {
            width: 4rem;
            margin-left: 14px;
        }
    }

    @media (min-width: 370px) and (max-width: 419.98px) {
        .card__image {
            width: 80%;
        }

        .card__content {
            height: 71%;
        }

        .card {
            width: 90% !important;
        }

        .card:first-child {
            width: 90% !important;
        }

        .judul-dosen h2 {
            font-size: 28px;
        }

        .judul-dosen::after {
            width: 4rem;
            margin-left: 12px;
        }
    }

    @media (min-width: 360px) and (max-width: 369.98px) {
        .card__image {
            width: 75%;
        }

        .card__content {
            height: 72%;
        }

        .card {
            width: 98% !important;
        }

        .card:first-child {
            width: 98% !important;
        }

        .judul-dosen h2 {
            font-size: 27px;
        }

        .judul-dosen::after {
            width: 4rem;
            margin-left: 10px;
            height: 0.5rem;
            margin-top: 8px;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {
        .card__image {
            width: 80%;
        }

        .card__content {
            height: 75%;
        }

        .card {
            width: 100% !important;
        }

        .card:first-child {
            width: 100% !important;
        }

        .judul-dosen h2 {
            font-size: 24px;
        }

        .judul-dosen::after {
            width: 4rem;
            margin-left: 5px;
            height: 0.5rem;
            margin-top: 8px;
        }
    }

    @media (min-width: 336px) and (max-width: 359.98px) {
        .profile__icon {
            height: 20px;
            width: 20px;
        }
    }

    @media (min-width: 0px) and (max-width: 335.98px) {
        .profile__icon {
            height: 20px;
            width: 15px;
        }

        .card__image {
            width: 90%;
        }
    }
</style>

<div class="container-fluid profil">
    <div class="profil-wrapper">
        <aside class="sidebar">
            <ul class="sidebar-list">
                <li id="linkTentangKami" class="sidebar-item">
                    <a href="index.php?page=tentangkami" class="sidebar-link">Tentang
                        Kami</a>
                </li>
                <li id="linkVisiMisi" class="sidebar-item">
                    <a href="index.php?page=visimisi" class="sidebar-link">Visi
                        dan Misi</a>
                </li>
                <li id="linkDosen" class="sidebar-item active">
                    <a href="index.php?page=dosen" class="sidebar-link">Dosen</a>
                </li>
                <li id="linkKurikulum" class="sidebar-item">
                    <a href="index.php?page=kurikulum" class="sidebar-link">Kurikulum</a>
                </li>
                <li id="linkKarir" class="sidebar-item">
                    <a href="index.php?page=karir" class="sidebar-link">Karir</a>
                </li>
            </ul>
        </aside>
        <div class="main-dosen-wrapper">
            <div class="judul-dosen" data-aos="fade-down" data-aos-duration="800" data-aos-delay="50"
                data-aos-once="true">
                <h2>
                    Dosen
                </h2>
            </div>
            <section class="swiper mySwiper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600"
                data-aos-once="true">
                <div class="swiper-wrapper">
                    <?php
                    include_once "koneksi.php";
                    $sql = mysqli_query($db, "SELECT * FROM tbl_dosen;");
                    $no = 1;
                    while ($rdata = mysqli_fetch_array($sql)) {
                        ?>
                            <div class="card swiper-slide">
                                <div class="card__image">
                                    <?php echo "<img src='images/$rdata[gambar_dosen]' alt='Gambar Dosen $no'>" ?>
                                </div>
                                <div class="card__content">
                                    <span class="card__name">
                                        <?php echo "$rdata[nama_dosen]"; ?>
                                    </span>
                                    <p class="card__text" style="margin-bottom: 10px">
                                        <?php echo "$rdata[jabatan_dosen]"; ?>
                                    </p>
                                    <p class="card__text" style="margin-bottom: 20px">
                                        <?php echo "NIDN: $rdata[nidn_dosen]"; ?>
                                    </p>
                                    <div class="profile__list">
                                        <li class="profile__item">
                                            <?php echo "<a href ='$rdata[scholar_dosen]' class='profile__link' target='_blank'>" ?>
                                            <svg class="profile__icon" viewBox="0 0 28.451 31.825">
                                                <path fill="#fff"
                                                    d="M10.607 0L0 9.318h6.84c.5 4.461 4.064 6.344 7.732 6.642a3.106 3.106 0 00.694 3.866c-4.263.1-10.211 2.577-10.211 6.642.4 4.461 6.245 5.353 9.12 5.353 3.767.1 8.03-1.884 8.922-5.353.4-3.47-.991-5.353-3.073-7.038-2.28-1.784-2.776-2.776-2.082-3.965 1.487-1.685 3.47-2.677 3.866-5.056a10.128 10.128 0 00-.595-4.263l4.461-3.767-.1 1.586a1.183 1.183 0 00-.5.892v10.211a1.174 1.174 0 002.28 0V4.857a.883.883 0 00-.5-.793V1.586L28.451 0zm5.75 13.978c-6.047.991-8.624-8.625-3.767-9.814 5.551-1.091 8.228 8.525 3.767 9.814zm-.5 7.237c5.948 1.289 6.047 6.245.991 7.732-4.362.892-8.129-.4-8.03-2.974.005-2.479 3.474-4.759 7.043-4.759z">
                                                </path>
                                            </svg>
                                            </a>
                                        </li>
                                        <li class="profile__item">
                                            <?php echo "<a href ='$rdata[sinta_dosen]' class='profile__link' target='_blank'>" ?>
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="profile__icon"
                                                viewBox="0 0 147.000000 147.000000" preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,147.000000) scale(0.100000,-0.100000)"
                                                    stroke="#FFFFFF" fill="#FFFFFF" stroke="none">
                                                    <path d="M625 1355 c-276 -51 -474 -260 -515 -543 -38 -255 99 -521 329 -641
78 -40 173 -71 221 -71 l25 0 -3 132 c-1 73 2 139 7 147 6 9 44 17 112 23 57
5 111 12 119 15 28 9 -90 55 -149 57 -60 2 -79 -5 -145 -61 -47 -39 -104 -53
-121 -30 -8 11 -16 12 -28 6 -13 -8 -19 -6 -23 5 -4 11 -18 15 -44 13 -32 -2
-41 -7 -56 -35 -22 -40 -48 -45 -33 -5 5 14 16 76 23 137 7 61 14 116 16 121
6 23 -1 45 -14 45 -26 0 -30 23 -7 42 19 15 22 26 20 62 -4 44 -4 44 25 39 18
-4 27 -2 23 4 -11 18 -17 73 -8 73 4 0 20 -9 34 -20 21 -17 26 -18 31 -5 3 8
14 15 25 15 10 0 22 7 25 16 3 9 13 14 20 11 8 -3 17 1 20 9 3 8 15 14 26 14
15 0 20 7 20 28 0 16 8 36 18 45 13 12 17 26 14 47 -3 22 0 30 11 30 9 0 18
-4 21 -8 8 -14 95 -6 113 10 32 28 61 38 108 38 109 0 189 -97 172 -207 -7
-39 2 -61 41 -108 20 -24 23 -36 18 -71 -5 -39 -3 -43 25 -54 52 -22 106 -67
151 -126 l43 -57 19 59 c30 94 27 265 -7 370 -74 226 -260 387 -497 430 -91
16 -134 16 -225 -1z" />
                                                    <path d="M714 1024 c-4 -10 -9 -22 -11 -26 -2 -5 0 -8 5 -8 10 0 24 41 17 48
-3 3 -8 -4 -11 -14z" />
                                                    <path
                                                        d="M650 980 c-33 -8 -38 -35 -6 -36 17 -1 26 5 30 19 6 26 7 25 -24 17z" />
                                                    <path d="M1062 728 c-10 -30 -10 -31 3 -14 13 17 21 46 12 46 -1 0 -8 -15 -15
-32z" />
                                                    <path d="M403 583 c-10 -10 -13 -14 -5 -9 7 5 30 13 50 17 37 7 37 7 6 8 -18
0 -40 -7 -51 -16z" />
                                                    <path d="M405 540 c-3 -6 1 -7 9 -4 18 7 21 14 7 14 -6 0 -13 -4 -16 -10z" />
                                                    <path d="M1040 496 c0 -2 7 -7 16 -10 8 -3 12 -2 9 4 -6 10 -25 14 -25 6z" />
                                                    <path d="M770 282 c0 -15 -3 -64 -7 -109 l-6 -82 54 6 c30 3 55 7 57 8 1 1
-11 17 -28 35 -34 37 -40 85 -14 125 17 27 17 27 -33 38 -19 4 -23 1 -23 -21z" />
                                                </g>
                                            </svg>

                                            </a>
                                        </li>
                                        <li class="profile__item">
                                            <?php echo "<a href ='$rdata[scopus_dosen]' class='profile__link' target='_blank'>" ?>
                                            <svg fill="#FFFFFF" viewBox="0 0 24 24" role="img" class="profile__icon"
                                                xmlns="http://www.w3.org/2000/svg" stroke="#FFFFFF">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>Scopus icon</title>
                                                    <path
                                                        d="M24 19.059l-.14-1.777c-1.426.772-2.945 1.076-4.465 1.076-3.319 0-5.96-2.782-5.96-6.475 0-3.903 2.595-6.31 5.633-6.31 1.917 0 3.39.303 4.792 1.075L24 4.895c-1.286-.608-2.337-.889-4.698-.889-4.534 0-7.97 3.53-7.97 8.017 0 5.12 4.09 7.924 7.9 7.924 1.916 0 3.506-.257 4.768-.888zm-14.954-3.46c0-2.22-1.964-3.225-3.857-4.347C3.716 10.364 2.15 9.756 2.15 8.12c0-1.215.889-2.548 2.642-2.548 1.519 0 2.57.234 3.903 1.029l.117-1.847c-1.239-.514-2.127-.748-4.137-.748C1.8 4.006.047 5.876.047 8.26c0 2.384 2.103 3.413 4.02 4.581 1.426.865 2.922 1.45 2.922 2.992 0 1.496-1.333 2.571-2.922 2.571-1.566 0-2.594-.35-3.786-1.075L0 19.176c1.215.56 2.454.818 4.16.818 2.385 0 4.885-1.473 4.885-4.395z">
                                                    </path>
                                                </g>
                                            </svg>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $no++;
                    }
                    ?>
            </section>
        </div>
    </div>
</div>