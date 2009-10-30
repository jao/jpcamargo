<!-- SUB POST DIVISIONS -->

<div class="subpost_wrap2">
    <div class="subpost_wrap">
        <div class="subpost_left">
            <?php if (get_option('coldstone_duplicate_featured') == 'false') 
			$args=array(
				'showposts'=>get_option('coldstone_homepage_posts'),
				'post__not_in' => $ids,
				'paged'=>$paged,
				'category__in' => get_option('coldstone_exlcats_recent'));
		  else 
			$args=array(
				'showposts'=>get_option('coldstone_homepage_posts'),
				'paged'=>$paged,
				'category__in' => get_option('coldstone_exlcats_recent'),); ?>
			<?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); $loopcounter++; ?>
            <div class="subpost">
                <?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
				<?php if (($thumb == '') && ($coldstone_grab_image == 'on')) $thumb = catch_that_image(); ?>
                <?php if($thumb !== '') { ?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=62&amp;w=62&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" />
                <?php } ?>
                <div class="sub_article">
                    <h3><a href="<?php the_permalink(); ?>"><?php truncate_title(40); ?></a></h3>
                    <?php truncate_post(210); ?>
                </div>
            </div>
            <!-- subpost -->
            <?php endwhile;?>
<?php if (get_option('coldstone_pagenavi') == 'on') { ?>     
<div style="clear: both;"></div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
<p class="pagination">
    <?php next_posts_link('&laquo; Previous Entries') ?>
    <?php previous_posts_link('Next Entries &raquo;') ?>
</p>
<?php } ?>
<?php } ?>
        </div>
        <!-- /subpost_left -->
        <div class="life_wrap">

            <div style="clear: both;"></div>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Homepage Sidebar") ) : ?>
            <?php endif; ?>
            <?php if (get_option('coldstone_tabs') == 'on') { ?>   
            <div class="jsside">
                <?php include(TEMPLATEPATH . '/js-side.php'); ?>
            </div>
            <?php }; ?>
            <!-- /jssside -->
        </div>
        <!-- /life_wrap -->
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- /subpost_wrap -->
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/pearl-<?php echo $coldstone_color; ?>.jpg" style="float: left;" alt="<?php the_title(); ?>" />