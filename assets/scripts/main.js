/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.


/************************************************

  INFINITE CAROUSEL

************************************************/

//jQuery encapsulation
(function($){
  
  //Document ready
  $(document).ready(function() {
      

    /*--- Poisition Slides ---*/
    
    $('.infinite-carousel').on( 'position-slides', function() {

      var $infiniteCarousel = $(this),
        $viewport = $infiniteCarousel.find('.carousel-viewport'),
        $slides = $infiniteCarousel.find('.slide'),
        $currentSlide = $slides.filter('.slide-current'),
        slideWidth = $slides.eq(0).outerWidth();
      
      //Current slide's index
      var currentSlideIndex = $slides.index( $currentSlide );
      
      //Select slides
      var slides = new Array(
        cycleSelection( currentSlideIndex, -2, $slides ),
        cycleSelection( currentSlideIndex, -1, $slides ),
        cycleSelection( currentSlideIndex, 0, $slides ),
        cycleSelection( currentSlideIndex, 1, $slides ),
        cycleSelection( currentSlideIndex, 2, $slides )
      );

      //Position slides offscreen
      $slides.each(function( i ){

        var $slide = $(this);

                
        //If it's the further right slide -> position off-right (otherwise default to off-left)
        if ( $slide.data('slide-index') === 2 ) {

          //Position off-right
          $slide
            .data('slide-position', $viewport.width())
            .data('slide-index', null)
            .data('slide-offscreen', 'right')
            .trigger('slide-transition');

        } else {

          //If the slide is offscreen, don't animate it's repositioning
          if ( $slide.data('slide-offscreen') === 'right' ) {
  
            //Disable slide animation
            $slide.removeClass('slide-enable-animation');
            
            //Position off-left
            $slide
              .data('slide-position', slideWidth * -1)
              .data('slide-index', null)
              .data('slide-offscreen', 'left')
              .trigger('slide-transition');
            
          } else {

            //Position off-left
            $slide
              .data('slide-position', slideWidth * -1)
              .data('slide-index', null)
              .data('slide-offscreen', 'left')
              .trigger('slide-transition');
  
            //Re-enable  slide animation
            $slide.addClass('slide-enable-animation');
            
          }
        
        }
        
        

      });

      //Position the visible slides onscreen
      for (var i = 0; i < slides.length; i++ ) {

        if ( i-2 === 2 && $infiniteCarousel.data('carousel-direction') === 'next' ) {
          
          //Disable animation and position slide off-right
          slides[i]
            .removeClass('slide-enable-animation')
            .data('slide-position', $viewport.width())
            .trigger('slide-transition');

          //Re-enable animation
          slides[i]
            .data('slide-position', ( $viewport.width() * 0.5 ) - ( slideWidth * 0.5 )  + (slideWidth * ( i-2 ) ) )
            .trigger('slide-transition')
            .addClass('slide-enable-animation')
            .data( 'slide-index', i-2 )
            .data('slide-offscreen', null);
            
        } else {
      
          //Position slide
          slides[i]
            .data('slide-position', ( $viewport.width() * 0.5 ) - ( slideWidth * 0.5 )  + (slideWidth * ( i-2 ) ) ) 
            .trigger('slide-transition')
            .data( 'slide-index', i-2 )
            .data('slide-offscreen', null);
          
        }
      }
      
    });
    
    /*--- Setup Infinite Carousel ---*/
    
    $('.infinite-carousel').each(function() {

      var $infiniteCarousel = $(this),
        $slides = $infiniteCarousel.find('.slide');
      
      //Check whether CSS transitions are supported
      if ( $('html').hasClass('csstransitions') ) {
        $infiniteCarousel.data('carousel-animation-type', 'css3');
      } else {
        $infiniteCarousel.data('carousel-animation-type', 'jquery');        
      }
      
      //Basic CSS for slides
      $slides.css({
        position: 'absolute',
        top: 0
      });
            
      //Capture clicks on controls
      $('.carousel-control-previous, .carousel-control-next').on('click', function( e ){
      
        /**console.log(
          'Event: click'
        + '\n\tTarget: .carousel-control-previous OR .carousel-control-next'
        );
        /**/
        
        e.preventDefault();
        
        var $newCurrentSlide,
          $currentSlide  = $slides.filter('.slide-current'),
          currentSlideIndex = $slides.index( $currentSlide );
        
        //Previous
        if ( $(this).hasClass('carousel-control-previous') ) {

          //Select previous slide
          $newCurrentSlide = cycleSelection( currentSlideIndex, -1, $slides);
          
          //Store change direction
          $infiniteCarousel.data('carousel-direction','previous');
          
        }
        
        //Next
        if ( $(this).hasClass('carousel-control-next') ) {

          //Select next slide
          $newCurrentSlide = cycleSelection( currentSlideIndex, 1, $slides);
          
          //Store change direction
          $infiniteCarousel.data('carousel-direction','next');
          
        }
        
        //Remove 'slide-current' from all slides
        $slides.removeClass('slide-current');
        
        //Add 'slide-current' to new slide
        $newCurrentSlide.addClass('slide-current');
        
        
        //Reposition Slides
        $infiniteCarousel.trigger('position-slides');

        
      });
      
      /*--- Slide Transitions ---*/
      $slides.on('slide-transition', function(){
      
        /**console.log( 'Event: slide-transition' );/**/
        
        var $slide = $(this);

        //Do CSS3 transition if supported, otherwise animate via jQuery
        if ( $infiniteCarousel.data('carousel-animation-type') === 'css3' ) {
          
          /**console.log('Animate via CSS3');/**/
          
          //CSS3 transition
          $slide.css({
            left: $slide.data('slide-position')
          });
          
        } else {
          
          /**console.log('Animate via jQuery');/**/
          
          if ( $slide.hasClass('slide-enable-animation') ) {
          
            //Animated via jQuery
            $slide
            .stop()
            .animate({
              left: $slide.data('slide-position')
            }, 500);
          
          } else {

            //Animated via jQuery
            $slide
            .stop()
            .css({
              left: $slide.data('slide-position')
            });
            
          }
        } 
        
        
      });
      
      /*-- Window Resize ---*/
      $(window).on('resize', function(){
        
        $infiniteCarousel.trigger('position-slides');
        
      });
      
      /*--- Position Slides ---*/
      $infiniteCarousel.trigger('position-slides');

    });
    
    function cycleSelection( currentIndex, relativeIndex, $selection ) {
    
      var selectIndex = currentIndex + relativeIndex,
        totalItemsInSelection = $selection.size();
      
      
      //Selected exceeds the total items
      if ( selectIndex > totalItemsInSelection -1 ) {
        selectIndex = (( currentIndex + relativeIndex ) % totalItemsInSelection);
      }

      //Selected is lower than zero
      if ( selectIndex < 0 ) {
        
        //Add the negative remainder to the total
        selectIndex = totalItemsInSelection + (( currentIndex + relativeIndex ) % totalItemsInSelection);

      }

      /*console.log(
        'cycleSelection()\n'
      + '\tCurrent-index:   ' + currentIndex + '\n'
      + '\tRelative-index:  ' + relativeIndex + '\n'
      + '\tSelection Total: ' + $selection.size() + '\n'
      + '\tSelected Index:  ' + selectIndex
      );
      /**/
      
      return $selection.eq( selectIndex );
      
      
    }
  
  });

// Smooth scroll for in page links - http://wibblystuff.blogspot.in/2014/04/in-page-smooth-scroll-using-css3.html
// Improvements from - http://codepen.io/kayhadrin/pen/KbalA

$(function() {
  var $window = $(window), $document = $(document),
    transitionSupported = typeof document.body.style.transitionProperty === "string", // detect CSS transition support
    scrollTime = 1; // scroll time in seconds

  $(document).on("click", "a[href*=#]:not([href=#])", function(e) {
    var target, avail, scroll, deltaScroll;
    
    if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
      target = $(this.hash);
      target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

      if (target.length) {
        avail = $document.height() - $window.height();

        if (avail > 0) {
          scroll = target.offset().top;
          
          if (scroll > avail) {
            scroll = avail;
          }
        } else {
          scroll = 0;
        }

        deltaScroll = $window.scrollTop() - scroll;

        // if we don't have to scroll because we're already at the right scrolling level,
        if (!deltaScroll) {
          return; // do nothing
        }

        e.preventDefault();
        
        if (transitionSupported) {
          $("html").css({
            "margin-top": deltaScroll + "px",
            "transition": scrollTime + "s ease-in-out"
          }).data("transitioning", scroll);
        } else {
          $("html, body").stop(true, true) // stop potential other jQuery animation (assuming we're the only one doing it)
          .animate({
            scrollTop: scroll + "px"
          }, scrollTime * 1000);
          
          return;
        }
      }
    }
  });

  if (transitionSupported) {
    $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function(e) {
      var $this = $(this),
        scroll = $this.data("transitioning");
      
      if (e.target === e.currentTarget && scroll) {
        $this.removeAttr("style").removeData("transitioning");
        
        $("html, body").scrollTop(scroll);
      }
    });
  }
});

var bottomPos = $(window).height();
$(window).scroll(function() {
  if ($(this).scrollTop() > bottomPos) {
    $('.scroll-top').addClass("sticky");
  } else {
    $('.scroll-top').removeClass("sticky");
  };
});

$('#back-to-top').each(function() {
  $(this).click(function() {
    $('html,body').animate({scrollTop: 0 }, 'slow');
    return false;
  })
});

})(jQuery);