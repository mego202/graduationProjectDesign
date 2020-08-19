-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 12:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pays` int(11) NOT NULL,
  `work_hours` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `staff` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `services` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `phone`, `type`, `pays`, `work_hours`, `location`, `staff`, `beds`, `rooms`, `labs`, `services`) VALUES
(1, 'مستشفي الحميات ببنها', '02 42193745', 'عام', 2000, 20, 'بنها الفلل', 100, 200, 40, 10, 'الحميات'),
(2, 'مستشفي الجامعة ببنها ', '02 42192225', 'عام', 100, 24, 'بنها الاشارة', 150, 300, 50, 15, 'طواريء'),
(3, 'مستشفي بنها التعليمي', '02 42124745', 'عام', 500, 18, 'بنها', 50, 110, 26, 3, 'كل التخصصات'),
(4, 'المستشفي الاميري', '02 42193895', 'عام', 800, 20, 'بنها', 130, 60, 15, 2, 'كل التخصصات'),
(5, 'مستشفي التامين الصحي', '02 42127745', 'عام', 300, 19, 'بنها', 70, 100, 20, 2, 'كل التخصصات'),
(6, 'مستشفي الاطفال ببنها', '02 42183745', 'عام', 600, 16, 'بنها', 100, 200, 30, 5, 'اطفال'),
(7, 'مستشفي الجلديه', '02 42183965', 'عام', 900, 16, 'بنها', 80, 140, 30, 5, 'جلدية'),
(8, 'مستشفي الصحه النفسيه', '02 42183565', 'عام', 3000, 16, 'بنها', 130, 300, 30, 6, 'الامراض النفسيه والادمان'),
(9, 'المستشفي الكويتي', '02 42193445', 'خاص', 10000, 24, 'بنها', 120, 220, 40, 8, 'كل التخصصات'),
(10, 'مستشفي الراعي الصالح', '02 42193333', 'خاص', 3000, 20, 'بنها سعد زغلول', 80, 60, 15, 4, 'كل التخصصات'),
(11, 'مركز الهلال الطبي', '02 42181225', 'خاص', 6000, 24, 'بنها الاهرام', 115, 100, 40, 2, 'مركز طبي'),
(12, 'مستشفي الايمان الخيري', '02 42193712', 'عام', 500, 24, 'بنها الاهرام', 120, 70, 13, 2, 'كل التخصصات');

-- --------------------------------------------------------

--
-- Table structure for table `manger`
--

CREATE TABLE `manger` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manger`
--

