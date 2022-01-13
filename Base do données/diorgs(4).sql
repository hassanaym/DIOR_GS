-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 13 jan. 2022 à 20:33
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
(1, '2022-01-12', 1),
(2, '2022-01-12', 2),
(3, '2022-01-12', 4),
(4, '2022-01-12', 2),
(5, '2022-01-12', 3),
(55, '2021-12-27', 1);

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement_produit`
--

DROP TABLE IF EXISTS `approvisionnement_produit`;
CREATE TABLE IF NOT EXISTS `approvisionnement_produit` (
  `num` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`ref`,`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `approvisionnement_produit`
--

INSERT INTO `approvisionnement_produit` (`num`, `ref`, `quantite`) VALUES
(1, 2, 10);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(60) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`num`, `categorie`) VALUES
(1008, 'Parfum2'),
(1006, 'Eau de toillete'),
(1005, 'Parfum'),
(1012, 'Parfum3');

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
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num`, `nom`, `prenom`, `adresse`, `tel`, `email`) VALUES
(1, 'NAHID', 'ABDELLAH', 'SAFI', '0745672200', 'nahid@gmail.com'),
(2, 'SAADI', 'FATIMA', 'CASA', '0647349090', 'saadi@gmail.com'),
(3, 'MAHDAOUI', 'AYOUB', 'AGADIR', '0700187923', 'mahdaoui@gmail.com'),
(4, 'TAWJI', 'IKRAM', 'CASA', '0645454567', 'tawji@gmail.com');

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
(1, 'SAFI', '2022-01-12', 1),
(2, 'AGADIR', '2022-01-12', 3),
(3, 'FES', '2022-01-12', 3),
(4, 'TANGER', '2022-01-12', 4),
(10, 'ELJADIDA', '2022-01-06', 3);

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
(1, 3, 11);

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
(1, 'DAHBI', 'SAFI', 'PARFUM', '0660606034', 'dahbi@gmail.com'),
(2, 'SAMAR', 'AGADIR', 'PARFUM', '0745637788', 'samar@gmail.com'),
(3, 'LARBI', 'TETOUAN', 'PARFUM', '0623459866', 'larbi@gmail.com'),
(4, 'TAJ', 'SAFI', 'PARFUM', '0645452378', 'taj@gmail.com');

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
  `categorie` int(50) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `description`, `quantite_stock`, `prix_achat`, `prix_vente`, `categorie`) VALUES
('1', 'Parfum1', 21, 37, 44, 1005),
('2', 'Parfum2', 10, 44, 63, 1008),
('3', 'Parfum3', 22, 100, 140, 1008),
('4', 'Parfum4', 9, 74, 80, 1006),
('5', 'Parfum5', 130, 300, 500, 1006),
('6', 'Produit1', 12, 10, 20, 1005);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `login` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`login`, `pwd`) VALUES
('aya', 'aya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
