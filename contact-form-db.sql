# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-04-08 22:57:59
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tblmessages"
#

DROP TABLE IF EXISTS `tblmessages`;
CREATE TABLE `tblmessages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `cellphone` varchar(255) NOT NULL DEFAULT '',
  `message` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tblmessages"
#

INSERT INTO `tblmessages` VALUES (1,'sdfffff','sdfdfdfdfdfdfdfdf','dsfffffffff','dsfsfsfsfsfsf'),(2,'Jhonatan Plata','kaysinho@gmail.com','3113439001','Esto es una prueba'),(3,'Jhonatan Plata','kaysinho@gmail.com','3113439001','Segunda prueba'),(4,'Jhonatan Plata','kaysinho@gmail.com','3113439001','545645'),(5,'Jhonatan Plata','kaysinho@gmail.com','3113439001','dafsdfdf'),(6,'Jhonatan Plata','kaysinho@gmail.com','3113439001','sdfsdf'),(7,'Jhonatan Plata','kaysinho@gmail.com','3113439001','Esto es una prueba de email'),(8,'Jhonatan Plata','kaysinho@gmail.com','3113439001','Esto es una prueba de email');
