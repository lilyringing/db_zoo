-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2014 年 01 月 10 日 09:40
-- 伺服器版本: 5.5.32
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `db_zoo`
--
CREATE DATABASE IF NOT EXISTS `db_zoo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_zoo`;

-- --------------------------------------------------------

--
-- 表的結構 `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `Activity_id` int(16) NOT NULL,
  `Activity_name` varchar(32) NOT NULL,
  `Spot` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Time` varchar(32) NOT NULL,
  PRIMARY KEY (`Activity_id`),
  KEY `Building_id` (`Building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `Animal_id` int(16) NOT NULL AUTO_INCREMENT,
  `Scientific_name` varchar(32) NOT NULL,
  `Quantity` int(32) NOT NULL,
  `Food` varchar(256) NOT NULL,
  `Native_area` varchar(128) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Species` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`),
  KEY `Building_id` (`Building_id`),
  KEY `Species` (`Species`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `animal`
--

INSERT INTO `animal` (`Animal_id`, `Scientific_name`, `Quantity`, `Food`, `Native_area`, `Building_id`, `Species`) VALUES
(1, 'Ailuropoda melanoleuca', 3, '大貓熊以竹為主食', '目前僅存於中國四川、甘肅和陜西三省境內海拔1,400-3,500公尺的高地裡', 1, 'melanoleuca'),
(2, 'Aptenodytes patagonicus', 10, '主要以魚維生，特別喜歡吃小型的Myctophidae科魚類，也會吃頭足類。', '有2個亞種，A. p. patagonicus分佈於南美福克蘭群島及南喬治亞島，而A. p. halli則分佈於南非南端的海域及紐西蘭南方的海域。', 2, 'patagonicus'),
(3, 'Spheniscus demersus', 20, '遠洋0.5-1.2公分長的魚。', '南非及納米比亞。', 2, 'demersus');

-- --------------------------------------------------------

--
-- 表的結構 `animal_name`
--

CREATE TABLE IF NOT EXISTS `animal_name` (
  `Animal_id` int(16) NOT NULL,
  `Nickname` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`,`Nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `animal_name`
--

INSERT INTO `animal_name` (`Animal_id`, `Nickname`) VALUES
(1, '貓熊'),
(2, '國王企鵝'),
(3, '黑腳企鵝');

-- --------------------------------------------------------

--
-- 表的結構 `building`
--

CREATE TABLE IF NOT EXISTS `building` (
  `Building_id` int(16) NOT NULL AUTO_INCREMENT,
  `Description` varchar(32) NOT NULL,
  `Curator_id` int(16) NOT NULL,
  PRIMARY KEY (`Building_id`),
  KEY `Curator_id` (`Curator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 轉存資料表中的資料 `building`
--

INSERT INTO `building` (`Building_id`, `Description`, `Curator_id`) VALUES
(1, '貓熊館', 1),
(2, '企鵝館', 1),
(3, '無尾熊館', 1),
(4, '昆蟲館', 1),
(5, '非洲動物區', 1);

-- --------------------------------------------------------

--
-- 表的結構 `class_order`
--

CREATE TABLE IF NOT EXISTS `class_order` (
  `Class` varchar(32) NOT NULL,
  `Order` varchar(32) NOT NULL,
  PRIMARY KEY (`Order`),
  KEY `Class` (`Class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `class_order`
--

INSERT INTO `class_order` (`Class`, `Order`) VALUES
('哺乳綱', '食肉目'),
('鳥綱', '企鵝目');

-- --------------------------------------------------------

--
-- 表的結構 `common_name`
--

CREATE TABLE IF NOT EXISTS `common_name` (
  `Animal_id` int(16) NOT NULL,
  `Common_name` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`,`Common_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Department_id` int(32) NOT NULL,
  `Department_name` varchar(32) NOT NULL,
  `Manager_id` int(32) NOT NULL,
  PRIMARY KEY (`Department_id`),
  KEY `Manager_id` (`Manager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `family_genius`
--

CREATE TABLE IF NOT EXISTS `family_genius` (
  `Family` varchar(32) NOT NULL,
  `Genius` varchar(32) NOT NULL,
  PRIMARY KEY (`Genius`),
  KEY `Family` (`Family`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `family_genius`
--

INSERT INTO `family_genius` (`Family`, `Genius`) VALUES
('企鵝科', 'Aptenodytes'),
('企鵝科', 'Spheniscus'),
('熊科', 'Ailuropoda');

-- --------------------------------------------------------

--
-- 表的結構 `genius_species`
--

CREATE TABLE IF NOT EXISTS `genius_species` (
  `Genius` varchar(32) NOT NULL,
  `Species` varchar(32) NOT NULL,
  PRIMARY KEY (`Species`),
  KEY `Genius` (`Genius`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `genius_species`
--

INSERT INTO `genius_species` (`Genius`, `Species`) VALUES
('Ailuropoda', 'melanoleuca'),
('Aptenodytes', 'patagonicus'),
('Spheniscus', 'demersus');

-- --------------------------------------------------------

--
-- 表的結構 `kingdom_phylm`
--

CREATE TABLE IF NOT EXISTS `kingdom_phylm` (
  `Kingdom` varchar(32) NOT NULL,
  `Phylum` varchar(32) NOT NULL,
  PRIMARY KEY (`Phylum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `kingdom_phylm`
--

INSERT INTO `kingdom_phylm` (`Kingdom`, `Phylum`) VALUES
('動物界', '脊索動物門');

-- --------------------------------------------------------

--
-- 表的結構 `order_family`
--

CREATE TABLE IF NOT EXISTS `order_family` (
  `Order` varchar(32) NOT NULL,
  `Family` varchar(32) NOT NULL,
  PRIMARY KEY (`Family`),
  KEY `Order` (`Order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `order_family`
--

INSERT INTO `order_family` (`Order`, `Family`) VALUES
('企鵝目', '企鵝科'),
('食肉目', '熊科');

-- --------------------------------------------------------

--
-- 表的結構 `phylum_class`
--

CREATE TABLE IF NOT EXISTS `phylum_class` (
  `Phylum` varchar(32) NOT NULL,
  `Class` varchar(32) NOT NULL,
  PRIMARY KEY (`Class`),
  KEY `Phylum` (`Phylum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 轉存資料表中的資料 `phylum_class`
--

INSERT INTO `phylum_class` (`Phylum`, `Class`) VALUES
('脊索動物門', '哺乳綱'),
('脊索動物門', '鳥綱');

-- --------------------------------------------------------

--
-- 表的結構 `research`
--

CREATE TABLE IF NOT EXISTS `research` (
  `No.` int(16) NOT NULL,
  `Category` varchar(32) NOT NULL,
  `Research_name` varchar(32) NOT NULL,
  PRIMARY KEY (`No.`,`Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `Restaurant_name` varchar(32) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Service` varchar(32) NOT NULL,
  PRIMARY KEY (`Restaurant_name`),
  KEY `Building_id` (`Building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `Shop_name` varchar(32) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Product` varchar(32) NOT NULL,
  PRIMARY KEY (`Shop_name`),
  KEY `Building_id` (`Building_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的結構 `zookeeper`
--

CREATE TABLE IF NOT EXISTS `zookeeper` (
  `Zookeeper_id` int(16) NOT NULL AUTO_INCREMENT,
  `Zookeeper_name` varchar(32) NOT NULL,
  `Department_id` int(16) DEFAULT NULL,
  PRIMARY KEY (`Zookeeper_id`),
  KEY `Department_id` (`Department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 轉存資料表中的資料 `zookeeper`
--

INSERT INTO `zookeeper` (`Zookeeper_id`, `Zookeeper_name`, `Department_id`) VALUES
(1, 'Ann', NULL);

--
-- 匯出資料表的 Constraints
--

--
-- 資料表的 Constraints `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`Building_id`) REFERENCES `building` (`Building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`Building_id`) REFERENCES `building` (`Building_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`Species`) REFERENCES `genius_species` (`Species`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `animal_name`
--
ALTER TABLE `animal_name`
  ADD CONSTRAINT `animal_name_ibfk_1` FOREIGN KEY (`Animal_id`) REFERENCES `animal` (`Animal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_ibfk_1` FOREIGN KEY (`Curator_id`) REFERENCES `zookeeper` (`Zookeeper_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `class_order`
--
ALTER TABLE `class_order`
  ADD CONSTRAINT `class_order_ibfk_1` FOREIGN KEY (`Class`) REFERENCES `phylum_class` (`Class`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Manager_id`) REFERENCES `zookeeper` (`Zookeeper_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `family_genius`
--
ALTER TABLE `family_genius`
  ADD CONSTRAINT `family_genius_ibfk_1` FOREIGN KEY (`Family`) REFERENCES `order_family` (`Family`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `genius_species`
--
ALTER TABLE `genius_species`
  ADD CONSTRAINT `genius_species_ibfk_1` FOREIGN KEY (`Genius`) REFERENCES `family_genius` (`Genius`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `order_family`
--
ALTER TABLE `order_family`
  ADD CONSTRAINT `order_family_ibfk_1` FOREIGN KEY (`Order`) REFERENCES `class_order` (`Order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `phylum_class`
--
ALTER TABLE `phylum_class`
  ADD CONSTRAINT `phylum_class_ibfk_1` FOREIGN KEY (`Phylum`) REFERENCES `kingdom_phylm` (`Phylum`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`Building_id`) REFERENCES `building` (`Building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`Building_id`) REFERENCES `building` (`Building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `zookeeper`
--
ALTER TABLE `zookeeper`
  ADD CONSTRAINT `zookeeper_ibfk_1` FOREIGN KEY (`Department_id`) REFERENCES `department` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
