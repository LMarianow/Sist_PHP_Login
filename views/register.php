<?php include('header.php'); ?>
<!-- IF para verificação de erros -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
	<div class="container">
		<div class="row card-panel ">
		   <form class="teal-text lighten-1 center dark " action="register.php" method="post" name="registerform>
				<div class="group " style="margin-bottom: 0;"> 
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<h4 style="margin: 0;" class="teal-text lighten-1 center dark ">Registro</h4>
					</div>
				</div>
				<br class="hide-on-large-only">
				<div class="row">
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<input style="margin: 0;" id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
						<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
					</div>
				</div>
				<br class="hide-on-large-only">
				<div class="row">
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
					<br>
						<input style="margin: 0;" id="user_email" type="email" name="user_email" required />
						<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
					</div>
				</div>
				<br class="hide-on-large-only">
				<div class="row">
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<input style="margin: 0;" id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
						<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
					</div>
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<span></span>
					</div>
				</div>
				<br class="hide-on-large-only">
				<div class="row">
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<input style="margin: 0;" id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
						<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
					</div>
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<span></span>
					</div>
				</div>
				<div class="row">
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<center><br><img src="tools/showCaptcha.php" alt="captcha" /></center>
						<input style="margin: 0;" type="text" name="captcha" required />
						<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
					</div>
					<div class="input-field col l6 m12 s12 offset-l3 offset-m3">
						<span></span>
					</div>
				</div>
				<div class="row" style="margin-bottom: 0;">
					<div class="col l6 m12 s12 center-align offset-l3 offset-m3">
						<button id="register" name="register" class="btn" type="submit"><?php echo WORDING_REGISTER; ?></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<p class="center grey-text">Ja possui uma conta? 
	<a href="login.php"><strong class=" teal-text lighten-1">Entre</strong></a>
    </p>
<?php } else{?>
 <center><a class="btn red" href="login.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a></center>
 <?php }
 include('footer.php'); ?>