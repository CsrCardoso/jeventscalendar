DROP TABLE IF EXISTS `#__jeventscalendar`;
 
CREATE TABLE `#__jeventscalendar` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`fecha`    DATE  NOT NULL,
	`tipo` VARCHAR(45) NOT NULL,
	`titulo` VARCHAR(205) NOT NULL,
	`descripcion` TEXT NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__jeventscalendar` (`fecha`, `tipo`, `titulo`, `descripcion`) VALUES
('2016-02-24','tipo','Hello World!','mi primer evento'),
('2016-02-24','tipo','Good bye World!','mi primer evento');