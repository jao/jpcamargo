<!--Begin Feaured Article-->
<?php if (get_option('puretype_featured') == 'on') { include(TEMPLATEPATH . '/includes/featured.php'); } ?>
<!--End Feaured Article-->

<div class="home-wrapper">
    <div class="home-left">
        <!--Begin recent post-->
<?php $args=array(
		'showposts'=>get_option('puretype_homepage_posts'),
		'post__not_in' => $ids,
		'paged'=>$paged,
		'category__in' => get_option('puretype_exlcats_recent'),
); ?>
<?php query_posts($args);
if (have_posts()) : while (have_posts()) : the_post();
$loopcounter++; ?>
        <div class="home-post-wrap">
			<?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?>
            <div style="clear: both;"></div>
            <?php if (($loopcounter % 2) <> 0) : ?>
            <h2 class="titles"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
                <?php truncate_title(36) ?>
                </a></h2>
            <?php else : ?>
            <h2 class="titles-orange"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
                <?php truncate_title(36) ?>
                </a></h2>
            <?php endif; ?>
            <div style="clear: both;"></div>
            <?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
			<?php if (($thumb == '') && ($puretype_grab_image == 'on')) $thumb = catch_that_image(); ?>
			<?php if($thumb !== '') { ?>
				<div class="thumbnail-div"> <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=98&amp;w=98&amp;zc=1" alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"  style="border: none;" /></a> </div>
            <?php }  ?>
            <?php truncate_post(210) ?>
        </div>
<?php endwhile; ?>
<?php include(TEMPLATEPATH . '/includes/page-navigation.php'); ?>
<?php endif; ?>
        <!--End recent post-->
    </div>
    <div class="home-right">
        <?php if (get_option('puretype_popular') == 'on') { include(TEMPLATEPATH . '/includes/popular.php'); } ?>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Homepage") ) : ?>
        <?php endif; ?>
    </div>
</div>