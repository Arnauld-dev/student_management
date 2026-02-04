-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 jan. 2026 à 22:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `information_student`
--

-- --------------------------------------------------------

--
-- Structure de la table `aboutpage`
--

CREATE TABLE `aboutpage` (
  `pagetitle` varchar(500) NOT NULL,
  `pagedescription` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `classename` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contactus`
--

CREATE TABLE `contactus` (
  `pagetitle` varchar(200) NOT NULL,
  `pagedescription` varchar(1000) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `mobile_number` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `homework`
--

CREATE TABLE `homework` (
  `id` int(11) NOT NULL,
  `homeworktitle` varchar(1000) NOT NULL,
  `homeworkfor` varchar(200) NOT NULL,
  `homeworkdescription` varchar(4000) NOT NULL,
  `dateHomework` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `homework`
--

INSERT INTO `homework` (`id`, `homeworktitle`, `homeworkfor`, `homeworkdescription`, `dateHomework`) VALUES
(1, '', '', '', '0000-00-00 00:00:00'),
(2, 'hfj', 'hfhf', 'hghg', '2026-01-05 00:00:00'),
(3, 'hfj', 'hfhf', 'hghg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `notice`
--

CREATE TABLE `notice` (
  `id_notice` int(11) NOT NULL,
  `noticetitle` varchar(500) NOT NULL,
  `noticefor` varchar(50) NOT NULL,
  `noticemessage` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notice`
--

INSERT INTO `notice` (`id_notice`, `noticetitle`, `noticefor`, `noticemessage`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `notice_public`
--

CREATE TABLE `notice_public` (
  `id_notice_public` int(11) NOT NULL,
  `notice_title` varchar(1000) NOT NULL,
  `notice_message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `student_information`
--

CREATE TABLE `student_information` (
  `id` int(11) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `studentmail` varchar(700) NOT NULL,
  `studentclasse` varchar(200) NOT NULL,
  `dateofbirthday` date NOT NULL,
  `gender` varchar(500) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `mothername` varchar(200) NOT NULL,
  `contactnumber` varchar(70) NOT NULL,
  `alternative` varchar(300) NOT NULL,
  `addresse` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id_notice`);

--
-- Index pour la table `notice_public`
--
ALTER TABLE `notice_public`
  ADD PRIMARY KEY (`id_notice_public`);

--
-- Index pour la table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `notice`
--
ALTER TABLE `notice`
  MODIFY `id_notice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `notice_public`
--
ALTER TABLE `notice_public`
  MODIFY `id_notice_public` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
