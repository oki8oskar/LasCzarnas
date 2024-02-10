# Poniższy plik opisuje strukturę bazy danych oraz sposób łaczenia z nią.

  1. Struktura bazy danych:
    Funkcje poszczególnych tabeli
      1. czesci - w tej tabeli przechowywane są dane o częściach dostępnych w sklepie
      2. klienci - w tej tabeli przechowywane są dane o użytkownikach
      3. modele - w tej tabeli przechowywane są dane o dostępnych w salonie modelach
      4. pracownicy - w tej tabeli przechowywane są dane o pracownikach mających konta na panelu administratorskim
      5. samochody - w tej tabeli przechowywane są dane o konkretnych pojazdach dostępnych w salonie
      6. terminarz - w tej tabeli przechowywane są dane o umówionych spotkaniach z klientami
      7. zakupione_auta - w tej tabeli przechowywane są dane o umowach kupna-sprzedarzy samochodów
      8. zakupione_czesci - w tej tabeli przechowywane są dane o zakupionych częsciach

    2. Operacje na bazach danych z poziomu strony
      klienta:
        Klient poprzez stronę może:
          Utworzyć konto klienta - wymagane są od niego 3 dane: nazwa użytkownika, adres e-mail oraz hasło. Dane są wpisywane na stronie login.php w formularzu rejestracji, następnie wysyłane są metodą POST do skryptu auth.php, który łączy się z bazą danych, sprawdza poprawność wprowadzonych danych oraz wprowadza je do tabeli Klienci.
          Zalogować się na swoje konto - na stronie login.php wprowadza on nazwę swoją użytkownika oraz hasło, które metodą POST jest przesyłane do skyptu auth.php, który sprawdza, który łączy się z bazą danych, sprawdza poprawność wprowadzonych danych oraz zapisuje nazwę użytkownika w zamiennej $_SESSION["username"], dzięki czemu inne podstrony mogą zidentyfikioać użytkownika.
          Kupić auto/część - poprzez stronę view_item.php klient może dokonać transakcji i kupić samochoód lub część [TODO]
          Umówić się na wizytę - [TODO]
      pracownika:
        Pracownik poprzez sronę może: [TODO]

    3. Zabezpieczenia:
      Wszystkie hasła w bazie danych są hahsowane z poziomy skryptu php na stronie.
