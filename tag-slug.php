<?php include('header.php'); ?>
 <div id="container" class="clearfix">

   <div id="content">
       <div class="post">
  <h2 class="title"><a><?php single_tag_title(); ?>-tagged posts on <?php bloginfo('name'); ?></a></h2>
  </div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <div class="post">
        <div class="title" id="post-<?php the_ID(); ?>">
         <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php the_title(); ?>
         </a>
        </div>
	    <div class="thedate">by <span class="postauthor"><?php the_author() ?></span> on <?php the_time('F j, Y'); ?>			
					</div><!-- Closes the thedate div-->
					
					<div class="feedback">
<?php comments_popup_link(('<img src="http://extras.mnginteractive.com/live/media/site36/2008/0908/20080908_103313_bubble.gif" alt=""> Be the first to comment!'), ('<img src="http://extras.mnginteractive.com/live/media/site36/2008/0908/20080908_103313_bubble.gif" alt=""> 1 Comment'), ('<img src="http://extras.mnginteractive.com/live/media/site36/2008/0908/20080908_103313_bubble.gif" alt=""> % Comments')); ?>
					</div><!-- Closes the feedback div-->
					<img src="http://extras.mnginteractive.com/live/media/site36/2008/0908/20080908_101029_470dots.gif" alt=""><br /><br>
	    <div class="storycontent">
        <?php the_excerpt(); ?>
        </div>
     
		<?php wp_link_pages(); ?> 
       </div> <!-- Closes the post div-->
       <?php comments_template(); // Get wp-comments.php template ?>
	   <?php endwhile; else: ?>
       <?php _e('Sorry, no posts matched your criteria.'); ?>
       <?php endif; ?>
       <div class="postnavigation">
        <div class="rightdouble">
         <?php posts_nav_link('','','previous posts + &#187;') ?>
        </div>
        <div class="leftdouble">
         <?php posts_nav_link('','&#171; + newer posts ','') ?>
        </div>
 
</div>

     </div> <!-- Closes the content div-->
     
	   <?php include('sidebar2.php'); ?>
       
     <div id="bottomcontentdouble">
    </div>
 </div> <!-- Closes the container div-->
<?php include('footer.php'); ?>