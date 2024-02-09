<?php
    $con = mysqli_connect("localhost","root","","las_czarnas");
    $action = $_GET['a'];

    if (@mysqli_connect_errno()) {
      echo "Błąd połączenia z bazą danych! Kod Błędu: " . mysqli_connect_error() . " . <a href='./index.html'>Powtór na stronę główną</a>";
      exit();
    }else{
        switch($action){
            case("new_account"):
                $username = $_POST['login'];
                $pwrd = password_hash($_POST['pwrd'],1);
                $email = $_POST['email'];
                $q = "INSERT INTO klienci(username,pwrd,email) VALUES('".$username."','".$pwrd."','".$email."');";
                $query = mysqli_query($con, $q);
                if($error = mysqli_error($con)){
                    echo $error;
                    if($error == 1062){
                        echo "Zarejestrowano już użytkownika o takiej nazwie! Wybierz inną nazwę użytkownika! <a href='./index.html'>Powtór na stronę główną</a>";
                    }
                }else{
                    echo "Pomyślnie utworzono konto!";
                }
                break;
            case("login"):
                $username = $_POST['login'];
                $pwrd = password_hash($_POST['pwrd'],1);
                $q = "SELECT username FROM klienci WHERE username = '".$username."' AND pwrd = '".$pwrd."';";
                $query = mysqli_query($con, $q);
                $result = mysqli_fetch_array($query);
                if(@$result['username'] != NULL){
                    session_start();
                    $_SESSION['username'] = $result['username'];
                }else{
                    echo "Nieprawidłowy login lub hasło!";
                    header('Location: login.php?error=true');
                }
                break;
        }
    }
?>