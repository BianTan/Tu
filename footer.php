	<div class="footer">
		<div class="f-h">
			<p>Powered By <a href="https://wordpress.org" target="_blank">WordPress</a> · Theme By <a href="https://biantan.org">Tu</a></p>
			<?php 
				global $BianDan_tu;
				echo $BianDan_tu['zt-foot'];
			?>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/js/SmoothScroll.js"></script><!-- 平滑滑动 -->
		<link href="<?php bloginfo('template_directory'); ?>/css/prettify.css" type="text/css" rel="stylesheet"><!-- pre css -->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prettify.js"></script><!-- pre js -->
		<?php global $BianDan_tu; if($BianDan_tu['pajx']==1){?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nprogress.css"><!-- 进度条css -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nprogress.js"></script><!-- 进度条js -->
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/pjax.js"></script><!-- pjax -->
			<script src="<?php bloginfo('template_directory'); ?>/js/view-image.min.js"></script><!-- 图片暗箱 -->
		<?php } ?>
	</div>
</body>
</html>