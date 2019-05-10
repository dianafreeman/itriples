<?php
/**
 * Template Name: Governance Page
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


  <section id="primary" class="content-area col-lg-9">
    <div class="row">
    <div id="main" class="site-main" role="main">
    <div class="row" id="governance">
      <h2 class="my-4 text-center">ISSS Executive Board</h2>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/lewis.jpg' ?>)"></div>
        <div class="person-info-box">
          <h3>Stephen Lewis, Ph.D</h3>
          <p>President<br>
          	<small><em>University of Guelph</em></small></p>
            <div class="social-icons">
              <a class="ico" target="_blank" href="https://twitter.com/SPLewisPhD" ><i class="fab fa-twitter"></i></a><!--<<a class="ico" target="_blank" >i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>-->
            </div><!-- end social icons -->
          </div><!-- end person-info-box-->
        </div><!-- end the person column-->
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri().'/assets/imgs/headshots/muehlenkamp.jpg' ) ;?>)"></div>
          <div class="person-info-box">
            <h3>Jennier Muehlenkamp, Ph.D</h3>
            <p>Past President<br>
             <small><em>University of Wisconsin, Eau Claire</em></small></p>
             <div class="social-icons">
              <a class="ico" target="_blank" href="https://twitter.com/jjmPhD" ><i class="fab fa-twitter"></i></a><!--<a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>-->
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/washburn.jpg' ?>)"></div>
          <div class="person-info-box">
            <h3>Jason Washburn, Ph.D</h3>
            <p>Treasurer<br>
             <small><em>Northwestern Univerisity</em></small></p>
             <div class="social-icons">
              <!--<a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a>--><a class="ico" target="_blank" href="<?php echo esc_url('https://www.nm.org/doctors/1962628586/jason-j-washburn-phd') ;?>"><i class="fas fa-desktop"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri().'/assets/imgs/headshots/taliaferro.jpg' ) ;?>)"></div>
          <div class="person-info-box">
            <h3>Lindsay Taliaferro Ph.D</h3>
            <p>Treasurer<br>
              <small><em>University of Central Florida</em></small></p>
              <div class="social-icons">
                <!--<a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a>--><a class="ico" target="_blank" href="<?php echo esc_url('https://med.ucf.edu/directory/lindsay-taliaferro-ph-d-m-p-h-m-s/') ;?>"><i class="fas fa-desktop"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/Lengel.jpg' ?>)"></div>
            <div class="person-info-box">
              <h3>Greg Lengel, Ph.D.</h3>
              <p>Secretary<br>
               <small><em>Drake University</em></small></p>
               <div class="social-icons">
               <a class="ico" target="_blank" href="<?php echo esc_url('https://twitter.com/DrGregLengel') ;?>"><i class="fab fa-twitter"></i></a> <!--<a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a>--><a class="ico" target="_blank" href="<?php echo esc_url('https://www.drake.edu/psychology/facultystaff/drgreglengel/') ;?>"><i class="fas fa-desktop"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/victor.jpg' ?>)"></div>
            <div class="person-info-box">
              <h3>Sarah Victor, Ph.D</h3>
              <p>Representative at Large<br>
                <small><em>University of Pittsburgh School of Medicine</em></small></p>
                <div class="social-icons">
                 <!-- <a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a>--><a class="ico" target="_blank" href="<?php echo esc_url('https://www.sarahevictor.com/') ;?>"><i class="fas fa-desktop"></i></a>
               </div>
             </div>
           </div>

           <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/hayes.jpeg' ?>)"></div>
            <div class="person-info-box">
              <h3>Nicole Hayes, M.S</h3>
              <p>Student Representative<br>
               <small><em>Nothwestern University</em></small></p>
               <div class="social-icons">
                <!--<a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/schatten.jpg' ?>)"></div><
            <div class="person-info-box">
              <h3>Heather Schatten, Ph.D</h3>
              <p>Committee Chair. Membership &amp; Benefits<br>
               <small><em> Warren Alpert Medical School of Brown University</em></small></p>
               <div class="social-icons">
                <!--<a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>--><a class="ico" href="mailto:membership@itriples.org"><i class="fas fa-envelope"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/wilson.jpeg' ?>)"></div>
            <div class="person-info-box">
              <h3>Marc Wilson, Ph.D</h3>
              <p>Committee Chair, International Collaboration<br>
               <small><em>  Victoria University of Wellington</em></small></p>
               <div class="social-icons">
                <!--<a class="ico" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" ><i class="fab fa-linkedin"></i></a><a class="ico" target="_blank" ><i class="fas fa-desktop"></i></a>-->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <div class="rounded-circle eboard-img d-block mx-auto" style="background-image: url(<?php echo get_stylesheet_directory_uri().'/assets/imgs/headshots/westers.jpeg' ?>)"></div>
            <div class="person-info-box">
              <h3>Nicholas Westers, Psy.D</h3>
              <p>Committee Chair, Social Media<br>
               <small><em> UT Southwestern Medical Center
               </em></small></p></div>
               <div class="social-icons">
                <a class="ico" href="<?php echo esc_url('https://twitter.com/DocWesters') ;?>" target="_blank" ><i class="fab fa-twitter"></i></a><a class="ico" target="_blank" href="<?php echo esc_url('www.linkedin.com/in/nicholas-j-westers-psy-d-1b54224b') ;?>"><i class="fab fa-linkedin"></i></a><a href="mailto:outreach@itriples.org" target="_top" class="ico" ><i class="fas fa-envelope"></i></a><a href="<?php echo esc_url('https://www.instagram.com/docwesters/') ;?>" target="_blank" class="ico" ><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>

   
    </div><!-- #main -->
  </section><!-- #primary-->

<?php
get_sidebar(); ?>
<?php
get_footer();
