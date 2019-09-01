-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2019 pada 07.20
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_news`
--

CREATE TABLE `category_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_news`
--

INSERT INTO `category_news` (`id`, `category`, `created_at`, `updated_at`) VALUES
(2, 'news', NULL, NULL),
(3, 'Launching', '2019-05-21 01:20:10', '2019-05-21 01:28:08'),
(4, 'Event', '2019-05-21 02:10:03', '2019-05-21 02:10:03'),
(5, 'Publication', '2019-05-21 02:10:11', '2019-05-28 18:47:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `topic`, `messages`, `read_count`, `created_at`, `updated_at`) VALUES
(12, 'samuel', 'samuel@gmail.com', 'partnership', 'Lfficiis atque deserunt quas et recusandae possimus adipisci aliquam tempora cumque.', 1, '2019-05-21 23:57:02', '2019-06-24 23:48:56'),
(16, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', 'Hello there !', 1, '2019-06-19 20:30:52', '2019-06-25 03:10:17'),
(25, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'partnership', 'cek', 1, '2019-06-20 07:32:50', '2019-08-06 07:49:15'),
(26, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'partnership', 'cek', 1, '2019-06-20 07:33:15', '2019-08-06 07:49:23'),
(27, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'partnership', 'cek', 1, '2019-06-20 07:34:02', '2019-08-06 07:49:11'),
(28, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'partnership', 'cek', 1, '2019-06-20 07:34:11', '2019-08-06 07:49:41'),
(30, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', 'cek', 1, '2019-06-20 07:37:35', '2019-06-21 00:14:17'),
(31, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', 'cek', 1, '2019-06-20 07:37:43', '2019-06-21 00:14:17'),
(32, 'Imam Firmansyah', 'imam@imam.com', 'career', 'Hello there !', 1, '2019-06-20 20:16:49', '2019-06-21 00:14:16'),
(33, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', 'jaja', 1, '2019-06-20 20:41:29', '2019-06-21 00:14:16'),
(35, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', ',a', 1, '2019-06-20 20:42:29', '2019-06-24 21:57:02'),
(36, 'Muhammad Muntasir', 'muhmunt@gmail.com', 'career', 'm', 1, '2019-06-20 20:53:10', '2019-06-24 21:57:04'),
(37, 'agam', 'muhmunt@gmail.com', 'career', 'agam gatenf', 1, '2019-06-24 21:56:37', '2019-06-24 23:43:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `highlights`
--

CREATE TABLE `highlights` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `highlights`
--

INSERT INTO `highlights` (`id`, `category`, `style`, `text_style`, `button_style`, `image`, `news_id`, `status`, `link`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'News', 'right', 'black', 'white', '1558508745_5ce4f4c9cfb3c.jpg', 5, 1, NULL, 'World\'s First AR-VR Partnership Store Networks', '<p>Alfamind is a project that has been developed by Mindstores with Alfamart, which targets Indonesian society to become entrepreneurs by having their own virtual store that is easy to operate with its reasonable capital through smartphones. Following its successful soft launch in 2016, Alfamind has been officially launched as Alfamart&#39;s virtual retail store mobile app powered by MindStore&#39;s 3D AR/VR technology. The event took place at Aryaduta Hotel Jakarta on February 28th and was attended by The Minister of Trade of Indonesia, The Minister of Cooperatives and Small and Medium Enterprises of Indonesia, Alfamind&#39;s store owners, suppliers, and partners.</p>', '2019-05-23 00:05:45', '2019-06-18 19:42:57'),
(5, 'News', 'right', 'black', 'black', '1558509221_5ce4f6a503330.jpg', 5, 1, NULL, 'World\'s First AR-VR Partnership Store Network', '<p>Alfamind is a project that has been developed by Mindstores with Alfamart, which targets Indonesian society to become entrepreneurs by having their own virtual store that is easy to operate with its reasonable capital through smartphones. Following its successful soft launch in 2016, Alfamind has been officially launched as Alfamart&#39;s virtual retail store mobile app powered by MindStore&#39;s 3D AR/VR technology. The event took place at Aryaduta Hotel Jakarta on February 28th and was attended by The Minister of Trade of Indonesia, The Minister of Cooperatives and Small and Medium Enterprises of Indonesia, Alfamind&#39;s store owners, suppliers, and partners.</p>', '2019-05-22 00:13:41', '2019-06-18 19:43:06'),
(6, 'News', 'right', 'black', 'black', '1560738579_5d06fb13b7c1f.jpg', 5, 1, 'www.kimiafarma.com/mediv', 'World\'s First AR-VR Partnership Store Network', '<p>Alfamind is a project that has been developed by Mindstores with Alfamart, which targets Indonesian society to become entrepreneurs by having their own virtual store that is easy to operate with its reasonable capital through smartphones. Following its successful soft launch in 2016, Alfamind has been officially launched as Alfamart&#39;s virtual retail store mobile app powered by MindStore&#39;s 3D AR/VR technology. The event took place at Aryaduta Hotel Jakarta on February 28th and was attended by The Minister of Trade of Indonesia, The Minister of Cooperatives and Small and Medium Enterprises of Indonesia, Alfamind&#39;s store owners, suppliers, and partners.</p>', '2019-06-16 19:29:39', '2019-06-18 20:24:27'),
(8, 'News', 'right', 'black', 'white', '1560919010_5d09bbe227582.jpg', 5, 1, 'www.google.com', 'World\'s First AR-VR Partnership Store Network', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sequi temporibus itaque? Eos rerum officiis eligendi vel atque laborum, et numquam sapiente, fuga omnis repellendus hic ducimus, corrupti nulla? Adipisci.</p>', '2019-06-18 21:36:50', '2019-08-28 19:30:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `month` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `slug`, `division`, `location`, `year`, `status`, `month`, `description`, `requirement`, `visit_count`, `created_at`, `updated_at`) VALUES
(2, 'Unity Front-End Developer', 'unity-front-developer', 'Programmer', 'Jakarta', 2019, 1, 6, '<p>Unity Front-Developer</p>', '<p><strong>1.</strong>&nbsp;Proficient in one of this framework/engine: React.js, React Native, Android Studio, Unity3D.<br />\r\n<strong>2.</strong>&nbsp;Proven working experience in full lifecycle front-end development.<br />\r\n<strong>3.</strong>&nbsp;Hands on experience primarily with javascript or other programming languages (Java, C#, C++, etc).<br />\r\n<strong>4.</strong>&nbsp;High level knowledge of APIS and libraries.<br />\r\n<strong>5.</strong>&nbsp;Expert in one or more programming specialties (artificial intelligence, 3D Rendering, 3D animation, &nbsp;&nbsp;&nbsp;&nbsp;physics, networking, or audio).<br />\r\n<strong>6.</strong>&nbsp;Up-to-date with the latest trends, techniques, best practices and technologies.<br />\r\n<strong>7.</strong>&nbsp;Ability to solve problems creatively and effectively.</p>', 1, '2019-05-21 20:17:42', '2019-06-18 19:24:45'),
(3, 'Front-End Developer', 'front-end-developer', 'Programmer', 'Jakarta', 2019, 1, 6, '<p>Front-End Developer</p>', '<p><strong>1.</strong>&nbsp;Bachelor degree in Computer Science or relevant field.<br />\r\n<strong>2.</strong>&nbsp;Proven work experience as a Front-end developer.<br />\r\n<strong>3.</strong>&nbsp;Hands on experience with markup languages.<br />\r\n<strong>4.</strong>&nbsp;Experience with JavaScript, CSS and jQuery.<br />\r\n<strong>5.</strong>&nbsp;Familiarity with browser testing and debugging.<br />\r\n<strong>6.</strong>&nbsp;In-depth understanding of the entire web development process (design, development and deployment).<br />\r\n<strong>7.</strong>&nbsp;Understanding of layout aesthetics.<br />\r\n<strong>8.</strong>&nbsp;Knowledge of SEO principles.<br />\r\n<strong>9.</strong>&nbsp;Familiarity with software like Adobe Suite, Photoshop and content management systems.<br />\r\n<strong>10.</strong>&nbsp;An ability to perform well in a fast-paced environment.<br />\r\n<strong>11.</strong>&nbsp;Excellent analytical and multitasking skills.</p>', 1, '2019-05-21 20:18:18', '2019-06-18 19:25:26'),
(4, 'Python Back-End Developer', 'python-back-end-developer', 'Programmer', 'Jakarta', 2019, 1, 6, '<p>Python Back-End Developer</p>', '<p><strong>1.</strong>&nbsp;Work experience as a Python Developer.<br />\r\n<strong>2.</strong>&nbsp;Expertise in at least one popular Python framework (like Django, Flask or Pyramid).<br />\r\n<strong>3.</strong>&nbsp;Knowledge of object-relational mapping (ORM).<br />\r\n<strong>4.</strong>&nbsp;Familiarity with front-end technologies (like JavaScript and HTML5).<br />\r\n<strong>5.</strong>&nbsp;Team spirit.<br />\r\n<strong>6.</strong>&nbsp;Good problem-solving skills.</p>', 0, '2019-05-21 20:19:12', '2019-06-18 19:26:02'),
(5, 'Back-End Developer', 'back-end-developer', 'Programmer', 'Jakarta', 2019, 1, 6, '<p>Back-End Developer</p>', '<p><strong>1.</strong>&nbsp;Fluency or understanding of specific languages, such as Java, PHP and operating systems may be &nbsp;&nbsp;&nbsp;&nbsp;required.<br />\r\n<strong>2.</strong>&nbsp;Strong understanding of the web development cycle and programming techniques and tools.<br />\r\n<strong>3.</strong>&nbsp;Focus on efficiency, user experience, and process improvement.<br />\r\n<strong>4.</strong>&nbsp;Excellent project and time management skills.<br />\r\n<strong>5.</strong>&nbsp;Strong problem solving and verbal and written communication skills.<br />\r\n<strong>6.</strong>&nbsp;Ability to work independently or with a group.<br />\r\n<strong>7.</strong>&nbsp;Willingness to sit at desk for extended periods.<br />\r\n<strong>8.</strong>&nbsp;Expert in Laravel and Restful API.</p>', 6, '2019-05-21 20:19:46', '2019-06-18 19:26:39'),
(7, 'Web Developer', 'web-developer', 'Programmer', 'Jakarta', 2019, 1, 6, '<p>Web Developer</p>', '<p><strong>1.</strong>&nbsp;Proven working experience in web programming.<br />\r\n<strong>2.</strong>&nbsp;Top-notch programming skills and in-depth knowledge of modern HTML/CSS.<br />\r\n<strong>3.</strong>&nbsp;Familiarity with at least one of the following programming languages: PHP, ASP.NET, Javascript or Ruby &nbsp;&nbsp;&nbsp;&nbsp;on Rails.<br />\r\n<strong>4.</strong>&nbsp;A solid understanding of how web applications work including security, session management, and best &nbsp;&nbsp;&nbsp;&nbsp;development practices.<br />\r\n<strong>5.</strong>&nbsp;Adequate knowledge of relational database systems, Object Oriented Programming and web application &nbsp;&nbsp;&nbsp;&nbsp;development.<br />\r\n<strong>6.</strong>&nbsp;Hands-on experience with network diagnostics, network analytics tools.<br />\r\n<strong>7.</strong>&nbsp;Basic knowledge of Search Engine Optimization process.<br />\r\n<strong>8.</strong>&nbsp;Aggressive problem diagnosis and creative problem solving skills.<br />\r\n<strong>9.</strong>&nbsp;Aggressive problem diagnosis and creative problem solving skills.<br />\r\n<strong>10.</strong>&nbsp;Strong organizational skills to juggle multiple tasks within the constraints of timelines.<br />\r\n<strong>11.</strong>&nbsp;Ability to work and thrive in a fast-paced environment, learn rapidly and master diverse web technologies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and techniques.</p>', 1, '2019-06-16 19:50:40', '2019-06-18 19:27:26'),
(8, 'Technical Writer', 'technical-writer', 'Business', 'Jakarta', 2019, 1, 6, '<p>The new definition starts to sound a lot like the definition of business writing.\r\n\r\nBe warned, technical writing is not exactly the same as business writing.\r\n\r\nBusiness writing is a broader category. It can be argued that technical writing falls under business writing. It deals with many of the same topics and documents.\r\n\r\nYet the process and outcomes of technical writing are unique. In the rest of this post, we will explore exactly what a technical writer does. We will review examples of technical writing and what you need to do to become a professional technical writer.</p>', '<p><strong>1.</strong>&nbsp;University degree in Computer Science, Engineering or equivalent preferred.<br />\r\n<strong>2.</strong>&nbsp;Proven working experience in technical writing of software documentation.<br />\r\n<strong>3.</strong>&nbsp;Ability to deliver high quality documentation - Paying attention to detail.<br />\r\n<strong>4.</strong>&nbsp;Ability to quickly grasp complex technical concepts and make them easily understandable in text and &nbsp;&nbsp;&nbsp;&nbsp;pictures.<br />\r\n<strong>5.</strong>&nbsp;Basic familiarity with the SDLC and software development.<br />\r\n<strong>6.</strong>&nbsp;Excellent written skills.<br />\r\n<strong>7.</strong>&nbsp;Strong working knowledge of Microsoft Office.</p>', 0, '2019-06-18 19:27:48', '2019-06-18 19:27:51'),
(9, 'Content Manager', 'content-manager', 'Creative', 'Jakarta', 2019, 1, 6, '<p>A content manager is someone who oversees the content presented on websites and blogs, and may also be responsible for creating, editing, posting, updating, and occasionally cleaning up outdated content. There are some content managers that focus strictly on content, and others that only focus on the management of the site.\r\n\r\nRegardless, the main responsibility of the content manager is to keep the information displayed on the site fresh, informative, and appealing. Their \'content strategy\' is to create, write and manage content so as to achieve business goals and be a voice for the company. It takes creativity, leadership skills and of course, writing ability, to produce and publish good content.</p>', '<p><strong>1.</strong>&nbsp;Proven work experience as a Content manager.<br />\r\n<strong>2.</strong>&nbsp;Hands on experience with MS Office.<br />\r\n<strong>3.</strong>&nbsp;Basic technical knowledge of HTML and web publishing.<br />\r\n<strong>4.</strong>&nbsp;Knowledge of SEO and web traffic metrics.<br />\r\n<strong>5.</strong>&nbsp;Familiarity with social media.<br />\r\n<strong>6.</strong>&nbsp;Excellent writing skills in English.<br />\r\n<strong>7.</strong>&nbsp;Attention to detail.<br />\r\n<strong>8.</strong>&nbsp;Good organizational and time-management skills.<br />\r\n<strong>9.</strong>&nbsp;Bachelor degree in Journalism, Marketing or relevant field.</p>', 0, '2019-06-18 19:28:18', '2019-06-18 19:28:25'),
(10, '3D Artist', '3d-artist', 'Creative', 'Jakarta', 2019, 1, 6, '<p>The term architect is often interpreted narrowly as a building designer, is a person involved in planning, designing, and overseeing building construction, whose role is to guide decisions that affect aspects of the building in terms of astetics, culture, or social problems. This definition is less precise because the scope of work of an architect is very broad, ranging from the scope of the interior of the room, the scope of the building, the scope of the complex of buildings, up to the city and regional scope. Therefore, it is more appropriate to define the architect as an expert in the field of architectural science, engineering experts or the built environment.\r\n</p>', '<p><strong>1.</strong>&nbsp;Required Skills: 3DSMax / Maya, Photoshop, Illustrator.<br />\r\n<strong>2.</strong>&nbsp;At least 1 year experience specialized in 3D Illustration.<br />\r\n<strong>3.</strong>&nbsp;Eager to learn, hard-working, work under pressure, and high attention in details.<br />\r\n<strong>4.</strong>&nbsp;Able to make modelling, texturing, rigging, animating, and rendering.<br />\r\n<strong>5.</strong>&nbsp;Good work ethic and pleasant attitude.</p>', 1, '2019-06-18 19:28:47', '2019-06-25 00:09:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_15_040151_create_categories_table', 1),
(4, '2019_04_05_035327_create_contacts_table', 1),
(5, '2019_05_03_022806_create_jobs_table', 1),
(6, '2019_05_08_021706_create_teams_table', 1),
(7, '2019_05_09_021529_create_projects_table', 1),
(8, '2019_05_09_084244_create_highlights_table', 1),
(9, '2019_05_20_094059_create_category_news_table', 1),
(10, '2019_05_20_094322_create_releasers_table', 1),
(11, '2019_05_21_015618_create_news_artikels_table', 1),
(12, '2019_05_21_020033_create_highlights_table', 2),
(13, '2019_06_19_133323_create_works_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_artikels`
--

