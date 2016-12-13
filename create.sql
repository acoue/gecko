-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 13 Décembre 2016 à 22:46
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.14

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '0:Competition individuelle | 1 : competition par équipe',
  `selected` int(1) NOT NULL DEFAULT '0',
  `archive` int(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `categorie_id` int(10) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `grades`
--

INSERT INTO `grades` (`id`, `name`) VALUES
(1, '10ème Kyu'),
(2, '9ème Kyu'),
(3, '8ème Kyu'),
(4, '7ème Kyu'),
(5, '6ème Kyu'),
(6, '5ème Kyu'),
(7, '4ème Kyu'),
(8, '3ème Kyu'),
(9, '2ème Kyu'),
(10, '1er Kyu'),
(11, '8ème Dan'),
(12, '7ème Dan'),
(13, '6ème Dan'),
(14, '5ème Dan'),
(15, '4ème Dan'),
(16, '3ème Dan'),
(17, '2ème Dan'),
(18, '1er Dan');

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription_competitions`
--

CREATE TABLE `inscription_competitions` (
  `id` int(11) NOT NULL,
  `commentaire` text,
  `competition_id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `inscription_competitions`
--

INSERT INTO `inscription_competitions` (`id`, `commentaire`, `competition_id`, `licencie_id`, `user_id`, `created`, `modified`) VALUES
(2, '', 3, 244, 1, '2016-12-11 16:31:33', '2016-12-11 16:31:33');

-- --------------------------------------------------------

--
-- Structure de la table `inscription_passages`
--

CREATE TABLE `inscription_passages` (
  `id` int(11) NOT NULL,
  `commentaire` text,
  `passage_id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `inscription_passages`
--

INSERT INTO `inscription_passages` (`id`, `commentaire`, `passage_id`, `licencie_id`, `user_id`, `created`, `modified`) VALUES
(1, 'test', 1, 247, 1, '2016-12-11 16:53:53', '2016-12-11 16:53:53');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `licencies`
--

CREATE TABLE `licencies` (
  `id` int(10) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `ddn` date DEFAULT NULL,
  `licence` varchar(20) DEFAULT NULL,
  `grade_id` int(11) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `club_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `resultat_id` int(11) NOT NULL,
  `commentaire` text,
  `licencie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `passages`
--

CREATE TABLE `passages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_passage` date NOT NULL,
  `selected` int(11) NOT NULL DEFAULT '0',
  `archive` int(1) NOT NULL DEFAULT '0',
  `region_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(-1, 'Nationale'),
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
(30, 'VAL D\'OISE'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `resultats`
--

INSERT INTO `resultats` (`id`, `name`) VALUES
(1, '1er'),
(2, '2ème'),
(3, '3ème'),
(4, '4ème');

-- --------------------------------------------------------

--
-- Structure de la table `resultat_competitions`
--

CREATE TABLE `resultat_competitions` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `resultat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `type` varchar(255) DEFAULT NULL,
  `competition_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `lastlogin` datetime DEFAULT NULL,
  `profil_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nom`, `prenom`, `email`, `active`, `lastlogin`, `profil_id`, `club_id`, `created`, `modified`) VALUES
(1, 'a.coue', '$2y$10$gxMkQQvFJzkvJX4nzM5dee6uoG5chAKhwF152BzCkVMIIfgGwlEO.', 'COUE', 'Anthony', 'anthony.coue@gmail.com', 1, '2016-12-13 21:25:20', 1, 13, '2016-10-11 20:30:28', '2016-12-13 21:25:20'),
(2, 'c.club', '$2y$10$gxMkQQvFJzkvJX4nzM5dee6uoG5chAKhwF152BzCkVMIIfgGwlEO.', 'Club', 'Test', NULL, 0, '2016-10-11 21:22:36', 2, 1, '2016-10-11 23:21:49', '2016-10-12 20:32:06'),
(3, 't.test', 'azerty12', 'Test', 'Ajout', NULL, 1, NULL, 2, 1, '2016-10-12 20:15:24', '2016-10-12 20:15:24');

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
  ADD KEY `catagorie_id` (`categorie_id`),
  ADD KEY `competition_region_fk_idx` (`region_id`);

--
-- Index pour la table `evalues`
--
ALTER TABLE `evalues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passage_evalue_fk_idx` (`passage_id`),
  ADD UNIQUE KEY `licencie_evalue_fk_idx` (`licencie_id`),
  ADD UNIQUE KEY `evalue_uk` (`passage_id`,`licencie_id`);

--
-- Index pour la table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_historiques_fk_idx` (`user_id`);

--
-- Index pour la table `inscription_competitions`
--
ALTER TABLE `inscription_competitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inscription_uk` (`competition_id`,`licencie_id`),
  ADD KEY `licencie_fk_idx` (`licencie_id`),
  ADD KEY `user_fk_idx` (`user_id`),
  ADD KEY `competiton_fk_idx` (`competition_id`) USING BTREE;

--
-- Index pour la table `inscription_passages`
--
ALTER TABLE `inscription_passages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inscription_uk` (`passage_id`,`licencie_id`),
  ADD KEY `licencie_fk_idx` (`licencie_id`),
  ADD KEY `user_fk_idx` (`user_id`),
  ADD KEY `passage_fk_idx` (`passage_id`) USING BTREE;

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
  ADD KEY `club_id_2` (`club_id`),
  ADD KEY `grade_licencie_fk_idx` (`id`);

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
  ADD UNIQUE KEY `resultat_palmares_fk_idx` (`id`),
  ADD KEY `palmares_licencie_fk_idx` (`licencie_id`),
  ADD KEY `resultat_palmares_fk` (`resultat_id`);

--
-- Index pour la table `passages`
--
ALTER TABLE `passages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_passage_fk_idx` (`region_id`);

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
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultat_competitions`
--
ALTER TABLE `resultat_competitions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `resultat_uk` (`resultat_id`,`competition_id`,`licencie_id`),
  ADD KEY `competition_resultat_fk_idx` (`competition_id`),
  ADD KEY `licencie_resultat_fk_idx` (`licencie_id`),
  ADD KEY `resultat_resultat_fk_idx` (`resultat_id`);

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
  ADD KEY `profil_user_fk_idx` (`profil_id`),
  ADD KEY `user_club_fk_idx` (`club_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `combat_poules`
--
ALTER TABLE `combat_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `evalues`
--
ALTER TABLE `evalues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `inscription_competitions`
--
ALTER TABLE `inscription_competitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `inscription_passages`
--
ALTER TABLE `inscription_passages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `juges`
--
ALTER TABLE `juges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `jurys`
--
ALTER TABLE `jurys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `licencies`
--
ALTER TABLE `licencies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `palmares`
--
ALTER TABLE `palmares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `passages`
--
ALTER TABLE `passages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `repartitions`
--
ALTER TABLE `repartitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `resultat_competitions`
--
ALTER TABLE `resultat_competitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `resultat_poules`
--
ALTER TABLE `resultat_poules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT pour la table `tirages`
--
ALTER TABLE `tirages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  ADD CONSTRAINT `categories_competition_fk` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `region_competition_fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evalues`
--
ALTER TABLE `evalues`
  ADD CONSTRAINT `licencie_evalue_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passage_evalue_fk` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD CONSTRAINT `users_historiques_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription_competitions`
--
ALTER TABLE `inscription_competitions`
  ADD CONSTRAINT `competition_inscription_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencie_inscription_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_inscription_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription_passages`
--
ALTER TABLE `inscription_passages`
  ADD CONSTRAINT `licencie_inscription_passage_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `passage_inscription_fk` FOREIGN KEY (`passage_id`) REFERENCES `passages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_inscription_passage_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `club_licencie_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grade_licencie_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `palmares_licencie_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_palmares_fk` FOREIGN KEY (`resultat_id`) REFERENCES `resultats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `passages`
--
ALTER TABLE `passages`
  ADD CONSTRAINT `region_passage_fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `repartitions`
--
ALTER TABLE `repartitions`
  ADD CONSTRAINT `competition_repartition_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencie_repartition_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `resultat_competitions`
--
ALTER TABLE `resultat_competitions`
  ADD CONSTRAINT `competition_resultat_fk` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licencie_resultat_fk` FOREIGN KEY (`licencie_id`) REFERENCES `licencies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_resultat_fk` FOREIGN KEY (`resultat_id`) REFERENCES `resultats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `club_user_fk` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profil_user_fk` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
