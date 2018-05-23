-- Création de la table
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) NOT NULL,
  `title` varchar(110) NOT NULL,
  `h1` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  `span-class` varchar(50) NOT NULL,
  `span-text` varchar(100) NOT NULL,
  `img-alt` varchar(100) NOT NULL,
  `img-src` varchar(2048) NOT NULL,
  `nav-title` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Insertion
INSERT INTO `page`(
  `slug`,
  `title`,
  `h1`,
  `p`,
  `span-class`,
  `span-text`,
  `img-alt`,
  `img-src`,
  `nav-title`
)
VALUES(
  'slug',
  'title',
  'h1',
  'p',
  'span-class',
  'span-text',
  'img-alt',
  'img-src',
  'nav-title'
)
;
INSERT INTO `page` SET
  `slug`= 'slug',
  `title` = 'title',
  `h1` = 'h1',
  `p` = 'span',
  `span-class` = 'span-class',
  `span-text` = 'span-text',
  `img-alt` = 'img-alt',
  `img-src`= 'img-src',
  `nav-title` = 'nav-title';
-- Mise à jour
UPDATE
  `page`
SET
  `slug`= 'slug',
  `title` = 'title',
  `h1` = 'h1',
  `p` = 'p',
  `span-class` = 'span-class',
  `span-text` = 'span-text',
  `img-alt` = 'img-alt',
  `img-src`= 'img-src',
  `nav-title` = 'nav-title'
WHERE
`id` = 1;


DELETE FROM `page` WHERE `id` = 2;
-- géneration de la nav
SELECT `slug`, `nav-title` FROM `page`;

CREATE TABLE `Users` (
  `id` int(10) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
