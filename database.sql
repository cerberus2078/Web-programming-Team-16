/* Sara's database
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 21, 2023 at 09:09 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



--
-- Database: `festevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE `new_user` (
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `username` varchar(90) NOT NULL,
  `userID` int NOT NULL,
  `password` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_user`
--
ALTER TABLE `new_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_user`
--
ALTER TABLE `new_user`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 08:35 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team16`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobno` int NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `fname`, `lname`, `email`, `mobno`, `message`) VALUES
(1, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 415746780, 'hello'),
(2, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 415746780, 'hello'),
(3, 'gngnj', 'fhfdhd', 'bdfdbf@5yu', 57352, 'mfmngj'),
(4, 'mihaan', 'rathod', 'nikita.22001@student.hamk.fi', 511532154, 'jkvbjlbubo'),
(5, 'honey', 'sanagi', 'honey@gmail.com', 57352, 'hello'),
(6, 'honey', 'sanagi', 'honey@gmail.com', 57352, 'hello'),
(7, 'kush', 'rathod', 'kushrathod17@gmail.com', 123456789, 'hi'),
(8, 'drashti', 'suthariya', 'drashti@gmail.com', 57352, 'hello'),
(9, 'drashti', 'suthariya', 'drashti@gmail.com', 57352, 'hello'),
(10, 'drashti', 'suthariya', 'drashti@gmail.com', 57352, 'hello'),
(11, 'drashti', 'suthariya', 'drashti@gmail.com', 57352, 'hello'),
(12, 'Mihaan', 'Rathod', 'mihaan29@gmail.com', 57352, 'hello'),
(13, 'Mihaan', 'Rathod', 'mihaan29@gmail.com', 57352, 'hello'),
(14, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(15, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(16, 'abc', 'abc', 'abc@gmail.com', 57352, 'hello'),
(17, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(18, 'Vaishali', 'Vaghela', 'vaishali@gmail.com', 415746780, 'hello'),
(19, 'Kush', 'Rathod', 'kushrathod17@gmail.com', 145681237, 'hello'),
(20, 'Kush', 'Rathod', 'kushrathod17@gmail.com', 145681237, 'hello'),
(21, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 573526746, 'hello'),
(22, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 573526746, 'hello'),
(23, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 184154842, 'hello'),
(24, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 184154842, 'hello'),
(25, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 184154842, 'hello'),
(26, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 184154842, 'hello'),
(27, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(28, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(29, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(30, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(31, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(32, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hello'),
(33, 'Nikita', 'Solanki', 'nikita.solanki2211@gmail.com', 57352, 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 08:44 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `events` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`events`, `fname`, `lname`, `email`, `date`) VALUES
('Festival', 'Parth', 'Patel', 'ASDA@ASD.COM', '2023-03-02'),
('Festival', 'parth', 'Patel', 'asdas@123.com', '2023-03-17'),
('Festival', 'Parth', 'patel', 'asdcc@gmai.com', '2023-03-22'),
('Festival', 'parth', 'Patel', 'asdcc@gmail.com', '2023-03-10'),
('Festival', 'Parth', 'htfh', 'chhayashailav@gmail.com', '2023-03-10'),
('Festival', 'parth', 'Patel', 'jackpatel5591@gmail.com', '2023-03-09'),
('Festival', 'parth', 'patel', 'parth.patel@student.hamk.in', '2023-03-24'),
('Festival', 'parth', 'patel', 'parth22000@student.hamk.fi', '2023-03-25'),
('Concert', 'parth', 'patel', 'parthpatel1410@gmail.com', '2023-03-02'),
('Festival', 'parth', 'patel', 'parthpatel1410@yahoo.com', '2023-03-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
