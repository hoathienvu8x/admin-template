<?php
if (!defined('INAPP')) exit;
define('SITE_URL', './');
define('BYTES_PER_CHUNK', 1024);
require_once 'functions.php';
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	define('AJAX_DOING', true);
}
?>
