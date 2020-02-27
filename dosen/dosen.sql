-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2018 pada 07.17
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dsn`
--

CREATE TABLE `dsn` (
  `NIP` bigint(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dsn`
--

INSERT INTO `dsn` (`NIP`, `Nama`, `Password`) VALUES
(6400201619267, 'Kartika Candra Kirana', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `No` int(11) NOT NULL,
  `Judul` char(50) NOT NULL,
  `Isi` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`No`, `Judul`, `Isi`, `Tanggal`) VALUES
(1, 'UAS', 'UAS berlangsung dari tanggal 3-7 Desember 2018 ', '2018-11-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `bab` varchar(30) NOT NULL,
  `urutan_bab` int(5) DEFAULT NULL,
  `sub_materi` varchar(100) NOT NULL,
  `urutan_sub` int(5) DEFAULT NULL,
  `uraian` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`bab`, `urutan_bab`, `sub_materi`, `urutan_sub`, `uraian`) VALUES
('Enkapsulasi', 1, 'Keuntungan Menerapkan Enkapsulasi', 3, '<p class=\"body_textarea\" align=\"justify\">\r\nSuatu modul yang terenkapsulasi dengan baik akan bersifat independen, sehingga tidak akan terikat pada bagian\r\ntertentu dari program. Bila melakukan modifikasi pada\r\nsuatu modul, maka perubahan tersebut akan dirasakan juga\r\noleh bagian program yang menggunakan modul tersebut.\r\nModul yang terenkapsulasi dengan baik hanya akan\r\nberinteraksi dengan bagian program lainnya melalui\r\nvariabel-variabel input atau output yang telah\r\ndidefinisikan sebelumnya. Saat program didistribusikan\r\npada khalayak, Anda dapat menerapkan prinsip enkapsulasi\r\nuntuk melindungi listing program. Di sini pengguna hanya\r\ndapat menggunakan program melalui variabel input atau\r\noutput yang didefinisikan tanpa disertai bagimana\r\nproses yang terjadi di dalam modul tersebut.</p>'),
('Enkapsulasi', 1, 'Manfaat Enkapsulasi', 6, '<p class=\"body_textarea\">Enkapsulasi memiliki manfaat sebagai berikut:</p>\r\n<p class=\"body_textarea\">1. Modularitas</p>\r\n<p class=\"body_textarea\" align=\"justify\">Source code dari sebuah class dapat dikelola secara independen dari source code class yang lain. Perubahan internal pada sebuah class tidak akan berpengaruh bagi class yang menggunakannya.</p>\r\n<p class=\"body_textarea\">2. Information Hiding</p>\r\n<p class=\"body_textarea\" align=\"justify\">Penyembunyian informasi yang tidak perlu diketahui objek lain.</p>'),
('Enkapsulasi', 1, 'Pengertian Enkapsulasi', 1, '<p class=\"body_textarea\" align=\"justify\">Enkapsulasi merupakan suatu cara pembungkusan data dan method yang menyusun suatu kelas sehingga kelas dapat dipandang sebagai suatu modul dan cara bagaimana menyembunyikan informasi detail dari suatu class (information hiding). Dalam OOP, enkapsulasi sangat penting untuk keamanan serta menghindari kesalahan pemrograman, enkapsulasi dimaksudkan untuk menjaga suatu proses program agar tidak dapat diakses secara sembarangan atau di intervensi oleh program lain. Konsep enkapsulasi sangat penting dilakukan untuk menjaga kebutuhan program agar dapat diakses sewaktu-waktu, sekaligus menjaga program tersebut.</p>\r\n<p class=\"body_textarea\">Dua hal yang mendasar dalam enkapsulasi yakni:</p>\r\n<p class=\"body_textarea\">1. Information hiding</p> \r\n<p class=\"body_textarea\" align=\"justify\">Sebelumnya untuk pengaksesan atribut atau method menggunakan objek secara langsung. Hal ini karena akses kontrol yang diberikan pada atribut dan method di dalam kelas tersebut adalah public. Untuk menyembunyikan informasi dari suatu kelas sehingga anggota kelas tersebut tidak dapat diakses kelas lain yaitu dengan memberi hak akses private pada atributnya. Proses ini disebut dengan information hiding.</p>\r\n<p class=\"body_textarea\">2. Interface to access data</p>\r\n<p class=\"body_textarea\" align=\"justify\">Interface to access data merupakan cara melakukan perubahan terhadap atribut yang disembunyikan, caranya adalah dengan membuat suatu interface berupa method untuk menginisialisasi atau merubah nilai dari suatu atribut tersebut. Manfaat utama teknik encapsulation adalah kita mampu memodifikasi kode tanpa merusak kode yang telah digunakan pada class lain.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `No` int(11) NOT NULL,
  `Nama` char(100) NOT NULL,
  `angkatan` bigint(20) NOT NULL,
  `offering` char(2) NOT NULL,
  `PG1` int(11) NOT NULL,
  `SK1` int(11) NOT NULL,
  `PG2` int(11) NOT NULL,
  `SK2` int(11) NOT NULL,
  `PG3` int(11) NOT NULL,
  `SK3` int(11) NOT NULL,
  `PG4` int(11) NOT NULL,
  `SK4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`No`, `Nama`, `angkatan`, `offering`, `PG1`, `SK1`, `PG2`, `SK2`, `PG3`, `SK3`, `PG4`, `SK4`) VALUES
(1, 'Septi Retno Desi', 2017, 'D', 60, 80, 40, 70, 80, 50, 0, 100),
(2, 'Novita Tri Indrasari', 2017, 'D', 100, 100, 80, 50, 60, 100, 80, 80),
(3, 'Syahaffath Assegaf', 2017, 'D', 80, 100, 60, 50, 100, 40, 80, 100),
(4, 'Ridhotul Ulfah', 2017, 'D', 60, 100, 40, 80, 100, 60, 100, 100),
(5, 'Yosafat Andy', 2017, 'D', 100, 80, 40, 80, 80, 80, 80, 100),
(6, 'Feliks Victor', 2016, 'E', 80, 80, 80, 70, 60, 70, 100, 100),
(7, 'Melinda Dwi', 2016, 'E', 100, 70, 80, 80, 100, 60, 80, 70),
(8, 'Sandya Yuda Pratama', 2016, 'E', 60, 100, 80, 70, 100, 100, 80, 60),
(9, 'Dila Fipta Wahyulis Sari', 2015, 'C', 100, 50, 100, 80, 80, 70, 60, 50),
(10, 'Devi Ratnasari', 2015, 'B', 100, 80, 80, 100, 80, 70, 60, 80),
(11, 'Yohannes Dhimas', 2017, 'D', 80, 70, 100, 70, 80, 80, 60, 50),
(12, 'Alifah Diantebes', 2017, 'D', 80, 70, 100, 80, 80, 80, 80, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_pilgan`
--

CREATE TABLE `soal_pilgan` (
  `materi` varchar(50) NOT NULL,
  `kode_soal` varchar(30) NOT NULL,
  `urutan` int(5) NOT NULL,
  `soal` text NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `jawaban` text NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_pilgan`
--

INSERT INTO `soal_pilgan` (`materi`, `kode_soal`, `urutan`, `soal`, `pilihan`, `jawaban`, `kunci`, `feedback`) VALUES
('Enkapsulasi', 'En_PG_01', 1, 'Berikut ini pengertian dari enkapsulasi yang benar adalah...', 'd', 'Menyembunyikan informasi dari kelas yang lain', 'Benar', ''),
('Enkapsulasi', 'En_PG_02', 2, 'Berikut ini merupakan ciri-ciri program yang menerapkan enkapsulasi adalah...', 'a', 'Menggunakan access modifier private pada variabel', 'Benar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stukas`
--

CREATE TABLE `stukas` (
  `Bab` char(30) NOT NULL,
  `Kasus` text NOT NULL,
  `Nama_file` varchar(255) NOT NULL,
  `Ukuran_file` bigint(20) NOT NULL,
  `Direktori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stukas`
--

INSERT INTO `stukas` (`Bab`, `Kasus`, `Nama_file`, `Ukuran_file`, `Direktori`) VALUES
('Enkapsulasi', '<p class=\"body_textarea\" align=\"justify\">Buat class kelolaMatakuliah.java untuk membuat object dari class Matakuliah.java dan mengimplementasikan seluruh method yang ada pada kelas tersebut.</p>\r\n<p class=\"body_textarea\">Catatan :</p>\r\n<p class=\"body_textarea\" align=\"justify\">1. Apabila kapasitas maksimal mata kuliah tidak dituliskan secara eksplisit, maka secara default, kapasitas maksimal tiap mata kuliah adalah 40.</p>\r\n<p class=\"body_textarea\">2. Kapasitas maksimum tiap ruang kelas dan lab adalah 60.</p>\r\n<p class=\"body_textarea\" align=\"justify\">3. Mahasiswa yang ingin mengambil suatu matakuliah wajib memenuhi syarat minimal angkatan yang dimiliki oleh tiap matakuliah.</p>\r\n<p class=\"body_textarea\">4. JS maksimal tiap mata kuliah yang dibuka adalah 4.</p>\r\n<p class=\"body_textarea\">5. Password bersifat case sensitive.</p>\r\n<p class=\"body_textarea\">6. Format penulisan nim mengikuti format penulisan nim UM.</p>', '1.JPG', 86687, 'files/1.JPG'),
('Enkapsulasi', '<p class=\"body_textarea\" align=\"justify\">Buatlah class Nasabah dan class Tabungan seperti UML class diagram di atas yang menyatakan bahwa seorang nasabah mempunyai sebuah tabungan.</p>', '2.JPG', 52562, 'files/2.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsn`
--
ALTER TABLE `dsn`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`sub_materi`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `soal_pilgan`
--
ALTER TABLE `soal_pilgan`
  ADD PRIMARY KEY (`kode_soal`);

--
-- Indexes for table `stukas`
--
ALTER TABLE `stukas`
  ADD PRIMARY KEY (`Direktori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
