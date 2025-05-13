-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2025 at 06:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ihdma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` bigint(20) NOT NULL,
  `about_us` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `about_us`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, '<p>Discover how the Indian Hyperbaric and Diving Medicine Association (IHDMA) is revolutionizing the field of diving and hyperbaric medicine. Gain access to cutting-edge scientific information, join a vibrant community, and explore the depths of knowledge with us.</p><p>The Indian Hyperbaric and Diving Medicine Association (IHDMA) is a non-profit organization dedicated to serving its members across India. Our mission is to provide the most up-to-date scientific information on diving and hyperbaric medicine physiology not only to our members but also to the global community. We take pride in being a leading source of knowledge and expertise in this field. Thank you for choosing to be a part of our community.</p>', '1', '2025-05-07 12:34:38', '2025-05-07 12:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `send_email` tinyint(1) DEFAULT 0,
  `send_whatsapp` tinyint(1) DEFAULT 0,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_announcements`
--

INSERT INTO `tbl_announcements` (`id`, `title`, `message`, `send_email`, `send_whatsapp`, `is_delete`, `created_at`) VALUES
(1, 'Testsss', 'Test Announcement', 1, 1, '1', '2025-05-12 05:47:00'),
(2, 'Test', 'Test Announcement', 0, 0, '1', '2025-05-12 05:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `banners` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `title`, `banners`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Testsxx', '1746592858_healthcare-and-medical-service-doctor-banner-medical-health-social-media-cover-design-realistic-hospital-webinar-template-free-vector.jpg', '1', '2025-05-07 09:19:35', '2025-05-07 10:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('draft','published') DEFAULT 'draft',
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `title`, `slug`, `content`, `featured_image`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Test', 'testqdsddd', '1746182885_Indian-Hyperbaric-And-Diving-Medicine-Association-logo-final-1-1024x245.png', 'draft', '0', '2025-05-02 14:46:22', '2025-05-07 10:17:28'),
(2, 'test', 'testsss', 'test', NULL, 'draft', '0', '2025-05-02 14:46:39', '2025-05-06 15:38:06'),
(3, 'fdkjfksddddddddddd', 'kjdkd', 'kjdkdkdxsDsssssssssssss', '1746177534_Indian-Hyperbaric-And-Diving-Medicine-Association-logo-final-1-1024x245.png', 'draft', '0', '2025-05-02 14:48:55', '2025-05-05 16:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `symbol` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `name`, `code`, `symbol`) VALUES
(1, 'Leke', 'ALL', 'Lek'),
(2, 'Dollars', 'USD', '$'),
(3, 'Afghanis', 'AFN', '؋'),
(4, 'Pesos', 'ARS', '$'),
(5, 'Guilders', 'AWG', 'ƒ'),
(6, 'Dollars', 'AUD', '$'),
(7, 'New Manats', 'AZN', 'ман'),
(8, 'Dollars', 'BSD', '$'),
(9, 'Dollars', 'BBD', '$'),
(10, 'Rubles', 'BYR', 'p.'),
(11, 'Euro', 'EUR', '€'),
(12, 'Dollars', 'BZD', 'BZ$'),
(13, 'Dollars', 'BMD', '$'),
(14, 'Bolivianos', 'BOB', '$b'),
(15, 'Convertible Marka', 'BAM', 'KM'),
(16, 'Pula', 'BWP', 'P'),
(17, 'Leva', 'BGN', 'лв'),
(18, 'Reais', 'BRL', 'R$'),
(19, 'Pounds', 'GBP', '£'),
(20, 'Dollars', 'BND', '$'),
(21, 'Riels', 'KHR', '៛'),
(22, 'Dollars', 'CAD', '$'),
(23, 'Dollars', 'KYD', '$'),
(24, 'Pesos', 'CLP', '$'),
(25, 'Yuan Renminbi', 'CNY', '¥'),
(26, 'Pesos', 'COP', '$'),
(27, 'Colón', 'CRC', '₡'),
(28, 'Kuna', 'HRK', 'kn'),
(29, 'Pesos', 'CUP', '₱'),
(30, 'Koruny', 'CZK', 'Kč'),
(31, 'Kroner', 'DKK', 'kr'),
(32, 'Pesos', 'DOP', 'RD$'),
(33, 'Dollars', 'XCD', '$'),
(34, 'Pounds', 'EGP', '£'),
(35, 'Colones', 'SVC', '$'),
(36, 'Pounds', 'FKP', '£'),
(37, 'Dollars', 'FJD', '$'),
(38, 'Cedis', 'GHC', '¢'),
(39, 'Pounds', 'GIP', '£'),
(40, 'Quetzales', 'GTQ', 'Q'),
(41, 'Pounds', 'GGP', '£'),
(42, 'Dollars', 'GYD', '$'),
(43, 'Lempiras', 'HNL', 'L'),
(44, 'Dollars', 'HKD', '$'),
(45, 'Forint', 'HUF', 'Ft'),
(46, 'Kronur', 'ISK', 'kr'),
(47, 'Rupees', 'INR', 'Rp'),
(48, 'Rupiahs', 'IDR', 'Rp'),
(49, 'Rials', 'IRR', '﷼'),
(50, 'Pounds', 'IMP', '£'),
(51, 'New Shekels', 'ILS', '₪'),
(52, 'Dollars', 'JMD', 'J$'),
(53, 'Yen', 'JPY', '¥'),
(54, 'Pounds', 'JEP', '£'),
(55, 'Tenge', 'KZT', 'лв'),
(56, 'Won', 'KPW', '₩'),
(57, 'Won', 'KRW', '₩'),
(58, 'Soms', 'KGS', 'лв'),
(59, 'Kips', 'LAK', '₭'),
(60, 'Lati', 'LVL', 'Ls'),
(61, 'Pounds', 'LBP', '£'),
(62, 'Dollars', 'LRD', '$'),
(63, 'Switzerland Francs', 'CHF', 'CHF'),
(64, 'Litai', 'LTL', 'Lt'),
(65, 'Denars', 'MKD', 'ден'),
(66, 'Ringgits', 'MYR', 'RM'),
(67, 'Rupees', 'MUR', '₨'),
(68, 'Pesos', 'MXN', '$'),
(69, 'Tugriks', 'MNT', '₮'),
(70, 'Meticais', 'MZN', 'MT'),
(71, 'Dollars', 'NAD', '$'),
(72, 'Rupees', 'NPR', '₨'),
(73, 'Guilders', 'ANG', 'ƒ'),
(74, 'Dollars', 'NZD', '$'),
(75, 'Cordobas', 'NIO', 'C$'),
(76, 'Nairas', 'NGN', '₦'),
(77, 'Krone', 'NOK', 'kr'),
(78, 'Rials', 'OMR', '﷼'),
(79, 'Rupees', 'PKR', '₨'),
(80, 'Balboa', 'PAB', 'B/.'),
(81, 'Guarani', 'PYG', 'Gs'),
(82, 'Nuevos Soles', 'PEN', 'S/.'),
(83, 'Pesos', 'PHP', 'Php'),
(84, 'Zlotych', 'PLN', 'zł'),
(85, 'Rials', 'QAR', '﷼'),
(86, 'New Lei', 'RON', 'lei'),
(87, 'Rubles', 'RUB', 'руб'),
(88, 'Pounds', 'SHP', '£'),
(89, 'Riyals', 'SAR', '﷼'),
(90, 'Dinars', 'RSD', 'Дин.'),
(91, 'Rupees', 'SCR', '₨'),
(92, 'Dollars', 'SGD', '$'),
(93, 'Dollars', 'SBD', '$'),
(94, 'Shillings', 'SOS', 'S'),
(95, 'Rand', 'ZAR', 'R'),
(96, 'Rupees', 'LKR', '₨'),
(97, 'Kronor', 'SEK', 'kr'),
(98, 'Dollars', 'SRD', '$'),
(99, 'Pounds', 'SYP', '£'),
(100, 'New Dollars', 'TWD', 'NT$'),
(101, 'Baht', 'THB', '฿'),
(102, 'Dollars', 'TTD', 'TT$'),
(103, 'Lira', 'TRY', '₺'),
(104, 'Liras', 'TRL', '£'),
(105, 'Dollars', 'TVD', '$'),
(106, 'Hryvnia', 'UAH', '₴'),
(107, 'Pesos', 'UYU', '$U'),
(108, 'Sums', 'UZS', 'лв'),
(109, 'Bolivares Fuertes', 'VEF', 'Bs'),
(110, 'Dong', 'VND', '₫'),
(111, 'Rials', 'YER', '﷼'),
(112, 'Zimbabwe Dollars', 'ZWD', 'Z$'),
(113, 'Rupees', 'INR', '₹');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiries`
--

CREATE TABLE `tbl_enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `address` longtext DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_enquiries`
--

INSERT INTO `tbl_enquiries` (`id`, `name`, `email`, `phone`, `message`, `is_delete`, `created_at`, `address`, `city`, `state`, `country`, `pincode`) VALUES
(1, 'TEst doctor', 'shirin@sda-zone.com', '8010597075', 'Test', '1', '2025-05-08 17:21:51', 'Badlapur', 'Badlapur', 'MH', 'IN', '421503');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_journals`
--

CREATE TABLE `tbl_journals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_journals`
--

INSERT INTO `tbl_journals` (`id`, `title`, `file_path`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Download IHDMA Journal PDFs', '2019_MEMBERSHIP_APPLICATION2.pdf', '1', '2025-05-07 11:14:10', '2025-05-07 11:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_applications`
--

CREATE TABLE `tbl_membership_applications` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `application_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`application_data`)),
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `payment_status` enum('pending','paid','failed') DEFAULT 'pending',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_categories`
--

CREATE TABLE `tbl_membership_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_membership_categories`
--

INSERT INTO `tbl_membership_categories` (`id`, `category_name`, `description`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Individual Membership Categories', '<blockquote><p>IHDMA, most of its members are diving or hyperbaric scientists and physicians. Hyperbaric medicine nurses, technicians, sports, and commercial divers as well as those with an interest in hyperbaric and diving medicine comprise a substantial group of associate members; and the ranks of student members are rapidly expanding.</p></blockquote><blockquote><p>All Memberships receive online access to a pdf version of our IHDMA Journal. If you wish to order a Hard Copy of the UHM Journal (ADDITIONAL FEE), once registered and approved, you will need to log-in to the member site.</p></blockquote><blockquote><p>As a member of the Society who lives anywhere, you will be linked with the Ihdma Chapter group within your region (Click here to see Chapter Map) to receive emails with news about your region. Each Chapter has its own webpage, where you can find information on the Chapter leadership and the next Chapter meeting, including the date/location/schedule/registration. We hope you will support your local chapter by attending their meeting.</p></blockquote>', '1', '2025-05-05 06:47:28', '2025-05-12 12:26:12'),
(2, 'Corporate Partner Categories', '<blockquote><p>The IHDMA’s Corporate Partners consist of several esteemed international corporations, associations, health care facilities, foundations, and partnerships that operate in the diving and hyperbaric medicine field. The organization remains devoted to advancing diving, hyperbaric medicine, and wound care, and we appreciate the support of our sponsors who share this commitment. Corporations or companies that endorse the IHDMA’s mission, objectives, and goals and wish to contribute financially can become corporate members.</p></blockquote>', '1', '2025-05-05 06:47:50', '2025-05-12 12:28:22'),
(3, 'Associate Membership', 'Associate Membership', '0', '2025-05-05 06:48:03', '2025-05-09 11:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_types`
--

CREATE TABLE `tbl_membership_types` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) DEFAULT NULL,
  `type_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `fk_currency_id` int(10) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_membership_types`
