-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: phpmyadmin_db:3306
-- Generation Time: Mar 03, 2021 at 02:17 PM
-- Server version: 10.3.27-MariaDB-1:10.3.27+maria~focal
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_userid`
--

CREATE TABLE `cart_userid` (
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `cart_userid`
--

INSERT INTO `cart_userid` (`user_id`, `product_id`) VALUES
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `produktai`
--

CREATE TABLE `produktai` (
  `id` int(11) DEFAULT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `kategorijos_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `produktai`
--

INSERT INTO `produktai` (`id`, `pavadinimas`, `kategorijos_id`, `sub_id`) VALUES
(1, 'Riedučiai', 1, NULL),
(2, 'Dviratis', 1, NULL),
(3, 'Futbolo kamuolys', 1, NULL),
(4, 'Kiaušiniai', 2, 1),
(5, 'Sviestas', 2, 1),
(6, 'Šaldyta pica', 2, 2),
(7, 'Šaldytos daržovės', 2, 2),
(8, 'Pienas', 2, 1),
(9, 'Betonas', 3, NULL),
(10, 'Plytelių klijai', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produkto_kategorija`
--

CREATE TABLE `produkto_kategorija` (
  `ID` int(11) DEFAULT NULL,
  `kategorijos_pavadinimas` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `produkto_kategorija`
--

INSERT INTO `produkto_kategorija` (`ID`, `kategorijos_pavadinimas`) VALUES
(1, 'Laisvalaikio'),
(2, 'Maisto'),
(3, 'Statybinės');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategorija`
--

CREATE TABLE `sub_kategorija` (
  `ID` int(11) DEFAULT NULL,
  `sub_kategorijos_pavadinimas` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `sub_kategorija`
--

INSERT INTO `sub_kategorija` (`ID`, `sub_kategorijos_pavadinimas`) VALUES
(1, 'Švieži'),
(2, 'Šaldyti');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `pavarde` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `slaptazodis` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pavarde`, `login`, `slaptazodis`) VALUES
(2, 'Jonas', 'Jonaitis', 'jonas', 'jonas'),
(3, 'Petras', 'Petraitis', 'petras', 'petras'),
(4, 'Ona', 'Onaitytė', 'ona', 'ona');

-- --------------------------------------------------------

--
-- Table structure for table `vertinimas`
--

CREATE TABLE `vertinimas` (
  `user_id` int(11) DEFAULT NULL,
  `vidurkis` varchar(255) COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `vertinimas`
--

INSERT INTO `vertinimas` (`user_id`, `vidurkis`) VALUES
(1, '3.4'),
(2, '3.4'),
(2, '3.4'),
(3, '4.8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
