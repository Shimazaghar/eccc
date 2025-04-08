-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 09:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(1, 'make up'),
(2, 'bags'),
(3, 'shose');

-- --------------------------------------------------------

--
-- Table structure for table `clien`
--

CREATE TABLE `clien` (
  `id_cl` int(11) NOT NULL,
  `CIN` varchar(255) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clien`
--

INSERT INTO `clien` (`id_cl`, `CIN`, `nom_prenom`, `email`, `password`, `image`) VALUES
(1, 'N444', 'shima zaghar', 'shimazaghar@gmail.com', '123', 'user2.jpeg'),
(2, 'Q588', 'aahd moujahid', 'moujahid@gmail.com', '1234', 'user3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cmd`
--

CREATE TABLE `cmd` (
  `num_cmd` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  `id_pa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_pa` int(11) NOT NULL,
  `id_pr` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  `qte_pa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_pa`, `id_pr`, `id_cl`, `qte_pa`) VALUES
(6, 5, 1, 10),
(19, 3, 1, 15),
(20, 4, 1, 3),
(21, 15, 1, 2),
(22, 4, 2, 2),
(23, 3, 2, 2),
(24, 18, 2, 5),
(25, 15, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_pr` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `qte` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_pr` varchar(255) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_pr`, `nom`, `prix`, `qte`, `image`, `description_pr`, `id_cat`) VALUES
(3, 'mascara', 12.3, 77, 'mascara.jpeg', 'Mascara is a cosmetic used to enhance the appearance of eyelashes by darkening, thickening, lengthening, and defining them. It is available in various forms such as liquid, powder, and cream', 1),
(4, 'lipliner', 30, 29, 'lipliner.jpeg', 'Lip liner is a cosmetic product designed to fill in uneven areas on the outer edges of the lips before applying lipstick to give a more even shape.', 1),
(5, 'blush', 23.21, 50, 'blush.jpeg', 'There is honesty in the blush. Our emotions are always real. So, I\'d rather be this way than one of the chess players of life', 1),
(6, 'powder', 41.2, 50, 'powder.jpeg', 'A powder is a dry solid composed of many very fine particles that may flow freely when shaken or tilted.', 1),
(7, 'concealer', 31, 50, 'concealer.jpeg', ' A concealer or color corrector is a type of cosmetic that is used to mask imperfections on the skin', 1),
(8, 'contore', 20.1, 50, 'contore.jpeg', 'Contouring is a makeup technique that uses cosmetics to define', 1),
(11, 'eyeliner', 30, 50, 'eyeliner.jpeg', 'Eyeliner is a cosmetic used to define the eyes, enhancing their appearance and altering their perceived shape', 1),
(12, 'lipglose', 12, 50, 'lipglose.jpeg', 'Lip gloss is a cosmetic used primarily to give lips a glossy luster and can also add a subtle color.', 1),
(15, 'product1', 31, 9, 'bag1.jpeg', 'moujahidaahad', 2),
(16, 'product2', 30, 34, 'bag2.jpeg', 'shopper bag', 2),
(17, 'product3', 12, 32, 'bag3.jpeg\r\n', 'satchel bad', 2),
(18, 'product4', 20.1, 16, 'bag4.jpeg', 'kajole bag', 2),
(19, 'product5', 30, 50, 'bag5.jpeg', 'summer bag', 2),
(20, 'product6', 14, 50, 'bag6.jpeg', 'moujahid bag', 2),
(21, 'product7', 31, 15, 'bag7.jpeg', 'hand bag for woman', 2),
(22, 'product8', 41.2, 21, 'bag9.jpeg', 'perfect bag', 2),
(23, 'shose1', 120.42, 50, 'shose1.jpeg', 'summer shose', 3),
(24, 'shose2', 240, 20, 'shose8.jpeg', 'louis vuitton', 3),
(25, 'shose3', 120.42, 15, 'shose2.jpeg\r\n', 'moujahid\'s shose', 3),
(26, 'shose4', 240, 21, 'shose3.jpeg', 'shima\'s shosee', 3),
(27, 'shose5', 30, 14, 'shose4.jpeg', 'shose store', 3),
(28, 'shose6', 14, 34, 'shose6.jpeg', 'dior shose', 3),
(29, 'shose7', 120.42, 32, 'shose5.jpeg', 'winter shose', 3),
(30, 'shose8', 240, 50, 'shose7.jpeg', 'girls shose', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `clien`
--
ALTER TABLE `clien`
  ADD PRIMARY KEY (`id_cl`),
  ADD UNIQUE KEY `CIN` (`CIN`);

--
-- Indexes for table `cmd`
--
ALTER TABLE `cmd`
  ADD UNIQUE KEY `cmd` (`num_cmd`),
  ADD KEY `id_pa` (`id_pa`),
  ADD KEY `id_cl` (`id_cl`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_pa`),
  ADD KEY `id_pr` (`id_pr`),
  ADD KEY `id_cl` (`id_cl`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_pr`),
  ADD KEY `id_cat` (`id_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clien`
--
ALTER TABLE `clien`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_pa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmd`
--
ALTER TABLE `cmd`
  ADD CONSTRAINT `cmd_ibfk_1` FOREIGN KEY (`id_pa`) REFERENCES `panier` (`id_pa`),
  ADD CONSTRAINT `cmd_ibfk_2` FOREIGN KEY (`id_cl`) REFERENCES `clien` (`id_cl`);

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `produit` (`id_pr`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_cl`) REFERENCES `clien` (`id_cl`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
