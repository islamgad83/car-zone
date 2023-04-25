-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 03:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo_path`, `adminuserrole`, `shipping`, `alluser`, `returnorder`, `phone`, `brand`, `product`, `category`, `slider`, `coupons`, `remember_token`, `blog`, `sitting`, `stock`, `review`, `orders`, `reports`, `type`, `created_at`, `updated_at`, `current_team_id`) VALUES
(1, 'carzone', 'admin@carzone.com', '2022-01-06 20:27:00', '$2y$10$d4UizQtcr0Gbh5iBAXEs/eBTVu7gbUhyeJRqGlu/M29AXhOjs5bNO', '2022-11-19-19-388b67c4e2-33e9-4556-bd7a-a0abaa864c6f.jfif', '1', '1', '1', '1', '010000000000000', '1', '1', '1', '1', '1', 'gMkUzk09QhwiUECzm1ywccOpK2dxLz9nU7KIxw0H0e2ss2773L2P8NUwHbIi', '1', '1', '1', '1', '1', '1', 1, '2022-01-06 20:27:00', '2022-11-19 17:38:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title_en`, `post_title_ar`, `post_slug_en`, `post_slug_ar`, `post_image`, `post_details_en`, `post_details_ar`, `created_at`, `updated_at`, `admins_id`) VALUES
(4, 1, 'The Best Four-Cylinder Engines On The Market In 2023', 'أفضل محركات ذات أربع أسطوانات في السوق عام 2023', 'the-best-four-cylinder-engines-on-the-market-in-2023', 'أفضل-محركات-ذات-أربع-أسطوانات-في-السوق-عام-2023', 'upload/post/1756468778626237.jpg', '<p>The 4-cylinder is, without a doubt, the most widely used engine configuration and is found in everything from the smallest of subcompact hatchbacks to large sedans and SUVs. Most 4-cylinder engines on sale today have a turbocharger to aid in performance and fuel efficiency, and&nbsp;<a href=\"https://www.hotcars.com/best-mpg-luxury-hybrid-suvs/\">some even come with hybrid powertrains</a>.</p>\r\n\r\n<p>The 4-cylinder engine grew in popularity in the US in the 1970s and 1980s during the energy crisis, when fuel prices skyrocketed. This led to more people buying cheap and economical cars, rather than ones with great big V8s. After the energy crisis, manufacturers returned with their big and powerful engines, but motorists stuck with the smaller engines thanks to the low running costs. In Europe, the smaller engines were always more popular as the fuel was expensive and most cars couldn&rsquo;t accommodate anything larger than a V6 &ndash; sometimes not even that. Bigger engines had their time in the spotlight, but due to ever stricter emissions regulations, most automakers are downsizing their engines to 4- and even 3-cylinders.</p>\r\n\r\n<p>Today, big cars like the BMW X5 and&nbsp;<a href=\"https://www.hotcars.com/tag/cadillac/\"><strong>Cadillac</strong></a>&nbsp;CT6 come with 4-cylinder engines in their base trims, helping fuel economy and emissions. While the bigger engines are on the way out, the 4-cylinder seems to still have a future in the motoring world. Here are ten of the best 4-cylinder engines on the market in 2023.</p>', '<p>تعتبر السيارة ذات الأربع أسطوانات ، بلا شك ، أكثر مواصفات المحركات استخدامًا وتوجد في كل شيء بدءًا من أصغر سيارات الهاتشباك الصغيرة إلى سيارات السيدان الكبيرة وسيارات الدفع الرباعي. تحتوي معظم المحركات ذات الأربع أسطوانات المعروضة للبيع اليوم على شاحن توربيني للمساعدة في الأداء وكفاءة الوقود ، وبعضها يأتي مع مجموعات نقل الحركة الهجينة.</p>\r\n\r\n<p>نمت شعبية المحرك رباعي الأسطوانات في الولايات المتحدة في السبعينيات والثمانينيات خلال أزمة الطاقة ، عندما ارتفعت أسعار الوقود بشكل كبير. أدى ذلك إلى زيادة عدد الأشخاص الذين يشترون سيارات رخيصة واقتصادية ، بدلاً من تلك التي تحتوي على محركات V8 كبيرة الحجم. بعد أزمة الطاقة ، عاد المصنعون بمحركاتهم الكبيرة والقوية ، لكن سائقي السيارات تمسكوا بالمحركات الأصغر بفضل تكاليف التشغيل المنخفضة. في أوروبا ، كانت المحركات الأصغر دائمًا أكثر شيوعًا لأن الوقود كان باهظ الثمن ومعظم السيارات لا يمكنها استيعاب أي شيء أكبر من محرك V6 - وأحيانًا لا تستوعب ذلك. كان للمحركات الأكبر وقتها في دائرة الضوء ، ولكن نظرًا للوائح الانبعاثات الأكثر صرامة ، يقوم معظم صانعي السيارات بتقليص حجم محركاتهم إلى 4 وحتى 3 أسطوانات.</p>\r\n\r\n<p>اليوم ، تأتي السيارات الكبيرة مثل BMW X5 و Cadillac CT6 بمحركات 4 أسطوانات في زخارفها الأساسية ، مما يساعد على الاقتصاد في استهلاك الوقود والانبعاثات. بينما المحركات الأكبر في طريقها للخروج ، يبدو أن الأسطوانات الأربع لا يزال لديها مستقبل في عالم السيارات. فيما يلي عشرة من أفضل المحركات ذات 4 أسطوانات في السوق في عام 2023.</p>', '2023-01-30 15:19:23', '2023-01-30 15:19:23', 1),
(5, 1, 'Why Won\'t My Car Door Close Properly?', 'لماذا لا يغلق باب سيارتي بشكل صحيح؟', 'why-won\'t-my-car-door-close-properly?', 'لماذا-لا-يغلق-باب-سيارتي-بشكل-صحيح؟', 'upload/post/1756468989284500.jpg', '<p>Every editorial product is independently selected, though we may be compensated or receive an affiliate commission if you buy something through our links. Ratings and prices are accurate and items are in stock as of time of publication.<br />\r\nA car door that won&#39;t close properly is not only a critical safety issue, but also an invitation for thieves to pilfer your car.<br />\r\nLike many parts of our vehicles, the doors are an integral safety system, providing protection for passengers and security from thieves. However, they are often overlooked. Car doors need to open, remain closed when shut and lock on demand to protect precious cargo &mdash; you, your passengers and your belongings. Never forget that vehicles with broken door latches could easily eject someone in an accident, especially if the occupants are not wearing seat belts.</p>\r\n\r\n<p>How a Car Door Works<br />\r\nA car (or truck) door is made up of many parts that need to operate together to work properly.</p>\r\n\r\n<p>The main component is the latching mechanism. Located inside the door assembly, it engages a door anchor, or striker, that is attached to the body of the vehicle, to keep the door closed. Operating the inside or outside door handle releases the latch from the anchor, allowing the door to open. Other parts include the door assembly itself, door hinges, door lock, door latch linkage or cables and, if equipped, electrical actuators and switches that lock or unlock a door.</p>\r\n\r\n<p>Things can go wrong that can prevent your doors from closing securely. When that happens, you&rsquo;ll need to get them fixed, pronto.</p>\r\n\r\n<p>Why Doesn&rsquo;t My Car Door Close?<br />\r\nAs you know, it is dangerous to drive your car if the door will not stay closed. Here are some of the most common causes for a door that won&rsquo;t close properly and what you can do to fix the problem.</p>', '<p>يتم اختيار كل منتج تحريري بشكل مستقل ، على الرغم من أنه قد يتم تعويضنا أو الحصول على عمولة تابعة إذا اشتريت شيئًا من خلال روابطنا. التقييمات والأسعار دقيقة والعناصر متوفرة في المخزون اعتبارًا من وقت النشر.<br />\r\nباب السيارة الذي لا يغلق بشكل صحيح ليس فقط مشكلة أمان خطيرة ، ولكنه أيضًا دعوة للصوص لسرقة سيارتك.<br />\r\nمثل العديد من أجزاء مركباتنا ، تعتبر الأبواب نظام أمان متكامل ، حيث توفر الحماية للركاب والأمن من اللصوص. ومع ذلك ، غالبًا ما يتم تجاهلها. يجب أن تفتح أبواب السيارة وتظل مغلقة عند إغلاقها وقفلها عند الطلب لحماية البضائع الثمينة - أنت وركابك وممتلكاتك. لا تنس أبدًا أن المركبات ذات المزالج المكسورة يمكن أن تخرج شخصًا بسهولة في حادث ، خاصة إذا كان الركاب لا يرتدون أحزمة الأمان.</p>\r\n\r\n<p>كيف يعمل باب السيارة<br />\r\nيتكون باب السيارة (أو الشاحنة) من العديد من الأجزاء التي تحتاج إلى العمل معًا للعمل بشكل صحيح.</p>\r\n\r\n<p>المكون الرئيسي هو آلية الإغلاق. يقع داخل مجموعة الباب ، وهو يعمل على تثبيت مرساة باب ، أو مهاجم ، متصل بجسم السيارة ، لإبقاء الباب مغلقًا. يؤدي تشغيل مقبض الباب الداخلي أو الخارجي إلى تحرير المزلاج من المرساة ، مما يسمح بفتح الباب. تشمل الأجزاء الأخرى مجموعة الباب نفسها ، ومفصلات الأبواب ، وقفل الباب ، ووصلة مزلاج الباب أو الكابلات ، والمشغلات الكهربائية والمفاتيح التي تقفل الباب أو تفتحه ، إذا كانت مجهزة.</p>\r\n\r\n<p>يمكن أن تسوء الأمور بحيث تمنع إغلاق أبوابك بشكل آمن. عندما يحدث ذلك ، ستحتاج إلى إصلاحها برونتو.</p>\r\n\r\n<p>لماذا لا يغلق باب سيارتي؟<br />\r\nكما تعلم ، من الخطر قيادة سيارتك إذا لم يظل الباب مغلقًا. فيما يلي بعض الأسباب الأكثر شيوعًا لعدم إغلاق الباب بشكل صحيح وما يمكنك فعله لإصلاح المشكلة.</p>', '2023-01-30 15:22:45', '2023-01-30 15:22:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_ar`, `blog_category_slug_en`, `blog_category_slug_ar`, `created_at`, `updated_at`, `admins_id`) VALUES
(1, 'Tech', 'تقنية', 'tech', 'تقنية', '2022-01-26 11:19:16', '2022-01-26 11:30:37', 1),
(2, 'Technology', 'تكنولوجيا', 'technology', 'تكنولوجيا', '2022-01-26 11:20:54', '2022-01-26 11:20:54', 9);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_ar`, `brand_slug_en`, `brand_slug_ar`, `brand_image`, `created_at`, `updated_at`, `admins_id`) VALUES
(20, 'NGK', 'NGK', 'ngk', 'NGK', 'upload/brand/1749600128680617.png', '2022-11-15 19:45:06', '2022-11-15 19:45:06', 1),
(21, 'KYB', 'KYB', 'kyb', 'KYB', 'upload/brand/1749600315088751.png', '2022-11-15 19:48:04', '2022-11-15 19:48:04', 1),
(22, 'DAEWHA', 'DAEWHA', 'daewha', 'DAEWHA', 'upload/brand/1749600413429595.png', '2022-11-15 19:49:38', '2022-11-15 19:49:38', 1),
(23, 'Bendix', 'Bendix', 'bendix', 'Bendix', 'upload/brand/1749600533895726.png', '2022-11-15 19:51:33', '2022-11-15 19:51:33', 1),
(24, 'Valeo', 'Valeo', 'valeo', 'Valeo', 'upload/brand/1749600808152224.webp', '2022-11-15 19:55:55', '2022-11-15 19:55:55', 1),
(25, 'DAYCO', 'DAYCO', 'dayco', 'DAYCO', 'upload/brand/1749600918252363.png', '2022-11-15 19:57:39', '2022-11-15 19:57:39', 1),
(26, 'AC.Delco', 'AC.Delco', 'ac.delco', 'AC.Delco', 'upload/brand/1749601120885557.jpg', '2022-11-15 19:59:32', '2022-11-15 20:00:53', 1),
(27, 'BOSCH', 'BOSCH', 'bosch', 'BOSCH', 'upload/brand/1749602347352105.png', '2022-11-15 20:20:22', '2022-11-15 20:20:22', 1),
(28, 'DEPO', 'DEPO', 'depo', 'DEPO', 'upload/brand/1749610204377828.png', '2022-11-15 22:25:16', '2022-11-15 22:25:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_ar`, `category_slug_en`, `category_slug_ar`, `category_icon`, `created_at`, `updated_at`, `admins_id`) VALUES
(21, 'BRAKES AND TRACTION CONTROL', 'المكابح والتحكم في الجر', 'brakes-and-traction-control', 'المكابح-والتحكم-في-الجر', 'upload/category/1749602556078221.webp', '2022-11-15 20:23:41', '2022-11-15 20:23:41', 1),
(25, 'ENGINE', 'الموتور', 'engine', 'الموتور', 'upload/category/1749603341604027.jpg', '2022-11-15 20:36:10', '2022-11-15 20:36:10', 1),
(26, 'SENSOR\'S', 'حساسات', 'sensor\'s', 'حساسات', 'upload/category/1749604175644292.jpg', '2022-11-15 20:49:26', '2022-11-15 20:49:26', 1),
(27, 'SUSPENSION, STEERING, TIRE AND WHEEL', 'التعليق والتوجيه والإطارات والعجلات', 'suspension,-steering,-tire-and-wheel', 'التعليق-والتوجيه-والإطارات-والعجلات', 'upload/category/1749604530254822.jpg', '2022-11-15 20:55:04', '2022-11-15 20:55:04', 1),
(28, 'BATTERIES, STARTING AND CHARGING', 'البطاريات ، بدء التشغيل والشحن', 'batteries,-starting-and-charging', 'البطاريات-،-بدء-التشغيل-والشحن', 'upload/category/1749604768059988.jpg', '2022-11-15 20:58:51', '2022-11-15 20:58:51', 1),
(30, 'COOLING, HEATING AND CLIMATE CONTROL', 'التبريد والتدفئة والتحكم في المناخ', 'cooling,-heating-and-climate-control', 'التبريد-والتدفئة-والتحكم-في-المناخ', 'upload/category/1749605526262354.jpeg', '2022-11-15 21:10:54', '2022-11-15 21:10:54', 1),
(33, 'Diaa', 'ضياء', 'diaa', 'ضياء', 'upload/category/1756612413456014.jpg', '2023-02-01 05:22:22', '2023-02-01 05:22:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(2095998185, 'user', 2, 4, 'hello', NULL, 0, '2022-06-29 23:33:51', '2022-06-29 23:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE `compares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`, `admins_id`) VALUES
(1, 'NEW60', 60, '2022-08-20', 1, '2022-01-20 19:12:51', '2022-07-27 19:41:20', 1),
(3, 'GAD50', 50, '2023-12-18', 1, '2023-03-14 14:03:21', '2023-03-14 14:03:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_06_214229_create_sessions_table', 1),
(7, '2022_01_06_221620_create_admins_table', 2),
(9, '2022_01_08_014043_create_brands_table', 3),
(10, '2022_01_08_163628_create_categories_table', 4),
(11, '2022_01_08_181938_create_sub_categories_table', 5),
(12, '2022_01_13_143712_create_sub_sub_categories_table', 6),
(15, '2022_01_13_183842_create_products_table', 7),
(16, '2022_01_13_191503_create_multi_imgs_table', 7),
(17, '2022_01_14_163106_create_sliders_table', 8),
(18, '2022_01_20_000751_create_wishlists_table', 9),
(19, '2022_01_20_204909_create_coupons_table', 10),
(20, '2022_01_20_212811_create_ship_divisions_table', 11),
(21, '2022_01_20_214044_create_ship_districts_table', 11),
(22, '2022_01_20_215338_create_ship_states_table', 12),
(23, '2022_01_21_002629_create_shippings_table', 13),
(24, '2022_01_24_191054_create_orders_table', 14),
(25, '2022_01_24_191201_create_order_items_table', 14),
(26, '2022_01_26_125627_create_blog_post_categories_table', 15),
(27, '2022_01_26_140037_create_blog_posts_table', 16),
(28, '2022_01_26_193302_create_site_settings_table', 17),
(29, '2022_01_27_002613_create_seos_table', 18),
(30, '2022_01_27_111820_create_reviews_table', 19),
(31, '2022_03_17_232609_create_carts_table', 20),
(32, '2022_04_19_010054_create_carts_table', 21),
(33, '2022_05_22_193544_create_compares_table', 22),
(34, '2022_05_22_211332_create_compares_table', 23),
(35, '2022_06_29_999999_add_active_status_to_users', 24),
(36, '2022_06_29_999999_add_avatar_to_users', 24),
(37, '2022_06_29_999999_add_dark_mode_to_users', 24),
(38, '2022_06_29_999999_add_messenger_color_to_users', 24),
(39, '2022_06_29_999999_create_favorites_table', 24),
(40, '2022_06_29_999999_create_messages_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(2, 2, 'upload/products/multi-image/1739441405315525.webp', '2022-01-13 21:11:33', '2022-07-26 16:36:33'),
(3, 2, 'upload/products/multi-image/1739441405520812.webp', '2022-01-13 21:11:33', '2022-07-26 16:36:33'),
(4, 2, 'upload/products/multi-image/1739441405661848.webp', '2022-01-13 21:11:33', '2022-07-26 16:36:33'),
(6, 3, 'upload/products/multi-image/1739441324155877.webp', '2022-01-14 20:45:48', '2022-07-26 16:35:15'),
(7, 3, 'upload/products/multi-image/1739441324280400.webp', '2022-01-14 20:45:48', '2022-07-26 16:35:16'),
(10, 4, 'upload/products/multi-image/1739441435360352.webp', '2022-01-14 23:05:52', '2022-07-26 16:37:01'),
(11, 4, 'upload/products/multi-image/1739441435492776.webp', '2022-01-14 23:05:52', '2022-07-26 16:37:02'),
(14, 5, 'upload/products/multi-image/1739441482055445.webp', '2022-02-25 14:18:28', '2022-07-26 16:37:46'),
(15, 5, 'upload/products/multi-image/1739441482221292.webp', '2022-02-25 14:18:28', '2022-07-26 16:37:46'),
(16, 5, 'upload/products/multi-image/1739441482515875.webp', '2022-02-25 14:18:28', '2022-07-26 16:37:47'),
(17, 6, 'upload/products/multi-image/1739441537699405.webp', '2022-02-25 14:24:33', '2022-07-26 16:38:39'),
(18, 6, 'upload/products/multi-image/1739441537847525.webp', '2022-02-25 14:24:33', '2022-07-26 16:38:39'),
(19, 6, 'upload/products/multi-image/1739441538063586.webp', '2022-02-25 14:24:34', '2022-07-26 16:38:40'),
(20, 7, 'upload/products/multi-image/1739441578626109.webp', '2022-02-25 14:28:38', '2022-07-26 16:39:18'),
(21, 7, 'upload/products/multi-image/1739441578828369.webp', '2022-02-25 14:28:38', '2022-07-26 16:39:18'),
(22, 8, 'upload/products/multi-image/1739441609422294.webp', '2022-02-25 14:33:50', '2022-07-26 16:39:48'),
(23, 8, 'upload/products/multi-image/1739441609783652.webp', '2022-02-25 14:33:50', '2022-07-26 16:39:48'),
(24, 8, 'upload/products/multi-image/1739441610073754.webp', '2022-02-25 14:33:50', '2022-07-26 16:39:48'),
(25, 9, 'upload/products/multi-image/1739441686798324.webp', '2022-02-25 14:38:26', '2022-07-26 16:41:01'),
(26, 9, 'upload/products/multi-image/1739441686968815.webp', '2022-02-25 14:38:26', '2022-07-26 16:41:01'),
(27, 10, 'upload/products/multi-image/1739440676844718.webp', '2022-02-25 14:41:42', '2022-07-26 16:24:58'),
(28, 10, 'upload/products/multi-image/1739440676988320.webp', '2022-02-25 14:41:43', '2022-07-26 16:24:58'),
(29, 10, 'upload/products/multi-image/1739440677120763.webp', '2022-02-25 14:41:43', '2022-07-26 16:24:59'),
(31, 11, 'upload/products/multi-image/1739441134032854.webp', '2022-02-25 14:44:30', '2022-07-26 16:32:14'),
(32, 11, 'upload/products/multi-image/1739441134184443.webp', '2022-02-25 14:44:30', '2022-07-26 16:32:14'),
(34, 11, 'upload/products/multi-image/1739441134317934.webp', '2022-02-25 14:44:30', '2022-07-26 16:32:14'),
(36, 12, 'upload/products/multi-image/1739440889682864.webp', '2022-02-25 14:48:34', '2022-07-26 16:28:21'),
(37, 12, 'upload/products/multi-image/1739440889810717.webp', '2022-02-25 14:48:34', '2022-07-26 16:28:21'),
(38, 12, 'upload/products/multi-image/1739440889937861.webp', '2022-02-25 14:48:34', '2022-07-26 16:28:21'),
(39, 12, 'upload/products/multi-image/1739440890066853.webp', '2022-02-25 14:48:34', '2022-07-26 16:28:21'),
(40, 13, 'upload/products/multi-image/1725754791429912.jpg', '2022-02-25 14:53:41', '2022-02-25 14:53:41'),
(41, 13, 'upload/products/multi-image/1725754791482369.jpg', '2022-02-25 14:53:41', '2022-02-25 14:53:41'),
(42, 13, 'upload/products/multi-image/1725754791530165.jpg', '2022-02-25 14:53:41', '2022-02-25 14:53:41'),
(43, 14, 'upload/products/multi-image/1725754972123815.jpg', '2022-02-25 14:56:33', '2022-02-25 14:56:33'),
(44, 14, 'upload/products/multi-image/1725754972176285.jpg', '2022-02-25 14:56:33', '2022-02-25 14:56:33'),
(45, 14, 'upload/products/multi-image/1725754972223800.jpg', '2022-02-25 14:56:33', '2022-02-25 14:56:33'),
(46, 15, 'upload/products/multi-image/1725755173534459.jpg', '2022-02-25 14:59:45', '2022-02-25 14:59:45'),
(47, 15, 'upload/products/multi-image/1725755173583754.jpg', '2022-02-25 14:59:45', '2022-02-25 14:59:45'),
(48, 15, 'upload/products/multi-image/1725755173629602.jpg', '2022-02-25 14:59:45', '2022-02-25 14:59:45'),
(49, 16, 'upload/products/multi-image/1725755442949323.jpg', '2022-02-25 15:04:02', '2022-02-25 15:04:02'),
(50, 16, 'upload/products/multi-image/1725755442994366.jpg', '2022-02-25 15:04:02', '2022-02-25 15:04:02'),
(51, 16, 'upload/products/multi-image/1725755443048368.webp', '2022-02-25 15:04:02', '2022-02-25 15:04:02'),
(52, 17, 'upload/products/multi-image/1725755586900873.jpg', '2022-02-25 15:06:19', '2022-02-25 15:06:19'),
(53, 17, 'upload/products/multi-image/1725755586960146.jpg', '2022-02-25 15:06:19', '2022-02-25 15:06:19'),
(54, 17, 'upload/products/multi-image/1725755587006783.jpg', '2022-02-25 15:06:19', '2022-02-25 15:06:19'),
(55, 18, 'upload/products/multi-image/1725755714049506.jpg', '2022-02-25 15:08:20', '2022-02-25 15:08:20'),
(56, 18, 'upload/products/multi-image/1725755714105526.jpg', '2022-02-25 15:08:21', '2022-02-25 15:08:21'),
(57, 18, 'upload/products/multi-image/1725755714200204.jpg', '2022-02-25 15:08:21', '2022-02-25 15:08:21'),
(58, 19, 'upload/products/multi-image/1725755954942003.jpg', '2022-02-25 15:12:10', '2022-02-25 15:12:10'),
(59, 19, 'upload/products/multi-image/1725755955011340.jpg', '2022-02-25 15:12:10', '2022-02-25 15:12:10'),
(60, 19, 'upload/products/multi-image/1725755955068994.jpg', '2022-02-25 15:12:10', '2022-02-25 15:12:10'),
(61, 19, 'upload/products/multi-image/1725755955126857.jpg', '2022-02-25 15:12:10', '2022-02-25 15:12:10'),
(62, 20, 'upload/products/multi-image/1725756080140757.jpg', '2022-02-25 15:14:10', '2022-02-25 15:14:10'),
(63, 20, 'upload/products/multi-image/1725756080197679.jpg', '2022-02-25 15:14:10', '2022-02-25 15:14:10'),
(64, 20, 'upload/products/multi-image/1725756080243995.jpg', '2022-02-25 15:14:10', '2022-02-25 15:14:10'),
(65, 20, 'upload/products/multi-image/1725756080315132.jpg', '2022-02-25 15:14:10', '2022-02-25 15:14:10'),
(66, 21, 'upload/products/multi-image/1725756235492235.jpg', '2022-02-25 15:16:38', '2022-02-25 15:16:38'),
(67, 21, 'upload/products/multi-image/1725756235547468.jpg', '2022-02-25 15:16:38', '2022-02-25 15:16:38'),
(68, 21, 'upload/products/multi-image/1725756235594719.jpg', '2022-02-25 15:16:38', '2022-02-25 15:16:38'),
(69, 22, 'upload/products/multi-image/1725756360965199.jpg', '2022-02-25 15:18:37', '2022-02-25 15:18:37'),
(70, 22, 'upload/products/multi-image/1725756361022393.jpg', '2022-02-25 15:18:37', '2022-02-25 15:18:37'),
(71, 22, 'upload/products/multi-image/1725756361074705.jpg', '2022-02-25 15:18:38', '2022-02-25 15:18:38'),
(72, 22, 'upload/products/multi-image/1725756361170891.jpg', '2022-02-25 15:18:38', '2022-02-25 15:18:38'),
(73, 23, 'upload/products/multi-image/1725756480899297.jpg', '2022-02-25 15:20:32', '2022-02-25 15:20:32'),
(74, 23, 'upload/products/multi-image/1725756481004345.jpg', '2022-02-25 15:20:32', '2022-02-25 15:20:32'),
(75, 23, 'upload/products/multi-image/1725756481100580.jpg', '2022-02-25 15:20:32', '2022-02-25 15:20:32'),
(76, 23, 'upload/products/multi-image/1725756481186847.jpg', '2022-02-25 15:20:32', '2022-02-25 15:20:32'),
(77, 24, 'upload/products/multi-image/1725756581277081.jpg', '2022-02-25 15:22:08', '2022-02-25 15:22:08'),
(78, 24, 'upload/products/multi-image/1725756581438182.jpg', '2022-02-25 15:22:08', '2022-02-25 15:22:08'),
(79, 24, 'upload/products/multi-image/1725756581541126.jpg', '2022-02-25 15:22:08', '2022-02-25 15:22:08'),
(80, 24, 'upload/products/multi-image/1725756581624956.jpg', '2022-02-25 15:22:08', '2022-02-25 15:22:08'),
(81, 25, 'upload/products/multi-image/1726564525812792.jpg', '2022-03-06 13:24:03', '2022-03-06 13:24:03'),
(82, 25, 'upload/products/multi-image/1726564525872101.png', '2022-03-06 13:24:04', '2022-03-06 13:24:04'),
(83, 25, 'upload/products/multi-image/1726564526129873.jpg', '2022-03-06 13:24:04', '2022-03-06 13:24:04'),
(84, 26, 'upload/products/multi-image/1726564750256138.jpg', '2022-03-06 13:27:38', '2022-03-06 13:27:38'),
(85, 27, 'upload/products/multi-image/1726572547801366.jpg', '2022-03-06 15:31:34', '2022-03-06 15:31:34'),
(86, 28, 'upload/products/multi-image/1726581997159353.jpg', '2022-03-06 18:01:45', '2022-03-06 18:01:45'),
(87, 28, 'upload/products/multi-image/1726581997219248.jpg', '2022-03-06 18:01:46', '2022-03-06 18:01:46'),
(88, 28, 'upload/products/multi-image/1726581997324207.jpg', '2022-03-06 18:01:46', '2022-03-06 18:01:46'),
(89, 29, 'upload/products/multi-image/1726582193162558.jpg', '2022-03-06 18:04:52', '2022-03-06 18:04:52'),
(90, 29, 'upload/products/multi-image/1726582193224732.jpg', '2022-03-06 18:04:52', '2022-03-06 18:04:52'),
(91, 30, 'upload/products/multi-image/1726582394394305.jpg', '2022-03-06 18:08:04', '2022-03-06 18:08:04'),
(92, 30, 'upload/products/multi-image/1726582394458893.jpg', '2022-03-06 18:08:04', '2022-03-06 18:08:04'),
(93, 31, 'upload/products/multi-image/1726582629222364.jpg', '2022-03-06 18:11:48', '2022-03-06 18:11:48'),
(94, 31, 'upload/products/multi-image/1726582629279898.jpg', '2022-03-06 18:11:48', '2022-03-06 18:11:48'),
(95, 32, 'upload/products/multi-image/1726583754820984.jpg', '2022-03-06 18:29:42', '2022-03-06 18:29:42'),
(96, 33, 'upload/products/multi-image/1726583964222727.jpg', '2022-03-06 18:33:01', '2022-03-06 18:33:01'),
(97, 34, 'upload/products/multi-image/1726584113431227.jpg', '2022-03-06 18:35:24', '2022-03-06 18:35:24'),
(98, 34, 'upload/products/multi-image/1726584113488238.jpg', '2022-03-06 18:35:24', '2022-03-06 18:35:24'),
(102, 47, 'upload/products/multi-image/1740260962524341.png', '2022-08-04 17:43:04', '2022-08-04 17:43:04'),
(103, 47, 'upload/products/multi-image/1740260962813866.png', '2022-08-04 17:43:04', '2022-08-04 17:43:04'),
(104, 48, 'upload/products/multi-image/1749610404153917.webp', '2022-11-15 22:28:26', '2022-11-15 22:28:26'),
(105, 49, 'upload/products/multi-image/1749610775668863.webp', '2022-11-15 22:34:20', '2022-11-15 22:34:20'),
(106, 50, 'upload/products/multi-image/1749610875513721.webp', '2022-11-15 22:35:55', '2022-11-15 22:35:55'),
(107, 51, 'upload/products/multi-image/1749611171132671.jpg', '2022-11-15 22:40:37', '2022-11-15 22:40:37'),
(108, 52, 'upload/products/multi-image/1749611345668388.webp', '2022-11-15 22:43:24', '2022-11-15 22:43:24'),
(109, 53, 'upload/products/multi-image/1749611574322286.webp', '2022-11-15 22:47:02', '2022-11-15 22:47:02'),
(110, 54, 'upload/products/multi-image/1749611777010323.webp', '2022-11-15 22:50:15', '2022-11-15 22:50:15'),
(111, 55, 'upload/products/multi-image/1749612210193290.webp', '2022-11-15 22:57:08', '2022-11-15 22:57:08'),
(112, 56, 'upload/products/multi-image/1749612380454462.webp', '2022-11-15 22:59:51', '2022-11-15 22:59:51'),
(113, 56, 'upload/products/multi-image/1749612380696376.jpg', '2022-11-15 22:59:51', '2022-11-15 22:59:51'),
(114, 56, 'upload/products/multi-image/1749612380798993.jpg', '2022-11-15 22:59:51', '2022-11-15 22:59:51'),
(115, 57, 'upload/products/multi-image/1749612541293853.jpg', '2022-11-15 23:02:24', '2022-11-15 23:02:24'),
(116, 57, 'upload/products/multi-image/1749612541391459.jpg', '2022-11-15 23:02:24', '2022-11-15 23:02:24'),
(117, 57, 'upload/products/multi-image/1749612541486064.webp', '2022-11-15 23:02:24', '2022-11-15 23:02:24'),
(118, 58, 'upload/products/multi-image/1749612899432227.webp', '2022-11-15 23:08:06', '2022-11-15 23:08:06'),
(119, 59, 'upload/products/multi-image/1749613075356969.jpg', '2022-11-15 23:10:53', '2022-11-15 23:10:53'),
(120, 59, 'upload/products/multi-image/1749613075459386.jpg', '2022-11-15 23:10:53', '2022-11-15 23:10:53'),
(121, 59, 'upload/products/multi-image/1749613075557678.webp', '2022-11-15 23:10:54', '2022-11-15 23:10:54'),
(122, 60, 'upload/products/multi-image/1749613210384333.jpg', '2022-11-15 23:13:02', '2022-11-15 23:13:02'),
(123, 60, 'upload/products/multi-image/1749613210479001.webp', '2022-11-15 23:13:02', '2022-11-15 23:13:02'),
(124, 61, 'upload/products/multi-image/1749613399305653.jpg', '2022-11-15 23:16:02', '2022-11-15 23:16:02'),
(125, 61, 'upload/products/multi-image/1749613399406373.jpg', '2022-11-15 23:16:02', '2022-11-15 23:16:02'),
(126, 61, 'upload/products/multi-image/1749613399506565.jpg', '2022-11-15 23:16:02', '2022-11-15 23:16:02'),
(127, 62, 'upload/products/multi-image/1749613589010038.png', '2022-11-15 23:19:03', '2022-11-15 23:19:03'),
(128, 62, 'upload/products/multi-image/1749613589193003.jpg', '2022-11-15 23:19:03', '2022-11-15 23:19:03'),
(129, 62, 'upload/products/multi-image/1749613589289957.jpg', '2022-11-15 23:19:03', '2022-11-15 23:19:03'),
(130, 62, 'upload/products/multi-image/1749613589385196.jpg', '2022-11-15 23:19:03', '2022-11-15 23:19:03'),
(131, 63, 'upload/products/multi-image/1749613772395709.jpg', '2022-11-15 23:21:58', '2022-11-15 23:21:58'),
(132, 63, 'upload/products/multi-image/1749613772495987.webp', '2022-11-15 23:21:58', '2022-11-15 23:21:58'),
(133, 63, 'upload/products/multi-image/1749613772720559.jpg', '2022-11-15 23:21:58', '2022-11-15 23:21:58'),
(134, 64, 'upload/products/multi-image/1749614055800525.jpg', '2022-11-15 23:26:28', '2022-11-15 23:26:28'),
(135, 64, 'upload/products/multi-image/1749614055902312.jpg', '2022-11-15 23:26:28', '2022-11-15 23:26:28'),
(141, 68, 'upload/products/multi-image/1756612637907429.jpg', '2023-02-01 05:25:56', '2023-02-01 05:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `return_order` int(11) DEFAULT 0,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `status`, `created_at`, `updated_at`, `return_order`, `admins_id`) VALUES
(26, 73, 3, 3, 5, 'meee', 'mee@dhkjhd.com', '01234567899', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 1200.00, NULL, 'EOS94614776', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'delivered', '2023-01-31 23:24:51', '2023-01-31 23:29:21', 0, 1),
(28, 85, 3, 3, 5, 'ali', 'ali@gmail.com', '0111111111111', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 300.00, NULL, 'EOS31779006', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'processing', '2023-02-01 00:15:33', '2023-02-01 00:18:17', 0, 1),
(29, 85, 3, 2, NULL, 'ali', 'ali@gmail.com', '0111111111111', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 15300.00, NULL, 'EOS73313615', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-01 05:30:29', NULL, 0, 1),
(30, 85, 3, 2, NULL, 'ali', 'ali@gmail.com', '0111111111111', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 15300.00, NULL, 'EOS41329219', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-01 05:30:40', NULL, 0, 1),
(31, 85, 3, 3, 5, 'ali', 'ali@gmail.com', '0111111111111', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 15300.00, NULL, 'EOS23714407', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-01 05:32:54', NULL, 0, 1),
(32, 85, 3, 3, 5, 'ali', 'ali@gmail.com', '0111111111111', NULL, NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 600.00, NULL, 'EOS79681392', '01 February 2023', 'February', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '2023-02-01 05:34:17', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(23, 26, 63, 'Black', 'Large', '2', 600.00, '2023-01-31 23:24:54', '2023-01-31 23:24:54'),
(25, 28, 64, 'Black', 'Large', '1', 300.00, '2023-02-01 00:15:35', '2023-02-01 00:15:35'),
(26, 31, 68, 'Black', 'Large', '3', 5000.00, '2023-02-01 05:32:56', '2023-02-01 05:32:56'),
(27, 31, 64, 'White', 'Small', '1', 300.00, '2023-02-01 05:32:56', '2023-02-01 05:32:56'),
(28, 32, 63, 'Black', 'Large', '1', 600.00, '2023-02-01 05:34:19', '2023-02-01 05:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23'),
('eslam@gmail.com', '$2y$10$eRfGltXgNOx7SLS8daiffOqI35ZjHH2LLFYpQHGuDh39oaoro/j26', '2022-01-07 20:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) DEFAULT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tags_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1,
  `rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_ar`, `product_slug_en`, `product_slug_ar`, `product_code`, `product_qty`, `product_tags_en`, `product_tags_ar`, `product_size_en`, `product_size_ar`, `product_color_en`, `product_color_ar`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_ar`, `long_descp_en`, `long_descp_ar`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`, `admins_id`, `rate`) VALUES
(48, 28, 32, 90, NULL, 'Mirror set left and right Hyundai Grand Aten 2015', 'طقم مرايا يمين و شمال هيونداي جراند اي تن 2015', 'mirror-set-left-and-right-hyundai-grand-aten-2015', 'طقم-مرايا-يمين-و-شمال-هيونداي-جراند-اي-تن-2015', '1111222223333', '50', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '3000', NULL, 'Mirror set, right and left, Hyundai Grand Aten 2015, made in Taiwan', 'طقم مرايا يمين و شمال هيونداي جراند اي تن 2015 تيواني الصنع', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749610403914670.webp', NULL, NULL, NULL, NULL, 1, '2022-11-15 22:29:50', '2022-11-15 22:29:50', 1, 10),
(49, 28, 32, 89, NULL, 'Front left headlight original HYUNDAI I10 Grand', 'كشاف امامى شمال أصلي HYUNDAI I10 Grand', 'front-left-headlight-original-hyundai-i10-grand', 'كشاف-امامى-شمال-أصلي-HYUNDAI-I10-Grand', '111222333', '100', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '5000', NULL, 'هذا المنتج يصل اليك مباشرة من الوكيل بضمان غبور اوتو\r\nمهمتنا هي تقديم خدمات سيارات عالية المستوى تستحق رضا عملائنا وثقتهم، وهذا هو السبب في أننا نبذل قصارى جهدنا في إعطاء كل عميل من عملائنا أفضل تجربة ممكنة من خلال توفير سيارات عالية الجودة وخدمة عملاء متميزة\r\nhis product reaches you directly from the agent, with the guarantee of Ghabbour Auto\r\nOur mission is to provide high-level car services that deserve the satisfaction and trust of our customers, which is why we do our best to give each of our customers the best possible experience by providing high-quality cars and outstanding customer service.\r\nWe are proud to say that our relationship with our customers does not end when they only buy a Hyundai car, because we believe in long-term relationships, and therefore, through a dedicated team of experts, we provide after-sales service ranging from periodic maintenance to the supply of spare parts in our network of service centers continuously.', 'هذا المنتج يصل اليك مباشرة من الوكيل بضمان غبور اوتو\r\nمهمتنا هي تقديم خدمات سيارات عالية المستوى تستحق رضا عملائنا وثقتهم، وهذا هو السبب في أننا نبذل قصارى جهدنا في إعطاء كل عميل من عملائنا أفضل تجربة ممكنة من خلال توفير سيارات عالية الجودة وخدمة عملاء متميزة\r\nنحن فخورون بأن نقول إن علاقتنا بعملائنا لا تنتهي عند قيامهم بشراء سيارة هيونداي فقط، لأننا نؤمن بالعلاقات طويلة الأجل، وبالتالي، من خلال فريق متخصص من الخبراء، نقدم خدمة ما بعد البيع تتراوح بين الصيانة الدورية وتوريد قطع الغيار في شبكة مراكز الخدمة باستمرار.', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749610775475759.webp', 1, 1, NULL, NULL, 1, '2022-11-15 22:34:20', '2022-11-15 22:34:20', 1, 10),
(50, 28, 32, 89, NULL, 'HYUNDAI I10 Grand rear left lamp', 'فانوس خلفى شمال أصلي HYUNDAI I10 Grand', 'hyundai-i10-grand-rear-left-lamp', 'فانوس-خلفى-شمال-أصلي-HYUNDAI-I10-Grand', '111122223333', '60', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '2000', '1750', 'This product reaches you directly from the agent, with the guarantee of Ghabbour Auto\r\nOur mission is to provide high-level car services that deserve the satisfaction and trust of our customers, which is why we do our best to give each of our customers the best possible experience by providing high-quality cars and outstanding customer service.\r\nWe are proud to say that our relationship with our customers does not end when they only buy a Hyundai car, because we believe in long-term relationships, and therefore, through a dedicated team of experts, we provide after-sales service ranging from periodic maintenance to the supply of spare parts in our network of service centers continuously.', 'هذا المنتج يصل اليك مباشرة من الوكيل بضمان غبور اوتو\r\nمهمتنا هي تقديم خدمات سيارات عالية المستوى تستحق رضا عملائنا وثقتهم، وهذا هو السبب في أننا نبذل قصارى جهدنا في إعطاء كل عميل من عملائنا أفضل تجربة ممكنة من خلال توفير سيارات عالية الجودة وخدمة عملاء متميزة\r\nنحن فخورون بأن نقول إن علاقتنا بعملائنا لا تنتهي عند قيامهم بشراء سيارة هيونداي فقط، لأننا نؤمن بالعلاقات طويلة الأجل، وبالتالي، من خلال فريق متخصص من الخبراء، نقدم خدمة ما بعد البيع تتراوح بين الصيانة الدورية وتوريد قطع الغيار في شبكة مراكز الخدمة باستمرار.', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749610875314658.webp', 1, 1, NULL, NULL, 1, '2022-11-15 22:35:55', '2022-11-15 22:35:55', 1, 10),
(51, 25, 25, 58, NULL, 'Cycle of the Peugeot 301 range', 'سير مجموعة لبيجو 301', 'cycle-of-the-peugeot-301-range', 'سير-مجموعة-لبيجو-301', '1111112222233333', '500', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '250', NULL, 'Length [mm]:1000\r\nNumber of ribs:6\r\nMaterial: Polyester, EPDM (ethylene propylene diene Monomer (M-class) rubber)', 'الطول (مم]: 1000\r\nعدد الضلوع: 6\r\nالمادة: بوليستر ، EPDM (مطاط إيثيلين بروبيلين دييني مونومر (فئة M))', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749611171017673.jpg', NULL, NULL, NULL, NULL, 1, '2022-11-15 22:40:37', '2022-11-15 22:40:37', 1, 10),
(52, 27, 30, 81, NULL, 'ATC Water Pump - OEM 16100-29155', 'طلمبة مياه ATC - OEM 16100-29155', 'atc-water-pump---oem-16100-29155', 'طلمبة-مياه-ATC---OEM-16100-29155', '1111112222222333333', '50', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '1000', NULL, 'The water pump is part of a car\'s engine, and its function is to cool the engine by allowing coolant to flow from the radiator into the water cylinder housing.', 'تعد مضخة الماء جزءًا من محرك السيارة ، وتتمثل وظيفتها في تبريد المحرك عن طريق السماح لسائل التبريد بالتدفق من المبرد إلى غلاف الأسطوانة المائي.', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749611345420329.webp', NULL, NULL, NULL, NULL, 1, '2022-11-15 22:43:24', '2022-11-15 22:43:24', 1, 10),
(53, 24, 25, 59, NULL, 'ATC Oil Pump - OEM 25182606', 'طلمبة زيت ATC - OEM 25182606', 'atc-oil-pump---oem-25182606', 'طلمبة-زيت-ATC---OEM-25182606', '1111111144445555', '100', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '500', NULL, 'The oil pump is responsible for squeezing engine oil from the oil pan and pumping it throughout the engine. Under the pressure of the oil pump, the purified oil flows through the oil filter properly into the various parts of the Kombastin\'s inboard engine.', 'مضخة الزيت مسؤولة عن ضغط زيت المحرك من وعاء الزيت وضخه في جميع الأنحاء المحرك. تحت ضغط مضخة الزيت ، يتدفق الزيت المنقى من خلال فلتر الزيت بشكل صحيح في أجزاء مختلفة من محرك كومباستين الداخلي.', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749611574145621.jpg', NULL, NULL, NULL, NULL, 1, '2022-11-15 22:47:02', '2022-11-15 22:47:02', 1, 10),
(54, 26, 21, 53, NULL, 'R Brake ( VW GROUP ) RB2111 Front Brake Pad Set', 'طقم تيل فرامل امامى R Brake ( VW GROUP) RB2111', 'r-brake-(-vw-group-)-rb2111-front-brake-pad-set', 'طقم-تيل-فرامل-امامى-R-Brake-(-VW-GROUP)-RB2111', '111155552222', '600', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '600', NULL, 'Name	Value\r\nBrake Type	Disc Brake\r\nLength [mm]	160,1\r\nHeight [mm]	64,6\r\nThickness [mm]	19,9\r\nQuality	300\r\nWeight [kg]	2.196\r\nAxle Version	Front\r\nTechnical Information Number	182111\r\nBrake System	Trw\r\nInspection Tag	E9 90R-02A0111/3374\r\nWear Warning Contact	incl. wear warning contact\r\nEAN:	84 24073 10611 7\r\nTN:	D1760-8989', 'قيمة الاسم\r\nBrakeType قرص الفرامل\r\nالطول (مم] 160.1\r\nارتفاع (مم] 64.6\r\nسمك [مم] 19.9\r\nالجودة 300\r\nالوزن (كجم] 2.196\r\nإصدار المحور الأمامي\r\nالمعلومات الفنية رقم 182111\r\nمشكلة في نظام الفرامل\r\nعلامة التفتيش E9 90R-02A0111 / 3374\r\nارتداء تحذير الاتصال مدفوع. ارتداء اتصال تحذير\r\nرقم EAN: 84 24073 10611 7\r\nTN: D1760-8989', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749611776877187.jpg', 1, 1, NULL, NULL, 1, '2022-11-15 22:50:15', '2022-11-15 22:50:15', 1, 9),
(55, 21, 27, 71, NULL, 'Full U-shaped front bumper set, 2 pieces, Lampford 20992 02', 'طقم مقص امامي حرف U كامل 2قطعة لامفوردر 20992 02', 'full-u-shaped-front-bumper-set,-2-pieces,-lampford-20992-02', 'طقم-مقص-امامي-حرف-U-كامل-2قطعة-لامفوردر-20992-02', '1111333555', '20', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '3000', '2500', 'Fitting Position:Front Axle, Upper, Left\r\nMaterial:Aluminium\r\nSteering arm type:Control Arm\r\nPaired article numbers:20993 02\r\nSupplementary Article/Info 2:with rubber mounting\r\nSupplementary Article/Supplementary Info:with accessories\r\nLEMFÖRDER:Suspension arm\r\nItem number:20992 02\r\nManufacturer part number:20992 02\r\nManufacturer:LEMFÖRDER\r\nEAN number:4047437050280', 'موقف المناسب: المحور الأمامي ، العلوي ، الأيسر\r\nالمواد: الألومنيوم\r\nنوع ذراع التوجيه: ذراع التحكم\r\nأرقام المقالات المقترنة: 20993 02\r\nالمادة التكميلية / المعلومات 2: مع تصاعد المطاط\r\nالمادة التكميلية / المعلومات التكميلية: مع الملحقات\r\nLEMFÖRDER: ذراع تعليق\r\nرقم الصنف: 20992 02\r\nرقم جزء الشركة المصنعة: 20992 02\r\nالشركة المصنعة: LEMFORDER\r\nرقم EAN: 4047437050280', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749612210080902.jpg', 1, 1, 1, NULL, 1, '2022-11-15 23:03:40', '2022-11-15 23:03:40', 1, 10),
(56, 24, 30, 80, NULL, 'Radiator Nissan Ford Fiesta 66859', 'ريدياتير نيسينز فورد فيستا 66859', 'radiator-nissan-ford-fiesta-66859', 'ريدياتير-نيسينز-فورد-فيستا-66859', '11112335222', '30', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '1000', NULL, 'Cooling fins material:Aluminium\r\nRadiator type:Mechanically jointed cooling fins\r\nWater Tank Material (radiator):Plastic\r\nSupplementary Article/Info 2:without frame\r\nCore Length [mm]:352\r\nCore Width [mm]:544\r\nCore Depth [mm]:24\r\nNISSENS:Engine radiator\r\nItem number:66859\r\nManufacturer part number:66859\r\nManufacturer:NISSENS\r\nEAN number:5707286359383', 'مادة زعانف التبريد: المنيوم\r\nنوع المبرد: زعانف تبريد مفصلية ميكانيكياً\r\nمادة خزان المياه (المبرد): بلاستيك\r\nمقالة تكميلية / معلومات 2: بدون إطار\r\nطول النواة (مم]: 352\r\nالعرض الأساسي [مم]: 544\r\nالعمق الأساسي (مم]: 24\r\nNISSENS: مبرد المحرك\r\nرقم الصنف: 66859\r\nرقم جزء الشركة المصنعة: 66859\r\nالمُصنع: NISSENS\r\nرقم EAN: 5707286359383', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749612380346105.jpg', NULL, 1, NULL, NULL, 1, '2022-11-15 22:59:50', '2022-11-15 22:59:50', 1, 10),
(57, 27, 31, 84, NULL, 'Bosch Air Filter F026400219', 'فلتر هواء بوش F026400219', 'bosch-air-filter-f026400219', 'فلتر-هواء-بوش-F026400219', '123452156', '1000', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '200', NULL, 'Filter type:Filter Insert\r\nLength [mm]:360\r\nWidth [mm]:144\r\nHeight [mm]:40,5\r\nQuantity:1\r\nBOSCH:Air Filter\r\nItem number:F 026 400 219\r\nManufacturer part number:F 026 400 219\r\nManufacturer:BOSCH\r\nEAN number:4047024902497', 'نوع الفلتر: مرشح إدراج\r\nالطول (مم]: 360\r\nالعرض (مم]: 144\r\nالارتفاع (مم]: 40.5\r\nالكمية: 1\r\nبوش: فلتر هواء\r\nرقم الصنف: F 026400219\r\nرقم جزء الشركة المصنعة: F 026400219\r\nالشركة المصنعة: BOSCH\r\nرقم EAN: 4047024902497', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749612541176184.jpg', NULL, NULL, NULL, NULL, 1, '2022-11-15 23:02:24', '2022-11-15 23:02:24', 1, 10),
(58, 27, 25, 56, NULL, 'Bosch petrol pump 0986580399', 'طلمبة بنزين بوش 0986580399', 'bosch-petrol-pump-0986580399', 'طلمبة-بنزين-بوش-0986580399', '0986580399', '60', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '1000', NULL, 'Fitting Position:Fuel Line\r\nFuel Supply:Fuel level sensor in the auxiliary tank\r\nSupplementary Article/Info 2:with connector parts\r\nBOSCH:Fuel Feed Unit\r\nItem number:0 986 580 399\r\nManufacturer part number:0 986 580 399\r\nManufacturer:BOSCH\r\nEAN number:4047025429887', 'موقف المناسب: خط الوقود\r\nمزود الوقود: مستشعر مستوى الوقود في الخزان الإضافي\r\nالمادة التكميلية / المعلومات 2: مع أجزاء الموصل\r\nبوش: وحدة تغذية الوقود\r\nرقم الصنف 0986580399\r\nرقم جزء الشركة المصنعة: 0986580399\r\nالشركة المصنعة: BOSCH\r\nرقم EAN: 4047025429887', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749612899318914.jpg', NULL, 1, NULL, NULL, 1, '2022-11-15 23:08:05', '2022-11-15 23:08:05', 1, 10),
(59, 27, 26, 64, NULL, 'Bosch oxygen sensor', 'حساس اوكسجين بوش', 'bosch-oxygen-sensor', 'حساس-اوكسجين-بوش', '0258017178', '100', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '1500', NULL, 'Number of circuits:5\r\nRecommended replace interval [km]:250000\r\nBOSCH:Lambda Sensor\r\nItem number:0 258 017 178\r\nManufacturer part number:0 258 017 178\r\nManufacturer:BOSCH\r\nEAN number:4047024158658\r\nCondition  New\r\nUse number: BOSCH 17178, BOSCH LSU49, BOSCH LS17178', 'عدد الدوائر: 5\r\nفاصل الاستبدال الموصى به [كم]: 250000\r\nبوش: مستشعر لامدا\r\nرقم الصنف: 0258017178\r\nرقم جزء الشركة المصنعة: 0258017178\r\nالشركة المصنعة: BOSCH\r\nرقم EAN: 4047024158658\r\nحالة: جديدة\r\nرقم الاستخدام: BOSCH 17178 ، BOSCH LSU49 ، BOSCH LS17178', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749613075151265.webp', 1, NULL, NULL, NULL, 1, '2022-11-15 23:10:53', '2022-11-15 23:10:53', 1, 10),
(60, 20, 25, 57, NULL, 'NGK Laser Platinum Spark Plugs PZFR5N11T', 'طقم بوجيهات NGK ليزر بلاتينوم PZFR5N11T', 'ngk-laser-platinum-spark-plugs-pzfr5n11t', 'طقم-بوجيهات-NGK-ليزر-بلاتينوم-PZFR5N11T', 'PZFR5N11T', '1000', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '1500', '1000', 'Spanner Size:16 mm\r\nOuter thread [mm]:14,0\r\nThread Length [mm]:19,0\r\nSpark Position [mm]:7,0\r\nSpark Plug:Fixed SAE connector\r\nPlatinum Middle Electrode \r\n3 - Earthed Electrode \r\ninterference Suppression 1kOhm with gasket seat\r\nNGK:Spark Plug', 'حجم المفك: 16 مم\r\nالخيط الخارجي [مم]: 14.0\r\nطول الخيط [مم]: 19،0\r\nموضع الشرارة [مم]: 7،0\r\nقابس شرارة: موصل SAE ثابت\r\nالقطب الأوسط البلاتيني\r\n3 - القطب الكهربي الأرضي\r\nقمع التدخل 1 كيلو أوم مع مقعد طوقا\r\nNGK: سبارك بلج', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749613210277995.jpg', 1, 1, 1, NULL, 1, '2022-11-15 23:13:18', '2022-11-15 23:13:18', 1, 10),
(61, 21, 27, 69, NULL, 'Front Shock Absorber Set Hyundai Excel KYB 1991-2000', 'طقم مساعدين امامي هيونداي اكسيل KYB موديل 1991- 2000', 'front-shock-absorber-set-hyundai-excel-kyb-1991-2000', 'طقم-مساعدين-امامي-هيونداي-اكسيل-KYB-موديل-1991--2000', '124166533444', '44', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '2000', NULL, 'Front Shock Absorber Set Hyundai Excel KYB 1991-2000', 'طقم مساعدين امامي هيونداي اكسيل KYB  موديل 1991-2000', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749613399192227.jpg', NULL, 1, NULL, 1, 1, '2022-11-15 23:16:02', '2022-11-15 23:16:02', 1, 10),
(62, 26, 28, 72, NULL, 'ACDelco Car Battery - 62Ah - TD70 - L', 'ايه سي ديلكو بطارية سيارة - 62 أمبير - TD70 - L', 'acdelco-car-battery---62ah---td70---l', 'ايه-سي-ديلكو-بطارية-سيارة---62-أمبير---TD70---L', '44568745679', '50', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '2000', NULL, 'Best Seller car batteries in the Middle East.\r\n\r\nThe ACDelco-TD70 / 62 AH L easy-to-use batteries are the best maintenance-free car batteries that come with 12V and 62Ah of power. ACDelco Car batteries are compatible with every Japanese, European, Korean, and American car.', 'أفضل بطاريات سيارات مبيعاً في الشرق الأوسط.\r\n\r\nتعد بطاريات ACDelco-TD70 / 62 AH L سهلة الاستخدام أفضل بطاريات السيارات التي لا تحتاج إلى صيانة والتي تأتي بقوة 12 فولت و 62 أمبير في الساعة. بطاريات السيارات من إيه سي ديلكو متوافقة مع جميع السيارات اليابانية والأوروبية والكورية والأمريكية.', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749613588897023.jpg', NULL, 1, 1, NULL, 1, '2022-11-15 23:19:03', '2022-11-15 23:19:03', 1, 10),
(63, 23, 21, 54, NULL, 'Front drum Bendix Peugeot 301', 'طنبورة امامي بندكس بيجو 301', 'front-drum-bendix-peugeot-301', 'طنبورة-امامي-بندكس-بيجو-301', '463456346', '98', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '600', NULL, 'Front drum Peugeot 301 Buy now and you will receive your product from the agent directly to your home\r\n\r\nBendix brand made in India\r\n\r\n  Only one piece', 'طنبورة امامي بيجو 301 اشتري الان و سيصلك منتجك من الوكيل مباشره الي منزلك\r\n\r\nماركة بندكس صنع في الهند\r\n\r\n قطعة واحدة فقط', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749613772278867.jpg', NULL, 1, 1, NULL, 1, '2022-11-15 23:21:58', '2023-01-31 23:29:21', 1, 10),
(64, 22, 25, 56, NULL, 'DAEWHA petrol pump', 'طرمبة بنزين دايوا', 'daewha-petrol-pump', 'طرمبة-بنزين-دايوا', '15785745', '99', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '400', '300', 'Part Manufacturer : null\r\nEngine : Multi\r\nType : Fuel System\r\nSub Type : Fuel Pump\r\nPart Number : DFP1\r\nYear : Multi\r\nMake : null', 'الشركة المصنعة للقطعة: null\r\nالمحرك: متعدد\r\nالنوع: نظام وقود\r\nالصنف: مضخة وقود\r\nرقم الجزء: DFP1\r\nالسنة: متعددة\r\nالصنع: null', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1749614055682124.jpg', 1, 1, 1, NULL, 1, '2022-11-15 23:26:28', '2022-12-28 07:17:48', 1, 9),
(68, 26, 33, 91, NULL, 'dlkfsfg', 'بكنلحثيقلثلف', 'dlkfsfg', 'بكنلحثيقلثلف', '684644', '1000', 'test', 'test', 'Small,Medium,Large', 'Small,Medium,Large', 'White,Black', 'White,Black', '5000', NULL, 'jdkfneger', 'منيبخهثقلت', '<p>Long Description English</p>', '<p>Long Description Arabic</p>', 'upload/products/thambnail/1756612637699339.jpg', 1, 1, NULL, NULL, 1, '2023-02-01 05:25:56', '2023-02-01 05:25:56', 1, 449);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Carzone Online Shop', 'Carzone', 'Best online shop,best product, best e-commerce site, best e-commerce product', 'Learn Programming skills, from absolute beginner to advanced mastery.We try to create project base course which help your to learn professionally and make you fell as a complete developer.', 'window.dataLayer = window.dataLayer || [];\r\nfunction gtag(){dataLayer.push(arguments);}\r\ngtag(\'js\', new Date());\r\ngtag(\'config\', \'UA-84816806-1\');', NULL, '2022-02-25 15:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CeFBOjzWSbz3Zar7IfS0wD95GapYiYQl42Kg5SIc', 85, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoid0wzd1dJZFp5RUlYc1Vpczd3UDVEaW0wM2ZlajVsV0xYZklVOW9GMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG9wIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czozMjoiMmRiMzc5ZTUyNTkwNmI1MDY2Mzk5MzZjYWNkYWVmYmIiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjoxMTp7czo1OiJyb3dJZCI7czozMjoiMmRiMzc5ZTUyNTkwNmI1MDY2Mzk5MzZjYWNkYWVmYmIiO3M6MjoiaWQiO3M6MjoiNjIiO3M6MzoicXR5IjtzOjE6IjEiO3M6NDoibmFtZSI7czo3OiJkbGtmc2ZnIjtzOjU6InByaWNlIjtkOjIwMDA7czo2OiJ3ZWlnaHQiO2Q6MTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjQ2OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsLzE3NDk2MTM1ODg4OTcwMjMuanBnIjtzOjU6ImNvbG9yIjtzOjU6IldoaXRlIjtzOjQ6InNpemUiO3M6NToiU21hbGwiO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NzoidGF4UmF0ZSI7aTowO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO3M6ODoiaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4NTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGpBWFh3Qm5UdEd1Qi93YTBBYVZ2bnUzSXpTUmdjSW1XU1dKUEVFT2JKc210MUNPU2x5dGZxIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRqQVhYd0JuVHRHdUIvd2EwQWFWdm51M0l6U1JnY0ltV1NXSlBFRU9iSnNtdDFDT1NseXRmcSI7czo5OiJhcHBsb2NhbGUiO3M6MjoiYXIiO30=', 1675618919),
('iFTVvJ6Gi7jC3FtxrM0Ob3uwQ77DYWEbXEHSRzYq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiak9sRDFlV1NLYU13Y1RQS1V3dXk0VTRjTUNadm1RaHdldnFXYzY4cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjEzZDliMmZkYTAzMWU0YjQzYzE4NWMzMzU3MTlkZWZjIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6MTE6e3M6NToicm93SWQiO3M6MzI6IjEzZDliMmZkYTAzMWU0YjQzYzE4NWMzMzU3MTlkZWZjIjtzOjI6ImlkIjtzOjI6IjY4IjtzOjM6InF0eSI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6MjM6IkJvc2NoIHBldHJvbCBwdW1wIDA5Li4uIjtzOjU6InByaWNlIjtkOjUwMDA7czo2OiJ3ZWlnaHQiO2Q6MTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjQ2OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsLzE3NTY2MTI2Mzc2OTkzMzkuanBnIjtzOjU6ImNvbG9yIjtzOjU6IldoaXRlIjtzOjQ6InNpemUiO3M6NToiU21hbGwiO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NzoidGF4UmF0ZSI7aTowO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO3M6ODoiaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX19', 1676069618),
('lIeXj8kXJx4364uyKMZIx9vnPXUHwB9HQClKgj47', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2hLWlJENFZuVXNjSFQ0QlBYVkk1NU1xRlVYOWxaeFBXbWhZU0pYbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678955236),
('O9w93ZNyXwURlx21v3ePePu3aSygiOTcf7Utw2hG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6ImluSk0yRzNkZDVDV0lCckNjM0ZKcEpNSGt5QVBUTVloeEtyMTFRdmEiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW51c2Vycm9sZS9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiIxM2Q5YjJmZGEwMzFlNGI0M2MxODVjMzM1NzE5ZGVmYyI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjExOntzOjU6InJvd0lkIjtzOjMyOiIxM2Q5YjJmZGEwMzFlNGI0M2MxODVjMzM1NzE5ZGVmYyI7czoyOiJpZCI7czoyOiI2OCI7czozOiJxdHkiO3M6MToiMSI7czo0OiJuYW1lIjtzOjIzOiJCb3NjaCBwZXRyb2wgcHVtcCAwOS4uLiI7czo1OiJwcmljZSI7ZDo1MDAwO3M6Njoid2VpZ2h0IjtkOjE7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6Mzp7czo1OiJpbWFnZSI7czo0NjoidXBsb2FkL3Byb2R1Y3RzL3RoYW1ibmFpbC8xNzU2NjEyNjM3Njk5MzM5LmpwZyI7czo1OiJjb2xvciI7czo1OiJXaGl0ZSI7czo0OiJzaXplIjtzOjU6IlNtYWxsIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjc6InRheFJhdGUiO2k6MDtzOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDY6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBkaXNjb3VudFJhdGUiO2k6MDtzOjg6Imluc3RhbmNlIjtzOjc6ImRlZmF1bHQiO319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODU7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRqQVhYd0JuVHRHdUIvd2EwQWFWdm51M0l6U1JnY0ltV1NXSlBFRU9iSnNtdDFDT1NseXRmcSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkakFYWHdCblR0R3VCL3dhMEFhVnZudTNJelNSZ2NJbVdTV0pQRUVPYkpzbXQxQ09TbHl0ZnEiO3M6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE5OiJwYXNzd29yZF9oYXNoX2FkbWluIjtzOjYwOiIkMnkkMTAkZDRVaXpRdGNyMEdiaDVpQkFYRXMvZUJUVnU3Z2JVaHllSlJxR2x1L00yOUFYaE9qczViTk8iO3M6NjoiY291cG9uIjthOjQ6e3M6MTE6ImNvdXBvbl9uYW1lIjtzOjU6IkdBRDUwIjtzOjE1OiJjb3Vwb25fZGlzY291bnQiO2k6NTA7czoxNToiZGlzY291bnRfYW1vdW50IjtkOjI1MDA7czoxMjoidG90YWxfYW1vdW50IjtkOjI1MDA7fXM6MTU6InByb2R1Y3RfY29tcGFyZSI7YToyOntpOjY4O3M6MjoiNjgiO2k6NjQ7czoyOiI2NCI7fX0=', 1678809940);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`, `admins_id`) VALUES
(1, 2, 'Dokki', '2022-02-08 18:45:25', '2022-02-08 18:45:25', 1),
(2, 3, 'Maadi', '2022-01-20 23:28:44', '2022-01-20 23:28:44', 1),
(3, 3, 'Nasr City', '2022-01-20 23:36:21', '2022-01-20 23:36:21', 1),
(4, 2, 'Mohandseen', '2022-02-08 18:45:43', '2022-02-08 18:45:43', 1),
(5, 7, 'Agami', '2022-02-08 18:46:09', '2022-02-08 18:46:09', 1),
(6, 6, 'New Aswan', '2022-02-08 18:46:31', '2022-02-08 18:46:31', 1),
(7, 5, 'TV Street', '2022-02-08 18:47:15', '2022-02-08 18:47:15', 1),
(8, 4, 'Naga Hamadi', '2022-02-08 18:47:39', '2022-02-08 18:47:39', 1),
(9, 8, 'New Sohag', '2022-03-11 10:56:00', '2022-03-11 10:56:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`, `admins_id`) VALUES
(2, 'Giza', '2022-02-08 18:43:59', '2022-02-08 18:43:59', 1),
(3, 'Cairo', '2022-02-08 18:44:08', '2022-02-08 18:44:08', 1),
(4, 'Qena', '2022-02-08 18:44:22', '2022-02-08 18:44:22', 1),
(5, 'Luxor', '2022-02-08 18:44:28', '2022-02-08 18:44:28', 1),
(6, 'Aswan', '2022-02-08 18:44:36', '2022-02-08 18:44:36', 1),
(7, 'Alexandria', '2022-02-08 18:45:04', '2022-02-08 18:45:04', 1),
(8, 'Sohag', '2022-03-11 10:53:09', '2022-03-11 10:53:09', 9);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`, `admins_id`) VALUES
(1, 2, 4, 'League of Arab States', '2022-02-08 18:50:20', '2022-02-08 18:50:20', 1),
(2, 2, 1, 'Dokki', '2022-02-08 18:49:32', '2022-02-08 18:49:32', 1),
(3, 3, 2, 'Saqer Qurish', '2022-02-08 18:48:58', '2022-02-08 18:48:58', 1),
(4, 3, 2, 'Old Maadi', '2022-02-08 18:48:37', '2022-02-08 18:48:37', 1),
(5, 3, 3, 'Makram Abeed', '2022-02-08 18:51:01', '2022-02-08 18:51:01', 1),
(6, 8, 9, 'first district', '2022-03-11 11:08:55', '2022-03-11 11:08:55', 9);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1739434818197386.png', '01060838210', '01060838210', 'eslamelbazedy@gmail.com', 'carzone', '9b street', 'https://www.facebook.com/profile.php?id=100009242350772', 'https://twitter.com/Eslam3basset', 'https://www.linkedin.com/in/eslamabdelbasset/', NULL, NULL, '2022-07-26 14:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`, `admins_id`) VALUES
(1, 'upload/slider/1739366925497126.webp', 'Lowest Price', 'High Quality - Extreme Performance', 1, '2022-01-14 15:26:02', '2022-07-25 20:52:43', 1),
(3, 'upload/slider/1739366818063088.webp', 'LOWEST PRICE', 'High Quality - Extreme Performance', 1, '2022-01-14 20:15:53', '2022-07-25 20:51:01', 1),
(4, 'upload/slider/1739371008394902.webp', 'Lowest Price', 'High Quality - Extreme Performance', 1, '2022-01-14 20:16:29', '2022-07-25 21:57:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name_en`, `subcategory_name_ar`, `subcategory_slug_en`, `subcategory_slug_ar`, `created_at`, `updated_at`, `admins_id`) VALUES
(53, 21, 'Brake Pads', 'تيل فرامل', 'brake-pads', 'تيل-فرامل', '2022-11-15 20:30:33', '2022-11-15 20:30:33', 1),
(54, 21, 'Brake Rotor', 'طنابير الفرامل', 'brake-rotor', 'طنابير-الفرامل', '2022-11-15 20:31:03', '2022-11-15 20:31:43', 1),
(55, 21, 'Master Cylinder (Brake System)', 'ماستر الفرامل', 'master-cylinder-(brake-system)', 'ماستر-الفرامل', '2022-11-15 20:32:21', '2022-11-15 20:32:21', 1),
(56, 25, 'Fuel Pump', 'مضخه وقود', 'fuel-pump', 'مضخه-وقود', '2022-11-15 20:37:27', '2022-11-15 20:37:27', 1),
(57, 25, 'Spark Plug', 'بوجيهات', 'spark-plug', 'بوجيهات', '2022-11-15 20:38:10', '2022-11-15 20:38:10', 1),
(58, 25, 'Belt', 'سيور', 'belt', 'سيور', '2022-11-15 20:38:33', '2022-11-15 20:38:33', 1),
(59, 25, 'OIL PUMP', 'مضخه زيت', 'oil-pump', 'مضخه-زيت', '2022-11-15 20:42:38', '2022-11-15 20:42:38', 1),
(60, 25, 'OIL PRESSURE SWITCH', 'حساس ضغط الزيت', 'oil-pressure-switch', 'حساس-ضغط-الزيت', '2022-11-15 20:43:12', '2022-11-15 20:43:12', 1),
(63, 25, 'TIMING BELT COMPONENT KIT', 'طقم مكونات سيور التوقيت', 'timing-belt-component-kit', 'طقم-مكونات-سيور-التوقيت', '2022-11-15 20:46:09', '2022-11-15 20:46:09', 1),
(64, 26, 'Oxygen Sensor', 'مستشعر الأكسجين', 'oxygen-sensor', 'مستشعر-الأكسجين', '2022-11-15 20:50:01', '2022-11-15 20:50:01', 1),
(65, 26, 'Coolant Temperature Sensor', 'مستشعر حراره', 'coolant-temperature-sensor', 'مستشعر-حراره', '2022-11-15 20:50:40', '2022-11-15 20:50:40', 1),
(66, 26, 'Engine Control Computer', 'كمبيوتر التحكم في المحرك', 'engine-control-computer', 'كمبيوتر-التحكم-في-المحرك', '2022-11-15 20:51:08', '2022-11-15 20:51:08', 1),
(67, 26, 'Crankshaft Position Sensor', 'مستشعر موضع عمود الكرنك', 'crankshaft-position-sensor', 'مستشعر-موضع-عمود-الكرنك', '2022-11-15 20:52:11', '2022-11-15 20:52:11', 1),
(68, 26, 'IDLE AIR CONTROL VALVE', 'صمام تحكم بالهواء خامل', 'idle-air-control-valve', 'صمام-تحكم-بالهواء-خامل', '2022-11-15 20:52:45', '2022-11-15 20:52:45', 1),
(69, 27, 'Shocks and Struts', 'الصدمات والقوائم الانضغاطية', 'shocks-and-struts', 'الصدمات-والقوائم-الانضغاطية', '2022-11-15 20:56:09', '2022-11-15 20:56:09', 1),
(70, 27, 'Wheel Bearing/Hub Assembly-Front', 'عجلة تحمل / تجميع المحور الأمامي', 'wheel-bearing/hub-assembly-front', 'عجلة-تحمل-/-تجميع-المحور-الأمامي', '2022-11-15 20:56:30', '2022-11-15 20:56:30', 1),
(71, 27, 'Control Arm - Lower', 'ذراع التحكم - السفلي(المقصات)', 'control-arm---lower', 'ذراع-التحكم---السفلي(المقصات)', '2022-11-15 20:57:20', '2022-11-15 20:57:20', 1),
(72, 28, 'Battery', 'بطاريه', 'battery', 'بطاريه', '2022-11-15 20:59:23', '2022-11-15 20:59:23', 1),
(73, 28, 'Alternator', 'دينامو', 'alternator', 'دينامو', '2022-11-15 21:00:03', '2022-11-15 21:00:03', 1),
(74, 28, 'Starter', 'مارش', 'starter', 'مارش', '2022-11-15 21:00:35', '2022-11-15 21:00:35', 1),
(75, 29, 'Mirror Assembly', 'مرايات جانبيه', 'mirror-assembly', 'مرايات جانبيه', '2022-11-15 21:03:25', '2022-11-15 21:03:25', 1),
(76, 29, 'Headlight Assembly', 'مصابيح اضاءه', 'headlight-assembly', 'مصابيح اضاءه', '2022-11-15 21:03:59', '2022-11-15 21:03:59', 1),
(77, 29, 'BUMPER', 'اكصدام', 'bumper', 'اكصدام', '2022-11-15 21:05:27', '2022-11-15 21:05:27', 1),
(78, 29, 'Wheel\'s', 'جنوط', 'wheel\'s', 'جنوط', '2022-11-15 21:06:31', '2022-11-15 21:06:31', 1),
(79, 29, 'DOORS', 'ابواب', 'doors', 'ابواب', '2022-11-15 21:07:22', '2022-11-15 21:07:22', 1),
(80, 30, 'Radiator', 'ريداتير', 'radiator', 'ريداتير', '2022-11-15 21:11:18', '2022-11-15 21:11:18', 1),
(81, 30, 'Water Pump', 'مضخه مياه', 'water-pump', 'مضخه-مياه', '2022-11-15 21:11:41', '2022-11-15 21:11:41', 1),
(82, 30, 'A/C Compressor', 'ضاغط مكيف الهواء', 'a/c-compressor', 'ضاغط-مكيف-الهواء', '2022-11-15 21:12:07', '2022-11-15 21:12:07', 1),
(83, 31, 'Oil Filter', 'فلتر زيت', 'oil-filter', 'فلتر-زيت', '2022-11-15 21:14:43', '2022-11-15 21:14:43', 1),
(84, 31, 'Air Filter', 'فلتر هواء', 'air-filter', 'فلتر-هواء', '2022-11-15 21:14:58', '2022-11-15 21:14:58', 1),
(85, 31, 'Fuel Filter', 'فلتر وقود', 'fuel-filter', 'فلتر-وقود', '2022-11-15 21:15:30', '2022-11-15 21:15:30', 1),
(86, 32, 'DOORS', 'ابواب', 'doors', 'ابواب', '2022-11-15 21:31:22', '2022-11-15 21:31:22', 1),
(87, 32, 'Wheel\'s', 'جنوط', 'wheel\'s', 'جنوط', '2022-11-15 21:31:44', '2022-11-15 21:31:44', 1),
(88, 32, 'BUMPER', 'اكصدام', 'bumper', 'اكصدام', '2022-11-15 21:31:56', '2022-11-15 21:31:56', 1),
(89, 32, 'Headlight Assembly', 'مصابيح اضاءه', 'headlight-assembly', 'مصابيح-اضاءه', '2022-11-15 21:32:19', '2022-11-15 21:32:19', 1),
(90, 32, 'Mirror Assembly', 'مرايات جانبيه', 'mirror-assembly', 'مرايات-جانبيه', '2022-11-15 21:32:38', '2022-11-15 21:32:38', 1),
(91, 33, 'diaaaa', 'بيليلي', 'diaaaa', 'بيليلي', '2023-02-01 05:24:51', '2023-02-01 05:24:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admins_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` tinyint(1) DEFAULT 1,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `last_seen`, `userType`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(57, 'carzone', 'car@carzone.com', '01000000000', NULL, '$2y$10$cVyIMvV/8wyV3kCgK9WzV./q/rKqv3GKlBP.NxCO/I8MOcyQzG3pm', NULL, NULL, 'fm8bYH3b476omxYjSErFxNHb67IwziJRPr8yS2pRRANqjrUC08hXtFALvgxX', NULL, NULL, '2023-01-31 22:17:07', '2023-01-31 22:18:44', '2023-02-01 00:18:44', 1, 0, 'avatar.png', 0, '#2180f3'),
(75, 'mohameddiaa', 'mohamed@email.com', '01141114491', NULL, '$2y$10$ZOVQvJcksSGCoVLWfC034umDpnfxHKp76R8izD1n3aiRHKAQ1vTmO', NULL, NULL, NULL, NULL, NULL, '2023-01-31 23:37:59', '2023-01-31 23:38:00', '2023-02-01 01:38:00', 1, 0, 'avatar.png', 0, '#2180f3'),
(79, 'mee', 'mooko@gmail.com', '01234567899', NULL, '$2y$10$wiRNyC6nK7nFoow2e7N6Me8TSfoF89FnnMmz7wuE8N8tn3X57iQVW', NULL, NULL, NULL, NULL, NULL, '2023-01-31 23:49:16', '2023-01-31 23:49:17', '2023-02-01 01:49:17', 1, 0, 'avatar.png', 0, '#2180f3'),
(85, 'ali', 'ali@gmail.com', '0111111111111', NULL, '$2y$10$jAXXwBnTtGuB/wa0AaVvnu3IzSRgcImWSWJPEEObJsmt1COSlytfq', NULL, NULL, 'phsd6e7js03p38iJ5z3NOXc9T7ncKobhw3VkzRkDBuoWKr5WwnX17GUdkFPx', NULL, '2023-02-01-07-35284093687_1971901273012888_8150744876455922071_n.jpg', '2023-02-01 00:05:36', '2023-03-14 14:04:57', '2023-03-14 16:04:57', 1, 0, 'avatar.png', 0, '#2180f3'),
(86, 'Ahmed', 'ahmedelmaalawi@gmail.com', '01019255748', NULL, '$2y$10$VWoKhyOt5qiVATtKjH9tOe/78NUp9ZNao7TEEIoUK5eUirr6U.Gom', NULL, NULL, NULL, NULL, NULL, '2023-02-01 03:42:11', '2023-02-01 03:43:42', '2023-02-01 05:43:42', 1, 0, 'avatar.png', 0, '#2180f3');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(91, 2, 10, '2022-07-27 16:27:56', '2022-07-27 16:27:56'),
(92, 49, 64, '2023-01-03 20:16:00', '2023-01-03 20:16:00'),
(93, 49, 63, '2023-01-03 20:16:02', '2023-01-03 20:16:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compares`
--
ALTER TABLE `compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `compares`
--
ALTER TABLE `compares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
