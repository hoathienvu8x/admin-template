<?php if (!defined('INAPP')) exit; ?>
<?php $args = array(); ?>
<?php require_once 'header.php'; ?>
<form action="<?php echo Url::option($args); ?>" method="post"  enctype="multipart/form-data">
	<div class="message success"><p>Option saved</p></div>
	<div class="form-inner form-elements">
		<table class="horizontal-display">
			<?php if (is_supper()) : ?>
			<tr>
				<td class="row-label">Option name</td>
				<td>
					<p><input type="text" name="option_name" value="" placeholder="Option name" /></p>
				</td>
			</tr>
			<?php endif; ?>
			<tr>
				<td class="row-label">Description</td>
				<td>
					<p><input type="text" name="option_desc" value="" placeholder="Description" /></p>
				</td>
			</tr>
			<tr>
				<td class="row-label">Value</td>
				<td>
					<p><textarea name="option_value" placeholder="Value"></textarea></p>
				</td>
			</tr>
		</table>
	</div>
	<div class="form-inner form-button">
		<input type="submit" name="save" value="Save" />
	</div>
</form>
<?php require_once 'footer.php'; ?>
