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
	</div>	<!--END CONTAINER-->	
		<div id="footer">
			<div id="footer-inner">
				<div id="greeting" class="floatLeft">
					<p>Hi, my name is Seth.<br/> 
					If you have a question or<br/>
					comment for me I'd love to<br/>
					hear from you.</p>
				</div>
				<div id="contact-form" class="floatLeft">
				<!--<?php //if (function_exists('serveCustomContactForm')) { serveCustomContactForm(1); } ?>-->
				
				
					<form action="" method="POST">
						<div class="text-input">
						<input type="text" name="name" value="" placeholder="Name">
						</div>
						<div class="text-input">
						<input type="text" name="email" value="" placeholder="Email">
						</div>
						<div class="text-area">
						<textarea name="message" placeholder="Message"></textarea>
						</div>
						<!--<input type="submit" value="Send">-->
						Form Under Construction
					</form>
				</div>

				<img class="floatLeft" src="<?php bloginfo('template_directory');?>/images/avatar.png" />
			</div>
		</div> <!--END FOOTER-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
