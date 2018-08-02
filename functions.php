<?php
function is_user_loggin() {
	return false;
}
function get_user_data($key, $default = '') {
	return "Key : $key";
}
class Url {
	public static function query($args = array()) {
		$query = array();
		foreach($args as $key => $val) {
			$query[] = $key . '=' . urlencode($val);
		}
		return implode('&', $query);
	}
	public static function action($action, $args = array()) {
		$query = self::query($args);
		return SITE_URL . '?action=' . $action . (!empty($query) ? '&' . $query : '');
	}
	public static function home($args = array()) {
		$query = self::query($args);
		return SITE_URL . (!empty($query) ? '?' . $query : '');
	}
	public static function admin($args = array()) {
		return self::action('admin', $args);
	}
	public static function logout() {
		return SITE_URL . '?lg=true';
	}
	public static function option($args = array()) {
		return self::action('option', $args);
	}
	public static function profile($args = array()) {
		return self::action('profile', $args);
	}
	public static function forgot($args = array()) {
		return self::action('forgot', $args);
	}
}