INSERT INTO `manger` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'belal', '1212121212121', 'hghghghg', '0000'),
(2, 'magdy', '0111124265', 'magdy@gmsil.com', '0000'),
(3, 'Ali', '0121121212121', 'ali@gmail.com', '0000'),
(4, 'Mohammed', '0121121212121', 'Mohammed@gmail.com', '0000'),
(5, 'zeinab', '0121121212121', 'zeinab@gmail.com', '0000'),
(6, 'essra', '0121121212121', 'essra@gmail.com', '0000'),
(7, 'sayed', '0121121212121', 'sayed@gmail.com', '0000'),
(8, 'aya', '0121121212121', 'aya@gmail.com', '0000'),
(9, 'fatma', '0121121212121', 'fatma@gmail.com', '0000'),
(10, 'hend', '0121121212121', 'hend@gmail.com', '0000'),
(11, 'sara', '0121121212121', 'sara@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `age_from` int(11) NOT NULL,
  `age_to` int(11) NOT NULL,
  `work_hours` int(11) NOT NULL,
  `pays` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `staff` int(11) NOT NULL,
  `students` int(11) NOT NULL,
  `classes` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `manger_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `phone`, `type`, `age_from`, `age_to`, `work_hours`, `pays`, `location`, `staff`, `students`, `classes`, `labs`, `manger_id`) VALUES
(1, 'مدرسة السلام الخاصة للغات', '02 42193745', 'خاص', 6, 18, 8, 70000, 'بنها', 30, 140, 20, 4, 1),
(2, 'مدرسة الاصلاح الزراعي', '02 42193728', 'عام', 15, 18, 6, 2000, 'بنها', 15, 200, 15, 3, 2),
(3, 'مدرسة بنها الثانوية بنين', '02 42193565', 'عام', 15, 18, 4, 6000, 'بنها خلف التأمين الصحي', 30, 140, 20, 4, 3),
(4, 'مدرسة 15 مايو الاعدادية بنات', '02 4219335', 'عام', 12, 15, 6, 1000, 'بنها المنشية', 20, 150, 18, 3, 4),
(5, 'مدرسه بنها الثانويه بنات', '02 42195645', 'عام', 15, 18, 4, 4000, 'بنها خلف الاستاد', 20, 150, 30, 6, 5),
(6, 'مدرسه الامام محمد عبده', '02 42195645', 'عام', 6, 12, 8, 5000, 'بنها', 20, 130, 20, 2, 6),
(7, 'مدرسه 25 يناير', '02 42195345', 'عام', 12, 15, 4, 3000, 'بنها الاشارة', 25, 120, 17, 3, 7),
(8, 'مدرسه بنها الحديثه', '02 42195235', 'خاص', 6, 15, 8, 10000, 'بنها', 30, 150, 20, 4, 8),
(9, 'مدرسه اتريب الابتدائيه', '02 42195345', 'خاص', 6, 12, 9, 5000, 'بنها الموقف', 25, 120, 17, 3, 9),
(10, 'مدرسة الشيماء الثانوية بنات', '02 42195245', 'عام', 15, 18, 6, 3000, 'بنها الاشارة', 30, 150, 20, 4, 10),
(11, 'المدرسه الفنيه التجاريه', '02 42123745', 'عام', 15, 18, 6, 1500, 'بنها المحافظة', 50, 200, 15, 4, 11),
(12, 'مدرسه بنها الاعداديه القديمه', '02 42173545', 'عام', 12, 15, 6, 2000, 'بنها', 60, 200, 10, 3, 12),
(13, 'مدرسه عزبه ابو فرج الاعدادي', '02 42198945', 'عام', 12, 15, 6, 3000, 'بجوار المستشفي التعليمي', 70, 250, 15, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `name`, `count`) VALUES
(1, 'مستشفي_الحميات', 6),
(2, 'مستشفي_الجامعة_ببنها', 7),
(3, 'مستشفي_بنها_التعليمي', 7),
(4, 'مستشفي_الاميري', 7),
(5, 'مستشفي_التأمين_الصحي', 7),
(6, 'مستشفي_الاطفال', 7),
(7, 'مستشفي_الجلدية', 7),
(8, 'مستشفي_الصحة_النفسية', 7),
(9, 'مستشفي_الكويتي', 0),
(10, 'مستشفي_الراعي_الصالح', 0),
(11, 'مركز_الهلال_الطبي', 0),
(12, 'مستشفي_الايمان_الخيري', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp2`
--

CREATE TABLE `temp2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temp2`
--

INSERT INTO `temp2` (`id`, `name`, `count`) VALUES
(1, 'مدرسة_السلام_الخاصة_للغات', 50),
(2, 'مدرسة_الاصلاح_الزراعي', 30),
(3, 'مدرسة_بنها_الثانوية_بنين', 80),
(4, 'مدرسة_15_مايو_الاعدادية_بنات', 90),
(5, 'مدرسة_بنها_الثانويه_بنات', 33),
(6, 'مدرسة_الامام_محمد_عبده', 54),
(7, 'مدرسة_25_يناير', 24),
(8, 'مدرسة_بنها_الحديثه', 70),
(9, 'مدرسة_اتريب_الابتدائيه', 20),
(10, 'مدرسة_الشيماء_الثانوية_بنات', 60),
(11, 'المدرسة_الفنيه_التجاريه', 85),
(12, 'مدرسة_بنها_الاعداديه_القديمه', 45),
(13, 'مدرسة_عزبه_ابو_فرج_الاعدادي', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `career` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `career`) VALUES
(1, 'belal', 123566, 'belal', '1234', ''),
(2, 'belal', 1111111, 'belal@yahoo.com', '0000', 'doctor'),
(3, 'magdy', 22555, 'magdy@gmail.com', '0000', 'programmer'),
(4, 'mohammed', 124568755, 'mohammed@gmail.com', '0000', 'enginner'),
(5, 'ali', 1245, 'ali@gmail.com', '1234', 'teacher'),
(6, 'hossam', 1233, 'hossam@yahoo.com', '1234', 'worker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manger_id` (`manger_id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp2`
--
ALTER TABLE `temp2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `manger`
--
ALTER TABLE `manger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temp2`
--
ALTER TABLE `temp2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `manger_ibfk_1` FOREIGN KEY (`id`) REFERENCES `schools` (`manger_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
