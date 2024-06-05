<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        include_once "koneksi.php";
        $sql = mysqli_query($db, "SELECT * FROM tbl_home;");
        $no = 1;
        while ($rdata = mysqli_fetch_array($sql)) {
            ?>
            <div class="carousel-item <?php echo $no == 1 ? 'active' : ''; ?>" data-bs-interval="6000">
                <?php echo "<img src='images/$rdata[gambar_home]' class='d-block' alt='Banner UVERS $no'>" ?>
            </div>
            <?php
            $no++;
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control" aria-hidden="true">
            <svg viewBox="0 0 85 85" xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="arrow-prev">
                <circle cx="42.5" cy="42.5" r="42.5" fill="#FFF"></circle>
                <path fill="#2E3b44"
                    d="M29.189 37.123L44.34 21.972a7.575 7.575 0 1110.712 10.712l-9.8 9.8 9.8 9.8A7.574 7.574 0 1144.34 62.986L29.189 47.835a7.572 7.572 0 010-10.712z">
                </path>
            </svg>
        </span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control" aria-hidden="true">
            <svg viewBox="0 0 85 85" xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="arrow-next">
                <circle cx="42.5" cy="42.5" r="42.5" fill="#FFF"></circle>
                <path fill="#2E3b44"
                    d="M55.956 37.363L40.499 21.907A7.727 7.727 0 1029.571 32.83l9.993 10-9.993 9.99a7.727 7.727 0 1010.928 10.927l15.457-15.456a7.724 7.724 0 000-10.928z">
                </path>
            </svg>
        </span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- END HALAMAN DEPAN -->

<div class="container-fluid content-tengah d-flex flex-column align-items-center" id="content-tengah"
    data-aos="fade-down" data-aos-duration="1700" data-aos-delay="200" data-aos-once="true">
    <div class="populer">
        <h2 class="heading-secondary">Terkini</h2>
    </div>

    <div class="slide-container">
        <div class="slide-content">
            <div class="card-wrapper d-flex flex-row justify-content-around">
                <?php
                include_once "koneksi.php";
                $sql = mysqli_query($db, "SELECT * FROM tbl_terkini ORDER BY tanggal_terkini DESC;");
                $no = 1;
                while ($rdata = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="card">
                        <div class="image-content">
                            <div class="card-image">
                                <?php echo "<img src='images/$rdata[gambar_terkini]' class='card-img' alt='Gambar Terkini $no'>" ?>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="deskripsi">
                                <?php
                                $judul_terkini = implode(' ', array_slice(explode(' ', $rdata['judul_terkini']), 0, 20));
                                echo $judul_terkini . (str_word_count($rdata['judul_terkini']) > 20 ? '...' : '');
                                ?>
                            </p>
                            <button class="button">
                                <a
                                    href="index.php?page=card-<?php echo $rdata['id_terkini']; ?>&id=<?php echo $rdata['id_terkini']; ?>">Lihat
                                    Selengkapnya
                                </a>
                            </button>
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