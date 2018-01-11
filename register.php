<?php
// Incluindo as configuraçoes
require_once('config/config.php');
// Determinando o idioma do site
require_once('translations/pt-br.php');
// Incluindo a biblioteca PHPMailer
require_once('libraries/PHPMailer.php');
// Dando load na classe de registro
require_once('classes/Registration.php');

// Só é mostrado o formulario de registro se o usuario nao esta logado!
if(isset($_SESSION["user_name"]))
{
	header( "Location: index.php" );
}
//// Criando um objeto de registro. Quando o objeto é criado, é feito toda a parte de registro de um novo usuario automaticamente.
// sendo assim essa simples linha lida com todo o processo de registro.
$registration = new Registration();

// Mostrando a pagina do formulario de registro ( com as mensagens/erros )
include("views/register.php");?>

