-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2016 at 12:59 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 5.6.27-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SEFinalProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset_files`
--

CREATE TABLE `dataset_files` (
  `fileID` int(11) NOT NULL,
  `fileName` varchar(256) NOT NULL,
  `fileType` varchar(30) NOT NULL,
  `manifestID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `filePath` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manifest`
--

CREATE TABLE `manifest` (
  `manifest_id` int(11) NOT NULL,
  `version` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `last_edit` date DEFAULT NULL,
  `upload_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `ownerID` int(11) NOT NULL,
  `manifest_path` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `permission_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `salt`, `hash`, `last_name`, `first_name`, `email`, `permission_level`) VALUES
(1, '', '', 'John', 'Geoff', 'test@test.com', 0),
(9, '1427474531', '$2y$10$N.I06/3Ap6DvF7bxCXxQSOopS2kvl8cxDFGsDz5JiJpKd7Na8cJRC', '7', 'Geoff', 'admin@missouri.edu', 1),
(12, '425396003', '$2y$10$xtli87GqCb7B3jV8u7eAbujX1c5DsZ2hkpGPV8q7Hy.D72orXH2Ii', 'Guy', 'Geoff', 'joe.guy@gmail.com', 0),
(13, '1614514965', 'MEzV5IlDnA', 'Husser', 'Kevin', 'gahyvb@gmail.com', 1),
(14, '852835986', '$2y$10$D0/kJra3rTT9vzE2FgXNteB/fVZngrTBZbZ/.o0IzTF89cAEzK8kK', 'test5', 'Geoff', 'test5@test.com', 1),
(16, '294420376', '$2y$10$belUvwH4ofEW24fM91xXZuoXWM1DqttD57pgmZMN7cIOAGdQgdA6G', 'Welch', 'Jared', 'jared@test.com', 0),
(17, '908100759', '$2y$10$6wWLXfjWcnw2H3WFcuKwQOG8i2WWI6QPGZrBVkbuNeOfVQo0c.yJu', 'dolan', 'zach', 'zmd989@mail.missouri.edu', 0),
(20, '828631657', '$2y$10$OSpPDThGPfetBzQFhqiXFO7oiGa7koM0sLv7ERBOUjCyJMi021QTu', 'husser', 'geoff', '1@123.com', 0),
(23, '71666802', '$2y$10$FmdwFEjMOPk7dV9zQDV6ke9CIT6UQKcmG4dt/So00wHo28ZGqP/sy', '', '', 'testtest@test.com', 0),
(25, '1722840512', '$2y$10$2GRnlGSmifRmWXTwO1KVZuQzHpRMrs63s5aEDihuKgYOhRbVxIW6G', 'welch', 'jared', 'test1@test.com', 0),
(26, '779744794', '$2y$10$3oZ5yZ1qiBAajaeg4qP77O2vZj1MF4.au.hX8Vku9OgvISQXtvscG', 'Good', 'Andrew\'s', 'google@gmail.com', 0),
(27, '1540165561', '$2y$10$H4TVzVpuj/Gv62oyTt5V6eU3I62FOUuPWJvyf5sJlIIroSx/TwUjS', 'builder', 'bob', 'bobthebuilder@missouri.edu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset_files`
--
ALTER TABLE `dataset_files`
  ADD PRIMARY KEY (`fileID`),
  ADD KEY `manifestID` (`manifestID`);

--
-- Indexes for table `manifest`
--
ALTER TABLE `manifest`
  ADD PRIMARY KEY (`manifest_id`),
  ADD KEY `ownerID` (`ownerID`),
  ADD KEY `manifest_id` (`manifest_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset_files`
--
ALTER TABLE `dataset_files`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manifest`
--
ALTER TABLE `manifest`
  MODIFY `manifest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataset_files`
--
ALTER TABLE `dataset_files`
  ADD CONSTRAINT `manifest ID` FOREIGN KEY (`manifestID`) REFERENCES `manifest` (`manifest_id`);

--
-- Constraints for table `manifest`
--
ALTER TABLE `manifest`
  ADD CONSTRAINT `manifest_ibfk_1` FOREIGN KEY (`ownerID`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
