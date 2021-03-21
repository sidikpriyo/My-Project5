-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 13.29
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdukcapil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_data`
--

CREATE TABLE `m_data` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `id_agama` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_data`
--

INSERT INTO `m_data` (`nik`, `nama`, `kode_pos`, `id_agama`, `jenis_kelamin`) VALUES
('3308140110970002', 'Petrus Hendrawan', 56151, 'Kristen', 'laki-laki'),
('3308140110990001', 'Margareta Kristina', 56151, 'Kristen', 'perempuan'),
('3308140110990003', 'Renaldi Siswanto', 56152, 'Kristen', 'laki-laki'),
('3308140110990004', 'Kinanti', 56151, 'Kristen', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_petugas`
--

CREATE TABLE `m_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(45) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_petugas`
--

INSERT INTO `m_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'Sidik Priyo U', 'sidik', '123'),
(2, 'M Satriyo', 'satriyo', '123'),
(3, 'M Azhar', 'azar', '123'),
(4, 'Refo Utomo', 'refo', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah_agama`
--

CREATE TABLE `pindah_agama` (
  `idpindah_agama` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `agama_pindah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pindah_agama`
--

INSERT INTO `pindah_agama` (`idpindah_agama`, `id_petugas`, `nik`, `tanggal`, `agama_pindah`) VALUES
(110, 1, '3308140110990001', '2020-07-13', 'Islam'),
(111, 1, '3308140110970002', '2020-07-13', 'Islam'),
(112, 1, '3308140110990003', '2020-07-20', 'Islam'),
(113, 1, '3308140110990004', '2020-07-21', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_data`
--
ALTER TABLE `m_data`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `m_petugas`
--
ALTER TABLE `m_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pindah_agama`
--
ALTER TABLE `pindah_agama`
  ADD PRIMARY KEY (`idpindah_agama`),
  ADD KEY `fk_pindah_agama_m_petugas_idx` (`id_petugas`),
  ADD KEY `fk_pindah_agama_m_data1_idx` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_petugas`
--
ALTER TABLE `m_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pindah_agama`
--
ALTER TABLE `pindah_agama`
  MODIFY `idpindah_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
