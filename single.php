<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header(); ?>


		<?php
		while ( have_posts() ) : the_post();
			if (is_singular('conference')){
				get_template_part( 'template-parts/single/single', 'conference' );
			} else { ?>

	<section id="primary" class="content-area col-lg-9">
		<main id="main" class="site-main" role="main">
			<?php 
	
			get_template_part( 'template-parts/content', get_post_format() );

			}

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
	

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
if (!is_singular('conference')){
	get_sidebar();

}
get_footer();
