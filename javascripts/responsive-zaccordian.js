// this code is from http://www.eppersonco.com/slideshow/responsive.html	
jQuery(document).ready(function() {
	var example = jQuery('#example10'), defaults = {
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
				slideWidth: 600,
				width: 800,
				height: 524
			});
		} /* The *true* value below means this media query will fire by default. */
	}, true).register('screen and (min-width: 768px) and (max-width: 959px)', {
		match : function () {
			build({
				slideWidth: 420,
				width: 680,
				height: 400
			});
		}
	}).register('screen and (min-width: 480px) and (max-width: 767px)', {
		match : function () {
			build({
				slideWidth: 220,
				width: 380,
				height: 300
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
	})
});