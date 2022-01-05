-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 jan. 2021 à 11:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `age` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `user`, `pass`, `nom`, `prenom`, `age`) VALUES
(5, 'tismail', 'cb99063bc674435f62cb44c9510eaea5', 'ISMAIL', 'TAHLI', 20),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'ADMIN', 10);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `ask` text NOT NULL,
  `asker` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `title`, `ask`, `asker`, `date`) VALUES
(10, 'Rendu visuel', 'La page dâ€™accueil du site affichera la liste des questions posÃ©es, un lien permettant de se\r\nconnecter, un lien vers la page de recherche et, pour les utilisateurs connectÃ©s, un lien vers un\r\nformulaire permettant de poser une nouvelle question.', 'admin', '2021-01-03'),
(11, 'RÃ©sumÃ© du projet', 'Projet Ã  dÃ©poser sur UniversiTICE au plus tard le dimanche 3 janvier 2021 Ã  23h59.\r\nProjet Ã  rÃ©aliser en groupe de 2 Ã©tudiants maximum.\r\nVous dÃ©poserez une archive contenant votre code ainsi quâ€™un rapport expliquant la\r\nstructuration du projet et les difficultÃ©s rencontrÃ©es.\r\nUne soutenance avec dÃ©monstration et questions est aussi prÃ©vue. La date vous sera\r\ncommuniquÃ©e ultÃ©rieurement.', 'tismail', '2021-01-03'),
(9, 'titre de la question', 'Ca est un test du formulaire question.\r\nLa page dâ€™accueil du site affichera la liste des questions posÃ©es, un lien permettant de se\r\nconnecter, un lien vers la page de recherche et, pour les utilisateurs connectÃ©s, un lien vers un\r\nformulaire permettant de poser une nouvelle question.', 'tismail', '2021-01-03');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id` int(50) NOT NULL,
  `responder` varchar(50) NOT NULL,
  `response` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `responder`, `response`, `date`) VALUES
(9, 'tismail', 'Le projet devra Ãªtre rÃ©alisÃ© en utilisant les langages et techniques Ã©tudiÃ©s en cours (HTML, CSS, JavaScript, PHP, MySQL).\r\n', '2021-01-03'),
(10, 'tismail', 'En cliquant sur une question dans la page dâ€™accueil, on arrivera sur une page qui affichera la\r\nquestion avec les rÃ©ponses proposÃ©es. Si lâ€™utilisateur est connectÃ©, il verra aussi sur cette page\r\nun formulaire permettant de proposer une rÃ©ponse Ã  la question.', '2021-01-03'),
(9, 'admin', 'Ce projet a pour but de crÃ©er un site de questions-rÃ©ponses Ã  la maniÃ¨re de StackOverflow (http://www.stackoverflow.com).', '2021-01-03'),
(10, 'admin', 'La page dâ€™accueil du site affichera la liste des questions posÃ©es, un lien permettant de se\r\nconnecter, un lien vers la page de recherche et, pour les utilisateurs connectÃ©s, un lien vers un\r\nformulaire permettant de poser une nouvelle question.', '2021-01-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
