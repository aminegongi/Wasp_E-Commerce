-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 27 avr. 2019 à 18:41
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abonne_newsletter`
--

INSERT INTO `abonne_newsletter` (`id`, `Email`, `telephone`) VALUES
(1, 'amine.gongi@esprit.tn', '55685313'),
(12, 'goamine3@gmail.com', '55685313');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `pseudo`, `mail`, `Adresse`, `image`, `passwd`, `NumTel`, `IDP`, `date`) VALUES
('1555686942', 'hsan', 'ridha.jemmali@rns.tn', 'Ben Arous', 'upload/unknown.png', '123456789', 22193299, 'P1555781502', '2019-04-21 17:26:20'),
('1555867823', 'moez@dd.tn', 'oussamalaca@hotmail.fr', 'Tataouine', 'upload/arton2431.jpg', '123456789', 52659475, 'undefined', '2019-04-21 17:30:23'),
('superUser', 'superAdmin', 'superAdmin', 'superAdmin', 'upload/super.png', '123456789', 0, '0', '2019-04-21 17:26:20');

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
-- Structure de la table `categorier`
--

DROP TABLE IF EXISTS `categorier`;
CREATE TABLE IF NOT EXISTS `categorier` (
  `nomCategorie` varchar(20) COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `categorier`
--

INSERT INTO `categorier` (`nomCategorie`) VALUES
('catkhou'),
('la livraison'),
('les prix'),
('performance');

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
  `profession` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `pseudo`, `mail`, `Adresse`, `image`, `passwd`, `NumTel`, `nom`, `prenom`, `date`, `profession`) VALUES
('C1555785372', 'tahtouh', 'ridha.jemmali@rns.tn', 'Ariana', 'upload/unknown.png', '123456789', '52659482', 'aaaa', 'aaaaa', '2019-04-19', NULL),
('C1555785476', 'adzazd', 'amine.gongi@esprit.tn', 'Ariana', 'upload/unknown.png', '123456789O', '52659482', 'adzad', 'daaddaz', '2019-04-20', NULL),
('C1555928466', 'fahd', 'fahd.larayedh@esprit.tn', 'Ariana', 'upload/8dab0f00339b77ef7e7c542d20800309.jpg', '123456789', '55653543', 'Fahd', 'Larayedh', '2019-04-22', 'ok'),
('C1556195151', 'k,j,j', 'hhhh@dkdd.cc', 'Ariana', 'upload/unknown.png', '123456789', '99999999', 'pomk', 'dddd', '2019-04-25', NULL),
('C1556357190', 'AMine', 'oussamalaca2@hotmail.fr', 'Ariana', 'upload/unknown.png', '123456789', '55653543', 'Amiine', 'Ahmed', '2019-04-27', NULL),
('F2434696029875504', 'TahaJemmali', 'tahajammali@hotmail.com', 'Nabeul', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2434696029875504&height=200&width=200&ext=1558885863&hash=AeTd8exKt4X3sDfu', 'FB', 'rrr', 'Jemmali', 'Taha', '2019-04-26', 'ok');

--
-- Déclencheurs `client`
--
DROP TRIGGER IF EXISTS `AjoutPointNouveClient`;
DELIMITER $$
CREATE TRIGGER `AjoutPointNouveClient` AFTER INSERT ON `client` FOR EACH ROW BEGIN
INSERT INTO pointsclients (IDClient , PointProdC) VALUES (NEW.id , 0);
END
$$
DELIMITER ;

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `reference`, `nom_client`, `type_client`, `prix_total`, `paiment`, `etat`, `date`, `description`) VALUES
(26, 'ref77|23#ref9|1#ref1|1#', 'Fahd', 'C1555928466', 14823.9, 'Paiement en Especes', 'NULL', '2019-04-24', 'NULL'),
(25, 'ref77|34#ref1|12#ref9|91#', 'Fahd', 'C1555928466', 29069.4, 'Paiement en Especes', 'NULL', '2019-04-24', 'NULL'),
(24, 'ref1|2#', 'aaaa', 'C1555785372', 12.508, 'Paiement en Especes', 'NULL', '2019-04-22', 'NULL'),
(23, 'ref1|2#ref9|9#', 'Fahd', 'C1555928466', 120.508, 'Paiement en Especes', 'NULL', '2019-04-22', 'NULL'),
(21, 'ref1|4#', 'Fahd', 'C1555928466', 600, 'Paiement en Especes', 'NULL', '2019-04-22', 'NULL'),
(22, 'ref1|4#', 'Fahd', 'C1555928466', 25.016, 'Paiement par Cheque', 'Nouvelle Commande', '2019-04-22', 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `nomProduit` varchar(20) COLLATE latin1_bin NOT NULL,
  `image` text COLLATE latin1_bin NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_client` varchar(255) COLLATE latin1_bin NOT NULL,
  `nom_livreur` varchar(20) COLLATE latin1_bin NOT NULL,
  `date_demande` datetime DEFAULT NULL,
  `id_demande` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) COLLATE latin1_bin NOT NULL,
  `etat` varchar(20) COLLATE latin1_bin NOT NULL,
  `date_traitement` datetime DEFAULT NULL,
  `id_admin` varchar(20) COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`id_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`nomProduit`, `image`, `id_commande`, `id_client`, `nom_livreur`, `date_demande`, `id_demande`, `description`, `etat`, `date_traitement`, `id_admin`) VALUES
('Amiine', '../images_demande/Captureeee.PNG', 984499999, 'C123123312a', 'N/A', '2019-04-26 06:28:47', 74, ' oououou', 'Demande non traitÃ©e', NULL, 'P1555781502'),
('none', '../images_demande/Capture dâ€™Ã©cran (4).png', 1231238, 'F2434696029875504', 'N/A', '2019-04-26 21:03:12', 75, ' azeaz', 'Demande non traitÃ©e', NULL, 'P1555781502');

-- --------------------------------------------------------

--
-- Structure de la table `dislike_produit`
--

DROP TABLE IF EXISTS `dislike_produit`;
CREATE TABLE IF NOT EXISTS `dislike_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod` varchar(255) NOT NULL,
  `id_client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dislike_produit`
--

INSERT INTO `dislike_produit` (`id`, `id_prod`, `id_client`) VALUES
(18, 'ref1', 'C1555928466');

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
('11111', 'samir', 'ahmed.fourati@esprit.tn', '29903372', '29903372', '29903372');

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
-- Structure de la table `like_produit`
--

DROP TABLE IF EXISTS `like_produit`;
CREATE TABLE IF NOT EXISTS `like_produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod` varchar(255) NOT NULL,
  `id_client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `like_produit_ibfk_1` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `like_produit`
