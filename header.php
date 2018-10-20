<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package WP_Bootstrap_Starter
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <header id="masthead" class="site-header " role="banner">
                                <div class="top-right-social-area">
<a class="social-link" href="<?php echo esc_url("https://facebook.com/itriples") ;?>"> 
    <i class="fab fa-facebook-f"></i></a>
<a class="social-link" href="<?php echo esc_url("https://twitter.com/itriples") ;?>"> 
    <i class="fab fa-twitter"></i>
</a>
    </div><!-- #primary-sidebar -->
            <div class="container-fluid">
                <div class="top-header row">
                    <div class="navbar-brand col-sm-8 offset-sm-2 text-center">
                          <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri().'/assets/imgs/ISSS_Original.svg' ;?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    </div>

                </div>
            </div>
            <nav class="navbar navbar-dark navbar-expand-md ">
              <a href="<?php echo esc_url( home_url( '/' )); ?>" class=" hidden responsive-logo animated
">
                <img class="" src="<?php echo get_stylesheet_directory_uri().'/assets/imgs/isss-responsive.svg' ;?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            </a>
                <div class="navbar-toggler-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                   <!-- <button class="navbar-toggler user-info-toggle" aria-controls="" aria-expanded="false" aria-label="Toggle User Information">
                        <span class="nav-toggle navbar-user-toggle-icon"><i class="fas fa-user"></i></span>
                    </button>-->
                </div><!-- end navbar toggler div -->

        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'container'       => 'div',
            'container_id'    => 'main-nav',
            'container_class' => 'collapse navbar-collapse justify-content-md-center',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 3,
            'fallback_cb'     => 'isss_navwalker::fallback',
            'walker'          => new isss_navwalker()
        ));
        ?>

    </nav>
    <div id="nav-search-bar" class="nav-search">
       <div class="search-box">
        <?php get_search_form(  ); ?>
    </div>
</div>
</header><!-- #masthead -->

<?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
<div id="page-sub-header" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/forest-trees.jpg';?>)">
    <div  class="offset-sm-2 col-sm-8 sub-header-container">
            <noscript>
         <div class="header-box" style="position: absolute;">
            <span class="intro-fade">Experienced Clinicians,</span>
            <br>
            <span class="intro-fade">Expert Researchers,</span>
            <br> 
            <span class="intro-fade">and Passionate Community members,</span>
            <br>
            <span class="intro-fade"> dedicated to advancing the research and treatment of Non-Suicidal Self injury.</span>
            <br>
            <br>
            <div class="btn-div text-center">
                <span class="intro-fade text-center"><a class="btn btn-outline-primary" href=".../about-isss' ?>"> Learn More <span class="screen-reader-text">about ISSS</span></a>
                <a class="btn btn-primary" href=".../apply' ?>">Become A Member<span class="screen-reader-text">of ISSS</span></a>
            </div>


        </div>
    </noscript>
        <div class="header-box animated">
            <span class="intro-fade hidden animated text-center">Experienced clinicians, expert 
researchers, and passionate </span><br>
            <span class="intro-fade hidden animated text-center">community members, 
dedicated to advancing the research and </span><br>
            <span class="intro-fade hidden animated text-center">treatment of Nonsuicidal 
Self Injury.</span>
            <br>            <br>
            <br>
            <div class="btn-div text-center">
                <span class="intro-fade hidden animated text-center"><a class="btn btn-outline-primary" href="<?php echo esc_url(site_url()).'/about-isss' ?>"> Learn More <span class="screen-reader-text">about ISSS</span></a>
                <a class="btn btn-primary" href="<?php echo esc_url(site_url()).'/apply' ?>">Become A Member<span class="screen-reader-text">of ISSS</span></a>
            </div>


        </div>

    </div><!-- end sub-header container-->
</div><!-- end  page sub-header-->
<?php endif; ?>
    <?php if (is_front_page()){?>

<div id="content" class="site-content">
    <div class="container-fluid">

<?php    } else if (is_active_sidebar('sidebar-1')){?>
    <div id="content" class="site-content container-fluid">
     <div class="row">

<?php } ?>
    <?php endif;  ?>
