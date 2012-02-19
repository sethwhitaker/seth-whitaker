<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	
		<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 //get_template_part( 'loop', 'index' );
		?>

		<div id="content">
			<div id="image-rotator">
				
				<div class="floatLeft" id="project">
					<div id="slider">
						<ul>
							<li><img src="<?php bloginfo('template_directory');?>/images/project.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project2.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project3.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project4.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project5.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project6.png"/></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/project7.png"/></li>					
						</ul>
					</div>
				</div>
				<div id="proj-info">
					<div id="proj-title">
						<h2>AUGMENTED<br/>
						REPAIR<br/>
						CENTER</h2>
					</div>
					<div id="proj-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Donec laoreet blandit risus eu tempor. In non turpis nisi,
						ac malesuada lectus.</p>
					</div>
					<div id="proj-tags">
						<span>Actionscript 3</span> 
						<span>Away3D</span>
						<span>Wordpress</span>						
					</div>
				</div>
				
			</div>
			
			<div id="personal-info">
				<div class="home-col floatLeft">
					<h2>WHO I AM</h2>
					<p>My name's Seth and I'm a 21 year old guy from upstate New York.
						I love all things sports related and anything to do with the Web. </p>
				</div>
				<div class="home-col floatLeft">
					<h2>WHAT I DO</h2>
					<p>Im a creative web developer who loves using HTML, CSS, Javascript and
					PHP to come up with	new and exciting sites for the web. I currently work as a Web Developer
					at Intellisites in Albany NY.</p>
				</div>
				<div class="home-col floatLeft">
					<h2>WHY I DO IT</h2>
					<p>I love the web and everything about it. I love pushing myself to learn more and program 
					better each and every day at work.</p>
				</div>
			</div>			
		</div><!--END content-->
<?php get_footer(); ?>
