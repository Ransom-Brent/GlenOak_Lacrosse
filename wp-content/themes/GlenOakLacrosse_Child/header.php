<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<!-- Customize Page Tab Titles -->
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' '; }
		      elseif (is_404()) {
		         echo 'Not Found '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' page '. $paged; }
		   ?>
	</title>
	
	<!-- Stylesheets -->
	<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" />
	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<header>
			<!--<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/" /></a></h1>-->
			<!--<div class="description"><?php bloginfo('description'); ?></div>-->
		
		<div class="nav-bg">
			<div class="row">
				<div class="xxlarge-12 xlarge-12 large-12 medium-12 columns">
					<nav class="clearfix">
						<?php 
							wp_nav_menu(array(
							'menu' => 'Primary Menu', 
							'container_id' => 'cssmenu', 
							'walker' => new CSS_Menu_Maker_Walker()
							)); 
						?>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="row">
			<!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
			<!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
			<video width="640" height="360" controls>
				<!-- MP4 must be first for iPad! -->
				<source src="<?php echo get_field('mp4_main_video'); ?>" type="video/mp4" /><!-- Safari / iOS video    -->
				<source src="<?php echo get_field('ogv_main_video'); ?>" type="video/ogg" /><!-- Firefox / Opera / Chrome10 -->
				<!-- fallback to Flash: -->
					<object width="640" height="360" type="application/x-shockwave-flash" data="__FLASH__.SWF">
						<!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
						<param name="movie" value="<?php echo get_field('flash_main_video'); ?>" />
						<param name="flashvars" value="controlbar=over&amp;image=__POSTER__.JPG&amp;file=__VIDEO__.MP4" />
						<!-- fallback image. note the title field below, put the title of the video there -->
							<img src="<?php echo get_field('poster_image_main'); ?>" width="640" height="360" alt="__TITLE__" title="No video playback capabilities, please download the video below" />
					</object>
			</video>
		</div>
		
		<div class="large-6 medium-6 small-6 columns">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<a href="<?php echo get_field('link_one', 'option'); ?>"><?php echo get_field('link_one_text', 'option'); ?></a>
				</div>
			</div>
		</div>
		<div class="large-6 medium-6 small-6 columns">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<a href="<?php echo get_field('link_two', 'option'); ?>"><?php echo get_field('link_two_text', 'option'); ?></a>
				</div>
			</div>
		</div>
		
	</header>
