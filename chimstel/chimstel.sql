-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2013 at 04:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chimstel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`) VALUES
('chimstelecom', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contact_type` varchar(200) NOT NULL,
  `contact_value` varchar(500) NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `maplink` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactid`, `contact_type`, `contact_value`, `location`, `maplink`) VALUES
(1, 'phone', '+256-312-271-764', 'Batuma House-Natete', 'Call'),
(2, 'phone', '0777773738484', 'uganda', 'facebook');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `sender` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `sender`, `location`, `date`) VALUES
(11, 'As I mentioned, if your application has multiple users of varying roles, youâ€™ll probably want to apply an authorization layer to RailsAdmin. The documentation outlines how to do this using Declarative Authorization, but ultimately how you configure authorization', 'Paul', '', '0000-00-00 00:00:00'),
(70, '', '', '', '2013-09-02 12:00:12'),
(71, '', 'samuel atuhaire', '', '2013-09-02 01:12:24'),
(72, '', '', 'natete', '2013-09-02 01:12:51'),
(73, 'Good customer service but an improvement is needed in customer reception', 'atuhaire samuel', 'Natete', '2013-09-02 01:14:41'),
(74, 'rthyu6u65un', 'fddfgfg', 'rtryty65ytryr', '2013-09-02 01:33:51'),
(75, 'I have liked the service', 'Paul', 'Nattete', '2013-09-03 01:35:25'),
(76, 'This is amazing. a job well done.keep this up.', 'Debbie', 'Equatorial', '2013-09-09 07:45:03'),
(77, 'kljcfvjlfkdvnfd', 'hnrwefnjfe', 'jndgvnj', '2013-10-30 06:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(40) NOT NULL,
  `sender_email` varchar(65) NOT NULL,
  `validmail` enum('valid','invalid') NOT NULL DEFAULT 'invalid',
  `subject` varchar(60) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `sender_name`, `sender_email`, `validmail`, `subject`, `message`, `date`) VALUES
(6, 'Mutebi', 'mutebi@yahoo.com', 'valid', 'phone repair', 'I have a fualty phone do you repair them', '2013-08-19 09:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(12, 'Check Out Our new Products and Promotions', 'We huge to check out our products page so that you may know the products we have for you on markets and also to take advantage of these available promotions.', '2013-11-02 08:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `productprice` varchar(20) NOT NULL,
  `category` enum('phone','promotion','advert','others','accessories') NOT NULL,
  `description` text NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productprice`, `category`, `description`, `imagepath`) VALUES
(14, 'Modem Router 7.2 mbps', '209, 000', 'advert', 'HSPA+ 7.2 Mbps\r\nSupports 5 wireless connections\r\nMicro-SD Support\r\nSupports 3G network\r\nSim + 500/MTN Airtime', '8-user-wi-fi-modem.jpg'),
(20, 'Nokia Asha 200', '245,000', 'phone', 'very long battery life\r\nNice Twitter and Facebook\r\nMicroSD card slot', 'Asha 200.jpg'),
(21, 'Nokia Asha 201', '245, 000', 'phone', 'Good keyboard\r\nvery long battery life\r\nNice Twitter and Facebook\r\nMicroSD card slot\r\nSolid build', 'Asha 201.jpg'),
(22, 'Nokia Asha 202', '240, 000', 'phone', 'Main camera:2 MP\r\nDisplay size:6.1 cm\r\nMaximum music playback time:37h\r\nDual sim:Dual standby SIM', 'Asha 202.jpg'),
(23, 'Nokia Asha 305', '265, 000', 'phone', 'Dual-band GSM, GPRS, EDGE\r\n2 MP camera\r\nmicroSD card support (up to 32 GB)\r\nDual SIM dual stand-by', 'Asha 305.jpg'),
(25, 'Nokia 105', '59,000', 'promotion', '<ul>\r\n<li>Month long battery life\r\n13hours talk time</li>\r\n<li>Dust and splash proof keypad</li>\r\n<li>FM Radio</li>\r\n<li>Torch</li>\r\n<li>Games</li></ul>', 'Nokia 105.jpg'),
(26, 'Nokia 112', '165,000', 'phone', 'HD Wallpapers Inn\r\nGood battery \r\nPortable\r\nGreater Experience', 'Nokia 112.jpg'),
(27, 'Nokia Asha 311', '370, 000', 'phone', 'Touch screen,\r\nStrong GSM, GPRS, \r\nEDGE 2 MP camera,\r\n microSD card support', 'Nokia Asha 311.jpg'),
(29, 'Alcatel-OT-232', '29,000', 'phone', 'Portable\r\nLong Battery\r\nGood screen', 'Alcatel-OT-232.jpg'),
(30, 'MTN Keggunda', '20,000', 'promotion', '<ul>\r\n<li>\r\nColour Screen, 1.4 Inch screen\r\n</li>\r\n\r\n<li>\r\nRingtones, Flashlight, Alarm,\r\n</li>\r\n\r\n<li>FM Radio, Calculator</li>\r\n<li>\r\nUp to 300 Phonebook\r\n</li>\r\n\r\n<li>Up to 4 hours Talktime Battery</li>\r\n\r\n</ul>', 'Keggunda-ZTE-510.jpg'),
(31, '42Mbps Dongle Modem', '148,500', 'accessories', 'Supports data service of up to 42 Mbps.\r\nSupports Hi-Link \r\nFeatures:<p> Driverless, Web User Interface and Auto connect.\r\nNo software installation- Just plug & play!</p>', '42Mbps-Dongle.jpg'),
(32, '21-6-Mbps Modem', '85,500', 'accessories', 'HSPA+/UMTS900MHZ \r\nMicro SD Slot \r\nHSPA + 21.6 Mbps\r\nHSUPA 5.76 Mbps\r\nMicro SD Slot', '21-6-Mbps-Modem.jpg'),
(33, 'Techno T770', '85,000', 'advert', 'Original Techno', 'tecno-t770.jpg'),
(34, 'Housing', '12, 000', 'others', 'House your phone to give it a new look', 'housings.jpg'),
(35, 'CCIT CI', '44, 000', 'phone', 'CCIT phones are available', 'CCIT CI.jpg'),
(36, 'Nokia 1280', '65, 000', 'phone', 'Get yourself original Nokia 1280', 'Nokia 1280.jpg'),
(37, 'CCIT 1183', '44, 000', 'phone', 'CCIT phones are available', 'CCIT 1183 (2).jpg'),
(38, 'Memory card', '25, 000', 'accessories', 'Original and Tested', 'memory cards.jpg'),
(39, 'Charger and Head sets', '20, 000', 'others', 'Get the original suit to go with your phone', 'head sets.jpg');
