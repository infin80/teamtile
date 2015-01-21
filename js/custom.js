// Activates the Carousel
/*$('.carousel').carousel({
  interval: 5000
})
*/
//Carousel
function carousel() {
  var $ = jQuery;
  
  $('.carousel-box .carousel').each(function () {
	var carousel = $(this).closest('.carousel-box'),
		swipe,
		autoplay,
		prev,
		next,
		pagitation,
		responsive = false;

	if (carousel.hasClass('no-swipe')) {
	  swipe = false;
	} else {
	  swipe = true;
	}
	
	if (carousel.attr('data-carousel-autoplay') == 'true') {
	  autoplay = true;
	} else {
	  autoplay = false;
	}
	
	if (carousel.attr('data-carousel-nav') == 'false') {
	  next = false;
	  prev = false;
	  carousel.addClass('no-nav');
	} else {
	  next = carousel.find('.next');
	  prev = carousel.find('.prev');
	  carousel.removeClass('no-nav');
	}
	
	if (carousel.attr('data-carousel-pagination') == 'true') {
	  pagination = carousel.find('.pagination');
	  carousel.removeClass('no-pagination');
	} else {
	  pagination = false;
	  carousel.addClass('no-pagination');
	}
	
	if (carousel.attr('data-carousel-one') == 'true') {
	  responsive = true;
	}
	
	$(this).carouFredSel({
	  auto       : autoplay,
	  width      : '100%',
	  infinite   : false,
	  next       : next,
	  prev       : prev,
	  pagination : pagination,
	  responsive : responsive,
	  swipe      : {
		onMouse : false,
		onTouch : swipe
	  },
	  scroll: 1
	}).parents('.carousel-box').removeClass('load');
  });
}

// Equal col heights
 var heights = $(".my-inner").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".my-inner").height(maxHeight);
	

// Activates Tooltips for Social Links
$('.social-network li').tooltip({
  selector: "a[data-toggle=tooltip]"
})
$('.foot-contact li').tooltip({
  selector: "[data-toggle=tooltip]"
})

//Modern Gallery
function modernGallery() {
  var $ = jQuery,
	  $container = $('#gallery-modern');
	  
  $container.imagesLoaded( function() {
    if ($(window).width() >= 1200) {
      $container.masonry({
        columnWidth: 300,
        itemSelector: '.images-box'
      }); 
    } else if ($(window).width() <= 1199 && $(window).width() >= 980 ) {
      $container.masonry({
        columnWidth: 240,
        itemSelector: '.images-box'
      }); 
    } else if ($(window).width() <= 979 && $(window).width() >= 768 ) {
      $container.masonry({
        columnWidth: 186,
        itemSelector: '.images-box'
      }); 
    }
  });
}

//Gallery
  $('.gallery-images, .lightbox').fancybox({
    nextEffect  : 'fade',
    prevEffect  : 'fade',
    openEffect  : 'fade',
    closeEffect : 'fade',
	tpl         : {
	  next : '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;">\n\
		<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve"><polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "/></svg></span>\n\
	  </a>',
	  prev : '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;">\n\
		<span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve"><polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "/></svg></span>\n\
	  </a>',
	}
  });
  
  
   //Meta Head
  if (document.width > 768) {
    $('.viewport').remove();
  }

  //Bootstrap Elements
  $('.tooltip a, .tooltip-link, a[data-toggle=tooltip]').tooltip();
  
  $("a[data-toggle=popover]")
	.popover()
	.click(function(event) {
	  event.preventDefault();
	});
	
	$(document).ready(function(){
		$("#services_select").multiselect({
			buttonWidth:"100%"
		})
	});  

