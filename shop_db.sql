-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 09:28 PM
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
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_lastname` varchar(50) NOT NULL,
  `admin_age` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_lastname`, `admin_age`, `admin_email`, `admin_address`) VALUES
(7, 'Evaff', 'Jones', 40, 'eva.jones@example.com', '202 Cedar Dr'),
(8, 'Michael', 'Brown', 32, 'michael.brown@example.com', '303 Birch Rd'),
(9, 'Sophia', 'Taylor', 27, 'sophia.taylor@example.com', '404 Pine Ave'),
(10, 'Daniel', 'Miller', 31, 'daniel.miller@example.com', '505 Oak St'),
(11, 'Olivia', 'Smith', 26, 'olivia.smith@example.com', '606 Elm Blvd'),
(12, 'David', 'Johnson', 33, 'david.johnson@example.com', '707 Maple Dr'),
(14, 'Alexander', 'Davis', 34, 'alexander.davis@example.com', '909 Birch Ave'),
(15, 'Grace', 'Thomas', 37, 'grace.thomas@example.com', '121 Pine St'),
(16, 'Benjamin', 'Moore', 28, 'benjamin.moore@example.com', '232 Oak Blvd'),
(18, 'William', 'Jones', 32, 'william.jones@example.com', '454 Maple Dr'),
(19, 'Ava', 'Hernandez', 26, 'ava.hernandez@example.com', '565 Cedar Ave'),
(20, 'James', 'Brown', 35, 'james.brown@example.com', '676 Birch St'),
(21, 'Isabella', 'Miller', 31, 'isabella.miller@example.com', '787 Pine Blvd'),
(22, 'Daniel', 'Garcia', 27, 'daniel.garcia@example.com', '898 Oak Ln'),
(23, 'Mia', 'Wilson', 29, 'mia.wilson@example.com', '909 Elm Rd'),
(24, 'Ethan', 'Clark', 33, 'ethan.clark@example.com', '1010 Maple Dr'),
(25, 'Chloe', 'Lee', 28, 'chloe.lee@example.com', '1212 Cedar Ave'),
(26, 'Jacob', 'Lopez', 30, 'jacob.lopez@example.com', '1313 Pine Blvd'),
(27, 'Sophia', 'Gonzalez', 36, 'sophia.gonzalez@example.com', '1414 Oak St'),
(28, 'Aiden', 'Baker', 29, 'aiden.baker@example.com', '1515 Birch Ln'),
(29, 'Madison', 'Turner', 32, 'madison.turner@example.com', '1616 Elm Dr'),
(30, 'Logan', 'Ward', 27, 'logan.ward@example.com', '1717 Cedar Ave'),
(31, 'Emily', 'Cooper', 35, 'emily.cooper@example.com', '1818 Pine Rd'),
(32, 'Lucas', 'Reed', 31, 'lucas.reed@example.com', '1919 Oak Blvd'),
(33, 'Abigail', 'Fisher', 26, 'abigail.fisher@example.com', '2020 Maple St'),
(34, 'ffff', 'fff', 44, 'qqq@gmail.com', 'gggg'),
(35, 'John', 'Doe', 30, 'john.doe@example.com', '123 Main St'),
(36, 'Jane', 'Smith', 25, 'jane.smith@example.com', '456 Oak Ave'),
(37, 'Alice', 'Johnson', 28, 'alice.johnson@example.com', '789 Pine Blvd'),
(38, 'Bob', 'Williams', 35, 'bob.williams@example.com', '101 Maple Ln'),
(39, 'Eva', 'Jones', 40, 'eva.jones@example.com', '202 Cedar Dr'),
(40, 'Michael', 'Brown', 32, 'michael.brown@example.com', '303 Birch Rd'),
(41, 'Sophia', 'Taylor', 27, 'sophia.taylor@example.com', '404 Pine Ave'),
(42, 'Daniel', 'Miller', 31, 'daniel.miller@example.com', '505 Oak St'),
(43, 'Olivia', 'Smith', 26, 'olivia.smith@example.com', '606 Elm Blvd'),
(44, 'David', 'Johnson', 33, 'david.johnson@example.com', '707 Maple Dr'),
(45, 'Emma', 'Williams', 29, 'emma.williams@example.com', '808 Cedar Ln'),
(46, 'Alexander', 'Davis', 34, 'alexander.davis@example.com', '909 Birch Ave'),
(47, 'Gracevvv', 'Thomas', 37, 'grace.thomas@example.com', '121 Pine St'),
(48, 'Benjamin', 'Moore', 28, 'benjamin.moore@example.com', '232 Oak Blvd'),
(49, 'Lily', 'Martinez', 30, 'lily.martinez@example.com', '343 Elm Rd'),
(50, 'William', 'Jones', 32, 'william.jones@example.com', '454 Maple Dr'),
(51, 'Ava', 'Hernandez', 26, 'ava.hernandez@example.com', '565 Cedar Ave'),
(52, 'James', 'Brown', 35, 'james.brown@example.com', '676 Birch St'),
(53, 'Isabella', 'Miller', 31, 'isabella.miller@example.com', '787 Pine Blvd'),
(54, 'Daniel', 'Garcia', 27, 'daniel.garcia@example.com', '898 Oak Ln'),
(55, 'Mia', 'Wilson', 29, 'mia.wilson@example.com', '909 Elm Rd'),
(56, 'Ethan', 'Clark', 33, 'ethan.clark@example.com', '1010 Maple Dr'),
(57, 'Chloe', 'Lee', 28, 'chloe.lee@example.com', '1212 Cedar Ave'),
(58, 'Jacob', 'Lopez', 30, 'jacob.lopez@example.com', '1313 Pine Blvd'),
(59, 'Sophia', 'Gonzalez', 36, 'sophia.gonzalez@example.com', '1414 Oak St'),
(60, 'Aiden', 'Baker', 29, 'aiden.baker@example.com', '1515 Birch Ln'),
(61, 'Madison', 'Turner', 32, 'madison.turner@example.com', '1616 Elm Dr'),
(62, 'Logan', 'Ward', 27, 'logan.ward@example.com', '1717 Cedar Ave'),
(63, 'Emily', 'Cooper', 35, 'emily.cooper@example.com', '1818 Pine Rd'),
(64, 'Lucas', 'Reed', 31, 'lucas.reed@example.com', '1919 Oak Blvd'),
(65, 'Abigail', 'Fisher', 26, 'abigail.fisher@example.com', '2020 Maple St');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_type` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `procuct_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `is_reserved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `capacity`, `is_reserved`) VALUES
(1, 101, 2, 0),
(2, 102, 3, 0),
(3, 103, 2, 0),
(4, 201, 4, 0),
(5, 202, 3, 0),
(6, 203, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'charick', '$2y$10$RRXG1OaHcTk7okB3uPSxk.BMSxaplFAtsjnKmD7SUgfrXyYpn8zmG', 'charick@gmail.com'),
(2, 'papa', '$2y$10$DFKkkI6C3isVhepGTcdSMe5JdeJDERdW5ZFwoGRu7MPBspqy5ks0a', 'papa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
