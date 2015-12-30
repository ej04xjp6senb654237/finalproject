-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: sql108.er-webs.com
-- 生成日期: 2015 年 12 月 29 日 22:12
-- 服务器版本: 5.6.25-73.1
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `erweb_15758647_tattooshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `商品`
--

CREATE TABLE IF NOT EXISTS `商品` (
  `商品代號` int(10) unsigned NOT NULL,
  `商品名稱` varchar(50) DEFAULT NULL,
  `單價` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`商品代號`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `商品`
--

INSERT INTO `商品` (`商品代號`, `商品名稱`, `單價`) VALUES
(1, '星星', 1000),
(2, '黑桃', 1000),
(3, '鑰匙', 1000),
(4, '櫻桃', 1000),
(5, '冰淇淋', 1000),
(6, '蝴蝶', 1000),
(7, '翅膀', 1000),
(8, '米老鼠', 1000),
(9, '師傅A', 2000),
(10, '師傅B', 3000),
(11, '星期一', NULL),
(12, '星期二', NULL),
(13, '星期三', NULL),
(14, '星期四', NULL),
(15, '星期五', NULL),
(16, '星期六', NULL),
(17, '星期日', NULL),
(18, '5cm*5cm', 2500),
(19, '10cm*10cm', 5000),
(20, '15cm*15cm', 15000),
(21, '12點到4點', NULL),
(22, '4點到8點', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `商品照片`
--

CREATE TABLE IF NOT EXISTS `商品照片` (
  `圖檔名` varchar(50) NOT NULL,
  `商品代號` int(10) unsigned NOT NULL,
  PRIMARY KEY (`圖檔名`,`商品代號`),
  KEY `商品照片_FKIndex1` (`商品代號`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `商品照片`
--

INSERT INTO `商品照片` (`圖檔名`, `商品代號`) VALUES
('1.jpg', 1),
('10.jpg', 10),
('11.jpg', 11),
('12.jpg', 12),
('13.jpg', 13),
('14.jpg', 14),
('15.jpg', 15),
('16.jpg', 16),
('17.jpg', 17),
('18.jpg', 18),
('19.jpg', 19),
('2.jpg', 2),
('20.jpg', 20),
('21.jpg', 21),
('22.jpg', 22),
('3.jpg', 3),
('4.jpg', 4),
('5.jpg', 5),
('6.jpg', 6),
('7.jpg', 7),
('8.jpg', 8),
('9.jpg', 9);

-- --------------------------------------------------------

--
-- 表的结构 `圖案暫存區`
--

CREATE TABLE IF NOT EXISTS `圖案暫存區` (
  `帳號` varchar(25) NOT NULL,
  `商品代號` int(10) unsigned NOT NULL,
  `單價` int(10) unsigned DEFAULT NULL,
  `加入日期` datetime DEFAULT NULL,
  PRIMARY KEY (`帳號`,`商品代號`),
  KEY `會員_has_商品_FKIndex1` (`帳號`),
  KEY `會員_has_商品_FKIndex2` (`商品代號`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `會員`
--

CREATE TABLE IF NOT EXISTS `會員` (
  `手機號碼` varchar(25) NOT NULL,
  `姓名` varchar(50) DEFAULT NULL,
  `性別` char(1) DEFAULT NULL,
  `生日` datetime DEFAULT NULL,
  `密碼` varchar(50) DEFAULT NULL,
  `地址` varchar(100) DEFAULT NULL,
  `權限` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`手機號碼`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `會員`
--

INSERT INTO `會員` (`手機號碼`, `姓名`, `性別`, `生日`, `密碼`, `地址`, `權限`) VALUES
('0000000000', '劉政明', '男', '2015-09-15 00:00:00', 'tattoo', '新北市', '店家'),
('0915369373', '劉冠綸', '男', '2015-07-20 00:00:00', 'ej04xjp6', '新北市', '一般會員'),
('0955353309', '翁銘宏', '男', '1994-12-15 00:00:00', '0955353309', '新北市', '一般會員');

-- --------------------------------------------------------

--
-- 表的结构 `訂單`
--

CREATE TABLE IF NOT EXISTS `訂單` (
  `訂單編號` varchar(55) NOT NULL,
  `帳號` varchar(25) NOT NULL,
  `訂購日期` datetime NOT NULL,
  `付款方式` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`訂單編號`),
  KEY `訂單_FKIndex3` (`帳號`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `訂單明細`
--

CREATE TABLE IF NOT EXISTS `訂單明細` (
  `訂單編號` varchar(55) NOT NULL,
  `商品代號` int(10) unsigned NOT NULL,
  `單價` int(10) unsigned DEFAULT NULL,
  `優惠方式` varchar(50) DEFAULT NULL,
  `處理狀態` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`訂單編號`,`商品代號`),
  KEY `訂單_has_商品_FKIndex1` (`訂單編號`),
  KEY `訂單_has_商品_FKIndex2` (`商品代號`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `預約`
--

CREATE TABLE IF NOT EXISTS `預約` (
  `師傅` varchar(3) NOT NULL,
  `時段` varchar(2) NOT NULL,
  `日期` datetime NOT NULL,
  PRIMARY KEY (`師傅`,`時段`,`日期`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `預約`
--

INSERT INTO `預約` (`師傅`, `時段`, `日期`) VALUES
('師傅A', '上午', '2015-12-31 08:00:00'),
('師傅B', '下午', '2015-12-30 13:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
