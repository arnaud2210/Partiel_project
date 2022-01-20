-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 jan. 2022 à 19:39
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `concours`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `niveau` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`niveau`, `login`, `password`) VALUES
(1, 'arnaud2210', '88a1324ffd6f760dd279d5f79bd4755f');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `numcandidat` int(11) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `nationnalité` varchar(30) DEFAULT NULL,
  `numserie` int(11) DEFAULT NULL,
  `bacsession` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`numcandidat`, `nom`, `prenom`, `naissance`, `sexe`, `nationnalité`, `numserie`, `bacsession`) VALUES
(1, 'ANDJAO', 'Julie', '2002-11-14', 'F', 'Togo', 2, '2019-2020'),
(2, 'ADJIMON', 'Arnaud', '2002-10-22', 'M', 'Togo', 2, '2019-2020'),
(3, 'KOUSSOUGBO', 'Emmanuel', '2002-01-26', 'M', 'Togo', 1, '2019-2020'),
(4, 'AKPAN', 'Elikem', '2002-06-29', 'M', 'Togo', 2, '2019-2020'),
(5, 'MIDEKOR', 'Frank', '2001-05-11', 'M', 'Togo', 2, '2018-2019'),
(6, 'SOSSAH', 'Leslie', '2002-05-26', 'F', 'Togo', 2, '2019-2020'),
(9, 'BEAUTY', 'Lina', '2002-12-15', 'F', 'France', 3, '2019-2020'),
(10, 'ANANI', 'Caleb', '2003-11-11', 'M', 'Togo', 1, '2019-2020'),
(11, 'MAMA', 'Lucie', '2001-03-28', 'F', 'Guinea', 2, '2020-2021'),
(12, 'DIAWARA', 'Salimatou', '2004-04-12', 'F', 'Mali', 2, '2019-2020'),
(13, 'PRINCE-AGBODJAN ', 'Chloris', '2003-05-24', 'F', 'Togo', 2, '2020-2021'),
(14, 'KPAKPADJA', 'Elias', '2002-08-14', 'M', 'Gabon', 2, '2018-2019'),
(15, 'PAPI', 'guenou', '2003-05-22', 'M', 'Barbados', 4, '2018-2019');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `idcontent` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `contenu`
--
DELIMITER $$
CREATE TRIGGER `contenu_after_delete` AFTER DELETE ON `contenu` FOR EACH ROW INSERT INTO supptable
   ( idcontent,
     titre,
   	 description,
   	 niveau)
   VALUES
   ( OLD.idcontent,
     old.titre,
     old.description,
     old.niveau)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `numfic` int(11) NOT NULL,
  `nomfic` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`numfic`, `nomfic`) VALUES
(1, 'Decharge2.pdf'),
(2, '2ème Année du 0'),
(3, 'Ch9_2019-2020.S'),
(4, 'coursUML3.pdf'),
(5, '5_cours.pdf'),
(6, 'Enquete (1).pdf'),
(7, 'Révision.pdf'),
(8, 'Révision.pdf'),
(9, 'coursUML11.pdf'),
(10, 'Decharge2.pdf'),
(11, 'mcd.pdf'),
(12, 'La_divine_coméd'),
(13, 'Inscription.pdf'),
(14, 'BD-1.pdf'),
(15, '5_cours.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `numserie` int(11) NOT NULL,
  `libserie` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `serie`
--

INSERT INTO `serie` (`numserie`, `libserie`) VALUES
(1, 'C'),
(2, 'D'),
(3, 'E'),
(4, 'F2');

-- --------------------------------------------------------

--
-- Structure de la table `supptable`
--

CREATE TABLE `supptable` (
  `idcontent` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `supptable`
--

INSERT INTO `supptable` (`idcontent`, `titre`, `description`, `niveau`) VALUES
(1, 'COMMUNIQUE CONCOURS IAI-TOGO 2020-2021', 'Le Ministre de la Planification du Développement porte à la connaissance du public qu’il est ouvert chaque année un concours d’entrée en 1ère année du Cycle « Ingénieur des Travaux Informatiques (Licence Professionnelle) » options Génie Logiciel (GL), Systèmes et Réseaux (SR) de l’Institut Africain d’Informatique, Représentation du Togo (IAI-TOGO).\r\n\r\nLe concours se déroulera dans les centres d’écrit suivants :\r\n\r\nCentre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé,\r\nLycée de Kara 1 (Kara) à Lama Kara (Préfecture de la Kozah).\r\nLe concours comportera les épreuves écrites suivantes :\r\n\r\nPour les deux (2) options:\r\n\r\nTechniques d’expression française, durée 2 heures, coefficient 2,\r\nAnglais, durée 2 heures, coefficient 3,\r\nMathématiques, durée 4 heures, coefficient 6,\r\nLes dossiers de candidature sont à déposer dans les centres d&#039;écrit au plus tard le jeudi 30 septembre 2021 à 17 heures la date du concours est prévue sur le mardi 05 octobre 2021 à 07 heures 00.', 1),
(18, 'STAGE DE FIN D&#039;ANNEE (Licence 2ème année)', 'qlsncioduhcihbzkebhfckznpqdlkkjzezhcbb,q;cbibjzbc', 1),
(19, 'GALA IAI-TOGO 2022', 'zkjdcgizuehoczeckiuzvcozelncjhzbvciuilzekjnc hzjvcukb', 1),
(20, 'GALA IAI-TOGO', 'ez:knf:lesgnvlozehglzkjengvmlrhgohkenrrrrrrrrrrrrrrrrrrrr', 1),
(21, 'Bonjour tout le monde ', 'tout est bien ', 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `v_candidature`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `v_candidature` (
`numcandidat` int(11)
,`nom` varchar(40)
,`prenom` varchar(40)
,`sexe` char(1)
,`naissance` date
,`nationnalité` varchar(30)
,`libserie` varchar(10)
,`bacsession` varchar(10)
,`numfic` int(11)
,`nomfic` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure de la vue `v_candidature`
--
DROP TABLE IF EXISTS `v_candidature`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_candidature`  AS SELECT `c`.`numcandidat` AS `numcandidat`, `c`.`nom` AS `nom`, `c`.`prenom` AS `prenom`, `c`.`sexe` AS `sexe`, `c`.`naissance` AS `naissance`, `c`.`nationnalité` AS `nationnalité`, `s`.`libserie` AS `libserie`, `c`.`bacsession` AS `bacsession`, `f`.`numfic` AS `numfic`, `f`.`nomfic` AS `nomfic` FROM ((`candidat` `c` join `fichier` `f`) join `serie` `s`) WHERE `c`.`numcandidat` = `f`.`numfic` AND `c`.`numserie` = `s`.`numserie` ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`niveau`);

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`numcandidat`),
  ADD KEY `fk_num` (`numserie`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`idcontent`),
  ADD KEY `fk_ad` (`niveau`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`numfic`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`numserie`);

--
-- Index pour la table `supptable`
--
ALTER TABLE `supptable`
  ADD PRIMARY KEY (`idcontent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `niveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `numcandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `numfic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `numserie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `fk_ad` FOREIGN KEY (`niveau`) REFERENCES `administrateur` (`niveau`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
