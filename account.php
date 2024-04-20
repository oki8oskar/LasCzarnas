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

		<a class="menulink" id='login_button' href='./account.php'> <img src='./images/login_ico_black.svg' alt="Logowanie/Rejestracja" height='64'></a>
	    <a class="menulink" href='./salon.php'> Salon samochodowy </a>
		<a class="menulink" href='./parts.php'> Warsztat </a>
    <!--TŁUMACZENIE STRONY (ciągle nad tym pracujemy)
        <div id="lang">
     <a class="menulink" href='https://lsc-oskard2-repl-co.translate.goog/?_x_tr_sl=pl&_x_tr_tl=en&_x_tr_hl=pl&_x_tr_pto=wapp'> <img src='./images/en.png' alt='EN' height='20px'></a></option>
    		<a class="menulink" href='https://lsc-oskard2-repl-co.translate.goog/?_x_tr_sl=pl&_x_tr_tl=de&_x_tr_hl=pl&_x_tr_pto=wapp'> <img src='./images/de.png' alt='D' height='20px'></a> -->

	</div>
    <div id='left_panel'>
      <ul id="account_tablist">
        <li onclick="changeTab('main')">Stona Główna</li>
        <li onclick="changeTab('history')">Twoje zakupy</li>
        <li onclick="changeTab('rewards')">Nagrody</li>
        <li onclick="changeTab('settings')">Ustawienia</li>
      </ul>
    </div>
    <div id="right">
      <span id='main'>
        <?php
        session_start();

          if($username = $_SESSION['username']){
              $con = mysqli_connect("localhost","customer","","las_czarnas");
              if(mysqli_connect_errno()){
                echo "Nie udało się połączyć z bazą danych! :(";
              }else{
                echo "Witaj, $username! </br>"; //you're heisenberg
                $q = "SELECT punkty_stalego_klienta FROM klienci WHERE username = '$username'";
                $query = mysqli_query($con, $q);
                $result = mysqli_fetch_assoc($query);
                $rimpoints = $result['punkty_stalego_klienta'];
                echo "Masz na koncie $rimpoints RP!";
              }
          }else{
            header("Location: login.php");
          }
        ?>
      </span>
    </div>
  </body>
</html>
