-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2016 at 06:40 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `judul`, `pengarang`, `penerbit`, `tahun`, `lokasi`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Android Programming: The Big Nerd Ranch Guide 2nd Edition', 'Bill Phillips, Chris Stewart, Brian Hardy, Kristin Marsicano', 'Big Nerd Ranch, LLC', 2015, 'Fakultas Teknik UGM', 'Programming', NULL, NULL),
(2, 'Programming Arduino Getting Started with Sketches 1st Edition', 'Simon Monk', 'The McGraw-Hill Company', 2012, 'Fakultas Teknik UGM', 'Electrical & Electronic', NULL, NULL),
(3, 'Don''t Make Me Think, Revisited: A Common Sense Approach to Web Usability (Voices That Matter) 3rd Edition', 'Steve Krug', 'Pearson Education', 2014, 'Fakultas Teknik UGM', 'Web Development', NULL, NULL),
(4, 'HTML and CSS: Design and Build Websites 1st Edition', 'Jon Duckett', 'John Wiley & Sons, Inc.', 2011, 'Fakultas Teknik UGM', 'Web Development', NULL, NULL),
(5, 'WordPress: The Missing Manual 2nd Edition', 'Matthew MacDonald', 'O''Reilly Media, Inc.', 2014, 'Fakultas Teknik UGM', 'Web Development', NULL, NULL),
(6, 'Docker in Action 1st Edition', 'Jeff Nickoloff', 'Manning Publications Co.', 2016, 'Fakultas Teknik UGM', 'Database', NULL, NULL),
(7, 'Hadoop: The Definitive Guide 4th Edition', 'Tom White', 'O''Reilly Media, Inc.', 2015, 'Fakultas Teknik UGM', 'Programming', NULL, NULL),
(8, 'The Art of Game Design: A Book of Lenses, Second Edition 2nd Edition', 'Jesse Schell', 'Taylor & Francis Group, LLC', 2015, 'Fakultas Teknik UGM', 'Game Development', NULL, NULL),
(9, 'Amazon Web Services in Action 1st Edition', 'Andreas Wittig, Michael Wittig', 'Manning Publications Co.', 2016, 'Fakultas Teknik UGM', 'Web Development', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id_library` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_27_093317_create_book_table', 1),
('2016_05_27_093348_create_library_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nim`, `minat`, `fakultas`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Misbach Imaduddin Zuhdi', 'misbach.imaduddin.z@mail.ugm.ac.id', '$2y$10$Ab0pzKjl0pYeNxgSI1laTeADYrPwoJ507G.BGuNdcmbj3FB5eaK4S', '13/348230/TK/40840', 'Sistem Informasi', 'Teknik', 'o46uDpglmy5M94x5rSHe3tNCpqXYOilfSytxeeNkjlRaZNCXuCZyXJy8Bua8', '2016-05-27 02:57:32', '2016-05-27 21:38:12'),
(2, 'A''isya Nur Aulia Yusuf', 'icha@demo.com', '$2y$10$E.xQBrhPaMvSXrNncxcGQu7HDgfGErzyp1wbcWLyvg5f7XDRrLmXm', '13/348167/TK/40805', 'Networking', 'Teknik', 'v9IOBua6JYceBIYZegR1aZ59BbNJIVRVfurLj0FTHZxqHgcjHWMmrO8XVkJ1', '2016-05-27 12:52:22', '2016-05-27 12:52:31'),
(3, 'Luthfan Nur Ubai', 'ubai@demo.com', '$2y$10$FSnOh.eYZanOFZCHYKUtd.gkAnk5o1E/7E4ChpyLcxJmBITvJyNgi', '13/358209/TK/40812', 'Robotika', 'Ekonomika dan Bisnis', NULL, '2016-05-27 12:53:01', '2016-05-27 12:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id_library`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id_library` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
