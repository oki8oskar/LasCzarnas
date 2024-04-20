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

			function AddDIV($name, $image, $price){
				echo "
				<div class='oferta'>
					<!-- <a href='./oferta.php?t=part&id='> -->
					<a href='./images/sorry_bro.png'>
					<h3 id='nazwa'>$name</h3>
					<img src='$image' class='off_img' alt='ilustracja produktu'>
					<h4>$price</h4>
	 				</a>
				</div>";
			}

			$nazwa = 'Lusterko lewe do Forda Focusa';
			$cena = '100$';
			$obraz = './images/lusterkoff.jpg';
			AddDIV($nazwa, $obraz, $cena);

			$nazwa = 'Katalizator z demontażu Mercedesa E190';
			$cena = '300$';
			$obraz = './images/katalizator1.png';
			AddDIV($nazwa, $obraz, $cena);

			$nazwa = 'mateusz serek';
			$cena = 'kość';
			$obraz = './images/ser.png';
			AddDIV($nazwa, $obraz, $cena);

			$nazwa = 'Zderzak fajny XD';
			$cena = 'nie stać cie';
			$obraz = './images/zderzak.jfif';
			AddDIV($nazwa, $obraz, $cena);

			$nazwa = 'Kabel RJ45';
			$cena = 'ZA DARMO';
			$obraz = './images/kabl.jfif';
			AddDIV($nazwa, $obraz, $cena);

    $nazwa = 'Grzybulec';
    $cena = 'ŁIHI!!';
    $obraz = './images/MushroomMarioKart8.webp';
    AddDIV($nazwa, $obraz, $cena);

    $nazwa = 'Kondensator strumienia </br> (do podróży w czasie)';
    $cena = 'Kilka kostek uranu';
    $obraz = './images/dims.jfif';
    AddDIV($nazwa, $obraz, $cena);

    $nazwa = '15 beczek Olejzyny </br> (paliwo limitowane -> wycofane z obiegu)';
    $cena = '200$ za beczkę 120 litrów';
    $obraz = './images/5879916818_98ee9edb59_b.jpg';
    AddDIV($nazwa, $obraz, $cena);

$nazwa = 'Homik do silnika </br> bez tego kręciołka śmieszngo';
$cena = 'ten kręciołek';
$obraz = './images/homik.png';w
		?>
	</div>
    </div>
    <div id='footer'>
    <!--kontakt i ważne rzeczy-->
  </body>
</html>
