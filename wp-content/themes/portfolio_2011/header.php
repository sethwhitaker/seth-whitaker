<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?></title>	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="keywords" content="seth, whitaker, seth whitaker, web, developer, web developer, website, portfolio, html, css, javascript, php, resume, new york, freelance"/>
<meta name="description" content="Im a creative web developer who loves using HTML, CSS, Javascript and PHP to come up with	new and exciting sites for the web. I currently work as an Associate Web Developer at Magnani Caruso Dutton in New York City."
<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon32.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon32.ico" type="image/x-icon" />
<meta name="application-name" content="Seth-Whitaker.com" />
<meta name="msapplication-tooltip" content="I Design Things..." />
<meta name="msapplication-task" content="name=Web Portfolio; action-uri=http://seth-whitaker.com/portfolio; icon-uri=<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
<meta name="msapplication-task" content="name=Resume; action-uri=http://seth-whitaker.com/resume; icon-uri=<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
<meta name="msapplication-task" content="name=Blog; action-uri=http://blog.seth-whitaker.com; icon-uri=http://blog.seth-whitaker.com/media/favicon.ico" />
<meta name="msapplication-starturl" content="http://www.seth-whitaker.com/" />
<link href="<?php bloginfo( 'template_directory' ); ?>/css/styles.css" rel="stylesheet" type="text/css" media="screen"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.anythingslider.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/captify.tiny.js"></script>
<link href="<?php bloginfo( 'template_directory' ); ?>/css/anythingslider.css" rel="stylesheet" type="text/css" media="screen"/>
<!--[if IE 7]><link href="<?php bloginfo( 'template_directory' ); ?>/css/ie7.css" rel="stylesheet" type="text/css" media="screen"/><![endif]-->
<script type="text/javascript">
	
	var jsonArray;
	//normalized function for swapping banner content for all events
	function swapContent(change){
		$('#fade').css('display', 'none');
		$('#proj-title h2').html(jsonArray[change].title);
		$('#proj-description p').html(jsonArray[change].excerpt);
		$('#proj-tags').html(jsonArray[change].tags);
		$('#fade').fadeIn('slow');
	}
	
	$(document).ready(function(){
		jsonArray = <?php echo loop_json(); ?>; //json encoded array of content of banner images	
		// anything slider
		$('#slider').anythingSlider({      
			autoPlay: false,
			easing: 'swing',
			width:640,
			height:409,
			buildNavigation: false
		});
		
		$('.anythingSlider span.back').detach().prependTo('#image-rotator');
		$('.anythingSlider span.forward').detach().appendTo('#image-rotator');
		$('.anythingSlider .anythingControls').remove();
		
		var current = 0;
		var num = jsonArray.length-1;
		swapContent(current);
		
		$('#image-rotator span.back').click(function (){
			var current = parseInt($('#slider').data('AnythingSlider').currentPage)-1;		
			var change = current - 1;
			if(change < 0) {
				change = num;
				swapContent(change);
			}else{
				swapContent(change);
			}
		});
		//click events on next button for switching content
		$('#image-rotator span.forward').click(function (){	
			var current = parseInt($('#slider').data('AnythingSlider').currentPage)-1;
			var change = current + 1;
			if(change > num) {
				change = 0; 
				swapContent(change);
			}else{
				swapContent(change);
			}
		});	
		
		$('.portfolio-item a img').addClass('captify');
		$('.portfolio-item a img.captify').captify({
			// all of these options are... optional
			// ---
			// speed of the mouseover effect
			speedOver: 'fast',
			// speed of the mouseout effect
			speedOut: 'normal',
			// how long to delay the hiding of the caption after mouseout (ms)
			hideDelay: 100,	
			// 'fade', 'slide', 'always-on'
			animation: 'slide',		
			// text/html to be placed at the beginning of every caption
			prefix: '',		
			// opacity of the caption on mouse over
			opacity: '.95',					
			// the name of the CSS class to apply to the caption box
			className: 'caption-bottom',	
			// position of the caption (top or bottom)
			position: 'bottom',
			// caption span % of the image
			spanWidth: '97%'
		});
	}); 
</script>
<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19009535-1']);
	  _gaq.push(['_setDomainName', '.seth-whitaker.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
<?php 
	/*if($_POST['name']){ $name = $_POST['name'];}
	if($_POST['email']){ $email = $_POST['email'];}
	if($_POST['message']){ $message = $_POST['message'];}
	$to = 'sdw3489@gmail.com';
	$subject = 'Contact Form Message from'.$email;
	$headers = 'From:'.$email. "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();	
	$fullmessage = 'From '. $name. '-  ' .$message; 
	if($_POST['name'] && $_POST['email'] && $_POST['message']) {
		mail($to, $subject, $fullmessage, $headers);
		}*/
?>

		<div id="header">
			<div id="header-inner">
				<div id="header-left" class="floatLeft">
					<h1><a href="/"> &lt;/SETH WHITAKER&gt; </a></h1>
					<h2>WEB DEVELOPER</h2>
				</div>
				<div id="header-right" class="floatRight">
					
					<!-- NAV -->		
					<?php
						$mymenu = wp_nav_menu(array(
							'menu' => 'main',
							'container' => 'div', 				
							'container_id' => 'nav',
							'menu_class' => '', 
							'echo' => true
						));
					?>
					<!-- END NAV -->
					<!--<div id="nav">
						<ul>
							<li class="current-page"><a href="#">HOME</a></li>
							<li><a href="portfolio">PORTFOLIO</a></li>					
							<li><a href="resume">RESUME</a></li>
							<li><a href="http://blog.seth-whitaker.com">BLOG</a></li>
							
						</ul>
					</div>-->
				</div>
			</div>
		</div>	<!--END HEADER-->
		<div id="container">	