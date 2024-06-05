<style>
    .main-kurikulum-wrapper {
        flex: 5;
        min-height: 68.2vh;
        padding: 40px !important;
    }

    .judul-kurikulum h2 {
        font-family: 'Open Sans', sans-serif !important;
        font-size: 35px;
        font-weight: 700;
        color: #2E3B44;
    }

    .judul-kurikulum::after {
        background-color: #3ec9eb;
        border-radius: 5rem;
        content: "";
        display: block;
        height: .6rem;
        margin-top: 10px;
        position: absolute;
        width: 5rem;
    }

    .isi-kurikulum {
        margin-top: 4rem;
    }

    .accordion {
        padding: 0 !important;
    }

    .accordion li {
        list-style: none;
        width: 100%;
        background: #FFFFFF;
    }

    .accordion .item-accordion {
        border-bottom: 2px solid #e0e0e0 !important;
    }

    .accordion .item-accordion:not(:last-child) {
        margin-bottom: 20px !important;
    }


    .accordion li label {
        display: flex;
        align-items: center;
        padding: 10px 10px 10px 0;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
    }

    label::before {
        content: '+';
        margin-right: 10px;
        font-size: 24px;
        font-weight: 600;
        padding-bottom: 5px;
    }

    input[type="checkbox"] {
        display: none;
    }

    .accordion .content {
        color: #555;
        padding: 0 20px;
        line-height: 26px;
        max-height: 0;
        overflow: hidden;
        transition: ease-in-out 1s;
    }

    .accordion .content .list-group {
        display: flex;
        flex-direction: row;
        border-radius: 0 !important;
    }

    .list-group .list-group-isi {
        padding: 10px !important;
        margin: 0 !important;
        text-align: center;
    }

    .judul-semester {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .judul-semester p {
        font-family: Open Sans, sans-serif;
        border-radius: 8px;
        padding: 10px 20px;
        margin: 0 !important;
        font-size: 18px;
        font-weight: 700;
        background-color: #CAF0FA;
        color: #18B7DF;
    }

    .isi-matkul {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        margin-top: 25px;
        padding: 20px 0;
        box-shadow: 0 .3rem 1rem rgba(0, 0, 0, .1);
        width: 100%;
    }

    .nama-kecil-matkul,
    .nama-kecil-sks {
        font-size: 17px !important;
        font-weight: 700 !important;
    }

    .nama-matkul p,
    .angka-sks p {
        font-size: 15px;
        font-weight: 600;
    }

    .nama-matkul p:last-child,
    .angka-sks p:last-child {
        margin: 0px !important;
    }


    .list-group .list-group-judul:not(:last-child) {
        margin-right: 5px;
    }

    .wrapper-cabang-matkul {
        width: 100%;
    }

    .wrapper-cabang-matkul p {
        margin-bottom: 20px !important;
        padding: 10px 5px;
        margin: 5px 35px;
        font-size: 18px;
        font-weight: 700;
        color: #000000;
        background-color: #E0E0E0;
    }

    .accordion input[type="checkbox"]:checked+label+.content {
        max-height: 6000px;
        padding: 10px 20px 20px;
    }

    .accordion input[type="checkbox"]:checked+label::before {
        content: '-';
    }

    @media (min-width: 1200px) and (max-width: 1300px) {

        .nama-matkul p,
        .angka-sks p {
            font-size: 14px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 15px !important;
        }
    }

    @media (min-width: 622px) and (max-width: 991.98px) {
        .judul-kurikulum h2 {
            font-size: 33px !important;
        }

        .judul-kurikulum::after {
            width: 4.5rem !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 15px !important;
        }
    }

    @media (min-width: 544px) and (max-width: 621.98px) {
        .judul-kurikulum h2 {
            font-size: 32px !important;
        }

        .judul-kurikulum::after {
            width: 4.4rem !important;
        }

        .list-group .list-group-isi {
            padding: 10px 0 !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 15px !important;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 13.5px;
        }
    }

    @media (min-width: 467px) and (max-width: 543.98px) {
        .judul-kurikulum h2 {
            font-size: 31px !important;
        }

        .judul-kurikulum::after {
            width: 4.3rem !important;
        }

        .list-group .list-group-isi {
            padding: 10px 0 !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .judul-semester {
            padding-top: 10px;
        }

        .nama-matkul {
            display: flex;
            flex-direction: column;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 15px !important;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 12.5px;
        }

        .content {
            padding: 10px 3px 20px !important;
        }
    }

    @media (min-width: 430px) and (max-width: 466.98px) {
        .judul-kurikulum h2 {
            font-size: 28px !important;
        }

        .judul-kurikulum::after {
            width: 4rem !important;
            height: .5rem;
        }

        .list-group .list-group-isi {
            padding: 10px 0 !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .accordion li label {
            font-size: 18px;
        }

        .judul-semester p {
            font-size: 16px;
        }

        .nama-kecil-matkul,
        .nama-kecil-sks {
            font-size: 14.5px !important;
        }

        .judul-semester {
            padding-top: 10px;
        }

        .nama-matkul {
            display: flex;
            flex-direction: column;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 10px !important;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 11.3px;
        }

        .content {
            padding: 10px 3px 20px !important;
        }
    }

    @media (min-width: 360px) and (max-width: 429.98px) {

        .main-kurikulum-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 5px !important;
        }

        .judul-kurikulum h2 {
            font-size: 28px !important;
        }

        .judul-kurikulum::after {
            width: 4rem !important;
            height: .5rem;
            margin-left: 35px;
        }

        .list-group .list-group-isi {
            padding: 10px 0 !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .accordion li label {
            font-size: 18px;
        }

        .judul-semester p {
            font-size: 16px;
        }

        .nama-kecil-matkul,
        .nama-kecil-sks {
            font-size: 14.5px !important;
        }

        .judul-semester {
            padding-top: 10px;
        }

        .nama-matkul {
            display: flex;
            flex-direction: column;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 10px !important;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 11.3px;
        }

        .content {
            padding: 10px 3px 20px !important;
        }

        .wrapper-cabang-matkul p {
            font-size: 17px;
        }
    }

    @media (min-width: 0px) and (max-width: 359.98px) {
        .main-kurikulum-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 0 !important;
        }

        .judul-kurikulum h2 {
            font-size: 24px !important;
        }

        .judul-kurikulum::after {
            width: 4rem !important;
            height: .5rem;
            margin-left: 27px;
        }

        .isi-kurikulum {
            margin-top: 3rem;
        }

        .list-group .list-group-isi {
            padding: 10px 0 !important;
        }

        .accordion .content .list-group {
            flex-wrap: wrap;
        }

        .wrapper-cabang-matkul p {
            margin: 5px 15px;
        }

        .accordion li label {
            font-size: 16px;
            padding-bottom: 0 !important;
        }

        .judul-semester p {
            font-size: 14px;
        }

        .nama-kecil-matkul,
        .nama-kecil-sks {
            font-size: 12.5px !important;
        }

        .judul-semester {
            padding-top: 10px;
        }

        .nama-matkul {
            display: flex;
            flex-direction: column;
        }

        .judul-sem-2,
        .judul-sem-4,
        .judul-sem-6,
        .judul-sem-8 {
            margin-top: 10px !important;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 9.15px;
            line-height: 1.5;
        }

        .wrapper-cabang-matkul p {
            font-size: 15px;
        }

        .content {
            padding: 10px 3px 20px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 294.98px) {
        .wrapper-cabang-matkul p {
            margin: 5px 15px;
            font-size: 14px;
        }

        .nama-matkul {
            width: 70%;
        }

        .nama-matkul p,
        .angka-sks p {
            font-size: 9px;
            line-height: 1.3;
        }
    }

    @media (min-width: 0px) and (max-width: 429.98px) {
        .isi-kurikulum {
            margin: 4rem 40px !important;
        }

        .content {
            padding: 5px 3px 5px !important;
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
                <li class="sidebar-item active">
                    <a href="index.php?page=kurikulum" class="sidebar-link">Kurikulum</a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?page=karir" class="sidebar-link">Karir</a>
                </li>
            </ul>
        </aside>
        <div class="main-kurikulum-wrapper">
            <div class="judul-kurikulum" data-aos="fade-down" data-aos-duration="800" data-aos-delay="50"
                data-aos-once="true">
                <h2>
                    Kurikulum
                </h2>
            </div>
            <div class="isi-kurikulum" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600"
                data-aos-once="true">
                <ul class="accordion">
                    <li class="item-accordion">
                        <input type="checkbox" name="accordion" id="first">
                        <label for="first">Tahun Pertama</label>
                        <div class="content">
                            <ul class="list-group">
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-1">
                                        <p>
                                            Semester 1
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Algoritma dan Pemrograman</p>
                                            <p>Sistem Digital</p>
                                            <p>Sistem Operasi</p>
                                            <p>Matematika Diskrit</p>
                                            <p>Aplikasi Komputer</p>
                                            <p>Basis Data</p>
                                            <p>Bahasa Inggris 1</p>
                                            <p>Kebudayaan dan Peradaban 1</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-2">
                                        <p>
                                            Semester 2
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Kebudayaan dan Peradaban 2</p>
                                            <p>Bahasa Indonesia</p>
                                            <p>Pemrograman Beorientasi Objek</p>
                                            <p>Jaringan Komputer</p>
                                            <p>Aljabar Linear</p>
                                            <p>Dasar Robotika</p>
                                            <p>Teori Bahasa dan Otomata</p>
                                            <p>Dasar Multimedia</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="item-accordion">
                        <input type="checkbox" name="accordion" id="second">
                        <label for="second">Tahun Kedua</label>
                        <div class="content">
                            <ul class="list-group">
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-3">
                                        <p>
                                            Semester 3
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Kebudayaan dan Peradaban 3</p>
                                            <p>Pemrograman Web</p>
                                            <p>Pengantar Kewirausahaan</p>
                                            <p>Analisa Perancangan Perangkat Lunak</p>
                                            <p>Proses Mikro dan Kontrol</p>
                                            <p>Grafika Komputer</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-4">
                                        <p>
                                            Semester 4
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Kebudayaan dan Peradaban 4</p>
                                            <p>Bahasa Inggris 2</p>
                                            <p>Kewirausahaan Sosial</p>
                                            <p>Pengolahan Citra</p>
                                            <p>Sensor & Transduser</p>
                                            <p>Digital Desain</p>
                                            <p>Antarmuka dan Pengalaman Pengguna</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>2 sks</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="item-accordion">
                        <input type="checkbox" name="accordion" id="third">
                        <label for="third">Tahun Ketiga</label>
                        <div class="content">
                            <ul class="list-group">
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-5">
                                        <p>
                                            Semester 5
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>MULTIMEDIA ENGINEER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Pancasila</p>
                                            <p>Metode Penelitian</p>
                                            <p>Keamanan Jaringan</p>
                                            <p>Pemrograman Mobile</p>
                                            <p>Kecerdasan Buatan</p>
                                            <p>Animasi Komputer</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>IOT DEVELOPER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Pancasila</p>
                                            <p>Metode Penelitian</p>
                                            <p>Keamanan Jaringan</p>
                                            <p>Pemrograman Mobile</p>
                                            <p>Kecerdasan Buatan</p>
                                            <p>Pemrograman Kontrol dan Logika</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Pancasila</p>
                                            <p>Metode Penelitian</p>
                                            <p>Keamanan Jaringan</p>
                                            <p>Pemrograman Mobile</p>
                                            <p>Mata kuliah Pilihan Prodi Lain Dalam Universitas</p>
                                            <p>Mata kuliah Pilihan Prodi Lain Dalam Universitas</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-6">
                                        <p>
                                            Semester 6
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>MULTIMEDIA ENGINEER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Agama</p>
                                            <p>Kewarganegaraan</p>
                                            <p>Manajemen Proyek Teknologi Informasi</p>
                                            <p>Sistem Terdistribusi</p>
                                            <p>Interaksi 3 Dimensi</p>
                                            <p>Audio Visual</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>IOT DEVELOPER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Agama</p>
                                            <p>Kewarganegaraan</p>
                                            <p>Manajemen Proyek Teknologi Informasi</p>
                                            <p>Sistem Terdistribusi</p>
                                            <p>Pembelajaran Mesin</p>
                                            <p>Robot Otonom</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM / PRAKTIK INDUSTRI</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Organisasi Perusahaan</p>
                                            <p>Pelatihan Kerja</p>
                                            <p>Keterampilan Kerja</p>
                                            <p>Team Work dan Problem Solving</p>
                                            <p>Komunikasi Efektif</p>
                                            <p>Studi / Proyek Independen</p>
                                            <p>Topik Khusus Teknologi Informasi </p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM MENGAJAR DI SEKOLAH</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Teori Belajar dan Pembelajaran</p>
                                            <p>Mekanisme Penyusunan Materi</p>
                                            <p>Praktik Belajar dan Pembelajaran</p>
                                            <p>Prosedur Evaluasi Pembelajaran</p>
                                            <p>Evaluasi Pembelajaran</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM STUDI / PROYEK INDEPENDEN</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Manajemen Lomba</p>
                                            <p>Persiapan dan Perencanaan</p>
                                            <p>Perancangan Sistem Kerja</p>
                                            <p>Analisa Sistem</p>
                                            <p>Uji coba dan Pengaplikasian</p>
                                            <p>Teknik Perawatan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Mini Riset</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM KEWIRAUSAHAAN</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Organisasi Perusahaan</p>
                                            <p>Manajemen Keuangan dan Sumber Daya Manusia</p>
                                            <p>Digital Inovasi Start-up</p>
                                            <p>Komunikasi Bisnis</p>
                                            <p>Venture Enterprise</p>
                                            <p>Etika Bisnis dan Riset Pasar Digital</p>
                                            <p>Digital Marketing dan Bisnis Plan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM PENELITIAN / RISET</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Analisis Kebutuhan</p>
                                            <p>Perencanaan</p>
                                            <p>Desain Sistem dan Antar Muka</p>
                                            <p>Implementasi</p>
                                            <p>Testing</p>
                                            <p>Pemeliharaan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="item-accordion">
                        <input type="checkbox" name="accordion" id="fourth">
                        <label for="fourth">Tahun Keempat</label>
                        <div class="content">
                            <ul class="list-group">
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-7">
                                        <p>
                                            Semester 7
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>MULTIMEDIA ENGINEER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Etika Profesi IT</p>
                                            <p>Sistem Informasi Geografis</p>
                                            <p>Visual Effect (VfX)</p>
                                            <p>Mix Reality</p>
                                            <p>Desain Komunikasi Visual</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>IOT DEVELOPER</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Etika Profesi IT</p>
                                            <p>Sistem Informasi Geografis</p>
                                            <p>Smart System</p>
                                            <p>Fuzzy Logic</p>
                                            <p>Cloud Computing</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM MAGANG / PRAKTIK INDUSTRI</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Organisasi Perusahaan</p>
                                            <p>Pelatihan Kerja</p>
                                            <p>Keterampilan Kerja</p>
                                            <p>Team Work dan Problem Solving</p>
                                            <p>Komunikasi Efektif</p>
                                            <p>Studi / Proyek Independen</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM MENGAJAR DI SEKOLAH</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Teori Belajar dan Pembelajaran</p>
                                            <p>Mekanisme Penyusunan Materi</p>
                                            <p>Praktik Belajar dan Pembelajaran</p>
                                            <p>Prosedur Evaluasi Pembelajaran</p>
                                            <p>Evaluasi Pembelajaran</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM STUDI / PROYEK INDEPENDEN</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Manajemen Lomba</p>
                                            <p>Persiapan dan Perencanaan</p>
                                            <p>Perancangan Sistem Kerja</p>
                                            <p>Analisa Sistem</p>
                                            <p>Uji coba dan Pengaplikasian</p>
                                            <p>Teknik Perawatan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Mini Riset</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM KEWIRAUSAHAAN</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Organisasi Perusahaan</p>
                                            <p>Manajemen Keuangan dan Sumber Daya Manusia</p>
                                            <p>Digital Inovasi Start-up</p>
                                            <p>Komunikasi Bisnis</p>
                                            <p>Venture Enterprise</p>
                                            <p>Etika Bisnis dan Riset Pasar Digital</p>
                                            <p>Digital Marketing dan Bisnis Plan</p>
                                            <p>Digital Marketing dan Bisnis Plan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="wrapper-cabang-matkul">
                                            <p>KAMPUS MERDEKA PROGRAM PENELITIAN / RISET</p>
                                        </div>
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Analisis Kebutuhan</p>
                                            <p>Perencanaan</p>
                                            <p>Desain Sistem dan Antar Muka</p>
                                            <p>Implementasi</p>
                                            <p>Testing</p>
                                            <p>Pemeliharaan</p>
                                            <p>Topik Khusus Teknologi Informasi</p>
                                            <p>Proposal Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>4 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                            <p>6 sks</p>
                                            <p>4 sks</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-isi">
                                    <div class="judul-semester judul-sem-8">
                                        <p>
                                            Semester 8
                                        </p>
                                    </div>
                                    <div class="isi-matkul">
                                        <div class="nama-matkul">
                                            <p class="nama-kecil-matkul">MATA KULIAH</p>
                                            <p>Kapita Selekta</p>
                                            <p>Tugas Akhir</p>
                                        </div>
                                        <div class="angka-sks">
                                            <p class="nama-kecil-sks">SKS</p>
                                            <p>2 sks</p>
                                            <p>6 sks</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>