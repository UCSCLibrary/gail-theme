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
	<div id="all-collections">
	
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
  
	</div><!--end all-coll -->
	
<!--Start accordion -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="zaccordion/jquery.zaccordion.js"></script>
	<style type="text/css">
			/* Just some styles to set the page layout. */
			* {margin:0;padding:0;font-family:Arial, Verdana, sans-serif;}
			body {padding:20px;line-height:20px;font-size:12px;color:#000;}
			h1 {font-size:18px;margin:10px 0;line-height:1;}
			h2 {font-size:14px;margin:10px 0;line-height:1;}
			p {font-size:12px;margin:10px 0;}
			small {font-size:11px;margin:10px 0;color:#333;}
			a {font-size:12px;text-decoration:none;color:#f00;}
			p span {color:#00f;}
			#container {width:960px;margin:0 auto;padding-bottom:40px;}
			#examples {margin-top:60px;}
			pre {font-family:"Courier New", Courier, monospace;font-size:11px;margin:20px 0 100px 0;border:1px dashed #ddd;padding:10px;background:#f6f6f6;}
			pre.html {margin:10px 0;}
			.clear {clear:both;}
		</style>
		
<div id="wrapper">
				<ul id="slider">
					<li><img src="images/slide0.gif" width="100%" height="200" alt="" />
					<div>
						<strong>City View</strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor lacus sollicitudin ligula sagittis.</p>
					</div>
					</li>
					<li><img src="images/slide1.gif" width="100%" height="200" alt="" /></li>
					<li><img src="images/slide2.gif" width="100%" height="200" alt="" /></li>
					<li><img src="images/slide3.gif" width="100%" height="200" alt="" /></li>
					<li><img src="images/slide4.gif" width="100%" height="200" alt="" /></li>
				</ul>
				<div class="clear"></div>
			</div>
			
<script type="text/javascript">
		$(document).ready(function() {
	var example = $('#slider'), defaults = {
		buildComplete: function () {
			example.css('visibility', 'visible');
		},
		timeout: 5500
	};
	function build(x) {
		var opts, current;
		if (!$.isEmptyObject(example.data())) { /* If an zAccordion is found, rebuild it with new settings. */
			example.css('visibility', 'hidden');
			current = example.data('current');
			opts = $.extend({
				startingSlide: current
			}, defaults, x);
			example.zAccordion('destroy', {
				removeStyleAttr: true,
				removeClasses: true,
				destroyComplete: {
					afterDestroy: function() {
						try {
							console.log('zAccordion destroyed! Attempting to rebuild...');
						} catch (e) {}
					},
					rebuild: opts
				}
			});
		} else { /* If no zAccordion is found, build one from scratch. */
			example.css('visibility', 'hidden');
			opts = $.extend(defaults, x);
			example.zAccordion(opts);
		}
	}
	/* A unique Media Query is registered for each screen size. */
	enquire.register('screen and (min-width: 960px)', { /* Standard screen sizes and a default build for browsers that are unsupported. */
		match : function () {
			build({
				slideWidth: 540,
				width: 860,
				height: 200
			});
		} /* The *true* value below means this media query will fire by default. */
	}, true).register('screen and (min-width: 768px) and (max-width: 959px)', {
		match : function () {
			build({
				slideWidth: 420,
				width: 680,
				height: 200
			});
		}
	}).register('screen and (min-width: 480px) and (max-width: 767px)', {
		match : function () {
			build({
				slideWidth: 220,
				width: 380,
				height: 200
			});
		}
	}).register('screen and (max-width: 479px)', {
		match : function () {
			if (!$.isEmptyObject(example.data())) {
				example.zAccordion('destroy', {
					removeStyleAttr: true,
					removeClasses: true,
					destroyComplete: {
						afterDestroy: function() {
							try {
								console.log('zAccordion destroyed!');
							} catch (e) {}
						}
					}
				});
			}
		}
	}).listen(5);
});
		</script>

				<script src="https://raw.github.com/paulirish/matchMedia.js/master/matchMedia.js"></script>
				<script src="https://raw.github.com/WickyNilliams/enquire.js/master/dist/enquire.min.js"></script>

<!--End accordion -->
       <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->
<?php echo foot(); ?>
