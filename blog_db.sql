-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 01 2018 г., 13:37
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `text`) VALUES
(1, 'Ð¡Ð°Ð½Ñ', 'Ð¥Ð²Ð¾Ñ€Ð¾ÑÑ‚Ð¸Ð½Ð¸Ð½', 'ÐÐ»ÐµÐºÑÐ°Ð½Ð´Ñ€ Ð¥Ð²Ð¾Ñ€Ð¾ÑÑ‚Ð¸Ð½Ð¸Ð½, Ð¿Ð°Ñ€ÐµÐ½ÑŒ Ð½Ðµ Ð¿Ð»Ð¾Ñ…Ð¾Ð¹, Ð½Ð¾ Ð¾Ð½ Ð½Ðµ Ð·Ð°Ñ…Ð¾Ñ‚ÐµÐ» Ð¿Ð¸ÑÐ°Ñ‚ÑŒ Ñ‚ÐµÐºÑÑ‚ Ð¼Ð½Ðµ Ð´Ð»Ñ Ð±Ð»Ð¾Ð³Ð° Ð¿Ñ€Ð¾ ÑÐµÐ±Ñ. Ðš Ñ‚Ð¾Ð¼Ñƒ Ð¶Ðµ Ð¾Ð½ Ð¸Ð½Ð¾Ð³Ð´Ð° ÑÐ»Ð¸ÑˆÐºÐ¾Ð¼ ÑÐµÑ€ÑŒÐµÐ·Ð½Ð¾ ÑˆÑŒÐµÑ‚ Ð² Ð³Ð¾Ð»Ð¾Ð²Ñƒ Ñ€ÐµÐ±ÑÑ‚Ð°Ð¼ Ð¸Ð· Ð¸Ð³Ñ€Ñ‹ ÐºÐ¾Ð½Ñ‚ÐµÑ€ ÑÑ‚Ñ€Ð°Ð¹Ðº Ð³Ð»Ð¾Ð±ÐµÐ» Ð¾Ñ„ÐµÐ½ÑÐ¸Ð²'),
(2, 'ÐÐ½Ñ‚Ð¾Ð½', 'Ð§ÐµÑ€ÐµÐ¿Ð°Ð½Ð¾Ð²', 'Ð§ÐµÑ€ÐµÐ¿Ð°Ð½Ð¾Ð² ÐÐ½Ñ‚Ð¾Ð½ - ÑÑ‚Ð¾ Ñ‚Ð°ÐºÐ¾Ð¹ Ð¿Ð°Ñ€Ñ, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð½Ð° Ð²Ñ‹Ñ…Ð¾Ð´Ð½Ñ‹Ñ… Ð·Ð²Ð°Ð» Ð¼ÐµÐ½Ñ ÐºÐ°Ñ‚Ð°Ñ‚ÑŒ Ð¸ Ñ„Ð¾Ñ€Ñ‚Ð½Ð°ÐµÑ‚ Ð¸ Ð»Ð¸Ð³Ñƒ Ð»ÐµÐ³ÐµÐ½Ð´, Ñ‚ÐµÐ¼ ÑÐ°Ð¼Ñ‹Ð¼ Ð¼ÐµÑˆÐ°Ñ Ð¼Ð½Ðµ Ð´ÐµÐ»Ð°Ñ‚ÑŒ ÑÐ²Ð¾ÑŽ Ñ€Ð°Ð±Ð¾Ñ‚Ñƒ.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
