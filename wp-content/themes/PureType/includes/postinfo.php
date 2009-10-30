<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<?php the_title(); ?>
	</a></h1>
<?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?>

<div class="rule"></div>
<div style="clear: both;"></div>
<?php if (get_option('puretype_thumbnails') == 'on') { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
<?php the_content(); ?>