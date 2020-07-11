-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2020 at 12:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `roomId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `roomId`, `userId`, `arrival`, `departure`) VALUES
(1, 3, 3, '2020-07-19', '2020-08-25'),
(2, 5, 3, '2020-06-30', '2020-07-12'),
(3, 1, 9, '2020-10-25', '2020-11-12'),
(10, 1, 3, '2020-06-04', '2020-08-04'),
(11, 1, 1, '2020-06-08', '2020-09-08'),
(14, 3, 3, '2020-06-04', '2020-09-04'),
(26, 3, 12, '2020-07-01', '2020-08-06'),
(27, 1, 2, '2020-07-08', '2020-07-14'),
(37, 4, 3, '2020-07-16', '2020-07-20'),
(38, 5, 12, '2020-07-14', '2020-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` char(15) NOT NULL,
  `description` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomName`, `description`) VALUES
(1, 'Aenean lobortis', 'In eu nibh rhoncus dolor cursus consequat vitae ac metus.'),
(2, 'Fermentum arcu', 'Aliquam sit amet sagittis nibh. Nullam feugiat quis nisi eget vehicula.'),
(3, 'Phasellus tellu', 'Nullam in enim vel felis condimentum bibendum. Nulla gravida ac lectus eu placerat.'),
(4, 'Nullam lacinia', 'Sit amet, consectetur adipisicing elit. Esse hic, eos delectus fugiat at aperiam velit sapiente.'),
(5, 'Etiam eu', 'Corrupti, quaerat perspiciatis sequi voluptatum quibusdam debitis nihil placeat enim, quisquam.'),
(6, 'Maecenas non to', 'Laboriosam incidunt dignissimos fuga doloribus quidem sit ipsa aperiam iste neque corrupti esse.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` char(255) NOT NULL,
  `email` char(200) NOT NULL,
  `tel` int(19) DEFAULT NULL,
  `streetName` char(120) DEFAULT NULL,
  `postalCode` int(40) DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `rol` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `email`, `tel`, `streetName`, `postalCode`, `city`, `country`, `rol`) VALUES
(1, 'rogelia', 'rogelia@europa.eu', 618996633, 'piruleta', 78965, 'Pretoria', 'South Africa', 'admin'),
(2, 'macario', 'macario@europa.eu', 618552233, 'Rue 13 del Percebe', 20100, 'Ireland', 'Dublin', 'admin'),
(3, 'rockefeller', 'rockefeller@europa.eu', 636636636, 'Toma moreno 13', 45987, 'Yakarta', 'Indonesia', 'client'),
(4, 'monchito', 'monchito@europa.eu', 618774455, 'eusko label', 52677, 'Roma', 'Italia', 'client'),
(9, 'JLMoreno', 'moreno@europa.eu', 636999636, 'galicia calidade', 456, 'Vigo', 'Galiza', 'client'),
(11, 'antonioCosta', 'antonio@costa.pt', 456789, 'Imago mundi', 45689, 'Lisbon', 'Portugal', 'client'),
(12, 'baezFernando', 'Fernando@baez.ve', 456123789, 'calle piruletilla', 45689, 'San Félix de Guayana', 'Venezuela', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_reservations_rooms` (`roomId`),
  ADD KEY `FK_reservations_users` (`userId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_reservations_rooms` FOREIGN KEY (`roomId`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `FK_reservations_users` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
