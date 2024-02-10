-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 03:03 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `las_czarnas`
--
CREATE DATABASE IF NOT EXISTS `las_czarnas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `las_czarnas`;

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
  `opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `username`, `pwrd`, `email`, `imie`, `nazwisko`, `telefon`, `miasto`, `adres`, `kod_pocztowy`, `punkty_stalego_klienta`) VALUES
(3, 'adam', 'haslo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'andrzej', '$2y$10$e1nou.31R4Vyd7PSZ7mZPOXtuTS4Nkq31sqYY9jhb2wdcprrJQ6ne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'kutas', '$2y$10$Um8QdJSZBozT8sMj6JDaIuQQf8Tvy4TdSNVaWwCEAswFhP0aFVw7e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', '$2y$10$lKH8HVU3tGlk3/wOHvOhPO3XJ7cfOQ30u/Ucxo41CKZ7LjITmqjia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `id_modelu` int(255) NOT NULL,
  `nazwa` varchar(255) DEFAULT NULL,
  `marka` varchar(255) DEFAULT NULL,
  `typ` varchar(255) DEFAULT NULL,
  `rozpoczecie_produkcji` year(4) DEFAULT NULL,
  `zakonczenie_produkcji` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id_samochodu` int(255) NOT NULL,
  `id_modelu` int(255) DEFAULT NULL,
  `rocznik` year(4) DEFAULT NULL,
  `cena` int(255) DEFAULT NULL,
  `przebieg` int(255) DEFAULT NULL,
  `rejestracja` varchar(255) DEFAULT NULL,
  `data_p_rejestracji` date DEFAULT NULL,
  `stan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Indeksy dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id_modelu`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownika`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD KEY `samochody_FKIndex1` (`id_modelu`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;