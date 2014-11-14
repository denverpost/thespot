<!-- Right sidebar -->

<div id="sidebar2">

<div align="center" id="dp_blog_cube_wrap" style="border-top: 5px solid #003459!important; padding-top: 10px;">
  <div id='dp_blog_cube'>
    <script type='text/javascript'>
      if ( document.getElementById('dp_blog_cube_wrap').offsetWidth >= 300 ) {
        googletag.defineSlot('/8013/denverpost.com', [[300,250]], 'dp_blog_cube').setTargeting('blog', '<?php echo $related['ad_tax']; ?>').addService(googletag.pubads());
        googletag.pubads().enableSyncRendering();
        googletag.enableServices();
        googletag.display('dp_blog_cube');
      }
    </script>
  </div>
</div>

<!-- <div class="categorytopper">Search Blogs</div>
<form id="searchform" action="http://blogs.denverpost.com/" method="get">
   <div>
      <input id="s" size="20" type="text" name="s" value="" gtbfieldid="1">
      <input id="searchsubmit" type="submit" value="Search">
   </div>
</form> -->

 <div class="categorytopper">Most Popular</div>
   <div id="tabvanilla" class="widget">
      <ul class="tabnav">
         <li><a href="#popular">Viewed</a></li>
         <li><a href="#featured">Commented</a></li>
         <li><a href="#recent">Recent</a></li>
      </ul>

   <div id="popular" class="tabdiv">
      <ul>
         <div class="most_time">Last 48 hours</div>
         <?php if (function_exists('WPPP_show_popular_posts') ) { ?><?php WPPP_show_popular_posts( "title=&number=5&days=2&show=posts&format=<a href='%post_permalink%'
title='%post_title_attribute%'>%post_title%</a>" ); ?><?php } ?>
      </ul>
   </div><!--/popular-->

   <div id="recent" class="tabdiv">
      <div class="most_time">Latest Posts</div>
      <ul>
         <?php wp_get_archives('type=postbypost&limit=5&format=html'); ?>
      </ul>
   </div><!--/recent-->

   <div id="featured" class="tabdiv">
      <div class="most_time">Most Commented</div>
      <?php if (function_exists('most_comments') ) { ?><ul class="commented"><?php most_comments(); ?></ul><?php } ?>
      </div><!--featured-->
   </div><!--/widget-->

<ul>
   <?php if (!function_exists('dynamic_sidebar') or !dynamic_sidebar("rightsidebar")) { ?>

   <?php } ?>

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 <div class="title">About</div>
 <p>The dynamic sidebar is not working. Please contact an administrator.</p>
 <div class="title">Links</div>
 <ul>
  <li><a href="http://www.denverpost.com">Home: The Denver Post</a></li>
 </ul>
<?php endif; ?>

<div class="categorytopper">About <?php bloginfo('name'); ?></div>

<div class="sidebarinfo"><?php bloginfo('description'); ?></div>

<div>
<div class="categorytopper"><img src="/wp-includes/images/rss.png" alt="RSS" title="RSS" /> Subscribe</div>
    <li><a href="<?php bloginfo_rss('url') ?>/feed/"><?php bloginfo('name'); ?> RSS feed</a></li>
    <li><a href="http://www.denverpost.com/webfeeds">Denver Post feed directory</a></li>
    </div>

   </ul>

</div>

<!-- Closes the sidebar2 div-->