<?php
/**
 * The template for displaying the 404 error
 *
 * Contains a fun 404 error page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header()?>


<section>
	<div class="site-content">

		<div style="padding-right=0; margin-top:5%; margin-bottom:10%; float:left">
			<img src="404_error.jpg" alt="W3Schools.com" width=300px height=425px>
		</div>

		<div style="float:right;width=50%;">
			<h2 style="margin-left:5%;margin-top:5%;">Well, this is... Uhhhhhhhhh!</h2>
			<p  style="margin-left:5%;margin-bottom:5%;">We have no idea what happened!</p> 
			<ul class="homepage-featured-work">
			<li style="margin-left:2%;">
				Let's go back home and forget about this... embarrassing moment.
			</li>
			<li style="margin-left:2%;">
				<center><a class="button ctct-btn" href="<?php echo home_url(); ?>/blog">Get me out of here!</a></center>
			</li>
			</ul>
			<p  style="margin-left:5%;">If you can stomach another embarrassing moment, feel free to use the search bar.</p>
			<center><form class=".widget_search" style="margin-left:5%;"role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input style="margin:0;"type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="" />
				<input style="margin:0;"class="button ctct-btn" type="submit" id="searchsubmit" value="" />
			</form></center>
		</div>
	</div>
</section>

<?php get_footer(); ?>