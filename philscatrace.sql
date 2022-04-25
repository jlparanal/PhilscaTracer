-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 06:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `philscatrace`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `image_url` text NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `description`) VALUES
(23, 'IMG-621083a4df2647.28244358.jpg', 'Hello World');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(255) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `age` int(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `gmail`, `address`, `age`, `status`) VALUES
(1, 'example2gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 21, 'Single'),
(2, 'helo@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 22, 'Married'),
(3, 'hI@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 23, 'Single'),
(4, 'miss@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 23, 'Single'),
(5, 'aj@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 24, 'Widowed'),
(6, 'john@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 22, 'Single'),
(7, '2ndsample@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 23, 'Single'),
(8, 'hhh@gmail.com', 'blk 228 lot 6 bignay st pembo makati city', 22, 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `survey0`
--

CREATE TABLE `survey0` (
  `survey_id` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey0`
--

INSERT INTO `survey0` (`survey_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Female'),
(5, 'Male'),
(6, 'Male'),
(7, 'Male'),
(8, 'Male'),
(9, 'Male'),
(10, 'Male'),
(11, 'Male'),
(12, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `survey0_1`
--

CREATE TABLE `survey0_1` (
  `survey_id` int(11) NOT NULL,
  `yesno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey0_1`
--

INSERT INTO `survey0_1` (`survey_id`, `yesno`) VALUES
(1, 'Yes'),
(2, 'No'),
(3, 'Yes'),
(4, 'Yes'),
(5, 'Yes'),
(6, 'Yes'),
(7, 'Yes'),
(8, 'Yes'),
(9, 'Yes'),
(10, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `survey1`
--

CREATE TABLE `survey1` (
  `ifys` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey1`
--

INSERT INTO `survey1` (`ifys`) VALUES
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a'),
('n/a');

-- --------------------------------------------------------

--
-- Table structure for table `survey2`
--

CREATE TABLE `survey2` (
  `survey_id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey2`
--

INSERT INTO `survey2` (`survey_id`, `language`) VALUES
(14, 'Javascript'),
(15, 'Javascript'),
(16, 'Python'),
(17, 'HTML'),
(18, 'CSS'),
(19, 'Javascript'),
(20, 'Javascript'),
(21, 'SQLandMYSQL'),
(22, 'C#'),
(23, 'C++'),
(24, 'PHP'),
(25, 'Javascript'),
(26, 'PHP'),
(27, 'PHP'),
(28, 'CSS'),
(29, 'HTML'),
(30, 'Javascript'),
(31, 'SQLandMYSQL'),
(32, 'Javascript'),
(33, 'Javascript'),
(34, 'Javascript'),
(35, 'Javascript'),
(36, 'Javascript');

-- --------------------------------------------------------

--
-- Table structure for table `survey3`
--

CREATE TABLE `survey3` (
  `survey_id` int(11) NOT NULL,
  `data1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey3`
--

INSERT INTO `survey3` (`survey_id`, `data1`) VALUES
(1, 'Yes'),
(2, 'Yes'),
(3, 'No'),
(4, 'Yes'),
(5, 'No'),
(6, 'No'),
(7, 'Yes'),
(8, 'Yes'),
(9, 'Yes'),
(10, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `survey4`
--

CREATE TABLE `survey4` (
  `answer` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey4`
--

INSERT INTO `survey4` (`answer`, `company`) VALUES
('No job opportunity', 'n/a'),
('Advance studies', 'PHILSCA'),
('Lack of Work Experience', 'n/a'),
('Advance studies', 'PHILSCA'),
('No job opportunity', 'n/a'),
('Not applicable, I am employed.', 'n/a'),
('Not applicable, I am employed.', 'PHILSCA');

-- --------------------------------------------------------

--
-- Table structure for table `survey5`
--

CREATE TABLE `survey5` (
  `survey_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey5`
--

INSERT INTO `survey5` (`survey_id`, `status`) VALUES
(1, 'Full Time/Permanent/Regular '),
(2, 'Full Time/Permanent/Regular '),
(3, 'Probationary'),
(4, 'Full Time/Permanent/Regular '),
(5, 'Part-Time'),
(6, 'Not applicable'),
(7, 'Full Time/Permanent/Regular '),
(8, 'Full Time/Permanent/Regular '),
(9, 'Not applicable'),
(10, 'Probationary'),
(11, 'Full Time/Permanent/Regular '),
(12, 'Not applicable'),
(13, 'Full Time/Permanent/Regular ');

-- --------------------------------------------------------

--
-- Table structure for table `survey6`
--

CREATE TABLE `survey6` (
  `survey_id` int(11) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey6`
--

INSERT INTO `survey6` (`survey_id`, `place`) VALUES
(1, 'Local'),
(2, 'Local'),
(3, 'Abroad'),
(4, 'Local'),
(5, 'Abroad'),
(6, 'Local'),
(7, 'Local'),
(8, 'Local'),
(9, 'Local'),
(10, 'Abroad');

-- --------------------------------------------------------

--
-- Table structure for table `survey7`
--

CREATE TABLE `survey7` (
  `answer` varchar(100) NOT NULL,
  `answer1` varchar(100) NOT NULL,
  `answer2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey7`
--

INSERT INTO `survey7` (`answer`, `answer1`, `answer2`) VALUES
('', 'Less than a month ', '--Option--'),
('', 'Less than a month ', ' Recommended by Faculty/Dean '),
('Not applicable', 'Not applicable', 'Not applicable'),
('', '1-6 months', 'Personally applied for the job'),
('', 'Less than a month ', 'Personally applied for the job'),
('Not applicable', 'Not applicable', 'Not applicable'),
('No', '1-6 months', ' Recommended by Faculty/Dean ');

-- --------------------------------------------------------

--
-- Table structure for table `survey8`
--

CREATE TABLE `survey8` (
  `survey_id` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey8`
--

INSERT INTO `survey8` (`survey_id`, `degree`) VALUES
(1, 'Yes'),
(2, 'No'),
(3, 'Yes'),
(4, 'No'),
(5, 'No'),
(6, 'Yes'),
(7, 'Yes'),
(8, 'No'),
(9, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `survey9`
--

CREATE TABLE `survey9` (
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey9`
--

INSERT INTO `survey9` (`answer`) VALUES
('The salary is low '),
('Other'),
('Could not get a job in my field of specialization '),
('Could not get a job in my field of specialization '),
('Could not get a job in my field of specialization '),
('Other'),
('Other');

-- --------------------------------------------------------

--
-- Table structure for table `survey10`
--

CREATE TABLE `survey10` (
  `survey_id` int(11) NOT NULL,
  `language1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey10`
--

INSERT INTO `survey10` (`survey_id`, `language1`) VALUES
(1, 'Javascript'),
(2, 'Python'),
(3, 'Python'),
(4, 'Javascript'),
(5, 'CSS'),
(6, 'CSS'),
(7, 'PHP'),
(8, 'SQLandMYSQL'),
(9, 'Javascript'),
(10, 'SQLandMYSQL'),
(11, 'C#'),
(12, 'C#'),
(13, 'C++'),
(14, 'C++'),
(15, 'Python'),
(16, 'C++'),
(17, 'Javascript'),
(18, 'Javascript'),
(19, 'Javascript'),
(20, 'Python'),
(21, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `survey11`
--

CREATE TABLE `survey11` (
  `survey_id` int(11) NOT NULL,
  `rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey11`
--

INSERT INTO `survey11` (`survey_id`, `rating`) VALUES
(1, 'Strongly Irrelevant'),
(2, 'Strongly Irrelevant'),
(3, 'Irrelevant'),
(4, 'Relevant'),
(5, 'Strongly Relevant'),
(6, 'Strongly Irrelevant'),
(7, 'Relevant'),
(8, 'Strongly Relevant'),
(9, 'Strongly Relevant'),
(10, 'Strongly Irrelevant'),
(11, 'Strongly Irrelevant'),
(12, 'Strongly Relevant');

-- --------------------------------------------------------

--
-- Table structure for table `survey12`
--

CREATE TABLE `survey12` (
  `survey_id` int(11) NOT NULL,
  `rating1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey12`
--

INSERT INTO `survey12` (`survey_id`, `rating1`) VALUES
(1, 'Irrelevant'),
(2, 'Strongly Irrelevant'),
(3, 'Strongly Irrelevant'),
(4, 'Relevant'),
(5, 'Relevant'),
(6, 'Strongly Relevant'),
(7, 'Strongly Irrelevant'),
(8, 'Relevant'),
(9, 'Strongly Relevant'),
(10, 'Relevant'),
(11, 'Strongly Irrelevant'),
(12, 'Strongly Irrelevant'),
(13, 'Strongly Relevant');

-- --------------------------------------------------------

--
-- Table structure for table `survey13`
--

CREATE TABLE `survey13` (
  `survey_id` int(11) NOT NULL,
  `rating2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey13`
--

INSERT INTO `survey13` (`survey_id`, `rating2`) VALUES
(1, 'Strongly Irrelevant'),
(2, 'Irrelevant'),
(3, 'Relevant'),
(4, 'Relevant'),
(5, 'Irrelevant'),
(6, 'Strongly Relevant'),
(7, 'Strongly Irrelevant'),
(8, 'Strongly Relevant'),
(9, 'Strongly Relevant'),
(10, 'Strongly Irrelevant'),
(11, 'Relevant'),
(12, 'Strongly Relevant'),
(13, 'Relevant'),
(14, 'Strongly Irrelevant'),
(15, 'Strongly Irrelevant'),
(16, 'Strongly Relevant');

-- --------------------------------------------------------

--
-- Table structure for table `survey14`
--

CREATE TABLE `survey14` (
  `survey_id` int(11) NOT NULL,
  `rating3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey14`
--

INSERT INTO `survey14` (`survey_id`, `rating3`) VALUES
(1, 'Strongly Irrelevant'),
(2, 'Irrelevant'),
(3, 'Irrelevant'),
(4, 'Relevant'),
(5, 'Relevant'),
(6, 'Relevant'),
(7, 'Strongly Relevant'),
(8, 'Strongly Irrelevant'),
(9, 'Strongly Relevant'),
(10, 'Strongly Relevant'),
(11, 'Strongly Relevant'),
(12, 'Strongly Irrelevant'),
(13, 'Relevant'),
(14, 'Strongly Relevant'),
(15, 'Strongly Relevant'),
(16, 'Strongly Irrelevant'),
(17, 'Strongly Irrelevant'),
(18, 'Strongly Relevant');

-- --------------------------------------------------------

--
-- Table structure for table `survey15`
--

CREATE TABLE `survey15` (
  `survey_id` int(11) NOT NULL,
  `rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey15`
--

INSERT INTO `survey15` (`survey_id`, `rating`) VALUES
(1, 'Very Poor'),
(2, 'Poor'),
(3, 'Very Poor'),
(4, 'High'),
(5, 'Very High'),
(6, 'Very High'),
(7, 'Very Poor'),
(8, 'Very High'),
(9, 'Very High');

-- --------------------------------------------------------

--
-- Table structure for table `survey16`
--

CREATE TABLE `survey16` (
  `survey_id` int(11) NOT NULL,
  `rating1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey16`
--

INSERT INTO `survey16` (`survey_id`, `rating1`) VALUES
(1, 'Very Poor'),
(2, 'Poor'),
(3, 'Very Poor'),
(4, 'High'),
(5, 'Very High'),
(6, 'Very High'),
(7, 'Very Poor'),
(8, 'Very High'),
(9, 'Very High');

-- --------------------------------------------------------

--
-- Table structure for table `survey17`
--

CREATE TABLE `survey17` (
  `survey_id` int(11) NOT NULL,
  `rating2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey17`
--

INSERT INTO `survey17` (`survey_id`, `rating2`) VALUES
(2, 'Very Poor'),
(3, 'Poor'),
(4, 'Very Poor'),
(5, 'Very Poor'),
(6, 'High'),
(7, 'Very High'),
(8, 'Very Poor'),
(9, 'Very Poor'),
(10, 'Very High'),
(11, 'Very High');

-- --------------------------------------------------------

--
-- Table structure for table `survey111`
--

CREATE TABLE `survey111` (
  `survey_id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey111`
--

INSERT INTO `survey111` (`survey_id`, `year`) VALUES
(1, '2017'),
(2, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `fname`, `mname`, `lname`, `course`, `section`, `batch`, `email`, `username`, `password`, `role_as`, `status`, `created_at`) VALUES
(1, 'Romsan', 'C', 'ParaÃ±al', 'BSAIT', '4-3', '2019-2020', 'paranalromsan@gmail.com', '11819-013723', 'user', 1, 0, '2022-01-20 09:40:25'),
(2, 'Martin', 'A', 'Perez', 'BSAIT', '4-3', '2019-2020', 'Martin@gmail.com', '11819-013700', 'sample', 0, 0, '2022-01-20 15:09:49'),
(4, 'Aj', 'A', 'Guiriba', 'BSAIT', '4-3', '2019-2020', 'aj@gmail.com', '11819-013721', 'hello', 0, 0, '2022-02-19 03:24:00'),
(5, 'barry', 'V', 'Valenzuela', 'BSAIT', '4-3', '2019-2020', 'barry@gmail.com', '11819-013720', 'hello1', 0, 0, '2022-02-19 05:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey0`
--
ALTER TABLE `survey0`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey0_1`
--
ALTER TABLE `survey0_1`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey2`
--
ALTER TABLE `survey2`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey3`
--
ALTER TABLE `survey3`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey5`
--
ALTER TABLE `survey5`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey6`
--
ALTER TABLE `survey6`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey8`
--
ALTER TABLE `survey8`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey10`
--
ALTER TABLE `survey10`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey11`
--
ALTER TABLE `survey11`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey12`
--
ALTER TABLE `survey12`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey13`
--
ALTER TABLE `survey13`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey14`
--
ALTER TABLE `survey14`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey15`
--
ALTER TABLE `survey15`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey16`
--
ALTER TABLE `survey16`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey17`
--
ALTER TABLE `survey17`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey111`
--
ALTER TABLE `survey111`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `survey0`
--
ALTER TABLE `survey0`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `survey0_1`
--
ALTER TABLE `survey0_1`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey2`
--
ALTER TABLE `survey2`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `survey3`
--
ALTER TABLE `survey3`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey5`
--
ALTER TABLE `survey5`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `survey6`
--
ALTER TABLE `survey6`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey8`
--
ALTER TABLE `survey8`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survey10`
--
ALTER TABLE `survey10`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `survey11`
--
ALTER TABLE `survey11`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `survey12`
--
ALTER TABLE `survey12`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `survey13`
--
ALTER TABLE `survey13`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `survey14`
--
ALTER TABLE `survey14`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `survey15`
--
ALTER TABLE `survey15`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survey16`
--
ALTER TABLE `survey16`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survey17`
--
ALTER TABLE `survey17`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `survey111`
--
ALTER TABLE `survey111`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
