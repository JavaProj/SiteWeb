-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Février 2015 à 12:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `paintball`
--

-- --------------------------------------------------------

--
-- Structure de la table `ami`
--

CREATE TABLE IF NOT EXISTS `ami` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `idUtilisateur1` int(32) NOT NULL,
  `idUtilisateur2` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE IF NOT EXISTS `carte` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nomCarte` varchar(32) NOT NULL,
  `descriptionCarte` varchar(32) NOT NULL,
  `fileCarte` varchar(32) NOT NULL,
  `imageCarte` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `terrainEquipe` varchar(32) NOT NULL,
  `logoEquipe` varchar(32) NOT NULL,
  `departementEquipe` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipeutilisateur`
--

CREATE TABLE IF NOT EXISTS `equipeutilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipe` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nomEvenement` varchar(32) NOT NULL,
  `descriptionEvenement` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `numRueEvenement` int(32) NOT NULL,
  `rueEvenement` varchar(32) NOT NULL,
  `codePostalEvenement` int(32) NOT NULL,
  `villeEvenement` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `idEquipe1` int(32) NOT NULL,
  `idEquipe2` int(32) NOT NULL,
  `IdEquipeVictoire` int(32) DEFAULT NULL,
  `score` int(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participantevenement`
--

CREATE TABLE IF NOT EXISTS `participantevenement` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `idEvenement` int(32) NOT NULL,
  `idUtilisateur` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `plugin`
--

CREATE TABLE IF NOT EXISTS `plugin` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nomPlugin` varchar(32) NOT NULL,
  `descriptionPlugin` varchar(32) NOT NULL,
  `filePlugin` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `typeUtilisateur` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `nom`, `prenom`, `email`, `telephone`, `typeUtilisateur`) VALUES
(29, 'test01', '0e698a8ffc1a0af622c7b4db3cb750cc', 'test01', 'test01', 'test01', '0000000000', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
