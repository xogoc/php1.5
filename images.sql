-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Ноя 11 2017 г., 02:39
-- Версия сервера: 5.1.67
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_xogoc_7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `size`, `views`) VALUES
(1, 'Hydrangeas.jpg', 'img/', 595284, 0),
(2, 'Chrysanthemum.jpg', 'img/', 879394, 0),
(3, 'Desert.jpg', 'img/', 845941, 1),
(4, 'Penguins.jpg', 'img/', 777835, 3),
(5, 'Lighthouse.jpg', 'img/', 561276, 2),
(6, 'Koala.jpg', 'img/', 780831, 4),
(7, 'Jellyfish.jpg', 'img/', 775702, 1),
(8, 'Tulips.jpg', 'img/', 620888, 1),
(9, 'agl.jpg', 'img/', 331976, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
