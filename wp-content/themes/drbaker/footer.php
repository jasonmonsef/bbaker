<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

		<?php if(!is_page('7')) { ?>
<div class="bg-red">
			<div class="inner-module services clearfix">
				<h2>Our Services</h2>
				<div class="one-third">
					<h3>Infant Dentistry</h3>
					<img src="<?php bloginfo('template_url') ?>/images/new/baby-460x280.jpg" alt="baby-460x280" width="280" height="169" />
					<p>Our Mission is to help your child develop good dental hygiene and promote the right dental habits that will lead them to a beautiful, enduring set of teeth.</p>
					<a class="orange" href="">Read More</a>
				</div><!-- .one-third -->
				<div class="one-third">
					<h3>Pediatric Dentistry</h3>
					<img src="<?php bloginfo('template_url') ?>/images/new/baby2.jpg" alt="baby2" width="280" height="169" />
					<p>Our entire staff is trained to work with children, and Dr. Baker has the education, training and experience to provide the best in pediatric dental care.</p>
					<a class="blue" href="">Read More</a>
				</div>
				<div class="one-third">
					<h3>Children's Dentistry</h3>
					<img src="<?php bloginfo('template_url') ?>/images/new/children-smiling.jpg" alt="children-smiling" width="280" height="169" />
					<p>We all know that good oral hygiene keeps your teeth looking clean and shiny, but did you know that it's also essential to your overall health? It's True!</p>
					<a class="green" href="">Read More</a>
				</div><!-- .one-third -->
			</div><!-- .services -->
		</div><!-- .bg-red -->
<? } else { ?>
<?php } ?>

	<div id="footer" role="contentinfo">
		<div class="footer-inner clearfix">
			<div class="left">
				<a  href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/new/logo-footer.jpg" alt="logo-footer" /></a>
			</div><!-- .left -->
			<div class="right">
				<div class="align-center">
					<h3>Temecula Office: 951-506-1666</h3>
					<h3>Menifee Office: 951-672-1666</h3>
<!-- 					<h3>Center For Advanced Pediatric Dentistry</h3> -->
				</div>
				<div class="algin-right">
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/new/icon-facebook.jpg"/></a>
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/new/icon-twitter.jpg"/></a>
				</div>
			</div><!-- .right -->
		</div><!-- .footer-inner -->
	</div><!-- #footer -->

</div><!-- #wrapper -->
<div class="secondary-header">
	<a href="#">Click to request an appointment</a>
</div>
<div id="overlay-wrap-menu">
	<div class="switch">
		<div class="overlay-inner ">
			<div id="access" role="navigation" style="display: block ! important; float: none; width: 100%; text-align: center; margin-top: 150px;">
				<ul>
					<li><a href="<?php bloginfo('url') ?>/">Home</a></li>
					<li><a href="<?php bloginfo('url') ?>/our-services">Our Services</a></li>
					<li><a href="<?php bloginfo('url') ?>/our-team">Our Team</a></li>
					<li><a href="<?php bloginfo('url') ?>/about-dr-baker">Dr. Bruce Baker</a></li>
					<li><a href="<?php bloginfo('url') ?>/new-patients/">New Patients</a></li>
					<li><a href="<?php bloginfo('url') ?>/rewards-club/">Rewards Club</a></li>
					<li><a href="<?php bloginfo('url') ?>/photo-gallery/">Photo Gallery</a></li>
					<li><a href="<?php bloginfo('url') ?>/contact-us/">Contact us</a></li>
				</ul>
			</div><!-- #access -->
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
</div>
<div id="overlay-wrap-appointment-form">
	<div class="switch">
		<div class="overlay-inner ">
<!-- 			<a class="nav-toggle" href="#"><span></span></a> -->
			<h2>REQUEST AN APPOINTMENT</h2>
			<h3>Fill out the form below to have a representative contact you. Please select a desired date and time for your appointment and we will try our best to accommodate you :)</h3>
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
		</div><!-- .overlay-inner -->
	</div><!-- .switch -->
</div>
<script>
	// bind a function to the window's scroll event, this will update
// the 'active' class every time the user scrolls the window
jQuery(window).scroll(function() {    
    // find the li with class 'active' and remove it
    jQuery("#header").removeClass("loaded");
    // get the amount the window has scrolled
    var scroll = jQuery(window).scrollTop();
    // add the 'active' class to the correct li based on the scroll amount
    if (scroll >= 50) {
        jQuery("#header").addClass("scrolling");
        jQuery('#header .header-inner .right h1').fadeOut('100');
    }
    else {
        jQuery("#header").removeClass("scrolling");
        jQuery("#header").addClass("loaded");
        jQuery('#header .header-inner .right h1').fadeIn('100');
    }

});

jQuery('.nav-toggle').click(function(){
	jQuery('.nav-toggle').toggleClass('active')
});
jQuery(document).on('click', '.header-inner .nav-toggle', function () {
	jQuery('#overlay-wrap-menu .switch').addClass('overlay').removeClass('switch').show();
	jQuery('.overlay').toggleClass('open');
	jQuery('.trigger-overlay.close').show();
	
});
jQuery(document).on('click', '.secondary-header a', function () {
	jQuery('#overlay-wrap-appointment-form .switch').addClass('overlay').removeClass('switch').show();
	jQuery('.overlay').toggleClass('open');
	jQuery('.trigger-overlay.close').show();
	
});
</script>

<div class="gform-wrap" style="display:none;">
	<div class="gform-inner">
		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
	</div>
</div>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61107261-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
