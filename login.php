<?php require_once 'header.php'; ?>
<form action="<?php echo Url::home(); ?>" method="post">
	<div id="login-form">
		<div id="login-logo"><img src="images/logo.png" /></div>
		<p><input type="text" name="username" value="" placeholder="Username" /></p>
		<p><input type="password" name="password" value="" placeholder="Password" /></p>
		<p>
			<img src="capcha.php" />
			<input type="text" name="code" value="" placeholder="Code" />
		</p>
		<p><label for="remember_me"><input type="checkbox" name="remember" value="y" id="remember_me" /> Remember me ?</label></p>
		<div class="login-button">
			<a href="<?php echo Url::forgot(); ?>">Loss password ?</a>
			<input type="submit" name="login" value="Login" />
		</div>
	</div>
	<div class="message error"><p>Please login !</p></div>
</form>
<?php require_once 'footer.php'; ?>
