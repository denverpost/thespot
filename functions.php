<?php

$request_array = explode('/', $_SERVER['REQUEST_URI']);
$blog_slug = $request_array[1];


switch ( $blog_slug )
{
	case "style":
		$related =array(
			'adccc1' => 'style_blog',
			'adccc2' => 'mile_high_style',
			'ad_tax' => 'dp_style' );
		break;
	case "thespot":
		$related = array(
			'adccc1' => 'blogs',
			'adccc2' => 'thespot_blog',
			'ad_tax' => 'dp_thespot' );
		break;
	case "crime":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'rap_sheet',
			'ad_tax' => 'dp_crime' );
		break;
	case "editorsdesk":
		$related = array(
			'adccc1' => 'misc_blogs',
			'adccc2' => 'editors_desk',
			'ad_tax' => 'dp_editorsdesk' );
		break;
	case "editors":
		$related = array(
			'adccc1' => 'misc_blogs',
			'adccc2' => 'editors_notes',
			'ad_tax' => 'dp_editors' );
		break;
	case "environment":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'environment',
			'ad_tax' => 'dp_environment' );
		break;
	case "food":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'food_blog',
			'ad_tax' => 'dp_food' );
		break;
	case "weather":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'colorado_forecast',
			'ad_tax' => 'dp_food' );
		break;
	case "thebalancesheet":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'the_balance_sheet',
			'ad_tax' => 'dp_thebalancesheet' );
		break;
	case "techknowbytes":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'techknow_bytes',
			'ad_tax' => 'dp_techknowbytes' );
		break;
	case "ostrow":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'ostrow',
			'ad_tax' => 'dp_ostrow' );
		break;
	case "personalinterest":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'personal_interest',
			'ad_tax' => 'dp_personalinterest' );
		break;
	case "work":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'human_workplace',
			'ad_tax' => 'dp_work' );
		break;
	case "fitness":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'colorado_fit',
			'ad_tax' => 'dp_fitness' );
		break;
	case "coloradoathome":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'colorado_at_home',
			'ad_tax' => 'dp_coloradoathome' );
		break;
	case "books":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'pages_books',
			'ad_tax' => 'dp_books' );
		break;
	case "stagescreen":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'stage_screen_between',
			'ad_tax' => 'dp_stagescreen' );
		break;
	case "opinion":
		$related = array(
			'adccc1' => 'oped_blogs',
			'adccc2' => 'the_idea_log',
			'ad_tax' => 'dp_opinion' );
		break;
	case "eletters":
		$related = array(
			'adccc1' => 'oped_blogs',
			'adccc2' => 'e_letters',
			'ad_tax' => 'dp_eletters' );
		break;
	case "hark":
		$related = array(
			'adccc1' => 'misc_blogs',
			'adccc2' => 'hark',
			'ad_tax' => 'dp_hark' );
		break;
	case "captured":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'captured',
			'ad_tax' => 'dp_captured' );
		break;
	case "coldcases":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'cold_cases',
			'ad_tax' => 'dp_coldcases' );
		break;
	case "coloradoclassroom":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'colorado_classroom',
			'ad_tax' => 'dp_coloradoclassroom' );
		break;
	case "health":
		$related = array(
			'adccc1' => 'news_blogs',
			'adccc2' => 'daily_dose',
			'ad_tax' => 'dp_health' );
		break;
	case "colleges":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'field_house',
			'ad_tax' => 'dp_colleges' );
		break;
	case "sportscategoryoutdoor-extremes":
		$related = array(
			'adccc1' => 'outdoor_blogs',
			'adccc2' => 'outdoor_extremes',
			'ad_tax' => 'dp_sportscategoryoutdoor-extremes' );
		break;
	case "avs":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_avs',
			'ad_tax' => 'dp_avs' );
		break;
	case "broncos":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_broncos',
			'ad_tax' => 'dp_broncos' );
		break;
	case "preps":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_co_preps',
			'ad_tax' => 'dp_preps' );
		break;
	case "sports":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_co_sports',
			'ad_tax' => 'dp_sports' );
		break;
	case "olympics":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_olympics',
			'ad_tax' => 'dp_olympics' );
		break;
	case "nuggets":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_nuggets',
			'ad_tax' => 'dp_nuggets' );
		break;
	case "rockies":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'all_things_rockies',
			'ad_tax' => 'dp_rockies' );
		break;
	case "ridetherockies":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'ride_the_rockies',
			'ad_tax' => 'dp_ridetherockies' );
		break;
	case "library":
		$related = array(
			'adccc1' => 'local_blogs',
			'adccc2' => 'the_archive',
			'ad_tax' => 'dp_library' );
		break;
	case "nerd":
		$related = array(
			'adccc1' => 'local_blogs',
			'adccc2' => 'shiny_objects',
			'ad_tax' => 'dp_nerd' );
		break;
	case "rapids":
		$related = array(
			'adccc1' => 'sports_blogs',
			'adccc2' => 'the_terrace',
			'ad_tax' => 'dp_rapids' );
		break;
	case "beer":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'beer_blog',
			'ad_tax' => 'dp_beer' );
		break;
	case "videogames":
		$related = array(
			'adccc1' => 'ent_blogs',
			'adccc2' => 'game_on',
			'ad_tax' => 'dp_gameon' );
		break;
}

