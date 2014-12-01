<?php get_header(); ?>

   <div id="content">

		<div id="customheader">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php header_image() ?>" alt="Header" title="Header" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" /></a>
		</div>
		
        <div align="center"><?php if (function_exists('display_my_news_announcement')) { display_my_news_announcement(); }  ?></div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
		<div class="thedate"><span style="font-weight: bold; text-transform: uppercase;"><?php the_author_meta('aim'); ?></span> <a href="<?php bloginfo('url'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>"><?php the_time('F j, Y'); ?></a><?php the_time(', g:i a'); ?></div>
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
						<div class="feedback listingpage">
							<div class="sidebarcomments"><?php comments_popup_link(('Add a comment'), ('Comments (1)'), ('Comments (%)')); ?></div>
							<div class="articletools"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
							<div class="articletools"><?php if(function_exists('wp_email')) { email_link(); } ?></div>
							<div class="articletools"><div class="fb-like" data-href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>
      						<div class="articletools">
								<g:plusone size="medium" href="<?php echo wp_get_shortlink(); //wpbitly shortcode ?>"></g:plusone>
								<script type="text/javascript">
									(function() {
									 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									po.src = 'https://apis.google.com/js/plusone.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									 })();
								</script>
							</div>
							<div class="articletools">
							<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                                <a href="http://twitter.com/share" class="twitter-share-button"
                                         data-url="<?php echo wp_get_shortlink(the_ID()); //wpbitly shortcode ?>"
                                         data-via="<?php the_author_meta("jabber",$twitter_user_id); ?>"
                                         data-related="monserud,danielpetty,denverpost"
                                         data-text="<?php the_title(); ?>:"
                                         data-counturl="<?php get_the_permalink(the_ID()); ?>"
                                         data-count="horizontal">Tweet</a>
                          </div>
                        </div>
						<div class="clear"></div>
					</div>

					<div class="storycontent">
						<?php the_content(__('Read more...')); ?>
						<div class="clear"></div>
					</div>
				</div><!-- Closes post-ID div -->
					<div class="postmeta listingpage">
                        <strong>Categories:</strong> <?php the_category(', '); ?>
					</div>
					<?php trackback_rdf(); ?>
</div> <!-- Closes the post div-->

		<?php comments_template(); // Get wp-comments.php template ?>
		<?php endwhile; else: ?>
       <div class="noresults"><?php _e('Sorry, no posts matched your criteria.'); ?></div>
       <?php endif; ?>
			<div class="postnavigation">
				<div class="rightdouble">
					<?php previous_posts_link('Read Newer Entries &raquo;', 0); ?>
				</div>
                        
				<div class="leftdouble">
                    <?php next_posts_link('&laquo; Read Previous Entries', 0); ?>
				</div>
			</div>
         </div><!-- Closes the content div-->
         
	<?php include('sidebar2.php'); ?>

<?php include('footer.php'); ?>
