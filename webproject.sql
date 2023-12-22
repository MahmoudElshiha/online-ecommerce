-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql305.infinityfree.com
-- Generation Time: Dec 22, 2023 at 06:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35655397_webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `element_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `product_stars` int(11) NOT NULL,
  `product_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_stars`, `product_details`) VALUES
(1, 'camera', 1200, '../images/products/1703176295_hero4.jpg', 4, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(2, 'camera', 170, '../images/products/1703186300_retro-black-camera-arrangement.jpg', 5, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(3, 'keyboard', 73, '../images/products/1703186500_618A+B25MKL._AC_SL1500_.jpg', 3, 'interior lighting'),
(4, 'mouse', 32, '../images/products/1703192799_41qycPBP7xS._AC_SL1000_.jpg', 4, 'the controller is controlled via an extternal connection '),
(5, 'macbook Air ', 3574, '../images/products/1703193203_51EYQmHQ0KL._AC_SL1500_.jpg', 5, '13.3-inch Retina screen with a density of 227 pixels, a brightness of 400 nits, a lithium polymer battery, a 49.9 watt-hour card, and a central processing unit with 8 cores, 4 of which are for performance and 4 for efficiency.  With a seven-core graphics processing unit  Neural Engine with 16 cores'),
(6, 'mouse', 22, '../images/products/1703193300_61AcT0ZuO3L._AC_SL1500_.jpg', 4, 'interior lighting and Wired connection '),
(7, 'office chair', 265, '../images/products/1703193755_61MGDqLhnIL._AC_SL1500_.jpg', 4, 'Movable and comfortable, made of genuine leather. It comes with a head pillow and a back pillow'),
(8, 'mouse', 28, '../images/products/1703193801_61mpMH5TzkL._AC_SL1500_.jpg', 3, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(9, 'keyboard', 79, '../images/products/1703193877_61PmdQKvgHL._AC_SL1500_.jpg', 4, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(10, 'mouse', 33, '../images/products/1703193931_61TLH3chBFL._AC_SL1500_.jpg', 2, ' Wired connection '),
(11, 'office chair', 230, '../images/products/1703193981_61zviM81hxL._AC_SX425_.jpg', 4, 'Movable and comfortable, made of genuine leather. It comes with a head pillow and a back pillow'),
(12, 'hp laptop ', 2579, '../images/products/1703194074_71ASAtN3OZL._AC_SL1500_.jpg', 4, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(13, 'laptop ', 1995, '../images/products/1703194227_71G7amV9I4L._AC_SL1500_.jpg', 3, '1200 p - full HD __ intel: 4-core __ 16 GB DDRS  __ 512 GB SSD'),
(14, 'laptop ', 2257, '../images/products/1703194277_71IsafDXnKL._AC_SL1500_.jpg', 4, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(15, 'mouse', 42, '../images/products/1703194314_71MCmrKFCNL._AC_SL1500_.jpg', 5, 'the controller is controlled via an extternal connection '),
(16, 'keyboard', 82, '../images/products/1703194361_71T1WQSxp9L._AC_SL1500_.jpg', 4, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(17, 'camera', 194, '../images/products/1703194537_81aOvZ5rL7L._AC_SL1500_.jpg', 4, 'HD Digital lens __ 4K  __ it comes with a flash drive and a 32 GB memory card'),
(18, 'camera', 221, '../images/products/1703194684_81oSKp95+sL._AC_SL1500_.jpg', 5, '16X powerful Zoom  __ 4K  __ it comes a 32 GB memory card'),
(19, 'camera', 300, '../images/products/1703194736_81pTvWcR5ZL._AC_SL1500_.jpg', 5, '16X powerful Zoom  __ 4K  __ it comes a 32 GB memory card'),
(20, 'keyboard', 77, '../images/products/1703194770_618zZ7u3sUL._AC_SL1500_.jpg', 3, 'Quis eiusmod in ut id in ipsum ipsum sit. Quis dolore commodo excepteur qui excepteur nulla cupidatat nulla do ex dolore ex. Culpa laboris ullamco do voluptate amet ipsum. Minim anim sunt mollit excepteur ex deserunt dolore culpa ut laborum. Sint id fugiat ex et ex consequat irure veniam exercitation labore officia non. Irure ut aliquip consequat minim cupidatat magna amet proident aliqua do veniam magna deserunt. Commodo tempor elit id ut sint velit ipsum reprehenderit esse.'),
(21, 'laptop ', 2157, '../images/products/1703194946_810bkzpO7+L._AC_SL1500_.jpg', 4, '4GB DDR4 __ 128GB EMMc __ intel: Celeron'),
(22, 'laptop ', 1830, '../images/products/1703195038_dc.jpg', 3, '8 GB DDR4 __ 512 GB SSD __ intel : core i5'),
(23, 'laptop ', 2999, '../images/products/1703195156_51wJ5p8HFZL._AC_SL1200_.jpg', 5, '13.3-inch Retina screen with a density of 227 pixels, a brightness of 400 nits, a lithium polymer battery, a 49.9 watt-hour card'),
(24, 'calculator casio', 200, '../images/products/1703236085_71Jvd1EWeeL._AC_SX679_.jpg', 4, 'for math');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`) VALUES
(0, 'admin', '1234', 1),
(3, 'mazin', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`element_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `element_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
