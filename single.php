<?php include( 'header.php'); ?>

<div id="content">

    <div id="customheader">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php header_image() ?>" alt="Header" title="Header" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" /></a>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post">
        <div class="thedate"><a href="<?php bloginfo('url'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>"><?php the_time( 'F j, Y'); ?></a><?php the_time( ', g:i a'); ?> <?php edit_post_link( '(Edit)', '', ''); ?></div>

        <h1><?php the_title(); ?></h1>

        <div id="post-<?php the_ID(); ?>"></div>

        <div id="sidebar">

            <div class="authortopper">
                <div class="theauthor">
                    <span class="postauthor">By <?php coauthors_posts_links(); ?></span>
                </div>
                <div class="bytitle">
                    <?php the_author_meta( 'nickname'); ?>
                </div>
                <?php if (the_author_image_url() ) the_author_image(); ?>
            </div>


            <div class="feedback">
                <div class="sidebarcomments">
                    <a href="<?php comments_link(); ?>">
                        <?php comments_number( 'Add a comment', 'Comments (1)', 'Comments (%)'); ?>
                    </a>
                </div>
                <div class="articletools smslink">
                    <a href="javascript:void(0);">SMS</a>
                </div>
                <div class="articletools">
                    <?php if(function_exists( 'wp_print')) { print_link(); } ?>
                </div>
                <div class="articletools">
                    <?php if(function_exists( 'wp_email')) { email_link(); } ?>
                </div>
                <div class="articletools">
                    <div class="fb-share-button" data-href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                </div>
                <div class="articletools">
                    <g:plusone size="medium" href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>"></g:plusone>
                    <script type="text/javascript">
                        (function () {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>
                </div>
                <div class="articletools">
			<a href="http://twitter.com/share?url=<?php echo wp_get_shortlink(); //wpbitly shortcode ?>&via=<?php the_author_meta("jabber",$twitter_user_id); ?>&related=monserud,denverpost&counturl="<?php get_the_permalink(); ?>"" class="twitter-share-button">Tweet</a>
                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </div>
            </div>
            <?php $posttags=get_the_tags(); if ($posttags) { ?>
            <div class="relatedtopicstopper">
                Topics
            </div>
            <div class="relatedtopics">
                <?php the_tags( '', ', ', ''); ?>
            </div>

            <?php } ?>
            <div class="clear"></div>

        </div>

        <div class="storycontent">

            <div class="ndn_embed" id="ndn-video-player-1" data-config-distributor-id="90115" style="width:100%;" data-config-height="9/16w"></div>
            
            <?php the_content(__( 'Read more')); ?>

            <div class="ndn_embed" id="ndn-video-player-2" data-config-distributor-id="90115" style="width:100%;" data-config-height="9/16w"></div>


            <?php $request_array = explode('/', $_SERVER['REQUEST_URI']);
                $blog_slug = $request_array[1];
                if ( $blog_slug == 'broncos' || $blog_slug == 'rockies' || $blog_slug == 'nuggets' || $blog_slug == 'sports' || $blog_slug == 'avs' || $blog_slug == 'rapids' || $blog_slug == 'preps' || $blog_slug == 'colleges' || $blog_slug == 'olympics' ) { ?>
                <div id="mb_container">
                    <script type="text/javascript">
                        (function(){
                            var sc = document.createElement('script');
                            sc.src = 'http://player.mediabong.net/se/61.js?url='+encodeURIComponent(document.location.href);
                            sc.type = 'text/javascript';
                            sc.async = true;
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
                        })();
                    </script>
                </div>
            <?php } ?>
            <?php wp_link_pages( 'before=<div class="pagelinks">&after=</div>&next_or_number=next&nextpagelink=Next&previouspagelink=Previous'); ?>
            <?php wp_link_pages( 'before=<div class="pagelinksnumbers">Page:&after=</div>'); ?>
        </div>

        <div class="postmeta">
            <ul class="articletools">
                <li class="comments">
                    <?php comments_popup_link(( 'Add a comment'), ( 'Comments (1)'), ( 'Comments (%)')); ?>
                </li>
                <li class="smslink"><a href="javascript:void(0);">SMS</a></li>
                    <script>
                    function customEmailMessageEncoder(str) {
                        return encodeURIComponent(str).replace(/[!'()]/g, escape).replace(/\*/g, "%2A").replace(/%20%0A%20%0A/g, "%20%0A%0D");
                    }
                    jQuery('.smslink').on('click', function() {
                        // sms link does not work on iOS 7
                        var ua = navigator.userAgent.toLowerCase();
                        var iOSVersion = [];
                        if (/iP(hone|od|ad)/.test(navigator.platform)) {
                            var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
                            iOSVersion = [parseInt(v[1], 10), parseInt(v[2], 10), parseInt(v[3] || 0, 10)];
                        }
                        var protocol = 'sms:';
                        if ( iOSVersion.length > 0 && iOSVersion[0] > 7 ) {
                            protocol += '&';
                        } else {
                            protocol += (ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1) ? ';' : '?';
                        }
                        protocol += 'body=';
                        var title = '<?php the_title(); ?>';
                        var link = '<?php wp_get_shortlink(); ?>';
                        var message = protocol + customEmailMessageEncoder(title) + '%0A%0D' + customEmailMessageEncoder(link);
                        window.open(message , '_self');
                    });
                    </script>
                <li>
                    <?php if(function_exists( 'wp_print')) { print_link(); } ?>
                </li>
                <li>
                    <?php if(function_exists( 'wp_email')) { email_link(); } ?>
                </li>
                <li>
                    <div class="fb-share-button" data-href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                </li>
                <li>
                    <g:plusone size="medium" href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>"></g:plusone>
                    <script type="text/javascript">
                        (function () {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>
                </li>
                <li style="padding: 0px!important;">
			<a href="http://twitter.com/share?url=<?php echo wp_get_shortlink(); //wpbitly shortcode ?>&via=<?php the_author_meta("jabber",$twitter_user_id); ?>&related=monserud,denverpost" data-counturl="<?php get_the_permalink(); ?>" class="twitter-share-button">Tweet</a>
<!--
<a href="http://twitter.com/share?url=<?php echo wp_get_shortlink(); //wpbitly shortcode ?>" class="twitter-share-button" data-count="horizontal" data-via="denverpost">Tweet</a>
-->
                    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </li>
                <div class="clear"></div>
            </ul>
            <div class="articletools">
                <strong>Categories:</strong> 
                <?php the_category( ', '); ?>
            </div>
        </div>

        <div class="postnav_single">
            <div class="right">
                <div class="postnavtitle_right">Next Post &raquo;</div>
                <div style="margin-right: 9px;">
                    <?php next_post_link( '%link'); ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="left">
                <div class="postnavtitle_left">&laquo; Previous Post</div>
                <div style="margin-left: 9px;">
                    <?php previous_post_link( '%link'); ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <!-- Closes the post div-->

    <div align="center" id="dp_blog_cube_wrap_two" style="margin:10px 0;">
        <div id='dp_blog_cube_two'>
            <script type='text/javascript'>
                if ( document.getElementById('dp_blog_cube_wrap_two').offsetWidth <= 480 ) {
                    googletag.defineSlot('/8013/denverpost.com', [[300,250]], 'dp_blog_cube').setTargeting('blog', '<?php echo $related['ad_tax']; ?>').addService(googletag.pubads());
                    googletag.pubads().enableSyncRendering();
                    googletag.enableServices();
                    googletag.display('dp_blog_cube_two');
                }
            </script>
        </div>
    </div>


<div id="dpArticleBottom">
    <div id="dpArticleTabs">
        <ul>
            <li id="dpArticleRelatedTab" class="dpArticleTab dpActiveTab" onclick="dpShowOtherTab(this,dpArticleRelatedDump);">Related Stories</li>
            <li id="dpArticleCommentsTab" class="dpArticleTab" onclick="dpShowOtherTab(this,dpArticleCommentingDump);">Discussion (<span id="commentsCurrentTab"><a href="<?php echo get_permalink(); ?>#disqus_thread">Add a comment</a></span>)</li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>
    <div id="dpArticleBottomWrap">
        <div id="dpArticleRelatedDump" class="dpArticleDump dpActiveDump">
            <!-- ##### Begin Outbrain Test ##### -->

            <div class="OUTBRAIN" data-src="<?php echo get_permalink(); ?>" data-widget-id="AR_1" data-ob-template="Denver Post Blogs"></div>
            <div class="OUTBRAIN" data-src="<?php echo get_permalink(); ?>" data-widget-id="AR_2" data-ob-template="Denver Post Blogs"></div>
            <script type="text/javascript" async="async" src="http://widgets.outbrain.com/outbrain.js"></script>

            <!-- ##### End Outbrain Test ##### -->
            <div class="clear"></div>
        </div>
        <div id="dpArticleCommentingDump" class="dpArticleDump">
            <!-- ##### Begin Disqus comments, comment count ##### -->

            <div id="commentsGroundRules">
                <div id="commentsGroundRulesInner">
                    <h3 style="padding-top:4px;font-size:20px;margin-top:0;">Article Comments</h3>
                    <ul>
                        <li>We reserve the right to remove any comment we feel is spammy, NSFW, defamatory, rude, or reckless to the community.</li>
                        <li>We expect everyone to be respectful of other commenters. It's fine to have differences of opinion, but there's no need to act like a jerk.</li>
                        <li>Use your own words (don't copy and paste from elsewhere), be honest and don't pretend to be someone (or something) you're not.</li>
                    </ul>
                </div>
                <div class="subLinks">
                    <ul>
                        <li><a href="http://www.denverpost.com/recentcomments" title="Recent comments, top discussions and top commenters">Recent comments</a></li>
                        <li><a href="http://www.denverpost.com/disqusprimer" title="Primer on Disqus commenting">Disqus comments primer</a></li>
                        <li><a href="http://www.denverpost.com/groundrules" title="Denver Post commenting Ground Rules (April 2014)">Commenting Ground Rules</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>

            <?php comments_template(); ?>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<script type="text/javascript">
    jQuery('.dpArticleTab').on('click', function(){
        jQuery(this).siblings('li').removeClass('dpActiveTab');
        jQuery(this).addClass('dpActiveTab');
    })
    function dpShowOtherTab(tabclicked,dumptoshow) {
        if(!jQuery(tabclicked).hasClass('dpActiveTab')) {
            jQuery('.dpActiveDump').fadeOut(100).removeClass('dpActiveDump');
            jQuery(dumptoshow).fadeIn(100).addClass('dpActiveDump');
        }
    }
    function dpShowOtherTabTop(fullHash) {
        if(!jQuery('#dpArticleCommentingDump').hasClass('dpActiveDump')) {
            jQuery('#dpArticleRelatedDump').fadeOut(100).removeClass('dpActiveDump');
            jQuery('#dpArticleCommentingDump').fadeIn(100).addClass('dpActiveDump');
        }
        if(!jQuery('#dpArticleCommentsTab').hasClass('dpActiveTab')) {
            jQuery('#dpArticleCommentsTab').siblings('li').removeClass('dpActiveTab');
            jQuery('#dpArticleCommentsTab').addClass('dpActiveTab');
        }
        if (fulllHash == '#disqus_thread') {
            jQuery('html, body').animate({ scrollTop: jQuery("#dpArticleBottom").offset().top }, 30);
        } else {
            jQuery('html, body').animate({ scrollTop: jQuery(fullHash).offset().top }, 30);
        }
    }
    jQuery(document).ready( function() {
        var fullHash = window.location.hash;
        var partialHash = '';
        if (fullHash != '#disqus_thread') {
            partialHash = fullHash.split('-');
        }
        if (fullHash == '#disqus_thread' || partialHash[0] == '#comment') {
            dpShowOtherTabTop(fullHash);
        }
    });
</script>

    <?php endwhile; else: ?>
    <?php include( '404.php'); ?>
    <?php endif; ?>

</div>
<!-- Closes the content div-->

<?php include( 'sidebar2.php'); ?>

<a name="bottom"></a>

<?php include( 'footer.php'); ?>
