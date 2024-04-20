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
        <a href='./view_item.php?t=part&id=$id'>
        <h3 id='nazwa'>$name</h3>
        <img src='./images/$image' class='off_img' alt='Błąd wczytywania obrazu!'>
        <h4>$price</h4>
        </a>
      </div>";
    }

      $con = @mysqli_connect("localhost","customer","","las_czarnas");
      $q = "SELECT * FROM czesci";
      $query = mysqli_query($con, $q);
      while($result = mysqli_fetch_assoc($query)){
      $id_samochodu = $result['id_czesci'];
      $nazwa = $result['nazwa'];
      $cena = $result['cena'];
      $zdjecie = $result['zdjecie'];
      AddDIV($id_samochodu, $nazwa, $zdjecie, $cena);
    }
		?>
	</div>
    </div>
</html>
