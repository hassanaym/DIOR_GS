-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 11 jan. 2022 à 22:01
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `diorgs`
--

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement`
--

DROP TABLE IF EXISTS `approvisionnement`;
CREATE TABLE IF NOT EXISTS `approvisionnement` (
  `num` int(11) NOT NULL,
  `date_app` date NOT NULL,
  `id_fournisseur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `approvisionnement`
--

INSERT INTO `approvisionnement` (`num`, `date_app`, `id_fournisseur`) VALUES
(7836, '2022-01-10', 345),
(7830, '2022-01-10', 345);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(60) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=1009 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`num`, `categorie`) VALUES
(1008, 'Parfum2'),
(1006, 'Eau de toillete'),
(1005, 'Parfum');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `num` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num`, `nom`, `prenom`, `adresse`, `tel`, `email`) VALUES
(1, 'kamali', 'ilham', 'widyan aljanna safi', '0678453399', 'sdfsd@gmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num` int(11) NOT NULL,
  `adresse_livraison` varchar(100) NOT NULL,
  `date_commande` date NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num`, `adresse_livraison`, `date_commande`, `id_client`) VALUES
(2, 'JGHKJ', '2022-01-16', 1),
(534, 'HJHV', '2022-01-11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande_produit`
--

DROP TABLE IF EXISTS `commande_produit`;
CREATE TABLE IF NOT EXISTS `commande_produit` (
  `num` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`num`,`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande_produit`
--

INSERT INTO `commande_produit` (`num`, `ref`, `quantite`) VALUES
(2, 44, 6),
(2, 345, 15),
(534, 44, 2);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `num` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `tel` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`num`, `nom`, `adresse`, `specialite`, `tel`, `email`) VALUES
(345, 'dfsd', 'sdf', 'sfgsd', '453', 'df'),
(34534, 'DFQSD', 'DSFSD', 'FDSFsd', '234334', 'ssdsd');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantite_stock` int(11) NOT NULL,
  `prix_achat` float NOT NULL,
  `prix_vente` float NOT NULL,
  `categorie` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `description`, `quantite_stock`, `prix_achat`, `prix_vente`, `categorie`) VALUES
('785688798', 'KJG', 1, 1, 1, 0),
('1', 'dqsf fsdf', 1, 1, 1, 0),
('99', 'UYIU', 1, 1, 1, 1001),
('44', 'ljkgh', 1, 1, 1, 1005);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
