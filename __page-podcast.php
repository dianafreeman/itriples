<?php
/**
 * The template for displaying the podcast page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header(); ?>

<section id="primary" class="content-area">
	<div class="row">
		<div id="main" class="site-main col-lg-9" role="main">
			<div class="col-sm-3 card">
				<?php 
				$the_query = new WP_Query( 'post_type=itriples_podcast') ;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); 
						$filepath = get_field('file_path') ;
						do_shortcode( $content, $ignore_html );

						?>

						<audio id="podcast" controls src="<?php echo esc_url(get_stylesheet_directory_uri().''.get_field('file_path')) ;?>">
							Your browser does not support the <code>audio</code> element.
						</audio><?php echo get_the_title() ?>
						<div class="podcast-byine">
							<?php echo get_field('featuring_author') ?>;
							<?php  $image = get_field('author_headshot'); ?>
						</div>

						<img class="img-cricle" src="<?php echo $image ?>" alt="<?php get_field('featuring_author') ;?>" /></div>


					<?php }	/* Restore original Post Data */
					wp_reset_postdata();
				} else {?>
					<h1>Nothing Found</h1>
				<?php }?>

				<br/>
			</div><!-- #main -->

			<?php
			get_sidebar(); ?>
		</div>
	</section><!-- #primary-->
	<?php
	get_footer();
