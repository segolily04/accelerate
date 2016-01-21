<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="contact-main-form">
				<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>