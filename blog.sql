-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2023 г., 15:35
-- Версия сервера: 5.7.38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `login` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Photo` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`login`, `password`, `Photo`, `name`, `id`) VALUES
('lala', '$2y$10$4Lf.XtHsUNITJ3T5UFWK8O6YFFeK9WwrO.DHGmyaFQS5jW336W/Ce', 'https://i.pinimg.com/originals/96/70/21/9670213b3799b659a4c8a1bdfed19d8c.jpg', 'lili', 3),
('Svetik', '$2y$10$NH70iz6f7EUzn7vdBob5NuWR1ix2i3/v7xyEgbnJcBOxbRFMt1clS', NULL, 'Svetlanka', 4),
('Kventish', '$2y$10$t6YEm.Bl2bvV0tPFEG/aTu/4nDoVgpyg1b.PQdszy9Kt1kqTUXo9u', 'https://i.insider.com/577ecaaa4321f10d038b6ad4?width=2121', 'Kventish', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name_id` int(11) NOT NULL,
  `text_comment` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `publicated`
--

CREATE TABLE `publicated` (
  `id` int(11) NOT NULL,
  `Header` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_information` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Photo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Full_info` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tima,date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `publicated`
--

INSERT INTO `publicated` (`id`, `Header`, `short_information`, `Photo`, `Full_info`, `tima,date`) VALUES
(3, 'Роботы порабощают мир', 'Люди не задумываются о последствиях своих действий. Так давайте же поговорим на счёт этого', 'https://kartinkin.net/uploads/posts/2022-12/1670317205_48-kartinkin-net-p-kartinki-robotov-instagram-54.png', 'Для меня изучение английского языка давалось намного легче, когда я ассоциировал это со спортом. Так как уже долгое время я бегаю по утрам перед работой и для меня это уже стало обыденным, привычкой, изучение иностранного языка я также хотел сделать привычкой. Мой прошлый подход \"УЧИТЬ\" английский был бесполезен. Когда же я начал \"ЗАНИМАТЬСЯ\" английским, вникать в его суть, жить им, только после этого процесс изучения мне стал интересен и я стал прогрессировать. Верьте в себя и своих силах. Если обычный человек типо меня смог, чем вы хуже? Буду благодарен, если в комментариях поделитесь также собственным опытом и расскажете о том, каким образом вы изучали/изучаете иностранные языки.', '2022-07-27 11:17:09'),
(4, 'Роботы порабощают мир', 'Люди не задумываются о последствиях своих действий. Так давайте же поговорим на счёт этого', 'https://i.insider.com/577ecaaa4321f10d038b6ad4?width=2121', 'Для меня изучение английского языка давалось намного легче, когда я ассоциировал это со спортом. Так как уже долгое время я бегаю по утрам перед работой и для меня это уже стало обыденным, привычкой, изучение иностранного языка я также хотел сделать привычкой. Мой прошлый подход \"УЧИТЬ\" английский был бесполезен. Когда же я начал \"ЗАНИМАТЬСЯ\" английским, вникать в его суть, жить им, только после этого процесс изучения мне стал интересен и я стал прогрессировать. Верьте в себя и своих силах. Если обычный человек типо меня смог, чем вы хуже? Буду благодарен, если в комментариях поделитесь также собственным опытом и расскажете о том, каким образом вы изучали/изучаете иностранные языки.', '2022-07-27 17:10:25'),
(6, 'iPhone 11', 'iPhone 11 — смартфон корпорации Apple, использующий процессор Apple A13 Bionic который содержит 8,5 млрд транзисторов и операционную систему iOS 13 (на старте продаж), представленный 10 сентября 2019 года вместе с iPhone 11 Pro и iPhone 11 Pro Max. Является преемником iPhone XR.', 'https://avatars.mds.yandex.net/get-mpic/4397006/img_id3884474343356692179.jpeg/orig', 'iPhone 11 — смартфон корпорации Apple, использующий процессор Apple A13 Bionic который содержит 8,5 млрд транзисторов и операционную систему iOS 13 (на старте продаж), представленный 10 сентября 2019 года вместе с iPhone 11 Pro и iPhone 11 Pro Max. Является преемником iPhone XR.\r\n\r\nПредзаказ телефонов начался 18 сентября 2019 года, начало продаж — 20 сентября 2019 года. Применяется двойная основная камера с новыми алгоритмами обработки изображения на основе машинного обучения — Deep Fusion, Smart HDR и Ночной режим. В комплекте с телефоном по-прежнему будет поставляться 5-ваттное устройство для зарядки, кабель Lightning—USB-A для проводного подключения телефонов к ПК (MacBook, iMac и другие ПК) и наушники EarPods. С 2020 года, с приходом iPhone 12, в комплекте с iPhone 11 идет кабель USB-C и инструкция к устройству. Блок питания и наушники в комплекте отсутствуют и при необходимости докупаются отдельно.\r\n\r\nАппараты предлагаются в шести цветовых решениях: фиолетовый, жёлтый, зелёный, чёрный, белый и красный. Используется микропроцессорный чип Apple A13, содержащий шесть вычислительных ядер ARMv8, четыре ядра видеоускорителя и восемь ядер нейроускорителя. Телефон будет выпускаться в вариантах с 64, 128 или 256 гигабайтами встроенной флеш-памяти. Дисплей аппарата выполнен в технологии LCD IPS и имеет диагональ 6,06 дюйма. Емкость аккумулятора увеличилась по сравнению с iPhone XR на 168 мАч и составляет теперь 3110 мАч. Объем ОЗУ равняется 4 Г.', '2022-07-27 14:58:17'),
(7, 'test', 'test', 'https://i.pinimg.com/originals/16/74/32/167432185b15978f3b26d33e70df79b7.jpg', 'test', '2023-05-23 22:04:20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `name_id` (`name_id`);

--
-- Индексы таблицы `publicated`
--
ALTER TABLE `publicated`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `publicated`
--
ALTER TABLE `publicated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `publicated` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`name_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
