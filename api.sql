-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 04:44 PM
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
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `regno` text NOT NULL,
  `subject` text NOT NULL,
  `marks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`username`, `password`, `regno`, `subject`, `marks`) VALUES
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'SW50ZXJuZXQgUHJvZ3JhbW1pbmcgYW5kIEFwcGxpY2F0aW9ucw==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'T2JqZWN0IE9yaWVudGVkIFByb2dyYW1taW5n', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'RGlzdHJpYnV0ZWQgRGF0YWJhc2Vz', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'RGlzdHJpYnV0ZWQgQ29tcHV0aW5nIFN5c3RlbXM=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'V2ViIERlc2lnbg==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'UmVzZWFyY2ggTWV0aG9kb2xvZ3k=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'T3BlcmF0aW5nIFN5c3RlbXM=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'V2lyZWxlc3MgQ29tbXVuaWNhdGlvbg==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'RW50cmVwcmVuZXVyc2hpcCA=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'U3lzdGVtcyBBbmFseXNpcyBhbmQgRGVzaWdu', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'SW5mb3JtYXRpb24gU2VjdXJpdHk=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDBfMjAyMA==', 'QXJ0aWZpY2lhbCBJbnRlbGxpZ2VuY2U=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'SW50ZXJuZXQgUHJvZ3JhbW1pbmcgYW5kIEFwcGxpY2F0aW9ucw==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'T2JqZWN0IE9yaWVudGVkIFByb2dyYW1taW5n', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'RGlzdHJpYnV0ZWQgRGF0YWJhc2Vz', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'RGlzdHJpYnV0ZWQgQ29tcHV0aW5nIFN5c3RlbXM=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'V2ViIERlc2lnbg==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'UmVzZWFyY2ggTWV0aG9kb2xvZ3k=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'T3BlcmF0aW5nIFN5c3RlbXM=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'V2lyZWxlc3MgQ29tbXVuaWNhdGlvbg==', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'RW50cmVwcmVuZXVyc2hpcCA=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'U3lzdGVtcyBBbmFseXNpcyBhbmQgRGVzaWdu', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'SW5mb3JtYXRpb24gU2VjdXJpdHk=', 'MjA='),
('TEST', '1234', 'QkNTXzAwNDNfMjAyMA==', 'QXJ0aWZpY2lhbCBJbnRlbGxpZ2VuY2U=', 'MjA=');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
