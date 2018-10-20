<?php
/**
* The template for displaying the resource page
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
  <section id="primary" class="content-area col-sm-12 col-lg-9">
    <div id="resources-page" class="site-main" role="main">
      <h2>Resources</h2>
      <div class="">
      <?php
     $queryResources = new WP_Query('category_name=Resources');
        if ($queryResources->have_posts() ) {
          while ( $queryResources->have_posts() ) {
            $queryResources->the_post();?>

         <?php     get_template_part( 'template-parts/post/single', 'card');
        } // end while;
              wp_reset_query();
              ?>
            </div><!-- end row --> 
        </div><!-- end resource page -->
            </section><!-- #primary -->

        <?php  } 
    get_sidebar(); 
    get_footer();?>