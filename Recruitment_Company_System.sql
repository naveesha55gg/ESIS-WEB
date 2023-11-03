-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 05:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Recruitment Company System`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `user_Type` varchar(50) NOT NULL,
  `Password` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`UserID`, `Name`, `Email`, `user_Type`, `Password`) VALUES
(1, 'sath', 'sathpura99@gmail.com', 'job_Seeker', 'msi@5665'),
(2, 'rash', 'shehanrshmika@gmail.com', 'job_Seeker', 'das123'),
(3, 'jeew', 'jeewanthasuper@gmail.com', 'job_Seeker', 'iuy678'),
(4, 'hiru', 'hirundjrap@gmail.com', 'job_Seeker', 'spd456'),
(5, 'nadun', 'nadunbandara8999@gmail.com', 'job_Seeker', 'da5678'),
(6, 'sadeepm', 'sadeepmanu89@gmail.com', 'job_Seeker', 'bnm123'),
(7, 'pathira', 'pathirana123@gmail.com', 'job_Seeker', 'okj789'),
(8, 'malish', 'malishapawn99@gmail.com', 'job_Seeker', 'ccx789'),
(9, 'bandar', 'bandarasadun89@gmail.com', 'job_Seeker', 'iop009'),
(10, 'sasin', 'sasindu99@gmail.com', 'job_Seeker', 'cxz122'),
(11, 'global', 'globaltech@gmail.com', 'company', 'vfvfv89'),
(12, 'ocean', 'oceanicholdings@gmail.com', 'company', 'cvb345'),
(13, 'horizon', 'horizongroup@gmail.com', 'company', 'kjj890'),
(14, 'ceylonl', 'ceylonlogistics@gmail.com', 'company', 'mkj890'),
(15, 'serenere', 'sereneresorts@gmail.com', 'company', 'jhy678'),
(16, 'primem', 'primemotors@gmail.com', 'company', ''),
(17, 'pearl', 'pearlpharmaceuticals@gmail.com', 'company', 'lko987'),
(18, 'magnat', 'magnatextiles@gmail.com', 'company', 'rder234'),
(19, 'royalb', 'royalbank@gmail.com', 'company', 'zxc345'),
(20, 'summit', 'summitengineering@gmail.com', 'company', 'bnh786'),
(21, 'shehhh', 'shehnn667@gmail.com', 'staff', 'zsdr567'),
(22, 'kasun', 'kasuncc1267@gmail.com', 'staff', 'vbn765'),
(23, 'sugat', 'sugath172@gmail.com', 'staff', 'vgh789'),
(24, 'sadun9', 'sadun946@gmail.com', 'staff', 'xdr567'),
(25, 'dasunsh', 'dasunshaka8@gmail.com', 'staff', 'ghjj765'),
(26, 'Tharin', 'Tharindu334@gmail.com', 'staff', 'mjju78'),
(27, 'Dilshan3', 'Dilshan316@gmail.com', 'staff', 'mkj876'),
(28, 'Sandun', 'Sanduni58@gmail.com', 'staff', 'bgh564'),
(29, 'Ratnayake', 'Ratnayake@gmail.com', 'staff', 'vfg677'),
(30, 'dasun', 'dasun9956@gmail.com', 'staff', 'seger222'),
(31, 'tharuka2', 'tharuka23@gmail.com', 'Background_Cheker', 'ghj456'),
(32, 'Supun654', 'Supun654@gmail.com', 'Background_Cheker', 'fef789'),
(33, 'nawod', 'nawod256@gmail.com', 'Background_Cheker', 'cxkl98'),
(34, 'cham', 'chamod2262@gmail.com', 'Background_Cheker', 'nmk89'),
(35, 'Thimira', 'Thimirass3321@gmail.com', 'Background_Cheker', '34rty'),
(36, 'Pradeep', 'Pradeep5647@gmail.com', 'Background_Cheker', 'cxzrr4'),
(37, 'Arun84', 'Arun845@gmail.com', 'Background_Cheker', 'c4567'),
(38, 'Harshan', 'Harshani782@gmail.com', 'Background_Cheker', 'cxz66666'),
(39, 'hasini', 'hasini657@gmail.com', 'Background_Cheker', 'cxz66r5'),
(40, 'Kasun1', 'Kasun124@gmail.com', 'Background_Cheker', 'cxztg67'),
(41, 'mallika', 'mallika@gmail.com', 'job_Seeker', 'mallika');

-- --------------------------------------------------------

--
-- Table structure for table `al_result`
--

CREATE TABLE `al_result` (
  `ALIndex` char(7) NOT NULL,
  `ALSub1` varchar(50) DEFAULT NULL,
  `ALSub1Result` char(1) DEFAULT NULL,
  `ALSub2` varchar(50) DEFAULT NULL,
  `ALSub2Result` char(1) DEFAULT NULL,
  `ALSub3` varchar(50) DEFAULT NULL,
  `ALSub3Result` char(1) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `al_result`
--

INSERT INTO `al_result` (`ALIndex`, `ALSub1`, `ALSub1Result`, `ALSub2`, `ALSub2Result`, `ALSub3`, `ALSub3Result`, `JbID`) VALUES
('1144378', 'BIOLOGICAL SCIENCE', 'A', 'PHYSICS', 'A', 'CHEMESTRY', 'B', 8),
('2267712', 'BIO SYSTEM TECHNOLOGY', 'B', 'ENGINEERING TECHNOLOGY', 'C', 'I.C.T', 'B', 5),
('3367996', 'ACCOUNTING', 'C', 'ECONOMIC', 'C', 'BUSINESS STUDY', 'C', 4),
('4567678', 'COMBINED MATHAMATICS', 'B', 'PHYSICS', 'C', 'CHEMESTRY', 'B', 1),
('4777736', 'BIO SYSTEM TECHNOLOGY', 'C', 'ENGINEERING TECHNOLOGY', 'B', 'I.C.T', 'B', 10),
('5566478', 'BIOLOGICAL SCIENCE', 'A', 'PHYSICS', 'C', 'CHEMESTRY', 'C', 2),
('7566845', 'BIOLOGICAL SCIENCE', 'C', 'PHYSICS', 'B', 'CHEMESTRY', 'A', 3),
('8877436', 'ACCOUNTING', 'C', 'ECONOMIC', 'C', 'BUSINESS STUDY', 'C', 7),
('9057696', 'COMBINED MATHAMATICS', 'B', 'PHYSICS', 'C', 'CHEMESTRY', 'B', 9),
('9965336', 'I.C.T', 'B', 'ECON', 'C', 'A.C.C', 'B', 6);

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `JobPID` int(11) NOT NULL,
  `JbID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`JobPID`, `JbID`) VALUES
