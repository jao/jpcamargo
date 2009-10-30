<?php 
if (is_archive()) $post_number = get_option('puretype_archivenum_posts');
if (is_search()) $post_number = get_option('puretype_searchnum_posts');
if (is_tag()) $post_number = get_option('puretype_tagnum_posts');
if (is_category()) $post_number = get_option('puretype_catnum_posts');
if (is_home()) $post_number = get_option('puretype_homepage_posts');
global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged"); 
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>

<div class="home-post-wrap-3">
    <?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
	<br style="clear:both;"/>
</div>
<?php endwhile; ?>
<?php include(TEMPLATEPATH . '/includes/page-navigation.php'); ?>
<?php else : ?>
<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
<?php endif; ?>
<?php if (is_home() || is_category()) wp_reset_query(); ?>