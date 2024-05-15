<!doctype html>
<html>
  <lin>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="./images/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./carousell.css">
    <link rel="stylesheet" href="./offerts.css">

    <style>
      #searchbar{
        margin: 1%;
        margin-left: 39.5%;
        margin-right: 37.7%;
        border: 2px ridge black;
        background-color: blue;
        color: white;
        border-radius: 10px;
      }
      #submit_button{
        background-color: #00f;
        border: none;
        margin: none;
        color: white;
        font-weight: bold;
      }
      #input{
        border-radius: 10px;
        border: 0;
        margin-right:5px;
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

  <div id="searchbar">
    <form action="" method="get">
      <input type="text" id="input" name="query" id="searchinput">Szukaj w:
      <input type="submit" id="submit_button" name="parts" value="Częściach">
      <input type="submit" id="submit_button" value="Salonie">
    </form>
  </div>

  <div id="searchresult">
  <?php
  function AddDIV($id, $name, $image, $price){
    echo "
    <div class='oferta'>
    <a href='./view_item.php?t=part&id=$id'>
    <h3 id='nazwa'>$name</h3>
    <img src='./photos/$image' class='off_img' alt='Błąd wczytywania obrazu!'>
    <h4>$price</h4>
    </a>
    </div>";
}

  $type = @$_GET['parts'];
  $s = @$_GET['query'];

  if($type){
    $con = @mysqli_connect("localhost","customer","","las_czarnas");
      $q = "SELECT * FROM czesci WHERE nazwa LIKE '%$s%'";
      $query = mysqli_query($con, $q);
      while($result = mysqli_fetch_assoc($query)){
        $id_samochodu = $result['id_czesci'];
        $nazwa = $result['nazwa'];
        $cena = $result['cena'];
        $zdjecie = $result['zdjecie'];
        AddDIV($id_samochodu, $nazwa, $zdjecie, $cena);}
  }else{
    $con = @mysqli_connect("localhost","customer","","las_czarnas");
      $q = "SELECT * FROM samochody WHERE producent LIKE '%$s%' OR model LIKE '%$s%'";
      $query = mysqli_query($con, $q);
      while($result = mysqli_fetch_assoc($query)){
        $id_samochodu = $result['id_samochodu'];
        $producent = $result['producent'];
        $model = $result['model'];
        $nazwa = $producent." ".$model;
        $cena = $result['cena'];
        $zdjecie = $result['zdjecie'];
        AddDIV($id_samochodu, $nazwa, $zdjecie, $cena);}
  }
    



      
		?>
  </div>

</body>
</html>
