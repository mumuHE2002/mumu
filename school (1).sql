-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-09-22 13:24:03
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `school`
--

-- --------------------------------------------------------

--
-- 表的结构 `message01`
--

CREATE TABLE `message01` (
  `messageid` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `content` varchar(200) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `message01`
--

INSERT INTO `message01` (`messageid`, `user`, `content`, `date`) VALUES
(7, 'admin', '今年疫情期间，开学还要军训吗？？', '2020年09月22日  02:47'),
(6, 'admin', '开学开学了，真开心', '2020年09月22日  02:46'),
(5, '游客2333', '今年多久开学呀！！！！', '2020年09月22日  02:37');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `userpwd` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `username`, `phone`, `userpwd`) VALUES
(1, 'admin', '17222382291', 'admin'),
(2, '何木木', '13767201182', '123456'),
(3, 'admin01', '17666234401', '123123'),
(4, 'admin11', '17666234401', '123123123');

--
-- 转储表的索引
--

--
-- 表的索引 `message01`
--
ALTER TABLE `message01`
  ADD PRIMARY KEY (`messageid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `message01`
--
ALTER TABLE `message01`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
