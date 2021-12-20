-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 déc. 2021 à 09:58
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
-- Structure de la vue `v_candidature`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_candidature`  AS SELECT `c`.`numcandidat` AS `numcandidat`, `c`.`nom` AS `nom`, `c`.`prenom` AS `prenom`, `c`.`sexe` AS `sexe`, `c`.`naissance` AS `naissance`, `c`.`nationnalité` AS `nationnalité`, `s`.`libserie` AS `libserie`, `c`.`bacsession` AS `bacsession`, `f`.`numfic` AS `numfic`, `f`.`nomfic` AS `nomfic` FROM ((`candidat` `c` join `fichier` `f`) join `serie` `s`) WHERE `c`.`numcandidat` = `f`.`numfic` AND `c`.`numserie` = `s`.`numserie` ;

--
-- VIEW `v_candidature`
-- Données : Aucun(e)
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
