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

	<div id="primary" class="site-content">
		<div class="content" role="main">
			
		<?php while ( have_posts() ) : the_post(); 
				
			
			$image_1 = get_field("image_1"); ?>
			
				
		<div class="this-service">
			<div class="service-content">


			
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
				</div>

			

	<div class="service-image">
		<?php if($image_1) { ?>
				<img src="<?php echo $image_1; ?>" />
				<?php } ?>

		

</div>
</div>


			
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

	<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to Work</span></a></div>
</nav>

<?php get_footer(); ?>