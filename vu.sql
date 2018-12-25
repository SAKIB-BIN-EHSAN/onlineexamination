-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 11:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vu`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `semester` text NOT NULL,
  `course_no` text NOT NULL,
  `course_title` text NOT NULL,
  `credit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`semester`, `course_no`, `course_title`, `credit`) VALUES
('sem_1', 'CSE_112', 'Computer Application Lab', 1),
('sem_1', 'PHY_112', 'Physics I Lab', 1),
('sem_2', 'CSE_122', 'Electrical Circuit Lab', 1),
('sem_2', 'CSE_124', 'Structured Programming Language Lab', 1.5),
('sem_3', 'CSE_134', 'Object Oriented Programming Lab', 1.5),
('sem_4', 'CSE_212', 'Data Structures Lab', 1.5),
('sem_4', 'CSE_214', 'Object Oriented Design and Design Patterns Lab', 1.5),
('sem_5', 'CSE_224', 'Electronic Devices and Circuits Lab', 1),
('sem_5', 'CSE_226', 'Algorithms Lab', 1.5),
('sem_6', 'CSE_232', 'Digital Logic Design Lab ', 1),
('sem_6', 'CSE_234', 'Computer Networks Lab', 1),
('sem_7', 'CSE_312', 'Numerical Method Lab', 1),
('sem_7', 'CSE_314', 'Database Management System Lab', 1.5),
('sem_8', 'CSE_324', 'Computer Architecture Lab', 1),
('sem_8', 'CSE_326', 'E-Commerce and Web Programming Lab', 1),
('sem_9', 'CSE_332', 'Operating System and System Programming Lab', 1),
('sem_9', 'CSE_334', 'Microprocessor and Assembly Language Lab', 1),
('sem_10', 'CSE_414', 'Artificial Intelligence Lab', 1),
('sem_10', 'CSE_416', 'Digital Signal Processing Lab', 1),
('sem_11', 'CSE_422', 'Computer Graphics Lab', 1),
('sem_11', 'CSE_424', 'Digital Image Processing Lab', 1),
('sem_11', 'CSE_426', 'Microcontroller,Computer Peripherals and Interfacing lab', 1),
('sem_12', 'CSE_432', 'Cryptography and Network Security Lab', 1),
('sem_12', 'CSE_434', 'Parrallel Processing and Distributed System Lab', 1),
('sem_12', 'CSE_436', 'Advance Database Management System Lab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE IF NOT EXISTS `ques` (
  `id` int(11) NOT NULL,
  `course_no` text NOT NULL,
  `semester` text NOT NULL,
  `q` text NOT NULL,
  `o_1` text NOT NULL,
  `o_2` text NOT NULL,
  `o_3` text NOT NULL,
  `o_4` text NOT NULL,
  `r` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `course_no`, `semester`, `q`, `o_1`, `o_2`, `o_3`, `o_4`, `r`) VALUES
