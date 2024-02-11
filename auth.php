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
                    header("Location: account.php?first_time=true");
                }
                break;
            case("login"):
                $username = $_POST['login'];
                $pwrd = password_hash($_POST['pwrd'],1);
                $q = "SELECT username FROM klienci WHERE username = '".$username."' AND pwrd = '".$pwrd."';";
                $query = mysqli_query($con, $q);
                $result = mysqli_fetch_assoc($query);
                if(@$result['username'] != NULL){
                    session_start();
                    $_SESSION['username'] = $result['username'];
                    header("Location: account.php");
                }else{
                    echo "Nieprawidłowy login lub hasło!";
                    header('Location: login.php?error=true');
                }
                break;
            mysqli_close();
        }
    }
?>
