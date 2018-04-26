-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Kwi 2018, 11:41
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `salon_fryzjerski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `idKlienci` int(11) NOT NULL,
  `imie` varchar(80) NOT NULL,
  `nazwisko` varchar(80) NOT NULL,
  `plec` varchar(10) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data` varchar(10) NOT NULL,
  `godzina` varchar(5) NOT NULL,
  `iduslugi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`idKlienci`, `imie`, `nazwisko`, `plec`, `telefon`, `email`, `data`, `godzina`, `iduslugi`) VALUES
(1, 'we', 'we', 'm', 'whatever', 'whatever', '2018-10-23', '2018-', 3),
(2, 'we', 'we', 'm', 'whatever', 'whatever', '2018-10-23', '09:01', 3),
(3, 'wae', 'wae', 'm', 'whaatever', 'whataever', '2018-10-23', '09:01', 3),
(4, 'wae', 'wae', 'm', 'whaatever', 'whataever', '2018-10-23', '09:01', 3),
(5, 'wae', 'wae', 'm', 'whaatever', 'whataever', '2018-10-23', '09:01', 3),
(6, 'wae', 'wae', 'm', 'whaatever', 'whataever', '2018-10-23', '09:01', 3),
(7, 'Janusz', 'Pawulon', 'm', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-11', '13', 3),
(8, 'Janusz', 'Pawulon', 'k', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-11', '13', 3),
(9, 'Janusz', 'Pawulon', 'k', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-11', '13', 3),
(10, 'Janusz', 'Pawulon', 'k', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-11', '16:00', 3),
(11, 'tesko', 'pierdolnik', 'k', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-11', '14:00', 3),
(12, 'tesko', 'pierdolnik', 'm', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-28', '17:00', 3),
(13, 'tesko', 'pierdolnik', 'm', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-28', '17:00', 0),
(14, 'tesko', 'pierdolnik', 'm', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-28', '17:00', 0),
(15, 'tesko', 'pierdolnik', 'm', '989-989-989', 'janusz.pawulon@gmail.com', '2018-04-28', '17:00', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontakt`
--

CREATE TABLE `kontakt` (
  `idKontakt` int(11) NOT NULL,
  `imie` varchar(80) DEFAULT NULL,
  `nazwisko` varchar(80) DEFAULT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `wiadomosc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `kontakt`
--

INSERT INTO `kontakt` (`idKontakt`, `imie`, `nazwisko`, `telefon`, `email`, `wiadomosc`) VALUES
(1, 'Jan', 'Kowalski', '999-999-999', 'janusz.pawulon@gmail.com', 'lol xd'),
(2, 'adam', 'lleleel', '222-222-222', 'adam@wp.pl', 'heeeeee');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `iduslugi` int(11) NOT NULL,
  `nazwa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`iduslugi`, `nazwa`) VALUES
(1, 'Strzyżenie męskie'),
(2, 'Strzyżenie + czesanie damskie'),
(3, 'Koloryzacja pełna opcja'),
(4, 'Pasma pełna opcja'),
(5, 'Trwała ondulacja'),
(6, 'Modyfikacja koloru'),
(7, 'Dekoloryzacja koloru naturalnego'),
(8, 'Czesanie kok'),
(9, 'Czesanie wieczorowe upięcie'),
(10, 'Fryzury weselne');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`idKlienci`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`idKontakt`);

--
-- Indexes for table `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`iduslugi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `idKlienci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `idKontakt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `iduslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
