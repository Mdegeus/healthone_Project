-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2021 om 14:22
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`) VALUES
(1, 'Roeitrainer', '/img/categories/roeitrainer.jpg'),
(2, 'Crosstrainer', '/img/categories/crosstrainer.jpg'),
(3, 'Hometrainer', '/img/categories/hometrainer.jpg'),
(4, 'Loopband', '/img/categories/loopband.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `categorieId` int(225) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `categorieId`, `discription`) VALUES
(2, 'Hammer Pro Force Roeitrainer', '/img/categories/roeitrainer/r1.jpg', 1, 'Product beschrijving'),
(8, 'Tunturi Competence R20 Roeitrainer', '/img/categories/roeitrainer/r2.jpg', 1, 'Product beschrijving'),
(9, 'Crosstrainer GHx 95', '/img/categories/crosstrainer/cr1.jpg', 2, 'Product beschrijving'),
(10, 'Tunturi FitCycle 50i Ergometer', '/img/categories/hometrainer/h1.png', 3, 'Product beschrijving'),
(11, 'Loopband - Senz Sports M1000', '/img/categories/loopband/l1.jpg', 4, 'Product beschrijving'),
(12, 'Loopband - Senz Sports M1000 2', '/img/categories/loopband/l1.jpg', 4, 'Product beschrijving'),
(13, 'Newton Fitness AR-790 Roeitrainer', '/img/categories/roeitrainer/r3.jpg', 1, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t`
--

CREATE TABLE `t` (
  `id` int(11) NOT NULL,
  `startTime` varchar(225) NOT NULL,
  `endTime` varchar(225) NOT NULL,
  `day` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `t`
--

INSERT INTO `t` (`id`, `startTime`, `endTime`, `day`) VALUES
(1, '08:00', '20:00', 'Maandag'),
(2, '08:00', '20:00', 'Dinsdag'),
(3, '08:00', '20:30', 'Woensdag');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorieId` (`categorieId`);

--
-- Indexen voor tabel `t`
--
ALTER TABLE `t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `t`
--
ALTER TABLE `t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorieId`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
