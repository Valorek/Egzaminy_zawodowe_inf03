-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 15, 2024 at 05:42 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wazenietirow`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokalizacje`
--

CREATE TABLE `lokalizacje` (
  `id` int(10) UNSIGNED NOT NULL,
  `ulica` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lokalizacje`
--

INSERT INTO `lokalizacje` (`id`, `ulica`) VALUES
(1, 'Ślężna'),
(2, 'Tyska'),
(3, 'Średzka'),
(4, 'Wilanowska'),
(5, 'Żmigrodzka'),
(6, 'Karkonowska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wagi`
--

CREATE TABLE `wagi` (
  `id` int(10) UNSIGNED NOT NULL,
  `lokalizacje_id` int(10) UNSIGNED NOT NULL,
  `waga` float DEFAULT NULL,
  `rejestracja` varchar(10) DEFAULT NULL,
  `dzien` date DEFAULT NULL,
  `czas` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wagi`
--

INSERT INTO `wagi` (`id`, `lokalizacje_id`, `waga`, `rejestracja`, `dzien`, `czas`) VALUES
(1, 3, 4, 'DW54U82', '2024-10-15', '17:41:29'),
(2, 1, 6, 'DW54U32', '2022-01-20', '09:49:08'),
(3, 1, 2, 'DW5T732', '2022-01-20', '09:49:08'),
(4, 2, 1, 'DWC6432', '2024-10-15', '17:41:29'),
(5, 2, 10, 'DW54U36', '2024-10-15', '17:41:29'),
(6, 3, 5, 'DWTKU32', '2024-10-15', '17:41:29'),
(7, 3, 3, 'DW54122', '2024-10-15', '17:41:29'),
(8, 4, 6, 'DW5Z452', '2024-10-15', '17:41:29'),
(9, 5, 1, 'DW54U39', '2022-01-20', '09:49:08'),
(10, 5, 8, 'DW23T32', '2022-01-20', '09:49:08'),
(11, 4, 4, 'DW512G2', '2024-10-15', '17:41:29'),
(12, 3, 5, 'DW54874', '2024-10-15', '17:41:29'),
(13, 2, 3, 'DW54X32', '2024-10-15', '17:41:29'),
(14, 6, 8, 'DW5W932', '2022-01-20', '09:49:08'),
(15, 4, 6, 'DW53R52', '2024-10-15', '17:41:29'),
(16, 5, 4, 'DW54A32', '2022-01-20', '09:49:08'),
(17, 1, 1, 'DW54S34', '2022-01-20', '09:49:08'),
(18, 3, 7, 'DW54O98', '2024-10-15', '17:41:29'),
(19, 2, 9, 'DW546T5', '2024-10-15', '17:41:29'),
(20, 2, 3, 'DW58B32', '2024-10-15', '17:41:29'),
(21, 6, 6, 'DW54N32', '2022-01-20', '09:49:08'),
(22, 5, 4, 'DW54M56', '2022-01-20', '09:49:08'),
(23, 5, 7, 'DW12345', '2024-10-15', '17:42:06');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lokalizacje`
--
ALTER TABLE `lokalizacje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wagi`
--
ALTER TABLE `wagi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokalizacje`
--
ALTER TABLE `lokalizacje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wagi`
--
ALTER TABLE `wagi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
