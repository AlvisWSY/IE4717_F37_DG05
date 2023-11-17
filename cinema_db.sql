-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-11-08 17:15:49
-- 服务器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `cinema_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `bookingtable`
--

CREATE TABLE `bookingtable` (
  `bookingID` int(11) NOT NULL,
  `movieID` int(11) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  `bookingEmail` varchar(255) NOT NULL,
  `seat` text NOT NULL,
  `amount` varchar(255) NOT NULL,
  `DATE-TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 转存表中的数据 `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieID`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`, `seat`, `amount`, `DATE-TIME`) VALUES
(99, 1, 'main-hall', '3d', '11-9', '09-00', 'zihao', 'liu', '111098090909', 'Liuz0085@e.ntu.edu.sg', 'seat13', '100', '2023-11-08 23:49:02');

-- --------------------------------------------------------

--
-- 表的结构 `customer_user`
--

CREATE TABLE `customer_user` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `customer_user`
--

INSERT INTO `customer_user` (`username`, `email`, `password`) VALUES
('WSY', 'liuz0085@e.ntu.edu.sg', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `msgID` int(12) NOT NULL,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 转存表中的数据 `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(5, 'zihao', 'liu', 'liuz0085@e.ntu.edu.sg', 'good job!');

-- --------------------------------------------------------

--
-- 表的结构 `movietable`
--

CREATE TABLE `movietable` (
  `movieID` int(11) NOT NULL,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int(11) NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  `mainhall` int(11) NOT NULL,
  `viphall` int(11) NOT NULL,
  `privatehall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 转存表中的数据 `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`, `mainhall`, `viphall`, `privatehall`) VALUES
(1, 'img/movie-poster-1.jpg', 'Taylor Swift The Eras Tour\r\n', 'Concert', 169, '2023-11-03', 'Sam Wrench', 'Taylor Swift\r\n', 0, 0, 0),
(2, 'img/movie-poster-2.jpg', 'Marvel Studios\' The Marvels \r\n ', 'Action, Adventure', 105, '2023-11-09', 'Nia DaCosta', 'Brie Larson, Samuel L. Jackson, Iman Vellani, Teyonah Parris, Emily Ng\r\n ', 0, 0, 0),
(3, 'img/movie-poster-3.jpg', 'The Hunger Games: The Ballad Of Songbirds And Snakes\r\n', 'Action, Adventure', 157, '2023-11-16', 'Francis Lawrence', 'Tom Blyth, Rachel Zegler, Peter Dinklage, Hunter Schafer, Josh Andrés Rivera, Jason Schwartzman\r\n', 0, 0, 0),
(4, 'img/movie-poster-4.jpg', 'Killers Of The Flower Moon\r\n', 'Crime, Drama', 206, '2023-10-19', 'Martin Scorsese', 'Leonardo DiCaprio, Robert De Niro, Lily Gladstone\r\n', 0, 0, 0),
(5, 'img/movie-poster-5.jpg', 'Trolls Band Together \r\n', 'Animation', 91, '2023-11-02', 'Walt Dohrn, Tim Heitz', 'Anna Kendrick, Justin Timberlake, Camila Cabello, Eric André, Amy Schumer, Andrew Rannells\r\n', 0, 0, 0),
(6, 'img/movie-poster-6.webp', 'The Bridge Curse 2: Ritual\r\n', 'Horror, Thriller', 100, '2023-11-02', 'Lester Hsi', 'Wang Yu Xuan, JC Lin, Patrick Shih', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `seattable`
--

CREATE TABLE `seattable` (
  `seat1` tinyint(1) NOT NULL DEFAULT 0,
  `seat2` tinyint(1) NOT NULL DEFAULT 0,
  `seat3` tinyint(1) NOT NULL DEFAULT 0,
  `seat4` tinyint(1) NOT NULL DEFAULT 0,
  `seat5` tinyint(1) DEFAULT 0,
  `seat6` tinyint(1) DEFAULT 0,
  `seat7` tinyint(1) DEFAULT 0,
  `seat8` tinyint(1) DEFAULT 0,
  `seat9` tinyint(1) DEFAULT 0,
  `seat10` tinyint(1) DEFAULT 0,
  `seat11` tinyint(1) NOT NULL DEFAULT 0,
  `seat12` tinyint(1) NOT NULL DEFAULT 0,
  `seat13` tinyint(1) NOT NULL DEFAULT 0,
  `seat14` tinyint(1) NOT NULL DEFAULT 0,
  `seat15` tinyint(1) NOT NULL DEFAULT 0,
  `seat16` tinyint(1) NOT NULL DEFAULT 0,
  `seat17` tinyint(1) NOT NULL DEFAULT 0,
  `seat18` tinyint(1) NOT NULL DEFAULT 0,
  `seat19` tinyint(1) NOT NULL DEFAULT 0,
  `seat20` tinyint(1) NOT NULL DEFAULT 0,
  `seat21` tinyint(1) NOT NULL DEFAULT 0,
  `seat22` tinyint(1) NOT NULL DEFAULT 0,
  `seat23` tinyint(1) NOT NULL DEFAULT 0,
  `seat24` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `seattable`
--

INSERT INTO `seattable` (`seat1`, `seat2`, `seat3`, `seat4`, `seat5`, `seat6`, `seat7`, `seat8`, `seat9`, `seat10`, `seat11`, `seat12`, `seat13`, `seat14`, `seat15`, `seat16`, `seat17`, `seat18`, `seat19`, `seat20`, `seat21`, `seat22`, `seat23`, `seat24`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, '123', 'john', '123');

--
-- 转储表的索引
--

--
-- 表的索引 `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD PRIMARY KEY (`bookingID`),
  ADD UNIQUE KEY `bookingID` (`bookingID`),
  ADD KEY `foreign_key_movieID` (`movieID`);

--
-- 表的索引 `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`msgID`),
  ADD UNIQUE KEY `msgID` (`msgID`);

--
-- 表的索引 `movietable`
--
ALTER TABLE `movietable`
  ADD PRIMARY KEY (`movieID`),
  ADD UNIQUE KEY `movieID` (`movieID`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bookingtable`
--
ALTER TABLE `bookingtable`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- 使用表AUTO_INCREMENT `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `msgID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `movietable`
--
ALTER TABLE `movietable`
  MODIFY `movieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 限制导出的表
--

--
-- 限制表 `bookingtable`
--
ALTER TABLE `bookingtable`
  ADD CONSTRAINT `foreign_key_movieID` FOREIGN KEY (`movieID`) REFERENCES `movietable` (`movieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
