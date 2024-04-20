<!doctype html>
<html>
  <head>
    <title>Las Czarnas Customs</title>
    <meta charset="UTF-8">
    <html lang = "pl-PL">
    <link rel="favicon" href="./images/favicon.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./carousell.css">
  </head>
  <body>
	<style>
		body{
			background-image: url(./images/bkg.jpg);
			background-repeat: no-repeat;
			background-color: #00f;
			background-size: ;
			height: 100%;
		}
	</style>

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
    if(@$_SESSION['username']){
      header('Location: account.php');
    }
  ?>

	<div id='forms' height='200px'>
		<h3>Konto Las Czarnas Customs</h3>
		<button onclick='zal()' class='formbuttons'>Zaloguj</button>
		<button onclick='zar()' class='formbuttons'>Zarejstruj się</button>

			</br></br>

		<form action='./auth.php?a=login' method='post' id='li_form'>
      <?php
        switch($error = @$_GET['error']){
          case 'incorrect_password':
            echo "Nieprawidłowa nazwa użytkownika lub/i hasło!";
            break;
        }
        ?>
			<input type='text' name='login' placeholder='Login' class='login_input'></br>
			<input type='password' name='pwrd' placeholder='Hasło' class='login_input'></br>
			<button type="submit" class='formbuttons'>Zaloguj</button>
		</form>

		<form action='./auth.php?a=new_account'  method='post' id='reg_form' style="display: none;" width: 40%>
      <?php
        $error = @$_GET['error'];
        switch($error){
          case 'username':
            echo "Już zarejestrowano użytkownika o takiej nazwie!";
            break;
          case 'password_repeat':
            echo "Podane hasła się nie zgadzają!";
            break;
          case 'incorrect_email':
            echo "Podaj prawidłowy adres e-mail!";
            break;
        }
      ?>
			</label> <input type='text' placeholder='Login' name='login' class='login_input'></br>
			</label> <input type='text' placeholder='E-mail' name='email' class='login_input'></br>
			</label> <input type='password' placeholder='Hasło' name='pwrd' class='login_input'></br>
			</label> <input type='password' placeholder='Powtórz hasło' name='pwrd_r' class='login_input'></br>
			<button type="submit" class='formbuttons'>Potwierdz</button>
		</form>
	</div>

	<script >
   		var rf = document.getElementById('reg_form');
   		var lf = document.getElementById('li_form');
   		var fr = document.getElementById('forms');

    function zal() {
    	rf.style.display = 'none';
    	lf.style.display = 'block';
		fr.height = '200px';
    }
    function zar() {
    	rf.style.display = 'block';
    	lf.style.display = 'none';
    }
    </script>
	<div id='footer' style='margin-top: 15%;'>
	<!--kontakt i ważne rzeczy-->
	</div>
  </body>
</html>
