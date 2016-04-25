-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Kwi 2016, 10:40
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
  `numberOfReps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `exercise`
--

INSERT INTO `exercise` (`exerciseID`, `exerciseName`, `numberOfSets`, `numberOfReps`) VALUES
(1, 'Przysiady ze sztangą', NULL, 4),
(2, 'Wyciskanie sztangi leżąc', NULL, 4),
(3, 'Podciąganie na drążku', 3, 5),
(4, 'Martwy ciąg', NULL, 3),
(5, 'Wyciskanie sztangi z klatki', NULL, 3),
(6, 'Uginanie przedramion ze sztangą', NULL, 3),
(7, 'Francuskie wyciskanie sztangi leżąc', NULL, 3),
(8, 'Wspięcia na palce z hantlami', NULL, 2),
(9, 'Skłony na ławce skośnej', NULL, 2),
(10, 'Wysoki step z hantlami', NULL, 3),
(11, 'Wiosłowanie sztangą', NULL, 3),
(12, 'Unoszenie hantli na boki', NULL, 2),
(13, 'Uginanie przedramion z hantlami', NULL, 2),
(14, 'Pompki tyłem', NULL, 2),
(15, 'Spięcia brzucha', NULL, 2),
(16, 'Wypychanie na suwnicy', NULL, 3),
(17, 'Wyciskanie hantli na ławce płaskiej', NULL, 3),
(18, 'Skłony ze sztangą na karku', NULL, 3),
(19, 'Uginanie przedramion z supinacją nadgarstków', NULL, 2),
(20, 'Wyciskanie wąsko', NULL, 2),
(21, 'Wspięcia na palce z hantlami', NULL, 2),
(22, 'Skłony na ławce skośnej', NULL, 2),
(23, 'Wyciskanie sztangi na ławce poziomej', 3, 10),
(24, 'Wyciskanie hantli na skosie', 3, 10),
(25, 'Rozpiętki w bramie', 3, 12),
(26, 'Wyciskanie francuskie jednorącz leżąc', 3, 10),
(27, 'Pompki na poręczach', 3, 10),
(28, 'Podciąganie się w szerokim uchwycie', 3, 10),
(29, 'Wiosłowanie sztangielką w opadzie tułowia', 3, 10),
(30, 'Martwy ciąg', 3, 10),
(31, 'Uginanie sztangą stojąc', 3, 10),
(32, 'Uginanie ramion z liną wyciągu dolnego', 3, 10),
(33, 'Uginanie nadgarstków nadchwytem', 2, 15),
(34, 'Uginanie nadgarstków podchwytem', 2, 15),
(35, 'Hack-przysiady na maszynie', 4, 10),
(36, 'Przysiady wykroczne', 2, 10),
(37, 'Uginania podudzi na maszynie leżąc', 3, 10),
(38, 'Wspięcia na palce stojąc', 4, 12),
(39, 'Wyciskanie sztangi zza karku', 3, 10),
(40, 'Unoszenie hantli w opadzie siedząc', 3, 12),
(41, 'Unoszenie hantli do przodu', 3, 12),
(42, 'Szrugsy', 4, 12);

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
  ADD PRIMARY KEY (`exerciseID`);

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
