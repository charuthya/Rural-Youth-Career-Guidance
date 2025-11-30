-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 03:30 AM
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
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, 'Which planet is known as the Red Planet?', 'Venus', 'Mars', 'Jupiter', 'Mercury', 'Mars'),
(3, 'Who wrote \"Romeo and Juliet\"?', 'Charles Dickens', 'Jane Austen', 'William Shakespeare', 'Mark Twain', 'William Shakespeare'),
(4, 'What is the largest mammal?', 'Elephant', 'Giraffe', 'Blue whale', 'Lion', 'Blue whale'),
(5, 'What is the chemical symbol for gold?', 'Ag', 'Au', 'Hg', 'Pb', 'Au'),
(6, 'What is the capital of France?', 'Berlin', 'Madrid', 'Paris', 'Rome', 'Paris'),
(7, 'Which planet is known as the Red Planet?', 'Venus', 'Mars', 'Jupiter', 'Mercury', 'Mars'),
(8, 'What does the following C statement do? int *ptr = (int *)malloc(sizeof(int));', 'Declares', 'Allocates', 'Casts', 'Frees', 'Allocates'),
(9, 'What is the output of the following code? printf(\"%d\", sizeof(float));', '4', '8', '2', 'Dependent', '4'),
(10, 'What does the keyword volatile indicate in C?', 'Initialized', 'Modified', 'Accessed', 'Unexpected', 'Unexpected'),
(11, 'Purpose of \'break\' in switch-case?', 'Exit', 'Jump', 'Continue', 'Return', 'Exit'),
(12, 'Difference between ++i and i++?', 'Same', 'IncrementBefore', 'IncrementAfter', 'Increment2', 'IncrementBefore'),
(13, 'Result of x = 5, y = 10; x = x ^ y; y = x ^ y; x = x ^ y;', '10,5', '5,10', '15,10', '10,15', '10,5'),
(14, 'Dangling pointer?', 'Deallocated', 'Function', 'Constant', 'Variable', 'Deallocated'),
(15, 'Output of int i = -3; printf(\"%u\", i);', '4294967293', '3', '4294967295', '65533', '4294967293'),
(16, 'Meaning of \'static\' in C?', 'CannotModify', 'Initialized', 'StaticMemory', 'Constant', 'StaticMemory'),
(17, 'Purpose of \'const\' in C?', 'Constant', 'Variable', 'Pointer', 'Function', 'Constant'),
(18, 'Output of i = 5, j = 10; printf(\"%d\", i+++j);', '15', '16', '17', 'Error', '15'),
(19, 'Function atoi()?', 'ToString', 'ToInt', 'ASCII', 'FloatToString', 'ToInt'),
(20, 'Result of int arr[5] = {1, 2, 3, 4, 5}; printf(\"%d\", arr[10]);', '0', '1', 'Random', 'Error', 'Random'),
(21, 'Purpose of \'register\' in C?', 'Memory', 'Storage', 'Variable', 'Function', 'Storage'),
(22, 'Output of char str[] = \"Hello\"; printf(\"%c\", str[5]);', 'H', 'e', 'o', 'Error', 'o'),
(23, 'Meaning of \'inline\' in C?', 'NotInlined', 'Inlined', 'DeclaredInline', 'DeclaredStatic', 'Inlined'),
(24, 'Output of int i = 5, j = 10; printf(\"%d\", i+++j);', '15', '16', '17', 'Error', '15'),
(25, 'Meaning of \'const\' with pointers?', 'PointerConstant', 'ValueConstant', 'PointerNull', 'FunctionConstant', 'ValueConstant'),
(26, 'Output of int x = 3, y = 4; printf(\"%d\", x+++y);', '7', '8', '9', 'Error', '7'),
(27, 'Function strcpy()?', 'Copy', 'Compare', 'Concatenate', 'Length', 'Copy'),
(28, 'Output of int x = 5; printf(\"%d\", x << 1);', '10', '5', '20', 'Error', '10'),
(29, 'Meaning of \'extern\' in C?', 'DeclaredCurrent', 'Initialized', 'DeclaredOther', 'Constant', 'DeclaredOther'),
(30, 'Output of char *str = \"Hello\"; printf(\"%c\", *str++);', 'H', 'e', 'l', 'o', 'H'),
(31, 'Purpose of \'void\' in C?', 'Empty', 'Variable', 'ReturnType', 'Function', 'ReturnType'),
(32, 'Output of int x = 10, y = 20; printf(\"%d\", x & y);', '0', '10', '20', '30', '0'),
(33, 'Function strstr()?', 'Substring', 'Compare', 'Concatenate', 'Length', 'Substring'),
(34, 'Output of int x = 5, y = 10; printf(\"%d\", x | y);', '5', '10', '15', '0', '15'),
(35, 'Meaning of \'volatile\' in C?', 'Initialized', 'NotModified', 'Accessed', 'ChangeUnexpected', 'ChangeUnexpected'),
(36, 'Output of int x = 5; printf(\"%d\", ~x);', '-5', '0', '5', 'Error', '-6'),
(37, 'Function isdigit()?', 'Digit', 'Alphabetic', 'Alphanumeric', 'Punctuation', 'Digit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
