-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Czas generowania: 15 Sty 2017, 20:42
-- Wersja serwera: 5.5.42
-- Wersja PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `ETL`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinia`
--

CREATE TABLE `opinia` (
  `id` int(11) NOT NULL,
  `produkt_id` int(11) NOT NULL,
  `wady_produktu` varchar(500) COLLATE utf8_polish_ci DEFAULT NULL,
  `zalety_produktu` varchar(500) COLLATE utf8_polish_ci DEFAULT NULL,
  `podsumowanie` varchar(10000) COLLATE utf8_polish_ci NOT NULL,
  `liczba_gwiazdek` varchar(5) COLLATE utf8_polish_ci NOT NULL,
  `autor_opinii` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `data_wystawienia_opinii` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `polecam_nie_polecam` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `opinia_przydatna` int(11) DEFAULT NULL,
  `opinia_nieprzydatna` int(11) DEFAULT NULL,
  `id_opinii_ceneo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `opinia`
--

INSERT INTO `opinia` (`id`, `produkt_id`, `wady_produktu`, `zalety_produktu`, `podsumowanie`, `liczba_gwiazdek`, `autor_opinii`, `data_wystawienia_opinii`, `polecam_nie_polecam`, `opinia_przydatna`, `opinia_nieprzydatna`, `id_opinii_ceneo`) VALUES
(254, 48, '', 'jakość wydajność', 'Dobry stosunek jakoś/cena. Dla mnie największy minus to brak wyjścia VGA. Poza tym wszystko OK.', '5/5', 'Piotr', 'Wystawiono 10 miesięcy temu', 'Polecam', 1, 1, 3669949),
(255, 48, 'jakość wydajność wygląd', '', 'Wszystko wygląda pięknie... dopóki się nie zepsuje. Serwis Lenovo to koszmar, brak kontaktu, tygodnie oczekiwania - zdecydowanie odradzam!', '0,5/5', 'mirex34', 'Wystawiono 9 miesięcy temu', '', 4, 4, 3727333),
(256, 48, 'jakość', 'wydajność wygląd', 'Długo czekałem na swój wymarzony komputer. Aż w końcu jest. I to z wadą fabryczną. Powszechne w tym modelu Y700 i poprzedniku Y50-70 poziome paski biegające po ekranie. Wystarczy wpisać w google Y700 / Y50 flickering problem. Już czwarty raz odsyłam do serwisu tego laptopa z tą wadą. Serwis (Medion w Niemczech) robi zdjęcia rzekomych uszkodzeń mechanicznych, i wysyła mi fakturę na 400zł pisząc, że nie mam już uprawnień do gwarancji. Interweniuję w Lenovo Polska wisząc na telefonie godzinami, aż w końcu udaje się "naprawić" sprzęt w ramach gwarancji. Po czym wada pojawia się po 7 dniach lub po miesiącu. Znów zdjęcia rzekomych uszkodzeń, znów faktura na 400zł, znów wiszenie na słuchawce z Lenovo Polska, i znów nieskuteczna naprawa. Nie wiedziałem, dlaczego Lenovo jest tańsze od konkurencji. Teraz już niestety wiem. Praktycznie brak serwisu, olewcze podejście do klienta (mamy ich w końcu miliony). Wszystko pięknie, dopóki działa, jak zacznie się psuć, to koniec. Lepiej już kupić jakąś markową używkę i serwisować ją prywatnie, niż kupować Lenovo na gwarancji, serio! Przynajmniej mniej nerwów. A ma być przecież odwrotnie, prawda?', '0,5/5', 'Arek', 'Wystawiono 7 miesięcy temu', '', 3, 1, 3792658),
(257, 48, '', 'bateria jakość wydajność wygląd', 'Do tej pory jak najlepiej. Przez aluminiową obudowę nie jest najlżejszy, ale decyzje podjąłem świadomie. Zawiasy i chłodzenie bardzo dobrze wykonane. Największy minus to że zostają ślady od palców... Jeżeli to ma być największa wada to się cieszę ;) Windows 10 całkiem spoko.', '5/5', 'Łukasz', 'Wystawiono 9 miesięcy temu', 'Polecam', 0, 1, 3708550),
(258, 48, '', 'jakość wydajność wygląd', 'wszystko ok. Cichy podczas pracy (programowanie). wykonanie bardzo dobre.', '5/5', 'Piotr', 'Wystawiono 10 miesięcy temu', 'Polecam', 0, 1, 3682572),
(259, 48, '', '', 'Produkt który w swojej klasie ma najlepszy stosunek jakości do ceny. Jedną z niewielu wad jest błyszcząca matryca i elementy obudowy przez co się szybko palcują i brudzą', '4/5', 'Jacek', 'Wystawiono 2 tygodnie temu', 'Polecam', 0, 0, 4331810),
(260, 48, '', '', 'Laptop kupiony miesiąc temu. Wizualnie, poza odciskami palców na obudowie prezentuje się bardzo dobrze. Jednak jeśli chodzi o funkcjonalność jak na razie oceniam go bardzo słabo. Występują kłopoty ze sterownikami, po aktualizacji Windowsa 10, klawiatura przestała działać. Często się crashuje, ekran się wyłącza. Na dzień dzisiejszy nie polecam zakupu.', '0,5/5', 'Tomasz', 'Wystawiono miesiąc temu', '', 0, 0, 4287376),
(261, 48, '', '', 'ok', '5/5', 'Stanisław', 'Wystawiono 2 miesiące temu', 'Polecam', 0, 0, 4272630),
(262, 48, '', '', 'Odradzam! NIE KUPUJCIE TEGO DZIADOSTWA! Komputer tragiczny, matryca nierównomiernie podświetlona, przegrzewa się, resetuje bez powodu, był w serwisie i wrócił nienaprawiony!', '1/5', 'Mateusz', 'Wystawiono 2 miesiące temu', '', 0, 0, 4249590),
(263, 48, 'crashe problemy sterownikowe problemy z aktualizacjami zintegrowana karta graficzna', 'ładne podświetlenie klawiatury', 'Bardzo zły zakup. Towar kupiłem za duże pieniądze, okazuje się, że zrobiłem bład. Po pierwsze zintegrowana karta graficzna ma problem matematyczny. Aktualizacja Biosa nie pomaga, sterowników nie pozwala postawić system. W ogóle problem z aktualizacjami ma każdy podzespół, trzeba robić je ręcznie. Filmy na Netflixie i YT sypią się, żaden codec nie pomaga, prawdopodobnie karta zintegrowana ma z tym problem, a GeForce nie przejmuje zadań przy zwykłym filmie. Przeglądarki crash''ują. Dramat! Generalnie kupno zapewnia problemy. Nie polecam', '1/5', 'Jacek', 'Wystawiono 3 miesiące temu', '', 0, 0, 4149036),
(289, 49, '', '', 'Świetny telefon. Jakość wykonania, stabilność systemu i aplikacji na bardzo wysokim poziomie. Bardzo ładne zdjęcia. Bateria przy średnim używaniu (rozmowy, sms, mms, zdjęcia i internet lte) wytrzymuje ponad 2 dni. Fantastyczny tryb bardzo niskiego zużycia baterii - telefon przechodzi w tryb monochromatyczny i umożliwia dostęp do najbardziej niezbędnych aplikacji. Polecam.', '5/5', 'laick', 'Wystawiono 10 miesięcy temu', 'Polecam', 32, 6, 3674247),
(290, 49, '', '', 'Telefon posiadam jeden dzień, tak więc na opinie dotyczące użytkowania bedą ogólne- prędzej miałam iPhone 5s. Samsung ma większy wyświetlacz, za model 6s musiałabym zapłacić jeszcze razy tyle co za samsunga. Przyzwyczaiłam się do odblokowywania blokady telefonu odciskiem- duży plus, że samsung tą opcje posiada. Wyświetlacz super, zdjecia lepsze niz w 5s. Telefon póki co dziala bardzo szybko, podczas użytkowania iphona 5s przyzwyczajona jestem do niezawodnego działania systemu- mam nadzieje ze w samsungu tez tak bedzie. W sferisie otrzymałam duuuuzo gratisów : powerbank, ładowarkę samochodową, uchwyt samochodowy, kartę samsung, kartę play.', '5/5', 'Monika', 'Wystawiono rok temu', 'Polecam', 28, 20, 3547415),
(291, 49, '', 'czytnik linii papilarnych ekran amoled full hd solidne wykonanie szybki', 'Dobra jakość i parametry za rozsądną cenę.', '5/5', 'Markoman', 'Wystawiono 10 miesięcy temu', 'Polecam', 9, 8, 3690254),
(292, 49, '', '', 'superrr i jestem zadowolony na tą cene oczywiste ze naj....', '4,5/5', 'piotr pepe', 'Wystawiono 6 miesięcy temu', 'Polecam', 4, 5, 3863878),
(293, 49, '', '', 'produkt wart swojej ceny', '5/5', 'Zbigniew', 'Wystawiono 11 miesięcy temu', 'Polecam', 6, 18, 3618710),
(294, 49, '', 'czas pracy na baterii funkcjonalność wygląd', 'Jak na razie nie mam uwag', '5/5', 'Szymon', 'Wystawiono 8 miesięcy temu', 'Polecam', 3, 4, 3769819),
(295, 49, '', '', 'Bardzo udany telefon', '5/5', 'Użytkownik Ceneo', 'Wystawiono 10 miesięcy temu', 'Polecam', 4, 12, 3684163),
(296, 49, '', '', 'OK', '5/5', 'Robert', 'Wystawiono 11 miesięcy temu', 'Polecam', 7, 42, 3628187),
(297, 49, '', '', 'Polecam.', '5/5', 'Przemek', 'Wystawiono 9 miesięcy temu', 'Polecam', 3, 8, 3730516),
(298, 49, '', '', 'super telefon', '5/5', 'PawelDudzic', 'Wystawiono 9 miesięcy temu', 'Polecam', 3, 8, 3725262);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `rodzaj_urzadzenia` tinytext COLLATE utf8_polish_ci NOT NULL,
  `marka` tinytext COLLATE utf8_polish_ci NOT NULL,
  `model` tinytext COLLATE utf8_polish_ci NOT NULL,
  `dodatkowe_uwagi` tinytext COLLATE utf8_polish_ci
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `rodzaj_urzadzenia`, `marka`, `model`, `dodatkowe_uwagi`) VALUES
(48, 'Komputery', 'Lenovo', 'Lenovo Y700 15 (80NV00D8PB)', 'Bez systemu, 15,6 cala, procesor Intel Core i7 3400 MHz, 8GB RAM, dysk 1000 GB HDD, grafika GeForce GTX 960M'),
(49, 'Telefony i akcesoria', 'Zgłoś błąd w specyfikacji', 'Samsung Galaxy A5 A510F 2016 Czarny', 'Smartfon z ekranem 5,2 cala. Aparat 13 Mpix, pamięć 2 GB RAM, WiFi: Tak, Dual SIM: Nie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `opinia`
--
ALTER TABLE `opinia`
  ADD PRIMARY KEY (`id`,`produkt_id`),
  ADD UNIQUE KEY `id_opinii_ceneo` (`id_opinii_ceneo`),
  ADD KEY `fk_opinia_produkt` (`produkt_id`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `opinia`
--
ALTER TABLE `opinia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `opinia`
--
ALTER TABLE `opinia`
  ADD CONSTRAINT `fk_opinia_produkt` FOREIGN KEY (`produkt_id`) REFERENCES `produkt` (`id`);
