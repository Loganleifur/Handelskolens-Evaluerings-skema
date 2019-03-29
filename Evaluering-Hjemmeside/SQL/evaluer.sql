-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 04. 12 2018 kl. 13:35:36
-- Serverversion: 10.1.29-MariaDB
-- PHP-version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluer`
--

-- --------------------------------------------------------

-- 
-- Struktur-dump for tabellen `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `admin_control` enum('Ja','Nej') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin_control`, `created_at`) VALUES
(1, 'Admin', '$2y$10$Y8chSk20dmcUCBMn8lD2W.8B6wOTXH5GDRpU1fmsE6q2/VhnQ.4BK', 'Ja', '2018-11-23 11:21:23');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(60) COLLATE utf8_danish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `class`
--

INSERT INTO `class` (`id`, `class`, `created_at`) VALUES
(1, 'NONE', '2018-12-03 13:21:58'),
(2, 'I16', '2018-12-03 13:32:10');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `classinfo`
--

CREATE TABLE `classinfo` (
  `id` int(11) NOT NULL,
  `classid` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `matLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Matematik Lærer',
  `AfsLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Afsætning Lærer',
  `ErhLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Erhvervsøkonomi Lærer',
  `InfLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Informationsteknologi Lærer',
  `orgLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Organisation Lærer',
  `SamLaere` varchar(20) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'Samfundsfag Lærer',
  `1_4Uger` timestamp NULL DEFAULT NULL COMMENT '1 til 4 uger',
  `1_7Uger` timestamp NULL DEFAULT NULL COMMENT '1 til 7 uger',
  `1_10Uger` timestamp NULL DEFAULT NULL COMMENT '1 til 10 uger'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `classinfo`
--

