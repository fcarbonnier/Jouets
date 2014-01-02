-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 31 Décembre 2013 à 11:39
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bddjouets`
--
CREATE DATABASE IF NOT EXISTS `bddjouets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bddjouets`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `lib_cat` text NOT NULL,
  `photo_cat` text NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `lib_cat`, `photo_cat`) VALUES
(1, 'véhicules', ''),
(2, 'bascules,porteurs', ''),
(3, 'trains', ''),
(4, 'instruments de musique', ''),
(5, 'mobiles', ''),
(6, 'jeux traditionnels', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cli` text NOT NULL,
  `prenom_cli` text NOT NULL,
  `rue_cli` text NOT NULL,
  `codepos_cli` varchar(5) NOT NULL,
  `ville_cli` text NOT NULL,
  `tel_cli` text NOT NULL,
  `mail_cli` text NOT NULL,
  `mdp_cli` text NOT NULL,
  `DateDerCde_cli` date DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_cli`, `nom_cli`, `prenom_cli`, `rue_cli`, `codepos_cli`, `ville_cli`, `tel_cli`, `mail_cli`, `mdp_cli`, `DateDerCde_cli`) VALUES
(2, 'dulogis', 'jean', '3 rue de Marivaux', '44800', 'saint herblain', '02 40 75 12 56', 'jdulogis@orange.fr', 'toto', NULL),
(4, 'desbois', 'étienne', '5 impasse d''allos', '44220', 'coueron', '02 51 89 23 45', 'edesbois@gmail.com', 'toutou', NULL),
(5, 'chapuis', 'lisbeth', '10 rue st martin', '44000', 'nantes', '06 67 45 12 63', 'lchapuis@orange.fr', 'hotpot', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_cde` int(11) NOT NULL AUTO_INCREMENT,
  `date_cde` date NOT NULL,
  `id_cli` int(11) NOT NULL,
  PRIMARY KEY (`id_cde`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `detailscde`
--

CREATE TABLE IF NOT EXISTS `detailscde` (
  `id_cde` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `qte_detail` int(11) NOT NULL,
  `prix_detail` double NOT NULL,
  PRIMARY KEY (`id_cde`,`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `lib_prod` text NOT NULL,
  `prix_ttc_prod` decimal(10,0) NOT NULL,
  `car_prod` text NOT NULL,
  `ext_prod` text NOT NULL,
  `photo_prod` text NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `lib_prod`, `prix_ttc_prod`, `car_prod`, `ext_prod`, `photo_prod`, `id_cat`) VALUES
(1, 'cheval à bascule 1er âge', '75', 'avec arceau amovible.vendu en kit', 'jpg', '', 2),
(19, 'bus bertie', '11', 'l''autobus qui transporte les passagers à la gare', 'jpg', '', 1),
(20, 'camion de pompier', '39', 'camion en bois avec deux personnages articulés', 'jpg', '', 1),
(21, 'cheval caramel', '75', 'cheval à bascule avec protection amovible', 'jpg', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
