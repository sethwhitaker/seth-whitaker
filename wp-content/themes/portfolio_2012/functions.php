<?phprequire_once get_template_directory() . '/inc/roots-activation.php'; 	// activationrequire_once get_template_directory() . '/inc/roots-options.php'; 		// theme optionsrequire_once get_template_directory() . '/inc/roots-cleanup.php'; 		// cleanuprequire_once get_template_directory() . '/inc/roots-htaccess.php'; 		// rewrites for assets, h5bp htaccessrequire_once get_template_directory() . '/inc/roots-hooks.php'; 		// hooksrequire_once get_template_directory() . '/inc/roots-actions.php'; 		// actionsrequire_once get_template_directory() . '/inc/roots-widgets.php'; 		// widgetsrequire_once get_template_directory() . '/inc/roots-custom.php'; 		// custom functions$roots_options = roots_get_theme_options();// set the maximum 'Large' image width to the maximum grid widthif (!isset($content_width)) {	global $roots_options;	$roots_css_framework = $roots_options['css_framework'];	switch ($roots_css_framework) {	    case 'blueprint': 	$content_width = 950;	break;	    case '960gs_12': 	$content_width = 940;	break;	    case '960gs_16': 	$content_width = 940;	break;	    case '960gs_24': 	$content_width = 940;	break;	    case '1140': 		$content_width = 1140;	break;	    case 'adapt':	 	$content_width = 940;	break;	    	    default: 			$content_width = 480;	break;	}}function roots_setup() {	load_theme_textdomain('roots', get_template_directory() . '/lang');		// tell the TinyMCE editor to use editor-style.css	// if you have issues with getting the editor to show your changes then use the following line:	// add_editor_style('editor-style.css?' . time());	add_editor_style('editor-style.css');		// http://codex.wordpress.org/Post_Thumbnails	add_theme_support('post-thumbnails');	// set_post_thumbnail_size(150, 150, false);		// http://codex.wordpress.org/Post_Formats	// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));		// http://codex.wordpress.org/Function_Reference/add_custom_image_header	if (!defined('HEADER_TEXTCOLOR')) { define('HEADER_TEXTCOLOR', '');	}	if (!defined('NO_HEADER_TEXT')) { define('NO_HEADER_TEXT', true); }		if (!defined('HEADER_IMAGE')) { define('HEADER_IMAGE', get_template_directory_uri() . '/img/logo.png'); }	if (!defined('HEADER_IMAGE_WIDTH')) { define('HEADER_IMAGE_WIDTH', 300); }	if (!defined('HEADER_IMAGE_HEIGHT')) { define('HEADER_IMAGE_HEIGHT', 75); }	function roots_custom_image_header_site() { }	function roots_custom_image_header_admin() { ?>		<style type="text/css">			.appearance_page_custom-header #headimg { min-height: 0; }		</style>	<?php }	add_custom_image_header('roots_custom_image_header_site', 'roots_custom_image_header_admin');			add_theme_support('menus');	register_nav_menus(array(		'primary_navigation' => __('Primary Navigation', 'roots'),		'utility_navigation' => __('Utility Navigation', 'roots')	));	}add_action('after_setup_theme', 'roots_setup');// create widget areas: sidebar, footer$sidebars = array('Sidebar', 'Footer');foreach ($sidebars as $sidebar) {	register_sidebar(array('name'=> $sidebar,		'before_widget' => '<article id="%1$s" class="widget %2$s"><div class="container">',		'after_widget' => '</div></article>',		'before_title' => '<h3>',		'after_title' => '</h3>'	));}/** * Returns a "Continue Reading" link for excerpts * @since Twenty Ten 1.0 * @return string "Continue Reading" link */function twentyten_continue_reading_link() {	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';}/** * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyten_continue_reading_link(); * To override this in a child theme, remove the filter and add your own * function tied to the excerpt_more filter hook. * @since Twenty Ten 1.0 * @return string An ellipsis */function twentyten_auto_excerpt_more( $more ) {	return ' &hellip;' . twentyten_continue_reading_link();}add_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );/** * Adds a pretty "Continue Reading" link to custom post excerpts. * To override this link in a child theme, remove the filter and add your own * function tied to the get_the_excerpt filter hook. * * @since Twenty Ten 1.0 * @return string Excerpt with a pretty "Continue Reading" link */function twentyten_custom_excerpt_more( $output ) {	if ( has_excerpt() && ! is_attachment() ) {		$output .= twentyten_continue_reading_link();	}	return $output;}add_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );
function loop_json() {
	$args = array( 
		'post_type' =>	array('portfolio'),
		'meta_query' => array( 
			array(
				'key' => 'portfolio_home',
				'value' => '1'
			)		),
		'orderby' => 'date',
		'order' => 'desc'		);	
	$the_query = new WP_Query($args);
	$array = array();
	$i = 0;
	if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); 
		$array[$i] = array();
		$array[$i]['title'] = get_the_title();
		$array[$i]['excerpt'] = get_the_excerpt();
		$array[$i]['permalink'] = get_permalink();
		$array[$i]['tags'] = get_the_tag_list( '<span>', '</span><span>', '</span>' );	
		$i++;
	endwhile; 
	/*foreach ($the_query->posts as $post) {
		$array[$i] = array();
		$array[$i]['title'] = $post->post_title;	
		$array[$i]['excerpt'] = $post->post_excerpt;
		$array[$i]['permalink'] = $post->post_name;
		$array[$i]['category'] = $post->post_type;				
		$i++;
	}*/
	return json_encode($array);
	die();
}
function word_limiter($text,$limit=20){
    $explode = explode(' ',$text);
    $string  = '';
    $dots = '...';
    if(count($explode) <= $limit){
        $dots = '';
    }
    for($i=0;$i<$limit;$i++){
        $string .= $explode[$i]." ";
    }
    return $string.$dots;
}
