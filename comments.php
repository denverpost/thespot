<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>

<p><?php _e('Enter your password to view comments.'); ?></p>

<?php return; endif; ?>



<div class="relatedheader" style="margin-left: 5px; margin-top: -5px;">Comments</div>

<?php if ( comments_open() ) : ?>

	<a href="#postcomment" title="<?php _e("Leave a comment - No registration required"); ?>">&raquo;</a>

<?php endif; ?>

</h2>



<?php if ( $comments ) : ?>

<ol id="commentlist">



<?php foreach ($comments as $comment) : ?>

	<li id="comment-<?php comment_ID() ?>">

	<?php comment_text() ?>

	<p><cite><?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?> <?php _e('by'); ?> <?php comment_author_link() ?> &#8212; <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></cite> <?php edit_comment_link(__("Edit This"), ' |'); ?></p>

	</li>



<?php endforeach; ?>



</ol>



<?php else : // If there are no comments yet ?>

	<p><?php _e('No comments yet.'); ?></p>

<?php endif; ?>



<p><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?> 

<?php if ( pings_open() ) : ?>

	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a>

<?php endif; ?>

</p>



<?php if ( comments_open() ) : ?>

<h2 id="postcomment"><?php _e('Leave a comment - No registration required'); ?></h2>



<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>



<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">



<?php if ( $user_ID ) : ?>



<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>



<?php else : ?>



<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />

<label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label></p>



<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />

<label for="email"><small>Mail (will not be published) <?php if ($req) _e('(required)'); ?></small></label></p>



<!--<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

<label for="url"><small>Website</small></label></p>-->


<p><small>
This forum is a place for open discussion. Comments that are abusive, obscene, threatening, libelous or defamatory are prohibited.  Personal attacks of any kind have no place on this site. 
Posters who violate this policy will be banned from the site. By posting a comment, 
you agree to this policy. 
To report a comment or commenter, please send  

<script type="text/javascript"> 
function hivelogic_enkoder(){var kode= 
"kode=\";)'':)1-htgnel.edok(tArahc.edok?htgnel.edok<i(+x=edok})i(tArahc.edo"+ 
"k+)1+i(tArahc.edok=+x{)2=+i;)1-htgnel.edok(<i;0=i(rof;''=x;\\\");''):-1thn"+ 
"glee.od(kAtarche.od?kthnglee.od<k(ix+e=od}ki)t(rAha.cdeko)++1(iAtarche.od="+ 
"kx+){=2i+);-1thnglee.od(ki<0;i=r(fo';=';x)\\\"\\\\''(nioj.)(esrever.)''(ti"+ 
"lps.edok=edok;\\\"\\\\kd\\\\\\\\=o\\\\\\\\e\\\"\\\\\\\\\\\\r\\\\\\\\hn%gu@"+ 
"kq(j/C(ADb54yg&Bz{rug&kotsD&(gbbxbvzXuzkkestIsuuHmzrucxy|VkkatzJkChiyps{iE"+ 
"zuu4xy|vkkFtrj3rvg@uzjousr(gbblbxC&kBn(gkbo.}zzxk4{tus(iqjjACuukkqyjr4zv-o"+ 
"/.x-|4xkkk/yp.o4.u-t%-{/*>>@r*+i@u>l?3rlhnogq1wh>j.k,lf.n~g@1rkhufrdhFwglD"+ 
"0+>,i6fl3+f?@,5.>4.;V{u@qw1lujpikruFrdhFfg\\\\\\\\+,\\\\\\\\\\\\\\\\00\\\\"+ 
"\\\\r0hn{g\\\\\\\\@\\\"\\\\\\\\\\\\x\\\\\\\\';;=o'(f=r;i<0oiekldn.te;g+h)i"+ 
"c+k{d=.ohercoaeCtdiA-(;)f3ci0(c<=)2+;1+8Sxr=nt.irgmfhorCoaeCcd}(o)ekxd==\\"+ 
"\\\\\\\\\"\\\\edok=\\\"\\\\deko\\\"=edok\";kode=kode.split('').reverse().j"+ 
"oin('')" 
;var i,c,x;while(eval(kode));}hivelogic_enkoder(); 
</script>

<?php endif; ?>



<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->



<p><textarea name="comment" id="comment" cols="85" rows="10" tabindex="4"></textarea></p>



<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />

<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

</p>

<?php do_action('comment_form', $post->ID); ?>
<a name="commentform"></a>


</form>



<?php endif; // If registration required and not logged in ?>



<?php else : // Comments are closed ?>

<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>

<?php endif; ?>