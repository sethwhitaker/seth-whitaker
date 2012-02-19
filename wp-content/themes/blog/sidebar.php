<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="side-bar">

		<img src="media/character.png" alt="character" width="260" height="473"/>
		<span style="display:block; text-align:center; width:260px; margin-top:50px;">
			<a  href="http://www.twitter.com/sdw3489">
				<img  src="http://twitter-badges.s3.amazonaws.com/follow_me-a.png" alt="Follow sdw3489 on Twitter"/>
			</a>
			<a href="http://www.facebook.com/seth.whitaker"><img src="media/facebookAdd.jpg" alt="Add Me on Facebook" width="160" border="0"/></a>
			<a href="project2.rss"><img src="media/rss_button.jpg" alt="Subcribe To My RSS" width="160" border="0"/></a>
		</span>	
	</div> <!-- END side-bar -->


		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<?php endif; // end primary widget area ?>
		

<?php
