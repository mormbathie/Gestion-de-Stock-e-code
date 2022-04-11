-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 oct. 2021 à 02:05
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gesstock`
--

-- --------------------------------------------------------

--
-- Structure de la table `be`
--

CREATE TABLE `be` (
  `NUMBE` int(11) NOT NULL,
  `NUMFRS` int(11) NOT NULL,
  `DATEBE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `be`
--

INSERT INTO `be` (`NUMBE`, `NUMFRS`, `DATEBE`) VALUES
(1, 3, '2021-09-07'),
(2, 6, '2021-09-13'),
(3, 4, '2021-09-13'),
(4, 7, '2021-09-13'),
(5, 8, '2021-09-13'),
(6, 7, '2021-09-13'),
(7, 4, '2021-09-15'),
(8, 5, '2021-09-30'),
(9, 6, '2021-09-16'),
(10, 7, '2021-09-08'),
(11, 8, '2021-09-23'),
(12, 5, '2021-09-16'),
(13, 5, '2021-09-16'),
(14, 13, '2021-09-29'),
(15, 15, '2021-09-16'),
(16, 13, '2021-09-29');

-- --------------------------------------------------------

--
-- Structure de la table `bs`
--

CREATE TABLE `bs` (
  `NUMBS` int(11) NOT NULL,
  `DATEBS` date DEFAULT NULL,
  `CLIENT` varchar(25) DEFAULT NULL,
  `ADRESSE` varchar(100) DEFAULT NULL,
  `TELCLI` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bs`
--

INSERT INTO `bs` (`NUMBS`, `DATEBS`, `CLIENT`, `ADRESSE`, `TELCLI`) VALUES
(1, '2021-09-21', 'Oussmane ', 'Parcelles Assainies', '33 835 47 19'),
(2, '2021-09-16', 'MBAYE SECK', 'Parcelles Assainies', '77 164 56 78'),
(3, '2021-09-17', 'Galaye Cisse', 'Parcelles Assainies', '77 123 45 67'),
(4, '2021-09-17', 'Bobo Dillo', 'Parcelles Assainies', '77 890 56 78'),
(5, '2021-09-29', 'M Bobo Dillo', 'Yoff', '00221 77 678 34 90');

-- --------------------------------------------------------

--
-- Structure de la table `detaillebe`
--

CREATE TABLE `detaillebe` (
  `NUMDETAIL` int(11) NOT NULL,
  `NUMBE` int(11) NOT NULL,
  `NUMPRODUIT` int(11) NOT NULL,
  `QTEENTREE` decimal(9,0) DEFAULT NULL,
  `PRIXUNIT` decimal(9,0) DEFAULT NULL,
  `UNITE` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detaillebe`
--

INSERT INTO `detaillebe` (`NUMDETAIL`, `NUMBE`, `NUMPRODUIT`, `QTEENTREE`, `PRIXUNIT`, `UNITE`) VALUES
(1, 1, 9, '20', '100000', 'FCFA'),
(2, 1, 2, '20', '1000', 'FCFA'),
(3, 1, 8, '20', '16000', 'FCFA'),
(4, 2, 8, '200', '15000', 'KG'),
(5, 2, 12, '20', '10000', 'FCFA'),
(6, 10, 6, '200', '20000', 'KG'),
(7, 2, 5, '13', '100000', 'KG'),
(8, 14, 9, '34', '1000', 'Piece'),
(9, 5, 9, '12', '100000', 'Piece'),
(10, 16, 10, '10', '150000', 'pièce'),
(11, 16, 5, '2', '130000', 'pièce');

-- --------------------------------------------------------

--
-- Structure de la table `detaillebs`
--

CREATE TABLE `detaillebs` (
  `NUMDBS` int(11) NOT NULL,
  `NUMPRODUIT` int(11) NOT NULL,
  `NUMBS` int(11) NOT NULL,
  `QTESORTANT` decimal(9,0) DEFAULT NULL,
  `PRIXUNITAIRE` decimal(9,0) DEFAULT NULL,
  `UNITE` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detaillebs`
--

INSERT INTO `detaillebs` (`NUMDBS`, `NUMPRODUIT`, `NUMBS`, `QTESORTANT`, `PRIXUNITAIRE`, `UNITE`) VALUES
(1, 1, 1, '12', '1200', 'FCF'),
(2, 3, 1, '12', '1500', 'FCFA'),
(3, 5, 1, '12', '130000', 'FCFA'),
(4, 4, 2, '5', '12', 'KG'),
(5, 4, 3, '2', '1456', 'pièce'),
(6, 8, 4, '1345', '1000', 'pièce'),
(7, 12, 1, '3', '650000', 'pièce'),
(8, 8, 5, '10', '12000', 'pièce'),
(9, 9, 5, '1', '90000', 'pièce');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `NUMFRS` int(11) NOT NULL,
  `NOMFRS` varchar(25) DEFAULT NULL,
  `PRENOMFRS` varchar(25) DEFAULT NULL,
  `ADRESSFRS` varchar(100) DEFAULT NULL,
  `TELFRS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`NUMFRS`, `NOMFRS`, `PRENOMFRS`, `ADRESSFRS`, `TELFRS`) VALUES
(12, 'mbathie', 'mor', 'DAKAR PARCELLES RUE MAME ABDOU', '+221 774595970'),
(13, 'Silva', 'Boris', 'Yoof', '+221 78 567 34 89'),
(14, 'Mamitah', 'Diouf', 'Dieuppeul', '00221 77 456 34 90'),
(15, 'mbathie', 'Mouhamed ', 'DAKAR PARCELLES RUE MAME ABDOU', '+221 77 744 43 91');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `NUMPRODUIT` int(11) NOT NULL,
  `DESIGNIATION` varchar(30) DEFAULT NULL,
  `QTESTOCK` decimal(9,0) DEFAULT NULL,
  `SEUILMIN` decimal(2,0) DEFAULT NULL,
  `SEUILMAX` decimal(9,0) DEFAULT NULL,
  `Date_Peremption` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`NUMPRODUIT`, `DESIGNIATION`, `QTESTOCK`, `SEUILMIN`, `SEUILMAX`, `Date_Peremption`) VALUES
