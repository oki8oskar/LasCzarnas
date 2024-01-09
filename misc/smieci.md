<!-- ten taki śmieszn't cośek
<div id='fixed_panel'> 	
    <a class="fmenulink" href='./salon.php'> Salon </a>
  <a class="fmenulink" id='login_button' href='./logowanie.php'> <img src='./images/rim.svg' alt="Logowanie/Rejestracja" height='64'></a>
  <a class="fmenulink" href='./parts.php'> Warsztat </a> 	
</div>
-->

<!--
  STARA KARUZELA
<script type="text/javascript">
  page = 1;
  c_length = 3;
  function carousel_slide(side){
    if(side=='right'){
      document.getElementById('c_page'+page).style = 'display:none';
      page++;
      if(page>c_length){
        page = 1;
      }
      //console.log('teraz powinna się wyświetlić strona nr'+page)
      document.getElementById('c_page'+page).style = 'display:block';
    }
    if(side=='left'){
      document.getElementById('c_page'+page).style = 'display:none';
      page-=1;
      if(page<1){
        page = 3;
      }
      //console.log('teraz powinna się wyświetlić strona nr'+page)
      document.getElementById('c_page'+page).style = 'display:block';
    }
  }
</script>

  <div id='carousell'>
  <button class='c_buttons' onclick="carousel_slide('left');">⬅</button>

  <span id='c_page1' style='display:block'> 
    <img src='./images/c1.jpg' class='c_img'  height='100%' alt='Coś poszło nie tak... Spróbuj odświerzyć stronę'> <h2>BMW X5 PO NOWEMU</h2> Odkryj nową odsłone tej bestii odkręconej na maxa przez speców z LAS CZARNAS CUSTOMS </br></br> <button onclick="window.location="ofert.php?t='car'&id='abcdefg'">SPRAWDŹ TERAZ</button>
  </span> 
  <span id='c_page2' style='display:none'> 
    <img src='./images/c3.jpg' class='c_img' height='100%' alt='Coś poszło nie tak... Spróbuj odświerzyć stronę'> <h2>PO WIELU LATACH PRACY MATI MARKOWSKI PRZECHODZI NA MEMRYTURĘ</h2>Mati Markowski stuningował wiele samochodów w naszej firmie i opchnoł niezliczone ilości złomu naiwnym klientom (po lewej przykład). W dniu 29.09.2023 przeszedł on na zasłużoną emeryturę. Prawdopodobnie zostałby dłużej gdyby nie zachorował na liżme. <br> <i style='font-size:12px'>&nbsp&nbsp&nbsp&nbsp Jaką liżme?</i>
  </span>	
  <span id='c_page3' style='display:none'> 
    <img src='./images/rim.svg' class='c_img' height='100%' alt='Coś poszło nie tak... Spróbuj odświerzyć stronę'> <h2>ZBIERAJ RIM POINTS ABY DOSTAĆ NAGRODY</h2>Nasza firma wprowadziła nowy system lojalnościowy - RIM POINTS. Za każdy zakup oraz usługę dostajesz RIM POINTS, które potem możesz wymienić na nagrody takie jak oryginalne zapachy na lusterko LAS CZARNAS CUSTOMS</i>
  </span>
  <button class='c_buttons' onclick="carousel_slide('right');">➡</button>
</div>
  -->

  /* dla indexu */
  /* STARA KARUZELA 
  #carousell{
    //background-color: black;
    //color: white; 
    height:50%;
    width: 100%;
  }
  #c_page1{
    width: 100%;
    background-color: black;
    color: white;
    float: left;
  }
  #c_page1 > img{

    float: right;
  }
  #c_page2{
    width: 100%;
    background-color: black;
    color: white;
    float: right;
  }
  #c_page2 > img{
    float: left;
  }
  #c_page3{
    width: 100%;
    background-color: black;
    color: white;
    float: left;
  }
  #c_page3 > img{

    float: right;
  }
  .c_buttons{
    position:relative;
  }
  */

  /* dla sklepów */
  /* oferty wariant a 
  .oferta{
    width: 15%;
    height: 350px;
    float:left;
    margin:8px;
    border: ridge black 1px;
  }

  .oferta < h4{
    float: right;
    possition: ralative;
    bottom: 2;
  }

  .off_img{
    width: 100%;
    height: 
  }
  */
  /* oferty wariant b */