<?php
/**
 * Template Name: Account page
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
      <div class="account-info">
<?php echo do_shortcode( '[ms-membership-account]'); ?>

<?php echo do_shortcode( '[gdpr_privacy_tools]');?>

<?php echo do_shortcode( '[ms-membership-logout]');?>

    </div><!-- #main -->
  </section><!-- #primary-->

<?php
get_sidebar();
get_footer();?>
