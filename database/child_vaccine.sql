-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 11:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_info`
--

CREATE TABLE `child_info` (
  `child_id` int(100) NOT NULL,
  `parent_id` int(100) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_info`
--

INSERT INTO `child_info` (`child_id`, `parent_id`, `c_name`, `dob`, `gender`) VALUES
(1, 1, 'Sanjana', '2021-06-09', 'female'),
(2, 1, 'Kumar', '2022-06-15', 'male'),
(3, 2, 'kavya', '2002-05-16', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(20) NOT NULL,
  `hospital_id` int(100) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alternate_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `hospital_id`, `doctor_name`, `phone_no`, `email`, `specialization`, `password`, `alternate_no`) VALUES
(233, 1, '2', '4', 'san@gmail.com', 'pedetrician', '123', '123'),
(235, 78, 'goutami', '7890', 'ga@gmail.com', 'pedetrician', '90876', '678954'),
(236, 78, 'bhuvi', '7890', 'ga@gmail.com', 'pedetrician', '', '678954'),
(237, 0, 'chandana', '890', 'chandu@gmail.com', 'pedetrician', '12345687', '34567'),
(238, 0, 'manthana', '890', 'chandu@gmail.com', 'pedetrician', '', '34567'),
(239, 0, '89', '90764387987', 'rt@gmail.com', 'Embriologist', '809284', '3547152'),
(240, 0, '', '', '', '', '', ''),
(241, 0, '', '', '', '', '', ''),
(242, 0, '9oe8ui', '8327589327', 'fg@gmail.com', 'Embriologist', '9832094', '9238579832'),
(243, 0, 'fwsgf', '156276387', 'svdg@123', 'Embriologist', '125457', '12462138724'),
(244, 0, 'yamuna', '8648236873264', 'yamu@gmail.com', 'Embriologist', '89237985738', '827349826'),
(245, 0, 'yamuna', '8648236873264', 'yamu@gmail.com', 'Embriologist', '', '827349826'),
(246, 0, 'yamuna', '8648236873264', 'yamu@gmail.com', 'Embriologist', '', '827349826'),
(247, 0, 'sangamesha', '8732685732', 'sangu@gmail.com', 'Embriologist', '3ddc159a56cb46cf3bdfb8de972f3ef6', '89634876'),
(248, 0, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(249, 0, 'xxcd', '54678679', 'dsf@123', 'Embriologist', 'd14ff4f5685813813bbfe92429ac7519', '557898900'),
(250, 0, 'xxcd', '54678679', 'dsf@123', 'Embriologist', '60956df7b1ebe672b531ced3ccc3c407', '557898900'),
(251, 101, 'reema', '9945283764', 'san@gmail.com', 'Embriologist', '4297f44b13955235245b2497399d7a93', '8618974615'),
(252, 0, '', '', '', 'Embriologist', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(253, 0, '878', '', '', 'Embriologist', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(254, 0, 'ganga', '8867141568', 'ganga@gmail.com', 'Embriologist', 'd98d76e2b5ba72023414d98e75403e79', '7890564321'),
(255, 0, 'nagashree', '6789054321', 'nag@gmail.com', 'Embriologist', 'c6f057b86584942e415435ffb1fa93d4', '1234567891'),
(256, 0, 'nagabhushana', '8721638768', 'nag@gmail.com', 'Embriologist', '202cb962ac59075b964b07152d234b70', '4567890234'),
(257, 101, 'renukha', '5678903423', 'renu@gmail.com', 'Embriologist', '202cb962ac59075b964b07152d234b70', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `majorfacilities` varchar(100) NOT NULL,
  `emergency_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `address`, `phone_no`, `email`, `website`, `majorfacilities`, `emergency_no`) VALUES
(101, 'child vacci center', 'gh56  ', '8105267890', 'abhi@123.com', 'jdhj', 'Day_care_services', '7019972411'),
(108, 'dvs', 'you are', '88671415', 'wtefw@123', 'sdhgjfdnm', 'Day_care_services', '108'),
(113, 'sdm', 'ytrADTFHSAHG', '9479837124', 'GH@GMAIL.COM', 'ashfkjdsh', 'Clinical_laboratary', '984209375'),
(114, 'child vaccine center', 'dharwad jublie cirlce9283759836', '3094589283759', 'jublie@gmail.com', 'iyefiugesh', 'Day_care_services', '3947598347');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `type`) VALUES
(1, 'admin@gmail.com', '4297f44b13955235245b2497399d7a93', 'admin'),
(2, 'parents@gmail.com', '123123', 'parents'),
(7, 'chetan@gmail.com', '9886631616', 'parents'),
(8, 'bhagya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'parents'),
(9, 'bhumi@gmail.com', '8867141568', 'parents'),
(12, 'soujanya@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', 'parents'),
(13, 'ramesh@gmail.com', '4297f44b13955235245b2497399d7a93', 'parents'),
(14, 'bhaskar@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(100) NOT NULL,
  `hospital_id` int(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `hospital_id`, `parent_name`, `p_type`, `phone_no`, `email`) VALUES
(1, 101, 'Ramesh', 'Father', '9886631616', 'ramesh@gmail.com'),
(2, 101, 'Bhaskar Hegde', 'Father', '7259071594', 'bhaskar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(100) NOT NULL,
  `v_id` int(100) NOT NULL,
  `batch_no` int(100) NOT NULL,
  `dmfg` date NOT NULL,
  `dexp` date NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `v_id`, `batch_no`, `dmfg`, `dexp`, `amount`) VALUES
(2, 7, 67, '2022-12-21', '2022-12-16', 89),
(7, 67, 45, '2022-11-30', '2022-12-13', 545),
(10, 85, 34, '2022-11-29', '2022-12-06', 89),
(11, 85, 900, '2022-11-29', '2022-12-07', 90),
(14, 9, 89, '2022-12-06', '2022-11-29', 984),
(16, 14, 0, '0000-00-00', '0000-00-00', 80),
(17, 1, 0, '2023-01-09', '2023-01-10', 100);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_vaccine`
--

CREATE TABLE `request_for_vaccine` (
  `request_vaccine_id` int(100) NOT NULL,
  `vaccination_schedule_id` int(11) NOT NULL,
  `req_date` date NOT NULL,
  `req_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_for_vaccine`
--

INSERT INTO `request_for_vaccine` (`request_vaccine_id`, `vaccination_schedule_id`, `req_date`, `req_status`) VALUES
(1, 0, '2023-01-10', 'REQUEST'),
(2, 15, '2023-01-10', 'VACCINATED'),
(4, 17, '2023-01-11', 'VACCINATED');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_schedule`
--

CREATE TABLE `vaccination_schedule` (
  `vaccination_schedule_id` int(100) NOT NULL,
  `child_id` int(100) NOT NULL,
  `doctor_id` int(100) NOT NULL,
  `v_id` int(100) NOT NULL,
  `transaction` int(11) NOT NULL,
  `s_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination_schedule`
--

INSERT INTO `vaccination_schedule` (`vaccination_schedule_id`, `child_id`, `doctor_id`, `v_id`, `transaction`, `s_status`) VALUES
(7, 111, 112, 1123, 0, '2022-12-14'),
(9, 90, 90, 40, 0, '2023-01-02'),
(11, 78, 90, 56, 0, '2023-01-02'),
(12, 404, 235, 9, 0, '2023-01-01'),
(13, 404, 247, 11, 0, '2022-12-29'),
(14, 405, 237, 1, 1, 'PENDING'),
(15, 1, 235, 1, 1, 'VACCINATED'),
(16, 2, 246, 1, 1, 'VACCINATED'),
(17, 3, 236, 1, 1, 'VACCINATED');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_master`
--

CREATE TABLE `vaccine_master` (
  `v_id` int(100) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `duration_type` varchar(100) NOT NULL,
  `duration_of_vaccine` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_master`
--

INSERT INTO `vaccine_master` (`v_id`, `vname`, `duration_type`, `duration_of_vaccine`, `stock`, `image`, `description`) VALUES
(1, 'XYZ', 'Days', 365, 100, 'femele.jpg', 'abcd'),
(2, 'Covid', 'Days', 7600, 200, '', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_info`
--
ALTER TABLE `child_info`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `request_for_vaccine`
--
ALTER TABLE `request_for_vaccine`
  ADD PRIMARY KEY (`request_vaccine_id`);

--
-- Indexes for table `vaccination_schedule`
--
ALTER TABLE `vaccination_schedule`
  ADD PRIMARY KEY (`vaccination_schedule_id`);

--
-- Indexes for table `vaccine_master`
--
ALTER TABLE `vaccine_master`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_info`
--
ALTER TABLE `child_info`
  MODIFY `child_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request_for_vaccine`
--
ALTER TABLE `request_for_vaccine`
  MODIFY `request_vaccine_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccination_schedule`
--
ALTER TABLE `vaccination_schedule`
  MODIFY `vaccination_schedule_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vaccine_master`
--
ALTER TABLE `vaccine_master`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
