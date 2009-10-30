<?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
<?php if (($thumb == '') && ($puretype_grab_image == 'on')) $thumb = catch_that_image(); ?>
<?php if($thumb !== '') { ?>
	<div class="thumbnail-div">
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=<?php if (is_page()) { echo $puretype_thumbnail_height_pages; } else { echo $puretype_thumbnail_height; } ?>&amp;w=<?php if (is_page()) { echo $puretype_thumbnail_width_pages; } else { echo $puretype_thumbnail_width; } ?>&amp;zc=1" alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"  style="border: none;" /></a> 
	</div>
<?php } ?>
