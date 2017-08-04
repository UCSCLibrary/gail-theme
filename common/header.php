<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>
    
    <?php 
		queue_js_file('lightbox.min', 'javascripts/vendor');
   		queue_css_file('lightbox');
	?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_url('//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    echo head_css();

    echo theme_header_background();
    ?>
    <style>
        #site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: #<?php echo ($titleColor = get_theme_option('header_title_color')) ? $titleColor : "000000"; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
    </style>
    <!-- JavaScripts --> 
    <?php 
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('globals');
	queue_js_file('theme-scripts');
    echo head_js(); 
    ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
   <script src="/themes/gailtheme/javascripts/jquery.zaccordion.js"></script>
   <script src="/themes/gailtheme/javascripts/matchMedia.js"></script>
   <script src="/themes/gailtheme/javascripts/enquire.min.js"></script>
   <script src="/themes/gailtheme/javascripts/responsive-zaccordian.js"></script>
   
  

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
	<div id="page">
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-logo"><?php echo link_to_home_page(theme_logo()); ?></div>
            <nav id="primary-nav">
                <?php echo public_nav_main(array('role' => 'navigation')); ?>
            </nav>
            <div id="site-title"><p id="title-text"><?php echo link_to_home_page(); ?></p><p id="description-text"><?php echo link_to_home_page(option('description')); ?></p></div>
            
        </header>
            
        <div class="menu-button">Menu</div>
            
        <div id="wrap">
            
            <div id="content">
                <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
