<div style="clear:both;"></div>

</div>

    <div id="dp_blog_cube_wrap_three_mobile">
        <div id='dp_blog_cube_three_mobile'>
            <script type='text/javascript'>
if ( is_mobile() > 0 )
{
                    googletag.defineSlot('/8013/denverpost.com', [[300,250]], 'dp_blog_cube').setTargeting('blog', '<?php echo $related['ad_tax']; ?>').addService(googletag.pubads());
                    googletag.pubads().enableSyncRendering();
                    googletag.enableServices();
                    googletag.display('dp_blog_cube_three_mobile');
}
            </script>
        </div>
    </div>

<div id="dfmFooter"><!--Footer Goes Here--></div>

<?php wp_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#tabvanilla > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
    jQuery('#featuredvid > ul').tabs();
});

jQuery(document).ready(function() {
    jQuery('#tabvanilla > ul').tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
    });
</script>

<script type="text/javascript">
    //Chartbeat stuff
    _sf_async_config.uid = 2671;
    _sf_async_config.domain = 'denverpost.com';
    _sf_async_config.sections = 'blogs,<?php echo $blog_slug; ?>';
    <?php
    $authiename = (strlen(get_the_author_meta('display_name', $post->post_author)) > 3 ? get_the_author_meta('display_name', $post->post_author) : '');
    echo '_sf_async_config.authors = \'' . $authiename . '\';';
    ?>
    _sf_async_config.useCanonical = true;
    (function(){
        function loadChartbeat() {
            window._sf_endpt=(new Date()).getTime();
            var e = document.createElement('script');
            e.setAttribute('language', 'javascript');
            e.setAttribute('type', 'text/javascript');
            e.setAttribute('src','//static.chartbeat.com/js/chartbeat.js');
            document.body.appendChild(e);
        }
        var oldonload = window.onload;
        window.onload = (typeof window.onload != 'function') ? loadChartbeat : function() { oldonload(); loadChartbeat(); };
    })();
</script>

<script type="text/javascript" src="http://local.denverpost.com/common/dfm/dfm-nav/dfm-nav-core.js"></script>
<script type="text/javascript"> dfmNav.initParams("mode|article", "site|denverpost", "pageTitle|<?php bloginfo('name'); ?>", "leaderboard|false", "thirdParty|true"); </script>

</body>

</html>
