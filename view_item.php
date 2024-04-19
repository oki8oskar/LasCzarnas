<!doctype html>
<html>
  <head>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="/images/logo.svg">
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
  <?php
    $type = @$_GET["type"];
    $id = @$_GET["id"];

    if ($id) {

    }else{
      header("location: index.php");
    }

  ?>
  <div id='product_container'>
    <h2 id='product_title'>
      Nazwa
    </h2>
    <img src='$obraz' alt='Nie znaleziono zdjęcia'>
    <h3 id='price'>Cena</h3>
    <p id='description'>Opis</p>
  </div>
  </body>
</html>
