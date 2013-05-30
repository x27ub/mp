$(document).ready(function(){
	
$('ul.tabs li a').click(function(event) {
	var i = $('ul.tabs li a').index(this);
	$('ul.tabs li a').removeClass('active');
	$('ul.tabs-content li').removeClass('active');
	$(this).addClass('active');
	$('ul.tabs-content li').eq(i).addClass('active');
	return false;
	});
});


/**
 * Skeleton V1.1
 * Copyright 2011, Dave Gamache
 * www.getskeleton.com
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 8/17/2011
 */
/*
(function ($) {
  // hash change handler
  function hashchange () {
    var hash = window.location.hash
      , el = $('ul.tabs [href*="' + hash + '"]')
      , content = $(hash)

    if (el.length && !el.hasClass('active') && content.length) {
      el.closest('.tabs').find('.active').removeClass('active');
      el.addClass('active');
      content.show().addClass('active').siblings().hide().removeClass('active');
    }
  }

  // listen on event and fire right away
  $(window).on('hashchange.skeleton', hashchange);
  hashchange();
  $(hashchange);
})(jQuery);
*/
