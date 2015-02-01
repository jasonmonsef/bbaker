<?php
/**
 * Template Name: New Patients
 *
 */

get_header(); ?>


		<div class="bg-green">
			<div class="inner-module page our-team clearfix">
				<h1>Welcome New Patients!</h1>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


				<?php endwhile; // end of the loop. ?>

			</div>
		</div>


<?php get_footer(); ?>
