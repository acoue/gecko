-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 12 Octobre 2016 à 23:09
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `gecko`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'BENJAMIN'),
(4, 'CADET'),
(14, 'EQUIPES EXCELLENCE'),
(11, 'EQUIPES HONNEURS FRANCE'),
(15, 'EQUIPES HONNEURS REGION'),
(3, 'ESPOIR'),
(5, 'EXCELLENCES FEMMES'),
(10, 'EXELLENCES HOMMES'),
(12, 'HONNEURS'),
(7, 'JUNIOR'),
(8, 'KYU FEMMES'),
(9, 'KYU HOMMES'),
(2, 'MINIME'),
(13, 'SAMOURAI');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `region_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `region_id`) VALUES
(1, '-', 1),
(3, 'JJKH', 17),
(4, 'KENDO SAINT BRIEUX', 5),
(5, 'BUDOKAN ANGERS', 17),
(7, 'SAMOURAI 2000', 17),
(8, 'KETSUGO', 17),
(9, 'AME AGARU', 17),
(10, 'CERCLE PAUL BERT', 5),
(11, 'CHANTEPIE', 5),
(12, 'DOJO NANTAIS', 17),
(13, 'JKCF', 17),
(14, 'KC BREST', 5),
(15, 'KCSB', 5),
(16, 'KICNIORT', 19),
(17, 'PLDLORIENT', 5),
(18, 'POITIERS', 19),
(19, 'QUIBERON', 5),
(20, 'QUIMPER', 5),
(21, 'SAINT NAZAIRE', 5),
(22, 'SHODOKAN', 17),
(23, 'ST NAZAIRE', 5),
(24, 'ASGPMHAVRE', 14);

-- --------------------------------------------------------

--
-- Structure de la table `combat_poules`
--

CREATE TABLE `combat_poules` (
  `id` int(11) NOT NULL,
  `poule` int(2) NOT NULL,
  `ordre` int(1) NOT NULL,
  `licencie1` int(11) NOT NULL,
  `licencie2` int(11) NOT NULL,
  `resultat_rouge` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `resultat_blanc` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `vainqueur` int(11) DEFAULT NULL,
  `competition_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `combat_poules`
--

