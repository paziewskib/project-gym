-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Maj 2016, 16:22
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
  `numberOfPlan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `exercise`
--

INSERT INTO `exercise` (`exerciseID`, `exerciseName`, `numberOfSets`, `numberOfReps`, `numberOfPlan`) VALUES
(1, 'Przysiady ze sztangą', 4, 8, 1),
(2, 'Wyciskanie sztangi leżąc', 4, 8, 1),
(3, 'Podciąganie na drążku', 3, 12, 1),
(4, 'Martwy ciąg', 3, 10, 1),
(5, 'Wyciskanie sztangi z klatki', 3, 10, 1),
(6, 'Uginanie przedramion ze sztangą', 3, 10, 1),
(7, 'Francuskie wyciskanie sztangi leżąc', 3, 10, 1),
(8, 'Wspięcia na palce z hantlami', 2, 10, 1),
(9, 'Skłony na ławce skośnej', 2, 12, 1),
(10, 'Wysoki step z hantlami', 3, 10, 2),
(11, 'Wiosłowanie sztangą', 3, 10, 2),
(12, 'Unoszenie hantli na boki', 2, 10, 2),
(13, 'Uginanie przedramion z hantlami', 2, 10, 2),
(14, 'Pompki tyłem', 2, 10, 2),
(15, 'Spięcia brzucha', 2, 12, 2),
(16, 'Wypychanie na suwnicy', 3, 10, 3),
(17, 'Wyciskanie hantli na ławce płaskiej', 3, 10, 3),
(18, 'Skłony ze sztangą na karku', 3, 10, 3),
(19, 'Uginanie przedramion z supinacją nadgarstków', 2, 10, 3),
(20, 'Wyciskanie wąsko', 2, 10, 3),
(21, 'Wspięcia na palce z hantlami', 2, 10, 3),
(22, 'Skłony na ławce skośnej', 2, 12, 3),
(23, 'Wyciskanie sztangi na ławce poziomej', 3, 10, 4),
(24, 'Wyciskanie hantli na skosie', 3, 10, 4),
(25, 'Rozpiętki w bramie', 3, 12, 4),
(26, 'Wyciskanie francuskie jednorącz leżąc', 3, 10, 4),
(27, 'Pompki na poręczach', 3, 10, 4),
(28, 'Podciąganie się w szerokim uchwycie', 3, 10, 4),
(29, 'Wiosłowanie sztangielką w opadzie tułowia', 3, 10, 4),
(30, 'Martwy ciąg', 3, 10, 4),
(31, 'Uginanie sztangą stojąc', 3, 10, 4),
(32, 'Uginanie ramion z liną wyciągu dolnego', 3, 10, 4),
(33, 'Uginanie nadgarstków nadchwytem', 2, 15, 4),
(34, 'Uginanie nadgarstków podchwytem', 2, 15, 4),
(35, 'Hack-przysiady na maszynie', 4, 10, 4),
(36, 'Przysiady wykroczne', 2, 10, 4),
(37, 'Uginania podudzi na maszynie leżąc', 3, 10, 4),
(38, 'Wspięcia na palce stojąc', 4, 12, 4),
(39, 'Wyciskanie sztangi zza karku', 3, 10, 4),
(40, 'Unoszenie hantli w opadzie siedząc', 3, 12, 4),
(41, 'Unoszenie hantli do przodu', 3, 12, 4),
(42, 'Szrugsy', 4, 12, 4),
(43, 'Podciąganie na drążku', 4, 12, 5),
(44, 'Wiosłowanie sztangą', 3, 10, 5),
(45, 'Martwy ciąg', 3, 10, 5),
(46, 'Uginanie przedramienia ze sztangą', 3, 10, 5),
(47, 'Uginanie przedramienia ze sztangielką na ławce skośnej', 3, 10, 5),
(48, 'Zwijanie nadgarstków podchwyt', 2, 12, 5),
(49, 'Zwijanie nadgarstków nadchwyt', 2, 12, 5),
(50, 'Wyciskanie sztangi na ławce poziomej', 4, 10, 5),
(51, 'Odchylenia ramion ze sztangielkami w bok', 3, 12, 5),
(52, 'Przenoszenie sztangielki za głowę w leżeniu na ławce poziomej', 3, 10, 5),
(53, 'Francuskie wyciskanie sztangą łamaną', 3, 10, 5),
(54, 'Francuskie wyciskanie sztangi leżąc głową w dół', 3, 10, 5),
(55, 'Przysiady ze sztangą na plecach w wąskim rokroku', 4, 10, 5),
(56, 'Przysiady ze sztangą na klatce piersiowej', 3, 10, 5),
(57, 'Uginanie nóg na maszynie', 3, 10, 5),
(58, 'Wyciskanie sztangi z klatki', 3, 10, 5),
(59, 'Wznosy sztangielek bokiem w opadzie tułowia', 3, 10, 5),
(60, 'Podciąganie sztangi wzdłuż tułowia', 3, 10, 5),
(61, 'Wspięcia na palce stojąc na podstawce', 4, 15, 5),
(62, 'Wyciskanie na ławce ze sztangą', 4, 8, 6),
(63, 'Pompki na poręczach', 3, 8, 6),
(64, 'Rozpiętki na ławce skośnej', 3, 10, 6),
(65, 'Prostowanie na wyciągu', 3, 10, 6),
(66, 'Wyciskanie francuskie', 3, 10, 6),
(67, 'Podciąganie na drążku', 4, 8, 6),
(68, 'Wiosłowanie na wyciągu siedząc', 3, 8, 6),
(69, 'Martwy ciąg', 3, 10, 6),
(70, 'Szrugsy', 3, 12, 6),
(71, 'Uginanie przedramion ze sztangą', 3, 10, 6),
(72, 'Uginanie na modlitewniku ze sztangą', 3, 10, 6),
(73, 'Wyciskanie sztangi przodem', 4, 8, 6),
(74, 'Unoszenie sztangielek na boki', 3, 10, 6),
(75, 'Unoszenie sztangielek na boki w opadzie tułownia', 3, 10, 6),
(76, 'Hack przysiady', 4, 8, 6),
(77, 'Prostowanie nóg', 3, 10, 6),
(78, 'Uginanie nóg leżąc', 4, 10, 6),
(79, 'Wspięcia na palce', 4, 15, 6),
(80, 'Podciąganie na drążku', 4, 10, 7),
(81, 'Wiosłowanie sztangą', 4, 8, 7),
(82, 'Martwy ciąg', 3, 10, 7),
(83, 'Uginanie przedramienia ze sztangą', 3, 10, 7),
(84, 'Uginanie przedramienia ze sztangielką leżąc przodem na ławce skośnej', 3, 10, 7),
(85, 'Zwijanie nadgarstków podchwytem', 3, 12, 7),
(86, 'Uginanie przedramion ze sztangą nadchwytem', 2, 12, 7),
(87, 'Wyciskanie sztangi w górę leżąc na ławce poziomej', 4, 10, 7),
(88, 'Wyciskanie sztangielek na ławce skośnej', 4, 10, 7),
(89, 'Przenoszenie sztangielki za głowę leżąc na ławce poziomej', 3, 12, 7),
(90, 'Pompki na poręczach', 3, 15, 7),
(91, 'Francuskie wyciskanie sztangą leżąc na ławce głową w dół', 3, 10, 7),
(92, 'Przysiady ze sztangą na plecach w wąskim rozkroku', 4, 10, 7),
(93, 'Przysiady ze sztangą na klatce piersiowej', 3, 10, 7),
(94, 'Wyciskanie sztangi z klatki siedząc', 4, 10, 7),
(95, 'Wznosy sztangielek bokiem w opadzie tułowia', 3, 12, 7),
(96, 'Podciąganie sztangi wzdłuż tułowia', 3, 10, 7),
(97, 'Wspięcia na palce stojąc na podstawce', 4, 15, 7),
(98, 'Pompki na poręczach', 3, 8, 8),
(99, 'Wyciskanie hantli na skosie', 3, 8, 8),
(100, 'Wyciskanie sztangi na płaskiej', 3, 10, 8),
(101, 'Rozpiętki na skosie', 3, 10, 8),
(102, 'Unoszenie nóg w zwisie na drążku', 3, 15, 8),
(103, 'Spięcia', 3, 15, 8),
(104, 'Skręty tułowia z drążkiem na karku', 3, 15, 8),
(105, 'Podciąganie na drążku', 3, 8, 8),
(106, 'Wiosłowanie sztangą poprzeczne', 3, 8, 8),
(107, 'Wiosłowanie sztangą w opadzie', 3, 10, 8),
(108, 'Przenoszenie sztangi za głowę', 3, 10, 8),
(109, 'Uginania z hantlami stojąc', 4, 8, 8),
(110, 'Uginania na modlitewniku ze sztangą', 3, 10, 8),
(111, 'Wyciskanie hantli siedząc', 4, 8, 8),
(112, 'Unoszenie hantli w opadzie siedząc', 3, 10, 8),
(113, 'Unoszenie hantli na boki stojąc', 3, 10, 8),
(114, 'Wyciskanie francuskie sztangi leżąc', 4, 8, 8),
(115, 'Wyciskanie francuskie hantli siedząc', 3, 10, 8),
(116, 'Przysiady ze sztangą z przodu', 4, 10, 8),
(117, 'Wykroki ze sztangą', 4, 12, 8),
(118, 'Martwy ciąg na prostych nogach', 4, 10, 8),
(119, 'Uginanie ze sztangą podchwytem', 4, 10, 8),
(120, 'Uginanie ze sztangą nadchwytem', 3, 10, 8),
(121, 'Wyciskanie sztangi skos', 3, 10, 9),
(122, 'Wyciskanie sztangi skos', 3, 10, 9),
(123, 'Wyciskanie hantli płasko', 3, 10, 9),
(124, 'Wyciskanie z klatki siedząc', 3, 10, 9),
(125, 'Unoszenie hantli bokiem w opadzie tułowia', 2, 10, 9),
(126, 'Francuskie wyciskanie sztangi', 3, 10, 9),
(127, 'Wspięcia na palce siedząc', 3, 10, 9),
(128, 'Przysiady ze sztangą na barkach', 3, 10, 9),
(129, 'Uginanie nóg leżąc', 3, 10, 9),
(130, 'Podciąganie na drążku', 3, 15, 9),
(131, 'Wiosłowanie hantlem', 2, 10, 9),
(132, 'Martwy ciąg', 2, 10, 9),
(133, 'Uginanie przedramion z hantlami z supinacją nadgarstka', 3, 10, 9),
(134, 'Zwijanie nadgarstków podchwytem i nadchwytem', 3, 10, 9);

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
