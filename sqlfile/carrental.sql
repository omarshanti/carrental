-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 02:28 PM
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
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-06-18 12:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `contactdb`
--

CREATE TABLE `contactdb` (
  `id` int(11) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdb`
--

INSERT INTO `contactdb` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Yamen - Sanaa', 'admin@admin.com', '0590000000', NULL, '2022-09-02 19:56:50');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
('admin@gmail.com', '$2y$10$JuwrAd/lXi8Q0x9x3y1hdOextllg7xP.2bi1SOgfS/qiEF4ot/Ize', '2022-09-08 04:35:01'),
('omar.sh.121995@gmail.com', '$2y$10$4ft4HKrui3rtLhzxsdU5GO06/x8yOmfyIWhrJhQeVCYGFIC5ezAGm', '2022-09-08 04:39:59');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ToDate` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`, `created_at`, `updated_at`) VALUES
(5, 'admin@gmail.com', 4, '0000-00-00', '0000-00-00', 'car car', 2, '2022-08-29 11:06:03', '2022-08-29 08:06:03', '2022-09-04 05:57:11'),
(6, 'admin@gmail.com', 3, '0000-00-00', '0000-00-00', 'I need This Car to 20 days', 1, '2022-08-29 12:51:57', '2022-08-29 09:51:57', '2022-09-04 05:55:21'),
(7, 'admin@gmail.com', 5, '0000-00-00', '0000-00-00', 'Nice Car', 2, '2022-08-31 09:37:18', '2022-08-31 06:37:18', '2022-09-04 05:57:15'),
(8, 'admin@gmail.com', 1, '0000-00-00', '0000-00-00', 'rrrrrrrrrrr', 1, '2022-08-31 12:02:02', '2022-08-31 09:02:02', '2022-09-04 05:57:08'),
(9, 'admin@gmail.com', 1, '0000-00-00', '0000-00-00', 'fvfgdg', 1, '2022-08-31 12:03:47', '2022-08-31 09:03:47', '2022-09-03 09:08:13'),
(10, 'admin@gmail.com', 1, '0000-00-00', '0000-00-00', 'sssssss', 0, '2022-08-31 12:06:53', '2022-08-31 09:06:53', '2022-08-31 09:06:53'),
(11, 'admin@gmail.com', 2, '0000-00-00', '0000-00-00', 'omar', 0, '2022-08-31 13:01:55', '2022-08-31 10:01:55', '2022-08-31 10:01:55'),
(12, 'admin@gmail.com', 3, '0000-00-00', '0000-00-00', 'caar', 0, '2022-09-05 13:57:51', '2022-09-05 10:57:51', '2022-09-05 10:57:51'),
(13, 'admin@gmail.com', 3, '0000-00-00', '0000-00-00', 'car', 0, '2022-09-05 13:58:39', '2022-09-05 10:58:39', '2022-09-05 10:58:39'),
(14, 'admin@gmail.com', 9, '0000-00-00', '0000-00-00', 'car', 0, '2022-09-07 06:09:50', '2022-09-07 03:09:50', '2022-09-07 03:09:50'),
(15, 'test@gmail.com', 9, '0000-00-00', '0000-00-00', 'asdasdas', 0, '2022-09-08 08:49:56', '2022-09-08 05:49:56', '2022-09-08 05:49:56'),
(16, 'test@gmail.com', 2, '0000-00-00', '0000-00-00', 'need car', 0, '2022-09-11 13:01:59', '2022-09-11 10:01:59', '2022-09-11 10:01:59'),
(17, 'test@gmail.com', 9, '0000-00-00', '0000-00-00', 'car', 0, '2022-09-11 13:03:34', '2022-09-11 10:03:34', '2022-09-11 10:03:34'),
(18, 'test@gmail.com', 9, '2022/1/1', '2022/2/2', 'car', 0, '2022-09-12 09:43:47', '2022-09-12 06:43:47', '2022-09-12 06:43:47'),
(19, 'test@gmail.com', 9, '2022/05/02', '2022/06/02', 'car', 0, '2022-09-12 09:44:23', '2022-09-12 06:44:23', '2022-09-12 06:44:23'),
(20, 'test@gmail.com', 9, '01/02/2022', '11/02/2022', 'car', 0, '2022-09-12 09:47:31', '2022-09-12 06:47:31', '2022-09-12 06:47:31'),
(21, 'test@gmail.com', 9, '13/09/2022', '12/10/2022', 'car', 0, '2022-09-12 09:49:06', '2022-09-12 06:49:06', '2022-09-12 06:49:06'),
(22, 'test@gmail.com', 2, '01/02/2022', '15/02/2022', 'يسيسب', 0, '2022-09-12 11:26:13', '2022-09-12 08:26:13', '2022-09-12 08:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `brand_ar` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `brand_ar`, `created_at`, `updated_at`) VALUES
(1, 'Maruti', 'ماريتو', '2017-06-18 16:24:34', '2022-09-08 06:20:25'),
(2, 'BMW', 'بي أم دبليو', '2017-06-18 16:24:50', '2022-09-08 06:20:18'),
(3, 'Audi', 'أودي', '2017-06-18 16:25:03', '2022-09-08 06:20:03'),
(4, 'Nissan', 'نيسان', '2017-06-18 16:25:13', '2022-09-08 06:19:52'),
(5, 'Toyota', 'تويتا', '2017-06-18 16:25:24', '2022-09-08 06:19:44'),
(7, 'Marutiu', 'ماريتو', '2017-06-19 06:22:13', '2022-09-08 06:19:40'),
(8, 'Mercedes', 'مرسيدس', '2022-09-01 08:04:20', '2022-09-08 06:19:30'),
(11, 'Nissan', 'نيسان', '2022-09-01 10:13:09', '2022-09-08 06:19:24'),
(13, 'Mercedes', 'مرسيدس', '2022-09-06 15:58:28', '2022-09-08 06:19:19'),
(14, 'Bejoo', 'بيجوو', '2022-09-06 17:46:33', '2022-09-06 17:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `name`, `message`, `EmailId`, `ContactNo`, `created_at`, `updated_at`) VALUES
(7, 'Omar Yousef', 'Nice Website', 'sawayn.rigoberto@example.com', '46564546', '2022-09-02 18:43:49', '2022-09-02 18:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Harry Den', 'webhostingamigo@gmail.com', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2017-06-18 10:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `detail` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail_ar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`, `detail_ar`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', 'terms', '<div>&lt;div dir=\"rtl\"&gt;صفحة الخصوصية&lt;/div&gt;</div>', '<div>&lt;div dir=\"rtl\"&gt;صفحة الخصوصية&lt;/div&gt;</div>', NULL, '2022-09-09 16:52:05'),
(2, 'Privacy Policy', 'privacy', '<div>&nbsp;&lt;div&gt;&lt;p&gt;&lt;span style=\"font-family: Verdana;\"&gt;&lt;b&gt;How do I use discounts coupons? Except for promotion codes, Our discounts are applied automatically if your reservation meets any of the criteria mentioned above. To use a promotion code, simply enter the code on the homepage widget as you start your reservation. You can do this by selecting the \"Have a promotion code?\" prompt. Promotion codes can also be entered on the checkout page, under Reservation Total. Please note that the promotion code prompt does not appear for certain types of reservations, such as reservations made on the Deals page. Our Discounts Terms &amp; Conditions We no longer offer or accept returning customer discounts. All discounts are non-transferable and cannot be combined with additional promotions or discounts. * Liability in case accident: The hirer should have coverage through his own accident and liability insurance. The renting company is not responsible under any circumstances for accidents or damages caused to the hirer or which the hirer causes to any third party or cases of liability dsfdsfds&lt;/b&gt;&lt;/span&gt;&lt;span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"&gt;&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&nbsp;</div>', '<div>&lt;div dir=\"rtl\"&gt;صفحة الخصوصية&lt;/div&gt;</div>', NULL, '2022-09-09 16:52:25'),
(3, 'About Us ', 'aboutus', '<div>&lt;div&gt;&lt;h1&gt;&lt;strong&gt;omar&lt;/strong&gt;&lt;/h1&gt;&lt;/div&gt;</div>', '<div dir=\"rtl\"><strong><del>صفحة نبذة عنا باللغة العربية تركس &nbsp;</del></strong></div>', NULL, '2022-09-09 15:51:25'),
(11, 'FAQs', 'faqs', '<div>&lt;p&gt;&lt;span style=\"font-family: Verdana;\"&gt;&lt;b&gt;How do I use discounts coupons? Except for promotion codes, Our discounts are applied automatically if your reservation meets any of the criteria mentioned above. To use a promotion code, simply enter the code on the homepage widget as you start your reservation. You can do this by selecting the \"Have a promotion code?\" prompt. Promotion codes can also be entered on the checkout page, under Reservation Total. Please note that the promotion code prompt does not appear for certain types of reservations, such as reservations made on the Deals page. Our Discounts Terms &amp; Conditions We no longer offer or accept returning customer discounts. All discounts are non-transferable and cannot be combined with additional promotions or discounts. * Liability in case accident: The hirer should have coverage through his own accident and liability insurance. The renting company is not responsible under any circumstances for accidents or damages caused to the hirer or which the hirer causes to any third party or cases of liability dsfdsfds&lt;/b&gt;&lt;/span&gt;&lt;span style=\"color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"&gt;&lt;/span&gt;&lt;/p&gt;</div>', '<div dir=\"rtl\">كيف أستخدم كوبونات الخصومات؟ باستثناء رموز الترويج ، يتم تطبيق خصوماتنا تلقائيًا إذا كان حجزك يفي بأي من المعايير المذكورة أعلاه. لاستخدام رمز الترويج ، ما عليك سوى إدخال الرمز في أداة الصفحة الرئيسية عند بدء الحجز. يمكنك القيام بذلك عن طريق تحديد الخيار \"هل لديك رمز ترويجي؟\" مستعجل. يمكن أيضًا إدخال رموز الترويج في صفحة الخروج ، ضمن إجمالي الحجز. يرجى ملاحظة أن موجه رمز الترويج لا يظهر لأنواع معينة من الحجوزات ، مثل الحجوزات التي تم إجراؤها على صفحة الصفقات. شروط وأحكام الخصومات الخاصة بنا لم نعد نقدم أو نقبل خصومات العملاء العائدين. جميع الخصومات غير قابلة للتحويل ولا يمكن دمجها مع عروض ترويجية أو خصومات إضافية. * المسؤولية في حالة وقوع حادث: يجب أن يكون المستأجر تغطية من خلال التأمين ضد الحوادث والمسئولية. الشركة المستأجرة ليست مسؤولة تحت أي ظرف من الظروف عن الحوادث أو الأضرار التي تلحق بالمستأجر أو التي يسببها المستأجر لأي طرف ثالث أو قضايا المسؤولية</div>', NULL, '2022-09-09 16:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`, `created_at`, `updated_at`) VALUES
(7, 'admin@admin.com', '2022-09-02 23:17:58', '2022-09-02 20:17:58', '2022-09-02 20:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Testimonial` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `test_ar` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `test_ar`, `PostingDate`, `created_at`, `updated_at`, `status`) VALUES
(3, 'admin@gmail.com', 'test trstimonal', 'فحص4', '2022-08-31 11:01:23', '2022-08-31 08:01:23', '2022-09-06 17:03:59', 0),
(4, 'admin@gmail.com', 'test 2', 'فحص3', '2022-08-31 11:02:39', '2022-08-31 08:02:39', '2022-09-02 15:45:11', 1),
(5, 'admin@gmail.com', 'dsadasdasdasd', 'فحص2', '2022-08-31 13:45:35', '2022-08-31 10:45:35', '2022-09-05 11:00:55', 1),
(6, 'admin@gmail.com', 'gggggggggggggggggggggggg', 'فحص1', '2022-09-01 06:23:09', '2022-09-01 03:23:09', '2022-09-06 15:02:29', 1),
(10, 'test@gmail.com', 'test', 'فحص', '2022-09-06 20:35:50', '2022-09-06 17:35:50', '2022-09-06 17:35:50', 1),
(11, 'test@gmail.com', 'faddsfsdfsd', 'سيبسي', '2022-09-11 12:53:04', '2022-09-11 09:53:04', '2022-09-11 09:53:04', 1),
(12, 'test@gmail.com', 'سيشيسسشي', 'سشيشس', '2022-09-11 12:53:59', '2022-09-11 09:53:59', '2022-09-11 09:53:59', 1),
(13, 'test@gmail.com', 'fdf', 'قبسبس', '2022-09-12 11:24:39', '2022-09-12 08:24:39', '2022-09-12 08:24:39', 1),
(14, 'test@gmail.com', 'يسسيس', 'سيسيس', '2022-09-12 11:24:53', '2022-09-12 08:24:53', '2022-09-12 08:24:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'Harry Den', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2147483647', NULL, NULL, NULL, NULL, '2017-06-17 19:59:27', '2017-06-26 21:02:58'),
(2, 'AK', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '8285703354', NULL, NULL, NULL, NULL, '2017-06-17 20:00:49', '2017-06-26 21:03:09'),
(3, 'Mark K', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', '09999857868', '03/02/1990', 'PKL', 'PKL', 'PKL', '2017-06-17 20:01:43', '2017-06-17 21:07:41'),
(4, 'Tom K', 'test@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '9999857868', '', 'PKL', 'XYZ', 'XYZ', '2017-06-17 20:03:36', '2022-08-27 18:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VehiclesTitle_ar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `VehiclesOverview_ar` text COLLATE utf8_unicode_ci NOT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage2` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage3` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage4` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage5` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT NULL,
  `UpdateDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesTitle_ar`, `VehiclesOverview_ar`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdateDate`, `created_at`, `updated_at`) VALUES
(1, 'ytb rvtr v3', 'الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 2, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 3453452, 'DIESEL', 34532, 10, '1662133946.jpg', '1662133946.jpg', '1662133946.jpg', '1662133946.jpg', '1662133946.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-19 11:46:23', '2022-09-08 06:21:10', NULL, '2022-09-02 12:52:26'),
(2, 'Test Demoy', 'الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 2, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 859, 'CNG', 2015, 4, 'car_755x430.png', 'looking-used-car.png', 'banner-image.jpg', 'about_services_faq_bg.jpg', '', 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, '2017-06-19 16:16:17', '2022-09-08 06:21:08', NULL, NULL),
(3, 'Lorem ipsum', 'الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 4, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 563, 'CNG', 2012, 5, 'featured-img-3.jpg', 'dealer-logo.jpg', 'img_390x390.jpg', 'listing_img3.jpg', '', 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:20', '2022-09-08 06:21:06', NULL, NULL),
(4, 'Lorem ipsum', 'الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 1, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 5636, 'CNG', 2012, 5, 'featured-img-3.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', '1662566767.about_services_faq_bg.jpg', 1, NULL, NULL, 1, NULL, 1, 1, 1, 1, NULL, NULL, NULL, '2017-06-19 16:18:43', '2022-09-08 06:21:02', NULL, '2022-09-07 13:23:58'),
(5, 'ytb rvtr', 'الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 5, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 345345, 'PETROL', 3453, 7, 'car_755x430.png', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-20 17:57:09', '2022-09-08 06:21:01', NULL, NULL),
(9, 'Mercedes class A', 'مرسيدس الصنف الممتاز', 'محرك أمامي وسطي ، دفع خلفي ، بمقعدين وأربعة مقاعد ، كوبيه وكوبيه رودستر.', 4, 'Front mid-engine, rear-wheel drive two- and four-seater grand tourer coupe and roadster.', 500, 'DIESEL', 2022, 200, '1662504447.about_us_img1.jpg', '1662504447.about_us_img4.jpg', '1662504447.blog_img4.jpg', '1662504447.blog_img3.jpg', '1662504447.blog_img4.jpg', 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 0, NULL, NULL, '2022-09-06 19:47:27', '2022-09-06 19:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '\'USR\'',
  `dob` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `auth`, `dob`, `Address`, `City`, `Country`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OMAR', 'admin@gmail.com', '4455875386', '\'ADM\'', '1/2/2000', 'Gaza Strip', 'Gaza', 'Palestine', NULL, '$2y$10$hcV47JOgLHnTPztdN3O6wuks9sUsyUdzv4oyAF.oAEM6g4BvDmJW.', NULL, '2022-08-27 17:12:36', '2022-09-06 17:03:16'),
(5, 'test', 'test@gmail.com', '4455875386', '\'USR\'', '03/02/1998', 'Gaza', 'Gaza', 'Gaza', NULL, '$2y$10$xaj47wvy7hN9o9kKoJ7pMe35BIMVXz9M2igFklFVfh111bKAzWw5y', NULL, '2022-09-06 17:26:27', '2022-09-12 06:51:31'),
(6, 'Omar Yousef', 'omar.sh.121995@gmail.com', '4455875386', '\'USR\'', NULL, NULL, NULL, NULL, NULL, '$2y$10$pv.Q8r2D7gEzist/jBTjQ.Np2swItxS.MFxfQPLqNME/ZaYElytPS', NULL, '2022-09-08 04:38:20', '2022-09-12 05:26:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdb`
--
ALTER TABLE `contactdb`
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
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactdb`
--
ALTER TABLE `contactdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
