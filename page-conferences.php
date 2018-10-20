<?php
/**
 * The template for displaying all pages
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

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
			<div id="conferences" class="container">
				<div class="row">
					<div class="map-instructions col-sm-4 col-md-3">
					<h3>ISSS Conferences</h3>
					<p >Click a conference location to learn more about the conference, and view the conference program.</p>  
					<div class="lower">
					<p data-aos="fade-down" data-aos-anchor="#conferenceMapTable">
						You can also use the table below to navigate through the map.<i class="fas fa-arrow-down"></i></p>
				
					</div>
					</div>
					<div class="col-sm-8 col-md-9 conference-map-container">
						<div id="conferenceMapdiv">

						</div>
					</div>
				</div><!-- end row --> 
					<div class="row table-container">
						<table id="conferenceMapTable" class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">Year</th>
									<th scope="col">Institution</th>
									<th scope="col">Program</th>
								</tr>
						</thead>
						<tbody class="dataStart">

						</tbody>
						</table>
					</div>
				</div><!-- end container -- >
			</div><!-- end row --> 
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
