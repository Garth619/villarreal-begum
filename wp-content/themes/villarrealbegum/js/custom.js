// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'

jQuery(document).ready(function($){
	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);



		



     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		

    // createWaypoint('section_one', '.sticky_header', 'visible', -300, null, true);
    
   


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */


/*
$('.sec_three_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:true,
	prevArrow:".arrow_left",
	nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1450,
      settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
     }
   },
   {
      breakpoint: 1100,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      dots:true,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:true,
     }
   }
	]
 });
 
*/



$('.sec_two_slider').slick({
  infinite: true,
  mobileFirst:true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	//prevArrow:".arrow_left",
	//nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 740,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1100,
      settings: "unslick"
   }
	]
 });
 
 
 
 
 
 $('.sec_six_slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2,
	arrows:false,
	//prevArrow:".arrow_left",
	//nextArrow:".arrow_right",
	responsive: [
    {
      breakpoint: 1880,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight:true,
     }
   }
	]
 });
 
 
 
// macy http://macyjs.com/

/*
var macyInstance = Macy({
  container: '.testimonials_wrapper',
	columns: 3,
	margin:49,
	breakAt: {
        1450: 2,
        1066:1
  }
});
*/


	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");


// not found go back button



function goBack() {
 	window.history.back();
}
	
$('span.go_back').on('click', function(e) {
	
	 goBack();
  
});



// current sidebar




var pgurl = window.location.href;
	
	$(".sidebar_box ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("active");
	
	})




// nav

	$('.menu_wrapper').on('click', function(e) {
		
		$('.nav_wrapper').slideDown();
	  
	});
	
	$('.mobile_close, .mobile_back').on('click', function(e) {
		
		$('.nav_wrapper').slideUp();
	  
	});
	
	function navDesktop() {
		
		$('.nav_wrapper').addClass('nav_desktop');
		
		//$('.nav_inner li.menu-item-has-children > a').next('ul.sub-menu').removeClass('open');
		
		$('.nav_wrapper').removeClass('nav_tablet');
		
	}
	
	
	function navTablet() {
		
		$('.nav_wrapper').removeClass('nav_desktop');
		
		$('.nav_wrapper').addClass('nav_tablet');
		
	}
	

	function tabletClick() {
		
		$(this).next('ul.sub-menu').slideToggle(300);
		
		$(this).parent().toggleClass('open');
		
	}
	
	
	if ($(window).width() > 1066) {
			
		navDesktop();
		
	}	
	
	
	if ($(window).width() <= 1066) {
			
		navTablet();
		
		$('.nav_wrapper li.menu-item-has-children > a').off().on('click', tabletClick);
				
	}
	
	
	// resize window width and fire functions
	
	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 1066) {
			
			navDesktop();
			
			// off
			
			$('.nav_wrapper li.menu-item-has-children > a').off('click', tabletClick);			
		
		}	
		
		if ($(window).width() <= 1066) {
			
			navTablet();
			
			// off
			
		 $('.nav_wrapper li.menu-item-has-children > a').off().on('click', tabletClick);
					
		}
		
	}, 100)); 

	

// parallax homepage


function paraWidth() {
    
  //if ($(window).width() >= 1066) {
        
      window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          window.oRequestAnimationFrame      ||
          window.msRequestAnimationFrame     ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

(function(win, d) {

  var $ = d.querySelector.bind(d);
	
	var paraOne = $('#para_one');
 
  var paraTwo = $('#para_two');
  var paraThree = $('#para_three');
  
  var paraFour = $('#para_four');


  

  var ticking = false;
  var lastScrollY = 0;

  function onResize () {
    updateElements(win.pageYOffset);
  }

  function onScroll (evt) {

    if(!ticking) {
      ticking = true;
      requestAnimFrame(updateElements);
      lastScrollY = win.pageYOffset;
    }
  }

  function updateElements () {

    var relativeY = lastScrollY / 1500;
    
    prefix(paraOne.style, "Transform", "translate3d(0px," +
      pos(0, -300, relativeY, 0) + 'px, 0)');

		prefix(paraTwo.style, "Transform", "translate3d(0px," +
      pos(0, 800, relativeY, 0) + 'px, 0)');

    prefix(paraThree.style, "Transform", "translate3d(0px," +
      pos(0, 300, relativeY, 0) + 'px, 0)');
      
    prefix(paraFour.style, "Transform", "translate3d(0px," +
      pos(0, 500, relativeY, 0) + 'px, 0)');


    ticking = false;
  }

  function pos(base, range, relY, offset) {
    return base + limit(0, 1, relY - offset) * range;
  }

  function prefix(obj, prop, value) {
    var prefs = ['webkit', 'Moz', 'o', 'ms'];
    for (var pref in prefs) {
      obj[prefs[pref] + prop] = value;
    }
  }

  function limit(min, max, value) {
    return Math.max(min, Math.min(max, value));
  }

  (function() {

    updateElements(win.pageYOffset);

    
   paraTwo.classList.add('force-show');
   paraThree.classList.add('force-show');

  })();

  //win.addEventListener('resize', onResize, false);
  win.addEventListener('scroll', onScroll, false);

})(window, document);
        	   		
    		
    } 
    