(1, 'CSE_112', 'sem_1', 'Which of the following languages is more suited to a structured program?', 'PL/1', 'FORTRAN', 'BASIC', 'PASCAL', 'PASCAL'),
(2, 'CSE_112', 'sem_1', 'A computer assisted method for the recording and analyzing of existing or hypothetical systems is', 'Data transmission', 'Data flow', 'Data capture', 'Data processing', 'Data flow'),
(3, 'CSE_112', 'sem_1', 'The brain of any computer system is', 'ALU', 'Memory', 'CPU', 'Control unit', 'CPU'),
(4, 'CSE_112', 'sem_1', 'What difference does the 5th generation computer have from other generation computers?', 'Technological advancement', 'Scientific code', 'Object Oriented Programming', 'All of the above', 'Technological advancement'),
(5, 'CSE_112', 'sem_1', 'Which of the following computer language is used for artificial intelligence?', 'FORTRAN', 'PROLOG', 'C', 'COBOL', 'PROLOG'),
(6, 'CSE_112', 'sem_1', 'The tracks on a disk which can be accessed without repositioning the R/W heads is', 'Surface', 'Cylinder', 'Cluster', 'All of the above', 'Cylinder'),
(7, 'CSE_112', 'sem_1', 'What is computer?', 'computing device', 'paper', 'pencil', 'pen', 'computing device'),
(8, 'CSE_112', 'sem_1', 'A section of code to which control is transferred when a processor is interrupted is known as', 'M', 'SVC', 'IP', 'MDR', 'M'),
(9, 'CSE_112', 'sem_1', 'Which part interprets program instructions and initiate control operations.', 'Input', 'Storage unit', 'Logic unit', 'Control unit', 'Control unit'),
(10, 'CSE_112', 'sem_1', 'The binary system uses powers of', '2', '10', '8', '16', '2'),
(11, 'PHY_112', 'sem_1', 'Magnitude of displacement from initial position to final position is the', 'straight line', 'curved line', 'circle', 'total distance', 'straight line'),
(12, 'PHY_112', 'sem_1', 'What is the unit of Astronomical Distance ?', 'Light year', 'Angstrom', 'Weber', 'Lux', 'Light year'),
(13, 'PHY_112', 'sem_1', 'Energy possessed by a body in motion is called', 'Kinetic Energy', 'Potential Energy', 'Both A and B', 'None of these', 'Kinetic Energy'),
(14, 'PHY_112', 'sem_1', 'The electric motor converts', 'Electrical energy into mechanical energy', 'Mechanical energy into electrical energy', 'Electrical energy into light energy', 'None of these', 'Electrical energy into mechanical energy'),
(15, 'PHY_112', 'sem_1', 'Bolometer is used to measure', 'Frequency', 'Temperature', 'Velocity', 'Wavelength', 'Velocity'),
(16, 'PHY_112', 'sem_1', 'SI unit of pressure is', 'Ohms', 'Pascal', 'Joules', 'Watts', 'Pascal'),
(17, 'PHY_112', 'sem_1', 'Air is result of', 'Magnetic force', 'electric force', 'contact force', 'gravitational force', 'gravitational force'),
(18, 'PHY_112', 'sem_1', 'In symbols, pressure is equal to', 'A/F, where A is area and F is force', 'F/A, where F is force and A is area', 'd/F, where d is distance and F is force', 'F/d, where F is force and d is distance', 'F/A, where F is force and A is area'),
(19, 'PHY_112', 'sem_1', 'Pair of two hollow cups is termed as', 'Galileo hemispheres', 'Isaac hemispheres', 'Albert hemispheres', 'Magdeburg hemispheres', 'Magdeburg hemispheres'),
(20, 'PHY_112', 'sem_1', 'Smallest division on a rule is of', '1 cm', '1 m', '1 mm', '10 cm', '1 mm'),
(21, 'CSE_122', 'sem_2', 'Resistivity of a wire depends on', 'length', 'material', 'cross section area', 'none of the above.', 'material'),
(22, 'CSE_122', 'sem_2', 'When n resistances each of value r are connected in parallel', 'nx', 'rnx', 'x / n', 'n2 x.', 'n2 x.'),
(23, 'CSE_122', 'sem_2', 'Resistance of a wire is r ohms. The wire is stretched to double its length, then its resistance in ohms is', 'r / 2', '4 r', '2 r', 'r / 4.', '4r'),
(24, 'CSE_122', 'sem_2', 'A component which is used to close or break a circuit is', 'bulb', 'switch', 'wire', 'electric cell', 'switch'),
(25, 'CSE_122', 'sem_2', 'The diameter of the nucleus of an atom is of the order of', '10 -31 m', '10 -25 m', '10 -21 m', '10 -14m.', '10 -14m.'),
(26, 'CSE_122', 'sem_2', 'The mass of proton is roughly how many times the mass of an electron?', '184,000', '184,00', '184,0', '184', '184,0'),
(27, 'CSE_122', 'sem_2', 'The charge on an electron is known to be 1.6 x 10-19 coulomb. In a circuit the current flowing is 1 A.', '1.6 x 1019', ' 1.6 x 10-19', '0.625 x 1019', '0.625 x 1012.', '0.625 x 1019'),
(28, 'CSE_122', 'sem_2', 'Two bulbs marked 200 watt-250 volts and 100 watt-250 volts are joined in series to 250 volts supply. ', '33 watt', '67 watt', '100 watt', '300 watt.', '67 watt'),
(29, 'CSE_122', 'sem_2', 'Ampere second could be the unit of', 'power', 'conductance', 'energy', 'charge.', 'charge.'),
(30, 'CSE_122', 'sem_2', 'Which of the following is not the same as watt?', 'joule/sec', 'amperes/volt', 'amperes x volts', '( amperes )2 x ohm.', 'amperes/volt'),
(41, 'CSE_134', 'sem_3', 'Choose the operator which cannot be overloaded.', '/', '()', '::', '%', '::'),
(42, 'CSE_134', 'sem_3', 'Pick up the valid declaration for overloading ++ in postfix form where T is the class name.\n', 'T operator++();', 'T operator++(int);', ' T& operator++();', ' T& operator++(int);', 'T operator++(int);'),
(43, 'CSE_134', 'sem_3', ' The copy constructor is executed on', 'Assigned one object to another object at its creation', ' When objects are sent to function using call by value mechanism', ' When the function return an object', 'All the above.', 'All the above.'),
(44, 'CSE_134', 'sem_3', 'With respective to streams >> (operator) is called as', 'Insertion operator', 'Extraction operator', 'Right shift operator', 'Left shift operator', 'Extraction operator'),
(45, 'CSE_134', 'sem_3', ' What is the built in library function to compare two strings?', 'string_cmp()', 'strcmp()', 'equals()', 'str_compare()', 'strcmp()'),
(46, 'CSE_134', 'sem_3', 'A variable is/are', 'String that varies during program execution', ' A portion of memory to store a determined value', ' Those numbers that are frequently required in programs', ' None of these', ' A portion of memory to store a determined value'),
(47, 'CSE_134', 'sem_3', 'Which of the following can not be used as identifiers?', 'Letters', 'Digits', 'Underscores', 'spaces', 'spaces'),
(48, 'CSE_134', 'sem_3', 'Which of the following identifiers is invalid?', '\n    Papername', ' Writername', 'Typename', '   Printname', '   Printname'),
(49, 'CSE_134', 'sem_3', 'Which of the following can not be used as valid identifier?', 'Bitand', 'Bittand', ' Biand', ' Band', ' Biand'),
(50, 'CSE_134', 'sem_3', 'Which of the following is called non-graphic character?', 'bell', 'backspace', 'vertical tab', 'All the above', 'All the above'),
(51, 'CSE_124', 'sem_2', 'C99 standard guarantees uniqueness of ____ characters for internal names.', '31', '63', '12', '14', '63'),
(52, 'CSE_124', 'sem_2', ' C99 standard guarantess uniqueness of _____ characters for external names.', '31', '14', '6', '12', '14'),
(53, 'CSE_124', 'sem_2', 'Which of the following is not a valid variable name declaration?', 'int __a3;', 'int __3a;', 'int __A3;', 'None of the mentioned', 'None of the mentioned'),
(54, 'CSE_124', 'sem_2', 'Which of the following is not a valid variable name declaration?', 'int _a3;', 'int a_3;', 'int 3_a;', 'int _3a', 'int 3_a;'),
(55, 'CSE_124', 'sem_2', 'Variable names beginning with underscore is not encouraged. Why?', 'It is not standardized', 'To avoid conflicts since assemblers and loaders use such names', 'To avoid conflicts since library routines use such names', 'To avoid conflicts with environment variables of an operating system', 'To avoid conflicts since library routines use such names'),
(56, 'CSE_124', 'sem_2', ' All keywords in C are in', 'LowerCase letters', 'UpperCase letters', 'CamelCase letters', 'None of the mentioned', 'LowerCase letters'),
(57, 'CSE_124', 'sem_2', ' Variable name resolving (number of significant characters for uniqueness of variable) depends on', 'Compiler and linker implementations', 'Assemblers and loaders implementations', 'C language', 'None of the mentioned', 'Compiler and linker implementations'),
(58, 'CSE_124', 'sem_2', 'Which of the following is not a valid C variable name?', 'int number;', 'float rate;', 'int variable_count;', 'int $main;', 'int $main;'),
(59, 'CSE_124', 'sem_2', 'Which of the following is true for variable names in C?', 'They can contain alphanumeric characters', 'It is not an error to declare a variable', 'Variable names cannot start with a digit', 'Variable can be of any length', 'Variable names cannot start with a digit'),
(60, 'CSE_124', 'sem_2', 'The format identifier %i is also used for _____ data type?', 'char', 'int', 'float', 'double', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `ranklist`
--

CREATE TABLE IF NOT EXISTS `ranklist` (
  `exam_no` int(11) NOT NULL,
  `id` tinytext NOT NULL,
  `semester` tinytext NOT NULL,
  `course_no` tinytext NOT NULL,
  `obtain_marks` float NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranklist`
--

INSERT INTO `ranklist` (`exam_no`, `id`, `semester`, `course_no`, `obtain_marks`, `rank`) VALUES
(1, '133019343', 'sem_1', 'CSE_112', 2.5, 2),
(2, '133019343', 'sem_1', 'PHY_112', 3.75, 1),
(3, '1452356', 'sem_1', 'CSE_112', 3.75, 1),
(4, '133019343', 'sem_1', 'PHY_112', 1.75, 2),
(5, '1134355', 'sem_1', 'PHY_112', -2.5, 3),
(6, '1134355', 'sem_3', 'CSE_134', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE IF NOT EXISTS `submission` (
  `exam_no` int(11) NOT NULL,
  `id` tinytext NOT NULL,
  `course_no` tinytext NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `not_answered` int(11) NOT NULL,
  `obtain_marks` float NOT NULL,
  `rank` int(11) NOT NULL,
  `sub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`exam_no`, `id`, `course_no`, `correct`, `wrong`, `not_answered`, `obtain_marks`, `rank`, `sub_date`) VALUES
(1, '133019343', 'CSE_112', 3, 2, 0, 2.5, 0, '2017-12-10 14:26:19'),
(2, '133019343', 'PHY_112', 4, 1, 0, 3.75, 0, '2017-12-10 14:35:46'),
(3, '1452356', 'CSE_112', 4, 1, 0, 3.75, 0, '2017-12-10 14:55:37'),
(4, '133019343', 'PHY_112', 3, 5, 2, 1.75, 0, '2018-01-14 09:53:55'),
(5, '1134355', 'PHY_112', 0, 10, 0, -2.5, 0, '2018-01-18 21:33:07'),
(6, '1134355', 'CSE_134', 2, 8, 0, 0, 0, '2018-01-18 22:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` tinytext,
  `id` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `semester` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `exam` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `not_answered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id`, `password`, `semester`, `email`, `phone`, `reg_date`, `exam`, `correct`, `wrong`, `not_answered`) VALUES
('ADMIN', '1000000001', 'admin102030', '', 'admin@gmail.com', '43468923873', '2017-11-15 19:52:31', 0, 0, 0, 0),
('Rahim Khan', '133019343', '2345', 'Second', 'rahim@yahoo.com', '8675', '2018-01-14 09:53:55', 3, 10, 8, 2),
('Karim ahmed khan', '1452356', '8907', 'Nineth', 'karim@gmail.com', '824987', '2017-12-10 14:55:37', 1, 4, 1, 0),
('Lima Khatun', '1134355', '4567', 'Fourth', 'lima@yahoo.com', '3379837', '2018-01-18 22:24:07', 2, 2, 18, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranklist`
--
ALTER TABLE `ranklist`
  ADD PRIMARY KEY (`exam_no`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`exam_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ranklist`
--
ALTER TABLE `ranklist`
  MODIFY `exam_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `exam_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
