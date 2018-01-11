<?php include('header.php'); ?>

<!-- clean separation of HTML and PHP -->
<h4 class="header center teal-text text-lighten-1 light card-panel"><?php echo $_SESSION['user_name']; ?><?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h4>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name" class="form-inline">
	<center><label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label></center>
	<div class="container text-center" style="display: block; width: 20%;">
		<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" placeholder="(<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)" required /> 
		<input type="submit" name="user_edit_submit_name" class="btn" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
	</div>
</form><hr/>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
	<center><label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label></center>
	<div class="container text-center" style="display: block; width: 30%;">
		<input id="user_email" type="email" name="user_email" placeholder="(<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)" required /> 
		<input type="submit" name="user_edit_submit_email" class="btn" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
	</div>
</form><hr/>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
	<div class="container text-center" style="display: block; width: 20%;">
		<label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>

		<input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

		<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
		<input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

		<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
		<input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

		<input type="submit" name="user_edit_submit_password" class="btn" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
	</div>
</form><hr/>

<!-- backlink -->
<center><a class="btn" href="index.php">Voltar para home</a></center>

<?php include('footer.php'); ?>
