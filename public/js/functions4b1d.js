jQuery( document ).ready( function( $ ) {
	
	( function() {
		'use strict';
		initNavbar( $ );
		initTitlebar( $ );
		initFixedActionButton( $ );
		initFlexSlider( $ );
		initOwlCarousel( $ );
		initFitVids( $ );
		cardMoreLinks( $ );
		searchFill( $ );
		makeTweetable( $ );
		accordion( $ );
		loveIt( $ );
		rippleEffect( $ );
		Waves.displayEffect();
		mobileMenu( $ );
		closeSideMenu( $ );
	} )( jQuery );
} );

jQuery( window ).load( function( $ ) {

	/* Preloader */
	( function( $ ) {
		'use strict';
		var element = $( '.mondo-loading-screen' );
		if ( element.length ) {
			element.velocity( 'fadeOut', { duration: 400 } );
		}
	} )( jQuery );

	( function( $ ) {
		'use strict';
		initIsotope( $ );
		if ( ! params.is_mobile ) {
			initStellar( $ );
		}
		mediaFeedHeight( $ );
		fixContentHeight( $ );
		
		enquire.register( 'screen and (min-width:992px)', {
			match: function() {
				window.requestAnimationFrame( fixFooterWidgetHeight );
			},                                             
		} );
	} )( jQuery );
} );

jQuery( window ).scroll( function() {

	( function( $ ) {
		'use strict';
		window.requestAnimationFrame( scrollBar );
		window.requestAnimationFrame( navbarShrink );
	} )( jQuery );
} );

jQuery( window ).resize( function() {

	( function( $ ) {
		'use strict';
		window.requestAnimationFrame( mediaFeedHeight );

		enquire.register( 'screen and (min-width:992px)', {
			match: function() {
				window.requestAnimationFrame( fixFooterWidgetHeight );
			},                                             
		} );
	} )( jQuery );
} );

function initNavbar( $ ) {
	'use strict';

	var menuItem = $( '.main-navigation .menu-item' );

	menuItem.mouseenter( function() {
		if ( $( this ).parent().hasClass( 'nav-list' ) ) {
			$( this ).children( '.sub-menu' ).velocity( 'stop' ).velocity(
				{
					translateY: ['0', '5px'],
					opacity: 1,
				},
				{ display: 'block', duration: 200 }
			);
		} else {
			$( this ).children( '.sub-menu' ).velocity( 'stop' ).velocity(
				{
					translateX: ['0', '-5px'],
					opacity: 1,
				},
				{ display: 'block', duration: 200 }
			);
		}
	} );
	menuItem.mouseleave( function() {
		if ( $( this ).parent().hasClass( 'nav-list' ) ) {
			$( this ).children( '.sub-menu' ).velocity( 'stop' ).velocity(
				{
					// translateY: '-5px',
					opacity: 0,
				},
				{ display: 'none', duration: 200 }
			);
		} else {
			$( this ).children( '.sub-menu' ).velocity( 'stop' ).velocity(
				{
					// translateX: '5px',
					opacity: 0,
				},
				{ display: 'none', duration: 200 }
			);
		}
	} );

	$.each( $( '.nav-list > .menu-item > span > a' ), function( index, value ) {
		if ( $( value ).attr( 'href' ) == '#' ) {
			$( this ).click( function( e ) {
				e.preventDefault();
			} );
		}
	} );
}

function navbarShrink() {
	'use strict';

	var scrolled = jQuery( window ).scrollTop();
	var element = jQuery( '.main-navigation.sticky-transparent' );

	if ( scrolled > 80 ) {
		element.removeClass( 'transparent' ).addClass( 'sticky' );
	} else {
		element.removeClass( 'sticky' ).addClass( 'transparent' );
	}
}

function initTitlebar( $ ) {
	'use strict';

	if ( ! params.is_mobile ) {
		enquire.register( 'screen and (max-width:991px)', {
			match: function() {
				var s = skrollr.init().destroy();
			}
		});
		enquire.register( 'screen and (min-width:992px)', {
			match: function() {
				var s = skrollr.init( {
					forceHeight: false,
				} );
			}
		});
	}

	var headerHeight = $( '#site-navigation' ).height();
	var titlebarFull = $( '#mondo-titlebar.full' );
	var adminbarHeight = $( '#wpadminbar' ).height();

	if ( $( 'body' ).hasClass( 'with-transparent-navigation' ) || $( 'body' ).hasClass( 'with-sticky-transparent-navigation' ) ) {
		headerHeight = 0;
	}

	titlebarFull.innerHeight( $( window ).height() - headerHeight - adminbarHeight );
}

