-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 05 2018 г., 19:50
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testtask1`
--
CREATE DATABASE IF NOT EXISTS `testtask1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testtask1`;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `priority` varchar(55) NOT NULL,
  `project` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `created` varchar(55) NOT NULL,
  `appointed` varchar(55) NOT NULL,
  `startdate` text NOT NULL,
  `enddate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `priority`, `project`, `status`, `description`, `created`, `appointed`, `startdate`, `enddate`) VALUES
(3, 'WI-FI розетки недоступны удаленно', 'Нормальный', 'Мобильная разработка', 'Открыта', 'Все как всегда, в локали есть, а удаленно нет', 'Андрей Лосев', 'Дмитрий Соколов', '2018-04-05 19:26:16', ''),
(4, 'Проверить тестовое задание', 'Ультра-высокий', 'Аппаратная разработка', 'Открыта', 'Проверить тестовое задание', 'Андрей Лосев', 'Александр Верижников', '2018-04-05 19:26:53', ''),
(5, 'Проверить ЦУ 100666', 'Высокий', 'Разработка центрального контроллера', 'Открыта', 'Постоянно отваливается', 'Надежда Воеводина', 'Андрей Лосев', '2018-04-05 19:28:00', ''),
(6, 'Протестировать прошивку WI-FI розеток', 'Высокий', 'Аппаратная разработка', 'Открыта', 'Не ну вам впадлу чтоли', 'Дмитрий Соколов', 'Павел Конышев', '2018-04-05 19:29:24', ''),
(7, 'Еще че нить протестить', 'Ультра-высокий', 'Аппаратная разработка', 'Открыта', 'Коньяк например', 'Дмитрий Соколов', 'Павел Конышев', '2018-04-05 19:30:04', ''),
(8, 'Сделать тестовое №2', 'Нормальный', 'Разработка центрального контроллера', 'Открыта', 'Приступаем', 'Александр Верижников', 'Андрей Лосев', '2018-04-05 19:31:01', ''),
(9, 'Запилить нормальное приложение на IOS', 'Низкий', 'Мобильная разработка', 'Открыта', 'Нет ну сложно что ли', 'Павел Конышев', 'Дмитрий Соколов', '2018-04-05 19:35:22', ''),
(10, 'Просто задача', 'Низкий', 'Мобильная разработка', 'Закрыта', 'прост', 'Елена Петрунина', 'Дмитрий Соколов', '2018-04-05 19:36:33', '2018-04-05 19:36:41');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `pass`) VALUES
(5, 'dmitry.sokolov@rubetek.com', 'Дмитрий Соколов', '$2y$10$2u2cNL1MuFc8j8soiryvOuUZYSau0g4s3n4hb3z5jOJrnuxAlx6R2'),
(6, 'Alexandr.Verizhnilov@Rubetek.com', 'Александр Верижников', '$2y$10$Au6/RTOGgQsT7jqlDPfkTeRbfn1mmjOqyHddneFa/cD9p0Y.XVd9i'),
(7, 'Nadezhda.Voevodina@Rubetek.com', 'Надежда Воеводина', '$2y$10$C0i6a/GhiM2CNyVpc1zQveLpUuN2iSu.9t/OnNJE6.U0hvOGsALqK'),
(8, 'Andrey.Losev@Rubetek.com', 'Андрей Лосев', '$2y$10$5waFGTGe0pMLyrW/E9bApeHg3EuhS0fTjQiXoMP8oDNDLR6H8.66S'),
(9, 'Pavel.Konishev@Rubetek.com', 'Павел Конышев', '$2y$10$G.w3tit3OJBxDUHMOpIQEO8eMfCyJi3KFV9UjG/rklvRShVcmdLQm'),
(10, 'Elena.Petrunina@Rubetek.com', 'Елена Петрунина', '$2y$10$nrnisL1EcnfTKH99S2PT7.k9WzmWCAST1y7Y7jWER9WIjJaWCLqcO');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
