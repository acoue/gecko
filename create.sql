-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 25 Septembre 2016 à 23:38
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `gecko`
--
CREATE DATABASE IF NOT EXISTS `gecko` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gecko`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
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

DROP TABLE IF EXISTS `clubs`;
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

DROP TABLE IF EXISTS `combat_poules`;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `combat_poules`
--

INSERT INTO `combat_poules` (`id`, `poule`, `ordre`, `licencie1`, `licencie2`, `resultat_rouge`, `resultat_blanc`, `vainqueur`, `competition_id`) VALUES
(0, 1, 2, 12, 21, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `competitions`
--

DROP TABLE IF EXISTS `competitions`;
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
(1, 'Open de France - Individuel', '2020-08-07', 'Levallois', 'test de description', 1, '2015-02-17 14:28:04', '2016-06-26 09:16:53', 1),
(2, 'Open de France - Equipe', '2015-02-14', 'Levallois', '', 0, '2015-02-17 14:44:43', '2016-06-26 09:14:20', 2),
(3, 'France Excellence', '2015-03-28', 'Paris - Carpentier', '', 0, '2015-02-17 14:48:18', '2016-03-15 22:32:08', 3),
(8, 'Test', '2016-05-25', 'FLC', 'mm', 0, '2016-05-23 21:06:22', '2016-05-23 21:06:22', 4);

-- --------------------------------------------------------

--
-- Structure de la table `licencies`
--

DROP TABLE IF EXISTS `licencies`;
CREATE TABLE `licencies` (
  `id` int(10) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `club_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `licencies`
--

INSERT INTO `licencies` (`id`, `prenom`, `nom`, `club_id`) VALUES
(1, '-', '-', 1),
(2, '--', '--', 1),
(296, 'PRÉNOM 57', 'NOM 57', 3),
(297, 'PRÉNOM 58', 'NOM 58', 3),
(298, 'PRÉNOM 59', 'NOM 59', 3),
(283, 'PRÉNOM 40', 'NOM 40', 7),
(312, 'PRÉNOM 41', 'NOM 41', 7),
(313, 'PRÉNOM 42', 'NOM 42', 7),
(314, 'PRÉNOM 43', 'NOM 43', 7),
(315, 'PRÉNOM 44', 'NOM 44', 7),
(260, 'PRÉNOM 17', 'NOM 17', 8),
(261, 'PRÉNOM 18', 'NOM 18', 8),
(244, 'PRÉNOM 1', 'NOM 1', 9),
(245, 'PRÉNOM 2', 'NOM 2', 9),
(246, 'PRÉNOM 3', 'NOM 3', 9),
(247, 'PRÉNOM 4', 'NOM 4', 9),
(248, 'PRÉNOM 5', 'NOM 5', 10),
(249, 'PRÉNOM 6', 'NOM 6', 10),
(250, 'PRÉNOM 7', 'NOM 7', 10),
(253, 'PRÉNOM 10', 'NOM 10', 11),
(254, 'PRÉNOM 11', 'NOM 11', 11),
(255, 'PRÉNOM 12', 'NOM 12', 11),
(251, 'PRÉNOM 8', 'NOM 8', 11),
(252, 'PRÉNOM 9', 'NOM 9', 11),
(292, 'PRÉNOM 53', 'NOM 53', 12),
(293, 'PRÉNOM 54', 'NOM 54', 12),
(294, 'PRÉNOM 55', 'NOM 55', 12),
(295, 'PRÉNOM 56', 'NOM 56', 12),
(299, 'PRÉNOM 60', 'NOM 60', 13),
(300, 'PRÉNOM 61', 'NOM 61', 13),
(301, 'PRÉNOM 62', 'NOM 62', 13),
(302, 'PRÉNOM 63', 'NOM 63', 13),
(303, 'PRÉNOM 64', 'NOM 64', 13),
(304, 'PRÉNOM 65', 'NOM 65', 13),
(305, 'PRÉNOM 66', 'NOM 66', 13),
(169, 'PRÉNOM 73', 'NOM 73', 13),
(170, 'PRÉNOM 74', 'NOM 74', 13),
(306, 'PRÉNOM 67', 'NOM 67', 14),
(307, 'PRÉNOM 68', 'NOM 68', 14),
(308, 'PRÉNOM 69', 'NOM 69', 14),
(309, 'PRÉNOM 70', 'NOM 70', 14),
(310, 'PRÉNOM 71', 'NOM 71', 14),
(311, 'PRÉNOM 72', 'NOM 72', 14),
(256, 'PRÉNOM 13', 'NOM 13', 15),
(257, 'PRÉNOM 14', 'NOM 14', 15),
(258, 'PRÉNOM 15', 'NOM 15', 15),
(259, 'PRÉNOM 16', 'NOM 16', 15),
(171, 'PRÉNOM 75', 'NOM 75', 15),
(262, 'PRÉNOM 19', 'NOM 19', 16),
(263, 'PRÉNOM 20', 'NOM 20', 16),
(264, 'PRÉNOM 21', 'NOM 21', 17),
(265, 'PRÉNOM 22', 'NOM 22', 17),
(266, 'PRÉNOM 23', 'NOM 23', 17),
(267, 'PRÉNOM 24', 'NOM 24', 17),
(268, 'PRÉNOM 25', 'NOM 25', 17),
(269, 'PRÉNOM 26', 'NOM 26', 18),
(270, 'PRÉNOM 27', 'NOM 27', 18),
(271, 'PRÉNOM 28', 'NOM 28', 18),
(272, 'PRÉNOM 29', 'NOM 29', 19),
(273, 'PRÉNOM 30', 'NOM 30', 19),
(274, 'PRÉNOM 31', 'NOM 31', 19),
(275, 'PRÉNOM 32', 'NOM 32', 20),
(276, 'PRÉNOM 33', 'NOM 33', 20),
(277, 'PRÉNOM 34', 'NOM 34', 20),
(278, 'PRÉNOM 35', 'NOM 35', 21),
(279, 'PRÉNOM 36', 'NOM 36', 21),
(280, 'PRÉNOM 37', 'NOM 37', 21),
(281, 'PRÉNOM 38', 'NOM 38', 21),
(282, 'PRÉNOM 39', 'NOM 39', 21),
(284, 'PRÉNOM 45', 'NOM 45', 22),
(285, 'PRÉNOM 46', 'NOM 46', 22),
(286, 'PRÉNOM 47', 'NOM 47', 22),
(287, 'PRÉNOM 48', 'NOM 48', 23),
(288, 'PRÉNOM 49', 'NOM 49', 23),
(289, 'PRÉNOM 50', 'NOM 50', 23),
(290, 'PRÉNOM 51', 'NOM 51', 23),
(291, 'PRÉNOM 52', 'NOM 52', 23);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
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

