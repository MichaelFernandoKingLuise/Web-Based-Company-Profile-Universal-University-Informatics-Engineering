<?php
session_start();
if (!isset($_SESSION['username']) == "admin") {
    echo "<script language = 'JavaScript'>
        alert('Maaf!!! Akses Halaman ini harus login terlebih dahulu');
        document.location='index.php?page=login';
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' type='image/x-icon'
        href='http://uvers.ac.id/uvers/prodi/informatika/public/favicon.ico' />
    <title>Teknik Informatika | Universitas Universal</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- LINK LIGHTBOX CSS -->
    <link rel="stylesheet" href="css/lightbox.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- LOGO LOCK -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- MAIN CSS -->
    <link href="css/app.css" rel="stylesheet" />

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php"><img
                    src="images/logo-program-studi.svg"
                    alt="Logo"></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="admin.php" id="judulCanvas">
                            Universitas Universal | Teknik Informatika
                        </a></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li><a class="dropdown-item" href="admin.php?page=tentangkami">Tentang Kami</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=visimisi">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=dosen">Dosen</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=kurikulum">Kurikulum</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=karir">Karir</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Informasi
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li><a class="dropdown-item" href="admin.php?page=pengumuman">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=berita">Berita</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Publikasi
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li><a class="dropdown-item" href="admin.php?page=galeri">Galeri</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=karyailmiah">Karya Ilmiah</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=prestasi">Prestasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Edit
                            </a>
                            <ul class="dropdown-menu p-2">
                                <li><a class="dropdown-item" href="admin.php?page=ehomepage">Halaman Utama</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=eterkini">Terkini</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=edosen">Dosen</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=ekarir">Karir</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=epengumuman">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=eberita">Berita</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=egaleri">Galeri</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=ekaryailmiah">Karya Ilmiah</a></li>
                                <li><a class="dropdown-item" href="admin.php?page=eprestasi">Prestasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- BUTTON ADMISI -->
            <a href="logout.php" class="btn btn-light" id="admisi">Logout</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HALAMAN UTAMA -->
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'tentangkami':
                include "tentangkami.php";
                break;
            case 'visimisi':
                include "visimisi.php";
                break;
            case 'dosen':
                include "dosen.php";
                break;
            case 'kurikulum':
                include "kurikulum.php";
                break;
            case 'karir':
                include "karir.php";
                break;
            case 'pengumuman':
                include "pengumuman.php";
                break;
            case 'pengumuman1':
                include "pengumuman1.php";
                break;
            case 'pengumuman2':
                include "pengumuman2.php";
                break;
            case 'pengumuman3':
                include "pengumuman3.php";
                break;
            case 'pengumuman4':
                include "pengumuman4.php";
                break;
            case 'pengumuman5':
                include "pengumuman5.php";
                break;
            case 'pengumuman6':
                include "pengumuman6.php";
                break;
            case 'pengumuman7':
                include "pengumuman7.php";
                break;
            case 'pengumuman8':
                include "pengumuman8.php";
                break;
            case 'pengumuman9':
                include "pengumuman9.php";
                break;
            case 'pengumuman10':
                include "pengumuman10.php";
                break;
            case 'pengumuman11':
                include "pengumuman11.php";
                break;
            case 'pengumuman12':
                include "pengumuman12.php";
                break;
            case 'pengumuman13':
                include "pengumuman13.php";
                break;
            case 'pengumuman14':
                include "pengumuman14.php";
                break;
            case 'pengumuman15':
                include "pengumuman15.php";
                break;
            case 'pengumuman16':
                include "pengumuman16.php";
                break;
            case 'pengumuman17':
                include "pengumuman17.php";
                break;
            case 'pengumuman18':
                include "pengumuman18.php";
                break;
            case 'pengumuman19':
                include "pengumuman19.php";
                break;
            case 'pengumuman20':
                include "pengumuman20.php";
                break;
            case 'berita':
                include "berita.php";
                break;
            case 'berita1':
                include "berita1.php";
                break;
            case 'berita2':
                include "berita2.php";
                break;
            case 'berita3':
                include "berita3.php";
                break;
            case 'berita4':
                include "berita4.php";
                break;
            case 'berita5':
                include "berita5.php";
                break;
            case 'berita6':
                include "berita6.php";
                break;
            case 'berita7':
                include "berita7.php";
                break;
            case 'berita8':
                include "berita8.php";
                break;
            case 'berita9':
                include "berita9.php";
                break;
            case 'berita10':
                include "berita10.php";
                break;
            case 'berita11':
                include "berita11.php";
                break;
            case 'berita12':
                include "berita12.php";
                break;
            case 'berita13':
                include "berita13.php";
                break;
            case 'berita14':
                include "berita14.php";
                break;
            case 'berita15':
                include "berita5.php";
                break;
            case 'berita16':
                include "berita16.php";
                break;
            case 'berita17':
                include "berita17.php";
                break;
            case 'berita18':
                include "berita18.php";
                break;
            case 'berita19':
                include "berita19.php";
                break;
            case 'berita20':
                include "berita20.php";
                break;
            case 'galeri':
                include "galeri.php";
                break;
            case 'karyailmiah':
                include "karyailmiah.php";
                break;
            case 'prestasi':
                include "prestasi.php";
                break;
            case 'prestasi1':
                include "prestasi1.php";
                break;
            case 'prestasi2':
                include "prestasi2.php";
                break;
            case 'prestasi3':
                include "prestasi3.php";
                break;
            case 'prestasi4':
                include "prestasi4.php";
                break;
            case 'prestasi5':
                include "prestasi5.php";
                break;
            case 'prestasi6':
                include "prestasi6.php";
                break;
            case 'prestasi7':
                include "prestasi7.php";
                break;
            case 'prestasi8':
                include "prestasi8.php";
                break;
            case 'prestasi9':
                include "prestasi9.php";
                break;
            case 'prestasi10':
                include "prestasi10.php";
                break;
            case 'prestasi11':
                include "prestasi11.php";
                break;
            case 'prestasi12':
                include "prestasi12.php";
                break;
            case 'prestasi13':
                include "prestasi13.php";
                break;
            case 'prestasi14':
                include "prestasi14.php";
                break;
            case 'prestasi15':
                include "prestasi15.php";
                break;
            case 'prestasi16':
                include "prestasi16.php";
                break;
            case 'prestasi17':
                include "prestasi17.php";
                break;
            case 'prestasi18':
                include "prestasi18.php";
                break;
            case 'prestasi19':
                include "prestasi19.php";
                break;
            case 'prestasi20':
                include "prestasi20.php";
                break;
            case 'login':
                include "login.php";
                break;
            case 'admin':
                include "admin.php";
                break;
            case 'card-1':
                include "kartu1.php";
                break;
            case 'card-2':
                include "kartu2.php";
                break;
            case 'card-3':
                include "kartu3.php";
                break;
            case 'ehomepage':
                include "ehomepage.php";
                break;
            case 'eterkini':
                include "eterkini.php";
                break;
            case 'edosen':
                include "edosen.php";
                break;
            case 'ekarir':
                include "ekarir.php";
                break;
            case 'epengumuman':
                include "epengumuman.php";
                break;
            case 'eberita':
                include "eberita.php";
                break;
            case 'egaleri':
                include "egaleri.php";
                break;
            case 'ekaryailmiah':
                include "ekaryailmiah.php";
                break;
            case 'eprestasi':
                include "eprestasi.php";
                break;
            case 'inputhomepage':
                include "inputhomepage.php";
                break;
            case 'inputterkini':
                include "inputterkini.php";
                break;
            case 'inputdosen':
                include "inputdosen.php";
                break;
            case 'inputkarir':
                include "inputkarir.php";
                break;
            case 'inputpengumuman':
                include "inputpengumuman.php";
                break;
            case 'inputberita':
                include "inputberita.php";
                break;
            case 'inputgaleri':
                include "inputgaleri.php";
                break;
            case 'inputkaryailmiah':
                include "inputkaryailmiah.php";
                break;
            case 'inputprestasi':
                include "inputprestasi.php";
                break;
            case 'inputhomepageaksi':
                include "inputhomepageaksi.php";
                break;
            case 'inputterkiniaksi':
                include "inputterkiniaksi.php";
                break;
            case 'inputdosenaksi':
                include "inputdosenaksi.php";
                break;
            case 'inputkariraksi':
                include "inputkariraksi.php";
                break;
            case 'inputpengumumanaksi':
                include "inputpengumumanaksi.php";
                break;
            case 'inputberitaaksi':
                include "inputberitaaksi.php";
                break;
            case 'inputgaleriaksi':
                include "inputgaleriaksi.php";
                break;
            case 'inputkaryailmiahaksi':
                include "inputkaryailmiahaksi.php";
                break;
            case 'inputprestasiaksi':
                include "inputprestasiaksi.php";
                break;
            case 'del_homepage':
                include "deletehomepage.php";
                break;
            case 'del_terkini':
                include "deleteterkini.php";
                break;
            case 'del_dosen':
                include "deletedosen.php";
                break;
            case 'del_karir':
                include "deletekarir.php";
                break;
            case 'del_pengumuman':
                include "deletepengumuman.php";
                break;
            case 'del_berita':
                include "deleteberita.php";
                break;
            case 'del_galeri':
                include "deletegaleri.php";
                break;
            case 'del_karyailmiah':
                include "deletekaryailmiah.php";
                break;
            case 'del_prestasi':
                include "deleteprestasi.php";
                break;
            case 'edit_homepage':
                include "edithomepage.php";
                break;
            case 'edit_terkini':
                include "editterkini.php";
                break;
            case 'edit_dosen':
                include "editdosen.php";
                break;
            case 'edit_karir':
                include "editkarir.php";
                break;
            case 'edit_pengumuman':
                include "editpengumuman.php";
                break;
            case 'edit_berita':
                include "editberita.php";
                break;
            case 'edit_galeri':
                include "editgaleri.php";
                break;
            case 'edit_karyailmiah':
                include "editkaryailmiah.php";
                break;
            case 'edit_prestasi':
                include "editprestasi.php";
                break;
            case 'edit_homepageaksi':
                include "edithomepageaksi.php";
                break;
            case 'edit_terkiniaksi':
                include "editterkiniaksi.php";
                break;
            case 'edit_dosenaksi':
                include "editdosenaksi.php";
                break;
            case 'edit_kariraksi':
                include "editkariraksi.php";
                break;
            case 'edit_pengumumanaksi':
                include "editpengumumanaksi.php";
                break;
            case 'edit_beritaaksi':
                include "editberitaaksi.php";
                break;
            case 'edit_galeriaksi':
                include "editgaleriaksi.php";
                break;
            case 'edit_karyailmiahaksi':
                include "editkaryailmiahaksi.php";
                break;
            case 'edit_prestasiaksi':
                include "editprestasiaksi.php";
                break;
            default:
                echo "MAAF HALAMAN TIDAK DITEMUKAN !!!";
        }
    } else {
        include "beranda.php";
    }
    ?>
    <!-- END HALAMAN UTAMA -->


    <!-- FOOTER -->
    <footer>
        <div class="container-fluid footer" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="true">
            <div class="footer-wrapper">
                <div class="footer-container d-flex flex-row">
                    <div class="logo align-self-center">
                        <img src="images/logo-program-studi.svg"
                            alt="Logo">
                    </div>
                    <div class="footer-col-satu d-flex flex-column">
                        <div class="footer-heading">
                            Hubungi Kami
                        </div>

                        <div class="footer-text">
                            <img class="logo-hubungi"
                                src="images/logo-phone.svg"
                                alt="Logo">
                            <span class="nomor-hp">
                                0778 - 473399/466869
                            </span>
                            <br>
                            <br>
                            <img class="logo-hubungi"
                                src="images/logo-mail.svg"
                                alt="">
                            <a href="mailto:info@uvers.ac.id" class="email" target="_blank">
                                info@uvers.ac.id
                            </a>
                        </div>

                        <div class="medsos flex-row align-items-center">
                            <a href="https://api.whatsapp.com/send?phone=6285272161218n" title="Whatsapp"
                                class="medsos-list"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></a>

                            <a href="https://www.instagram.com/uvers_batam/" title="Instagram" class="medsos-list"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>

                            <a href="https://www.facebook.com/uversbatam" title="Facebook" class="medsos-list"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>



                            <a href="https://www.youtube.com/UNIVERSITASUNIVERSAL" title="Youtube"
                                class="medsos-list"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="footer-col-dua d-flex flex-column">
                        <div class="footer-heading">
                            Kunjungi Kami
                        </div>
                        <div class="footer-text">
                            Kompleks Maha Vihara Duta Maitreya
                            <br>
                            Bukit Beruntung, Sei Panas
                            <br>
                            Batam 29456
                            <br>
                            Kepulauan Riau - Indonesia
                        </div>
                    </div>
                    <div class="footer-col-tiga align-self-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d911.656851251841!2d104.0325760710889!3d1.1292990740245554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9891262e3ade1%3A0x13cf97f10b38a762!2sUniversitas%20Universal!5e0!3m2!1sid!2sid!4v1700225561758!5m2!1sid!2sid"
                            width="100%" height="" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>

        var swiper = new Swiper(".mySwiper", {
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
        });
    </script>

    <!-- MAIN JS -->
    <script src="js/scripts.js"></script>
    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- LIGHTBOX JAVASCRIPT -->
    <script src="js/lightbox-plus-jquery.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>