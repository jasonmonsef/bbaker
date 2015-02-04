<?php
/**
 * Template Name: Our Services
 *
 */

get_header(); ?>

		<div class="bg-green">
			<div class="inner-module page services-intro clearfix">
				<h1>Our Services</h1>
				<div class="left">
					<h2>Parents are welcome :)</h2>
					<p>We encourage parents to play an active role in their child’s visit and accompany
them into all treatment areas. This provides an additional level of comfort for children as they
undergo the dental process, and an additional level of comfort for parents as they have the capability
to observe their children within this setting. </p>
				</div>
				<div class="right">
					<h2>What is Pediatric Dentistry?</h2>
					<p>An age defined specialty that provides both primary and comprehensive preventative and
therapeutic oral health care for infants and children through adolescence, including those with special needs.</p>
				</div>
				
				
				
				
			</div><!-- .inner-module -->
		</div><!-- .bg-green -->
		<div class="bg-red">
			<div class="inner-module page services clearfix">
				<div >
					
					<?php $services_post = new WP_Query( array( 'post_type' => 'services', 'order' => 'ASC','posts_per_page' => 150  ) ); while($services_post->have_posts()) : $services_post->the_post(); ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
						<h3 class="entry-title"><?php the_title(); ?></h3>
						<?php the_post_thumbnail(); ?>
						
						<?php the_content() ?>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>

				</div>
			</div>
		</div>


<?php get_footer(); ?>
