-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jan 11, 2014, 06:38 AM
-- 伺服器版本: 6.0.4
-- PHP 版本: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `db_zoo`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `activity`
-- 

CREATE TABLE `activity` (
  `Activity_id` int(16) NOT NULL,
  `Activity_name` varchar(32) NOT NULL,
  `Spot` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Time` varchar(64) NOT NULL,
  PRIMARY KEY (`Activity_id`),
  FULLTEXT KEY `Activity_name` (`Activity_name`),
  FULLTEXT KEY `Activity_name_2` (`Activity_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `activity`
-- 

INSERT INTO `activity` VALUES (1, '昆蟲Live秀', '多媒體放映室', 4, '每週二、四、六、日 10:00、11:00、14:00、15:0');

-- --------------------------------------------------------

-- 
-- 資料表格式： `animal`
-- 

CREATE TABLE `animal` (
  `Animal_id` int(16) NOT NULL,
  `Scientific_name` varchar(32) NOT NULL,
  `Quantity` int(32) NOT NULL,
  `Food` varchar(256) NOT NULL,
  `Native_area` varchar(128) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Species` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`),
  KEY `Building_id` (`Building_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `animal`
-- 

INSERT INTO `animal` VALUES (1, 'Ailuropoda melanoleuca', 3, '大貓熊以竹為主食', '目前僅存於中國四川、甘肅和陜西三省境內海拔1,400-3,500公尺的高地裡', 1, 'melanoleuca');
INSERT INTO `animal` VALUES (2, 'Aptenodytes patagonicus', 10, '主要以魚維生，特別喜歡吃小型的Myctophidae科魚類，也會吃頭足類。', '有2個亞種，A. p. patagonicus分佈於南美福克蘭群島及南喬治亞島，而A. p. halli則分佈於南非南端的海域及紐西蘭南方的海域。', 2, 'patagonicus');
INSERT INTO `animal` VALUES (3, 'Spheniscus demersus', 20, '遠洋0.5-1.2公分長的魚。', '南非及納米比亞。', 2, 'demersus');

-- --------------------------------------------------------

-- 
-- 資料表格式： `animal_name`
-- 

CREATE TABLE `animal_name` (
  `Animal_id` int(16) NOT NULL,
  `Nickname` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`,`Nickname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `animal_name`
-- 

INSERT INTO `animal_name` VALUES (1, '貓熊');
INSERT INTO `animal_name` VALUES (2, '國王企鵝');
INSERT INTO `animal_name` VALUES (3, '黑腳企鵝');

-- --------------------------------------------------------

-- 
-- 資料表格式： `building`
-- 

CREATE TABLE `building` (
  `Building_id` int(16) NOT NULL,
  `Description` varchar(32) NOT NULL,
  `Curator_id` int(16) NOT NULL,
  PRIMARY KEY (`Building_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `building`
-- 

INSERT INTO `building` VALUES (1, '貓熊館', 1);
INSERT INTO `building` VALUES (2, '企鵝館', 1);
INSERT INTO `building` VALUES (3, '無尾熊館', 1);
INSERT INTO `building` VALUES (4, '昆蟲館', 1);
INSERT INTO `building` VALUES (5, '非洲動物區', 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `class_order`
-- 

CREATE TABLE `class_order` (
  `Class` varchar(32) NOT NULL,
  `Order` varchar(32) NOT NULL,
  PRIMARY KEY (`Order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `class_order`
-- 

INSERT INTO `class_order` VALUES ('哺乳綱', '食肉目');
INSERT INTO `class_order` VALUES ('鳥綱', '企鵝目');

-- --------------------------------------------------------

-- 
-- 資料表格式： `common_name`
-- 

CREATE TABLE `common_name` (
  `Animal_id` int(16) NOT NULL,
  `Common_name` varchar(32) NOT NULL,
  PRIMARY KEY (`Animal_id`,`Common_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `common_name`
-- 

INSERT INTO `common_name` VALUES (1, '圓仔');
INSERT INTO `common_name` VALUES (1, '圓圓');
INSERT INTO `common_name` VALUES (1, '團團');

-- --------------------------------------------------------

-- 
-- 資料表格式： `department`
-- 

CREATE TABLE `department` (
  `Department_id` int(32) NOT NULL,
  `Department_name` varchar(32) NOT NULL,
  `Manager_id` int(32) NOT NULL,
  PRIMARY KEY (`Department_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `department`
-- 

INSERT INTO `department` VALUES (1, '動物組', 1);
INSERT INTO `department` VALUES (2, '環境組', 2);
INSERT INTO `department` VALUES (3, '推廣組', 3);

-- --------------------------------------------------------

-- 
-- 資料表格式： `family_genius`
-- 

CREATE TABLE `family_genius` (
  `Family` varchar(32) NOT NULL,
  `Genius` varchar(32) NOT NULL,
  PRIMARY KEY (`Genius`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `family_genius`
-- 

INSERT INTO `family_genius` VALUES ('企鵝科', 'Aptenodytes');
INSERT INTO `family_genius` VALUES ('企鵝科', 'Spheniscus');
INSERT INTO `family_genius` VALUES ('熊科', 'Ailuropoda');

-- --------------------------------------------------------

-- 
-- 資料表格式： `genius_species`
-- 

CREATE TABLE `genius_species` (
  `Genius` varchar(32) NOT NULL,
  `Species` varchar(32) NOT NULL,
  PRIMARY KEY (`Species`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `genius_species`
-- 

INSERT INTO `genius_species` VALUES ('Ailuropoda', 'melanoleuca');
INSERT INTO `genius_species` VALUES ('Aptenodytes', 'patagonicus');
INSERT INTO `genius_species` VALUES ('Spheniscus', 'demersus');

-- --------------------------------------------------------

-- 
-- 資料表格式： `kingdom_phylm`
-- 

CREATE TABLE `kingdom_phylm` (
  `Kingdom` varchar(32) NOT NULL,
  `Phylum` varchar(32) NOT NULL,
  PRIMARY KEY (`Phylum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `kingdom_phylm`
-- 

INSERT INTO `kingdom_phylm` VALUES ('動物界', '脊索動物門');

-- --------------------------------------------------------

-- 
-- 資料表格式： `order_family`
-- 

CREATE TABLE `order_family` (
  `Order` varchar(32) NOT NULL,
  `Family` varchar(32) NOT NULL,
  PRIMARY KEY (`Family`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `order_family`
-- 

INSERT INTO `order_family` VALUES ('企鵝目', '企鵝科');
INSERT INTO `order_family` VALUES ('食肉目', '熊科');

-- --------------------------------------------------------

-- 
-- 資料表格式： `phylum_class`
-- 

CREATE TABLE `phylum_class` (
  `Phylum` varchar(32) NOT NULL,
  `Class` varchar(32) NOT NULL,
  PRIMARY KEY (`Class`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `phylum_class`
-- 

INSERT INTO `phylum_class` VALUES ('脊索動物門', '哺乳綱');
INSERT INTO `phylum_class` VALUES ('脊索動物門', '鳥綱');

-- --------------------------------------------------------

-- 
-- 資料表格式： `research`
-- 

CREATE TABLE `research` (
  `No` int(16) NOT NULL,
  `Category` varchar(32) NOT NULL,
  `Research_name` varchar(32) NOT NULL,
  PRIMARY KEY (`No`,`Category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `research`
-- 

INSERT INTO `research` VALUES (1021, '保育研究', '圈養穿山甲之族群管理與保育合作');
INSERT INTO `research` VALUES (1021, '環境教育', '野生動物國際保育繁殖合作與區域族群管理交流計畫');
INSERT INTO `research` VALUES (1021, '動物福利', '臺灣黑熊域外保育研究（一）');

-- --------------------------------------------------------

-- 
-- 資料表格式： `restaurant`
-- 

CREATE TABLE `restaurant` (
  `Restaurant_name` varchar(32) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Service` varchar(32) NOT NULL,
  PRIMARY KEY (`Restaurant_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `restaurant`
-- 

INSERT INTO `restaurant` VALUES ('大貓熊咖啡輕食館', '二樓', 1, '咖啡、可口蛋糕、新鮮水果輕食、新鮮果汁、現打冰沙、茶類、麵、飯類');
INSERT INTO `restaurant` VALUES ('河馬店', '廣場', 5, '冷熱飲品、飯食、麵食餐點');

-- --------------------------------------------------------

-- 
-- 資料表格式： `shop`
-- 

CREATE TABLE `shop` (
  `Shop_name` varchar(32) NOT NULL,
  `Location` varchar(32) NOT NULL,
  `Building_id` int(16) NOT NULL,
  `Product` varchar(32) NOT NULL,
  PRIMARY KEY (`Shop_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `shop`
-- 

INSERT INTO `shop` VALUES ('大熊貓店', '一二樓', 1, '團團圓圓相關娃娃紀念商品、服飾、商品、大頭貼');
INSERT INTO `shop` VALUES ('蟲蟲小棧', '一樓', 4, '昆蟲類相關紀念品、昆蟲類相關影音商品');

-- --------------------------------------------------------

-- 
-- 資料表格式： `zookeeper`
-- 

CREATE TABLE `zookeeper` (
  `Zookeeper_id` int(16) NOT NULL,
  `Zookeeper_name` varchar(32) NOT NULL,
  `Department_id` int(16) DEFAULT NULL,
  PRIMARY KEY (`Zookeeper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `zookeeper`
-- 

INSERT INTO `zookeeper` VALUES (1, 'Ann', 1);
INSERT INTO `zookeeper` VALUES (2, 'Ben', 2);
INSERT INTO `zookeeper` VALUES (3, 'Carol', 3);
INSERT INTO `zookeeper` VALUES (4, 'Amy', 1);
