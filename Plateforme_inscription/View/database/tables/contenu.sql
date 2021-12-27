-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 déc. 2021 à 11:56
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

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
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `idcontent` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`idcontent`, `titre`, `description`, `niveau`) VALUES
(1, 'COMMUNIQUE CONCOURS IAI-TOGO 2020-2021', 'Le Ministre de la Planification du Développement porte à la connaissance du public qu’il est ouvert chaque année un concours d’entrée en 1ère année du Cycle « Ingénieur des Travaux Informatiques (Licence Professionnelle) » options Génie Logiciel (GL), Systèmes et Réseaux (SR) de l’Institut Africain d’Informatique, Représentation du Togo (IAI-TOGO).\n\nLe concours se déroulera dans les centres d’écrit suivants :\n\nCentre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé,\nLycée de Kara 1 (Kara) à Lama Kara (Préfecture de la Kozah).\nLe concours comportera les épreuves écrites suivantes :\n\nPour les deux (2) options:\n\nTechniques d’expression française, durée 2 heures, coefficient 2,\nAnglais, durée 2 heures, coefficient 3,\nMathématiques, durée 4 heures, coefficient 6,\nLes dossiers de candidature sont à déposer dans les centres d\'écrit au plus tard le jeudi 30 septembre 2021 à 17 heures la date du concours est prévue sur le mardi 05 octobre 2021 à 07 heures 00.', 1),
(4, 'GALA IAI-TOGO', 'Une soirée de Gala est organisé par les étudiants. Tous doivent une participation. Veuillez noter que les tenues de Galas sont exigées. Soyez élégants.\r\n\r\nNB: Les frais de participation s\'élèvent à 1000 FCA par personne. ', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`idcontent`),
  ADD KEY `fk_ad` (`niveau`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
