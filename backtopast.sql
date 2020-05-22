-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Maj 2020, 19:22
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `backtopast`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `actor`
--

CREATE TABLE `actor` (
  `id_actor` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `actor`
--

INSERT INTO `actor` (`id_actor`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'Winona', 'Ryder', NULL, NULL),
(2, 'Angelina', 'Jolie', NULL, NULL),
(3, 'Brittany', 'Murphy', NULL, NULL),
(4, 'Jason', 'Harner', NULL, NULL),
(5, 'John', 'Malkovich', NULL, NULL),
(6, 'Brad', 'Pitt', NULL, NULL),
(7, 'Vince', 'Vaughn', NULL, NULL),
(8, 'Leonardo', 'DiCaprio', NULL, NULL),
(9, 'Tom', 'Hardy', NULL, NULL),
(10, 'Domhnall', 'Gleeson', NULL, NULL),
(11, 'Jim', 'Sturgess', NULL, NULL),
(12, 'Kevin', 'Spacey', NULL, NULL),
(13, 'Kate', 'Bosworth', NULL, NULL),
(14, 'Tom', 'Hanks', NULL, NULL),
(15, 'Christopher', 'Walken', NULL, NULL),
(16, 'Kate', 'Winslet', NULL, NULL),
(17, 'Gloria', 'Stuart', NULL, NULL),
(18, 'James', 'McAvoy', NULL, NULL),
(19, 'Anya', 'Taylor', NULL, NULL),
(20, 'Betty', 'Buckley', NULL, NULL),
(21, 'Matt', 'Damon', NULL, NULL),
(22, 'Jessica', 'Chastain', NULL, NULL),
(23, 'Kristen', 'Wiig', NULL, NULL),
(24, 'Robin', 'Williams', NULL, NULL),
(25, 'Robert', 'Leonard', NULL, NULL),
(26, 'Ethan', 'Hawke', NULL, NULL),
(27, 'Mark', 'Ruffalo', NULL, NULL),
(28, 'Ben', 'Kingsley', NULL, NULL),
(29, 'Viggo', 'Mortensen', NULL, NULL),
(30, 'Mahershala', 'Ali', NULL, NULL),
(31, 'Linda', 'Cardellini', NULL, NULL),
(32, 'Lady', 'Gaga', NULL, NULL),
(33, 'Bradley', 'Cooper', NULL, NULL),
(34, 'Sam', 'Elliott', NULL, NULL),
(35, 'Mandy', 'Moore', NULL, NULL),
(36, 'Zachary', 'Levi', NULL, NULL),
(37, 'Donna', 'Murphy', NULL, NULL),
(38, 'Elizabeth', 'Mitchell', NULL, NULL),
(39, 'Eric', 'Cole', NULL, NULL),
(40, 'Denzel', 'Washington', NULL, NULL),
(41, 'Queen', 'Latifah', NULL, NULL),
(42, 'Kiefer', 'Sutherland', NULL, NULL),
(43, 'Rowan', 'Atkinson', NULL, NULL),
(44, 'Maxim', 'Baldry', NULL, NULL),
(45, 'Emma', 'Caunes', NULL, NULL),
(46, 'Peter', 'Egan', NULL, NULL),
(47, 'John', 'Mills', NULL, NULL),
(48, 'Johnny', 'Depp', NULL, NULL),
(49, 'Geoffrey', 'Rush', NULL, NULL),
(50, 'Orlando', 'Bloom', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `actor_film`
--

CREATE TABLE `actor_film` (
  `id_actor_film` bigint(20) UNSIGNED NOT NULL,
  `actor_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `actor_film`
--

INSERT INTO `actor_film` (`id_actor_film`, `actor_id`, `film_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 4, 2, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 2, 3, NULL, NULL),
(8, 6, 3, NULL, NULL),
(9, 7, 3, NULL, NULL),
(10, 8, 4, NULL, NULL),
(11, 9, 4, NULL, NULL),
(12, 10, 4, NULL, NULL),
(13, 11, 5, NULL, NULL),
(14, 12, 5, NULL, NULL),
(15, 13, 5, NULL, NULL),
(16, 8, 6, NULL, NULL),
(17, 14, 6, NULL, NULL),
(18, 15, 6, NULL, NULL),
(19, 8, 7, NULL, NULL),
(20, 16, 7, NULL, NULL),
(21, 17, 7, NULL, NULL),
(22, 18, 8, NULL, NULL),
(23, 19, 8, NULL, NULL),
(24, 20, 8, NULL, NULL),
(25, 21, 9, NULL, NULL),
(26, 22, 9, NULL, NULL),
(27, 23, 9, NULL, NULL),
(28, 24, 10, NULL, NULL),
(29, 25, 10, NULL, NULL),
(30, 26, 10, NULL, NULL),
(31, 8, 11, NULL, NULL),
(32, 27, 11, NULL, NULL),
(33, 28, 11, NULL, NULL),
(34, 29, 12, NULL, NULL),
(35, 30, 12, NULL, NULL),
(36, 31, 12, NULL, NULL),
(37, 32, 13, NULL, NULL),
(38, 33, 13, NULL, NULL),
(39, 34, 13, NULL, NULL),
(40, 35, 14, NULL, NULL),
(41, 36, 14, NULL, NULL),
(42, 37, 14, NULL, NULL),
(43, 2, 15, NULL, NULL),
(44, 38, 15, NULL, NULL),
(45, 39, 15, NULL, NULL),
(46, 40, 16, NULL, NULL),
(47, 2, 16, NULL, NULL),
(48, 41, 16, NULL, NULL),
(49, 2, 17, NULL, NULL),
(50, 26, 17, NULL, NULL),
(51, 42, 17, NULL, NULL),
(52, 43, 18, NULL, NULL),
(53, 44, 18, NULL, NULL),
(54, 45, 18, NULL, NULL),
(55, 43, 19, NULL, NULL),
(56, 46, 19, NULL, NULL),
(57, 47, 19, NULL, NULL),
(58, 48, 20, NULL, NULL),
(59, 49, 20, NULL, NULL),
(60, 50, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Biograficzny', NULL, NULL),
(2, 'Dramat', NULL, NULL),
(3, 'Psychologiczny', NULL, NULL),
(4, 'Akcja', NULL, NULL),
(5, 'Przygodowy', NULL, NULL),
(6, 'Kryminał', NULL, NULL),
(7, 'Komedia', NULL, NULL),
(8, 'Melodramat', NULL, NULL),
(9, 'Katastroficzny', NULL, NULL),
(10, 'Thriller', NULL, NULL),
(11, 'Sci-Fi', NULL, NULL),
(12, 'Muzyczny', NULL, NULL),
(13, 'Animacja', NULL, NULL),
(14, 'Familijny', NULL, NULL),
(15, 'Fantasy', NULL, NULL),
(16, 'Romans', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_film`
--

CREATE TABLE `category_film` (
  `id_category_film` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `category_film`
--

INSERT INTO `category_film` (`id_category_film`, `category_id`, `film_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 4, 3, NULL, NULL),
(6, 2, 4, NULL, NULL),
(7, 5, 4, NULL, NULL),
(8, 6, 5, NULL, NULL),
(9, 7, 6, NULL, NULL),
(10, 8, 7, NULL, NULL),
(11, 9, 7, NULL, NULL),
(12, 10, 8, NULL, NULL),
(13, 11, 9, NULL, NULL),
(14, 2, 10, NULL, NULL),
(15, 2, 11, NULL, NULL),
(16, 10, 11, NULL, NULL),
(17, 2, 12, NULL, NULL),
(18, 7, 12, NULL, NULL),
(19, 2, 13, NULL, NULL),
(20, 12, 13, NULL, NULL),
(21, 13, 14, NULL, NULL),
(22, 14, 14, NULL, NULL),
(23, 7, 14, NULL, NULL),
(24, 1, 15, NULL, NULL),
(25, 2, 15, NULL, NULL),
(26, 6, 16, NULL, NULL),
(27, 10, 16, NULL, NULL),
(28, 6, 17, NULL, NULL),
(29, 10, 17, NULL, NULL),
(30, 14, 18, NULL, NULL),
(31, 7, 18, NULL, NULL),
(32, 7, 19, NULL, NULL),
(33, 15, 20, NULL, NULL),
(34, 5, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `director`
--

CREATE TABLE `director` (
  `id_director` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `director`
--

INSERT INTO `director` (`id_director`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(1, 'James', 'Mangold', NULL, NULL),
(2, 'Clint', 'Eastwood', NULL, NULL),
(3, 'Doug', 'Liman', NULL, NULL),
(4, 'Alejandro', 'Gonzalez', NULL, NULL),
(5, 'Robert', 'Luketic', NULL, NULL),
(6, 'Steven', 'Spielberg', NULL, NULL),
(7, 'James', 'Cameron', NULL, NULL),
(8, 'Night', 'Shyamalan', NULL, NULL),
(9, 'Ridley', 'Scott', NULL, NULL),
(10, 'Peter', 'Weir', NULL, NULL),
(11, 'Martin', 'Scorsese', NULL, NULL),
(12, 'Peter', 'Farrelly', NULL, NULL),
(13, 'Bradley', 'Cooper', NULL, NULL),
(14, 'Nathan', 'Greno', NULL, NULL),
(15, 'Michael', 'Cristofer', NULL, NULL),
(16, 'Phillip', 'Noyce', NULL, NULL),
(17, 'Daniel', 'Caruso', NULL, NULL),
(18, 'Steve', 'Bendelack', NULL, NULL),
(19, 'Mel', 'Smith', NULL, NULL),
(20, 'Gore', 'Verbinski', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `film`
--

CREATE TABLE `film` (
  `id_film` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pathname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premiere_year` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrowed` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `film`
--

INSERT INTO `film` (`id_film`, `title`, `pathname`, `premiere_year`, `description`, `borrowed`, `director_id`, `created_at`, `updated_at`) VALUES
(1, 'Przerwana lekcja muzyki', 'przerwana_lekcja_muzyki', 1999, 'Susanna poznaje Lisę w zakładzie psychiatrycznym. Od niej uczy się akceptacji siebie.', 0, 1, '2020-05-21 12:28:45', NULL),
(2, 'Oszukana', 'oszukana', 2008, 'Los Angeles, 1928 rok. Christine wychodzi do pracy, zostawiając kilkuletniego syna w domu. Gdy wraca, dziecka nie ma.', 0, 2, '2020-05-21 12:28:45', NULL),
(3, 'Mr. & Mrs Smith', 'mr_&_mrs_Smith', 2005, 'Para płatnych zabójców pracujących dla dwóch tajnych agencji wiedzie monotonne małżeńskie życie. Niespodziewanie dostają zlecenie na siebie nawzajem.', 0, 3, '2020-05-21 12:28:45', NULL),
(4, 'Zjawa', 'zjawa', 2015, 'Hugh Glass szuka zemsty na ludziach, którzy zostawili go poważnie rannego po ataku niedźwiedzia.', 0, 4, '2020-05-21 12:28:45', NULL),
(5, '21', '21', 2008, 'Wybitnie zdolni studenci prestiżowej uczelni dzięki wiedzy z zakresu matematyki wygrywają olbrzymie sumy w blackjacka. Tymczasem właściciele kasyn zabezpieczają się przed kolejnymi stratami.', 0, 5, '2020-05-21 12:28:45', NULL),
(6, 'Złap mnie, jeśli potrafisz', 'zlap_mnie_jesli_potrafisz', 2002, 'Oparta na faktach historia młodego fałszerza, który w latach 60., podając się za pilotów, lekarzy i profesorów, wyłudził z banków ponad 2,5 mln dolarów.', 0, 6, '2020-05-21 12:28:45', NULL),
(7, 'Titanic', 'titanic', 1997, 'Rok 1912, brytyjski statek Titanic wyrusza w swój dziewiczy rejs do USA. Na pokładzie emigrant Jack przypadkowo spotyka arystokratkę Rose.', 10, 7, '2020-05-21 12:28:45', NULL),
(8, 'Split', 'split', 2016, 'Mężczyzna o mnogiej osobowości porywa trzy nastolatki. Okazuje się, że jedna z jaźni zaczyna dominować nad innymi.', 0, 8, '2020-05-21 12:28:45', NULL),
(9, 'Marsjanin', 'marsjanin', 2015, 'Po nieudanej ekspedycji Mark zostaje sam na Marsie. Mimo znikomych zapasów oraz zerwanej łączności z dowództwem mężczyzna stara się przetrwać w trudnych warunkach.', 0, 9, '2020-05-21 12:28:45', NULL),
(10, 'Stowarzyszenie Umarłych Poetów', 'stowarzyszenie_umarlych_poetow', 1989, 'Charyzmatyczny nauczyciel języka angielskiego w konserwatywnym liceum stara się wpoić uczniom miłość do poezji i ideę \"carpe diem\".', 5, 10, '2020-05-21 12:28:45', NULL),
(11, 'Wyspa tajemnic', 'wyspa_tajemnic', 2010, 'Szeryf federalny Daniels stara się dowiedzieć, jakim sposobem z zamkniętej celi w pilnie strzeżonym szpitalu dla chorych psychicznie przestępców zniknęła pacjentka.', 98, 11, '2020-05-21 12:28:45', NULL),
(12, 'Green Book', 'green_book', 2018, 'Drobny cwaniaczek z Bronksu zostaje szoferem ekstrawaganckiego muzyka z wyższych sfer i razem wyruszają na wielotygodniowe tournée.', 26, 12, '2020-05-21 12:28:45', NULL),
(13, 'Narodziny gwiazdy', 'narodziny_gwiazdy', 2018, 'Płomienny romans między dogasającą gwiazdą muzyki country a nieznaną piosenkarką zmienia ich życie na zawsze.', 14, 13, '2020-05-21 12:28:45', NULL),
(14, 'Zaplątani', 'zaplatani', 2010, 'Żyjąca na odludziu Roszpunka, której włosy mają magiczną moc, marzy, by poznać świat. Jej przepustką do wolności jest czarujący łotrzyk Flynn.', 7, 14, '2020-05-21 12:28:45', NULL),
(15, 'Gia', 'gia', 1998, 'Burzliwe życie oraz kariera Gii Carangi, niezależnej i pięknej kobiety, która stała się jedną z legend świata mody.', 22, 15, '2020-05-21 12:28:45', NULL),
(16, 'Kolekcjoner kości', 'kolekcjoner_kosci', 1999, 'Ekranizacja powieści Jefferego Deavera. Sparaliżowany i pogrążony w depresji detektyw Lincoln Rhyme zostaje poproszony o pomoc w schwytaniu seryjnego mordercy.', 18, 16, '2020-05-21 12:28:45', NULL),
(17, 'Złodziej życia', 'zlodziej_zycia', 2004, 'Agentka FBI pomaga kanadyjskiej policji w ujęciu seryjnego mordercy.', 53, 17, '2020-05-21 12:28:45', NULL),
(18, 'Wakacje Jasia Fasoli', 'wakacje_jasia_fasoli', 2007, 'Jaś Fasola wygrywa wycieczkę i wyrusza w pełną przygód podróż do Cannes.', 102, 18, '2020-05-21 12:28:45', NULL),
(19, 'Jaś Fasola: Nadciąga totalny kataklizm', 'jas_fasola_nadciaga_totalny_kataklizm', 1997, 'Nieudolny Jaś Fasola przybywa do Ameryki, gdzie dostaje odpowiedzialne zadanie opieki nad cennym obrazem zakupionym przez muzeum w Los Angeles.', 65, 19, '2020-05-21 12:28:45', NULL),
(20, 'Piraci z Karaibów: Klątwa Czarnej Perły ', 'piraci_z_karaibow_klatwa_czarnej_perly', 2003, 'Kowal Will Turner sprzymierza się z kapitanem Jackiem Sparrowem, by odzyskać swoją miłość - porwaną córkę gubernatora.', 48, 20, '2020-05-21 12:28:45', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2014_10_12_000000_create_users_table', 1),
(66, '2014_10_12_100000_create_password_resets_table', 1),
(67, '2020_05_19_184456_create_actor_table', 1),
(68, '2020_05_19_185408_create_director_table', 1),
(69, '2020_05_19_185844_create_category_table', 1),
(70, '2020_05_19_190534_create_film_table', 1),
(71, '2020_05_20_102640_create_actor_film_table', 1),
(72, '2020_05_20_103340_create_category_film_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Indeksy dla tabeli `actor_film`
--
ALTER TABLE `actor_film`
  ADD PRIMARY KEY (`id_actor_film`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `category_film`
--
ALTER TABLE `category_film`
  ADD PRIMARY KEY (`id_category_film`);

--
-- Indeksy dla tabeli `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_director`);

--
-- Indeksy dla tabeli `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_password_unique` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT dla tabeli `actor_film`
--
ALTER TABLE `actor_film`
  MODIFY `id_actor_film` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `category_film`
--
ALTER TABLE `category_film`
  MODIFY `id_category_film` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT dla tabeli `director`
--
ALTER TABLE `director`
  MODIFY `id_director` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `film`
--
ALTER TABLE `film`
  MODIFY `id_film` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
