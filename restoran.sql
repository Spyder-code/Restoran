-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2019 pada 13.10
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `uang` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `user`, `status`, `uang`, `kembalian`, `created_at`, `updated_at`) VALUES
(1, 'Lim', 1, 10000, 10000, '2019-12-04 19:43:51', '2019-12-12 02:06:12'),
(2, 'almi', 1, 100000, 29000, '2019-12-04 20:31:36', '2019-12-09 00:59:54'),
(3, 'qolbi', 1, 10000, -14000, '2019-12-04 21:31:05', '2019-12-08 20:26:13'),
(4, 'ilham', 1, 30000, 12000, '2019-12-08 19:51:39', '2019-12-08 20:03:54'),
(5, 'lisa', 1, 100000, 48000, '2019-12-12 02:14:12', '2019-12-12 02:15:53'),
(6, 'risa', 1, 100000, 33000, '2019-12-12 15:28:55', '2019-12-13 19:10:21'),
(7, 'luay', 1, 50000, 10000, '2019-12-18 05:02:49', '2019-12-18 05:04:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logins`
--

INSERT INTO `logins` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'luay syauqillah', 'luay', '$2y$10$GXhdNoddNtu3GDjqUgD9EuspqTA1M8z4ry/yyG3LReGCuU4dXmK06', '2019-12-11 22:23:37', '2019-12-11 22:23:37'),
(2, 'luay syauqillah', 'luay', '$2y$10$yzSu/hmt4IrQMF9/iuLqXuo7H1Yd5LO2eJRGeIV7LXFOctefRRG06', '2019-12-11 22:29:36', '2019-12-11 22:29:36'),
(3, 'admin', 'admin', '$2y$10$SG21BDS4bS4ScH/U51MLhOiT.9GZXqzaN9x0.0FPAjGJv996zWmM2', '2019-12-11 22:40:29', '2019-12-11 22:40:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'almi@yahoo.com', 'Saran', 'Tambahkan fitur order', '2019-12-04 20:48:11', '2019-12-04 20:48:11'),
(2, 'aku@yahoo.com', 'Saran', 'mengisi saran', '2019-12-09 00:57:11', '2019-12-09 00:57:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_11_10_061819_create_customers_table', 1),
(31, '2019_11_29_000110_create_products_table', 1),
(32, '2019_11_29_001950_create_trans_table', 1),
(33, '2019_11_30_033755_create_messages_table', 1),
(34, '2019_12_12_033011_create_roles_table', 2),
(35, '2019_12_12_033601_create_role_user_table', 2),
(36, '2019_12_12_050616_create_logins_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `rating` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `image`, `kategori`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Ayam Crispy', 10000, 'ayamCrispy.jpg', 1, 111, NULL, '2019-12-12 15:50:13'),
(2, 'Ayam Goreng', 10000, 'ayamGoreng.jpg', 1, 0, NULL, NULL),
(3, 'Ayam Panggang', 10000, 'ayamPanggang.jpg', 1, 3, NULL, '2019-12-13 17:55:59'),
(4, 'Cumi Oseng', 15000, 'cumi.jpg', 1, 1, NULL, '2019-12-12 15:41:04'),
(5, 'Gurami Bakar', 15000, 'gurame.jpg', 1, 7, NULL, '2019-12-12 15:55:40'),
(6, 'Gurami Crispy', 15000, 'gurameCrispy.jpg', 1, 5, NULL, '2019-12-18 05:03:26'),
(7, 'Gurami Goreng', 15000, 'gurameGoreng.jpg', 1, 0, NULL, NULL),
(8, 'Kakap Goreng', 16500, 'kakapGoreng.jpg', 1, 0, NULL, NULL),
(9, 'Kakap Bakar', 18000, 'KakapBakar.jpg', 1, 0, NULL, NULL),
(10, 'Kakap Crispy', 17000, 'kakapCrispy.jpg', 1, 3, NULL, '2019-12-12 16:01:13'),
(11, 'Es Teh', 4000, 'EsTeh.jpg', 2, 4, NULL, '2019-12-13 18:01:22'),
(12, 'Es Jeruk', 5000, 'EsJeruk.jpg', 2, 5, NULL, '2019-12-18 05:03:36'),
(13, 'Es Campur', 8000, 'esCampur.jpg', 2, 67, NULL, NULL),
(14, 'Jus Alpukat', 11000, 'jusAlpukat.jpg', 2, 4, NULL, '2019-12-12 16:06:05'),
(15, 'Jus Jambu', 11000, 'jusJambu.jpg', 2, 4, NULL, '2019-12-12 20:45:40'),
(16, 'Jus Strawberry', 11000, 'jusStrawberry.jpg', 2, 2, NULL, '2019-12-12 15:37:03'),
(17, 'Es Pisang Ijo', 8000, 'pisangIjo.jpeg', 2, 4, NULL, '2019-12-12 16:11:00'),
(18, 'Soda Gembira', 8000, 'soda.png', 2, 4, NULL, '2019-12-12 20:47:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dapur', '2019-12-12 00:01:18', '2019-12-12 00:01:18'),
(2, 'Kasir', '2019-12-12 00:01:18', '2019-12-12 00:01:18'),
(3, 'Super User', '2019-12-12 00:01:19', '2019-12-12 00:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans`
--

CREATE TABLE `trans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customers` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pembayaran` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trans`
--

INSERT INTO `trans` (`id`, `id_customers`, `nama`, `jumlah`, `harga`, `total`, `status`, `pembayaran`, `created_at`, `updated_at`) VALUES
(5, 3, 'Ayam Crispy', 2, 10000, 20000, 1, NULL, '2019-12-04 21:31:48', '2019-12-04 21:36:40'),
(6, 3, 'Es Teh', 1, 4000, 4000, 1, NULL, '2019-12-04 21:32:14', '2019-12-12 02:12:45'),
(7, 4, 'Ayam Panggang', 1, 10000, 10000, 1, NULL, '2019-12-08 19:51:50', '2019-12-12 02:12:48'),
(8, 4, 'Es Campur', 1, 8000, 8000, 1, NULL, '2019-12-08 19:52:00', '2019-12-12 02:12:51'),
(10, 5, 'Kakap Bakar', 2, 18000, 36000, 1, NULL, '2019-12-12 02:14:25', '2019-12-12 02:15:18'),
(11, 5, 'Es Campur', 2, 8000, 16000, 1, NULL, '2019-12-12 02:14:31', '2019-12-12 02:15:23'),
(40, 6, 'Kakap Crispy', 2, 17000, 34000, 0, NULL, '2019-12-12 16:01:13', '2019-12-12 16:01:13'),
(41, 6, 'Jus Alpukat', 1, 11000, 11000, 0, NULL, '2019-12-12 16:06:05', '2019-12-12 16:06:05'),
(42, 6, 'Es Pisang Ijo', 1, 8000, 8000, 0, NULL, '2019-12-12 16:11:00', '2019-12-12 16:11:00'),
(44, 2, 'Jus Jambu', 1, 11000, 11000, 0, NULL, '2019-12-12 20:45:39', '2019-12-12 20:45:39'),
(45, 2, 'Soda Gembira', 1, 8000, 8000, 0, NULL, '2019-12-12 20:47:36', '2019-12-12 20:47:36'),
(46, 6, 'Ayam Panggang', 1, 10000, 10000, 0, NULL, '2019-12-13 17:55:59', '2019-12-13 17:55:59'),
(47, 6, 'Es Teh', 1, 4000, 4000, 0, NULL, '2019-12-13 18:01:22', '2019-12-13 18:01:22'),
(48, 2, 'Es Jeruk', 1, 5000, 5000, 0, NULL, '2019-12-13 20:03:37', '2019-12-13 20:03:37'),
(49, 7, 'Gurami Crispy', 2, 15000, 30000, 0, NULL, '2019-12-18 05:03:26', '2019-12-18 05:03:26'),
(50, 7, 'Es Jeruk', 2, 5000, 10000, 0, NULL, '2019-12-18 05:03:36', '2019-12-18 05:03:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dapur', 'dapur', NULL, '$2y$10$dyp2QU07IFSaeGzDrAREMOYt6G8Br5icTHqVXxN5QjomFP25t2Ik.', NULL, '2019-12-12 00:01:19', '2019-12-12 00:01:19'),
(2, 'Kasir', 'kasir', NULL, '$2y$10$Ab7V9BbiGYak/x/QZn.zDO1S1MyamXLhvvqHFwvYZaDp7nRxQzrre', NULL, '2019-12-12 00:01:20', '2019-12-12 00:01:20'),
(3, 'Super User', 'SuperUser@yahoo.com', NULL, '$2y$10$bowQpKYV0MY7VCpQj9kTv.TPb.dTB8FesRN5iXBYF6pExFObKPf9i', NULL, '2019-12-12 00:01:20', '2019-12-12 00:01:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_id_customers_foreign` (`id_customers`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `trans`
--
ALTER TABLE `trans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_id_customers_foreign` FOREIGN KEY (`id_customers`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
