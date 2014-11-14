<?php
global $wpdb, $blog_id;
$cache_path = '/home/24723/users/.home/domains/denverpostblogs.com/html/wp-content/cache/';
/*
  Note: There's a cron job that runs every 30 minutes and clears out the comment cache files.
  This is the cron job -- it's administered in the (mt) control panel for this gridserver.
   cd /home/24723/users/.home/domains/denverpostblogs.com/html/wp-content/cache; rm -fr recent_comments*
*/

if ( file_exists($cache_path . 'recent_comments_ ' . $blog_id . '.html') )
{
  include($cache_path . 'recent_comments_ ' . $blog_id . '.html');
}
else
{

  $site_comments = 'sitewide_comments';
  $blog_table = 'wp_blogs';
  if ( $limit < 5 ) $limit = 5;
  
  //If we're not on the "home" blog, we only want to display comments from the current blog.
  if ( $blog_id > 1 ) $current_blog_sql = " AND blog_id = $blog_id ";
  
  if ($blog_id > 0 ){  // Only for blogs 1 and 2
    $sql = "SELECT blog_id, comment_ID, comment_post_ID, comment_author,                                                   
       comment_date, comment_date_gmt, comment_approved, comment_type, comment_author_url,                                 
       SUBSTRING(comment_content,1,250) AS com_excerpt FROM $site_comments                                         
       WHERE comment_approved = 2 " . $current_blog_sql . " AND comment_type = ''                                                                  
       ORDER BY comment_date_gmt DESC                                                                                      
       LIMIT " . $limit;
  //if ( $_SERVER['REMOTE_ADDR'] == "72.165.229.187" ) echo '<pre>'; print_r($comments); die;
  //if ( $_SERVER['REMOTE_ADDR'] == "72.165.229.187" ) echo '<pre>' . $sql; die;
    // getting those sitewide comments
    $comments = $wpdb->get_results($sql);
  
    // creating a lookup table of blogs
    $all_blogs = $wpdb->get_results("SELECT blog_id, path FROM $blog_table WHERE deleted='0' ORDER BY blog_id");
  
    $output = $pre_HTML;
    $output .= "\n<ul>\n";
  
    for($i = 0; $i < count($all_blogs); $i++){
      $ach_blog_id = $all_blogs[$i]->blog_id;
      $ach_blog_path = $all_blogs[$i]->path;
  
      if ($ach_blog_path == "/"){
        $ach_blog_path = "MainBlog";
      }else{
        $ach_blog_path = trim($ach_blog_path, "/");
        $ach_blog_path .= "";
      }
      $ach_blog_lu[$ach_blog_id] = $ach_blog_path;
    }
  
    foreach ($comments as $comment) {
      //Get the post name
      $sql = "SELECT post_title FROM wp_$comment->blog_id" . "_posts WHERE ID = " . $comment->comment_post_ID . " LIMIT 1";
      $postname_result = $wpdb->get_results($sql);
  
      $output .= "\n<li><b>By ".strip_tags($comment->comment_author)  .
        "</b>, at <a href=\"" . get_blog_permalink($comment->blog_id, $comment->comment_post_ID) .
        "#comment-" . $comment->comment_ID . "\">" .
        //get_comment_date('m/d/Y') .
        //" " .
        get_comment_time();
  
      $output .= " on " . $postname_result[0]->post_title ;
      if ($comment->blog_id != $blog_id)
        $output .= " (" . $ach_blog_lu[$comment->blog_id] .
        "&nbsp;blog)";
      $output .= ":<br>";
  
      $output .= "</a>" .
        strip_tags($comment->com_excerpt) .
        "...<br>&nbsp;&nbsp;&nbsp;&raquo;&nbsp;<a  href=\"" .
        get_blog_permalink($comment->blog_id, $comment->comment_post_ID) .
        "#comment-" . $comment->comment_ID . "\">" .
        "Read this comment</a>" .
        "</li>";
    }
  
    $output .= "\n</ul>";
    $output .= $post_HTML;
    file_put_contents($cache_path . 'recent_comments_' . $blog_id . '.html', $output);
  
    //echo "<!-- testjoe " . $output . "-->";
    echo $output;
  }else{
    // Do normal recent comment instead..
  }
}