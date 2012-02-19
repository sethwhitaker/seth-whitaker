<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="content">			
			<div id="portfolio-inner">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

					<?php
					$tag = single_tag_title( '', false );
					$args = array( 
						'post_type' =>	array('portfolio'),
						'orderby' => 'date',
						'order' => 'desc',
						'tag' => $tag
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
