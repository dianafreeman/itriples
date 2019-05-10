<?php
/**
 * Template Name: Membership Application
 */

get_header();
$loggedin = is_user_logged_in();
?>
<section id="primary" class="content-area col-sm-12">
  <div id="main" class="site-main" role="main">
    <div id="register" class="">
      <div class="top-header">
        <h1 class="text-center">Membership</h1>
        <?php if (!$loggedin) { 
          echo get_template_part( '/template-parts/membership/application' ); ?>

          <div class="col-sm-12">

            <div id="website-signup" class="hidden">
              <h3 class="undo-uppercase">Thank you<span class="applicant-name"></span>!<br>
              Your application has been succesfully submitted.</h3><h4 class="undo-uppercase">The membership coordinator will review your application. If we need more information from you, we will let you know.</h4>
              <hr>
              <p> Click the button below to create your itriples.org account, and pay your annual membership dues.<br>
                <small class="text-muted">The button below will redirect you to a new page.</small></p>
              </div>
              <div id="register-links" class="col-sm-10 hidden">
                <a id="professional-register" class="btn btn-outline-primary hidden" href="<?php echo esc_url(get_site_url().'/register/?membership_id=24') ;?>">Create my Professional Account</a>

                <a id="student-register" class="btn btn-outline-primary hidden" href="<?php echo esc_url(get_site_url().'/register/?membership_id=87') ;?>">Create my Student Account</a>
              </div>
            <?php } ;?>

          </div>
        </div>
      </div>
  </div>
</div>
</div>
</div>

</div><!-- #main -->
</div>
</section><!-- #primary-->
<?php
get_footer();

if ($loggedin){ 
wp_redirect ( home_url("/members/me") );
exit;
}
?>


