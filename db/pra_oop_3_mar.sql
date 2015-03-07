-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 11:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pra_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE IF NOT EXISTS `tbl_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image_title` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `video_title` varchar(100) DEFAULT NULL,
  `video_url` varchar(200) DEFAULT NULL,
  `embed_code` varchar(10000) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `meta_key` varchar(100) DEFAULT NULL,
  `meta_desc` varchar(10000) DEFAULT NULL,
  `meta_robots` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `category_id` (`category_id`),
  KEY `author` (`author`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`id`, `name`, `slug`, `content`, `category_id`, `image`, `image_title`, `video`, `video_title`, `video_url`, `embed_code`, `status`, `created_at`, `author`, `modified_by`, `meta_key`, `meta_desc`, `meta_robots`, `updated_at`) VALUES
(1, 'home', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2015-03-01 21:35:50', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'about', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2015-03-01 21:35:50', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE IF NOT EXISTS `tbl_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `dsc` varchar(2000) NOT NULL,
  `ps_date` date NOT NULL,
  `author` varchar(25) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `pic`, `title`, `dsc`, `ps_date`, `author`, `created_date`, `updated_date`) VALUES
(188, '', '2te', '2d e', '2014-07-02', '2te', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, '', 'te', ' de', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, '', 'te', 'Tec hereby Announces Admission Open for april session 2013.grin\r\nyou can\r\nchoose us\r\nmany more city''s,\r\nTOKYOU,SHIZUOKA,NAGOYA,SENDAI,FUKUOKA,HIROSHIMA,\r\nOKINAWA,FUKUSHIMA. \r\n  You can choose us many more colleges :-) in this city.we support For your documentation and guide to right direction. FREE SEMINAR AT TEC Shizuoka japanese education center,Shizuoka Date:2013/9/24 TIME:9.00A.M.(tuesday)\r\n  ', '2014-06-29', 'ae', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '', 'c', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '', 'b', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, '', 'te', ' de', '2014-08-02', 'te', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '', 'a', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '', 'bb', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '', 'cc', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, '', 'dd', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, '', 'ee', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, '', 'gg', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, '', 'e MySQL returned an empty....', 'e MySQL returned an empty result set (i.e. zero rows). ( Query took 0.0006 sec )\r\n\r\nTec hereby Announces Admission Open for april session 2013.grin you can choose us many more city''s, TOKYOU,SHIZUOKA,NAGOYA,SENDAI,FUKUOKA,HIROSHIMA, OKINAWA,FUKUSHIMA. You can choose us many more colleges :-) in this city.we support For your documentation and guide to right direction. FREE SEMINAR AT TEC Shizuoka japanese education center,Shizuoka Date:2013/9/24 TIME:9.00A.M.(tuesday)', '2014-07-14', 'es', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_blogs_comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_blogs_comments`
--

INSERT INTO `tbl_blogs_comments` (`comment_id`, `blog_id`, `comment`, `by`, `created_date`, `updated_date`) VALUES
(2, 206, 'a Comment', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 206, 'b Comment', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 206, 'c Comment', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 206, 'Comment', 'ramesh gurung', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 206, 'Comment', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 206, 'awesome', 'miz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 206, 'awesome', 'miz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 206, 'nid to pace myself', 'ram grg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 206, 's', 's', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 206, 'this is first comment ', 'rax', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 206, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 206, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(25) NOT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `image_title` varchar(50) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  `published` tinyint(3) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`name`),
  KEY `parent_id` (`parent_id`),
  KEY `author` (`author`),
  KEY `modified_by` (`modified_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `parent_id`, `name`, `slug`, `content`, `image`, `image_title`, `url`, `order`, `published`, `created_at`, `author`, `modified_by`, `updated_at`, `status`) VALUES
(1, NULL, 'cat1', 'cat1', 'cat1 con', '01.jpg', '', '', 1, 1, '2015-02-28 17:33:12', 25, NULL, NULL, 0),
(2, NULL, 'cat4', 'cat4', '', '02.jpg', '', '', 2, 1, '2015-02-28 18:10:25', 25, NULL, NULL, 2),
(4, NULL, 'cat2', 'cat2', 'cat2 c', '2.jpg', '', '', 3, 1, '2015-03-01 06:32:53', 25, NULL, NULL, 0),
(5, 4, 'cat2.1', 'cat21', '', 'japan.png', '', '', 4, 1, '2015-03-01 06:34:15', 25, NULL, NULL, 0),
(6, NULL, 'cat 3', 'cat-3', '', '03.jpg', '', '', 5, 1, '2015-03-01 07:07:26', 25, NULL, NULL, 0),
(7, 2, 'cat4.1', 'cat41', 'c', '04.jpg', 'i', 'u', 6, 1, '2015-03-01 17:58:35', 25, NULL, NULL, 0),
(8, 7, 'cat4.1.1', 'cat411', '', 'Tulips.jpg', '', '', 7, 0, '2015-03-01 18:14:34', 25, NULL, NULL, 0),
(9, 6, 'cat3.1', 'cat31', '', 'feature_1.png', '', '', 8, 0, '2015-03-01 18:33:33', 25, NULL, NULL, 0),
(10, 2, 'cat4.2', 'cat42', '4.2', '', '', '', 9, 1, '2015-03-01 18:38:05', 25, NULL, NULL, 0),
(11, 5, 'cat2.1.1', 'cat211', '', '', '', '', 10, 1, '2015-03-01 18:55:44', 25, NULL, NULL, 0),
(12, 10, 'cat4.2.1', 'cat421', '', '', '', '', 11, 0, '2015-03-01 18:58:45', 25, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `dsc` varchar(200) DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `by` varchar(50) DEFAULT NULL,
  `charge` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `dsc`, `venue`, `date`, `by`, `charge`, `created_date`, `updated_date`) VALUES
(1, 'php program', 'php boot camp ', 'samakhusi', '2014-07-17 12:42:10', 'php org', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'asp.net program ', 'asp.net boot', 'balaju', '2014-07-17 12:42:32', 'asp.net', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groups`
--

CREATE TABLE IF NOT EXISTS `tbl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_group_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `parent_group_id` (`parent_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `parent_group_id`, `name`, `slug`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'superadmin', 'superadmin', 'superadmin desc', 1, '2015-01-27 18:51:41', NULL),
(2, 1, 'admin', 'admin', 'admin desce', 1, '2015-01-27 18:52:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned DEFAULT NULL,
  `permission_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `permission_id` (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=761 ;

--
-- Dumping data for table `tbl_group_permissions`
--

INSERT INTO `tbl_group_permissions` (`id`, `group_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(288, 2, 5, '2015-02-21 08:34:57', NULL),
(289, 2, 6, '2015-02-21 08:34:57', NULL),
(290, 2, 7, '2015-02-21 08:34:57', NULL),
(291, 2, 8, '2015-02-21 08:34:57', NULL),
(292, 2, 9, '2015-02-21 08:34:57', NULL),
(293, 2, 10, '2015-02-21 08:34:57', NULL),
(294, 2, 17, '2015-02-21 08:34:58', NULL),
(295, 2, 11, '2015-02-21 08:34:58', NULL),
(296, 2, 14, '2015-02-21 08:34:58', NULL),
(297, 2, 18, '2015-02-21 08:34:58', NULL),
(298, 2, 19, '2015-02-21 08:34:58', NULL),
(299, 2, 20, '2015-02-21 08:34:58', NULL),
(300, 2, 21, '2015-02-21 08:34:58', NULL),
(301, 2, 22, '2015-02-21 08:34:58', NULL),
(302, 2, 15, '2015-02-21 08:34:58', NULL),
(303, 2, 16, '2015-02-21 08:34:58', NULL),
(724, 1, 5, '2015-03-01 19:08:32', NULL),
(725, 1, 6, '2015-03-01 19:08:32', NULL),
(726, 1, 7, '2015-03-01 19:08:32', NULL),
(727, 1, 8, '2015-03-01 19:08:32', NULL),
(728, 1, 9, '2015-03-01 19:08:32', NULL),
(729, 1, 10, '2015-03-01 19:08:32', NULL),
(730, 1, 17, '2015-03-01 19:08:32', NULL),
(731, 1, 11, '2015-03-01 19:08:32', NULL),
(732, 1, 14, '2015-03-01 19:08:32', NULL),
(733, 1, 18, '2015-03-01 19:08:32', NULL),
(734, 1, 19, '2015-03-01 19:08:32', NULL),
(735, 1, 20, '2015-03-01 19:08:32', NULL),
(736, 1, 21, '2015-03-01 19:08:32', NULL),
(737, 1, 22, '2015-03-01 19:08:32', NULL),
(738, 1, 15, '2015-03-01 19:08:32', NULL),
(739, 1, 16, '2015-03-01 19:08:33', NULL),
(740, 1, 23, '2015-03-01 19:08:33', NULL),
(741, 1, 24, '2015-03-01 19:08:33', NULL),
(742, 1, 25, '2015-03-01 19:08:33', NULL),
(743, 1, 26, '2015-03-01 19:08:33', NULL),
(744, 1, 27, '2015-03-01 19:08:33', NULL),
(745, 1, 28, '2015-03-01 19:08:33', NULL),
(746, 1, 29, '2015-03-01 19:08:33', NULL),
(747, 1, 30, '2015-03-01 19:08:33', NULL),
(748, 1, 31, '2015-03-01 19:08:33', NULL),
(749, 1, 32, '2015-03-01 19:08:33', NULL),
(750, 1, 33, '2015-03-01 19:08:33', NULL),
(751, 1, 34, '2015-03-01 19:08:33', NULL),
(752, 1, 35, '2015-03-01 19:08:33', NULL),
(753, 1, 36, '2015-03-01 19:08:33', NULL),
(754, 1, 37, '2015-03-01 19:08:33', NULL),
(755, 1, 38, '2015-03-01 19:08:33', NULL),
(756, 1, 39, '2015-03-01 19:08:33', NULL),
(757, 1, 40, '2015-03-01 19:08:33', NULL),
(758, 1, 41, '2015-03-01 19:08:33', NULL),
(759, 1, 42, '2015-03-01 19:08:33', NULL),
(760, 1, 43, '2015-03-01 19:08:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

CREATE TABLE IF NOT EXISTS `tbl_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `level` int(11) DEFAULT '0',
  `order` int(10) unsigned DEFAULT NULL,
  `page_type_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `article_id` int(10) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `author` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `parent_id` (`parent_id`),
  KEY `author` (`author`),
  KEY `modified_by` (`modified_by`),
  KEY `page_type_id` (`page_type_id`),
  KEY `tbl_menus_ibfk_5` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `parent_id`, `level`, `order`, `page_type_id`, `name`, `category_id`, `article_id`, `slug`, `desc`, `status`, `author`, `modified_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 1, 1, 'Home', 1, NULL, 'home', 'home desc', 1, NULL, NULL, '2015-03-01 20:39:54', NULL),
(10, 1, 0, 2, 2, 'page 1', NULL, NULL, 'page-1', '', 0, NULL, NULL, '2015-03-02 20:51:03', NULL),
(11, 10, 1, 3, 2, 'page 1.1', NULL, NULL, 'page-11', '', 0, NULL, NULL, '2015-03-02 20:51:24', NULL),
(13, 10, 1, 5, 2, 'page 1.2', NULL, NULL, 'page-12', '', 0, NULL, NULL, '2015-03-02 20:51:54', NULL),
(14, 11, 2, 4, 2, 'page 1.1.1', NULL, NULL, 'page-111', '', 0, NULL, NULL, '2015-03-02 20:52:16', NULL),
(15, 13, 2, 6, 2, 'page 1.2.1', NULL, NULL, 'page-121', '', 0, NULL, NULL, '2015-03-02 20:52:38', NULL),
(16, 13, 2, 7, 2, 'page 1.2.2', NULL, NULL, 'page-122', '', 0, NULL, NULL, '2015-03-02 20:53:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `dsc` varchar(2000) NOT NULL,
  `ps_date` date NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `pic`, `title`, `dsc`, `ps_date`, `created_date`, `updated_date`) VALUES
(132, '', 'ccc', 'ccs', '2014-04-25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '1.jpg', 't', '<h3>Tec hereby Announces Admission Open for april session 2<sub>0</sub>1<sup>3</sup>.<img src="http://localhost/cel/2014/apr/prac/oops/oop_boot_0.1/admin/images/smileys/grin.png" title="grin" alt="grin"></h3>&nbsp;<div style="text-align:center"><ul><li><strong><em><span style="text-decoration:underline"><strike>you <a href="http://www.google.com">can</a></strike></span></em></strong></li><li><strong><em><span style="text-decoration:underline"><strike>choose us</strike></span></em></strong></li><li><strong><em><span style="text-decoration:underline"><strike>many more city''s,</strike></span></em></strong></li></ul></div><div><br></div><div>\r\nTOKYOU,SHIZUOKA,NAGOYA,SENDAI,FUKUOKA,HIROSHIMA,<hr noshade="noshade" style="width:100px;height:1px"></div><div>\r\n<!-- pagebreak -->OKINAWA,FUKUSHIMA.&nbsp;</div><div>&nbsp;\r\nYou can choose us many more colleges in this city.we support For your documentation and guide to right direction.\r\n                 FREE SEMINAR AT TEC\r\n          Shizuoka japanese education center,Shizuoka\r\n          Date:2013/9/24\r\n          TIME:9.00A.M.(tuesday)  </div>', '2013-09-01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'WANTED.jpg', 'Wanted', 'Top Education Consultancy Pvt.Ltd. is urgently seeking 2(two) smart & qualified Japanese Language Teachers.For more detail please visit our office or contact 061-523684. \r\n', '2013-12-16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_page_id` int(10) unsigned DEFAULT NULL,
  `type` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `parent_page_id` (`parent_page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `parent_page_id`, `type`, `name`, `slug`, `content`, `status`, `created_at`, `updated_at`, `order`) VALUES
(11, NULL, 0, 'page 1', '', '<p>1 d</p>', 0, '2015-02-28 10:07:54', NULL, 1),
(12, NULL, 0, 'page 2', '', '<p>page 2 desc</p>', 0, '2015-02-28 10:09:40', NULL, 3),
(13, NULL, 0, 'page 3', '', '<p>page 3 desc</p>', 0, '2015-02-28 10:09:52', NULL, 6),
(14, NULL, 0, 'page 4', '', '<p>page 4 content</p>', 0, '2015-02-28 10:21:10', NULL, 10),
(15, 11, 0, 'page 1.1', '', '<p>1.1</p>', 0, '2015-02-28 10:29:59', NULL, 2),
(16, 12, 0, 'page 2.1', '', '<p>page 2.1</p>', 0, '2015-02-28 10:30:22', NULL, 4),
(17, 13, 2, 'page 3.1', '', '<p>page 3.1 desc</p>', 0, '2015-02-28 10:30:39', NULL, 7),
(18, 14, 0, 'page 4.1', '', '<p>dfdfd</p>', 0, '2015-02-28 10:30:55', NULL, 11),
(19, 12, 0, 'page 2.2', '', '<p>222</p>', 0, '2015-02-28 10:31:28', NULL, 5),
(20, 14, 1, 'page 4.2', '', '<p>4.2</p>', 0, '2015-02-28 10:32:06', NULL, 12),
(22, 14, 1, 'page 4.4', '', '<p>4.4</p>', 0, '2015-02-28 10:32:06', NULL, 14),
(23, 13, 1, 'page 3.3', '', '<p>.3</p>', 0, '2015-02-28 10:32:06', NULL, 9),
(24, 13, 4, 'page 3.2', '', '<p>3.2</p>', 0, '2015-02-28 10:38:24', NULL, 8),
(25, 14, 3, 'page 4.3', '', '<p>4.3</p>', 0, '2015-02-28 10:38:58', NULL, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_types`
--

CREATE TABLE IF NOT EXISTS `tbl_page_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_page_types`
--

INSERT INTO `tbl_page_types` (`id`, `name`, `desc`) VALUES
(1, 'simple page', NULL),
(2, 'blog page', NULL),
(3, 'gallery page', NULL),
(4, 'video page', NULL),
(5, 'gallery & video page', NULL),
(6, 'contact page', NULL),
(7, 'timeline page', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_permission_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `fk_parent_permission_id` (`parent_permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `parent_permission_id`, `name`, `slug`, `desc`, `created_at`) VALUES
(5, NULL, 'Administrator User', 'administrator-user', '', '2015-01-28 19:11:32'),
(6, 5, 'add user', 'add-user', '', '2015-01-28 19:13:23'),
(7, 5, 'edit user', 'edit-user', '', '2015-01-28 19:13:38'),
(8, NULL, 'Administrator  Permission', 'administrator-permission', '', '2015-01-28 19:14:51'),
(9, 8, 'add Permission', 'add-permission', '', '2015-01-28 19:15:02'),
(10, 8, 'edit Permission', 'edit-permission', '', '2015-01-28 19:15:11'),
(11, NULL, 'Administrator Testimonial', 'administrator-testimonial', 'Administrator Testimonial (CRUD)', '2015-02-01 08:57:53'),
(14, 11, 'list testimonial', 'list-testimonial', 'list testimonial desc', '2015-02-01 09:53:12'),
(15, NULL, 'Administrator Group', 'administrator-group', 'Administrator Group i.e CRUD Groups ', '2015-02-01 09:55:08'),
(16, 15, 'Add Group', 'add-group', 'Add Group', '2015-02-01 10:00:09'),
(17, 8, 'delete Permission', 'delete-permission', 'delete Permission desc', '2015-02-20 16:36:45'),
(18, 11, 'add testimonial', 'add-testimonial', 'add testimonial desc', '2015-02-20 18:00:58'),
(19, 11, 'edit testimonial', 'edit-testimonial', 'edit testimonial desc', '2015-02-20 18:01:07'),
(20, 11, 'delete testimonial', 'delete-testimonial', 'delete testimonial desc', '2015-02-20 18:01:33'),
(21, 11, 'activate testimonial', 'activate-testimonial', 'activate testimonial desc', '2015-02-20 18:49:00'),
(22, 11, 'block testimonial', 'block-testimonial', 'block testimonial desc', '2015-02-20 18:49:12'),
(23, NULL, 'Administrator page', 'administrator-page', 'Administrator page desc', '2015-02-22 19:53:39'),
(24, 23, 'list page', 'list-page', 'list page desc', '2015-02-22 19:55:17'),
(25, 23, 'add page', 'add-page', 'add page desc', '2015-02-22 19:58:00'),
(26, 23, 'edit page', 'edit-page', 'edit page', '2015-02-22 19:58:17'),
(27, 23, 'delete page', 'delete-page', 'delete page', '2015-02-22 19:58:27'),
(28, 23, 'activate page', 'activate-page', 'activate page', '2015-02-22 19:58:35'),
(29, 23, 'block page', 'block-page', 'block page', '2015-02-22 19:58:43'),
(30, NULL, 'Administrator category', 'administrator-category', 'Administrator categorydesc', '2015-02-22 19:53:39'),
(31, 30, 'list category', 'list-category', 'list categorydesc', '2015-02-22 19:55:17'),
(32, 30, 'add category', 'add-category', 'add categorydesc', '2015-02-22 19:58:00'),
(33, 30, 'edit category', 'edit-category', 'edit category', '2015-02-22 19:58:17'),
(34, 30, 'delete category', 'delete-category', 'delete category', '2015-02-22 19:58:27'),
(35, 30, 'activate category', 'activate-category', 'activate category', '2015-02-22 19:58:35'),
(36, 30, 'block category', 'block-category', 'block category', '2015-02-22 19:58:43'),
(37, NULL, 'Administrator menu', 'administrator-menu', 'Administrator menu desc', '2015-02-22 19:53:39'),
(38, 37, 'list menu', 'list-menu', 'list menu', '2015-02-22 19:55:17'),
(39, 37, 'add menu', 'add-menu', 'add menu', '2015-02-22 19:58:00'),
(40, 37, 'edit menu', 'edit-menu', 'edit menu', '2015-02-22 19:58:17'),
(41, 37, 'delete menu', 'delete-menu', 'delete menu', '2015-02-22 19:58:27'),
(42, 37, 'activate menu', 'activate-menu', 'activate menu', '2015-02-22 19:58:35'),
(43, 37, 'block menu', 'block-menu', 'block menu', '2015-02-22 19:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_pic` varchar(100) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_email` varchar(50) DEFAULT NULL,
  `std_add` varchar(500) NOT NULL,
  `testimonial` varchar(1000) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `std_pic`, `std_name`, `std_email`, `std_add`, `testimonial`, `slug`, `status`, `created_date`, `updated_date`) VALUES
(70, 'Hydrangeas.jpg', 'Ava Dorsey', 'havoxa@yahoo.com', 'Eum totam eum ullamco architecto tempor dolor ipsum ipsum consequat. Sed quasi.', 'Sint nostrud cum dolorem architecto commodi dolorem suscipit tempora quidem quos et porro ducimus, eu recusandae.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Desert.jpg', 'Charles Herring', 'ronajy@gmail.com', 'Vel culpa, ut sint, fugiat, voluptatem. Excepteur eius rerum sint nobis aliquip laboriosam, ut molestiae mollit velit eos, quis exercitationem.', 'Tempore, sint, fugiat, voluptas minus cum consequat. Dolore ratione in minus illum, autem iusto fugiat.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Hydrangeas.jpg', 'Bradley Robbins', 'gebaqydy@gmail.com', 'Fuga. Sint saepe exercitationem quisquam laborum cupidatat omnis nulla mollitia corporis fugit, impedit, atque magnam amet, nesciunt, veniam, ut.', 'Ullam fugit, eius labore eaque ut laboris qui similique nobis perferendis incidunt, odio officia quod.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Koala.jpg', 'sn', 'sewy@hotmail.com', 'sae', 'tee', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Tulips.jpg', 'Felix Whitney', 'koqu@gmail.com', 'Ex quasi culpa vel veniam, atque recusandae. Quia nesciunt, consectetur, accusamus cupidatat odio.', 'Dolore qui qui iure ut et ea voluptas in natus magna qui omnis officia quis veritatis doloribus excepteur corporis optio.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Koala.jpg', 'Thane Fox', 'wutys@yahoo.com', 'In modi id, deserunt aliquid voluptatum et duis et voluptatum id repudiandae est, et.', 'In elit, corporis at delectus, ratione dolore officia autem ut quidem et nesciunt, eum ea.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Penguins.jpg', 'Fatima Chambers', 'huhu@yahoo.com', 'Velit dolore et minima quaerat ut quisquam illo in ipsam consequuntur fuga. Ea maiores enim corrupti.', 'In voluptatem consectetur sed ullam quidem et ullamco quis vitae aut nisi modi.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Tulips.jpg', 'Cade French', 'qaten@gmail.com', 'Ab odio non maxime modi optio, qui nesciunt, debitis fuga. Doloribus unde suscipit iure mollitia sed mollitia.', 'Dolorem vel consequatur, corrupti, voluptatum veniam, dolores voluptatum exercitationem iusto temporibus rem in sint.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Penguins.jpg', 'Kelly Conley', 'tadyvymy@yahoo.com', 'Officiis dolore laboris quasi nihil in eveniet, rem cupiditate amet.', 'Debitis sed fugit, laborum nulla sint est reiciendis enim non autem ipsam reprehenderit iusto culpa totam dolore.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Lighthouse.jpg', 'Remedios Ellis', 'xabepofehy@gmail.com', 'Id voluptatem, cupidatat est cillum sunt, nostrum dolor atque laudantium, dolores rem autem elit, autem eiusmod sed quidem iusto veniam.', 'Excepturi qui et nihil sequi aperiam voluptas laboriosam, ea eligendi et voluptatum.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Koala.jpg', 'Bethany Solomon', 'qehen@yahoo.com', 'Ipsum, perferendis aute nihil irure natus fugiat, nulla illo qui quae ea omnis.', 'Do doloribus voluptatem. Inventore dolorem vel placeat, sit, quisquam at debitis quia quia tempore, eu.e', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '01.jpg', 'Chiquita Small', 'nezag@hotmail.com', 'Excepturi numquam irure dignissimos dolor rerum in voluptatem. Eligendi quasi iusto quo voluptas autem in.', 'Vel ut sed incidunt, culpa, voluptates sit, ut dolorem eaque qui praesentium nulla magni sequi ex est cillum.', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '04.jpg', 'Ishmael Morse', 'kesisuzy@gmail.com', 'Molestias magni ratione ab ut voluptatem sunt et sunt, perspiciatis.', 'Et ut incididunt quo animi, ut do natus dolorum laborum. Quia aliqua. Dolore a maiores laboris eius veniam, voluptate.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'images.jpg', 'EHerrod Clemons', 'Eduparajex@yahoo.com', 'EAnimi, ea pariatur. Non cupiditate labore obcaecati impedit, iusto dolor voluptatem.', 'EDolore nulla illo praesentium sed laborum ipsam nulla autem exercitation aut quasi.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Jellyfish.jpg', 'Jameson Morrow', 'zetywijuw@gmail.com', 'Ad libero in sint delectus, ab numquam delectus, nostrud porro earum voluptatem.', 'Repellendus. Velit voluptate dicta sed necessitatibus inventore deserunt et ea irure nobis quaerat ratione sunt minima autem molestiae placeat, ut.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '10897124_683563788425573_5853013528555819243_n.jpg', 'Simon Hamilton', 'byzutyta@yahoo.com', 'Aliquam anim suscipit iusto accusantium vel quis in magnam ipsum.', 'Minus eligendi cum qui qui cumque sed rem eaque doloremque debitis illum, facilis similique saepe odio ea hic.', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '10501670_879689398738306_4672049685180392065_n.jpg', 'Risa Snow', 'rykupivy@gmail.com', 'Vitae amet, et quia et eaque accusantium ipsum et aliquip consequatur? Vitae sint rerum voluptatum omnis.', 'Incididunt dolore ut est nisi animi, incidunt, odio a sit, quos dolorum non deserunt mollit.', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '02.jpg', 'eConan Buck', 'egabyl@gmail.com', 'eEum ipsum, autem qui recusandae. Ratione non magni ad tempore, quisquam adipisci.', 't', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'principal.jpg', 'Galena Pickett', 'panegy@gmail.com', 'Itaque iusto consequatur, accusantium lorem et pariatur? Est, quis dolore nemo sed deserunt nulla molestias quasi.', 'eDignissimos qui est consequatur? Unde error a dolore rerum facere.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '03.jpg', 'Timothy Middleton', 'nymakamoto@hotmail.com', 'Animi, voluptate id voluptas et quia praesentium nihil non excepteur assumenda eos, dolor dolorum.', 'eQuae aliquam sit, at dolor qui voluptatem explicabo. Est, pariatur. Voluptate quaerat occaecat aut veniam.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '10897050_773760019343811_1726917434105566457_n.jpg', 'eErin Hammond', 'ebeqysurehu@hotmail.com', 'eIncidunt, est in corrupti, quas doloremque id, nostrum voluptatibus autem voluptatum exercitation nisi magni ea quis deserunt.', 'eQuia ex laudantium, nisi Nam saepe repellendus. Dolor ad dolore quia.', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '10923587_10153015109212010_2658068126353076008_n.jpg', 'e Brittany Powell', 'ecinaq@yahoo.com', 'eQuis voluptatem anim repellendus. Ut voluptatum cumque incididunt optio, deserunt omnis iste ullamco sint fugiat do debitis.', 'e Dolore adipisci eligendi aliquip a occaecat ipsam dolore unde nobis architecto et magna similique cumque et.', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '75716_10152197313025198_1086246900_n.jpg', 'Winter Gill', 'wyfumikave@hotmail.com', 'Est quaerat eveniet, esse corporis sit maxime delectus, rerum consectetur minus alias aperiam nisi sint.', 'Eum odit quis voluptate nesciunt, deleniti est quia lorem earum nihil et et voluptates labore ut sit corrupti, hic molestiae.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '75716_10152197313025198_1086246900_n.jpg', 'Winter Gill', 'wyfumikave@hotmail.com', 'Est quaerat eveniet, esse corporis sit maxime delectus, rerum consectetur minus alias aperiam nisi sint.', 'Eum odit quis voluptate nesciunt, deleniti est quia lorem earum nihil et et voluptates labore ut sit corrupti, hic molestiae.', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '10654085_10204036342844948_1750014297_n.jpg', 'Yvonne Harrell', 'pikurihu@yahoo.com', 'Et sed anim pariatur. Consequatur veniam, sint ex voluptates ut.', 'Duis fugit, pariatur? Anim quae rerum itaque et cumque rerum eos sed amet, lorem accusantium enim.', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '10660754_10204036343404962_177007224_n.jpg', 'Tatum Malone', 'mudehafal@hotmail.com', 'Aute velit ut id, in excepteur dolore ullamco quia est velit, sit, repudiandae molestiae corporis consequat. Eaque a voluptas consequatur.', 'Quia expedita laboris dignissimos sint, quo enim ullamco et facilis rerum nostrum numquam inventore quisquam et ut ex.', 'quia-expedita-laboris-dignissimos-sint-quo-enim-ullamco-et-facilis-rerum-nostrum-numquam-inventore-q', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'main_semi_bold.png', 'Skyler Cantu', 'daximegix@yahoo.com', 'Aut dicta tempor deserunt officiis commodi perspiciatis, velit odio non labore et est et optio, repellendus. Facilis ducimus.', 'Qui molestiae placeat, anim aliquip autem eius commodo dolores unde reiciendis saepe velit quas autem deleniti laudantium, tenetur.', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `group_id`, `username`, `email`, `pass`, `created_at`, `updated_at`, `status`) VALUES
(25, 1, 'ramesh', 'ramesh@gmail.come', '53edd6990376d7b5f512d2b5556613ca2567f04c', '2015-01-28 22:58:21', '2015-01-28 22:58:22', 1),
(37, 1, 's1', 's1@gmail.com', '8ddf878039b70767c4a5bcf4f0c4f65e', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(38, 2, 'bhime', 'bhim@gmail.come', '64a4e670f7388da98068c41615d19af76a0cbecb', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `tbl_articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`id`),
  ADD CONSTRAINT `tbl_articles_ibfk_2` FOREIGN KEY (`author`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_articles_ibfk_3` FOREIGN KEY (`author`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_articles_ibfk_4` FOREIGN KEY (`modified_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD CONSTRAINT `tbl_categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `tbl_categories` (`id`),
  ADD CONSTRAINT `tbl_categories_ibfk_2` FOREIGN KEY (`author`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_categories_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD CONSTRAINT `tbl_groups_ibfk_1` FOREIGN KEY (`parent_group_id`) REFERENCES `tbl_groups` (`id`);

--
-- Constraints for table `tbl_group_permissions`
--
ALTER TABLE `tbl_group_permissions`
  ADD CONSTRAINT `tbl_group_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tbl_groups` (`id`),
  ADD CONSTRAINT `tbl_group_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `tbl_permissions` (`id`);

--
-- Constraints for table `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD CONSTRAINT `tbl_menus_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `tbl_menus` (`id`),
  ADD CONSTRAINT `tbl_menus_ibfk_2` FOREIGN KEY (`author`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_menus_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_menus_ibfk_4` FOREIGN KEY (`page_type_id`) REFERENCES `tbl_page_types` (`id`),
  ADD CONSTRAINT `tbl_menus_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`id`);

--
-- Constraints for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD CONSTRAINT `tbl_pages_ibfk_1` FOREIGN KEY (`parent_page_id`) REFERENCES `tbl_pages` (`id`);

--
-- Constraints for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD CONSTRAINT `fk_parent_permission_id` FOREIGN KEY (`parent_permission_id`) REFERENCES `tbl_permissions` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_group_id` FOREIGN KEY (`group_id`) REFERENCES `tbl_groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
