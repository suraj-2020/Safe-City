-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2018 at 06:26 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `secureus`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidnap`
--

CREATE TABLE `kidnap` (
  `lat` double NOT NULL,
  `lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kidnap`
--

INSERT INTO `kidnap` (`lat`, `lon`) VALUES
(28.454731783951885, 77.05373346805573),
(28.454995899963535, 77.05337405204773);

-- --------------------------------------------------------

--
-- Table structure for table `murder`
--

CREATE TABLE `murder` (
  `lat` double NOT NULL,
  `lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `murder`
--

INSERT INTO `murder` (`lat`, `lon`) VALUES
(28.454651605746363, 77.0543771982193),
(28.455184553853627, 77.05365836620331),
(28.455165688479763, 77.05370664596558),
(28.454618591173464, 77.05438792705536),
(28.454694053039205, 77.05352425575256),
(28.455109092337974, 77.05409288406372),
(28.45521756824976, 77.0536208152771),
(12.845140635006771, 80.15338003635406),
(12.845046491914568, 80.15188872814178),
(12.84499942035526, 80.15200138092041);

-- --------------------------------------------------------

--
-- Table structure for table `robbery`
--

CREATE TABLE `robbery` (
  `lat` double NOT NULL,
  `lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robbery`
--

INSERT INTO `robbery` (`lat`, `lon`) VALUES
(28.454830827533563, 77.05287516117096);

-- --------------------------------------------------------

--
-- Table structure for table `terrorist`
--

CREATE TABLE `terrorist` (
  `lat` double NOT NULL,
  `lon` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	