<style>
    .container-karyailmiah {
        padding-left: 26px;
        padding-right: 32px;
    }

    .karyailmiah-wrapper {
        padding: 60px 0;
    }

    .judulbesar-karyailmiah {
        padding: 0 100px;
    }

    .judulbesar-karyailmiah h2 {
        font-family: Open Sans, sans-serif;
        color: #2e3b44;
        font-size: 50px;
        font-weight: 700;
    }

    .judulbesar-karyailmiah::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .7rem;
        margin: 1.5rem 0 0;
        margin-left: 0px;
        position: absolute;
        width: 6rem;
    }

    .isi-karyailmiah {
        margin-top: 75px;
        padding: 0 100px;
    }

    .list-karyailmiah {
        list-style: none;
        padding: 0 !important;
    }

    .list-karyailmiah:not(:last-child) {
        border-bottom: 2px solid #e0e0e0 !important;
    }

    .card-item-karyailmiah {
        display: flex;
        flex-direction: column;
        padding: 30px 0;
    }

    .judul-karyailmiah {
        color: #61b5e6;
        font-size: 20px;
        font-weight: 700;
        line-height: 34px;
        text-align: left;
    }

    .penulis-karyailmiah {
        color: #2e3b44;
        font-size: 16px;
    }

    .link-karyailmiah,
    .link-karyailmiah:link,
    .link-karyailmiah:visited,
    .link-karyailmiah:active {
        border-radius: 6px;
        font-size: 18px;
        font-weight: 700;
        padding: 12.5px 25px;
        position: relative;
        transition: all .2s;
        background-color: #61b5e6 !important;
        color: #FFFFFF !important;
        align-self: flex-end;
        display: flex;
        margin: 20px 0 0;
        outline: none;
        border: none;
        transition: .3s;
    }

    .link-karyailmiah:focus,
    .link-karyailmiah:hover {
        transform: scale(1.05);
    }

    .tombol-navigasi {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .tombol-navigasi button {
        margin: 10px 8px;
        border-radius: 6px;
        outline: none;
        border: none;
        background-color: #61B5E6;
        transition: .3s all;
    }

    .tombol-navigasi button a,
    .tombol-navigasi button a:link,
    .tombol-navigasi button a:visited,
    .tombol-navigasi button a:active,
    .tombol-navigasi button a:focus {
        outline: none !important;
        border: none !important;
        color: #FFFFFF !important;
    }

    .btn-page {
        padding: 5px 11px;
        font-size: 18px;
        font-weight: 700;
        color: #FFFFFF;
    }

    .btn-page:hover {
        color: #FFFFFF;
    }

    .tombol-navigasi button:hover {
        transform: scale(1.1) !important;
    }

    .tombol-navigasi button.active {
        background-color: #57A3CF;
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .judulbesar-karyailmiah h2 {
            font-size: 42px;
        }

        .judulbesar-karyailmiah::after {
            width: 6rem;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .judulbesar-karyailmiah h2 {
            font-size: 38px;
        }

        .judulbesar-karyailmiah::after {
            width: 5rem;
        }

        .judul-karyailmiah {
            font-size: 19px;
        }

        .link-karyailmiah,
        .link-karyailmiah:link,
        .link-karyailmiah:visited,
        .link-karyailmiah:active {
            font-size: 17px;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .judulbesar-karyailmiah h2 {
            font-size: 36px;
        }

        .judulbesar-karyailmiah::after {
            width: 4.5rem;
        }

        .judul-karyailmiah {
            font-size: 18px;
        }

        .penulis-karyailmiah {
            font-size: 15.5px;
        }

        .link-karyailmiah,
        .link-karyailmiah:link,
        .link-karyailmiah:visited,
        .link-karyailmiah:active {
            font-size: 16px;
        }
    }

    @media (min-width: 462px) and (max-width: 543.98px) {
        .judulbesar-karyailmiah h2 {
            font-size: 34px;
        }

        .judulbesar-karyailmiah::after {
            width: 4.2rem;
        }

        .judul-karyailmiah {
            font-size: 18px;
        }

        .penulis-karyailmiah {
            font-size: 15px;
        }

        .link-karyailmiah,
        .link-karyailmiah:link,
        .link-karyailmiah:visited,
        .link-karyailmiah:active {
            font-size: 15px;
        }
    }

    @media (min-width: 360px) and (max-width: 461.98px) {

        .karyailmiah-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .judulbesar-karyailmiah {
            padding: 0 !important;
        }

        .judulbesar-karyailmiah h2 {
            font-size: 32px;
        }

        .judulbesar-karyailmiah::after {
            width: 4rem;
            margin-left: 60px !important;
        }

        .isi-karyailmiah {
            padding: 0 50px !important;
        }

        .judul-karyailmiah {
            font-size: 17px;
            text-align: center;
        }

        .penulis-karyailmiah {
            font-size: 14.5px;
            text-align: center;
            margin: 10px 0 !important;
        }

        .link-karyailmiah,
        .link-karyailmiah:link,
        .link-karyailmiah:visited,
        .link-karyailmiah:active {
            font-size: 14.5px;
            align-self: center;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {

        .karyailmiah-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .judulbesar-karyailmiah {
            padding: 0 !important;
        }

        .judulbesar-karyailmiah h2 {
            font-size: 28px;
        }

        .judulbesar-karyailmiah::after {
            width: 4rem;
            margin-left: 50px !important;
        }

        .isi-karyailmiah {
            padding: 0 50px !important;
        }

        .judul-karyailmiah {
            font-size: 17px;
            text-align: center;
        }

        .penulis-karyailmiah {
            font-size: 14.5px;
            text-align: center;
            margin: 10px 0 !important;
        }

        .link-karyailmiah,
        .link-karyailmiah:link,
        .link-karyailmiah:visited,
        .link-karyailmiah:active {
            font-size: 14.5px;
            align-self: center;
        }
    }
</style>
<div class="container-fluid container-karyailmiah">
    <div class="karyailmiah-wrapper" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50"
        data-aos-once="true">
        <div class="judulbesar-karyailmiah">
            <h2>
                Karya Ilmiah
            </h2>
        </div>
        <div class="isi-karyailmiah">
            <?php
            if (isset($_GET['pages'])) {
                $pages = $_GET['pages'];
                switch ($pages) {
                    case 'karyailmiah1':
                        include "karyailmiah1.php";
                        break;
                    case 'karyailmiah2':
                        include "karyailmiah2.php";
                        break;
                    case 'karyailmiah3':
                        include "karyailmiah3.php";
                        break;
                    case 'karyailmiah4':
                        include "karyailmiah4.php";
                        break;
                    case 'karyailmiah5':
                        include "karyailmiah5.php";
                        break;
                    case 'karyailmiah6':
                        include "karyailmiah6.php";
                        break;
                    case 'karyailmiah7':
                        include "karyailmiah7.php";
                        break;
                    case 'karyailmiah8':
                        include "karyailmiah8.php";
                        break;
                    case 'karyailmiah9':
                        include "karyailmiah9.php";
                        break;
                    case 'karyailmiah10':
                        include "karyailmiah10.php";
                        break;
                    default:
                        echo "MAAF HALAMAN TIDAK DITEMUKAN !!!";
                }
            } else {
                include "karyailmiah1.php";
            }
            ?>
        </div>
        <div class="tombol-navigasi">
            <?php
            include_once "koneksi.php";

            // Hitung jumlah total data
            $totalData = mysqli_num_rows(mysqli_query($db, "SELECT * FROM tbl_karyailmiah"));

            // Tentukan jumlah data per halaman
            $dataPerPage = 2;

            // Hitung jumlah halaman
            $totalPages = ceil($totalData / $dataPerPage);

            // Ambil halaman saat ini dari URL
            $currentPage = isset($_GET['pages']) ? $_GET['pages'] : 1;

            // Jika $_GET['pages'] belum diatur, atur halaman pertama sebagai halaman aktif
            if (!isset($_GET['pages'])) {
                $currentPage = 'karyailmiah1';
            }

            // Buat tombol navigasi
            for ($i = 1; $i <= $totalPages; $i++) {
                // Hanya tampilkan tombol untuk halaman yang ada
                if ($i <= $totalPages) {
                    $activeClass = ('karyailmiah' . $i == $currentPage) ? 'active' : '';
                    echo "<button class=$activeClass><a href='index.php?page=karyailmiah&pages=karyailmiah$i' class='btn btn-page'>" . $i . "</a></button>";
                }
            }
            ?>
        </div>
    </div>
</div>