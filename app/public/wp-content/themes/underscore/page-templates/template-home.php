<?php
/**
 * Template Name: Home
 * The template for displaying a custom home page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();
?>

	<?php if( get_field('header_image_1') ): ?>
		<style>
			.parallax1 { 
				background-image: url("<?php the_field('header_image_1'); ?>");

			}
			
		</style>
	<?php endif; ?>

	<div class="parallax1">

		<?php if( get_field('header_image_text_1') ): ?>
    		<div class="textcenter">
    			<?php the_field('header_image_text_1'); ?>
    		</div>
		<?php endif; ?>

	</div>	

	
	
	<?php if( get_field('middle_text_bg_image') ): ?>
		<style>
			.middle-text { 
				background-image: url("<?php the_field('middle_text_bg_image'); ?>");
			}

			
		</style>
	<?php endif; ?>

	<div class="middle-text">
		<?php if( get_field('middle_text') ): ?>
    		<?php the_field('middle_text'); ?>
		<?php endif; ?>
	</div>




	<?php if( get_field('header_image_2') ): ?>
		<style>
			.parallax2 { 
				background-image: url("<?php the_field('header_image_2'); ?>");
			}
			
		</style>
	<?php endif; ?>

	<div class="parallax2">

		<?php if( get_field('header_image_text_2') ): ?>
    		<br><br>
    		<h2><?php the_field('header_image_text_2'); ?></h2>
		<?php endif; ?>

	</div>	


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer( 'footer-home' );
