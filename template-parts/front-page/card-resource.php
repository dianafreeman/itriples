<?php
/**
* Template part for displaying posts
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WP_Bootstrap_Starter
*/
global $post;
?>
<div class="hvr-grow">
	<button class="invisible-btn" onclick="window.open('<?php esc_url(the_permalink( )) ;?>')">
<div class="card mb-3" >
	<h3 class="card-header"><?php the_title() ;?> </h3>
	  	<div class="card-body">
  	<div class="card-image" style="background-image: url(<?php esc_url( the_post_thumbnail_url( )[0]); ?>)">
  	</div>
  	<div class="button-bottom">
    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
  </div>
  <div class="card-btn">
      <a class="btn btn-outline-secondary" href="<?php esc_url(the_field('resource_link')) ;?>">Learn More </a>

</div>
</div>
</button>
</div>

