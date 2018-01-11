<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Sua conta ainda nao foi ativada. Por favor ative-a clicando no link de confirmacao mandado para seu e-mail.");
define("MESSAGE_CAPTCHA_WRONG", "Captcha digitado errado!");
define("MESSAGE_COOKIE_INVALID", "Cookie Invalido");
define("MESSAGE_DATABASE_ERROR", "Problema de conexao com a database.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Este e-mail ja se encontra registrado. Por favor use a pagina \"Esquici minha senha\" se voce nao lembra seu login.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Desculpe-nos, sua mudanca de e-mail falhou.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Seu email foi mudado com sucesso! Novo e-mail e: ");
define("MESSAGE_EMAIL_EMPTY", "Email nao pode ser vazio!");
define("MESSAGE_EMAIL_INVALID", "Seu email nao esta em um formato valido!");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Desculpe-nos, este email e o mesmo que o seu atuall, por favor escolha outro.");
define("MESSAGE_EMAIL_TOO_LONG", "Seu Email nao pode ultrapassar 64 caracteres.");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Parametros do link vazio.");
define("MESSAGE_LOGGED_OUT", "Voce foi deslogado com sucesso!");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Falha no login.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Sua senha antiga esta errada.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "As senhas digitadas nao conferem!");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Desculpe-nos, a troca de senha falhou!");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Senha trocada com sucesso!");
define("MESSAGE_PASSWORD_EMPTY", "Campo de senha vazio!");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Email de recuperacao de senha nao enviado com sucesso! Erro: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Email de recuperacao de senha enviado com sucesso!");
define("MESSAGE_PASSWORD_TOO_SHORT", "A sua senha tem que ter no minimo um tamanho de 6 caracteres!");
define("MESSAGE_PASSWORD_WRONG", "Senha errada! Tente novamente.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Voce tento uma senha incorreta 3 ou mais vezes. Por favor espere 30 segundos para tentar novamente.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Desculpe-nos, nenhuma combinacao de codigo de verificacao aqui...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Sua conta foi ativada com sucesso! Agora voce ja pode realizar login !");
define("MESSAGE_REGISTRATION_FAILED", "Desculpe-nos, seu registro falhou. Por favor volte e tente novamente.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Seu link de recuperacao de senha expirou. Por favor utilize-o ate um prazo de 1 hora !");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Desculpe-nos, nao conseguimos enviar o email de confirmacao da conta. Sua conta nao foi criada!");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Email de verificacao nao foi enviado com sucesso! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Sua conta foi criada com sucesso e nos enviamos-lhe um email de confirmacao para seu email. Por favor clique no link para a confirmacao de sua conta!");
define("MESSAGE_USER_DOES_NOT_EXIST", "Este usuario nao existe!");
define("MESSAGE_USERNAME_BAD_LENGTH", "O nome de usuario deve estar entre 2 a 64 caracteres.");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Desculpe-nos, o nome escolhido para troca falhou!");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Seu nome de usuario foi trocado com sucesso! Novo nome e: ");
define("MESSAGE_USERNAME_EMPTY", "Campo de usuario vazio !");
define("MESSAGE_USERNAME_EXISTS", "Desculpe-nos, este nome de usuario ja se encontra em uso! Por favor escolha outro.");
define("MESSAGE_USERNAME_INVALID", "Nome de usuario nao segue a regra: Somente a-Z e numeros sao permitidos, com tamanho de 2 ate 64 caracteres.");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Desculpe-nos, este nome de usuario e o mesmo que o seu atual! Por favor escolha outro.");

// views
define("WORDING_BACK_TO_LOGIN", "Voltar a pagina de login");
define("WORDING_CHANGE_EMAIL", "Trocar Email");
define("WORDING_CHANGE_PASSWORD", "Trocar Senha");
define("WORDING_CHANGE_USERNAME", "Trocar Usuario");
define("WORDING_CURRENTLY", "Atual");
define("WORDING_EDIT_USER_DATA", "Editar informacoes da conta");
define("WORDING_EDIT_YOUR_CREDENTIALS", ", edite as informacoes de sua conta:");
define("WORDING_FORGOT_MY_PASSWORD", "Eu esqueci minha senha");
define("WORDING_LOGIN", "Entrar");
define("WORDING_LOGOUT", "Deslogar");
define("WORDING_NEW_EMAIL", "Novo Email");
define("WORDING_NEW_PASSWORD", "Nova Senha");
define("WORDING_NEW_PASSWORD_REPEAT", "Repetir nova senha");
define("WORDING_NEW_USERNAME", "Novo nome de usuario (nao pode ser vazio e deve conter azAZ09 e de 2-64 caracteres)");
define("WORDING_OLD_PASSWORD", "Sua antiga senha");
define("WORDING_PASSWORD", "Senha");
define("WORDING_PROFILE_PICTURE", "Sua foto de perfil:");
define("WORDING_REGISTER", "Registrar");
define("WORDING_REGISTER_NEW_ACCOUNT", "Registrar nova conta");
define("WORDING_REGISTRATION_CAPTCHA", "Por favor entre com os caracteres abaixo.");
define("WORDING_REGISTRATION_EMAIL", "Email (Por favor forneca um endereco de email valido, voce recebera um email para verificacao de sua conta!)");
define("WORDING_REGISTRATION_PASSWORD", "Senha (min. 6 caracteres!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Repetir senha");
define("WORDING_REGISTRATION_USERNAME", "Usuario (apenas letras e numeros e de 2 a 64 caracteres)");
define("WORDING_REMEMBER_ME", "Lembrar-me");
define("WORDING_REQUEST_PASSWORD_RESET", "Recuperacao de senha. Entre com o nome de usuario de sua conta.");
define("WORDING_RESET_PASSWORD", "Recuperar minha senha");
define("WORDING_SUBMIT_NEW_PASSWORD", "Enviar nova senha");
define("WORDING_USERNAME", "Usuario");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Voce esta logado como ");
