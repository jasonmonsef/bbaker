<?php
/**
 * Template Name: Contact Us
 *
 */

get_header(); ?>


		<div class="bg-green">
			<div class="inner-module page our-team clearfix">
				
				<h1>Contact Us</h1>
				<div >
					<a class="emergency button" href="#emergency">IN CASE OF AN EMERGENCY<br>
					PLEASE CONTACT OUR 24 HOUR SERVICE</a>
					<!-- what/where do they contact? -->
					
				</div>
				<div class="location-wrap clearfix">
					<div class="location">
						<h2>Temecula Office</h2>
						<p><img src="<?php bloginfo('template_url') ?>/images/new/temecula1-300x168.jpg" alt="temecula1-300x168"  /></p>
						<p>
							42210 Lyndie Lane, Suite 100<br>
							Temecula, CA 92591<br>
							Phone: (951) 506-1666<br>
							Fax: (951) 506-1674<br>
						</p>
						<p>
							<h3><strong>OUR HOURS</strong></h3>
							Monday 8am - 5pm • Tuesday 8am - 5pm<br>
							Wednesday 8am - 5pm • Thursday 8am - 5pm<br>
							Friday 8am - 4pm<br>
							Every Other Saturday 8am - 2pm<br>
							Sunday Closed<br>
						</p>
					</div>
					<div class="location">
						<h2>New Office</h2>
						<p><img src="<?php bloginfo('template_url') ?>/images/new/temecula1-300x168.jpg" alt="temecula1-300x168"  /></p>
						<p>
							42210 Lyndie Lane, Suite 100<br>
							Temecula, CA 92591<br>
							Phone: (951) 506-1666<br>
							Fax: (951) 506-1674<br>
						</p>
						<p>
							<h3><strong>OUR HOURS</strong></h3>
							Monday 8am - 5pm • Tuesday 8am - 5pm<br>
							Wednesday 8am - 5pm • Thursday 8am - 5pm<br>
							Friday 8am - 4pm<br>
							Every Other Saturday 8am - 2pm<br>
							Sunday Closed<br>
						</p>
					</div>
				</div>
				<hr>
				<h2>Request an Appointment</h2>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
				
				<div id="emergency">
					<h3>Emergency Tips</h3>
						<ul>
							<li>Cut or bitten tongue, lip or cheek: Apply ice to bruised areas. If there is bleeding, apply firm but gentle press pressure with a clean gauze or cloth. If bleeding does not stop after 15 minutes, or it cannot be controlled by simple pressure, take the child to a hospital emergency room.</li>

							<li>Knocked out permanent tooth: Find the tooth. Handle the tooth by the top (crown), not the root portion. You may rinse the tooth, but DO NOT clean or handle the tooth unnecessarily. Try to reinsert the tooth in its socket. Have the child hold the tooth in place by biting on a clean gauze or cloth. If you cannot reinsert the tooth, transport the tooth in a cup containing milk, water or saline solution. See Dr. Bruce Baker IMMEDIATELY! Time is a crucial factor in saving the tooth.</li>
							
							<li>Toothache: Clean the area around the sore tooth thoroughly. Rinse the mouth vigorously with warm salt water or use dental floss to dislodge trapped food or debris. DO NOT place aspirin on the gum or on the aching tooth. If face is swollen, apply a cold compress. Take acetaminophen for pain and see Dr. Baker as soon as possible.</li>
							
							<li>Broken Tooth: Rinse dirt from injured area with warm water. Place cold compresses over the face in the area of the injury. Locate and save any broken tooth fragments. See Dr. Bruce Baker immediately.Bleeding after a baby tooth falls out:Fold and pack a clean gauze or cloth over the bleeding area. Have the child bite firmly for 15 minutes. This can be repeated once; if bleeding persists, contact Dr. Bruce Baker’s office.</li>
							
							<li>Bleeding after a baby tooth tooth falls out: (this needs to be changed from permanent): Fold and pack a clean gauze or cloth over the bleeding area. Have the child bite firmly for 15 minutes. This can be repeated once; if bleeding persists, contact Dr. Baker’s office.</li>
						</ul>
						
					</div><!-- .emeergency-wrap -->
			</div><!-- .inner-module -->
		</div><!-- .bg-green -->


<?php get_footer(); ?>
