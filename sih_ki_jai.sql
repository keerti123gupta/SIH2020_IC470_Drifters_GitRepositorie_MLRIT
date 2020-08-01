-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbl_animals`;
CREATE TABLE `tbl_animals` (
  `animal_id` varchar(32) NOT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `forest_id` varchar(32) DEFAULT NULL,
  `animal_name` varchar(32) DEFAULT NULL,
  `cate_id` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`animal_id`),
  KEY `forest_id` (`forest_id`),
  KEY `user_id` (`user_id`),
  KEY `cate_id` (`cate_id`),
  CONSTRAINT `tbl_animals_ibfk_1` FOREIGN KEY (`forest_id`) REFERENCES `tbl_forest` (`forest_id`),
  CONSTRAINT `tbl_animals_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  CONSTRAINT `tbl_animals_ibfk_3` FOREIGN KEY (`cate_id`) REFERENCES `tbl_animal_cat` (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_animals` (`animal_id`, `user_id`, `forest_id`, `animal_name`, `cate_id`) VALUES
('aml_5f187dcfe15ef',	'5f1032e4d3853',	'fr_5f15d35b7e039',	'cobra',	'cat_5f187db61a503'),
('aml_5f1d5c4e44c5e',	'5f1032e4d3853',	'fr_5f197358c285d',	'lion',	'cat_5f1d5bef2950a'),
('aml_5f2537660ec3e',	'5f1032e4d3853',	'fr_5f197358c285d',	'cobra',	'cat_5f187db61a503');

DROP TABLE IF EXISTS `tbl_animal_cat`;
CREATE TABLE `tbl_animal_cat` (
  `cate_id` varchar(32) NOT NULL,
  `cate_name` varchar(32) DEFAULT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`cate_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_animal_cat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_animal_cat` (`cate_id`, `cate_name`, `user_id`) VALUES
('cat_5f187db61a503',	'Snakes',	'5f1032e4d3853'),
('cat_5f1d5bef2950a',	'tigers',	'5f1032e4d3853'),
('cat_5f2536ac6857c',	'snack',	'5f1032e4d3853');

DROP TABLE IF EXISTS `tbl_animal_image`;
CREATE TABLE `tbl_animal_image` (
  `ani_img_id` varchar(32) NOT NULL,
  `animal_id` varchar(32) DEFAULT NULL,
  `animal_image` text DEFAULT NULL,
  PRIMARY KEY (`ani_img_id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `tbl_animal_image_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `tbl_animals` (`animal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_animal_image` (`ani_img_id`, `animal_id`, `animal_image`) VALUES
('animg_5f187dcfe15f2',	'aml_5f187dcfe15ef',	'15954405911_3_4.jpg'),
('animg_5f1d5c4e44c62',	'aml_5f1d5c4e44c5e',	'1595759694veer1.jpg'),
('animg_5f2537660ec41',	'aml_5f2537660ec3e',	'1596274534cobra.png');

DROP TABLE IF EXISTS `tbl_annouce`;
CREATE TABLE `tbl_annouce` (
  `annouce_id` varchar(32) NOT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `annouce_date` timestamp NULL DEFAULT current_timestamp(),
  `message` text DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  PRIMARY KEY (`annouce_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_annouce_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_annouce` (`annouce_id`, `user_id`, `title`, `annouce_date`, `message`, `status`) VALUES
('an_id5f23e4e7dfd14',	'5f1032e4d3853',	'sih2020',	'2020-07-31 09:31:19',	'hii this is sih admin',	1);

DROP TABLE IF EXISTS `tbl_announce_comments`;
CREATE TABLE `tbl_announce_comments` (
  `comment_id` varchar(32) NOT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `annouce_id` varchar(32) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`comment_id`),
  KEY `annouce_id` (`annouce_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_announce_comments_ibfk_1` FOREIGN KEY (`annouce_id`) REFERENCES `tbl_annouce` (`annouce_id`),
  CONSTRAINT `tbl_announce_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_announce_comments` (`comment_id`, `user_id`, `annouce_id`, `comments`, `added_date`) VALUES
('cmt_5f23e5022ec5e',	'5f1032e4d3853',	'an_id5f23e4e7dfd14',	'yes this is true',	'2020-07-31 09:31:46');

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE `tbl_feedback` (
  `feedback_id` varchar(32) NOT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  PRIMARY KEY (`feedback_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_feedback` (`feedback_id`, `user_id`, `subject`, `message`, `status`) VALUES
('feed_5f1d188250511',	'5f1032e4d3853',	'deforestation',	'this was great site for forest protection',	1),
('feed_5f1d1b3720643',	'5f1032e4d3853',	'hunting',	'hunting is crime',	1),
('feed_5f1d1b5284fc3',	'5f1032e4d3853',	'hunting',	'i am not hunting',	2),
('feed_5f1d1b99d042c',	'5f1032e4d3853',	'deforestation',	'do not cut trees',	2),
('feed_5f1d1bd5e6ba1',	'5f1032e4d3853',	'natural disaster',	'sddsf',	2),
('feed_5f1d5c97da1b4',	'5f1032e4d3853',	'natural disaster',	'jaksfbkj',	2);

DROP TABLE IF EXISTS `tbl_feedback_reply`;
CREATE TABLE `tbl_feedback_reply` (
  `reply_id` varchar(32) NOT NULL,
  `feedback_id` varchar(32) DEFAULT NULL,
  `msgs` text DEFAULT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`reply_id`),
  KEY `feedback_id` (`feedback_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_feedback_reply_ibfk_1` FOREIGN KEY (`feedback_id`) REFERENCES `tbl_feedback` (`feedback_id`),
  CONSTRAINT `tbl_feedback_reply_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_feedback_reply` (`reply_id`, `feedback_id`, `msgs`, `user_id`) VALUES
('rly_id_5f1ea4dd46d2e',	'feed_5f1d1b3720643',	'yes it is',	'5f1032e4d3853'),
('rly_id_5f1ea50d9b1b6',	'feed_5f1d1b3720643',	'we are saving nature properties',	'5f1032e4d3853'),
('rly_id_5f23e54b639ed',	'feed_5f1d1b3720643',	'this this crime and ',	'5f1032e4d3853');

DROP TABLE IF EXISTS `tbl_forest`;
CREATE TABLE `tbl_forest` (
  `forest_id` varchar(32) NOT NULL,
  `forest_name` varchar(32) DEFAULT NULL,
  `forest_location` varchar(100) DEFAULT NULL,
  `forest_state` varchar(32) DEFAULT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`forest_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_forest_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_forest` (`forest_id`, `forest_name`, `forest_location`, `forest_state`, `user_id`, `added_date`, `status`) VALUES
('fr_5f15d35b7e039',	'vishwas lodhi',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-20 00:00:00',	1),
('fr_5f197358c285d',	'van bihar',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-23 00:00:00',	2),
('fr_5f1976adb31f2',	'sersapata',	'kakinada',	'Andhra Pradesh',	'5f1032e4d3853',	'2020-07-23 00:00:00',	1),
('fr_5f1d5b41deb2f',	'vishwas',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-26 00:00:00',	1),
('fr_5f1d5b54e12b5',	'vishwas',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-26 00:00:00',	2),
('fr_5f1fadc030a8e',	'kolar dam',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-28 00:00:00',	2),
('fr_5f1fae5a88c58',	'upper lake',	'bhopal',	'madhya pradesh',	'5f1032e4d3853',	'2020-07-22 00:00:00',	1);

DROP TABLE IF EXISTS `tbl_forest_image`;
CREATE TABLE `tbl_forest_image` (
  `forest_id` varchar(32) DEFAULT NULL,
  `fr_img_id` varchar(32) NOT NULL,
  `fr_img` text DEFAULT NULL,
  PRIMARY KEY (`fr_img_id`),
  KEY `forest_id` (`forest_id`),
  CONSTRAINT `tbl_forest_image_ibfk_1` FOREIGN KEY (`forest_id`) REFERENCES `tbl_forest` (`forest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_forest_image` (`forest_id`, `fr_img_id`, `fr_img`) VALUES
('fr_5f15d35b7e039',	'img_5f15d35b9b688',	'15952658831_4_3.jpg'),
('fr_5f197358c285d',	'img_5f197358cf9ec',	'1595503448veer1.jpg'),
('fr_5f1976adb31f2',	'img_5f1976adc4860',	'1595504301IMG20200419053405.jpg'),
('fr_5f1d5b41deb2f',	'img_5f1d5b41eff02',	'1595759425tiger.jpg'),
('fr_5f1d5b54e12b5',	'img_5f1d5b54effd8',	'1595759444tiger.jpg'),
('fr_5f1fadc030a8e',	'img_5f1fadc04fe97',	'15959116161595911224510.jpg'),
('fr_5f1fae5a88c58',	'img_5f1fae5a9bdf1',	'15959117701595911487405.jpg');

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` varchar(32) NOT NULL,
  `full_name` varchar(32) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(32) NOT NULL,
  `role` varchar(32) DEFAULT 'user',
  `status` int(2) DEFAULT 1,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_users` (`user_id`, `full_name`, `contact`, `email`, `pass`, `role`, `status`) VALUES
('5f1032e4d3853',	'vishwas lodhi',	'8319870196',	'vishwaslodhi03@gmail.com',	'veer123456',	'admin',	1),
('5f19fe2f4c215',	'Veer',	'9981015328',	'Veerrajput@gmail.com',	'veer123456',	'user',	1),
('5f1ec27061d5e',	'keerti ',	'897986855',	'keerti@gmail.com',	'123456',	'ranger',	1),
('5f1ec2eadfa9a',	'archit',	'7867834567',	'archit@gmail.com',	'123456',	'staff',	2),
('5f1ec357cd3ed',	'preeti singh',	'67856456',	'preeti@gmail.com',	'123456',	'ranger',	1),
('5f1ec4ad492ab',	'archit',	'78675765',	'archit2020@gmail.com',	'123456',	'staff',	1);

-- 2020-08-01 16:02:33
