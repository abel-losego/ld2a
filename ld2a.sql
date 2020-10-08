-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 29 sep. 2020 à 10:04
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `LD2A`
--

-- --------------------------------------------------------

--
-- Structure de la table `ForRecCon`
--

CREATE TABLE `ForRecCon` (
  `accroEquipe` varchar(3) NOT NULL,
  `FRExGoO` int(50) NOT NULL,
  `FRExGoD` int(50) NOT NULL,
  `FRBuMa` int(50) NOT NULL,
  `FRBuEn` int(50) NOT NULL,
  `FRMoBu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ForRecDom`
--

CREATE TABLE `ForRecDom` (
  `accroEquipe` varchar(3) NOT NULL,
  `FRExGoDom` int(50) NOT NULL,
  `FRExGdDom` int(50) NOT NULL,
  `FRBuMaDom` int(50) NOT NULL,
  `FRBuEnDom` int(50) NOT NULL,
  `FRMoBuDom` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ForRecExt`
--

CREATE TABLE `ForRecExt` (
  `accroEquipe` varchar(3) NOT NULL,
  `FRExGoExt` int(50) NOT NULL,
  `FRExGdExt` int(50) NOT NULL,
  `FRBuMaExt` int(50) NOT NULL,
  `FRBuEnExt` int(50) NOT NULL,
  `FRMoBuExt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ForSaiCon`
--

CREATE TABLE `ForSaiCon` (
  `accroEquipe` varchar(3) NOT NULL,
  `FSExGo` double(255,0) NOT NULL,
  `FSExGd` double(255,0) NOT NULL,
  `FSBuMa` double(255,0) NOT NULL,
  `FSBuEn` double(255,0) NOT NULL,
  `FSMoBu` double(120,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ForSaiDom`
--

CREATE TABLE `ForSaiDom` (
  `accroEquipe` varchar(3) NOT NULL,
  `FSExGoDom` double(255,0) NOT NULL,
  `FSExGdDom` double(255,0) NOT NULL,
  `FSBuMaDom` double(255,0) NOT NULL,
  `FSBuEnDom` double(255,0) NOT NULL,
  `FSMoBuDom` double(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ForSaiExt`
--

CREATE TABLE `ForSaiExt` (
  `accroEquipe` varchar(3) NOT NULL,
  `FSExGoExt` double(255,0) NOT NULL,
  `FSExGdExt` double(255,0) NOT NULL,
  `FSBuMaExt` double(255,0) NOT NULL,
  `FSBuEnExt` double(255,0) NOT NULL,
  `FSMoBuExt` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statsEquipes`
--

CREATE TABLE `statsEquipes` (
  `accroEquipe` varchar(3) NOT NULL,
  `nomEquipe` varchar(30) NOT NULL,
  `ClassementAct` int(20) NOT NULL,
  `ClassementAnnPass` int(20) NOT NULL,
  `Note` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ForRecCon`
--
ALTER TABLE `ForRecCon`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `ForRecDom`
--
ALTER TABLE `ForRecDom`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `ForRecExt`
--
ALTER TABLE `ForRecExt`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `ForSaiCon`
--
ALTER TABLE `ForSaiCon`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `ForSaiDom`
--
ALTER TABLE `ForSaiDom`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `ForSaiExt`
--
ALTER TABLE `ForSaiExt`
  ADD PRIMARY KEY (`accroEquipe`);

--
-- Index pour la table `statsEquipes`
--
ALTER TABLE `statsEquipes`
  ADD PRIMARY KEY (`accroEquipe`);