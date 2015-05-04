<?php include('header.php'); ?>

     <div id="content">
     	<div class="searchresult">Search results: <?php echo get_search_query(); ?><span style="float: right; margin-right: 10px;"><img src="http://blogs.denverpost.com/wp-includes/images/rss.png" style="margin-right: 3px;" /><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>feed/" class="rss">RSS feed</a></span></div>
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	       <div class="post">
		<div class="thedate"><span style="font-weight: bold; text-transform: uppercase;"><a href="<?php bloginfo('url'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>"><?php the_time('F j, Y'); ?></a><?php the_time(', g:i a'); ?></div>
				<div id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

					<div id="sidebar">
						<div class="authortopper">
							<div class="theauthor">
								<span class="postauthor">By <?php coauthors_posts_links(); ?></span>
							</div>
							<div class="bytitle">
								<?php the_author_meta('nickname'); ?>
							</div>
							<?php if (the_author_image_url() ) the_author_image(); ?>
						</div>
						<div class="feedback">
							<div class="sidebarcomments"><a href="<?php comments_link(); ?>"><?php comments_number('Add a comment','Comments (1)','Comments (%)'); ?></a></div>
							<div class="articletools"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
							<div class="articletools"><?php if(function_exists('wp_email')) { email_link(); } ?></div>
                            <div class="articletools"><div class="fb-share-button" data-href="<?php echo wp_get_shortlink(get_the_ID()); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>
                            <div class="articletools">
								<g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone>

								<script type="text/javascript">
  									(function() {
   									 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    									po.src = 'https://apis.google.com/js/plusone.js';
    									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 									 })();
								</script></div>
                            <div class="articletools"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
                        </div>
					</div>

					<div class="storycontent">
						<?php the_content(__('Read more...')); ?>
					</div>
				</div><!-- Closes post-ID div -->
					<div class="postmeta">
						<ul class="articletools">
	                          <li class="comments"><?php comments_popup_link(('Add a comment'), ('Comments (1)'), ('Comments (%)')); ?></li>
	                          <li><?php if(function_exists('wp_print')) { print_link(); } ?></li>
	                          <li><?php if(function_exists('wp_email')) { email_link(); } ?></li>
	                          <li style="padding: 0px!important;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="denverpost">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
	                          <li style="padding: 0px!important;"><div class="fb-share-button" data-href="<?php echo wp_get_shortlink(get_the_ID()); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></li>
	                    </ul>
                                                
                                                <div style="margin: 10px 0 0 155px;"><strong>Categories:</strong> <?php the_category(', '); ?></div>
					</div>

					<?php trackback_rdf(); ?>
	  </div> <!-- Closes the post div-->
     
    	       <?php endwhile; else: ?>
	       <div class="noresults">
		    <h1>Whoops!</h1>
		    We didn't find anything for that search. Try another?
		    <?php get_search_form(); ?>
	       </div>
	       <?php endif; ?>
     </div><!-- Closes the content div-->
     

	<?php include('sidebar2.php'); ?>
         
<?php include('footer.php'); ?>