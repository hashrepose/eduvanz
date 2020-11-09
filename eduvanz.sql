/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 10.4.13-MariaDB : Database - eduvanz
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
  KEY `participant` (`full_name`,`locality`,`address`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_participant` */

insert  into `tbl_participant`(`id`,`full_name`,`age`,`date_of_birth`,`profession`,`locality`,`no_of_guest`,`address`,`user_id`,`added_on`,`modified_on`) values 
(1,'Harshal ingle',34,'2020-11-05','student','Overseas',1,'qweeerrrttyy',NULL,'2020-11-05 16:38:48','2020-11-08 18:48:44'),
(2,'Atul',32,'2020-11-04','employed','Agra',2,'Delhi?????',NULL,'2020-11-04 16:38:54',NULL),
(3,'Harshal',35,'2020-05-05','student','Mumbai',2,'sdssds',NULL,NULL,NULL),
(4,'Harshal',35,'2020-05-05','student','Mumbai',2,'sdssds',NULL,'2020-11-06 14:50:39','2020-11-06 14:50:39'),
(5,'Harsha',22,'2020-05-05','student','Mumbaii',2,'sssss',2,'2020-11-08 20:28:07','2020-11-08 21:20:43'),
(6,'Harshal',22,'2020-05-05','employed','Mumbai',2,'test',2,'2020-11-08 20:31:29','2020-11-08 22:10:39'),
(7,'Ylo',38,'2020-08-05','student','Mumbaii',2,'Prabadevi\r\nLowerl Parel\r\nMumbai\r\n400201',2,'2020-11-08 20:35:01','2020-11-08 20:35:01');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`name`,`username`,`password`,`utype`,`added_on`,`modified_on`) values 
(1,NULL,'admin@eduvanz.com','21232f297a57a5a743894a0e4a801fc3','admin',NULL,NULL),
(2,'Ylo','ylo@foc.com','7926bf1ba1f38670f20d59d8da8f86e1','user',NULL,NULL),
(3,'cb','cb@cb.com','827ccb0eea8a706c4c34a16891f84e7b','user',NULL,NULL);

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
(1,'Friendymart Holdings','Monday to Friday: 10am to 7pm </br> Saturday: 10am to 4pm </br> Sunday: 12am to 4pm','20200129190140_23507.png','20200129190140_849424.png','http://ecommerce.sbcfphotography.com/','Plot-58, Block-E,  Sector-3,\r\nNoida - 201301','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.6300866785664!2d77.31541931493366!3d28.5808686931685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7075711e380937c1!2sOrdius+IT+Solutions+Pvt+Ltd+(Website+Design+Company%2C+E-Commerce+Website+Development+Company%2C+SEO+Services+in+India%2C+PPC+Services%2C+Wordpress+Website+Development+Company%2C+Mobile+Application+Development+Company)!5e0!3m2!1sen!2sin!4v1553584919123 ','2',194,3,'844-712-1599','lavish@ordiusits.com','Copyright © 2019 <b>Friendymart Holdings</b>. All rights reserved.','SMTP Email','manish.sandlus@gmail.com','','smtp.gmail.com',465,'boltrucks@gmail.com','demo@1234','https://www.facebook.com/ordiusits/','https://www.linkedin.com/company/ordius-it-solutions-pvt-ltd/','','https://twitter.com/ordiusits','https://plus.google.com/111618712296077271341','','https://in.pinterest.com/ordiusits/','Friendymart Holdings','Best SEO | Best SEO company in delhi.','Friendymart Holdings','1','Active','2019-03-26 11:41:16',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
