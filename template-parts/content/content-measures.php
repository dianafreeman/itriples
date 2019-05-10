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
$hasShortForm = get_field('short_form_available');
$primaryFilename = get_field('file_name');
$shortFormFilename = get_field('file_name_sf');
$multireference = get_field('multi_refs');
$references = get_field('references');
$filetype = get_field('file_type');
$altLangDocs = get_field('alt_lang_documentation_available');

$multilingual = get_field('multi_lang');
//$contactInfo = array(get_field('contact_name'), get_field('contact_email') );
$documentation = get_field('docs_available');
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
				<?php 
				if (($filetype == "Link") && ($hasShortForm)) { ?>
					<a class="col-sm-5 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url(get_field('file_link')) ;?>">
						Download Full Form 
					<?php } else if (($filetype == "Link") && (!$hasShortForm))  { ?>
						<a class="col-sm-10 offset-sm-1 mb-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url(get_field('file_link')) ;?>">
							Download from External Link<br><small class="lowercase">You will be redirected away from itriples.org</small></a>
						<?php } else if (($filetype == "File") && ($hasShortForm)) {?>
							<a class="col-sm-5 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url("https://itriples.org/wp-content/uploads/measures/". $primaryFilename );?>" >Download Full Form</a>
						<?php } else if ( ($filetype == "File") && (!$hasShortForm) ) {?>
							<a class="col-sm-10 offset-sm-1 mb-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url('https://itriples.org/wp-content/uploads/measures/'. $primaryFilename );?>">Download</a>
						<?php } else if ($filetype == "Contact") { ?>
							<p style="color:#1F9BCF; text-align: center"><em>How to Obtain:</em> <?php echo "<a target='_blank' href='mailto:".get_field('contact_email')."'>Contact ".get_field('contact_name')."</a><br><small class='lowercase muted'>This link will open your default e-mail client</small>" ;?></p>
						<?php  } ;

						if ( ($hasShortForm == 'Yes') && (get_field('sf_file_type') == "File") && ($shortFormFilename)){ ?>
							<a class="col-sm-5 mb-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url('https://itriples.org/wp-content/uploads/measures/'. $shortFormFilename ); ?>">Download Short Form</a>
						<?php } else if (($hasShortForm == 'Yes') && (get_field('sf_file_type') == "Link")){ ?>
							<a class="col-sm-5 mb-1 btn btn-outline-info file-download" target="_blank" href="
							<?php echo esc_url(get_field('file_link_sf')) ;?>"> Download Short Form</a>
						<?php } ;

/* 
END Short Form


START Documentation
*/

$docfiles = explode(", ", get_field('documentation_filenames'));

$doclinks = explode(", ", get_field('documentation_links'));


if ( ($documentation == "Yes") && (get_field('documentation_file_type') == "File" ) ){
	if (sizeof($docfiles) == 1) { ?>
		<a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$docfiles[0].'"' );?> > Read the Documentation</a>
<?php } else {
		$filect = 1; 
		foreach ($docfiles as $file) { ?>
			<a class="col-sm-10 mb-1 offset-sm-1 mb-1 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$file.'"' ) ;?>> Read the Documentation (<?php echo $filect ;?>) </a>
			<?php 
			$filect = $filect+1;
		};

	};

	} else if (($documentation == "Yes") && (get_field('documentation_file_type') == "Link" ) ){
		if (sizeof($doclinks) == 1)  { ?>
		<a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url($doclinks[0]) ;?>"> Read the Documentation 
		</a>

<?php } else {
		$linkct = 1; 
		foreach ($doclinks as $link) { ?>
			<a class="col-sm-10 mb-1 offset-sm-1 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url($link) ;?>"> Read the Documentation (<?php echo $linkct ;?>) </a>
			<?php 
			$linkct = $linkct+1;
		};

	};

}?>
<!--
 Alternative Languages/Multilingual Files
--> 

<?php $language_file_type = get_field('file_type_alt');
if ( $multilingual && ( $language_file_type == "File") ) { ?>
	<a class="col-sm-10 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url('https://itriples.org/wp-content/uploads/measures/'.get_field('alt_lang_filename')) ;?>"> Download in <?php the_field('alt_language') ;?> </a>
<?php } else if ( $multilingual && ( $language_file_type == "Link") ) { ?>
	<a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url(get_field('alt_file_link')) ;?>"> Download in <?php the_field('alt_language') ;?> </a>
<?php } ?>


<!-- 
Alternate Language Documentation
-->
<?php 
$langdocfiles = explode(", ", get_field('documentation_filesname_alt_lang'));
$langdoclinks = explode(", ", get_field('documentation_links_alt_lang'));


if ( ($altLangDocs == "Yes") && (get_field('file_type_altlang_documentation') == "File" ) ){ ?>
		<a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/'.$langdocfiles[0].'"' );?>> Read the Documentation for the <?php echo the_field('alt_language').' '.strtoupper($slug);?></a>

<?php	
} else if (($altLangDocs == "Yes") && (get_field('file_type_altlang_documentation') == "Link" ) ){?>
		<a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank" href="<?php echo esc_url($langdoclinks[0]) ;?>"> Read the Documentation for the <?php echo the_field('alt_language').' '.strtoupper($slug);?>
		</a>

<?php };?>
</div><!-- end col-sm-12--> 
<div class="references">
	<h5><?php if (get_field('multi_refs') == false ){
		echo 'Reference';
	} else {
		echo 'References';
	};?> </h5>
	<?php echo $references ;?>
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
