<?php if (!defined('INAPP')) exit; ?>
<div id="footer">
	<div id="footer-inner">&copy; 2018<?php echo date('Y') > 2018 ? '-'.date('y') : ''; ?> AnhChangThoDe22145 All Rights Reserved.</div>
</div><!-- End of footer -->
<?php if (is_user_loggin()) : ?>
	</div><!-- End of content -->
</div><!-- End of content-wrap -->
</div><!-- End of container -->
<script src="<?php echo SITE_URL;?>js/script.js"></script>
<?php endif; ?>
</body>
</html>
