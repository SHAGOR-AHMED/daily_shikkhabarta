-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 05:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(32) NOT NULL,
  `access_level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email`, `admin_pass`, `access_level`) VALUES
(1, 'Daily Shikkhabarta', 'shikkhabarta@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(2) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `cat_id` int(2) NOT NULL,
  `blog_long_des` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `blog_author_name` varchar(55) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hit_count` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `blog_title`, `cat_id`, `blog_long_des`, `publication_status`, `blog_image`, `blog_author_name`, `created_date_time`, `hit_count`) VALUES
(2, 'lorem ipsum', 1, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic <br>', 1, './assets/admin/blog_images/pic1.jpg', 'Shagor Ahmed', '2019-09-04 17:46:29', 9),
(3, 'Bangladesh Cricket', 1, 'Find the <b>Bangladesh Cricket 2017 tickets</b> you\'re looking for on \r\nviagogo, the world\'s largest ticket marketplace. Select a match from the\r\n Bangladesh Cricket 2017 fixtures to view the range of tickets \r\navailable. You can also sell your spare Bangladesh Cricket tickets on \r\nviagogo, and listing tickets is free. All Bangladesh Cricket tickets are\r\n covered by the viagogo Ticket guarantee!\r\n', 1, './assets/admin/blog_images/blog4.jpg', 'Rashed khan', '2019-09-04 17:50:35', 7),
(5, 'Match Fixing', 1, 'This blog for match fixing..This blog for match fixing..This blog for match fixing..', 1, './assets/admin/blog_images/blog3.gif', 'Shagor Ahmed', '2019-09-04 17:51:44', 3),
(6, 'আপনার পিসিকে করে তুলুন স্পিডি এবং স্ট্যাবল', 10, '<span xss=removed>পিসির</span><span xss=removed> </span><span xss=removed>পারফরমেন্স</span><span xss=removed> </span><span xss=removed>যদি</span><span xss=removed> </span><span xss=removed>নতুন</span><span xss=removed> </span><span xss=removed>কেনা</span><span xss=removed> </span><span xss=removed>পিসির</span><span xss=removed> </span><span xss=removed>মতো</span><span xss=removed> </span><span xss=removed>না</span><span xss=removed> </span><span xss=removed>হয়</span><span xss=removed>, </span><span xss=removed>তবে</span><span xss=removed> </span><span xss=removed>কার</span><span xss=removed> </span><span xss=removed>ভালো</span><span xss=removed> </span><span xss=removed>লাগে</span><span xss=removed> </span><span xss=removed>বলুন</span><span xss=removed>? </span><span xss=removed>তাইতো</span><span xss=removed> </span><span xss=removed>পিসিকে</span><span xss=removed> </span><span xss=removed>অপ্টিমাইজ</span><span xss=removed> </span><span xss=removed>করার</span><span xss=removed> </span><span xss=removed>কৌশল</span><span xss=removed> </span><span xss=removed>নিয়ে</span><span xss=removed> </span><span xss=removed>আমার</span><span xss=removed> </span><span xss=removed>এ</span><span xss=removed> </span><span xss=removed>পোস্ট।</span><strong><span xss=removed> </span></strong><span xss=removed>ব্লগসাইটে</span><span xss=removed> </span><span xss=removed>এটিই</span><span xss=removed> </span><span xss=removed>আমার</span><span xss=removed> </span><span xss=removed>প্রথম</span><span xss=removed> </span><span xss=removed>লেখা।</span><span xss=removed> </span><span xss=removed>তাই</span><span xss=removed> </span><span xss=removed>ভুল</span><span xss=removed> </span><span xss=removed>হলে</span><span xss=removed> </span><span xss=removed>ক্ষমাসুন্দর</span><span xss=removed> </span><span xss=removed>দৃষ্টিতে</span><span xss=removed> </span><span xss=removed>দেখবেন।</span><span xss=removed> </span><span xss=removed>এই</span><span xss=removed> </span><span xss=removed>বিষয়ে</span><span xss=removed> </span><span xss=removed>অনেক</span><span xss=removed> </span><span xss=removed>অনেকেই</span><span xss=removed> </span><span xss=removed>অনেক</span><span xss=removed> </span><span xss=removed>পোস্ট</span><span xss=removed> </span><span xss=removed>পড়েছেন</span><span xss=removed>, </span><span xss=removed>এবং</span><span xss=removed> </span><span xss=removed>লিখেছেনও।</span><span xss=removed> </span><span xss=removed>তারপরও</span><span xss=removed> </span><span xss=removed>আশা</span><span xss=removed> </span><span xss=removed>করি</span><span xss=removed> </span><span xss=removed>আমারটা</span><span xss=removed> </span><span xss=removed>পড়লে</span><span xss=removed> </span><span xss=removed>ভুল</span><span xss=removed> </span><span xss=removed>করবেননা।</span><span xss=removed></span>\r\n\r\n&lt;!--[if gte mso 9]>&lt;xml&gt;\r\n <o>\r\n  <o>800x600</o>\r\n </o>\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte mso 9]>&lt;xml&gt;\r\n <w>\r\n  <w>Normal</w>\r\n  <w>0</w>\r\n  <w>\r\n  <w>\r\n  <w>\r\n  <w>\r\n  <w>false</w>\r\n  <w>false</w>\r\n  <w>false</w>\r\n  <w>\r\n  <w>EN-US</w>\r\n  <w>X-NONE</w>\r\n  <w>X-NONE</w>\r\n  <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n   <w>\r\n  </w>\r\n  <w>MicrosoftInternetExplorer4</w>\r\n  <m>\r\n   <m m:val=\"Cambria Math\">\r\n   <m m:val=\"before\">\r\n   <m m:val=\"--\">\r\n   <m m:val=\"off\">\r\n   <m>\r\n   <m m:val=\"0\">\r\n   <m m:val=\"0\">\r\n   <m m:val=\"centerGroup\">\r\n   <m m:val=\"1440\">\r\n   <m m:val=\"subSup\">\r\n   <m m:val=\"undOvr\">\r\n  </m></w>\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte mso 9]>&lt;xml&gt;\r\n <w DefLockedState=\"false\" DefUnhideWhenUsed=\"true\" DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\" LatentStyleCount=\"267\">\r\n  <w Locked=\"false\" Priority=\"0\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\">\r\n  <w Locked=\"false\" Priority=\"9\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\">\r\n  <w Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 1\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 2\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 3\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 4\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 5\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 6\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 7\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 8\">\r\n  <w Locked=\"false\" Priority=\"39\" Name=\"toc 9\">\r\n  <w Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\">\r\n  <w Locked=\"false\" Priority=\"10\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Title\">\r\n  <w Locked=\"false\" Priority=\"0\" Name=\"Default Paragraph Font\">\r\n  <w Locked=\"false\" Priority=\"11\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtitle\">\r\n  <w Locked=\"false\" Priority=\"0\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Strong\">\r\n  <w Locked=\"false\" Priority=\"20\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Emphasis\">\r\n  <w Locked=\"false\" Priority=\"0\" Name=\"Normal (Web)\">\r\n  <w Locked=\"false\" Priority=\"59\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Table Grid\">\r\n  <w Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Placeholder Text\">\r\n  <w Locked=\"false\" Priority=\"1\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"No Spacing\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 1\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 1\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 1\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 1\">\r\n  <w Locked=\"false\" UnhideWhenUsed=\"false\" Name=\"Revision\">\r\n  <w Locked=\"false\" Priority=\"34\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"List Paragraph\">\r\n  <w Locked=\"false\" Priority=\"29\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Quote\">\r\n  <w Locked=\"false\" Priority=\"30\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Quote\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 1\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 1\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 1\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 1\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 1\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 2\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 2\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 2\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 2\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 2\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 2\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 2\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 2\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 3\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 3\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 3\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 3\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 3\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 3\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 3\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 3\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 4\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 4\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 4\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 4\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 4\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 4\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 4\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 4\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 5\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 5\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 5\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 5\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 5\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 5\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 5\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 5\">\r\n  <w Locked=\"false\" Priority=\"60\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Shading Accent 6\">\r\n  <w Locked=\"false\" Priority=\"61\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light List Accent 6\">\r\n  <w Locked=\"false\" Priority=\"62\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Light Grid Accent 6\">\r\n  <w Locked=\"false\" Priority=\"63\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 1 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"64\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Shading 2 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"65\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 1 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"66\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium List 2 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"67\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 1 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"68\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 2 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"69\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Medium Grid 3 Accent 6\">\r\n  <w Locked=\"false\" Priority=\"70\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Dark List Accent 6\">\r\n  <w Locked=\"false\" Priority=\"71\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Shading Accent 6\">\r\n  <w Locked=\"false\" Priority=\"72\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful List Accent 6\">\r\n  <w Locked=\"false\" Priority=\"73\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" Name=\"Colorful Grid Accent 6\">\r\n  <w Locked=\"false\" Priority=\"19\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Emphasis\">\r\n  <w Locked=\"false\" Priority=\"21\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Emphasis\">\r\n  <w Locked=\"false\" Priority=\"31\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Subtle Reference\">\r\n  <w Locked=\"false\" Priority=\"32\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Intense Reference\">\r\n  <w Locked=\"false\" Priority=\"33\" SemiHidden=\"false\" UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Book Title\">\r\n  <w Locked=\"false\" Priority=\"37\" Name=\"Bibliography\">\r\n  <w Locked=\"false\" Priority=\"39\" QFormat=\"true\" Name=\"TOC Heading\">\r\n </w>\r\n&lt;/xml&gt;&lt;![endif]--&gt;&lt;!--[if gte mso 10]>\r\n&lt;style&gt;\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n {mso-style-name:\"Table Normal\";\r\n mso-tstyle-rowband-size:0;\r\n mso-tstyle-colband-size:0;\r\n mso-style-noshow:yes;\r\n mso-style-priority:99;\r\n mso-style-parent:\"\";\r\n mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n mso-para-margin:0in;\r\n mso-para-margin-bottom:.0001pt;\r\n mso-pagination:widow-orphan;\r\n font-size:10.0pt;\r\n font-family:\"Times New Roman\",\"serif\";}\r\n&lt;/style&gt;\r\n&lt;![endif]--&gt;', 1, './assets/admin/blog_images/blog5.jpg', 'Shagor Ahmed', '2019-09-04 17:55:58', 0),
(7, 'asdasd', 1, 'simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic', 1, './assets/admin/blog_images/wallpaper1.jpg', 'Shagor Ahmed', '2019-09-04 18:35:15', 0),
(8, 'হজ্বে মাবরুর! হৃদয় ছোঁয়া গল্প ', 9, '<span xss=removed>জেদ্দা এয়ারপোর্টের ওয়েটিংরুমে বসে ছিলেন সাঈদ।তার পাশে আরো একজন ছিলেন, তিনিও হজ্জ সম্পন্ন করেছেন। নীরবতা ভেঙে মানুষটি বললেন, \"আমি একজন ঠিকাদার হিসেবে কাজ করি এবং আল্লাহ আমাকে ১০তম হজ্জ পালন করার সৌভাগ্য দিয়েছেন।\" \r\n\r\nসাঈদ বললেন, \"হজ্জ মাবরুর! আল্লাহ আপনাকে কবুল করুন এবং গুনাহ সমূহ ক্ষমা করুন।\"\r\n.\r\nমানুষটি মুচকি হাসলেন এবং সাঈদের দুআর সাথে আমীন বললেন। এরপর বললেন , \"আপনি কি এর আগে হজ্জ করেছেন?\" \r\n\r\nসাঈদ বলতে ইতস্ততঃ করলেন। কিছুক্ষণ পর বললেন, \"ওয়াল্লাহি! এটা অনেক দীর্ঘ গল্প। আমি চাইনা আমার কথায় আপনার মাথা ব্যাথা হোক! লোকটি বললেন, দয়া করে আমাকে বলুন, আমাদের তো এখানে অপেক্ষা করা ছাড়া এমনিতেই কিছু করার নেই।\" \r\n.\r\nসাঈদ হাসলেন, বললেন “হ্যা, অপেক্ষা দিয়েই আমার গল্পের শুরু! হজ্জে যাবার জন্য আমি অনেক বছর যাবত অপেক্ষা করছিলাম। ফিজিওথেরাপিস্ট হিসেবে ৩০ বছর একটা প্রাইভেট হাসপাতালে কাজ করার পর আমি হজ্জের জন্য যথেষ্ট টাকা জমাতে পেরেছিলাম। যেদিন আমি টাকা তুলতে গিয়েছিলাম সেইদিনই হঠাৎ এক মায়ের দেখা পেলাম যার প্যারালাইজড সন্তানের চিকিৎসা আমি করেছিলাম। সেদিন সেই মা\'কে খুব চিন্তিত মনে হলো। তিনি বললেন, \"আল্লাহ আপনাকে রক্ষা করুন ভাই সাঈদ। এটা আমাদের হাসপাতালে শেষদিন।\"\r\n\r\nআমি তার কথা শুনে অবাক হয়েছিলাম। ভেবেছিলাম তিনি আমার চিকিৎসায় খুশি নন। তাই তিনি তার সন্তানকে অন্য হাসপাতালে নিয়ে যাচ্ছিলেন। বিষয়টা আমি উনাকে বলেই ফেললাম। \r\n\r\nকিন্তু মহিলাটি বললেন, \"না ভাই সাঈদ, আল্লাহ সাক্ষী যে আপনি আমার ছেলের সাথে পিতার মত আচরণ করেছেন এবং চিকিৎসা দিয়ে তাকে সাহায্য করেছেন যখন আমরা আশা হারিয়ে ফেলেছিলাম।\" এরপর তিনি বিষন্নভাবে চলে গেলেন।\r\n.\r\nপাশে থাকা মানুষটি কথার মাঝখানে বাধা দিয়ে বললেন, \"ব্যাপারটা অদ্ভুত! যদি তিনি আপনার চিকিৎসায় সন্তুষ্ট হয়ে থাকেন আর তার ছেলের উন্নতিও হচ্ছিল, তবে কেন তিনি চলে গিয়েছিলেন?\" \r\n\r\nসাঈদ বললেন, \"সেটা আমিও ভেবেছিলাম।তাই কি ঘটেছে তা জানার জন্য কর্তৃপক্ষের কাছে গিয়েছিলাম। তারা আমাকে বলেছিল যে ছেলেটার বাবার চাকরি চলে গিয়েছিল, তাই তার ছেলের চিকিৎসার খরচ চালাতে পারছিলেন না।\"\r\n.\r\nপাশে বসা মানুষটি বললেন, \"আল্লাহ ছাড়া কারো কোন শক্তি,সামর্থ্য নেই। তাদের কত দুর্ভোগ! আপনি কিভাবে ব্যাপারটা সুরাহা করেছিলেন?\" \r\n\r\nসাঈদ বললেন, \"আমি ম্যানেজারের কাছে গেলাম এবং হাসপাতালের খরচে ছেলেটার চিকিৎসা করাতে যুক্তিতর্ক করলাম।\r\n\r\nকিন্তু সে তৎক্ষণাৎ আমার প্রস্তাব প্রত্যাখ্যান করল এবং বলল, \'এটা একটা প্রাইভেট প্রতিষ্ঠান, দাতব্য সংস্থা না।\'\" আমি পরিবারটির জন্য দুঃখ-ভারাক্রান্ত মনে অফিস ত্যাগ করলাম।\r\n.\r\nতখন হঠাৎ আমার পকেটে হাত রাখলাম, সেখানে আমার হজ্জের জন্য প্রস্তুতকৃত টাকাগুলো ছিল। \r\n\r\nআমি আমার জায়গায় কিছুক্ষণের জন্য দাঁড়ালাম , আসমানে দিকে মাথা তুলে আমার রবকে বললাম, \"ও আল্লাহ! আপনি জানেন এই মুহুর্তে আমার মনের অবস্থা কেমন! আপনার ঘরে যাওয়া ও হজ্জ করা এবং আপনার রাসূলের মসজিদে যাওয়ার চেয়ে আমার কাছে অধিক প্রিয় কিছুই নেই। আপনি জানেন আমি সারাটি জীবন এই মূহূর্তের জন্য কাজ করেছি।কিন্তু আমি এই দরিদ্র মহিলা ও তার সন্তানকে নিজের উপর প্রাধান্য দিচ্ছি।তাই আপনার অনুগ্রহ থেকে আমাকে বঞ্চিত করবেন না।\" \r\n\r\nআমি হিসাবের ডেস্কে গেলাম এবং ছেলেটার চিকিৎসার জন্য আমার কাছে থাকা সমস্ত টাকা দিয়ে দিলাম।যা পরবর্তী ছয়মাসের জন্য যথেষ্ট ছিল। আমি হিসাবরক্ষককে অনুনয় করে বললাম যেন মহিলাটিকে বলা হয়, বিশেষ অবস্থার কারণে চিকিৎসার খরচ হাসপাতাল থেকে দেয়া হচ্ছে।\r\n.\r\nহিসাবরক্ষক এর দ্বারা প্রভাবিত হলেন, তার চোখে পানি এসে গেল। বললেন ‘বারাক আল্লাহ ফিক।’ \r\n\r\nপাশে বসা মানুষটি বললেন, \"আপনি যদি আপনার সমস্ত টাকা দান করে থাকেন,তাহলে আপনি কিভাবে হজে এলেন?\"\r\n\r\nসাঈদ বললেন, \"সেদিন বিষন্ন মনে ঘরে ফিরে এলাম, হজ্জে যাওয়ার সুযোগ হারানোর কারণে মন খুব খারাপ ছিল। কিন্ত আমার মন আনন্দে ভরে উঠেছিল এই কারণে যে আমি এক মহিলা ও তার সন্তানের দুঃখ দূর করেছিলাম। \r\n\r\nআমি সেই রাতে ঘুমাতে গেলাম অশ্রুসিক্ত অবস্থায়। স্বপ্নে দেখলাম আমি কাবা ঘর তাওয়াফ করছি এবং মানুষেরা আমাকে সালাম দিচ্ছিল। তারা আমাকে বলেছিল, \"হজ্জ মাবরুর, হে সাঈদ! কারণ তুমি পৃথিবীতে হজ্জ করার আগেই নভোমণ্ডলে হজ করেছ।\"\r\n\r\nআমি তাৎক্ষণিকভাবে জেগে উঠলাম এবং অবর্ণনীয় আনন্দ অনুভব করলাম।সবকিছুর জন্য আল্লাহর প্রশংসা করলাম এবং তার সিদ্ধান্তে সন্তুষ্ট ছিলাম। \r\n\r\nযখন ঘুম থেকে জেগে উঠলাম আমার ফোন বেজে উঠল।হাসপাতালের ম্যানেজারের ফোন।\r\nতিনি আমাকে বললেন, \"হাসপাতালের মালিক এ বছর হজ্জে যেতে চাচ্ছেন এবং তিনি ব্যক্তিগত থেরাপিস্ট ছাড়া সেখানে যাবেন না। কিন্তু তার থেরাপিস্টের স্ত্রী গর্ভবতী এবং তিনি গর্ভাবস্থার অন্তিম পর্যায়ে পৌছেছেন। তাই সে তার স্ত্রীকে ছেড়ে যেতে পারছে না। আপনি কি আমার একটা উপকার করবেন?\r\nআপনি কি তাকে তার হজ্জে সঙ্গ দিতে পারেন?\"\r\n\r\nআমি শুকরিয়ার সিজদা করলাম। আপনি আজকে আমাকে এখানে দেখছেন, আল্লাহ তার ঘরে যাওয়ার জন্য আমাকে কবুল করলেন কোন অর্থব্যয় ছাড়া। সমস্ত প্রশংসা আল্লাহর।\r\n\r\nহাসপাতালের স্বত্বাধিকারী আমাকে কিছু দিতে জিদ করলেন। আমি তখন তাকে সেই মহিলা আর তার ছেলের গল্প তাকে শুনালাম। তিনি নিজ খরচে ছেলেটির চিকিৎসার ব্যবস্থা করতে চাইলেন। আর নিঃস রোগীদের জন্য হাসপাতালে একটা দানবাক্সের কথা ভাবলেন। তার উপর তিনি ছেলেটির বাবাকে তারই একটা কোম্পানিতে চাকরি দিয়েছিলেন। এমনকি তিনি সে টাকাগুলোও ফেরত দিয়েছিলেন যা আমি ছেলেটার চিকিৎসার জন্য দিয়েছিলাম। আপনি কি আমার রবের অনুগ্রহের চেয়ে বড় অনুগ্রহ আর দেখেছেন? সুবহানআল্লাহ!\"\r\n\r\nপাশে বসা মানুষটি তাকে জড়িয়ে ধরলেন এবং বললেন আমি কখনো আজকের মত লজ্জা অনুভব করিনি। আমি একবছর অন্তর হজ পালন করতাম আর ভাবতাম আমি মহৎ কোনো কাজ করছি। আর ফলাফলস্বরূপ আল্লাহর কাছে আমার অবস্থান উন্নত হবে। কিন্তু এখন বুঝতে পারছি আপনার হজ্জ আমার হাজার হজ্জের সমতুল্য।\r\n\r\nআমি আল্লাহর ঘরে গিয়েছিলাম, কিন্তু আল্লাহ তাঁর ঘরে আপনাকে আমন্ত্রণ করেছেন।</span>', 1, './assets/admin/blog_images/69708381_475428483299417_8736187290809794560_n.jpg', 'Daily Shikkhabarta', '2019-09-07 10:41:45', 0),
(9, 'ভারতীয় সীমান্তে পাকিস্তানের সেনা সমাবেশঃ সীমান্তে উত্তেজনা', 2, '<span xss=removed>জম্মু-কাশ্মীর সঙ্কট ঘিরে এরইমধ্যে তীব্র উত্তেজনা চলছে ভারত ও পাকিস্তানের মধ্যে। উত্তেজনার অংশ হিসেবে নতুন করে যুক্ত হলো, কাশ্মীরের নিয়ন্ত্রণ রেখার কাছাকাছি অন্তত এক ব্রিগেড সেনা সদস্য জড়ো করেছে পাকিস্তান। \r\n\r\nপাকিস্তানের দখলকৃত কাশ্মীর সীমান্তের বাঘ এবং কোটলি সেক্টর ঘেঁষে প্রায় ২ হাজার পাক সেনা সদস্যের উপস্থিতিকে গভীরভাবে পর্যবেক্ষণ করা হচ্ছে বলে জানিয়েছে ভারতীয় সেনাবাহিনী। ভারত বলছে, একটি শান্তিপূর্ণ অবস্থান থেকে ওই সেনাদের সীমান্তে নিয়ে এসেছে পাকিস্তান সেনাবাহিনী। এই মুহূর্তে তারা নিয়ন্ত্রণ রেখার ৩০ কিলোমিটার এলাকায় অবস্থান করছে।\r\n\r\nভারতীয় সেনাবাহিনী সূত্রে বলা হয়, বর্তমানে এ সেনাদের আক্রমণাত্মক ভঙ্গিতে মোতায়েন করেনি পাকিস্তান। তবে ভারতীয় সেনাবাহিনী পাক সেনাদের গতিবিধি নিবিড়ভাবে পর্যবেক্ষণ করছে। সীমান্তের পাকিস্তান সেনাবাহিনী সেনা সদস্যদের এমন এক সময় জড়া করেছে, যখন পাকিস্তানে লস্কর-ই-তৈয়বা এবং জয়েশ-ই-মোহাম্মদের মতো জঙ্গিগোষ্ঠীগুলোতে স্থানীয় এবং আফগান তরুণদের দলে টানার কাজ চলছে।\r\n\r\nসীমান্তে পাকিস্তান সেনাবাহিনী যে সেনা সদস্যদের নিয়ে এসেছে তাদের পরিমাণ প্রায় এক ব্রিগেডের মতো। এ সদস্যদের সংখ্যা ২ হাজারের বেশি হতে পারে।\r\n\r\n\r\nটাইমস অব ইন্ডিয়ার এক প্রতিবেদনে বলা হয়, গত ৫ আগস্ট ভারত নিয়ন্ত্রিত জম্মু-কাশ্মীরের বিশেষ মর্যাদা বাতিল হওয়ার পর কাশ্মীর সীমান্তে শতাধিক এসএসজি কমান্ডো মোতায়েন করেছে। এসময় ভারতীয় সীমান্তরক্ষী বাহিনী গোলাবর্ষণ করলে অন্তত ১০ পাকিস্তানি এসএসজি কমান্ডো নিহত হয়েছেন। ভারতীয় সেনাবাহিনীরও বেশ কয়েকজন সদস্য পাকিস্তানের গুলিতে প্রাণ হারিয়েছেন।</span>', 1, './assets/admin/blog_images/69694011_411612509493671_6186908739304423424_n.jpg', 'Daily Shikkhabarta', '2019-09-07 10:43:05', 0),
(10, 'সরকারি প্রাথমিক বিদ্যালয়ের সহকারী শিক্ষক নিয়োগ পরীক্ষা', 1, '<span xss=removed>সারা দেশের সরকারি প্রাথমিক বিদ্যালয়ের সহকারী শিক্ষক নিয়োগ পরীক্ষার লিখিত পরীক্ষার ফল চূড়ান্ত পর্যায়ে রয়েছে। চলতি মাসের দ্বিতীয় সপ্তাহেই এ ফল প্রকাশ করা হতে পারে। প্রাথমিক শিক্ষা অধিদপ্তর (ডিপিই) সূত্রে এ তথ্য জানা গেছে।\r\n\r\nচারটি ধাপে নিয়োগ পরীক্ষা হলেও ৬১ জেলার ফল একত্রে প্রকাশ করা হবে। ৮ থেকে ১০ সেপ্টেম্বর এ ফল প্রকাশের চিন্তাভাবনা করা হচ্ছে।\r\n\r\nসূত্র জানায়, ৮-১০ সেপ্টেম্বরের মধ্যে শিক্ষক নিয়োগের লিখিত পরীক্ষার ফল প্রকাশের জন্য প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়ে প্রস্তাব দেয়া হয়। মন্ত্রণালয় এ বিষয়ে অনুমোদন দিয়েছে।\r\n\r\nজানা গেছে, দ্রুত ফল প্রকাশের সরকারি সিদ্ধান্ত থাকলেও ফল তৈরির কাজ শেষ করতে দুই মাসের বেশি পার হয়ে যাচ্ছে। এ নিয়ে চাকরিপ্রার্থীদের মধ্যে অসন্তোষ বিরাজ করছে।\r\n\r\nফল প্রকাশে দেরি হওয়ার কারণ হিসেবে জানা গেছে, ১২ হাজার পদের বিপরীতে ২৪ লাখের বেশি পরীক্ষার্থী অংশ নিয়েছে।\r\n\r\nডিপিইর নিয়োগ শাখার এক কর্মকর্তা জানান, লিখিত পরীক্ষার ফল তৈরির কাজ প্রায় শেষ পর্যায়ে। বর্তমানে নম্বর সিট তৈরি করা হচ্ছে। বুয়েটে ওএমআর সিট মূল্যায়ন কাজও শেষ হয়েছে। আগামী মাসের শুরুতেই ফল প্রকাশ করা হবে।\r\n\r\nউল্লেখ্য, গত বছরের ৩০ জুলাই নিয়োগ বিজ্ঞপ্তি প্রকাশ করা হয়। গত বছরের ১ থেকে ৩০ আগস্ট পর্যন্ত অনলাইনে আবেদন কার্যক্রম শেষ হয়। ১২ হাজার আসনের বিপরীতে সারাদেশ থেকে ২৪ লাখ ৫ প্রার্থী আবেদন করেন। সে হিসেবে প্রতি আসনে প্রায় ২০০ প্রার্থী লিখিত পরীক্ষায় অংশগ্রহণ করেন।\r\n\r\nঅন্তত ৭ দফা পরীক্ষার তারিখ পিছিয়ে শেষ পর্যন্ত পরীক্ষা নিতে সমর্থ হয় প্রাথমিক শিক্ষা অধিদপ্তর। প্রার্থী সংখ্যা বেশি হওয়ায় লিখিত পরীক্ষা অনুষ্ঠিত হয়েছে মোট ৪ ধাপে। গত ২৪ মে প্রথম ধাপে ২৫ জেলায় অনুষ্ঠিত পরীক্ষা মোটামুুটি শান্তিপূর্ণ। ৩১ মে অনুষ্ঠিত হয় দ্বিতীয় ধাপের পরীক্ষা।\r\n\r\nদ্বিতীয় ধাপেও বিভিন্ন জেলায় প্রশ্ন ফাঁস, অব্যবস্থাপনার অভিযোগ ওঠে। এ অবস্থায় তৃতীয় ধাপের পরীক্ষার আগেই শিক্ষক নিয়োগ পরীক্ষায় কঠোর মনিটরিংয়ের নির্দেশ দেয় প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়। ২১ জুন অনুষ্ঠিত হয় তৃতীয় ধাপের পরীক্ষা। এরপর ২৮ জুন শেষ হয় চতুর্থ ও শেষ ধাপের লিখিত পরীক্ষা। শেষ ধাপে দেশের ২৪ জেলায় পরীক্ষা অনুষ্ঠিত হয়।</span>', 1, './assets/admin/blog_images/70147758_371265936885081_3966718201290555392_n.jpg', 'Daily Shikkhabarta', '2019-09-07 10:44:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `publication_status`) VALUES
(1, 'জাতীয়', 1),
(2, 'আন্তর্জাতিক', 1),
(4, 'ক্যাম্পাস বার্তা', 1),
(5, 'উচ্চ শিক্ষা', 1),
(6, 'জব সার্কুলার', 1),
(7, 'সফলতার গল্প', 1),
(8, 'বুক রিভিউ', 1),
(9, 'ধর্ম ও জীবন', 1),
(10, 'লাইফ স্টাইল', 1),
(11, 'ভিন্ন স্বাদের খবর', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `cmnt_id` int(2) NOT NULL,
  `id` int(2) NOT NULL,
  `comment_author_name` varchar(32) NOT NULL,
  `comment_author_email` varchar(55) NOT NULL,
  `comment` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`cmnt_id`, `id`, `comment_author_name`, `comment_author_email`, `comment`, `publication_status`, `created_time`) VALUES
(1, 5, 'Shagor Ahmed', 'shagor@gmail.com', 'this is very bad....', 1, '2017-01-26 20:59:22'),
(2, 5, 'Shagor Ahmed', 'shagor@gmail.com', 'BCB should take a step..', 1, '2017-01-26 21:01:58'),
(3, 4, 'Shagor Ahmed', 'shagor@gmail.com', 'WHAT IS THIS....?', 0, '2017-01-27 17:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slide_id` int(3) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slide_id`, `image`) VALUES
(1, './assets/admin/slide_image/slide1.png'),
(5, './assets/admin/slide_image/slide2.png'),
(6, './assets/admin/slide_image/slide3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `password` varchar(55) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `password`, `age`) VALUES
(1, 'Shagor Ahmed', 'shagor@gmail.com', '3b712de48137572f3849aabd5666a4e3', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`cmnt_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `cmnt_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slide_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
