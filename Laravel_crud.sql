-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2018 at 05:56 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `birthdate`, `gender`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tutuian Mihai', 'Mihai', 'Tutuian', '1995-03-06', 1, 'tutuianmihainarcis@gmail.com', '$2y$10$8Xk2Bw5KpkDxxPNL3YryzuQsPyWFjsSEYqpRxMVWIccwJAe99wAOG', 'rJ0DOBT0izdhX66JFAwqSfIP30fiGUFdlN9H18vYwew59yCfnsAbLqXxz7t7', '2018-06-06 17:01:57', '2018-06-06 17:01:57'),
(2, 'Tutuian Bogdan', 'Bogdan', 'Tutuian', '2000-01-17', 1, 'tutuian.bogdan@gmail.com', '$2y$10$jGxlWhIatJe57GwQWABexu/4UnmdvdXkTdZWikzHCcpOUDSd/8mm2', 'tKgGo2tKdZb0fy9qCUUofik8zI6nptNFERAf7DmTvKGXg7t8O9lGSkWwYTtf', '2018-06-07 20:24:00', '2018-06-07 20:24:00'),
(3, 'Tutuian ion', 'Ion', 'Tutuian', '1939-11-05', 1, 'tutuian.ion@gmail.com', '$2y$10$7HV03vP83hf.ZTWNWWHpKOWvGxslI1ahqVc2pDTd2buhmylEJNLpq', 'Mh8JeMltxaIqxbhsSPCJFsR0fYgMg08KPGIeG6VWXJYTQn7Osz9uQfCZaKGb', '2018-06-07 21:14:23', '2018-06-07 21:14:23'),
(4, 'Tutuian Octavian', 'Octavian', 'Tutuian', '1964-05-21', 1, 'tutuianoctavian@yahoo.com', '$2y$12$38PHegotooDKFBY48iRHwOSQj1iK1e3lHO.rVix9ksNDyzGO5qjoy', 'dlxINIvxmXlbyY1Oj8ODTYfgPqfVUaCtJGpJGRDLLc7mxglYV83i9j4ensXu', '2018-06-07 21:00:00', NULL),
(16, 'ion gigi', 'ion', 'gigi', '1995-12-11', 1, 'ion.gigi@yahoo.com', '$2y$10$/quFb8NBI5QPLt1PumFkiewacN.FjOoyrhTRRcPX5V6LJZNpiYARq', NULL, '2018-06-08 21:00:00', NULL),
(19, 'Tes Laravel', 'Tes', 'Laravel', '1995-12-11', 1, 'laravel@gmail.com', '$2y$10$5Rgag9KKUCAw93VrihS88OMEt41dqx2LrdaC32aICxnfOOmF7Eow.', NULL, '2018-06-08 21:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
