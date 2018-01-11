<?php include('header.php');
if ( $login->isUserLoggedIn() == true )
{
    redirect( "index.php" );
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>404 Error</title>
  <style type="text/css">
    .emoji {
      font-size: 9em;
      text-align: center;
    }
    .title {
      font-size: 3em;
      text-align: center;
      line-height: 0em;
      color: grey;
    }
    .text {
      text-align: center;
    }
  </style>
</head>
<body class="centered">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="emoji">😭</div>
  <br>
  <p class="title">Ooooops! Voce nao tem permissao para acessar esta pagina !</p>
  <br>
  <br>
  <center>
	<a href="login.php"><button class="btn waves-effect waves-light red" type="button">Realizar Login</button></a>
  </center>
</body>
</html>
<?php include('footer.php'); ?>
