<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div> <!-- END Content -->
</div> <!-- END Container -->
	<div id="footer">
	<hr/>
	<p>&copy; <a href="http://seth-whitaker.com">Seth Whitaker</a> 2010 | 
	Your OS is Windows and Your Browser is Firefox | 
	<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fpeople.rit.edu%2Fsdw1026%2Fpfw%2Fproject2%2Findex.php;ss=1;outline=1">HTML 5 Validation</a> |
	<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;height:14px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" /></a> |
	<a href="http://validator.w3.org/feed/check.cgi?url=http%3A//people.rit.edu/%7Esdw1026/pfw/project2/project2.rss"><img src="media/valid-rss.png" style="border:0;height:14px" alt="[Valid RSS]" title="Validate my RSS feed" /></a> |
	<a href="http://people.rit.edu/sdw1026/pfw/project2/project2.rss"><img src='media/rss-icon.png' style="border:0;width:14px;height:14px" alt='rss icon'/></a> |
	<a href="http://www.twitter.com/sdw3489"><img style="border:0;height:14px" src="http://twitter-badges.s3.amazonaws.com/t_mini-a.png" alt="Follow sdw3489 on Twitter"/></a> |
	<a href="http://www.facebook.com/seth.whitaker"><img style="border:0;height:14px" src="media/fb_icon.jpg" alt="Add Me on Facebook"/></a>

	</p>
	</div></div> <!-- END Container-bg-div -->
			

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
