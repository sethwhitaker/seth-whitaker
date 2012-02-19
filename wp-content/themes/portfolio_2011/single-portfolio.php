<?php
/**
 * 
 * Sample template for displaying single portfolio posts.
 * Save this file as as single-portfolio.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>
	<div id="content">
		<div id="portfolio-single-inner">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
				<h1><?php echo the_title(); ?></h1>
				<div id="portfolio-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div><!--END content-->	
<?php get_footer(); ?>