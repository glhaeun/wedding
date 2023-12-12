-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 12, 2023 at 12:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `link_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `link_image`) VALUES
(1, 'Bank Mandiri', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/640px-Bank_Mandiri_logo_2016.svg.png'),
(2, 'Bank Central Asia (BCA)', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/640px-Bank_Central_Asia.svg.png'),
(3, 'Bank Rakyat Indonesia (BRI)', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bank_BRI_2000.svg/640px-Bank_BRI_2000.svg.png'),
(4, 'Bank Negara Indonesia (BNI)', 'https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png'),
(5, 'Bank Tabungan Negara (BTN)', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Bank_BTN_logo.svg/640px-Bank_BTN_logo.svg.png'),
(6, 'Bank CIMB Niaga', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/CIMB_Niaga_logo.svg/640px-CIMB_Niaga_logo.svg.png'),
(7, 'Bank Danamon', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Bank_Danamon_2002.svg/640px-Bank_Danamon_2002.svg.png'),
(8, 'Bank OCBC NISP', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/OCBC_Bank_logo.png/640px-OCBC_Bank_logo.png'),
(9, 'Bank HSBC Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/HSBC_logo_%282018%29.svg/640px-HSBC_logo_%282018%29.svg.png'),
(10, 'Bank Maybank Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Logo-maybank.png/640px-Logo-maybank.png'),
(11, 'Bank Mega', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Bank_Mega_2013.svg/640px-Bank_Mega_2013.svg.png'),
(12, 'Bank Panin', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Logo_Panin_Bank.svg/640px-Logo_Panin_Bank.svg.png'),
(13, 'Bank Permata', 'https://upload.wikimedia.org/wikipedia/commons/8/85/Permata-removebg-preview.png'),
(14, 'Bank Bukopin', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/KB_Bukopin.svg/640px-KB_Bukopin.svg.png'),
(15, 'Bank Artha Graha', 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Bank_Artha_Graha_Internasional.png'),
(16, 'Bank Mega Syariah', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Logo_bank_mega_syariah_new.png/640px-Logo_bank_mega_syariah_new.png'),
(17, 'Bank Sinarmas', 'https://1.bp.blogspot.com/-2ck8itfEmZ8/VEICHZEu1QI/AAAAAAAAEmg/k4UyeMqs99A/s1600/logo-sinarmas-bank.png'),
(18, 'Bank DBS Indonesia', 'https://img.favpng.com/20/0/25/logo-dbs-bank-pt-bank-dbs-indonesia-brand-png-favpng-jH4BQ2dwGYKreNLqRAB8yaNXj.jpg'),
(22, 'Bank Maspion Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Bank_Maspion_logo.svg/640px-Bank_Maspion_logo.svg.png'),
(23, 'Bank QNB Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Qatar_National_Bank_Logo.svg/640px-Qatar_National_Bank_Logo.svg.png'),
(24, 'Bank Woori Saudara Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Bank_Woori_Saudara.png'),
(25, 'Bank BTPN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Logo_of_Bank_BTPN.svg/640px-Logo_of_Bank_BTPN.svg.png'),
(26, 'Bank Jatim', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Logo_Bank_Jatim.svg/2560px-Logo_Bank_Jatim.svg.png'),
(27, 'Bank BTPN Syariah', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Logo_Bank_BTPN_Syariah_2019.svg/2560px-Logo_Bank_BTPN_Syariah_2019.svg.png'),
(28, 'Bank Mestika Dharma', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Logo_Bank_Mestika_Dharma.svg/2560px-Logo_Bank_Mestika_Dharma.svg.png'),
(29, 'Bank Victoria Syariah', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Logo_Bank_Victoria_Syariah.svg/2560px-Logo_Bank_Victoria_Syariah.svg.png'),
(30, 'Bank Artos Indonesia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Logo_Bank_Artos_Indonesia.svg/2560px-Logo_Bank_Artos_Indonesia.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `bride`
--

CREATE TABLE `bride` (
  `bride` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `mom` varchar(100) NOT NULL,
  `dad` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `rekening` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bride`
--

INSERT INTO `bride` (`bride`, `number`, `mom`, `dad`, `bank`, `rekening`, `image`) VALUES
('Olivia Wonder', '0811111111', 'Elsa The Queen', 'James Bond', 'Bank Negara Indonesia (BNI)', 1230000, 'bride.png');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `holymatrimony_address` varchar(200) NOT NULL,
  `holymatrimony_map` varchar(500) NOT NULL,
  `holymatrimony_date` datetime NOT NULL,
  `reception_address` varchar(200) NOT NULL,
  `reception_date` datetime NOT NULL,
  `reception_map` varchar(500) NOT NULL,
  `couple_address` varchar(100) NOT NULL,
  `thankyou` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`image`, `date`, `location`, `holymatrimony_address`, `holymatrimony_map`, `holymatrimony_date`, `reception_address`, `reception_date`, `reception_map`, `couple_address`, `thankyou`) VALUES
('bridegroom.png', '2023-12-14 12:00:00', 'Wisma Benteng', 'Jl. ABC', 'https://www.google.com/mymaps/viewer?mid=1URcS4OvZX1s_ww0oBN8PAeWzb0Y&hl=en_US', '2023-12-14 12:00:00', 'Aryaduta Hotel Medan', '2023-12-14 18:00:00', 'https://www.google.com/mymaps/viewer?mid=1URcS4OvZX1s_ww0oBN8PAeWzb0Y&hl=en_US', 'Jl. Imam Bonjol No.6', 'Thank you for sharing in our joy and for the thoughtful wishes and blessings. Your support and love have filled our hearts and made our day complete.');