//};



if($('#section_one').length > 0 ){

	paraWidth();

}


// internal_banner 

if($('.internal_banner').length > 0 ){

	paraWidth();

}


 
	
	
	// resize span tags on section four mobile
	
	
	function desktopText() {
		
		$( "span.sec_four_largeheader" ).replaceWith( "<span class='sec_four_largeheader'><span>we believe in treating all</span> <span>of our clients like family</span></span>" );
		
		}
	
	
	function mobileText() {
		
		$( "span.sec_four_largeheader" ).replaceWith( "<span class='sec_four_largeheader'><span>we believe in</span> <span>treating all of our</span> <span>clients like family</span>" );
		
	}
	
	
	if ($(window).width() > 767) {
		
		desktopText();
		
	}
	
	
	if ($(window).width() <= 767) {
		
		mobileText();
		
	}
	
	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 767) {
			
				desktopText();
		
		}	
		
		if ($(window).width() <= 767) {
			
			mobileText();
					
		}
		
	}, 100)); 
	
	
	
	
	// case results homepage title
	
	
	  
		$('.sec_eight_results_list ul li').on('click', function(e) {
			
			var dataFilter = $(this).data('results');
	  	
	  	$('.sec_eight_slide').removeClass('fadein');
	  	
	  	$('.sec_eight_results_list ul li').removeClass('current');
	  	
	  	$(this).addClass('current');
	  	
	  	$('.'+dataFilter).addClass('fadein');
			
		});
		
		
		
		function desktopresultsText() {
		
		$( "span.cr_title" ).replaceWith( "<span class='cr_title'><span>Case</span> <span>results</span></span>" );
		
		}
	
	
	function mobileresultsText() {
		
		$( "span.cr_title" ).replaceWith( "<span class='cr_title'><span>Case results</span></span>" );
		
	}
	
	
	if ($(window).width() > 1150) {
		
		desktopresultsText();
		
	}
	
	
	if ($(window).width() <= 1150) {
		
		mobileresultsText();
		
	}
	
	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 1150) {
			
				desktopresultsText();
		
		}	
		
		if ($(window).width() <= 1150) {
			
			mobileresultsText();
					
		}
		
	}, 100)); 
		
		
		
	// sidebar
	
	$('.sidebar_box h3').wrapInner('<span></span>');
	
	$('.sidebar_box ul > li.current-menu-ancestor > a ').addClass('active');
	
	
	$('.sidebar_box ul > li.menu-item-has-children > a ').on('click', function(e) {
		
		$(this).next('ul').slideToggle(300);
		
		$(this).toggleClass('active');
	  
	});
	
	
	// content
	
	$('.content p > strong').each(function(){
    
    $(this).parent().addClass('paragraph_quote');
  
  });
	
	
		
	// pa cat titles 
	
	
	$('.pa_directory_wrapper ul.menu > li > a').wrapInner('<span></span>');
	
	
/*
	$('.sec_eight_results_list ul li').on('click', function() {
  	
  	$('.current').removeClass('current');
		
		$(this).addClass('current');
	
	}).has('a[href*="' + location.pathname + '"]').addClass('current');
*/
	

  
}); // document ready