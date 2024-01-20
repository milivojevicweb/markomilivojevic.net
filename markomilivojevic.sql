-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 08:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markomilivojevic`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idContact` int(11) NOT NULL,
  `nameLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `datesend` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idContact`, `nameLastName`, `email`, `text`, `status`, `date`, `datesend`) VALUES
(1, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Poruka!', 1, '0000-00-00 00:00:00', '2022-11-17 00:06:08'),
(2, 'Proba Proba', 'proba@proba.com', 'Proba1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Proba', 'proba@proba.com', 'Proba6', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Proba', 'proba@proba.com', 'Proba7', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'fghfgh', 'fghfgh', 'fghfgh', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Proba Proba', 'markoczv314@gmail.com', 'Proba', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Probaa', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Marko Milivojevic', 'markoczv314@gmail.com', 'Proba', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Marko Milivojevic', 'markoczv314@gmail.com', 'adssad', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Marko Milivojevic', 'markoczv314@gmail.com', 'adssad', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Marko Milivojevic', 'test@gmail.com', 'kkkk', 0, '2024-01-10 22:37:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `idImage` int(255) NOT NULL,
  `path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idService` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`idImage`, `path`, `alt`, `idService`) VALUES
(15, '1700181650deep.jpg', 'Deep Aqua', 15),
(16, '1700353998marcoResraurant.jpg', 'Restaurant', 17),
(17, '17004338823dreamSajt.jpg', '3Dream Studio', 18),
(24, '1700182091iTech.jpg', 'iTech Store', 16),
(29, '1698107718IMG_3334.JPG', 'ddsd', 29),
(30, '17000044741699914015testtt.jpg', 'Deep Aqua', 30),
(31, '1705616956bdesign.jpg', 'BDesign', 31);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idLevel` int(11) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idLevel`, `level`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `registrationkey`
--

CREATE TABLE `registrationkey` (
  `idRegistrationKey` int(255) NOT NULL,
  `registrationKey` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrationkey`
--

INSERT INTO `registrationkey` (`idRegistrationKey`, `registrationKey`) VALUES
(1, 'sifra123');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(255) DEFAULT NULL,
  `idLevel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idService`, `name`, `text`, `link`, `idUser`, `idLevel`) VALUES
(15, 'Deep Aqua', 'Html, Css, javaScript, PHP, Laravel, Seo, MySql', 'https://deepaqua.rs', 6, 5),
(16, 'iTech Store', 'Html, Css, Js, Php, Seo, Stripe', 'Nema jos', 6, 5),
(17, 'Restaurant', 'Html, Css, JavaScript, Php, Laravel, MySql', 'Nema jos', 6, 4),
(18, '3Dream Studio', 'Html, Css, Java Script, Php, Laravel, Media Query, Seo', 'Nema jos', 6, 4),
(23, 'Pranje motora', 'Detailing motornog prostora je proces estetskog čišćenja motora automobila koji obuhvata sve vidljive i dostupne površine motornog prostora. Proces se radi sa minimalnim korišćenjem vode i sušačem kako bi i ta minimalna kolicina vode nestala!\r\n\r\n', '', 6, 5),
(29, 'ddsd', 'sdsdf', '', 6, 2),
(30, 'Deep Aqua', 'Html, Css, Js, Laravel', 'https://deepaqua.rs/', 6, 4),
(31, 'BDesign', 'tekst', 'https://deepaqua.rs/', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `token` int(255) DEFAULT NULL,
  `developer` tinyint(1) NOT NULL,
  `idUserLevel` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `name`, `lastName`, `email`, `password`, `created`, `updated`, `token`, `developer`, `idUserLevel`) VALUES
(6, 'Marko', 'Milivojevic', 'marko.milivojevic.167.17@ict.edu.rs', '4fb6f7fdae2dbc006a1d90cd0405bcc9', '2022-02-01 02:50:09', '2022-02-01 02:50:09', 1644771651, 1, 2),
(8, 'Marko', 'Milivojevic', 'markoczv314@gmail.com', 'f7741f81f9edb5fb4880bf093e66f8b5', '2022-02-06 23:16:13', '2022-02-06 23:24:52', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `idUserLevel` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`idUserLevel`, `name`) VALUES
(1, 'Korisnik'),
(2, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD KEY `idProject` (`idService`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idLevel`);

--
-- Indexes for table `registrationkey`
--
ALTER TABLE `registrationkey`
  ADD PRIMARY KEY (`idRegistrationKey`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idLevel` (`idLevel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idUserLevel` (`idUserLevel`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD PRIMARY KEY (`idUserLevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idImage` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrationkey`
--
ALTER TABLE `registrationkey`
  MODIFY `idRegistrationKey` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlevel`
--
ALTER TABLE `userlevel`
  MODIFY `idUserLevel` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE SET NULL,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`idLevel`) REFERENCES `level` (`idLevel`) ON DELETE SET NULL;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idUserLevel`) REFERENCES `userlevel` (`idUserLevel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
