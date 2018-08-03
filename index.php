<?php
define('INAPP', true);
require_once 'init.php';
if (!is_user_loggin()) {
	require_once 'login.php';
	exit;
}
$action = isset($_GET['action']) ? trim($_GET['action']) : '';
if (file_exists($action . '.php')) {
	if (isset($_GET['mode'])) {
		if (file_exists($action . '-advance.php')) {
			require_once $action . '-advance.php';
			exit;
		}
	}
	require_once $action . '.php';
	exit;
}
?>
<?php require_once 'header.php'; ?>
<div class="dashboard"></div>
<?php require_once 'footer.php'; ?>
