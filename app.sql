-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 04 2019 г., 15:37
-- Версия сервера: 5.6.43
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_09_03_065534_create_superheroes_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `superheroes`
--

CREATE TABLE `superheroes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nickname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `superpowers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catch_phrase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `superheroes`
--

INSERT INTO `superheroes` (`id`, `created_at`, `updated_at`, `nickname`, `real_name`, `origin_description`, `superpowers`, `catch_phrase`, `img`) VALUES
(6, '2019-09-04 08:45:05', '2019-09-04 08:45:05', 'Superman', 'Clark Kent', 'Superman is the last son of Krypton, sent as the dying planet\'s last hope to Earth, where he grew to become its protector. Though he was apparently killed shortly after the Darkseid War, his essence merged with the New Earth Superman in Rebirth, creating a new, merged timeline for Superman.', 'Kryptonian Physiology, Solar Energy Absorption, Heat Vision, Enhanced Vision, Flight ...', 'Look, up in the sky, it\'s a bird, it\'s a plane, it\'s Superman', 'http://images6.fanpop.com/image/photos/41100000/Superman-superman-41172951-1080-1080.jpg'),
(7, '2019-09-04 08:55:19', '2019-09-04 08:55:19', 'Batman', 'Bruce Wayne', 'Batman is the superhero protector of Gotham City, a man dressed like a bat who fights against evil and strikes terror into the hearts of criminals everywhere. In his secret identity he is Bruce Wayne, billionaire industrialist and notorious playboy. Although he has no superhuman powers, he is one of the world\'s smartest men and greatest fighters. His physical prowess and technical ingenuity make him an incredibly dangerous opponent. He is also a founding member of the Justice League.', 'Regeneration, Multilingualism ....', 'Batman', 'https://vignette.wikia.nocookie.net/marvel_dc/images/a/a6/Batman_Vol_2_2_Variant_Textless.jpg/revision/latest?cb=20120228075313'),
(8, '2019-09-04 08:58:59', '2019-09-04 08:58:59', 'The Flash', 'Barry Allen', 'Barry Allen is the second incarnation of The Flash, the fastest man alive. Using his super-speed powers, he taps into the Speed Force and becomes a costumed crime-fighter. His position is a legacy in the Flash Family, successor to the original Jay Garrick and predecessor to Wally West. He is a founding member of the Justice League of America.', 'Speed Force Generation, Superhuman Reflexes....', 'Hey, Kid. Name\'s The Flash, nice to meet ya.', 'https://vignette.wikia.nocookie.net/marvel_dc/images/4/42/Flash_0001.jpg/revision/latest?cb=20120215162610'),
(9, '2019-09-04 09:03:42', '2019-09-04 09:03:42', 'Green Arrow', 'Oliver Queen', 'Green Arrow is a vigilante superhero who fights crime using archery, martial arts and technology. In his secret identity, he is Oliver Queen, living in Star City as a wealthy playboy and billionaire industrialist turned outspoken socially-progressive politician. He is the leader of Team Arrow; he has also been a member of the Justice League and the Outsiders.', 'Acrobatics, Aviation,....', 'At my core, I wasn\'t a hero. I was a hunter.', 'https://vignette.wikia.nocookie.net/marvel_dc/images/b/bf/Green_Arrow_0012.jpg/revision/latest?cb=20100803064333'),
(10, '2019-09-04 09:05:23', '2019-09-04 09:05:23', 'Aquaman', 'Orin', 'Aquaman is the ruler of Atlantis and the Earth\'s oceans, an Atlantean with incredible strength and speed as well as the ability to command all sea-life. His unique physiology allows him to survive on land and at the ocean\'s greatest depths of pressure and temperature. Given the names Orin through his royal heritage and Arthur Curry by his human upbringing, he fights to protect both worlds using his mighty abilities and political influence. He is a founding member of the Justice League of America.', '.....', 'A King is a King in every corner of his kingdom... and when he\'s not in his kingdom? He\'s still a King', 'https://vignette.wikia.nocookie.net/marvel_dc/images/4/46/Aquaman_0003.jpg/revision/latest?cb=20101225184959'),
(11, '2019-09-04 09:07:28', '2019-09-04 09:07:56', 'Green', 'Alan', '...', '...', '...', 'https://vignette.wikia.nocookie.net/marvel_dc/images/8/8e/Green_Lantern_Corps_005.jpg/revision/latest?cb=20090718045938');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `superheroes`
--
ALTER TABLE `superheroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `superheroes`
--
ALTER TABLE `superheroes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
