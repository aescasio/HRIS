/*
SQLyog Ultimate v12.2.1 (64 bit)
MySQL - 10.1.25-MariaDB : Database - bcorp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bcorp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `bcorp`;

/*Table structure for table `codelookups` */

DROP TABLE IF EXISTS `codelookups`;

CREATE TABLE `codelookups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` smallint(5) unsigned DEFAULT NULL,
  `value` double DEFAULT NULL,
  `string` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value2` double DEFAULT NULL,
  `string2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binary` blob,
  `memo` mediumtext COLLATE utf8mb4_unicode_ci,
  `bool` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `codelookups` */

insert  into `codelookups`(`id`,`typename`,`description`,`code`,`value`,`string`,`value2`,`string2`,`binary`,`memo`,`bool`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'EMP_NATIONALITY','Employees Nationality',1,NULL,'Afghanistan',NULL,'Afghan',NULL,'',NULL,NULL,NULL,NULL),
(2,'EMP_NATIONALITY','Employees Nationality',2,NULL,'Albania',NULL,'Albanian',NULL,'',NULL,NULL,NULL,NULL),
(3,'EMP_NATIONALITY','Employees Nationality',3,NULL,'Algeria',NULL,'Algerian',NULL,'',NULL,NULL,NULL,NULL),
(4,'EMP_NATIONALITY','Employees Nationality',4,NULL,'Andorra',NULL,'Andorran',NULL,'',NULL,NULL,NULL,NULL),
(5,'EMP_NATIONALITY','Employees Nationality',5,NULL,'Angola',NULL,'Angolan',NULL,'',NULL,NULL,NULL,NULL),
(6,'EMP_NATIONALITY','Employees Nationality',6,NULL,'Argentina',NULL,'Argentinian',NULL,'',NULL,NULL,NULL,NULL),
(7,'EMP_NATIONALITY','Employees Nationality',7,NULL,'Armenia',NULL,'Armenian',NULL,'',NULL,NULL,NULL,NULL),
(8,'EMP_NATIONALITY','Employees Nationality',8,NULL,'Australia',NULL,'Australian',NULL,'',NULL,NULL,NULL,NULL),
(9,'EMP_NATIONALITY','Employees Nationality',9,NULL,'Austria',NULL,'Austrian',NULL,'',NULL,NULL,NULL,NULL),
(10,'EMP_NATIONALITY','Employees Nationality',10,NULL,'Azerbaijan',NULL,'Azerbaijani',NULL,'',NULL,NULL,NULL,NULL),
(11,'EMP_NATIONALITY','Employees Nationality',11,NULL,'Bahamas',NULL,'Bahamian',NULL,'',NULL,NULL,NULL,NULL),
(12,'EMP_NATIONALITY','Employees Nationality',12,NULL,'Bangladesh',NULL,'Bangladeshi',NULL,'',NULL,NULL,NULL,NULL),
(13,'EMP_NATIONALITY','Employees Nationality',13,NULL,'Barbados',NULL,'Barbadian',NULL,'',NULL,NULL,NULL,NULL),
(14,'EMP_NATIONALITY','Employees Nationality',14,NULL,'Belarus',NULL,'Belorussian',NULL,'',NULL,NULL,NULL,NULL),
(15,'EMP_NATIONALITY','Employees Nationality',15,NULL,'Belgium',NULL,'Belgian',NULL,'',NULL,NULL,NULL,NULL),
(16,'EMP_NATIONALITY','Employees Nationality',16,NULL,'Benin',NULL,'Beninese',NULL,'',NULL,NULL,NULL,NULL),
(17,'EMP_NATIONALITY','Employees Nationality',17,NULL,'Bhutan',NULL,'Bhutanese',NULL,'',NULL,NULL,NULL,NULL),
(18,'EMP_NATIONALITY','Employees Nationality',18,NULL,'Bolivia',NULL,'Bolivian',NULL,'',NULL,NULL,NULL,NULL),
(19,'EMP_NATIONALITY','Employees Nationality',19,NULL,'Bosnia-Herzegovina',NULL,'Bosnian',NULL,'',NULL,NULL,NULL,NULL),
(20,'EMP_NATIONALITY','Employees Nationality',20,NULL,'Brazil',NULL,'Brazilian',NULL,'',NULL,NULL,NULL,NULL),
(21,'EMP_NATIONALITY','Employees Nationality',21,NULL,'Britain',NULL,'Briton',NULL,'',NULL,NULL,NULL,NULL),
(22,'EMP_NATIONALITY','Employees Nationality',22,NULL,'Brunei',NULL,'Bruneian',NULL,'',NULL,NULL,NULL,NULL),
(23,'EMP_NATIONALITY','Employees Nationality',23,NULL,'Bulgaria',NULL,'Bulgarian',NULL,'',NULL,NULL,NULL,NULL),
(24,'EMP_NATIONALITY','Employees Nationality',24,NULL,'Burma',NULL,'Burmese',NULL,'',NULL,NULL,NULL,NULL),
(25,'EMP_NATIONALITY','Employees Nationality',25,NULL,'Burundi',NULL,'Burundian',NULL,'',NULL,NULL,NULL,NULL),
(26,'EMP_NATIONALITY','Employees Nationality',26,NULL,'Cambodia',NULL,'Cambodian',NULL,'',NULL,NULL,NULL,NULL),
(27,'EMP_NATIONALITY','Employees Nationality',27,NULL,'Cameroon',NULL,'Cameroonian',NULL,'',NULL,NULL,NULL,NULL),
(28,'EMP_NATIONALITY','Employees Nationality',28,NULL,'Canada',NULL,'Canadian',NULL,'',NULL,NULL,NULL,NULL),
(29,'EMP_NATIONALITY','Employees Nationality',29,NULL,'Chad',NULL,'Chadian',NULL,'',NULL,NULL,NULL,NULL),
(30,'EMP_NATIONALITY','Employees Nationality',30,NULL,'Chile',NULL,'Chilean',NULL,'',NULL,NULL,NULL,NULL),
(31,'EMP_NATIONALITY','Employees Nationality',31,NULL,'China',NULL,'Chinese',NULL,'',NULL,NULL,NULL,NULL),
(32,'EMP_NATIONALITY','Employees Nationality',32,NULL,'Colombia',NULL,'Colombian',NULL,'',NULL,NULL,NULL,NULL),
(33,'EMP_NATIONALITY','Employees Nationality',33,NULL,'Congo',NULL,'Congolese',NULL,'',NULL,NULL,NULL,NULL),
(34,'EMP_NATIONALITY','Employees Nationality',34,NULL,'Croatia',NULL,'Croatian',NULL,'',NULL,NULL,NULL,NULL),
(35,'EMP_NATIONALITY','Employees Nationality',35,NULL,'Cuba',NULL,'Cuban',NULL,'',NULL,NULL,NULL,NULL),
(36,'EMP_NATIONALITY','Employees Nationality',36,NULL,'Cyprus',NULL,'Cypriot',NULL,'',NULL,NULL,NULL,NULL),
(37,'EMP_NATIONALITY','Employees Nationality',37,NULL,'CzechRepublic',NULL,'Czech',NULL,'',NULL,NULL,NULL,NULL),
(38,'EMP_NATIONALITY','Employees Nationality',38,NULL,'Denmark',NULL,'Dane',NULL,'',NULL,NULL,NULL,NULL),
(39,'EMP_NATIONALITY','Employees Nationality',39,NULL,'Dominica',NULL,'Dominican',NULL,'',NULL,NULL,NULL,NULL),
(40,'EMP_NATIONALITY','Employees Nationality',40,NULL,'Ecuador',NULL,'Ecuadorean',NULL,'',NULL,NULL,NULL,NULL),
(41,'EMP_NATIONALITY','Employees Nationality',41,NULL,'Egypt',NULL,'Egyptian',NULL,'',NULL,NULL,NULL,NULL),
(42,'EMP_NATIONALITY','Employees Nationality',42,NULL,'ElSalvador',NULL,'Salvadorean',NULL,'',NULL,NULL,NULL,NULL),
(43,'EMP_NATIONALITY','Employees Nationality',43,NULL,'England',NULL,'Englishman',NULL,'',NULL,NULL,NULL,NULL),
(44,'EMP_NATIONALITY','Employees Nationality',44,NULL,'Eritrea',NULL,'Eritrean',NULL,'',NULL,NULL,NULL,NULL),
(45,'EMP_NATIONALITY','Employees Nationality',45,NULL,'Estonia',NULL,'Estonian',NULL,'',NULL,NULL,NULL,NULL),
(46,'EMP_NATIONALITY','Employees Nationality',46,NULL,'Ethiopia',NULL,'Ethiopian',NULL,'',NULL,NULL,NULL,NULL),
(47,'EMP_NATIONALITY','Employees Nationality',47,NULL,'Fiji',NULL,'Fijian',NULL,'',NULL,NULL,NULL,NULL),
(48,'EMP_NATIONALITY','Employees Nationality',48,NULL,'Finland',NULL,'Finn',NULL,'',NULL,NULL,NULL,NULL),
(49,'EMP_NATIONALITY','Employees Nationality',49,NULL,'France',NULL,'Frenchman',NULL,'',NULL,NULL,NULL,NULL),
(50,'EMP_NATIONALITY','Employees Nationality',50,NULL,'Gabon',NULL,'Gabonese',NULL,'',NULL,NULL,NULL,NULL),
(51,'EMP_NATIONALITY','Employees Nationality',51,NULL,'Gambia',NULL,'Gambian',NULL,'',NULL,NULL,NULL,NULL),
(52,'EMP_NATIONALITY','Employees Nationality',52,NULL,'Georgia',NULL,'Georgian',NULL,'',NULL,NULL,NULL,NULL),
(53,'EMP_NATIONALITY','Employees Nationality',53,NULL,'Germany',NULL,'German',NULL,'',NULL,NULL,NULL,NULL),
(54,'EMP_NATIONALITY','Employees Nationality',54,NULL,'Ghana',NULL,'Ghanaian',NULL,'',NULL,NULL,NULL,NULL),
(55,'EMP_NATIONALITY','Employees Nationality',55,NULL,'Greece',NULL,'Greek',NULL,'',NULL,NULL,NULL,NULL),
(56,'EMP_NATIONALITY','Employees Nationality',56,NULL,'Grenada',NULL,'Grenadian',NULL,'',NULL,NULL,NULL,NULL),
(57,'EMP_NATIONALITY','Employees Nationality',57,NULL,'Guatemala',NULL,'Guatemalan',NULL,'',NULL,NULL,NULL,NULL),
(58,'EMP_NATIONALITY','Employees Nationality',58,NULL,'Guinea',NULL,'Guinean',NULL,'',NULL,NULL,NULL,NULL),
(59,'EMP_NATIONALITY','Employees Nationality',59,NULL,'Guyana',NULL,'Guyanese',NULL,'',NULL,NULL,NULL,NULL),
(60,'EMP_NATIONALITY','Employees Nationality',60,NULL,'Haiti',NULL,'Haitian',NULL,'',NULL,NULL,NULL,NULL),
(61,'EMP_NATIONALITY','Employees Nationality',61,NULL,'Holland',NULL,'Dutchman',NULL,'',NULL,NULL,NULL,NULL),
(62,'EMP_NATIONALITY','Employees Nationality',62,NULL,'Honduras',NULL,'Honduran',NULL,'',NULL,NULL,NULL,NULL),
(63,'EMP_NATIONALITY','Employees Nationality',63,NULL,'Hungary',NULL,'Hungarian',NULL,'',NULL,NULL,NULL,NULL),
(64,'EMP_NATIONALITY','Employees Nationality',64,NULL,'Iceland',NULL,'Icelander',NULL,'',NULL,NULL,NULL,NULL),
(65,'EMP_NATIONALITY','Employees Nationality',65,NULL,'India',NULL,'Indian',NULL,'',NULL,NULL,NULL,NULL),
(66,'EMP_NATIONALITY','Employees Nationality',66,NULL,'Indonesia',NULL,'Indonesian',NULL,'',NULL,NULL,NULL,NULL),
(67,'EMP_NATIONALITY','Employees Nationality',67,NULL,'Iran',NULL,'Iranian',NULL,'',NULL,NULL,NULL,NULL),
(68,'EMP_NATIONALITY','Employees Nationality',68,NULL,'Iraq',NULL,'Iraqi',NULL,'',NULL,NULL,NULL,NULL),
(69,'EMP_NATIONALITY','Employees Nationality',69,NULL,'Ireland',NULL,'Irishman',NULL,'',NULL,NULL,NULL,NULL),
(70,'EMP_NATIONALITY','Employees Nationality',70,NULL,'Israel',NULL,'Israeli',NULL,'',NULL,NULL,NULL,NULL),
(71,'EMP_NATIONALITY','Employees Nationality',71,NULL,'Italy',NULL,'Italian',NULL,'',NULL,NULL,NULL,NULL),
(72,'EMP_NATIONALITY','Employees Nationality',72,NULL,'Jamaica',NULL,'Jamaican',NULL,'',NULL,NULL,NULL,NULL),
(73,'EMP_NATIONALITY','Employees Nationality',73,NULL,'Japan',NULL,'Japanese',NULL,'',NULL,NULL,NULL,NULL),
(74,'EMP_NATIONALITY','Employees Nationality',74,NULL,'Jordan',NULL,'Jordanian',NULL,'',NULL,NULL,NULL,NULL),
(75,'EMP_NATIONALITY','Employees Nationality',75,NULL,'Kazakhstan',NULL,'Kazakh',NULL,'',NULL,NULL,NULL,NULL),
(76,'EMP_NATIONALITY','Employees Nationality',76,NULL,'Kenya',NULL,'Kenyan',NULL,'',NULL,NULL,NULL,NULL),
(77,'EMP_NATIONALITY','Employees Nationality',77,NULL,'Korea',NULL,'Korean',NULL,'',NULL,NULL,NULL,NULL),
(78,'EMP_NATIONALITY','Employees Nationality',78,NULL,'Kuwait',NULL,'Kuwaiti',NULL,'',NULL,NULL,NULL,NULL),
(79,'EMP_NATIONALITY','Employees Nationality',79,NULL,'Laos',NULL,'Laotian',NULL,'',NULL,NULL,NULL,NULL),
(80,'EMP_NATIONALITY','Employees Nationality',80,NULL,'Latvia',NULL,'Latvian',NULL,'',NULL,NULL,NULL,NULL),
(81,'EMP_NATIONALITY','Employees Nationality',81,NULL,'Lebanon',NULL,'Lebanese',NULL,'',NULL,NULL,NULL,NULL),
(82,'EMP_NATIONALITY','Employees Nationality',82,NULL,'Liberia',NULL,'Liberian',NULL,'',NULL,NULL,NULL,NULL),
(83,'EMP_NATIONALITY','Employees Nationality',83,NULL,'Libya',NULL,'Libyan',NULL,'',NULL,NULL,NULL,NULL),
(84,'EMP_NATIONALITY','Employees Nationality',84,NULL,'Liechtenstein',NULL,'Liechtensteiner',NULL,'',NULL,NULL,NULL,NULL),
(85,'EMP_NATIONALITY','Employees Nationality',85,NULL,'Lithuania',NULL,'Lithuanian',NULL,'',NULL,NULL,NULL,NULL),
(86,'EMP_NATIONALITY','Employees Nationality',86,NULL,'Luxembourg',NULL,'Luxembourger',NULL,'',NULL,NULL,NULL,NULL),
(87,'EMP_NATIONALITY','Employees Nationality',87,NULL,'Macedonia',NULL,'Macedonian',NULL,'',NULL,NULL,NULL,NULL),
(88,'EMP_NATIONALITY','Employees Nationality',88,NULL,'Madagascar',NULL,'Madagascan',NULL,'',NULL,NULL,NULL,NULL),
(89,'EMP_NATIONALITY','Employees Nationality',89,NULL,'Malawi',NULL,'Malawian',NULL,'',NULL,NULL,NULL,NULL),
(90,'EMP_NATIONALITY','Employees Nationality',90,NULL,'Malaysia',NULL,'Malaysian',NULL,'',NULL,NULL,NULL,NULL),
(91,'EMP_NATIONALITY','Employees Nationality',91,NULL,'Maldives',NULL,'Maldivian',NULL,'',NULL,NULL,NULL,NULL),
(92,'EMP_NATIONALITY','Employees Nationality',92,NULL,'Mali',NULL,'Malian',NULL,'',NULL,NULL,NULL,NULL),
(93,'EMP_NATIONALITY','Employees Nationality',93,NULL,'Malta',NULL,'Maltese',NULL,'',NULL,NULL,NULL,NULL),
(94,'EMP_NATIONALITY','Employees Nationality',94,NULL,'Mauritania',NULL,'Mauritanian',NULL,'',NULL,NULL,NULL,NULL),
(95,'EMP_NATIONALITY','Employees Nationality',95,NULL,'Mauritius',NULL,'Mauritian',NULL,'',NULL,NULL,NULL,NULL),
(96,'EMP_NATIONALITY','Employees Nationality',96,NULL,'Mexico',NULL,'Mexican',NULL,'',NULL,NULL,NULL,NULL),
(97,'EMP_NATIONALITY','Employees Nationality',97,NULL,'Moldova',NULL,'Moldovan',NULL,'',NULL,NULL,NULL,NULL),
(98,'EMP_NATIONALITY','Employees Nationality',98,NULL,'Monaco',NULL,'Monacan',NULL,'',NULL,NULL,NULL,NULL),
(99,'EMP_NATIONALITY','Employees Nationality',99,NULL,'Mongolia',NULL,'Mongolian',NULL,'',NULL,NULL,NULL,NULL),
(100,'EMP_NATIONALITY','Employees Nationality',100,NULL,'Montenegro',NULL,'Montenegrin',NULL,'',NULL,NULL,NULL,NULL),
(101,'EMP_NATIONALITY','Employees Nationality',101,NULL,'Morocco',NULL,'Moroccan',NULL,'',NULL,NULL,NULL,NULL),
(102,'EMP_NATIONALITY','Employees Nationality',102,NULL,'Mozambique',NULL,'Mozambican',NULL,'',NULL,NULL,NULL,NULL),
(103,'EMP_NATIONALITY','Employees Nationality',103,NULL,'Namibia',NULL,'Namibian',NULL,'',NULL,NULL,NULL,NULL),
(104,'EMP_NATIONALITY','Employees Nationality',104,NULL,'Nepal',NULL,'Nepalese',NULL,'',NULL,NULL,NULL,NULL),
(105,'EMP_NATIONALITY','Employees Nationality',105,NULL,'Nicaragua',NULL,'Nicaraguan',NULL,'',NULL,NULL,NULL,NULL),
(106,'EMP_NATIONALITY','Employees Nationality',106,NULL,'Niger',NULL,'Nigerien',NULL,'',NULL,NULL,NULL,NULL),
(107,'EMP_NATIONALITY','Employees Nationality',107,NULL,'Nigeria',NULL,'Nigerian',NULL,'',NULL,NULL,NULL,NULL),
(108,'EMP_NATIONALITY','Employees Nationality',108,NULL,'Norway',NULL,'Norwegian',NULL,'',NULL,NULL,NULL,NULL),
(109,'EMP_NATIONALITY','Employees Nationality',109,NULL,'Pakistan',NULL,'Pakistani',NULL,'',NULL,NULL,NULL,NULL),
(110,'EMP_NATIONALITY','Employees Nationality',110,NULL,'Panama',NULL,'Panamanian',NULL,'',NULL,NULL,NULL,NULL),
(111,'EMP_NATIONALITY','Employees Nationality',111,NULL,'Paraguay',NULL,'Paraguayan',NULL,'',NULL,NULL,NULL,NULL),
(112,'EMP_NATIONALITY','Employees Nationality',112,NULL,'Peru',NULL,'Peruvian',NULL,'',NULL,NULL,NULL,NULL),
(113,'EMP_NATIONALITY','Employees Nationality',113,NULL,'Philippines',NULL,'Filipino',NULL,'',NULL,NULL,NULL,NULL),
(114,'EMP_NATIONALITY','Employees Nationality',114,NULL,'Poland',NULL,'Pole',NULL,'',NULL,NULL,NULL,NULL),
(115,'EMP_NATIONALITY','Employees Nationality',115,NULL,'Portugal',NULL,'Portuguese',NULL,'',NULL,NULL,NULL,NULL),
(116,'EMP_NATIONALITY','Employees Nationality',116,NULL,'Qatar',NULL,'Qatari',NULL,'',NULL,NULL,NULL,NULL),
(117,'EMP_NATIONALITY','Employees Nationality',117,NULL,'Romania',NULL,'Romanian',NULL,'',NULL,NULL,NULL,NULL),
(118,'EMP_NATIONALITY','Employees Nationality',118,NULL,'Russia',NULL,'Russian',NULL,'',NULL,NULL,NULL,NULL),
(119,'EMP_NATIONALITY','Employees Nationality',119,NULL,'Rwanda',NULL,'Rwandan',NULL,'',NULL,NULL,NULL,NULL),
(120,'EMP_NATIONALITY','Employees Nationality',120,NULL,'SaudiArabia',NULL,'Saudi',NULL,'',NULL,NULL,NULL,NULL),
(121,'EMP_NATIONALITY','Employees Nationality',121,NULL,'Scotland',NULL,'Scot',NULL,'',NULL,NULL,NULL,NULL),
(122,'EMP_NATIONALITY','Employees Nationality',122,NULL,'Senegal',NULL,'Senegalese',NULL,'',NULL,NULL,NULL,NULL),
(123,'EMP_NATIONALITY','Employees Nationality',123,NULL,'Serbia',NULL,'Serbian',NULL,'',NULL,NULL,NULL,NULL),
(124,'EMP_NATIONALITY','Employees Nationality',124,NULL,'Singapore',NULL,'Singaporean',NULL,'',NULL,NULL,NULL,NULL),
(125,'EMP_NATIONALITY','Employees Nationality',125,NULL,'Slovakia',NULL,'Slovak',NULL,'',NULL,NULL,NULL,NULL),
(126,'EMP_NATIONALITY','Employees Nationality',126,NULL,'Slovenia',NULL,'Slovenian',NULL,'',NULL,NULL,NULL,NULL),
(127,'EMP_NATIONALITY','Employees Nationality',127,NULL,'Somalia',NULL,'Somali',NULL,'',NULL,NULL,NULL,NULL),
(128,'EMP_NATIONALITY','Employees Nationality',128,NULL,'Spain',NULL,'Spaniard',NULL,'',NULL,NULL,NULL,NULL),
(129,'EMP_NATIONALITY','Employees Nationality',129,NULL,'SriLanka',NULL,'SriLankan',NULL,'',NULL,NULL,NULL,NULL),
(130,'EMP_NATIONALITY','Employees Nationality',130,NULL,'Sudan',NULL,'Sudanese',NULL,'',NULL,NULL,NULL,NULL),
(131,'EMP_NATIONALITY','Employees Nationality',131,NULL,'Suriname',NULL,'Surinamese',NULL,'',NULL,NULL,NULL,NULL),
(132,'EMP_NATIONALITY','Employees Nationality',132,NULL,'Swaziland',NULL,'Swazi',NULL,'',NULL,NULL,NULL,NULL),
(133,'EMP_NATIONALITY','Employees Nationality',133,NULL,'Sweden',NULL,'Swede',NULL,'',NULL,NULL,NULL,NULL),
(134,'EMP_NATIONALITY','Employees Nationality',134,NULL,'Switzerland',NULL,'Swiss',NULL,'',NULL,NULL,NULL,NULL),
(135,'EMP_NATIONALITY','Employees Nationality',135,NULL,'Syria',NULL,'Syrian',NULL,'',NULL,NULL,NULL,NULL),
(136,'EMP_NATIONALITY','Employees Nationality',136,NULL,'Taiwan',NULL,'Taiwanese',NULL,'',NULL,NULL,NULL,NULL),
(137,'EMP_NATIONALITY','Employees Nationality',137,NULL,'Tajikistan',NULL,'Tadzhik',NULL,'',NULL,NULL,NULL,NULL),
(138,'EMP_NATIONALITY','Employees Nationality',138,NULL,'Tanzania',NULL,'Tanzanian',NULL,'',NULL,NULL,NULL,NULL),
(139,'EMP_NATIONALITY','Employees Nationality',139,NULL,'Thailand',NULL,'Thai',NULL,'',NULL,NULL,NULL,NULL),
(140,'EMP_NATIONALITY','Employees Nationality',140,NULL,'Togo',NULL,'Togolese',NULL,'',NULL,NULL,NULL,NULL),
(141,'EMP_NATIONALITY','Employees Nationality',141,NULL,'Trinidad',NULL,'Trinidadian',NULL,'',NULL,NULL,NULL,NULL),
(142,'EMP_NATIONALITY','Employees Nationality',142,NULL,'Tunisia',NULL,'Tunisian',NULL,'',NULL,NULL,NULL,NULL),
(143,'EMP_NATIONALITY','Employees Nationality',143,NULL,'Turkey',NULL,'Turk',NULL,'',NULL,NULL,NULL,NULL),
(144,'EMP_NATIONALITY','Employees Nationality',144,NULL,'Uganda',NULL,'Ugandan',NULL,'',NULL,NULL,NULL,NULL),
(145,'EMP_NATIONALITY','Employees Nationality',145,NULL,'Ukraine',NULL,'Ukrainian',NULL,'',NULL,NULL,NULL,NULL),
(146,'EMP_NATIONALITY','Employees Nationality',146,NULL,'UnitedKingdom',NULL,'British',NULL,'',NULL,NULL,NULL,NULL),
(147,'EMP_NATIONALITY','Employees Nationality',147,NULL,'UnitedStates',NULL,'American',NULL,'',NULL,NULL,NULL,NULL),
(148,'EMP_NATIONALITY','Employees Nationality',148,NULL,'Uruguay',NULL,'Uruguayan',NULL,'',NULL,NULL,NULL,NULL),
(149,'EMP_NATIONALITY','Employees Nationality',149,NULL,'Uzbekistan',NULL,'Uzbek',NULL,'',NULL,NULL,NULL,NULL),
(150,'EMP_NATIONALITY','Employees Nationality',150,NULL,'Venezuela',NULL,'Venezuelan',NULL,'',NULL,NULL,NULL,NULL),
(151,'EMP_NATIONALITY','Employees Nationality',151,NULL,'Vietnam',NULL,'Vietnamese',NULL,'',NULL,NULL,NULL,NULL),
(152,'EMP_NATIONALITY','Employees Nationality',152,NULL,'Wales',NULL,'Welshman',NULL,'',NULL,NULL,NULL,NULL),
(153,'EMP_NATIONALITY','Employees Nationality',153,NULL,'Yemen',NULL,'Yemeni',NULL,'',NULL,NULL,NULL,NULL),
(154,'EMP_NATIONALITY','Employees Nationality',154,NULL,'Yugoslavia',NULL,'Yugoslav',NULL,'',NULL,NULL,NULL,NULL),
(155,'EMP_NATIONALITY','Employees Nationality',155,NULL,'Zambia',NULL,'Zambian',NULL,'',NULL,NULL,NULL,NULL),
(156,'EMP_NATIONALITY','Employees Nationality',156,NULL,'Zimbabwe',NULL,'Zimbabwean',NULL,'',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
