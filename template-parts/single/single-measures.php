<?php
/**
 * Template part for displaying measure posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

global $post;
$slug = $post->post_name;

$primaryFilename = get_field('file_name');
$shortFormFilename = get_field('file_name_sf');
$references = get_field('references');
$multilingual = get_field('multilingual');
$contactInfo = get_field('contact_info');
$documentation = get_field('documentation_filename');
if ($multilingual === true) {
	$multiLingFileName = get_field('alt_lang_filename');

}; 
?>

<article id="post-<?php the_ID(); ?>" class="col-sm-12">
	<div class="card border-dark mb-3" >
	  <div class="card-header">
		<?php echo strtoupper($slug); ?>
	</div><!-- .card-header -->
  <div class="card-body row">
  	<div class="col-sm-5">
    
<?php
		 if ( is_single() ) { ;?>

		<?php 	ucfirst(the_title( '<h4 class="card-title">', '</h4>' ));
		} else { ?>
			<?php
			the_title( '<h4 class="entry-title"><a id="'.$post->post_name.'" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		};
	
 ?>
</div><!-- end col-sm-5 -->
<div class="col-sm-7">

<div class="details">
<?php the_content('<p class="card-text entry-content">','</p>'); ?>

  </div><!-- end details --> 
  </div><!-- end col-sm-7 --> 
<div class="col-sm-12">

    <?php if (($primaryFilename) && (!$shortFormFilename)){ ?>

 <a class="col-sm-12 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$primaryFilename.'"' );?> > Download</a>
 
  <?php }  else if (($primaryFilename) && ($shortFormFilename)){ ?>
 <a class="col-sm-5 offset-sm-1 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$primaryFilename.'"' );?> > Download Full Form</a>

  <a class="col-sm-5 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$shortFormFilename.'"' );?> > Download Short Form</a>
    <?php } else if ($contactInfo){?>
 
 <p style="color:#1F9BCF; text-align: center"><em>How to Obtain:</em> <?php echo $contactInfo ;?></p>

 <?php    } ?>

 <?php if ($documentation) {?>
 <a class="col-sm-12 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$documentation.'"' );?> > Read the Documentation</a>

 <?php }

 ?>
</div><!-- end col-sm-12--> 
 <div class="references">
 	<h5>References </h5>
    <?php  echo '<p class="reference">'.str_replace('<br />', '</p><p class="reference">', $references).'</p>';
    ?>
</div><!-- end references--> 


		<?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );

			
		?>

		  </div><!-- end CARD BODY --> 


	</div><!-- END CARD -->

</article><!-- #post-## -->
