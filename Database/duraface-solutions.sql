-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 12:20 PM
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
-- Database: `duraface-solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Will Smith', 'ashishwadbude@gmail.com', 'testing', '2024-08-13 10:10:25'),
(2, 'ashish', 'johndoe@gmail.com', 'uh', '2024-08-13 10:23:45'),
(3, 'ashish', 'johndoe@gmail.com', 'uh', '2024-08-13 10:24:28'),
(4, 'ashish', 'johndoe@gmail.com', 'uh', '2024-08-13 10:26:00'),
(5, 'contactus', 'ashishwadbude@gmail.com', 'fdsf', '2024-08-13 10:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_selling_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_slug`, `product_stock`, `product_selling_price`, `product_image`, `meta_description`, `status`, `created_at`) VALUES
(32, 'Asian Wall Putty', 'asian-wall-putty', 1200, 800.00, 'asianpaintswallputty.jpeg', 'we have brought forth a huge variety of Asian Wall Putty.', 0, '2024-08-16 05:36:36'),
(33, 'Trimurti wall putty', 'trimurtiwallputty', 200, 990.00, 'trinurttywallputty.jpg', 'smooth finish that preventing chafing and cracking.', 0, '2024-08-16 05:42:34'),
(35, 'Birla Tile Adhesive', 'birla-tile-adhesive', 21, 670.00, 'BirlaTileAdhesive.jpeg', ' for Tile AdhesionTile adhesive is a ready-mix', 0, '2024-08-16 06:00:23'),
(40, 'Quick Mix', 'quick-mix', 1200, 230.00, 'quickmix_jpg', 'For laying aerated light weight concrete blocks, Fly Ash Bricks and Cement Blocks.', 0, '2024-08-16 06:44:33'),
(47, 'New TiloFix Tile Adhesive', 'new-tilofix-tile-adhesive', 45, 543.00, 'Tilofix_Tile_Adhesive_jpg', 'ilofix is a polymer modified, fdsf nbjdsd', 0, '2024-08-17 08:59:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_slug` (`product_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
