<!doctype html>
<html>
  <head>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="/images/logo.svg">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./carousell.css">

    <style>
      body{
        background-image: url("./images/bkg.jpg");
      }
      #content{
        margin: 5%;
        margin-left: 12.5%;
        width: 75%;
        height: 50%;
        float: left;
        padding: 2%;

        background-color: #fff;
        border-radius: 25px;
        border: 2px ridge black;
      }
      #left{
        float: left;
        border-radius: 25px;
        height: 400px;
      }
      #right{
        margin-left: 50%;
        width: 50%;
      }
      #buy_button{
        width: 48%;

        margin: 1%;

        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;

        border-radius: 30px;
        border: 1px solid #112;

        background-color: #11f;
        color: #fff;
        font-size: 23px;
      }
      #buy_button:hover{
        border: 1px solid #112;

        background-color: #11d;
        color: #fff;
        font-size: 23px;
      }
    </style>

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
  <div id='content'>
    <?php
      $type = $_GET['t'];
      $id = $_GET['id'];

      if(!($type && $id)){
        header("Location: index.php");
        die();
      }

      $con = mysqli_connect("localhost","customer","","las_czarnas");
      switch($type){
        case "part":
          $q = "SELECT * FROM czesci WHERE id_czesci = $id";
          $query = mysqli_query($con, $q);
          $result = mysqli_fetch_assoc($query);

          $zdjecie = $result['zdjecie'];
          $nazwa = $result['nazwa'];
          $cena = $result['cena'];
          $producent = $result['producent'];
          $kategoria = $result['kategoria'];
          $stan = $result['stan'];
          //$rejestracja = $result['rejestracja'];
          //$przebieg = $result['przebieg'];
          $opis = $result['opis'];

          echo "

          <img src='./photos/$zdjecie' width='45%' id='left' alt='Błąd wczytywania obrazu!'>

          <div id='right'>
            <h1>$nazwa</h1>
            <h2>$cena</h2>
            <h3>$stan</h3>
            <h4>Producent: $producent, Kategoria: $kategoria</h4>
            <p>$opis</p>
            </br><button id='buy_button'>KUP</button><button id='buy_button'>DODAJ DO KOSZYKA</button>
          </div>
          ";

          break;
        case "car":
          $q = "SELECT * FROM samochody WHERE id_samochodu = $id";
          $query = mysqli_query($con, $q);
          $result = mysqli_fetch_assoc($query);

          $zdjecie = $result['zdjecie'];
          $producent = $result['producent'];
          $model = $result['model'];
          $cena = $result['cena'];
          $stan = $result['stan'];
          $rocznik = $result['rocznik'];
          $rejestracja = $result['rejestracja'];
          $przebieg = $result['przebieg'];

          echo "

            <img src='./photos/$zdjecie' width='45%' id='left' alt='Błąd wczytywania obrazu!'>

          <div id='right'>
            <h1>$model</h1>
            <h3>$producent</h3>
            <h2><b>$cena</b></h2>
            <h4>$rocznik / $przebieg km / Stan: $stan / Rejestracja: $rejestracja</h4>
            </br><button id='buy_button'>KUP</button><button id='buy_button'>DODAJ DO KOSZYKA</button>
          </div>


          ";

          break;
      }


    ?>
    </div>
  </div>
  </body>
</html>
