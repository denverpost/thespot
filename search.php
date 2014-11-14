<?php get_header(); 
$ricerca == $_GET['s'];
?>

	<div id="content">

		<div class="post">
		<div class="title">Search results</div>

				<? 
		$ricerca = wp_specialchars($s, 1);
		gt_search_all_blogs($ricerca); ?>		

		</div>			

				
	</div>
	</div>
    
	<?php include('sidebar2.php'); ?>

<?php get_footer(); ?>
