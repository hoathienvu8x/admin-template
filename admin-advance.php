<?php $args = array(); ?>
<?php require_once 'header.php'; ?>
<form action="<?php echo Url::admin($args); ?>" method="post" enctype="multipart/form-data">
	<div class="form-inner form-elements">
		<table class="horizontal-display">
		<tr>
			<td class="row-label">Infomation</td>
			<td>
				<p><input type="text" name="nickname" value="" placeholer="Nickname" /></p>
				<p><input type="email" name="email" value="" placeholder="Email" /></p>
				<p><input type="number" name="telephone" value="" placeholder="Telephone" /</p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Login infomation</td>
			<td>
				<p><input type="text" name="username" value="" placeholder="Username" /></p>
				<p><input type="password" name="password" value="" placeholder="Password" /></p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Role &amp; state</td>
			<td>
				<p><select name="role"><option value="">Select one</option></select></p>
				<p><select name="state"><option value="">Select one</option></select></p>
			</td>
		</tr>
		<tr>
			<td class="row-label">Photo</td>
			<td>
				<p><img src="images/no-image.png" /></p>
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
