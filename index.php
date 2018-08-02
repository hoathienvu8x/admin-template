<?php
if (!is_user_loggin()) {
	require_once 'login.php';
	exit;
}
$action = isset($_GET['action']) ? trim($_GET['action']) : '';
if (file_exists($action . '.php')) {
	require_once $action . '.php';
	exit;
}
?>
<?php require_once 'header.php'; ?>

<?php require_once 'footer.php'; ?>
