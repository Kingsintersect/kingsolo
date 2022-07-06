-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 06:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kingsolomon`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sliders` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `branches` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `logo`, `sliders`, `branches`, `address`, `website`, `date`) VALUES
(1, 'solomonking', 'logolistic', 'many sliders', 'enugu state', 'Independence layout', 'www.kingsolomon.com', '2020-07-16 04:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `photo`, `date`, `deleted`) VALUES
(1, 'news title goes here', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci ducimus, hic quas ipsa atque quam accusantium esse magnam sunt? Possimus delectus, tempora at vitae necessitatibus eveniet animi sapiente libero minima dolores, beatae eius quas sunt? Reprehenderit impedit ex consectetur voluptates animi cumque necessitatibus vel earum perspiciatis! \r\n\r\n      Tempore perferendis consequatur eos? Nemo ullam officiis voluptate incidunt ab dolore explicabo excepturi sed deleniti doloremque officia architecto deserunt magni quod, voluptatibus dicta odit. Atque optio corrupti tempore quos obcaecati magnam, nulla consequatur numquam similique dolorem mollitia rem fugiat laudantium et reprehenderit assumenda, omnis sed error a harum ipsa impedit id! At, consectetur. Ullam inventore maiores suscipit culpa dignissimos similique maxime distinctio exercitationem enim ad officia fuga dolorem vitae obcaecati harum, veniam est voluptatum nam, rem illum quidem nesciunt perspiciatis nulla molestias. Rerum quas nisi error. Quae quibusdam, soluta consequuntur inventore error doloremque dicta ipsum quia quidem ipsam sapiente, libero nostrum dolorem necessitatibus accusamus ab explicabo earum? \r\n\r\n\r\nNisi, cupiditate. Iusto porro quasi enim fugiat, placeat, veritatis magni sint saepe mollitia vitae quaerat quo, totam esse. Magnam alias rerum unde temporibus, repudiandae ut quod tenetur assumenda vel dolorem nobis in dolores ad corrupti mollitia reiciendis aut atque explicabo illum? Quae, tempora nobis impedit nulla perspiciatis nisi ab, quo eius aliquam id nemo obcaecati quam. Ullam veniam quasi eius hic, perspiciatis molestias asperiores placeat possimus vitae reprehenderit facilis mollitia, sit quidem quas qui enim id unde omnis rem saepe harum velit non atque totam. \r\n\r\nTempora, delectus dolorem similique maiores iure fuga ipsa. Laboriosam, at sequi sit hic pariatur ullam repudiandae tenetur magnam maiores neque iusto maxime possimus veritatis fugit! Itaque est quibusdam voluptatibus eius! Saepe, voluptatibus qui omnis dolorem officia facere iusto ipsam eligendi iure explicabo harum voluptates odit, magnam cumque nam accusamus mollitia eveniet, quasi veniam officiis soluta facilis? Architecto, nesciunt, corrupti magnam sint dolorum veritatis dolores facere labore doloribus, omnis molestiae nobis voluptatem. Totam aut optio suscipit doloribus nemo, esse iusto dolor quaerat eveniet nam labore, eum minus, ut sed vero eos accusantium ducimus sit tempora maxime dignissimos eligendi. Eveniet suscipit numquam quam unde eligendi ullam esse fuga aliquid quae asperiores,\r\n ipsa alias nostrum ex molestias dolorem quod dignissimos nobis magni dolor, officia laborum cumque? Animi voluptatum iusto veniam quam at.\r\n Excepturi iusto magnam minus. Aut ut amet omnis, perspiciatis pariatur dicta aliquid quae a ratione corrupti saepe, voluptatibus voluptate molestias, fugiat error quos earum atque quia! Voluptatum dolorem minus ipsa ipsum facilis ex dolor rem, possimus ab debitis aliquid. Rerum obcaecati cum laborum sapiente, eius placeat labore repellendus eligendi earum,\r\n sunt minus officiis.\r\n\r\n         Deserunt impedit voluptates ducimus possimus hic explicabo rem necessitatibus suscipit ratione earum sint amet soluta quis, optio cupiditate, natus quod reprehenderit distinctio error debitis quas repudiandae aliquid omnis. Dolorum aliquam et ea nihil, alias suscipit nisi ipsum possimus nulla recusandae quibusdam vitae sint culpa. Labore molestias maiores voluptate dolorem cupiditate quae illo, est, quos perspiciatis odio explicabo ratione facilis deleniti maxime. Molestiae maxime sed explicabo aliquid quam. Blanditiis illum, numquam dignissimos rem perspiciatis dolores asperiores commodi, ipsum voluptas nesciunt quas?', 'uploads/news/2013-spring-new-women-039-s-clothing-v-neck.jpg', '2020-07-15 22:57:25', 0),
(2, '2nd news title goes here', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, molestiae at esse veritatis ex voluptatum aperiam sequi amet similique in enim eveniet nobis molestias neque, iste adipisci sed illum distinctio dolorem aliquid! Corporis dolorem voluptatem, sequi aut reprehenderit ut quam dolor, a tempora expedita rerum aspernatur? Autem deserunt cumque, incidunt doloribus totam quibusdam sapiente est, itaque nisi modi mollitia deleniti error dolor, voluptate cum aliquam sequi vel eos. Doloremque iusto nobis pariatur nesciunt nihil asperiores eum mollitia \r\n\r\naccusantium omnis dicta commodi, neque voluptatem veniam fugiat beatae sint eos blanditiis totam voluptates in tempora explicabo. Unde reprehenderit doloremque excepturi? Nemo velit modi vitae quod similique debitis sint, id numquam aspernatur, exercitationem non repellat cum quam tempore doloribus nesciunt ratione veniam ipsum nihil reiciendis illo repudiandae? Illo facere quasi pariatur fugiat ipsam, quae voluptatem mollitia dolor sequi, delectus, harum saepe voluptatum! Accusamus dolores veritatis cupiditate eligendi fugit, architecto id in sequi quod harum dignissimos minima perferendis suscipit aperiam ipsum eos facilis error saepe enim fugiat aut blanditiis, quasi perspiciatis non. Distinctio placeat in consequuntur vero. \r\n\r\n\r\n       In perferendis, nobis quia iste neque rem eligendi facere magnam quae quo adipisci. Sapiente cupiditate vitae quo quia assumenda. Eaque quas ullam provident culpa quaerat tenetur incidunt iste fuga dolores debitis, corporis laudantium necessitatibus ea libero, doloremque maxime iusto similique ex molestiae cupiditate eum. Quas exercitationem ea quidem recusandae fugiat velit cupiditate aut perspiciatis ut pariatur rerum, natus necessitatibus officiis est blanditiis ipsam molestias, officia dolorum. Omnis quos molestias minus voluptates ex accusantium explicabo distinctio asperiores officia assumenda, nihil recusandae dignissimos dicta animi deleniti? Animi hic natus tenetur nulla earum voluptatum iure possimus exercitationem adipisci repellendus doloribus est quibusdam, consectetur, voluptatibus architecto soluta.\r\n       Fugit consequuntur minima dolor, beatae provident numquam ipsam asperiores voluptates rem aperiam eaque eum pariatur tempora similique exercitationem excepturi inventore? Error culpa odit cum iste, provident sequi iure facere incidunt ipsum quod praesentium repellendus itaque reiciendis. Et doloribus illum odit corporis officiis nemo earum dicta sint optio voluptate possimus dignissimos magnam, aperiam temporibus eaque, quos ea ducimus voluptatem qui aliquam. Quae, ipsum reprehenderit. Beatae sequi veritatis a facere rem eum minus fugit! Ducimus, autem cumque vero unde suscipit rerum? Laudantium molestias obcaecati assumenda, consequuntur distinctio excepturi! Cumque culpa dolores nam sunt quos omnis consectetur pariatur officiis optio eveniet, ipsa fugiat, doloremque placeat. Doloribus laudantium velit, quis aliquid vero itaque omnis non veniam asperiores sequi ad optio quam repudiandae magnam quasi voluptatibus necessitatibus corporis accusamus explicabo enim. Autem atque maiores quisquam voluptatibus. Voluptatum libero quas tempore. \r\n\r\n\r\nEst vitae ad expedita. Nam vitae quaerat iusto alias repellendus? Inventore dolorem rerum perferendis! Eos totam aut, deleniti quo reiciendis est nemo beatae expedita molestias, autem incidunt mollitia sint natus consequatur aperiam amet provident laudantium, placeat quaerat non maiores. Dolorem labore, nesciunt aperiam quae architecto corporis fugit, impedit nisi veniam provident recusandae placeat at inventore ea accusantium, vel consequatur autem atque eius perferendis hic modi maxime. \r\n\r\n\r\nRem quod officiis voluptates, nobis commodi dolorum modi, velit iusto adipisci quo, ratione nisi dignissimos ipsum. Illum, possimus! Reiciendis consectetur ad ab atque.', 'uploads/news/180206_women_jeans_V1.jpg', '2020-07-23 21:40:24', 1),
(3, '3rd news title goes here', 'Here comes the 3rd body of the news comes here', 'uploads/news/013118_womens_department_page_hero_desk_to_dinner_dresses.jpg', '2020-07-23 06:57:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `web_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `github_link` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `client` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `screenshot` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `web_url`, `github_link`, `type`, `client`, `description`, `screenshot`, `date`, `deleted`) VALUES
(1, 'My Portfolio', 'www.myportfolio.com', 'github.com/solomon1111/myportfolio', 'prod', 'myself', 'nicer description', 'portfolio photos prime', '2020-07-15 06:31:51', 0),
(2, 'school system app', 'www.ssap.tech', 'github.com/solomon1111/ssap', 'proj', 'binary hills', 'a big description comes here', 'screenshots', '2020-07-15 06:39:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `social_network` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pix` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tools` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `acl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `username`, `password`, `email`, `social_network`, `phone`, `state`, `address`, `pix`, `skills`, `tools`, `description`, `acl`, `deleted`) VALUES
(1, 'solomon', 'king', 'solomon', '$2y$10$3eqFb6756aeqxqDEcijYZexA9xoDIQ4OOvWiKxT6et2nBi089ktvS', 'solomon@gmail.com', NULL, '123 57867 56', 'Enugu', 'Enugu Ngwo', '', 'software Developer', 'HTML5, CSS3, JAVASCRIPT, ANGULER-8, REACT, PHP, PHP OOP, LARAVEL, MYSQL, MONGO-DB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis dolores dolorum possimus esse, delectus repellat voluptatibus quam, ex doloribus neque aut assumenda pariatur nam architecto aliquam, tempora reprehenderit maiores? Possimus autem repellendus sit eum vel accusantium adipisci ad vero quidem? Exercitationem sapiente perferendis nesciunt, corporis non quam distinctio dicta deserunt quisquam harum, magnam veniam libero totam asperiores eum deleniti, vero praesentium suscipit!', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reachme`
--

CREATE TABLE `reachme` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reachme`
--

INSERT INTO `reachme` (`id`, `fname`, `lname`, `email`, `subject`, `body`) VALUES
(1, 'emaka nwanna', 'nwanne sam-nwanna', 'nwanna@gmail.com', 'Just To Contact You', 'The body of the contact comes here'),
(2, 'eret', 'yutyrer', 'tyrgfer@gmail.com', 'ertyy', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis, placeat quasi temporibus culpa quae voluptatibus rem consequuntur ab nesciunt officia eaque labore delectus quaerat hic tempora veniam repudiandae, aliquam doloremque quod fuga quos nostrum distinctio odit consequatur? Esse, minima commodi ut quas veniam sequi aspernatur tempora saepe rerum optio quod perferendis distinctio inventore impedit dolor eligendi. Magnam nulla velit iure minus quo eligendi libero dolorum hic, rem quos laboriosam asperiores amet nisi unde, perferendis rerum. Sunt similique in officiis perferendis ipsam quas fugit eaque quaerat, fuga itaque eum velit molestias blanditiis molestiae provident labore. Animi id illo ratione hic repellendus magni aut placeat consectetur voluptatem velit eaque corporis doloribus ad, omnis enim asperiores eos fugiat delectus nam quia laudantium reiciendis perferendis. Magni ab voluptas sed, quos aut perferendis possimus assumenda delectus, odio harum quisquam nam aperiam quaerat beatae eius consectetur laudantium, maxime ullam. Sapiente, similique repellat voluptatibus veritatis aspernatur in vel maiores nostrum magnam molestiae est repudiandae architecto cumque ullam maxime molestias. Itaque, voluptatum id? Voluptas, distinctio atque quibusdam id omnis laboriosam, fugiat esse ullam nihil magnam blanditiis? Eligendi dolore laboriosam, excepturi, nostrum alias autem corporis voluptatum temporibus maiores quo accusamus odit eum? Itaque ipsum quos consequuntur voluptate cumque unde.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `date`, `deleted`) VALUES
(1, 'title', 'Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for brought fish forth', '2020-07-24 05:41:56', 0),
(2, '2nd title', 'Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for brought fish forth', '2020-07-24 05:42:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(6) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reachme`
--
ALTER TABLE `reachme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reachme`
--
ALTER TABLE `reachme`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