(1, 'CHOCOLAT', '500', '12', '5000', '2021-09-13'),
(3, 'Thon', '300', '10', '5000', '2021-09-07'),
(5, 'Iphone 7+', '500', '30', '10000', '2021-09-06'),
(6, 'Iphone X', '200', '20', '1000', '2021-09-06'),
(8, 'KASPERSKY', '10000', '10', '100000', '2021-09-06'),
(9, 'Samsung galaxy A20S', '100', '10', '300', '0000-00-00'),
(10, 'Ordinateur HP 615', '20', '10', '100', '2021-09-06'),
(11, 'Téléviseur LED 19 Pouces', '20', '10', '100', '2021-09-06');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `IDUSERS` int(10) UNSIGNED NOT NULL,
  `NOM` varchar(40) NOT NULL,
  `PRENOM` varchar(40) NOT NULL,
  `LOGIN` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `PROFIL` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`IDUSERS`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `PROFIL`) VALUES
(1, 'MBATHIE', 'MOR', 'mormbathie98', '1234', 'Utilisateur'),
(2, 'MBATHIE', 'MOUHAMED', 'mou', '12', 'Utilisateur'),
(3, 'MBATHIE', 'ALADJI', 'alj', '15', 'Utilisateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `be`
--
ALTER TABLE `be`
  ADD PRIMARY KEY (`NUMBE`),
  ADD KEY `FK_FOURNIS` (`NUMFRS`);

--
-- Index pour la table `bs`
--
ALTER TABLE `bs`
  ADD PRIMARY KEY (`NUMBS`);

--
-- Index pour la table `detaillebe`
--
ALTER TABLE `detaillebe`
  ADD PRIMARY KEY (`NUMDETAIL`),
  ADD KEY `FK_APPARTIEN` (`NUMPRODUIT`),
  ADD KEY `FK_GENERE` (`NUMBE`);

--
-- Index pour la table `detaillebs`
--
ALTER TABLE `detaillebs`
  ADD PRIMARY KEY (`NUMDBS`),
  ADD KEY `FK_PEUT_FAIRE_L_OBJET` (`NUMBS`),
  ADD KEY `FK_RETOURNE` (`NUMPRODUIT`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`NUMFRS`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`NUMPRODUIT`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDUSERS`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `be`
--
ALTER TABLE `be`
  MODIFY `NUMBE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `bs`
--
ALTER TABLE `bs`
  MODIFY `NUMBS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `detaillebe`
--
ALTER TABLE `detaillebe`
  MODIFY `NUMDETAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `detaillebs`
--
ALTER TABLE `detaillebs`
  MODIFY `NUMDBS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `NUMFRS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `NUMPRODUIT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `IDUSERS` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
