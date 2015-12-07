<?php include('header.php'); ?>

     <div id="content" class="page">
	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	       <div class="post">
		    <div id="post-<?php the_ID(); ?>">
			 <h1><?php the_title(); ?></h1>
	       
			 <div class="pagecontent">
			      <?php the_content(); ?>
			 </div>
		    </div>
	       </div>
     
    	       <?php endwhile; else: ?>
	       <div class="noresults">
		    <h1>404 Error: Not found</h1>
		    It appears the requested page does not exist. You can start over at our <a 
title="Our Site" href="http://blogs.denverpost.com">Blogs homepage</a>, return to the <a href="<?php echo homeurl(); ?>">main page for this blog</a>, or try searching:
			<?php get_search_form(); ?>
	       </div>
	       <?php endif; ?>
     </div><!-- Closes the content div-->
     

	<?php include('sidebar2.php'); ?>
         
<?php include('footer.php'); ?>