<?php include('header.php'); ?>

<h3 class="header center teal-text text-lighten-1 light card-panel"><?php echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . ".Seja bem vindo!<br /><br/>"?></h3>

<div class="row">
	<center>
	<a href="index.php?logout"><button class="btn waves-effect waves-light red" type="button">Deslogar</button></a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="edit.php"><button class="btn waves-effect waves-light" type="submit"><?php echo WORDING_EDIT_USER_DATA; ?></button></a>
	</center>
</div>


