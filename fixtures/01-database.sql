SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `attendees`;
CREATE TABLE `attendees` (
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `meeting_id` (`meeting_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `attendees_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `meetings` (`id`),
  CONSTRAINT `attendees_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `communities`;
CREATE TABLE `communities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `communities` (`id`, `name`) VALUES
(1,	'PHP'),
(2,	'HTML/CSS'),
(3,	'Javascript');

DROP TABLE IF EXISTS `meetings`;
CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `community_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `meetings` (`id`, `title`, `description`, `date_start`, `date_end`, `community_id`) VALUES
(1,	'Test unitaire',	'Un meeting ou les méthode de test unitaire seront abordées',	'2017-12-24 00:00:00',	'2017-12-24 00:00:00',	1),
(2,	'Framwork',	'Meeting qui va abordé les différents framework PHP',	'2018-01-25 00:00:00',	'2018-01-25 00:00:00',	1),
(3,	'Livres',	'Un meeting ou les différents livres PHP seront abordés',	'2018-02-06 00:00:00',	'2018-02-06 00:00:00',	1),
(4,	'Media queries',	'Un meeting où les media queries css seront abordées',	'2018-03-15 00:00:00',	'2018-03-15 00:00:00',	2),
(5,	'Conventions css',	'Un meeting ou les conventions css seront abordées',	'2018-04-05 00:00:00',	'2018-04-05 00:00:00',	2),
(6,	'Jquery',	'Un meeting sur le framework Jquery',	'2018-05-25 00:00:00',	'2018-05-25 00:00:00',	3);

DROP TABLE IF EXISTS `organisers`;
CREATE TABLE `organisers` (
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `meeting_id` (`meeting_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `organisers_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `meetings` (`id`),
  CONSTRAINT `organisers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;