-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Feb 2019 um 10:12
-- Server-Version: 10.1.36-MariaDB
-- PHP-Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `it-ausleihe`
--

-- ------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `borrower`
--
/*
DROP TABLE `loan_device`;
DROP TABLE `borrower`;
DROP TABLE `device`;
DROP TABLE `loan`;
DROP TABLE `cart`;
*/





CREATE TABLE `borrower` (
  `borrowerID` int(11) NOT NULL COMMENT 'ID of the borrower',
  `name` varchar(25) NOT NULL COMMENT 'Name of the borrower',
  `surname` varchar(25) NOT NULL COMMENT 'Surname of the borrower',
  `class` varchar(15) NOT NULL COMMENT 'Class-name of the borrower',
  `teacher` varchar(30) NOT NULL COMMENT 'Name of the teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contains data of borrowers';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL COMMENT 'ID of the cart',
  `name` varchar(50) NOT NULL COMMENT 'Name of the cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contains data of carts';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `device`
--

CREATE TABLE `device` (
  `deviceID` int(11) NOT NULL COMMENT 'ID of the device',
  `cartID`int(11) NOT NULL COMMENT 'ID of the card',
  `name` varchar(40) NOT NULL COMMENT 'Name of the device',
  `type` varchar(10) NOT NULL COMMENT 'Type of the device',
  `brand` varchar(20) NOT NULL COMMENT 'Brand of the device',
  `qrCode` int(1) NOT NULL COMMENT 'QR-Code of the device'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contains data of devices';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `loan`
--

CREATE TABLE `loan` (
  `loanID` int(11) NOT NULL COMMENT 'ID of the loan',
  `borrowerID` int(11) NOT NULL COMMENT 'ID of the borrower',
  `startTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Start time of the loan',
  `duration` int(2) NOT NULL COMMENT 'Duration time of the loan',
  `returnTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Return time of the loan',
  `comment` varchar(255) NOT NULL COMMENT 'Comment to the loan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contains data of the loans';

CREATE TABLE `loan_device` (
	`loan_deviceID`int(11) NOT NULL COMMENT 'ID of the loaned devices',
	`loanID` int(11) NOT NULL COMMENT 'ID of the loan',
	`deviceID` int(11) NOT NULL COMMENT 'ID of the device'
);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`borrowerID`);

--
-- Indizes für die Tabelle `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);
  
--
-- Indizes für die Tabelle `loan_device`
--
ALTER TABLE `loan_device`
  ADD PRIMARY KEY (`loan_deviceID`),
  ADD KEY `loanID` (`loanID`),
  ADD KEY `deviceID` (`deviceID`);

--
-- Indizes für die Tabelle `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`deviceID`),
  ADD KEY `cartID` (`cartID`);

--
-- Indizes für die Tabelle `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loanID`),
  ADD KEY `borrowerID` (`borrowerID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `borrower`
--
ALTER TABLE `borrower`
  MODIFY `borrowerID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of the borrower';

--
-- AUTO_INCREMENT für Tabelle `loan_device`
--
ALTER TABLE `loan_device`
  MODIFY `loan_deviceID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of the loaned devices';

--
-- AUTO_INCREMENT für Tabelle `loan`
--
ALTER TABLE `loan`
  MODIFY `loanID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of the loan';
  
--
-- AUTO_INCREMENT für Tabelle `loan`
--
ALTER TABLE `device`
  MODIFY `deviceID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of the device';
  
--
-- AUTO_INCREMENT für Tabelle `loan`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of the cart';

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `cart`
--
ALTER TABLE `device`
  ADD CONSTRAINT `device_ibfk_1` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`borrowerID`) REFERENCES `borrower` (`borrowerID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;