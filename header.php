<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Administrator Control Panel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="shortcut icon" href="<?php echo SITE_URL; ?>favicon.ico" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<script>
	const ajaxurl = '<?php echo SITE_URL;?>ajax.php';
	<?php if (is_user_login()) { ?>
		const uploadurl = '<?php echo SITE_URL; ?>upload.php';
		const BYTES_PER_CHUNK = <?php echo BYTES_PER_CHUNK; ?>;
	<?php } ?>
	</script>
</head>
<body<?php body_class(); ?>>
<?php 
if (is_user_loggin()) :
	require_once 'navi.php';
	?>
	<div id="container">
		<div id="header">
			<div id="header-inner"></div>
		</div>
		<div id="content-wrap">
			<div id="content">
	<?php
endif;
?>
