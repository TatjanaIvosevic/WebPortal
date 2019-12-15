-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 05:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basketportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` double NOT NULL DEFAULT 0,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `image`, `title`, `description`, `rating`, `latitude`, `longitude`) VALUES
(1, 'assets/images/fields/bosa_milicevic.jpg', 'Studentski dom \"Bosa Milićević\"', 'Teren kod studentskog doma Bosa Milićević, na kom se održavaju studentski turniri svake godine u maju mesecu.', 0, 46.101778, 19.67682),
(2, 'assets/images/fields/prvomajska.jpg', 'Teren \"Prvomajska\"', 'Domaćin brojnih basket turnira za mlađe uzraste, gradski teren koji je otvoren  kako klubovima za letnje pripreme, tako i građanima. ', 0, 46.096251, 19.667091),
(3, 'assets/images/fields/nikola_kalinic.jpg', 'Mozzart teren “Nikola Kalinić”', 'Teren koji je renovirala \"Mozzart\" kladionica i dala mu ime po subotičkom vice svetskom šampionu Nikoli Kaliniću. ', 0, 46.086713, 19.676377),
(4, 'assets/images/fields/sinalco.jpg', 'Teren \"Sinalcko\"', 'Kao promoter na otvaranju ovog terena bio je Igor Rakočević, bivši reprezentativac SCG-a.', 0, 46.086713, 19.676377),
(5, 'assets/images/fields/kavez.jpg', 'Teren \"Kavez\"', 'Dobio je to ime zato što je to jedini teren u park na prozivci, koji se nalazi u kavezu i koji ima tartan podlogu. ', 0, 46.086713, 19.676377),
(6, 'assets/images/fields/palic.jpg', 'Basket teren na Paliću', 'Teren koji je namenjen isključivo za igranje basketa, zbog svoje podloge i zbog toga što poseduje samo jedan koš. ', 0, 46.098814, 19.762344),
(7, 'assets/images/fields/novi_palic.jpg', 'Novi teren na Paliću', 'Renovirani košarkaški teren na Paliću, pored kojeg se nalaze i 2 nova terena za odbojku i fudbalski teren.', 0, 46.098814, 19.762344),
(8, 'assets/images/fields/deseti_oktobar.jpg', 'Osnovna škola \"10. Oktobar\"', 'Teren osnovne škole “Deseti Oktobar” poznat je po noćnom basketu koji se nekada igrao na njemu. ', 0, 46.097589, 19.683645),
(9, 'assets/images/fields/sonja_marinkovic.jpg', 'OŠ \"Sonja Marinković\"', 'Teren osnovne škole “Sonja Marinković” jedan od prvih košarkaških terena u Subotici sa tartan pdlogom. Ovaj teren je potrebno renovirati!', 0, 46.092958, 19.667366),
(10, 'assets/images/fields/bratstvo.jpg', 'Teren \"Bratstvo\"', 'Domaćin 3x3 turnira “Basketica Aleksandrovo” koji igraju mnoge poznate ekipe, poput mlađe reprezentacije Srbije “SRBIJA U18”, “Auto kuća Sekulić” I mnoge druge.', 0, 46.06972, 19.675926),
(11, 'assets/images/fields/jovan_jovanovic_zmaj.jpg', 'OŠ \"Jovan Jovanović Zmaj\"', 'Teren koji se nalazi na šetalištu Radijalac, otvoren je Kako za đake, te škole, tako i za građane. ', 0, 46.103475, 19.659004),
(12, 'assets/images/fields/majsanski_put.jpg', 'OŠ \"Majšanski put\"', 'Otvoren 2008 godine, ali se nažalost slabo održavao. Potrebno je renoviranje!!!', 0, 46.11445, 19.672156),
(13, 'assets/images/fields/jovan_mikic.jpg', 'OŠ \"Jovan Mikić\"', 'Nedavno obnovljen, postavljena je tartan podloga.', 0, 46.105647, 19.680037),
(14, 'assets/images/fields/crnjanski.jpg', 'OŠ \"Miloš Crnjanski\"', 'Teren “Crnjanski” dobio je ime po tome što je pripadao osnovnoj školi “Miloš Crnjanski”. Sada teren pripada viskoškolskoj ustanovi VSOVSU. Potrebno je renoviranje!!', 0, 46.10427, 19.682715),
(15, 'assets/images/fields/nirvana.jpg', 'Teren \"Nirvana\"', 'Dobio je ime po tome što se nalazi u parku, pored restorana Nirvana. Teren je renoviran 2018. godine.', 0, 46.103493, 19.685905),
(16, 'assets/images/fields/montazni_teren.jpg', 'Montažni tereni Košarkaškog saveza Srbije', 'Montažni tereni košarkaškog saveza Srbije, koji se krajem jula meseca postavljaju, u centru grada Subotice, u okviru SRBIJA 3X3 prvenstva Srbije. Turnir je A kategorije i samim tim dolaze najbolje basketaške ekipe iz Srbije da igraju, kao što su “Komanda 3X3”, “Auto kuća Sekulić”, “Detelinara”, “Armagedon” , “SRBIJA U18” i mnoge druge. ', 0, 46.1004, 19.665822);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
