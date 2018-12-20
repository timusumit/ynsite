-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 04:12 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tucir`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_appointment`
--

CREATE TABLE `add_appointment` (
  `app_id` int(50) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `app_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_appointment`
--

INSERT INTO `add_appointment` (`app_id`, `firstname`, `email`, `date`, `phone`, `app_status`) VALUES
(1, 'Sumit', 'yupnep977@gmail.com', '11/25/2018', 9876543210, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `contact_about`
--

CREATE TABLE `contact_about` (
  `cont_id` int(50) NOT NULL,
  `map_plugin` blob NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_about`
--

INSERT INTO `contact_about` (`cont_id`, `map_plugin`, `address`, `email`, `phone`) VALUES
(1, 0x3c696672616d65207372633d2268747470733a2f2f7777772e676f6f676c652e636f6d2f6d6170732f656d6265643f70623d21316d313821316d313221316d33213164333533332e32323136363532303433313921326438352e323739393633373134353337363921336432372e363739353433303333333231333321326d3321316630213266302133663021336d322131693130323421326937363821346631332e3121336d3321316d322131733078333965623139623933663632636336622533413078633736636234383937363962623337322132734d6173746572262333393b732b496e2b496e7465726e6174696f6e616c2b52656c6174696f6e732b616e642b4469706c6f6d6163792532432b54726962687576616e2b556e69766572736974792135653021336d32213173656e2132736e7021347631353433393335323739383330222077696474683d2235343022206865696768743d2233303022206672616d65626f726465723d223022207374796c653d22626f726465723a302220616c6c6f7766756c6c73637265656e3e3c2f696672616d653e, 'Kirtipur, Kathmandu, Nepal', 'info@tucir.edu.np', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `create_page`
--

CREATE TABLE `create_page` (
  `page_id` int(50) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_content` blob,
  `page_image_name` varchar(255) DEFAULT NULL,
  `page_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_page`
--

INSERT INTO `create_page` (`page_id`, `page_title`, `page_content`, `page_image_name`, `page_image_url`, `slug`) VALUES
(1, 'About Kantipur Pest Control', 0x3c703e4b616e7469707572205065737420436f6e74726f6c207761732065737461626c697368656420696e203230313820616e6420686173206265636f6d65206f6e65206f6620746865206c656164696e67205065737420436f6e74726f6c20436f6d70616e69657320696e204e6570616c2e3c2f703e0d0a0d0a3c703e266e6273703b556e6865616c746879206265686176696f7273206372656174652074686520696465616c206861626974617420666f7220506573747320746f2074687269766520696e2c207768696368206d65616e7320506573742050726f626c656d732063616e20676574206f7574206f6620636f6e74726f6c207665727920717569636b6c792e2057652077696c6c206964656e7469667920796f757220706573742074687265617420616e6420616e79207269736b207a6f6e657320616e64207472656174207468652063617573657320696e2077617973207468617420617265206265737420666f7220796f75722066616d696c7920616e6420656e7669726f6e6d656e742e3c2f703e0d0a0d0a3c703e416674657220612064657461696c656420696e7370656374696f6e2c2077652077696c6c20637265617465206120637573746f6d697a6564205065737420436f6e74726f6c20506c616e20746861742077696c6c20656666696369656e746c7920616e64206469726563746c792074617267657420796f757220706573742070726f626c656d2e3c2f703e0d0a0d0a3c703e436c69656e74732063616e2063686f6f73652066726f6d20612072616e6765206f662070726576656e74617469766520616e6420726573706f6e736976652070657374206d616e6167656d656e742073657276696365732064656c697665726564206279206f757220686967686c7920747261696e656420616e6420646564696361746564205370656369616c6973747320616e6420546563686e696369616e732e3c2f703e0d0a, 'page_image.png', 'C:/xampp/htdocs/pesthome/site_assets/uploads/page/page_image.png', 'about-kantipur-pest-control'),
(4, 'Services', 0x3c68323e3c7374726f6e673e496e7465726e616c2054726561746d656e743a3c2f7374726f6e673e3c2f68323e0d0a0d0a3c703e412074686f726f75676820696e7370656374696f6e2077696c6c20626520636f6e64756374656420746f206964656e7469667920496e66657374656420417265617320616e6420506f74656e7469616c205269736b2041726561732e266e6273703b3c6272202f3e0d0a496e6665737465642061726561732077696c6c206265207472656174656420616e642074686f7365206172656173207468617420617265206c696b656c7920746f206265636f6d6520696e666573746564202861732072657665616c65642066726f6d2074686520696e7370656374696f6e292077696c6c20626520676976656e2070726576656e7461746976652074726561746d656e742e3c2f703e0d0a0d0a3c68323e3c7374726f6e673e45787465726e616c2054726561746d656e743a3c2f7374726f6e673e3c2f68323e0d0a0d0a3c703e546869732077696c6c2062652061646d696e6973746572656420616c6f6e672074686520706572696d65746572206f6620746865207072656d697365732c20617420616e7920706f737369626c6520656e74727920706f696e74732c206d616e686f6c657320616e6420676172626167652061726561732e3c2f703e0d0a0d0a3c68323e3c7374726f6e673e526f64656e7420436f6e74726f6c3a3c2f7374726f6e673e3c2f68323e0d0a0d0a3c703e4120636f6d70726568656e7369766520696e7370656374696f6e2077696c6c20626520636f6e64756374656420746f2066696e6420616c6c20706f737369626c6520656e74727920706f696e747320666f72205261747320616e64204d6963652e20416e79206172656173206f6620696e666573746174696f6e2077696c6c2062652074726561746564206163636f7264696e676c7920616e64206120526f64656e7420436f6e74726f6c20536f6c7574696f6e2077696c6c20626520666f726d756c61746564207468726f7567682074686520757365206f66204368656d6963616c20526570656c6c656e74732c20426169742073746174696f6e7320616e642054726170732e3c2f703e0d0a0d0a3c703e5465726d69746520436f6e74726f6c3c2f703e0d0a0d0a3c703e57697468205465726d697465732c205768617420796f752063616e262333393b7420736565206973207468652070726f626c656d2e266e6273703b596f7572206269676765737420696e766573746d656e74206d6179206265206174207269736b2e205465726d6974657320776f756c64206c6f766520746f206d616b652061206d65616c206f6620796f757220686f6d652c20616e6420746865792063616e20616e6420646f20636175736520656e6f726d6f75732064616d61676520696e20612073686f7274207370616365206f662074696d652e3c2f703e0d0a0d0a3c703e4c696b6520616c6c206c6976696e67206372656174757265732c205465726d69746573206e65656420666f6f6420746f20537572766976652e2043656c6c756c6f73652c20666f756e6420696e20576f6f64206973207468656972206d61696e20666f6f6420736f757263652e205465726d6974657320696e2074686520736f696c20636f6e74696e756f75736c792073656172636820666f7220776f6f64207768696368207075747320796f757220686f6d65206f72206275696c64696e6720617420696d6d656469617465207269736b2e3c2f703e0d0a0d0a3c703e5465726d697465732074756e6e656c2074686569722077617920696e746f20776f6f64656e20737472756374757265732c20736574207570206120436f6c6f6e7920616e6420746865206465737472756374696f6e20626567696e732066726f6d2074686572652e204f7665722074696d652c20746865792063616e2063617573652065787472656d652064616d61676520616e642077696c6c2066656564206f6e2074686520776f6f6420756e74696c206e6f7468696e67206973206c656674206275742061207368656c6c2e205465726d69746520436f6c6f6e69657320656174206e6f6e2d73746f702c20323420686f7572732061206461792c20736576656e20646179732061207765656b213c2f703e0d0a0d0a3c703e4d6f73717569746f20436f6e74726f6c3a3c2f703e0d0a0d0a3c703e576974682074686520696e6372656173696e6720696e636964656e7473206f66206d6f73717569746f2072656c61746564206865616c74682070726f626c656d73206865726520696e204e6570616c20737563682061732044656e6775652046657665722e3c2f703e0d0a0d0a3c703e54726170262333393b7320666f637573206c69657320696e20646576656c6f70696e6720646966666572656e7420617070726f616368657320746f20636f6e74726f6c206d6f73717569746f732e3c2f703e0d0a0d0a3c703e547261702077696c6c20636f6e6475637420612074686f726f75676820696e7370656374696f6e20746f206c6f6f6b20666f7220706f74656e7469616c20736f7572636573206f66206d6f73717569746f20696e666573746174696f6e207375636820617320737461676e616e7420776174657220616e642077617465722062656172696e672072656365707461636c65732f636f6e7461696e657273206c656674206f6e20736974652e3c2f703e0d0a0d0a3c703e547261702077696c6c20666f726d756c6174652061206d6f73717569746f20636f6e74726f6c20706c616e20616e642061646f707420746865206d6f737420656666696369656e742d617070726f61636820746f20636f6e74726f6c207468652070726f626c656d2e3c2f703e0d0a0d0a3c703e526f64656e7420436f6e74726f6c3a3c2f703e0d0a0d0a3c703e7261747320616e64204d6963652063616e20706f736520687567652070726f626c656d7320696e20796f757220686f6d65206f7220627573696e6573732e20546865792061726520737072656164657273206f6620646573656173652c2063616e2064616d6167652070726f70657274792028656c656374726963616c20776972657320616e64206675726e69747572652920616e6420636f6e74616d696e61746520666f6f647374756666732e3c2f703e0d0a0d0a3c703e4b50432077696c6c20636f6e64756374206120636f6d70726568656e7369766520696e7370656374696f6e20746f2066696e6420616c6c20706f737369626c6520656e74727920706f696e7473202c20666f6f6420736f757263657320616e64206272656564696e6720617265617320616e6420666f726d756c617465206120526f64656e7420436f6e74726f6c20536f6c7574696f6e20746f2062657374207375697420796f7572206e656564732e3c2f703e0d0a0d0a3c703e4265642042756720436f6e74726f6c3c2f703e0d0a0d0a3c703e42656420427567732061726520736d616c6c2077696e676c65737320696e73656374732074686174206665656420736f6c656c792075706f6e2074686520626c6f6f64206f66207761726d2d626c6f6f64656420616e696d616c73206d616b696e672068756d616e7320616e20696465616c20666f6f6420736f757263652e3c2f703e0d0a0d0a3c703e3c7374726f6e673e486f7720446f20426564204275677320496e76616465206120486f6d653f3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e4265642062756773206d61792067657420696e746f2061206e657720686f6d652061732073746f776177617973207768656e206c756767616765202c206675726e697475726520616e642062656464696e67206973206d6f76656420696e746f2061206e657720686f6d65202d20657370656369616c6c7920696e207468652063617365206f66207365636f6e642d68616e64206675726e69747572652e3c2f703e0d0a0d0a3c703e3c7374726f6e673e50726f626c656d7320546865792043617573653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e426564204275672062697465732063616e20636175736520736b696e2069727269746174696f6e202c20616c6c6572676963207265616374696f6e7320616e64206d616b6520796f757220686f6d6520616e20756e636f6d666f727461626c6520706c61636520746f2062652e266e6273703b3c2f703e0d0a0d0a3c703e3c7374726f6e673e57686174204b50432043616e20446f3f3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e45717569707065642077697468206d6f6465726e20746563686e6f6c6f677920696e20646574656374696f6e266e6273703b2c204b50432077696c6c20636f6e647563742061206361726566756c20696e7370656374696f6e20746f2064657465726d696e652074686520657874656e74206f66207468652070726f626c656d20616e6420666f726d756c61746520612070726f6772616d20666f72206572616469636174696f6e2e3c2f703e0d0a, 'no_image', 'not_found', 'services');

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `post_id` int(50) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_content` blob,
  `post_author` varchar(150) NOT NULL,
  `post_image_name` varchar(255) DEFAULT NULL,
  `post_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `post_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_setup`
--

CREATE TABLE `menu_setup` (
  `ms_id` int(100) NOT NULL,
  `ms_page_id` int(100) NOT NULL,
  `ms_title` varchar(150) NOT NULL,
  `ms_order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_setup`
--

INSERT INTO `menu_setup` (`ms_id`, `ms_page_id`, `ms_title`, `ms_order`) VALUES
(1, 1, 'About Us', 1),
(3, 4, 'Services', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services_setup`
--

CREATE TABLE `services_setup` (
  `service_id` int(50) NOT NULL,
  `service_content` blob NOT NULL,
  `service_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_setup`
--

INSERT INTO `services_setup` (`service_id`, `service_content`, `service_title`) VALUES
(1, 0x412074686f726f75676820696e7370656374696f6e2077696c6c20626520636f6e64756374656420746f206964656e7469667920496e66657374656420417265617320616e6420506f74656e7469616c205269736b2041726561732e200d0a496e6665737465642061726561732077696c6c206265207472656174656420616e642074686f7365206172656173207468617420617265206c696b656c7920746f206265636f6d6520696e666573746564202861732072657665616c65642066726f6d2074686520696e7370656374696f6e292077696c6c20626520676976656e2070726576656e7461746976652074726561746d656e740d0a, 'General Pest Conrol'),
(2, 0x57697468205465726d697465732c205768617420796f752063616e277420736565206973207468652070726f626c656d2e20596f7572206269676765737420696e766573746d656e74206d6179206265206174207269736b2e205465726d6974657320776f756c64206c6f766520746f206d616b652061206d65616c206f6620796f757220686f6d652c20616e6420746865792063616e20616e6420646f20636175736520656e6f726d6f75732064616d61676520696e20612073686f7274207370616365206f662074696d652e, 'Termite Control'),
(3, 0x576974682074686520696e6372656173696e6720696e636964656e7473206f66206d6f73717569746f2072656c61746564206865616c74682070726f626c656d73206865726520696e204e6570616c20737563682061732044656e6775652046657665722e0d0a54726170277320666f637573206c69657320696e20646576656c6f70696e6720646966666572656e7420617070726f616368657320746f20636f6e74726f6c206d6f73717569746f732e0d0a547261702077696c6c20636f6e6475637420612074686f726f75676820696e7370656374696f6e20746f206c6f6f6b20666f7220706f74656e7469616c20736f7572636573206f66206d6f73717569746f20696e666573746174696f6e207375636820617320737461676e616e7420776174657220616e642077617465722062656172696e672072656365707461636c65732f636f6e7461696e657273206c656674206f6e20736974652e0d0a, 'Mosquito Control'),
(4, 0x7261747320616e64204d6963652063616e20706f736520687567652070726f626c656d7320696e20796f757220686f6d65206f7220627573696e6573732e20546865792061726520737072656164657273206f6620646573656173652c2063616e2064616d6167652070726f70657274792028656c656374726963616c20776972657320616e64206675726e69747572652920616e6420636f6e74616d696e61746520666f6f647374756666732e0d0a4b50432077696c6c20636f6e64756374206120636f6d70726568656e7369766520696e7370656374696f6e20746f2066696e6420616c6c20706f737369626c6520656e74727920706f696e7473202c20666f6f6420736f757263657320616e64206272656564696e6720617265617320616e6420666f726d756c617465206120526f64656e7420436f6e74726f6c20536f6c7574696f6e20746f2062657374207375697420796f7572206e656564732e0d0a, 'Rodent Control'),
(5, 0x42656420427567732061726520736d616c6c2077696e676c65737320696e73656374732074686174206665656420736f6c656c792075706f6e2074686520626c6f6f64206f66207761726d2d626c6f6f64656420616e696d616c73206d616b696e672068756d616e7320616e20696465616c20666f6f6420736f757263652e, 'Bed Bug Control');

-- --------------------------------------------------------

--
-- Table structure for table `slider_setup`
--

CREATE TABLE `slider_setup` (
  `slider_id` int(75) NOT NULL,
  `slider_image_name` varchar(150) NOT NULL,
  `slider_image_url` varchar(250) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `updated_at`) VALUES
(22, 'Admin', 'info@kantipurpestcontrol.com.np', 'b4c24b481c6b21a2dbf510c2398cc64d', '2018-11-24 06:09:06'),
(23, 'tucir', 'info@tucir.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-12-03 14:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `vmi_setup`
--

CREATE TABLE `vmi_setup` (
  `vmi_id` int(50) NOT NULL,
  `vision` varchar(500) NOT NULL,
  `mission` varchar(500) NOT NULL,
  `introduction` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmi_setup`
--

INSERT INTO `vmi_setup` (`vmi_id`, `vision`, `mission`, `introduction`) VALUES
(1, 'To facilitate peace of mind by creating safe, healthy and pest-free environments.', 'To deliver professional pest-control for residences and businesses in Saudi Arabia that preserve property and promote healthy environments.', 'Beyond the annoyance and hygienic problems that Pests cause, the most serious way pests harm people and animals are as the carriers of disease.\r\nPests provide transportation and shelter to disease causing organisms called pathogens.\r\nWhen the pests carrying these pathogens come into contact with our environment, bite people and animals or lay their excrement in our food or surroundings, the germs are transmitted and then passed on through everyday contact.\r\nDengue Fever, Diarrhea, Typhoid, Cholera and Malaria are just some of the diseases transmitted by Pests.\r\nIf you want to safeguard yourself and your family against these diseases.\r\nPEST CONTROL ARE THE STARTING POINT.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_appointment`
--
ALTER TABLE `add_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `contact_about`
--
ALTER TABLE `contact_about`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `create_page`
--
ALTER TABLE `create_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `create_post`
--
ALTER TABLE `create_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `menu_setup`
--
ALTER TABLE `menu_setup`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `services_setup`
--
ALTER TABLE `services_setup`
  ADD PRIMARY KEY (`service_id`) USING BTREE;

--
-- Indexes for table `slider_setup`
--
ALTER TABLE `slider_setup`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vmi_setup`
--
ALTER TABLE `vmi_setup`
  ADD PRIMARY KEY (`vmi_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_appointment`
--
ALTER TABLE `add_appointment`
  MODIFY `app_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_about`
--
ALTER TABLE `contact_about`
  MODIFY `cont_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_page`
--
ALTER TABLE `create_page`
  MODIFY `page_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `create_post`
--
ALTER TABLE `create_post`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_setup`
--
ALTER TABLE `menu_setup`
  MODIFY `ms_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_setup`
--
ALTER TABLE `services_setup`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_setup`
--
ALTER TABLE `slider_setup`
  MODIFY `slider_id` int(75) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vmi_setup`
--
ALTER TABLE `vmi_setup`
  MODIFY `vmi_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