function scrollBar() {
	'use strict';

	var bar = jQuery( '#scroll-bar' );
	var documentHeight = jQuery( document ).height();
	var windowHeight = jQuery( window ).height();
	var scrolled = jQuery( document ).scrollTop();
	var	barWidth = ( ( scrolled / ( documentHeight - windowHeight ) ) * 100 );

	bar.css( 'width', barWidth + '%' );
}

function fixFooterWidgetHeight() {
	'use strict';

	setTimeout( function() {
		var element = jQuery( '.footer-widget' );
		var maxHeight = 0;

		element.height( 'auto' );

		jQuery.each( element, function() {
			if ( jQuery( this ).height() > maxHeight ) {
				maxHeight = jQuery( this ).height();
			}
		} );

		element.height( maxHeight );
	}, 2000 );
}

function fixContentHeight( $ ) {
	'use strict';

	var content = $( '#content' );
	var adminbar = $( '#wpadminbar' );
	var titlebar = $( '#mondo-titlebar' );
	var mediaFeed = $( '#mondo-media-feed' );
	var error404 = $( '.error-404' );
	var windowHeight = $( window ).height();
	var headerHeight = $( '#masthead' ).height();
	var contentHeight = content.outerHeight();
	var footerHeight = $( '#colophon' ).height();
	var adminbarHeight = 0;
	var titlebarHeight = 0;
	var mediaFeedHeight = 0;
	var error404Height = error404.height();

	if ( adminbar.length ) {
		adminbarHeight = adminbar.height();
	}

	if ( titlebar.length ) {
		titlebarHeight = titlebar.height();
	}

	if ( mediaFeed.length ) {
		mediaFeedHeight = mediaFeed.height();
	}

	if ( ( headerHeight + contentHeight + adminbarHeight + titlebarHeight + mediaFeedHeight + footerHeight ) < windowHeight ) {
		content.css( 'height', windowHeight - headerHeight - titlebarHeight - mediaFeedHeight - footerHeight - adminbarHeight - 60 );
		error404.css( 'margin-top', ( ( content.outerHeight() - 120 - error404Height ) / 2 ) );
	}
}

function initIsotope( $ ) {
	'use strict';

	if ( $( '#masonry-container' ).length ) {
		var container = $( '#masonry-container' ).imagesLoaded( function() {
			container.isotope( {
				itemSelector: '.isotope-item',
				layoutMode: 'fitRows'
			} );

			initInfiniteScroll( $ );
			fixTwitterEmbedOnIsotope( $ );
			$( window ).unbind( '.infscr' );

			$( '#masonry-posts-load-more' ).click( function( e ) {
				e.preventDefault();
				container.infinitescroll( 'retrieve' );
			} );

			$( '#blog-filter' ).on( 'click', '.mondo-floating-action-button', function() {
				var filterValue = $( this ).attr( 'data-filter' );
			  container.isotope( { filter: filterValue } );
			} );
		} );
	}
}

function initStellar( $ ) {
	'use strict';

	enquire.register( 'screen and (max-width:991px)', {
		match: function() {
			$.stellar( 'destroy' );
		},                                             
	} );
	enquire.register( 'screen and (min-width:992px)', {
		match: function() {
			$.stellar( {
				horizontalScrolling: false,
				hideDistantElements: false
			} );
		},                                             
	} );
}

function initInfiniteScroll( $ ) {
	'use strict';

	var container = $( '#masonry-container' );

	container.infinitescroll( {
		navSelector: '.posts-navigation .nav-links',
		nextSelector: '.posts-navigation .nav-previous a',
		itemSelector: '#masonry-container > div',
		loading: {
			msg: $( '<div id="infscr-loading"><div class="mondo-bar-preloader"><div class="load-bar-container"><div class="load-bar-base base1"><div class="color first"></div><div class="color last"></div></div></div><div class="load-bar-container"><div class="load-bar-base base2"><div class="color first"></div><div class="color last"></div></div></div></div></div>' ),
			finishedMsg: 'No more pages to load.',
		}
	}, function( newElements ) {
		var newElems = $( newElements );
    newElems.imagesLoaded( function() {
			container.isotope( 'appended', $( newElements ) );
			scrollBar();
		} );
		Waves.displayEffect();
		$( '.flexslider' ).flexslider();
		loveIt( $ );
		// fixTwitterEmbedOnIsotope( $ );
	} );
}

function fixTwitterEmbedOnIsotope( $ ) {
	'use strict';

	window.twttr = function (d, s, id) {
    var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return; js = d.createElement(s); js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
	}(document, 'script', 'twitter-wjs');

	twttr.ready(function (twttr) {
    twttr.events.bind('loaded', function (event) {
    	$( '#masonry-container' ).isotope( 'layout' );
	  });
	});
}

