DROP TABLE IF EXISTS `#__jeventscalendar`;
 
CREATE TABLE `#__jeventscalendar` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`fecha`    DATETIME  NOT NULL,
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
('2016-02-25','tipo','Titulo de mi primer evento!','Esta es la descripción de mi primer evento'),
('2016-02-28','tipo','Titulo de mi segundo evento!','Esta es la descripción de mi segundo evento');