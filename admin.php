<?php if (!defined('INAPP')) exit; ?>
<?php
$args = array();
$page = 2;
$pages = 3;
$users = array(
	array('id' => 2, 'nickname' => 'Mr Nhat', 'username' => 'mtr.nhat','email' => 'mtr.nhat@gmail.com', 'role' => 'admin','state' => 'check')
);
?>
<?php require_once 'header.php'; ?>
<div class="message"><p>Found 10 administrators</p></div>
<div class="page-navi">
	<span class="total">10 administrators</span>
	<a href="<?php echo Url::admin($args); ?>">First</a>
	<span class="current"><?php echo $page; ?>/<?php echo $pages; ?></span>
	<a href="<?php echo Url::admin(array('page' => ($page + 1))); ?>" class="next-page">Next</a>
	<a href="<?php echo Url::admin(array('page' => $pages)); ?>" class="last-page">Last</a>
</div>
<div class="data-table">
	<table class="list-table">
		<thead>
			<tr>
				<th class="col-checkbox"><input type="checkbox" name="chkAll" value="y" /></th>
				<th><a href="<?php echo Url::admin(array('orderby' => 'nickname', 'order' => 'asc')); ?>">Nick Name</a></th>
				<th><a href="<?php echo Url::admin(array('orderby' => 'name', 'order' => 'asc')); ?>">Username</a></th>
				<th>Role</th>
				<th class="col-tools">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $row) : ?>
			<tr id="admin_<?php echo $row['id']; ?>">
				<td class="col-checkbox"><input type="checkbox" name="checked[]" value="<?php echo $row['id']; ?>" /></td>
				<td><a href="<?php echo Url::admin(array('edit' => $row['id'])); ?>"><?php echo $row['nickname']; ?></a><br /><?php echo $row['email']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><strong><?php echo $row['role']; ?></strong><span class="state <?php echo $row['state'];?>"><?php echo $row['state']; ?></span></td>
				<td class="col-tools">
					<a href="<?php echo Url::admin(array('edit' => $row['id'])); ?>" class="tool edit">Edit</a>
					<a href="<?php echo Url::admin(array('change' => $row['id'])); ?>" class="tool change">Change</a>
					<a href="<?php echo Url::admin(array('del' => $row['id'])); ?>" class="tool delete">Delete</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="page-navi">
        <span class="total">10 administrators</span>
        <a href="<?php echo Url::admin($args); ?>">First</a>
        <span class="current"><?php echo $page; ?>/<?php echo $pages; ?></span>
        <a href="<?php echo Url::admin(array('page' => ($page + 1))); ?>" class="next-page">Next</a>
        <a href="<?php echo Url::admin(array('page' => $pages)); ?>" class="last-page">Last</a>
</div>
<?php require_once 'footer.php'; ?>