INSERT INTO `classinfo` (`id`, `classid`, `matLaere`, `AfsLaere`, `ErhLaere`, `InfLaere`, `orgLaere`, `SamLaere`, `1_4Uger`, `1_7Uger`, `1_10Uger`) VALUES
(1, 'NONE', 'ANO (none)', 'ANO (none)', 'ANO (none)', 'ANO (none)', 'ANO (none)', 'ANO (none)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `elev`
--

CREATE TABLE `elev` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `intialer` varchar(11) COLLATE utf8_danish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_danish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Male',
  `birthday` date DEFAULT NULL,
  `classID` varchar(100) COLLATE utf8_danish_ci NOT NULL DEFAULT 'None',
  `matematik` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `dansk` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `erhvervsoekonomi` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `engelsk` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `organisation` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `samfundsfag` enum('Nej','Ja') COLLATE utf8_danish_ci NOT NULL DEFAULT 'Nej',
  `loginID` int(11) NOT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `elev`
--

INSERT INTO `elev` (`id`, `firstname`, `lastname`, `intialer`, `email`, `tel`, `gender`, `birthday`, `classID`, `matematik`, `dansk`, `erhvervsoekonomi`, `engelsk`, `organisation`, `samfundsfag`, `loginID`, `createTime`) VALUES
(1, 'Jakob', 'Frederiksen', 'JSF', '', 0, 'Male', '0000-00-00', 'I16', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Nej', 4, '2018-12-03 13:32:30'),
(2, 'Baiba', 'Meike', 'BM', '', 0, 'Male', '0000-00-00', 'I16', 'Nej', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 1, '2018-12-03 13:34:14');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `evaluering`
--

CREATE TABLE `evaluering` (
  `id` int(11) NOT NULL,
  `classId` varchar(60) COLLATE utf8_danish_ci NOT NULL,
  `fag` enum('Matematik','Afsaetning','Erhvervsoekonomi','Informationsteknologi','Organisation','Samfundsfag') COLLATE utf8_danish_ci NOT NULL,
  `læreid` varchar(60) COLLATE utf8_danish_ci NOT NULL,
  `faglidt_niveau` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_danish_ci NOT NULL,
  `arbejdsindsats` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_danish_ci NOT NULL,
  `bemaerkning` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `Uge` enum('1 - 4','1 - 7','1 - 10','') COLLATE utf8_danish_ci NOT NULL,
  `elevId` varchar(60) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `intialer` varchar(20) COLLATE utf8_danish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Both') COLLATE utf8_danish_ci DEFAULT 'Male',
  `loginId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `teacher`
--

INSERT INTO `teacher` (`id`, `firstname`, `lastname`, `intialer`, `email`, `tel`, `gender`, `loginId`, `created_at`) VALUES
(1, 'Admin', 'Number_one', 'ANO (none)', NULL, NULL, 'Both', 1, '2018-11-26 09:57:37');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `userelev`
--

CREATE TABLE `userelev` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Test resultater :^                                        )
--

--
-- Data dump for tabellen `userelev`
--

INSERT INTO `userelev` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Test', '$2y$10$ipkRunqDtBSJLTwIU67w7eHWOdT9wOtpEduMZTnnlzKAeO42.8Wm.', '2018-12-03 13:33:37'),
(4, 'jako5805', '$2y$10$FtxDjKVLVH0o1rblXeou5OuHwSe6OAU6uNY1JYbABbcr9KPuJKZVa', '2018-12-03 13:31:50');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class` (`class`);

--
-- Indeks for tabel `classinfo`
--
ALTER TABLE `classinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classID` (`classid`) USING BTREE,
  ADD KEY `Laere` (`matLaere`,`AfsLaere`,`ErhLaere`,`InfLaere`,`orgLaere`,`SamLaere`) USING BTREE,
  ADD KEY `AfsLaere` (`AfsLaere`),
  ADD KEY `ErhLaere` (`ErhLaere`),
  ADD KEY `InfLaere` (`InfLaere`),
  ADD KEY `orgLaere` (`orgLaere`),
  ADD KEY `SamLaere` (`SamLaere`);

--
-- Indeks for tabel `elev`
--
ALTER TABLE `elev`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `LoginID` (`loginID`),
  ADD UNIQUE KEY `Tegn` (`intialer`),
  ADD KEY `ClassID` (`classID`) USING BTREE;

--
-- Indeks for tabel `evaluering`
--
ALTER TABLE `evaluering`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClassID` (`classId`),
  ADD UNIQUE KEY `LaereID` (`læreid`),
  ADD KEY `ElevID` (`elevId`);

--
-- Indeks for tabel `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `LoginID` (`loginId`),
  ADD UNIQUE KEY `tegn` (`intialer`) USING BTREE;

--
-- Indeks for tabel `userelev`
--
ALTER TABLE `userelev`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `classinfo`
--
ALTER TABLE `classinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `elev`
--
ALTER TABLE `elev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `evaluering`
--
ALTER TABLE `evaluering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `userelev`
--
ALTER TABLE `userelev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `classinfo`
--
ALTER TABLE `classinfo`
  ADD CONSTRAINT `ClassID` FOREIGN KEY (`classid`) REFERENCES `class` (`class`),
  ADD CONSTRAINT `classinfo_ibfk_1` FOREIGN KEY (`matLaere`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `classinfo_ibfk_2` FOREIGN KEY (`AfsLaere`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `classinfo_ibfk_3` FOREIGN KEY (`ErhLaere`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `classinfo_ibfk_4` FOREIGN KEY (`InfLaere`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `classinfo_ibfk_5` FOREIGN KEY (`orgLaere`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `classinfo_ibfk_6` FOREIGN KEY (`SamLaere`) REFERENCES `teacher` (`intialer`);

--
-- Begrænsninger for tabel `elev`
--
ALTER TABLE `elev`
  ADD CONSTRAINT `elev_ibfk_1` FOREIGN KEY (`classID`) REFERENCES `class` (`class`),
  ADD CONSTRAINT `elev_ibfk_2` FOREIGN KEY (`loginID`) REFERENCES `userelev` (`id`);

--
-- Begrænsninger for tabel `evaluering`
--
ALTER TABLE `evaluering`
  ADD CONSTRAINT `evaluering_ibfk_1` FOREIGN KEY (`elevId`) REFERENCES `elev` (`intialer`),
  ADD CONSTRAINT `evaluering_ibfk_2` FOREIGN KEY (`læreid`) REFERENCES `teacher` (`intialer`),
  ADD CONSTRAINT `evaluering_ibfk_3` FOREIGN KEY (`classId`) REFERENCES `class` (`class`);

--
-- Begrænsninger for tabel `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `LoginID` FOREIGN KEY (`loginId`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
