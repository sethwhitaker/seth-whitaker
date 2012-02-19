<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta name="keywords" content="seth, whitaker, seth whitaker, web, developer, web developer, website, portfolio, html, css, javascript, php, resume, new york, freelance"/>
	<meta name="description" content="Im a creative web developer who loves create new and exciting sites for the web. I currently work as an Associate Web Developer at Magnani Caruso Dutton in New York City.">
	<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon32.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon32.ico" type="image/x-icon" />
	
	<meta name="application-name" content="Seth-Whitaker.com" />
	<meta name="msapplication-tooltip" content="I Design Things..." />
	<meta name="msapplication-task" content="name=Web Portfolio; action-uri=http://seth-whitaker.com/portfolio; icon-uri=<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
	<meta name="msapplication-task" content="name=Resume; action-uri=http://seth-whitaker.com/resume; icon-uri=<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
	<meta name="msapplication-task" content="name=Blog; action-uri=http://blog.seth-whitaker.com; icon-uri=http://blog.seth-whitaker.com/media/favicon.ico" />
	<meta name="msapplication-starturl" content="http://www.seth-whitaker.com/" />

	<?php //roots_stylesheets(); ?>
	
	<!--<link rel="stylesheet" href="/css/reset.css"/>
	<link rel="stylesheet" href="/css/text.css"/>-->
	<link rel="stylesheet" href="/css/styles.css"/>
	
	<!--[if IE 7]><link href="<?php bloginfo( 'template_directory' ); ?>/css/ie7.css" rel="stylesheet" type="text/css" media="screen"/><![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/captify.tiny.js"></script>
	
	<?php wp_head(); ?>
	<?php roots_head(); ?>

	<script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	
	
	<script type="text/javascript">
			
		var jsonArray;
		function swapContent(isNext, zeroBasedSlideIndex, slideElement) {
			$('#fade').css('display', 'none');
			$('#proj-title h2').html(jsonArray[zeroBasedSlideIndex].title);
			$('#proj-description p').html(jsonArray[zeroBasedSlideIndex].excerpt);
			$('#proj-tags').html(jsonArray[zeroBasedSlideIndex].tags);
			$('#fade').fadeIn('fast');
		}
		function onBefore(curr, next, opts) {
			swapContent('',opts.nextSlide,'');
		}
		$(document).ready(function(){
			jsonArray = <?php echo loop_json(); ?>; //json encoded array of content of banner images
			$('#slider').cycle({
				width:640,
				height:409,
				next:'#next',
				prev:'#back',
				fx:'scrollHorz',
				timeout:7500,
				speed:725,
				before: onBefore
				
			});
			//load initial content
			swapContent('',0,'');
			
			$('.portfolio-item a img').addClass('captify');
			$('.portfolio-item a img.captify').captify({		
				speedOver: 'fast',	// speed of the mouseover effect			
				speedOut: 'normal',// speed of the mouseout effect			
				hideDelay: 100,	// how long to delay the hiding of the caption after mouseout (ms)			
				animation: 'slide',	// 'fade', 'slide', 'always-on'		
				prefix: '',	// text/html to be placed at the beginning of every caption		
				opacity: '.95',	// opacity of the caption on mouse over				
				className: 'caption-bottom',// the name of the CSS class to apply to the caption box			
				position: 'bottom',// position of the caption (top or bottom)			
				spanWidth: '97%' // caption span % of the image
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
				<div id="nav">
					<!-- NAV -->		
					<?php
						$mymenu = wp_nav_menu(array(
							'menu' => 'main',
							'menu_class' => '', 
							'echo' => true
						));
					?>
					<!-- END NAV -->
				</div>
			</div>
		</div>
	</div>	<!--END HEADER-->
	<div id="container">	