<footer id="footer">
	<div class="row">
		<div class="large-2 medium-2 small-12 columns">
			<ul>
				<li>
					<?php $sm1 = get_field('sm1_image', 'option'); if ($sm1): ?>
						<img src="<?php echo $sm1['url']; ?>" alt="<?php echo $sm1['alt']; ?>" />
					<?php endif; ?>
					<?php echo get_field('sm1_name', 'option'); ?>
				</li>
				<li>
					<?php $sm2 = get_field('sm2_image', 'option'); if ($sm2): ?>
						<img src="<?php echo $sm2['url']; ?>" alt="<?php echo $sm2['alt']; ?>" />
					<?php endif; ?>
					<?php echo get_field('sm2_name', 'option'); ?>
				</li>
				<li>
					<?php $sm3 = get_field('sm3_image', 'option'); if ($sm3): ?>
						<img src="<?php echo $sm3['url']; ?>" alt="<?php echo $sm3['alt']; ?>" />
					<?php endif; ?>
					<?php echo get_field('sm3_name', 'option'); ?>
				</li>
				<li>
					<?php $sm4 = get_field('sm4_image', 'option'); if ($sm4): ?>
						<img src="<?php echo $sm4['url']; ?>" alt="<?php echo $sm4['alt']; ?>" />
					<?php endif; ?>
					<?php echo get_field('sm4_name', 'option'); ?>
				</li>
				<li>
					<?php $sm5 = get_field('sm5_image', 'option'); if ($sm5): ?>
						<img src="<?php echo $sm5['url']; ?>" alt="<?php echo $sm5['alt']; ?>" />
					<?php endif; ?>
					<?php echo get_field('sm5_name', 'option'); ?>
				</li>
			</ul>
		</div>
		<div class="large-2 medium-2 small-12 columns">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
		</div>
		<div class="large-4 medium-4 small-12 columns">
			<?php echo get_field('text_area', 'option'); ?>
		</div>
		<div class="large-4 medium-4 small-12 columns">
			<!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
			<!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
			<video width="640" height="360" controls>
				<!-- MP4 must be first for iPad! -->
				<source src="__VIDEO__.MP4" type="video/mp4" /><!-- Safari / iOS video    -->
				<source src="__VIDEO__.OGV" type="video/ogg" /><!-- Firefox / Opera / Chrome10 -->
				<!-- fallback to Flash: -->
					<object width="640" height="360" type="application/x-shockwave-flash" data="__FLASH__.SWF">
						<!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
						<param name="movie" value="__FLASH__.SWF" />
						<param name="flashvars" value="controlbar=over&amp;image=__POSTER__.JPG&amp;file=__VIDEO__.MP4" />
						<!-- fallback image. note the title field below, put the title of the video there -->
							<img src="__VIDEO__.JPG" width="640" height="360" alt="__TITLE__" title="No video playback capabilities, please download the video below" />
					</object>
			</video>
		</div>
	</div>
</footer>

<section class="copy">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></section>
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
