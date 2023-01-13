-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.38 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `blog`;

-- Дамп структуры для таблица blog.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы blog.admin: ~1 rows (приблизительно)
DELETE FROM `admin`;
INSERT INTO `admin` (`login`, `password`, `name`, `id`) VALUES
	('Kenzis', '12345', 'Kventish', 1);

-- Дамп структуры для таблица blog.publicated
CREATE TABLE IF NOT EXISTS `publicated` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Header` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_information` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Photo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Full_info` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tima,date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы blog.publicated: ~4 rows (приблизительно)
DELETE FROM `publicated`;
INSERT INTO `publicated` (`id`, `Header`, `short_information`, `Photo`, `Full_info`, `tima,date`) VALUES
	(3, 'Роботы порабощают мир', 'Люди не задумываются о последствиях своих действий. Так давайте же поговорим на счёт этого', 'a;ga;g;ag;a', 'Для меня изучение английского языка давалось намного легче, когда я ассоциировал это со спортом. Так как уже долгое время я бегаю по утрам перед работой и для меня это уже стало обыденным, привычкой, изучение иностранного языка я также хотел сделать привычкой. Мой прошлый подход "УЧИТЬ" английский был бесполезен. Когда же я начал "ЗАНИМАТЬСЯ" английским, вникать в его суть, жить им, только после этого процесс изучения мне стал интересен и я стал прогрессировать. Верьте в себя и своих силах. Если обычный человек типо меня смог, чем вы хуже? Буду благодарен, если в комментариях поделитесь также собственным опытом и расскажете о том, каким образом вы изучали/изучаете иностранные языки.', '2022-07-27 11:17:09'),
	(4, 'Роботы порабощают мир', 'Люди не задумываются о последствиях своих действий. Так давайте же поговорим на счёт этого', 'dadada', 'Для меня изучение английского языка давалось намного легче, когда я ассоциировал это со спортом. Так как уже долгое время я бегаю по утрам перед работой и для меня это уже стало обыденным, привычкой, изучение иностранного языка я также хотел сделать привычкой. Мой прошлый подход "УЧИТЬ" английский был бесполезен. Когда же я начал "ЗАНИМАТЬСЯ" английским, вникать в его суть, жить им, только после этого процесс изучения мне стал интересен и я стал прогрессировать. Верьте в себя и своих силах. Если обычный человек типо меня смог, чем вы хуже? Буду благодарен, если в комментариях поделитесь также собственным опытом и расскажете о том, каким образом вы изучали/изучаете иностранные языки.', '2022-07-27 17:10:25'),
	(6, 'iPhone 11', 'iPhone 11 — смартфон корпорации Apple, использующий процессор Apple A13 Bionic который содержит 8,5 млрд транзисторов и операционную систему iOS 13 (на старте продаж), представленный 10 сентября 2019 года вместе с iPhone 11 Pro и iPhone 11 Pro Max. Является преемником iPhone XR.', 'https://avatars.mds.yandex.net/get-mpic/4397006/img_id3884474343356692179.jpeg/orig', 'iPhone 11 — смартфон корпорации Apple, использующий процессор Apple A13 Bionic который содержит 8,5 млрд транзисторов и операционную систему iOS 13 (на старте продаж), представленный 10 сентября 2019 года вместе с iPhone 11 Pro и iPhone 11 Pro Max. Является преемником iPhone XR.\r\n\r\nПредзаказ телефонов начался 18 сентября 2019 года, начало продаж — 20 сентября 2019 года. Применяется двойная основная камера с новыми алгоритмами обработки изображения на основе машинного обучения — Deep Fusion, Smart HDR и Ночной режим. В комплекте с телефоном по-прежнему будет поставляться 5-ваттное устройство для зарядки, кабель Lightning—USB-A для проводного подключения телефонов к ПК (MacBook, iMac и другие ПК) и наушники EarPods. С 2020 года, с приходом iPhone 12, в комплекте с iPhone 11 идет кабель USB-C и инструкция к устройству. Блок питания и наушники в комплекте отсутствуют и при необходимости докупаются отдельно.\r\n\r\nАппараты предлагаются в шести цветовых решениях: фиолетовый, жёлтый, зелёный, чёрный, белый и красный. Используется микропроцессорный чип Apple A13, содержащий шесть вычислительных ядер ARMv8, четыре ядра видеоускорителя и восемь ядер нейроускорителя. Телефон будет выпускаться в вариантах с 64, 128 или 256 гигабайтами встроенной флеш-памяти. Дисплей аппарата выполнен в технологии LCD IPS и имеет диагональ 6,06 дюйма. Емкость аккумулятора увеличилась по сравнению с iPhone XR на 168 мАч и составляет теперь 3110 мАч. Объем ОЗУ равняется 4 Г.', '2022-07-27 14:58:17');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
blog