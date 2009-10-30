<div class="footer">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    <?php endif; ?>
    <div style="clear: both;"></div>
    <p>Powered by <a href="http://www.wordpress.org">Wordpress</a> | Design by <a href="http://www.elegantthemes.com/">ElegantThemes</a></p>
</div>
<!-- /footer -->
</div>
<!-- /wrapp_ -->
<?php if (get_option('coldstone_integration_body') <> '' && get_option('coldstone_integrate_body_enable') == 'on') echo(get_option('coldstone_integration_body')); ?>
<?php wp_footer(); ?>
</body></html>