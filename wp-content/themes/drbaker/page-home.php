<?php
/**
 * Template Name: Homepage
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="bg-green">
			<div class="inner-module intro clearfix">
				<div class="left">
					<h2 class="red">Welcome</h2>
					<h3><img src="<?php bloginfo('template_url') ?>/images/new/gerber-baby.jpg" />It is our mission to provide the best dental experience for your child.</h3>
					<h3 class="red">What Makes Us Different?</h3>
					<ul>
						<li>Laser Technology Eliminates need for Needles.</li>
						<li>We offer Laser Dentistry, eliminating shots.</li>
						<li>Parents can accompany their children into all areas.</li>
						<li>We do NOT use a papoose board.</li>
						<li>We offer in house general anesthesia.</li>
					</ul>
				</div><!-- .left -->
				<div class="right">
					<iframe width="560" height="315" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/wN3Sg-61wiY?rel=0&amp;autoplay=0"></iframe>
				</div><!-- .right -->
			</div><!-- .inner-module -->
		</div><!-- .bg-green -->
		
<?php get_footer(); ?>