-- --------------------------------------------------------

--
-- Table structure for table `groom`
--

CREATE TABLE `groom` (
  `groom` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `mom` varchar(100) NOT NULL,
  `dad` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `rekening` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groom`
--

INSERT INTO `groom` (`groom`, `number`, `mom`, `dad`, `bank`, `rekening`, `image`) VALUES
('James Bond aa', '0812312312', 'Jane H. Bond', 'Oliver Bondaa', 'Bank Rakyat Indonesia (BRI)', 123456789, 'groom.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` datetime NOT NULL,
  `byUser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_rsvp`
--

CREATE TABLE `message_rsvp` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_rsvp`
--

INSERT INTO `message_rsvp` (`id`, `email`, `name`, `status`, `message`, `created_datetime`) VALUES
(87, 'elvinaxlim@gmail.com', 'Elvina', 'Attend', 'Congrats guys!', '2023-12-12 02:56:44'),
(88, 'haeunictsis@gmail.com', 'Grace Lee', 'Not Attend', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim libero id lorem tempor, ut lobortis nisi aliquet. Mauris consectetur urna sed odio pretium, vitae ullamcorper libero congue. Integer tincidunt commodo elit. Vivamus ultricies posuere odio, vitae bibendum ligula convallis at. Curabitur sit amet sapien ut justo faucibus luctus nec ut justo. Quisque ultricies est eget ipsum consequat, nec consequat nunc feugiat.', '2023-12-12 02:57:36'),
(89, 'jasontjoa2003@gmail.com', 'Jason Tjoa', 'Attend', 'Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!Congrats!', '2023-12-12 03:05:48'),
(90, 'irwantowijaya01@gmail.com', 'Irwanto', 'Attend', 'Congrats James!', '2023-12-12 03:17:45'),
(92, '03082210031@student.uph.edu', 'Elvina UPH', 'Attend', 'Yay! Glad for the both of you!', '2023-12-12 03:24:40'),
(93, 'zivenlouisuph@gmail.com', 'Ziven', 'Attend', 'Congrats yall!', '2023-12-12 03:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cardImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`id`, `name`, `image`, `cardImage`) VALUES
(13, 'Toyota Car', '65784143cd9c4.png', '65784143dbd90.png'),
(18, 'Plane', '65775ecf352c0.jpg', '65775ecf38f4b.jpg'),
(19, 'Harley Davidson', '65775eddc4d1a.jpg', '65775eddc6735.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `content` varchar(500) NOT NULL,
  `imageA` varchar(1000) NOT NULL,
  `imageB` varchar(1000) NOT NULL,
  `imageC` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `title`, `year`, `content`, `imageA`, `imageB`, `imageC`) VALUES
(1, 'First Meet', '2013', 'In August 2013, we met for the first time at Campus Orientation Period. During college we were just normal friends.', '6577607c8c00f.jpg', '6575b9d689ba7.jpeg', '6575b9d68a0c0.jpeg'),
(4, 'Relationship', '2018', 'On February 25, 2018 we tied the knot as lovers.', '6575ba6fda016.jpeg', '6575ba6fda523.jpeg', '6575ba6fdaa04.jpeg'),
(5, 'Engagement', '2021', 'We went through the ups and downs of our relationship together until we decided to get engaged on February 25 2021.', '6575bb0ae4061.jpeg', '6575bb0ae45a2.jpg', '6575bb0ae71a7.jpg'),
(7, 'Marrieddd', '2022', 'We decided to get married on June, 26 2023', '6575bb6d81ace.jpeg', '6575bb6d81fc6.jpeg', '6575bb6d82445.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `attend` varchar(100) NOT NULL DEFAULT 'unknown',
  `kode_13` int(11) DEFAULT NULL,
  `kode_18` int(11) DEFAULT NULL,
  `kode_19` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `attend`, `kode_13`, `kode_18`, `kode_19`) VALUES
(4, 'Jason', 'jasontjoa2003@gmail.com', 'Attend', 716125067, 362662655, 775375927),
(12, 'Ha Eun Lee', 'ejscassava@gmail.com', 'Attend', 264177258, 236750574, 681955346),
(14, 'Elvina Lim', 'elvinaxlim@gmail.com', 'Attend', 985547016, 228977895, 987673323),
(16, 'Grace Lee', 'haeunictsis@gmail.com', 'Not Attend', 708403181, 246564876, 704280575),
(18, 'Irwanto ', 'irwantowijaya01@gmail.com', 'Attend', 673878052, 845856252, 386792031),
(19, 'Elvina UPH', '03082210031@student.uph.edu', 'Attend', 903168536, 658970790, 630162926),
(20, 'Ziven', 'zivenlouisuph@gmail.com', 'Attend', 853354509, 115724325, 848046629),
(30, 'Ha eun lee', 'haeunnewemail@gmail.com', 'Unknown', 754890126, 228239955, 948939999);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `item`, `detail`) VALUES
(2, 'Hair Drier', 'Brand ga denger'),
(3, 'Microwave', 'Brand Philips'),
(4, 'Hair Dryer', 'Brand Name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_rsvp`
--
ALTER TABLE `message_rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_rsvp`
--
ALTER TABLE `message_rsvp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
