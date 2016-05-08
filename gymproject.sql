-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Maj 2016, 12:01
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
  `numberOfPlan` int(1) NOT NULL,
  `numberOfAdvanced` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `exercise`
--

INSERT INTO `exercise` (`exerciseID`, `exerciseName`, `numberOfSets`, `numberOfReps`, `numberOfPlan`, `numberOfAdvanced`) VALUES
(1, 'Przysiady ze sztangą', 4, 8, 1, 1),
(2, 'Wyciskanie sztangi leżąc', 4, 8, 1, 1),
(3, 'Podciąganie na drążku', 3, 12, 1, 1),
(4, 'Martwy ciąg', 3, 10, 1, 1),
(5, 'Wyciskanie sztangi z klatki', 3, 10, 1, 1),
(6, 'Uginanie przedramion ze sztangą', 3, 10, 1, 1),
(7, 'Francuskie wyciskanie sztangi leżąc', 3, 10, 1, 1),
(8, 'Wspięcia na palce z hantlami', 2, 10, 1, 1),
(9, 'Skłony na ławce skośnej', 2, 12, 1, 1),
(10, 'Wysoki step z hantlami', 3, 10, 2, 1),
(11, 'Wiosłowanie sztangą', 3, 10, 2, 1),
(12, 'Unoszenie hantli na boki', 2, 10, 2, 1),
(13, 'Uginanie przedramion z hantlami', 2, 10, 2, 1),
(14, 'Pompki tyłem', 2, 10, 2, 1),
(15, 'Spięcia brzucha', 2, 12, 2, 1),
(16, 'Wypychanie na suwnicy', 3, 10, 3, 1),
(17, 'Wyciskanie hantli na ławce płaskiej', 3, 10, 3, 1),
(18, 'Skłony ze sztangą na karku', 3, 10, 3, 1),
(19, 'Uginanie przedramion z supinacją nadgarstków', 2, 10, 3, 1),
(20, 'Wyciskanie wąsko', 2, 10, 3, 1),
(21, 'Wspięcia na palce z hantlami', 2, 10, 3, 1),
(22, 'Skłony na ławce skośnej', 2, 12, 3, 1),
(23, 'Wyciskanie sztangi na ławce poziomej', 3, 10, 1, 2),
(24, 'Wyciskanie hantli na skosie', 3, 10, 1, 2),
(25, 'Rozpiętki w bramie', 3, 12, 1, 2),
(26, 'Wyciskanie francuskie jednorącz leżąc', 3, 10, 1, 2),
(27, 'Pompki na poręczach', 3, 10, 1, 2),
(28, 'Podciąganie się w szerokim uchwycie', 3, 10, 1, 2),
(29, 'Wiosłowanie sztangielką w opadzie tułowia', 3, 10, 1, 2),
(30, 'Martwy ciąg', 3, 10, 1, 2),
(31, 'Uginanie sztangą stojąc', 3, 10, 1, 2),
(32, 'Uginanie ramion z liną wyciągu dolnego', 3, 10, 1, 2),
(33, 'Uginanie nadgarstków nadchwytem', 2, 15, 1, 2),
(34, 'Uginanie nadgarstków podchwytem', 2, 15, 1, 2),
(35, 'Hack-przysiady na maszynie', 4, 10, 1, 2),
(36, 'Przysiady wykroczne', 2, 10, 1, 2),
(37, 'Uginania podudzi na maszynie leżąc', 3, 10, 1, 2),
(38, 'Wspięcia na palce stojąc', 4, 12, 1, 2),
(39, 'Wyciskanie sztangi zza karku', 3, 10, 1, 2),
(40, 'Unoszenie hantli w opadzie siedząc', 3, 12, 1, 2),
(41, 'Unoszenie hantli do przodu', 3, 12, 1, 2),
(42, 'Szrugsy', 4, 12, 1, 2),
(43, 'Podciąganie na drążku', 4, 12, 2, 2),
(44, 'Wiosłowanie sztangą', 3, 10, 2, 2),
(45, 'Martwy ciąg', 3, 10, 2, 2),
(46, 'Uginanie przedramienia ze sztangą', 3, 10, 2, 2),
(47, 'Uginanie przedramienia ze sztangielką na ławce skośnej', 3, 10, 2, 2),
(48, 'Zwijanie nadgarstków podchwyt', 2, 12, 2, 2),
(49, 'Zwijanie nadgarstków nadchwyt', 2, 12, 2, 2),
(50, 'Wyciskanie sztangi na ławce poziomej', 4, 10, 2, 2),
(51, 'Odchylenia ramion ze sztangielkami w bok', 3, 12, 2, 2),
(52, 'Przenoszenie sztangielki za głowę w leżeniu na ławce poziomej', 3, 10, 2, 2),
(53, 'Francuskie wyciskanie sztangą łamaną', 3, 10, 2, 2),
(54, 'Francuskie wyciskanie sztangi leżąc głową w dół', 3, 10, 2, 2),
(55, 'Przysiady ze sztangą na plecach w wąskim rokroku', 4, 10, 2, 2),
(56, 'Przysiady ze sztangą na klatce piersiowej', 3, 10, 2, 2),
(57, 'Uginanie nóg na maszynie', 3, 10, 2, 2),
(58, 'Wyciskanie sztangi z klatki', 3, 10, 2, 2),
(59, 'Wznosy sztangielek bokiem w opadzie tułowia', 3, 10, 2, 2),
(60, 'Podciąganie sztangi wzdłuż tułowia', 3, 10, 2, 2),
(61, 'Wspięcia na palce stojąc na podstawce', 4, 15, 2, 2),
(62, 'Wyciskanie na ławce ze sztangą', 4, 8, 3, 2),
(63, 'Pompki na poręczach', 3, 8, 3, 2),
(64, 'Rozpiętki na ławce skośnej', 3, 10, 3, 2),
(65, 'Prostowanie na wyciągu', 3, 10, 3, 2),
(66, 'Wyciskanie francuskie', 3, 10, 3, 2),
(67, 'Podciąganie na drążku', 4, 8, 3, 2),
(68, 'Wiosłowanie na wyciągu siedząc', 3, 8, 3, 2),
(69, 'Martwy ciąg', 3, 10, 3, 2),
(70, 'Szrugsy', 3, 12, 3, 2),
(71, 'Uginanie przedramion ze sztangą', 3, 10, 3, 2),
(72, 'Uginanie na modlitewniku ze sztangą', 3, 10, 3, 2),
(73, 'Wyciskanie sztangi przodem', 4, 8, 3, 2),
(74, 'Unoszenie sztangielek na boki', 3, 10, 3, 2),
(75, 'Unoszenie sztangielek na boki w opadzie tułownia', 3, 10, 3, 2),
(76, 'Hack przysiady', 4, 8, 3, 2),
(77, 'Prostowanie nóg', 3, 10, 3, 2),
(78, 'Uginanie nóg leżąc', 4, 10, 3, 2),
(79, 'Wspięcia na palce', 4, 15, 3, 2),
(80, 'Podciąganie na drążku', 4, 10, 1, 3),
(81, 'Wiosłowanie sztangą', 4, 8, 1, 3),
(82, 'Martwy ciąg', 3, 10, 1, 3),
(83, 'Uginanie przedramienia ze sztangą', 3, 10, 1, 3),
(84, 'Uginanie przedramienia ze sztangielką leżąc przodem na ławce skośnej', 3, 10, 1, 3),
(85, 'Zwijanie nadgarstków podchwytem', 3, 12, 1, 3),
(86, 'Uginanie przedramion ze sztangą nadchwytem', 2, 12, 1, 3),
(87, 'Wyciskanie sztangi w górę leżąc na ławce poziomej', 4, 10, 1, 3),
(88, 'Wyciskanie sztangielek na ławce skośnej', 4, 10, 1, 3),
(89, 'Przenoszenie sztangielki za głowę leżąc na ławce poziomej', 3, 12, 1, 3),
(90, 'Pompki na poręczach', 3, 15, 1, 3),
(91, 'Francuskie wyciskanie sztangą leżąc na ławce głową w dół', 3, 10, 1, 3),
(92, 'Przysiady ze sztangą na plecach w wąskim rozkroku', 4, 10, 1, 3),
(93, 'Przysiady ze sztangą na klatce piersiowej', 3, 10, 1, 3),
(94, 'Wyciskanie sztangi z klatki siedząc', 4, 10, 1, 3),
(95, 'Wznosy sztangielek bokiem w opadzie tułowia', 3, 12, 1, 3),
(96, 'Podciąganie sztangi wzdłuż tułowia', 3, 10, 1, 3),
(97, 'Wspięcia na palce stojąc na podstawce', 4, 15, 1, 3),
(98, 'Pompki na poręczach', 3, 8, 2, 3),
(99, 'Wyciskanie hantli na skosie', 3, 8, 2, 3),
(100, 'Wyciskanie sztangi na płaskiej', 3, 10, 2, 3),
(101, 'Rozpiętki na skosie', 3, 10, 2, 3),
(102, 'Unoszenie nóg w zwisie na drążku', 3, 15, 2, 3),
(103, 'Spięcia', 3, 15, 2, 3),
(104, 'Skręty tułowia z drążkiem na karku', 3, 15, 2, 3),
(105, 'Podciąganie na drążku', 3, 8, 2, 3),
(106, 'Wiosłowanie sztangą poprzeczne', 3, 8, 2, 3),
(107, 'Wiosłowanie sztangą w opadzie', 3, 10, 2, 3),
(108, 'Przenoszenie sztangi za głowę', 3, 10, 2, 3),
(109, 'Uginania z hantlami stojąc', 4, 8, 2, 3),
(110, 'Uginania na modlitewniku ze sztangą', 3, 10, 2, 3),
(111, 'Wyciskanie hantli siedząc', 4, 8, 2, 3),
(112, 'Unoszenie hantli w opadzie siedząc', 3, 10, 2, 3),
(113, 'Unoszenie hantli na boki stojąc', 3, 10, 2, 3),
(114, 'Wyciskanie francuskie sztangi leżąc', 4, 8, 2, 3),
(115, 'Wyciskanie francuskie hantli siedząc', 3, 10, 2, 3),
(116, 'Przysiady ze sztangą z przodu', 4, 10, 2, 3),
(117, 'Wykroki ze sztangą', 4, 12, 2, 3),
(118, 'Martwy ciąg na prostych nogach', 4, 10, 2, 3),
(119, 'Uginanie ze sztangą podchwytem', 4, 10, 2, 3),
(120, 'Uginanie ze sztangą nadchwytem', 3, 10, 2, 3),
(121, 'Wyciskanie sztangi skos', 3, 10, 3, 3),
(122, 'Wyciskanie sztangi skos', 3, 10, 3, 3),
(123, 'Wyciskanie hantli płasko', 3, 10, 3, 3),
(124, 'Wyciskanie z klatki siedząc', 3, 10, 3, 3),
(125, 'Unoszenie hantli bokiem w opadzie tułowia', 2, 10, 3, 3),
(126, 'Francuskie wyciskanie sztangi', 3, 10, 3, 3),
(127, 'Wspięcia na palce siedząc', 3, 10, 3, 3),
(128, 'Przysiady ze sztangą na barkach', 3, 10, 3, 3),
(129, 'Uginanie nóg leżąc', 3, 10, 3, 3),
(130, 'Podciąganie na drążku', 3, 15, 3, 3),
(131, 'Wiosłowanie hantlem', 2, 10, 3, 3),
(132, 'Martwy ciąg', 2, 10, 3, 3),
(133, 'Uginanie przedramion z hantlami z supinacją nadgarstka', 3, 10, 3, 3),
(134, 'Zwijanie nadgarstków podchwytem i nadchwytem', 3, 10, 3, 3);

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
