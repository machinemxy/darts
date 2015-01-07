-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- ホスト: w.rdc.sae.sina.com.cn:3307
<<<<<<< Updated upstream
-- 生成時間: 2014 年 12 月 16 日 13:04
=======
-- 生成時間: 2015 年 1 月 07 日 19:20
>>>>>>> Stashed changes
-- サーバのバージョン: 5.5.23
-- PHP のバージョン: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `app_darts`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `countup` decimal(6,2) NOT NULL,
  `zeroone` decimal(5,2) NOT NULL,
  `cricket` decimal(3,2) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`year`,`month`,`day`)
<<<<<<< Updated upstream
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;
=======
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;
>>>>>>> Stashed changes

--
-- テーブルのデータをダンプしています `record`
--

INSERT INTO `record` (`id`, `year`, `month`, `day`, `countup`, `zeroone`, `cricket`, `rating`) VALUES
(1, 2014, 7, 11, 444.11, 46.31, 2.01, 4.58),
(2, 2014, 7, 13, 444.11, 58.08, 2.02, 5.61),
(3, 2014, 7, 19, 450.08, 56.05, 2.02, 5.32),
(4, 2014, 7, 21, 453.64, 55.96, 2.02, 5.27),
(5, 2014, 7, 28, 450.20, 57.13, 2.02, 5.45),
(7, 2014, 8, 4, 425.86, 55.71, 2.16, 5.32),
(8, 2014, 8, 2, 434.83, 57.13, 2.02, 5.45),
(9, 2014, 8, 6, 446.02, 55.97, 2.16, 5.33),
(10, 2014, 8, 8, 448.39, 56.95, 2.10, 5.49),
(11, 2014, 8, 16, 468.46, 61.28, 2.25, 6.35),
(12, 2014, 8, 18, 480.42, 61.87, 2.25, 6.44),
(13, 2014, 8, 24, 464.80, 62.18, 2.25, 6.48),
(14, 2014, 8, 31, 471.23, 62.84, 2.26, 6.61),
(15, 2014, 9, 6, 484.40, 61.42, 2.35, 6.47),
(16, 2014, 9, 10, 455.17, 60.03, 2.33, 6.24),
(17, 2014, 9, 11, 460.79, 60.56, 2.31, 6.34),
(18, 2014, 9, 14, 471.25, 60.56, 2.37, 6.46),
(19, 2014, 9, 16, 479.54, 62.73, 2.38, 6.80),
(20, 2014, 9, 19, 478.04, 63.40, 2.46, 7.01),
(21, 2014, 9, 20, 482.35, 63.89, 2.46, 7.10),
(22, 2014, 9, 24, 484.03, 63.95, 2.53, 7.21),
(23, 2014, 9, 28, 487.81, 65.31, 2.56, 7.46),
(24, 2014, 9, 30, 491.81, 65.15, 2.56, 7.45),
(25, 2014, 10, 6, 494.96, 66.26, 2.57, 7.60),
(26, 2014, 10, 8, 507.75, 65.86, 2.57, 7.53),
(27, 2014, 10, 10, 503.66, 67.29, 2.57, 7.73),
(28, 2014, 10, 13, 500.82, 69.68, 2.57, 8.05),
(29, 2014, 10, 17, 518.29, 72.07, 2.57, 8.40),
(30, 2014, 10, 20, 530.41, 72.42, 2.56, 8.43),
(31, 2014, 10, 26, 529.12, 73.45, 2.57, 8.59),
(32, 2014, 10, 27, 542.78, 72.74, 2.56, 8.48),
(33, 2014, 10, 30, 552.65, 73.38, 2.56, 8.58),
(34, 2014, 11, 2, 560.40, 74.02, 2.60, 8.72),
(35, 2014, 11, 3, 563.80, 74.74, 2.62, 8.85),
(36, 2014, 11, 4, 558.60, 75.97, 2.60, 9.01),
(37, 2014, 11, 6, 608.68, 77.07, 2.70, 9.30),
(38, 2014, 11, 11, 596.39, 77.07, 2.70, 9.30),
(39, 2014, 11, 14, 614.79, 78.80, 2.68, 9.52),
(40, 2014, 11, 16, 610.65, 78.80, 2.68, 9.52),
(41, 2014, 11, 17, 609.37, 80.89, 2.68, 9.83),
(42, 2014, 11, 18, 608.40, 82.19, 2.68, 10.02),
(43, 2014, 11, 19, 614.05, 82.19, 2.68, 10.02),
(44, 2014, 11, 22, 626.45, 77.44, 2.64, 9.27),
(45, 2014, 11, 23, 624.76, 78.53, 2.71, 9.53),
(46, 2014, 11, 24, 587.54, 78.62, 2.70, 9.53),
(47, 2014, 11, 25, 599.99, 77.59, 2.70, 9.39),
(48, 2014, 11, 30, 606.31, 77.45, 2.73, 9.40),
(49, 2014, 12, 3, 591.87, 77.57, 2.69, 9.37),
(50, 2014, 12, 5, 597.14, 77.71, 2.73, 9.44),
(51, 2014, 12, 7, 618.69, 78.04, 2.77, 9.54),
(52, 2014, 12, 11, 629.87, 78.76, 2.75, 9.62),
(53, 2014, 12, 12, 627.94, 80.66, 2.76, 9.91),
(55, 2014, 12, 15, 642.79, 80.88, 2.70, 9.85),
<<<<<<< Updated upstream
(56, 2014, 12, 16, 626.52, 80.88, 2.80, 9.98);
=======
(56, 2014, 12, 16, 626.52, 80.88, 2.80, 9.98),
(57, 2014, 12, 17, 618.50, 80.88, 2.78, 9.95),
(58, 2014, 12, 19, 622.64, 81.12, 2.76, 9.95),
(59, 2014, 12, 21, 600.10, 80.59, 2.78, 9.91),
(60, 2014, 12, 25, 611.82, 81.85, 2.80, 10.12),
(61, 2014, 12, 28, 606.69, 81.19, 2.80, 10.03),
(62, 2014, 12, 31, 620.88, 81.43, 2.80, 10.06),
(64, 2015, 1, 2, 633.59, 81.43, 2.80, 10.06);
>>>>>>> Stashed changes
