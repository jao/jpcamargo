<?php global $puretype_color, $puretype_title_red, $puretype_title_blue, $puretype_random, $puretype_homepage_posts, $puretype_homepage_featured, $puretype_banner_468_url, $puretype_banner_468, $puretype_sort_cat, $puretype_order_cat, $puretype_thumbnail_height, $puretype_thumbnail_width, $puretype_thumbnail_height_pages, $puretype_thumbnail_width_pages, $puretype_catnum_posts; 

	if (get_option('puretype_menupages') <> '') $include_pages = implode(",", get_option('puretype_menupages')); 
	$include_cats = implode(",", get_option('puretype_menucats'));
	$strdepth = '';
	if (get_option('puretype_enable_dropdowns') == 'on') $strdepth = "depth=".get_option('puretype_tiers_shown_pages');
	if ($strdepth == '') $strdepth = "depth=1";
	
	$strdepth2 = '';
	if (get_option('puretype_enable_dropdowns_categories') == 'on') $strdepth2 = "depth=".get_option('puretype_tiers_shown_categories');
	if ($strdepth2 == '') $strdepth2 = "depth=1";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-<?php echo $puretype_color; ?>.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 7]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/iestyle.css" />
<![endif]-->
<!--[if IE 8]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie8style.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript">
jQuery(function(){
jQuery('ul.superfish').superfish();
<?php if (get_option('puretype_disable_toptier') == 'on') echo('jQuery("ul.nav > li > a > span.sf-sub-indicator").parent().attr("href","#");'); ?>
});
</script>

<?php if (get_option('puretype_child_css') == 'on') { //Enable child stylesheet  ?>
<link rel="stylesheet" href="<?php echo(get_option('puretype_child_cssurl')); ?>" type="text/css" media="screen" />
<?php }; ?>

<?php if (get_option('puretype_custom_colors') == 'on') { //Enable custom colors  ?>
<style type="text/css">
	body { color: #<?php echo(get_option('puretype_color_mainfont')); ?>; }
	body { background-color: #<?php echo(get_option('puretype_color_bgcolor')); ?>; }
	#categories { background-color: #<?php echo(get_option('puretype_color_catsbgcolor')); ?>; }
	a:link, a:visited { color: #<?php echo(get_option('puretype_color_mainlink')); ?>; }
	#pages-inside ul li a:link, #pages-inside ul li a:visited, #pages-inside ul li a:active { color: #<?php echo(get_option('puretype_color_pagelink')); ?>; }
	#categories ul li a:link, #categories ul li a:visited, #categories ul li a:active { color: #<?php echo(get_option('puretype_color_catslink')); ?>; }
	.post-info { color: #<?php echo(get_option('puretype_color_postinfo')); ?>; }
	.sidebar-box-title { background-color:#<?php echo(get_option('puretype_color_sidebarbg_titles')); ?>; }
	.sidebar-box-title { color:#<?php echo(get_option('puretype_color_sidebar_titles')); ?>; }
	.footer-box h3 { color:#<?php echo(get_option('puretype_color_footer_titles')); ?>; }
	.footer-box a:link, .footer-box a:visited { color:#<?php echo(get_option('puretype_color_footer_links')); ?>; }
	.post-title a:link, .post-title a:hover, .post-title a:visited { color:#<?php echo(get_option('puretype_color_heading')); ?>; }
</style>
<?php }; ?>

<?php if (get_option('puretype_integration_head') <> '' && get_option('puretype_integrate_header_enable') == 'on') echo(get_option('puretype_integration_head')); ?>
</head>
<body>
<!--This controls pages navigation bar-->
<div id="pages">
    <div id="pages-inside">
        <div id="pages-inside-2">
            <ul class="nav superfish" id="nav2">
				<?php if (get_option('puretype_home_link') == 'on') { ?>
					<li class="page_item"><a href="<?php bloginfo('url'); ?>" class="title" title="home again woohoo">Home</a></li>
				<?php }; ?>
				<?php wp_list_pages("sort_column=".get_option('puretype_sort_pages')."&sort_order=".get_option('puretype_order_page')."&".$strdepth."&include=".$include_pages."&title_li="); ?>
            </ul>
            <div class="search_bg">
                <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                    <div>
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                        <input type="submit" id="searchsubmit" value="Search" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
<!--End pages navigation-->
<div id="wrapper2">
<div class="logo"> <span class="bluetitle"><a href="<?php bloginfo('url'); ?>"><?php echo $puretype_title_red; ?></a></span><span class="redtitle"><a href="<?php bloginfo('url'); ?>"><?php echo $puretype_title_blue; ?></a></span> </div>
<div class="slogan">
    <?php bloginfo('description'); ?>
</div>
<!--This controls the categories navigation bar-->
<div id="categories">
    <ul class="nav superfish">
		<?php wp_list_categories("orderby=$puretype_sort_cat&order=$puretype_order_cat&include=$include_cats&title_li=&".$strdepth2); ?>
    </ul>
</div>
<!--End category navigation-->
