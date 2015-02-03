<?php
/**
 * Template Name: Our Team
 *
 */

get_header(); ?>


		<div class="bg-green">
			<div class="inner-module page our-team clearfix">
				<h1>Our Team</h1>
				<h3>Our staff consists of dental professionals with the specialized skills
to address the oral health needs of infants, children and adolescents.</h3>
				<div class="clearfix">
					
					<?php $services_post = new WP_Query( array( 'post_type' => 'teammembers', 'order' => 'ASC','posts_per_page' => 150  ) ); while($services_post->have_posts()) : $services_post->the_post(); ?>

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
