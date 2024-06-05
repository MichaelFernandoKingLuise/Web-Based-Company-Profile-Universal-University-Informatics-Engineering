-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2024 at 09:53 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21585659_uverstif`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` text NOT NULL,
  `judul_berita` varchar(999) NOT NULL,
  `tanggal_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `isi_berita`, `gambar_berita`, `judul_berita`, `tanggal_berita`) VALUES
(1, 'Gaya mewah Kepala Dinkes Lampung Reihana Wijayanto curi perhatian netizen. Netizen memperhatikan kerudung eksentrik hingga tas branded yang selalu ditenteng.Provinsi Lampung kian jadi sorotan berawal dari kritik Tiktoker Bima Yudho Saputro. Lewat akun TikTok @awbimaxreborn, Bima mengkritisi kondisi Lampung dengan konten bertajuk Alasan Kenapa Lampung Gak Maju-Maju.Tak ayal, sesuatu yang berkaitan dengan Lampung pun turut jadi pembicaraan publik termasuk sosok Kepala Dinas Kesehatan (Dinkes) Lampung Reihana Wijayanto. Di Twitter, ia jadi bulan-bulanan netizen berkat gaya mewah kepala Dinkes Lampung.Meski akun Instagram-nya sudah dibuat privat, netizen dengan canggih masih menemukan sederet foto Reihana dalam balutan gaya mewah.Hal pertama yang disasar adalah gaya kerudung Reihana. Sebagian netizen dibuat takjub dengan kerudungnya dengan ciput tebal yang tinggi menjulang.Kerudungnya setinggi harapan orang tua, seloroh seorang netizen. Kayak terowongan Casablanca, ujar yang lain. Seperti rumah adat, kata seorang pengguna Twitter.Pun yang tak kalah nyeleneh, beberapa netizen mengunggah foto yang dianggap mirip dengan kerudung Reihana seperti dashboard motor, atap rumah gadang dan tokoh Kamen Rider Fourze.Sementara itu, gaya mewah kepala Dinkes Lampung ini juga dilengkapi dengan sederet tas mewah. Pada salah satu foto, ia tampak berpose sembari menenteng tas Hermes seri Birkin berwarna oranye. Birkin 40 Togo Rouge Tomate harganya mencapai ratusan juta rupiah.Ada pula tas mini Gucci Horsebit 1955 dengan harga 895 euro atau sekitar Rp14,5 juta. Kemudian tas mini dari rumah mode Dior yang harganya puluhan ', '2002182682_berita3.jpg', 'Viral Gaya Kepala Dinkes Lampung Tenteng Tas Mewah Ratusan Juta ', '2023-11-15'),
(2, 'Dalam bidang ekonomi, kebijakannya dinilai hanya menguntungkan kroni-kroninya. Namun, Soeharto dianggap berhasil dengan swasembada beras tahun 1984.\r\nFundamental ekonomi yang rapuh membuat Indonesia tak bisa menghindar dari krisis ekonomi pada 1997 lalu, dan meminta bantuan kepada Dana Moneter Internasional (IMF).\r\nTuntutan mundur sudah disuarakan melalui demonstrasi mahasiswa di berbagai daerah. Namun Soeharto kembali dicalonkan kembali sebagai presiden untuk yang ketujuh kalinya.\r\nKetika demonstasi mulai meluas dan mendapatkan dukungan dari berbagai tokoh masyarakat, kekerasan dilakukan untuk meredamnya. Penembakan empat mahasiswa Trisakti terjadi di tengah panasnya situasi politik.\r\nSehari setelah penembakan mahasiswa Trisakti, kerusuhan bernuansa rasial terjadi di Jakarta dan berbagai kota.\r\nPusat perbelanjaan dibakar dan perkosaan massal terjadi. Peristiwa itu justru membuat tekanan terhadap Soeharto semakin besar. Setelah berkuasa selama 32 tahun ia pun mengundurkan diri digantikan wakilnya, B.J. Habibie.', '1283778709_soeharto.jpg', '20 tahun reformasi: Lini masa foto dan video sejak Soeharto berkuasa hingga jatuh', '2023-11-02'),
(3, 'Tiga pasang calon presiden dan calon wakil presiden (capres-cawapres) peserta pemilihan umum (pemilu) 2024, yaitu Anies Baswedan-Abdul Muhaimin Iskandar, Prabowo Subianto-Gibran Rakabuming Raka, dan Ganjar Pranowo-Mohamad Mahfud MD resmi menandatangani komitmen untuk mewujudkan kampanye yang damai, tertib, dan taat hukum. Kegiatan tersebut dilaksanakan dalam Rapat Koordinasi Nasional (Rakornas) Sentra Penegakan Hukum Terpadu (Gakkumdu) Badan Pengawas Pemilihan Umum (Bawaslu) di Hotel Grand Sahid, Sudirman, Jakarta Pusat, Senin (27/11/2023). Baca Juga PBNU Keluarkan Surat Ketentuan bagi Pengurus NU yang Terlibat Kepesertaan Pemilu 2024 Pasangan capres-cawapres nomor urut 1 Anies Baswedan dan Muhaimin Iskandar berkomitmen menjaga integritas pada pemilu 2024. Sebab, pemilu yang berintegritas akan menghadirkan pemerintah yang berwibawa, penuh legitimasi, serta pemerintah akan dihormati di dalam negeri dan luar negeri.', '259884116_capres.jpg', 'Survei Capres Terkini: Anies, Prabowo & Ganjar, Siapa Unggul?', '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(255) NOT NULL,
  `gambar_dosen` text NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `jabatan_dosen` varchar(255) NOT NULL,
  `nidn_dosen` varchar(500) NOT NULL,
  `scholar_dosen` varchar(500) NOT NULL,
  `sinta_dosen` varchar(500) NOT NULL,
  `scopus_dosen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `gambar_dosen`, `nama_dosen`, `jabatan_dosen`, `nidn_dosen`, `scholar_dosen`, `sinta_dosen`, `scopus_dosen`) VALUES