--

INSERT INTO `tbl_membership_types` (`id`, `fk_category_id`, `type_name`, `price`, `fk_currency_id`, `short_description`, `full_description`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lifetime Membership', 5000.00, 113, 'Regular Members of the Society shall be physicians or doctorate-level health care professionals (MD, DO, PhD, DPM, DDS, or equivalent). This category will include those Associates waived by the BOD as exceptional cases.', 'Regular Members of the Society shall be physicians or doctorate-level health care professionals (MD, DO, PhD, DPM, DDS, or equivalent). This category will include those Associates waived by the BOD as exceptional cases.', '1', '2025-05-05 14:09:28', '2025-05-09 14:59:35'),
(2, 1, 'Associate Membership', 5000.00, 113, 'Hyperbaric technician, registered nurse, physician assistant, nurse practitioner, undergraduate student, diving supervisor, certified scuba instructor, or other hyperbaric or diving personnel with specialized technical or research backgrounds but who do not possess the academic background for Regular Membership can become Associate Members of the Society. Regular Members (retired) who are 65 or older and are not working can also fall under this category; however they will not have voting rights. Associate Members are not entitled to vote or hold office for the Regular Membership positions on the Board of Directors, but are eligible to vote and hold office for the Associate positions on the Board.', 'Hyperbaric technician, registered nurse, physician assistant, nurse practitioner, undergraduate student, diving supervisor, certified scuba instructor, or other hyperbaric or diving personnel with specialized technical or research backgrounds but who do not possess the academic background for Regular Membership can become Associate Members of the Society. Regular Members (retired) who are 65 or older and are not working can also fall under this category; however they will not have voting rights. Associate Members are not entitled to vote or hold office for the Regular Membership positions on the Board of Directors, but are eligible to vote and hold office for the Associate positions on the Board.', '1', '2025-05-09 15:07:54', '2025-05-09 15:07:54'),
(3, 1, 'Student Membership', 0.00, 113, 'Must submit a letter from the Registrar confirming full-time enrollment and the program the student is currently enrolled in. Must be a full-time student enrolled in undergraduate or graduate programs in a related field of nursing, medicine or science. Student members will receive online access to the IHDMA Journal and our membership newsletter, Pressure along with all other membership benefits. This membership type is non-paying and eligibility must be confirmed annually with enrollment information. Student members are not eligible to vote or hold office.', 'Must submit a letter from the Registrar confirming full-time enrollment and the program the student is currently enrolled in. Must be a full-time student enrolled in undergraduate or graduate programs in a related field of nursing, medicine or science. Student members will receive online access to the IHDMA Journal and our membership newsletter, Pressure along with all other membership benefits. This membership type is non-paying and eligibility must be confirmed annually with enrollment information. Student members are not eligible to vote or hold office.', '1', '2025-05-09 15:13:15', '2025-05-09 15:13:15'),
(4, 2, 'Silver Corporate Partner', 5000.00, 113, 'Two (2) individual memberships and Banner displayed on the Corporate page.', 'Two (2) individual memberships and Banner displayed on the Corporate page.', '1', '2025-05-09 15:16:31', '2025-05-09 15:16:31'),
(5, 2, 'Gold Corporate Partner', 5000.00, 113, 'Three (3) individual memberships, emails sent by UHMS on behalf of the corporate partner, Banner displayed on the Corporate page.', 'Three (3) individual memberships, emails sent by UHMS on behalf of the corporate partner, Banner displayed on the Corporate page.', '1', '2025-05-09 15:17:18', '2025-05-09 15:17:18'),
(6, 2, 'Platinum Corporate Partner', 5000.00, 113, 'Four (4) individual memberships, emails sent by IHDMA on behalf of the corporate partner, Banner displayed on the Corporate and Vendor pages.', 'Four (4) individual memberships, emails sent by IHDMA on behalf of the corporate partner, Banner displayed on the Corporate and Vendor pages.', '1', '2025-05-09 15:18:45', '2025-05-09 15:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member_benefits`
--

CREATE TABLE `tbl_member_benefits` (
  `id` int(11) NOT NULL,
  `title_benefits` varchar(100) DEFAULT NULL,
  `benefits` longtext DEFAULT NULL,
  `title_activities` varchar(100) DEFAULT NULL,
  `activities` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_member_benefits`
--

INSERT INTO `tbl_member_benefits` (`id`, `title_benefits`, `benefits`, `title_activities`, `activities`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Benefits of Membership', '<ul><li>Subscription to IHDMA Journal PDFs</li><li>Subscription to <i>Pressure</i> newsletter</li><li>Industry updates: legislative and regulatory affairs</li><li>Discounts to IHDMA CME/MOC/CEU accredited educational opportunities</li><li>Discounts for article searches from the Duke University Medical Center Library and Archives</li><li>MEDFAQs – the IHDMA Frequently Asked Questions (FAQ) system</li><li>Three (3) free continuing education credits on our Enduring Materials courses website per year</li></ul>', 'Activities of the IHDMA', '<ul><li>Monitoring regulatory changes for reimbursement of hyperbaric oxygen therapy services (US and International)</li><li>Development of Clinical Practice Guidelines in Hyperbaric Medicine</li><li>Development of credentialing criteria for physician practice</li><li>Accreditation of hyperbaric chamber facilities</li><li>Development of chamber operational guidelines</li><li>Increasing availability of online educational opportunities</li><li>Annual live educational opportunities, such as: our Scientific, Chapter and various courses</li><li>Advocacy of high professional standards of practice</li><li>Representation to federal, state and local agencies on matters related to efficacy, standards of care, reimbursement, etc.</li><li>Collaborating with professional stakeholders on a global basis</li><li>Development of evidence-based indications</li><li>Development of Hyperbaric &amp; Wound Care Facility Accreditation standards</li></ul>', '1', '2025-05-12 17:13:39', '2025-05-12 17:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_objectives`
--

CREATE TABLE `tbl_objectives` (
  `id` bigint(20) NOT NULL,
  `objectives` longtext DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_objectives`
--

INSERT INTO `tbl_objectives` (`id`, `objectives`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, '<ul><li>To provide medical and wellness treatment of the Hyperbaric oxygen therapy and provide training by conducting conferences, seminars to promote the same.</li><li>To promote Hyperbarlc medicine in medical practices amongst practicing doctors and public at large.</li><li>To start monthly bulletin or society journal or any form of activities to reach public at large.</li></ul>', '1', '2025-05-12 15:29:33', '2025-05-12 15:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `fk_membership_application_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `card_last4` varchar(4) DEFAULT NULL,
  `card_expiry` varchar(20) DEFAULT NULL,
  `cvv_code` varchar(10) DEFAULT NULL,
  `card_holder_name` varchar(100) DEFAULT NULL,
  `payment_response` text DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `is_offline` tinyint(1) DEFAULT 0,
  `status` enum('pending','success','failed') DEFAULT 'pending',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`id`, `fk_user_id`, `fk_membership_application_id`, `transaction_id`, `coupon_code`, `amount`, `payment_method`, `card_last4`, `card_expiry`, `cvv_code`, `card_holder_name`, `payment_response`, `payment_date`, `is_offline`, `status`, `created_at`) VALUES
(1, 4, NULL, NULL, '', 0.00, 'Credit Card', '2222', '12/29', '232', 'TEST dOCTOR', NULL, '2025-05-08 06:35:17', 0, 'success', '2025-05-08 10:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_members`
--

CREATE TABLE `tbl_team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_team_members`
--

INSERT INTO `tbl_team_members` (`id`, `name`, `designation`, `description`, `photo`, `facebook_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `is_delete`, `created_at`) VALUES
(1, 'Dr. Himanshu Agarwal', 'MBBS, MD', 'Dr. Himanshu Agarwal\r\n\r\nDr. Himanshu Agarwal, MBBS, MD is the Medical Director and also founder of National Hyperbarics and Rehabilitation Research Centre. He has a keen interest in Hyperbaric medicine procedures and problem wound management. Under him he has two units of hard shelled multi-place chamber (also first chamber in Rajasthan). installed at FORTIS ESCORT Hospital and another at New Vidhyadhar Nagar Jaipur since 2009.', 'uploads/team/315650837f1885998f9d6e4d0ab35d39.png', 'Link', 'Link', 'link', 'link', '1', '2025-05-06 05:00:32'),
(2, 'Dr. Dhiraj Saxena', 'Consultant Physician', 'Dr Dhiraj Saxena is practicing Consultant Physician in Apollo Hospital Ahmedabad since 15 years and has to his credit establishing the first Hyperbaric Oxygen Therapy unit in Apollo Hospital, Ahmedabad in 2007 (The first HBOT center in Gujarat).\r\n\r\nHe has a keen interest in Hyperbaric medicine procedures and problem wound management. Over the last 10 years he has helped in establishing New Hyperbaric Oxygen therapy centers in Banglore , Jaipur, Katni, Miraj , Ahmedabad and he has trained technicians in HBOT procedures.', 'uploads/team/dhiraj.png', 'Link', 'Link', 'link', 'link', '1', '2025-05-12 10:12:36'),
(3, 'Dr. Narayanamurthy', 'Test', 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.', 'uploads/team/955ccdb7e3f9b9cd479ea331bc53e063.png', 'Link', 'Link', 'link', 'link', '1', '2025-05-12 10:25:58'),
(4, 'Dr. Manoj Gupta', 'Test', 'Dr. Manoj Gupta is a pioneering figure in hyperbaric medicine, with extensive expertise in wound care, diving medicine, and advanced oxygen therapy. As the Director of Prana Hyperbaric Oxygen Therapy Centre and a leader in the field, he has played a significant role in bringing HBOT tothe forefront of modern wellness and regenerative medicine.Qualifications &amp; Expertise PhD Scholar in Public Health<<p>MBBS, MD, DNB, LLB, PGDHA</p><p>Certificate of Added Qualification (CAQ) in Hyperbaric Medicine (UHMS, USA)</p><p>B.Sc. Hons. (Hyperbaric Medicine), Stellenbosch University, South Africa</p><p>Certified Hyperbaric Specialist – American Board of Wound Healing</p><p>Fellow of the American Professional Wound Care Association</p><p>Level I Medical Examiner of Divers (DMAC/EDTC, UK)</p><p>Faculty at HBOT Academy, recognized by Maharashtra University of Health Sciences</p><p>Director &amp; Founder President of the Indian Hyperbaric and Diving Medicine Association</p><h4>Publications &amp; Contributions</h4><blockquote><p>Dr. Gupta has authored multiple research papers and textbooks on hyperbaric oxygen therapy,including \"Hyperbaric Oxygen Therapy: Principles and Applications\" and several journal articleson HBOT’s role in wound care, regenerative medicine, and neurology. He has also presented at prestigious medical conferences and trained doctors globally in hyperbaric medicine.</p></blockquote><h4>Vision for HBOT</h4><blockquote><p>&nbsp;Dr. Gupta believes that hyperbaric oxygen therapy is the future of medicine and wellness, offering unparalleled benefits in cellular regeneration, cognitive enhancement, and healing. With its potential to revolutionize recovery, performance, and longevity, HBOT is at the forefront of non-invasive, science-backed healthcare solutions.</p></blockquote>', 'uploads/team/62887d604b705139c6ce6156f2c83c73.png', 'Link', 'Link', 'link', 'link', '1', '2025-05-12 10:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `address1` longtext DEFAULT NULL,
  `address2` longtext DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `user_type` enum('member','admin') DEFAULT 'member',
  `membership_type` enum('nursing','doctor','corporate','none') DEFAULT NULL,
  `referred_by_member` enum('No','Yes') NOT NULL,
  `contribute_registry` enum('No','Yes') NOT NULL,
  `is_delete` enum('1','0') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `mobile`, `user_name`, `address1`, `address2`, `city`, `state`, `postal_code`, `country`, `user_type`, `membership_type`, `referred_by_member`, `contribute_registry`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@admin.com', 'VDVoZXNBaytkdC9KWUxsdjNEWm80UT09', '8010597075', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'none', 'No', 'No', '1', '2025-05-02 12:54:58', '2025-05-02 12:54:58'),
(4, 'TEst doctor', 'ddjdjd@GMAIL.COM', '$2y$10$ktHquyDH6kLWNdM4zRlB5.pZUInffhR4MGo9g8s9jscTxmOf7fUOu', '2222222222', 'dmdnmd', 'DDDLDLD', NULL, 'LDLKDLKD', 'MH', '656565', 'IN', 'member', 'doctor', 'No', 'No', '1', '2025-05-08 10:05:17', '2025-05-08 10:05:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquiries`
--
ALTER TABLE `tbl_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_journals`
--
ALTER TABLE `tbl_journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership_applications`
--
ALTER TABLE `tbl_membership_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership_categories`
--
ALTER TABLE `tbl_membership_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership_types`
--
ALTER TABLE `tbl_membership_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member_benefits`
--
ALTER TABLE `tbl_member_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_objectives`
--
ALTER TABLE `tbl_objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_members`
--
ALTER TABLE `tbl_team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_enquiries`
--
ALTER TABLE `tbl_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_journals`
--
ALTER TABLE `tbl_journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_membership_applications`
--
ALTER TABLE `tbl_membership_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_membership_categories`
--
ALTER TABLE `tbl_membership_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_membership_types`
--
ALTER TABLE `tbl_membership_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_member_benefits`
--
ALTER TABLE `tbl_member_benefits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_objectives`
--
ALTER TABLE `tbl_objectives`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_team_members`
--
ALTER TABLE `tbl_team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
