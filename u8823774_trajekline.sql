-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Apr 2020 pada 12.38
-- Versi server: 10.2.31-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8823774_trajekline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request`
--

CREATE TABLE `data_request` (
  `id_request` int(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kota_tujuan` varchar(255) NOT NULL,
  `jumlah_orang` varchar(100) NOT NULL,
  `lama_hari` varchar(100) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tujuan_wisata` text NOT NULL,
  `tiket` varchar(255) NOT NULL,
  `penginapan` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_request`
--

INSERT INTO `data_request` (`id_request`, `nama_lengkap`, `email`, `kota_tujuan`, `jumlah_orang`, `lama_hari`, `tgl_berangkat`, `tujuan_wisata`, `tiket`, `penginapan`, `fasilitas`, `status`) VALUES
(23, 'Badar', 'mbadarp@gmail.com  ', 'Jember', '8 Orang', '4 HARI 3 MALAM', '0000-00-00', '', 'YA', 'Tanpa Penginapan', 'Eksekutif', 'Deal_Paket'),
(24, 'Garox', 'zakytahu@yahoo.com  ', 'Jember', '2 Orang', '4 HARI 3 MALAM', '0000-00-00', '', 'YA', 'Home Stay', 'Bisnis', 'Telah_tour'),
(25, 't', 'mailfor.taufiq@gmail.com  ', 'r', '4 Orang', '2 HARI 1 MALAM', '2020-02-27', 'bandung', 'YA', 'Bintang 3', 'Bisnis', 'Menunggu'),
(26, 'Ella Wahyuningtyas', 'ellawf42@gmail.com  ', 'Probolinggo', '2 Orang', '3 HARI 2 MALAM', '2020-02-08', 'Bromo', 'YA', 'Bintang 5', 'Eksekutif', 'Menunggu'),
(27, 'Badar', 'mitsuha02@mailr24.com  ', 'Bali', '2 Orang', '3 HARI 2 MALAM', '2020-02-07', 'Rumah Krisna', 'YA', 'Home Stay', 'Bisnis', 'Menunggu'),
(28, 'Badar', 'mitsuha02@mailr24.com  ', 'Bali', '2 Orang', '3 HARI 2 MALAM', '2020-02-07', 'Rumah Krisna', 'YA', 'Home Stay', 'Bisnis', 'Menunggu'),
(29, 'Sari rh', 'sariirkh@gmail.com  ', 'Jember', '6 Orang', '6 HARI 5 MALAM', '2020-02-20', 'Kuburan', 'YA', 'Bintang 5', 'Eksekutif', 'Menunggu'),
(30, 'Riya', 'komariahbe770@gmail.com  ', 'Jember', '2 Orang', '1 HARI', '2020-02-10', 'Kawah ijen', 'TIDAK', 'Tanpa Penginapan', 'Ekonomi', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_detail` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `foto_paket` varchar(255) NOT NULL,
  `jadwal_kegiatan` text NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `nama_admin`, `user_admin`, `password`, `email`, `level`) VALUES
(3, 'Mohammad', 'badarp', '1', 'mbadarp@gmail.com', 'admin'),
(6, 'Mohammad Badar', 'badarpamungkas', '1', 'mbadarp@gmail.com', 'admin'),
(9, 'admin', 'admin', 'admin123', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `id` int(10) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipe_identitas` varchar(20) NOT NULL,
  `no_identitas` varchar(30) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `nama_rek` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`id`, `nama_depan`, `nama_belakang`, `email`, `tipe_identitas`, `no_identitas`, `no_telepon`, `no_rek`, `nama_rek`, `alamat`, `username`, `password`, `level`) VALUES
