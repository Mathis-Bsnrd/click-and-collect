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

-- Listage des données de la table click_and_collect.client : ~6 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id_client`, `nom`, `prenom`, `password`, `email`, `adresse`, `cp`, `ville`) VALUES
	(1, 'Dupont', 'Michel', 'michel', 'micheldupont@mail.com', '1 rue test', NULL, NULL),
	(2, 'jean', 'Michel', 'jean', 'jean@mail.com', '1 rue jean', 10000, 'ville'),
	(6, 'nom', 'prenom', '$2y$10$Z02i7xTzj2FSYRXKJkc4gu.Kix2yWG89uC/L5ve9h2NllhRlLIJHC', 'test@testmail.com', 'adresse', 12, 'ville'),
	(7, NULL, NULL, '$2y$10$1xcgPMVkJlIcQ4KiaIliCuGztY86xAcdpRemA8LiXmFQ67fixIegu', NULL, NULL, NULL, NULL),
	(8, 'Client', 'un', '$2y$10$WFT0k6nizJfynboAieH.juL3i43qJaAQkDUcrp/1QDaIxhoj/1ubS', 'client1@mail.fr', 'adresse client1', 85000, 'LRSY'),
	(9, 'nom', 'prenom', '$2y$10$rUScY4/SYcaD59.haoUQ7ul6znK/e2iuJkg3qVx6XPb2gzskjRJM6', 'mail', 'adresse client1', 85000, 'LRSY'),
	(10, 'Dupont', 'Jean', '', 'jeandupont@gmail.com', '1 rue jean', NULL, NULL),
	(11, 'Dupont', 'Jean', '', 'jeandupont@gmail.com', '1 rue jean', NULL, NULL),
	(12, 'Dupont', 'Jean', 'jean', 'jeandupont@gmail.com', '1 rue jean', NULL, NULL),
	(13, 'Dupont', 'Jean', '', 'jeandupont@gmail.com', '', NULL, NULL),
	(14, 'Dupont', 'Jean', '$2y$10$nkLK3wRJy5o72cJewW7SmOyKTHeKGmbEhdqJ6nES3K8obDKyv.tNS', 'jeandupont@gmail.com', '1 rue jean', 850000000, 'la roche sur yon'),
	(15, 'Oui', 'Michel', '$2y$10$8Vb6J7hw0z5.lQtqvtn9D.MLxhpEzdU4deJewx7/PiYoHqwjKGd06', 'michel@mail.com', '1 rue michel', 850000000, 'la roche sur yon'),
	(16, 'Oui', 'Michel', '$2y$10$8JvTZLtzPNk23JGGE7M0v.9wft0Hr9oV6FL1IiwAmp3/SBAqiYHWa', 'michel@mail.com', '1 rue michel', 850000000, 'la roche sur yon'),
	(17, NULL, NULL, '$2y$10$dFRlQVPZbD3mgsRNcjoQ9OuIcFwodKL2qLwFykSCT3RKGtwauVhjm', NULL, NULL, NULL, NULL),
	(18, NULL, NULL, '$2y$10$OEOESDdFkE7UJHKEil49ZO/sXMUblGjfX3JqbIc/uVx5Jz.gBVKHS', NULL, NULL, NULL, NULL),
	(19, NULL, NULL, '$2y$10$6hLHHBoQSn3b12ZWdVGuE.8nqYnDQDQcOGaANF8H79oyyO1mz7Or.', NULL, NULL, NULL, NULL),
	(20, NULL, NULL, '$2y$10$Cj42J2tXbv4Hj1yrNtIk0u2QPR4/59RJPjnyLDwCJ2TRlD7iXfvgm', NULL, NULL, NULL, NULL),
	(21, NULL, NULL, '$2y$10$9rOvTjJb0nqnXZVvEixfjOu1M2VVSVn3ZLggzTld3D3kF74J6eY2O', NULL, NULL, NULL, NULL),
	(22, NULL, NULL, '$2y$10$NAmVZMfR9F4SOsPYELqiHOgNr33rYyZsU9DF8.z/g33cFXECp6TQi', NULL, NULL, NULL, NULL),
	(23, 'Dupont', 'Jean', '$2y$10$MFWSvIFgSgNHr30o4UgqbOdO59KuLO1U27MxxNf0RkXh2awV8/vQO', 'jeandupont@gmail.com', '', 1, ''),
	(24, NULL, NULL, '$2y$10$vTLONqCqdrMDXrlLTvlp7.eOSOCl7JIroqxp4QpDDJhkqlaR8EvAe', NULL, NULL, NULL, NULL),
	(25, NULL, NULL, '$2y$10$B/Onyw3S42z1N2QrW7XmM.vT0sj4mrZiCb.gzTi1zCbi3XlErMHim', NULL, NULL, NULL, NULL),
	(26, NULL, NULL, '$2y$10$2wGRZKr3zSrZXbC3XVYQ9.2b6NyWIOBRIfRbZSQ69ZSTEEbIXSKCW', NULL, NULL, NULL, NULL),
	(27, NULL, NULL, '$2y$10$p4elEw/QfpN/6L2Yx1gK7eSf0Irr3C1vI5D.LY/6aoVWXSXbS6HLq', NULL, NULL, NULL, NULL),
	(28, NULL, NULL, '$2y$10$FiFgkq3hcsx6ooRLbWitvOiyq6TzQS6PpaqVvqO8ir94Ji.nFprGu', NULL, NULL, 0, NULL),
	(29, NULL, NULL, '$2y$10$moaVn8PZO96uN6.avni6sOpPTN/3FG6SFvJNNkjbCbTUMM3xvVZl6', NULL, NULL, 0, NULL),
	(30, 'test', 'jojo', '$2y$10$j2J2JM/7EzWw6FeQ7nmWducaCH35uuEAjnE2JOe830tb9LY7iCrAO', 'test@test.fr', '1 rue truc', 85000, 'la roche sur yon'),
	(31, NULL, NULL, '$2y$10$Gk7l7j2jz4NfuHtgITQxle1DS7vAqWvl7yBtIw0X1hjNmSMUWjhjK', NULL, NULL, 0, NULL);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage des données de la table click_and_collect.commande : ~0 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage des données de la table click_and_collect.produit : ~0 rows (environ)
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` (`id_produit`, `nom`, `prix`, `quantite_stock`) VALUES
	(1, 'produit', 1, NULL);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
