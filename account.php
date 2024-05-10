<!doctype html>
<html>
  <head>
    <title>Twoje konto</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="./images/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./carousell.css">

    
<script>
          function changeTab(page){
            switch (page) {
              case 'main':
                document.getElementById('main').style.display = "block";
                document.getElementById('history').style.display = "none";
                document.getElementById('rewards').style.display = "none";
                document.getElementById('settings').style.display = "none";
                break;
              case 'history':
                
                document.getElementById('main').style.display = "none";
                document.getElementById('history').style.display = "block";
                document.getElementById('rewards').style.display = "none";
                document.getElementById('settings').style.display = "none";
                break;
              case 'rewards':
                
                document.getElementById('main').style.display = "none";
                document.getElementById('history').style.display = "none";
                document.getElementById('rewards').style.display = "block";
                document.getElementById('settings').style.display = "none";
                break;
              case 'settings':
                
                document.getElementById('main').style.display = "none";
                document.getElementById('history').style.display = "none";
                document.getElementById('rewards').style.display = "none";
                document.getElementById('settings').style.display = "block";
                break;
            }
          }
        </script>

  </head>
  <body>
    <div id='header'>
  	  	<a id="logo" href='index.php'><img src='./images/logo_new.svg' alt='Las Czarnas Customs' width='124'></a>
       	<h1 id='co_name'><a id="logo" href='index.php'>LAS CZARNAS CUSTOMS</h1></a>

          <a class="menulink" href='./cart.php'> <img src='./images/koszyk.svg' alt="Koszyk" height='80px'> </a>
  		    <a class="menulink" href='./account.php'> <img src='./images/login.svg' alt="Logowanie/Rejestracja" height='80px'></a>
          <a class="menulink" href='./search.php'> <img src='./images/szukaj.svg' alt="Szukaj" height='80px'> </a>
          <a class="menulink" href='./salon.php'> <img src='./images/salon.svg' alt="Salon samochodowy" height='80px'> </a>
  		    <a class="menulink" href='./parts.php'> <img src='./images/warsztat.svg' alt="Warsztat" height='80px'> </a>
      <!--TŁUMACZENIE STRONY (ciągle nad tym pracujemy)
          <div id="lang">
       <a class="menulink" href='https://lsc-oskard2-repl-co.translate.goog/?_x_tr_sl=pl&_x_tr_tl=en&_x_tr_hl=pl&_x_tr_pto=wapp'> <img src='./images/en.png' alt='EN' height='20px'></a></option>
      		<a class="menulink" href='https://lsc-oskard2-repl-co.translate.goog/?_x_tr_sl=pl&_x_tr_tl=de&_x_tr_hl=pl&_x_tr_pto=wapp'> <img src='./images/de.png' alt='D' height='20px'></a> -->

  	</div>
    <div id='left_panel'>
      <ul id="account_tablist">
        <li onclick="changeTab('main')" class='tab_link'>Stona Główna</li>
        <li onclick="changeTab('history')" class='tab_link'>Twoje zakupy</li>
        <li onclick="changeTab('rewards')" class='tab_link'>Nagrody</li>
        <li onclick="changeTab('settings')" class='tab_link'>Ustawienia</li>
      </ul>
    </div>
    <div id="right">
      <span id='main'>
        <?php
        //start sesji bo potem z niej wyciągamy usernamea
        session_start();

          if($username = $_SESSION['username']){ //wyciągamy usernamea z danych sesji
              $con = mysqli_connect("localhost","customer","","las_czarnas"); // łączymy się z dazą banych
              if(mysqli_connect_errno()){
                echo "Nie udało się połączyć z bazą danych! :("; //jak się nie uda połączyć to wywalamy nieznanego errora
              }else{
                echo "Witaj, $username! </br>"; //you're heisenberg [referencja do auth.php linijka 64]
                $q = "SELECT punkty_stalego_klienta FROM klienci WHERE username = '$username'"; //kwerenda do wybierania rim pointsów
                $query = mysqli_query($con, $q); //wykonujemy powyższą kwerendę
                $result = mysqli_fetch_assoc($query); //zapisujemy wynik powyższej kwerendy do zmiennej
                $rimpoints = $result['punkty_stalego_klienta'];
                if ($rimpoints == 0) {
                  echo "Nie masz na koncie RIM POINTS! Zrób zakupy aby zdobyć RP!";
                }else{
                  echo "Masz na koncie $rimpoints RP!"; //printujemy na stronę wynik
                }
                echo "<form action='auth.php'><button type='submit' id='logout_button' name='a' value='logout'>Wyloguj się</button></form>";
              }
          }else{
            header("Location: login.php"); //jak nie ma usernamea to nie ma strony konta - redirect na login.php
          }
        ?>
        </span>
        <div id='history'>
          <table>

          </table>
        </div>
        <div id='rewards'>
          <div></div>
        </div>
        <div id='settings' style="display:none;">
          <?php

          $username = $_SESSION['username'];

          $conn = mysqli_connect("localhost","customer","","las_czarnas");
          $zap = "SELECT * FROM klienci WHERE username = '$username'";
          $q = mysqli_query($conn, $zap);
          $result = mysqli_fetch_assoc($q);
          echo "<table id='data_container'>
          <tr>
            <td>Nazwa uzytkownika:</td>
            <td>$result[username]</td>
          </tr>
          <tr>
            <td>Imię</td>
            <td>$result[imie]</td>
          </tr>
          <tr>
            <td>Nazwisko</td>
            <td>$result[nazwisko]</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>$result[telefon]</td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td>$result[email]</td>
          </tr>
          <tr>
            <td>Adres:</td>
            <td>$result[adres]</br>$result[miasto] $result[kod_pocztowy]</td>
          </tr>
          <tr>
            <td>Punkty programu lojanościowego RIM POINTS:</td>
            <td>$result[punkty_stalego_klienta]</td>
          </tr></table><br>
          
          <form action='account.php' method='POST' id='data_editor'>
            <tr>    
              <td>Imię</td>
              <td><input type='text' name='name' value='$result[imie]'></td>
            </tr><br>
            <tr>
              <td>Nazwisko</td>
              <td><input type='text' name='lname' value='$result[nazwisko]'></td>
            </tr><br>
            <tr>
              <td>Telefon</td>
              <td><input type='number' name='phone' value='$result[telefon]'></td>
            </tr><br>
            <tr>
              <td>E-mail:</td>
              <td><input type='text' name='email' value='$result[email]'></td>
            </tr><br>
            <tr>
              <td>Adres:</td>
              <td><input type='text' name='adress' value='$result[adres]'>
              <input type='text' name='city' value='$result[miasto]'>
            </tr><br>
            <input type='submit' value='Edytuj'>
            </table>
          </form></div>
          ";

          mysqli_close($conn);
          ?>

          
          <?php
           $username = $_SESSION['username'];
          $conn = mysqli_connect("localhost","customer","","las_czarnas");
          $imie = @$_POST['name'];
          $nazwisko = @$_POST['lname'];
          $telefon = @$_POST['phone'];
          $email = @$_POST['email'];
          $adres = @$_POST['adress'];
          $miasto = @$_POST['city'];
          $zap = "UPDATE klienci SET `email`='$email',`imie`='$imie',`nazwisko`='$nazwisko',`telefon`='$telefon',`miasto`='$miasto',`adres`='$adres' WHERE username = '$username'";
          $query = mysqli_query($conn, $zap);
          ?>
        </div>
    </div>
  </body>
</html>
