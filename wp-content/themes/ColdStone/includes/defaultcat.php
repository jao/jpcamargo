<?php get_header(); ?>

<div class="single_wrap">
    <div style="float:left;margin-top:25px;width:600px;">
        <div class="browsing">
            <h2>
                <?php single_cat_title('Browsing » '); ?>
            </h2>
        </div>
		<?php query_posts("cat=$cat&showposts=$coldstone_catnum_posts&paged=$paged"); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="subpost" style="background:none;">
            <?php $thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); ?>
			<?php if (($thumb == '') && ($coldstone_grab_image == 'on')) $thumb = catch_that_image(); ?>
            <?php if($thumb !== '') { ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=62&amp;w=62&amp;zc=1&amp;q=100" alt="<?php the_title(); ?>" class="catimage" />
            <?php } ?>
            <div class="sub_article" style="width: 420px;">
                <h3><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a></h3>
                <?php if ($coldstone_postinfo_bar == 'on') { ?>
					<div class="post-info2"><?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?></div>
				<?php } ?>
                <div style="color:#333;">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <!-- subpost -->
        </div>
		<div style="clear: both;"></div>
        <?php endwhile; ?>
        <div style="clear: both;"></div>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
        <p class="pagination">
            <?php next_posts_link('&laquo; Previous Entries') ?>
            <?php previous_posts_link('Next Entries &raquo;') ?>
        </p>
        <?php } ?>
        <?php else : ?>
        <h2 >No Results Found</h2>
        <p>Sorry, your search returned zero results. </p>
        <?php endif; ?>
		<?php wp_reset_query(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
<?php get_footer(); ?>
