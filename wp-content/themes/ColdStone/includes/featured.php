<div class="feature_wrap">
    <script type="text/javascript">
		$(document).ready(function(){
			
			$(function () {
    var tabContainers = $('div.tabs > div');
    
    $('div.tabs ul.tabNavigation a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        
        $('div.tabs ul.tabNavigation a').removeClass('selected');
        $(this).addClass('selected');
        
        return false;
    }).filter(':first').click();
});
		});
</script>
    <!-- DEL ME -->
    <div class="tabs">
	<?php $feat_cat = get_catId(get_option('coldstone_feat_cat')); 
$ids = array(); ?>
        <?php $my_query = new WP_Query("showposts=$coldstone_featured_number&cat=$feat_cat&order=DESC");
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $loopcounter++; ?>
        <div id="tab<?php echo $loopcounter; ?>">
            <?php $image = get_post_meta($post->ID, 'Featured', $single = true); ?>
			<?php if (($image == '') && ($coldstone_grab_image == 'on')) $image = catch_that_image(); ?>
            <div class="moduletable">
                <div class="feature_slide"> <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $image; ?>&amp;h=250&amp;w=883&amp;zc=1&amp;q=100" class="featured_thumbnail" alt="<?php the_title(); ?>" />
                    <?php include(TEMPLATEPATH . '/includes/featurednav-' . $coldstone_featured_number . '.php'); ?>
                </div>
                <div class="feat_post">
                    <h2><span><?php echo $loopcounter; ?>. </span><a href="<?php the_permalink(); ?>"><?php truncate_title(25); ?></a></h2>
                    <?php truncate_post(240); ?>
                    <div class="keepreading"> <a href="<?php the_permalink(); ?>">Continue Reading</a> </div>
                </div>
                <!-- /feat_post -->
            </div>
        </div>
		<?php $ids[]= $post->ID; ?>
        <?php endwhile;?>
    </div>
    <!-- /DEL ME -->
    <div class="feature_content">
        <div class="feature_widget">
            <?php if (get_option('coldstone_ads') == 'on') { include(TEMPLATEPATH . '/includes/ads.php'); } ?>
            <!-- /adverts -->
        </div>
        <!-- /feature_widget -->
    </div>
    <!-- /feature_content -->
    <div style="clear: both;"></div>
</div>
<!-- /feature_wrap -->
