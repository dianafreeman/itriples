<?php
/**
 * The template for displaying all card posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<button class="invisible-btn" onclick="window.open('<?php esc_url(the_permalink( )) ;?>')">
<div class="card mb-3">
	<h3 class="card-header"><?php the_title() ;?> </h3>
	  	<div class="card-body">
  	<div class="card-image" style="background-image: url(<?php esc_url( the_post_thumbnail_url( )[0]); ?>)">
  	</div>
  	<div class="button-bottom text-center">
  	<?php if (strlen(get_the_excerpt()) > 1) { ;?>
    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
  <div class="card-btn">
      <a class="btn btn-outline-secondary" href="<?php esc_url(the_field('resource_link')) ;?>">Learn More </a>

<?php } else { ?>
    <div class="card-btn take-me-there">

<a class="btn btn-outline-info" href="<?php esc_url(the_field('resource_link')) ;?>">Take Me There</a><br>
  <small class="resource-tag">Online Resource!</small>
  </div>

<?php } ?>
</div>
</div>
</div>
</div>
</button>
