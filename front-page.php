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

			<div class="col-sm-12 col-md-7 box item">
				<h2>ISSS 2018 Conference</h2>
				<div class="mission-box">
					<?php $query = new WP_Query( array(
						'tag_id' => '23',
						'post_type' => 'itriples_conference'
					)
				);
				if ( $query -> have_posts() ) {
					while ( $query -> have_posts() ) {
						$query -> the_post(); ?>

					<div class="img-box" style="background-image: url(<?php echo get_the_post_thumbnail_url( ); ?>)">
				</div>
<div class="detail-box">
	<div class="this-detail">
		<p>Brussels, Belgium<br>June 22-23rd, 2018<br><small>Pre-Conference June 21st, 2018</small>
		</p>
	</div>
	<div class="this-detail">
		<a  target="_blank" class="btn btn-secondary" href="<?php echo esc_url(get_the_permalink() ) ;?>">Learn More <span class="screen-reader-text">about the 2018 Conference</span></a>
	</div>

						



<?php	} // end while
	wp_reset_query();
} // end if


?>
</div>
</div>
</div>
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
</div>
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
			</div>
			</div><!-- end #resource carousel-->
		</div><!-- end resources .row --> 
				
				</main><!-- #main -->
				</section><!-- #primary 
			-->
				<?php
				get_footer();
