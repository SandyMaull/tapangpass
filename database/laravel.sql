-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2020 at 11:40 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nas`
--

CREATE TABLE `nas` (
  `id` int(10) NOT NULL,
  `nasname` varchar(128) NOT NULL,
  `shortname` varchar(32) DEFAULT NULL,
  `type` varchar(30) DEFAULT 'other',
  `ports` int(5) DEFAULT NULL,
  `secret` varchar(60) NOT NULL DEFAULT 'secret',
  `server` varchar(64) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT 'RADIUS Client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radacct`
--

CREATE TABLE `radacct` (
  `radacctid` bigint(21) NOT NULL,
  `acctsessionid` varchar(64) NOT NULL DEFAULT '',
  `acctuniqueid` varchar(32) NOT NULL DEFAULT '',
  `username` varchar(64) NOT NULL DEFAULT '',
  `realm` varchar(64) DEFAULT '',
  `nasipaddress` varchar(15) NOT NULL DEFAULT '',
  `nasportid` varchar(15) DEFAULT NULL,
  `nasporttype` varchar(32) DEFAULT NULL,
  `acctstarttime` datetime DEFAULT NULL,
  `acctupdatetime` datetime DEFAULT NULL,
  `acctstoptime` datetime DEFAULT NULL,
  `acctinterval` int(12) DEFAULT NULL,
  `acctsessiontime` int(12) UNSIGNED DEFAULT NULL,
  `acctauthentic` varchar(32) DEFAULT NULL,
  `connectinfo_start` varchar(50) DEFAULT NULL,
  `connectinfo_stop` varchar(50) DEFAULT NULL,
  `acctinputoctets` bigint(20) DEFAULT NULL,
  `acctoutputoctets` bigint(20) DEFAULT NULL,
  `calledstationid` varchar(50) NOT NULL DEFAULT '',
  `callingstationid` varchar(50) NOT NULL DEFAULT '',
  `acctterminatecause` varchar(32) NOT NULL DEFAULT '',
  `servicetype` varchar(32) DEFAULT NULL,
  `framedprotocol` varchar(32) DEFAULT NULL,
  `framedipaddress` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `radcheck`
--

CREATE TABLE `radcheck` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radcheck`
--

INSERT INTO `radcheck` (`id`, `username`, `attribute`, `op`, `value`, `created_at`) VALUES
(3, 'test', 'Cleartext-Password', ':=', 'test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `radgroupcheck`
--

CREATE TABLE `radgroupcheck` (
  `id` int(11) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `radgroupreply`
--

CREATE TABLE `radgroupreply` (
  `id` int(11) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `radpostauth`
--

CREATE TABLE `radpostauth` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `pass` varchar(64) NOT NULL DEFAULT '',
  `reply` varchar(32) NOT NULL DEFAULT '',
  `authdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radpostauth`
--

INSERT INTO `radpostauth` (`id`, `username`, `pass`, `reply`, `authdate`) VALUES
(1, 'test', '0x50c5d770086e7b48a1701b0cfd91d4c3e3', 'Access-Reject', '2020-02-06 15:26:08'),
(2, 'test', '0xeee2bb793b05ece00a3523808ef8652ddf', 'Access-Reject', '2020-02-06 15:26:19'),
(3, 'test', '0x86211f43c0622c50f01edfba6d25e424eb', 'Access-Reject', '2020-02-06 15:27:49'),
(4, 'test', '0xa89334b7c644f3b516ab6b45cf982eb8dd', 'Access-Reject', '2020-02-06 15:28:06'),
(5, 'test', '0x6b43f11642de6c285c4df8072b41823017', 'Access-Accept', '2020-03-01 15:32:28'),
(6, 'kana1', '0xd0b9a0cdbfeedaf28549aaa6ae05e0d8a1', 'Access-Reject', '2020-02-08 02:55:57'),
(7, 'test', '0x6b43f11642de6c285c4df8072b41823017', 'Access-Accept', '2020-02-08 04:07:11'),
(8, 'Mobilmerah', '0x74a36ac9afdfca6b76790683bd0d04dcc9', 'Access-Reject', '2020-02-08 11:51:40'),
(9, 'Mobilmerah', '0xa4ad38d25e83cafc3af6f0f23ce064cec7', 'Access-Reject', '2020-02-08 11:51:51'),
(10, 'Mocktail', '0x2d0a943137525da0418dc69c9c03c3129f', 'Access-Reject', '2020-02-08 12:23:21'),
(11, 'Moktail', '0xad0b8260443336a97c48ae82c372e8398c', 'Access-Reject', '2020-02-08 12:24:17'),
(12, 'Moktail', '0xb6c638b06c68f25205b09f44d076567014', 'Access-Reject', '2020-02-08 12:24:37'),
(13, 'Hahahahah', '0x88fc5c39f458a7a27c5b3b6608889fd43b', 'Access-Reject', '2020-02-08 14:58:02'),
(14, 'koktail', '0x10d7fef1d019892878c42b8af058fa6775', 'Access-Reject', '2020-02-08 16:11:18'),
(15, 'Moktail', '0xa7c4ca623a8299c5c4079f4819abf2cca4', 'Access-Reject', '2020-02-08 17:44:45'),
(16, 'Moktail', '0xa68cd7c18485fa1c590e4b11aa8b9a39ca', 'Access-Reject', '2020-02-08 17:45:13'),
(17, 'user', '0x71e9cb2ef5c3b94a4555a3d8bb7e5cecf8', 'Access-Reject', '2020-03-02 11:53:25'),
(18, 'Moktail', '0xf8e0bde0b5691dfa2346336460a95dec12', 'Access-Reject', '2020-02-10 13:12:56'),
(19, 'Moktail', '0x95e0bde0b5691dfa2346336460a95dec12', 'Access-Reject', '2020-02-10 13:12:58'),
(20, 'Desi oktoniasi', '0x88163d64f7f8d1a393196c22f9a2fae216', 'Access-Reject', '2020-02-12 08:53:23'),
(21, 'Desi oktoniasi', '0x7934068c325fd2072539e91bfc41373807', 'Access-Reject', '2020-02-12 08:53:54'),
(22, 'Ta pang pas', '0x761b4268edc3be4a8d2c406a67958bb59b', 'Access-Reject', '2020-02-12 08:54:38'),
(23, 'Desioktoniasi', '0x671a8f232f703c07ecb57ab786c63979bf', 'Access-Reject', '2020-02-12 08:57:58'),
(24, 'Desioktoniasi', '0x29cf57f09b10f330e6a961f92c8ce2504d', 'Access-Reject', '2020-02-12 08:58:11'),
(25, 'tapangpass', '0x16b6c52540c78506e20bda5ecfc317e9fd', 'Access-Reject', '2020-02-12 09:38:33'),
(26, 'Moktail', '0x7a8639398e39b2cf9d56a46b80c08c1ca0', 'Access-Reject', '2020-02-12 09:43:27'),
(27, 'Moktail', '0x425b6bc59b11bce56f742a499bfafdbcd1', 'Access-Reject', '2020-02-12 11:05:53'),
(28, 'Moktail', '0xe8c9b724f2f7e49d0752734cc8300e3dd4', 'Access-Reject', '2020-02-12 11:05:56'),
(29, 'Moktail', '0x0f012bfb3f07718af699b4bcff8cea61fb', 'Access-Reject', '2020-02-12 11:06:07'),
(30, 'mocktail', '0x2bf1f3f4379c129a89cf8af58180239589', 'Access-Reject', '2020-02-12 12:48:43'),
(31, 'Dewu ngadad', '0xc0758e1642b9e79a9c590a540e8296e067', 'Access-Reject', '2020-02-13 10:21:18'),
(32, 'mohito', '0x373bb471e7f99a6a206d7bfb2ea177423b', 'Access-Reject', '2020-02-15 08:01:39'),
(33, 'Tapangpass', '0x6074cafaf0f3a06b9923253ce37dae2c54', 'Access-Reject', '2020-02-16 11:15:39'),
(34, 'Moktail', '0xdd77a3e29f03b20af7fa0edf8b898a557c', 'Access-Reject', '2020-02-16 11:34:46'),
(35, 'Moktail', '0x46f22a3b919cceabb4de69b0432c4e18b7', 'Access-Reject', '2020-02-16 11:35:10'),
(36, 'Rahmat Pornama ', '0xabe605cbdd628486e03224f678a5ab81dc', 'Access-Reject', '2020-02-18 09:55:56'),
(37, 'Rahmat Pornama ', '0x41d290feacdcbd644261a886c6c5e3ca81', 'Access-Reject', '2020-02-18 09:56:03'),
(38, 'Rahmat Pornama ', '0xb960758a7502f19d5acbe3d49839399c75', 'Access-Reject', '2020-02-18 09:56:05'),
(39, 'Bayu', '0x950ee0586dbcdac91f6767299b35d950ab', 'Access-Reject', '2020-02-18 19:32:05'),
(40, 'kuro', '0x5f61950302b7c0fcd95f767a3aa1cc8fcf', 'Access-Reject', '2020-02-20 13:36:13'),
(41, 'User ', '0x195e693165742728e91b5ddf36b635baa0', 'Access-Reject', '2020-02-21 10:50:09'),
(42, 'User ', '0x773094a2de67f7ef73a1d06f96541df9bb', 'Access-Reject', '2020-02-21 10:50:24'),
(43, 'Tampangpas', '0xbba35b35dc9bc022ca76f2d43e1ea44dbc', 'Access-Reject', '2020-02-22 06:30:35'),
(44, 'Moktail', '0x01f3251b12ad005c5c7dcecd317883043c', 'Access-Reject', '2020-02-22 13:28:16'),
(45, 'Moktail', '0x6b1279f69c53d73a92b95e652503d7c552', 'Access-Reject', '2020-02-22 13:28:38'),
(46, 'Koktail', '0xe154298e9ec1be15d77e40346585587abb', 'Access-Reject', '2020-02-22 13:35:31'),
(47, 'Moktail', '0x78ade1468b781fb54258d8bb262c8f4cab', 'Access-Reject', '2020-02-22 15:20:30'),
(48, 'TapangPassLoka', '0x4abbbb97626921484c6a1983483bed0532', 'Access-Reject', '2020-02-22 15:22:52'),
(49, 'jykGoh', '0x38c09ea047e8645e7103e3cf57c4fc8879', 'Access-Accept', '2020-03-02 15:27:42'),
(50, 'Bentar', '0x7fa3087f27f33667e41f79e1f5b4de7686', 'Access-Reject', '2020-02-24 18:26:25'),
(51, 'Moktail', '0x59bfeb9d3dae4906cb9be718f1c5aac154', 'Access-Reject', '2020-02-25 15:35:23'),
(52, 'Tapanng Passlokaka', '0x011df6fed490550ae650e1371347e5ff15', 'Access-Reject', '2020-02-25 21:02:08'),
(53, '33369', '0xe676cc0172646010b18d919ee99be61701', 'Access-Reject', '2020-02-26 01:55:34'),
(54, '33369', '0xc441081a47db22a5c1f978a537b26ff292', 'Access-Reject', '2020-02-26 01:55:58'),
(55, 'TapangPassLoka', '0xeddc77497b2519eb9fd988d659c8c2d4f9', 'Access-Reject', '2020-02-26 01:59:59'),
(56, 'TapangPassLoka', '0x16dc77497b2519eb9fd988d659c8c2d4f9', 'Access-Reject', '2020-02-26 02:00:02'),
(57, 'Mohtail', '0x69019534a91220e09cba35cc79a0757e71', 'Access-Reject', '2020-02-26 11:55:03'),
(58, 'Mohtail', '0x34a928454bbffb77d2ceacac3882626448', 'Access-Reject', '2020-02-26 11:55:24'),
(59, 'Mohtai=27l', '0xdf2c24003cc995a912661dc4de38b17cdf', 'Access-Reject', '2020-02-26 11:55:41'),
(60, 'mohtai=27l', '0xb696f5cbcad1f29df8d7a770e1b3658e90', 'Access-Reject', '2020-02-26 11:56:06'),
(61, 'muhtai=27l', '0x45fee6db972972ffea05df2fa3f140e03e', 'Access-Reject', '2020-02-26 11:56:25'),
(62, 'Moktail', '0x2789a75c09654f97ed0a12db0d9479b1ce', 'Access-Reject', '2020-02-26 11:58:25'),
(63, 'moktai=27l', '0xbc709e76d290dbfc9c6c616625c4e02ec6', 'Access-Reject', '2020-02-26 11:58:54'),
(64, 'moktel', '0xad6b1c5a8bf7d4b0ca09a97363c19c9822', 'Access-Reject', '2020-02-26 15:36:57'),
(65, 'moktel', '0x419b1e4f39a364675c83e51191241cae8a', 'Access-Reject', '2020-02-26 15:37:06'),
(66, 'moktel', '0xe5158d61bd14bca58c85fff55fe7d5eb78', 'Access-Reject', '2020-02-26 15:37:37'),
(67, 'moktel', '0x4c789ede097b2a8a0a2e8d3e8be66d9b03', 'Access-Reject', '2020-02-26 15:38:01'),
(68, 'moktel', '0xa83f7249114f4fdf600bb2601babd6671b', 'Access-Reject', '2020-02-26 15:38:17'),
(69, 'User', '0xde3f8b761679f6897ecc1a8c7d086492c4', 'Access-Reject', '2020-02-27 08:02:21'),
(70, 'User', '0x80d1e9c982d6bf10a2ae0f153a19b56083', 'Access-Reject', '2020-02-27 08:02:28'),
(71, 'Admin', '0x29d9f5d538395bcb69c424c1267882ed9f', 'Access-Reject', '2020-02-27 08:02:49'),
(72, 'jykGoh', '0xc09cad307bea734b5c8efc589014267bd2', 'Access-Reject', '2020-02-29 21:23:54'),
(73, 'jykGoh', '0xb024859a276c6314359217a845b642ed98', 'Access-Accept', '2020-03-02 21:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `radreply`
--

CREATE TABLE `radreply` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `radusergroup`
--

CREATE TABLE `radusergroup` (
  `username` varchar(64) NOT NULL DEFAULT '',
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `priority` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kuroneko', 'kuronekosan@kuro.com', NULL, '$2y$10$6aJ.MbBqzRkudWHMTJnSjuun.L8cjxI43YBqZVKKJx275/P4le1gS', 'fDdhJlERacCEwFtWJCQxFyRpOhEIPpZ96ni9h2q3za4Pht1isWCJspJ09ZIA', '2020-02-23 09:10:11', '2020-02-23 09:10:11'),
(2, 'kuronekosan', 'kuronekosan532@qmail.id', NULL, '$2y$10$649Og/Y2lODSGc3.3WxQn.elJ5cRgF8yqWf6cNOKwnNa/9Eu1TmtC', '2g1EFY6ZaEjvORGhK4aqVMsVwgcwlzXNsumFLDeQKG187aLu2btyyNgewwY7', '2020-02-25 19:31:46', '2020-02-25 19:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `wifi_log`
--

CREATE TABLE `wifi_log` (
  `id` int(11) NOT NULL,
  `log` longtext,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wifi_log`
--

INSERT INTO `wifi_log` (`id`, `log`, `created_at`) VALUES
(8, 'User mJ8ldu Berhasil dibuat! dengan Password WQ4HGF', '2020-02-29 20:45:18'),
(9, 'User mJ8ldu Berhasil dihapus!', '2020-02-29 20:45:22'),
(10, 'User qPZdOL Berhasil dibuat! dengan Password k4HIbs', '2020-02-29 20:52:52'),
(11, 'User qPZdOL Berhasil dihapus!', '2020-02-29 21:17:53'),
(13, 'Tidak ada user yang dihapus pada pengechekan 2020-03-03 22:34:41', '2020-03-03 14:34:41'),
(14, 'User jykGoh Berhasil dihapus!', '2020-03-03 15:07:50'),
(15, 'User jykGoh Berhasil dihapus!', '2020-03-03 15:18:27'),
(16, 'Tidak ada user yang dihapus pada pengechekan 2020-03-03 23:18:42', '2020-03-03 15:18:42'),
(17, 'Tidak ada user yang dihapus pada pengechekan 2020-03-03 23:18:42', '2020-03-03 15:18:42'),
(18, 'User jykGoh Berhasil dihapus!', '2020-03-03 15:20:51'),
(19, 'User jykGoh Berhasil dihapus!', '2020-03-03 15:30:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nas`
--
ALTER TABLE `nas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nasname` (`nasname`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `radacct`
--
ALTER TABLE `radacct`
  ADD PRIMARY KEY (`radacctid`),
  ADD UNIQUE KEY `acctuniqueid` (`acctuniqueid`),
  ADD KEY `username` (`username`),
  ADD KEY `framedipaddress` (`framedipaddress`),
  ADD KEY `acctsessionid` (`acctsessionid`),
  ADD KEY `acctsessiontime` (`acctsessiontime`),
  ADD KEY `acctstarttime` (`acctstarttime`),
  ADD KEY `acctinterval` (`acctinterval`),
  ADD KEY `acctstoptime` (`acctstoptime`),
  ADD KEY `nasipaddress` (`nasipaddress`);

--
-- Indexes for table `radcheck`
--
ALTER TABLE `radcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Indexes for table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Indexes for table `radpostauth`
--
ALTER TABLE `radpostauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radreply`
--
ALTER TABLE `radreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `radusergroup`
--
ALTER TABLE `radusergroup`
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wifi_log`
--
ALTER TABLE `wifi_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nas`
--
ALTER TABLE `nas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radacct`
--
ALTER TABLE `radacct`
  MODIFY `radacctid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radcheck`
--
ALTER TABLE `radcheck`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radpostauth`
--
ALTER TABLE `radpostauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `radreply`
--
ALTER TABLE `radreply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wifi_log`
--
ALTER TABLE `wifi_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
