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
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

			

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
		
		$image_headline = get_field ('image_headline');
		
		?>
		
			<div class='about-hero'>
				<h1><?php echo $image_headline; ?></h1>
			</div>
		<?php endwhile; // end of the loop. ?>
		
	</div><!-- .container -->
</section><!-- .home-page -->


	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
						
			$service_1 = get_field('service_1');
			$icon_1 = get_field('icon_1' );
			$description_1 = get_field('description_1');
			$service_2 = get_field('service_2');
			$icon_2 = get_field('icon_2' );
			$description_2 = get_field('description_2');
			$service_3 = get_field('service_3');
			$icon_3 = get_field('icon_3' );
			$description_3 = get_field('description_3');
			$service_4 = get_field('service_4');
			$icon_4 = get_field('icon_4' );
			$description_4 = get_field('description_4');
			$callout = get_field ('callout');
			$button = get_field ('button');
			$size = "full";
			
			?>
			
			<div class="services">
			<h4><?php the_title(); ?></h4>
			<p><?php the_content(); ?></p>
			</div>
			
			<section> 
			<div class="service-container">
				<div class="service-container-image-l"><?php echo wp_get_attachment_image( $icon_1, $size ); ?></div>
				<div class="service-container-desc-r">
					<h2><?php echo $service_1; ?></h2>
					<p><?php echo $description_1; ?></p></div>
			</div>
			</section>
	
			<section>
			<div class="service-container">
				<div class="service-container-image-r"><?php echo wp_get_attachment_image( $icon_2, $size ); ?></div>
				<div class="service-container-desc-l">
					<h2><?php echo $service_2; ?></h2>
					<p><?php echo $description_2; ?></p></div>
			</div>
			</section>
			
			<section> 
			<div class="service-container">
				<div class="service-container-image-l"><?php echo wp_get_attachment_image( $icon_3, $size ); ?></div>
				<div class="service-container-desc-r">
					<h2><?php echo $service_3; ?></h2>
					<p><?php echo $description_3; ?></p></div>
			</div>
			</section>
	
			<section>
			<div class="service-container">
				<div class="service-container-image-r"><?php echo wp_get_attachment_image( $icon_4, $size ); ?></div>
				<div class="service-container-desc-l">
					<h2><?php echo $service_4; ?></h2>
					<p><?php echo $description_4; ?></p></div>
			</div>
			</section>
			
			<?php endwhile; // end of the loop. ?>
			
			<section>
			<div class="callout">
				<div class="callout-text"><h2><?php echo $callout; ?></h2></div>
				<div class="callout-button"><?php echo $button; ?></div>
			</div>
			</section>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>