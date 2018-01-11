<?php 
	require 'FlashMessages.php';
	// Instantiate the class
	$msg = new FlashMessages();	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#26a69a">
    <title>Sistema de Cadastro Completo</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/styles.css">
    <!--Import jQuery before materialize.js-->
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<nav class="teal lighten-1">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">SuaEmpresa</a>
            <ul class="right hide-on-med-and-down">
                <?php if (!isset($_SESSION["user_name"])):?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Registro</a></li>
                <?php endif; ?>
                <li><a href="index.php">Inicio</a></li>
               <!-- <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>-->
                <?php if (isset($_SESSION["user_name"])): ?>
                    <!--<li><a href="admin.php">Admin</a></li>-->
                    <li><a href="index.php?logout">Logout</a></li>
                <?php endif; ?>
            </ul>
            <ul id="nav-mobile" class="side-nav right">
                <?php if (!isset($_SESSION["user_name"])):?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Registro</a></li>
                <?php endif; ?>
                <li><a href="index.php">Inicio</a></li>
                <!--<li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>-->
                <?php if (isset($_SESSION["user_name"])): ?>
                    <!--<li><a href="admin.php">Admin</a></li>-->
                    <li><a href="index.php?logout">Logout</a></li>
                <?php endif; ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </div>
</nav>
<main>
<?php
// Mostrando os devidos alertas em cada pagina 
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            $msg->error($error)->display();
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            $msg->info($message)->display();
        }
    }
}
?>
<?php
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            $msg->error($error)->display();
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            $msg->success($message)->display();
        }
    }
}
?>