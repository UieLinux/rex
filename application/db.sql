-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mag 01, 2013 alle 12:03
-- Versione del server: 5.5.25
-- Versione PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `rex`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE `classi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codice` varchar(10) NOT NULL,
  `as` varchar(10) NOT NULL,
  `istituti_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `classi`
--

INSERT INTO `classi` (`id`, `codice`, `as`, `istituti_id`) VALUES
(1, '3a', '2012-2013', 1),
(2, '1b', '2012-2013', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `docenti`
--

CREATE TABLE `docenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `docenti`
--

INSERT INTO `docenti` (`id`, `nome`, `cognome`) VALUES
(1, 'Tester', 'Rossi');

-- --------------------------------------------------------

--
-- Struttura della tabella `frequentazioni`
--

CREATE TABLE `frequentazioni` (
  `studenti_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  `as` varchar(10) NOT NULL,
  PRIMARY KEY (`studenti_id`,`classi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `insegnamenti`
--

CREATE TABLE `insegnamenti` (
  `docenti_id` int(11) NOT NULL,
  `materie_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  PRIMARY KEY (`docenti_id`,`materie_id`,`classi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `insegnamenti`
--

INSERT INTO `insegnamenti` (`docenti_id`, `materie_id`, `classi_id`) VALUES
(1, 1, 1),
(1, 2, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `istituti`
--

CREATE TABLE `istituti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeistituto` varchar(100) NOT NULL,
  `indirizzo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `istituti`
--

INSERT INTO `istituti` (`id`, `nomeistituto`, `indirizzo`) VALUES
(1, 'Liceo Test', 'via Rossi 1, Savignano sul Rubicone');

-- --------------------------------------------------------

--
-- Struttura della tabella `lezioni`
--

CREATE TABLE `lezioni` (
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
-- Struttura della tabella `materie`
--

CREATE TABLE `materie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `materie`
--

INSERT INTO `materie` (`id`, `nome`) VALUES
(1, 'Matematica'),
(2, 'Fisica'),
(3, 'Latino');

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` varchar(50) NOT NULL,
  `utente_id` int(11) NOT NULL,
  `tipo_utenza` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(78) NOT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `utente_id`, `tipo_utenza`, `email`, `password`) VALUES
('0', 1, 0, 'tester@email.it', 'tester');

-- --------------------------------------------------------

--
-- Struttura della tabella `valutazioni`
--

CREATE TABLE `valutazioni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materie_id` int(11) NOT NULL,
  `studenti_id` int(11) NOT NULL,
  `docenti_id` int(11) NOT NULL,
  `valutazione` float NOT NULL,
  `data` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `valutazioni`
--

INSERT INTO `valutazioni` (`id`, `materie_id`, `studenti_id`, `docenti_id`, `valutazione`, `data`) VALUES
(1, 0, 0, 0, 5.5, 20130418),
(2, 0, 0, 0, 6.75, 20130419);
