(function($) {
    
	var img = $('img'),
		h2 = $('h2');
	/*	h3 = $('h3');
		h4 = $('h4');*/

	// Simple Tween
	TweenLite.from(img, 1, {x: -200});
	TweenLite.to(h2, 1, {autoAlpha: 0, delay: 1});
	/*TweenLite.to(h3, 1, {autoAlpha: 0, delay: 2});
	TweenLite.to(h4, 1, {autoAlpha: 0, delay: 3});*/

})(jQuery);