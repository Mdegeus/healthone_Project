-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 nov 2021 om 14:19
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
(13, 'Newton Fitness AR-790 Roeitrainer', '/img/categories/roeitrainer/r3.jpg', 1, ''),
(14, 'Hammer Pro Force Roeitrainer', '/img/categories/roeitrainer/r1.jpg', 1, 'Product beschrijving'),
(15, 'Hammer Pro Force Roeitrainer', '/img/categories/roeitrainer/r1.jpg', 1, 'Product beschrijving');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `text` text NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `date`, `name`, `email`, `text`, `rating`) VALUES
(1, 2, '2021-11-16', 'Michel De geus', 'parisensuki1@gmail.com', 'This product is one of my favorites!! i cant explaine why but it is :)', 5),
(3, 2, '2021-11-16', 'Michel De geus', 'parisensuki1@gmail.com', 'second review this time i give 3 stars', 3),
(4, 2, '2021-11-16', 'Michel De geus', 'parisensuki1@gmail.com', 'Test review', 1),
(5, 2, '2021-11-16', 'Michel De Geus', 'parisensuki1@gmail.com', '3e review test', 3),
(6, 9, '2021-11-16', 'Michel De Geus', 'parisensuki1@gmail.com', '5 star :)', 5),
(7, 12, '2021-11-16', 'RealNofakeperson', 'RealLifeLivingPerson@Life.com', 'I was hanging out and buying a treadmill but the juicy thick thighs gym bro next to me keep distracting me. He was tesring this exact model and boy oh boy this thing is bussing. I wish I could get his number and hangout with him someday tho anyway threadmill is good. ', 5),
(8, 12, '2021-11-16', 'Michel De geus', 'parisensuki1@gmail.com', 'Sir that comment is inappropriate.', 5),
(9, 9, '2021-11-16', 'ton', 'T.degeus@live.nl', 'geweldige fiets! alleen 3 uur gefietst en sta nog steeds thuis....', 5),
(10, 13, '2021-11-16', 'Michel De Geus', 'parisensuki1@gmail.com', 'Review :) ', 4),
(11, 2, '2021-11-16', 'Vera', 'Kutvantantesjaan@stinkt.nl', 'Geweldig apparaat en goede persoonlijke beleiding', 5),
(12, 2, '2021-11-18', 'wessel', 'Wezeltje4@gmail.com', 'eccht een kanker ding dit is zo bad, viel bijna uitelkaar toen ik ging gymmen. on the grind :flex:', 1);

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
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
