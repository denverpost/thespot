<div class="tabber">

    <div class="tabbertab">
                <h3>Viewed</h3>
                     <?php WPPP_show_popular_posts( "title=&number=5&days=2&show=posts&format=<a href='%post_permalink%'
title='%post_title_attribute%'>%post_title%</a>" );?>
   </div>

    <div class="tabbertab">
	<h3>Commented</h3>
                    <?php if (function_exists('get_mostemailed')): ?>
                      <ol style="list-style-type: decimal; list-style-position: outside; margin: 0px 0px 0px -20px;"><?php get_mostemailed('post', 10); ?></ol>
                    <?php endif; ?> 
    </div>

</div>