<?php
/**
* Template part for displaying conference posts
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/
?>
<article id="conference-content" style="width: 100%;" <?php post_class(); ?>>
	<div class="conference-header" style="background-image: url(<?php echo get_the_post_thumbnail_url( ) ;?>)">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="display-5 text-center mt-4 conference-title">  <?php echo the_title('ISSS ', ' Meeting'); ?><br>
					<span style="font-size: 50%; font-style: italic"><?php bloginfo('name') ;?></span></h1>
				</div>
				<?php
					$start_date = new DateTime(get_field('conference_start_date', false, false));
					$end_date = new DateTime(get_field('conference_end_date', false, false));
					$today = new DateTime();

					if ( $end_date > $today ) { 
						// if the conference hasn't happened yet, display details ;?>
					<!-- start upcoming conference details --> 
				<div data-aos="fade-in" class="col-md-7 conference-details text-center mb-3">
					<div class="detail-text">
						<h2>The ISSS <?php the_title() ;?> Meeting will be held<br>
							<?php echo $start_date->format('F j').'<sup>'.$start_date->format('S').'</sup>,'.$start_date->format('Y') ;?> - <?php echo $end_date->format('F j').'<sup>'.$end_date->format('S').'</sup>,'.$end_date->format('Y') ?> <br>
				
							<?php if (get_field('preconference') == 'Yes'){ ?>
						<small>Pre-Conference to be held June 21<sup>st</sup></small>
					<?php } ;?>
				</h2>
				<div class="post-content">
				<?php the_content(); ?>
			</div>
					</div>						
						<date class="hidden"><?php echo $start_date->format('m/d/Y') ;?></date>
						<div id="clockdiv" class="col-sm-12 ">
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
				</div><!-- end details -->
				<div class="col-md-5">
						<?php the_field('embedded_map') ;?>

				</div>
				<?php 	} // end IF the conference hasn't happened yet 
					else  { 
						// if the conference has already happened....
						if( get_field('has_awards') ) { ?>
					<div id="awardDiv" class="col-sm-12 conference-details text-center">
					<h2> Congratulations to the <?php the_title() ;?> Conference Award Winners! </h2>

						<?php if ( get_field('travel_award_winner')) { ?>
						<div class="award col-sm-5">
								<img class="rounded mb-3" src="<?php the_field('travel_award_photo'); ?>">
								<p>
									<strong><?php the_field('travel_award_photo_caption') ;?></strong>
									<br>
									ISSS <?php the_title() ;?> Travel Award
									</p>
									<?php the_field('travel_award_winner'); ?>
							</div>
					<?php	}; //-- end if travel award winner --> 
						 if ( get_field('student_award_winner') ){ ?>
							<div class="award col-sm-5">
								<img class="rounded mb-3" src="<?php the_field('student_award_photo'); ?>">
								<p>
									<strong><?php the_field('student_award_photo_caption') ;?></strong>
									<br>
									ISSS <?php the_title() ;?> Travel Award
									</p>
									<?php the_field('student_award_winner'); ?>
							</div>
				</div><!-- end student div --> 
		<?php	}; //end if student award winner

				 }; //END IF conference has awards --> ?>
				<div class="col-sm-12 conference-details text-center">
						<h2>Thank you for joining us in <?php the_field('conference_location') ;?>!</h2>
					<div class="col-sm-10 offset-sm-1">
						<?php the_field('embedded_map') ;?>
					</div>

				<?php }; // END IF conference has already happened --> 
				 ?> 


				

				</div><!-- end .col-sm-12 --> 
		</div><!-- end row --> 
	</div><!-- end container-->
</div><!-- end conference header --> 
<div class="container">
		<div class="row conference-sub-details">
			<?php if (get_field('display_conference_contact')) { ?>
				<a class="col btn-outline-secondary text-center" target="_top" href="mailto:<?php the_field('conference_contact') ;?>">
				<i class="fas fa-users fa-3x"></i>
				<p> Contact the Conference Organizer</p>
			</a>
			<?php } ;?>
			
			<?php if (get_field('registration_link')) { ?>

			<a class="col btn-outline-secondary text-center" target="_blank" href="<?php the_field('registration_link') ;?>">
				<i class="fas fa-ticket-alt fa-3x"></i>
				<p>Register</p>
			</a>
		<?php } ;?>
			<?php if (get_field('conference_program')) { ?>

			<a class="col btn-outline-secondary text-center" target="_blank" href="<?php the_field('conference_program') ;?>" >
					<i class="fas fa-book fa-3x"></i>
					<p>View the Program</p>
				</a>
						<?php } ;?>

		</div>
		<div class="entry-content row">
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
				
		</div> <!-- end entry content row --> 

	</div><!-- /.container -->
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		</article><!-- #post-## -->