(2, 'sugeng', 'hariono', 'sugeng@gmail.com', 'KTP', '3500332323823823', '081223445667', '398717180938093810', 'Sugeng', 'Jalan ahay', 'sugeng', '1', 'customer'),
(12, 'MBadar', 'Pamugkas', 'mbadarp@gmail.com', 'KTP', '3500332323823811', '081222333444', '398717180938093111', 'Pamungkas', 'Jl.letjen Suprapto V', 'radabp', '1', 'customer'),
(15, 'Ricardo', 'Milos', 'milos@gmail.com', 'SIM', '3500332323823821', '081223445667', '398717180938093999', 'milos', 'Jl.letjen Lumba- Lumba', 'milos', '1', 'customer'),
(21, 'customer', 'a', 'customer', '', '', '08999299292', '', '', 'Jl.letjen Suprapto V', 'customer', 'customer123', 'customer'),
(22, 'Sari', 'Rh', 'sariirkh@gmail.com', '', '', '085236385946', '', '', 'jember', 'sariirkh', '12345', 'customer'),
(23, 'Riya', '1', 'komariahbe770@gmail.com', '', '', '12345679', '', '', 'Bws', 'Riya', '123', 'customer'),
(24, 'hermawan', 'arief', 'hermawan_arief@polije.ac.id', '', '', '081224442224', '', '', 'kaliurang', 'hermawan', '1234', 'customer'),
(25, 'TRAJEK', 'LINE', 'TRAJEKLINE@YAHOO.COM', '', '', '0897326753534', '', '', 'SURABAYA', 'surabaya', 'surabaya', 'customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_tour`
--

CREATE TABLE `paket_tour` (
  `id_paket` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_tour`
--

INSERT INTO `paket_tour` (`id_paket`, `id_transaksi`, `nama_paket`, `nama_wisata`, `harga`, `fasilitas`, `deskripsi`, `kategori`, `foto`) VALUES
(27, 0, 'Tour Payangan Pagi', 'Pantai Payangan', 200000, '-Snack 1x -Tour Guide -Makan 1x ', 'Pantai Payangan terletak di Dusun Payangan, Desa Sumberrejo, Kecamatan Ambulu. Jarak pantai ini dari Kota Jember adalah sekitar 32 kilometer dengan waktu tempuh kurang-lebih satu jam perjalanan.  Rute tercepat menuju Pantai Payangan dari Jember yang pertama adalah melalui Jalan Nasional III Jember-Lumajang. Setelah sampai perempatan Pasar Mangli, perjalanan berlanjut ke arah selatan memasuki Jalan Otto Iskandar Dinata.     Dari perempatan Pasar Mangli, terus mengikuti jalan utama ke arah selatan sejauh sekitar 30 kilometer. Nantinya akan dijumpai plang petunjuk jalan untuk sampai Pantai Payangan sehingga cukup ikuti jalan yang ditunjukkan oleh plang itu.  Pesona Payangan bagai Khayangan  Area Pantai Payangan ini begitu luas. Terdapat tiga bagian pantai yang bisa dikunjungi. Bagian pertama adalah kawasan pantai nelayan yang menghadap ke arah barat daya. Bagian selanjutnya berupa pantai dengan batu karang yang dipisahkan oleh sebuah bukit.  Bagian terluas ada di sisi utara pantai dengan batu karang yang kembali dipisahkan oleh bukit kecil. Pantai ini memanjang ke arah utara kemudian berbelok ke arah barat. Jika berjalan menyusurinya, maka nantinya akan sampai di Pantai Watu Ulo.', 'pantai', '617-payangan.jpg'),
(29, 0, 'Tour Malang 3', 'Jatim Park 3', 400000, '-Snack 2x -Tour Guide -Makan 1x ', 'dfdfd', 'tamanbermain', '579-jtp3.jpg'),
(30, 0, 'Tour Jember', 'Gunung Gambir', 200000, '-Snack 1x -Tour Guide -Makan 1x ', 'qqq', 'gunung', '542-gambir.jpg'),
(31, 0, 'Tour Kawah Ijen', 'Kawah Ijen', 200000, '-Snack 1x -Tour Guide -Makan 1x ', 'Gunung Ijen adalah sebuah gunung berapi yang terletak di perbatasan antara Kabupaten Banyuwangi dan Kabupaten Bondowoso, Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.386 mdpl dan terletak berdampingan dengan Gunung Marapi. Gunung Ijen terakhir meletus pada tahun 1999. Salah satu fenomena alam yang paling terkenal dari Gunung Ijen adalah blue fire di dalam kawah yang terletak di puncaknya. Pendakian gunung ini bisa dimulai dari dua tempat. Pendaki bisa berangkat dari Banyuwangi ataupun dari Bondowoso.', 'gunung', '352-ijen.jpg'),
(33, 0, 'Tour Papuma', 'Pantai Papuma, Jember', 150000, '-Snack 1x -Tour Guide -Makan 1x ', 'Lorem ipsum dolor sit amet, conlit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.', 'pantai', '959-papuma.jpg'),
(34, 0, 'Tour Kawah Ijen 2', 'Kawah Ijen', 500000, '-Snack 2x -Tour Guide -Makan 1x ', 'sdsd', 'gunung', '639-ijen.jpg'),
(35, 0, 'Tour Payangan 2', 'Pantai Payangan', 200000, '-Snack 1x -Tour Guide -Makan 1x ', 'sdsd', 'pantai', '376-payangan.jpg'),
(37, 0, 'Tour Prambanan', 'Candi Prambanan', 500000, '-Snack 2x -Tour Guide -Makan 3x ', 'Candi Prambanan terletak di lingkungan Taman Wisata Prambanan, kurang lebih 17 km ke arah timur dari Yogyakarta, tepatnya di Desa Prambanan Kecamatan Bokoharjo. Lokasinya hanya sekitar 100 m dari jalan raya Yogya-Solo, sehingga tidak sulit untuk menemukannya. Sebagian dari kawasan wisata yang yang terletak pada ketinggian 154 m di atas permukaan laut ini termasuk dalam wilayah Kabupaten Sleman. sedangkan sebagian lagi masuk dalam wilayah Klaten.  Candi Prambanan merupakan candi Hindu yang terbesar di Indonesia. Sampai saat ini belum dapat dipastikan kapan candi ini dibangun dan atas perintah siapa, namun kuat dugaan bahwa Candi Prambanan dibangun sekitar pertengahan abad ke-9 oleh raja dari Wangsa Sanjaya, yaitu Raja Balitung Maha Sambu. Dugaan tersebut didasarkan pada isi Prasasti Syiwagrha yang ditemukan di sekitar Prambanan dan saat ini tersimpan di Museum Nasional di Jakarta. Prasasti berangka tahun 778 Saka (856 M) ini ditulis pada masa pemerintahan Rakai Pikatan.  Pemugaran Candi Prambanan memakan waktu yang sangat panjang, seakan tak pernah selesai. Penemuan kembali reruntuhan bangunan yang terbesar, yaitu Candi Syiwa, dilaporkan oleh C.A. Lons pada tahun 1733. Upaya penggalian dan pencatatan pertama dilaksanakan di bawah pengawasan Groneman. Penggalian diselesaikan pada tahun 1885, meliputi pembersihan semak belukar dan pengelompokan batu-batu reruntuhan candi.', 'wisatapendidikan', '503-prambanan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_bantuan`
--

CREATE TABLE `setup_bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `kat_bantuan` varchar(30) NOT NULL,
  `judul_bantuan` varchar(50) NOT NULL,
  `konten_bantuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setup_bantuan`
--

INSERT INTO `setup_bantuan` (`id_bantuan`, `kat_bantuan`, `judul_bantuan`, `konten_bantuan`) VALUES
(6, 'profil', 'Profil Trajekline', 'Sumatera Barat adalah salah satu provinsi di Indonesia yang terletak di pulau Sumatera dengan Padang sebagai ibu kotanya. Sesuai dengan namanya, wilayah provinsi ini menempati sepanjang pesisir barat Sumatera bagian tengah dan sejumlah pulau di lepas pantainya seperti Kepulauan Mentawai. Dari utara ke selatan, provinsi dengan wilayah seluas 42.297,30 kmÂ² ini berbatasan dengan empat provinsi, yakni Sumatera Utara, Riau, Jambi, dan Bengkulu.\r\n\r\nSumatera Barat berpenduduk sebanyak 4.846.909 jiwa dengan mayoritas beretnis Minangkabau yang seluruhnya beragama Islam. Provinsi ini terdiri dari 12 kabupaten dan 7 kota dengan pembagian wilayah administratif sesudah kecamatan di seluruh kabupaten (kecuali kabupaten Kepulauan Mentawai) dinamakan sebagai nagari.\r\n\r\n'),
(12, 'syarat', 'Bantuan', '<p><br />Syarat dan Ketentuan ini berguna untuk membantu anda dalam melakukan pembookingan sesuai dengan ketentuan-ketentuan yang telah kami buat. Sehingga anda nantinya tidak merasa rugi dan salah dalam memilih paket ataupun penginapan nantinya. Seilahkan cermati ketentuan-ketentuan yang telah dibuat dan lanjutkan dengan melakukan pembookingan.</p>'),
(13, 'syarat', 'Ketentuan Pembookingan', '<ul>\r\n<li>Perubahan Peket dan Penginapan silahkan hubungi contact person kami yang ada pada website, dan hanya bisa dilakukan 5 hari sebelum hari keberangkatan tour. Kurang dari itu perubahan tidak bisa dilakukan.</li>\r\n<li>Pembatalan booking dapat dilakukan 7 hari sebelum tanggal keberangkatan tour yang telah di booking. Biaya yang telah ditranfer akan dikembalikan dengan potongan 10% dari total biaya dan harus melakukan konfirmasi terlebih dahulu melalui contact person kami.</li>\r\n<li>Untuk biaya penginapan yang masih belum terbilang pada saat melakukan pembookingan, akan kami konfirmasikan ke Akun anda 7 hari sebelum hari keberangkatan tour. Dan dapat melakukan cetak tiket setelah hari itu.</li>\r\n</ul>'),
(14, 'pembayaran', 'Cara Pembayaran', '<p>Caraa pembayaran ada 2 alternatif yang bisa dipilih. Pertama anda bisa melakukan pembayaran langsung ke kantor kami atau dengan cara kedua bisa melakukan transfer melalui nomor rekening kami yang tersedia. Dengan ketentuan sebagai berikut :</p>\r\n<ol>\r\n<li>Pembayaran Langsung\r\n<ul>\r\n<li>Pembayaran langung dikhususkan untuk pelanggan yang berada dekat dengan kantor kami.</li>\r\n<li>Pembayaran dilakukan 5 hari sebelum keberangkatan.</li>\r\n<li>Syarat pembayaran harus melampirkan Invoice dan Tiket yang telah di booking.</li>\r\n<li>Pembayaran akan dilayani di jam kerja.</li>\r\n</ul>\r\n</li>\r\n<li>Pembayaran via Transfer\r\n<ul>\r\n<li>Pembayaran ini dimaksudkan untuk pelanggan yang dari luar kota maunpun yang menginginkan proses praktis.</li>\r\n<li>Pembayaran selambat-lambatnya harus telah diterima oleh kami 5 hari sebelum hari keberangkatan tour.</li>\r\n<li>Transfer dapat dilakukan ke nomor rekening berikut :\r\n<ul>\r\n<li>BCA : 3120618040&nbsp;a/n Nini Gumaneri</li>\r\n<li>Mandiri : 1110005416478 a/n&nbsp;Nini Gumaneri</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukti`
--

CREATE TABLE `tbl_bukti` (
  `id_bukti` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bukti`
--

INSERT INTO `tbl_bukti` (`id_bukti`, `id_pesan`, `file`) VALUES
(1, 12, 'decan.jpeg'),
(5, 17, 'download (9).jpg'),
(6, 33, 'download (9).jpg'),
(7, 34, 'download (9).jpg'),
(8, 35, 'download (9).jpg'),
(9, 35, 'download (9).jpg'),
(10, 37, 'BAB I1.docx'),
(11, 0, 'download (9).jpg'),
(12, 0, 'download (9).jpg'),
(13, 0, 'download (9).jpg'),
(14, 0, '609-download (9).jpg'),
(15, 39, 'download (9).jpg'),
(16, 45, 'senyum media.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_tour` date NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'S1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `id`, `id_paket`, `tgl_pesan`, `tgl_tour`, `status`) VALUES
(16, 0, 27, '2020-01-13', '2020-01-23', 'S4'),
(17, 0, 27, '2020-01-13', '2020-01-23', 'S4'),
(18, 0, 27, '2020-01-13', '2020-01-23', 'S4'),
(20, 0, 27, '2020-01-13', '2020-01-23', 'S2'),
(21, 0, 27, '2020-01-24', '0000-00-00', 'S1'),
(22, 0, 36, '2020-01-24', '0000-00-00', 'S4'),
(23, 0, 36, '2020-01-31', '0000-00-00', 'S2'),
(24, 0, 29, '2020-02-03', '0000-00-00', 'S2'),
(25, 0, 30, '2020-01-31', '0000-00-00', 'S4'),
(26, 0, 30, '2020-02-08', '0000-00-00', 'S2'),
(27, 0, 29, '2020-02-03', '0000-00-00', 'S4'),
(28, 0, 27, '0000-00-00', '0000-00-00', 'S4'),
(29, 0, 27, '0000-00-00', '0000-00-00', 'S4'),
(30, 0, 27, '0000-00-00', '0000-00-00', 'S4'),
(31, 0, 27, '2020-02-03', '2020-02-13', 'S1'),
(32, 0, 27, '2020-02-03', '0000-00-00', 'S3'),
(33, 0, 27, '2020-02-03', '0000-00-00', 'S2'),
(34, 0, 34, '2020-02-03', '2020-02-21', 'S2'),
(35, 0, 30, '2020-02-03', '2020-02-29', 'S2'),
(36, 0, 35, '2020-02-03', '2020-02-20', 'S2'),
(37, 0, 30, '2020-02-03', '2020-02-18', 'S4'),
(38, 0, 30, '2020-02-03', '2020-02-18', 'S4'),
(39, 0, 35, '2020-02-03', '2020-02-20', 'S3'),
(40, 0, 36, '2020-02-03', '2020-02-28', 'S2'),
(41, 2, 29, '2020-02-04', '2020-02-22', 'S4'),
(42, 2, 29, '2020-02-04', '2020-02-21', 'S3'),
(43, 2, 29, '2020-02-04', '2020-02-21', 'S1'),
(44, 22, 30, '2020-02-20', '2020-02-29', 'S1'),
(45, 24, 35, '2020-02-05', '2020-02-08', 'S2'),
(46, 25, 29, '2020-02-04', '2020-02-13', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `saran_masukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_saran`, `nama`, `email`, `subjek`, `saran_masukan`) VALUES
(3, 'Mohammad Badar Pamungkas', 'mbadarp@gmail.com  ', 'Pesan Paket ', 'pemesanan masih kurang mudah bagi kami untuk melakukan booking paket tour'),
(6, 'Ekky Aulia', 'sugeng@gmail.com  ', 'Respon', 'harga paket murah pelayanan baik'),
(12, 'yahya aji', 'mbadarp@gmail.com    ', 'Pesan Paket ', 'pemesanan masih kurang mudah bagi kami untuk melakukan booking paket tour');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_request`
--
ALTER TABLE `data_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indeks untuk tabel `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `setup_bantuan`
--
ALTER TABLE `setup_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_request`
--
ALTER TABLE `data_request`
  MODIFY `id_request` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `detail_paket`
--
ALTER TABLE `detail_paket`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `paket_tour`
--
ALTER TABLE `paket_tour`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `setup_bantuan`
--
ALTER TABLE `setup_bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
