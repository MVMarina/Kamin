-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 24 2018 г., 21:33
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kamin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Каталог', 0),
(2, 'Оплата', 0),
(3, 'Доставка', 0),
(4, 'Акции', 0),
(5, 'Электрокамины', 1),
(6, 'Пристенные / Напольные', 5),
(7, 'Угловые', 5),
(8, 'Настенные / Встроенные', 5),
(9, 'Порталы', 1),
(10, 'Очаги', 1),
(11, 'Аксессуары', 1),
(12, 'Каминные экраны', 11),
(13, 'Каминные дровники', 11),
(14, 'Наборы каминного инструмента', 11),
(15, 'Биотопливо', 11),
(16, 'Декоративные элементы', 11),
(17, 'Другие аксессуары', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `telefon` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `products_id` (`products_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priсe_discount` float NOT NULL,
  `priсe` float DEFAULT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `diagonal` int(11) NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `depth` float NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `power` int(255) NOT NULL,
  `sound effect` varchar(255) NOT NULL DEFAULT 'true',
  `air reduction` varchar(255) NOT NULL,
  `damping effect` varchar(255) NOT NULL,
  `live fire effect_3d` varchar(255) NOT NULL,
  `box` varchar(255) NOT NULL,
  `pdy` varchar(255) NOT NULL,
  `brightnes effect` varchar(10) NOT NULL DEFAULT 'true',
  `hearth type` varchar(10) NOT NULL DEFAULT 'true',
  `multicolored flame` varchar(10) NOT NULL DEFAULT 'true',
  `coal flicker` varchar(10) NOT NULL DEFAULT 'true',
  `lamp type` varchar(10) NOT NULL,
  `heating type` varchar(100) NOT NULL,
  `heat levels` varchar(100) NOT NULL,
  `overheating protection` varchar(10) NOT NULL DEFAULT 'true',
  `sleep timer` varchar(10) NOT NULL DEFAULT 'true',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`),
  KEY `cat_id_2` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `images`, `description`, `priсe_discount`, `priсe`, `manufacturer`, `diagonal`, `width`, `height`, `depth`, `fuel`, `material`, `color`, `power`, `sound effect`, `air reduction`, `damping effect`, `live fire effect_3d`, `box`, `pdy`, `brightnes effect`, `hearth type`, `multicolored flame`, `coal flicker`, `lamp type`, `heating type`, `heat levels`, `overheating protection`, `sleep timer`) VALUES
(1, 6, 'Электрокамин Elford 25 AO с FireField 25 SIR', 'images/Dacota WT c Fobos Lux BL.png', 'Электрический камин в сборе с очагом. Лаконичный дизайн делает его универсальным для разных интерьеров и уместным как для квартиры, так и для дачи. Изготовлен из МДФ и литого камня. В комплекте используется электрический очаг FireField 25 SIR с потрясающим эффектом пламени и муляжом дров, расположенных за панорамным фронтальным стеклом. С помощью регулятора яркости огня можно задать желаемую интенсивность (доступно 4 уровня регулировки). Очаг оснащен инфракрасным обогревателем, спрятанным в верхней части и обеспечивающим тепло в холодную погоду. Инфракрасный обогреватель является самым современным способом прогрева и обладает рядом преимуществ, такими как: направленность, высокая скорость обогрева, отсутствие запахов и экономия электричества.', 52600, 56800, 'Группа компаний RealFlame', 23, 108, 101, 40, 'Электричество', 'Комбинированные', 'Контрстные', 1600, 'Есть', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(2, 6, 'Электрокамин Tokio 33 WT/DN с FireSpace 33 SIR', 'images/alessandra.jpg', 'Электрокамин в сборе с очагом Firespace 33 SIR. Материал обрамления - шпонированный МДФ. Широкий очаг класса люкс на LED технологии, с ярким пламенем и многофункциональным пультом ДУ. Инфракрасный обогреватель, максимальная мощность на обогрев - 2 кВт. Дизайн же лишен всего лишнего и создан для любителей минимализма. Рекомендуем всем, кто давно хотел электрокамин, но не решался. ', 65000, 72800, 'Группа компаний RealFlame', 25, 160, 97, 36, 'Электричество', 'Под дерево', 'Светлые', 1600, 'Есть', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(3, 6, 'Электрокамин Madrid 13 WT/DN с FireSpace 33 SIR', 'images/Dacota WT c Fobos Lux BL.png', 'Электрокамин в сборе с очагом Firespace 33 SIR. Материал обрамления - шпонированный МДФ. Широкий очаг класса люкс на LED технологии, с ярким пламенем и многофункциональным пультом ДУ. Инфракрасный обогреватель, максимальная мощность на обогрев - 2 кВт. Дизайн же лишен всего лишнего и создан для любителей минимализма. Рекомендуем всем, кто давно хотел электрокамин, но не решался. ', 56000, 68000, 'Группа компаний RealFlame', 23, 160, 97, 36, 'Электричество', 'Под дерево', 'Светлые', 1600, 'Есть', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(4, 10, '3D-электроочаг Helios 3D', 'images/andromeda.jpg', 'Электрический очаг с эффектом пламени 3D нового поколения. Абсолютно реалистичный эффект пламени.', 55900, NULL, 'Группа компаний RealFlame', 25, 64, 63, 27, 'Электричество', 'Дерево', 'Тёмный дуб', 1700, 'Нет', 'Есть', 'Нет', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(5, 10, '3D-электроочаг Pamir 3D', 'images/andromeda.jpg', 'Электрический очаг с эффектом пламени 3D нового поколения. Абсолютно реалистичный эффект пламени.', 44900, NULL, 'Группа компаний RealFlame', 25, 64, 63, 27, 'Электричество', 'Под дерево', '', 1700, 'Нет', 'Есть', 'Нет', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(6, 10, '3D-электроочаг Cassette 630 3D', 'images/andromeda.jpg', 'Декоративные дрова 3D Cassette 630 создадут уют и превосходное пламя.  \r\nОчаг с функцией увлажнения воздуха. Новинка 2016 года', 45900, NULL, 'Группа компаний RealFlame', 21, 66, 25, 26, 'Электричество', 'Металл', 'Античный дуб', 1700, 'Нет', 'Есть', 'Нет', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(7, 7, 'Электрокамин Elford Corner (угловой) 25 AO с FireField 25 SIR', 'images/alessandra_1.png', 'Камин Elford в угловом исполнении с  электрическим очагом FireField 25 SIR. Обрамление выполнено в стиле "кантри" в шпонированном МДФ в цвете "античный дуб" и искусственном камне. Очаг с функцией инфракрасного обогрева будет актуален в холодную погоду. ', 50000, 58800, 'Группа компаний RealFlame', 24, 110, 101.5, 75, 'Электричество', 'Камень', 'Античный дуб', 1700, 'Есть', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(8, 7, 'Электрокамин NNR 32 (угловой) 25 AO с FireField 25 SIR', 'images/alessandra_1.png', 'Камин Elford в угловом исполнении с  электрическим очагом FireField 25 SIR. Обрамление выполнено в стиле "кантри" в шпонированном МДФ в цвете "античный дуб" и искусственном камне. Очаг с функцией инфракрасного обогрева будет актуален в холодную погоду. ', 45000, 62300, 'Группа компаний RealFlame', 24, 110, 101, 75, 'Электричество', 'Камень', 'Светлые', 1600, 'Есть', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(9, 7, 'Электрокамин Leticia 26 WT (угловой) с Epsilon 26 S IR', 'images/Dacota WT c Fobos Lux BL.png', 'Угловой электрический камин Leticia с очагом Epsilon.  Обрамление изготовлено из шпонированного МДФ, выполнено в цвете слоновая кость с коричневой патиной. Классические декоративные элементы покрыты патиной и смотрятся очень эффектно.', 68000, NULL, 'Группа компаний RealFlame', 24, 128, 124, 87, 'Электричество', 'Дерево', 'Тёмный дуб', 1500, 'Нет', 'Нет', 'Есть', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(10, 8, 'Электропечь навесной Andromeda', 'images\\alessandra.jpg', 'Навесная модель очага Andromeda подходит для тех, кто при отсутствии возможности использовать дополнительное место под камин, тем не менее желает создать атмосферу уюта. Данная модель может использоваться и в качестве декоративного предмета, и с целью дополнительного обогрева. Предусмотрено управление с пульта ДУ.', 20900, NULL, 'Группа компаний RealFlame', 25, 66, 52, 15, 'Электричество', 'Дерево', 'Светлый дуб', 1400, 'Есть', 'Есть', 'Нет', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(11, 9, 'Портал Elford STD AO', 'images\\portal-stone-corner-std-ao.jpg', 'Портал выполнен из шпонированного МДФ и литого камня. Лаконичный дизайн делает его универсальным для различных интерьеров и подходящим как для квартиры, так и для загородного дома.', 30900, NULL, 'Группа компаний RealFlame', 23, 108, 101, 40, '', 'Камень', 'Венге', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(12, 9, 'Портал Stone New Corner (угловой) STD AO', 'images\\portal-stone-corner-std-ao.jpg', 'Угловой портал в стиле ""кантри"". Изготовлен из МДФ и литого камня. Предназначен для стандартных очагов.', 28900, NULL, '', 0, 113, 101, 80, '', 'Под дерево', 'Венге', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(13, 9, 'Портал Elford WLPF 13', 'images\\portal-stone-corner-std-ao.jpg', 'Угловой портал в стиле ""кантри"". Изготовлен из МДФ и литого камня. Предназначен для стандартных очагов.', 36000, NULL, 'Группа компаний RealFlame', 23, 113, 101, 80, '', 'Дерево', 'Античный дуб', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(14, 11, ' Дровник 10000PK', 'images\\drovnik.jpg', 'Дровник для камина. Материал металл. Может использоваться для натурального дровяного камина и также как украшения электрического камина.', 3900, NULL, 'Группа компаний RealFlame', 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(15, 14, 'Набор каминный EF-CA071', 'images\\ef-ca071-nabor-kaminnyj-.jpg', 'Может использоваться для натурального дровяного камина и также как интерьерный элемент для электрического камина', 5900, NULL, 'Может использоваться для натурального дровяного камина и также как интерьерный элемент для электрического камина', 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(16, 12, 'Каминный экран 03011AB', 'images\\03010bk-kaminnyj-ekran.jpg', 'Каминный экран.\r\n\r\n', 5500, NULL, '', 0, 0, 0, 0, '', 'Металл', 'Античная бронза', 0, '', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(17, 8, 'Электрокамин настенный Sky-high 490 от Grand Kamin', 'images/Dacota WT c Fobos Lux BL.png', 'Настенный электрический камин с эффектом дров', 9300, 10300, 'Группа компаний RealFlame', 23, 578, 876, 122, 'Электричество', 'Под дерево', 'Чёрный', 1400, 'Есть', 'Нет', 'Нет', 'Есть', 'Нет', 'Есть', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true'),
(18, 8, 'Электропечь навесной Oslo', 'images/Dacota WT c Fobos Lux BL.png', 'Навесная модель очага Oslo подходит для тех, кто при отсутствии возможности использовать дополнительное место под камин, тем не менее желает создать атмосферу уюта. Данная модель может использоваться и в качестве декоративного предмета, и с целью дополнительного обогрева.', 45000, 58000, 'Группа компаний KDV', 23, 113, 63, 40, 'Электричество', 'Камень', 'Светлый дуб', 1600, 'true', '', '', '', '', '', 'true', 'true', 'true', 'true', '', '', '', 'true', 'true');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