--

INSERT INTO `like_produit` (`id`, `id_prod`, `id_client`) VALUES
(11, 'ref1', 'C1555785476'),
(48, 'ref9', 'C1555928466'),
(49, 'ref77', 'C1555928466');

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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `listediffusion`
--

INSERT INTO `listediffusion` (`id`, `Type`, `Nb_Envoi`) VALUES
(12, 'Abonne_NewsLetter', 12),
(17, 'Agriculteur', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

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
(86, '88', 'C1555682214', 'confirme', '', 'DHL:(internationale)', '2019-04-20 16:17:43.000000', NULL, NULL),
(87, '1', 'C1555785372', 'confirme', '', 'DHL:(internationale)', '2019-04-22 09:48:32.000000', NULL, NULL),
(88, '2', 'C1555785372', 'confirme', '', 'DHL:(internationale)', '2019-04-22 09:50:06.000000', NULL, NULL),
(89, '3', 'C1555785372', 'confirme', '', 'DHL:(internationale)', '2019-04-22 10:03:30.000000', NULL, NULL),
(90, '4', 'C1555785372', 'confirme', '', 'DHL:(internationale)', '2019-04-22 10:04:20.000000', NULL, NULL),
(91, '5', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:22:01.000000', NULL, NULL),
(92, '6', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:25:00.000000', NULL, NULL),
(93, '7', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:25:36.000000', NULL, NULL),
(94, '8', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:26:14.000000', NULL, NULL),
(95, '9', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:26:35.000000', NULL, NULL),
(96, '10', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:27:09.000000', NULL, NULL),
(97, '11', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:27:35.000000', NULL, NULL),
(98, '12', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:30:47.000000', NULL, NULL),
(99, '13', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:31:36.000000', NULL, NULL),
(100, '14', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:44:16.000000', NULL, NULL),
(101, '15', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:47:01.000000', NULL, NULL),
(102, '16', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:49:11.000000', NULL, NULL),
(103, '17', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:57:25.000000', NULL, NULL),
(104, '18', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 11:59:27.000000', NULL, NULL),
(105, '19', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 12:00:26.000000', NULL, NULL),
(106, '20', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 12:00:49.000000', NULL, NULL),
(107, '21', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 12:01:25.000000', NULL, NULL),
(108, '22', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 12:14:36.000000', NULL, NULL),
(109, '22', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-22 14:41:22.000000', NULL, NULL),
(110, '24', 'C1555785372', 'confirme', '', 'DHL:(internationale)', '2019-04-22 15:06:55.000000', NULL, NULL),
(111, '22', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-24 14:26:23.000000', NULL, NULL),
(112, '22', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-24 14:30:08.000000', NULL, NULL),
(113, '27', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-24 14:33:45.000000', NULL, NULL),
(114, '28', 'C1555928466', 'confirme', '', 'DHL:(internationale)', '2019-04-24 14:36:42.000000', NULL, NULL),
(116, '774', '44', 'confirme', 'Nouvelle Commande & LIVRAISON', 'DHL:(internationale)', '2019-04-26 06:10:00.000000', NULL, NULL),
(117, '7887', '4556', 'confirme', 'Nouvelle Commande & LIVRAISON', 'DHL:(internationale)', '2019-04-26 06:10:50.000000', NULL, NULL);

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
  `MessageMail` text NOT NULL,
  `Etat` int(11) NOT NULL,
  `DateAjout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

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
(54, 'Escope Promorgggggg', 'Abonne_NewsLetter', 'efzfzefzezfez', 'zefzefezefzfezfezfezfe', 1, '2019-04-20 06:31:46'),
(53, 'AmineTestYYY', 'Abonne_NewsLetter', 'test setesstestezffzaaa', 'zgezzegezezgzgeezgegzgezaaaa', 1, '2019-04-20 05:49:48'),
(55, 'test wys', 'Agriculteur', 'Aaaaa', '<p>tetsttztz</p>\r\n<p style=\"text-align: center;\">zetetztztzt</p>\r\n<p style=\"text-align: center;\"><strong>rrrrrrrrrr</strong></p>\r\n<p style=\"text-align: center;\"><em>yyyyyyyyy</em></p>\r\n<p style=\"text-align: left;\">arearazrzar</p>', 1, '2019-04-25 07:03:03'),
(56, 'EScope', 'Abonne_NewsLetter', 'efzefzefzefzefz', '<p>ezezfefzefzefz</p>', 0, '2019-04-27 16:31:41');

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
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID_Panier`, `ID_Client`, `ID_Projet`, `ID_Produit`, `Quantite`) VALUES
(60, 'C1555928466', 'P1555786677', 'ref9', 3),
(59, '2434696029875504', 'P1555781502', 'ref1', 1),
(61, 'F2434696029875504', 'P1555781502', 'ref1', 10),
(62, 'C1555928466', 'P1555781502', 'ref77', 65);

-- --------------------------------------------------------

--
-- Structure de la table `pointsclients`
--

DROP TABLE IF EXISTS `pointsclients`;
CREATE TABLE IF NOT EXISTS `pointsclients` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDClient` varchar(255) NOT NULL,
  `PointProdC` float NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDClient` (`IDClient`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pointsclients`
--

INSERT INTO `pointsclients` (`ID`, `IDClient`, `PointProdC`) VALUES
(5, 'C1556357190', 0),
(6, 'F2434696029875504', 0),
(7, 'C1555928466', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pointsproduits`
--

DROP TABLE IF EXISTS `pointsproduits`;
CREATE TABLE IF NOT EXISTS `pointsproduits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProd` int(11) NOT NULL,
  `PointProd` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProd` (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pointsproduits`
--

INSERT INTO `pointsproduits` (`id`, `idProd`, `PointProd`) VALUES
(7, 23, 54535);

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `reference`, `nom`, `categorie`, `prixHT`, `prix`, `quantite`, `date`, `description`, `id_projet`) VALUES
(23, 'ref1', 'farine sans gluten', 'aliment', 5.3, 6.254, 3, '2019-04-20', 'Acorn+ vous offre une farine sans gluten 100% tunisienne', 'P1555781502'),
(25, 'ref77', 'Amiine', 'cattedeux', 534, 640.8, -55, '2019-04-22', 'rgeggezg', 'P1555781502'),
(28, 'ref9', 'amine', 'cattedeux', 77, 92.4, 45, '2019-04-24', 'trhtrhtrhthrtrh', 'P1555786677');

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

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `categorie` varchar(20) COLLATE latin1_bin NOT NULL,
  `designation` varchar(20) COLLATE latin1_bin NOT NULL,
  `description` varchar(200) COLLATE latin1_bin NOT NULL,
  `reponse` varchar(200) COLLATE latin1_bin NOT NULL,
  `etat` int(1) NOT NULL,
  `date_s` date DEFAULT NULL,
  `date_r` date DEFAULT NULL,
  `id_client` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`designation`),
  UNIQUE KEY `designation` (`designation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`categorie`, `designation`, `description`, `reponse`, `etat`, `date_s`, `date_r`, `id_client`) VALUES
('la livraison', 'almost there', ' of course i still love you', 'Pas de reponse', 0, '2019-04-22', NULL, NULL),
('les prix', 'desigprix', ' les prix sont mal choisis', 'Pas de reponse', 0, '2019-04-22', NULL, NULL),
('catkhou', 'today we test', 'ctte desc est a propos du prix', 'Pas de reponse', 0, '2019-04-22', NULL, NULL),
('les prix', 'desig n', ' description n', 'Pas de reponse', 0, '2019-04-22', NULL, NULL),
('les prix', 'oh les prix', ' que ce que sont ces prix ?', 'Pas de reponse', 0, '2019-04-22', NULL, NULL),
('la livraison', 'prix deb', 'efafaffafaa', ' desole on ne peut pas modifier les prix', 1, '2019-04-22', '2019-04-22', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recommandation`
--

DROP TABLE IF EXISTS `recommandation`;
CREATE TABLE IF NOT EXISTS `recommandation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `date_debut` date NOT NULL,
  `id_produit` int(11) NOT NULL,
  `cible` varchar(255) NOT NULL,
  `idAdminProjet` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recommandation`
--

INSERT INTO `recommandation` (`id`, `texte`, `date_debut`, `id_produit`, `cible`, `idAdminProjet`) VALUES
(1, 'hghjbjbnjb', '2019-04-29', 25, 'ok', '1555686942');

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `todo_liste`
--

DROP TABLE IF EXISTS `todo_liste`;
CREATE TABLE IF NOT EXISTS `todo_liste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `etat` varchar(250) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `todo_liste`
--

INSERT INTO `todo_liste` (`id`, `id_admin`, `description`, `etat`, `Date`) VALUES
(3, 'superUser', 'ezgregge', 'Done', '2019-04-22 22:14:37'),
(4, 'superUser', 'geesc', 'Done', '2019-04-22 22:41:24'),
(5, 'superUser', 'egge', 'En Cours', '2019-04-22 22:41:44'),
(40, 'superUser', 'ok ok', 'En Cours', '2019-04-22 22:49:27'),
(41, '1555867823', 'ehrgegeg', 'en cours', '2019-04-24 06:35:28');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dislike_produit`
--
ALTER TABLE `dislike_produit`
  ADD CONSTRAINT `dislike_produit_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`ID`);

--
-- Contraintes pour la table `like_produit`
--
ALTER TABLE `like_produit`
  ADD CONSTRAINT `like_produit_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livraison_ibfk_1` FOREIGN KEY (`nomLivreur`) REFERENCES `livreur` (`nom`);

--
-- Contraintes pour la table `pointsclients`
--
ALTER TABLE `pointsclients`
  ADD CONSTRAINT `pointsclients_ibfk_1` FOREIGN KEY (`IDClient`) REFERENCES `client` (`ID`);

--
-- Contraintes pour la table `pointsproduits`
--
ALTER TABLE `pointsproduits`
  ADD CONSTRAINT `pointsproduits_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `todo_liste`
--
ALTER TABLE `todo_liste`
  ADD CONSTRAINT `todo_liste_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
