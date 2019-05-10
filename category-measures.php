<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section id="measures" class="content-area col-lg-9">
		<div id="main " class="site-main container-fluid" role="main">

		<?php
		$args = array(
			'category_name'=>'measures',
			'order'=>'ASC',
			'posts_per_page'=>100,

		);
		$the_query = new WP_Query($args);

		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					echo  '<h1 class="page-title text-center">NSSI Assessment Tools and Measures Repository</h1>';
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<hr />
			<div id="measure-navigation" class="form-group">
			Jump to: <select class="custom-select" name="measurelist" form="measureNav" style="width: 60%;">

			</select>
			<input id="submit-anchor" class="btn btn-outline-secondary" type="submit" value="Go">
			</div>
			<div class="row">
			<?php
			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();
				
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'measures' );

			endwhile;
	
	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
	</section><!-- #primary-->


<?php
get_sidebar(); ?>
</div>
<?php
get_footer();
