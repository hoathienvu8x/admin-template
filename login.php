<?php if (!defined('INAPP')) exit; ?>
<?php require_once 'header.php'; ?>
<form action="<?php echo Url::home(); ?>" method="post">
	<div id="login-form">
		<div id="login-logo"><img src="images/logo.svg" /></div>
		<p><input type="text" name="username" value="" placeholder="Username" autocapitalize="off" autocomplete="off" /></p>
		<p><input type="password" name="password" value="" placeholder="Password" autocapitalize="off" autocomplete="off" /></p>
		<p>
			<input type="text" name="code" value="" placeholder="Code" class="code" autocapitalize="off" autocomplete="off" />
			<img src="capcha.php?mode=t" />
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
