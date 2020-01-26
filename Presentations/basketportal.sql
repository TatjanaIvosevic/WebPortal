-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 08:07 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `address`, `date_time`) VALUES
(1, 'Meč Spartak - Mileševska', 'Meč se odrigrava između dva ženska košarkaška kluba, Spartaka iz Subotice i Mileševske iz Prijepolja.', 'Hala Sportova Subotica', '2020-01-24 16:00:00'),
(2, 'Meč Spartak - Tamiš', 'Košarkaška utakmica odigraće se između muških timova, Spartaka iz Subotice i Tamiša.', 'Hala Sportova Subotica', '2020-01-31 13:00:00'),
(3, 'Utakmica Spartaka i Zdravlja', 'Košarkaši Spartaka u subotu od 16 časova dočekuje ekipu \"Zdravlje\" iz Leskovca.\r\n\"Golubovi\" su proteklu godinu završili sa dve pobede, a novu su započeli ubedljivim porazom protiv ekipe koju su relativno lako savladli na otvaranju drugoligaške sezone. Spa', 'Hala Sportova', '2020-02-01 16:00:00'),
(4, 'Meč Spartak i Železničar', 'Muška selekcija Spartaka, koja se takmiči u Drugoj ligi, posle pobede nad Proleterom upisaće novu utakmicu na gostovanju u Čačku. U subotu \"golubovi\" dočekuju drugoplasiranu Slogu.', 'Čačak Hala Sportova', '2020-02-06 14:00:00'),
(5, 'SPARTAK SUBOTICA – CRVENA ZVEZDA,', 'Možda je Zvezda Vladana Milojevića u Kopenhagenu doživela emotivno pražnjenje, ostvarila najvažniji cilj, ali je svakako dovoljno jaka da u Subotici čak i sa rezervistima pokaže zube', 'Hala Sportova', '2019-08-17 20:00:00'),
(6, 'Akropolis Kup ITALIJA - SRBIJA', 'Košarkaški Srbije sinoć su bez ikakvih problema ostvarili pobedu na otvaranju Akropolis kupa protiv selekcije Turske. ', 'Grčka', '2020-03-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` double NOT NULL DEFAULT 0,
  `address` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `rating` double NOT NULL DEFAULT 0,
  `rating_total` double NOT NULL DEFAULT 0,
  `people_liked` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `image`, `title`, `description`, `status`, `address`, `latitude`, `longitude`, `rating`, `rating_total`, `people_liked`) VALUES
