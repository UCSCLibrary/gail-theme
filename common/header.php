<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"  />
    <?php if ($description = option('description')): ?>
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

    <!-- Le styles -->

    <!--
    <?php queue_css_file('bootstrap.min','all',false,'bootstrap-dist/3.2.0/css'); ?>-->
    <!-- Load in carousel css, javascript in footer. -->
    <?php queue_css_file('manymoveonecarousel'); ?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php echo head_css(); ?>

    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php queue_js_file('jquery'); ?>
    <?php echo head_js(); ?>

</head>

<style>
  body {
        padding-top:0px;
        background-image:none;
      }
      .sidebar-nav {
        xpadding: 9px 0;
      }
</style>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass, 'data-spy' => 'scroll', 'data-target' => '.subnav', 'data-offset' => '50')); ?>
    <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

<div class="navbar navbar-inverse navbar-fixed-top" style="position:relative;margin-bottom:0px;border-bottom-width:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">
        <img src="<?php echo img('logoalpha.png', 'assets/img');?>" class="img-responsive" style="height:130%;width:auto;background-color:transparent;">
      </a>
      <a class="navbar-brand" href="/">
        the gail project
      </a>
    </div>
    <div class="collapse navbar-collapse" id="nav-navbar-collapse">
      <ul class="nav navbar-nav">
         <!--the Active class denotes the "selected" page -->
        <li class="active">
          <?php echo bootstrap_nav_item('Home','/'); ?>
        </li>
      </ul>

      <!--THIS MUST REMAIN COMMENTED OUT, NOT DELETED, NOT ACTIVE, FOR SOME REASON IT MUST REMAIN COMMENTED OUT-->
      <!--<?php echo public_nav_main()->setUlClass('nav navbar-nav'); ?>-->
      <?php echo preg_replace( "/(?<!\/)<ul(?!.*?nav)/", '<ul class="dropdown-menu"', public_nav_main() );?>


      <ul class="nav navbar-nav navbar-right">
        <div id="language-chooser">
            <a href="<?php 
                     $server = $_SERVER['REQUEST_URI'];
                     $lang=LocalePickerPlugin::GetLanguage();
                     $otherlang = ($lang=='ja') ? 'en' : 'ja';
                     //if there is a get tag to the current language
                     if((strpos($server,"lang=".$lang))){
                         echo str_replace("lang=$lang","lang=$otherlang",$server);
                     }elseif(strpos($server,"lang=")){
                         echo $server;
                     }else{
                         echo($server);
                         echo (strpos($server, '?') ? '&lang=' : '?lang=');                      
                         echo($otherlang);
                     }
                     ?>">
              <?php 
              echo(($lang == 'ja') ? 'Switch to English' : '日本語');
              ?>
            </a>
          </div>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- end common/header.php -->
