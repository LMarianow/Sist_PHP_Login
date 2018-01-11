<?php include('header.php'); ?>

<?php if ($login->passwordResetLinkIsValid() == true) { ?>
	<div class="container">
		<div class="row center">
				<div class="col l6 offset-l3 s12 m8 offset-m2 card-panel">
					<h3 class="header teal-text lighten-1 light">Resetar senha</h3>
					<form action="password_reset.php" method="post" name="new_password_form">
						<input type='hidden' name='user_name' value='<?php echo $_GET['user_name']; ?>' />
						<input type='hidden' name='user_password_reset_hash' value='<?php echo $_GET['verification_code']; ?>' />
						<br>
						<br>
						<div class="row">
							<div class="input-field col s10 offset-s1 l10 offset-l1 m10 offset-m1">
								<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" autofocus required autocomplete="off" />
								<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10 offset-s1 l10 offset-l1 m10 offset-m1">
								<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
								<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
							</div>
						</div>
						<div class="row">
							<a href="login.php">
								<button class="btn waves-effect waves-light grey" type="button">Cancelar</button>
							</a>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<button class="btn waves-effect waves-light" type="submit" name="submit_new_password"><?php echo WORDING_SUBMIT_NEW_PASSWORD; ?></button>
						</div>
					</form>
				</div>
		</div>
    </div>
<!-- Formulario de pedido de redefinicao de senha! -->
<?php } else { ?>
			<div class="container">
				<div class="row center">
					<div class="col l12 s12 m12">
						<br>
						<h4 class="card-panel teal-text light">Recuperar senha</h4>
					</div>
				</div>
				<div class="row center">
					<div class="col l6 offset-l3 s12 m8 offset-m2 card-panel">
						<h3 class="header teal-text lighten-1 light">Digite o nome de usuario:</h3>
						<form action="password_reset.php" method="post" name="password_reset_form">
							<div class="row">
								<div class="input-field col s10 offset-s1 l10 offset-l1 m10 offset-m1">
									<input id="user_name" name="user_name" type="text" placeholder="<?php echo WORDING_REQUEST_PASSWORD_RESET; ?>" autofocus required/>
								</div>
							</div>
							<div class="row">
								<a href="login.php"><button class="btn waves-effect waves-light grey" type="button">cancel</button></a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<button class="btn waves-effect waves-light" name="request_password_reset" type="submit"><?php echo WORDING_RESET_PASSWORD; ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
<?php } 

include('footer.php'); ?>
