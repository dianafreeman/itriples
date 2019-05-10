<?php
/**
* Template part for displaying conference posts
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/
?>
<article id="conference-content" <?php post_class(); ?>>
	<div class="conference-header" style="background-image: url(<?php echo get_the_post_thumbnail_url( ) ;?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="display-5 text-center mt-4 conference-title">  ISSS <?php echo the_title(); ?> Meeting<br>
					<span style="font-size: 50%; font-style: italic">International Society for the Study of Self Injury</small></h1>
					</div>
					<div data-aos="fade-in" class="col-sm-7 conference-details text-center mb-3">
						<h2>June 22<sup>nd</sup> - June 23<sup>rd</sup>, 2018<br>
						<small>Pre-Conference to be held June 21<sup>st</sup></small></h2>
						<div id="clockdiv" class="col-sm-12">
							<div>
								<span class="days"></span>
								<div class="smalltext">Days</div>
							</div>
							<div>
								<span class="hours"></span>
								<div class="smalltext">Hours</div>
							</div>
							<div>
								<span class="minutes"></span>
								<div class="smalltext">Minutes</div>
							</div>
							<div>
								<span class="seconds"></span>
								<div class="smalltext">Seconds</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 conference-details">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80926.7865700547!2d4.292102955664624!3d50.83290452272651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4ca2ffbb451%3A0xef57b0a48fce11b4!2sBoulevard+de+la+Plaine+2%2FU-residence%2C+1050+Ixelles%2C+Belgium!5e0!3m2!1sen!2sus!4v1527555022361" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="row conference-sub-details">
			<a class="col btn-secondary text-center" target="_blank" href="mailto:<?php the_field('conference_contact') ;?>">
				<i class="fas fa-users fa-3x"></i>
				<span> Contact the Conference Organizer</span>
			</a>
			<a class="col btn-secondary text-center" target="_blank" href="<?php the_field('registration_link') ;?>">
				<i class="fas fa-ticket-alt fa-3x"></i>
				<span>Register</span></a>
				</button>
				<a class="col btn-secondary">
				</a>
			</div>
			<div class="entry-content row">
				<div class="col-sm-4 my-4">
					<div class="card">
						<div class="card-top">
							
						</div>
						<div class="card-body">
							<h4 class="card-title">Conference Program</h4>
							<p class="card-text">The <?php echo the_title();?> Conference program is now availiable.</p>
						</div>
						<div class="card-footer">
							<a target="_blank" href="<?php the_field('conference_program') ;?>" class="btn btn-primary">View the Program</a>
						</div>
					</div>
				</div>
				<?php
				$post_objects = get_field('linked_posts');
				if( $post_objects ): ?>
				<?php foreach( $post_objects as $post):
				setup_postdata($post); ?>
				<div class="col-sm-4 my-4 mx-auto">
					<div class="card">
						<div class="card-body">
							
							<h4 class="card-title"><?php the_title(); ?></h4>
							<?php the_excerpt(); ?>
						<div class="card-footer">
							<a href="<?php echo esc_url( the_permalink() ) ;?>" class="btn btn-primary">Read More <span class="screen-reader-text">about <?php the_title();?></span></a>
						</div>
					</div>

					</div>
				</div>

					<?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;
				?>
				
			</div>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		</article><!-- #post-## -->