/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.2
 */
 
	var $j = jQuery.noConflict();

	function init_maps(){
		//We then run this function only once per page load. It places out map back in the document flow but hides it before it starts to toggle its height.
		$j(".map-tab").one("click", function(){
			$j("#map-canvas").hide(); 
			$j("#map-canvas").css('visibility','inherit');
			$j("#map-canvas").css('position','relative');
		});

		//And now we toggle away nicely
		$j('.map-tab').click(function(){
			$j("#map-canvas").slideToggle(400);
		});
		$j(window).resize(function(){ 
			google.maps.event.trigger(map, "resize"); 
		}); 
	}
	
	$j(document).ready(function(){
		init_maps();
		
		$j('a.addWishListEvent, section.blog-featured a').click(function() { 
			fbq('track', 'AddToWishlist'); 
		});
		
		$j('a.buy-tickets-artist, a.buy-tickets-teaser, a.btn-buy, li.item-115 a, li.item-144 a').click(function() { 
			fbq('track', 'AddToCart'); 
		});
	});