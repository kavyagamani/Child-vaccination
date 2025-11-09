-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 04:30 PM
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
(2, 1, 'Kumar', '2022-06-15', 'male'),
(3, 2, 'kavya', '2002-05-16', 'female'),
(4, 5, 'Bhagya', '2022-05-13', 'female'),
(9, 11, 'Ansh', '2018-10-30', 'male'),
(10, 13, 'arya', '2023-01-04', 'male'),
(12, 15, 'dhanush', '2016-12-23', 'male'),
(13, 17, 'Ananya Bhat', '2023-12-12', 'female'),
(14, 17, 'Ramya Bhat', '2005-03-12', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(20) NOT NULL,
  `hospital_id` int(100) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `phone_no` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alternate_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `hospital_id`, `doctor_name`, `phone_no`, `email`, `specialization`, `password`, `alternate_no`) VALUES
(233, 1, '2', 4, 'san@gmail.com', 'pedetrician', '123', '123'),
(235, 78, 'goutami', 7890, 'ga@gmail.com', 'pedetrician', '90876', '678954'),
(236, 78, 'bhuvi', 7890, 'ga@gmail.com', 'pedetrician', '', '678954'),
(237, 0, 'chandana', 890, 'chandu@gmail.com', 'pedetrician', '12345687', '34567'),
(238, 0, 'manthana', 890, 'chandu@gmail.com', 'pedetrician', '', '34567'),
(239, 0, '89', 2147483647, 'rt@gmail.com', 'Embriologist', '809284', '3547152'),
(240, 0, '', 0, '', '', '', ''),
(241, 0, '', 0, '', '', '', ''),
(242, 0, '9oe8ui', 2147483647, 'fg@gmail.com', 'Embriologist', '9832094', '9238579832'),
(243, 0, 'fwsgf', 156276387, 'svdg@123', 'Embriologist', '125457', '12462138724'),
(244, 0, 'yamuna', 2147483647, 'yamu@gmail.com', 'Embriologist', '89237985738', '827349826'),
(245, 0, 'yamuna', 2147483647, 'yamu@gmail.com', 'Embriologist', '', '827349826'),
(246, 0, 'yamuna', 2147483647, 'yamu@gmail.com', 'Embriologist', '', '827349826'),
(247, 0, 'sangamesha', 2147483647, 'sangu@gmail.com', 'Embriologist', '3ddc159a56cb46cf3bdfb8de972f3ef6', '89634876'),
(248, 0, '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(249, 0, 'xxcd', 54678679, 'dsf@123', 'Embriologist', 'd14ff4f5685813813bbfe92429ac7519', '557898900'),
(250, 0, 'xxcd', 54678679, 'dsf@123', 'Embriologist', '60956df7b1ebe672b531ced3ccc3c407', '557898900'),
(251, 101, 'kavya', 2147483647, 'sanss@gmail.com', 'Embriologist', '4297f44b13955235245b2497399d7a93', '8618974615'),
(252, 0, '', 0, '', 'Embriologist', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(253, 0, '878', 0, '', 'Embriologist', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(254, 0, 'ganga', 2147483647, 'ganga@gmail.com', 'Embriologist', 'd98d76e2b5ba72023414d98e75403e79', '7890564321'),
(255, 0, 'nagashree', 2147483647, 'nag@gmail.com', 'Embriologist', 'c6f057b86584942e415435ffb1fa93d4', '1234567891'),
(256, 0, 'nagabhushana', 2147483647, 'nag@gmail.com', 'Embriologist', '202cb962ac59075b964b07152d234b70', '4567890234'),
(257, 101, 'renukha', 2147483647, 'renu@gmail.com', 'Embriologist', '202cb962ac59075b964b07152d234b70', '1234567890'),
(258, 114, 'Dr SOHANKUMAR MANAGUTTI', 2147483647, 'drsohanmanagutti@gmail.com', 'pedetrician', '2996962656838a97af4c5f926fe6f1b0', '7204583107');

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
(114, 'MANAGUTTI CLINIC', 'Y.S COLONY DHARWAD  ', '9888733303', 'drsohanmanagutti@gmail.com', 'www.managutticlinic.com', 'Day_care_services', '7204583107');

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
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'parents@gmail.com', '123123', 'parents'),
(7, 'chetan@gmail.com', '9886631616', 'parents'),
(8, 'bhagya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'parents'),
(9, 'bhumi@gmail.com', '8867141568', 'parents'),
(12, 'soujanya@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', 'parents'),
(13, 'ramesh@gmail.com', '4297f44b13955235245b2497399d7a93', 'parents'),
(14, 'bhaskar@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(15, 'dharani@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(16, '', 'd41d8cd98f00b204e9800998ecf8427e', 'parents'),
(17, 'maha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'parents'),
(18, 'ram@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(19, 'kavyabhegde859@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'parents'),
(20, '', 'd41d8cd98f00b204e9800998ecf8427e', 'parents'),
(21, 'ganapati@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(22, 'bharati@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(23, 'prashant@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(24, '', 'd41d8cd98f00b204e9800998ecf8427e', 'parents'),
(25, 'anvita@gmail.com', '7f1de29e6da19d22b51c68001e7e0e54', 'parents'),
(26, 'bharati@gmail.com', 'e82c4b19b8151ddc25d4d93baf7b908f', 'parents'),
(27, 'chandan@gmail.com', '912e79cd13c64069d91da65d62fbb78c', 'parents'),
(28, 'rytf@123', '202cb962ac59075b964b07152d234b70', 'parents'),
(29, 'himitr@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents'),
(30, 'vinodapatil28@gmail.com', '202cb962ac59075b964b07152d234b70', 'parents');

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
(1, 114, 'Ramesh', 'Father', '9886631616', 'ramesh@gmail.com'),
(2, 114, 'Bhaskar Hegde', 'Father', '7259071594', 'bhaskar@gmail.com'),
(3, 114, 'Dhrani hegde', 'Mother', '7259071594', 'dharani@gmail.com'),
(6, 0, 'Ramachandra Hegde', 'Father', '9945283764', 'ram@gmail.com'),
(7, 0, '', 'Select Parent Type', '', ''),
(8, 0, '', 'Select Parent Type', '', ''),
(9, 0, 'Ganapati Bhat', 'Father', '7676452820', 'ganapati@gmail.com'),
(10, 0, 'Bharati Hegde', 'Father', '8867141568', 'bharati@gmail.com'),
(11, 0, 'Prashant M.', 'Father', '9867546321', 'prashant@gmail.com'),
(13, 114, 'anvita', 'Mother', '7204583279', 'anvita@gmail.com'),
(14, 114, 'Bharati', 'Mother', '7204635299', 'bharati@gmail.com'),
(15, 114, 'Chandan', 'Mother', '9964151899', 'chandan@gmail.com'),
(16, 114, '', 'Select Parent Type', '56788900098698765', 'rytf@123'),
(17, 114, 'Narasimha Bhat', 'Father', '8867141568', 'himitr@gmail.com'),
(18, 114, 'Vinoda Patil', 'Mother', '7204583107', 'vinodapatil28@gmail.com');

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
(2, 25, 98, '2023-01-27', '2023-01-26', 90),
(7, 67, 45, '2022-11-30', '2022-12-13', 545),
(10, 85, 34, '2022-11-29', '2022-12-06', 89),
(11, 85, 900, '2022-11-29', '2022-12-07', 90),
(14, 9, 89, '2022-12-06', '2022-11-29', 984),
(16, 25, 1, '2023-01-25', '2023-08-27', 50),
(17, 1, 0, '2023-01-09', '2023-01-10', 100);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_vaccine`
--

CREATE TABLE `request_for_vaccine` (
  `request_vaccine_id` int(100) NOT NULL,
  `child_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `req_date` date NOT NULL,
  `req_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_for_vaccine`
--

INSERT INTO `request_for_vaccine` (`request_vaccine_id`, `child_id`, `v_id`, `req_date`, `req_status`) VALUES
(1, 4, 3, '2023-01-16', 'VACCINATED'),
(2, 4, 4, '2023-01-16', 'REQUEST'),
(3, 7, 15, '2023-01-19', 'VACCINATED'),
(4, 8, 7, '2023-01-20', 'REQUEST'),
(5, 4, 7, '2023-01-20', 'VACCINATED'),
(6, 9, 16, '2023-01-20', 'VACCINATED'),
(7, 9, 7, '2023-01-20', 'REQUEST'),
(8, 9, 8, '2023-01-20', 'REQUEST'),
(9, 9, 10, '2023-01-20', 'REQUEST'),
(10, 9, 11, '2023-01-20', 'REQUEST'),
(11, 4, 24, '2023-01-20', 'VACCINATED'),
(12, 13, 19, '2023-01-21', 'REQUEST');

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
(7, 'Typhoid Conjugate Vaccine', 'Days', 180, 1, '8vacc.jpg', '6-9 months'),
(8, 'MMR 1(mumps,measeles,rubella)', 'Days', 270, 1, '5vacc.jpg', '9 months'),
(10, 'Hepatatis A-1', 'Days', 360, 1, '7vacc.jpg', '12 months'),
(11, 'PCV Booster', 'Days', 300, 1, 'vacc12.jpg', '12-15months'),
(12, 'MMR 2,Varicella', 'Days', 450, 1, 'vaccine2.jpg', '15months'),
(13, 'DTwP/DTaP,Hib,IPV', 'Days', 480, 1, 'vaccine.jpg', '16-18months'),
(14, 'Hepatatis A-2**,Varicella 2', 'Day', 540, 1, '8vacc.jpg', '18-19 months'),
(15, 'DTwP/DTaP,IPV,MMR 3', 'Days', 1440, 1, 'vaccine.jpg', '4-6 years'),
(16, 'HPV(2 doses)', 'Days', 3240, 1, '9vacc.jpg', '9-15 years (girls)'),
(17, 'Tdap/Td', 'Days', 4000, 1, 'vaccine_baby.jpg', '10-12 years'),
(18, 'Annual Influenza Vaccine', 'Days', 720, 1, '4vacc.jpeg', '2nd,3rd,4th and 5th year'),
(19, 'BCG,HEP B1,OPV', 'Days', 1, 1, '5vacc.jpg', 'Birth'),
(21, 'DTwP/DTaP1,Hib-1,IPV-1,Hep B2,PCV1, Rota-2', 'Days', 42, 1, '7vacc.jpg', '6 weeks'),
(22, 'Influenza-1', 'Days', 180, 1, '4vacc.jpeg', '6 months'),
(23, 'Influenza-2', 'Days', 210, 1, 'vacc12.jpg', '7 months'),
(24, 'DTwP/DTaP1,Hib-2,IPV-2,Hep B3,PCV 2,Rota-2', 'Days', 70, 1, '7vacc.jpg', '10 weeks'),
(25, 'DTwP/DTap3,Hib-3,IPV-3,Hep B4,PCV 3,Rota-3*', 'Days', 98, 1, '7vacc.jpg', '14 weeks');

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
  MODIFY `child_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request_for_vaccine`
--
ALTER TABLE `request_for_vaccine`
  MODIFY `request_vaccine_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vaccination_schedule`
--
ALTER TABLE `vaccination_schedule`
  MODIFY `vaccination_schedule_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccine_master`
--
ALTER TABLE `vaccine_master`
  MODIFY `v_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
