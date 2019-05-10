<?php
/**
 * Template part for displaying page content in governance
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

 <div class="col-lg-4 col-sm-6 text-center mb-4">
        <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/lewis.png' ?>)"></div>
        <div class="person-info-box">
          <h3><?php the_title() ;?></h3>
          <p><?php the_field('position');?><br>
          	<small><em>University of Guelph</em></small></p>
            <div class="social-icons">
              <a class="ico" target="_blank" href="https://twitter.com/SPLewisPhD" ><i class="fab fa-twitter"></i></a><!--<<a class="ico" target="_blank" >i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>-->
            </div><!-- end social icons -->
          </div><!-- end person-info-box-->
       </div><!-- end the person column-->
