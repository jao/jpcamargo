<?php get_header(); ?>

<div id="container">
<div id="left-div">
    <?php if (get_option('puretype_format') == 'on') { ?>
		<?php include(TEMPLATEPATH . '/includes/blogstyle.php'); ?>
    <?php } else { include(TEMPLATEPATH . '/includes/defaultindex.php'); } ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>