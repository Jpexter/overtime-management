-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2023 pada 13.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_overtime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '1999_09_13_044410_create_tb_role', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_13_040323_tb_master_division', 1),
(7, '2023_09_13_065101_create_tb_master_project', 1),
(8, '2023_09_13_073053_create_tb_overtime_record', 1),
(9, '2023_09_14_015313_create_tb_master_basic_salary', 1),
(10, '2023_09_14_020721_tb_master_overtime', 1),
(11, '2023_09_14_023111_create_tb_time_off', 1),
(12, '2023_09_14_035253_create_tb_attendance', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_attendance`
--

CREATE TABLE `tb_attendance` (
  `id_attendance` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_division` bigint(20) UNSIGNED NOT NULL,
  `reason` text NOT NULL,
  `submission_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `type` enum('cuti bersama','sakit') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_basic_salary`
--

CREATE TABLE `tb_master_basic_salary` (
  `id_basic_salary` int(10) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `total_basic_salary` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_division`
--

CREATE TABLE `tb_master_division` (
  `id_division` bigint(20) UNSIGNED NOT NULL,
  `name_division` varchar(255) NOT NULL,
  `status_division` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_master_division`
--

INSERT INTO `tb_master_division` (`id_division`, `name_division`, `status_division`) VALUES
(1, 'Web Design', 'Y'),
(2, 'IT Support', 'Y'),
(7, 'IT', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_overtime`
--

CREATE TABLE `tb_master_overtime` (
  `id_record_overtime` int(10) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `weekday` int(11) NOT NULL,
  `weekend` int(11) NOT NULL,
  `on_duty` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_project`
--

CREATE TABLE `tb_master_project` (
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status` enum('normal','holiday') NOT NULL,
  `is_on_duty` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_overtime_record`
--

CREATE TABLE `tb_overtime_record` (
  `id_record` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `id_division` bigint(20) UNSIGNED NOT NULL,
  `type_overtime` enum('normal','urgent','business trip') NOT NULL,
  `overtime_date_start` datetime NOT NULL,
  `overtime_date_end` datetime NOT NULL,
  `overtime_category` enum('weekday','weekend','on duty','business trip') NOT NULL,
  `effective_time` time NOT NULL,
  `overtime_reason` varchar(255) NOT NULL,
  `submitted_by_admin` date NOT NULL,
  `send_by_admin` enum('Y','N') NOT NULL COMMENT 'Y: yes, N:',
  `note_cs` text NOT NULL,
  `checked_by_leader` enum('Y','N') NOT NULL COMMENT 'Y: yes, N:',
  `checked_by_leader_date` date NOT NULL,
  `cs_normal_count` int(11) NOT NULL,
  `cs_closing_count` int(11) NOT NULL,
  `cs_type` enum('normal','closing') NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL,
  `approved_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `menu` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `role_name`, `menu`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'dashboard', '2023-09-19 07:41:28', '2023-09-19 07:41:28'),
(2, 'user', 'dashboard', '2023-09-19 07:41:28', '2023-09-19 07:41:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_time_off`
--

CREATE TABLE `tb_time_off` (
  `id_time_off` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_division` bigint(20) UNSIGNED NOT NULL,
  `reason` text NOT NULL,
  `criteria_time_off` varchar(255) NOT NULL,
  `submission_date` date NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `status` enum('approved','pending','rejected') NOT NULL,
  `approved_date` date NOT NULL,
  `rejected_date` date NOT NULL,
  `approved_by` int(11) NOT NULL,
  `rejected_by` int(11) NOT NULL,
  `rejected_reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(90) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `email`, `password`, `phone_number`, `id_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'fazri al fauzi', 'fazri22', 'fajrial39@gmail.com', '$2y$10$xbrbybzTUvIep0lIpdjXeOJRCvShrM9cmJk2YVV11sh.cJ7NviXXe', '0857322112', 1, NULL, '2023-09-19 00:42:23', '2023-09-19 00:42:23'),
(3, 'Akbar Albarokah', 'Akbar12', 'akbaralbarokah0@gmail.com', '$2y$10$stHzhwVzuIRTgos3hXzfsu0LH1bWasgN0KXIuK/sUB6qOlAlH2lwO', '0857322132', 1, NULL, '2023-09-19 19:15:50', '2023-09-19 19:15:50'),
(6, 'zrialfauzi', 'zrialfauzi211', 'zri01@gmail.com', 'password', '0812341232123', 2, NULL, '2023-09-21 19:08:11', '2023-09-21 19:14:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id_attendance`),
  ADD KEY `tb_attendance_id_users_foreign` (`id_users`),
  ADD KEY `tb_attendance_id_division_foreign` (`id_division`);

--
-- Indeks untuk tabel `tb_master_basic_salary`
--
ALTER TABLE `tb_master_basic_salary`
  ADD PRIMARY KEY (`id_basic_salary`),
  ADD KEY `tb_master_basic_salary_id_users_foreign` (`id_users`);

--
-- Indeks untuk tabel `tb_master_division`
--
ALTER TABLE `tb_master_division`
  ADD PRIMARY KEY (`id_division`);

--
-- Indeks untuk tabel `tb_master_overtime`
--
ALTER TABLE `tb_master_overtime`
  ADD PRIMARY KEY (`id_record_overtime`),
  ADD KEY `tb_master_overtime_id_users_foreign` (`id_users`);

--
-- Indeks untuk tabel `tb_master_project`
--
ALTER TABLE `tb_master_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tb_overtime_record`
--
ALTER TABLE `tb_overtime_record`
  ADD PRIMARY KEY (`id_record`),
  ADD KEY `tb_overtime_record_id_users_foreign` (`id_users`),
  ADD KEY `tb_overtime_record_id_project_foreign` (`id_project`),
  ADD KEY `tb_overtime_record_id_division_foreign` (`id_division`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`),
  ADD UNIQUE KEY `tb_role_role_name_unique` (`role_name`);

--
-- Indeks untuk tabel `tb_time_off`
--
ALTER TABLE `tb_time_off`
  ADD PRIMARY KEY (`id_time_off`),
  ADD KEY `tb_time_off_id_users_foreign` (`id_users`),
  ADD KEY `tb_time_off_id_division_foreign` (`id_division`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `tb_users_email_unique` (`email`),
  ADD KEY `tb_users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id_attendance` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_master_basic_salary`
--
ALTER TABLE `tb_master_basic_salary`
  MODIFY `id_basic_salary` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_master_division`
--
ALTER TABLE `tb_master_division`
  MODIFY `id_division` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_master_overtime`
--
ALTER TABLE `tb_master_overtime`
  MODIFY `id_record_overtime` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_master_project`
--
ALTER TABLE `tb_master_project`
  MODIFY `id_project` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_overtime_record`
--
ALTER TABLE `tb_overtime_record`
  MODIFY `id_record` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_time_off`
--
ALTER TABLE `tb_time_off`
  MODIFY `id_time_off` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD CONSTRAINT `tb_attendance_id_division_foreign` FOREIGN KEY (`id_division`) REFERENCES `tb_master_division` (`id_division`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_attendance_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_master_basic_salary`
--
ALTER TABLE `tb_master_basic_salary`
  ADD CONSTRAINT `tb_master_basic_salary_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_master_overtime`
--
ALTER TABLE `tb_master_overtime`
  ADD CONSTRAINT `tb_master_overtime_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_overtime_record`
--
ALTER TABLE `tb_overtime_record`
  ADD CONSTRAINT `tb_overtime_record_id_division_foreign` FOREIGN KEY (`id_division`) REFERENCES `tb_master_division` (`id_division`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_overtime_record_id_project_foreign` FOREIGN KEY (`id_project`) REFERENCES `tb_master_project` (`id_project`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_overtime_record_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_time_off`
--
ALTER TABLE `tb_time_off`
  ADD CONSTRAINT `tb_time_off_id_division_foreign` FOREIGN KEY (`id_division`) REFERENCES `tb_master_division` (`id_division`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_time_off_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `tb_role` (`id_role`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
