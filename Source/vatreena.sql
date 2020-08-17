-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 12:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vatreena`
--

-- --------------------------------------------------------

--
-- Table structure for table `aply`
--

CREATE TABLE `aply` (
  `id` int(14) NOT NULL,
  `drsmkr_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `byer_id` int(11) NOT NULL,
  `atlnm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dtls` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pric` int(6) NOT NULL,
  `cal` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aply`
--

INSERT INTO `aply` (`id`, `drsmkr_id`, `order_id`, `byer_id`, `atlnm`, `dtls`, `pric`, `cal`) VALUES
(10, 68, 22, 66, 'dddd', 'Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·', 212, '344444444444444432'),
(11, 68, 22, 66, 'ddddoooo', 'Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·Ù…Ù†ØªØª Ø§Ù„Ø¨Ø§Ù„Ø¨ Ø¨ÙŠØ¨ÙŠØ³ Ø§Ù„ÙØºÙÙ†Øª ØªØ§Ø©Ù‰Ù„Ø§Ù„Ø§Ø¡ Ø¨ÙÙ‚Ø«ÙŠ Ù‡ Ø®98Ø®Ù‡Ø¹Ù‡Ø¹ ÙƒÙ† Ø§Ù‰Ù†ØªØ§ØªØ§Ù„ØºÙÙ‚ÙØ¨Ù„Ø§ Ø®88Ø®Ù‡  Ø«Øµ5 ÙƒØ­0 Ø¹Ù‚ØµØ« Ø­Ø®ÙƒØ·v', 32121, '87876756'),
(12, 67, 52, 66, 'koko', 'usr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_id', 1212, '10190723765'),
(13, 67, 49, 66, 'koko', 'usr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idusr_idus', 111111, '10190723765'),
(14, 67, 31, 66, 'koko', 'regovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovern', 3242, '10190723765'),
(15, 67, 29, 66, 'fashion', 'regovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovern', 5434554, '43243222222'),
(17, 67, 27, 66, 'koko', 'regovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovernts goyrgovernts goyrgovernts goyrregovern', 1212, '545634'),
(18, 67, 18, 66, 'koko', 'ee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiuee@tretr/.iuiuyiu', 45434, 'ee@tretr/.iuiuyiu'),
(19, 67, 16, 66, 'eeeere', 'ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²ÙØ³ØªØ§Ù†', 323232, '22122222221'),
(20, 67, 5, 66, 'koko', 'ÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ', 323, '8888888888888'),
(21, 67, 5, 66, 'lkoooooo', 'ÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\n\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\n\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\n\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„\r\n\r\nÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ', 3333, '0000000000000000000'),
(26, 67, 5, 66, 'fashion', '$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id$byer_id', 1321, '87876756'),
(27, 67, 52, 66, 'lkoooooo', 'mysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_querymysqli_query', 32176, '32132432'),
(28, 67, 53, 66, 'omar', 'respons respons respons respons respons respons respons respons respons respons respons respons respons respons ', 112, '10190723765'),
(29, 67, 53, 66, 'fashion', 'respons respons respons respons respons respons respons respons respons respons respons respons respons ', 1265, '10190723765'),
(30, 67, 53, 66, 'omar', 'dfestfset', 2365, '10190723765'),
(31, 67, 7, 66, 'mmiiiiiiiiiiiiiimm', 'respons respons respons respons respons ', 5454, '545634'),
(33, 112, 57, 66, 'uuum', 'hghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1Uhghldvhgsud]1U', 324, '453654364'),
(34, 113, 58, 110, 'jjjj', 'hghldvhgsud]1Jhghldvhgsud]1Jhghldvhgsud]1Jhghldvhgsud]1Jhghldvhgsud]1Jhghldvhgsud]1J', 5432, '1111111111111111111111');

-- --------------------------------------------------------

--
-- Table structure for table `category3`
--

