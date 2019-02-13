-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 fév. 2019 à 18:14
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `ID_com` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Users` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`ID_com`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`ID_com`, `ID_Users`, `ID_film`, `note`, `com`) VALUES
(19, 11, 9, 14, 'Ce film contient Sean Connery en slip rouge'),
(18, 11, 7, 17, 'Le meilleur Nanard de la décénie '),
(16, 1, 1, 12, 'e'),
(17, 1, 7, 5, 'Mais WTF!!!?'),
(15, 1, 2, 12, 'fregregreg'),
(14, 1, 4, 19, 'Le meilleur film de clint Eastwood'),
(12, 2, 1, 18, 'LA boxe à son meilleur');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `ID_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `realisateur` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `affiche` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_film`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`ID_film`, `titre`, `realisateur`, `genre`, `affiche`) VALUES
(1, 'Raging Bull', 'Martin Scorsese', 'Action', 'http://static1.purepeople.com/articles/9/71/34/9/@/537883-l-affiche-de-raging-bull-950x0-3.jpg'),
(2, 'Deadpool', 'Tim Miller', 'Action', 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.1bKmByglRjKI3a0myDWR_QAAAA%26pid%3D15.1&f=1'),
(3, 'Léon', 'Luc Besson', 'Thriller', 'https://m.media-amazon.com/images/M/MV5BZDAwYTlhMDEtNTg0OS00NDY2LWJjOWItNWY3YTZkM2UxYzUzXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SY1000_CR0,0,710,1000_AL_.jpg'),
(4, 'Gran Torino', 'Clint Eastwood', 'Drame', 'https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fimage.tmdb.org%2Ft%2Fp%2Foriginal%2F3pzxCDsNBG6GnIgXtESmn32mVEq.jpg&f=1'),
(7, 'Beowulf', 'Graham Baker', 'action', 'https://m.media-amazon.com/images/M/MV5BZDk0N2Q5ZDktNWMyZC00NGI1LThmMWEtNTE3YjM0Nzg5YzAyXkEyXkFqcGdeQXVyNzA4ODc3ODU@._V1_UY268_CR4,0,182,268_AL_.jpg'),
(9, 'Zardoz', ' John Boorman', 'fantasy', 'https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.senscritique.com%2Fmedia%2F000015277353%2Fsource_big%2FZardoz.jpg&f=1');

-- --------------------------------------------------------

--
-- Structure de la table `film_users`
--

DROP TABLE IF EXISTS `film_users`;
CREATE TABLE IF NOT EXISTS `film_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Users` int(10) NOT NULL,
  `ID_film` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film_users`
--

INSERT INTO `film_users` (`ID`, `ID_Users`, `ID_film`) VALUES
(36, 11, 9),
(35, 11, 7),
(34, 1, 7),
(32, 1, 1),
(29, 1, 4),
(31, 1, 2),
(27, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_User`, `username`, `pass`, `email`) VALUES
(1, 'yolo', 'yolo', 'yolo.yolo@yolo.fr'),
(2, 'davai', 'davai', 'davai.davai@davai.fr'),
(11, 'yvan', 'yvan', 'yvan.yvan@yvan.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
