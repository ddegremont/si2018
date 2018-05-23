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


INSERT INTO `Partenaire` (`image`,`alt`) VALUES ('test.jpg','test' );


USE Voyage;

DROP TABLE IF EXISTS Article;

CREATE TABLE Article (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(110) NOT NULL,
  `texte` VARCHAR(3000) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `pdate` VARCHAR(100)NOT NULL,
  `auteur` VARCHAR(40)NOT NULL,
  `signature` VARCHAR(200) NOT NULL,
  `logo` VARCHAR(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`pdate`,`auteur`, `signature`, `logo`) VALUES ('Airfrance','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');