CREATE TABLE `category3` (
  `id` smallint(3) NOT NULL,
  `catnm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `parnt_id` smallint(3) NOT NULL,
  `imgct` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category3`
--

INSERT INTO `category3` (`id`, `catnm`, `parnt_id`, `imgct`) VALUES
(1, 'Ø­Ø±ÙŠÙ…ÙŠ', 0, 'img/catimg/572469150.jpg'),
(2, 'Ø±Ø¬Ø§Ù„ÙŠ', 0, 'img/catimg/716131777.jpg'),
(3, 'Ø§ÙˆÙ„Ø§Ø¯ÙŠ', 0, 'img/catimg/758225787.png'),
(4, 'Ø¨Ù†Ø§ØªÙŠ', 0, 'img/catimg/322408183.png'),
(5, 'Ù…Ù„Ø§Ø¨Ø³ Ø³Ù‡Ø±Ù‡', 1, 'img/catimg/938574402.jpg'),
(6, 'Ù…Ù„Ø§Ø¨Ø³ ÙƒÙ„Ø§Ø³ÙŠÙƒ', 1, 'img/catimg/480855088.jpeg'),
(7, 'ÙƒØ§Ø¬ÙˆØ§Ù„', 1, 'img/catimg/382587262.jpg'),
(8, 'ÙØ³Ø§ØªÙŠÙ† ÙØ±Ø­', 1, 'img/catimg/868968226.jpg'),
(9, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ù†Ø²Ù„ÙŠÙ‡', 1, 'img/catimg/810791826.jpg'),
(10, 'Ù…Ù„Ø§Ø¨Ø³ Ø±ÙŠØ§Ø¶ÙŠÙ‡', 1, 'img/catimg/409649980.jpg'),
(11, 'Ø´ØºÙ„ Ø§Ø¨Ø±Ù‡', 1, 'img/catimg/890872618.jpg'),
(12, 'Ù…Ù„Ø§Ø¨Ø³ Ø­ÙˆØ§Ù…Ù„', 1, 'img/catimg/1218954039.jpg'),
(13, 'Ø­Ø¬Ø§Ø¨', 1, 'img/catimg/1133511332.jpg'),
(14, 'Ù…Ù„Ø§Ø¨Ø³ Ø­Ø¬', 1, 'img/catimg/1574989781.jpg'),
(15, 'Ø¹Ø¨Ø§ÙŠØ§Øª', 1, 'img/catimg/969588520.jpeg'),
(16, 'Ø§ÙƒØ³Ø³ÙˆØ§Ø±Ø§Øª', 1, 'img/catimg/159510073.jpg'),
(17, 'Ø­Ù‚Ø§Ø¦Ø¨', 1, 'img/catimg/1369428730.jpg'),
(18, 'Ø§Ø­Ø°ÙŠÙ‡', 1, 'img/catimg/1022785400.jpg'),
(19, 'Ø¨Ø¯Ù„', 2, 'img/catimg/1343391080.jpg'),
(20, 'Ø³Ù‡Ø±Ù‡', 2, 'img/catimg/1159307245.jpg'),
(21, 'ÙƒÙ„Ø§Ø³ÙŠÙƒ', 2, 'img/catimg/1168986423.jpg'),
(22, 'ÙƒØ§Ø¬ÙˆØ§Ù„', 2, 'img/catimg/587775977.jpg'),
(23, 'Ù…Ù„Ø§Ø¨Ø³ Ø±ÙŠØ§Ø¶ÙŠÙ‡', 2, 'img/catimg/1320281527.jpg'),
(24, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ù†Ø²Ù„ÙŠÙ‡', 2, 'img/catimg/188894620.jpg'),
(25, 'Ø¬ÙˆØ§ÙƒØª', 2, 'img/catimg/560027416.jpg'),
(26, 'Ø´Ù†Ø·', 2, 'img/catimg/1293110231.jpg'),
(27, 'Ø§Ø­Ø°ÙŠÙ‡', 2, 'img/catimg/820460094.jpg'),
(28, 'ÙƒÙ…Ø§Ù„ÙŠØ§Øª', 2, 'img/catimg/934028367.jpg'),
(29, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ø¯Ø§Ø±Ø³', 3, 'img/catimg/1519478036.jpg'),
(30, 'Ù…Ù„Ø§Ø¨Ø³ Ø±ÙŠØ§Ø¶ÙŠÙ‡', 3, 'img/catimg/1380483430.jpg'),
(31, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ù†Ø²Ù„ÙŠÙ‡', 3, 'img/catimg/542407895.jpg'),
(32, 'Ø³Ù‡Ø±Ù‡', 3, 'img/catimg/633095209.jpg'),
(33, 'Ø§Ø­Ø°ÙŠÙ‡', 3, 'img/catimg/1493523127.jpg'),
(34, 'Ø­Ù‚Ø§Ø¦Ø¨', 3, 'img/catimg/1218781438.jpg'),
(35, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ø¯Ø±Ø³ÙŠÙ‡', 4, 'img/catimg/1167577010.jpeg'),
(36, 'Ù…Ù„Ø§Ø¨Ø³ Ø®Ø±ÙˆØ¬', 3, 'img/catimg/1235641475.jpg'),
(37, 'Ù…Ù„Ø§Ø¨Ø³ Ø®Ø±ÙˆØ¬', 4, 'img/catimg/97085840.jpg'),
(38, 'Ù…Ù„Ø§Ø¨Ø³ Ù…Ù†Ø²Ù„ÙŠÙ‡', 4, 'img/catimg/1549696445.jpg'),
(39, 'Ù…Ù„Ø§Ø¨Ø³ Ø±ÙŠØ§Ø¶ÙŠÙ‡', 4, 'img/catimg/1087636884.jpg'),
(40, 'Ù…Ù„Ø§Ø¨Ø³ Ø³Ù‡Ø±Ù‡', 4, 'img/catimg/809796140.jpeg'),
(41, 'Ø§Ø­Ø°ÙŠÙ‡', 4, 'img/catimg/394054998.jpg'),
(42, 'Ø­Ù‚Ø§Ø¦Ø¨', 4, 'img/catimg/815007149.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clths_knd`
--

CREATE TABLE `clths_knd` (
  `id` tinyint(2) NOT NULL,
  `kind` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctys`
--

CREATE TABLE `ctys` (
  `id` tinyint(2) NOT NULL,
  `parnt_id` tinyint(2) NOT NULL,
  `cty_nm` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctys`
--

INSERT INTO `ctys` (`id`, `parnt_id`, `cty_nm`) VALUES
(1, 0, 'Cairo'),
(2, 0, 'Giza'),
(3, 0, 'Alexandria'),
(4, 0, 'kaliobia'),
(5, 0, 'Garbia'),
(14, 1, 'Ø´Ù…Ø§Ù„ Ø§Ù„Ù‚Ø§Ù‡Ø±Ù‡'),
(15, 1, 'Ø´Ø±Ù‚ Ø§Ù„Ù‚Ø§Ù‡Ø±Ù‡'),
(16, 1, 'ØºØ±Ø¨ Ø§Ù„Ù‚Ø§Ù‡Ø±Ù‡'),
(17, 1, 'Ø¬Ù†ÙˆØ¨ Ø§Ù„Ù‚Ø§Ù‡Ø±Ù‡'),
(18, 1, 'Ù…Ø¯Ù† Ø¬Ø¯ÙŠØ¯Ù‡'),
(19, 2, 'Ø­ÙŠ Ø´Ù…Ø§Ù„'),
(20, 2, 'Ø§Ù„ÙˆØ±Ø§Ù‚'),
(21, 2, 'Ø¨ÙˆÙ„Ø§Ù‚ Ø§Ù„Ø¯ÙƒØ±ÙˆØ±'),
(22, 2, 'Ø§Ù„Ø¯Ù‚ÙŠ'),
(23, 2, 'Ø§Ù„Ø¹Ø¬ÙˆØ²Ù‡'),
(24, 2, 'Ø§Ù„Ø¹Ù…Ø±Ø§Ù†ÙŠÙ‡'),
(25, 2, 'Ø§Ù„Ù‡Ø±Ù…'),
(26, 2, 'Ø­ÙŠ Ø¬Ù†ÙˆØ¨'),
(27, 2, 'Ø§Ù„Ø³Ø§Ø¯Ø³ Ù…Ù† Ø§ÙƒØªÙˆØ¨Ø±'),
(28, 2, 'Ø§Ù„Ø´ÙŠØ® Ø²Ø§ÙŠØ¯'),
(29, 2, 'Ø§Ù„Ø­ÙˆØ§Ù…Ø¯ÙŠÙ‡'),
(30, 2, 'Ø§Ù„Ø¨Ø¯Ø±Ø´ÙŠÙ†'),
(31, 2, 'Ø§Ù„ØµÙ'),
(32, 2, 'Ø§Ø·ÙÙŠØ­'),
(33, 2, 'Ø§Ù„Ø¹ÙŠØ§Ø·'),
(34, 2, 'Ø§Ù„Ø¨Ø§ÙˆÙŠØ·ÙŠ'),
(35, 2, 'Ù…Ù†Ø´Ø£Ø© Ø§Ù„Ù‚Ù†Ø§Ø·Ø±'),
(36, 2, 'Ø§ÙˆØ³ÙŠÙ…'),
(37, 2, 'ÙƒØ±Ø¯Ø§Ø³Ø©'),
(38, 2, 'Ø§Ø¨Ùˆ Ø§Ù„Ù†Ù…Ø±Ø³'),
(39, 3, 'Ø­ÙŠ Ø§ÙˆÙ„ Ø§Ù„Ù…Ù†ØªØ²Ù‡'),
(40, 3, 'Ø­ÙŠ Ø«Ø§Ù† Ø§Ù„Ù…Ù†ØªØ²Ù‡'),
(41, 3, 'Ø­ÙŠ Ø´Ø±Ù‚'),
(42, 3, 'Ø­ÙŠ ÙˆØ³Ø·'),
(43, 3, 'Ø­ÙŠ Ø§Ù„Ø¬Ù…Ø±Ùƒ'),
(44, 3, 'Ø­ÙŠ ØºØ±Ø¨'),
(45, 3, 'Ø­ÙŠ Ø§Ù„Ø¹Ø¬Ù…ÙŠ'),
(46, 3, 'Ø­ÙŠ Ø§Ù„Ø¹Ø§Ù…Ø±ÙŠÙ‡ Ø§ÙˆÙ„'),
(47, 3, 'Ø­ÙŠ Ø§Ù„Ø¹Ø§Ù…Ø±ÙŠÙ‡ Ø«Ø§Ù†'),
(48, 3, 'Ø¨Ø±Ø¬ Ø§Ù„Ø¹Ø±Ø¨'),
(49, 3, 'Ø¨Ø±Ø¬ Ø§Ù„Ø¹Ø±Ø¨ Ø§Ù„Ø¬Ø¯ÙŠØ¯Ù‡'),
(50, 4, 'Ø¨Ù†Ù‡Ø§'),
(51, 4, 'Ù‚Ù„ÙŠÙˆØ¨'),
(52, 4, 'Ø´Ø¨Ø±Ø§ Ø§Ù„Ø®ÙŠÙ…Ù‡'),
(53, 4, 'Ø§Ù„Ù‚Ù…Ø§Ø·Ø± Ø§Ù„Ø®ÙŠØ±ÙŠÙ‡'),
(54, 4, 'Ø§Ù„Ø®Ø§Ù†ÙƒØ©'),
(55, 4, 'ÙƒÙØ± Ø´ÙƒØ±'),
(56, 4, 'Ø·ÙˆØ®'),
(57, 4, 'Ù‚Ù‡Ø§'),
(58, 4, 'Ø§Ù„Ø¹Ø¨ÙˆØ±'),
(59, 4, 'Ø§Ù„Ø®ØµÙˆØµ'),
(60, 4, 'Ø´Ø¨ÙŠÙ† Ø§Ù„Ù‚Ù†Ø§Ø·Ø±'),
(61, 5, 'Ø§Ù„Ù…Ù†ØµÙˆØ±Ù‡'),
(62, 5, 'Ø·Ù„Ø®Ø§'),
(63, 5, 'Ù…ÙŠØª ØºÙ…Ø±'),
(64, 5, 'Ø¯ÙƒØ±Ù†Ø³'),
(65, 5, 'Ø§Ø¬Ø§'),
(66, 5, 'Ù…Ù†ÙŠØ© Ø§Ù„Ù†ØµØ±'),
(67, 5, 'Ø§Ù„Ø³Ù†Ø¨Ù„Ø§ÙˆÙŠÙ†'),
(68, 5, 'Ø§Ù„ÙƒØ±Ø¯ÙŠ'),
(69, 5, 'Ø¨Ù†ÙŠ Ø¹Ø¨ÙŠØ¯'),
(70, 5, 'Ø§Ù„Ù…Ù†Ø²Ù„Ù‡'),
(71, 5, 'ØªÙ…ÙŠ Ø§Ù„Ø§Ù…Ø¯ÙŠØ¯'),
(72, 5, 'Ø§Ù„Ø¬Ù…Ø§Ù„ÙŠÙ‡'),
(73, 5, 'Ø´Ø±Ø¨ÙŠÙ†'),
(74, 5, 'Ø§Ù„Ù…Ø·Ø±ÙŠØ©'),
(75, 5, 'Ø¨Ù„Ù‚Ø§Ø³'),
(76, 5, 'Ù…ÙŠØª Ø³Ù„Ø³ÙŠÙ„'),
(77, 5, 'Ø¬Ù…ØµØ©'),
(78, 5, 'Ù…Ø­Ù„Ø© Ø¯Ù…Ù†Ù‡'),
(79, 5, 'Ù†Ø¨Ø±ÙˆÙ‡');

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(9) NOT NULL,
  `prdct_id` int(9) NOT NULL,
  `userid` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gvrnts`
--

CREATE TABLE `gvrnts` (
  `id` tinyint(2) NOT NULL,
  `gvrn_nm` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gvrnts`
--

INSERT INTO `gvrnts` (`id`, `gvrn_nm`) VALUES
(1, 'Ø§Ù„Ù‚Ø§Ù‡Ø±Ù‡'),
(2, 'Ø§Ù„Ø¬ÙŠØ²Ù‡'),
(3, 'Ø§Ù„Ø§Ø³ÙƒÙ†Ø¯Ø±ÙŠÙ‡'),
(4, 'Ø§Ù„Ù‚Ù„ÙŠÙˆØ¨ÙŠÙ‡'),
(5, 'Ø§Ù„Ø¯Ù‚Ù‡Ù„ÙŠÙ‡');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gvrn_id` smallint(3) NOT NULL,
  `cty_id` smallint(3) NOT NULL,
  `img` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `pric` mediumint(6) NOT NULL,
  `ad_dat` int(11) NOT NULL,
  `end` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `detls` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `titl`, `gvrn_id`, `cty_id`, `img`, `pric`, `ad_dat`, `end`, `detls`) VALUES
(5, 66, 'ÙØ³ØªØ§Ù† Ø®Ø±ÙˆØ¬ Ø§Ø¨ÙŠØ¶', 2, 21, 'img/ordr_img/1028661506.jpg', 1500, 1582834278, '12', 'ÙØ³ØªØ§Ù† Ù‚Ø·Ù† Ø³Ø§Ø¯Ù‡ Ù„Ø§Ø²Ù… ÙŠÙƒÙˆÙ† Ø¬Ø§Ù‡Ø² Ø®Ù„Ø§Ù„ Ø§Ø³Ø¨ÙˆØ¹ÙŠÙ† Ø§Ù„ØªØ³Ù„ÙŠÙ… ÙˆØ§Ø®Ø° Ø§Ù„Ù‚Ø§Ø³Ø§Øª ÙˆØ§Ù„Ø¨Ø±ÙˆÙØ§Øª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ù…Ù†Ø¯ÙˆØ¨ ÙŠØ­Ø¶Ø± Ø§Ù„ÙŠ Ø¨ÙŠØª Ø§Ù„Ø¹Ù…ÙŠÙ„'),
(6, 66, 'Ø³Ø«Ù‚Øµ', 3, 44, 'img/ordr_img/1361447284.jpg', 233, 1582834278, '32', 'ØµØ³Ø«Ù‚Ø´ØµÙ‚'),
(7, 66, 'Ø³Ø´Ø«Ø´Ø«', 4, 50, 'img/ordr_img/2959609862.jpg', 2222, 1582834278, '12', 'ØµØ´Ø«Ø´Ø«'),
(16, 66, 'ÙØ³ØªØ§Ù† Ø§Ø¨ÙŠØ¶ Ù…Ø·Ø±Ø²', 1, 14, 'img/ordr_img/1297921612.jpeg', 2354, 1582849827, '7', 'ØªØ·Ø±ÙŠØ² ÙŠØ¯ÙˆÙŠ ÙˆÙ‚Ù…Ø§Ø´ Ù…Ù† Ø®Ø§Ù…Ø§Øª Ø¬ÙŠØ¯Ù‡ Ù…Ø·Ù„ÙˆØ¨ Ø§Ù„ØªØ²Ø§Ù… Ø¨Ø§Ù„Ù…ÙˆØ§Ø¹ÙŠØ¯ Ù„Ù„Ø¶Ø±ÙˆØ±Ù‡'),
(17, 66, 'uiytuytr', 1, 14, 'img/ordr_img/2637686488.jpg', 43, 1582910194, '43543', 'trewtrewtrew'),
(18, 66, 'uiytuytr', 1, 14, 'img/ordr_img/1571220072.jpg', 43, 1582910287, '43543', 'trewtrewtrew'),
(19, 66, 'fdgfdgfdfdfd', 1, 14, 'img/ordr_img/2821165852.jpeg', 323, 1582910386, '21', '$(\"#ad_order_cntnr\").on(\"submit\",\"#add_order\",function(event){\r\n                event.preventDefault(); //prevent default action \r\n                var post_url = $(this).attr(\"action\"); //get form action url\r\n                var request_method = $(this)'),
(20, 66, 'tytutuytiuytuy', 3, 39, 'img/ordr_img/445533170.jpg', 32, 1582911152, '12', 'ytiyutiuyt iuti uyt iuuty ORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id descORDER BY id desc'),
(21, 66, 'ÙØ³ØªØ§Ù† Ø§Ø­Ù…Ø± Ù‚ØµÙŠØ±ufhfddfsfdsa', 1, 14, 'img/ordr_img/1683477664.jpeg', 1212, 1582911275, '21', 'get form action url var requestget form action url var requestget form action url var requestget form action url var requestget form action url var requestget form action url var requestget form action url var requestget form action url var requestge'),
(22, 66, 'rteyt', 1, 14, 'img/ordr_img/1101088348.jpeg', 2121, 1582911661, '12', 'DER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDEDER BY id descORDE'),
(26, 66, 'fdthrdjtrd', 3, 42, 'img/ordr_img/2252026462.jpg', 433, 1583006020, '4343', 'governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts gover'),
(27, 66, 'fdthrdjtrd', 3, 42, 'img/ordr_img/2906281330.jpg', 433, 1583006021, '4343', 'governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts gover'),
(28, 66, 'ytrtr', 1, 14, 'img/ordr_img/1287741278.jpg', 3243, 1583006084, '232', 'governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts governts '),
(29, 66, 'ÙØ³ØªØ§Ù† Ø§Ø­Ù…Ø± Ù‚ØµÙŠØ±', 1, 14, 'img/ordr_img/341207784.jpg', 2121, 1583006179, '232', 'governts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyrgovernts goyr'),
(30, 66, 'uyte', 1, 14, 'img/ordr_img/502569254.jpeg', 5454, 1583006343, '4354', 'tregovernts goyrgovernts goyrgovernts goyr'),
(31, 66, 'uyte', 1, 14, 'img/ordr_img/537546358.jpeg', 5454, 1583006344, '4354', 'tregovernts goyrgovernts goyrgovernts goyr'),
(49, 66, 'tttttttttt', 4, 50, 'img/ordr_img/85923814.jpg', 1212, 1583009005, '121', '2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr'),
(52, 66, 'sdse', 5, 61, 'img/ordr_img/3065475832.jpg', 1212, 1583009362, '12', 'saa2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img2ordr_img'),
(53, 66, 'wwww', 2, 21, 'img/ordr_img/2615328096.jpeg', 2131, 1583114840, '121', 'respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons respons '),
(55, 66, 'tretre', 1, 14, 'img/ordr_img/268438254.jpg', 3232, 1583117774, '4343', 'retretretretr'),
(56, 66, 'htrgfw', 1, 14, 'img/ordr_img/1384975098.jpg', 542, 1583118226, '432', 'jytrrjyteØªØºÙØ¨Ù‚ØªØ§ØºÙÙ‚ÙŠØºÙ‚'),
(57, 66, 'hbkh', 2, 19, 'img/ordr_img/2082479414.jpg', 21, 1583187303, '21', 'huy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfdhuy re ddfdfd'),
(58, 110, 'wewe', 3, 40, 'img/ordr_img/2570874752.jpg', 234, 1583201620, '1223', 'hghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gghghldvhgsud]1Gg'),
(60, 66, 'vvvvvvvvv', 1, 14, 'img/ordr_img/751814678.jpg', 2121, 1583212269, '2121', 'vcgf ghcbvc bvcvbc vbcvcxcv ');

-- --------------------------------------------------------

--
-- Table structure for table `prdct`
--

CREATE TABLE `prdct` (
  `id` int(11) NOT NULL,
  `prdctnm` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dscrptn` text COLLATE utf8_unicode_ci NOT NULL,
  `pric` int(8) NOT NULL,
  `stock` mediumint(6) NOT NULL,
  `cat_id` smallint(3) NOT NULL,
  `sub_cat` smallint(3) NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(9) NOT NULL,
  `adrss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonn` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmpny` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prdct_imgs`
--

CREATE TABLE `prdct_imgs` (
  `id` int(12) NOT NULL,
  `userid` int(11) NOT NULL,
  `prdct_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cty`
--

CREATE TABLE `sub_cty` (
  `id` tinyint(2) NOT NULL,
  `sub_ctynm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gvrn_id` tinyint(2) NOT NULL,
  `cty_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_cty`
--

INSERT INTO `sub_cty` (`id`, `sub_ctynm`, `gvrn_id`, `cty_id`) VALUES
(1, 'Ø§Ù„Ø²ÙŠØªÙˆÙ†', 1, 14),
(2, 'Ø§Ù„Ø²Ø§ÙˆÙŠÙ‡ Ø§Ù„Ø­Ù…Ø±Ø§Ø¡', 1, 14),
(3, 'Ø­Ø¯Ø§Ø¦Ù‚ Ø§Ù„Ù‚Ø¨Ù‡', 1, 14),
(4, 'Ø§Ù„Ø´Ø±Ø§Ø¨ÙŠÙ‡', 1, 14),
(5, 'Ø§Ù„Ø³Ø§Ø­Ù„', 1, 14),
(6, 'Ø´Ø¨Ø±Ø§', 1, 14),
(7, 'Ø±ÙˆØ¶ Ø§Ù„ÙØ±Ø¬', 1, 14),
(8, 'Ø§Ù„Ø§Ù…ÙŠØ±ÙŠÙ‡', 1, 14),
(9, 'Ø§Ù„Ø³Ù„Ø§Ù… Ø§ÙˆÙ„', 1, 15),
(10, 'Ø§Ù„Ø³Ù„Ø§Ù… Ø«Ø§Ù†', 1, 15),
(11, 'Ø§Ù„Ù…Ø±Ø¬', 1, 15),
(12, 'Ø§Ù„Ù…Ø·Ø±ÙŠÙ‡', 1, 15),
(13, 'Ø¹ÙŠÙ† Ø´Ù…Ø³', 1, 15),
(14, 'Ø§Ù„Ù†Ø²Ù‡Ù‡', 1, 15),
(15, 'Ù…ØµØ± Ø§Ù„Ø¬Ø¯ÙŠØ¯Ù‡', 1, 15),
(16, 'Ø´Ø±Ù‚ Ù…Ø¯ÙŠÙ†Ø© Ù†ØµØ±', 1, 15),
(17, 'ØºØ±Ø¨ Ù…Ø¯ÙŠÙ†Ø© Ù†ØµØ±', 1, 15),
(18, 'Ø§Ù„ÙˆØ§ÙŠÙ„ÙŠ', 1, 16),
(19, 'Ù…Ù†Ø´Ø£Ø© Ù†Ø§ØµØ±', 1, 16),
(20, 'Ø­ÙŠ ÙˆØ³Ø·', 1, 16),
(21, 'Ø¨Ø§Ø¨ Ø§Ù„Ø´Ø¹Ø±ÙŠÙ‡', 1, 16),
(22, 'Ø§Ù„Ø§Ø²Ø¨ÙƒÙŠÙ‡', 1, 16),
(23, 'Ø¨ÙˆÙ„Ø§Ù‚ Ø§Ø¨Ùˆ Ø§Ù„Ø¹Ù„Ø§', 1, 16),
(24, 'Ø§Ù„Ù…ÙˆØ³ÙƒÙŠ', 1, 16),
(25, 'Ø¹Ø§Ø¨Ø¯ÙŠÙ†', 1, 16),
(26, 'Ø­ÙŠ ØºØ±Ø¨', 1, 16),
(27, 'Ø§Ù„Ù…Ù‚Ø·Ù…', 1, 17),
(28, 'Ø§Ù„Ø®Ù„ÙŠÙÙ‡', 1, 17),
(29, 'Ø§Ù„Ø³ÙŠØ¯Ù‡ Ø²ÙŠÙ†Ø¨', 1, 17),
(30, 'Ù…ØµØ± Ø§Ù„Ù‚Ø¯ÙŠÙ…Ù‡', 1, 17),
(31, 'Ø¯Ø§Ø± Ø§Ù„Ø³Ù„Ø§Ù…', 1, 17),
(32, 'Ø§Ù„Ø¨Ø³Ø§ØªÙŠÙ†', 1, 17),
(33, 'Ø§Ù„Ù…Ø¹Ø§Ø¯ÙŠ', 1, 17),
(34, 'Ø·Ø±Ù‡', 1, 17),
(35, 'Ø§Ù„Ù…Ø¹ØµØ±Ù‡', 1, 17),
(36, '15 Ù…Ø§ÙŠÙˆ', 1, 17),
(37, 'Ø­Ù„ÙˆØ§Ù†', 1, 17),
(38, 'Ø§Ù„ØªØ¨ÙŠÙ†', 1, 17),
(39, 'Ù…Ø¯ÙŠÙ†Ø© Ø¨Ø¯Ø±', 1, 18),
(40, 'Ø§Ù„Ø´Ø±ÙˆÙ‚', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usernm` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fulnm` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pasword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonnu` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companam` text COLLATE utf8_unicode_ci,
  `adrs` text COLLATE utf8_unicode_ci,
  `gvrn_id` tinyint(2) DEFAULT NULL,
  `cty_id` tinyint(2) DEFAULT NULL,
  `usr_typ` enum('seler','byer','admin','manager','data entry','dress_maker') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'byer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usernm`, `fulnm`, `pasword`, `phonnu`, `email`, `companam`, `adrs`, `gvrn_id`, `cty_id`, `usr_typ`) VALUES
(26, 'eman', 'eman hamdy ali', 'hghldvhgsud]1A', '01090925920', 'eman@gmail.com', 'mfeesh', 'madint-al-sadat--kfr-dawood', 0, 0, 'admin'),
(30, 'ali', 'aa hamdy ali', 'hghldvhgsud]QW123', '01090925922', 'ali@gmail.com', 'no', 'qwer', 0, 0, 'seler'),
(31, 'shoro', 'shorokk hmdy ali', 'hghldvhgsud]QW1233', '01090925923', 'shorok@gmail.com', 'rgkjhg', 'qwerghg', 0, 0, 'seler'),
(35, 'manar', 'manar h al', 'hghldvhgsud]M12', '09090909096', 'manar@gmail.com', 'ttttttttttttttt', '', 0, 0, 'manager'),
(58, 'shorok', 'shorok hamdy ali', 'hghldvQW12', '01090925990', 'shorok@gmail.com', 'Ø´ØºÙ„ Ø§Ø¨Ø±Ù‡', 'lkummmmmmmmmmmmmmj', 0, 0, 'seler'),
(59, 'asmaa', 'asmaa hamdy ali', 'hghldvhgsud]12QW', '12121212643', 'asmaa@gmail.com', 'YTYTRYTRYT', 'ghfyhgrf', 0, 0, 'seler'),
(63, 'lili', 'dg erf er', 'TFGRD21ewqew', '23232323235', 'lili@lili.lkl', 'dfg', 'dfg', 0, 0, 'dress_maker'),
(64, 'lolo', 'dtrgy ert ret', 'hghldvhgsud]NSS12', '34678956342', 'lolo@gmail.com', '', '', 0, 0, 'data entry'),
(66, 'noor', 'noor hh ali', 'hghldvhgsud]1N', '09090909090', 'noor@gmail.com', '', '', 0, 0, 'byer'),
(67, 'koko', 'koko koko', 'hghldvhgsud]1K', '65432187543', 'koko@gmail.com', '', '', 0, 0, 'dress_maker'),
(68, 'ddd', 'dddd', 'hghldvhgsud]1D', '43217654239', 'ddd@gmail.com', '', '', 0, 0, 'data entry'),
(69, 'hhh', 'hhh', 'hghldvhgsud]1H', '87878787875', 'hhh@gmail.com', '', '', 0, 0, 'data entry'),
(81, 'esrt', 'wer', 'aaaaaaAA11c', '56565678789', 'esrt@gmail.com', '', '', 0, 0, 'byer'),
(82, 'eryqe', 'aery', 'aaaaaaAA11cv', '34343434346', 'eryqe@gmail.com', '', '', 0, 0, 'byer'),
(98, 'dfgdf', 'sss', 'sdrytf1Acvc', '45677890564', 'sss@gmail.com', 'sss', '', 0, 0, 'seler'),
(100, 'xdgf', 'sdfgdsf', 'sdsdsdsdSD1', '34343434344', 'xdgf@gmail.com', '', '', 0, 0, 'dress_maker'),
(102, 'ppppppp', 'ooooooooooo', 'ytyt6yt23QW', '87878787549', 'iiiiii@tre.juyt', 'wwwwwwwww', 'fjydktrfjytf', 2, 21, 'data entry'),
(104, 'erweru', 'wqeru', 'oioiOIOI98u', '23232323266', 'wer@fdgh.ygj', 'oioiOIOI98', 'oioiOIOI98', NULL, NULL, 'manager'),
(105, 'jytd', 'ikutdf', 'htgrfseGRFDS12', '65656587095', 'jytd@htrd.yre', 'htgrfseGRFDS12', 'htgrfseGRFDS12', NULL, NULL, 'dress_maker'),
(106, 'mmmm', 'mmmm', 'hghldvhgsud]1M', '43876512659', 'mmmm@gmail.com', 'qwqewqewq', 'ewqewqewq', NULL, NULL, 'byer'),
(107, 'mnmn', 'truyrt', 'hghldvhgsud]1Mn', '65465465465', 'ytre@uyte.ut4r', 'uiyhhiluy', 'hytre', NULL, NULL, 'seler'),
(109, 'gggg', 'gggg', 'hghldvhgsud]1Gg', '09876543211', 'gggg@gmail.com', NULL, NULL, NULL, NULL, 'byer'),
(110, 'fff', 'fff', 'hghldvhgsud]1F', '12098734654', 'ffflk@wq.lk', 'vvvvvvvvvvvvvvvvvvvvvvxxxxxxxxvvvv', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvv', NULL, NULL, 'dress_maker'),
(112, 'uuu', 'uuu', 'hghldvhgsud]1U', '12342165348', 'uuu@uuu.uuu', 'hghldvhgsud]1L', 'reyeryererererretrtyererrey', 5, 74, 'dress_maker'),
(113, 'jjj', 'jjj', 'hghldvhgsud]1J', '12432165431', 'jjj@jjj.jjj', 'vvvvvvvvvvvvvvvvvvvvvvxxvvvvv', 'nnnnnnnnnn', 1, 14, 'dress_maker'),
(114, 'xxx', 'xxx', 'hghldvhgsud]1X', '65432198653', 'xxx@xxx.xxx', NULL, NULL, NULL, NULL, 'byer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aply`
--
ALTER TABLE `aply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `drsmkr_id` (`drsmkr_id`),
  ADD KEY `aply_ibfk_2` (`byer_id`);

--
-- Indexes for table `category3`
--
ALTER TABLE `category3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clths_knd`
--
ALTER TABLE `clths_knd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctys`
--
ALTER TABLE `ctys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gvrn_id` (`parnt_id`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `prdct_id` (`prdct_id`);

--
-- Indexes for table `gvrnts`
--
ALTER TABLE `gvrnts`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `gvrnts` ADD FULLTEXT KEY `gvrn_nm` (`gvrn_nm`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prdct`
--
ALTER TABLE `prdct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prdct_ibfk_1` (`userid`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `prdct_ibfk_2` (`sub_cat`);

--
-- Indexes for table `prdct_imgs`
--
ALTER TABLE `prdct_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prdct_id` (`prdct_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `sub_cty`
--
ALTER TABLE `sub_cty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gvrn_id` (`gvrn_id`),
  ADD KEY `cty_id` (`cty_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phonnu` (`phonnu`),
  ADD UNIQUE KEY `pasword` (`pasword`),
  ADD UNIQUE KEY `usernm` (`usernm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aply`
--
ALTER TABLE `aply`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `category3`
--
ALTER TABLE `category3`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `clths_knd`
--
ALTER TABLE `clths_knd`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctys`
--
ALTER TABLE `ctys`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gvrnts`
--
ALTER TABLE `gvrnts`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `prdct`
--
ALTER TABLE `prdct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prdct_imgs`
--
ALTER TABLE `prdct_imgs`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cty`
--
ALTER TABLE `sub_cty`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aply`
--
ALTER TABLE `aply`
  ADD CONSTRAINT `aply_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aply_ibfk_2` FOREIGN KEY (`byer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aply_ibfk_3` FOREIGN KEY (`drsmkr_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`prdct_id`) REFERENCES `prdct` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prdct`
--
ALTER TABLE `prdct`
  ADD CONSTRAINT `prdct_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prdct_ibfk_2` FOREIGN KEY (`sub_cat`) REFERENCES `category3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prdct_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prdct_imgs`
--
ALTER TABLE `prdct_imgs`
  ADD CONSTRAINT `prdct_imgs_ibfk_1` FOREIGN KEY (`prdct_id`) REFERENCES `prdct` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prdct_imgs_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_cty`
--
ALTER TABLE `sub_cty`
  ADD CONSTRAINT `sub_cty_ibfk_1` FOREIGN KEY (`gvrn_id`) REFERENCES `gvrnts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_cty_ibfk_2` FOREIGN KEY (`cty_id`) REFERENCES `ctys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
