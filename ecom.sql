-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2017 at 12:39 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastpassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inscriptiondate` datetime NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `lastpassword`, `inscriptiondate`, `code`, `customer_id`) VALUES
(1, 'tounsi.med@serveur1.com', '123456', '12345', '2017-02-01 00:00:00', '354354321353453544', 1),
(2, 'ahmed.yazid@serveur1.com', '147258', '14725', '2017-01-18 00:00:00', '3544467454354', 2);

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `showphone` tinyint(1) NOT NULL,
  `nbview` smallint(6) NOT NULL,
  `alert` smallint(6) DEFAULT NULL,
  `datecreate` datetime NOT NULL,
  `dateedit` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `content`, `price`, `brand`, `state`, `category_id`, `showphone`, `nbview`, `alert`, `datecreate`, `dateedit`, `published`, `customer_id`) VALUES
(1, 'télé LED', 'télé LED 40\" Full HD,1HDMI,2USB,...', '300', 'samsung', 'utilisé depuis 5 ans', 2, 1, 10, 0, '2017-01-25 02:11:33', '0000-00-00 00:00:00', 1, 2),
(2, 'smartphone', 'telphone en bonne etat, ecran 5\", android4.2, ecran frontale 3mega, ecran erriere 8mega, 1giga memoire RAM, 16mega memoire.', '23', 'huawei', 'bonne', 1, 1, 6, 0, '2016-12-30 08:33:09', '0000-00-00 00:00:00', 0, 1),
(3, 'vetements bébé', 'ensemble de vetement bébé sexe masculin age 2 mois', '20', 'chicco+zen+zara', 'bonne', 10, 1, 0, 1, '2017-01-14 16:50:00', '0000-00-00 00:00:00', 0, 2),
(4, 'jhgojgo', 'hjkgkgkp', '995', 'uyyfoygoiy', '', 1, 0, 0, 0, '2017-02-15 19:17:16', NULL, 1, 8),
(7, 'titre2', 'description2', '98744', 'brand2', 'usé', 1, 0, 1, 0, '2017-02-17 17:57:21', NULL, 1, 11),
(8, 'ggghhh', 'koplklkml', '1', 'kjhjh', 'usé', 2, 1, 0, 0, '2017-02-18 19:41:42', NULL, 1, 12),
(10, 'yujyu', 'yujyuuu', '84', 'hgyhyfgb', 'usé', 1, 0, 0, 0, '2017-02-18 19:49:37', NULL, 1, 14),
(11, 'yujyu', 'yujyuuu', '84', 'hgyhyfgb', 'usé', 1, 0, 0, 0, '2017-02-18 19:49:45', NULL, 1, 15),
(14, 'lkjlkj', 'fghhgfh', '555', 'kjhkj', 'usé', 3, 0, 0, 0, '2017-02-18 20:00:26', NULL, 1, 18),
(15, 'lkjlkj', 'fghhgfh', '555', 'kjhkj', 'usé', 3, 0, 0, 0, '2017-02-18 20:00:30', NULL, 1, 19),
(17, 'fdgdft', 'dfhgdhd', '555', 'dfghfg', 'usé', 1, 0, 0, 0, '2017-02-18 23:22:09', NULL, 1, 21),
(18, 'ggg', 'kk', '555', 'ttt', 'usé', 1, 0, 1, 0, '2017-02-18 23:50:32', NULL, 1, 22),
(19, 'ttti', 'des', '888', 'mar', 'usé', 1, 0, 0, 0, '2017-02-18 23:55:47', NULL, 1, 23),
(20, 'iii', 'ttt', '88', 'pp', 'usé', 1, 0, 0, 0, '2017-02-19 07:30:40', NULL, 1, 24),
(21, 'ssss', 's2', '2', 'sss', 's', 1, 0, 0, 0, '2017-02-19 16:33:13', NULL, 1, 25),
(22, 'xxxxxx', 'hhh', '55', 'kkk', 'pppppp', 1, 0, 0, NULL, '2017-02-19 19:51:55', NULL, 1, 33),
(23, 'xxxxxx', 'hhh', '55', 'kkk', 'pppppp', 1, 0, 1, NULL, '2017-02-19 19:52:44', NULL, 1, 34);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `longname`) VALUES
(1, 'mobiles', 'Mobiles'),
(2, 'electromenagers', 'Électroménagers'),
(3, 'cuisine', 'Cuisine'),
(4, 'loisirs', 'Livres, Sports & Loisirs'),
(5, 'vetements', 'Vêtements'),
(6, 'jardin', 'Jardinage & Bricolage'),
(7, 'autres', 'Autres'),
(8, 'meubles', 'Meubles'),
(9, 'beaute', 'Accessoires & Beauté'),
(10, 'bebe', 'Bébé & Puériculture');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `lnamecust` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fnamecust` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telcust` int(11) DEFAULT NULL,
  `governate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `lnamecust`, `fnamecust`, `telcust`, `governate_id`) VALUES
(1, 'tounsi', 'med', 223333444, 1),
(2, 'ahmed', 'yazid', 11444777, 2),
(8, 'hjgh', 'uygoyg', 6546545, 1),
(9, 'hjgh', 'uygoyg', 6546545, 1),
(10, 'gha', 'yas', 888888, 8),
(11, 'hjgjlhg', 'j!kjhh', 5888787, 5),
(12, 'ghgkjh', 'jnknhjkl', 0, 3),
(13, 'ghgkjh', 'jnknhjkl', 0, 3),
(14, 'dfvd', 'd875685', 58858, 1),
(15, 'dfvd', 'd875685', 58858, 1),
(16, 'klhjjh', 'hbkjj', 88, 1),
(17, 'klhjjh', 'hbkjj', 88, 1),
(18, 'khkjhl', 'hjghjk', 545, 3),
(19, 'khkjhl', 'hjghjk', 545, 3),
(20, 'sdfd', 'dfgqfd355', 5555, 1),
(21, 'sdfd', 'dfgqfd355', 5555, 1),
(22, 'lll', 'rrr', 888, 1),
(23, 'nommmmmmmmmmm', 'prennnnnnnn', 111111, 1),
(24, 'gg', 'ss', 778, 1),
(25, 'aa', 'qq', 111, 1),
(33, 'ccc', 'sss', 888, 1),
(34, 'ccc', 'sss', 888, 1);

-- --------------------------------------------------------

--
-- Table structure for table `governate`
--

CREATE TABLE `governate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `governate`
--

INSERT INTO `governate` (`id`, `name`) VALUES
(1, 'Mednine'),
(2, 'Tataouine'),
(3, 'Gabes'),
(4, 'Sfax'),
(5, 'Mahdia'),
(6, 'Mounastir'),
(7, 'Sousse'),
(8, 'Nabel'),
(9, 'Tunis'),
(10, 'Bizerte');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advert_id` int(11) NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7D3656A49395C3F3` (`customer_id`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_535DF13D12469DE2` (`category_id`),
  ADD KEY `IDX_535DF13D9395C3F3` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_81398E09666E3094` (`governate_id`);

--
-- Indexes for table `governate`
--
ALTER TABLE `governate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_16DB4F89D07ECCB6` (`advert_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `governate`
--
ALTER TABLE `governate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_535DF13D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_535DF13D9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_81398E09666E3094` FOREIGN KEY (`governate_id`) REFERENCES `governate` (`id`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `FK_16DB4F89D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `advert` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
