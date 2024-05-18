-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2024 lúc 05:12 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webprogramming`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `name` varchar(255) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`name`, `price`, `description`) VALUES
('Dog walking', 30, 'Enjoy peace of mind knowing your furry friend gets their daily exercise with a professional dog walker. Walks are typically 30-60 minutes long and provide physical and mental stimulation for your pup.'),
('Pet Sitting', 50, 'Spoil your pet with in-home care when you travel or have long workdays. Pet sitters provide companionship, feeding, playtime, and waste removal, ensuring your pet feels comfortable and safe in their own environment.'),
('Pet Grooming', 100, 'Keep your pet looking and feeling their best with a professional grooming session. Services can include baths, haircuts, nail trims, ear cleaning, and anal gland expression.'),
('Pet Training', 200, 'Address behavioral issues or teach your pet new tricks with a qualified pet trainer. They can help with obedience training, housebreaking, socialization, and resolving specific problems like chewing or barking.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
