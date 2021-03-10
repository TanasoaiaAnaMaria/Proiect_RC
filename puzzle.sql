-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 10, 2021 la 09:46 PM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `puzzle`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `puzzle_t`
--

CREATE TABLE `puzzle_t` (
  `id` int(100) NOT NULL,
  `firma` varchar(255) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `piese` int(10) NOT NULL,
  `pret` float NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `puzzle_t`
--

INSERT INTO `puzzle_t` (`id`, `firma`, `nume`, `piese`, `pret`, `path`) VALUES
(1, 'Trefla', 'BUCHET ALBASTRU', 1000, 29.99, 'imagini/img1.png'),
(2, 'Castorland', 'Mont Marc Sacre Coeur', 3000, 70, 'imagini/img2.png'),
(3, 'Anatolian', 'Violoncelist fabulos', 1000, 44.99, 'imagini/img3.png'),
(4, 'Gold Puzzle', 'Trei marinari pe o barcă', 500, 23, 'imagini/img4.png');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `puzzle_t`
--
ALTER TABLE `puzzle_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `puzzle_t`
--
ALTER TABLE `puzzle_t`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