INSERT INTO `combat_poules` (`id`, `poule`, `ordre`, `licencie1`, `licencie2`, `resultat_rouge`, `resultat_blanc`, `vainqueur`, `competition_id`) VALUES
(14, 1, 1, 171, 297, NULL, NULL, NULL, 1),
(15, 1, 2, 171, 246, NULL, NULL, NULL, 1),
(16, 1, 3, 297, 246, NULL, NULL, NULL, 1),
(17, 2, 1, 169, 281, NULL, NULL, NULL, 1),
(18, 2, 2, 169, 315, NULL, NULL, NULL, 1),
(19, 2, 3, 281, 315, NULL, NULL, NULL, 1),
(20, 3, 1, 312, 257, NULL, NULL, NULL, 1),
(21, 3, 2, 295, 300, NULL, NULL, NULL, 1),
(22, 3, 3, 312, 300, NULL, NULL, NULL, 1),
(23, 3, 4, 312, 295, NULL, NULL, NULL, 1),
(24, 3, 5, 257, 295, NULL, NULL, NULL, 1),
(25, 3, 6, 257, 300, NULL, NULL, NULL, 1),
(26, 4, 1, 290, 280, NULL, NULL, NULL, 1),
(27, 4, 2, 308, 279, NULL, NULL, NULL, 1),
(28, 4, 3, 290, 279, NULL, NULL, NULL, 1),
(29, 4, 4, 290, 308, NULL, NULL, NULL, 1),
(30, 4, 5, 280, 308, NULL, NULL, NULL, 1),
(31, 4, 6, 280, 279, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `competitions`
--

CREATE TABLE `competitions` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_competition` date NOT NULL,
  `lieux` varchar(100) DEFAULT NULL,
  `description` text,
  `selected` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `catagorie_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competitions`
--

INSERT INTO `competitions` (`id`, `name`, `date_competition`, `lieux`, `description`, `selected`, `created`, `modified`, `catagorie_id`) VALUES
(1, 'Open de France - Individuel', '2013-02-09', 'Levallois', 'test de description', 1, '2015-02-17 14:28:04', '2016-10-05 22:29:13', 10),
(2, 'Open de France - Equipe', '2015-02-14', 'Levallois', '', 0, '2015-02-17 14:44:43', '2016-06-26 09:14:20', 2),
(3, 'France Excellence', '2015-03-28', 'Paris - Carpentier', '', 0, '2015-02-17 14:48:18', '2016-03-15 22:32:08', 3),
(8, 'Test', '2016-05-25', 'FLC', 'mm', 0, '2016-05-23 21:06:22', '2016-05-23 21:06:22', 4);

-- --------------------------------------------------------

--
-- Structure de la table `evalues`
--

CREATE TABLE `evalues` (
  `id` int(11) NOT NULL,
  `passage_id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `grade_actuel` int(11) NOT NULL,
  `grade_presente` int(11) NOT NULL,
  `resultat_passage` int(11) DEFAULT NULL,
  `resultat_technique` int(11) DEFAULT NULL,
  `resultat_kata` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `evalues`
--

INSERT INTO `evalues` (`id`, `passage_id`, `licencie_id`, `grade_actuel`, `grade_presente`, `resultat_passage`, `resultat_technique`, `resultat_kata`, `created`, `modified`) VALUES
(1, 1, 169, 1, 2, NULL, NULL, NULL, '2016-10-11 00:05:16', '2016-10-11 00:05:16');

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `juges`
--

CREATE TABLE `juges` (
  `id` int(11) NOT NULL,
  `passage_id` int(11) NOT NULL,
  `jury_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `juges`
--

INSERT INTO `juges` (`id`, `passage_id`, `jury_id`, `created`, `modified`) VALUES
(1, 1, 1, '2016-10-11 00:05:16', '2016-10-11 00:05:16');

-- --------------------------------------------------------

--
-- Structure de la table `jurys`
--

CREATE TABLE `jurys` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `actif` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `jurys`
--

INSERT INTO `jurys` (`id`, `nom`, `prenom`, `grade`, `actif`) VALUES
(1, 'BOUSIQUE', 'Jean-Claude', '5 ème Dan', 1);

-- --------------------------------------------------------

--
-- Structure de la table `licencies`
--

CREATE TABLE `licencies` (
  `id` int(10) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `sexe` date DEFAULT NULL,
  `ddn` text,
  `licence` int(11) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `club_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `licencies`
--

INSERT INTO `licencies` (`id`, `prenom`, `nom`, `sexe`, `ddn`, `licence`, `grade`, `club_id`, `created`, `modified`) VALUES
(1, '-', '-', NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '--', '--', NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'PRÉNOM 73', 'NOM 73', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'PRÉNOM 74', 'NOM 74', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'PRÉNOM 75', 'NOM 75', NULL, NULL, NULL, NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 'PRÉNOM 1', 'NOM 1', NULL, NULL, NULL, NULL, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'PRÉNOM 2', 'NOM 2', NULL, NULL, NULL, NULL, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 'PRÉNOM 3', 'NOM 3', NULL, NULL, NULL, NULL, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 'PRÉNOM 4', 'NOM 4', NULL, NULL, NULL, NULL, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 'PRÉNOM 5', 'NOM 5', NULL, NULL, NULL, NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 'PRÉNOM 6', 'NOM 6', NULL, NULL, NULL, NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 'PRÉNOM 7', 'NOM 7', NULL, NULL, NULL, NULL, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 'PRÉNOM 8', 'NOM 8', NULL, NULL, NULL, NULL, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 'PRÉNOM 9', 'NOM 9', NULL, NULL, NULL, NULL, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 'PRÉNOM 10', 'NOM 10', NULL, NULL, NULL, NULL, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 'PRÉNOM 11', 'NOM 11', NULL, NULL, NULL, NULL, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 'PRÉNOM 12', 'NOM 12', NULL, NULL, NULL, NULL, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 'PRÉNOM 13', 'NOM 13', NULL, NULL, NULL, NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 'PRÉNOM 14', 'NOM 14', NULL, NULL, NULL, NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 'PRÉNOM 15', 'NOM 15', NULL, NULL, NULL, NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 'PRÉNOM 16', 'NOM 16', NULL, NULL, NULL, NULL, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 'PRÉNOM 17', 'NOM 17', NULL, NULL, NULL, NULL, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 'PRÉNOM 18', 'NOM 18', NULL, NULL, NULL, NULL, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 'PRÉNOM 19', 'NOM 19', NULL, NULL, NULL, NULL, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 'PRÉNOM 20', 'NOM 20', NULL, NULL, NULL, NULL, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 'PRÉNOM 21', 'NOM 21', NULL, NULL, NULL, NULL, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 'PRÉNOM 22', 'NOM 22', NULL, NULL, NULL, NULL, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 'PRÉNOM 23', 'NOM 23', NULL, NULL, NULL, NULL, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 'PRÉNOM 24', 'NOM 24', NULL, NULL, NULL, NULL, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 'PRÉNOM 25', 'NOM 25', NULL, NULL, NULL, NULL, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 'PRÉNOM 26', 'NOM 26', NULL, NULL, NULL, NULL, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 'PRÉNOM 27', 'NOM 27', NULL, NULL, NULL, NULL, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 'PRÉNOM 28', 'NOM 28', NULL, NULL, NULL, NULL, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 'PRÉNOM 29', 'NOM 29', NULL, NULL, NULL, NULL, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 'PRÉNOM 30', 'NOM 30', NULL, NULL, NULL, NULL, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 'PRÉNOM 31', 'NOM 31', NULL, NULL, NULL, NULL, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 'PRÉNOM 32', 'NOM 32', NULL, NULL, NULL, NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 'PRÉNOM 33', 'NOM 33', NULL, NULL, NULL, NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 'PRÉNOM 34', 'NOM 34', NULL, NULL, NULL, NULL, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 'PRÉNOM 35', 'NOM 35', NULL, NULL, NULL, NULL, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 'PRÉNOM 36', 'NOM 36', NULL, NULL, NULL, NULL, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 'PRÉNOM 37', 'NOM 37', NULL, NULL, NULL, NULL, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 'PRÉNOM 38', 'NOM 38', NULL, NULL, NULL, NULL, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 'PRÉNOM 39', 'NOM 39', NULL, NULL, NULL, NULL, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 'PRÉNOM 40', 'NOM 40', NULL, NULL, NULL, NULL, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 'PRÉNOM 45', 'NOM 45', NULL, NULL, NULL, NULL, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 'PRÉNOM 46', 'NOM 46', NULL, NULL, NULL, NULL, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 'PRÉNOM 47', 'NOM 47', NULL, NULL, NULL, NULL, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 'PRÉNOM 48', 'NOM 48', NULL, NULL, NULL, NULL, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 'PRÉNOM 49', 'NOM 49', NULL, NULL, NULL, NULL, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 'PRÉNOM 50', 'NOM 50', NULL, NULL, NULL, NULL, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 'PRÉNOM 51', 'NOM 51', NULL, NULL, NULL, NULL, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 'PRÉNOM 52', 'NOM 52', NULL, NULL, NULL, NULL, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 'PRÉNOM 53', 'NOM 53', NULL, NULL, NULL, NULL, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 'PRÉNOM 54', 'NOM 54', NULL, NULL, NULL, NULL, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 'PRÉNOM 55', 'NOM 55', NULL, NULL, NULL, NULL, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 'PRÉNOM 56', 'NOM 56', NULL, NULL, NULL, NULL, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 'PRÉNOM 57', 'NOM 57', NULL, NULL, NULL, NULL, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 'PRÉNOM 58', 'NOM 58', NULL, NULL, NULL, NULL, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 'PRÉNOM 59', 'NOM 59', NULL, NULL, NULL, NULL, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 'PRÉNOM 60', 'NOM 60', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 'PRÉNOM 61', 'NOM 61', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 'PRÉNOM 62', 'NOM 62', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 'PRÉNOM 63', 'NOM 63', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 'PRÉNOM 64', 'NOM 64', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 'PRÉNOM 65', 'NOM 65', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 'PRÉNOM 66', 'NOM 66', NULL, NULL, NULL, NULL, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 'PRÉNOM 67', 'NOM 67', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 'PRÉNOM 68', 'NOM 68', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 'PRÉNOM 69', 'NOM 69', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 'PRÉNOM 70', 'NOM 70', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 'PRÉNOM 71', 'NOM 71', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 'PRÉNOM 72', 'NOM 72', NULL, NULL, NULL, NULL, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 'PRÉNOM 41', 'NOM 41', NULL, NULL, NULL, NULL, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 'PRÉNOM 42', 'NOM 42', NULL, NULL, NULL, NULL, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 'PRÉNOM 43', 'NOM 43', NULL, NULL, NULL, NULL, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 'PRÉNOM 44', 'NOM 44', NULL, NULL, NULL, NULL, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `passage_id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `juge_id` int(11) NOT NULL,
  `note_technique` int(1) DEFAULT NULL,
  `note_kata` int(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `palmares`
--

CREATE TABLE `palmares` (
  `id` int(11) NOT NULL,
  `competition` varchar(255) NOT NULL,
  `lieux` varchar(255) DEFAULT NULL,
  `date_competition` date NOT NULL,
  `resultat` varchar(255) NOT NULL,
  `commentaire` text,
  `licencie_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `palmares`
--

INSERT INTO `palmares` (`id`, `competition`, `lieux`, `date_competition`, `resultat`, `commentaire`, `licencie_id`) VALUES
(1, 'Che du monde', 'Paris', '2016-06-01', '1er', 'ras', 283),
(2, 'Championnat de france excellence', 'Paris', '2016-10-31', '1er', '', 283);

-- --------------------------------------------------------

--
-- Structure de la table `passages`
--

CREATE TABLE `passages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_passage` date NOT NULL,
  `selected` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `passages`
--

INSERT INTO `passages` (`id`, `name`, `date_passage`, `selected`) VALUES
(1, 'Passage du 1er au 3ème dan - Open des PDL', '2016-11-11', 0);

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profils`
--

INSERT INTO `profils` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'club');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'ALSACE'),
(2, 'AQUITAINE'),
(3, 'AUVERGNE'),
(4, 'BOURGOGNE'),
(5, 'BRETAGNE'),
(6, 'CENTRE'),
(7, 'CHAMPAGNE ARDENNES'),
(8, 'CORSE'),
(26, 'ESSONNE'),
(9, 'FRANCHE COMTE'),
(27, 'HAUTS DE SEINE'),
(10, 'LANGUEDOC ROUSSILON'),
(11, 'LIMOUSIN'),
(12, 'LORRAINE'),
(13, 'MIDI PYRENEES'),
(15, 'NORD PAS DE CALAIS'),
(14, 'NORMANDIE'),
(22, 'NOUVELLE CALEDONIE'),
(16, 'PACA'),
(23, 'PARIS'),
(17, 'PAYS DE LA LOIRE'),
(18, 'PICARDIE'),
(19, 'POITOU CHARENTES'),
(21, 'REUNION'),
(20, 'RHONES ALPES'),
(24, 'SEINE ET MARNE'),
(28, 'SEINE ST DENIS'),
(30, 'VAL D''OISE'),
(29, 'VAL DE MARNE'),
(25, 'YVELINES');

-- --------------------------------------------------------

--
-- Structure de la table `repartitions`
--

CREATE TABLE `repartitions` (
  `id` int(10) NOT NULL,
  `numero_poule` int(1) NOT NULL DEFAULT '0',
  `position_poule` int(1) NOT NULL DEFAULT '0',
  `resultat_combat` int(1) NOT NULL DEFAULT '0',
  `point_combat` int(2) NOT NULL DEFAULT '0',
  `competition_id` int(10) NOT NULL,
  `licencie_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `repartitions`
--

INSERT INTO `repartitions` (`id`, `numero_poule`, `position_poule`, `resultat_combat`, `point_combat`, `competition_id`, `licencie_id`) VALUES
(1, 2, 3, 0, 0, 1, 315),
(2, 3, 3, 0, 0, 1, 295),
(3, 2, 1, 0, 0, 1, 169),
(4, 1, 3, 0, 0, 1, 246),
(5, 3, 4, 0, 0, 1, 300),
(6, 4, 4, 0, 0, 1, 279),
(9, 1, 1, 0, 0, 1, 171),
(10, 3, 1, 0, 0, 1, 312),
(11, 4, 2, 0, 0, 1, 280),
(12, 2, 2, 0, 0, 1, 281),
(15, 4, 1, 0, 0, 1, 290),
(16, 1, 2, 0, 0, 1, 297),
(17, 3, 2, 0, 0, 1, 257),
(18, 4, 3, 0, 0, 1, 308);

-- --------------------------------------------------------

--
-- Structure de la table `resultat_poules`
--

CREATE TABLE `resultat_poules` (
  `id` int(11) NOT NULL,
  `numero_poule` int(2) NOT NULL,
  `classement` int(1) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tirages`
--

CREATE TABLE `tirages` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `competition_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tirages`
--

INSERT INTO `tirages` (`id`, `type`, `competition_id`, `created`) VALUES
(1, NULL, 1, '2016-06-25'),
(2, 'Type de tirage :sans éloignement des têtes de série, sans éloignement des clubs, ', 1, '2016-06-25'),
(3, 'Type de tirage :avec éloignement des têtes de série, avec éloignement des clubs, ', 1, '2016-06-25'),
(4, 'Type de tirage : poule de 3, avec éloignement des têtes de série.avec éloignement des clubs.', 1, '2016-06-25'),
(5, 'Type de tirage : poule de 3. Avec éloignement des têtes de série. Avec éloignement des clubs.', 1, '2016-09-22'),
(6, 'Type de tirage : poule de 3. Avec éloignement des têtes de série. Avec éloignement des clubs.', 1, '2016-09-22'),
(7, 'Type de tirage : poule de 3. Avec éloignement des têtes de série. Avec éloignement des clubs.', 1, '2016-09-22'),
(8, 'Type de tirage : poule de 3. Avec éloignement des têtes de série. Avec éloignement des clubs.', 1, '2016-09-22'),
(9, 'Type de tirage : poule de 3. Sans éloignement des têtes de série. Sans éloignement des clubs.', 1, '2016-09-22'),
(10, 'Type de tirage : poule de 3. Sans éloignement des têtes de série. Sans éloignement des clubs.', 1, '2016-09-22'),
(11, 'Type de tirage : poule de 3. Sans éloignement des têtes de série. Sans éloignement des clubs.', 1, '2016-09-29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `lastlogin` datetime DEFAULT NULL,
  `profil_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nom`, `prenom`, `active`, `lastlogin`, `profil_id`, `created`, `modified`) VALUES
(1, 'a.coue', '$2y$10$gxMkQQvFJzkvJX4nzM5dee6uoG5chAKhwF152BzCkVMIIfgGwlEO.', 'COUE', 'Anthony', 1, '2016-10-12 19:24:50', 1, '2016-10-11 20:30:28', '2016-10-12 19:24:50'),
(2, 'c.club', '$2y$10$gxMkQQvFJzkvJX4nzM5dee6uoG5chAKhwF152BzCkVMIIfgGwlEO.', 'Club', 'Test', 0, '2016-10-11 21:22:36', 2, '2016-10-11 23:21:49', '2016-10-12 20:32:06'),
(3, 't.test', 'azerty12', 'Test', 'Ajout', 1, NULL, 2, '2016-10-12 20:15:24', '2016-10-12 20:15:24');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`name`),
  ADD KEY `idregion` (`id`,`name`),
  ADD KEY `region_id` (`region_id`);

--
-- Index pour la table `combat_poules`
--
ALTER TABLE `combat_poules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `combat_poule_uk` (`licencie1`,`licencie2`,`competition_id`),
  ADD KEY `competition_id` (`competition_id`);

--
-- Index pour la table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`name`,`date_competition`),
  ADD KEY `catagorie_id` (`catagorie_id`);

--
-- Index pour la table `evalues`
--
ALTER TABLE `evalues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passage_evalue_fk_idx` (`passage_id`),
  ADD UNIQUE KEY `licencie_evalue_fk_idx` (`licencie_id`),
  ADD UNIQUE KEY `evalue_uk` (`passage_id`,`licencie_id`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `juges`
--
ALTER TABLE `juges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jury_juge_fk_idx` (`id`),
  ADD UNIQUE KEY `jury_uk` (`jury_id`,`passage_id`),
  ADD KEY `passage_juge_fk_idx` (`passage_id`) USING BTREE;

--
-- Index pour la table `jurys`
--
ALTER TABLE `jurys`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `licencies`
--
ALTER TABLE `licencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `club_id` (`club_id`,`prenom`,`nom`),
  ADD KEY `club_id_2` (`club_id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `note_uk` (`passage_id`,`licencie_id`,`juge_id`),
  ADD KEY `passage_note_fk_idx` (`passage_id`) USING BTREE,
  ADD KEY `licencie_note_fk_idx` (`licencie_id`),
  ADD KEY `juge_note_fk_idx` (`id`) USING BTREE,
  ADD KEY `juge_note_fk` (`juge_id`);

--
-- Index pour la table `palmares`
--
ALTER TABLE `palmares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `palmares_licencie_fk_idx` (`licencie_id`);

--
-- Index pour la table `passages`
--
ALTER TABLE `passages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profil_uk` (`name`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`name`),
  ADD KEY `libelle_2` (`name`);

--
-- Index pour la table `repartitions`
--
ALTER TABLE `repartitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `repartition_uk` (`competition_id`,`licencie_id`),
  ADD KEY `licencie_repartition_fk` (`licencie_id`);

--
-- Index pour la table `resultat_poules`
--
ALTER TABLE `resultat_poules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `licencie_id` (`licencie_id`),
  ADD KEY `competition_id` (`competition_id`);

--
-- Index pour la table `tirages`
--
ALTER TABLE `tirages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `competition_id` (`competition_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `profil_user_fk_idx` (`profil_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `combat_poules`
--
ALTER TABLE `combat_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `evalues`
--
ALTER TABLE `evalues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `juges`
--
ALTER TABLE `juges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `jurys`
--
ALTER TABLE `jurys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `licencies`
--
ALTER TABLE `licencies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=316;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `palmares`
--
ALTER TABLE `palmares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `passages`
--
ALTER TABLE `passages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `repartitions`
--
ALTER TABLE `repartitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `tirages`
--
ALTER TABLE `tirages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `region_club_fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `combat_poules`
--
ALTER TABLE `combat_poules`
  ADD CONSTRAINT `competition_combat_poule_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `competitions`
--
ALTER TABLE `competitions`
  ADD CONSTRAINT `categories_competition_fk` FOREIGN KEY (`catagorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evalues`
--
ALTER TABLE `evalues`
  ADD CONSTRAINT `licencie_evalue_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passage_evalue_fk` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `juges`
--
ALTER TABLE `juges`
  ADD CONSTRAINT `jury_juge_fk` FOREIGN KEY (`jury_id`) REFERENCES `jurys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passage_juge_fk` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `licencies`
--
ALTER TABLE `licencies`
  ADD CONSTRAINT `club_licencie_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `juge_note_fk` FOREIGN KEY (`juge_id`) REFERENCES `juges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencie_note_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passage_note_fk` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `palmares`
--
ALTER TABLE `palmares`
  ADD CONSTRAINT `palmares_licencie_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `repartitions`
--
ALTER TABLE `repartitions`
  ADD CONSTRAINT `competition_repartition_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencie_repartition_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `resultat_poules`
--
ALTER TABLE `resultat_poules`
  ADD CONSTRAINT `competition_resultat_poule_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`),
  ADD CONSTRAINT `licencie_resultat_poule_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`);

--
-- Contraintes pour la table `tirages`
--
ALTER TABLE `tirages`
  ADD CONSTRAINT `competitions_tirages_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `profil_user_fk` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
