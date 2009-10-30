<?php $feat_cat = get_catId(get_option('puretype_feat_cat')); 
$ids = array(); ?>
<?php query_posts("cat=$feat_cat&showposts=$puretype_homepage_featured;");
while (have_posts()) : the_post(); ?>

<div class="featured"> <span class="titles-featured"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
    <?php the_title(); ?>
    </a></span><span class="featured-date">|
    <?php the_time(get_option('puretype_date_format')) ?>
    </span>
    <?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
	<?php if (($thumb == '') && ($puretype_grab_image == 'on')) $thumb = catch_that_image(); ?>
	<?php if($thumb !== '') { ?>
		<div class="featured-thumb-wrapper"> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=223&amp;w=615&amp;zc=1" alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"  class="featured-thumb" /></a>
        <div class="featured-categories">
            <?php the_category('') ?>
        </div>
    </div>
    <?php } ?>
    <div style="clear: both;"></div>
    <?php truncate_post(310) ?>
</div>
<?php $ids[]= $post->ID; ?>
<?php endwhile; wp_reset_query(); ?>