<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>




	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			
			<h3 id="about-header-text">Accelerate is a strategy and marketing agency<br>located in the heart of NYC. Our goal is to build<br>businesses by making our clients visible and<br> making their customers smile</h3>
				
			
		</div><!-- .site-content -->
	</div><!-- .home-page -->

	<div id="primary" class="site-content">
		<div class="content" role="main">
			
			<div class="services">
			<h5 class="our-services">OUR SERVICES</h5>
			<p class="we-take-pride">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p></div>

			<div class="all-services">


		<?php while ( have_posts() ) : the_post(); 
				
			
			$image_1 = get_field("image_1"); ?>
			
				
		<div class="this-service">
			<div class="service-content">


			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?></div>
			

			

	<div class="service-image">
		<?php if($image_1) { ?>
				<img src="<?php echo $image_1; ?>" />
				<?php } ?>


		

</div>
</div>


			
			<?php endwhile; // end of the loop. ?>
		</div>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

	<nav id="navigation" class="container">
	<h4 class="interested">Interested in working with us?</h4>
	<div class="about-button">
	<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
</div>
</nav>

<?php get_footer(); ?>