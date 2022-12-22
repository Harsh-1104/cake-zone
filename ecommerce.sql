-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 02:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(255) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productId`, `userId`, `quantity`) VALUES
('0', 'p101', 'abc123@gmail.com', 1),
('62836c1f5e66c', 'p103', 'abc123@gmail.com', 1),
('62836c69ca3ad', 'p106', 'abc123@gmail.com', 6),
('62836dacdd7d4', 'p113', 'hpgh048@gmail.com', 3),
('6283730185d0d', 'p101', 'hpgh048@gmail.com', 0),
('6283791f36329', 'p102', 'hpgh048@gmail.com', 2),
('62849e168de9a', 'p101', 'abc123@gmail.com', 3),
('62849e22b03e9', 'p105', 'abc123@gmail.com', 2),
('6284b9e8803a6', 'p101', 'abc123@gmail.com', 2),
('6284b9f65bdf5', 'p103', 'abc123@gmail.com', 3),
('6284ba10d284b', 'p101', 'abc123@gmail.com', 2),
('6284ba2318f69', 'p106', 'abc123@gmail.com', 4),
('6285328ba7d32', 'p101', 'abc123@gmail.com', 1),
('6285d1b07103e', 'p101', 'abc123@gmail.com', 3),
('6285d1bae0216', 'p105', 'abc123@gmail.com', 2),
('6285e5e8bdff9', 'p101', 'abc123@gmail.com', 2),
('6285e5fd5ea4a', 'p105', 'abc123@gmail.com', 1),
('6285e6375728e', 'p105', 'abc123@gmail.com', 3),
('6285e66fe5dd4', 'p103', 'abc123@gmail.com', 8),
('6285e80c376e0', 'p105', 'abc123@gmail.com', 4),
('6285e885c8fcc', 'p101', 'abc123@gmail.com', 3),
('6285e88f39638', 'p105', 'abc123@gmail.com', 4),
('62868e3c35d0e', 'p101', 'hpgh048@gmail.com', 3),
('62868e4a3bd08', 'p105', 'hpgh048@gmail.com', 5),
('62873ea3861ce', 'p101', 'hpgh048@gmail.com', 4),
('62873eabda186', 'p116', 'hpgh048@gmail.com', 5),
('62873eb1398cf', 'p105', 'hpgh048@gmail.com', 5),
('628770446746a', 'p103', 'hpgh048@gmail.com', 2),
('6288610de8332', 'p107', 'hpgh048@gmail.com', 4),
('6288611dc0c0f', 'prod628388db1f02e', 'hpgh048@gmail.com', 3),
('628937ebda113', 'p107', 'abc123@gmail.com', 4),
('628c76799586b', 'p105', 'abc123@gmail.com', 6),
('628c787f867a3', 'p101', 'abc123@gmail.com', 5),
('628c7a9949401', 'p101', 'abc123@gmail.com', 3),
('628c7b61ba3be', 'p101', 'abc123@gmail.com', 4),
('628cb16c2dddf', 'p105', 'abc123@gmail.com', 4),
('628cb173eca5d', 'p118', 'abc123@gmail.com', 5),
('628cb17d96984', 'p108', 'abc123@gmail.com', 15),
('628cb2af6ae91', 'p115', 'abc123@gmail.com', 5),
('628cd43de0e06', 'p101', 'abc123@gmail.com', 4),
('628d115299f83', 'p101', 'xyz@gmail.com', 2),
('628d11f132cab', 'p113', 'xyz@gmail.com', 2),
('628d18e875adf', 'p101', 'abc123@gmail.com', 3),
('628dffa89aedf', 'p101', 'abc123@gmail.com', 3),
('628f1796c23f7', 'p101', 'abc123@gmail.com', 3),
('628f21ffcdafa', 'p103', 'abc123@gmail.com', 3),
('6293170eedb7e', 'p101', 'abc123@gmail.com', 5),
('62931ebcc9834', 'p101', 'abc123@gmail.com', 4),
('62931ec5127ce', 'p102', 'abc123@gmail.com', 6),
('62931f96b722d', 'p101', 'abc123@gmail.com', 3),
('62932f594dec4', 'p101', 'abc123@gmail.com', 6),
('62932f5febcea', 'p104', 'abc123@gmail.com', 4),
('62b1a735e815d', 'p101', 'abc123@gmail.com', 4),
('62b1a73b943fd', 'p101', 'abc123@gmail.com', 4),
('62b1a73fd75f0', 'p104', 'abc123@gmail.com', 5),
('62b1a75d9ace5', 'p101', 'abc123@gmail.com', 5),
('62b2e70660e0d', 'p105', 'abc123@gmail.com', 6),
('62c7e93cee24f', 'p101', 'abc123@gmail.com', 7),
('62e905b31e70b', 'p113', 'abc123@gmail.com', 4),
('62e9060f4b666', 'p103', 'abc123@gmail.com', 3),
('62e90631dce98', 'p105', 'abc123@gmail.com', 4),
('62f622e03379c', 'p102', 'abc123@gmail.com', 1),
('62f741ee6c388', 'p101', 'xyz@gmail.com', 1),
('63073338975c3', 'p101', 'abc123@gmail.com', 4),
('630734206c3e1', 'p101', 'abc123@gmail.com', 1),
('630c82dc63575', 'p103', 'abc123@gmail.com', 4),
('638f3f282d9f9', 'p101', 'abc123@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`) VALUES
('c101', 'BIRTHDAY'),
('c102', 'WEDDING'),
('c103', 'CUSTOM'),
('c104', 'PARTY');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `userid`, `description`, `rating`, `createdAt`) VALUES
('f1', '101', 'It\'s nice service I am satisfied.', 5, '2022-04-20 12:34:14'),
('f2', '102', 'it\'s good', 4, '2022-04-20 14:59:17'),
('f3', '103', '', 6, '2022-04-21 04:46:28'),
('f6264c7587725b', '104', 'Chalo Gangubai Kathiyavadi Movie Jova😏🙂🤭', 5, '2022-04-24 03:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

CREATE TABLE `ordertb` (
  `id` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `categoryId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `isPaid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`id`, `products`, `categoryId`, `userId`, `createdAt`, `isPaid`) VALUES
('O628d09f', 'p103', 'c101', '62652fdd474d9', '2022-05-24 06:38:19', 1),
('O628d0a1', 'p105', 'c102', 'U628b505', '2022-05-24 06:38:50', 0),
('O628d0a4', '', '', '--- Choose User ---', '2022-05-24 06:47:31', 0),
('O628d0c3', '', 'c101', '--- Choose User ---', '2022-05-24 07:02:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(800) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` varchar(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `categoryId` varchar(255) DEFAULT NULL,
  `feedbackId` varchar(255) DEFAULT NULL,
  `isShown` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `images`, `price`, `discount`, `description`, `categoryId`, `feedbackId`, `isShown`, `createdAt`, `code`) VALUES
('p101', 'Birthday cake 1', 'IMG-6265171b430128.16566371.jpg', 500, '15', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'f101', 1, '2022-04-24 09:23:42', 'b101'),
('p102', 'Birthday cake 2', 'IMG-6262b8c0edd116.90430948.jpg', 700, '12', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'fwsws', 1, '2022-04-22 14:16:35', 'b102'),
('p103', 'Birthday cake 3', 'IMG-6262b8e89c5fa2.05736205.jpg', 1000, '25', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'f101', 0, '2022-04-22 14:17:15', 'b103'),
('p104', 'Birthday cake 4', 'IMG-6262b926579a96.07247847.jpg', 650, '13', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'fegrgbfv', 1, '2022-04-22 14:18:17', 'b104'),
('p105', 'Birthday cake 5', 'IMG-6262b959da75d9.82164035.jpg', 1500, '18', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'f101', 0, '2022-04-22 14:19:08', 'b105'),
('p106', 'Birthday cake 6', 'IMG-6262b99bbe3d77.73317071.jpg', 380, '8', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c101', 'fegrgbfv', 0, '2022-04-22 14:20:14', 'b106'),
('p107', 'Wedding cake 1', 'IMG-6262bebe712541.93516141.jpg', 2000, '20', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'f101', 1, '2022-04-22 14:42:09', 'w101'),
('p108', 'Wedding cake 2', 'IMG-6262bee19712f9.09591999.jpg', 2500, '25', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'fwsws', 1, '2022-04-22 14:42:44', 'w102'),
('p109', 'Wedding cake 3', 'IMG-6262bf203a21c9.91160048.jpg', 2100, '15', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'fegrgbfv', 1, '2022-04-22 14:43:47', 'w103'),
('p110', 'Wedding cake 4', 'IMG-6262bf43ebffa7.95571380.jpg', 700, '12', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'f101', 1, '2022-04-22 14:44:23', 'w104'),
('p111', 'Wedding cake 5', 'IMG-6262bf65d4b051.35920492.jpg', 840, '13', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'fwsws', 0, '2022-04-22 14:44:56', 'w105'),
('p112', 'Wedding cake 6', 'IMG-6262bf88cdfc46.36040176.jpg', 450, '7', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c102', 'fwsws', 0, '2022-04-22 14:45:31', 'w106'),
('p113', 'Custom cake 1', 'IMG-6262c04228b939.87453882.jpg', 560, '13', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'f101', 1, '2022-04-22 14:48:37', 'c101'),
('p114', 'Custom cake 2', 'IMG-6262c0663cc4a9.76630380.jpg', 490, '15', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'fwsws', 0, '2022-04-22 14:49:13', 'c102'),
('p115', 'Custom cake 3', 'IMG-6262c09f566002.82900185.jpg', 800, '20', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'fegrgbfv', 1, '2022-04-22 14:50:10', 'c103'),
('p116', 'Custom cake 4', 'IMG-6262c0c5160459.29924772.jpg', 950, '23', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'f101', 1, '2022-04-22 14:50:48', 'c104'),
('p117', 'Custom cake 5', 'IMG-6262c0f2867a26.94047064.jpg', 1200, '25', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'fwsws', 1, '2022-04-22 14:51:33', 'c105'),
('p118', 'Custom cake 6', 'IMG-6262c11ccefcd6.08661911.jpg', 2200, '20', 'Ipsum ipsum clita erat amet dolor sit justo sea eirmod diam stet sit justo', 'c103', 'fwsws', 1, '2022-04-22 14:52:15', 'c106'),
('prod6283', 'custom cake 7', '', 200, '10', 'bgy jjosc o onpinsck bgy jjosc o onpinsckv bgy onpinsck bgy jjosc o onpinsck                        ', '', '2', 1, '2022-05-17 17:06:59', 'c107'),
('prod628c', 'Birthday cake 7', '', 7000, '30', 'this cake is very costly so if you want to buy then buy bez i know you are rich                        ', '', '2', 1, '2022-05-24 17:28:17', 'b107');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `profession`, `description`, `image`) VALUES
('t1', 'sakshi', 'Hacker & backend dev\r\n', 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam', 'testimonial-1.jpg'),
('t2', 'dhruvi', 'manager', 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam', 'team-3.jpg'),
('t3', 'harsh', 'Frontend developer', 'kfcmde fldf,m mf,ms,mf slf,s fs;f, smfsl;f,swm fslkfcms fcksw cswkcfsnf csmfc slcfs,m cfs,csdlc, sdclf,s', 'team-2.jpg'),
('t4', 'poojan', 'IoT expert', 'bckdncf d,fvdl, cf,effdmflef def,defe fl,elfefkmef eflef e fkemfe f,ef', 'testimonial-2.jpg'),
('t5', 'vivek', 'Full stack developer', 'bde ekfekf elfed fkemn edkfde edlgvrfmgvmkvmr v frm, rdvgkldr,mv drs vg frvgkfr', 'testimonial-3.jpg'),
('t6', 'Jeshan', 'Developer', 'Full Stack Developer Here', 'team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `image`, `isAdmin`, `createdAt`) VALUES
('1', 'abc', 'abc123@gmail.com', 'abc123', '1234567890', 'testimonial-2.jpg', 1, '2022-04-20 13:39:10'),
('10', 'admin', 'admin123@gmail.com', 'admin@123', '9879879875', '1.jpg', 1, '2022-04-24 16:28:19'),
('3', 'def', 'defy2423@gmail.com', '159263', '8956247356', '1.jpg', 1, '2022-05-23 10:52:52'),
('4', 'xyz56', 'xyz34123@gmail.com', 'xyz@123', '906384672556', 'team-3.jpg', 1, '2022-04-20 13:43:45'),
('5', 'Jeshan Patel', 'pateljesu1510@gmail.com', '9516234875', '9979959353', '', 1, '2022-05-23 10:51:52'),
('6261762f7c802', 'sakshi', 'xyz@gmail.com', '12345', '(123) 456-7890)', NULL, 0, '2022-04-21 15:20:18'),
('6263e55e4c82f', 'vivek', 'viveklakhlani123@gmail.com', '12345', '+1 (683) 488-2167', 'team-1.jpg', 0, '2022-04-23 11:39:11'),
('6263f78fdb40e', 'Dhruvi', 'dhruvi@gmail.com', '12345', '9825377815', 'team-1.jpg', 0, '2022-04-23 12:56:47'),
('62652a1b23fad', 'sakshi', 'xyz@gmail.com', '123@sa', '8752369584', 'team-3.jpg', 0, '2022-05-23 10:52:10'),
('62652acc0a75d', 'Quynn Hatfield', 'tyzyguh@mailinator.com', 'Pa$$w0rd!', '+1 (575) 355-8245', NULL, 0, '2022-04-24 10:47:43'),
('62652fdd474d9', 'Sadie ', 'sink', 'harsh@1234', '9879879872', 'team-3.jpg', 0, '2022-04-24 11:09:14'),
('626538b5a0921', 'harsh', 'hpgh048@gmail.com', 'xyz@1234', '9999999999', '1.jpg', 0, '2022-04-24 11:46:58'),
('626e6e71c7000', 'vivek', 'vk123@gmail.com', '12345', '6353131872', 'team-1.jpg', 1, '2022-05-01 11:26:43'),
('626f6b42903e1', 'Poojan', 'pooju123@gmail.com', 'pooju123', '9854785962', 'team-1.jpg', 1, '2022-05-23 10:49:52'),
('626f7c22ce0d4', 'Jeshan', 'pateljesu1510@gmail.com', 'abc@123', '9999999999', '', 0, '0000-00-00 00:00:00'),
('U628', 'Elton Gray', 'hgdhg@gmail.com', '12345679', '9878545695', '', 1, '2022-05-23 11:11:33'),
('U628b505', 'Odysseus Boone', 'jozab@gmial.com', 'Pa$$w0rd!', '9589654852', '', 1, '2022-05-23 11:13:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertb`
--
ALTER TABLE `ordertb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
