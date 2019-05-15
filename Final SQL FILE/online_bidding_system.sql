-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 11:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bidding_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(12) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(22) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `first_name`, `last_name`, `address`, `contact_no`, `email`, `password`) VALUES
(2, 'rajan', 'silwal', 'bypass', '9841212101', 'hamro@gmail.com', 'fc1c741c76e33bebeab70c87a97ff975'),
(3, 'sushi', 'dhakal', 'bhaktapur', '9841212359', 'bijenduwal@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auctions_post`
--

CREATE TABLE `auctions_post` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `bid_end_date` date NOT NULL,
  `post_location` varchar(30) NOT NULL,
  `post_image` text NOT NULL,
  `post_tags` int(12) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `virtual_tour_link` varchar(255) NOT NULL,
  `threshold_bid` int(20) NOT NULL,
  `post_status` varchar(15) NOT NULL,
  `post_approve_unapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auctions_post`
--

INSERT INTO `auctions_post` (`post_id`, `post_title`, `post_date`, `bid_end_date`, `post_location`, `post_image`, `post_tags`, `post_content`, `video_link`, `map_link`, `virtual_tour_link`, `threshold_bid`, `post_status`, `post_approve_unapp`) VALUES
(56, 'House on sale', '2018-12-03', '2018-12-31', '3.50 AAna - Kapan, Bekha, 10, ', 'house_1484972505.jpeg', 1, ' 2&1/2 storied house on sale at Kapan, Bekha, Budhanilkantha Nagarpalika-10, Kathmandu. This house is located near Siddheshwar Shiva Temple. This west facing house covers the total land area of 3 aana 2 paisa and was built with 9/9 pillar system. ', '', '', '', 1000000, 'On Bid', 'approve'),
(57, 'House on sale 3 stored', '2018-12-04', '2019-01-31', '4.50 AAna - Bhangal, 08, Budha', '17921601.jpeg', 1, '2&1/2 storied house on sale at Bhangal, Budhanilkantha Nagarpalika-8, Kathmandu. This house is located just behind Paper Factory in Bhangal. This north facing house covers the total land area of 4 aana 2 paisa and was built in year of 2074 B.S. Thus this ', '', '', '', 19300000, 'On Bid', 'approve'),
(58, 'Mansion House on sale', '2018-12-02', '2019-02-14', '5.20 AAna - Sukedhara, 04, Kat', '1481779778.jpeg', 1, '&1/2 storied house on sale at Sukedhara, kathmandu Mahanagarpalika-4. This house is located at 100 meter north from Gopi Krishna Cinema Hall and 50 meter far from Upabhokta Samiti. This north west facing house covers the total land area of 5 aana 2 paisa ', '', '', '', 37400000, 'On Bid', 'approve'),
(59, 'Hotel On sale', '2018-12-03', '2019-04-30', '6 AAna - Boudhadwar, Kathmandu', 'banner_mayamanor.jpeg', 2, '9 storied modern hotel with infinity pool on sale at Boudhadwar Marga, Kathmandu. This house lies opposite of Samata Hospital. This house covers the total land area of 3 aana. The road access of this house: 1.9 ft.All the basic facilities such as electric', '', '', '', 20000000, 'On Bid', 'approve'),
(60, 'House on sale for small family', '2018-12-01', '2019-01-31', '3 AAna - Lolang, 10, Tarkeshwo', '95415954.jpeg', 1, '4/5 storied house on sale at Lolang, Jana jagriti Tole, Tarkeshwor Nagarpalika-10, Kathmandu. This house is located 2 k.m. east from Bypass Chowk and 1 k.m from Guheshwori Mandir. This north west facing house covers total land area of 3 aana which was bui', '', '', '', 23500000, 'On Bid', 'approve'),
(61, 'apartment on sale', '2018-12-03', '2019-01-30', '1 AAna - Lolang, 10, Tarkeshwo', 'modern-house3-440x330.jpeg', 2, ' 4/3 storied house apartment on sale at Lolang, Jana jagriti Tole, Tarkeshwor Nagarpalika-10, Kathmandu. This house is located 2 k.m. east from Bypass Chowk and 1 k.m from Guheshwori Mandir. This north west facing house covers total land area of 3 aana wh', '', '', '', 7500000, 'On Bid', 'approve'),
(62, 'House on sale near thamel', '2018-12-03', '2019-03-30', '6.56 AAna - Lainchaur, Kathman', 'img_IMG_1987.JPG', 1, 'and and house on sale at Lainchaur, Kathmandu-26. 6 aana 2 paisa 1 daam land on sale Lainchaur, Kathmandu-26. This land also contain 2.5 storied house built with wall system( Chinese Itta). This south-east faced lies in VIP area and is suitable for both r', '', '', '', 42500000, 'On Bid', 'approve'),
(63, 'House on sale at tokha', '2018-12-02', '2019-01-31', '98.38 sq mi - Dhalamala, 01, T', '', 1, '2 and 1/2 storied house on sale at Dhalamala , Tokha Nagarpalika-01, Kathmandu. This house is located 2.5 km north from Chakrapath Gongabu and near to Dhalamala Chowk. This south faced house is built in 98.38 sq.m with 12/12 pillar system in 2073. This ho', '', '', '', 14500000, 'On Bid', 'unapprove'),
(64, 'House at thimi', '2018-12-02', '2018-12-31', '4.63 AAna - Madyapur Thimi Nag', 'thimi_IMG_9696.JPG', 1, '3 and 1/2 storied house on sale at Jatigal, Madyapur Thimi Nagarpalika-02 , Bhaktapur. This house is located near to 2 no. Worda Karyalaya and 50 meter east from Matribhumi School. This South-west faced house is built in 4 aana 2 paisa 2 daam area of land', '', '', '', 28000000, 'On Bid', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `bider_login`
--

CREATE TABLE `bider_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(22) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bider_login`
--

INSERT INTO `bider_login` (`id`, `first_name`, `last_name`, `address`, `contact_no`, `email`, `password`) VALUES
(1, 'bijen', 'duwal', 'samakushi', '984127230', 'bijenzz@gmail.com', '123456789'),
(2, 'sushil', 'dhakal', 'ghathaghar', '2147483647', 'sushil@gmail.com', 'sushil'),
(3, 'rajan', 'silwal', 'bypass buspark new', '9841789523', 'sushilrajan101@gmail.com', 'd983f520da019f9533c67bab724438fe');

-- --------------------------------------------------------

--
-- Table structure for table `bid_info`
--

CREATE TABLE `bid_info` (
  `bid_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bid_amount` float NOT NULL,
  `bid_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bid_moniter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_info`
--

INSERT INTO `bid_info` (`bid_id`, `email`, `bid_amount`, `bid_date`, `bid_moniter`) VALUES
(27, 'bijenzz@gmail.com', 52500000, '2018-12-03 09:57:08', 62),
(28, 'bijenzz@gmail.com', 8500000, '2018-12-03 10:03:58', 61);

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `interest_area` varchar(255) NOT NULL,
  `message` varchar(80) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `name`, `email`, `contact_no`, `interest_area`, `message`, `date`) VALUES
(12, 'rajan', 'rajansilwal@gmail.com', '9841252536', 'lainchour,kathmandu', 'send me post about lainchour,kathmandu', '2018-12-03 08:31:02'),
(13, 'bijen', 'bijen857@gmail.com', '9841252536', 'banashor,kathmandu', 'send me post about banashor,kathmandu', '2018-12-03 08:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `house_category` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_category`) VALUES
(2, 'COMMERICIAL'),
(1, 'RESIDENTIAL');

-- --------------------------------------------------------

--
-- Table structure for table `owner_login`
--

CREATE TABLE `owner_login` (
  `id` int(12) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_login`
--

INSERT INTO `owner_login` (`id`, `first_name`, `last_name`, `address`, `contact_no`, `email`, `password`) VALUES
(1, 'bzen', 'duwal', 'ranibari', '9843931919', 'bijen857@gmail.com', 'password12'),
(4, 'sushil', 'dhakal', 'gathagar', '9843931918', 'sushilgg@gmail.com', 'sushildhakal'),
(5, 'rajan', 'silwal', 'bypass buspark new', '9841212102', 'silwalrajan@gmail.com', 'qwertyuiop'),
(6, 'rajan', 'silwal', 'bypass buspark new', '9841212102', 'sushilrajan11@gmail.co', 'poiuytrewq');

-- --------------------------------------------------------

--
-- Table structure for table `post_garna_user`
--

CREATE TABLE `post_garna_user` (
  `post_user_id` int(12) NOT NULL,
  `post_user_email` varchar(255) NOT NULL,
  `post_moniter` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_garna_user`
--

INSERT INTO `post_garna_user` (`post_user_id`, `post_user_email`, `post_moniter`) VALUES
(12, 'bijenduwal@gmail.com', 56),
(13, 'bijenduwal@gmail.com', 57),
(14, 'bijenduwal@gmail.com', 58),
(15, 'bijenduwal@gmail.com', 59),
(16, 'bijenduwal@gmail.com', 60),
(17, 'sushilgg@gmail.com', 61),
(18, 'sushilgg@gmail.com', 62),
(19, 'sushilgg@gmail.com', 63),
(20, 'sushilgg@gmail.com', 64);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(1, 'bijen857@gmail.com', '2018-11-17 07:02:07'),
(2, 'bijen857@outlook.com', '2018-11-17 07:02:21'),
(3, 'meroaa@gmail.com', '2018-11-17 07:25:21'),
(4, 'bijennn@gmail.com', '2018-11-20 11:52:27'),
(5, 'sushil@gmail.com', '2018-11-21 03:15:22'),
(6, 'bijen@outlook.com', '2018-11-21 03:17:21'),
(7, 'biojbwe@gmail.com', '2018-11-21 08:41:52'),
(8, 'mero@gmail.com', '2018-11-21 09:06:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctions_post`
--
ALTER TABLE `auctions_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `post_tags` (`post_tags`),
  ADD KEY `post_tags_2` (`post_tags`),
  ADD KEY `post_tags_3` (`post_tags`);

--
-- Indexes for table `bider_login`
--
ALTER TABLE `bider_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_info`
--
ALTER TABLE `bid_info`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `bid_moniter` (`bid_moniter`),
  ADD KEY `bid_moniter_2` (`bid_moniter`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `house_category` (`house_category`);

--
-- Indexes for table `owner_login`
--
ALTER TABLE `owner_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_garna_user`
--
ALTER TABLE `post_garna_user`
  ADD PRIMARY KEY (`post_user_id`),
  ADD KEY `post_moniter` (`post_moniter`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auctions_post`
--
ALTER TABLE `auctions_post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `bider_login`
--
ALTER TABLE `bider_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bid_info`
--
ALTER TABLE `bid_info`
  MODIFY `bid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner_login`
--
ALTER TABLE `owner_login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_garna_user`
--
ALTER TABLE `post_garna_user`
  MODIFY `post_user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctions_post`
--
ALTER TABLE `auctions_post`
  ADD CONSTRAINT `auctions_post_ibfk_1` FOREIGN KEY (`post_tags`) REFERENCES `house` (`house_id`);

--
-- Constraints for table `bid_info`
--
ALTER TABLE `bid_info`
  ADD CONSTRAINT `bid_info_ibfk_1` FOREIGN KEY (`bid_moniter`) REFERENCES `auctions_post` (`post_id`);

--
-- Constraints for table `post_garna_user`
--
ALTER TABLE `post_garna_user`
  ADD CONSTRAINT `post_garna_user_ibfk_1` FOREIGN KEY (`post_moniter`) REFERENCES `auctions_post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
