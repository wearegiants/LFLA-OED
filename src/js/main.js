// @codekit-prepend "site/default-ui.js"

function mobileNav(){

  var $mobileNav = $('#mobile-menus');

  function activeMobile(){

    $mobileNav.toggleClass('open');

  }

  function closeMobile(){

    $mobileNav.toggleClass('open');

  }

  $('#menuBtn').on('click',function(event){
    event.preventDefault();
    activeMobile();
  });

  $('#mobile-menus').find('a').on('click',function(){
    closeMobile();
  });

}

function openSubmission(){
  if(window.location.hash == '#word-submission') {

    $("#about-the-project .inline-modal").click();
  
  } else {
  
    console.log('noo, noo');

  }
}

function smoothScroll(){
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 60
          }, 400);
          return false;
        }
      }
    });
  });
}

function headerhover(){

  $(".site-logo").hover(function(){
    $("#home--header-wrapper > div").addClass('active');
  });

  $(".section").hover(function(){
    $("#home--header-wrapper > div").removeClass('active');
  });

}

function header(){

var options = {
    offset: 200,
    classes: {
        clone:   'banner--clone',
        stick:   'banner--stick',
        unstick: 'banner--unstick'
    },
    onInit: function() {
      smoothScroll();
      mobileNav();
      headerhover();
    },
    onUnstick: function () {
      $('#mobile-menu').removeClass('open');
    },
};

// Initialise with options
var banner = new Headhesive('#home--header', options);

}


function popup(){
	$('.inline-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		mainClass: 'my-mfp-zoom-in fs-grid',
		//focus: '#name',
		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
        //alert('yolo');
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			},
      open: function() {
        //alert('yolo');
        //$(".carousel").carousel();

      }
		}
	});
  $('.zoom-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    closeOnContentClick: false,
    closeBtnInside: false,
    mainClass: 'mfp-with-zoom mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        //return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
      }
    },
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }
    
  });
}

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

$(document).ready(function(){
	mobileMenu();
	popup();
	smoothScroll();
	headerhover();
	header();
  openSubmission();
	mobileNav();
});