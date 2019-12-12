-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Février 2017 à 15:24
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `symago`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

CREATE TABLE IF NOT EXISTS `bureau` (
  `id_bureau` int(11) NOT NULL AUTO_INCREMENT,
  `nomBureau` varchar(25) DEFAULT NULL,
  `occupe` int(11) DEFAULT '0',
  `nomPersonne` varchar(250) NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_bureau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE IF NOT EXISTS `materiel` (
  `id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `code`, `nom`) VALUES
(1, '1457', 'ordinateur');

-- --------------------------------------------------------

--
-- Structure de la table `materiel_bureau`
--

CREATE TABLE IF NOT EXISTS `materiel_bureau` (
  `id_materiel` int(11) NOT NULL AUTO_INCREMENT,
  `nomAttribution` varchar(250) DEFAULT NULL,
  `materiel` varchar(255) DEFAULT NULL,
  `dateAttribution` date DEFAULT NULL,
  `dateFinAttribution` date DEFAULT NULL,
  `heureAttribution` int(11) NOT NULL,
  `heureFinAttribution` int(11) NOT NULL,
  PRIMARY KEY (`id_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `parc_auto`
--

CREATE TABLE IF NOT EXISTS `parc_auto` (
  `id_auto` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) DEFAULT NULL,
  `estAttribue` int(11) DEFAULT NULL,
  `dateArrive` date DEFAULT NULL,
  `dateAttribution` date DEFAULT NULL,
  `dateFinAttribution` date DEFAULT NULL,
  `heureArrive` int(11) DEFAULT NULL,
  `heureAttribution` int(11) DEFAULT NULL,
  `heureFinAttribution` int(11) DEFAULT NULL,
  `nature` varchar(255) DEFAULT NULL,
  `numero_chassis` varchar(255) DEFAULT NULL,
  `immatriculation` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `puissance` int(10) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `prix_aquisition` int(10) DEFAULT NULL,
  `nature_utilisation` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `structure_utilisatrice` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `localisation_materiel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`id_person`, `firstName`, `lastName`, `matricule`) VALUES
(1, 'Emile', 'Essosso Belinga', '11S15406'),
(2, 'rocco', 'emile', '69874521'),
(3, 'rocco', 'emile', '69874521'),
(4, 'rocco', 'emile', '69874521'),
(5, 'rocco', 'emile', '69874521'),
(6, 'azrazr', 'azrazr', 'zefeafe'),
(7, 'azer', 'azer', 'azer'),
(8, 'EMILE', 'essosso', '11s15401'),
(9, 'eri', 'TCHOUTE', '11S15397'),
(10, 'dzdz', 'zeze', '45478');

-- --------------------------------------------------------

--
-- Structure de la table `person_auto`
--

CREATE TABLE IF NOT EXISTS `person_auto` (
  `id_person` int(10) NOT NULL DEFAULT '0',
  `id_auto` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_person`,`id_auto`),
  KEY `id_pays` (`id_person`),
  KEY `id_ope` (`id_auto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `person_bureau`
--

CREATE TABLE IF NOT EXISTS `person_bureau` (
  `id_person` int(10) NOT NULL DEFAULT '0',
  `id_bureau` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_person`,`id_bureau`),
  KEY `id_pays` (`id_person`),
  KEY `id_ope` (`id_bureau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `person_materiel`
--

CREATE TABLE IF NOT EXISTS `person_materiel` (
  `id_person` int(10) NOT NULL DEFAULT '0',
  `id_materiel` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_person`,`id_materiel`),
  KEY `id_pays` (`id_person`),
  KEY `id_ope` (`id_materiel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `person_salle_confe`
--

CREATE TABLE IF NOT EXISTS `person_salle_confe` (
  `id_person` int(10) NOT NULL DEFAULT '0',
  `id_confe` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_person`,`id_confe`),
  KEY `id_person` (`id_person`),
  KEY `id_confe` (`id_confe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salle_conferance`
--

CREATE TABLE IF NOT EXISTS `salle_conferance` (
  `id_confe` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `heureDebut` int(11) NOT NULL,
  `heureFin` int(11) NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `raison` text NOT NULL,
  PRIMARY KEY (`id_confe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
