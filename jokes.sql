-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 25 2020 г., 20:25
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jokes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `offerjoke`
--

CREATE TABLE `offerjoke` (
  `id` int(11) NOT NULL,
  `author` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(256) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `offerjoke`
--

INSERT INTO `offerjoke` (`id`, `author`, `text`, `category`, `date`) VALUES
(1, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(2, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(3, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(4, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(5, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(6, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(7, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(8, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(9, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(10, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(11, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(12, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(13, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(14, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(15, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(16, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(17, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(18, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(19, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(20, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(21, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(22, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(23, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(24, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(25, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(26, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(27, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(28, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(29, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(30, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(31, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(32, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(33, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(34, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(35, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(36, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(37, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(38, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(39, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(40, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(41, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(42, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21'),
(43, 'zz', 'zaa', 'all', '2020-08-01 00:00:00'),
(44, 'Андрей', 'sdfsgs', 'all', '2020-08-01 00:00:00'),
(45, 'Даниил', 'asdasd\r\nasdasd\r\nasdads', 'all', '2020-08-01 00:00:00'),
(46, 'kriper2002', 'asdasd\r\nasddasdasd\r\nasdasdasdas', 'all', '2020-08-24 14:29:43'),
(47, 'Даниил', 'asdfafs\r\nsdf\r\nsdf', 'all', '2020-08-24 17:52:14'),
(48, 'kriper2002', 'asdsad\r\nasdsa\r\nasd', 'life', '2020-08-24 17:53:21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `offerjoke`
--
ALTER TABLE `offerjoke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `offerjoke`
--
ALTER TABLE `offerjoke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