// Special case:
if ( $request_array[3] == 'outdoor-extremes' )
{
	$related = array(
		'adccc1' => 'outdoor_blogs',
		'adccc2' => 'outdoor_extremes',
		'ad_tax' => 'dp_extremes' );
}


// widgetize sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'leftsidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="categorytopper">',
		'after_title' => '</div>',
	));
}
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'rightsidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="categorytopper">',
		'after_title' => '</div>',
	));
}

// allows YouTube, Vimeo embeds
$allowedposttags["iframe"] = array(
	"src" => array(),
	"height" => array(),
	"width" => array()
);

$allowedposttags["object"] = array(
	"height" => array(),
	"width" => array()
);
 
$allowedposttags["param"] = array(
	"name" => array(),
	"value" => array()
);
 
$allowedposttags["embed"] = array(
	"src" => array(),
	"type" => array(),
	"allowfullscreen" => array(),
	"allowscriptaccess" => array(),
	"height" => array(),
	"width" => array()
);

add_theme_support('post-thumbnails');

function mytheme_setup() {
	// Set default values for the upload media box
	update_option('image_default_align', 'none' );
	update_option('image_default_link_type', 'none' );
}
add_action('after_setup_theme', 'mytheme_setup');

// make changeable header
function theSpot_header_style() {
	$returnstringy = '<style type="text/css">
					  #headimg {
					  	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
					  	width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
					  }
					  #headimg h1, #headimg #desc {
					  	display: none;
					  }
					  </style>';
	echo $returnstringy;
}

add_theme_support( 'custom-header', array(
	'default-image'				=> get_template_directory_uri() . '/images/white_tile.png',
	'header-text'				=> false,
	'default-text-color'		=> '000',
	'width'						=> 495,
	'height'					=> 78,
	'random-default'			=> false,
	'wp-head-callback'			=> 'theSpot_header_style',
	'admin-head-callback'		=> '',
	'admin-preview-callback'	=> ''
) );

// Attempts to permanently disable the Visual Editor for all users, all the time.
add_filter( 'user_can_richedit', '__return_false', 50 );

// Hide the Wordpress admin bar for everyone
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'my_function_admin_bar' );

// Disable those annoying pingbacks from our own posts
function disable_self_trackback( &$links ) {
  foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'disable_self_trackback' );

// remove Jetpack OpenGraph tags and Twitter Cards
add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );
add_filter( 'jetpack_disable_twitter_cards', '__return_true', 99 );

// allow script tags in editor
function allow_script_tags( $allowedposttags ){
  $allowedposttags['script'] = array(
      'src' => true,
      'height' => true,
      'width' => true,
    );
  return $allowedposttags;
}
add_filter('wp_kses_allowed_html','allow_script_tags', 1);

?>