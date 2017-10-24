<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nxtheme
 */
?>
			</main>

			<?=
			module('footer')
				->tag('footer')
				->ctrl(); ?>

			<?php wp_footer(); ?>

		</div>

<!--Fancy Box-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

<!--User Snap-->
<script type="text/javascript">
    (function() { var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = '//api.usersnap.com/load/e6ce8902-fe3f-48b6-a814-ff19f7a9a1ba.js';
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();
</script>

	</body>
</html>
