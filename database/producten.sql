-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 mei 2024 om 15:06
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productenoverzicht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `product_id` int(100) NOT NULL,
  `product_naam` varchar(20) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_beschrijving` varchar(50) NOT NULL,
  `product_prijs` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`product_id`, `product_naam`, `product_img`, `product_beschrijving`, `product_prijs`) VALUES
(101, 'samsungphone0', 'samsungphone0.jpg', 'The newest phone of 2024', '999.99'),
(102, 'samsungphone1', 'samsungphone1.jpg', 'The second newest phone of 2024', '1009.99'),
(103, 'samsungphone2', 'samsungphone2.jpg', 'Phone 2', '890.99'),
(104, 'samsungphone3', 'samsungphone3.jpg', 'Phone third', '999.99'),
(105, 'sonytv0', 'sonytv0.jpg', 'The newest tv!', '1009.99'),
(106, 'sonytv1', 'sonytv1.jpg', 'The second newest tv of 2024!', '890.99'),
(107, 'samsungtv4', 'samsungtv4.jpg', 'With the Samsung HD colour bright.', '999.99'),
(108, 'samsungtv5', 'samsungtv5.jpg', 'The third newest tv', '1009.99'),
(109, 'lenovolaptop0', 'lenovolaptop0.jpg', 'With HD colours!', '890.99'),
(110, 'lenovolaptop1', 'lenovolaptop1.jpg', 'With dubbelscreens!', '999.99'),
(111, 'hplaptop2', 'hplaptop2.jpeg', 'the BEST laptop of the reviews!', '1009.99'),
(112, 'hplaptop3', 'hplaptop3.jpg', 'Best out of the tests!', '890.99'),
(113, 'lenovotablet0', 'lenovotablet0.jpg', 'Best tablet of 2024!', '890.99'),
(114, 'lenovotablet1', 'lenovotablet1.jpg', 'The second best of 2024.', '999.99'),
(115, 'samsungtablet2', 'samsungtablet2.jpg', 'Best out of the reviews 2023.', '1009.99'),
(116, 'samsungtablet3', 'samsungtablet3.jpg', 'Samsung newest addition', '1009.99'),
(117, 'appleipad0', 'appleipad0.jpg', 'One of Apple\'s best creative Ipads.', '999.99'),
(118, 'appleipad1', 'appleipad1.jpg', 'With the best sofwares.', '1009.99'),
(119, 'sonyheadset0', 'sonyheadset0.jpg', 'With the sofest cushions', '1009.99'),
(120, 'sonyheadset1', 'sonyheadset1.jpg', 'The blackest black', '999.99'),
(121, 'motorola4', 'motorola4.jpg', 'The second biggest phone of 2024', '1009.99'),
(122, 'motorola5', 'motorola5.jpg', 'The biggest phone of 2024', '1009.99'),
(123, 'apple5', 'apple5.jpg', 'A fast phone for bizzy people!', '999.99'),
(124, 'apple6', 'apple6.jpg', 'With 5G!', '1009.99'),
(125, 'apple7', 'apple7.jpg', 'with 6G', '1009.99'),
(126, 'xiaomi8', 'xiaomi8.jpg', 'Xiaomi 8 has 6G too!', '999.99'),
(127, 'xiaomi9', 'xiaomi9.jpg', 'with 7G', '1009.99'),
(128, 'nokia10', 'nokia10.jpg', 'The sturdiest phone!', '1009.99'),
(129, 'nokia11', 'nokia11.jpg', 'A fast and sturdy phone!', '999.99'),
(130, 'nokia12', 'nokia12.jpg', 'The fastest and sturdiest phone tested for 2024!', '1009.99'),
(131, 'sony13', 'sony13.jpg', 'With the best OLED screen', '1009.99'),
(132, 'sony14', 'sony14.jpg', 'With the best colored OLED screens!', '1009.99');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
