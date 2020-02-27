-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 03:34 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Nama` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Confirm` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Nama`, `Username`, `Password`, `Confirm`) VALUES
('Nurul Fajriah Andini', 'dini98', 'nfa1005', 'nfa1005');

-- --------------------------------------------------------

--
-- Table structure for table `angket`
--

CREATE TABLE `angket` (
  `nim` bigint(20) NOT NULL,
  `skor` bigint(20) NOT NULL,
  `saran` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angket`
--

INSERT INTO `angket` (`nim`, `skor`, `saran`, `tanggal`) VALUES
(150535629568, 12343, 'tes', '2018-11-27 09:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `NIM` bigint(20) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Angkatan` int(11) DEFAULT NULL,
  `Offering` char(1) DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asisten`
--

INSERT INTO `asisten` (`NIM`, `Nama`, `password`, `Angkatan`, `Offering`, `Status`) VALUES
(160535629548, 'Popy Mauida Dewi', 'madew24', 2016, 'B', 'Aktif'),
(150535629546, 'Tyas Agung Marida ', 'tyasacm', 2015, 'B', 'Pasif'),
(160535629558, 'Nurul Andini', 'nfa1005', 2016, 'E', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `dsn`
--

CREATE TABLE `dsn` (
  `NIP` bigint(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsn`
--

INSERT INTO `dsn` (`NIP`, `Nama`, `Username`, `Password`, `Confirm`) VALUES
(6400201619267, 'Kartika Chandra Kirana', 'kartikack', 'dosen', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `No` int(11) NOT NULL,
  `Judul` char(50) NOT NULL,
  `Isi` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`No`, `Judul`, `Isi`, `Tanggal`) VALUES
(1, 'UAS', 'UAS berlangsung dari tanggal 3-7 Desember 2018 ', '2018-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `nim` bigint(20) NOT NULL,
  `bab` varchar(30) NOT NULL,
  `jawaban` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`nim`, `bab`, `jawaban`) VALUES
(170535629546, 'Enkapsulasi', 'adbab'),
(170535629546, 'Enkapsulasi', 'aadaa'),
(170535629546, 'Enkapsulasi', 'adada');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_stukas`
--

CREATE TABLE `jawaban_stukas` (
  `nim` bigint(20) NOT NULL,
  `bab` varchar(30) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_stukas`
--

INSERT INTO `jawaban_stukas` (`nim`, `bab`, `jawaban`) VALUES
(150535629568, 'Enkapsulasi', '<html>\r\n<head><title></title>\r\n</head>\r\n<body>\r\n</body>\r\n</html>'),
(150535629568, 'Enkapsulasi', 'tes'),
(150535629568, 'Enkapsulasi', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `bab` varchar(30) NOT NULL,
  `urutan_bab` int(5) DEFAULT NULL,
  `sub_materi` varchar(100) NOT NULL,
  `urutan_sub` int(5) DEFAULT NULL,
  `uraian` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`bab`, `urutan_bab`, `sub_materi`, `urutan_sub`, `uraian`) VALUES
('Enkapsulasi', 1, 'Keuntungan Menerapkan Enkapsulasi', 3, '<p class="body_textarea" align="justify">\r\nSuatu modul yang terenkapsulasi dengan baik akan bersifat independen, sehingga tidak akan terikat pada bagian\r\ntertentu dari program. Bila melakukan modifikasi pada\r\nsuatu modul, maka perubahan tersebut akan dirasakan juga\r\noleh bagian program yang menggunakan modul tersebut.\r\nModul yang terenkapsulasi dengan baik hanya akan\r\nberinteraksi dengan bagian program lainnya melalui\r\nvariabel-variabel input atau output yang telah\r\ndidefinisikan sebelumnya. Saat program didistribusikan\r\npada khalayak, Anda dapat menerapkan prinsip enkapsulasi\r\nuntuk melindungi listing program. Di sini pengguna hanya\r\ndapat menggunakan program melalui variabel input atau\r\noutput yang didefinisikan tanpa disertai bagimana\r\nproses yang terjadi di dalam modul tersebut.</p>'),
('Enkapsulasi', 1, 'Manfaat Enkapsulasi', 6, '<p class="body_textarea">Enkapsulasi memiliki manfaat sebagai berikut:</p>\r\n<p class="body_textarea">1. Modularitas</p>\r\n<p class="body_textarea" align="justify">Source code dari sebuah class dapat dikelola secara independen dari source code class yang lain. Perubahan internal pada sebuah class tidak akan berpengaruh bagi class yang menggunakannya.</p>\r\n<p class="body_textarea">2. Information Hiding</p>\r\n<p class="body_textarea" align="justify">Penyembunyian informasi yang tidak perlu diketahui objek lain.</p>'),
('Enkapsulasi', 1, 'Pengertian Enkapsulasi', 1, '<p class="body_textarea" align="justify">Enkapsulasi merupakan suatu cara pembungkusan data dan method yang menyusun suatu kelas sehingga kelas dapat dipandang sebagai suatu modul dan cara bagaimana menyembunyikan informasi detail dari suatu class (information hiding). Dalam OOP, enkapsulasi sangat penting untuk keamanan serta menghindari kesalahan pemrograman, enkapsulasi dimaksudkan untuk menjaga suatu proses program agar tidak dapat diakses secara sembarangan atau di intervensi oleh program lain. Konsep enkapsulasi sangat penting dilakukan untuk menjaga kebutuhan program agar dapat diakses sewaktu-waktu, sekaligus menjaga program tersebut.</p>\r\n<p class="body_textarea">Dua hal yang mendasar dalam enkapsulasi yakni:</p>\r\n<p class="body_textarea">1. Information hiding</p> \r\n<p class="body_textarea" align="justify">Sebelumnya untuk pengaksesan atribut atau method menggunakan objek secara langsung. Hal ini karena akses kontrol yang diberikan pada atribut dan method di dalam kelas tersebut adalah public. Untuk menyembunyikan informasi dari suatu kelas sehingga anggota kelas tersebut tidak dapat diakses kelas lain yaitu dengan memberi hak akses private pada atributnya. Proses ini disebut dengan information hiding.</p>\r\n<p class="body_textarea">2. Interface to access data</p>\r\n<p class="body_textarea" align="justify">Interface to access data merupakan cara melakukan perubahan terhadap atribut yang disembunyikan, caranya adalah dengan membuat suatu interface berupa method untuk menginisialisasi atau merubah nilai dari suatu atribut tersebut. Manfaat utama teknik encapsulation adalah kita mampu memodifikasi kode tanpa merusak kode yang telah digunakan pada class lain.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `off` char(1) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `prodi`, `angkatan`, `off`, `pass`) VALUES
(150535629500, 'Alifah Diantebes', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629520, 'Syahaffath Assegaf', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629523, 'Yosafat Andy', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629559, 'Feliks Victor', 'Teknik Informatika', 2016, 'E', 'mhs'),
(150535629564, 'Dila Fipta Wahyulis Sari', 'Teknik Informatika', 2015, 'C', 'mhs'),
(150535629566, 'Melinda Dwi', 'Teknik Informatika', 2016, 'E', 'mhs'),
(150535629567, 'Sandya Yuda Pratama', 'Teknik Informatika', 2016, 'E', 'mhs'),
(150535629568, 'Devi Ratnasari', 'Teknik Informatika', 2015, 'B', 'mhs'),
(150535629572, 'Septi Retno Desi', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629573, 'Yohannes Dhimas', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629575, 'Novita Tri Indrasari', 'Teknik Informatika', 2017, 'D', 'mhs'),
(150535629640, 'Ridhotul Ulfah', 'Teknik Informatika', 2017, 'D', 'mhs'),
(170535629537, 'Popy Maulida Dewi', 'Teknik Informatika', 2017, 'B', 'popi'),
(170535629546, 'Tyas Agung Cahyaning Marida', 'S1 Teknik Informatika', 2017, 'B', 'tyas0203'),
(170535629558, 'Nurul Fajriah Andini', 'S1 Teknik Informatika', 2017, 'B', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
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
-- Dumping data for table `nilai`
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
-- Table structure for table `nilai_akhir`
--

CREATE TABLE `nilai_akhir` (
  `nim` bigint(20) NOT NULL,
  `bab` varchar(30) NOT NULL,
  `nilai_akhir` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_akhir`
--

INSERT INTO `nilai_akhir` (`nim`, `bab`, `nilai_akhir`, `keterangan`) VALUES
(150535629568, 'Enkapsulasi', 4, 'Sangat Baik!!'),
(150535629568, 'Enkapsulasi', 4, 'Sangat Baik!!'),
(150535629568, 'Enkapsulasi', 4, 'Sangat Baik!!'),
(150535629568, 'Enkapsulasi', 4, 'Sangat Baik!!');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_latihan`
--

CREATE TABLE `nilai_latihan` (
  `nim` bigint(20) DEFAULT NULL,
  `bab` varchar(30) NOT NULL,
  `nilai_latihan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_latihan`
--

INSERT INTO `nilai_latihan` (`nim`, `bab`, `nilai_latihan`) VALUES
(170535629537, '', 40),
(150535629568, 'Enkapsulasi', 100),
(170535629546, 'Enkapsulasi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_stukas`
--

CREATE TABLE `nilai_stukas` (
  `nim` bigint(20) NOT NULL,
  `bab` varchar(30) NOT NULL,
  `nilai_stukas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_stukas`
--

INSERT INTO `nilai_stukas` (`nim`, `bab`, `nilai_stukas`) VALUES
(170535629546, '', 50),
(170535629537, '', 100),
(150535629568, 'Enkapsulasi', 80);

-- --------------------------------------------------------

--
-- Table structure for table `soal_pilgan`
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
-- Dumping data for table `soal_pilgan`
--

INSERT INTO `soal_pilgan` (`materi`, `kode_soal`, `urutan`, `soal`, `pilihan`, `jawaban`, `kunci`, `feedback`) VALUES
('Enkapsulasi', 'En_PG_01', 1, 'Berikut ini pengertian dari enkapsulasi yang benar adalah...', 'd', 'Menyembunyikan informasi dari kelas yang lain', 'Benar', ''),
('Enkapsulasi', 'En_PG_02', 2, 'Berikut ini merupakan ciri-ciri program yang menerapkan enkapsulasi adalah...', 'a', 'Menggunakan access modifier private pada variabel', 'Benar', '');

-- --------------------------------------------------------

--
-- Table structure for table `stukas`
--

CREATE TABLE `stukas` (
  `Bab` char(30) NOT NULL,
  `Kasus` text NOT NULL,
  `Nama_file` varchar(255) NOT NULL,
  `Ukuran_file` bigint(20) NOT NULL,
  `Direktori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stukas`
--

INSERT INTO `stukas` (`Bab`, `Kasus`, `Nama_file`, `Ukuran_file`, `Direktori`) VALUES
('Enkapsulasi', '<p class="body_textarea" align="justify">Buat class kelolaMatakuliah.java untuk membuat object dari class Matakuliah.java dan mengimplementasikan seluruh method yang ada pada kelas tersebut.</p>\r\n<p class="body_textarea">Catatan :</p>\r\n<p class="body_textarea" align="justify">1. Apabila kapasitas maksimal mata kuliah tidak dituliskan secara eksplisit, maka secara default, kapasitas maksimal tiap mata kuliah adalah 40.</p>\r\n<p class="body_textarea">2. Kapasitas maksimum tiap ruang kelas dan lab adalah 60.</p>\r\n<p class="body_textarea" align="justify">3. Mahasiswa yang ingin mengambil suatu matakuliah wajib memenuhi syarat minimal angkatan yang dimiliki oleh tiap matakuliah.</p>\r\n<p class="body_textarea">4. JS maksimal tiap mata kuliah yang dibuka adalah 4.</p>\r\n<p class="body_textarea">5. Password bersifat case sensitive.</p>\r\n<p class="body_textarea">6. Format penulisan nim mengikuti format penulisan nim UM.</p>', '1.JPG', 86687, 'files/1.JPG'),
('Enkapsulasi', '<p class="body_textarea" align="justify">Buatlah class Nasabah dan class Tabungan seperti UML class diagram di atas yang menyatakan bahwa seorang nasabah mempunyai sebuah tabungan.</p>', '2.JPG', 52562, 'files/2.JPG');

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
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