(1, '1700468661_yonky.jpg', 'Yonky Pernando, S.Kom., M.Kom', 'Koordinator Program Studi Teknik Informatika', '1013049001', 'https://scholar.google.co.id/citations?user=eR2hw3IAAAAJ&hl=id', 'https://sinta.kemdikbud.go.id/authors/profile/6657462', ''),
(2, '1498858147_ihsan.jpg', 'Ihsan Verdian, S.Kom., M.Kom., ACA', 'Dosen Program Studi Teknik Informatika', '1022038901', 'https://scholar.google.co.id/citations?hl=id&user=8juJ6PoAAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/6122615', ''),
(3, '1684749410_anton.jpg', 'Oey Anton, S.TP., M.Pd.', 'Koordinator Mata Kuliah Umum / Dosen Bahasa Inggris', '1015118206', 'https://scholar.google.co.id/citations?hl=id&user=UVajg-kAAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/6094910', 'https://www.scopus.com/authid/detail.uri?authorId=57200752897'),
(4, '1021455731_naim.jpg', 'Dr. (C) Muhammad Khaerul Naim Mursalim, S.T., M.T.', 'Dosen Program Studi Teknik Informatika', '1019058905', 'https://scholar.google.co.id/citations?hl=id&user=bBTmbWAAAAAJ', '', ''),
(5, '629939612_leny.jpg', 'Leny Pratiwi S.H., M.Hum.', 'Dosen Mata Kuliah Umum', '1014059301', 'https://scholar.google.co.id/citations?hl=id&user=-AHL_0kAAAAJ', '', ''),
(6, '1611018188_ade.jpg', 'Dr. (C) Ade Kurniawan, S.T., M.Kom., CHFI', 'Dosen Program Studi Teknik Informatika', '0827038201', 'https://scholar.google.co.id/citations?hl=id&user=d_kPtlkAAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/5991072', 'https://www.scopus.com/authid/detail.uri?authorId=57204578143'),
(7, '1250390035_raymond.jpg', 'Raymond Erz Saragih, S.Kom., S.S., M.Kom.', 'Dosen Program Studi Teknik Informatika', '1023089601', 'https://scholar.google.co.id/citations?hl=id&user=Pfvh0-0AAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/6790039', 'https://www.scopus.com/authid/detail.uri?authorId=57213594572'),
(8, '406185251_yuni.jpg', 'Yuni Roza, S.Kom., M.Kom.', 'Dosen Program Studi Teknik Informatika', '0402068704', 'https://scholar.google.co.id/citations?hl=id&user=JRepYQoAAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/6706859', ''),
(9, '1906050985_musliadi.jpg', 'Musliadi KH, S.Kom., M.Kom', 'Dosen Program Studi Teknik Informatika', '1010028902', 'https://scholar.google.co.id/citations?hl=id&user=0rWj7kwAAAAJ', 'https://sinta.kemdikbud.go.id/authors/profile/6816352', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(255) NOT NULL,
  `gambar_galeri` text NOT NULL,
  `judul_galeri` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `gambar_galeri`, `judul_galeri`) VALUES
