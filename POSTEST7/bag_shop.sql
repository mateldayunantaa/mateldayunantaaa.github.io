-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2023 pada 15.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bag_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `harga_produk` int(12) NOT NULL,
  `stok_produk` int(12) NOT NULL,
  `kategori_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `stok_produk`, `kategori_produk`, `gambar`) VALUES
('PRD0XB555IR', 'Produk A', 'Tas dengan bahan berkualitas tinggi.', 200000, 10, 'Wanita', 'PRD-pexels-artem-korsakov-15522601.jpg'),
('PRD1XQBL4BS', 'Produk B', 'Dibuat dari bahan tahan air untuk melindungi barang-barang Anda dari cuaca buruk.', 300000, 15, 'Pria', 'pexels-matheus-bertelli-18999339.jpg'),
('PRDD2QHF6I2', 'Produk C', 'Tas lucu dengan desain yang ceria untuk menemani petualangan si kecil.', 100000, 15, 'Anak-anak', 'PRD-pexels-karolina-grabowska-7269547.jpg'),
('PRDJKMRNEX0', 'Produk D', 'Tas dengan bahan berkualitas tinggi.', 300000, 25, 'Pria', 'PRD-pexels-pavel-danilyuk-6072971.jpg'),
('PRDM4PZBBKE', 'Produk E', 'Tas dengan bahan berkualitas tinggi.', 170000, 20, 'Wanita', 'PRD-pexels-igor-korzh-1078171.jpg'),
('PRDNT9DPJL1', 'Produk F', 'Tas dengan bahan berkualitas tinggi.', 250000, 17, 'Wanita', 'PRD-pexels-artem-korsakov-15522603.jpg'),
('PRDOZKHEMQ7', 'Produk G', 'Dengan warna cerah dan desain yang ergonomis, tas ini cocok untuk kegiatan belajar anak.', 150000, 30, 'Anak-anak', 'PRD-pexels-max-fischer-5211445.jpg'),
('PRDXKYVCU16', 'Produk H', 'Tas lucu dengan desain yang ceria untuk menemani petualangan si kecil.', 180000, 11, 'Anak-anak', 'PRD-pexels-godisable-jacob-934673.jpg'),
('PRDYJF7BFAK', 'Produk I', 'Dibuat dari bahan tahan air untuk melindungi barang-barang Anda dari cuaca buruk..', 500000, 20, 'Pria', 'PRD-pexels-vinta-supply-co-_-nyc-843194.jpg'),
('PRDYUSQE9HO', 'Produk J', 'Tas lucu dengan desain yang ceria untuk menemani petualangan si kecil.', 150000, 13, 'Anak-anak', 'PRD-pexels-pixabay-207697-min.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user',
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`, `role`, `photo`) VALUES
('USR86W4IJRH', 'admin', 'admin', 'admin@gmail.com', '0812345678', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', 'pexels-wictor-cardoso-18269634.jpg'),
('USRASYPWZIU', 'Matelda Yunanta Ambon', 'matelda', 'mateldayunantaambon@gmail.com', '085394190844', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'user', 'snapedit_1700833372624.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
