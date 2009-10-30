<div id="footer">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    <?php endif; ?>
    <div style="clear: both;"></div>
</div>
<div style="clear: both;"></div>
<div style="clear: both; margin-bottom: 20px; margin-top: 20px; float: left; font-size: 10px; width: 636px;" class="bluefooter"> Powered by <a href="http://www.wordpress.org">Wordpress</a> | Designed by <a href="http://www.elegantthemes.com">Elegant Themes</a> </div>
</div>
<?php if (get_option('puretype_integration_body') <> '' && get_option('puretype_integrate_body_enable') == 'on') echo(get_option('puretype_integration_body')); ?>
<?php wp_footer(); ?>
