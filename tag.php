<?php include('header.php'); ?>
  
    <div id="content">
	    <div class="searchresult">Posts by Topic: <?php echo single_tag_title(); ?><span style="float: right; margin-right: 10px;"><img src="http://blogs.denverpost.com/wp-includes/images/rss.png" style="margin-right: 3px;" /><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>feed/" class="rss">RSS feed</a></span></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  <div class="post" id="post-<?php the_ID(); ?>"></div>

<div class="post">
		<div class="thedate"><span style="font-weight: bold; text-transform: uppercase;"><?php the_author_meta('aim'); ?></span> | <a href="<?php bloginfo('url'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>"><?php the_time('F j, Y'); ?></a><?php the_time(', g:i a'); ?></div>
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
							<?php if ( wp_is_mobile() ): ?>
                            	<div class="articletools">
                            		<a href="sms:body=<?php the_title(); ?>: <?php echo wp_get_shortlink(); ?>">SMS</a>
                            	</div>
                            <?php endif; ?>
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
							<li class="smslink"><a href="javascript:void(0);">SMS</a></li>
								<script>
								function customEmailMessageEncoder(str) {
						        	return encodeURIComponent(str).replace(/[!'()]/g, escape).replace(/\*/g, "%2A").replace(/%20%0A%20%0A/g, "%20%0A%0D");
						        }
								jQuery('li.smslink').on('click', function() {
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
							<li style="padding: 0px!important;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="denverpost">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
							<li style="padding: 0px!important;"><div class="fb-share-button" data-href="<?php echo wp_get_shortlink(get_the_ID()); //wpbitly shortcode ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></li>
				        </ul>
                        <div style="margin: 10px 0 0 155px;"><strong>Categories:</strong> <?php the_category(', '); ?></div>
					</div>
					<?php trackback_rdf(); ?>
                </div> <!-- Closes the post div-->
      <?php endwhile; ?>
     <?php else : ?>
      Not Found
    <?php endif; ?>
   
                        <div class="postnavigation">
				<div class="rightdouble">
					<?php previous_posts_link('Newer Entries &raquo;', '0') ?>
				</div>
				<div class="leftdouble">
                                        <?php next_posts_link('&laquo; Older Entries', 0); ?>
				</div>
			</div>

    </div> <!-- This closes the singlepost div-->
    
	<?php include('sidebar2.php'); ?>

<?php include('footer.php'); ?>