function initFixedActionButton( $ ) {
	'use strict';

	$.fn.reverse = [].reverse;

	$( document ).on( 'mouseenter', '.mondo-fixed-action-button', function() {
		var $this = $( this );

		$this.find('ul .small').velocity(
			{ scaleY: '.4', scaleX: '.4', translateY: '40px'},
			{ duration: 0 }
		);

		var time = 0;

    $this.find( 'ul .small' ).reverse().each( function() {
      $( this ).velocity(
        { opacity: '1', scaleX: '1', scaleY: '1', translateY: '0' },
        { duration: 80, delay: time }
      );
      time += 40;
    } );
	} );

	$( document ).on( 'mouseleave', '.mondo-fixed-action-button', function() {
    var $this = $( this );

    var time = 0;

    $this.find( 'ul .small' ).velocity( 'stop', true );
    $this.find( 'ul .small' ).velocity(
      { opacity: '0', scaleX: '.4', scaleY: '.4', translateY: '40px' },
      { duration: 80 }
    );
  });
}

function initFlexSlider( $ ) {
	'use strict';

	$( '.flexslider' ).flexslider();
}

function initOwlCarousel( $ ) {
	'use strict';

	var enableFeatureArrow = false;
	if ( params.enable_feature_arrow == '1' ) {
		enableFeatureArrow = true;
	}

	$( '#mondo-featured-posts' ).owlCarousel( {
		nav: enableFeatureArrow,
		// autoplay: true,
		dots: false,
		loop: true,
		margin: 10,
		navText: [ '<span class="waves-effect waves-light waves-block"><i class="mdi mdi-chevron-left"></i></span>', '<span class="waves-effect waves-light waves-block"><i class="mdi mdi-chevron-right"></i></span>' ],
		responsive: {
			0: {
				items: 1
			},
			300: {
				items: params.feature_column
			}
		}
	} );
}

function initFitVids( $ ) {
	'use strict';

	$( '.mondo-video-wrapper' ).fitVids();
}

function cardMoreLinks( $ ) {
	'use strict';

	var toggle = $( '.more-links' );
	var element;
	var toggleClicked;

	toggle.click( function() {
		toggleClicked = $( this );
		element = $( this ).find( '.list' );

		if ( ! element.is( ':visible' ) && ! element.hasClass( 'velocity-animating' ) ) {
			element.velocity( 'slideDown', { duration: 300 } );
		} else {
			element.velocity( 'slideUp', { duration: 300 } );
		}
	} );

	$( document ).click( function( e ) {
		if ( ! $( event.target ).closest( '.list' ).length ) {
      if ( $( '.list' ).is( ':visible' ) && toggleClicked == undefined ) {
      	$( '.list' ).velocity( 'slideUp', { duration: 300 } );
      } else if ( $( '.list' ).is( ':visible' ) ) {
      	$( '.list' ).not( toggleClicked.find( '.list' ) ).velocity( 'slideUp', { duration: 300 } );
      }
      toggleClicked = null;
    }  
	} );

	$( toggle.find( '.list > li a' ) ).click( function() {
		$( this ).closest( '.list' ).velocity( 'slideUp', { duration: 300 } );
	} );

}

function makeTweetable( $ ) {
	'use strict';

	$( '.mondo-tweetable' ).click( function() {
		var url = $( this ).attr( 'data-url' );
		var text = $( this ).text();
		var link = 'https://twitter.com/share?url=' + url + '&amp;text=' + text;

		window.location = link;
	} );
}

function accordion( $ ) {
	'use strict';

	var item = $( '.accordion-item' );
	var title = item.find( '> .entry-title' );
	var content = item.find( '> .entry-content' );

	function closeAccordionItem() {
    content.slideUp( 300 );
    setTimeout( function() {
  		item.removeClass( 'open' );
  	}, 300 );
  }

  title.click( function( e ) {
  	if ( $( e.target ).parent().is( '.open' ) ) {
      closeAccordionItem();
    } else {
    	if ( ! $( this ).closest( '.mondo-accordion' ).hasClass( 'openable' ) ) {
	      closeAccordionItem();
	    }
      $( this ).next( '.entry-content' ).slideDown( 300, function() {
      	$( this ).parent().addClass( 'open' );
      } );
    }
  } );
}

