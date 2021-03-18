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

-- Listage des données de la table click_and_collect.admin : ~0 rows (environ)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Listage des données de la table click_and_collect.client : ~3 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id_client`, `nom`, `prenom`, `password`, `email`, `adresse`, `cp`, `ville`) VALUES
	(1, 'Dupont', 'Michel', 'michel', 'micheldupont@mail.com', '1 rue test', NULL, NULL),
	(2, 'jean', 'Michel', 'jean', 'jean@mail.com', '1 rue jean', 10000, 'ville'),
	(6, 'nom', 'prenom', '$2y$10$Z02i7xTzj2FSYRXKJkc4gu.Kix2yWG89uC/L5ve9h2NllhRlLIJHC', 'test@testmail.com', 'adresse', 12, 'ville'),
	(7, NULL, NULL, '$2y$10$1xcgPMVkJlIcQ4KiaIliCuGztY86xAcdpRemA8LiXmFQ67fixIegu', NULL, NULL, NULL, NULL),
	(8, 'Client', 'un', '$2y$10$WFT0k6nizJfynboAieH.juL3i43qJaAQkDUcrp/1QDaIxhoj/1ubS', 'client1@mail.fr', 'adresse client1', 85000, 'LRSY'),
	(9, 'nom', 'prenom', '$2y$10$rUScY4/SYcaD59.haoUQ7ul6znK/e2iuJkg3qVx6XPb2gzskjRJM6', 'mail', 'adresse client1', 85000, 'LRSY');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage des données de la table click_and_collect.commande : ~0 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage des données de la table click_and_collect.produit : ~1 rows (environ)
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` (`id_produit`, `nom`, `prix`, `quantite_stock`) VALUES
	(1, 'produit', 1, NULL);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
