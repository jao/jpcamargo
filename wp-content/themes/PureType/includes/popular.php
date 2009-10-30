<!--Begin Most Commented Articles-->

<span class="headings">popular articles</span>
<div class="home-sidebar-box">
<ul>
<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 8");
foreach ($result as $post) {
setup_postdata($post);
$postid = $post->ID;
$title = $post->post_title;
$commentcount = $post->comment_count;
if ($commentcount != 0) { ?>
<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
<?php echo $title ?> (<?php echo $commentcount ?>)</a> </li>
<?php } } ?>
</ul>
</div>
<!--End Most Commented Articles-->
<!--Begin Random Articles-->
<span class="headings">random articles</span>
<div class="home-sidebar-box">
    <ul>
        <?php $my_query = new WP_Query("orderby=rand&showposts=$puretype_random;");
while ($my_query->have_posts()) : $my_query->the_post();
?>
        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
            <?php truncate_title(40) ?>
            </a></li>
        <?php endwhile; ?>
    </ul>
</div>
<!--End Random Articles-->
