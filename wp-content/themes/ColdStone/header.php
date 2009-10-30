<?php global $coldstone_color, $coldstone_featured_number, $coldstone_homepage_posts, $coldstone_banner_url_one, $coldstone_banner_url_two, $coldstone_banner_image_one, $coldstone_banner_image_two, $coldstone_postinfo_posts, $coldstone_postinfo_bar, $coldstone_catnum_posts; 
	if (get_option('coldstone_menupages') <> '') $include_pages = implode(",", get_option('coldstone_menupages'));
	$include_cats = implode(",", get_option('coldstone_menucats'));
	$strdepth = '';
	if (get_option('coldstone_enable_dropdowns') == 'on') $strdepth = "depth=".get_option('coldstone_tiers_shown_pages');
	if ($strdepth == '') $strdepth = "depth=1";
	
	$strdepth2 = '';
	if (get_option('coldstone_enable_dropdowns_categories') == 'on') $strdepth2 = "depth=".get_option('coldstone_tiers_shown_categories');
	if ($strdepth2 == '') $strdepth2 = "depth=1";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<meta name="keywords" content="YOUR KEYWORDS HERE" />
<meta name="description" content="YOUR SITE DESCRIPTION HERE" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-<?php echo $coldstone_color; ?>.css" type="text/css" media="screen" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/pngfix.js"></script>
<![endif]-->
<!--[if IE 8]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie8style.css" />
<![endif]-->
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- Menu Javascript -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/visionary.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/superfish.js"></script>
<script type="text/javascript">
jQuery(function(){
jQuery('ul.superfish').superfish();
<?php if (get_option('coldstone_disable_toptier') == 'on') echo('jQuery("ul.nav > li > a > span.sf-sub-indicator").parent().attr("href","#");'); ?>
});
</script>
<!-- /MENU -->

<?php if (get_option('coldstone_child_css') == 'on') { //Enable child stylesheet  ?>
<link rel="stylesheet" href="<?php echo(get_option('coldstone_child_cssurl')); ?>" type="text/css" media="screen" />
<?php }; ?>

<?php if (get_option('coldstone_custom_colors') == 'on') { //Enable custom colors  ?>
<style type="text/css">
	body { color: #<?php echo(get_option('coldstone_color_mainfont')); ?>; }
	body { background-color: #<?php echo(get_option('coldstone_color_bgcolor')); ?>; }
	a:link, a:visited { color: #<?php echo(get_option('coldstone_color_mainlink')); ?>; }
	.tnavinner ul li a { color: #<?php echo(get_option('coldstone_color_pagelink')); ?>; }
	.bnavinner ul li a { color: #<?php echo(get_option('coldstone_color_catslink')); ?>; }
	.post-info { color: #<?php echo(get_option('coldstone_color_postinfo')); ?>; }
	.feat_post h2 a { color:#<?php echo(get_option('coldstone_color_featheader')); ?>; }
	.feat_post { color:#<?php echo(get_option('coldstone_color_feattext')); ?>; }
	.side_roll h3 { color:#<?php echo(get_option('coldstone_color_sidebar_titles')); ?>; }
	.sub_article h3 a, .subpost h3 a { color:#<?php echo(get_option('coldstone_color_headings_title')); ?>; }
	.sub_article h3 a, .subpost h3 a { color:#<?php echo(get_option('coldstone_color_headingsbg_title')); ?>; }
	.single_post h2 a, .single_post h1 a { color:#<?php echo(get_option('coldstone_color_heading')); ?>; }
</style>
<?php }; ?>

<?php if (get_option('coldstone_integration_head') <> '' && get_option('coldstone_integrate_header_enable') == 'on') echo(get_option('coldstone_integration_head')); ?>
</head>
<body>
<!-- Start of the page -->
<div class="htop"></div>
<div id="wrapp_">
<div class="logo"> <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-<?php echo $coldstone_color; ?>.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>" /></a> </div>
<!-- /logo -->
<!-- TOP LEVEL NAVIGATION -->
			<?php if (get_option('coldstone_menupages') <> '') $include_pages = implode(",", get_option('coldstone_menupages')); 
				  $include_cats = implode(",", get_option('coldstone_menucats'));
				  $strdepth = '';
				  if (get_option('coldstone_categories_empty') == 'on') $hide = '1';
				  if (get_option('coldstone_categories_empty') == 'false') $hide = '0';
				  if (get_option('coldstone_enable_dropdowns') == 'on') $strdepth = "depth=".get_option('coldstone_tiers_shown_pages');
				  if ($strdepth == '') $strdepth = "depth=1";
				  $strdepth2 = '';
				  if (get_option('coldstone_enable_dropdowns_categories') == 'on') $strdepth2 = "depth=".get_option('coldstone_tiers_shown_categories');
				  if ($strdepth2 == '') $strdepth2 = "depth=1"; ?>
<div class="tnavwrap">
    <div class="tnavileft"></div>
    <div class="tnavinner">
        <div class="menu">
            <ul class="nav superfish">
						<?php if (get_option('coldstone_swap_navbar') == 'false') { ?>
                <?php if (get_option('coldstone_home_link') == 'on') { ?>
					<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
                <?php }; ?>
					<?php wp_list_pages("sort_column=".get_option('coldstone_sort_pages')."&sort_order=".get_option('coldstone_order_page')."&".$strdepth."&include=".$include_pages."&title_li="); ?>
				<?php } else { ?>
					<?php wp_list_categories("orderby=".get_option('coldstone_sort_cat')."&order=".get_option('coldstone_order_cat')."&".$strdepth."&include=".$include_cats."&hide_empty=".$hide."&title_li="); ?>
				<?php } ?>            </ul>
        </div>
    </div>
    <!-- /tnavinner -->
    <div class="tnavend"></div>
</div>
<!-- /tnavwrap -->
<!-- MAIN LEVEL NAVIGATION -->
<div class="bnavwrap">
    <div class="bnavileft"></div>
    <div class="bnavinner">
        <ul class="nav superfish" id="nav2">
        <?php if (get_option('coldstone_search') == 'on') { ?>     
            <li class="searchli">
                <div class="search">
                    <?php include("searchform.php"); ?>
                </div>
                <!-- /search -->
            </li>
            <?php }; ?>
				<?php if (get_option('coldstone_swap_navbar') == 'false') { ?>
					<?php wp_list_categories("orderby=".get_option('coldstone_sort_cat')."&order=".get_option('coldstone_order_cat')."&".$strdepth2."&include=".$include_cats."&hide_empty=".$hide."&title_li="); ?>
				<?php } else { ?>
                	<?php if (get_option('coldstone_home_link') == 'on') { ?>
					<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <?php }; ?>
					<?php wp_list_pages("sort_column=".get_option('coldstone_sort_pages')."&sort_order=".get_option('coldstone_order_page')."&".$strdepth."&include=".$include_pages."&title_li="); ?>
				<?php } ?>
        </ul>
    </div>
    <!-- /bnavinner -->
    <div class="bnavend"></div>
    <div style="clear: both;"></div>
</div>
<!-- /bnavwrap -->
