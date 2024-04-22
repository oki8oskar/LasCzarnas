<!doctype html>
<html>
  <head>
    <title>Twoje konto</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="./images/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./carousell.css">
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

        <div id='main'></div>
        <div id='history' style="display: none">
          <table>

          </table>
        </div>
        <div id='rewards'  style="display: none">
          <img src='./images/sorry_bro.png' alt='Ta funkcja jeszcze nie jest dostępna w żadnym kraju'>
        </div>
        <!--
        <div id='settings'  style="display: none"></div>

          <table id='data_container'>
          <tr>
            <td>Nazwa uzytkownika:</td>
            <td>$username</td>
          </tr>
          <tr>
            <td>Imię</td>
            <td>$name</td>
          </tr>
          <tr>
            <td>Nazwisko</td>
            <td>$lname</td>
          </tr>
          <tr>
            <td>Telefon</td>
            <td>$telefon</td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td>$email</td>
          </tr>
          <tr>
            <td>Adres:</td>
            <td>$adres</br>$miasto $kod_pocztowy</td>
          </tr>
          <tr>
            <td>Punkty programu lojanościowego RIM POINTS:</td>
            <td>$rp</td>
          </tr></table>

          <form action='auth.php?a=update_data' id="data_editor">
            <tr>
              <td>Nazwa uzytkownika:</td>
              <td><input type='text' name='username' value='$username'></td>
            </tr>
            <tr>
              <td>Imię</td>
              <td><input type='text' name='name' value='$name'></td>
            </tr>
            <tr>
              <td>Nazwisko</td>
              <td><input type='text' name='lname' value='$lname'></td>
            </tr>
            <tr>
              <td>Telefon</td>
              <td><input type='number' name='phone' value='$phone'></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><input type='text' name='email' value='$email'></td>
            </tr>
            <tr>
              <td>Adres:</td>
              <td><input type='text' name='adress' value='$adress'>
              </br><input type='text' name='city' value='$city'>
              <input type='text' name='postal' value='$postal'></td>
            </tr>
            </table>
          </form>

        </div> -->

      </span>
    </div>
  </body>
</html>