(1, 1),
(2, 2),
(2, 6),
(3, 3),
(3, 9),
(4, 3),
(6, 1),
(6, 2),
(7, 5),
(9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `background_check`
--

CREATE TABLE `background_check` (
  `BacgroundID` int(11) NOT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL,
  `BcID` int(11) DEFAULT NULL,
  `RecID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background_check`
--

INSERT INTO `background_check` (`BacgroundID`, `Message`, `JbID`, `BcID`, `RecID`) VALUES
(1, 'documents are approved', 1, 1, 1),
(2, 'documents are approved', 2, 2, 2),
(3, 'documents are approved', 3, 3, 3),
(4, 'documents are approved', 4, 1, 4),
(5, 'documents are approved', 5, 2, 3),
(6, 'documents are approved', 6, 1, 3),
(7, 'documents are approved', 7, 4, 1),
(8, 'documents are approved', 8, 5, 5),
(9, 'documents are approved', 9, 6, 6),
(10, 'documents are approved', 10, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `background_cheker`
--

CREATE TABLE `background_cheker` (
  `BcID` int(11) NOT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background_cheker`
--

INSERT INTO `background_cheker` (`BcID`, `FName`, `LName`, `Email`, `UserID`) VALUES
(1, 'Tharuka', 'Nadun', 'tharuka@gmail.com', 31),
(2, 'Chanka', 'Supun', 'Supun@gmail.com', 32),
(3, 'Nawod', 'Randima', 'nawod@gmail.com', 33),
(4, 'Kavinda', 'Chamod', 'chamod@gmail.com', 34),
(5, 'Thimira', 'Nirmal', 'Thimirass3321@gmail.com', 35),
(6, 'pradeep', 'ekaligoda', 'Pradeep5647@gmail.com', 36),
(7, 'Arun', 'Ekanayaka', 'Arun845@gmail.com', 37),
(8, 'Harshani', 'Rasangi', 'Harshani782@gmail.com', 38),
(9, 'Hasini', 'Chamod', 'hasini657@gmail.com', 39),
(10, 'Kasun', 'Shakthi', 'Kasun124@gmail.com', 40);

-- --------------------------------------------------------

--
-- Table structure for table `background_cheker_contact`
--

CREATE TABLE `background_cheker_contact` (
  `BcID` int(11) NOT NULL,
  `Phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background_cheker_contact`
--

INSERT INTO `background_cheker_contact` (`BcID`, `Phone`) VALUES
(1, '0765432109'),
(2, '0710987654'),
(3, '0776543210'),
(4, '0743210987'),
(5, '0732109876'),
(6, '0723456789'),
(7, '0798765432'),
(8, '0754321098'),
(9, '0712345678'),
(10, '0787654321');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CName` varchar(100) NOT NULL,
  `Adress` varchar(200) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CID`, `Email`, `CName`, `Adress`, `Website`, `UserID`) VALUES
(1, 'globaltech@gmail.com', 'GlobalTech Solutions', '10, Tech Avenue, Colombo 05, Sri Lanka', 'www.GlobaltechSolutions.com', 11),
(2, 'oceanicholdings@gmail.com', 'Oceanic Holdings', '25, Marine Drive, Colombo 03, Sri Lanka', 'www.Oceanicholdings.com', 12),
(3, 'horizongroup@gmail.com', 'Horizon Group', '50, Horizon Towers, Galle Road, Colombo 04, Sri Lanka', 'www.horizongroup.lk', 13),
(4, 'ceylonlogistics@gmail.com', 'Ceylon Logistics', '15, Logistics Avenue, Colombo 10, Sri Lanka', 'www.ceylonlogistics.lk', 14),
(5, 'sereneresorts@gmail.com', 'Serene Resorts', '100, Serene Beach Road, Bentota, Sri Lanka', 'www.sereneresorts.lk', 15),
(6, 'primemotors@gmail.com', 'Prime Motors', '77, Prime Road, Colombo 06, Sri Lanka', ' www.primemotors.lk', 16),
(7, 'pearlpharmaceuticals@gmail.com', 'Pearl Pharmaceuticals', '5, Pearl Lane, Colombo 08, Sri Lanka', 'www.pearlpharma.lk', 17),
(8, 'magnatextiles@gmail.com', 'Magna Textiles', '30, Textile Road, Wattala, Sri Lanka', 'www.magnatextiles.lk', 18),
(9, 'royalbank@gmail.com', 'Royal Bank', '20, Royal Tower, Colombo 02, Sri Lanka', 'www.royalbank.lk', 19),
(10, 'summitengineering@gmail.com', 'Summit Engineering', '12, Summit Road, Kandy, Sri Lanka', 'www.summitengineering.lk1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `company_contact`
--

CREATE TABLE `company_contact` (
  `CID` int(11) NOT NULL,
  `Phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_contact`
--

INSERT INTO `company_contact` (`CID`, `Phone`) VALUES
(1, '0774965785'),
(2, '0724965482'),
(3, '0774856595'),
(4, '0724563851'),
(5, '0751234567'),
(6, '0764965788'),
(7, '0732222785'),
(8, '0714965210'),
(9, '0774964501'),
(10, '0754565789');

-- --------------------------------------------------------

--
-- Table structure for table `company_customer_support`
--

CREATE TABLE `company_customer_support` (
  `CcsID` int(11) NOT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Reply` varchar(500) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `RecID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_customer_support`
--

INSERT INTO `company_customer_support` (`CcsID`, `Message`, `Reply`, `CID`, `RecID`) VALUES
(1, 'Hello, we have an urgent job opening. Can you provide immediate assistance?', NULL, 1, 1),
(2, 'Hi there, we need assistance with our hiring process. How can you help?', NULL, 2, 3),
(3, 'Hello, we would like to inquire about your fees and services.', NULL, 2, 2),
(4, 'Hi, we need to fill a key position. Can you recommend suitable candidates?', NULL, 3, 4),
(5, 'Hello, we are expanding our team. Can we discuss your recruitment options?', NULL, 4, 6),
(6, 'Hi there, we are experiencing difficulties with candidate screening. Can you provide guidance?', NULL, 5, 2),
(7, 'Hi, we are looking for a dedicated recruiter. Are you available for outsourcing?', NULL, 6, 5),
(8, 'Hi there, we are experiencing difficulties with candidate screening. Can you provide guidance?', NULL, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `IntID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Venue` varchar(200) NOT NULL,
  `CID` int(11) DEFAULT NULL,
  `JobPID` int(11) DEFAULT NULL,
  `RecID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`IntID`, `Date`, `Time`, `Venue`, `CID`, `JobPID`, `RecID`) VALUES
(1, '2023-05-01', '08:30:00', '10, Tech Avenue, Colombo 05, Sri Lanka', 1, 1, 1),
(2, '2023-03-15', '08:30:00', '10, Tech Avenue, Colombo 05, Sri Lanka', 1, 2, 2),
(3, '2023-01-20', '08:30:00', '50, Horizon Towers, Galle Road, Colombo 04, Sri Lanka', 3, 3, 3),
(4, '2023-04-04', '08:30:00', '15, Logistics Avenue, Colombo 10, Sri Lanka', 4, 4, 4),
(5, '2023-05-06', '10:00:00', '100, Serene Beach Road, Bentota, Sri Lanka', 5, 5, 4),
(6, '2023-01-12', '08:30:00', 'Prime Motors,77, Prime Road, Colombo 06, Sri Lanka', 6, 6, 1),
(7, '2023-02-28', '09:00:00', '30, Textile Road, Wattala, Sri Lanka', 8, 7, 4),
(8, '2023-06-16', '10:00:00', '30, Textile Road, Wattala, Sri Lanka', 8, 8, 5),
(9, '2023-05-23', '10:00:00', '20, Royal Tower, Colombo 02, Sri Lanka', 9, 9, 9),
(10, '2023-06-21', '08:30:00', '12, Summit Road, Kandy, Sri Lanka', 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jobSeeker_customer_support`
--

CREATE TABLE `jobSeeker_customer_support` (
  `JbcsID` int(11) NOT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL,
  `RecID` int(11) DEFAULT NULL,
  `Reply` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobSeeker_customer_support`
--

INSERT INTO `jobSeeker_customer_support` (`JbcsID`, `Message`, `JbID`, `RecID`, `Reply`) VALUES
(1, 'Hello, could you please confirm if my application was received?', 1, 2, NULL),
(2, 'Hello, I would like to know the status of my application.', 2, 1, NULL),
(3, 'Hello, I submitted my resume last month. Is there any progress?', 3, 2, NULL),
(4, 'Hi there, can you please let me know if the position is still available?', 4, 3, NULL),
(5, 'Hi, I wanted to check if my application is under review.', 5, 4, NULL),
(6, 'Hello, Im excited about the job opportunity. When can I expect a response?', 6, 2, NULL),
(7, 'Hi, Im following up on my job application. Any news?', 7, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `JobPID` int(11) NOT NULL,
  `Jobtitle` varchar(100) DEFAULT NULL,
  `Discription` varchar(300) DEFAULT NULL,
  `Requirements` varchar(500) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`JobPID`, `Jobtitle`, `Discription`, `Requirements`, `CID`) VALUES
(1, 'Sales Executive', 'Develop and maintain relationships with clients, promote products ', '2 years experince', 1),
(2, 'Production Operator', 'Operate machinery and equipment to assist in the manufacturing of pharmaceutical products ', '1years experience', 1),
(3, 'Customer Service Representative', 'Assist customers with inquiries, process transactions, and provide information about financial products and services ', '10years experience', 3),
(4, 'IT Support Technician', ' Provide technical support to users, troubleshoot hardware and software issues, and assist with system maintenance ', '2years experience', 4),
(5, 'Site Supervisor', 'Oversee construction activities, ensure adherence to safety guidelines, and coordinate with subcontractors ', '2years experience', 5),
(6, 'Sales Associate', 'Assist customers, provide product information, process sales transactions, and maintain a neat and organized sales floor ', '3years experince', 6),
(7, 'Environmental Officer', 'Monitor and assess environmental impact, develop sustainability initiatives, and ensure compliance with environmental regulations ', '4years experince', 8),
(8, 'Aquaculture Technician', ' Assist in the daily operations of fish farming, including feeding, monitoring water quality, and maintaining equipment ', '3years experince', 8),
(9, 'Sewing Machine Operator', 'Operate sewing machines to stitch fabric pieces, follow patterns, and ensure high-quality garment production ', '3years experince', 9),
(10, 'Junior Software Developer', 'Assist in the development and coding of software applications, perform testing, and troubleshoot issues ', '2years experince', 10);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `JbID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `LName` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`JbID`, `Email`, `FName`, `LName`, `Address`, `UserID`) VALUES
(1, 'sathpura99@gmail.com', 'Dasith', 'Sathpura', 'NO.601,panamura road, Embilipitiya', 1),
(2, 'shehanrshmika@gmail.com', 'Shehan', 'Rashmika', 'NO.11/b,barawakubuka, Embilipitiya', 2),
(3, 'jeewanthasuper@gmail.com', 'Heshan', 'Jeewantha', 'NO.23,talpavila, Rabukkana', 3),
(4, 'hirundjrap@gmail.com', 'Hirun', 'Dilhara', 'NO.111,telpitiya, Ehaliyagoda', 4),
(5, 'nadunbandara8999@gmail.com', 'Nadun', 'Bandara', 'NO.89/A,Rakwana, kaburupitiya', 5),
(6, 'sadeepmanu89@gmail.com', 'Sadeepa', 'Manuranga', 'NO.11b,Dolakanda, katharagam', 6),
(7, 'pathirana123@gmail.com', 'Ruwan', 'Pathirana', 'NO.222,thalawakale, nuwaraeliya', 7),
(8, 'malishapawn99@gmail.com', 'Pawan', 'Malisha', 'NO.33,kadurupokuna, Tango', 8),
(9, 'bandarasadun89@gmail.com', 'Sadun', 'Bandara', 'NO.999,kaburupitiya, Mathara', 9),
(10, 'sasindu99@gmail.com', 'Sasindu', 'sadaruwan', 'NO.12/D,Sithawaka, kaburupitiya', 10);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_contact`
--

CREATE TABLE `job_seeker_contact` (
  `JbID` int(11) NOT NULL,
  `Phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker_contact`
--

INSERT INTO `job_seeker_contact` (`JbID`, `Phone`) VALUES
(1, '0714453333'),
(2, '0789097651'),
(3, '0715678245'),
(4, '0706242782'),
(5, '0781552028'),
(6, '0788915142'),
(7, '0780022625'),
(8, '0789826255'),
(9, '0789029287'),
(10, '0782925232');

-- --------------------------------------------------------

--
-- Table structure for table `ol_result`
--

CREATE TABLE `ol_result` (
  `OLIndex` char(7) NOT NULL,
  `OLSub1` varchar(50) DEFAULT NULL,
  `OLSub1Result` char(1) DEFAULT NULL,
  `OLSub2` varchar(50) DEFAULT NULL,
  `OLSub2Result` char(1) DEFAULT NULL,
  `OLSub3` varchar(50) DEFAULT NULL,
  `OLSub3Result` char(1) DEFAULT NULL,
  `OLSub4` varchar(50) DEFAULT NULL,
  `OLSub4Result` char(1) DEFAULT NULL,
  `OLSub5` varchar(50) DEFAULT NULL,
  `OLSub5Result` char(1) DEFAULT NULL,
  `OLSub6` varchar(50) DEFAULT NULL,
  `OLSub6Result` char(1) DEFAULT NULL,
  `OLSub7` varchar(50) DEFAULT NULL,
  `OLSub7Result` char(1) DEFAULT NULL,
  `OLSub8` varchar(50) DEFAULT NULL,
  `OLSub8Result` char(1) DEFAULT NULL,
  `OLSub9` varchar(50) DEFAULT NULL,
  `OLSub9Result` char(1) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ol_result`
--

INSERT INTO `ol_result` (`OLIndex`, `OLSub1`, `OLSub1Result`, `OLSub2`, `OLSub2Result`, `OLSub3`, `OLSub3Result`, `OLSub4`, `OLSub4Result`, `OLSub5`, `OLSub5Result`, `OLSub6`, `OLSub6Result`, `OLSub7`, `OLSub7Result`, `OLSub8`, `OLSub8Result`, `OLSub9`, `OLSub9Result`, `JbID`) VALUES
('1323778', 'SINHALA', 'S', 'MATHAMATICS', 'B', 'SCIENCE', 'C', 'BUDDHIST', 'A', 'HISTORY', 'B', 'ENGLISH', 'A', 'HEALTH STUDY', 'A', 'AGRI SCIENCE', 'C', 'DANCING', 'A', 2),
('2223696', 'SINHALA', 'C', 'MATHAMATICS', 'B', 'SCIENCE', 'C', 'BUDDHIST', 'B', 'HISTORY', 'A', 'ENGLISH', 'C', 'ICT', 'A', 'TAMIL', 'C', 'MUSIC', 'B', 3),
('2323445', 'SINHALA', 'A', 'MATHAMATICS', 'C', 'SCIENCE', 'B', 'BUDDHIST', 'C', 'HISTORY', 'C', 'ENGLISH', 'S', 'ICT', 'B', 'TAMIL', 'C', 'MUSIC', 'A', 1),
('3322936', 'SINHALA', 'S', 'MATHAMATICS', 'S', 'SCIENCE', 'C', 'BUDDHIST', 'A', 'HISTORY', 'C', 'ENGLISH', 'B', 'HEALTH STUDY', 'A', 'TAMIL', 'C', 'DANCING', 'S', 9),
('5323436', 'SINHALA', 'B', 'MATHAMATICS', 'B', 'SCIENCE', 'A', 'BUDDHIST', 'A', 'HISTORY', 'C', 'ENGLISH', 'C', 'ICT', 'S', 'ACCOUNTING', 'C', 'DRAMA', 'C', 4),
('5353378', 'SINHALA', 'S', 'MATHAMATICS', 'S', 'SCIENCE', 'C', 'BUDDHIST', 'B', 'HISTORY', 'B', 'ENGLISH', 'S', 'ICT', 'A', 'TAMIL', 'C', 'DRAMA', 'S', 10),
('7723869', 'SINHALA', 'A', 'MATHAMATICS', 'C', 'SCIENCE', 'B', 'BUDDHIST', 'A', 'HISTORY', 'A', 'ENGLISH', 'S', 'HEALTH STUDY', 'A', 'ACCOUNTING', 'C', 'MUSIC', 'A', 7),
('8323615', 'SINHALA', 'C', 'MATHAMATICS', 'B', 'SCIENCE', 'C', 'BUDDHIST', 'A', 'HISTORY', 'A', 'ENGLISH', 'S', 'HEALTH STUDY', 'A', 'TAMIL', 'C', 'MUSIC', 'C', 5),
('8388096', 'SINHALA', 'A', 'MATHAMATICS', 'B', 'SCIENCE', 'C', 'BUDDHIST', 'B', 'HISTORY', 'B', 'ENGLISH', 'A', 'ICT', 'A', 'TAMIL', 'C', 'MUSIC', 'A', 8),
('9923378', 'SINHALA', 'C', 'MATHAMATICS', 'A', 'SCIENCE', 'C', 'BUDDHIST', 'C', 'HISTORY', 'B', 'ENGLISH', 'B', 'ICT', 'A', 'TAMIL', 'C', 'DRAMA', 'A', 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PID` int(11) NOT NULL,
  `PAmount` varchar(20) DEFAULT NULL,
  `PDate` varchar(20) DEFAULT NULL,
  `JobPID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `PAmount`, `PDate`, `JobPID`, `CID`) VALUES
(1, '20000', '2022/10/23', 1, 1),
(2, '30000', '2022/12/03', 2, 1),
(3, '40000', '2022/11/11', 3, 3),
(4, '50000', '2019/12/10', 4, 4),
(5, '50000', '2020/10/09', 5, 5),
(6, '70000', '2022/05/26', 6, 6),
(7, '80000', '2021/10/13', 7, 8),
(8, '60000', '2022/06/12', 8, 8),
(9, '40000', '2022/11/26', 9, 9),
(10, '40000', '2022/11/21', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pending_job_post`
--

CREATE TABLE `pending_job_post` (
  `PndID` int(11) NOT NULL,
  `Jobtitle` varchar(100) DEFAULT NULL,
  `Discription` varchar(300) DEFAULT NULL,
  `Requirements` varchar(500) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_job_post`
--

INSERT INTO `pending_job_post` (`PndID`, `Jobtitle`, `Discription`, `Requirements`, `CID`) VALUES
(1, 'Sales Associate', 'Assist customers, provide product information, process sales transactions, and maintain a neat and organized sales floor ', '3years experince', 6),
(2, 'Environmental Officer', 'Monitor and assess environmental impact, develop sustainability initiatives, and ensure compliance with environmental regulations ', '4years experince', 8),
(3, 'Aquaculture Technician', ' Assist in the daily operations of fish farming, including feeding, monitoring water quality, and maintaining equipment ', '3years experince', 8),
(4, 'Sewing Machine Operator', 'Operate sewing machines to stitch fabric pieces, follow patterns, and ensure high-quality garment production ', '3years experince', 9),
(5, 'Junior Software Developer', 'Assist in the development and coding of software applications, perform testing, and troubleshoot issues ', '2years experince', 10);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `PerID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `NIC` char(10) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`PerID`, `FullName`, `DOB`, `NIC`, `Gender`, `JbID`) VALUES
(1, 'nimesh bandara', '1997-12-03', '12345678V', 'male', 1),
(2, 'gimeshi malinga', '2000-11-04', '92395678V', 'female', 2),
(3, 'umesh umayanga', '1999-02-13', '72845668V', 'male', 3),
(4, 'ramesh balasuriya', '1996-12-03', '67845678V', 'male', 4),
(5, 'saneshi dilhara', '2000-01-30', '92345890V', 'female', 5),
(6, 'mahesh rathnayaka', '1990-02-26', '16785678V', 'male', 6),
(7, 'kusal nipuna', '1998-08-04', '32145678V', 'male', 7),
(8, 'amasha lumbini', '1995-04-09', '87655678V', 'male', 8),
(9, 'malinga mahesh', '1998-05-09', '87815678V', 'male', 9),
(10, 'nimal jayarathne', '1995-04-10', '98765677V', 'male', 10);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data_contact`
--

CREATE TABLE `personal_data_contact` (
  `PerID` int(11) NOT NULL,
  `Phone` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_data_contact`
--

INSERT INTO `personal_data_contact` (`PerID`, `Phone`) VALUES
(1, '0772323456'),
(2, '0742327856'),
(3, '0702123459'),
(4, '0712383456'),
(5, '0788323908'),
(6, '0742353466'),
(7, '0722323421'),
(8, '0732523456'),
(9, '0754523456'),
(10, '0742523498');

-- --------------------------------------------------------

--
-- Table structure for table `profiesonal_data`
--

CREATE TABLE `profiesonal_data` (
  `ProfID` int(11) NOT NULL,
  `Cname` varchar(50) DEFAULT NULL,
  `Achievement` varchar(500) DEFAULT NULL,
  `Workexp` varchar(500) DEFAULT NULL,
  `Project` varchar(500) DEFAULT NULL,
  `About` varchar(500) DEFAULT NULL,
  `JbID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiesonal_data`
--

INSERT INTO `profiesonal_data` (`ProfID`, `Cname`, `Achievement`, `Workexp`, `Project`, `About`, `JbID`) VALUES
(1, 'Brandex', 'pramote to group leader', '5 years', 'Checking system development', 'LEO CLUB active member', 1),
(2, 'BOC', 'pramote to bank assitant', '3 years', 'Good teamworker', 'SESL club member', 2),
(3, 'MOBITEL', ' ', ' ', ' ', ' ', 3),
(4, 'Dailog', 'Creative Programmer', '2 years', ' ', 'IEEE Club member', 4),
(5, 'Mars', 'pramote to group leader', '7 years', ' ', ' ', 5),
(6, 'Arimac Lanka', 'Best programmer', '3 years', '', '', 6),
(7, 'Arimac Lanka', 'senior software engineer', '5 years', '', '', 7),
(8, 'SLT', 'Best Network devoloper', '5 years', 'Cheaking system development', 'CSSL Group member', 8),
(9, 'Brandex', '', '', '', '', 9),
(10, 'Dailog', 'pramote to group leader', '2 years', 'Good teamworker', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `RecID` int(11) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`RecID`, `FName`, `LName`, `Email`, `Address`, `UserID`) VALUES
(1, 'shehan', 'rashmika', 'shehnn667@gmail.com', 'No. 25, Main Street, Colombo 05', 21),
(2, 'kasun', 'chamara', 'kasuncc1267@gmail.com', 'No. 10A, Peradeniya Road, Kandy', 22),
(3, 'sugath', 'silva', 'sugath172@gmail.com', ' No. 15, Beach View Gardens, Negombo', 23),
(4, 'sadun', 'perera', 'sadun946@gmail.com', ' No. 7, Hillside Lane, Nuwara Eliya', 24),
(5, 'dasun', 'shanaka', 'dasunshaka8@gmail.com', 'Flat 2D, Rose Residency, Dehiwala', 25),
(6, 'Tharindu ', 'Perera', 'Tharindu334@gmail.com', 'No. 62, Temple Road, Jaffna', 26),
(7, 'Dilshan ', 'Fernando', 'Dilshan316@gmail.com', 'No. 8, Lake View Terrace, Anuradhapura', 27),
(8, 'Sanduni ', 'Bandara', 'Sanduni58@gmail.com', 'No. 19, River Bank Road, Matara', 28),
(9, 'Kavindu ', 'Ratnayake', 'Ratnayake@gmail.com', 'No. 12, Royal Gardens, Kegalle', 29),
(10, 'dasun', 'Karunaratne', 'dasun9956@gmail.com', 'No. 18, Beach Road, Hikkaduwa', 30);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_contact`
--

CREATE TABLE `recruiter_contact` (
  `RecID` int(11) NOT NULL,
  `Phone` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiter_contact`
--

INSERT INTO `recruiter_contact` (`RecID`, `Phone`) VALUES
(1, '0778899637'),
(2, '0769876543'),
(3, '0782345678'),
(4, '0718765432'),
(5, '0763456789'),
(6, '0776543210'),
(7, '0723456789'),
(8, '0767890123'),
(9, '0712345678'),
(10, '0778901234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `al_result`
--
ALTER TABLE `al_result`
  ADD PRIMARY KEY (`ALIndex`),
  ADD KEY `AL_Result_FK` (`JbID`);

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`JobPID`,`JbID`),
  ADD KEY `applyFK2` (`JbID`);

--
-- Indexes for table `background_check`
--
ALTER TABLE `background_check`
  ADD PRIMARY KEY (`BacgroundID`),
  ADD KEY `BackChekFK1` (`JbID`),
  ADD KEY `BackChekFK2` (`BcID`),
  ADD KEY `BackChekFK3` (`RecID`);

--
-- Indexes for table `background_cheker`
--
ALTER TABLE `background_cheker`
  ADD PRIMARY KEY (`BcID`),
  ADD KEY `BackChekerFK` (`UserID`);

--
-- Indexes for table `background_cheker_contact`
--
ALTER TABLE `background_cheker_contact`
  ADD PRIMARY KEY (`BcID`,`Phone`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `ComFK` (`UserID`);

--
-- Indexes for table `company_contact`
--
ALTER TABLE `company_contact`
  ADD PRIMARY KEY (`CID`,`Phone`);

--
-- Indexes for table `company_customer_support`
--
ALTER TABLE `company_customer_support`
  ADD PRIMARY KEY (`CcsID`),
  ADD KEY `CusSupFK3` (`CID`),
  ADD KEY `CusSupFK4` (`RecID`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`IntID`),
  ADD KEY `FK1_Interview` (`CID`),
  ADD KEY `FK2_Interview` (`JobPID`),
  ADD KEY `FK3_Interview` (`RecID`);

--
-- Indexes for table `jobSeeker_customer_support`
--
ALTER TABLE `jobSeeker_customer_support`
  ADD PRIMARY KEY (`JbcsID`),
  ADD KEY `CusSupFK1` (`JbID`),
  ADD KEY `CusSupFK2` (`RecID`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`JobPID`),
  ADD KEY `JpostFK` (`CID`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`JbID`),
  ADD KEY `job_Seeker_FK` (`UserID`);

--
-- Indexes for table `job_seeker_contact`
--
ALTER TABLE `job_seeker_contact`
  ADD PRIMARY KEY (`JbID`,`Phone`);

--
-- Indexes for table `ol_result`
--
ALTER TABLE `ol_result`
  ADD PRIMARY KEY (`OLIndex`),
  ADD KEY `OL_ResultFK` (`JbID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `payFK1` (`CID`),
  ADD KEY `payFK2` (`JobPID`);

--
-- Indexes for table `pending_job_post`
--
ALTER TABLE `pending_job_post`
  ADD PRIMARY KEY (`PndID`),
  ADD KEY `FK2_Pending_Job_Post` (`CID`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`PerID`),
  ADD KEY `Personal_FK` (`JbID`);

--
-- Indexes for table `personal_data_contact`
--
ALTER TABLE `personal_data_contact`
  ADD PRIMARY KEY (`PerID`);

--
-- Indexes for table `profiesonal_data`
--
ALTER TABLE `profiesonal_data`
  ADD PRIMARY KEY (`ProfID`),
  ADD KEY `Personal_DataFK` (`JbID`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`RecID`),
  ADD KEY `FK_Recruiter` (`UserID`);

--
-- Indexes for table `recruiter_contact`
--
ALTER TABLE `recruiter_contact`
  ADD PRIMARY KEY (`RecID`,`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `JobPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `background_check`
--
ALTER TABLE `background_check`
  MODIFY `BacgroundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `background_cheker`
--
ALTER TABLE `background_cheker`
  MODIFY `BcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `background_cheker_contact`
--
ALTER TABLE `background_cheker_contact`
  MODIFY `BcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_contact`
--
ALTER TABLE `company_contact`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_customer_support`
--
ALTER TABLE `company_customer_support`
  MODIFY `CcsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `IntID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobSeeker_customer_support`
--
ALTER TABLE `jobSeeker_customer_support`
  MODIFY `JbcsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `JobPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `JbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_seeker_contact`
--
ALTER TABLE `job_seeker_contact`
  MODIFY `JbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pending_job_post`
--
ALTER TABLE `pending_job_post`
  MODIFY `PndID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `PerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_data_contact`
--
ALTER TABLE `personal_data_contact`
  MODIFY `PerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profiesonal_data`
--
ALTER TABLE `profiesonal_data`
  MODIFY `ProfID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `RecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recruiter_contact`
--
ALTER TABLE `recruiter_contact`
  MODIFY `RecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `al_result`
--
ALTER TABLE `al_result`
  ADD CONSTRAINT `AL_Result_FK` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD CONSTRAINT `applyFK1` FOREIGN KEY (`JobPID`) REFERENCES `job_post` (`JobPID`),
  ADD CONSTRAINT `applyFK2` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `background_check`
--
ALTER TABLE `background_check`
  ADD CONSTRAINT `BackChekFK1` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`),
  ADD CONSTRAINT `BackChekFK2` FOREIGN KEY (`BcID`) REFERENCES `background_cheker` (`BcID`),
  ADD CONSTRAINT `BackChekFK3` FOREIGN KEY (`RecID`) REFERENCES `recruiter` (`RecID`);

--
-- Constraints for table `background_cheker`
--
ALTER TABLE `background_cheker`
  ADD CONSTRAINT `BackChekerFK` FOREIGN KEY (`UserID`) REFERENCES `account` (`UserID`);

--
-- Constraints for table `background_cheker_contact`
--
ALTER TABLE `background_cheker_contact`
  ADD CONSTRAINT `BackChekerConFK` FOREIGN KEY (`BcID`) REFERENCES `background_cheker` (`BcID`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `ComFK` FOREIGN KEY (`UserID`) REFERENCES `account` (`UserID`);

--
-- Constraints for table `company_contact`
--
ALTER TABLE `company_contact`
  ADD CONSTRAINT `ComcontactFK` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`);

--
-- Constraints for table `company_customer_support`
--
ALTER TABLE `company_customer_support`
  ADD CONSTRAINT `CusSupFK3` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`),
  ADD CONSTRAINT `CusSupFK4` FOREIGN KEY (`RecID`) REFERENCES `recruiter` (`RecID`);

--
-- Constraints for table `interview`
--
ALTER TABLE `interview`
  ADD CONSTRAINT `FK1_Interview` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`),
  ADD CONSTRAINT `FK2_Interview` FOREIGN KEY (`JobPID`) REFERENCES `job_post` (`JobPID`),
  ADD CONSTRAINT `FK3_Interview` FOREIGN KEY (`RecID`) REFERENCES `recruiter` (`RecID`);

--
-- Constraints for table `jobSeeker_customer_support`
--
ALTER TABLE `jobSeeker_customer_support`
  ADD CONSTRAINT `CusSupFK1` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`),
  ADD CONSTRAINT `CusSupFK2` FOREIGN KEY (`RecID`) REFERENCES `recruiter` (`RecID`);

--
-- Constraints for table `job_post`
--
ALTER TABLE `job_post`
  ADD CONSTRAINT `JpostFK` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`);

--
-- Constraints for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD CONSTRAINT `job_Seeker_FK` FOREIGN KEY (`UserID`) REFERENCES `account` (`UserID`);

--
-- Constraints for table `job_seeker_contact`
--
ALTER TABLE `job_seeker_contact`
  ADD CONSTRAINT `jobSeeker_contact_FK` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `ol_result`
--
ALTER TABLE `ol_result`
  ADD CONSTRAINT `OL_ResultFK` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payFK1` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`),
  ADD CONSTRAINT `payFK2` FOREIGN KEY (`JobPID`) REFERENCES `job_post` (`JobPID`);

--
-- Constraints for table `pending_job_post`
--
ALTER TABLE `pending_job_post`
  ADD CONSTRAINT `FK2_Pending_Job_Post` FOREIGN KEY (`CID`) REFERENCES `company` (`CID`);

--
-- Constraints for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD CONSTRAINT `Personal_FK` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `personal_data_contact`
--
ALTER TABLE `personal_data_contact`
  ADD CONSTRAINT `Personal_contactFK` FOREIGN KEY (`PerID`) REFERENCES `personal_data` (`PerID`);

--
-- Constraints for table `profiesonal_data`
--
ALTER TABLE `profiesonal_data`
  ADD CONSTRAINT `Personal_DataFK` FOREIGN KEY (`JbID`) REFERENCES `job_seeker` (`JbID`);

--
-- Constraints for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD CONSTRAINT `FK_Recruiter` FOREIGN KEY (`UserID`) REFERENCES `account` (`UserID`);

--
-- Constraints for table `recruiter_contact`
--
ALTER TABLE `recruiter_contact`
  ADD CONSTRAINT `FK_Recruiter_Contact` FOREIGN KEY (`RecID`) REFERENCES `recruiter` (`RecID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
