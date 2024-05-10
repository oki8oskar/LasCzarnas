<?php
    /*
    auth.php to kombajn do wykonywania operacji na kontach użytkowników
    obsługuje on formularz ze strony login.php i przekierowywuje na stronę konta
    */

    
    if(!($action = $_GET['a'])){ //sprawdzamy co wym razem ten user chece zrobić
      header("Location: index.php"); //jak nie chce nic zrobić to niech wypierdziela na stronę główną
      die(); //no i zdychamy, bo nie jesteśmy potrzebni światu
    }

    $con = @mysqli_connect("localhost","customer","","las_czarnas"); //dane do połączenia z bazą danych

    if ($error = @mysqli_connect_errno()) { //no errors?
      header("Location: error.php?error_code=$error");  //sory mordeczko jakiś błąd połączenia, idź do error.php on ci więcej powie
      die(); //gdzie mój cyjanek potasu?
    }else{
        switch($action){ //to jak już wiemy co użytkownik chce zrobić to uruchamiamy odpowiedni skrypt
            case("new_account"): //user chce stworzyć konto
                $username = $_POST['login']; //więc bierzemy od niego login...
                $pwrd = $_POST['pwrd']; //... i jego hasło..
                $pwrd_r = $_POST['pwrd_r']; //... jakie te hasło było?...
                $email = $_POST['email']; //...weź no jeszcze maila daj

                if(!str_contains($email, '@')){ //sprawdzamy czy mail ma małpę
                  header("Location: login.php?error=incorrect_email"); //jak user z nas robi debila i wpisuje maila bez @ to każemy mu wypierdzielać jeszcze raz wpisywać wszystkie dane
                  die(); //o! żyletka! ciekawe jak se radzi z cięciem skryptu
                }
                if ($pwrd != $pwrd_r) {
                  header("Location: login.php?error=password_repeat"); //jak user źle powtórzył hasło to każemy mu wypierdzielać jeszcze raz wpisywać wszystkie dane
                  die(); // ten pistolet jest zabawkowy c'n?
                }

                $pwrd = hash('sha256', $pwrd); //hashujemy hasło na wypadej jakby ktoś zobaczył je w bazie danych

                $q = "SELECT username FROM klienci WHERE username = '".$username."';"; //kwerenda sprawdzająca czy juz nie ma takiego usernamea
                $query = @mysqli_query($con, $q); //wykonujemy ją
                if($n = @mysqli_fetch_row($query)){ //jeśli sql zwrócił cokolwiek to znaczy że jest
                    header("Location: login.php?error=username"); // każemy userowi iść do okienka nr 5 i spróbować z innym usernamem
                    die(); // to bezpieczne puszczać fajerwerki z ręki?
                }

                $q = "INSERT INTO klienci(username,pwrd,email) VALUES('".$username."','".$pwrd."','".$email."');"; // jak user przeszedł przez ten jakże skomplikowany proces sprawdzania wszystkich danych
                $query = @mysqli_query($con, $q); // to możemy wprowadzić te dane do bazy danych
                if($error = @mysqli_error($con)){ // oj kolego cyba jakiś errorek się zdarzył!
                        echo "Nieznany błąd!"; // ja przecież nic nie wiem
                        die(); // i więcej się nie dowiesz
                }else{
                    echo "Pomyślnie utworzono konto!"; // tu doszło do sigmy
                    session_start(); // no to startujemy sesję
                    $_SESSION['username'] = $result['username']; //no to z nowiuśkim usernamem odsyłamy kolegę do strony konta
                    header("Location: account.php?first_time=true"); // say my name [account.php referencja linijka 40 i 4]
                }
                break;
            case("login"): //user chce się zalogować
                $username = $_POST['login'];  //no to bierzemy jego login
                $pwrd = hash('sha256', $_POST['pwrd']); // potrzba by też jego hasło

                $q = "SELECT username FROM klienci WHERE username = '".$username."' AND pwrd = '".$pwrd."';"; //kwerenda wybierająca wszystkich userów z takim samym usernamem jak nasz i z takim samym hasłem
                $query = mysqli_query($con, $q); //wykonujemy kwerendę
                $result = mysqli_fetch_assoc($query); //zapisujemy wynik
                if(@$result['username'] == $username){ //jak zwróciło jakiekolwiek wyniki to znaczy że wpisał dobre dane
                    session_start(); //odpalamy rzęcha
                    $_SESSION['username'] = $result['username']; //przekazujemy usernamea do account.php
                    header("Location: account.php"); // say my name
                }else{
                    echo "Nieprawidłowy login lub hasło!"; // każdy może się pomylić
                    header('Location: login.php?error=incorrect_password'); // każdy może byc przekierowany do login.php
                }
                break; // mateusz serek referencja
              case("logout"):
                session_start();
                $_SESSION['username'] = NULL;
                echo("<script type='text/javascript'>alert('Pomyślnie wylogowano z konta!')</script>");
                header("Location: login.php?error=logout");
                break;
            mysqli_close(); //zamykamy połączenie z bazą bo już nie jest nam potrzebna
        }
    }
?>
