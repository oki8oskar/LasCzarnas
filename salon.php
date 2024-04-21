<!doctype html>
<html>
  <head>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="./images/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./offerts.css">
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
    <div id='shop'>
    <!-- Wyciąganie ofert z bazy danych -->
    <!-- wariant a !-->

    <?php
      function AddDIV($id, $name, $image, $price){
        echo "
        <div class='oferta'>
          <a href='./view_item.php?t=car&id=$id'>
          <h3 id='nazwa'>$name</h3>
          <img src='./photos/$image' class='off_img' alt='Błąd wczytywania obrazu!'>
          <h4>$price</h4>
          </a>
        </div>";
      }

      $con = @mysqli_connect("localhost","customer","","las_czarnas");
      $q = "SELECT * FROM samochody";
      $query = mysqli_query($con, $q);
      while($result = mysqli_fetch_assoc($query)){
        $id_samochodu = $result['id_samochodu'];
        $producent = $result['producent'];
        $model = $result['model'];
        $nazwa = $producent." ".$model;
        $cena = $result['cena'];
        $zdjecie = $result['zdjecie'];
        AddDIV($id_samochodu, $nazwa, $zdjecie, $cena);
      }

      /*
      $nazwa = "Nissan Micra '93 ";
      $cena = '120$';
      $obraz = './images/micra.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'mateusz serek brum brum';
      $cena = 'dwa kolana (jedno dla drugoklasisty)';
      $obraz = './images/cheese.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Mazda MX-5 "Miata </br> (rejestracja w zestawie)"';
      $cena = '14,500';
      $obraz = './images/miata.jfif';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Gówno XDDD';
      $cena = 'ODDAMY ZA DOPŁATĄ';
      $obraz = './images/original.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = "Pewien sławny wąsacz </br> (Ein Reich – ein Volk – ein Ticket)";
      $cena = '1939$';
      $obraz = './images/wosacz.jfif';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'papamobil';
      $cena = '2137$';
      $obraz = './images/Papamobil.webp';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Stary z taczką';
      $cena = 'Mleko';
      $obraz = './images/ogrodnik-z-taczka.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'puszka na kółkach';
      $cena = '99$';
      $obraz = './images/iss.jfif';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Bolid RB16 Maxa Verstappena </br> (zestaw opon w komplecie)';
      $cena = '7,999,999$';
      $obraz = './images/rb16.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Tesla';
      $cena = '2,50$';
      $obraz = './images/tesla.jpeg';
  	  AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Kolejne gówno XD';
      $cena = 'weź na to nawet nie patrz';
      $obraz = './images/mpla.jpg';
      AddDIV($nazwa, $obraz, $cena);

      $nazwa = 'Makłini </br> szefik totalny i gigaczad';
      $cena = 'Nie ma odpowiedniej ceny';
      $obraz = './images/gigachad szef totalny.jpg';
      AddDIV($nazwa, $obraz, $cena);

  $nazwa = 'Nietoperkomobil';
  $cena = 'on jest batman';
  $obraz = './images/91AI366JWbL.jpg';
  AddDIV($nazwa, $obraz, $cena);

    $nazwa = 'Bolid Mercedesa AMG Petronas F1 Team</br> (komplet oponek w zestawie)';
    $cena = '8,500,000$';
    $obraz = './images/bolid czarnucha.jpg';
    AddDIV($nazwa, $obraz, $cena);*/
    ?>
  </body>
</html>
