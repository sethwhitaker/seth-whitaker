<?php
/**
 * Template Name: Portfolio List Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="content">			
			<div id="portfolio-inner">
			
			<h1>Portfolio</h1>
				<?php
					$args = array( 
						'post_type' =>	array('portfolio'),
						'orderby' => 'date',
						'order' => 'desc'
					);	
					$the_query = new WP_Query($args);				
				?>	
			
					<?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="portfolio-item floatLeft">
							<a href="<?php the_permalink(); ?>"><?php echo get_custom_image('portfolio_thumb'); ?></a>
						</div>
					<?php endwhile; ?>
			</div>
		</div><!--END content-->	
<?php get_footer(); ?>
