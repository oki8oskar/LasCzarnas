<!doctype html>
<html>
  <head>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
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
    <div id="stopy">

    </div>

<div class="slideshow-container" id="karuzela">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/c1.jpg" style="width:100%">
   <div class="text1"><h2>ZOBACZ NASZE NOWE OFERTY</h2><p>W naszym salonie pojawiły się nowe samochody. Odwiedź zakładkę "Salon samochodowy" lub kliknij przycisk poniżej, aby zobaczyć nowe oferty i promocje.</p></div>
     <a id="odnosnik1" href="./salon.php"><div class="text">Przejdź do salonu samochodowego</div></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/c2.jpg" style="width:100%">
   <div class="text3"><h2>PO WIELU LATACH PRACY MATI MARKOWSKI PRZECHODZI NA EMRYTURĘ</h2>Mati Markowski stuningował wiele samochodów w naszej firmie i opchnął niezliczone ilości złomu naiwnym klientom (po lewej przykład). W dniu 29.09.2023 przeszedł on na zasłużoną emeryturę. Prawdopodobnie zostałby dłużej gdyby nie zachorował na liżme.</div>
  <a id="odnosnik2" href="./parts.php"><div class="text">Stuninguj sobie autko na Markowskiego</div></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/c2,5.jpg" style="width:100%">
  <!--IKONKA RIM-POINTSÓW
  <img src="rim.svg" style="position: absolute;">-->
  <div class="text2"><h2>ZBIERAJ RIM POINTS ABY DOSTAĆ EPICKIE NAGRODY</h2><p>Nasza firma wprowadziła nowy system lojalnościowy - RIM POINTS. Za każdy zakup oraz usługę dostajesz RIM POINTS, które potem możesz wymienić na nagrody takie jak oryginalne zapachy na lusterko marki "Cud-Dżewko". Zarejestruj się teraz z linku poniżej, aby odebrać 10 RIM POINTSÓW</p></div>
  <a id="odnosnik3" href="./login.php"><div class="text">Zarejestruj się teraz</div></a>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>




let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
    </div>
    <hr>
    <div>
      <span id='map_left_content'><h2>Znajdź nasz salon</h2>
      <ul>
        <li>Piździsko małe (13lat)</li>
        <li>Pizdzisko mniejsze</li>
      </ul>
    </span>
    <iframe width="425" height="350" id="osm" src="https://www.openstreetmap.org/export/embed.html?bbox=18.85283946990967%2C50.27886058231745%2C18.861798048019413%2C50.281938952651196&amp;layer=mapnik&amp;marker=50.280399792369224%2C18.85731875896454" style="border: 1px solid black"></iframe>
    </div>

      <br>
      <hr>
      <br>
      
    <div id="film">
    <video width="60%" autoplay muted>
      <source src="auto.mp4" type="video/mp4">
    </video>
    </div>
    <div id='footer'>
    <!--kontakt i ważne rzeczy-->
    </div>
  </body>
</html>
