-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Kwi 2024, 07:53
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `las_czarnas`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czesci`
--

CREATE TABLE `czesci` (
  `id_czesci` int(255) NOT NULL,
  `nazwa` varchar(255) DEFAULT NULL,
  `stan` varchar(255) DEFAULT NULL,
  `kategoria` varchar(255) DEFAULT NULL,
  `producent` varchar(255) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `cena` varchar(40) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `ilosc` smallint(255) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `czesci`
--

INSERT INTO `czesci` (`id_czesci`, `nazwa`, `stan`, `kategoria`, `producent`, `opis`, `cena`, `zdjecie`, `ilosc`) VALUES
(1, 'Lusterko lewe do Forda Focusa', 'Najlepszy', 'Lusterka', 'autorskie', 'W bardzo dobrym stanie zachowane, lepszego nie znajdziesz na terenie całej Temerii', '100', 'lusterkoff.jpg', 2),
(2, 'Katalizator z demontażu Mercedesa E190', 'Nieznany bo \"pożyczony\"', 'Katalizatory', 'Sąsiad spod 4', 'Sąsiad złodziej więc kradzież się nie liczy', '300', 'katalizator1.png', 1),
(3, 'Mateusz Serek', 'Krytyczny', 'Serki i takie tam', 'ZS6', 'Lubi łamać kości drugoklasistom', 'kość', 'ser.png', 1),
(4, 'Zderzaczek', 'Dobry', 'Zderzaki', 'Toyota', 'Zderzak jest, auta ni ma', 'Nie stać cie', 'zderzak.jfif', 3),
(5, 'Kabel RJ45', 'Skręcony', 'Kabelki', 'Informatycy z kopernika', 'Możesz mieć kierownice z internetem', 'ZA DARMO', 'kabl.jfif', 255),
(6, 'Grzybulec', 'Zebrany', 'Grzyby', 'Nintendo', 'Powiększa cię i daje dodatkowe życie', 'ŁIHI!!', 'MushroomMarioKart8.webp', 152),
(7, 'Kondensator strumienia', 'Stary ale jary', 'Czas', 'Dr. Emmet Lathrop Brown', 'Cofa cie w czasie', 'Kilka kostek uranu', 'dims.jfif', 1),
(8, '15 beczek Olejzyny PAKIET', 'Rozlana', 'Paliwo', 'Baron Smardz-Rychły', '(paliwo limitowane -> wycofane z obiegu)', '200$ za baryłkę', '5879916818_98ee9edb59_b.jpg', 15),
(9, 'Homik do silnika', 'Umięsniony', 'Zwierzęta', 'K.M.', 'Jest tak szybki że nawet sąsiadka z monitoringiem 24/7 cie nie zauważy (brak kręciołka w zestawie)', '20PLN', 'homik.png', 150);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(255) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `pwrd` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `miasto` varchar(255) DEFAULT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `kod_pocztowy` varchar(255) DEFAULT NULL,
  `punkty_stalego_klienta` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `username`, `pwrd`, `email`, `imie`, `nazwisko`, `telefon`, `miasto`, `adres`, `kod_pocztowy`, `punkty_stalego_klienta`) VALUES
(9, 'longin', 'abe31fe1a2113e7e8bf174164515802806d388cf4f394cceace7341a182271ab', 'longin@kopernikus.pl', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id_pracownika` int(255) NOT NULL,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(255) DEFAULT NULL,
  `wymiar_czasu_pracy` varchar(255) DEFAULT NULL,
  `wynagrodzenie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id_samochodu` int(255) NOT NULL,
  `rocznik` year(4) DEFAULT NULL,
  `cena` varchar(40) DEFAULT NULL,
  `przebieg` int(255) DEFAULT NULL,
  `rejestracja` varchar(255) DEFAULT NULL,
  `data_p_rejestracji` date DEFAULT NULL,
  `stan` varchar(255) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `producent` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id_samochodu`, `rocznik`, `cena`, `przebieg`, `rejestracja`, `data_p_rejestracji`, `stan`, `zdjecie`, `model`, `producent`) VALUES
(1, 1939, '120', 2147483647, 'WA4723', '1939-10-01', 'Dobry', 'micra.jpg', 'Micra 93', 'Nissan'),
(2, 2008, 'dwa kolana', 10000, 'SL0827', '2008-07-19', 'Głodny', 'cheese.jpg', 'Mateusz', 'Serek'),
(3, 2015, '14,500', 10000, 'XD4201', '2018-11-24', 'Idealny', 'miata.jfif', 'MX-5 \"Miata </br> (rejestracja w zestawie)', 'Mazda'),
(4, 2006, 'ODDAMY ZA DOPŁATĄ', -9386487, 'EL123', '2006-06-23', 'Rozwalony', 'original.jpg', 'Gówno', 'Pixar'),
(5, 2137, '21372137€', 21372137, 'WX2137', '2005-05-02', 'Święty', 'Papamobil.webp', '660 Papamobile', 'STAR'),
(6, 1985, '400€', 123455432, 'ITSAME', '1992-08-27', 'Szybki', 'wosacz.jfif', 'Pewien sławny wąsacz', 'Nintendo'),
(8, 0000, '99$', 49869376, 'WR2349', '1957-01-03', 'Metalowy', 'iss.jfif', 'Puszka na kółkach', 'Coca-Cola'),
(9, 1997, '7,999,999$', 2147483647, 'BL5024', '1997-09-30', 'Mega szybki', 'rb16.jpg', 'Bolid RB16 Maxa Verstappena', 'Czerwony byk'),
(10, 2012, '2,50$', -2147483648, 'OL3891', '2023-06-13', 'Kruchy', 'tesla.jpeg', 'Tesla', 'Elon Musk'),
(11, 2011, 'weź na to nawet nie patrz', 1, 'W376MNV', '2017-03-25', 'Git', 'mpla.jpg', 'Multipla', 'Fiat'),
(12, 2006, 'Nie ma odpowiedniej ceny', 2147483647, 'SPEEEEEEEEEEEED', '2006-11-11', 'KOZACKI', 'gigachad szef totalny.jpg', 'Makłini </br> szefik totalny i gigaczad', 'Disney Pixar'),
(13, 2010, '8500000PLN', 15, '(brak oznaczeń homologacyjnych)', '2010-12-03', 'spalone opony', 'bolid czarnucha.jpg ', ' AMG Petronas F1 ', ' Mercebenz - dens '),
(14, 1939, '33000PLN', 0, ' G1 BATMAN ', '0000-00-00', ' sklockowany ', ' batman.jpg ', ' Luftmysza - chop Nietoperkomobil ', ' Detektywistyczne Komiksy ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `terminarz`
--

CREATE TABLE `terminarz` (
  `id_wizyty` int(255) NOT NULL,
  `data_wizyty` date DEFAULT NULL,
  `id_pracownika` int(255) DEFAULT NULL,
  `id_klienta` int(255) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `zatwierdzono` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakupione_auta`
