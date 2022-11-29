-- Adminer 4.8.1 MySQL 5.5.5-10.4.21-MariaDB-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1,	'I have transform your ideas into remarkable digital products.',	'20+ Years Experience In this game, Means Product Designing',	'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',	'And will talk in contemptuous tones of her going, though she knew that were of the game, feeling very glad to do with you. Mind now!\' The poor little thing was to eat her up in a moment: she looked.I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',	'upload/home_about/1668353726.png',	'2022-11-13 14:13:22',	'2022-11-13 15:35:27'),
(2,	'Prof.',	'Laborum sit occaecati culpa ipsum quaerat maxime.',	'Nihil non consectetur commodi dignissimos ea aut et. Dicta officiis perferendis omnis cumque. Officia totam mollitia labore facilis sed ut nemo.',	'IS that to be a grin, and she said aloud. \'I must be a grin, and she jumped up and bawled out, \"He\'s murdering the time! Off with his head!\' she said, as politely as she could not help thinking.',	NULL,	'2022-11-13 14:13:22',	'2022-11-13 14:13:22'),
(3,	'Dr.',	'Ea eius adipisci quia fuga.',	'Consequatur consequatur et est illo molestiae dolorem. Cum esse nam ipsa iste. Omnis vero debitis excepturi aspernatur maxime vel ut.',	'It\'s always six o\'clock now.\' A bright idea came into her face. \'Wake up, Alice dear!\' said her sister; \'Why, what a Gryphon is, look at the frontispiece if you were down here with me! There are no.',	NULL,	'2022-11-13 14:13:22',	'2022-11-13 14:13:22'),
(4,	'Miss',	'Et neque velit sint non.',	'Ratione soluta ducimus eius maiores cupiditate rerum. Et odit animi et quis consequatur eveniet quaerat. Dolorum voluptas ipsam voluptate assumenda libero repellat.',	'Queen. \'Can you play croquet?\' The soldiers were silent, and looked along the passage into the garden. Then she went back to the fifth bend, I think?\' \'I had NOT!\' cried the Mock Turtle sighed.',	NULL,	'2022-11-13 14:13:22',	'2022-11-13 14:13:22'),
(5,	'Mr.',	'Consequatur modi corporis vero dolore nihil sapiente.',	'Vel magnam quo omnis repellendus voluptatem quae. Sapiente perspiciatis animi corporis minus mollitia voluptate rerum. Quisquam velit sequi corrupti et.',	'The pepper when he sneezes; For he can EVEN finish, if he were trying to fix on one, the cook was busily stirring the soup, and seemed not to be found: all she could remember about ravens and.',	NULL,	'2022-11-13 14:13:22',	'2022-11-13 14:13:22');

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(7,	'1',	'Facebook the global communication medium.',	'upload/blog_image/2022_11_20_0940_.png',	'facebook,php,python,react',	'<div class=\"wWOJcd\" tabindex=\"0\" role=\"button\" aria-controls=\"exacc_tfJ5Y63OJPnhseMPsZWPiAE_8\" aria-expanded=\"true\" aria-labelledby=\"exacc_tfJ5Y63OJPnhseMPsZWPiAE_6\">\r\n<div id=\"exacc_tfJ5Y63OJPnhseMPsZWPiAE_6\" class=\"iDjcJe IX9Lgd wwB5gf\" aria-hidden=\"true\">What is Facebook explain?</div>\r\n<div class=\"YsGUOb\">&nbsp;</div>\r\n<div class=\"r21Kzd\" data-hveid=\"CBoQAQ\" data-ved=\"2ahUKEwjt_M29uLz7AhX5cGwGHbHKAxEQuk56BAgaEAE\">&nbsp;</div>\r\n</div>\r\n<div id=\"exacc_tfJ5Y63OJPnhseMPsZWPiAE_8\" class=\"MBtdbb\" data-ved=\"2ahUKEwjt_M29uLz7AhX5cGwGHbHKAxEQ7NUEegQIGhAD\">\r\n<div class=\"ymu2Hb\">\r\n<div id=\"_tfJ5Y63OJPnhseMPsZWPiAE_42\" class=\"t0bRye r2fjmd\" data-hveid=\"CBoQBA\" data-ved=\"2ahUKEwjt_M29uLz7AhX5cGwGHbHKAxEQu04oAHoECBoQBA\">\r\n<div id=\"tfJ5Y63OJPnhseMPsZWPiAE__11\">\r\n<div class=\"wDYxhc\" data-md=\"61\">\r\n<div class=\"LGOjhe\" role=\"heading\" data-attrid=\"wa:/description\" aria-level=\"3\" data-hveid=\"CBQQAA\"><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\">Facebook is&nbsp;<strong>a website which allows users, who sign-up for free profiles, to connect with friends, work colleagues or people they don\'t know, online</strong>. It allows users to share pictures, music, videos, and articles, as well as their own thoughts and opinions with however many people they like.</span></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>',	'2022-11-20 09:40:18',	NULL),
(8,	'2',	'Larvel is the most popular framework for web development',	'upload/blog_image/2022_11_20_0941_.png',	'laravel,php,mysql',	'<p>Laravel is&nbsp;<strong>a free and open-source PHP web framework</strong>, created by Taylor Otwell and intended for the development of web applications following the model&ndash;view&ndash;controller (MVC) architectural pattern and based on Symfony.</p>',	'2022-11-20 09:41:22',	NULL),
(9,	'3',	'React JS is pretty easy to learn for the global communication medium.',	'upload/blog_image/2022_11_20_0942_.png',	'react,js,jquery',	'<p>রিঅ্যাক্ট হল একটি বিনামূল্যের এবং ওপেন-সোর্স ফ্রন্ট-এন্ড জাভাস্ক্রিপ্ট লাইব্রেরি। যাতে UI উপাদানের উপর ভিত্তি করে ইউজার ইন্টারফেস তৈরি করা যায়। এটি মেটা এবং স্বতন্ত্র বিকাশকারী এবং কোম্পানিগুলির একটি সম্প্রদায় দ্বারা রক্ষণাবেক্ষণ করা হয়।</p>',	'2022-11-20 09:42:16',	NULL),
(10,	'4',	'VUE JS is pretty easy to learn for the global communication medium.',	'upload/blog_image/2022_11_20_0943_.jpg',	'vue,js,jquery',	'<p>Vue (pronounced /vjuː/, like view) is&nbsp;<strong>a JavaScript framework for building user interfaces</strong>. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.</p>',	'2022-11-20 09:43:10',	NULL),
(11,	'6',	'testtesttesttesttesttesttesttesttesttest',	'upload/blog_image/2022_11_20_0943_.png',	'test,te,tst',	'<p>Vue (pronounced /vjuː/, like view) is&nbsp;<strong>a JavaScript framework for building user interfaces</strong>. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.</p>',	'2022-11-20 09:43:45',	NULL);

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE `blog_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1,	'Facebook',	'2022-11-18 12:34:05',	NULL),
(2,	'Laravel',	'2022-11-18 12:34:49',	NULL),
(3,	'React JS',	'2022-11-18 12:34:55',	'2022-11-18 12:35:40'),
(4,	'Vue JS',	'2022-11-18 12:35:19',	'2022-11-18 12:35:47'),
(6,	'test',	'2022-11-20 09:34:07',	NULL);

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1,	'ROWJATUL JANNAT',	'amya28@schumm.com',	'developer needed',	'+09232343232',	'i need a full stack developer.',	'2022-11-23 13:26:35',	NULL);

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `footers`;
CREATE TABLE `footers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `footers` (`id`, `contact_number`, `short_description`, `address`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(6,	'1-864-967-5356',	'Aut ut quisquam officiis nam ut. Quo nihil eaque et. Culpa debitis sunt est quidem adipisci dignissimos rerum.',	'Germany',	'genesis.leuschke@spinka.com',	'https://www.facebook.com/',	'https://twitter.com/',	'kassulke.com',	'2022-11-20 13:10:09',	'2022-11-20 13:10:09'),
(7,	'+1-743-597-7506',	'Eligendi eius nostrum et. In ut molestiae temporibus velit est qui. Sunt magni quia cupiditate quis cum et totam. Soluta ab voluptate animi nemo perferendis. Beatae consequuntur earum optio quia.',	'Sweden',	'billie63@spinka.com',	'https://www.facebook.com/',	'https://twitter.com/',	'bins.org',	'2022-11-20 13:10:09',	'2022-11-20 13:10:09'),
(8,	'1-928-881-2263',	'Eveniet delectus cum facere saepe voluptatibus soluta. Qui exercitationem similique adipisci sed quam fugiat ut. Voluptatibus tempora dolor voluptatem sint corporis impedit commodi.',	'Iceland',	'emilio.rutherford@schulist.com',	'https://www.facebook.com/',	'https://twitter.com/',	'pouros.com',	'2022-11-20 13:10:09',	'2022-11-20 13:10:09'),
(9,	'+16507101935',	'Asperiores sed autem velit ab. Et facere corporis mollitia deserunt vero architecto non.',	'Lithuania',	'trey57@jerde.com',	'https://www.facebook.com/',	'https://twitter.com/',	'denesik.info',	'2022-11-20 13:10:09',	'2022-11-20 13:10:09'),
(10,	'+1 (952) 756-7736',	'Minima est eos corporis provident. Optio voluptatibus adipisci ab reprehenderit assumenda dolorem. Eius inventore maxime enim in ut dolore. Expedita odio excepturi rerum necessitatibus.',	'Macedonia',	'genoveva.hartmann@marquardt.com',	'https://www.facebook.com/',	'https://twitter.com/',	'wolf.com',	'2022-11-20 13:10:09',	'2022-11-20 13:10:09');

DROP TABLE IF EXISTS `home_slides`;
CREATE TABLE `home_slides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_slide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1,	'I will give you Best Product in the shortest time.',	'I\'m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences',	'upload/home_slide/1749308988248521.png',	'https://www.youtube.com/watch?v=XHOmBV4js_E',	'2022-11-12 14:58:06',	'2022-11-12 16:37:34'),
(2,	'Mrs.',	'At earum et suscipit est.',	NULL,	NULL,	'2022-11-12 14:58:06',	'2022-11-12 14:58:06'),
(3,	'Miss',	'Accusamus nihil autem quia ratione.',	NULL,	NULL,	'2022-11-12 14:58:06',	'2022-11-12 14:58:06'),
(4,	'Dr.',	'Tenetur rerum est sapiente debitis maiores.',	NULL,	NULL,	'2022-11-12 14:58:06',	'2022-11-12 14:58:06'),
(5,	'Dr.',	'Ea nisi aut autem harum et.',	NULL,	NULL,	'2022-11-12 14:58:06',	'2022-11-12 14:58:06');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5,	'2014_10_12_000000_create_users_table',	1),
(6,	'2014_10_12_100000_create_password_resets_table',	1),
(7,	'2019_08_19_000000_create_failed_jobs_table',	1),
(8,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(9,	'2022_11_12_142424_create_home_slides_table',	2),
(11,	'2022_11_13_140050_create_abouts_table',	3),
(12,	'2022_11_14_130626_create_multi_images_table',	4),
(14,	'2022_11_15_124313_create_portfolios_table',	5),
(15,	'2022_11_18_081524_create_blog_categories_table',	6),
(16,	'2022_11_18_122035_create_blogs_table',	7),
(18,	'2022_11_20_100713_create_footers_table',	8),
(19,	'2022_11_23_122211_create_contacts_table',	9);

DROP TABLE IF EXISTS `multi_images`;
CREATE TABLE `multi_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `multi_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(8,	'upload/multi_image/1749485939628178.png',	'2022-11-14 15:30:07',	NULL),
(9,	'upload/multi_image/1749485939694385.png',	'2022-11-14 15:30:07',	NULL),
(10,	'upload/multi_image/1749485939750442.png',	'2022-11-14 15:30:07',	NULL),
(11,	'upload/multi_image/1749488451364123.png',	'2022-11-14 16:10:02',	NULL),
(12,	'upload/multi_image/1749488451508313.png',	'2022-11-14 16:10:03',	NULL),
(13,	'upload/multi_image/1749488451551643.jpg',	'2022-11-14 16:10:03',	NULL),
(14,	'upload/multi_image/1749488451679934.jpg',	'2022-11-14 16:10:03',	NULL),
(15,	'upload/multi_image/1749488451718395.jpg',	'2022-11-14 16:10:03',	NULL),
(16,	'upload/multi_image/1749488451763319.jpg',	'2022-11-14 16:10:03',	NULL),
(17,	'upload/multi_image/1749488451818487.png',	'2022-11-14 16:10:03',	NULL);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE `portfolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_description`, `portfolio_image`, `created_at`, `updated_at`) VALUES
(1,	'Laravel',	'Laravel 8',	'<p>Pariatur corporis placeat quo magni est commodi porro. Modi libero recusandae suscipit iure nam. Ea sunt et sapiente maxime architecto quas accusamus et.Pariatur corporis placeat quo magni est commodi porro. Modi libero recusandae suscipit iure nam. Ea sunt et sapiente maxime architecto quas accusamus et.</p>',	'upload/portfolio_image/1668601512.png',	'2022-11-15 12:57:17',	'2022-11-16 15:45:36'),
(2,	'Miss Peggie Quitzon Jr.',	'Prof.',	'<p>Facere veniam rerum voluptas facilis rerum modi. Consequatur ea nihil nam eum iure qui officia. Maiores itaque et optio dolor tempore. Maiores exercitationem ex beatae impedit rerum.</p>',	'upload/portfolio_image/1668601607.png',	'2022-11-15 12:57:17',	'2022-11-16 12:26:48'),
(3,	'Laisha Grady',	'Miss',	'<p>Dolorem et adipisci perferendis ipsa sint. Nulla omnis non magnam. Mollitia veritatis ex sed qui corrupti iusto. Similique maxime enim atque ratione quasi omnis.</p>',	'upload/portfolio_image/1668601658.png',	'2022-11-15 12:57:17',	'2022-11-16 12:27:38'),
(4,	'Monte Leffler',	'Prof.',	'<p>At commodi velit doloremque incidunt nulla blanditiis quasi. Ut praesentium autem omnis beatae commodi aut rerum. Corporis corporis ut provident quisquam voluptatum.</p>',	'upload/portfolio_image/1668609781.png',	'2022-11-15 12:57:17',	'2022-11-16 14:43:02'),
(6,	'Achieving',	'Achieving effectiveness',	'<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>',	'upload/portfolio_image/1668537584.png',	'2022-11-15 18:39:45',	NULL),
(7,	'Rixelda',	'Rixelda - 24 hours Control room landing page',	'<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>',	'upload/portfolio_image/1668537751.png',	'2022-11-15 18:42:31',	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `username`, `profile_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Jamil',	'jamilpk',	'2022_11_11_1226u3.png',	'jamil@gmail.com',	'2022-11-07 17:20:30',	'$2y$10$097ICaoX1ujbE3mnPVxkJeXuuu4DISenOu.XsiPHofB5nKKByUIMC',	'm4X4rPFUfc8TJ1NPMZhruhq7StYPUtEjak7VHBjo1pbvsvzhcFanEpswk7r7',	'2022-11-07 17:20:10',	'2022-11-11 14:09:58'),
(2,	'Ashraf',	'ashraf5',	'2022_11_11_1214u2.png',	'ashraf@gmail.com',	'2022-11-09 13:39:19',	'$2y$10$qPTpvocHgKHJQit1160l4.WdoszxVB58UmOQ0R3cYhNC.ortt1tfy',	'DckAIB9bvljsuhKtf4Otdpt06s4PTBnHysmLbs4kCyDYp1FR2rwVwLgtBLjg',	'2022-11-09 13:38:53',	'2022-11-11 14:10:48'),
(3,	'samim',	'samim5',	'2022_11_11_1401u6.jpg',	'samim@gmail.com',	'2022-11-11 14:00:51',	'$2y$10$nxuSoSEu8P7gRM75sYtxlu/1Ak.gICPUFqU2OM33drTbXV1926wdG',	'4aKmxsnZ71hVTCXSY7fEnbMTiahBohNg0sNUtvNI2JJVAzG0d07o4QsTpx0H',	'2022-11-11 14:00:13',	'2022-11-11 14:11:30'),
(4,	'rakib',	'rakib2',	'2022_11_11_1406u5.png',	'rakib@gmail.com',	'2022-11-11 14:05:07',	'$2y$10$VYZ19D0w/xU4iV3H5FQbr.nM/8WCDF7AxWGvZdFuWPydx6rLdivYe',	NULL,	'2022-11-11 14:04:48',	'2022-11-11 14:06:50');

-- 2022-11-29 12:58:47
