CREATE SCHEMA G13Voyage;

use G13Voyage;

CREATE TABLE article (
	id INT unsigned PRIMARY KEY NOT NULL auto_increment,
    continent varchar(30) NOT NULL,
    country varchar(30) NOT NULL,
    type varchar(30) NOT NULL,
    pictureSrc varchar(2048) NOT NULL,
    name varchar(120) NOT NULL,
    rating varchar(1) NOT NULL,
    location varchar(200) NOT NULL,
    description varchar(3000) NOT NULL,
    information varchar(3000) NOT NULL,
    hours varchar(200) NOT NULL
);

DROP TABLE article;
SELECT * FROM article;