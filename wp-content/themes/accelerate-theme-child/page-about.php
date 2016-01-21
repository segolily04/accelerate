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
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

get_header(); ?>

<!-- Banner and image -->
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-content'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<!-- Featured services -->
<section>
	<div class="site-content featured-services">
		<center><h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for the.<br/>
				Here's a brief overiew of our offered services.</p>

			<?php query_posts('post_type=services');?>
				<?php while(have_posts()): the_post();
					$image_1 = get_field("service_image");
					$size = array(250, 250);
					$i++;
				?>
				<?php if($i % 2 == 0) {?>
				<div class="services">
					<ul class="homepage-featured-work">
					<li class="individual-services">
						<figure class="right">					
							<?php echo wp_get_attachment_image($image_1, $size);?>
						</figure>
					</li>
					<li class="individual-services">
						<div class="services-content">
							<h3><?php the_title();?></h3>
							<?php the_content();?>
						</div>
					</li>
				</ul>
				<?php } else {?>
				<div class="services">
				<ul class="homepage-featured-work">
					<li class="individual-services">
						<figure class="left">					
							<?php echo wp_get_attachment_image($image_1, $size);?>
						</figure>
					</li>
					<li class="individual-services">
						<div class="services-content">
							<h3><?php the_title();?></h3>
							<?php the_content();?>
						</div>
					</li>
				</ul>
				<?php } ?>	
				</div>	
				<?php endwhile;?>
			<?php wp_reset_query()?>
	</div>
	<div class="site-content">
		<ul class="homepage-featured-work">
			<li class="contact-align">
				<h3>Interested in working with us?</h3>
			</li>
			<li class="contact-align">
				<a class="button ctct-btn" href="<?php echo home_url(); ?>/blog">Contact Us</a>
			</li>
		</ul>
	</div>

</section>

<?php get_footer(); ?>