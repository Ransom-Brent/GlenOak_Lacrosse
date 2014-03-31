<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="row">
			
		<section class="post" id="post-<?php the_ID(); ?>">

			<article class="entry">

				<?php the_content(); ?>
				
				<div class="large-12 medium-12 small-12 columns">
					<?php echo get_field('announcements'); ?>
				</div>
				
				<div class="row">
					<div class="large-3 medium-3 small-3 columns">
						<a href="<?php echo get_field('hco1_link'); ?>">	
							<?php $hco1 = get_field('hco1_image'); if ($hco1): ?>
								<img src="<?php echo $hco1['url']; ?>" alt="<?php echo $hco1['alt']; ?>" />
							<?php endif; ?>
							<?php echo get_field('hco1_text'); ?>
						</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="<?php echo get_field('hco2_link'); ?>">
							<?php $hco2 = get_field('hco2_image'); if ($name): ?>
								<img src="<?php echo $hco2['url']; ?>" alt="<?php echo $hco2['alt']; ?>" />
							<?php endif; ?>
							<?php echo get_field('hco2_text'); ?>
						</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="<?php echo get_field('hco3_link'); ?>">
							<?php $hco3 = get_field('hco3_image'); if ($hco3): ?>
								<img src="<?php echo $hco3['url']; ?>" alt="<?php echo $hco3['alt']; ?>" />
							<?php endif; ?>
							<?php echo get_field('hco3_text'); ?>
						</a>
					</div>
					<div class="large-3 medium-3 small-3 columns">
						<a href="<?php echo get_field('hco4_link'); ?>">	
							<?php $hco4 = get_field('hco4_image'); if ($hco4): ?>
								<img src="<?php echo $hco4['url']; ?>" alt="<?php echo $hco4['alt']; ?>" />
							<?php endif; ?>
							<?php echo get_field('hco4_text'); ?>
						</a>
					</div>
									
					<div class="large-3 medium-3 small-12">
						<a href="<?php echo get_field('callout_five_link'); ?>"><?php echo get_field('hco5_text'); ?></a>
					</div>
				</div>
				
				<div class="row">
					<div class="large-3 medium-3 small-12 columns">
						<?php eco get_field('section4_title'); ?>
					</div>
					<div class="large-9 medium-9 small-9 columns">
						<?php eco get_field('section4_text_form'); ?>
					</div>
				</div>
				
				<div class="row">
					<div class="large-12 meduim-12 small-12 columns">
						<h3><?php echo get_field('section4_title'); ?></h3>
					</div>
				</div>
				
			</article>

		</section>
		
		<?php endwhile; endif; ?>

		 <?php if(!(is_page('home'))  { ?>
			<?php get_sidebar(); ?>
		<?php } ?>

	</div>

<?php get_footer(); ?>
