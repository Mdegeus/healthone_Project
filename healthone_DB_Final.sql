-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 mrt 2022 om 21:00
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
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `enabled`, `title`, `image`) VALUES
(1, 1, 'Roeitrainer', '/img/categories/roeitrainer.jpg'),
(2, 1, 'Crosstrainer', '/img/categories/crosstrainer.jpg'),
(3, 1, 'Hometrainer', '/img/categories/hometrainer.jpg'),
(4, 1, 'Loopband', '/img/categories/loopband.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `categorieId` int(225) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `enabled`, `title`, `image`, `categorieId`, `discription`) VALUES
(2, 1, 'Hammer Pro Force Roeitrainer', '/img/categories/roeitrainer/r1.jpg', 1, 'Product beschrijving'),
(8, 1, 'Tunturi Competence R20 Roeitrainer', '/img/categories/roeitrainer/r2.jpg', 1, 'Product beschrijving'),
(9, 1, 'Crosstrainer GHx 95', '/img/categories/crosstrainer/cr1.jpg', 2, 'Product beschrijving'),
(10, 1, 'Tunturi FitCycle 50i Ergometer', '/img/categories/hometrainer/h1.png', 3, 'Product beschrijving'),
(11, 1, 'Loopband - Senz Sports M1000', '/img/categories/loopband/l1.jpg', 4, 'Product beschrijving'),
(12, 1, 'Loopband - Senz Sports M1000 2', '/img/categories/loopband/l1.jpg', 4, 'Product beschrijving'),
(13, 1, 'Newton Fitness AR-790 Roeitrainer', '/img/categories/roeitrainer/r3.jpg', 1, ''),
(14, 1, 'Hammer Pro Force Roeitrainer', '/img/categories/roeitrainer/r1.jpg', 1, 'Product beschrijving');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` int(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `text` text NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `date`, `text`, `rating`) VALUES
(13, 3, 2, '2022-03-06', 'test', 5);

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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL,
  `profilepicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `profilepicture`) VALUES
(1, 'admin', 'parisensuki16@gmail.com', '$2y$10$9Jmu4NA02oqFm/CZdSYMO.eQNVXNok0cmUpiBqJAeashzsNnoy3XW', '0000-00-00', ''),
(3, 'Michel', 'parisensuki1@gmail.com', '$2y$10$O5px1npCfnyBnGy0wBfuyO.vSaLpKtwez8WtD80yNGabeGBp/D8xm', '0000-00-00', '');

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
  ADD KEY `categorie_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `t`
--
ALTER TABLE `t`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `t`
--
ALTER TABLE `t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorieId`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
