-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- ホスト: w.rdc.sae.sina.com.cn:3307
-- 生成時間: 2015 年 4 月 21 日 15:12
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
-- テーブルの構造 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(10) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- テーブルのデータをダンプしています `article`
--

INSERT INTO `article` (`id`, `title`, `date`, `url`) VALUES
(1, '飞镖小记', '2014-08-02', 'http://blog.sina.com.cn/s/blog_4b57dc160102uzxg.html'),
(2, '飞镖小记2', '2014-09-13', 'http://blog.sina.com.cn/s/blog_4b57dc160102v3ax.html'),
(3, '我的迷茫', '2014-10-17', 'http://blog.sina.com.cn/s/blog_4b57dc160102v7d5.html'),
(4, '小马飞镖教学之飞镖的选择', '2014-10-28', 'http://blog.sina.com.cn/s/blog_4b57dc160102v9c2.html'),
(5, '飞镖收藏', '2014-11-03', 'http://blog.sina.com.cn/s/blog_4b57dc160102v9sl.html'),
(6, '飞镖小记3', '2014-11-13', 'http://blog.sina.com.cn/s/blog_4b57dc160102vamy.html'),
(7, 'How I started playing darts(1)', '2015-01-07', 'http://blog.sina.com.cn/s/blog_4b57dc160102vjnx.html'),
(8, 'How I started playing darts(2)', '2015-01-13', 'http://blog.sina.com.cn/s/blog_4b57dc160102vk3o.html'),
(9, 'Darts in Japan(1)', '2015-01-22', 'http://blog.sina.com.cn/s/blog_4b57dc160102vkxf.html'),
(10, '记一位日本的飞镖爷爷', '2015-02-23', 'http://blog.sina.com.cn/s/blog_4b57dc160102vopx.html');
