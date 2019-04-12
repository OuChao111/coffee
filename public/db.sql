-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-11-13 10:41:46
-- 服务器版本： 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- 表的结构 `db_message`
--

CREATE TABLE `db_message` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `db_message`
--

INSERT INTO `db_message` (`id`, `username`, `title`, `content`) VALUES
(1, '152', '111', 'content'),
(2, '756786786', '767868768768', '796797896879'),
(4, '7678', '767', '76'),
(5, '858', '46354', '456456546'),
(6, '4634', '464564', '46464'),
(7, '4564564', '46456546', '4564565654645'),
(11, 'ityoytoyup', 'tyiytoytuo', 'ytoiytouypuipuyiotyrurt');

-- --------------------------------------------------------

--
-- 表的结构 `db_user`
--

CREATE TABLE `db_user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`) VALUES
(1, '1520959', '123'),
(2, '7545757', '444'),
(3, 'admin', '123456'),
(10, '243645', '436456546'),
(11, '434563456', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_message`
--
ALTER TABLE `db_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `db_message`
--
ALTER TABLE `db_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
