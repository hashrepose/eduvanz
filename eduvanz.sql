/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - eduvanz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`eduvanz` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `eduvanz`;

/*Table structure for table `tbl_participant` */

DROP TABLE IF EXISTS `tbl_participant`;

CREATE TABLE `tbl_participant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(80) NOT NULL,
  `age` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profession` enum('employed','student') NOT NULL DEFAULT 'employed',
  `locality` varchar(80) NOT NULL,
  `no_of_guest` int(3) NOT NULL DEFAULT 0,
  `address` varchar(80) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participant` (`full_name`,`locality`,`address`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbl_participant_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_participant` */

insert  into `tbl_participant`(`id`,`full_name`,`age`,`date_of_birth`,`profession`,`locality`,`no_of_guest`,`address`,`user_id`,`added_on`,`modified_on`) values 
(1,'Harshal ingle',32,'1987-04-07','employed','Lower Parel',2,'20, Pranav Darshan\r\nManpada Road\r\nDombivli East 421\r\n',4,'2020-11-09 12:19:49','2020-11-09 12:23:18'),
(2,'Akansha',26,'1992-05-05','employed','Mumbai',1,'Mumbai\r\nPrabhadevi',5,'2020-11-09 12:23:01','2020-11-09 12:24:06'),
(3,'Chetan kumar',33,'1990-06-25','employed','USA',1,'250, California',6,'2020-11-09 12:27:07','2020-11-09 12:27:43');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `utype` enum('admin','user') DEFAULT 'user',
  `added_on` datetime DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`name`,`username`,`password`,`utype`,`added_on`,`modified_on`) values 
(1,NULL,'admin@eduvanz.com','21232f297a57a5a743894a0e4a801fc3','admin',NULL,NULL),
(4,'Harshal Ingle','harshal@eduvanz.com','363e3dac589e3a0ca6e0d0ba52cee609','user',NULL,NULL),
(5,'Eduvanz','edu@eduvanz.com','379ef4bd50c30e261ccfb18dfc626d9f','user',NULL,NULL),
(6,'Chetan','chetan@apple.com','3b8ebe34e784a3593693a37baaacb016','user',NULL,NULL);

/*Table structure for table `tbl_website_info` */

DROP TABLE IF EXISTS `tbl_website_info`;

CREATE TABLE `tbl_website_info` (
  `web_id` int(11) NOT NULL AUTO_INCREMENT,
  `web_company_name` varchar(250) NOT NULL,
  `web_hour_of_operation` varchar(200) NOT NULL,
  `web_company_logo` varchar(50) NOT NULL,
  `web_favicon_icon` varchar(50) NOT NULL,
  `web_site_url` varchar(250) NOT NULL,
  `web_address` text NOT NULL,
  `web_addressmap` longtext NOT NULL,
  `web_country` varchar(50) NOT NULL,
  `web_timezone` int(11) NOT NULL,
  `web_pincode` int(6) NOT NULL,
  `web_support_contact` text NOT NULL,
  `web_support_email` varchar(200) NOT NULL,
  `web_copy_right` text NOT NULL,
  `web_email_protocal` varchar(50) NOT NULL,
  `web_from_email_id` varchar(50) NOT NULL,
  `web_bcc_email_id` varchar(200) NOT NULL,
  `web_smtp_host_name` varchar(200) NOT NULL,
  `web_smtp_port` int(4) NOT NULL,
  `web_email_id` varchar(50) NOT NULL,
  `web_email_password` varchar(50) NOT NULL,
  `web_facebook_link` text NOT NULL,
  `web_linkedin_link` text NOT NULL,
  `web_instagram_link` text NOT NULL,
  `web_twitter_link` text NOT NULL,
  `web_google_plus_link` text NOT NULL,
  `web_youtube_link` text NOT NULL,
  `web_pinterest_link` text NOT NULL,
  `web_meta_title` text NOT NULL,
  `web_meta_keyword` text NOT NULL,
  `web_meta_description` text NOT NULL,
  `web_currency` varchar(50) NOT NULL,
  `web_status` varchar(20) NOT NULL,
  `web_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `web_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`web_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_website_info` */

insert  into `tbl_website_info`(`web_id`,`web_company_name`,`web_hour_of_operation`,`web_company_logo`,`web_favicon_icon`,`web_site_url`,`web_address`,`web_addressmap`,`web_country`,`web_timezone`,`web_pincode`,`web_support_contact`,`web_support_email`,`web_copy_right`,`web_email_protocal`,`web_from_email_id`,`web_bcc_email_id`,`web_smtp_host_name`,`web_smtp_port`,`web_email_id`,`web_email_password`,`web_facebook_link`,`web_linkedin_link`,`web_instagram_link`,`web_twitter_link`,`web_google_plus_link`,`web_youtube_link`,`web_pinterest_link`,`web_meta_title`,`web_meta_keyword`,`web_meta_description`,`web_currency`,`web_status`,`web_created`,`web_updated`) values 
(1,'Eduvanz','','logo.png','logo.png','https://eduvanz.com/','801, Jai Antariksh, Makwana Road, Marol, Andheri (E), Mumbai, Maharashtra - 59.','','',0,0,'022-4973 3674','support@eduvanz.com','Copyright © 2020 <b>Eduvanz</b>. All rights reserved.','SMTP Email','support@eduvanz.com','','smtp.gmail.com',465,'support@eduvanz.com','demo@1234','https://www.facebook.com/EduvanzFinance/?ref=nf','https://twitter.com/eduvanz_finance?lang=en','','https://twitter.com/ordiusits','https://www.youtube.com/channel/UCCshyHARlwo17oYmKrLzvrw','','','Eduvanz','','Eduvanz Finance','1','Active','2020-11-08 11:41:16',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
