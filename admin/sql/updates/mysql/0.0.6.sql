DROP TABLE IF EXISTS `#__jeventscalendar`;
 
CREATE TABLE `#__jeventscalendar` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`date_from` datetime NOT NULL,
	`date_to` datetime NOT NULL,
	`type` int(3) NOT NULL,
	`title` varchar(165) NOT NULL,
	`description` longtext NOT NULL,
	`link` varchar(300) NOT NULL,
	`color` varchar(7) NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__jeventscalendar` (`date_from`, `date_to`, `type`, `title`, `description`, `link`) VALUES
('2016-02-25 17:30:00', '2016-02-26 19:30:00','tipo','Titulo de mi primer evento!','Esta es la descripción de mi primer evento', 'http://localhost/misitio'),
('2016-02-26 18:30:00', '2016-02-26 12:30:00','tipo','Titulo de mi primer evento!','Esta es la descripción de mi primer evento', 'http://localhost/misitio'),
('2016-02-27 19:30:00', '2016-02-28 19:30:00','tipo','Titulo de mi primer evento!','Esta es la descripción de mi primer evento', 'http://localhost/misitio'),
('2016-02-28 20:30:00', '2016-02-28 12:30:00','tipo','Titulo de mi primer evento!','Esta es la descripción de mi primer evento', 'http://localhost/misitio');