		<footer id="footer">
			<section class="copy">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></section>
		</footer>


	<?php wp_footer(); ?>
	
	<!-- Mobile Menu -->
	<script>
		jQuery(document).ready(function () {
			jQuery('header nav').meanmenu();
		});
	</script>	
	
	<script>
    	$(document).foundation();
	</script>
	
</body>

</html>
