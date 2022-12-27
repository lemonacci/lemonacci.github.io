-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 06:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `message`) VALUES
(2, 1, 'makasih banyak nder'),
(6, 21, 'tengs kak'),
(70, 2, 'bgs bgt kak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `socmed_uname` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `submission` enum('love letter','fanfiction','fanart','story') DEFAULT NULL,
  `submission2` enum('love letter','fanfiction','fanart','story') DEFAULT NULL,
  `submission3` enum('love letter','fanfiction','fanart','story') DEFAULT NULL,
  `submission4` enum('love letter','fanfiction','fanart','story') DEFAULT NULL,
  `type` enum('participant','non participant') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `socmed_uname`, `country`, `submission`, `submission2`, `submission3`, `submission4`, `type`) VALUES
(1, 'eddy', '', 'taiwan', 'fanfiction', NULL, NULL, NULL, 'participant'),
(2, 'brett', '', 'australia', 'fanart', NULL, NULL, NULL, 'participant'),
(21, 'ollie', 'ollietwt', 'singapore', NULL, NULL, NULL, NULL, 'non participant'),
(22, 'Camilla', '', 'Argentina', 'story', NULL, NULL, NULL, 'participant'),
(23, 'Sabrina Saberhagen', '', 'Argentina', 'love letter', 'fanart', NULL, NULL, 'participant'),
(24, 'Annie', '', 'Australia', 'story', NULL, NULL, NULL, 'participant'),
(25, 'Nell', '', 'Australia ', 'fanart', NULL, NULL, NULL, 'participant'),
(26, 'Ajna/Aj', '', 'Bosnia and Herzegovina', 'story', NULL, NULL, NULL, 'participant'),
(27, 'Merima', '', 'Bosnia and Herzegovina', 'fanfiction', NULL, NULL, NULL, 'participant'),
(28, 'Rebequinhapalmeiras', '', 'Brazil', 'story', NULL, NULL, NULL, 'participant'),
(29, 'Nic', '', 'Bulgaria', 'story', NULL, NULL, NULL, 'participant'),
(30, 'A. Pono', '', 'Canada', 'love letter', NULL, NULL, NULL, 'participant'),
(31, 'Callie', '', 'Canada', 'story', NULL, NULL, NULL, 'participant'),
(32, 'Charlotte', '', 'Canada', 'fanart', NULL, NULL, NULL, 'participant'),
(33, 'Kai', '', 'Canada', 'story', NULL, NULL, NULL, 'participant'),
(34, 'Reese', '', 'Canada', 'story', 'love letter', 'fanfiction', NULL, 'participant'),
(35, 'Snow', '', 'Canada', 'story', 'love letter', 'fanfiction', 'fanart', 'participant'),
(36, 'Franxu', '', 'Chile', 'love letter', 'fanart', NULL, NULL, 'participant'),
(37, 'Audre', '', 'China', 'love letter', NULL, NULL, NULL, 'participant'),
(38, 'PTP-TNT', '', 'China', 'fanfiction', NULL, NULL, NULL, 'participant'),
(39, 'Rosy', '', 'China', 'story', NULL, NULL, NULL, 'participant'),
(40, 'Daniela', '', 'Colombia', 'fanart', NULL, NULL, NULL, 'participant'),
(41, 'Tata', '', 'Colombia', 'fanfiction', 'fanart', NULL, NULL, 'participant'),
(42, 'Mime', '', 'Costa Rica ', 'story', 'love letter', NULL, NULL, 'participant'),
(43, 'Kate', '', 'Estonia', 'story', NULL, NULL, NULL, 'participant'),
(44, 'Lune', '', 'France', 'story', 'love letter', NULL, NULL, 'participant'),
(45, 'Lene', '', 'Germany', 'story', NULL, NULL, NULL, 'participant'),
(46, 'Liam', '', 'Germany', 'story', NULL, NULL, NULL, 'participant'),
(47, 'Nafsika ', '', 'Greece', 'fanart', NULL, NULL, NULL, 'participant'),
(48, 'Natalia', '', 'Guam', 'story', NULL, NULL, NULL, 'participant'),
(49, 'Clarie', '', 'Hong Kong/Canada', 'love letter', NULL, NULL, NULL, 'participant'),
(50, 'Ella', '', 'Hong Kong', 'story', 'fanart', NULL, NULL, 'participant'),
(51, 'Leafy', '', 'India', 'story', 'fanart', NULL, NULL, 'participant'),
(52, 'Mrinalini B.', '', 'India', 'story', NULL, NULL, NULL, 'participant'),
(53, 'Rho', '', 'India', 'fanart', NULL, NULL, NULL, 'participant'),
(54, 'Saltyasblood', '', 'India', 'story', NULL, NULL, NULL, 'participant'),
(55, 'Adel', '', 'Indonesia', 'love letter', NULL, NULL, NULL, 'participant'),
(56, 'Andrea', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(57, 'Choco', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(58, 'Chocominthy', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(59, 'Fishu', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(60, 'Florette', '', 'Indonesia', 'love letter', NULL, NULL, NULL, 'participant'),
(61, 'Gabriella', '', 'Indonesia', 'story', 'fanart', NULL, NULL, 'participant'),
(62, 'Giovano', '', 'Indonesia', 'fanfiction', NULL, NULL, NULL, 'participant'),
(63, 'HusnaYuuri14', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(64, 'Joan', '', 'Indonesia', 'story', NULL, NULL, NULL, 'participant'),
(65, 'Karunia', '', 'Indonesia', 'story', NULL, NULL, NULL, 'participant'),
(66, 'Key', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(67, 'Lynn', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(68, 'Mariz Wilda', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(69, 'Moch', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(70, 'Nabila', '', 'Indonesia', 'story', 'fanfiction', NULL, NULL, 'participant'),
(71, 'Ri', '', 'Indonesia', 'story', 'fanart', NULL, NULL, 'participant'),
(72, 'Sav', '', 'Indonesia', 'story', 'fanart', NULL, NULL, 'participant'),
(73, 'Schery', '', 'Indonesia', 'story', 'love letter', 'fanart', NULL, 'participant'),
(74, 'Shaf', '', 'Indonesia', 'story', 'love letter', NULL, NULL, 'participant'),
(75, 'Shin', '', 'Indonesia', 'love letter', NULL, NULL, NULL, 'participant'),
(76, 'Thariq', '', 'Indonesia', 'story', NULL, NULL, NULL, 'participant'),
(77, 'Tiara', '', 'Indonesia', 'fanart', NULL, NULL, NULL, 'participant'),
(78, 'Vin', '', 'Indonesia ', 'fanart', NULL, NULL, NULL, 'participant'),
(79, 'Ninta', '', 'Indonesia/South Korea', 'love letter', NULL, NULL, NULL, 'participant'),
(80, 'Rita', '', 'Lebanon', 'story', 'fanart', NULL, NULL, 'participant'),
(81, 'AK', '', 'Malaysia', 'fanart', NULL, NULL, NULL, 'participant'),
(82, 'Anna Adriana.', '', 'Malaysia', 'story', NULL, NULL, NULL, 'participant'),
(83, 'Ainul', '', 'Malaysia', 'story', NULL, NULL, NULL, 'participant'),
(84, 'Cornflaek', '', 'Malaysia ', 'fanart', NULL, NULL, NULL, 'participant'),
(85, 'Summer', '', 'Malaysia', 'love letter', 'fanfiction', NULL, NULL, 'participant'),
(86, 'Alice', '', 'Paraguay', 'story', NULL, NULL, NULL, 'participant'),
(87, 'Anica', '', 'Philippines', 'story', 'love letter', NULL, NULL, 'participant'),
(88, 'brettosis', '', 'Philippines', 'story', 'love letter', 'fanart', NULL, 'participant'),
(89, 'Cas', '', 'philippines', 'love letter', NULL, NULL, NULL, 'participant'),
(90, 'Chaerim', '', 'Philippines', 'story', 'fanart', NULL, NULL, 'participant'),
(91, 'Charm', '', 'Philippines', 'story', NULL, NULL, NULL, 'participant'),
(92, 'Cyrisiryc', '', 'Philippines', 'story', NULL, NULL, NULL, 'participant'),
(93, 'D0ubleD0ts', '', 'Philippines', 'love letter', NULL, NULL, NULL, 'participant'),
(94, 'El', '', 'Philippines', 'fanart', NULL, NULL, NULL, 'participant'),
(95, 'Eunice', '', 'Philippines', 'story', NULL, NULL, NULL, 'participant'),
(96, 'Expired_rosin', '', 'Philippines', 'fanart', NULL, NULL, NULL, 'participant'),
(97, 'Jam', '', 'Philippines', 'story', 'love letter', NULL, NULL, 'participant'),
(98, 'Killu', '', 'Philippines', 'fanart', NULL, NULL, NULL, 'participant'),
(99, 'Ligaya', '', 'Philippines', 'love letter', NULL, NULL, NULL, 'participant'),
(100, 'Merri', '', 'Philippines', 'love letter', NULL, NULL, NULL, 'participant'),
(101, 'Rei ', '', 'Philippines', 'fanfiction', NULL, NULL, NULL, 'participant'),
(102, 'Rory', '', 'Philippines', 'story', 'fanart', NULL, NULL, 'participant'),
(103, 'Rosie', '', 'Philippines ', 'story', 'fanfiction', NULL, NULL, 'participant'),
(104, 'Scout', '', 'Philippines ', 'love letter', 'fanart', NULL, NULL, 'participant'),
(105, 'Trix', '', 'Philippines ', 'story', NULL, NULL, NULL, 'participant'),
(106, 'Vegetable12020', '', 'Philippines ', 'story', NULL, NULL, NULL, 'participant'),
(107, 'Yang, Hoi Teng \"Eunice\" C. ', '', 'Philippines ', 'story', NULL, NULL, NULL, 'participant'),
(108, 'Esmeralda Rivera', '', 'Puerto Rico', 'love letter', NULL, NULL, NULL, 'participant'),
(109, 'Valentin', '', 'Russia', 'story', NULL, NULL, NULL, 'participant'),
(110, 'Claire ', '', 'Singapore', 'story', NULL, NULL, NULL, 'participant'),
(111, 'Evyr', '', 'Singapore', 'story', 'fanfiction', NULL, NULL, 'participant'),
(112, 'Hawa Najihah', '', 'Singapore', 'fanart', NULL, NULL, NULL, 'participant'),
(113, 'Jasmine', '', 'Singapore', 'story', NULL, NULL, NULL, 'participant'),
(114, 'Lula', '', 'singapore', 'story', NULL, NULL, NULL, 'participant'),
(115, 'Luna', '', 'Singapore', 'story', NULL, NULL, NULL, 'participant'),
(116, 'Naomi', '', 'Singapore ', 'story', 'love letter', NULL, NULL, 'participant'),
(117, 'Spring', '', 'Singapore ', 'love letter', NULL, NULL, NULL, 'participant'),
(118, 'Val', '', 'Singapore', 'story', 'fanart', NULL, NULL, 'participant'),
(119, 'Claire ', '', 'Slovakia', 'story', NULL, NULL, NULL, 'participant'),
(120, 'RedCAT', '', 'South Korea / NZ', 'fanart', NULL, NULL, NULL, 'participant'),
(121, 'Aleph', '', 'Spain/Germany', 'story', NULL, NULL, NULL, 'participant'),
(122, 'MW', '', 'Taiwan', 'story', 'fanart', NULL, NULL, 'participant'),
(123, 'Sonata', '', 'Taiwan', 'fanfiction', 'fanart', NULL, NULL, 'participant'),
(124, 'Aerialus', '', 'Thailand', 'love letter', NULL, NULL, NULL, 'participant'),
(125, 'Buffysplanet', '', 'Thailand', 'story', 'love letter', NULL, NULL, 'participant'),
(126, 'HydrenIsHAYDN', '', 'Thailand', 'fanfiction', 'fanart', NULL, NULL, 'participant'),
(127, 'Matt', '', 'Thailand', 'love letter', NULL, NULL, NULL, 'participant'),
(128, 'Pepparan', '', 'Thailand', 'fanart', NULL, NULL, NULL, 'participant'),
(129, 'Tina', '', 'Thailand', 'story', NULL, NULL, NULL, 'participant'),
(130, 'Iris', '', 'The Netherlands', 'story', NULL, NULL, NULL, 'participant'),
(131, 'Kayla', '', 'the Netherlands', 'story', NULL, NULL, NULL, 'participant'),
(132, 'Rebecca', '', 'the Netherlands.', 'story', NULL, NULL, NULL, 'participant'),
(133, 'Seno', '', 'Turkey', 'love letter', NULL, NULL, NULL, 'participant'),
(134, 'Jihanabelle', '', 'UK', 'story', NULL, NULL, NULL, 'participant'),
(135, 'Sarah', '', 'UK', 'story', 'fanfiction', NULL, NULL, 'participant'),
(136, 'Satie', '', 'UK', 'story', 'love letter', NULL, NULL, 'participant'),
(137, 'Aiyanna', '', 'USA', 'story', NULL, NULL, NULL, 'participant'),
(138, 'Amanda Sherry', '', 'USA', 'story', 'fanart', NULL, NULL, 'participant'),
(139, 'Emi', '', 'USA', 'fanfiction', NULL, NULL, NULL, 'participant'),
(140, 'Ferrum', '', 'USA', 'fanart', NULL, NULL, NULL, 'participant'),
(141, 'Herlinda', '', 'USA', 'love letter', NULL, NULL, NULL, 'participant'),
(142, 'Jen', '', 'USA', 'story', NULL, NULL, NULL, 'participant'),
(143, 'Jess', '', 'USA', 'fanfiction', NULL, NULL, NULL, 'participant'),
(144, 'Jessica', '', 'USA', 'story', NULL, NULL, NULL, 'participant'),
(145, 'Wednesday', '', 'USA', 'story', NULL, NULL, NULL, 'participant'),
(146, 'Mai', '', 'Vietnam', 'love letter', NULL, NULL, NULL, 'participant'),
(147, 'Mub', '', 'Vietnam', 'fanart', NULL, NULL, NULL, 'participant'),
(148, 'Soda', '', 'Vietnam', 'fanfiction', NULL, NULL, NULL, 'participant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
