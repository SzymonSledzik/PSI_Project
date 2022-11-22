-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lis 2022, 14:25
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `paiproject`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `message` varchar(512) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`ID`, `name`, `surname`, `message`, `page`) VALUES
(4, 'Yee', 'Baka', 'yeti je orzechy', 'walychrobrego'),
(5, 'Yee', 'Baka', 'Pali gnochi', 'bramaportowa'),
(6, 'Jakub', 'P.', 'Rewelacyjna strona będzie 100%!!', 'bramaportowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `monuments`
--

CREATE TABLE `monuments` (
  `ID` int(11) NOT NULL,
  `monument` varchar(255) NOT NULL,
  `info` varchar(512) NOT NULL,
  `img` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `monuments`
--

INSERT INTO `monuments` (`ID`, `monument`, `info`, `img`, `page`) VALUES
(2, 'Brama Portowa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non consequat sapien, sit amet malesuada ligula. Mauris vitae leo ut turpis vestibulum maximus ut in urna. Donec in purus ornare, iaculis felis non, iaculis risus. Cras a eleifend ligula. Vestibulum ac malesuada orci. Quisque quis iaculis odio, a tincidunt erat. Donec eu rutrum nulla, ut aliquam magna. Curabitur pellentesque magna nec nisi hendrerit rhoncus. Integer quis ante non quam auctor lacinia ut eu risus. Suspendisse nec tellus sit cras.', 'https://zabytki.szczecin.pl/uploads/_DE7Whn2fQJj.jpg', 'bramaportowa'),
(3, 'Wały Chrobrego', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non consequat sapien, sit amet malesuada ligula. Mauris vitae leo ut turpis vestibulum maximus ut in urna. Donec in purus ornare, iaculis felis non, iaculis risus. Cras a eleifend ligula. Vestibulum ac malesuada orci. Quisque quis iaculis odio, a tincidunt erat. Donec eu rutrum nulla, ut aliquam magna. Curabitur pellentesque magna nec nisi hendrerit rhoncus. Integer quis ante non quam auctor lacinia ut eu risus. Suspendisse nec tellus sit cras.', 'https://zabytki.szczecin.pl/uploads/_RDJHZ3MITnO.jpg', 'walychrobrego');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `uname`, `passwd`) VALUES
(1, 'Pupa', 'Dupa'),
(2, 'Zupa', 'Kupa'),
(4, 'Dupa22', 'Pupa22');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `monuments`
--
ALTER TABLE `monuments`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `monuments`
--
ALTER TABLE `monuments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