(1, 'assets/images/fields/bosa_milicevic.jpg', 'Studentski dom \"Bosa Milićević\"', 'Teren kod studentskog doma Bosa Milićević, na kom se održavaju studentski turniri svake godine u maju mesecu.', 1, 'Segedinski put 11', 46.101778, 19.67682, 0, 0, 0),
(2, 'assets/images/fields/prvomajska.jpg', 'Teren \"Prvomajska\"', 'Domaćin brojnih basket turnira za mlađe uzraste, gradski teren koji je otvoren  kako klubovima za letnje pripreme, tako i građanima. ', 1, 'Prvomajska 25', 46.096251, 19.667091, 0, 0, 0),
(3, 'assets/images/fields/nikola_kalinic.jpg', 'Mozzart teren “Nikola Kalinić”', 'Teren koji je renovirala \"Mozzart\" kladionica i dala mu ime po subotičkom vice svetskom šampionu Nikoli Kaliniću. ', 1, 'Park Prozivka', 46.086713, 19.676377, 0, 0, 0),
(4, 'assets/images/fields/sinalco.jpg', 'Teren \"Sinalcko\"', 'Kao promoter na otvaranju ovog terena bio je Igor Rakočević, bivši reprezentativac SCG-a.', 1, 'Park Prozivka', 46.086713, 19.676377, 0, 0, 0),
(5, 'assets/images/fields/kavez.jpg', 'Teren \"Kavez\"', 'Dobio je to ime zato što je to jedini teren u park na prozivci, koji se nalazi u kavezu i koji ima tartan podlogu. ', 1, 'Park Prozivka', 46.086713, 19.676377, 0, 0, 0),
(6, 'assets/images/fields/palic.jpg', 'Basket teren na Paliću', 'Teren koji je namenjen isključivo za igranje basketa, zbog svoje podloge i zbog toga što poseduje samo jedan koš. ', 1, 'Šetalište na Paliću', 46.098814, 19.762344, 0, 0, 0),
(7, 'assets/images/fields/novi_palic.jpg', 'Novi teren na Paliću', 'Renovirani košarkaški teren na Paliću, pored kojeg se nalaze i 2 nova terena za odbojku i fudbalski teren.', 1, 'Šetalište na Paliču', 46.098814, 19.762344, 0, 0, 0),
(8, 'assets/images/fields/deseti_oktobar.jpg', 'Osnovna škola \"10. Oktobar\"', 'Teren osnovne škole “Deseti Oktobar” poznat je po noćnom basketu koji se nekada igrao na njemu. ', 1, 'Bože Šarčevića 21', 46.097589, 19.683645, 0, 0, 0),
(9, 'assets/images/fields/sonja_marinkovic.jpg', 'OŠ \"Sonja Marinković\"', 'Teren osnovne škole “Sonja Marinković” jedan od prvih košarkaških terena u Subotici sa tartan pdlogom. Ovaj teren je potrebno renovirati!', 1, 'Jo Lajoša 78', 46.092958, 19.667366, 0, 0, 0),
(10, 'assets/images/fields/bratstvo.jpg', 'Teren \"Bratstvo\"', 'Domaćin 3x3 turnira “Basketica Aleksandrovo” koji igraju mnoge poznate ekipe, poput mlađe reprezentacije Srbije “SRBIJA U18”, “Auto kuća Sekulić” I mnoge druge.', 1, 'Sportski kompleks Bratstva', 46.06972, 19.675926, 0, 0, 0),
(11, 'assets/images/fields/jovan_jovanovic_zmaj.jpg', 'OŠ \"Jovan Jovanović Zmaj\"', 'Teren koji se nalazi na šetalištu Radijalac, otvoren je Kako za đake, te škole, tako i za građane. ', 1, 'Trg Jakoba i Komara 22', 46.103475, 19.659004, 0, 0, 0),
(12, 'assets/images/fields/majsanski_put.jpg', 'OŠ \"Majšanski put\"', 'Otvoren 2008 godine, ali se nažalost slabo održavao. Potrebno je renoviranje!!!', 1, 'Majšanski put', 46.11445, 19.672156, 0, 0, 0),
(13, 'assets/images/fields/jovan_mikic.jpg', 'OŠ \"Jovan Mikić\"', 'Nedavno obnovljen, postavljena je tartan podloga.', 1, 'Save Kovačević 27', 46.105647, 19.680037, 0, 0, 0),
(14, 'assets/images/fields/crnjanski.jpg', 'OŠ \"Miloš Crnjanski\"', 'Teren “Crnjanski” dobio je ime po tome što je pripadao osnovnoj školi “Miloš Crnjanski”. Sada teren pripada viskoškolskoj ustanovi VSOVSU. Potrebno je renoviranje!!', 1, 'Banijska 67', 46.10427, 19.682715, 0, 0, 0),
(15, 'assets/images/fields/nirvana.jpg', 'Teren \"Nirvana\"', 'Dobio je ime po tome što se nalazi u parku, pored restorana Nirvana. Teren je renoviran 2018. godine.', 1, 'Antona Aškerca 28', 46.103493, 19.685905, 0, 0, 0),
(16, 'assets/images/fields/montazni_teren.jpg', 'Montažni tereni Košarkaškog saveza Srbije', 'Montažni tereni košarkaškog saveza Srbije, koji se krajem jula meseca postavljaju, u centru grada Subotice, u okviru SRBIJA 3X3 prvenstva Srbije. Turnir je A kategorije i samim tim dolaze najbolje basketaške ekipe iz Srbije da igraju, kao što su “Komanda 3X3”, “Auto kuća Sekulić”, “Detelinara”, “Armagedon” , “SRBIJA U18” i mnoge druge. ', 1, 'Trg Cara Jovana Nenada', 46.1004, 19.665822, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `verification_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `verified`, `verification_code`) VALUES
(20, 'Natasa', 'tatjana@gmail.com', '$2y$10$Lq5DrLTVDYJIUDv9FVu1g.uQ3lJr7qOqt9OztKqKWbeKy0Hbo6xyG', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `fk_favorites_event` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `fk_favorites_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_field` FOREIGN KEY (`field_id`) REFERENCES `field` (`id`),
  ADD CONSTRAINT `fk_rating_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
