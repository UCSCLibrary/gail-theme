jQuery(document).ready(function() {
	
/* Modify item pages */

	jQuery('body.item #collection').addClass('hidden');
	jQuery('body.item .element-set h2').addClass('hidden');
	jQuery('body.item #itemfiles h3').addClass('hidden');
	jQuery('body.item #item-tags').insertAfter('#content h1');
	jQuery('body.item #item-citation').insertAfter('#content h1');
	jQuery('body.item #itemfiles').insertAfter('#content h1');
	jQuery('body.item div.element-set').addClass('hidden');
    jQuery('<p class="more">Show Details</p>').insertBefore('body.item div.element-set');
    jQuery('p.more').toggle( 
    	function() { 
        	jQuery('div.element-set').slideDown(); 
        	jQuery(this).html('Hide Details');
    	}, 
    	function() { 
        	jQuery('div.element-set').slideUp(); 
        	jQuery(this).html('Show Details');
    	} 
  	);
	
/* Add 'last' class to primary menu */

   jQuery("#primary-nav ul li:last-child").addClass("last");
   
/* Add body class to gail photos pages */

	var path = jQuery(location).attr('href');
	if (path.indexOf('view=photos') >= 0){
		jQuery('body').addClass('gailphotos');
		
/* modify gail photos h1 */
		
		var pageTitle = jQuery('#item-filters li.tags').html().substring(6,30);
		jQuery('#content h1').html(pageTitle);
		jQuery('#item-filters').addClass('hidden');
		
/* add lightbox functionality to gail photos photos */

		var dataLightbox = jQuery('#content h1').text();
		jQuery ('.hentry').each(function() {
		  var link = jQuery('h2 a',this).attr('href');
		  var title = jQuery('h2 a',this).text();
		  var moreInfoLink = '  <a href="'+link+'">(details)</a>';
		  var recordLink = '  <a href="'+link.replace("show","record")+'">Share your story</a>';
//			var dataTitle = title + moreInfoLink;
			var dataTitle = title + recordLink;
//			var dataTitle = jQuery('h2',this).html();
			var lbUrl = jQuery('.item-img a img',this).attr('src');
			lbUrl = lbUrl.replace('/square_thumbnails/', '/original/');
			lbUrl = lbUrl.replace('.jpg', '.png');
			jQuery('.item-img a',this).addClass('exhibit-item-link');
			jQuery('.item-img a',this).attr('data-title', dataTitle);
			jQuery('.item-img a',this).attr('data-lightbox', dataLightbox);
			jQuery('.item-img a',this).attr('href', lbUrl);
		});
		
	};

});