--

CREATE TABLE `zakupione_auta` (
  `id_zakupu` int(255) NOT NULL,
  `id_klienta` int(255) DEFAULT NULL,
  `id_samochodu` int(255) DEFAULT NULL,
  `data_transakcji` date DEFAULT NULL,
  `kwota` int(255) DEFAULT NULL,
  `reklamowano` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakupione_czesci`
--

CREATE TABLE `zakupione_czesci` (
  `id_zakupu` int(255) NOT NULL,
  `id_klienta` int(255) DEFAULT NULL,
  `id_czesci` int(255) DEFAULT NULL,
  `data_transakcji` date DEFAULT NULL,
  `kwota` int(255) DEFAULT NULL,
  `reklamowano` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `czesci`
--
ALTER TABLE `czesci`
  ADD PRIMARY KEY (`id_czesci`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownika`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id_samochodu`);

--
-- Indeksy dla tabeli `terminarz`
--
ALTER TABLE `terminarz`
  ADD PRIMARY KEY (`id_wizyty`);

--
-- Indeksy dla tabeli `zakupione_auta`
--
ALTER TABLE `zakupione_auta`
  ADD PRIMARY KEY (`id_zakupu`);

--
-- Indeksy dla tabeli `zakupione_czesci`
--
ALTER TABLE `zakupione_czesci`
  ADD PRIMARY KEY (`id_zakupu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `czesci`
--
ALTER TABLE `czesci`
  MODIFY `id_czesci` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id_samochodu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

--
-- Tworzenie użytkownika customer
--
CREATE USER 'customer'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'customer'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
