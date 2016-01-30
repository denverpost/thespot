<?php if ( !isset($tag_label) ) $tag_label = ''; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:fb="http://ogp.me/ns/fb#">
<head profile="http://gmpg.org/xfn/11">

<link rel="shortcut icon" href="http://extras.mnginteractive.com/live/media/favicon/dpo/favicon.ico" type="image/x-icon" />

<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- <meta http-equiv="refresh" content="600"> -->
<meta name="google-site-verification" content="2bKNvyyGh6DUlOvH1PYsmKN4KRlb-0ZI7TvFtuKLeAc" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en, sv" />
<meta name="Copyright" content="Copyright &copy; The Denver Post." />
<meta name="news_keywords" content="<?php
$posttags = get_the_tags();
    foreach((array)$posttags as $tag) {
        $show_tags .= $tag->name . ',';
    }{
$rel_art .= rtrim($show_tags , ',');{
}
print $rel_art;
}
?>" />

<?php
//Twitter Cards
if(is_single() || is_page()) {
	$twitter_url    = get_permalink();
	$twitter_desc   = htmlentities(get_the_excerpt());
	$twitter_title  = get_the_title();
	$twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
    $twitter_thumb  = $twitter_thumbs[0];
	if(!$twitter_thumb) {
		$twitter_thumb = 'http://local.denverpost.com/common/dfm/assets/logos/small/denverpost.png?v=21060130';
	}
	$temp_post = get_post($post->ID);
    $twitter_user_id = $temp_post->post_author;
?>
<meta name="twitter:card" value="summary_large_image" />
<meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
<meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
<meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
<meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
<meta name="twitter:site" value="@denverpost" />
<meta name="twitter:domain" value="blogs.denverpost.com" />
<meta name="twitter:creator" content="@<?php the_author_meta("jabber",$twitter_user_id); ?>">
<?
}
?>
<meta name="twitter:app:name:iphone" value="Denver Post">
<meta name="twitter:app:name:ipad" value="Denver Post">
<meta name="twitter:app:name:googleplay" value="The Denver Post">
<meta name="twitter:app:id:iphone" value="id375264133">
<meta name="twitter:app:id:ipad" value="id409389010">
<meta name="twitter:app:id:googleplay" value="com.ap.denverpost" />

<meta property="fb:app_id" content="105517551922"/>
<meta property="og:title" content="<?php if ( is_single() ) { wp_title(); } else { bloginfo('name'); } ?>" />
<meta property="og:type" content="blog" />
<meta property="og:url" content="<?php echo get_permalink() ?>" />
<meta property="og:image" content="<?php echo $twitter_thumb; ?>" />
<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
<meta property="og:description" content="<?php echo $twitter_desc; ?>" />
<meta property="article:publisher" content="https://www.facebook.com/denverpost" />
<!--<meta property="article:author" content="" />-->

<title><?php wp_title(''); ?></title>

<!--test2 -->
<script type="text/javascript">
//Chartbeat startup
var _sf_startpt=(new Date()).getTime();
var _sf_async_config={};

// FRAMEBREAKER
if (top !== self) 
 {
 	// We want to track when this happens, which we do with a custom
 	// ?source=framebuster query added to the URL.
 	// The challenge is, often there's already a ?source=rss on the URL,
 	// which means we have to handle that too.
 	var denverposturl = self.document.location.toString();
 	var referrer = document.referrer.split('/')[2];
 	if ( denverposturl.indexOf("blogs.denverpost.com") > 0 && referrer.indexOf("denverpost.com") < 0 )
	{
		if ( referrer.indexOf("google") < 0 && referrer.indexOf("images.") < 0  && referrer.indexOf("ow.ly") < 0  && referrer.indexOf("digg") < 0  && referrer.indexOf("reddit") < 0 && referrer.indexOf("stumbleupon") < 0  )
	 	{
	 		top.location.replace(self.location);
	 		var sourcetag = "skipframe-" + referrer;
			//var sourcetag = "skipframe";
	 	 	if ( denverposturl.indexOf("?source") > 0 || denverposturl.indexOf("&source") > 0  )
	 	 	{
	 	 		top.location.replace(denverposturl + sourcetag);
	 	 	}
	 	 	else if  ( denverposturl.indexOf("?") == -1 )
	 	 	{
	 	 		top.location.replace(denverposturl + "?source=" + sourcetag);
	 	 	}
	 	 	else
	 	 	{
	 	 		top.location.replace(denverposturl + sourcetag);
	 	 	}
	 	}
	}
 }

</script>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Web Feed: RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> Web Feed: RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Web Feed: Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<script type="text/javascript" src="http://extras.mnginteractive.com/live/js/otherinc/otherinc.js"></script>
<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://extras.denverpost.com/media/js/blogstheme/jquery-ui-personalized-1.5.2.packed.js"></script>
<script type="text/javascript" async src="http://launch.newsinc.com/js/embed.js" id="_nw2e-js"></script>
<script type="text/javascript" src="//www.googletagservices.com/tag/js/gpt.js"></script>

<?php if (!is_singular() ) { ?>
	<script type="text/javascript" src="http://extras.denverpost.com/media/js/metaRefresh.js"></script>
<?php } ?>

</head>
<body>

<script type="text/javascript">
function switchMenu(obj) {var el = document.getElementById(obj); if ( el.style.display != "none" ) {el.style.display = 'none';} else {el.style.display = '';}}
function pointercursor(){document.body.style.cursor = "move";}
function unpointercursor(){document.body.style.cursor="";}

    var is_mobile = function() {
      var check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
      if ( check == true ) return 1;
      return 0;
    };
</script>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '105517551922', // App ID from the App Dashboard
      channelUrl : '//blogs.denverpost.com/httpdocs/wp-content/themes/TheSpot/channel.html', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });

    // Additional initialization code such as adding Event Listeners goes here

  };
  
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=105517551922";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

  // Load the SDK's source Asynchronously
  // Note that the debug version is being actively developed and might 
  // contain some type checks that are overly strict. 
  // Please report such bugs using the bugs tool.
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, /*debug*/ false));
</script>

<div id="top_leaderboard_wrap">
	<div id='dp_blog_leaderboard' style="margin:10px auto;width:728px;">
		<script type='text/javascript'>
			if ( document.getElementById('top_leaderboard_wrap').offsetWidth >= 728 ) {
				googletag.defineSlot('/8013/denverpost.com', [[728,90]], 'dp_blog_leaderboard').setTargeting('blog', '<?php echo $related['ad_tax']; ?>').addService(googletag.pubads());
				googletag.pubads().enableSyncRendering();
				googletag.enableServices();
				googletag.display('dp_blog_leaderboard');
			}
		</script>
	</div>
</div>

<div style="height:126px;margin-top:10px;" id="dfmHeader"><!--Header Goes Here--></div>

<div id="wrapper">
