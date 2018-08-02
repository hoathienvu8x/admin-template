<?php
$args = array();
$page = 2;
$pages = 3;
$options = array(
	array('option_name' => 'rows_per_page', 'option_value' => '10','option_desc' => 'Records display per page', 'autoload' => 'y')
);
?>
<?php require_once 'header.php'; ?>
<div class="message"><p>Found 10 options</p></div>
<div class="page-navi">
	<span class="total">10 options</span>
	<a href="<?php echo Url::option($args); ?>">First</a>
	<span class="current"><?php echo $page; ?>/<?php echo $pages; ?></span>
	<a href="<?php echo Url::option(array('page' => ($page + 1))); ?>" class="next-page">Next</a>
	<a href="<?php echo Url::option(array('page' => $pages)); ?>" class="last-page">Last</a>
</div>
<div class="data-table">
	<table class="list-table">
		<thead>
			<tr>
				<th class="col-checkbox"><input type="checkbox" name="chkAll" value="y" /></th>
				<th><a href="<?php echo Url::option(array('orderby' => 'nickname', 'order' => 'asc')); ?>">Option</a></th>
				<th>Value</th>
				<th class="col-tools">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($options as $row) : ?>
			<tr id="option_<?php echo $row['option_name']; ?>">
				<td class="col-checkbox"><input type="checkbox" name="checked[]" value="<?php echo $row['option_name']; ?>" /></td>
				<td><a href="<?php echo Url::option(array('edit' => $row['option_name'])); ?>"><?php echo $row['option_desc']; ?></a></td>
				<td><?php echo $row['option_value']; ?></td>
				<td class="col-tools">
					<a href="<?php echo Url::option(array('edit' => $row['option_name'])); ?>" class="tool edit">Edit</a>
					<a href="<?php echo Url::option(array('change' => $row['option_name'])); ?>" class="tool change">Change</a>
					<a href="<?php echo Url::option(array('del' => $row['option_name'])); ?>" class="tool delete">Delete</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="page-navi">
        <span class="total">10 options</span>
        <a href="<?php echo Url::option($args); ?>">First</a>
        <span class="current"><?php echo $page; ?>/<?php echo $pages; ?></span>
        <a href="<?php echo Url::option(array('page' => ($page + 1))); ?>" class="next-page">Next</a>
        <a href="<?php echo Url::option(array('page' => $pages)); ?>" class="last-page">Last</a>
</div>
<?php require_once 'footer.php'; ?>
