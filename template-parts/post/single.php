<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section id="primary" class="content-area col-lg-9">
		<div class="row">
		<?php
		while ( have_posts() ) : the_post();
			if ('itriples_conference' == get_post_type() ){ ?>
			<div id="conference-content" class="site-main col-lg-12" role="main">

			<?php get_template_part('template-parts/content-conference');

			} else  if (in_category( 'measures' )){ 
			get_template_part( 'template-parts/content','measures' ); ?>
			<div id="main" class="site-main" role="main">
			<?php 
			get_template_part( 'template-parts/content', get_post_format() );
			};
			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->

<?php
if ('itriples_conference' !== get_post_type() ){
get_sidebar(); 
}?>
</div><!-- end row -->
	</section><!-- #primary-->
<?php
get_footer();
