<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
<div id="primary">
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
    <?php endif; ?>
    <?php if (get_theme_option('Display Featured Item') == 1): ?>
    <!-- Featured Item -->
    <div id="featured-item">
        <h2><?php echo __('Featured Item'); ?></h2>
        <?php echo random_featured_items(1); ?>
    </div><!--end featured-item-->	
    <?php endif; ?>
    <?php if (get_theme_option('Display Featured Collection')): ?>
    <!-- Featured Collection -->
    <div id="featured-collection">
        <h2><?php echo __('Featured Collection'); ?></h2>
        <?php echo random_featured_collection(); ?>
    </div><!-- end featured collection -->
    <?php endif; ?>	
    <?php if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
    <?php endif; ?>

</div><!-- end primary -->

<div id="secondary">
	<!--<div id="all-collections">
	
<?php
    $collections = get_recent_collections(5);
    set_loop_records('collections', $collections);
    foreach (loop('collections') as $collection):
      //print_r ($collection);?>
      <p>
     <?php echo link_to_collection();?>
     </p>
     <?php
  endforeach; ?>	
  
	</div> --><!--end all-coll --> 
	
<!--Start accordion -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
		
<div id="wrapper">
				<ul class="mobilemenu">
					<li><a href="/daily-life--work">Daily Life & Work</a></li>
					<li><a href="/heritage">Heritage</a></li>
					<li><a href="/ocean-life">Ocean Life</a></li>
					<li><a href="/people">People</a></li>
					<li><a href="/landscapes">Landscapes</a></li>
				</ul>
				<ul id="example10">
				<li>
					<a href="<?php echo public_url("daily-life--work"); ?>">
						<img src="/themes/gailtheme/zaccordian-slides/slide0.jpg" alt="Daily life and Work" /></a>
					<div class="slider-bg"></div>
					<div class="slider-info">
						<strong>Daily Life &amp; Work</strong>
						<p class="slider-text"></p>
					</div>
				</li>
				<li>
					<a href="<?php echo public_url("heritage"); ?>">
						<img src="/themes/gailtheme/zaccordian-slides/slide1.jpg" alt="Heritage" /></a>
					<div class="slider-bg"></div>
					<div class="slider-info">
						<strong>Heritage</strong>
						<p class="slider-text"></p>
					</div>
				</li>
				<li>
					<a href="<?php echo public_url("ocean-life"); ?>">
						<img src="/themes/gailtheme/zaccordian-slides/slide2.jpg" alt="Ocean Life" /></a>
					<div class="slider-bg"></div>
					<div class="slider-info">
						<strong>Ocean Life</strong>
						<p class="slider-text"></p>
					</div>
				</li>
				<li>
					<a href="<?php echo public_url("people"); ?>">
						<img src="/themes/gailtheme/zaccordian-slides/slide3.jpg" alt="People" /></a>
					<div class="slider-bg"></div>
					<div class="slider-info">
						<strong>People</strong>
						<p class="slider-text"></p>
					</div>
				</li>
				<li>
					<a href="<?php echo public_url("landscapes"); ?>">
						<img src="/themes/gailtheme/zaccordian-slides/slide4.jpg" alt="Landscapes" /></a>
					<div class="slider-bg"></div>
					<div class="slider-info">
						<strong>Landscapes</strong>
						<p class="slider-text"></p>
					</div>
				</li>
			</ul>
				<div class="clear"></div>
			</div>
	

<!--End accordion -->
       <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->
<?php echo foot(); ?>
