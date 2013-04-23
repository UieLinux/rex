-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2013 at 12:25 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rex`
--

-- --------------------------------------------------------

--
-- Table structure for table `classi`
--

CREATE TABLE IF NOT EXISTS `classi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codice` varchar(10) NOT NULL,
  `as` varchar(10) NOT NULL,
  `istituto` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classi`
--

INSERT INTO `classi` (`id`, `codice`, `as`, `istituto`) VALUES
(1, '3a', '2012-2013', 0),
(2, '1b', '2012-2013', 0);

-- --------------------------------------------------------

--
-- Table structure for table `docenti`
--

CREATE TABLE IF NOT EXISTS `docenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `frequentazioni`
--

CREATE TABLE IF NOT EXISTS `frequentazioni` (
  `studenti_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  `as` varchar(10) NOT NULL,
  PRIMARY KEY (`studenti_id`,`classi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insegnamenti`
--

CREATE TABLE IF NOT EXISTS `insegnamenti` (
  `docenti_id` int(11) NOT NULL,
  `materie_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  PRIMARY KEY (`docenti_id`,`materie_id`,`classi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insegnamenti`
--

INSERT INTO `insegnamenti` (`docenti_id`, `materie_id`, `classi_id`) VALUES
(0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lezioni`
--

CREATE TABLE IF NOT EXISTS `lezioni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docenti_id` int(11) NOT NULL,
  `materie_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `argomento` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `materie`
--

CREATE TABLE IF NOT EXISTS `materie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `materie`
--

INSERT INTO `materie` (`id`, `nome`) VALUES
(1, 'Matematica');

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `id` varchar(50) NOT NULL,
  `utente_id` int(11) NOT NULL,
  `tipo_utenza` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(78) NOT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`id`, `utente_id`, `tipo_utenza`, `email`, `password`) VALUES
('0', 0, 0, 'tester@email.it', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `valutazioni`
--

CREATE TABLE IF NOT EXISTS `valutazioni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materie_id` int(11) NOT NULL,
  `studenti_id` int(11) NOT NULL,
  `docenti_id` int(11) NOT NULL,
  `valutazione` float NOT NULL,
  `data` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `valutazioni`
--

INSERT INTO `valutazioni` (`id`, `materie_id`, `studenti_id`, `docenti_id`, `valutazione`, `data`) VALUES
(1, 0, 0, 0, 5.5, 20130418),
(2, 0, 0, 0, 6.75, 20130419);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