function loveIt( $ ) {
	'use strict';

	var postID, clickedElement;
	var element = $( '.mondo-love-button' );

	$.each( $( '.mondo-love-button' ), function( index, value ) {
		if ( Cookies.get( 'mondo-love-' + $( value ).attr( 'data-id' ) ) == '1' ) {
			$( this ).find( '.mdi' ).removeClass( 'mdi-heart-outline' ).addClass( 'mdi-heart' );
			$( this ).addClass( 'loved' );
			$( this ).attr( 'title', params.unlove_title );
		}
	} );

	element.click( function( e ) {
		e.preventDefault();
		postID = $( this ).attr( 'data-id' );
		clickedElement = $( this );

		if ( Cookies.get( 'mondo-love-' + postID ) == '1' ) {
			clickedElement.addClass( 'loving' );
			clickedElement.find( '.mdi' ).addClass( 'animate' );
			$.ajax( {
				type: 'POST',
				url: params.admin_url,
				data: {
					action: 'mondo_unlove',
					post_id: postID,
					nonce: params.nonce
				},
				success: function( result ) {
					Cookies.remove( 'mondo-love-' + postID, { path: '/' } );
					clickedElement.find( '.love-count' ).text( result );
					clickedElement.find( '.mdi' ).removeClass( 'mdi-heart animate' ).addClass( 'mdi-heart-outline' );
					clickedElement.removeClass( 'loving loved' );
					clickedElement.attr( 'title', params.love_title );
				}
			} );
		} else {
			clickedElement.addClass( 'loving' );
			clickedElement.find( '.mdi' ).addClass( 'animate' );
			$.ajax( {
				type: 'POST',
				url: params.admin_url,
				data: {
					action: 'mondo_love',
					post_id: postID,
					nonce: params.nonce
				},
				success: function( result ) {
					Cookies.set( 'mondo-love-' + postID, '1', { expires: 365, path: '/' } );
					clickedElement.find( '.love-count' ).text( result );
					clickedElement.find( '.mdi' ).removeClass( 'mdi-heart-outline animate' ).addClass( 'mdi-heart' );
					clickedElement.removeClass( 'loving' ).addClass( 'loved' );
					clickedElement.attr( 'title', params.unlove_title );
				}
			} );
		}
	} );
}

function searchFill( $ ) {
	'use strict';

	var element = $( '#mondo-search-fill' );
	var windowWidth = $( window ).width();
	var windowHeight = $( window ).height();
	var fillDiamater = element.width();
	var fillRadius = fillDiamater / 2;
	var scaledRadius = Math.sqrt( windowWidth * windowWidth + windowHeight * windowHeight );
	var searchForm = element.next( '.search-form.large' );
	var searchClose = $( '.search-close' );

	$( '.search-btn' ).click( function() {
		if ( ! element.hasClass( 'open' ) ) {
			element.velocity(
				{ opacity: 1 },
				{ display: 'block' }
			);

			searchForm.velocity(
				{ opacity: 1 },
				{ display: 'block', delay: 400, complete: function() {
					searchForm.find( '.search-field' ).focus();
					searchClose.velocity( { opacity: 1 }, { display: 'block' } );
				} }
			);

			element.addClass( 'open' );
		}
	} );

	$( '.search-close' ).click( function( e ) {
		e.preventDefault();

		searchForm.velocity(
			{ opacity: 0 },
			{ display: 'none', duration: 100 }
		);
		
		searchClose.velocity(
			{ opacity: 0 },
			{ display: 'none', duration: 100 }
		);

		element.velocity(
			{ opacity: 0 },
			{ display: 'none' }
		);

		element.removeClass( 'open' );
	} );
}

function mobileMenu( $ ) {
	'use strict';

	var element = $( '.mobile-menu-toggle' );

	element.click( function() {
		$( this ).next( '.mobile-submenu' ).toggleClass( 'open' );
		$( this ).toggleClass( 'open' );
	} );
}

function closeSideMenu( $ ) {
	'use strict';

	var element = $( '.pushy-close' );
	var menu = $( '.pushy' );

	function close() {
		$( 'body' ).removeClass( 'pushy-active' );
		menu.removeClass( 'pushy-open' ).addClass( 'pushy-right' );
	}

	element.click( function( e ) {
		e.preventDefault();

		close();
	} );

	$( document ).keyup( function( e ) {
		if ( e.keyCode == 27 && menu.hasClass( 'pushy-open' ) ) {
			close();
		}
	} );
}

function mediaFeedHeight( $ ) {
	'use strict';

	var wrapper = jQuery( '#mondo-media-feed' );
	var container = wrapper.find( '.thumbnails' );
	var element = container.find( '.thumbnail:first-child' );
	var containerHeight = element.height() * 2;

	container.height( containerHeight );

	if ( wrapper.hasClass( 'dribbble' ) ) {
		var bigElement = container.find( '.thumbnail:nth-child(3) img' );
		bigElement.height( containerHeight - 10 );
	}
}

function rippleEffect( $ ) {
	'use strict';

	var element = $( 'a.page-numbers' );
	element.addClass( 'waves-effect waves-circle' );
}