(2, '688094667_1.jpg', 'Rumah'),
(3, '1467920501_jokowi1.jpg', 'Jokowi'),
(4, '1814509370_worldcup.jpg', 'Piala'),
(5, '406694455_mamat.jpg', 'Mamat Gunshop'),
(7, '1796646559_ganjar.jpg', 'Ganjar Pranowo'),
(8, '1435275035_anies.jpg', 'Anies Baswedan'),
(9, '1341760397_prabowo.jpg', 'Prabowo Subianto'),
(10, '497301899_mahfud.jpg', 'Prof. Dr. H. Mohammad Mahfud Mahmodin, S.H., S.U., M.I.P.,'),
(11, '866786144_wargalab.jpg', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id_home` int(100) NOT NULL,
  `gambar_home` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id_home`, `gambar_home`) VALUES
(1, '1230396783_bannertif1.jpg'),
(2, '1680563020_bannertif2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karir`
--

CREATE TABLE `tbl_karir` (
  `id_karir` int(255) NOT NULL,
  `judul_karir` varchar(999) NOT NULL,
  `gambar_karir` text NOT NULL,
  `isi_karir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_karir`
--

INSERT INTO `tbl_karir` (`id_karir`, `judul_karir`, `gambar_karir`, `isi_karir`) VALUES
(1, 'Multimedia Engineer', '806224904_multimedia-picture.png', 'Mampu mendesain dan membuat produk IT berbasis Multimedia yang mengikuti perkembangan teknologi dengan memperhatikan tatacara pengembangan perangkat lunak. '),
(2, 'IoT Developer', '1440084939_iot-picture.png', 'Mampu mendesain dan membuat perangkat keras dan sistem cerdas yang dapat dimanfaatkan untuk pengembangan kualitas hidup masyarakat dan industri.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyailmiah`
--

CREATE TABLE `tbl_karyailmiah` (
  `id_karyailmiah` int(255) NOT NULL,
  `judul_karyailmiah` text NOT NULL,
  `oleh_karyailmiah` text NOT NULL,
  `link_karyailmiah` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_karyailmiah`
--

INSERT INTO `tbl_karyailmiah` (`id_karyailmiah`, `judul_karyailmiah`, `oleh_karyailmiah`, `link_karyailmiah`) VALUES
(1, 'PERANCANGAN VOICE-BASED QUIZ RESPONSE UNTUK MATA KULIAH BAHASA INGGRIS 2 DI PRODI TEKNIK INFORMATIKA UNIVERSITAS UNIVERSAL', 'Givi Ofgivia, Oey Anton, Yonky Pernando, KH Musliadi', 'https://www.google.com'),
(3, 'ALAT PENDETEKSI KEMATANGAN BUAH BERBASIS ARDUINO', 'Roestina Aprillia, Sri Rahayu Safitri, Intan Masruroh S', 'https://spektra.unsiq.ac.id/index.php/spek/article/view/232/pdf'),
(4, 'PENGGUNAAN MULTIMEDIA UNTUK MENINGKATKAN HASIL BELAJAR PESERTA DIDIK KELAS VII D PADA MATA PELAJARAN PAI DI SMP NEGERI 1 WAY KRUI KABUPATEN PESISIR BARAT ', 'AMI SAPUTRA ', 'a'),
(5, 'PERANCANGAN DOOR AUTO ENTER UNTUK PRODI TEKNIK INFORMATIKA UNIVERSITAS UNIVERSAL ', 'lorem', 'a'),
(6, 'Analisis dan Implementasi Keamanan Jaringan pada Sistem Informasi Akademik menggunakan Metode Firewall dan IDS', 'Budi', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(255) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `gambar_pengumuman` text NOT NULL,
  `judul_pengumuman` varchar(999) NOT NULL,
  `tanggal_pengumuman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `isi_pengumuman`, `gambar_pengumuman`, `judul_pengumuman`, `tanggal_pengumuman`) VALUES
(1, '', '1187657377_Hasil Uji Kompetensi Programming F.Kom Batch 1 - TIF 2022.jpg', 'Hasil Uji Kompetensi Programming Fakultas Komputer Batch 1 - TIF', '2023-11-21'),
(2, '', '899499599_1.jpg', 'DAFTAR NAMA MAHASISWA/I SEMINAR PROPOSAL TUGAS AKHIR 2021 LULUS', '2021-08-10'),
(3, 'Sidang kerja praktek Teknik Informatika UNUSIDA Semester 2022-2023 Ganjil akan dilaksanakan pada tanggal 29 Desember 2022. Diharapkan semua mahasiswa hadir dengan dresscode sebagai berikut :\r\n 1. Baju Putih\r\n 2. Celana Hitam\r\n 3. Sepatu Hitam\r\n 4. Almamater\r\n', '1425492192_2.jpg', 'Jadwal Sidang Kerja Praktek Semester 2022-2023 Ganjil', '2023-11-15'),
(4, '', '2134625778_wargalab.jpg', 'Open Recruitment Wargalab TIF', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id_prestasi` int(255) NOT NULL,
  `isi_prestasi` text NOT NULL,
  `gambar_prestasi` text NOT NULL,
  `judul_prestasi` text NOT NULL,
  `tanggal_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id_prestasi`, `isi_prestasi`, `gambar_prestasi`, `judul_prestasi`, `tanggal_prestasi`) VALUES
(1, 'Prestasi tidak pernah tercapai dengan mudah; itu adalah hasil dari kerja keras, tekad kuat, dan kemauan untuk terus belajar dan berkembang. Beberapa individu berhasil menembus batas kemampuan diri dan mencapai puncak prestasi mereka dengan dedikasi yang luar biasa. Salah satu kisah inspiratif adalah tentang perjalanan Aria Putra, seorang atlet panjat tebing yang mengukir prestasi gemilang di tingkat nasional dan internasional.', '665746811_prestasi3.jpg', 'Meraih Puncak Prestasi: Kisah Sukses Menembus Batas Kemampuan Diri', '2023-11-14'),
(2, 'Pendidikan merupakan pondasi utama bagi perkembangan masyarakat dan pembentukan generasi penerus yang unggul. Dalam era digital dan teknologi informasi, inovasi dalam pendidikan menjadi kunci untuk memastikan bahwa siswa-siswa masa depan siap menghadapi tantangan global. Salah satu contoh sukses inovasi pendidikan adalah program \"Edukasi Digital\" di sebuah sekolah menengah di kota metropolitan.', '917443007_piala4.jpg', 'Inovasi Pendidikan: Membuka Pintu Masa Depan Melalui Teknologi Pembelajaran', '2023-11-17'),
(3, 'Seni bukan hanya sekadar kumpulan warna dan bentuk, tetapi juga ungkapan jiwa dan cerminan masyarakat. Cerita inspiratif kali ini berkisah tentang perjalanan seorang seniman muda, Maya Ardianto, yang berhasil menembus batas lokalitas dan meraih pengakuan internasional melalui karya-karyanya yang memukau.', '1080127873_prestasi2.jpg', 'Menginspirasi Melalui Seni: Perjalanan Seorang Seniman Muda Menuju Pengakuan Internasional', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terkini`
--

CREATE TABLE `tbl_terkini` (
  `id_terkini` int(255) NOT NULL,
  `isi_terkini` text NOT NULL,
  `gambar_terkini` text NOT NULL,
  `judul_terkini` varchar(999) NOT NULL,
  `tanggal_terkini` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_terkini`
--

INSERT INTO `tbl_terkini` (`id_terkini`, `isi_terkini`, `gambar_terkini`, `judul_terkini`, `tanggal_terkini`) VALUES
(1, 'Ir. H. Joko Widodo, atau yang akrab disapa Jokowi, memulai masa jabatannya sebagai Presiden Indonesia pada tanggal 20 Oktober 2014. Keberhasilannya dalam Pemilihan Umum Presiden 2014 menjadikannya presiden pertama Indonesia yang bukan berasal dari latar belakang elit politik atau militer. Sebelum memasuki dunia politik, Jokowi adalah seorang pengusaha dan Walikota Solo yang sukses.\r\n\r\nSelama kepemimpinannya, Jokowi menerapkan berbagai kebijakan untuk memajukan ekonomi dan pembangunan infrastruktur di Indonesia. Program-programnya mencakup pembangunan jalan, jembatan, dan proyek infrastruktur besar lainnya, dengan fokus pada pemberdayaan ekonomi masyarakat. Selain itu, dia aktif dalam upaya mengatasi masalah kemiskinan dan kesenjangan sosial.\r\n\r\nDalam arena internasional, Jokowi menjadi figur yang diakui dan berperan aktif dalam diplomasi regional dan global. Visinya untuk menghadirkan Indonesia sebagai kekuatan ekonomi terbesar di Asia Tenggara terus mendapat perhatian. Presiden yang dikenal dengan gaya kepemimpinan sederhana ini terus berupaya meningkatkan kesejahteraan rakyat Indonesia melalui program-program inovatif dan pembangunan berkelanjutan.      ', '1987848122_96698715_jokowi1.jpg', 'Jejak Digital Presiden Joko Widodo Dalam Memimpin Indonesia', '2023-12-30'),
(2, 'Pipa saluran air di seberang kawasan Sukajadi, Kota Batam, Provinsi Kepulauan Riau (Kepri) bocor, Senin (27/11/2023).\r\nDalam video yang viral di medsos memperlihatkan air dalam dalam kapasitas besar menyembur ke segala arah.\r\nHingga membasahi setengah badan jalan raya yang mengarah ke lampu merah Simpang Kepri Mall.\r\nKebocoran pipa air di Batam tersebut menurut petugas yang berada di lokasi, terjadi sekira pukul 09.00 WIB.\r\nAir yang mengalir dalam jumlah besar dan kecepatan tinggi menyembur dari celah sambungan pipa yang tergeser.\r\nPetugas di lapangan mengatakan, penyebab bocornya pipa ini antara lain dikarenakan bergesernya sambungan pipa yang tak mampu menahan arus air yang deras.\r\nHal ini merupakan buntut dari tereksposnya pipa akibat galian tanah di sepanjang row jalan tersebut.\r\n\"Pipa ini kan awalnya tertanam di tanah, tanah itulah yang menahan pipa supaya tidak bergeser. Nah sekarang tanahnya tidak ada. Sehingga pipa terekspos dan tak ada yang menahan getaran arus air di dalamnya,\" jelas petugas yang enggan disebutkan namanya ini.\r\nIa mengungkapkan, air yang bocor dalam jumlah banyak tersebut sebagian besar akan mengali lewat drainase kembali ke waduk Duriangkang, sehingga tidak ada yang terbuang percuma.\r\nAir tetap menjadi stok di waduk setelah melalui filtrasi.\r\nKendati demikian, dalam proses perbaikan pipa yang akan dikerjakan hari ini juga, pihak SPAM Batam akan mematikan aliran air melewati pipa tersebut.\r\nNantinya akan dikerahkan alat-alat serta material di area kebocoran pipa tersebut.\r\n\"Saat ini aliran airnya mulai dikecilkan, nanti akan mati untuk sementara waktu selama perbaikan. Diimbau bagi warga Batam Center untuk segera menampung air bersih terlebih dahulu,\" imbau petugas itu lagi.\r\nAir yang mengalir ini adalah air bersih yang menjadi konsumsi warga kawasan Batam Center sehari-hari.\r\nDengan adanya perbaikan pipa, kemungkinan besar air di rumah-rumah atau perkantoran sekitar kawasan itu akan mati untuk sementara waktu.\r\nDengan demikian, warga diimbau untuk menyiapkan stok air bersih saat ini juga, sebelum aliran air benar-benar mati.\r\nSaat berita ini ditulis, air yang bocor melewati pipa sudah mengalir tidak sederas pagi tadi.\r\nAliran air semakin kecil, sementara beberapa pekerja sudah berada di lokasi kebocoran.', '2078895252_terkini1.jpg', 'Pipa Air di Batam Depan Sukajadi Bocor', '2023-12-13'),
(3, 'Seorang remaja Palestina yang baru bebas setelah disandera Israel, Mohammed Nazza, mengaku dipukuli pasukan militer Negeri Zionis itu saat mendekam di penjara.\r\nNazza, remaja yang berasal dari Jenin, Tepi Barat, mengatakan lengan dan jarinya patah usai penjaga penjara Israel memukulinya di dalam bui pada pekan lalu. Saat ditemui di Jenin, lengan Nazza tampak dibalut dengan perban.\r\n\"Mereka [penjaga Israel] tak memberi apa pun. Lengan saya patah, saya tak bisa menggerakkan jari,\" kata Nazza kepada Al Jazeera, Selasa (28/11).\r\nSelain itu, Nazza menceritakan kondisi di penjara Negev, Israel. Ia menyebut situasi para tahanan Palestina \"buruk.\"\r\nPenjara itu, kata dia, memang terkenal memperlakukan tahanan Palestina dengan tidak manusiawi.\r\n\"Orang-orang tua tergelak di lantai, mereka menginjaknya. Saya masih muda, saya bisa menerimanya, tapi bagaimana dengan mereka?\" ujar Nazza.\r\nIbu Nazza menangis mendengar cerita sang buah hati. Saat di penjara, ibunya tak tahu apa-apa soal kondisi anak laki-lakinya itu.\r\n\"Tak ada panggilan telepon, tak ada kunjungan, tak ada apa pun,\" ucap sang ibu.\r\nDi fase kedua gencatan senjata, Hamas rencananya akan membebaskan 20 sandera, sementara Israel 60 tahanan Palestina.\r\nKesepakatan gencatan senjata ini muncul usai nyaris dua bulan Israel menggempur Palestina. Selama agresi, mereka menyerang warga dan objek sipil.\r\nImbas agresi Israel sejak 7 Oktober lalu, lebih dari 14.800 warga di Palestina tewas.\r\nSelama gencatan senjata Israel juga masih menyerang Gaza dan Tepi Barat. Padahal, di dalam kesepakatan, terdapat poin jeda pertempuran selama gencatan senjata berlangsung.', '646318905_semangka.jpg', 'Warga Palestina Bongkar Kekejaman di Bui Israel: Disiksa, Tangan Patah', '2023-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET macce COLLATE macce_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'd138768d3b5eca407f0dd579c5ca3767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `tbl_karir`
--
ALTER TABLE `tbl_karir`
  ADD PRIMARY KEY (`id_karir`);

--
-- Indexes for table `tbl_karyailmiah`
--
ALTER TABLE `tbl_karyailmiah`
  ADD PRIMARY KEY (`id_karyailmiah`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tbl_terkini`
--
ALTER TABLE `tbl_terkini`
  ADD PRIMARY KEY (`id_terkini`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id_dosen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id_home` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_karir`
--
ALTER TABLE `tbl_karir`
  MODIFY `id_karir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_karyailmiah`
--
ALTER TABLE `tbl_karyailmiah`
  MODIFY `id_karyailmiah` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  MODIFY `id_prestasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_terkini`
--
ALTER TABLE `tbl_terkini`
  MODIFY `id_terkini` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
