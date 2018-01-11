<?php
// Incluindo as configuraçoes
require_once('config/config.php');
// Determinando o idioma do site
require_once('translations/pt-br.php');
// Incluindo a biblioteca PHPMailer
require_once('libraries/PHPMailer.php');
// Dando load na classe de login
require_once('classes/Login.php');

// Criando um objeto do tipo login quando este objeto é criado ele faz todas as operações de login/logout automaticamente
// sendo assim essa simples linha lida com todo o processo de login.
$login = new Login();

// ... verifica se o usuario esta logado:
if ($login->isUserLoggedIn() == true) { 
    // Apenas usuarios logados podem ver as coisas abaixo
    include("views/logged_in.php");
}else { 
	include("views/header.php"); ?>
		<div class="container">
			<h2 class="header center teal-text text-lighten-1 light">Seja Bem Vindo !</h2>
			<div class="row center">
				<div class="progress">
					<div class="indeterminate"></div>
				</div>
			</div>
		</div>
<?php 
} 
include "views/footer.php"; ?>