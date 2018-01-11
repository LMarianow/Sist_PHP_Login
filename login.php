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
if ( $login->isUserLoggedIn() == true )
{
	header( "Location: index.php" );
}
include("views/header.php");
?>
<div class="container">
    <div class="row">
		<form class="col l6 offset-l3 m8 offset-m2 s12 card-panel" method="post" action="" name="loginform">
            <h3 class="teal-text lighten-1 center dark card-panel" style="margin-top: 0;">Login</h3>
			<div class="row">
			<br>
                <div class="input-field col l12 m12 s12">
                    <input id="user_name" name="user_name" type="text" required>
                    <label for="user_name">Username/Email</label>
                </div>
            </div>
			<div class="row">
                <div class="input-field col l12 m12 s12">
                    <input id="user_password" name="user_password" type="password" autocomplete="off" required>
                    <label for="user_password">Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="col l12 m12 s12">
                    <input type="checkbox" class="filled-in" name="user_rememberme" id="user_rememberme" value="1"/>
                    <label for="user_rememberme">Lembrar-me</label>
                </div>
            </div>
            <div class="row">
                <div class="col l12 m12 s12 center-align">
                    <button id="login" name="login" value="login" class="btn" type="submit">Entrar</button>
                </div>
            </div>
		</form>
	</div>
	<p class="center"><a
			href="password_reset.php"><strong class="teal-text lighten-1">Esqueceu sua senha?</strong></a>
	</p>
	<p class="center grey-text">Ainda nao possui uma conta? <a
			href="register.php"><strong class=" teal-text lighten-1">Crie sua conta agora!</strong></a>
	</p>
</div>
<?php include("views/footer.php"); ?>