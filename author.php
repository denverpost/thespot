<?php get_header(); ?>

<div id="content">
<!-- This sets the $curauth variable -->

    <div id="customheader">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php header_image() ?>" alt="Header" title="Header" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" /></a>
    </div>
    
    <?php
    if(isset($_GET['author_name'])) :
        $curauth = get_userdatabylogin($author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    ?>

<div class="post">
    <div class="authorcolumn">
        <div class="authorpagename"><?php echo $curauth->display_name; ?></div>
        <div class="authordescription">
        <?php if (the_author_image_url() ) the_author_image(); ?>
        <?php echo nl2br($curauth->description); ?>
        </div> <!--
        <a class="authoremail" href="mailto:<?php // echo $curauth->user_email; ?>">Send <?php // echo $curauth->first_name; ?> an e-mail</a> -->
    </div>
    
    <div class="articlecolumn">
        <div class="categorytopper">Recent posts</div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="authordate"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></div>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <div class="authorheadline"><?php the_title(); ?></a></div>

        <?php endwhile; else: ?>
            <p><?php _e('No posts by this author.'); ?></p>

        <?php endif; ?>
    
    <!-- <div class="postnavigation">
	<div class="rightdouble"> -->
            <?php // previous_posts_link('Newer Entries &raquo;', '0') ?>
	<!-- </div>
	<div class="leftdouble"> -->
            <?php // next_posts_link('&laquo; Older Entries', 0); ?>
	<!-- </div>
    </div> -->
    
    </div><!--Closes the article column-->
    
</div><!--Closes the post div-->

</div><!--Closes the content div-->

<?php include('sidebar2.php'); ?>

<?php get_footer(); ?>