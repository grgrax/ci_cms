-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2015 at 09:04 PM
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
(5);

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
(1, NULL, 'superadmin', '', 'superadmin desc', 1, '2015-01-27 18:51:41', NULL),
(2, 1, 'admin', '', 'admin desc', 0, '2015-01-27 18:52:01', NULL);

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
-- Table structure for table `tbl_permissions`
--

CREATE TABLE IF NOT EXISTS `tbl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `name`, `slug`, `desc`, `created_at`) VALUES
(1, 'p1', 'p1', 'pd', '2015-01-27 19:31:54'),
(3, 'p2e', '', 'de', '2015-01-27 19:45:02');

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
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `std_pic`, `std_name`, `std_email`, `std_add`, `testimonial`, `status`, `created_date`, `updated_date`) VALUES
(70, 'Hydrangeas.jpg', 'Ava Dorsey', 'havoxa@yahoo.com', 'Eum totam eum ullamco architecto tempor dolor ipsum ipsum consequat. Sed quasi.', 'Sint nostrud cum dolorem architecto commodi dolorem suscipit tempora quidem quos et porro ducimus, eu recusandae.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Desert.jpg', 'Charles Herring', 'ronajy@gmail.com', 'Vel culpa, ut sint, fugiat, voluptatem. Excepteur eius rerum sint nobis aliquip laboriosam, ut molestiae mollit velit eos, quis exercitationem.', 'Tempore, sint, fugiat, voluptas minus cum consequat. Dolore ratione in minus illum, autem iusto fugiat.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Hydrangeas.jpg', 'Bradley Robbins', 'gebaqydy@gmail.com', 'Fuga. Sint saepe exercitationem quisquam laborum cupidatat omnis nulla mollitia corporis fugit, impedit, atque magnam amet, nesciunt, veniam, ut.', 'Ullam fugit, eius labore eaque ut laboris qui similique nobis perferendis incidunt, odio officia quod.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Koala.jpg', 'sn', 'sewy@hotmail.com', 'sae', 'tee', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Tulips.jpg', 'Felix Whitney', 'koqu@gmail.com', 'Ex quasi culpa vel veniam, atque recusandae. Quia nesciunt, consectetur, accusamus cupidatat odio.', 'Dolore qui qui iure ut et ea voluptas in natus magna qui omnis officia quis veritatis doloribus excepteur corporis optio.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Koala.jpg', 'Thane Fox', 'wutys@yahoo.com', 'In modi id, deserunt aliquid voluptatum et duis et voluptatum id repudiandae est, et.', 'In elit, corporis at delectus, ratione dolore officia autem ut quidem et nesciunt, eum ea.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Penguins.jpg', 'Fatima Chambers', 'huhu@yahoo.com', 'Velit dolore et minima quaerat ut quisquam illo in ipsam consequuntur fuga. Ea maiores enim corrupti.', 'In voluptatem consectetur sed ullam quidem et ullamco quis vitae aut nisi modi.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Tulips.jpg', 'Cade French', 'qaten@gmail.com', 'Ab odio non maxime modi optio, qui nesciunt, debitis fuga. Doloribus unde suscipit iure mollitia sed mollitia.', 'Dolorem vel consequatur, corrupti, voluptatum veniam, dolores voluptatum exercitationem iusto temporibus rem in sint.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Penguins.jpg', 'Kelly Conley', 'tadyvymy@yahoo.com', 'Officiis dolore laboris quasi nihil in eveniet, rem cupiditate amet.', 'Debitis sed fugit, laborum nulla sint est reiciendis enim non autem ipsam reprehenderit iusto culpa totam dolore.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Lighthouse.jpg', 'Remedios Ellis', 'xabepofehy@gmail.com', 'Id voluptatem, cupidatat est cillum sunt, nostrum dolor atque laudantium, dolores rem autem elit, autem eiusmod sed quidem iusto veniam.', 'Excepturi qui et nihil sequi aperiam voluptas laboriosam, ea eligendi et voluptatum.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Koala.jpg', 'Bethany Solomon', 'qehen@yahoo.com', 'Ipsum, perferendis aute nihil irure natus fugiat, nulla illo qui quae ea omnis.', 'Do doloribus voluptatem. Inventore dolorem vel placeat, sit, quisquam at debitis quia quia tempore, eu.e', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '01.jpg', 'Chiquita Small', 'nezag@hotmail.com', 'Excepturi numquam irure dignissimos dolor rerum in voluptatem. Eligendi quasi iusto quo voluptas autem in.', 'Vel ut sed incidunt, culpa, voluptates sit, ut dolorem eaque qui praesentium nulla magni sequi ex est cillum.', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '04.jpg', 'Ishmael Morse', 'kesisuzy@gmail.com', 'Molestias magni ratione ab ut voluptatem sunt et sunt, perspiciatis.', 'Et ut incididunt quo animi, ut do natus dolorum laborum. Quia aliqua. Dolore a maiores laboris eius veniam, voluptate.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'images.jpg', 'EHerrod Clemons', 'Eduparajex@yahoo.com', 'EAnimi, ea pariatur. Non cupiditate labore obcaecati impedit, iusto dolor voluptatem.', 'EDolore nulla illo praesentium sed laborum ipsam nulla autem exercitation aut quasi.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Jellyfish.jpg', 'Jameson Morrow', 'zetywijuw@gmail.com', 'Ad libero in sint delectus, ab numquam delectus, nostrud porro earum voluptatem.', 'Repellendus. Velit voluptate dicta sed necessitatibus inventore deserunt et ea irure nobis quaerat ratione sunt minima autem molestiae placeat, ut.', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '10897124_683563788425573_5853013528555819243_n.jpg', 'Simon Hamilton', 'byzutyta@yahoo.com', 'Aliquam anim suscipit iusto accusantium vel quis in magnam ipsum.', 'Minus eligendi cum qui qui cumque sed rem eaque doloremque debitis illum, facilis similique saepe odio ea hic.', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '10501670_879689398738306_4672049685180392065_n.jpg', 'Risa Snow', 'rykupivy@gmail.com', 'Vitae amet, et quia et eaque accusantium ipsum et aliquip consequatur? Vitae sint rerum voluptatum omnis.', 'Incididunt dolore ut est nisi animi, incidunt, odio a sit, quos dolorum non deserunt mollit.', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '02.jpg', 'eConan Buck', 'egabyl@gmail.com', 'eEum ipsum, autem qui recusandae. Ratione non magni ad tempore, quisquam adipisci.', 't', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'principal.jpg', 'Galena Pickett', 'panegy@gmail.com', 'Itaque iusto consequatur, accusantium lorem et pariatur? Est, quis dolore nemo sed deserunt nulla molestias quasi.', 'eDignissimos qui est consequatur? Unde error a dolore rerum facere.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '03.jpg', 'Timothy Middleton', 'nymakamoto@hotmail.com', 'Animi, voluptate id voluptas et quia praesentium nihil non excepteur assumenda eos, dolor dolorum.', 'eQuae aliquam sit, at dolor qui voluptatem explicabo. Est, pariatur. Voluptate quaerat occaecat aut veniam.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '10897050_773760019343811_1726917434105566457_n.jpg', 'Erin Hammond', 'beqysurehu@hotmail.com', 'Incidunt, est in corrupti, quas doloremque id, nostrum voluptatibus autem voluptatum exercitation nisi magni ea quis deserunt.', 'Quia ex laudantium, nisi Nam saepe repellendus. Dolor ad dolore quia.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '10923587_10153015109212010_2658068126353076008_n.jpg', 'e Brittany Powell', 'ecinaq@yahoo.com', 'eQuis voluptatem anim repellendus. Ut voluptatum cumque incididunt optio, deserunt omnis iste ullamco sint fugiat do debitis.', 'e Dolore adipisci eligendi aliquip a occaecat ipsam dolore unde nobis architecto et magna similique cumque et.', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `pass`, `created_at`, `updated_at`, `status`) VALUES
(1, 'cd_admin', 'd8549739d1ddbef3dba31ba5c458a1f7', '2015-01-24 00:00:00', '0000-00-00 00:00:00', 1),
(21, '1', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(24, 'ramesh', '53edd6990376d7b5f512d2b5556613ca2567f04c', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD CONSTRAINT `tbl_groups_ibfk_1` FOREIGN KEY (`parent_group_id`) REFERENCES `tbl_groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
