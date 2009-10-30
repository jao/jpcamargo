<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input type="image" id="searchsubmit" value="Search" src="<?php bloginfo('stylesheet_directory'); ?>/img/search-button-<?php echo(get_option('coldstone_color')); ?>.gif" />
        <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    </div>
</form>
