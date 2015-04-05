-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-05 06:27:20
-- 服务器版本： 5.6.20
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darts`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(10) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `article`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
