<?php if (!defined('INAPP')) exit; ?>
<div id="aside">
	<div id="aside-top"><div id="site-logo"><img src="images/logo.svg" /></div></div>
	<div id="aside-inner">
		<ul>
			<li id="info">
				<a href="<?php echo Url::profile(); ?>">Profile</a>
			</li>
			<li>
				<a href="<?php echo Url::admin(); ?>">Users</a>
				<ul class="sub-menu">
					<li><a href="<?php echo Url::admin();?>">All users</a></li>
					<li><a href="<?php echo Url::admin(array('mode' => 'add'));?>">New user</a></li>
				</ul>
			</li>
			<li>
				<a href="<?php echo Url::option();?>">Options</a>
				<ul class="sub-menu">
					<li><a href="<?php echo Url::option(); ?>">All options</a></li>
					<li><a href="<?php echo Url::option(array('mode' => 'add')); ?>">New option</a></li>
				</ul>
			</li>
			<li><a href="<?php echo Url::logout(); ?>">Logout</a></li>
		</ul>
	</div>
</div>
