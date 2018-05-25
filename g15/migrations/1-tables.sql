DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id`            INT PRIMARY KEY AUTO_INCREMENT,
  `name`          VARCHAR(128) NOT NULL,
  `password`      CHAR(60)     NOT NULL
);

DROP TABLE IF EXISTS `articleCategories`;
CREATE TABLE `articleCategories` (
  `id`            INT PRIMARY KEY AUTO_INCREMENT,
  `name`          VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id`            INT PRIMARY KEY AUTO_INCREMENT,
  `category`      VARCHAR(128) NOT NULL,
  `title`         VARCHAR(128) NOT NULL,
  `subtitle`      VARCHAR(128) NOT NULL,
  `content`       TEXT         NOT NULL,
  `imgSrc`        VARCHAR(2048) NOT NULL,
  `imgAlt`        VARCHAR(128) NOT NULL,
  `imgTitle`      VARCHAR(128) NOT NULL,
  `publishedDate` VARCHAR(128) NOT NULL,
  `author`        VARCHAR(128) NOT NULL,
  `signature`     VARCHAR(128) NOT NULL,
  `logoSrc`       VARCHAR(2048) NOT NULL,
  `logoAlt`       VARCHAR(128) NOT NULL,
  `logoTitle`     VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id`            INT PRIMARY KEY AUTO_INCREMENT,
  `name`          VARCHAR(128) NOT NULL,
  `logoSrc`       VARCHAR(2048) NOT NULL,
  `logoAlt`       VARCHAR(128) NOT NULL,
  `logoTitle`     VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `airlineCompanies`;
CREATE TABLE `airlineCompanies` (
  `id`             INT PRIMARY KEY AUTO_INCREMENT,
  `name`           VARCHAR(128) NOT NULL,
  `twitterAccount` VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `imgsGallery`;
CREATE TABLE `imgsGallery` (
  `id`             INT PRIMARY KEY AUTO_INCREMENT,
  `imgSrc`         VARCHAR(2048) NOT NULL,
  `imgAlt`         VARCHAR(128) NOT NULL,
  `imgTitle`       VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id`             INT PRIMARY KEY AUTO_INCREMENT,
  `content`        VARCHAR(128) NOT NULL,
  `author`         VARCHAR(128) NOT NULL,
  `publishedDate`  VARCHAR(128) NOT NULL
);

DROP TABLE IF EXISTS `topHundred`;
CREATE TABLE `topHundred` (
  `id`             INT PRIMARY KEY AUTO_INCREMENT,
  `category`       VARCHAR(128) NOT NULL,
  `name`           VARCHAR(128) NOT NULL,
  `localisation`   VARCHAR(128) NOT NULL,
  `ranking`        VARCHAR(128) NOT NULL,
  `imgSrc`         VARCHAR(2048) NOT NULL,
  `imgAlt`         VARCHAR(128) NOT NULL,
  `imgTitle`       VARCHAR(128) NOT NULL,
  `description`    VARCHAR(128) NOT NULL,
  `link`           VARCHAR(328) NOT NULL
);


DROP TABLE IF EXISTS `descCards`;
CREATE TABLE `descCards` (
  `id`             INT PRIMARY KEY AUTO_INCREMENT,
  `category`       VARCHAR(128) NOT NULL,
  `name`           VARCHAR(128) NOT NULL,
  `localisation`   VARCHAR(128) NOT NULL,
  `rating`         INT NOT NULL,
  `desc`           VARCHAR(128) NOT NULL,
  `imgSrc`         VARCHAR(2048) NOT NULL,
  `imgAlt`         VARCHAR(128) NOT NULL,
  `imgTitle`       VARCHAR(128) NOT NULL,
  `schedule`       VARCHAR(128) NOT NULL,
  `price`          VARCHAR(128) NOT NULL,
  `link`           VARCHAR(2018) NOT NULL
);

INSERT INTO `admin` (`name`, `password`) VALUES ('admin', 'admin');

INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Bons plans', 'Bons plans', 'Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Someone', 'oui', 'non', 'nope', 'yes')
;
INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Voyages', 'Voyages', 'Ipsum', 'LOREM ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Someone else', 'oui', 'non', 'nope', 'yes')
;
INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Voyages', 'Voyages', 'Ipsum', 'LIREM ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Again Someone else', 'oui', 'non', 'nope', 'yes')
;
INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Gastronomie', 'Gastronomie', 'Ipsum', 'LIREM ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Again Someone else', 'oui', 'non', 'nope', 'yes')
;
INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Bons plans', 'Bons plans', 'Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Someone', 'oui', 'non', 'nope', 'yes')
;
INSERT INTO `articles`
(`category`, `title`, `subtitle`, `content`, `imgSrc`, `imgAlt`, `imgTitle`, `publishedDate`, `author`, `signature`, `logoSrc`, `logoAlt`, `logoTitle`)
VALUES
('Loisirs', 'Loisirs', 'Ipsum', 'LIREM ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jaj', 'jaj', 'jajjijaj', '24/5/18', 'Again Someone else', 'oui', 'non', 'nope', 'yes')
;

INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Hôtel', 'Hôtel Comète', '14 Rue des Maraîchers, 75020 Paris', '1', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Restaurant', 'Restaurant Lorem', '42 Rue des Lorem, 75020 Paris', '1', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Spa', 'Spa Ipsum', '69 Rue des Ipsum, 75020 Paris', '1', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Hôtel', 'Hôtel Lorem', '1 Rue Gambetta, 75020 Paris', '2', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Restaurant', 'Restaurant Ipsum', '41 Rue des Ipsum, 75020 Paris', '2', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Spa', 'Spa Comète', '60 Rue des Lorem, 75020 Paris', '2', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Hôtel', 'Hôtel Ipsum', '12 Rue des Lorem, 75020 Paris', '3', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Restaurant', 'Restaurant Comète', '36 Rue des Ipsum, 75020 Paris', '3', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;
INSERT INTO `topHundred`
(`category`, `name`, `localisation`, `ranking`, `imgSrc`, `imgAlt`, `imgTitle`, `description`, `link`)
VALUES
('Spa', 'Spa Lorem', '2 Rue Gambetta, 75020 Paris', '3', 'lorem', 'ipsum', 'lorreeem', 'Oui', 'Yes')
;