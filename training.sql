-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 mrt 2017 om 19:04
-- Serverversie: 5.7.9
-- PHP-versie: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `time` datetime(6) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(25) NOT NULL,
  `max_personen` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(20) NOT NULL,
  `password` varchar(65) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `preprovision` varchar(10) DEFAULT NULL,
  `lastname` varchar(35) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `emailaddress` varchar(40) NOT NULL,
  `hire_date` date NOT NULL,
  `salary` int(7) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `place` varchar(35) NOT NULL,
  `role` enum('instructeur','lid') NOT NULL,
  `training_id` int(9) NOT NULL,
  `registratie_id` int(9) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `training_id` (`training_id`),
  UNIQUE KEY `registratie_id` (`registratie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `payment` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `trainings`
--

DROP TABLE IF EXISTS `trainings`;
CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) NOT NULL,
  `duration` int(9) NOT NULL,
  `extra_costs` int(9) DEFAULT NULL,
  `les_id` int(9) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `les_id` (`les_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
