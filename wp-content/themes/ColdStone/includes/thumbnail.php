<?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
<?php if (($thumb == '') && ($coldstone_grab_image == 'on')) $thumb = catch_that_image(); ?>

<?php if($thumb !== '') { ?>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=<?php if (is_page()) { echo $coldstone_thumbnail_height_pages; } else { echo $coldstone_thumbnail_height; } ?>&amp;w=<?php if (is_page()) { echo $coldstone_thumbnail_width_pages; } else { echo $coldstone_thumbnail_width; } ?>&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" class="single-thumb" />
<?php } ?>
