<?php
// incluindo as configuraçoes
require_once('config/config.php');
// determinando o idioma do site
require_once('translations/pt-br.php');
// incluindo a biblioteca PHPMailer
require_once('libraries/PHPMailer.php');
// dando load na classe de login
require_once('classes/Login.php');

// Criando um objeto do tipo login quando este objeto é criado ele faz todas as operações de login/logout automaticamente
// sendo assim essa simples linha lida com todo o processo de login.
$login = new Login();

// Quando o usuario entra com sucesso uma nova senhathe user has just successfully entered a new password
// entao mostramos a pagina de login para ele.
if ($login->passwordResetWasSuccessful() == true && $login->passwordResetLinkIsValid() != true) {
	include("views/header.php"); ?>
		<div class="container">
			  <center>
				<a href="login.php"><button class="btn waves-effect waves-light red" type="button">Realizar Login</button></a>
			  </center>
		</div>
		<?php include "views/footer.php"; 
} else {
    // Mostramos a pagina de esqueci minha senha para o usuario.
    include("views/password_reset.php");
}?>