DROP TABLE IF EXISTS `repartitions`;
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
(1, 4, 3, 0, 0, 1, 315),
(2, 2, 3, 0, 0, 1, 295),
(3, 1, 2, 0, 0, 1, 169),
(4, 1, 3, 0, 0, 1, 246),
(5, 2, 2, 0, 0, 1, 300),
(6, 1, 1, 0, 0, 1, 279),
(9, 3, 2, 0, 0, 1, 171),
(10, 3, 4, 0, 0, 1, 312),
(11, 2, 1, 0, 0, 1, 280),
(12, 3, 1, 0, 0, 1, 281),
(15, 4, 2, 0, 0, 1, 290),
(16, 4, 4, 0, 0, 1, 297),
(17, 4, 1, 0, 0, 1, 257),
(18, 3, 3, 0, 0, 1, 308);

-- --------------------------------------------------------

--
-- Structure de la table `resultat_poules`
--

DROP TABLE IF EXISTS `resultat_poules`;
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

DROP TABLE IF EXISTS `tirages`;
CREATE TABLE `tirages` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `competition_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
(10, 'Type de tirage : poule de 3. Sans éloignement des têtes de série. Sans éloignement des clubs.', 1, '2016-09-22');

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
-- Index pour la table `licencies`
--
ALTER TABLE `licencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `club_id` (`club_id`,`prenom`,`nom`),
  ADD KEY `club_id_2` (`club_id`);

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
-- AUTO_INCREMENT pour la table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `licencies`
--
ALTER TABLE `licencies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=316;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
-- Contraintes pour la table `licencies`
--
ALTER TABLE `licencies`
  ADD CONSTRAINT `club_licencie_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
