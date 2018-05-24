USE Voyage;

DROP TABLE IF EXISTS Partenaire;

CREATE TABLE Partenaire (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048) NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Partenaire` (`name`, `image`, `alt`, `type`) VALUES ('Fujifilm', 'fujifilm.png', 'alt', 'Photo');
INSERT INTO `Partenaire` (`name`, `image`, `alt`, `type`) VALUES ('Nikon', 'nikon.png', 'Nikon', 'Photo');
INSERT INTO `Partenaire` (`name`, `image`, `alt`, `type`) VALUES ('Adp', 'adp.png', 'Nikon', 'aeroport');


USE Voyage;

DROP TABLE IF EXISTS Article;

CREATE TABLE Article (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(110) NOT NULL,
  `texte` VARCHAR(3000) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `date` VARCHAR(100)NOT NULL,
  `auteur` VARCHAR(40)NOT NULL,
  `signature` VARCHAR(200) NOT NULL,
  `logo` VARCHAR(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('8 expériences à tester pour vivre comme les australiens', 'loremzefzefzfe', 'autraslie.jpeg', 'autraslie', '',  'italie', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('VILA BUARQUE LE QUARTIER BOHÈME DE SÃO PAULO', 'loremzffefez', 'bresil.jpeg', 'Brésil', '',  'Brésil', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Polynésie, carnet pratique', 'lorem', 'polynésie.jpeg', 'polynésie', '',  'polynésie', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Les plus beaux hôtels d Islande', 'lorem', 'islande.jpeg', 'islande', '',  'islande', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Les plus belles plages de Corse', 'lorem', 'france.jpeg', 'rance', '',  'france', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Laponie, carnet pratique', 'lorem', 'finlande.jpeg', 'finlande', '',  'finlande', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Les plus beaux sommets du Japon', 'lorem', 'japon.jpeg', 'japon', '',  'japon', 'lorem', '');
INSERT INTO `Article` (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`) VALUES ('Bangkok VS Singapour : Le match en 10 rounds', 'lorem', 'bangkokvssingapour.jpeg', 'bangkokvssingapour', '',  'bangkokvssingapour', 'lorem', '');




USE Voyage;

DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Admin` (`pseudo`, `password`) VALUES ('admin', 'admin');


USE Voyage;

DROP TABLE IF EXISTS Top;

CREATE TABLE Top (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `type` VARCHAR(100) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `desc` VARCHAR(1000)NOT NULL,
  `Adresse` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



USE Voyage;

DROP TABLE IF EXISTS Boite;

CREATE TABLE Boite (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` VARCHAR(2048) NOT NULL,
  `image1` VARCHAR(2048) NOT NULL,
  `image2` VARCHAR(2048)NOT NULL,
  `image3` VARCHAR(2048)NOT NULL,
  `image4` VARCHAR(2048)NOT NULL,
  `image5` VARCHAR(2048)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Boite` (`image`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES ('plat.png', 'plat1.png', 'plat2.png', 'plat4.png', 'plat4.png', 'plat5.png');



USE Voyage;

DROP TABLE IF EXISTS Twitter;

CREATE TABLE Twitter (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


USE Voyage;

DROP TABLE IF EXISTS Fiche;

CREATE TABLE Fiche (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `desc` VARCHAR(1000)NOT NULL,
  `rating` VARCHAR(200)NOT NULL,
  `location` VARCHAR(200)NOT NULL,
  `cost` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Fiche` (`name`, `desc`, `rating`, `location`, `cost`) VALUES ('Lorem', 'lorem', '5', 'lorem', '1');
INSERT INTO `Fiche` (`name`, `desc`, `rating`, `location`, `cost`) VALUES ('Lorem', 'lorem', '3', 'lorem', '2');
INSERT INTO `Fiche` (`name`, `desc`, `rating`, `location`, `cost`) VALUES ('Lorem', 'lorem', '2', 'lorem', '5');


USE Voyage;

DROP TABLE IF EXISTS Bon;

CREATE TABLE Bon (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `from` VARCHAR(100) NOT NULL,
  `to` VARCHAR(100) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `date` VARCHAR(100)NOT NULL,
  `price` VARCHAR(40)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Bon` (`from`, `to`, `image`, `alt`, `date`, `price`) VALUES ('France', 'Brésil', '', '', '27/05/18 - 30/05/18', '€€€');
INSERT INTO `Bon` (`from`, `to`, `image`, `alt`, `date`, `price`) VALUES ('Finlande', 'italie', '', '', '02/06/18 - 02/07/18', '€€€€');
INSERT INTO `Bon` (`from`, `to`, `image`, `alt`, `date`, `price`) VALUES ('islande', 'polynésie', '', '', '15/01/18 - 30/01/18', '€');
INSERT INTO `Bon` (`from`, `to`, `image`, `alt`, `date`, `price`) VALUES ('france', 'japon', '', '', '27/11/18 - 30/12/18', '€€');





