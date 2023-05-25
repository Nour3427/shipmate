-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2023 at 10:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `idDelivery` int NOT NULL,
  `sending_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `departure_city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `destination_city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `arrival_time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `transport_tool` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight_limit` int NOT NULL,
  `remaining_weight` int NOT NULL,
  `price` float NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`idDelivery`, `sending_date`, `departure_city`, `destination_city`, `departure_time`, `arrival_time`, `transport_tool`, `weight_limit`, `remaining_weight`, `price`, `user_id`) VALUES
(6, '2023-05-20', 'Amsterdam', 'Paris', '08:00', '11:00', 'voiture', 8, 3, 4, 9),
(29, '2023-05-30', 'Marseille', 'Nice', '12:00', '12:00', 'bateau', 3, 0, 1.5, 9),
(36, '2023-05-28', 'Venise', 'Oran', '12:00', '12:00', 'bateau', 6, 4, 5, 9),
(37, '2023-06-01', 'Mostaganem', 'Nice', '12:00', '12:00', 'bateau', 9, 7, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_request`
--

CREATE TABLE `delivery_request` (
  `idRequest` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `weight` int NOT NULL,
  `user_id` int NOT NULL,
  `delivery_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_request`
--

INSERT INTO `delivery_request` (`idRequest`, `status`, `weight`, `user_id`, `delivery_id`) VALUES
(9, 'Acceptée', 5, 9, 6),
(15, 'Acceptée', 2, 34, 37),
(16, 'Acceptée', 2, 35, 37),
(17, 'En attente', 2, 35, 36);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `role`, `firstname`, `lastname`, `email`, `password`, `phone_number`) VALUES
(1, 'user', 'nour', 'ferraoun', 'nourfer@gmail.com', 'azertyui', '0123456789'),
(9, 'admin', 'nour', 'Ferraoun', 'nourelyakine.moumene@gmail.com', '$2y$10$IKPbrWDioW/zOmys9e9Z2OgKKo0S/pVUHl6lskB21Fu4gQcWfI5iK', '0762425965'),
(28, 'user', 'azerty', 'qwertt', 'azertypassepartout@gmail.com', '$2y$10$3VAj3Ch7Bb1n.73cQ2KVNOWN2VnvhtnyiBTn/CutaSeIQZo5FuOIm', '0123456789'),
(34, 'user', 'leila', 'leila', 'leila@gmail.com', '$2y$10$wwySL4r/OsvjD4g7RKoKiuW4ZaPdsAisJlUYk/P2RAtAmTw5gazXK', '0758272645'),
(35, 'user', 'yasmine', 'ben', 'yasmine@gmail.com', '$2y$10$a5.0G0TZUlL1jaTWcuyHaeAQk6LyfR9XL17rUZyYEtxyeBzaqHwj2', '0762425934');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`idDelivery`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `delivery_request`
--
ALTER TABLE `delivery_request`
  ADD PRIMARY KEY (`idRequest`),
  ADD KEY `fk_Req_user` (`user_id`),
  ADD KEY `fk_req_delivery` (`delivery_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `idDelivery` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `delivery_request`
--
ALTER TABLE `delivery_request`
  MODIFY `idRequest` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `delivery_request`
--
ALTER TABLE `delivery_request`
  ADD CONSTRAINT `fk_req_delivery` FOREIGN KEY (`delivery_id`) REFERENCES `delivery` (`idDelivery`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_Req_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
