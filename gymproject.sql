-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Kwi 2016, 16:13
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gymproject`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `exercise`
--

CREATE TABLE `exercise` (
  `exerciseID` int(11) NOT NULL,
  `exerciseName` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `numberOfSets` int(11) DEFAULT NULL,
  `numberOfReps` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `exercise`
--

INSERT INTO `exercise` (`exerciseID`, `exerciseName`, `numberOfSets`, `numberOfReps`, `userID`) VALUES
(1, 'Przysiady ze sztangą', NULL, 4, NULL),
(2, 'Wyciskanie sztangi leżąc', NULL, 4, NULL),
(3, 'Podciąganie na drążku', 3, 5, NULL),
(4, 'Martwy ciąg', NULL, 3, NULL),
(5, 'Wyciskanie sztangi z klatki', NULL, 3, NULL),
(6, 'Uginanie przedramion ze sztangą', NULL, 3, NULL),
(7, 'Francuskie wyciskanie sztangi leżąc', NULL, 3, NULL),
(8, 'Wspięcia na palce z hantlami', NULL, 2, NULL),
(9, 'Skłony na ławce skośnej', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `login` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `passwd` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `firstname` varchar(16) COLLATE utf8_polish_ci DEFAULT NULL,
  `lastname` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `activity` varchar(16) COLLATE utf8_polish_ci DEFAULT NULL,
  `bodytype` varchar(16) COLLATE utf8_polish_ci DEFAULT NULL,
  `sex` varchar(16) COLLATE utf8_polish_ci DEFAULT NULL,
  `kcal` int(11) DEFAULT NULL,
  `proteins` int(11) DEFAULT NULL,
  `carbs` int(11) DEFAULT NULL,
  `fats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`exerciseID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `exercise_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
