<?php
/**
* The template for displaying the homepage
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/
get_header(); ?>
<section id="front-page" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="about" class="row">
			<?php $query = new WP_Query( array(
				'tag_id' => '23',
				'post_type' => 'conference'
			)
		);
		?>


			<?php			
			if ( $query -> have_posts() ) {
				while ( $query -> have_posts() ) {
					$query -> the_post(); 

					$start_date = new DateTime(get_field('conference_start_date', false, false));
					$end_date = new DateTime(get_field('conference_end_date', false, false));
					?>
				<div class="col-sm-12 col-md-7 box item">

					<h2><?php the_title('ISSS ', ' Conference') ?></h2>
					<div class="mission-box">

						<div class="img-box" style="background-image: url(<?php echo get_the_post_thumbnail_url( ); ?>)">
						</div>
						<div class="detail-box">
							<div class="this-detail">
								<p><?php the_field('conference_location') ;?>
								<br><?php echo $start_date->format('F j').'<sup>'.$start_date->format('S').'</sup>,' ;?> - <?php echo $end_date->format('F j').'<sup>'.$end_date->format('S').'</sup>,'.$end_date->format('Y') ?>
							</p>
						</div>
						<div class="this-detail">
							<a  target="_blank" class="btn btn-secondary" href="<?php echo esc_url(get_the_permalink() ) ;?>">Learn More <span class="screen-reader-text">about the <?php get_the_title() ?>Conference</span></a>
						</div>

						</div>

</div>
</div>


<?php	} // end while
wp_reset_query();
} // end if


?>
<div class="col-sm-12 col-md-5 box">
	<?php $query = new WP_Query( array (
		'tag_id'=> '23',
		'post_type' => 'page'
	)
);
	if ( $query -> have_posts() ) {
		while ( $query -> have_posts() ) {
			$query -> the_post(); ?>
			<h2><?php the_title( );?></h2>
			<?php the_excerpt();?>
			<a target="_blank" class="btn btn-outline-secondary" href="<?php echo esc_url(get_the_permalink() ) ;?>"> Read More <span class="screen-reader-text">about ISSS</span></a>


<?php	} // end while
wp_reset_query();
} // end if


?>
</div>
</div><!-- end about row -->
<div id="resources" class="row">
	<div class="col-sm-12 text-center" data-aos="fade-top">
		<h3> NSSI Resources </h3>
		<p>
			Learn more about Nonsuicidal Self-Injury from reputable sources.
		</p>
	</div>
	<div id="resource-carousel" class="col-sm-12 owl-carousel" data-aos="fade-left">
		<?php
		$queryResources = new WP_Query('category_name=Resources');
		if ($queryResources->have_posts() ) {
			while ( $queryResources->have_posts() ) {
				$queryResources->the_post();
				get_template_part( 'template-parts/front-page/card', 'resource');
				} // end while;
				wp_reset_query();

			} // end if
			;?>
	</div><!-- end #resource carousel-->
</div><!-- end resources .row --> 

</main><!-- #main -->
				</section><!-- #primary 
			-->
			<?php
			get_footer();
