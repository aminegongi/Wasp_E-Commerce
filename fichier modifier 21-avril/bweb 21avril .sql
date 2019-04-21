-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 avr. 2019 à 17:46
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonne_newsletter`
--

DROP TABLE IF EXISTS `abonne_newsletter`;
CREATE TABLE IF NOT EXISTS `abonne_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abonne_newsletter`
--

INSERT INTO `abonne_newsletter` (`id`, `Email`, `telephone`) VALUES
(1, 'amine.gongi@esprit.tn', NULL),
(2, 'goamine3@gmail.com', NULL),
(3, 'neila.gongi@mfcpole.com.tn', NULL),
(4, 'afif.gongi@mfcpole.com.tn', NULL),
(6, 'afif.gongi@mfcpole.com.tn', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` varchar(20) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `Adresse` varchar(250) NOT NULL,
  `image` varchar(500) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `NumTel` int(11) NOT NULL,
  `IDP` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `pseudo`, `mail`, `Adresse`, `image`, `passwd`, `NumTel`, `IDP`, `date`) VALUES
('1555686942', 'hsan', 'ridha.jemmali@rns.tn', 'Ben Arous', 'upload/unknown.png', '123456789', 22193299, 'undefined', '2019-04-21 17:26:20'),
('superUser', 'superAdmin', 'superAdmin', 'superAdmin', 'upload/super.png', '123456789', 0, '0', '2019-04-21 17:26:20'),
('1555867823', 'moez@dd.tn', 'oussamalaca@hotmail.fr', 'Tataouine', 'upload/arton2431.jpg', '123456789', 52659475, 'undefined', '2019-04-21 17:30:23');

-- --------------------------------------------------------

--
-- Structure de la table `agriculteur`
--

DROP TABLE IF EXISTS `agriculteur`;
CREATE TABLE IF NOT EXISTS `agriculteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agriculteur`
--