CREATE TABLE `news_artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `releaser_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `visit_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_artikels`
--

INSERT INTO `news_artikels` (`id`, `category_id`, `releaser_id`, `title`, `foto`, `news_detail`, `writer`, `slug`, `year`, `month`, `visit_count`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'Mediv First Medical Virtual Store', '1558411692_5ce379ac51475.png', '<p>Alfamind is a project that has been developed by Mindstores with Alfamart, which targets Indonesian society to become entrepreneurs by having their own virtual store that is easy to operate with its reasonable capital through smartphones. Following its successful soft launch in 2016, Alfamind has been officially launched as Alfamart&#39;s virtual retail store mobile app powered by MindStore&#39;s 3D AR/VR technology. The event took place at Aryaduta Hotel Jakarta on February 28th and was attended by The Minister of Trade of Indonesia, The Minister of Cooperatives and Small and Medium Enterprises of Indonesia, Alfamind&#39;s store owners, suppliers, and partners.</p>\r\n\r\n<p>Along with the launch of Alfamind Full Version, Alfamart also released the Alfamind Lite Version that can be used in smartphones with lower specifications and provide faster access in serving costumer&#39;s transactions. The purpose of it is to engage more people to become Store Owners regardless of the device&rsquo;s specifications they have. Viendra Primadia as the Digital Business General Manager of Alfamart, said that a Store Owner can earn various benefits, such as obtaining margin sales in every products sold and getting the ease of operational management because it is entirely done by Alfamart. He added, flexibility is also one of Alfamind&rsquo;s plus points since every transaction is not limited by time and place.</p>\r\n\r\n<p>Both the Alfamind Lite Version and Full Version are now available to download on Google PlayStore. For more information about Alfamind and how it works, please visit: https://alfamind.id/.</p>', 'Budi Budiman', 'mediv-first-medical-virtual-store', 2019, 5, 3, '2019-05-20 21:08:12', '2019-05-22 00:32:16'),
(7, 2, 1, 'DISRUPTO: THE MOVEMENT TO DISRUPT & TRANSFORM THE NATION', '1560878139_.png', '<p>Founded by WIR Group, DISRUPTO is exclusively for those who believe that small stones can defeat giants. This is the drive to disrupt complacency and normalcy in this nation; a movement to disrupt and transform the nation through talks, festival, and immersive experiences.<br />\r\n<br />\r\nDISRUPTO is started by individuals who believe that the forces of disruption are inevitable, and that they are necessary for societies to move forward. The founders of DISRUPTO are merely catalists to start and harness these disruptions so that they can be channeled to improve the nation. The DISRUPTO experience will happen annually, yet the movement is fluid.. and loud. At all times.</p>', 'Budi Budiman', 'disrupto-the-movement-to-disrupt-transform-the-nation', 2019, 6, 4, '2019-05-21 02:13:15', '2019-06-18 10:15:39'),
(8, 2, 1, 'Daniel Surya Targetkan AR Group Jadi Top 3 Dunia', '1560877776_.png', '<p>Setelah sukses menjadi &ldquo;brand builder&rdquo; dan membangun WIR Group yang bergerak dalam branding, kini tangan dingin Daniel Surya kembali membawa sukses bagi usaha barunya yakni AR Group yang bergerak bidang teknologi augmented reality. AR Group telah memimpin perkembangan augmented reality (AR) hingga ke manca negara dan merupakan bagian dari WIR group. Sejak didirikan tahun 2009, AR Group berhasil mengantongi sejumlah prestasi dunai di antaranya adalah &ldquo;Best AR Campaign 2015 &amp; 2016&rsquo; di Sillicon Valley, Amerika Serikat.</p>\r\n\r\n<p>AR Group dimulai tahun 2009 dengan unit usaha pertama adalah AR&amp;Co. Unit usaha ini berhasil menciptakan aplikasi AR khusus untuk Star Trek, berkenaan dengan 50 tahun kisah fiksi ilmiah tersebut. Kemudian di tahun 2015 AR Group meluncurkan unit usaha kedua yaitu DAV (Digital Avatar) dan tahun 2016 AR Group mendirikan Mindtore sebagai unit usaha ketiga.</p>\r\n\r\n<p>Hingga saat ini AR Group telah membuka kantor perwakilan di 6 negara yaitu Indonesia, Singapura, Amerika Serikat, Spanyol dan Malta. Perushaaan berbasis teknologi asli Indonesia ini juga telah menangani lebih dari 500 proyek yang tersebar di 20 negara yang mayoritas adalah negara-negara eropa dan Asia Tenggara.</p>\r\n\r\n<p>Pada Jumat 21/10/2016 lalu, Daniel bersama seluruh tim dari AR Group &nbsp;meluncurkan teknologi terbarunya untuk Mindstore di Bursa Efek Indonesia. Apa latar belakangnya ? Apakah AR Group direncanakan untuk go public ? Berikut wawancara lengkap reporter SWA Online, Arie Liliyah dengan Daniel Surya dalam acara tersebut :</p>\r\n\r\n<p><strong>Apa latar belakangnya AR Group melakukan launching di Bursa Efek Indonesia ?</strong></p>\r\n\r\n<p>Kenapa kami memilih malakukan peluncuran di sini adalah untuk sosialisasi, agar lebih dikenal lagi, bahwa ada perusahaan teknologi Indonesia yang atas hasil kerja prestasi sudah demikian lama, 7 tahun di luar negeri, membangun situasi bahwa sebenarnya ekuitas Indonesia bisa ada di market kita. Sebab di IDX sendiri belum pernah ada technologi company yang listed.</p>\r\n\r\n<p><strong>Jadi apakah ada rencana AR Grou listing di bursa ?</strong></p>\r\n\r\n<p>Iya, kami memang sedang didekati beberapa bursa saham dari beberapa negara, tetapi prioritas utama akan kami berikan kepada Indonesia. Tetapi itu masih dalam tahap rencana, yang kami lakukan hari ini adalah dalam rangka sosialisasi, bahwa ada perusahaan teknologi asal Indonesia yang sudah mengantongi 5 paten dari luar negeri, dan kami berterima kasih kepada teman-teman di BEI yang telah memfasilitasi, jadi melihatnya BEI sangat responsif untuk perusahaan seperti ini.</p>\r\n\r\n<p><strong>Berarti ketika mulai dijalankan AR Group lebih dahulu menggarap pasar di luar negeri ?</strong></p>\r\n\r\n<p>Iya, seperti itu, sampai sekarang 70 % proyek yang kami kerjakan adalah di luar negeri, Amerika, Eropa, Afrika, Asia jadi ada beberapa proyek di dalam negeri, tapi yang dominan dari luar.</p>\r\n\r\n<p><strong>Bagaimana strateginya sehingga bisa dipercaya oleh klien, terutama di luar negeri ?</strong></p>\r\n\r\n<p>Pertama, harus punya produk yang kuat, dan engine yang kuat untuk augmented reality. Sebab kalau kami bisa diterima di negara-negara yang kuat teknologinya itu artinya kami akan lebih mudah untuk membawa ke negara-negara lain. Kedua, perusahaan kami sudah established bukan startup jadi klien-klien di luar pun jadi lebih percaya.</p>\r\n\r\n<p><strong>Apa pertimbangan utama untuk listed dan atau tidak listed bagi AR Group ?</strong></p>\r\n\r\n<p>Pertama, sederhana saja, kami melihat benchmark, hal ini perting untuk kami pertimbangkan kalau mau listing, apakah di &nbsp;sebuah negara sudah memiliki benchmark atau pun matriks untuk perusahaan teknologi atau perusahaan sejenis kami. Tetapi bukan berarti nggak ada, lalu tidak bisa dijalankan. Kami juga akan melihat dukungan dari stock exchange yang ada di market tersebut. Dan kalau kami lihat saat ini, baru kami perusahaan non listed membuka perdangangan bursa seperi hari ini. Nah, ini pertanda dukungan bagi kami.</p>\r\n\r\n<p><strong>Jika nanti sudah listed, apakah anda optimis sahamnya akan diminati pasar ?</strong></p>\r\n\r\n<p>Semua tergantung dari pembangunan edukasi ke masyarakat, makanya yang kami lakukan sekarang adalah mengenalkan diri dan sosialisasi agar lebih dikenal lagi oleh masyarakat luas, bukan target untuk listing besok hehe... Yang penting bagi kami adalah tangible result, ada hasil nyata yang dirasakan tidak hanya untuk di Indonesia, tapi juga di global market. Sebab investor bisa datang dari mana-mana.</p>\r\n\r\n<p><strong>Jadi berapa lama lagi target AR Group untuk listing di bursa ?</strong></p>\r\n\r\n<p>Kalau kami sih listing itu targetnya bukan dilihat dari berapa lama atau berapa tahun lagi harus listing, tetatpi dilihat dari perkembangan proyeksi bisnis yang kami lakukan. Fokus kami tetap di bisninya, bertumbuh dari tahun ke tahun. Nanti suatu saat ada momentum kami bisa scaled up , kami sudah bisa listing, maka kami akan umumkan.</p>\r\n\r\n<p><strong>Di Indonesia sendiri augmented reality kan masih belum familiar bisnisnya, bagaimana menurut Anda ?</strong></p>\r\n\r\n<p>Oleh karena itu di awal kami mulai dari luar negeri dulu baru kemudian kami masuk ke Indonesia. Padahal ini adalah murni hasil karya anak bangsa sendiri, tapi ya memang pasarnya begitu jadi kami jualan di luar lebih dahulu.</p>\r\n\r\n<p>Sekarang malah kami diapresiasi menempati ranking ketiga perusahaan AR terbaik di dunia. Jadi Indonesia harus bangga bahwa satu dari tiga besar pemain AR terbaik di dunia datang dari Indonesia. Oleh karena itu, kami ingin mengenakan lebih dekat lagi AR itu, selama ini orang Indonesia umumnya mengenal AR karena game online seperti Pokemon Go, tetapi sebenarnya AR bisa dipakai sebagai solusi untuk bisnis, medis, militer dan lain-lainnya.</p>\r\n\r\n<p><strong>Bagaimana dengan pertumbuhan AR Group apakah organik atau menggandeng investor ?</strong></p>\r\n\r\n<p>Kami jalan secara organik selama ini, itu membuktikan bahwa kami perusahaan yang sehat, kami bertumbuh dari yang hanya 20 orang 7 tahun lalu menjadi 300 orang di 6 negara, semuanya organik.</p>\r\n\r\n<p>Model bisnis kami kan ada klien masuk, kami dibayar. Begitu seterusnya dan berkembang. Ya memang balakangan kami buka diri untuk investor masuk, tapi kami belum ketemu yang cocok, karena kami tidak cari yang penawarannya besar, tapi yang cocok visi misinya dengan kami dan kalau bisa chemistry juga cocok.</p>\r\n\r\n<p>Saat ini BOD kami ingin sekali bisa membawa Indonesian talent bisa going global. Itu jadi prioritas utama kami, dan kami ingin Indonesia punya technology company yang bisa bawa talent Indonesia berkarya di negara-negara di seluruh dunia. Makanya kami masih hati-hati dalam memilih mitra (baca:investor), kami ingin mitra yang tidak mengecilkan orang Indonesia dan mendukung cita-cita kami tadi.</p>\r\n\r\n<p><strong>Bagaimana caranya AR Group bisa mendapatkan atau menciptakan teknologi terdepan ?</strong></p>\r\n\r\n<p>Saat ini kita hidup di dunia yang serba terbuka tanpa sekat, seorang anak bisa belajar Bahasa Korea dan Jepang hanya melalui Youtube. Nah, bagaimana kami bisa jadi terdepan? Kami harus melihat diri kami sebagai global citizen menggunakan platform edukasi yang global, maka kami harus menjadi yang pertama melangkah dan berinovasi untuk menghasilkan solusi.</p>\r\n\r\n<p>Jadi segala sesuatu yang sifatnya advanced atau terdepan itu pada dasarnya adalah lebih dahulu menjadi solusi, jadi inovator sekaligus pionir. Teknologi apapun kalau &nbsp;menjadi yang pertama dan lebih baik dari yang sebelumnya maka, dia akan menjadi yang terdepan. Jadi teknologi bisa canggih karena bisa menjadi solusi yang belum pernah ada sebelumnya.</p>\r\n\r\n<p><strong>Apa target &nbsp;ke depan untuk AR Group ?</strong></p>\r\n\r\n<p>Kami sedang dalam proses untuk scaled up bisnis ini, kami mau ekspansi lagi, sekarang pasar yang sudah banyak menerima kami di Amerika Serikat, kami mengeluarkan produk-produk yang lebih canggih lagi, inovatif dan solutif. Tidak sekadar jadi solusi, tetapi solusi yang sangat unik.</p>', 'Budi Budiman', 'daniel-surya-targetkan-ar-group-jadi-top-3-dunia', 2019, 6, 0, '2019-05-22 01:41:30', '2019-06-18 10:09:36'),
(9, 2, 1, 'Kolaborasi MindStores dengan Telkom & Alfamart untuk Belanja Virtual', '1560877600_.png', '<p>Kerja sama MindStores dengan Telkom, Alfamart dan Metranet. (dok. WIR Group)</p>\r\n\r\n<p>Hadir untuk fokus mengembangkan platform jaringan penjualan ritel toko virtual dengan menggunakan inovasi seperti teknologi&nbsp;<em>3D augmented reality-virtual reality</em>(AR-VR), MindStores terus mengembangkan berbagai proyek komersial yang bersifat praktis melalui kerjasama dengan mitra strategis.</p>\r\n\r\n<p>MindStores telah sukses mengimplementasikan inovasi sebuah jaringan toko virtual bernama Alfamind yang bekerja sama dengan Alfamart pada tahun 2015. Layanan ini menghadirkan solusi berjualan mudah dengan modal minim, hanya dengan menggunakan aplikasi pada handphone. &ldquo;Toko virtual Alfamind memungkinkan orang menjadi pemilik toko dari berbagai merek dengan ribuan produk yang tersedia untuk dijual,&rdquo; kata Jimmy Halim, CEO MindStores.</p>\r\n\r\n<p>Kini Alfamind mulai memperluas jangkauannya pada platform televisi. MindStores dan Alfamart bekerjasama dengan Telkom Indonesia melakukan terobosan baru dengan menghadirkan Alfamind @ IndiHome. Dengan Alfamind @ IndiHome, memudahkan pelanggan IndiHome untuk berjualan berbagai produk di Alfamind tanpa repot biaya operasional dan transaksi langsung dilakukan melalui layar televisi di rumah. Alfamind berharap dengan adanya toko virtual Alfamind di IndiHome dapat menjangkau lebih banyak pelanggan Indihome yang saat ini telah mencapai 4 juta lebih pelanggan.</p>\r\n\r\n<p>&ldquo;Launching Alfamind @ IndiHome ini semakin memperkaya layanan yang tersedia di IndiHome UseeTV dengan layanan&nbsp;<em>virtual shopping</em>. Pelanggan IndiHome semakin dimanjakan dengan adanya Alfamind @ IndiHome karena pelanggan dapat berjualan dan berbelanja langsung dari rumah mereka melalui layar IndiHome UseeTV. Barang yang dipesan dapat langsung diantar ke rumah pelanggan atau diambil di Alfamart terdekat,&rdquo; ungkap Anak Agung Gede Mayun Wirayuda, Deputy EGM Infrastructure and Development, Divisi TV Video, Telkom Indonesia.</p>\r\n\r\n<p>Selain itu, Alfamind @ IndiHome didukung oleh Xooply Alfamind, yaitu salah satu produk dari Metranet sebagai layanan pembayaran di Alfamind untuk memudahkan para pemilik toko dalam bertransaksi secara virtual dan aman. Metranet (PT Metra-Net) adalah anak perusahaan dari PT Telekomunikasi Indonesia, Tbk (Telkom).</p>\r\n\r\n<p>Grand launch Alfamind @ IndiHome berlangsung pada tanggal 25 November 2018. Acara ini menjadi salah satu rangkaian dari kegiatan acara Disrupto yang diselenggarakan di Plaza Indonesia, Jakarta. Disrupto sendiri merupakan sebuah event berisikan talk show dan festival yang digagas oleh WIR Group dengan diisi oleh berbagai pembicara inspiratif, serta berbagai pelaku startup di Indonesia.</p>', 'Imam Firmansyah', 'kolaborasi-mindstores-dengan-telkom-alfamart-untuk-belanja-virtual', 2019, 6, 1, '2019-05-22 01:42:44', '2019-06-18 10:06:40'),
(10, 2, 1, 'What\'s Is Mindstores?', '1560877371_.png', '<p>MindStores is a company that specializes on the developments of virtual sales/retail stores network, and the underlying integrated solutions which incorporate AR-VR Technologies, People Empowerment, and Creative Engagements.<br />\r\n<br />\r\nWith the capability to formulate, integrate and develop advanced technologies, MindStores has the edge to continuously spawn various disruptive yet practical commercial purpose built projects through cooperations with strategic partners.</p>', 'Budi Budiman', 'whats-is-mindstores', 2019, 6, 1, '2019-05-22 01:43:14', '2019-06-18 10:02:51'),
(11, 2, 1, 'World\'s First AR-VR Partnership Store Network', '1560876957_.png', '<p>Alfamind is a project that has been developed by Mindstores with Alfamart, which targets Indonesian society to become entrepreneurs by having their own virtual store that is easy to operate with its reasonable capital through smartphones. Following its successful soft launch in 2016, Alfamind has been officially launched as Alfamart&#39;s virtual retail store mobile app powered by MindStore&#39;s 3D AR/VR technology. The event took place at Aryaduta Hotel Jakarta on February 28th and was attended by The Minister of Trade of Indonesia, The Minister of Cooperatives and Small and Medium Enterprises of Indonesia, Alfamind&#39;s store owners, suppliers, and partners.</p>\r\n\r\n<p>Along with the launch of Alfamind Full Version, Alfamart also released the Alfamind Lite Version that can be used in smartphones with lower specifications and provide faster access in serving costumer&#39;s transactions. The purpose of it is to engage more people to become Store Owners regardless of the device&rsquo;s specifications they have. Viendra Primadia as the Digital Business General Manager of Alfamart, said that a Store Owner can earn various benefits, such as obtaining margin sales in every products sold and getting the ease of operational management because it is entirely done by Alfamart. He added, flexibility is also one of Alfamind&rsquo;s plus points since every transaction is not limited by time and place.</p>\r\n\r\n<p>Both the Alfamind Lite Version and Full Version are now available to download on Google PlayStore. For more information about Alfamind and how it works, please visit: https://alfamind.id/.</p>', 'Budi Budiman', 'worlds-first-ar-vr-partnership-store-network', 2019, 6, 3, '2019-05-22 01:43:28', '2019-06-18 09:55:57'),
(12, 2, 1, 'Mediv First Medical Virtual Store Network Partnership Store Network Partnership Store Network Partnership', '1560876734_.png', '<p><strong>Bisnis<br />\r\nKemeriahan Grand Launching Mediv, Digital Platform dari Kimia Farma</strong></p>\r\n\r\n<p>com-Grand Launching Mediv, acara utama peluncuran platform digital Mediv Foto: Novianti Rahmi Putri/kumparan<br />\r\nSebagai perusahaan farmasi pertama di Indonesia, Kimia Farma tidak pernah berhenti memberikan inovasi terbaru bagi para konsumennya. Mengikuti perkembangan zaman yang serba digital, Kimia Farma pun resmi meluncurkan sebuah platform digital terbaru bernama Mediv di Ice Palace, Lotte Shopping Avenue, Senin (29/4).</p>\r\n\r\n<p>Mediv merupakan sebuah platform digital yang memungkinkan masyarakat umum untuk bergabung sebagai mitranya dan berjualan secara online. Sebagai platform digital pertama dan satu-satunya di industri kesehatan, Mediv memungkinkan mitranya untuk berjualan berbagai alat kesehatan dan produk kosmetik dengan modal yang kecil.</p>\r\n\r\n<p>Sejak pukul 18.00 WIB, para peserta yang sebelumnya telah mendaftar melalui http://mediv.co.id/ mulai berdatangan dan melakukan registrasi ulang sebelum akhirnya memasuki auditorium Ice Palace.</p>\r\n\r\n<p>Acara dibuka dengan sambutan dari Honesti Basyir selaku CEO PT Kimia Farma (Persero) Tbk. yang dilanjutkan dengan sesi talkshow bertema &quot;Bisnis Modal Jari&quot;. Talkshow tersebut menghadirkan tiga pembicara, yakni Honesti Basyir (CEO PT Kimia Farma (Persero) Tbk.), Lizzie Parra (Beautypreneur Founder &amp; CEO of BLP (By Lizzie Parra) Beauty), dan Wisnu Dewobroto (founder Gajah Mungkur Group).</p>\r\n\r\n<p><br />\r\ncom-Grand Launching Mediv, talkshow bersama Wisnu Dewobroto, Lizzie Parra, dan Honesti Basyir Foto: Novianti Rahmi Putri/kumparan<br />\r\nDalam sesinya, Honesti Basyir memperkenalkan platform digital terbaru Kimia Farma, Mediv. Di mana, Mediv memiliki dua desain yakni Mediv Screen yang terdapat di beberapa apotek Kimia Farma, dan Mediv App sebuah virtual store yang memiliki teknologi AR atau Augmented Reality</p>\r\n\r\n<p>&quot;Kami berharap Mediv menjadi terobosan di industri kesehatan dan dapat membantu masyarakat yang memiliki jiwa berbisnis namun masih memiliki kendala modal,&quot; jelas Honesti Basyir kepada kumparan (kumparan.com).&nbsp;</p>', 'Imam Firmansyah', 'mediv-first-medical-virtual-store-network-partnership-store-network-partnership-store-network-partnership', 2019, 6, 0, '2019-06-16 19:34:57', '2019-06-25 00:08:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$QJlMmbQvTyp5q00ifEPuEus9wi6sVBHPTC8rI8DKduZ1Ggf2iNESe', '2019-06-13 19:00:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_only5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_only6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_n` text COLLATE utf8mb4_unicode_ci,
  `image_only1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_only2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_only3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_only4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `title`, `slug`, `style`, `text_style`, `button_style`, `image`, `image_only5`, `image_only6`, `description_n`, `image_only1`, `image_only2`, `image_only3`, `image_only4`, `visit_count`, `created_at`, `updated_at`) VALUES
(1, 'Mindstore\'s', 'World\'s First AR-VR Partnership Store Network', 'worlds-first-ar-vr-partnership-store-network', 'left', 'white', 'black', '1558492265_5ce4b469018c1.png', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum arcu tortor, a viverra est dignissim et. Nullam at ultricies justo. Sed blandit leo ultrices neque pretium, in blandit lacus accumsan. Vivamus vehicula quam non eleifend pellentesque. Aliquam accumsan aliquam dolor id tempor. Suspendisse a ultricies eros. Donec vestibulum ipsum id sapien pretium, sed aliquam ipsum vulputate. Fusce lacinia, felis quis auctor tristique, velit massa mollis nisi, nec porta nunc velit ac ipsum. Aenean in varius sapien, id pulvinar nisl. Praesent sodales porta n, se</p>', '1558492265_5ce4b46902e5b.png', '1558492265_5ce4b46903aa7.png', '1558492265_5ce4b46903eee.png', '1558492265_5ce4b4690442b.png', 13, '2019-05-21 19:31:05', '2019-06-18 20:05:08'),
(2, 'Mindstore\'s', 'What\'s Is Alfamind? What\'s Is Alfamind? What\'s Is Alfamind? What\'s Is Alfamind? What\'s Is Alfamind?', 'whats-is-alfamind-whats-is-alfamind-whats-is-alfamind-whats-is-alfamind-whats-is-alfamind', 'left', 'white', 'red', '1560876411_.jpeg', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum arcu tortor, a viverra est dignissim et. Nullam at ultricies justo. Sed blandit leo ultrices neque pretium, in blandit lacund nunc. Sed veLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elementum arcu tortor, a viverra est dignissim et. Nullam at ultricies justo. Sed blandit leo ultrices nequearius sapien, id pulvinar nisl. Praesent sodales porta nunc, sodales dignissim magna pellentesque id. Sed elementum eros ac dui auctor feugiat at nec dolor. Nunc et orci ultrices, ornare nisi eu, eleifend nunc. Sed venenatis sem metus, sed pretium magna vehicula eu. Nunc faucibus erat luctus elit auctor cursus.nenatis sem metus, sed pretium magna vehicula eu. Nunc faucibus erat luctus elit auctor cursus.</p>', '1558492671_5ce4b5ffbce21.png', '1558492671_5ce4b5ffbd356.png', '1558492671_5ce4b5ffbd685.png', '1558492671_5ce4b5ffbd998.png', 9, '2019-05-21 19:37:51', '2019-06-20 14:32:43'),
(3, 'Mediv', 'Mediv, Platform Digital Kesehatan Kimia Farma dengan Teknologi AR', 'mediv-platform-digital-kesehatan-kimia-farma-dengan-teknologi-ar', 'left', 'white', 'white', '1560876002_.png', NULL, NULL, '<p>&quot;Kami berharap Mediv menjadi terobosan di industri kesehatan dan dapat membantu masyarakat yang memiliki jiwa berbisnis namun masih memiliki kendala modal,&quot; jelas Honesti Basyir kepada kumparan (kumparan.com).&nbsp;</p>', '1558492718_5ce4b62e5ab38.png', '1558492718_5ce4b62e5ae54.png', '1558492718_5ce4b62e5b188.png', '1558492718_5ce4b62e5b4cc.png', 15, '2019-05-21 19:38:38', '2019-06-18 19:20:46'),
(6, 'Alfamind', 'Grand Launching of Alfamind by Alfamart and Mindstores', 'grand-launching-of-alfamind-by-alfamart-and-mindstores', 'left', 'white', 'black', '1560832328_.jpg', NULL, NULL, NULL, '1560739698_5d06ff7292f18.png', '1560739698_5d06ff72933b7.png', '1560739698_5d06ff729369a.png', '1560739698_5d06ff729b257.png', 4, '2019-06-16 19:48:18', '2019-06-18 19:15:00'),
(7, 'Mediv', 'Mediv First Medical Virtual Store Network Partnership', 'mediv-first-medical-virtual-store-network-partnership', 'right', 'white', 'white', '1560875681_.png', '1561049557_5d0bb9d538223.png', '1561049557_5d0bb9d538412.png', '<p>com-Grand Launching Mediv, talkshow bersama Wisnu Dewobroto, Lizzie Parra, dan Honesti Basyir Foto: Novianti Rahmi Putri/kumparan<br />\r\nUsai mengenalkan Mediv dan berbagai pengalaman tentang berbisnis di dunia digital, peserta yang hadir pun diberikan kesempatan untuk bertanya. Tidak hanya itu, mereka juga dihibur dengan games menarik berhadiah Mediv Cash senilai Rp 1,25 juta dan Rp 750 ribu.</p>\r\n\r\n<p>Setelah keseruan tersebut, tibalah di acara puncak yakni peluncuran aplikasi Mediv dari Kimia Farma. Saat peluncuran, Untung Suseno Sutarjo selaku Komisaris Utama mengatakan, tahun ini adalah waktu yang tepat untuk Kimia Farma -- sebagai BUMN yang telah menyediakan berbagai produk farmasi untuk keluarga Indonesia sejak tahun 1817 silam -- melakukan inovasi.</p>\r\n\r\n<p><br />\r\ncom-Grand Launching Mediv, jajaran direksi Kimia Farma di peluncuran Mediv Foto: Novianti Rahmi Putri/kumparan<br />\r\nAplikasi Mediv resmi diluncurkan. Namun, keseruan tidak berhenti sampai di situ saja. Acara peluncuran perdana Mediv pun ditutup dengan penampilan musisi Endah n Rhesa yang menyanyikan beberapa lagu andalannya seperti When You Love Someone, Untuk Dikenang, dan beberapa lagu beraliran jazz lainnya.</p>\r\n\r\n<p><br />\r\ncom-Grand Launching Mediv, penampilan Endah n Rhesa Foto: Novianti Rahmi Putri/kumparan<br />\r\nMediv merupakan sebuah platform digital di industri kesehatan yang akan memberikan kemudahan bagi Anda yang ingin berbisnis. Selain peluncuran perdana di Jakarta, Mediv juga akan melakukan roadshow ke tiga kota yakni Bandung, Surabaya, dan Makassar.</p>\r\n\r\n<p>Ikuti keseruannya dan daftarkan diri Anda segera di http://mediv.co.id/.</p>', '1561049557_5d0bb9d53372a.png', '1561049557_5d0bb9d533b16.png', '1561049557_5d0bb9d533dbf.jpg', '1561049557_5d0bb9d537ec4.png', 67, '2019-06-17 21:37:25', '2019-06-25 00:09:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `releasers`
--

CREATE TABLE `releasers` (
  `id` int(10) UNSIGNED NOT NULL,
  `releaser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `releasers`
--

INSERT INTO `releasers` (`id`, `releaser`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'mindstores', '1560936674_5d0a00e2b91f3.png', NULL, '2019-06-19 02:31:14'),
(8, 'Alfamind', '1561434625_5d119a011429a.png', '2019-06-24 20:50:25', '2019-06-24 21:50:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribbble` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `full_name`, `job_name`, `division`, `position`, `location`, `foto`, `phone`, `email`, `linkedin`, `instagram`, `twitter`, `dribbble`, `behance`, `github`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Adriel E.B.A.', 'Creative Designer', 'Creative', 'normal', 'Jakarta', '1561060606_.png', '+628221737636900', 'adriel@mymindstores.com', NULL, 'www.instagram.com/aagaam_', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam unde animi, tempore quae, id voluptate saepe cum deleniti cupiditate officiis atque deserunt quas et recusandae possimus&', '2019-05-21 20:45:29', '2019-06-20 12:56:46'),
(2, 'Jimmy Halim', 'Ceo', 'Leader', 'master', 'Jakarta', '1561098773_.jpeg', '+6282347234793', 'example@example.com', 'www.linkedin.com/example', 'www.instagram.com/example', 'www.twitter.com/example', 'www.dribbble.com/example', 'www.behance.com/example', 'www.github.com/example', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla maiores molestias sit quae sequi fuga ea voluptates minima velit sunt ad aliquid a ut quasi, unde quos eum est. Modi?</p>', '2019-06-20 00:09:34', '2019-06-20 23:32:53'),
(3, 'Ela Rizkita', 'General Manager', 'Leader', 'master', 'Jakarta', '1560931992_.jpeg', '+62483248928409', 'test@test.com', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium commodi excepturi quis! Velit laborum aspernatur porro, voluptatibus ab, minus ad illo commodi eligendi, pariatur amet m', '2019-06-19 00:24:40', '2019-06-19 01:13:12'),
(4, 'Oky Prasetyo', 'Business Development', 'Business', 'master', 'Jakarta', '1561098819_.png', '+628387498274234', 'example@example.com', 'www.linkedin.com/example', 'www.instagram.com/example', 'www.twitter.com/example', 'www.dribbble.com/example', 'www.behance.com/example', 'www.github.com/example', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam unde animi, tempore quae, id voluptate saepe cum deleniti cupiditate officiis atque deserunt quas et recusandae possimus&', '2019-05-21 21:31:32', '2019-06-20 23:33:39'),
(6, 'Aldi', 'Programmer', 'Creative', 'normal', 'Jakarta', '1561060572_.png', '+6223', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, '<p>aa</p>', '2019-06-20 12:55:46', '2019-06-20 12:57:58'),
(7, 'Acel', '3D Artist', 'Creative', 'normal', 'Jakarta', '1561060723_5d0be573881ff.png', '+6208080808', 'hello@mymindstores.com', NULL, NULL, NULL, NULL, NULL, NULL, '<p>I&#39;m Acel</p>', '2019-06-20 12:58:43', '2019-06-20 12:58:43'),
(8, 'Eva', 'Job', 'Business', 'normal', 'Jakarta', '1561061680_5d0be930b4706.png', '+62080808080', 'hello@mymindstores.com', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Hello i&#39;m Eva</p>', '2019-06-20 13:14:40', '2019-06-20 13:14:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', '1561444429_5d11c04d970ea.jpg', NULL, '$2y$10$TFhwiXvofXfxakB.CTSyeeASE.yFPRAfPsz.kjuFqFRHzaFSIVqQe', 'super_admin', '37GnqTZYxCcZATtnVcB9FjsEercHbEISVcg3XYUpHDgyTIwFfLV77mGXkoQz', '2019-06-24 23:32:01', '2019-06-25 01:06:54'),
(3, 'admin2', 'admin@gmail.com', '1561444749_5d11c18d1123a.png', NULL, '$2y$10$UYJwxtRcOimaA1giseBY/Oxh/C.fJCTgAn7cx.OmhlMOpd7Bzdo/q', 'admin', NULL, '2019-06-24 23:39:09', '2019-06-24 23:39:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `highlights_news_id_foreign` (`news_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news_artikels`
--
ALTER TABLE `news_artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_artikels_category_id_foreign` (`category_id`),
  ADD KEY `news_artikels_releaser_id_foreign` (`releaser_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `releasers`
--
ALTER TABLE `releasers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `news_artikels`
--
ALTER TABLE `news_artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `releasers`
--
ALTER TABLE `releasers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `highlights`
--
ALTER TABLE `highlights`
  ADD CONSTRAINT `highlights_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news_artikels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `news_artikels`
--
ALTER TABLE `news_artikels`
  ADD CONSTRAINT `news_artikels_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_artikels_releaser_id_foreign` FOREIGN KEY (`releaser_id`) REFERENCES `releasers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
