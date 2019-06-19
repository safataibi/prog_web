-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 19 juin 2019 à 15:30
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cff`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_consult`
--

CREATE TABLE `demande_consult` (
  `numdemande` int(255) NOT NULL,
  `nom_patient` varchar(400) NOT NULL,
  `prenom_patient` varchar(400) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `num_tel` varchar(10) NOT NULL,
  `pays_origine` varchar(30) NOT NULL,
  `date_arrivee` varchar(15) NOT NULL,
  `langue` varchar(50) NOT NULL,
  `besoin_interprete` varchar(10) NOT NULL,
  `situ_soc_jur` varchar(100) NOT NULL,
  `mode_heberg` varchar(100) NOT NULL,
  `nom_ref_social` varchar(100) NOT NULL,
  `droits_ouverts` varchar(100) NOT NULL,
  `histoire_motif_demande` varchar(1000) NOT NULL,
  `plaintes_psy_soma` varchar(1000) NOT NULL,
  `nom_med_traitant` varchar(100) NOT NULL,
  `traitement` varchar(100) NOT NULL,
  `antécédents` varchar(100) NOT NULL,
  `autre_ref_med` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluationsymptomatique`
--

CREATE TABLE `evaluationsymptomatique` (
  `numdossierpatient` int(255) NOT NULL,
  `date_der_consult` date NOT NULL,
  `suivireal` varchar(50) NOT NULL,
  `arretsuivi` varchar(100) NOT NULL,
  `motif_fin_cure` varchar(100) NOT NULL,
  `appreciation_accompagnement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evolution_med`
--

CREATE TABLE `evolution_med` (
  `numdossierpatient` int(11) NOT NULL,
  `date_der_consult` date NOT NULL,
  `ref_psychiatrique` varchar(500) NOT NULL,
  `suivi_mis_en_place` varchar(400) NOT NULL,
  `appreciation_accompagnement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evolution_psychosociale`
--

CREATE TABLE `evolution_psychosociale` (
  `numdossierpatient` int(255) NOT NULL,
  `date_der_consult` date NOT NULL,
  `statut_admin_sortie` varchar(1000) NOT NULL,
  `hebergement` varchar(100) NOT NULL,
  `suivi_mis_en_place` varchar(100) NOT NULL,
  `appreciation_accompagnement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `numdossier` int(255) NOT NULL,
  `nompatient` varchar(100) NOT NULL,
  `nationalité` varchar(100) NOT NULL,
  `nompsy` varchar(100) NOT NULL,
  `nomtrad` varchar(100) NOT NULL,
  `langue` varchar(100) NOT NULL,
  `téléphonetrad` varchar(10) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `datenaissance` varchar(10) NOT NULL,
  `etudeouprof` varchar(50) NOT NULL,
  `situationsoc` varchar(50) NOT NULL,
  `presenfants` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `situlegadm` varchar(1000) NOT NULL,
  `lieuresidence` varchar(100) NOT NULL,
  `accessoin` varchar(100) NOT NULL,
  `dureesejour` varchar(100) NOT NULL,
  `evntvietrauma` varchar(1000) NOT NULL,
  `conditionpatient` varchar(1000) NOT NULL,
  `expresclidiag` varchar(1000) NOT NULL,
  `dateaccueil` varchar(100) NOT NULL,
  `origineref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projetth`
--

CREATE TABLE `projetth` (
  `projettherap` varchar(1000) NOT NULL,
  `difficulterencontree` varchar(1000) NOT NULL,
  `numdossierpatient` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `psy`
--

CREATE TABLE `psy` (
  `nompsy` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `idpsy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `souffrances`
--

CREATE TABLE `souffrances` (
  `numdossierpatient` int(255) NOT NULL,
  `souffrancepays` int(5) NOT NULL,
  `souffranceexil` int(5) NOT NULL,
  `souffrancefrance` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `therapie`
--

CREATE TABLE `therapie` (
  `numdossierpatient` int(255) NOT NULL,
  `typetherapie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `traducteurs`
--

CREATE TABLE `traducteurs` (
  `nomtrad` varchar(100) NOT NULL,
  `languetrad` varchar(100) NOT NULL,
  `teltrad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande_consult`
--
ALTER TABLE `demande_consult`
  ADD PRIMARY KEY (`numdemande`);

--
-- Index pour la table `evaluationsymptomatique`
--
ALTER TABLE `evaluationsymptomatique`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `evolution_med`
--
ALTER TABLE `evolution_med`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `evolution_psychosociale`
--
ALTER TABLE `evolution_psychosociale`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`numdossier`);

--
-- Index pour la table `projetth`
--
ALTER TABLE `projetth`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `psy`
--
ALTER TABLE `psy`
  ADD PRIMARY KEY (`nompsy`);

--
-- Index pour la table `souffrances`
--
ALTER TABLE `souffrances`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `therapie`
--
ALTER TABLE `therapie`
  ADD PRIMARY KEY (`numdossierpatient`);

--
-- Index pour la table `traducteurs`
--
ALTER TABLE `traducteurs`
  ADD PRIMARY KEY (`nomtrad`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande_consult`
--
ALTER TABLE `demande_consult`
  MODIFY `numdemande` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
