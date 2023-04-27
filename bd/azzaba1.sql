-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 17 déc. 2022 à 19:56
-- Version du serveur : 10.4.8-MariaDB
-- Version de PHP : 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `azzaba1`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `CIN` varchar(20) NOT NULL,
  `N_Co` int(11) NOT NULL,
  `drConsommation` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Adresse` varchar(500) NOT NULL,
  `Tele` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `Emal` varchar(100) NOT NULL,
  `pvDemande` varchar(100) NOT NULL,
  `pvContrat` varchar(100) NOT NULL,
  `pvInstalation` varchar(100) NOT NULL,
  `Ncompteur` int(11) NOT NULL,
  `village` varchar(100) NOT NULL,
  `CINpng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`CIN`, `N_Co`, `drConsommation`, `Nom`, `Prenom`, `Adresse`, `Tele`, `credit`, `Emal`, `pvDemande`, `pvContrat`, `pvInstalation`, `Ncompteur`, `village`, `CINpng`) VALUES
('4234', 3245, 0, 'asd', 'asd', 'dasd', 213, 199, 'ads@qw', '', '', '', 2342, 'chadga', ''),
('1231', 21312, 1665, 'mohammed', 'zouitije', '12rtw uao', 132132, 1000, 'qayw@qqw.com', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview.png', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview (3).png', 'WhatsApp Image 2022-04-03 at 11.52.04.jpeg', 14513, 'chadga', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview.png'),
('cb1234567', 234567, 0, 'noqt', 'ywty', 'trtqrr', 34567890, 900, 'ereq@wh.co;l', '12.png', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview (3).png', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview (1).png', 2345, 'chadga', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview.png'),
('cb1300986', 21312323, 0, 'Achraf', 'REUU', '12 ru sefrou', 1233232, 1092, 'wreqe@uuw', '12 (2).png', 'WhatsApp Image 2022-04-03 at 11.52.03.jpeg', 'WhatsApp_Image_2022-04-03_at_11.52.03-removebg-preview.png', 31321423, 'chadga', '12.png');

-- --------------------------------------------------------

--
-- Structure de la table `communaut`
--

CREATE TABLE `communaut` (
  `idCo` int(11) NOT NULL,
  `NoCommunaut` varchar(100) NOT NULL,
  `Village` varchar(100) NOT NULL,
  `Totalpayment` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `communaut`
--

INSERT INTO `communaut` (`idCo`, `NoCommunaut`, `Village`, `Totalpayment`) VALUES
(1, 'Azzaba', 'chadga', 0),
(2, 'azzaba', 'azzaba', NULL),
(3, 'azzaba', 'lhrayq', NULL),
(4, 'azzaba', 'aybouho', NULL),
(12, 'Azzaba', 'moghita', NULL),
(13, 'Azzaba', 'lwata', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `consomation`
--

CREATE TABLE `consomation` (
  `N_con` int(11) NOT NULL,
  `consomation_Total` double NOT NULL,
  `consomation_Tranch` double NOT NULL,
  `dateTour` date NOT NULL,
  `N_contrat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `N_fac` int(11) NOT NULL,
  `PrixFact` double NOT NULL,
  `dernire_datePayment` date NOT NULL,
  `consomation` int(11) NOT NULL,
  `N_contrat` int(11) NOT NULL,
  `Id_pret` int(11) DEFAULT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `N_Payment` int(11) NOT NULL,
  `date_payment` date NOT NULL,
  `N_Facture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

CREATE TABLE `prets` (
  `id_p` int(11) NOT NULL,
  `prets` double NOT NULL,
  `N_contrat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `userfin`
--

CREATE TABLE `userfin` (
  `ID` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `userjr`
--

CREATE TABLE `userjr` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `usertc`
--

CREATE TABLE `usertc` (
  `ID` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`N_Co`);

--
-- Index pour la table `communaut`
--
ALTER TABLE `communaut`
  ADD PRIMARY KEY (`idCo`);

--
-- Index pour la table `consomation`
--
ALTER TABLE `consomation`
  ADD PRIMARY KEY (`N_con`),
  ADD KEY `FKCONTRAT` (`N_contrat`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`N_fac`),
  ADD KEY `facture_ibfk_2` (`N_contrat`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`N_Payment`),
  ADD KEY `payment_ibfk_1` (`N_Facture`);

--
-- Index pour la table `prets`
--
ALTER TABLE `prets`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `userfin`
--
ALTER TABLE `userfin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `userjr`
--
ALTER TABLE `userjr`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `usertc`
--
ALTER TABLE `usertc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `communaut`
--
ALTER TABLE `communaut`
  MODIFY `idCo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `consomation`
--
ALTER TABLE `consomation`
  MODIFY `N_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `N_fac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `N_Payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consomation`
--
ALTER TABLE `consomation`
  ADD CONSTRAINT `FKCONTRAT` FOREIGN KEY (`N_contrat`) REFERENCES `adherent` (`N_Co`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`N_contrat`) REFERENCES `adherent` (`N_Co`),
  ADD CONSTRAINT `facture_ibfk_3` FOREIGN KEY (`Id_pret`) REFERENCES `prets` (`id_p`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`N_Facture`) REFERENCES `facture` (`N_fac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
