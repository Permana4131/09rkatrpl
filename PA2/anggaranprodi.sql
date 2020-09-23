-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 09:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggaranprodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian_permohonan`
--

CREATE TABLE `bagian_permohonan` (
  `id` int(11) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `kode_budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagian_permohonan`
--

INSERT INTO `bagian_permohonan` (`id`, `id_permohonan`, `keterangan`, `jumlah`, `sisa`, `kode_budget`) VALUES
(3, 0, 'N', 10, 10, '11'),
(4, 0, 'k', 9, 9, '11'),
(5, 6, '99', 99, 99, '99'),
(6, 7, '909', 9090, 9090, '90'),
(7, 8, '1', 2, 1, 'II.2.1'),
(8, 9, '8', 8, 8, '8');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `pengirim`, `keterangan`, `foto`) VALUES
(1, 'mahasiswa', 'telah dilaksanakan', 'add00000001.png'),
(4, 'mahasiswa', 'telah dilaksanakan', 'Screenshot (1)00000001.png'),
(5, 'mahasiswa', 'telah dilaksanakan', 'Screenshot (1)00000001.png'),
(6, 'mahasiswa', 'telah dilaksanakan', 'Screenshot (1)00000001.png'),
(7, 'mahasiswa', 'telah dilaksanakan', 'Screenshot (1)00000001.png'),
(8, 'mahasiswa', 'telah dilaksanakan', 'Screenshot (1)00000001.png'),
(9, 'mahasiswa', 'Telah Dilaksanakan', 'IMG-20200602-WA003500000001.jpg'),
(10, 'dosen', 'Sudah Dilaksanakan', 'IMG-20200602-WA003600000001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan`
--

CREATE TABLE `perencanaan` (
  `code_mata_anggaran` varchar(11) NOT NULL,
  `mata_anggaran` varchar(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `peserta_kegiatan` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `dana` int(11) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `tujuan_kegiatan` varchar(255) NOT NULL,
  `pelaksana` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `vol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perencanaan`
--

INSERT INTO `perencanaan` (`code_mata_anggaran`, `mata_anggaran`, `nama_program`, `waktu_pelaksanaan`, `peserta_kegiatan`, `satuan`, `harga_satuan`, `dana`, `sumber_dana`, `tujuan_kegiatan`, `pelaksana`, `tahun`, `vol`) VALUES
('II.1.1', 'II.1', 'Keanggotaan profesi/ society', '2020-06-17', 'Seluruh dosen', 'orang', 1000, 1000, 'IT DEL', '\"Menjalin relasi dengan jurusan IT lain,   korespondensi\"', 'Mahasiswa', '2020/2021', 8),
('II.1.2', 'II.1', 'Pelatihan Basis Data', '2020-06-02', 'Seluruh dosen', 'orang', 200, 200, 'IT DEL', 'Persiapan dan pengkayaan bahan kuliah', 'Mahasiswa', '2020/2021', 1),
('II.1.3', 'II.1', 'Pelatihan: Phyton', '2020-06-25', 'Seluruh dosen', 'orang', 1000, 1000, 'IT DEL', 'Persiapan dan pengkayaan bahan kuliah', 'Mahasiswa', '2020/2021', 1),
('II.6.1', 'II.6', 'Pembelian alat peraga hasil penelitian', '2020-07-02', '-', 'unit', 0, 0, '-', 'Menambah kelengkapan di lab', '-', '2020/2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `unit` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `disetujui` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `tahun`, `tanggal`, `unit`, `nominal`, `pengirim`, `status`, `disetujui`) VALUES
(6, '2019', '2020-06-03', 'a', 'Rp 1.000.000 - Rp 10.000.000', 'mahasiswa', 'Terima', 'ka'),
(7, '2019', '2020-06-02', 'Perorganan', 'Rp 1.000.000 - Rp 10.000.000', 'mahasiswa', 'Tolak', 'ka'),
(8, '2020', '2020-07-09', 'Dosen', 'Rp 1.000.000 - Rp 10.000.000', 'dosen', 'Terima', 'ka'),
(9, '2019', '2020-06-18', 'Dosen', 'Rp 1.000.000 - Rp 10.000.000', 'dosen', 'proses', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `mata_anggaran` varchar(255) NOT NULL,
  `nama_progaram` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`mata_anggaran`, `nama_progaram`, `jumlah`, `tahun`) VALUES
('II.1', 'Keanggotaan profesi/ society', 2200, '2020/2021'),
('ii.4', 't', 2, '2020/2021'),
('II.6', 'Pengadaan bahan lab', 0, '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `program_kegiatan`
--

CREATE TABLE `program_kegiatan` (
  `tahun` varchar(255) NOT NULL,
  `jumlah_program` int(11) NOT NULL,
  `terpakai` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_kegiatan`
--

INSERT INTO `program_kegiatan` (`tahun`, `jumlah_program`, `terpakai`, `sisa`, `total`) VALUES
('2019/2020', 15, 2000, 100, 200),
('2020/2021', 4, 0, 114410, 114410);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('dosen', 'dosen', 'Dosen'),
('ka', 'ka', 'KA'),
('mahasiswa', 'mahasiswa', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `tahun` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`tahun`, `visi`, `misi`) VALUES
('2020/2021', 'Menjadikan Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan sebagai batu loncatan menuju masa depan Teknologi Informasi yang mengintegrasikan dunia pendidikan dengan kebutuhan usaha akan tenaga profesional informatika yang mampu bersaing secara global.', '1.Menyelenggarakan pendidikan vokasional yang mendidik dan menghasilkan sumber daya manusia yang mempunyai sikap memimpin, penuh kreativitas, berdisiplin tinggi, dan mampu memberikan solusi di bidang Teknologi Informasi secara global\r\n2.Membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat, kondusif dengan dukungan tenaga pengajar yang ahli dan profesional.\r\n3.Menyelenggarakan program penelitian yang menghasilkan produk teknologi informasi yang memberikan solusi tepat guna dan inovatif untuk diterapkan di berbagai bidang kehidupan masyarakat.\r\n4.Menyelenggarakan proses pengabdian kepada masyarakat di dunia teknologi informasi melalui berbagai program diseminasi teknologi informasi terhadap masyarakat di berbagai bidang.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian_permohonan`
--
ALTER TABLE `bagian_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD PRIMARY KEY (`code_mata_anggaran`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`mata_anggaran`);

--
-- Indexes for table `program_kegiatan`
--
ALTER TABLE `program_kegiatan`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian_permohonan`
--
ALTER TABLE `bagian_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
