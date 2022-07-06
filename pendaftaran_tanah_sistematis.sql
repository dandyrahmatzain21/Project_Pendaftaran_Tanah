-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 04:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_tanah_sistematis`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_desa`
--

CREATE TABLE `table_desa` (
  `kode_desa` int(20) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `nama_kepala_desa` varchar(200) NOT NULL,
  `nip_kepala_desa` char(100) NOT NULL,
  `nama_saksi_1` varchar(200) NOT NULL,
  `tempat_lahir_saksi_1` varchar(200) NOT NULL,
  `tanggal_lahir_saksi_1` date NOT NULL,
  `umur_saksi_1` char(10) NOT NULL,
  `agama_saksi_1` varchar(200) NOT NULL,
  `no_ktp_saksi_1` char(20) NOT NULL,
  `pekerjaan_saksi_1` varchar(200) NOT NULL,
  `alamat_saksi_1` varchar(200) NOT NULL,
  `nama_saksi_2` varchar(250) NOT NULL,
  `tempat_lahir_saksi_2` varchar(200) NOT NULL,
  `tanggal_lahir_saksi_2` date NOT NULL,
  `umur_saksi_2` char(10) NOT NULL,
  `agama_saksi_2` varchar(200) NOT NULL,
  `no_ktp_saksi_2` char(20) NOT NULL,
  `pekerjaan_saksi_2` varchar(200) NOT NULL,
  `alamat_saksi_2` varchar(200) NOT NULL,
  `alamat_kantor_desa` varchar(200) NOT NULL,
  `nama_ppat` varchar(200) NOT NULL,
  `nama_satgas_1` varchar(200) NOT NULL,
  `nip_satgas_1` char(20) NOT NULL,
  `nama_satgas_2` varchar(200) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `bulan_tanggal_tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_desa`
--

INSERT INTO `table_desa` (`kode_desa`, `desa`, `kecamatan`, `nama_kepala_desa`, `nip_kepala_desa`, `nama_saksi_1`, `tempat_lahir_saksi_1`, `tanggal_lahir_saksi_1`, `umur_saksi_1`, `agama_saksi_1`, `no_ktp_saksi_1`, `pekerjaan_saksi_1`, `alamat_saksi_1`, `nama_saksi_2`, `tempat_lahir_saksi_2`, `tanggal_lahir_saksi_2`, `umur_saksi_2`, `agama_saksi_2`, `no_ktp_saksi_2`, `pekerjaan_saksi_2`, `alamat_saksi_2`, `alamat_kantor_desa`, `nama_ppat`, `nama_satgas_1`, `nip_satgas_1`, `nama_satgas_2`, `hari`, `bulan_tanggal_tahun`) VALUES
(1, 'CIGEDANG', 'LURAGUNG', 'ONDI ROHENDI', '', '(NO NAME)', 'NONE', '0001-01-01', '00', 'NONE', '000', 'Pegawai Negeri Sipil', '', 'ADE IRMAN', 'KUNINGAN', '1980-08-01', '36', 'ISLAM', '3208060108800001', 'Pegawai Negeri Sipil', '', 'Jl.Desa', '', 'LINA YULIANA', '197906082014082002', '197906082014082002', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `table_panitia`
--

CREATE TABLE `table_panitia` (
  `no_panitia` int(10) NOT NULL,
  `wilayah` varchar(250) NOT NULL,
  `ketua` varchar(250) NOT NULL,
  `nip_ketua` char(30) NOT NULL,
  `wk_ketua_1` varchar(250) NOT NULL,
  `nip_wk_ketua_1` char(30) NOT NULL,
  `wk_ketua_2` varchar(250) NOT NULL,
  `nip_wk_ketua_2` char(30) NOT NULL,
  `anggota` varchar(250) NOT NULL,
  `sekretaris` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `no` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_panitia`
--

INSERT INTO `table_panitia` (`no_panitia`, `wilayah`, `ketua`, `nip_ketua`, `wk_ketua_1`, `nip_wk_ketua_1`, `wk_ketua_2`, `nip_wk_ketua_2`, `anggota`, `sekretaris`, `tanggal`, `no`) VALUES
(1, 'CIGEDANG', 'KARSONO, SH', '19600815 198603 1 005', 'MAKSUM, A.Ptnh', '19640916 198503 1 003', 'GIYANTI, SH', '19681109 198903 2 001', 'ONDI ROHENDI', 'ESHA PERDIAN PURNAMA, SE', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_permohonan`
--

CREATE TABLE `table_permohonan` (
  `nib` int(6) NOT NULL,
  `no_berkas` char(6) NOT NULL,
  `no_register` char(6) NOT NULL,
  `pemohon_1` varchar(200) NOT NULL,
  `pemohon_2` varchar(200) NOT NULL,
  `tempat_lahir_1` varchar(100) NOT NULL,
  `tanggal_lahir_1` date NOT NULL,
  `tempat_lahir_2` varchar(100) NOT NULL,
  `tanggal_lahir_2` date NOT NULL,
  `umur_1` char(10) NOT NULL,
  `umur_2` char(10) NOT NULL,
  `agama_1` varchar(10) NOT NULL,
  `agama_2` varchar(10) NOT NULL,
  `pekerjaan_1` int(200) NOT NULL,
  `pekerjaan_2` int(200) NOT NULL,
  `no_ktp_1` char(20) NOT NULL,
  `no_ktp_2` char(20) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `alas_hak` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jalan_gang_blok` varchar(250) NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `nomor` char(50) NOT NULL,
  `desa_kelurahan` varchar(250) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `nama_kepala_desa` varchar(200) NOT NULL,
  `alamat_kantor_desa` varchar(200) NOT NULL,
  `no_letter_c` char(10) NOT NULL,
  `nama_pada_letter_c` varchar(250) NOT NULL,
  `no_sppt` char(10) NOT NULL,
  `nama_pada_sppt` varchar(250) NOT NULL,
  `no_persil` char(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `luas` char(10) NOT NULL,
  `utara` varchar(250) NOT NULL,
  `timur` varchar(250) NOT NULL,
  `selatan` varchar(250) NOT NULL,
  `barat` varchar(250) NOT NULL,
  `a_pada_saat_ini_dikuasai_oleh_1` varchar(250) NOT NULL,
  `sejak_tahun_1` char(10) NOT NULL,
  `berdasarkan_1` varchar(250) NOT NULL,
  `b_pada_saat_ini_dikuasai_oleh_2` varchar(250) NOT NULL,
  `sejak_tahun_2` char(10) NOT NULL,
  `berdasarkan_2` varchar(250) NOT NULL,
  `c_pada_saat_ini_dikuasai_oleh_3` varchar(250) NOT NULL,
  `sejak_tahun_3` char(10) NOT NULL,
  `berdasarkan_3` varchar(250) NOT NULL,
  `d_pada_saat_ini_dikuasai_oleh_4` varchar(250) NOT NULL,
  `sejak_tahun_4` char(10) NOT NULL,
  `berdasarkan_4` varchar(250) NOT NULL,
  `penggunaan_tanah` varchar(250) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `panitia` varchar(250) NOT NULL,
  `nama_pewaris` varchar(250) NOT NULL,
  `tahun_meninggal` char(10) NOT NULL,
  `tempat_meninggal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_permohonan`
--

INSERT INTO `table_permohonan` (`nib`, `no_berkas`, `no_register`, `pemohon_1`, `pemohon_2`, `tempat_lahir_1`, `tanggal_lahir_1`, `tempat_lahir_2`, `tanggal_lahir_2`, `umur_1`, `umur_2`, `agama_1`, `agama_2`, `pekerjaan_1`, `pekerjaan_2`, `no_ktp_1`, `no_ktp_2`, `alamat`, `alas_hak`, `tanggal`, `jalan_gang_blok`, `rt_rw`, `nomor`, `desa_kelurahan`, `kecamatan`, `nama_kepala_desa`, `alamat_kantor_desa`, `no_letter_c`, `nama_pada_letter_c`, `no_sppt`, `nama_pada_sppt`, `no_persil`, `kelas`, `luas`, `utara`, `timur`, `selatan`, `barat`, `a_pada_saat_ini_dikuasai_oleh_1`, `sejak_tahun_1`, `berdasarkan_1`, `b_pada_saat_ini_dikuasai_oleh_2`, `sejak_tahun_2`, `berdasarkan_2`, `c_pada_saat_ini_dikuasai_oleh_3`, `sejak_tahun_3`, `berdasarkan_3`, `d_pada_saat_ini_dikuasai_oleh_4`, `sejak_tahun_4`, `berdasarkan_4`, `penggunaan_tanah`, `tgl_permohonan`, `panitia`, `nama_pewaris`, `tahun_meninggal`, `tempat_meninggal`) VALUES
(1, '1', '1', 'Dandy Rahmat Zain', 'Dandy Rahmat Zain', 'Kuningan', '2000-05-12', 'Kuningan', '2000-05-12', '17', '17', 'Islam', 'Islam', 4, 2, '1', '1', 'Desa Cipondok', 'Surat Pernyataan Hibah', '2017-01-01', 'Ciganda', '06/02', '1', 'CIGEDANG', 'LURAGUNG', '', '', '1', 'Dandy Rahmat Zain', '1', 'Dandy Rahmat Zain', '1', '1', '1000', 'Colluseum Roma', 'Emirates Stadium', 'Amazon', 'The Great Wall', 'Dandy Rahmat Zain', '2017', 'Hibah Lisan', 'Dandy Rahmat Zain', '2016', 'Hibah Lisan', 'Dandy Rahmat Zain', '2015', 'Hibah Lisan', 'Dandy Rahmat Zain', '2014', 'Hibah LIsan', 'Microssoft Corporation', '2000-01-01', 'KARSONO, SH', 'Dandy Rahmat Zain', '3000', 'Madinah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_desa`
--
ALTER TABLE `table_desa`
  ADD PRIMARY KEY (`kode_desa`);

--
-- Indexes for table `table_panitia`
--
ALTER TABLE `table_panitia`
  ADD PRIMARY KEY (`no_panitia`);

--
-- Indexes for table `table_permohonan`
--
ALTER TABLE `table_permohonan`
  ADD PRIMARY KEY (`nib`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_desa`
--
ALTER TABLE `table_desa`
  MODIFY `kode_desa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_panitia`
--
ALTER TABLE `table_panitia`
  MODIFY `no_panitia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_permohonan`
--
ALTER TABLE `table_permohonan`
  MODIFY `nib` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
