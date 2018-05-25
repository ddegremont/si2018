-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 25 mai 2018 à 05:07
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `alde`
--

DROP TABLE IF EXISTS `alde`;
CREATE TABLE IF NOT EXISTS `alde` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `alde`
--

INSERT INTO `alde` (`id`, `name`) VALUES
(2, 'ParisAeroport'),
(10, 'NikonNews');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `Text`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi deleniti non asperiores, temporibus tenetur debitis error, ipsam consequuntur. Voluptates, est at eos, cum recusandae consectetur enim sint, quidem tenetur neque ullam. Cupiditate ullam odit voluptates officia iusto illum reprehenderit culpa minus recusandae ad, architecto esse sequi enim tempora accusamus, optio consectetur vero, mollitia doloribus illo cum placeat dolorum magnam aliquam.');

-- --------------------------------------------------------

--
-- Structure de la table `kin`
--

DROP TABLE IF EXISTS `kin`;
CREATE TABLE IF NOT EXISTS `kin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `kin`
--

INSERT INTO `kin` (`id`, `img`, `titre`) VALUES
(9, 'https://lemag.nikonclub.fr/wp-content/uploads/2017/07/08.jpg', 'Montagne 2 :>');

-- --------------------------------------------------------

--
-- Structure de la table `moman`
--

DROP TABLE IF EXISTS `moman`;
CREATE TABLE IF NOT EXISTS `moman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aled',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moman`
--

INSERT INTO `moman` (`id`, `img`, `url`) VALUES
(9, 'http://www.parisaeroport.fr/images/default-source/logos-adp/logo_adp_home.png?sfvrsn=702f08bd_40', 'http://www.parisaeroport.fr/'),
(12, 'http://banan.kg/u/brands/nikon.png', 'https://www.nikon.fr/fr_FR/');

-- --------------------------------------------------------

--
-- Structure de la table `top100`
--

DROP TABLE IF EXISTS `top100`;
CREATE TABLE IF NOT EXISTS `top100` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `top100`
--

INSERT INTO `top100` (`id`, `img`, `title`, `location`, `text`, `iframe`, `qr`) VALUES
(1, 'https://www.lachambredamiens.com/wp-content/uploads/2017/03/chambre.jpg', 'Hotel St Michel', '27 Bis Rue du Progres, 93100 Montreuil', 'Aujourd\'hui, Solary accueille dans son equipe deux nouveaux joueurs hyper talentueux qui vont apporter une plus\r\n\r\n competitif a la composition : Duncan \"Skeanz\" Marquet au poste de jungle et Jean \"Trayton\" Medzadourian comme support.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2698.767959326313!2d0.6931077156246056!3d47.43596777917367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fcd52792a05f21%3A0x6db2ef34c3a7a517!2sSOLARY+TV+PRODUCTION!5e0!3m2!1sfr!2sfr!4v1527220001358', 'https://cdnqrcgde.s3-eu-west-1.amazonaws.com/wp-content/uploads/2013/11/jpeg.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
