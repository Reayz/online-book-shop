
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friends`
--
CREATE DATABASE IF NOT EXISTS `friends` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `friends`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `password` varchar(21) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `zip_code` int(7) NOT NULL,
  `city` varchar(44) NOT NULL,
  `division` varchar(44) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `password`, `phone`, `address`, `zip_code`, `city`, `division`) VALUES
(1, 'Reayz', 'reayz@gmail.com', '1234', 01738081339, 'Kotbari', 3500, 'Comilla', 'Chittagong'),
(2, 'Prasanto', 'prasanto.cou@gmail.com', '1234', 01869201018, 'Salmanpur', 3500, 'Comilla', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `category` varchar(44) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `author` varchar(60) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(44) NOT NULL,
  `division` varchar(44) NOT NULL,
  `date` varchar(44) NOT NULL,
  `time` varchar(44) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_id`, `photo`, `category`, `book_name`, `price`, `author`, `customer_id`, `name`, `email`, `phone`, `address`, `city`, `division`, `date`, `time`) VALUES
(4, 33, '../images/programming/33.gif', 'programming','Programming Somossa', 150, 'Tamim Sahriar',1, 'Reayz', 'reayz@gmail.com', 01738081339, 'Kotbari', 'Comilla', 'Chittagong', '2016-10-25', '12:51:54 pm'),
(5, 39, '../images/programming/39.gif', 'programming','Data Structure', 180, 'Mahbubul Hasan', 1, 'Reayz', 'reayz@gmail.com', 01738081339, 'Kotbari', 'Comilla', 'Chittagong', '2016-10-25', '12:51:54 pm'),
(6, 12, '../images/general/12.jpg', 'general','Sheola', 110, 'Shirshendu', 2,'Prasanto', 'prasanto,cou@gmail.com', 01869201018, 'Salmanpur', 'Comilla', 'Chittagong', '2016-10-25', '01:03:46 pm'),
(7, 16, '../images/general/16.gif', 'general','Mudra Vongo', 150, 'Somresh Majumdar',2, 'Prasanto', 'prasanto.cou@gmail.com', 01869201018, 'Salmanpur', 'Comilla', 'Chittagong', '2016-10-25', '01:04:32 pm');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `category` varchar(44) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `author` varchar(60) NOT NULL,
  `entry_date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`product_id`, `photo`, `category`, `book_name`, `price`, `author`, `entry_date`, `time`) VALUES
(1, '../images/general/1.gif', 'story', 'Mujib Bahini' , 210, 'Altaf Parvej' , '2016-10-14', '04:33:32 pm'),
(3, '../images/general/3.gif', 'story', 'Shad o Saddher', 130, 'Ata Rahaman',  '2016-10-16', '10:53:23 am'),
(6, '../images/general/6.gif', 'story', 'Born Identity', 170, 'Robert','2016-10-16', '08:47:31 pm'),
(8, '../images/general/8.gif', 'story', 'Adolf Hitler', 220, 'Kampf', '2016-10-16', '08:55:22 pm'),
(10, '../images/general/10.gif', 'story', 'Aat Kuthuri', 120, 'Somresh Majumdar', '2016-10-16', '11:56:19 pm'),
(11, '../images/general/11.jpg', 'story', 'Mile Mishe', 90, 'Shirshendu', '2016-10-16', '11:57:26 pm'),
(12, '../images/general/12.jpg', 'story', 'Sheola', 110, 'Shirshendu', '2016-10-16', '11:58:02 pm'),
(16, '../images/general/16.gif', 'story', 'Mudra Vongo', 150, 'Somresh Majumdar', '2016-10-17', '12:23:18 am'),
(19, '../images/engineering/19.jpg', 'engineering', 'Networking', 170, 'Titas Sarkar', '2016-10-17', '12:24:35 am'),
(20, '../images/engineering/20.gif', 'engineering', 'Php and Mysql', 350, 'Pearson', '2016-10-17', '12:25:11 am'),
(22, '../images/engineering/22.gif', 'engineering', 'Data Structures', 250, 'Schaums Outline', '2016-10-17', '12:31:10 am'),
(23, '../images/engineering/23.gif', 'engineering', 'Data Communication', 350, 'Mc Grow Hill','2016-10-17', '12:31:40 am'),
(24, '../images/engineering/24.gif', 'engineering', 'Design Pattern', 470, 'Alan Shollaway', '2016-10-17', '12:32:31 am'),
(25, '../images/engineering/25.gif', 'engineering', 'Pragmatic Programmer', 450, 'Andrew Hunt', '2016-10-17', '12:32:31 am'),
(26, '../images/engineering/26.gif', 'engineering', 'Digital Logic Design', 280, 'Morris Mano', '2016-10-17', '12:34:30 am'),
(27, '../images/engineering/27.jpg', 'engineering', 'Electronics', 180, 'Showmen Saha', '2016-10-17', '12:34:30 am'),
(28, '../images/programming/28.gif', 'programming', 'Java Programming', 360, 'Daniel Liang', '2016-10-17', '12:35:45 am'),
(29, '../images/programming/29.gif', 'programming', 'Habluder Programming', 170, 'Jhankar Mahbub','2016-10-17', '12:36:36 am'),
(30, '../images/programming/30.jpg', 'programming', 'Bolod to Boss', 150, 'Jhankar Mahbub', '2016-10-17', '12:42:00 am'),
(31, '../images/programming/31.jpg', 'programming', 'C Programming', 150, 'Jakir Hossain', '2016-10-17', '12:42:00 am'),
(33, '../images/programming/33.gif', 'programming', 'Programming Somossa', 150, 'Tamim Sahriar', '2016-10-17', '12:42:00 am'),
(35, '../images/programming/35.gif', 'programming', 'Gonit Olympiad', 220, 'Mostofa Kamal', '2016-10-17', '12:42:00 am'),
(36, '../images/programming/36.gif', 'programming', 'Programming Pearls', 350, 'Pearson', '2016-10-17', '12:42:00 am'),
(37, '../images/programming/37.gif', 'programming', 'Complete Reference', 280, 'Thomas Powell', '2016-10-17', '12:42:00 am'),
(38, '../images/programming/38.jpg', 'programming', 'Hasikhusi Gonit', 150, 'Chamak Hasan', '2016-10-17', '12:42:00 am'),
(39, '../images/programming/39.gif', 'programming', 'Data Structure', 180, 'Mahbubul Hasan','2016-10-17', '12:42:00 am'),
(41, '../images/programming/41.jpg', 'programming', 'Gonit Olympiad', 150, 'Jafor Iqbal','2016-10-17', '12:42:00 am'),
(42, '../images/programming/42.gif', 'programming', 'Combinatrics' , 180, 'Dipu Sarkar' , '2016-10-17', '12:54:48 am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
