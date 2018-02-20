-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2016 pada 08.44
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-line`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `line_kategori`
--

CREATE TABLE IF NOT EXISTS `line_kategori` (
  `id` int(10) unsigned NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `line_kategori`
--

INSERT INTO `line_kategori` (`id`, `kategori_id`, `kategori_nama`) VALUES
(1, 1, 'private'),
(2, 2, 'blog'),
(3, 3, 'ucc'),
(4, 4, 'pengajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `line_post`
--

CREATE TABLE IF NOT EXISTS `line_post` (
  `post_id` int(10) unsigned NOT NULL,
  `post_pembuat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_poto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_tanggal` datetime NOT NULL,
  `post_judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_isi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `line_post`
--

INSERT INTO `line_post` (`post_id`, `post_pembuat`, `post_poto`, `post_tanggal`, `post_judul`, `post_slug`, `post_isi`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Condro', '', '2016-09-16 00:00:00', 'Tentang Kami', 'tentang-kami', '<p><strong>LINE Learning and Cultural Center</strong> atau <strong>LINE-LCC</strong> merupakan suatu organisasi yang bergerak di pelayanan sosial kemasyarakatan, khususnya di bidang pendidikan. Berangkat dari semangat kebangsaan, organisasi&nbsp;ini terdiri atas mahasiswa-mahasiswa yang bersinergi untuk membangun generasi muda, dalam hal ini adalah peserta didik siswa SMP/SMA sederajat, agar berbudi pekerti luhur dan berwawasan global untuk masa depan yang lebih baik. Meskipun kami sangat menyadari, diri kami sendiripun masih perlu banyak belajar mengenai budi pekerti luhur, setidaknya ada kontribusi yang dapat kami berikan kepada bangsa melalui pengajaran.</p><p>Adapun landasan yang menjadi dasar berjalannya lembaga ini adalah kami selaku mahasiswa merasa prihatin dengan kondisi bangsa dan negara yang saat ini, yang menurut kami, telah mulai meninggalkan budi pekerti luhur yang dimilikinya dulu. Sebagai salah satu jawaban dari permasalahan tersebut, kami mendirikan lembaga yang di dalamnya berupa rumah belajar, semacam bimbingan belajar, namun terdapat beberapa perbedaan. Kami mendefinisikan rumah belajar sebagai tempat dimana terdapat serangkaian kegiatan berupa bimbingan belajar &nbsp;sekolah ataupun persiapan UN/SNMPTN, makan bareng, dan berbincang-bincang bareng dengan para peserta didik. Kami juga sadar bahwa hanya belajar terus-menerus, hanya berkegiatan di dalam rumah akan membuat bosan. Oleh karenanya, kami juga mengadakan kegiatan di luar seperti futsal bareng, piknik dan jalan-jalan bareng.</p><p>Kami memilih kegiatan ini karena kami juga memiliki semangat untuk menghabiskan waktu dengan kegiatan yang bermanfaat sekaligus menyenangkan bagi kami maupun peserta didik. Selain itu, kegiatan ini tidak menghabiskan banyak biaya karena memang lembaga ini tidak berorientasikan keuntungan finansial. Untuk itu, bagi Anda siswa SMP/SMA sederajat yang ingin bergabung namun memiliki masalah finansial, jangan ragu untuk datang kepada kami. Kami berusaha sebisa mungkin tidak akan memberatkan, apalagi memaksakan, sesuatu yang tidak sesuai dengan kemampuan finansial peserta didik.</p>		 		\n<blockquote>LINE LCC Emang Mantapsss.</blockquote>', '1', NULL, NULL),
(2, 'Condro', '', '2016-09-16 00:00:00', 'Visi dan Misi', 'visi-dan-misi', '<p>Visi kami adalah</p>\r\n\r\n<blockquote>\r\n<p>Terbentuknya pribadi-pribadi yang berbudi pekerti luhur dan berkompetensi global</p>\r\n</blockquote>\r\n\r\n<p>Misi yang harus kami capai</p>\r\n\r\n<blockquote>\r\n<p>Menjadi teman belajar bagi siswa SMP/SMA sederajat dalam menggapai prestasi akademik</p>\r\n\r\n<p>Menjadi sahabat bermain bagi siswa SMP/SMA sederajat untuk mengembangkan kreativitas dan rasa ingin tahu</p>\r\n\r\n<p>Menjadi kakak yang menanamkan nilai-nilai moral kepada adik-adiknya</p>\r\n\r\n<p>Menjadi organisasi yang konsisten dalam mengembangkan&nbsp;Soft Skill</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Kami ingin menjadi pribadi-pribadi yang bermanfaat tidak hanya bagi diri sendiri dan pengembangan diri sendiri, namun juga bagi masyarakat dan lingkungan sekitar&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '1', NULL, NULL),
(3, 'Condro', '', '2016-09-17 00:00:00', 'Kontak kami', 'kontak-kami', '<h3>LINE </h3>\n<h4>Learning and Cultural Center</h4>\n<p style="color:#bdc3c7;font-size:10px">Pusat Belajar dan Kebudayaan LINE-LCC </p>\n\n<iframe width="600" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Jl.%20Sadang%20Luhur%20No.%2012%20%2CSekeloa&key=AIzaSyAedsTKK2gDCzvaGUbnkRjL8p-JrYagxdU" allowfullscreen></iframe>\n<div class="spacer"></div>\n<strong>Alamat Pusat</strong><br>\nJalan Sadang Luhur No. 12, Sekeloa, Coblong, <br/>\nBandung 40134 <br />\nTelepon : 085 795 348 055 ( Yoga ) <br>\nEmail : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a>\n<div class="spacer"></div>\n<br>\n<strong>Cabang Sadang Sari</strong><br>\nJalan Sadang Sari No.34 Sekeloa, Coblong, Kota Bandung 40134 <br/>\nTelepon : 082 360 147 534 ( Muharir ) <br>\nEmail : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a>\n<div class="spacer"></div>\n<br>\n<strong>Cabang Cigadung</strong> <br>\nJalan Konstitusi No.02 PAV Cigadung, Cibeunying Kaler, Kota Bandung  <br />\nTelepon : 085 385 433 190 ( Tama ) <br>\nEmail : <a href="mailto:line@line-lcc.com">line@line-lcc.com</a>\n<div class="spacer"></div>			\n', '1', NULL, NULL),
(4, 'Condro', '', '2016-09-17 00:00:00', 'Profil Pengajar', 'profil-pengajar', '<p>Pengajar&nbsp;Rumah Belajar LINE LCC terdiri atas beberapa mahasiswa dari berbagai jurusan di Institut Teknologi Bandung. Sebagian besar juga merupakan alumnus olimpiade, bahkan sampai sekarang masih aktif di berbagai lomba tingkat Universitas. Berikut adalah beberapa pengajar Rumah Belajar LINE LCC :</p>\n\n<ol>\n	<li>Yoga Rafinika</li>\n	<li>Titis Setyobudi</li>\n	<li>Reza Wahyu Kumara</li>\n	<li>Oki Matra ( dia gokil )</li>\n</ol>\n', '1', NULL, NULL),
(6, 'LINE', '', '2016-09-17 00:00:00', 'Rumah Belajar', 'rumah-belajar', '<p><strong>BENTUK KEGIATAN</strong></p>\r\n\r\n<p>Secara umum, bentuk kegiatan yang kami tawarkan adalah bimbingan belajar dalam bentuk problem solving atau tutorial soal-soal latihan. Namun tidak menutup kemungkinan bentuk-bentuk lain setelah dimusyawarahkan bersama, misalnya pengajaran konsep seperti di kelas-kelas lembaga pendidikan formal.</p>\r\n\r\n<p>Adapun mata pelajaran yang kami tawarkan adalah<br />\r\n1. Matematika<br />\r\n2. Fisika<br />\r\n3. Kimia<br />\r\n4. Biologi<br />\r\n5. Bahasa Inggris</p>\r\n\r\n<p><strong>PELAKSANAAN</strong></p>\r\n\r\n<p>Kegiatan bimbingan belajar ini dilakukan dengan frekuensi satu kali tiap pekan dengan masa percobaan selama dua bulan pertama untuk kemudian dievaluasi keberlanjutannya. Waktu pelaksanaan bersifat fleksibel, disesuaikan dengan jadwal kegiatan di lembaga pendidikan yang bersangkutan, peserta didik dan tenaga pendidik setelah diadakan musyawarah bersama. Tempat pelaksanaan rencananya akan dapat dilaksanakan di salah satu kelas di lembaga pendidikan yang bersangkutan yang telah diizinkan ataupun tempat-tempat lain yang telah disetujui secara bersama antara peserta didik dengan tenaga pendidik.&nbsp;Untuk setiap pertemuan, waktu yang dialokasikan adalah 1,5 jam &ndash; 2 jam sesuai dengan kebutuhan.</p>\r\n\r\n<p><strong>PROFIL PENGAJAR</strong><br />\r\nKami mempunyai beberapa tenaga pengajar yang cukup handal di bidangnya, silakan klik <a href="/profil-pengajar">disini</a> untuk melihat beberapa profil dari pengajar di Rumah Belajar LINE-LC</p>\r\n\r\n<p><strong>BIAYA</strong></p>\r\n\r\n<p>Mengingat kegiatan ini adalah kegiatan sosial, kami tidak menarik biaya apapun untuk kegiatan yang dilaksanakan</p>\r\n', '1', NULL, NULL),
(7, 'LINE', '', '2016-09-17 00:00:00', 'Tutorial ITB', 'tutorial-itb', '<p><strong>BENTUK KEGIATAN</strong></p>\n\n<p>Bentuk kegiatan yang kami tawarkan adalah bimbingan belajar dalam bentuk problem solving atau tutorial soal-soal latihan terutama dalam menghadapi ujian&nbsp;dengan sasaran mahasiswa, terutama mahasiswa tingkat TPB ( Tahap Persiapan Bersama ) Institut Teknologi Bandung</p>\n\n<p>Adapun mata kuliah yang kami tawarkan adalah<br />\n1. Matematika Dasar<br />\n2. Fisika Dasar<br />\n3. Kimia Dasar<br />\n4. dan mata kuliah lain, sesuai kebutuhan</p>\n\n<p><strong>PELAKSANAAN</strong></p>\n\n<p>Kegiatan bimbingan belajar ini dilakukan dengan frekuensi satu kali tiap pekan dengan masa percobaan selama dua bulan pertama untuk kemudian dievaluasi keberlanjutannya. Waktu pelaksanaan bersifat fleksibel, disesuaikan dengan jadwal kegiatan di lembaga pendidikan yang bersangkutan, peserta didik dan tenaga pendidik setelah diadakan musyawarah bersama. Tempat pelaksanaan rencananya akan dapat dilaksanakan di salah satu kelas di lembaga pendidikan yang bersangkutan yang telah diizinkan ataupun tempat-tempat lain yang telah disetujui secara bersama antara peserta didik dengan tenaga pendidik.&nbsp;Untuk setiap pertemuan, waktu yang dialokasikan adalah 1,5 jam &ndash; 2 jam sesuai dengan kebutuhan.</p>\n\n<p><strong>PROFIL PENGAJAR</strong><br />\nKami mempunyai beberapa tenaga pengajar yang cukup handal di bidangnya, silakan klik&nbsp;<a href="http://localhost/profil-pengajar">disini</a>&nbsp;untuk melihat beberapa profil dari pengajar di Rumah Belajar LINE-LC</p>\n\n<p><strong>BIAYA</strong></p>\n\n<p>Mengingat kegiatan ini adalah kegiatan sosial, kami tidak menarik biaya apapun untuk kegiatan yang dilaksanakan</p>\n', '1', NULL, NULL),
(8, 'LINE', '', '2016-09-17 00:00:00', 'Persiapan Ujian', 'persiapan-ujian', '<p><strong>BENTUK KEGIATAN</strong></p>\n\n<p>Rumah Belajar LINE - LCC juga menawarkan program persiapan Ujian Nasional dan SBMPTN untuk siswa siswa SMP dan SMA.</p>\n\n<p>Adapun mata kuliah yang kami tawarkan adalah semua mata pelajaran yang berkaitan dengan Ujian Nasional dan SBMPTN<br />\n&nbsp;</p>\n\n<p><strong>PELAKSANAAN</strong></p>\n\n<p>Kegiatan Belajar dilakukan secara intensif selama beberapa bulan sebelum ujian. Lama waktu belajar dapat menyesuaikan.&nbsp;</p>\n\n<p><strong>FASILITAS</strong></p>\n\n<p>Kami menawarkan program persiapan dengan beberapa fasilitas yang mununjang, seperti :<br />\n1. Tempat menginap dan segala jenis akomodasi rumah lainnya<br />\n2. 24 jam tatap muka dengan beberapa mahasiswa untuk berbagi pengalaman<br />\n3. Kegiatan kerohanian<br />\n4. Kegiatan Refreshing seperti, makan besar, jalan - jalan, futsal, dll</p>\n\n<p><strong>PROFIL PENGAJAR</strong></p>\n\n<p>Kami mempunyai beberapa tenaga pengajar yang cukup handal di bidangnya, silakan klik&nbsp;<a href="http://localhost/profil-pengajar">disini</a>&nbsp;untuk melihat beberapa profil dari pengajar di Rumah Belajar LINE-LC</p>\n\n<p><strong>BIAYA</strong></p>\n\n<p>Kegitan Persiapan Ujian ini tidak dipungut biaya. Namun, untuk keperluan menginap&nbsp;dan akomodasi rumah akan dikenakan biaya.&nbsp;</p>\n', '1', NULL, NULL),
(9, 'LINE', '', '2016-09-17 00:00:00', 'Kegiatan Kemasyarakatan', 'kegiatan-kemasyarakatan', '<p><strong>BENTUK KEGIATAN</strong></p>\r\n\r\n<p>LINE - LCC juga melakukan beberapa kegiatan yang bersifat kemasyarakatan untuk membantu sesama dan menjadi duta kebudayaan bagi perdamaian dunia.</p>\r\n\r\n<p><strong>KEGIATAN</strong></p>\r\n\r\n<p>1. Tryout SBMPTN<br />\r\n2. Lomba Sains, Kosmik<br />\r\n3. Kunjungan ke Panti Asuhan<br />\r\n4. Buka Puasa atau&nbsp;Iftar Bersama<br />\r\n5. Qurban Fest</p>\r\n', '1', NULL, NULL),
(10, 'LINE', '', '2016-09-17 00:00:00', 'Kegiatan Rohani', 'kegiatan-rohani', '<p><strong>BENTUK KEGIATAN</strong></p>\r\n\r\n<p>LINE - LCC juga menawarkan kegiatan yang bersifat kerohanian, seperti memakmurkan masjid.</p>\r\n\r\n<p><strong>KEGIATAN</strong></p>\r\n\r\n<p>1. Memakmurkan Masjid<br />\r\n2. Melakukan kegitan TPA bersama dengan DKM masjid<br />\r\n&nbsp;</p>\r\n', '1', NULL, NULL),
(11, 'LINE', '11-103604.jpg', '2016-09-10 19:00:00', 'Iftar Arafah', 'iftar-arafah', '<p>BANDUNG -- Pada hari Minggu 11 September 2016 Rumah LINE-LCC menggelar acara Iftar Arafah dalam rangkaian Qurban Fest 2016. Iftar Arafah adalah kegiatan buka bersama puasa Arafah, yaitu puasa sebelum Hari Raya Idul Adha. Acara ini dihadiri oleh anggota LINE-LCC juga beberapa tamu undangan dan teman teman dari kampus ITB dan Unpad.</p>\n\n<p>Acara dimulai dengan pembagian takjil dan kolak. Kemudian dilanjutkan dengan Shalat Magrib berjamaah. Kemudian acara initi pun tiba yaitu buka bersama. Menu pada malam itu adalah Maklube, yaitu makanan tradisonal dari Timur Tengah. Berisi nasi, daging, kentang, bawang bombai, wortel, serta dilumuri yogurt.</p>\n\n<p>Setelah acara makan - makan selesai, akhirnya peserta dapat beramah tamah dengan peserta lain dan menikmati sisa hidangan Iftar Arafah</p>\n\n<p>Semoga, acara seperti ini dapat menghangatkan persaudaraan di antara teman - teman semua, setelah jenuh beraktivitas di kampus.&nbsp;</p>\n', '2', NULL, NULL),
(12, 'UCC', '', '2016-09-17 00:00:00', 'Belajar Bahasa dan Budaya Turki', 'belajar-bahasa-dan-budaya-turki', '<p>BANDUNG--Bertepatan dengan acara Qurban Fest 2016, UCC salah satu organiasi dibwah LINE - LCC bekerja sama dengan Masjid Salman ITB, dan Rumah Amal Salman ITB, membuka pendaftaran untuk Kelas Belajar Bahasa dan Kebudayaan Turki.</p>\r\n\r\n<p>Merhaba Arkadaşlar!!!!&nbsp;</p>\r\n\r\n<p>Universal Cultural Center present :</p>\r\n\r\n<p>KLUB BELAJAR BAHASA &amp; BUDAYA TURKI&nbsp;</p>\r\n\r\n<p>Mengapa harus TURKI ??</p>\r\n\r\n<p>~ Turki erat dengan perkembangan peradaban Islam<br />\r\n~ kaya akan Kulinernya<br />\r\n~ Bahasa Turki dan turunannya merupakan bahasa nasional di berbagai negara Asia Tengah<br />\r\n~ Bagi umat muslim, Literatur Islam (misal sejarah Kekhalifahan Utsmani) banyak dikaji dalam bahasa Turki<br />\r\n~ Turki adalah jembatan penghubung budaya timur tengah dan eropa<br />\r\n~ Turki salah satu destinasi pariwisata di dunia.</p>\r\n\r\n<p>Kegiatannya apa saja??</p>\r\n\r\n<p>~ Belajar bahasa,<br />\r\n~ Kuliner,<br />\r\n~ Pengenalan Kultur-Budaya,<br />\r\n~ Aktifitas Luar Kelas, dan lain-lain.</p>\r\n\r\n<p>Ayuuk gabungg ^^&nbsp;</p>\r\n\r\n<p>Lokasi Belajar :<br />\r\nKompleks Masjid Salman ITB<br />\r\nJalan Ganesha No.7<br />\r\nPelaksanaan Kursus :<br />\r\nSetiap akhir pekan<br />\r\nPukul 16.30-17.30 WIB<br />\r\nTerbuka untuk Umum</p>\r\n\r\n<p>Biaya pendaftaran Rp. 10.000<br />\r\n+ 60.000 (modul + pengajaran bahasa selama 1 tahun)<br />\r\nTEMPAT TERBATAS...</p>\r\n\r\n<p>PENDAFTARAN :<br />\r\nKetik : Nama_Putra/Putri_no hp_Belajar Turki<br />\r\nkirim ke 085297005077 (Rizaldi)</p>\r\n\r\n<p>Nb : kelas putra dan putri terpisah</p>\r\n\r\n<p>INFO LEBIH LANJUT :<br />\r\nWeb : line-lcc.com/ucc&nbsp;<br />\r\nFb : fb.com/page.linelcc<br />\r\nHp : 085297005077 (Rizaldi)</p>\r\n', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `line_user`
--

CREATE TABLE IF NOT EXISTS `line_user` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_15_235718_line_user', 1),
('2016_09_16_000908_line_post', 2),
('2016_09_17_052128_line_kategori', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `line_kategori`
--
ALTER TABLE `line_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line_post`
--
ALTER TABLE `line_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `line_user`
--
ALTER TABLE `line_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `line_kategori`
--
ALTER TABLE `line_kategori`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `line_post`
--
ALTER TABLE `line_post`
  MODIFY `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `line_user`
--
ALTER TABLE `line_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
