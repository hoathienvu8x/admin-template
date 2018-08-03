<?php if (!defined('INAPP')) exit; ?>
<?php $args = array(); ?>
<?php require_once 'header.php'; ?>
<form action="<?php echo Url::profile($args); ?>" method="post" enctype="multipart/form-data">
	<div class="form-inner form-elements">
		<table class="horizontal-display">
		<tr>
			<td class="row-label">Infomation</td>
			<td>
				<p><input type="text" name="nickname" value="" placeholder="Nickname" /></p>
				<p><input type="email" name="email" value="" placeholder="Email" /></p>
				<p><input type="number" name="telephone" value="" placeholder="Telephone" /></p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Login infomation</td>
			<td>
				<p><input type="text" name="username" readonly="readonly" value="" placeholder="Username" /></p>
				<p><input type="password" name="password" value="" placeholder="Password" /></p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Photo</td>
			<td>
				<p><img src="images/no-image.svg" /></p>
				<p><input type="file" name="photo" accept="image/x-png,image/gif,image/jpeg" /></p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Bio</td>
			<td>
				<p><textarea name="bio" placeholder="Bio"></textarea></p>
			</td>
		</tr>
		</table>
	</div>
	<div class="form-inner form-button">
		<input type="submit" name="save" value="Save" />
	</div>
</form>
<?php require_once 'footer.php'; ?>
