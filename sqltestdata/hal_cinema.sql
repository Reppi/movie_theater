-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2014 年 12 月 17 日 16:11
-- サーバのバージョン: 5.5.27
-- PHP のバージョン: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `hal_cinema`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` varchar(6) NOT NULL,
  `area_name` varchar(1) NOT NULL,
  `seat_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `card_id` varchar(10) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `valid_start` date NOT NULL,
  `valid_end` date NOT NULL,
  `card_birthday` date NOT NULL,
  `security_code` varchar(3) NOT NULL,
  `user_id` varchar(7) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` varchar(10) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `contact_day` date NOT NULL,
  `contact_flag` tinyint(4) NOT NULL,
  `user_id` varchar(9) NOT NULL,
  `name_sei` char(11) NOT NULL,
  `name_mei` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` varchar(9) NOT NULL,
  `event_title` char(255) NOT NULL,
  `event_thumbnail` varchar(255) NOT NULL,
  `event_detail` text NOT NULL,
  `event_day` date NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_thumbnail`, `event_detail`, `event_day`) VALUES
('0', 'イベントタイトル１', 'sampleThm1.jpg', 'サンプルテキスト', '2015-12-26'),
('1', 'イベントタイトル2', 'sampleThm2.jpg', 'サンプルテキスト', '2015-12-26'),
('10', 'イベントタイトル11', 'sampleThm11.jpg', 'サンプルテキスト', '2014-09-03'),
('2', 'イベントタイトル3', 'sampleThm3.jpg', 'サンプルテキスト', '2015-12-26'),
('3', 'イベントタイトル4', 'sampleThm4.jpg', 'サンプルテキスト', '2015-12-26'),
('4', 'イベントタイトル5', 'sampleThm5.jpg', 'サンプルテキスト', '2015-12-26'),
('5', 'イベントタイトル6', 'sampleThm6.jpg', 'サンプルテキスト', '2015-12-26'),
('6', 'イベントタイトル7', 'sampleThm7.jpg', 'サンプルテキスト', '2015-12-26'),
('7', 'イベントタイトル8', 'sampleThm8.jpg', 'サンプルテキスト', '2015-12-26'),
('8', 'イベントタイトル9', 'sampleThm9.jpg', 'サンプルテキスト', '2015-12-26'),
('9', 'イベントタイトル10', 'sampleThm10.jpg', 'サンプルテキスト', '2015-12-26');

-- --------------------------------------------------------

--
-- テーブルの構造 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_id` varchar(10) NOT NULL,
  `food_price` int(5) NOT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `food_category`
--

CREATE TABLE IF NOT EXISTS `food_category` (
  `food_category` varchar(2) NOT NULL,
  `food_name` char(255) NOT NULL,
  PRIMARY KEY (`food_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `food_reserved`
--

CREATE TABLE IF NOT EXISTS `food_reserved` (
  `reserved_food_id` varchar(3) NOT NULL,
  PRIMARY KEY (`reserved_food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genre_id` varchar(2) NOT NULL,
  `genre_name` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` varchar(7) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `movie_detail` text NOT NULL,
  `show_time` varchar(3) NOT NULL,
  `actor` text,
  `director` char(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `genre_id` varchar(2) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `thumbnail`, `start_day`, `end_day`, `movie_detail`, `show_time`, `actor`, `director`, `url`, `genre_id`) VALUES
('0', '作品タイトル１', 'sampleThm1.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('1', '作品タイトル2', 'sampleThm2.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('10', '公開予定作品タイトル11', 'sampleThm11.jpg', '2015-04-01', '2015-12-31', 'サンプルテキスト１', '060', 'サンプルテキスト２', 'サンプルテキスト２', 'halcinema_sample.com', ''),
('2', '作品タイトル3', 'sampleThm3.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('3', '作品タイトル4', 'sampleThm4.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('4', '作品タイトル5', 'sampleThm5.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('5', '作品タイトル6', 'sampleThm6.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('6', '作品タイトル7', 'sampleThm7.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('7', '作品タイトル8', 'sampleThm8.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('8', '作品タイトル9', 'sampleThm9.jpg', '2014-04-01', '2014-12-31', '作品サンプルです。', '060', '佐藤・杉田・杉田・杉田・杉田・須藤', '杉田', 'halcinema_sample.com', ''),
('9', '作品タイトル10', 'sampleThm10.jpg', '2014-04-01', '2014-12-31', 'サンプルテキスト１', '060', 'サンプルテキスト２', 'サンプルテキスト２', 'halcinema_sample.com', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `movie_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `seat_id` varchar(6) NOT NULL,
  `seat_no` varchar(2) NOT NULL,
  `screen_id` varchar(2) NOT NULL,
  PRIMARY KEY (`seat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` varchar(7) NOT NULL,
  `ticket_price` int(7) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `ticket_reserved`
--

CREATE TABLE IF NOT EXISTS `ticket_reserved` (
  `reserved_id` varchar(10) NOT NULL,
  `ticket_no` varchar(16) NOT NULL,
  `reserved_time` datetime NOT NULL,
  `reserved_movieid` varchar(7) NOT NULL,
  `reserved_screenid` varchar(2) NOT NULL,
  PRIMARY KEY (`reserved_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `ticket_reserved`
--

INSERT INTO `ticket_reserved` (`reserved_id`, `ticket_no`, `reserved_time`, `reserved_movieid`, `reserved_screenid`) VALUES
('0', '0', '2014-12-17 00:00:00', '1', ''),
('1', '1', '2014-12-17 00:00:00', '1', ''),
('10', '10', '2014-12-17 00:00:00', '9', ''),
('11', '11', '2014-12-17 00:00:00', '9', ''),
('12', '12', '2014-12-17 00:00:00', '6', ''),
('13', '13', '2014-12-17 00:00:00', '5', ''),
('14', '14', '2014-12-17 00:00:00', '8', ''),
('15', '15', '2014-12-17 00:00:00', '4', ''),
('16', '16', '2014-12-17 00:00:00', '3', ''),
('2', '2', '2014-12-17 00:00:00', '2', ''),
('3', '3', '2014-12-17 00:00:00', '0', ''),
('4', '4', '2014-12-17 00:00:00', '2', ''),
('5', '5', '2014-12-17 00:00:00', '1', ''),
('6', '6', '2014-12-17 00:00:00', '7', ''),
('7', '7', '2014-12-17 00:00:00', '9', ''),
('8', '8', '2014-12-17 00:00:00', '9', ''),
('9', '9', '2014-12-17 00:00:00', '9', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(9) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name_sei` char(11) NOT NULL,
  `name_mei` char(11) NOT NULL,
  `furi_sei` char(255) NOT NULL,
  `furi_mei` char(255) NOT NULL,
  `sex` int(1) NOT NULL,
  `birthday` date NOT NULL,
  `address_prefecture` char(4) NOT NULL,
  `address_municipalities` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fav_area` varchar(3) NOT NULL,
  `add_day` date NOT NULL,
  `delete_day` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会員table';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
