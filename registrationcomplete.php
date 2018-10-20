<?php
/**
* Template Name: Registration Complete
 */


get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<div id="registration" class="container complete">
				<?php echo do_shortcode('[ms-note type="info"]Your request to become a member of ISSS has been received. The Payment Gateway could take a couple of minutes to process and return the payment status.[/ms-note]') ?>
<h3> Welcome to ISSS <?php $user_info = wp_get_current_user() ;
echo $user_info->user_firstname ?></h3>

<?php echo  do_shortcode('[ms-membership-account-link]') ?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