INSERT INTO `agriculteur` (`id`, `Email`, `telephone`) VALUES
(1, 'goamine3@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `banniere`
--

DROP TABLE IF EXISTS `banniere`;
CREATE TABLE IF NOT EXISTS `banniere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `espaceBanniereProjet` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `dateAjout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lienURL` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `banniere`
--

INSERT INTO `banniere` (`id`, `Nom`, `espaceBanniereProjet`, `dateDebut`, `dateFin`, `dateAjout`, `lienURL`, `description`, `image`) VALUES
(17, 'EnactusSurEScope', 'EScope', '2019-03-31', '2019-03-31', '2019-03-31 20:19:01', 'google.tn', 'ok ok ok ok ok ok ok ok ', 'Ban Enactus.png'),
(21, 'JarDrops', 'EScope', '2019-04-01', '2019-04-02', '2019-04-01 15:42:29', 'google.tn', 'jardrops jardrops', 'Ban Enactus.png'),
(20, 'JarDrops', 'JarDrops', '2019-05-01', '2019-05-09', '2019-04-01 06:26:23', 'www.google.tn', 'test test test test', 'logo_2.png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'cat'),
(2, 'cattedeux'),
(3, 'aliment'),
(4, 'agricole');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `NumTel` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `pseudo`, `mail`, `Adresse`, `image`, `passwd`, `NumTel`, `nom`, `prenom`, `date`) VALUES
('C1555785476', 'adzazd', 'zaadz@gmail.com', 'Ariana', 'upload/unknown.png', '123456789', '52659482', 'adzad', 'daaddaz', '2019-04-20'),
('C1555785372', 'tahtouh', 'ridha.jemmali@rns.tn', 'Ariana', 'upload/unknown.png', '123456789', '52659482', 'aaaa', 'aaaaa', '2019-04-19');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` text NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `type_client` varchar(100) NOT NULL,
  `prix_total` float NOT NULL,
  `paiment` varchar(100) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(900) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `espacebanniereprojet`
--

DROP TABLE IF EXISTS `espacebanniereprojet`;
CREATE TABLE IF NOT EXISTS `espacebanniereprojet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomProjet` varchar(255) NOT NULL,
  `NumProjet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `espacebanniereprojet`
--

INSERT INTO `espacebanniereprojet` (`id`, `NomProjet`, `NumProjet`) VALUES
(1, 'EScope', 12),
(2, 'JarDrops', 2);

-- --------------------------------------------------------

--
-- Structure de la table `fpersonne`
--

DROP TABLE IF EXISTS `fpersonne`;
CREATE TABLE IF NOT EXISTS `fpersonne` (
  `cin` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fpersonne`
--

INSERT INTO `fpersonne` (`cin`, `nom`, `prenom`, `mail`, `telephone`, `adresse`) VALUES
('11109542', 'Bhmed', 'zae', 'ahmed.fourati@esprit.tn', '', 'Tunisie, Tunis, 2312');

-- --------------------------------------------------------

--
-- Structure de la table `fsociete`
--

DROP TABLE IF EXISTS `fsociete`;
CREATE TABLE IF NOT EXISTS `fsociete` (
  `matricule` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `fix` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fsociete`
--

INSERT INTO `fsociete` (`matricule`, `nom`, `mail`, `mobile`, `fix`, `fax`) VALUES
('1111', 'Ahmed', 'ahmed.fourati@esprit.tn', '29903372', '29903372', '29903372'),
('11111', '', 'ahmed.fourati@esprit.tn', '29903372', '29903372', '29903372');

-- --------------------------------------------------------

--
-- Structure de la table `gouvernorat`
--

DROP TABLE IF EXISTS `gouvernorat`;
CREATE TABLE IF NOT EXISTS `gouvernorat` (
  `gov` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gouvernorat`
--

INSERT INTO `gouvernorat` (`gov`) VALUES
('Ariana'),
('Beja'),
('Ben Arous'),
('Bizerte'),
('Gabes'),
('Gafsa'),
('Jendouba'),
('Kairaouen'),
('Kassrine'),
('Kelibia'),
('Mahdia'),
('Manouba'),
('Monastir'),
('Nabeul'),
('Sfax'),
('Sidi Bouzid'),
('Siliana '),
('Soussa'),
('Tataouine'),
('Tozeur'),
('Tunis'),
('Zaghouan');

-- --------------------------------------------------------

--
-- Structure de la table `listediffusion`
--

DROP TABLE IF EXISTS `listediffusion`;
CREATE TABLE IF NOT EXISTS `listediffusion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) NOT NULL,
  `Nb_Envoi` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `listediffusion`
--

INSERT INTO `listediffusion` (`id`, `Type`, `Nb_Envoi`) VALUES
(12, 'Abonne_NewsLetter', 11),
(17, 'Agriculteur', 2);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idCommande` varchar(20) NOT NULL,
  `idClientDest` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `designation` text NOT NULL,
  `nomLivreur` varchar(20) NOT NULL,
  `dateConfirmerLiv` datetime(6) DEFAULT NULL,
  `dateDebutLiv` datetime(6) DEFAULT NULL,
  `dateFinLiv` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nomLivreur` (`nomLivreur`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `idCommande`, `idClientDest`, `etat`, `designation`, `nomLivreur`, `dateConfirmerLiv`, `dateDebutLiv`, `dateFinLiv`) VALUES
(1, '1', 'C1555682214', 'confirme', 'amine :)', 'Hammemi Transport', '2019-04-20 12:29:27.000000', NULL, NULL),
(2, '2', 'C1555682214', 'confirme', 'gg', 'DHL:(internationale)', '2019-04-20 12:37:25.000000', NULL, NULL),
(3, '3', 'C1555682214', 'confirme', 'rgeggg', 'Tunisia Express', '2019-04-20 12:40:48.000000', '2019-04-20 12:48:36.000000', '2019-06-20 12:48:36.000000'),
(4, '4', 'C1555682214', 'confirme', 'zzazaez', 'DHL:(internationale)', '2019-04-20 12:42:42.000000', NULL, NULL),
(5, '5', 'C1555682214', 'confirme', 'uk;', 'DHL:(internationale)', '2019-04-20 12:43:51.000000', '2019-04-20 12:48:36.000000', '2019-06-20 12:48:36.000000'),
(6, '6', 'C1555682214', 'livre', 'ezgrgrzg', 'DHL:(internationale)', '2019-04-20 12:45:35.000000', '2019-04-20 12:48:36.000000', '2019-05-20 12:48:51.000000'),
(26, '26', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:04:33.000000', NULL, NULL),
(27, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:04:38.000000', NULL, NULL),
(28, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:06:25.000000', NULL, NULL),
(29, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:06:49.000000', NULL, NULL),
(30, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:07:06.000000', NULL, NULL),
(31, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:07:22.000000', NULL, NULL),
(32, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:07:55.000000', NULL, NULL),
(33, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:11:44.000000', NULL, NULL),
(34, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:14:22.000000', NULL, NULL),
(35, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:14:42.000000', NULL, NULL),
(36, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:15:16.000000', NULL, NULL),
(37, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:15:29.000000', NULL, NULL),
(38, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:15:40.000000', NULL, NULL),
(39, '27', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:15:48.000000', NULL, NULL),
(40, '40', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:16:32.000000', NULL, NULL),
(41, '41', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:16:45.000000', NULL, NULL),
(42, '42', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:18:46.000000', NULL, NULL),
(43, '43', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:19:00.000000', NULL, NULL),
(44, '44', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:19:13.000000', NULL, NULL),
(45, '45', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:19:44.000000', NULL, NULL),
(46, '46', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:21:13.000000', NULL, NULL),
(47, '47', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:22:36.000000', NULL, NULL),
(48, '48', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:23:38.000000', NULL, NULL),
(49, '49', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:24:15.000000', NULL, NULL),
(50, '50', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:24:55.000000', NULL, NULL),
(51, '51', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:25:49.000000', NULL, NULL),
(52, '52', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:26:22.000000', NULL, NULL),
(53, '53', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:26:39.000000', NULL, NULL),
(54, '54', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:26:55.000000', NULL, NULL),
(55, '55', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:27:01.000000', NULL, NULL),
(56, '56', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:27:49.000000', NULL, NULL),
(57, '57', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:28:19.000000', NULL, NULL),
(58, '58', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:29:32.000000', NULL, NULL),
(59, '59', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:31:07.000000', NULL, NULL),
(60, '60', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:31:28.000000', NULL, NULL),
(61, '61', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:35:09.000000', NULL, NULL),
(62, '62', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:36:02.000000', NULL, NULL),
(63, '63', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:38:43.000000', NULL, NULL),
(64, '64', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:39:24.000000', NULL, NULL),
(65, '65', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:39:40.000000', NULL, NULL),
(66, '66', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:40:39.000000', NULL, NULL),
(67, '67', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:41:41.000000', NULL, NULL),
(68, '68', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:45:32.000000', NULL, NULL),
(69, '69', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:46:03.000000', NULL, NULL),
(70, '70', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:47:35.000000', NULL, NULL),
(71, '71', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:49:30.000000', NULL, NULL),
(72, '72', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:50:20.000000', NULL, NULL),
(73, '73', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:51:58.000000', NULL, NULL),
(74, '74', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:52:12.000000', NULL, NULL),
(75, '75', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:55:40.000000', NULL, NULL),
(76, '76', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:56:15.000000', NULL, NULL),
(77, '77', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:57:16.000000', NULL, NULL),
(78, '78', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 15:58:37.000000', NULL, NULL),
(79, '79', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:00:20.000000', NULL, NULL),
(80, '80', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:00:36.000000', NULL, NULL),
(81, '81', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:02:32.000000', NULL, NULL),
(82, '82', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:02:54.000000', NULL, NULL),
(83, '83', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:03:05.000000', NULL, NULL),
(84, '84', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:04:41.000000', NULL, NULL),
(85, '87', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:16:36.000000', NULL, NULL),
(86, '88', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:17:43.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `nom` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `adresse` varchar(1000) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`nom`, `description`, `adresse`) VALUES
('DHL:(internationale)', 'Transport internationale', 'Tunis'),
('Hammemi Transport', 'La société Hammami Transport « HT », entreprise de transport routier de marchandises, de tout premier plan implantée dans le sud de la Tunisie (Sfax)', 'Route mazel chaker Km4 Z.I. oued chaabouni 3072 Sfax'),
('Tunisia Express', 'Tunisia Express couvre 100% du territoire tunisien via des agences implantées dans 6 gouvernorats.\r\nPlus que 6 millions de livraisons réussies depuis 2010\r\nPlus que 80 employés chevronnés au service des clients', 'Zone industrielle Rades Saline 2040, Tunisie');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(100) NOT NULL,
  `ListeEnvoi` varchar(100) NOT NULL,
  `ObjetMail` varchar(100) NOT NULL,
  `MessageMail` varchar(400) NOT NULL,
  `Etat` int(11) NOT NULL,
  `DateAjout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `Libelle`, `ListeEnvoi`, `ObjetMail`, `MessageMail`, `Etat`, `DateAjout`) VALUES
(48, 'EScope Promo', 'Abonne_NewsLetter', 'Promotion sur Votre MicroScope', 'Promotion sur Votre MicroScope\r\noui oui', 1, '2019-03-31 14:57:47'),
(50, 'EScope', 'Abonne_NewsLetter', 'Test du Code', 'Test du code avec ', 1, '2019-04-01 15:01:34'),
(45, 'E-scope Promo', 'amine.gongi@esprit.tn', 'E-scope Promo', 'aaaaaaafaf', 1, '2019-03-26 22:29:39'),
(47, 'EScope', 'Abonne_NewsLetter', 'Test Nombre envoi ', 'test tes tes  s s s s s s s\r\njezfkjzfkzf', 1, '2019-03-31 14:55:49'),
(44, 'E-scope Promo11', 'Abonne_NewsLetter', 'Aaaaa', '$res[\'Type\']$res[\'Type\']', 1, '2019-03-26 20:45:45'),
(39, 'Test Mail Html', 'amine.gongi@zzzzz.com', 'Test Mail Html', '<html>\r\n<body>\r\n<div align=\"center\">\r\n<img src=\"http://www.primfx.com/mailing/banniere.png\"/>\r\n<br />\r\nJ\'ai envoyÃ© ce mail avec PHP !\r\n<br />\r\n<img src=\"http://www.primfx.com/mailing/separation.png\"/>\r\n</div>\r\n</body>\r\n</html>', 1, '2019-03-23 13:38:29'),
(49, 'Escope Promo', 'Agriculteur', 'Promotion sur Votre MicroScope', 'eeeeeeeeeee\r\neeeeeeeeeee', 1, '2019-03-31 15:06:25'),
(51, 'EScope', 'JAVA', 'Promotion sur Votre MicroScope ', 'Bonjour \r\njava java OK', 1, '2019-04-01 16:29:55'),
(54, 'Escope Promorgggggg', 'Abonne_NewsLetter', 'efzfzefzezfez', 'zefzefezefzfezfezfezfe', 0, '2019-04-20 06:31:46'),
(53, 'AmineTestYYY', 'Abonne_NewsLetter', 'test setesstestezffzaaa', 'zgezzegezezgzgeezgegzgezaaaa', 1, '2019-04-20 05:49:48');

-- --------------------------------------------------------

--
-- Structure de la table `odd`
--

DROP TABLE IF EXISTS `odd`;
CREATE TABLE IF NOT EXISTS `odd` (
  `image` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `odd`
--

INSERT INTO `odd` (`image`) VALUES
('ODD/1.png'),
('ODD/2.png'),
('ODD/3.png'),
('ODD/4.png'),
('ODD/5.png'),
('ODD/6.png'),
('ODD/7.png'),
('ODD/8.png'),
('ODD/9.png'),
('ODD/10.png'),
('ODD/11.png'),
('ODD/12.png'),
('ODD/13.png'),
('ODD/14.png'),
('ODD/15.png'),
('ODD/16.png'),
('ODD/17.png');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID_Panier` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Client` varchar(100) NOT NULL,
  `ID_Projet` varchar(100) NOT NULL,
  `ID_Produit` varchar(100) NOT NULL,
  `Quantite` int(11) NOT NULL,
  PRIMARY KEY (`ID_Panier`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `prixHT` float NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(900) NOT NULL,
  `id_projet` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `reference`, `nom`, `categorie`, `prixHT`, `prix`, `quantite`, `date`, `description`, `id_projet`) VALUES
(23, 'ref1', 'farine sans gluten', 'aliment', 5.3, 6.254, 100, '2019-04-20', 'Acorn+ vous offre une farine sans gluten 100% tunisienne', 'P1555781502'),
(24, 'ref9', 'jare', 'agricole', 10, 12, 50, '2019-04-20', 'Jarres pour irrigation', 'P1555786677');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `ID` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`ID`, `nom`, `date`, `logo`, `type`) VALUES
('P1555781502', 'AcornPlus', '2019/04/20 18:51:05', 'upload/acorn+.png', './ODD/8.png'),
('P1555786677', 'JARDROPS', '2019/04/20 18:57:57', 'upload/logo_2.png', './ODD/6.png');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livraison_ibfk_1` FOREIGN KEY (`nomLivreur`) REFERENCES `livreur` (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
