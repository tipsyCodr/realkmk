-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2024 at 05:59 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `realbuysale`
--

-- --------------------------------------------------------
--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `pk_i_id` int(10) UNSIGNED NOT NULL,
  `fk_c_country_code` char(2) NOT NULL,
  `s_name` varchar(60) NOT NULL,
  `s_name_native` varchar(60) DEFAULT NULL,
  `s_slug` varchar(60) NOT NULL DEFAULT '',
  `b_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb3 COLLATE = utf8mb3_general_ci;
--
-- Dumping data for table `states`
--

INSERT INTO `states` (
    `pk_i_id`,
    `fk_c_country_code`,
    `s_name`,
    `s_name_native`,
    `s_slug`,
    `b_active`
  )
VALUES (
    4252881,
    'IN',
    'West Bengal',
    NULL,
    'west-bengal',
    1
  ),
  (
    4253626,
    'IN',
    'Uttar Pradesh',
    NULL,
    'uttar-pradesh',
    1
  ),
  (4254169, 'IN', 'Tripura', NULL, 'tripura', 1),
  (4254788, 'IN', 'Telangana', NULL, 'telangana', 1),
  (
    4255053,
    'IN',
    'Tamil Nadu',
    NULL,
    'tamil-nadu',
    1
  ),
  (4256312, 'IN', 'Sikkim', NULL, 'sikkim', 1),
  (4258899, 'IN', 'Rajasthan', NULL, 'rajasthan', 1),
  (4259223, 'IN', 'Punjab', NULL, 'punjab', 1),
  (
    4259424,
    'IN',
    'Puducherry',
    NULL,
    'puducherry',
    1
  ),
  (4261029, 'IN', 'Odisha', NULL, 'odisha', 1),
  (4262271, 'IN', 'Nagaland', NULL, 'nagaland', 1),
  (4262963, 'IN', 'Mizoram', NULL, 'mizoram', 1),
  (4263207, 'IN', 'Meghalaya', NULL, 'meghalaya', 1),
  (4263706, 'IN', 'Manipur', NULL, 'manipur', 1),
  (
    4264418,
    'IN',
    'Maharashtra',
    NULL,
    'maharashtra',
    1
  ),
  (
    4264542,
    'IN',
    'Madhya Pradesh',
    NULL,
    'madhya-pradesh',
    1
  ),
  (
    4265206,
    'IN',
    'Laccadives',
    NULL,
    'laccadives',
    1
  ),
  (4267254, 'IN', 'Kerala', NULL, 'kerala', 1),
  (4267701, 'IN', 'Karnataka', NULL, 'karnataka', 1),
  (
    4269320,
    'IN',
    'Jammu and Kashmir',
    NULL,
    'jammu-and-kashmir',
    1
  ),
  (
    4270101,
    'IN',
    'Himachal Pradesh',
    NULL,
    'himachal-pradesh',
    1
  ),
  (4270260, 'IN', 'Haryana', NULL, 'haryana', 1),
  (4270770, 'IN', 'Gujarat', NULL, 'gujarat', 1),
  (4271157, 'IN', 'Goa', NULL, 'goa', 1),
  (4273293, 'IN', 'Delhi', NULL, 'delhi', 1),
  (
    4274744,
    'IN',
    'Chandigarh',
    NULL,
    'chandigarh',
    1
  ),
  (4275715, 'IN', 'Bihar', NULL, 'bihar', 1),
  (4278253, 'IN', 'Assam', NULL, 'assam', 1),
  (
    4278341,
    'IN',
    'Arunachal Pradesh',
    NULL,
    'arunachal-pradesh',
    1
  ),
  (
    4278629,
    'IN',
    'Andhra Pradesh',
    NULL,
    'andhra-pradesh',
    1
  ),
  (
    4278647,
    'IN',
    'Andaman and Nicobar',
    NULL,
    'andaman-and-nicobar',
    1
  ),
  (
    4444364,
    'IN',
    'Chhattisgarh',
    NULL,
    'chhattisgarh',
    1
  ),
  (4444365, 'IN', 'Jharkhand', NULL, 'jharkhand', 1),
  (
    4444366,
    'IN',
    'Uttarakhand',
    NULL,
    'uttarakhand',
    1
  ),
  (15096464, 'IN', 'Ladakh', NULL, 'ladakh', 1),
  (
    15165662,
    'IN',
    'Dadra and Nagar Haveli and Daman and Diu',
    NULL,
    'dadra-and-nagar-haveli-and-daman-and-diu',
    1
  );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
ADD PRIMARY KEY (`pk_i_id`),
  -- ADD KEY `fk_c_country_code` (`fk_c_country_code`),
  -- ADD KEY `idx_s_name` (`s_name`),
  -- ADD KEY `idx_s_slug` (`s_slug`);
  --
-- AUTO_INCREMENT for dumped tables
  --

  --
-- AUTO_INCREMENT for table `states`
  --
ALTER TABLE `states`
MODIFY `pk_i_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 15165663;
--
-- Constraints for dumped tablesjob_requests
--

--
-- Constraints for table `states`
--
-- ALTER TABLE `states`
-- ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`fk_c_country_code`) REFERENCES `cities` (`pk_c_code`);
-- COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;