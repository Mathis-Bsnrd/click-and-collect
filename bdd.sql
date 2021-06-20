-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour click_and_collect
CREATE DATABASE IF NOT EXISTS `click_and_collect` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `click_and_collect`;

-- Listage de la structure de la table click_and_collect. admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table click_and_collect.admin : ~0 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage de la structure de la table click_and_collect. client
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prenom` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `adresse` varchar(50) NOT NULL DEFAULT '',
  `cp` int(11) NOT NULL DEFAULT '0',
  `ville` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table click_and_collect.client : ~0 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table click_and_collect. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `id_produit` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table click_and_collect.commande : ~0 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage de la structure de la table click_and_collect. produits
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prix` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table click_and_collect.produits : ~0 rows (environ)
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
