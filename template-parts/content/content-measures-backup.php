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

$file_type = get_field('file_type');
$has_short_form = get_field('short_form_available');
$measure_link = ($file_type == "File" ? get_field('file') : get_field('file_link'));
if ($has_short_form) {
    $short_form_file_type = get_field('sf_file_type');
    $short_form_link = ($short_form_file_type == "File" ? get_field('file_sf') : get_field('file_link_sf'));
}

$has_documentation = get_field('docs_available');
if ($has_documentation) {
    $num_of_docs = get_field('docs_available_num');
    $doc1_file_type = get_field('documentation_file1_type');
    $doc_link_1 = ($doc1_file_type == 'File' ? get_field('documentation_file1') : get_field('documentation_link1'));

    if ($num_of_docs == 2) {
        $doc2_file_type = get_field('documentation_file2_type');
        $doc_link_2 == ($doc2_file_type == 'File' ? get_field('documentation_file2') : get_field('documentation_link2'));
    }
}

$has_alt_language_version = get_field('multi_lang');
if ($has_alt_language_version) {
    $alt_language_text = get_field('alt_language');
    $alt_lang_file_type = get_field('file_type_alt');
    $alt_lang_link = ($alt_lang_file_type == 'File' ? get_field('alt_lang_file') : get_field('alt_file_link'));
}
$alt_lang_has_docs = get_field('alt_lang_documentation_available');
if ($alt_lang_has_docs) {
    $alt_lang_docs_file_type = get_field('file_type_altlang_documentation');
    $alt_lang_doc_link = ($alt_lang_docs_file_type == 'File' ? get_field('documentation_file_alt_lang') : get_field('documentation_link_alt_lang'));

}

$multireference = get_field('multi_refs');
$references = get_field('references');

// $contactInfo = array(get_field('contact_name'), get_field('contact_email'));

?>

<article id="post-<?php the_ID();?>" class="col-sm-12">
    <div class="card border-dark mb-3">
        <div class="card-header">
            <?php echo strtoupper($slug); ?>
        </div><!-- .card-header -->
        <div class="card-body row">
            <div class="col-sm-5">
                <?php
                if (is_single()) {
                     ucfirst(the_title('<h4 class="card-title">', '</h4>'));
                } else {
                the_title('<h4 class="entry-title"><a id="' . $slug . '" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>');
                };?>
            </div><!-- end col-sm-5 -->
            <div class="col-sm-7">

                <div class="details">
                    <?php the_content('<p class="card-text entry-content">', '</p>');?>

                </div><!-- end details -->
            </div><!-- end col-sm-7 -->
            <div class="col-sm-12">
                <?php 
                $button_classes = 'offset-sm-1 mb-1 btn btn-outline-info file-download';
$label = 'Download';

($has_short_form ? $button_classes+' col-sm-5' : $button_classes+' col-sm-10')
    ($has_short_form ? $label = $label+' Full Form' : null);

($file_type == "Link" ? $label = $label+'from external link <br><small class="lowercase">ou will be redirected away from
                     itriples.org</small>' : null);

?>


                    <a class="<?php echo esc_attr($button_classes) ?>" target="_blank"
                    href="<?php echo esc_url($measure_link); ?>"> <?php echo $label; ?></a>
                    <?php
// IF ITS A FILE

// IF CONTACT
if ($filetype == "Contact") {?>
                    <p style="color:#1F9BCF; text-align: center"><em>How to Obtain:</em>
                        <?php echo "<a target='_blank' href='mailto:" . get_field('contact_email') . "'>Contact " . get_field('contact_name') . "</a><br><small class='lowercase muted'>This link will open your default e-mail client</small>"; ?>
                    </p>
                    <?php }
;

/*
END Short Form

START Documentation
 */

$num_doc_files = get_field('docs_available_num');

$doc1_type = get_field('documentation_file1_type');
$doc2_type = get_field('documentation_file2_type');

if ($doc1_type == 'File') {
    $doc_1 = get_field('documentation_file1');
} else {
    $doc_1 = get_field('documentation_link1');

}

if ($num_doc_files > 1) {
    if ($doc2_type == 'File') {
        $doc_2 = get_field('documentation_file2');
    } else {
        $doc_2 = get_field('documentation_link2');

    }
}

if ($doc_1) {?>

                    <a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank"
                        rel="noopener noreferrer" href=<?php echo esc_url($doc_1); ?>> Read the Documentation</a>

                    <?php } // end if doc 1

if ($doc_2) {?>
                    <a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank"
                        rel="noopener noreferrer" href=<?php echo esc_url($doc_2); ?>> Read the Documentation</a>
                    <?php }?>
                    <!--
 Alternative Languages/Multilingual Files
-->

                    <?php $language_file_type = get_field('file_type_alt');
if ($multilingual && ($language_file_type == "File")) {?>
                    <a class="col-sm-10 offset-sm-1 btn btn-outline-info file-download" target="_blank"
                        href="<?php echo esc_url('https://itriples.org/wp-content/uploads/measures/' . get_field('alt_lang_filename')); ?>">
                        Download in <?php the_field('alt_language');?> </a>
                    <?php } else if ($multilingual && ($language_file_type == "Link")) {?>
                    <a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank"
                        href="<?php echo esc_url(get_field('alt_file_link')); ?>"> Download in
                        <?php the_field('alt_language');?> </a>
                    <?php }?>


                    <!--
Alternate Language Documentation
-->
                    <?php
$langdocfiles = get_field('documentation_filesname_alt_lang');
$langdoclinks = get_field('documentation_links_alt_lang');

if (($altLangDocs == "Yes") && (get_field('file_type_altlang_documentation') == "File")) {?>
                    <a class="col-sm-10 mb-1 offset-sm-1 btn btn-outline-info file-download" target="_blank"
                        href=<?php echo esc_url('"https://itriples.org/wp-content/uploads/measures/' . $langdocfiles[0] . '"'); ?>>
                        Read the Documentation for the <?php echo the_field('alt_language') . ' ' . strtoupper($slug); ?></a>

                    <?php
} else if (($altLangDocs == "Yes") && (get_field('file_type_altlang_documentation') == "Link")) {?>
                    <a class="col-sm-10 mb-1 offset-sm-1 btn e-info file-download" target="_blank"
                        href="<?php echo esc_url($langdoclinks[0]); ?>"> Read the Documentation for the
                        <?php echo the_field('alt_language') . ' ' . strtoupper($slug); ?>
                    </a>

                    <?php }
;?>
            </div><!-- end col-sm-12-->
            <div class="references">
                <h5><?php if (get_field('multi_refs') == false) {
    echo 'Reference';
} else {
    echo 'References';
}
;?> </h5>
                <?php echo $references; ?>
            </div><!-- end references-->


            <?php

wp_link_pages(array(
    'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-bootstrap-starter'),
    'after' => '</div>',
));

?>

        </div><!-- end CARD BODY -->


    </div><!-- END CARD -->

</article><!-- #post-## -->