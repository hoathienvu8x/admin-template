<?php require_once 'header.php'; ?>
<form action="<?php echo Url::forgot(); ?>" method="post">
	<div id="forgot-form">
		<div id="forgot-logo"><img src="images/logo.svg" /></div>
		<p><input type="text" name="chkfield" value="" placeholder="Email/Username ?" /></p>
		<div id="forgot-button">
			<a href="<?php echo Url::home(); ?>">Login ?</a>
			<input type="submit" name="submit" value="Submit" />
		</div>
	</div>
	<div class="message warning"><p>Put email/username to check !</p></div>
</form>
<?php require_once 'footer.php'; ?>
