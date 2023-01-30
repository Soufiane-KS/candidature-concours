-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 jan. 2023 à 18:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `candidature`
--

-- --------------------------------------------------------

--
-- Structure de la table `academic`
--

DROP TABLE IF EXISTS `academic`;
CREATE TABLE IF NOT EXISTS `academic` (
  `serie_bac` varchar(30) NOT NULL,
  `note_nationale` decimal(10,0) NOT NULL,
  `note_regional` decimal(10,0) NOT NULL,
  `mention` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `infoperso`
--

DROP TABLE IF EXISTS `infoperso`;
CREATE TABLE IF NOT EXISTS `infoperso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Date de naissance` date NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel` int(11) DEFAULT NULL,
  `situation_familiale` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vaux`
--

DROP TABLE IF EXISTS `vaux`;
CREATE TABLE IF NOT EXISTS `vaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation` varchar(40) NOT NULL,
  `logement` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
