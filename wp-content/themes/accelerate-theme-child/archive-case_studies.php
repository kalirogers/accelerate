<?php
/**
 * The template for displaying the case studies archive page
 *
 * This is the template that displays archive case studies.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Acclerate
 * @since Acclerate Marketing
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			$services = get_field('services');
			$client = get_field('client' );
			$link = get_field('site_link');
			$image1 = get_field('image_1');
			$size = "full";
			?>
			
		<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h3 class="case-study"><?php echo $services; ?></h3>
			<p>Client: <?php echo $client; ?></p>
			<p><?php the_excerpt(); ?></p>
			<a class="case-study" href="<?php echo $link; ?>">Visit Live Site</a>

		</aside>

		<div class="case-study">
			<?php if($image1) { ?>
			<?php echo wp_get_attachment_image( $image1, $size ); ?>
			<?php } ?>
		</div>
		
			
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>