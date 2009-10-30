<?php 
if (is_archive()) $post_number = get_option('puretype_archivenum_posts');
if (is_search()) $post_number = get_option('puretype_searchnum_posts');
if (is_tag()) $post_number = get_option('puretype_tagnum_posts');
if (is_category()) $post_number = get_option('puretype_catnum_posts');
global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged"); 
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); $loopcounter++; ?>

<div class="home-post-wrap-2"> 
	<?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?>
    <div style="clear: both;"></div>
            <?php if (($loopcounter % 2) <> 0) : ?>
            <h2 class="titles"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title() ?>
                </a></h2>
            <?php else : ?>
            <h2 class="titles-orange"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title() ?>
                </a></h2>
            <?php endif; ?>
    <div style="clear: both;"></div>
    <?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
	<?php if (($thumb == '') && ($puretype_grab_image == 'on')) $thumb = catch_that_image(); ?>
	<?php if($thumb !== '') { ?>
		<div class="thumbnail-div"> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=98&amp;w=98&amp;zc=1" alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"  style="border: none;" /></a> </div>
    <?php } ?>
    <?php truncate_post(420) ?>
	 <div style="clear: both;"></div>
</div>
<?php endwhile; ?>
<?php include(TEMPLATEPATH . '/includes/page-navigation.php'); ?>
<?php else : ?>
<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
<?php endif; ?>
<?php wp_reset_query(); ?>