-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 23 mars 2020 à 09:03
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moviedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `movielist`
--

DROP TABLE IF EXISTS `movielist`;
CREATE TABLE IF NOT EXISTS `movielist` (
  `movieId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`movieId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movielist`
--

INSERT INTO `movielist` (`movieId`, `Name`, `Genre`, `Director`, `Description`, `image`, `imdb`) VALUES
(1, 'Batman Begins', 'Action', 'Christopher Nolan', 'Comment un homme seul peut-il changer le monde ? Telle est la question qui hante Bruce Wayne depuis cette nuit tragique ou ses parents furent abattus sous ses yeux, dans une ruelle de Gotham City', 'batman.jpg', '9.5'),
(2, 'Spider-Man: Homecoming (2017)', 'Aventure', 'Jon Watts', 'Apres ses spectaculaires debuts avec les Avengers, le jeune Peter Parker decouvre peu a peu sa nouvelle identite, celle de Spider-Man, le superheros lanceur de toile.', 'spiderman.jpg', '8.5'),
(3, 'Fight Club', 'Action', 'David Fincher', 'Jack est un jeune expert en assurance insomniaque, désillusionne par sa vie personnelle et professionnelle.', 'fightClub.jpg', '8.8'),
(4, 'Gladiator', 'Action', 'Ridley Scott', 'Le general romain Maximus est le plus fidele soutien de l\'empereur Marc Aurele, qu\'il a conduit de victoire en victoire.', 'gladiator.jpg', '8.5'),
(5, 'Star Wars', 'Aventure', 'George Lucas', 'Star Wars est un univers de fantasy et de science-fiction cree par George Lucas. D\'abord conçue comme une trilogie cinematographique sortie entre 1977 et 1983', 'starwars.png', '9'),
(6, 'Despicable Me 3', 'Comedie', 'Pierre Coffin, Kyle Balda', 'Gru voyage a Freedonia pour rencontrer son frere jumeau pour la première fois. Les freres décident de former une alliance et de faire tomber Balthazar Bratt', 'despicableme.jpg', '6.4');

-- --------------------------------------------------------

--
-- Structure de la table `showorder`
--

DROP TABLE IF EXISTS `showorder`;
CREATE TABLE IF NOT EXISTS `showorder` (
  `showOrderId` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  PRIMARY KEY (`showOrderId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `showorder`
--

INSERT INTO `showorder` (`showOrderId`, `date`, `timeslot`, `theater`, `movieName`, `seat`) VALUES
(1, '2017-07-30', '11.00', 'Basundhara Cineplex', 'Batman Begins', '49'),
(2, '2017-07-31', '5.00', 'BlockBluster', 'Gladiator', '49'),
(3, '2017-08-01', '2.00', 'Balaka Cineplex', 'Spider-Man: Homecoming (2017)', '48'),
(4, '2017-08-16', '8.00', 'Balaka Cineplex', 'Batman Begins', '49'),
(5, '2017-08-23', '11.00', 'Basundhara Cineplex', 'Batman Begins', '50'),
(6, '2017-08-17', '2.00', 'Basundhara Cineplex', 'Batman Begins', '48'),
(7, '2017-11-16', '11.00', 'Shamoly Cineplex', 'Batman Begins', '50');

-- --------------------------------------------------------

--
-- Structure de la table `theater`
--

DROP TABLE IF EXISTS `theater`;
CREATE TABLE IF NOT EXISTS `theater` (
  `theaterId` int(11) NOT NULL AUTO_INCREMENT,
  `theaterName` varchar(255) DEFAULT NULL,
  `seat` int(11) NOT NULL,
  PRIMARY KEY (`theaterId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `theater`
--

INSERT INTO `theater` (`theaterId`, `theaterName`, `seat`) VALUES
(1, 'Basundhara Cineplex', 50),
(2, 'BlockBluster', 45),
(3, 'Balaka Cineplex', 60),
(4, 'Shamoly Cineplex', 70);

-- --------------------------------------------------------

--
-- Structure de la table `timeslot`
--

DROP TABLE IF EXISTS `timeslot`;
CREATE TABLE IF NOT EXISTS `timeslot` (
  `timeslotId` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`timeslotId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `timeslot`
--

INSERT INTO `timeslot` (`timeslotId`, `time`) VALUES
(1, '11.00'),
(2, '2.00'),
(3, '5.00'),
(4, '8.00'),
(5, '9.00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `status`) VALUES
(1, 'admin', 'admin', 101),
(3, 'user', 'user', 202);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
