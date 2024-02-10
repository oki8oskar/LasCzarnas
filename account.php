<!DOCTYPE html>
<html lang="pl-PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Twoje Konto</title>
  </head>
  <body>
    <?php
      if($_SESSION['username']){

      }else{
        header("Location: login.php");
      }
    ?>
  </body>
</html>
