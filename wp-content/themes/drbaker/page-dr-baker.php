<?php
/**
 * Template Name: Dr Baker
 *
 */

get_header(); ?>


		<div class="bg-green">
			<div class="inner-module page our-team clearfix">
				<h1>About Dr. Baker</h1>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php endwhile; // end of the loop. ?>
				<div class="associate-doctors-wrap">
					
					<div id="home-slider">
					  <div class="flexslider">
					  	<?php if(get_field('doctor')): ?>
					  		<?php while(the_repeater_field('doctor')): ?>
					  		
					  		<div class="doctor">
					  			<?php the_sub_field('doctor') ?>
					  		</div>
					  		<?php endwhile; ?>
					  	<?php endif; ?>
					  </div> <!-- #flexslider -->		
					</div> <!-- #home-slider -->

				</div>
			</div>
		</div>


<?php get_footer(); ?>
