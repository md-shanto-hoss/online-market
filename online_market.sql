-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 08:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aarong', 'Aarong', 'brand-images/1701682014.jpeg', '1', '2023-12-04 03:26:54', '2023-12-04 03:26:54'),
(2, 'CA', 'CA', 'brand-images/1701682139.jpg', '1', '2023-12-04 03:28:59', '2023-12-04 03:28:59'),
(3, 'Belmond', 'Belmond', 'brand-images/1701682163.jpeg', '1', '2023-12-04 03:29:23', '2023-12-04 03:29:23'),
(4, 'Apple', 'Apple', 'brand-images/1701698190.jpeg', '1', '2023-12-04 07:56:30', '2023-12-04 07:56:30'),
(5, 'Samsung', 'Samsung', 'brand-images/1701698207.jpeg', '1', '2023-12-04 07:56:47', '2023-12-04 07:56:47'),
(6, 'Bata', 'Bata', 'brand-images/1701698411.jpeg', '1', '2023-12-04 08:00:11', '2023-12-04 08:00:11'),
(7, 'Bata', 'Bata', 'brand-images/1701706769.jpeg', '1', '2023-12-04 10:19:29', '2023-12-04 10:19:29'),
(8, 'Woodland', 'Woodland', 'brand-images/1701706796.jpeg', '1', '2023-12-04 10:19:56', '2023-12-04 10:19:56'),
(9, 'Puma', 'Puma', 'brand-images/1701706810.jpeg', '1', '2023-12-04 10:20:10', '2023-12-04 10:20:10'),
(10, 'Kay Kraft', 'Kay Kraft', 'brand-images/1701706851.jpeg', '1', '2023-12-04 10:20:51', '2023-12-04 10:20:51'),
(11, 'Yellow', 'Yellow', 'brand-images/1701706872.jpeg', '1', '2023-12-04 10:21:12', '2023-12-04 10:21:12'),
(12, 'Lara\'z', 'Lara\'z', 'brand-images/1701706888.jpeg', '1', '2023-12-04 10:21:28', '2023-12-04 10:21:28'),
(13, 'Jatra', 'Jatra', 'brand-images/1701706913.jpeg', '1', '2023-12-04 10:21:53', '2023-12-04 10:21:53'),
(14, 'Nipun', 'Nipun', 'brand-images/1701706925.jpeg', '1', '2023-12-04 10:22:05', '2023-12-04 10:22:05'),
(15, 'Rang', 'Rang', 'brand-images/1701706972.webp', '1', '2023-12-04 10:22:52', '2023-12-04 10:22:52'),
(16, 'Joya', 'Joya', 'brand-images/1701706990.jpeg', '1', '2023-12-04 10:23:10', '2023-12-04 10:23:10'),
(17, 'Bibiana', 'Bibiana', 'brand-images/1701707001.jpeg', '1', '2023-12-04 10:23:21', '2023-12-04 10:23:21'),
(18, 'Batika', 'Batika', 'brand-images/1701707031.jpeg', '1', '2023-12-04 10:23:51', '2023-12-04 10:23:51'),
(19, 'Xiaomi', 'Xiaomi', 'brand-images/1701707117.jpeg', '1', '2023-12-04 10:25:17', '2023-12-04 10:25:17'),
(20, 'OnePlus', 'OnePlus', 'brand-images/1701707127.jpeg', '1', '2023-12-04 10:25:27', '2023-12-04 10:25:27'),
(21, 'OPPO', 'OPPO', 'brand-images/1701707143.jpeg', '1', '2023-12-04 10:25:43', '2023-12-04 10:25:43'),
(22, 'Rolex', 'Rolex', 'brand-images/1701716769.jpeg', '1', '2023-12-04 13:06:09', '2023-12-04 13:08:24'),
(23, 'Omega', 'Omega', 'brand-images/1701716880.jpeg', '1', '2023-12-04 13:08:00', '2023-12-04 13:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'Mobile', 'category-images/1703962863.png', '1', '2023-12-04 02:38:53', '2023-12-30 13:01:03'),
(3, 'Electronics', 'Electronics', 'category-images/1703962877.png', '1', '2023-12-04 02:39:28', '2023-12-30 13:01:17'),
(4, 'Home & living', 'Home & living', 'category-images/1703962916.png', '1', '2023-12-04 02:39:53', '2023-12-30 13:01:56'),
(5, 'Men\'s Fashion & Grooming', 'Men\'s Fashion & Grooming', 'category-images/1703963078.png', '1', '2023-12-04 02:40:28', '2023-12-30 13:04:38'),
(6, 'Woman Fashion & Beauty', 'Woman Fashion & Beauty', 'category-images/1703963004.png', '1', '2023-12-04 02:40:49', '2023-12-30 13:03:24'),
(7, 'Sports & Gym', 'Sports & Gym', 'category-images/1703962991.png', '1', '2023-12-04 02:41:08', '2023-12-30 13:03:11'),
(8, 'Others', 'Others description', 'category-images/1703962972.png', '1', '2023-12-04 02:41:37', '2023-12-30 13:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `delivery_address` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `password`, `delivery_address`, `address`, `image`, `blood_group`, `dob`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Md Shanto Hossain', 'mdshantohossain800@gmail.com', '01799630818', '$2y$12$0O/75e1HYFzG2u62g6ATues9qPZaliSoLAJqbHZts7k7HoyfX5Ike', NULL, NULL, NULL, NULL, NULL, '1', '2023-12-06 05:56:00', '2023-12-06 05:56:00'),
(13, 'Md Shanto Hossain', 'mdshantohossain800@gmail.co', '', '$2y$12$bDehoChGFjUQTG94V7JDteRFA1YbfX4ry8ZGI8PY3e1BVIPt594Fm', NULL, NULL, NULL, NULL, NULL, '1', '2023-12-10 08:17:13', '2023-12-20 04:40:42'),
(14, 'Md Shanto Hossain', 'shanto12@gmail.com', '01799630819', '$2y$12$X1yPl9722QcYcFOx1M9LxuOnX.HD3E8NRMDGeMZoD4JTsvC9Bf22u', 'Dhaka', NULL, NULL, NULL, NULL, '1', '2023-12-18 05:41:28', '2023-12-18 05:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_02_022152_create_sessions_table', 1),
(7, '2023_11_10_033943_create_categories_table', 1),
(8, '2023_11_10_052811_create_units_table', 1),
(9, '2023_11_10_060702_create_brands_table', 1),
(10, '2023_11_15_045516_create_sub_categories_table', 1),
(11, '2023_11_15_081556_create_products_table', 1),
(12, '2023_11_15_083811_create_other_images_table', 1),
(13, '2023_11_26_090515_create_customers_table', 1),
(14, '2023_12_03_103950_create_orders_table', 1),
(15, '2023_12_03_104009_create_order_details_table', 1),
(16, '2023_12_10_123323_create_wishlists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_address` text NOT NULL,
  `delivery_date` text NOT NULL DEFAULT 'Pending',
  `delivery_timestamp` text NOT NULL DEFAULT 'Pending',
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_method` text NOT NULL,
  `payment_date` text NOT NULL DEFAULT 'Pending',
  `payment_status` text NOT NULL DEFAULT 'Pending',
  `payment_timestamp` text NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `tax_total`, `shipping_total`, `order_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_date`, `delivery_timestamp`, `delivery_status`, `payment_method`, `payment_date`, `payment_status`, `payment_timestamp`, `currency`, `transaction_id`, `created_at`, `updated_at`) VALUES
(3, 12, 292, 200, 2920, '12-06-2023', '1701820800', 'Processing', 'Jatrabari, Dhaka', 'Pending', 'Pending', 'Processing', '2', 'Pending', 'Processing', 'Pending', NULL, NULL, '2023-12-06 05:56:00', '2023-12-06 09:49:57'),
(4, 12, 62, 200, 620, '12-06-2023', '1701820800', 'Pending', 'Sonapu', 'Pending', 'Pending', 'Pending', '1', 'Pending', 'Pending', 'Pending', NULL, NULL, '2023-12-06 10:14:15', '2023-12-06 10:14:15'),
(5, 13, 24260, 200, 242600, '12-10-2023', '1702166400', 'Pending', 'Jatrabari', 'Pending', 'Pending', 'Pending', '1', 'Pending', 'Pending', 'Pending', NULL, NULL, '2023-12-10 11:15:46', '2023-12-10 11:15:46'),
(6, 13, 24260, 200, 242600, '12-10-2023', '1702166400', 'Pending', 'Jatrabari', 'Pending', 'Pending', 'Pending', '1', 'Pending', 'Pending', 'Pending', NULL, NULL, '2023-12-10 11:17:11', '2023-12-10 11:17:11'),
(7, 13, 24260, 200, 242600, '12-10-2023', '1702166400', 'Pending', 'Jatrabafgfgrifgfgf', 'Pending', 'Pending', 'Pending', '1', 'Pending', 'Pending', 'Pending', NULL, NULL, '2023-12-10 11:17:52', '2023-12-10 11:17:52'),
(8, 14, 650, 200, 6500, '12-18-2023', '1702857600', 'Pending', 'Dhaka', 'Pending', 'Pending', 'Pending', '1', 'Pending', 'Pending', 'Pending', NULL, NULL, '2023-12-18 05:41:28', '2023-12-18 05:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `name`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(4, 3, 8, 'Super Premium Gabardine Pant', 620, 2, '2023-12-06 05:56:00', '2023-12-06 05:56:00'),
(5, 3, 4, 'Black T-Shirt', 420, 4, '2023-12-06 05:56:00', '2023-12-06 05:56:00'),
(6, 4, 8, 'Super Premium Gabardine Pant', 620, 1, '2023-12-06 10:14:15', '2023-12-06 10:14:15'),
(7, 8, 19, 'Black Cotton Long Sleeve Casual Shirt', 1300, 5, '2023-12-18 05:41:33', '2023-12-18 05:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_images`
--

INSERT INTO `other_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 1, 'other-images/6078636.jpeg', '2023-12-30 12:59:10', '2023-12-30 12:59:10'),
(5, 1, 'other-images/738272.jpeg', '2023-12-30 12:59:10', '2023-12-30 12:59:10'),
(6, 1, 'other-images/7712703.jpeg', '2023-12-30 12:59:10', '2023-12-30 12:59:10'),
(7, 1, 'other-images/347771.jpeg', '2023-12-30 12:59:10', '2023-12-30 12:59:10'),
(8, 2, 'other-images/7961268.jpg', '2023-12-30 13:17:11', '2023-12-30 13:17:11'),
(9, 2, 'other-images/6216487.jpeg', '2023-12-30 13:17:11', '2023-12-30 13:17:11'),
(10, 2, 'other-images/9564628.jpeg', '2023-12-30 13:17:11', '2023-12-30 13:17:11'),
(11, 2, 'other-images/4480896.jpeg', '2023-12-30 13:17:11', '2023-12-30 13:17:11'),
(12, 3, 'other-images/7272493.jpg', '2023-12-30 13:20:08', '2023-12-30 13:20:08'),
(13, 3, 'other-images/6297370.webp', '2023-12-30 13:20:08', '2023-12-30 13:20:08'),
(14, 4, 'other-images/4607057.jpeg', '2023-12-30 13:20:29', '2023-12-30 13:20:29'),
(15, 4, 'other-images/9206717.jpeg', '2023-12-30 13:20:29', '2023-12-30 13:20:29'),
(16, 4, 'other-images/8301559.jpeg', '2023-12-30 13:20:29', '2023-12-30 13:20:29'),
(17, 4, 'other-images/7413558.jpeg', '2023-12-30 13:20:29', '2023-12-30 13:20:29'),
(18, 5, 'other-images/3120444.jpeg', '2023-12-30 13:20:45', '2023-12-30 13:20:45'),
(19, 5, 'other-images/4667678.jpeg', '2023-12-30 13:20:45', '2023-12-30 13:20:45'),
(20, 5, 'other-images/2197941.jpeg', '2023-12-30 13:20:45', '2023-12-30 13:20:45'),
(21, 5, 'other-images/7411672.jpeg', '2023-12-30 13:20:45', '2023-12-30 13:20:45'),
(22, 6, 'other-images/8394106.jpg', '2023-12-30 13:23:09', '2023-12-30 13:23:09'),
(23, 6, 'other-images/7906667.webp', '2023-12-30 13:23:09', '2023-12-30 13:23:09'),
(24, 6, 'other-images/3804546.jpeg', '2023-12-30 13:23:09', '2023-12-30 13:23:09'),
(25, 6, 'other-images/2847383.jpeg', '2023-12-30 13:23:09', '2023-12-30 13:23:09'),
(26, 7, 'other-images/1690441.jpeg', '2023-12-30 13:23:47', '2023-12-30 13:23:47'),
(27, 7, 'other-images/1783749.jpeg', '2023-12-30 13:23:47', '2023-12-30 13:23:47'),
(28, 7, 'other-images/7021676.jpeg', '2023-12-30 13:23:47', '2023-12-30 13:23:47'),
(29, 7, 'other-images/2732200.jpeg', '2023-12-30 13:23:47', '2023-12-30 13:23:47'),
(30, 8, 'other-images/8883948.jpeg', '2023-12-30 13:24:24', '2023-12-30 13:24:24'),
(31, 8, 'other-images/4506411.jpeg', '2023-12-30 13:24:24', '2023-12-30 13:24:24'),
(32, 8, 'other-images/4742431.jpeg', '2023-12-30 13:24:24', '2023-12-30 13:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `stoke_amount` int(11) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `hit_count` varchar(255) NOT NULL DEFAULT '0',
  `sell_count` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `unit_id`, `brand_id`, `name`, `code`, `stoke_amount`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `status`, `hit_count`, `sell_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 4, 'Apple 11 pro', 'k39dk30e', 13, 58000, 54500, 'Apple 11 pro short description', 'Apple 11 pro long description', 'product-images/1701698604.jpeg', '1', '17', '0', '2023-12-04 08:03:24', '2023-12-11 03:07:37'),
(2, 6, 42, 6, 12, 'Black Three Piece Batika', 'd365d3d3', 23, 1450, 1100, 'Black Three Piece Batika short descripotion', 'Black Three Piece Batika long descripion', 'product-images/1703963831.jpg', '1', '3', '0', '2023-12-04 10:34:44', '2023-12-30 13:17:11'),
(3, 6, 42, 6, 14, 'Baby pink color soft tussar silk saree with zari weaving', 'D39F4JD903', 23, 22000, 18000, 'Baby pink color soft tussar silk saree with zari weaving  short description', 'Baby pink color soft tussar silk saree with zari weaving  long description', 'product-images/1701707840.jpg', '1', '0', '0', '2023-12-04 10:37:20', '2023-12-04 10:37:20'),
(4, 5, 21, 1, 1, 'Black T-Shirt', 'kd9K3DDK', 71, 450, 420, 'Black T-Shirt short description', 'Black T-Shirt long description', 'product-images/1701708123.jpeg', '1', '0', '0', '2023-12-04 10:42:03', '2023-12-06 05:56:00'),
(5, 5, 21, 1, 11, 'Printed T-Shirt', 'D43JKT56F5', 20, 550, 480, 'Printed T-Shirt short description', 'Printed T-Shirt long description', 'product-images/1701708317.jpeg', '1', '4', '0', '2023-12-04 10:45:17', '2023-12-11 03:03:55'),
(6, 6, 29, 5, 10, 'Trendiest Maroon Color Indian Saree', 'd2hy6j678', 7, 11500, 8600, 'Trendiest Maroon Color Indian Saree short description', 'Trendiest Maroon Color Indian Saree long description', 'product-images/1701708470.jpeg', '1', '5', '0', '2023-12-04 10:47:50', '2023-12-11 02:58:03'),
(7, 1, 1, 9, 21, 'Oppo Reno 8 pro', 'D2D39DD3', 8, 68000, 64500, 'Oppo Reno 8 pro short description', 'Oppo Reno 8 pro long description', 'product-images/1701708775.jpeg', '1', '0', '0', '2023-12-04 10:52:55', '2023-12-04 10:52:55'),
(8, 5, 22, 4, 10, 'Super Premium Gabardine Pant', 'dk3e98d3d', 42, 650, 620, 'Super Premium Gabardine Pant short description', 'Super Premium Gabardine Pant long descriptoin', 'product-images/1701709068.jpeg', '1', '0', '0', '2023-12-04 10:57:48', '2023-12-06 10:14:15'),
(9, 6, 35, 10, 18, 'Top Brand\'s Hair Oil', 'd37gr4r4rtrt', 15, 780, 660, 'Top Brand\'s Hair Oil  Descriptoin', 'Top Brand\'s Hair Oil  long description', 'product-images/1701709349.jpeg', '1', '1', '0', '2023-12-04 11:02:29', '2023-12-11 01:32:03'),
(10, 5, 21, 1, 10, 'White Formal Shirt', '3D3445ED3', 18, 1400, 900, 'White Formal Shirt short description', 'White Formal Shirt long description', 'product-images/1701709509.jpeg', '1', '1', '0', '2023-12-04 11:05:09', '2023-12-11 01:07:10'),
(11, 5, 21, 1, 11, 'Printed T-Shirt', 'dok3d33d', 30, 600, 520, 'Printed T-Shirt short description', 'Printed T-Shirt long description', 'product-images/1701709621.jpeg', '1', '0', '0', '2023-12-04 11:07:01', '2023-12-04 11:07:01'),
(12, 3, 7, 8, 5, 'Samsumg TV', 'df33kd93k', 4, 52500, 48000, 'Samsung TV short description', 'Samsumg TV long description', 'product-images/1701709749.jpeg', '1', '0', '0', '2023-12-04 11:09:09', '2023-12-04 11:09:09'),
(13, 6, 29, 6, 14, 'Pest three Piece', 'D3KD83J', 8, 1200, 850, 'Pest three Piece SHORT description', 'Pest three Piece long description', 'product-images/1701709885.jpeg', '1', '0', '0', '2023-12-04 11:11:25', '2023-12-04 11:11:25'),
(14, 6, 29, 6, 11, 'Formal Printed Three Piece', 'n3ec93n5', 11, 2250, 1760, 'Formal Printed Three Piece short description', 'Formal Printed Three Piece long description', 'product-images/1701709992.jpeg', '1', '0', '0', '2023-12-04 11:13:12', '2023-12-04 11:13:12'),
(15, 5, 24, 10, 17, 'Axe Dark Tentacion Chocolate', 'cc346v6545', 24, 660, 550, 'Axe Dark Tentacion Chocolate short description', 'Axe Dark Tentacion Chocolate long description', 'product-images/1701710083.jpg', '1', '0', '0', '2023-12-04 11:14:43', '2023-12-04 11:14:43'),
(16, 7, 40, 2, 2, 'Cocabura Bat', 'o3n6di3', 4, 350000, 330000, 'Cocabura Bat short Description', 'Cocabura Bat long description', 'product-images/1701710265.jpeg', '1', '0', '0', '2023-12-04 11:17:45', '2023-12-04 11:17:45'),
(17, 6, 34, 7, 14, 'Chargances Silver Sparkly Rhinestone Crystal Finger', '21', 8, 44000, 41500, 'Chargances Silver Sparkly Rhinestone Crystal Finger short description', 'Chargances Silver Sparkly Rhinestone Crystal Finger long description', 'product-images/1701710426.jpeg', '1', '0', '0', '2023-12-04 11:20:26', '2023-12-04 11:20:26'),
(18, 5, 21, 1, 11, 'Blue Cotton Long Sleeve Casual Shirt', 'i83ke3e35', 23, 1600, 1200, 'Blue Cotton Long Sleeve Casual Shirt short description', 'Blue Cotton Long Sleeve Casual Shirt long description', 'product-images/1701710562.jpeg', '1', '0', '0', '2023-12-04 11:22:42', '2023-12-04 11:22:42'),
(19, 5, 21, 1, 11, 'Black Cotton Long Sleeve Casual Shirt', 'd32ws24e', 9, 1650, 1300, 'Black Cotton Long Sleeve Casual Shirt short description', 'Black Cotton Long Sleeve Casual Shirt long description', 'product-images/1701710711.webp', '1', '0', '0', '2023-12-04 11:25:11', '2023-12-18 05:41:33'),
(20, 6, 29, 6, 17, 'Blue Three Piece Bibiana', '5f74hf45', 20, 2600, 2250, 'Blue Three Piece short description', 'Blue Three Piece long description', 'product-images/1701710830.jpeg', '1', '0', '0', '2023-12-04 11:27:10', '2023-12-04 11:27:10'),
(21, 6, 29, 6, 18, 'Batika Red Three Piece', 'g3465fff', 23, 1200, 880, 'Batika Red Three Piece short description', 'Batika Red Three Piece long description', 'product-images/1701710961.jpeg', '1', '0', '0', '2023-12-04 11:29:21', '2023-12-04 11:29:21'),
(22, 7, 40, 8, 2, 'Cricket Ball', 'd2dd4d32423all', 30, 500, 450, 'Cricket Ball Descripion', 'Cricket Ball long description', 'product-images/1701711065.jpg', '1', '0', '0', '2023-12-04 11:31:05', '2023-12-04 11:31:05'),
(23, 6, 29, 6, 13, 'Black Design Three Piece', 'dg35h3h3', 30, 1150, 800, 'Black Design Three Piece  short description', 'Black Design Three Piece  long description', 'product-images/1701711268.jpeg', '1', '0', '0', '2023-12-04 11:34:28', '2023-12-04 11:34:28'),
(24, 5, 24, 10, 16, 'Hugo Boss The Scent Body Spray', 'd3g6f', 18, 500, 420, 'Hugo Boss The Scent Body Spray', 'Hugo Boss The Scent Body Spray', 'product-images/1701711444.jpeg', '1', '0', '0', '2023-12-04 11:37:24', '2023-12-04 11:37:24'),
(25, 6, 29, 5, 15, 'Green Wedding saree indian', '35d35d35dk3', 13, 3200, 2800, 'Green Wedding saree indian', 'Green Wedding saree indian', 'product-images/1701711595.jpg', '1', '0', '0', '2023-12-04 11:39:55', '2023-12-04 11:39:55'),
(26, 5, 21, 1, 11, 'Printed T-Shirt', 'df3ljd0935', 12, 550, 420, 'Printed T-Shirt', 'Printed T-Shirt', 'product-images/1701711734.jpeg', '1', '0', '0', '2023-12-04 11:42:14', '2023-12-04 11:42:14'),
(27, 6, 35, 10, 18, 'Dove Body Lotion', 'd36ds367f', 69, 580, 450, 'Dove Body Lotion', 'Dove Body Lotion', 'product-images/1701711884.jpeg', '1', '0', '0', '2023-12-04 11:44:44', '2023-12-04 11:44:44'),
(28, 5, 22, 4, 1, 'Jeans Pant', '32d435d', 32, 2400, 2100, 'Jeans Pant short description', 'Jeans Pant long description', 'product-images/1701712002.jpeg', '1', '0', '0', '2023-12-04 11:46:42', '2023-12-04 11:46:42'),
(29, 6, 29, 5, 10, 'Janvi Light Blue Tussar Silk Saree', 'ds2a2a376tg', 4, 8000, 7200, 'Janvi Light Blue Tussar Silk Saree', 'Janvi Light Blue Tussar Silk Saree', 'product-images/1701712129.webp', '1', '0', '0', '2023-12-04 11:48:49', '2023-12-04 11:48:49'),
(30, 1, 1, 9, 5, 'Samsung  Node 10', 'd035j35333', 8, 42000, 38600, 'Samsung  Node 10', 'Samsung  Node 10', 'product-images/1701712248.jpeg', '1', '0', '0', '2023-12-04 11:50:48', '2023-12-04 11:50:48'),
(31, 5, 21, 1, 1, 'New Long Sleeve Casual Red Shirt', 'o3d9d353kj', 9, 1600, 1200, 'New Long Sleeve Casual Shirt', 'New Long Sleeve Casual Shirt', 'product-images/1701712365.jpeg', '1', '0', '0', '2023-12-04 11:52:45', '2023-12-04 11:52:45'),
(32, 5, 22, 4, 1, 'Super Premium Gabardine Pant 2', '76t5t54t', 18, 1160, 900, 'Super Premium Gabardine Pant 2', 'Super Premium Gabardine Pant 2', 'product-images/1701712591.jpeg', '1', '0', '0', '2023-12-04 11:56:31', '2023-12-04 11:56:31'),
(33, 5, 21, 1, 1, 'Red Printed T-Shirt', 'DK39ED3', 28, 500, 420, 'Red Printed T-Shirt', 'Red Printed T-Shirt', 'product-images/1701712802.jpeg', '1', '0', '0', '2023-12-04 12:00:02', '2023-12-04 12:00:02'),
(34, 6, 34, 7, 16, 'Gems and Jewellery', '3d4f6y67hg', 5, 5000, 4300, 'Gems and Jewellery', 'Gems and Jewellery', 'product-images/1701712966.jpeg', '1', '0', '0', '2023-12-04 12:02:46', '2023-12-04 12:02:46'),
(35, 6, 34, 7, 17, 'Gems and Jewellery', 'd3d4567u', 2, 120000, 112000, 'Gems and Jewellery', 'Gems and Jewellery', 'product-images/1701713037.jpg', '1', '0', '0', '2023-12-04 12:03:57', '2023-12-04 12:03:57'),
(36, 6, 34, 7, 17, 'Diamond Nickalce', 'pl293j3333', 2, 80000, 78800, 'Diamond Nickalce', 'Diamond Nickalce', 'product-images/1701713382.jpeg', '1', '0', '0', '2023-12-04 12:09:42', '2023-12-04 12:09:42'),
(37, 6, 32, 3, 9, 'Ladies Shoes', 'dk39d', 23, 1400, 1150, 'Ladies Shoes', 'Ladies Shoes', 'product-images/1701713487.jpeg', '1', '0', '0', '2023-12-04 12:11:27', '2023-12-04 12:11:27'),
(38, 6, 29, 6, 13, 'Mati Three Piece', 'i3md89e', 18, 1800, 1400, 'Mati Three Piece', 'Mati Three Piece', 'product-images/1701713566.jpeg', '1', '0', '0', '2023-12-04 12:12:46', '2023-12-04 12:12:46'),
(39, 6, 30, 5, 16, 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka', 'd3f5', 6, 1800, 1400, 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka', 'Stylish Khimar Borka Hijab With Scart And Niqub Full Set Khimar Borka', 'product-images/1701713703.jpg', '1', '0', '0', '2023-12-04 12:15:03', '2023-12-04 12:15:03'),
(40, 5, 21, 1, 1, 'Formal Blue T-Shirt', 'kd3d3d5', 22, 800, 550, 'Formal Blue T-Shirt', 'Formal Blue T-Shirt', 'product-images/1701713812.jpeg', '1', '0', '0', '2023-12-04 12:16:52', '2023-12-04 12:16:52'),
(41, 5, 21, 1, 11, 'White Formal Shirt', 'o8j383jdd', 13, 500, 430, 'White Formal Shirt', 'White Formal Shirt', 'product-images/1701713907.jpeg', '1', '0', '0', '2023-12-04 12:18:27', '2023-12-04 12:18:27'),
(42, 5, 21, 1, 1, 'Design T-Shirt', 't55h5767', 23, 500, 450, 'Design T-Shirt', 'Design T-Shirt', 'product-images/1701714245.jpeg', '1', '0', '0', '2023-12-04 12:24:05', '2023-12-04 12:24:05'),
(43, 6, 32, 3, 8, 'String Bead Lace Wedding Shoes', 'tYT8934HR', 6, 1800, 1550, 'String Bead Lace Wedding Shoes', 'String Bead Lace Wedding Shoes', 'product-images/1701714431.jpeg', '1', '0', '0', '2023-12-04 12:27:11', '2023-12-04 12:27:11'),
(44, 6, 35, 10, 18, 'These Skincare Products For Oily Skin', 'd3sa345d', 20, 960, 820, 'These Skincare Products For Oily Skin', 'These Skincare Products For Oily Skin', 'product-images/1701714806.jpeg', '1', '0', '0', '2023-12-04 12:33:26', '2023-12-04 12:33:26'),
(45, 5, 21, 1, 1, 'Formal Shirt', 'kd034jdKD39', 15, 1200, 800, 'Formal Shirt', 'Formal Shirt', 'product-images/1701714999.jpg', '1', '0', '0', '2023-12-04 12:36:39', '2023-12-04 12:36:39'),
(46, 5, 23, 1, 1, 'Pink Panjabi', 'f45465F34RF', 28, 1200, 850, 'Pink Panjabi', 'Pink Panjabi', 'product-images/1701715645.jpeg', '1', '0', '0', '2023-12-04 12:47:25', '2023-12-04 12:47:25'),
(47, 5, 43, 1, 11, 'Black Panjabi', 'kd359dj3kr', 23, 1800, 1450, 'Black Panjabi', 'Black Panjabi', 'product-images/1701715861.jpeg', '1', '0', '0', '2023-12-04 12:51:01', '2023-12-04 12:51:01'),
(48, 5, 21, 1, 1, 'White Panjabi', 'd303k3809d3', 18, 1800, 1450, 'White Panjabi', 'White Panjabi', 'product-images/1701715980.jpeg', '1', '0', '0', '2023-12-04 12:53:00', '2023-12-04 12:53:00'),
(49, 1, 1, 9, 20, 'One Plus 8T pro', 'kd39dk3490d', 4, 58000, 55500, 'One Plus 8T pro', 'One Plus 8T pro', 'product-images/1701716181.jpg', '1', '0', '0', '2023-12-04 12:56:21', '2023-12-04 12:56:21'),
(50, 6, 29, 5, 11, 'SamyakkBuy Onion Pink Sequins Embroidered Abutahi Silk Saree', 'd3f46f48fg656', 8, 18000, 16500, 'SamyakkBuy Onion Pink Sequins Embroidered Abutahi Silk Saree SamyakkBuy Onion Pink Sequins Embroidered Abutahi Silk Saree', 'SamyakkBuy Onion Pink Sequins Embroidered Abutahi Silk Saree SamyakkBuy Onion Pink Sequins Embroidered Abutahi Silk Saree', 'product-images/1701716386.jpg', '1', '0', '0', '2023-12-04 12:59:46', '2023-12-04 12:59:46'),
(51, 6, 32, 3, 9, 'Puma Ladies Shoes', 'dk43d83kd8', 21, 1200, 800, 'Puma Ladies Shoes', 'Puma Ladies Shoes', 'product-images/1701716510.jpeg', '1', '0', '0', '2023-12-04 13:01:50', '2023-12-04 13:01:50'),
(52, 6, 44, 12, 23, 'Ladies Watch', 'kd39d9k3', 28, 2200, 1850, 'Ladies Watch', 'Ladies Watch', 'product-images/1701716982.jpeg', '1', '0', '0', '2023-12-04 13:09:42', '2023-12-04 13:09:42'),
(53, 6, 31, 11, 15, 'Ladies Mini Bage', 'kd3kd893k38', 28, 800, 550, 'Ladies Mini Bage', 'Ladies Mini Bage', 'product-images/1701717076.jpg', '1', '0', '0', '2023-12-04 13:11:16', '2023-12-04 13:11:16'),
(54, 6, 32, 3, 8, 'Low Hight hell', '8d38d3k3', 9, 2200, 1760, 'Low Hight hell', 'Low Hight hell', 'product-images/1701717314.jpg', '1', '0', '0', '2023-12-04 13:15:14', '2023-12-04 13:15:14'),
(55, 6, 44, 12, 22, 'Ladies Watch', 'kd3903kd', 3, 14000, 12500, 'Ladies Watch', 'Ladies Watch', 'product-images/1701717504.jpeg', '1', '0', '0', '2023-12-04 13:18:24', '2023-12-04 13:18:24'),
(56, 5, 24, 10, 17, 'Nivea Pearl & Beauty Body Spray', '3ld93d89k3', 44, 680, 520, 'Nivea Pearl & Beauty Body Spray', 'Nivea Pearl & Beauty Body Spray', 'product-images/1701717592.jpeg', '1', '0', '0', '2023-12-04 13:19:52', '2023-12-04 13:19:52'),
(57, 5, 22, 4, 11, 'Jeans Pant for man', 'uiyh56g5t', 22, 2800, 2300, 'Jeans Pant for man', 'Jeans Pant for man', 'product-images/1701717749.jpeg', '1', '0', '0', '2023-12-04 13:22:29', '2023-12-04 13:22:29'),
(58, 5, 28, 2, 22, 'Rolex Watch', '9K38DK3', 4, 42000, 38800, 'Rolex Watch', 'Rolex Watch', 'product-images/1701717875.jpeg', '1', '0', '0', '2023-12-04 13:24:35', '2023-12-04 13:24:35'),
(59, 6, 29, 6, 10, 'Indian Fashionable Cotton Stitched Three Piece', 'tyw5k349yt', 11, 2200, 1850, 'Indian Fashionable Cotton Stitched Three Piece', 'Indian Fashionable Cotton Stitched Three Piece', 'product-images/1701717988.jpeg', '1', '0', '0', '2023-12-04 13:26:28', '2023-12-04 13:26:28'),
(60, 5, 27, 3, 9, 'Puma White Jump Shoes', 'kd839k3kj3', 10, 1800, 1450, 'Puma White Jump Shoes', 'Puma White Jump Shoes', 'product-images/1701718132.jpeg', '1', '0', '0', '2023-12-04 13:28:52', '2023-12-04 13:28:52'),
(61, 5, 22, 4, 3, 'Gavardine Pant', 'k3d98jh3', 34, 1800, 1400, 'Gabardine Pant', 'Gabardine Pant', 'product-images/1701718329.jpeg', '1', '0', '0', '2023-12-04 13:32:09', '2023-12-04 13:32:09'),
(62, 5, 24, 10, 9, 'Fogg Black Series Body Spray', '23', 23, 650, 480, 'Fogg Black Series Body Spray', 'Fogg Black Series Body Spray', 'product-images/1701718496.jpg', '1', '0', '0', '2023-12-04 13:34:56', '2023-12-04 13:34:56'),
(63, 6, 35, 5, 3, 'Nihar Hair Oil Shanti Badam Amla', 'dk30dk3', 30, 210, 180, 'Nihar Hair Oil Shanti Badam Amla', 'Nihar Hair Oil Shanti Badam Amla', 'product-images/1701718777.jpg', '1', '0', '0', '2023-12-04 13:39:37', '2023-12-04 13:39:37'),
(64, 6, 35, 10, 18, 'Parachute Hair Oil Advansed Beliphool', 'd3f7j6j666', 28, 380, 340, 'Parachute Hair Oil Advansed Beliphool', 'Parachute Hair Oil Advansed Beliphool', 'product-images/1701718897.jpeg', '1', '0', '0', '2023-12-04 13:41:37', '2023-12-04 13:41:37'),
(65, 6, 35, 10, 14, 'Body Love Body Cleansers', 'k93jf39fd3ff', 27, 460, 410, 'Body Love Body Cleansers', 'Body Love Body Cleansers', 'product-images/1701719066.jpeg', '1', '0', '0', '2023-12-04 13:44:26', '2023-12-04 13:44:26'),
(66, 6, 29, 6, 13, 'Cotton Three Piece', '3k39d3k', 32, 1200, 850, 'Cotton Three Piece', 'Cotton Three Piece', 'product-images/1701719349.jpeg', '1', '0', '0', '2023-12-04 13:49:09', '2023-12-04 13:49:09'),
(67, 1, 1, 9, 5, 'Samsung S22 Ultra', 'd3d8d83ik', 4, 90000, 87600, 'SamsungS22 Ultra', 'Samsung S22 Ultra', 'product-images/1701719681.jpeg', '1', '0', '0', '2023-12-04 13:54:41', '2023-12-04 13:54:41'),
(68, 6, 34, 7, 17, 'New York Jewelry Designer', '3k38d3k', 4, 250000, 235000, 'New York Jewelry Designer', 'New York Jewelry Designer', 'product-images/1701719853.jpeg', '1', '0', '0', '2023-12-04 13:57:33', '2023-12-04 13:57:33'),
(69, 6, 35, 10, 9, 'Dove Beauty Bar For Deep Moisture', 'd36f4y6', 80, 120, 90, 'Dove Beauty Bar For Deep Moisture', 'Dove Beauty Bar For Deep Moisture', 'product-images/1701719974.jpeg', '1', '0', '0', '2023-12-04 13:59:34', '2023-12-04 13:59:34'),
(70, 6, 35, 10, 8, 'Skin Care products suited', 'f89k39k3kk', 80, 800, 650, 'Skin Care products suited', 'Skin Care products suited', 'product-images/1701720052.png', '1', '0', '0', '2023-12-04 14:00:52', '2023-12-04 14:00:52'),
(71, 6, 29, 6, 13, 'Cotton Printed Stylish Three Piece', 'dk39fk38fj', 41, 800, 650, 'Cotton Printed Stylish Three Piece', 'Cotton Printed Stylish Three Piece', 'product-images/1701720149.jpeg', '1', '0', '0', '2023-12-04 14:02:29', '2023-12-04 14:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GdQMdYRPrzpmD31jGivTmbr9eOhX2lCUqPc7cH64', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib3RDczNqMjNhRXlqVTk1RlRoWGUyUXNxSkNpWUxFazV1a3lUVk9xdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L21hbmFnZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkSk9YUDVSSUM1aXFFeGZaUFlCRno0TzVDQWouL1JRbkNYM1FYaWxMRGFMNzJsaDNicmFJLm0iO30=', 1703964264),
('Kb3NRsuCHbBcedaUbnud6q5JdLTdZJtM0dR3ZOao', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1NyUVh0ajlQcWtwcmx0SVpvODVvSGlMM2ZoVjFwcTlLQVJOdUthUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1703962665);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mobile', 'Mobile', 'sub-category-images/1703963141.png', '1', '2023-12-04 02:56:45', '2023-12-30 13:05:41'),
(2, 1, 'Mobile Phone Accessories', 'Mobile Phone Accessories', 'sub-category-images/1701680246.jpeg', '1', '2023-12-04 02:57:26', '2023-12-04 02:57:26'),
(3, 1, 'Wearable', 'Wearable', 'sub-category-images/1701680265.jpeg', '1', '2023-12-04 02:57:45', '2023-12-04 02:57:45'),
(4, 3, 'Desktop Computers', 'Desktop Computers', 'sub-category-images/1701680315.jpeg', '1', '2023-12-04 02:58:35', '2023-12-04 02:58:35'),
(5, 3, 'Laptop', 'Laptop', 'sub-category-images/1701680340.jpeg', '1', '2023-12-04 02:59:00', '2023-12-04 02:59:00'),
(6, 3, 'Laptop & Computer Accessories', 'Laptop & Computer Accessories', 'sub-category-images/1703963188.png', '1', '2023-12-04 02:59:15', '2023-12-30 13:06:28'),
(7, 3, 'TV & Video Accessories', 'TV & Video Accessories', 'sub-category-images/1703963200.png', '1', '2023-12-04 03:00:25', '2023-12-30 13:06:40'),
(8, 3, 'Home Appliances', 'Home Appliances', 'sub-category-images/1701680438.jpeg', '1', '2023-12-04 03:00:38', '2023-12-04 03:00:38'),
(9, 3, 'Cameras, Camcorders Accessories', 'Cameras, Camcorders Accessories', 'sub-category-images/1701680481.jpeg', '1', '2023-12-04 03:01:21', '2023-12-04 03:01:21'),
(10, 3, 'AC & Home Accessories', 'AC & Home Accessories', 'sub-category-images/1701680504.jpeg', '1', '2023-12-04 03:01:44', '2023-12-04 03:01:44'),
(11, 3, 'Audio & Sound System', 'Audio & Sound System', 'sub-category-images/1701680519.jpeg', '1', '2023-12-04 03:01:59', '2023-12-04 03:01:59'),
(12, 3, 'Video Games Consoles & Accessories', 'Video Games Consoles & Accessories', 'sub-category-images/1701680540.jpeg', '1', '2023-12-04 03:02:20', '2023-12-04 03:02:20'),
(13, 3, 'Others', 'Others', 'sub-category-images/1701680551.jpeg', '1', '2023-12-04 03:02:31', '2023-12-04 03:02:31'),
(14, 4, 'Living Room Furniture', 'Living Room Furniture', 'sub-category-images/1701680575.jpeg', '1', '2023-12-04 03:02:55', '2023-12-04 03:02:55'),
(15, 4, 'Kitchen & Dining Accessories', 'Kitchen & Dining Accessories', 'sub-category-images/1701680615.jpeg', '1', '2023-12-04 03:03:35', '2023-12-04 03:03:35'),
(16, 4, 'Bedroom Furniture', 'Bedroom Furniture', 'sub-category-images/1701680631.jpeg', '1', '2023-12-04 03:03:51', '2023-12-04 03:03:51'),
(17, 4, 'Office & Shop Furniture', 'Office & Shop Furniture', 'sub-category-images/1701680679.jpeg', '1', '2023-12-04 03:04:39', '2023-12-04 03:04:39'),
(18, 4, 'Home Necessary', 'Home Necessary', 'sub-category-images/1701680744.jpeg', '1', '2023-12-04 03:05:44', '2023-12-04 03:05:44'),
(19, 4, 'Home Textiles & Decoration', 'Home Textiles & Decoration', 'sub-category-images/1701680789.jpeg', '1', '2023-12-04 03:06:29', '2023-12-04 03:06:29'),
(20, 5, 'Jacket & Coat', 'Jacket & Coat', 'sub-category-images/1701680813.jpeg', '1', '2023-12-04 03:06:53', '2023-12-04 03:06:53'),
(21, 5, 'Shirt & T-Shirt', 'Shirt & T-Shirt', 'sub-category-images/1701680845.jpeg', '1', '2023-12-04 03:07:25', '2023-12-04 03:07:25'),
(22, 5, 'Jeans Pant', 'Jeans Pant', 'sub-category-images/1701680866.jpeg', '1', '2023-12-04 03:07:46', '2023-12-04 03:07:46'),
(23, 5, 'Trending Dress', 'Trending Dress', 'sub-category-images/1701680886.jpeg', '1', '2023-12-04 03:08:06', '2023-12-04 03:08:06'),
(24, 5, 'Grooming & Body care', 'Grooming & Body care', 'sub-category-images/1701680911.jpg', '1', '2023-12-04 03:08:31', '2023-12-04 03:08:31'),
(25, 5, 'Optical & Sunglasses', 'Optical & Sunglasses', 'sub-category-images/1701680924.jpeg', '1', '2023-12-04 03:08:44', '2023-12-04 03:08:44'),
(26, 5, 'Baby Boys Fashion', 'Baby Boys Fashion', 'sub-category-images/1701680944.jpeg', '1', '2023-12-04 03:09:04', '2023-12-04 03:09:04'),
(27, 5, 'Shoes', 'Shoes', 'sub-category-images/1701680958.jpeg', '1', '2023-12-04 03:09:18', '2023-12-04 03:09:18'),
(28, 5, 'Men\'s Watch', 'Men\'s Watch', 'sub-category-images/1701680973.jpeg', '1', '2023-12-04 03:09:33', '2023-12-04 03:09:33'),
(29, 6, 'Deshi Dress', 'Deshi Dress', 'sub-category-images/1701681176.jpeg', '1', '2023-12-04 03:12:56', '2023-12-04 03:12:56'),
(30, 6, 'Winter Wear', 'Winter Wear', 'sub-category-images/1701681194.jpeg', '1', '2023-12-04 03:13:14', '2023-12-04 03:13:14'),
(31, 6, 'Bag & Accessories', 'Bag & Accessories', 'sub-category-images/1701681214.jpg', '1', '2023-12-04 03:13:34', '2023-12-04 03:13:34'),
(32, 6, 'Ladies Shoes', 'Ladies Shoes', 'sub-category-images/1701681239.jpeg', '1', '2023-12-04 03:13:59', '2023-12-04 03:13:59'),
(33, 6, 'Under wear & Sleeping suits', 'Under wear & Sleeping suits', 'sub-category-images/1701681315.jpeg', '1', '2023-12-04 03:15:15', '2023-12-04 03:15:15'),
(34, 6, 'Jewellery & Watches', 'Jewellery & Watches', 'sub-category-images/1701681338.jpeg', '1', '2023-12-04 03:15:38', '2023-12-04 03:15:38'),
(35, 6, 'Hair & Screen Care', 'Hair & Screen Care', 'sub-category-images/1701681360.jpeg', '1', '2023-12-04 03:16:00', '2023-12-04 03:16:00'),
(36, 6, 'Optical & Sunglasses', 'Optical & Sunglasses', 'sub-category-images/1701681381.jpeg', '1', '2023-12-04 03:16:21', '2023-12-04 03:16:21'),
(37, 6, 'Baby Girl Fashion', 'Baby Girl Fashion', 'sub-category-images/1701681398.jpeg', '1', '2023-12-04 03:16:38', '2023-12-04 03:16:38'),
(38, 6, 'Other', 'Other', 'sub-category-images/1701681424.jpg', '1', '2023-12-04 03:17:04', '2023-12-04 03:17:04'),
(39, 7, 'Musical Intruments', 'Musical Intruments', 'sub-category-images/1701681941.jpeg', '1', '2023-12-04 03:25:41', '2023-12-04 03:25:41'),
(40, 7, 'Sports', 'Sports', 'sub-category-images/1701681952.jpg', '1', '2023-12-04 03:25:52', '2023-12-04 03:25:52'),
(41, 7, 'Fitness & Gym', 'Fitness & Gym', 'sub-category-images/1701681965.jpeg', '1', '2023-12-04 03:26:05', '2023-12-04 03:26:05'),
(42, 6, 'Cloths', 'Cloths', 'sub-category-images/1701707590.jpeg', '1', '2023-12-04 10:33:10', '2023-12-04 10:33:10'),
(43, 5, 'Panjabi', 'Panjabi', 'sub-category-images/1701715788.jpeg', '1', '2023-12-04 12:49:48', '2023-12-04 12:49:48'),
(44, 6, 'Ladies Watch', 'Ladies Watch', 'sub-category-images/1701716588.jpeg', '1', '2023-12-04 13:03:08', '2023-12-04 13:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shirt & T-Shirt', 'Shirt & T-Shirt', 'unit-images/1701681462.jpeg', '1', '2023-12-04 03:17:42', '2023-12-04 03:17:42'),
(2, 'Watch', 'Watch', 'unit-images/1701681526.jpeg', '1', '2023-12-04 03:18:46', '2023-12-04 03:18:46'),
(3, 'Shoes', 'Shoes', 'unit-images/1701681581.jpeg', '1', '2023-12-04 03:19:41', '2023-12-04 03:19:41'),
(4, 'Pant', 'Pant', 'unit-images/1701681596.jpeg', '1', '2023-12-04 03:19:56', '2023-12-04 03:19:56'),
(5, 'Saree', 'Saree', 'unit-images/1701681615.jpeg', '1', '2023-12-04 03:20:15', '2023-12-04 03:20:15'),
(6, 'Three Piece', 'Three Piece', 'unit-images/1701681637.jpeg', '1', '2023-12-04 03:20:37', '2023-12-04 03:20:37'),
(7, 'Optics & Watch', 'Optics & Watch', 'unit-images/1701681662.jpeg', '1', '2023-12-04 03:21:02', '2023-12-04 03:21:02'),
(8, 'Electronics', 'Electronics', 'unit-images/1701681771.jpeg', '1', '2023-12-04 03:22:51', '2023-12-04 03:22:51'),
(9, 'Mobile', 'Mobile', 'unit-images/1701698466.jpeg', '1', '2023-12-04 08:01:06', '2023-12-04 08:01:06'),
(10, 'Cosmatics', 'Cosmatics', 'unit-images/1701709199.jpg', '1', '2023-12-04 10:59:59', '2023-12-04 10:59:59'),
(11, 'Ladies bag', 'Ladies bag', 'unit-images/1701716547.jpg', '1', '2023-12-04 13:02:27', '2023-12-04 13:02:27'),
(12, 'Ladies Watch', 'Ladies Watch', 'unit-images/1701716568.jpeg', '1', '2023-12-04 13:02:48', '2023-12-04 13:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `user_type` varchar(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Md Shanto Hossain', 'shanto12@gmail.com', NULL, '$2y$12$JOXP5RIC5iqExfZPYBFz4O5CAj./RQnCX3QXilLDaL72lh3braI.m', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-12-05 05:05:17', '2023-12-05 05:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 13, 4, '2023-12-10 08:44:28', '2023-12-10 08:44:28');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
