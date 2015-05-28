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
		$twitter_thumb = 'http://local.denverpost.com/common/dfm/assets/logos/small/denverpost.png';
	}
	$temp_post = get_post($post->ID);
    $twitter_user_id = $temp_post->post_author;
?>
<meta name="twitter:card" value="summary" />
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
<!--
function switchMenu(obj) {var el = document.getElementById(obj); if ( el.style.display != "none" ) {el.style.display = 'none';} else {el.style.display = '';}}
function pointercursor(){document.body.style.cursor = "move";}
function unpointercursor(){document.body.style.cursor="";}
//-->
</script>

<div id="omniture" style="display:none;">
    <script language="JavaScript" type="text/javascript">
        var s_account = "denverpost";

        //The Spot tracking algorithm
        <?php if ( is_home() ) { 
        ?>var isHome = true; //testing wp functions <?php
        } else { ?>var isHome = false; //testing wp functions <?php } 
        ?>
    
        <?php if ( is_category() ) { 
      ?>var isCategory = true; //testing wp functions <?php
      } else { ?>var isCategory = false; //testing wp functions <?php } 
      ?>
    
        <?php if ( is_singular() ) { 
      ?>var isSingle = true; //testing wp functions <?php
      } else { ?>var isSingle = false; //testing wp functions <?php } 
      ?>
        
        <?php if ( is_page() ) { 
      ?>var isPage = true; //testing wp functions <?php
      } else { ?>var isPage = false; //testing wp functions <?php } 
      ?>
    
        var singleCategory = "<?php single_cat_title(); ?>"; //article site section
        var pgTitle = "<?php the_title(); ?>"; //testing wp functions
        var oChnm = "Blogs";
        var oRtnm = "Blogs / <?php bloginfo('name'); ?>";
        var Pgnm = "";
        var oSp2nm = ""; //Prop2
        var oSp3nm = ""; //Prop3
        var oSp4nm = ""; //Prop4
        var oSp5nm = ""; //Prop5
        if (isHome) {
            oSp2nm = "Blogs / <?php bloginfo('name'); ?> Home"; //is The Spot home
            Pgnm = "Blogs / <?php bloginfo('name'); ?> Home";
        } else {
            if (isCategory) {
                if (singleCategory) {
                    Pgnm = "Blogs / <?php bloginfo('name'); ?> " + singleCategory; //section name available
                    oSp2nm = singleCategory;
                } else {
                    Pgnm = "Blogs / <?php bloginfo('name'); ?> cat undefined"; //cannot be defined
                    oSp2nm = "cat undefined";
                }
            } else {
                if (isSingle) {
                    if (isPage) {
                        Pgnm = "Blogs / <?php bloginfo('name'); ?> " + pgTitle; //is a static page
                        oSp2nm = pgTitle;
                    } else {
                        Pgnm = "Blogs / <?php bloginfo('name'); ?> Post: " + pgTitle; //is a post
                        oSp2nm = "Posts";
                        oSp5nm = pgTitle;
                    }
                }
            }
            if (singleCategory) {
            	if (!isCategory) {
            		    Pgnm = "Blogs / <?php bloginfo('name'); ?> Topics: " + singleCategory;
                    oSp2nm = "Topics";
                    oSp3nm = singleCategory;
            	}
            }
        }
        if (oSp2nm == '') {
            oSp2nm = "?";
        }
        if (oSp3nm == '') {
            oSp3nm = "?";
        }
        if (oSp5nm == '') {
            oSp5nm = "?";
        }
        if (Pgnm == '') {
            Pgnm = "d=g";
        }
        var oBrdcm2 = oChnm + "/" + oRtnm; //Prop2
        var oBrdcm3 = oChnm + "/" + oRtnm + "/" + oSp2nm; //Prop3
        var oBrdcm4 = oChnm + "/" + oRtnm + "/" + oSp2nm + "/" + oSp3nm; //Prop4
        var oBrdcm5 = oChnm + "/" + oRtnm + "/" + oSp2nm + "/" + oSp3nm + "/" + oSp5nm; //Prop5
    </script>
    <!-- SiteCatalyst code version: H.17. Copyright 1997-2005 Omniture, Inc. More info available at http://www.omniture.com -->
    <script language="JavaScript" type ="text/javascript" src="http://extras.mnginteractive.com/live/js/omniture/SiteCatalystCode_H_17.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://extras.mnginteractive.com/live/js/omniture/OmnitureHelper.js"></script>
    <script language="JavaScript" type="text/javascript">
        s.pageName = Pgnm;
        s.channel = oChnm;
        s.prop1 = "D=g";
        s.prop2 = oBrdcm2;
        s.prop3 = oBrdcm3;
        s.prop4 = oBrdcm4;
        s.prop5 = oBrdcm5;
        s.prop9 = getCiQueryString("SOURCE");
        s.eVar2 = getCiQueryString("SOURCE");
        s.campaign = getCiQueryString("EADID") + getCiQueryString("CREF");
        s.events = "event1";
        s.eVar4 = s.pageName;
        /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
        var s_code = s.t(); if (s_code) { document.write(s_code); }
    </script>
    <script language="JavaScript" type="text/javascript">
        if (navigator.appVersion.indexOf('MSIE') >= 0) { document.write(unescape('%3C') + '\!-' + '-'); }
    </script>
    <noscript>
        <img src="http://denverpost.112.2O7.net/b/ss/denverpost/1/H.17--NS/0" height="1" width="1" border="0" alt="" />
    </noscript>
    <!-- End SiteCatalyst code version: H.17. -->
</div>

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
