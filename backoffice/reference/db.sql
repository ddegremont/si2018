DROP SCHEMA IF EXISTS `Voyage`;

CREATE SCHEMA `Voyage`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

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

INSERT INTO `Partenaire` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'partenaire1', 'test.jpg', 'alt', 'type');
INSERT INTO `Partenaire` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'partenaire2', 'test.jpg', 'alt', 'type');

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


INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article1','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article2','text','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article3','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article4','text','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article5','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article6','text','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article7','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article8','text','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article9','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');
INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`date`,`auteur`, `signature`, `logo`) VALUES ('article10','text','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');



DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


INSERT INTO `Admin` (`pseudo`,`password`) VALUES ('admin','admin');



DROP TABLE IF EXISTS Top;

CREATE TABLE Top (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `type` VARCHAR(100) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Top` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'top1', 'test.jpg', 'alt', 'type');
INSERT INTO `Top` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'top2', 'test.jpg', 'alt', 'type');


DROP TABLE IF EXISTS Boite;

CREATE TABLE Boite (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite1', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite2', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite3', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite4', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite5', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite6', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite7', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite8', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite9', 'test.jpg', 'alt', 'type');
INSERT INTO `Boite` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'boite10', 'test.jpg', 'alt', 'type');


DROP TABLE IF EXISTS Twitter;

CREATE TABLE Twitter (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `Twitter` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'twitter1', 'test.jpg', 'alt', 'type');
INSERT INTO `Twitter` (`id`, `name`, `image`, `alt`, `type`) VALUES (NULL, 'twitter2', 'test.jpg', 'alt', 'type');

