<?php
    $con = @mysqli_connect("localhost","customer","","las_czarnas");
    $action = $_GET['a'];

    if ($error = @mysqli_connect_errno()) {
      header("Location: error.php?error_code=$error");
      exit();
    }
    else{
        switch($action){
            case("new_account"):
                $username = $_POST['login'];
                $pwrd = $_POST['pwrd'];
                $pwrd_r = $_POST['pwrd_r'];
                $email = $_POST['email'];

                if(!str_contains($email, '@')){
                  header("Location: login.php?error=incorrect_email");
                  die();
                }
                if ($pwrd != $pwrd_r) {
                  header("Location: login.php?error=password_repeat");
                  die();
                }

                $pwrd = hash('sha256', $pwrd);

                $q = "SELECT username FROM klienci WHERE username = '".$username."';";
                $query = @mysqli_query($con, $q);
                if($n = @mysqli_fetch_row($query)){
                    header("Location: login.php?error=username");
                }

                $q = "INSERT INTO klienci(username,pwrd,email) VALUES('".$username."','".$pwrd."','".$email."');";
                $query = @mysqli_query($con, $q);
                if($error = @mysqli_error($con)){
                    if($error){
                        echo "Nieznany błąd!";
                    }
                }else{
                    echo "Pomyślnie utworzono konto!";
                    session_start();
                    $_SESSION['username'] = $result['username'];
                    header("Location: account.php?first_time=true"); // say my name
                }
                break;
            case("login"):
                $username = $_POST['login'];
                $pwrd = hash('sha256', $_POST['pwrd']);

                $q = "SELECT username FROM klienci WHERE username = '".$username."' AND pwrd = '".$pwrd."';";
                $query = mysqli_query($con, $q);
                $result = mysqli_fetch_assoc($query);
                if(@$result['username'] == $username){
                    session_start();
                    $_SESSION['username'] = $result['username'];
                    header("Location: account.php"); // say my name
                }else{
                    echo "Nieprawidłowy login lub hasło!";
                    header('Location: login.php?error=incorrect_password');
                }
                break;
            mysqli_close();
        }
    }
?>
