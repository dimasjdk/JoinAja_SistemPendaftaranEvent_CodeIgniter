// Eventicka V.1 //
// Copyright 2014, Mandar Shirke //

// --------- INIT JS ---------  //

// -- 1. COUNTDOWN TIMER --  //
// -- 2. MARQUEE --  //
// -- 3. TABS NAV --  //
// -- 4. CAROUSEL --  //
// -- 5. TESTIMONIAL --  //
// -- 6. SCROLL FUNCTION --  //
// -- 7. TIPSY --  //
// -- 8. PRETTYPHOTO --  //
// -- 9. FITVIDS --  //
// -- 10. TOGGLE --  //
// -- 11. FORMS --  //
// -- 12. MISCELLANEOUS --  //
// -- 13. SLIDER --  //
// -- 14. GOOGLE MAPS --  //

// --------------------------  //

$(document).ready(function() {

"use strict";

// --------------------  //



// --------- 1. COUNTDOWN TIMER ----------  //

if (jQuery.isFunction(jQuery.fn.countDown)) {
$('#qcEventCountDown').countDown({
	targetDate: {
		'day': 		31,
		'month': 	12,
		'year': 	2018,
		'hour': 	0,
		'min': 		0,
		'sec': 		0
	},
	omitWeeks: true
});
}


// --------- 2. MARQUEE - HOMEPAGE NEWS TICKER ----------  //

if (jQuery.isFunction(jQuery.fn.marquee)) {
$("#qcEventBanner ul").marquee({
	yScroll: "top",               	// the position of the marquee initially scroll (can be either "top" or "bottom")
	showSpeed: 850,               	// the speed of to animate the initial dropdown of the messages
	scrollSpeed: 12,              	// the speed of the scrolling (keep number low)
	pauseSpeed: 3000,             	// the time to wait before showing the next message or scrolling current message
	pauseOnHover: true ,          	// determine if we should pause on mouse hover
	loop: -1,                     	// determine how many times to loop through the marquees (#'s < 0 = infinite)
	fxEasingShow: "swing",        	// the animition easing to use when showing a new marquee
	fxEasingScroll: "linear",     	// the animition easing to use when showing a new marquee
	cssShowing: "marquee-showing",	// define the class statements
    // event handlers
	init: null,              	  	// callback that occurs when a marquee is initialized
	beforeshow: null,          	  	// callback that occurs before message starts scrolling on screen
	show: null,                   	// callback that occurs when a new marquee message is displayed
	aftershow: null,              	// callback that occurs after the message has scrolled
});
}


// --------- 3. TABS NAV ----------  //

$('#qcTabs').tabslet({
	mouseevent: 'click',
	attribute: 'href',
	animation: true
});



// --------- 4. CAROUSEL ----------  //

if (jQuery.isFunction(jQuery.fn.owlCarousel)) {

// --- SPEAKERS -- //
$(".3-col-carousel").owlCarousel({
	items : 2, //10 items above 1000px browser width
	itemsDesktop : [1080,1], //5 items between 1000px and 901px
	itemsDesktopSmall : [900,1], // betweem 900px and 601px
	itemsTablet: [600,1], //2 items between 600 and 0
	itemsMobile : [600,1], // itemsMobile disabled - inherit from itemsTablet option
	navigation: true,
	navigationText : false,
	rewindNav: false
});

// --- SCHEDULE -- //
$(".qcScheduleList").owlCarousel({
	items : 4, //10 items above 1000px browser width
	itemsDesktop : [1080,3], //5 items between 1000px and 901px
	itemsDesktopSmall : [900,3], // betweem 900px and 601px
	itemsTablet: [600,1], //2 items between 600 and 0
	itemsMobile : [600,1], // itemsMobile disabled - inherit from itemsTablet option
	navigation: true,
	navigationText : false,
	rewindNav: false,
});

// --- SPONSORS -- //
$(".qcSposnsorList").owlCarousel({
	items : 5, //10 items above 1000px browser width
	itemsDesktop : [1080,3], //5 items between 1000px and 901px
	itemsDesktopSmall : [900,3], // betweem 900px and 601px
	itemsTablet: [600,1], //2 items between 600 and 0
	itemsMobile : [600,1], // itemsMobile disabled - inherit from itemsTablet option
	navigation: true,
	navigationText : false,
	rewindNav: false,
});

}



// --------- 5. TESTIMONIAL ----------  //

$('#qcTestimonial p').html($('#qcTestimonialList li a.active').attr('data-content'));
$('#qcTestimonial cite').html('- ' + $('#qcTestimonialList li a.active').attr('data-cite'));
$('#qcTestimonialList li a').hover(function() {
	$('#qcTestimonialList li a.active').removeAttr('class');
	$(this).addClass('active');
	$('#qcTestimonial p').html($(this).attr('data-content'));
	$('#qcTestimonial cite').html('- ' + $(this).attr('data-cite'));
});
$('#qcTestimonialList li a').click(function() {
	return false;
});



// --------- 6. SCROLL FUNCTION ----------  //

$(window).scroll(function() {
	if( $(this).scrollTop() > 0) {
		$('#qcHeader').addClass('scrolled');
	} else {
		$('#qcHeader').removeClass('scrolled');
	}
});



// --------- 7. TIPSY ----------  //

if (jQuery.isFunction(jQuery.fn.tipsy)) {
jQuery('.tips').tipsy({gravity: 's'});
}



// --------- 8. PRETTYPHOTO ----------  //

if (jQuery.isFunction(jQuery.fn.prettyPhoto)) {
	$("a[data-rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});
}



// --------- 9. FITVIDS ----------  //

$(".qcFitVids").fitVids();
$('.qcFitVids').click(function() {
	$(this).addClass('hide');
});



// --------- 10. TOGGLE ----------  //

if ( jQuery( '.shortcode-toggle').length ) {
	jQuery( '.shortcode-toggle').each( function () {
		var toggleObj = jQuery(this);
		toggleObj.closedText = toggleObj.find( 'input[name="title_closed"]').attr( 'value' );
		toggleObj.openText = toggleObj.find( 'input[name="title_open"]').attr( 'value' );

		if ( toggleObj.find( 'a.more-link.read-more' ).length ) {
			toggleObj.readMoreText = toggleObj.find( 'a.more-link.read-more' ).text();
			toggleObj.readLessText = toggleObj.find( 'a.more-link.read-more' ).attr('readless');
			toggleObj.find( 'a.more-link.read-more' ).removeAttr('readless');
			toggleObj.find( 'a.more-link' ).click( function () {
				var moreTextObj = jQuery( this ).next( '.more-text' );
				moreTextObj.animate({ opacity: 'toggle', height: 'toggle' }, 300).css( 'display', 'block' );
				moreTextObj.toggleClass( 'open' ).toggleClass( 'closed' );
				return false;
			});
		}

		toggleObj.find( 'input[name="title_closed"]').remove();
		toggleObj.find( 'input[name="title_open"]').remove();
		toggleObj.find( 'h4.toggle-trigger a').click( function () {
			toggleObj.find( '.toggle-content').animate({ opacity: 'toggle', height: 'toggle' }, 300);
			toggleObj.toggleClass( 'open' ).toggleClass( 'closed' );
			return false;
		});
	});
}



// --------- 11. FORMS ----------  //

$('.qcForm').submit(function() {
		$(this).find('.error').remove();
		$('.inputError').removeClass('inputError');
		var hasError = false;
		$(this).find('.requiredField').each(function() {
			if($.trim($(this).val()) == '') {
				var labelText = $(this).prev( 'label').text();
				$(this).parent().append( '<span class="error">Please enter '+labelText+'</span>' );
				$(this).parent().addClass( 'inputError' );
				hasError = true;
			} else if($(this).hasClass( 'email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test($.trim($(this).val()))) {
					var labelText = $(this).prev( 'label').text();
					$(this).parent().append( '<span class="error">You have entered an invalid '+labelText+'</span>' );
					$(this).parent().addClass( 'inputError' );
					hasError = true;
				}
			} else if($(this).hasClass('checkbox')) {
				if(!$(this).is(':checked')) {
					$(this).parent().append( '<span class="error">You must agree to the Terms & Conditions</span>' );
					$(this).parent().addClass( 'inputError' );
					hasError = true;
				}
			} else if($(this).hasClass( 'captcha')) {
				if($(this).val() != 'red' && $(this).val() != 'Red') {
					$(this).parent().append( '<span class="error">You have entered wrong Captcha Value</span>' );
					$(this).parent().addClass( 'inputError' );
					hasError = true;
				}
			}
		});
		if(!hasError) {
			var formInput = $(this).serialize();
			var hideForm = $(this);
			$.post($(this).attr('action'),formInput, function(data){
				$(hideForm).slideUp( "fast", function() {				   
					$(this).before( '<br/><p class="info">Thanks! Your email was successfully sent.</p>' );
				});
			});
		}
		return false;
});



// --------- 12. MISCELLANEOUS ----------  //

/* VIDEO LOAD CALLBACK */
if($('#bgvid').length !== 0) {
	var video = document.getElementById('bgvid');
	video.load();
	video.addEventListener('loadeddata', function() {
		$('#qcEventLogo').removeAttr('class');
	}, false);
}

/* MOBILE MENU */
$('#qcMbTrigger').text($('#qcTabNav li.active').text());
$('#qcMbTrigger').click(function() {
	$('#qcTabNav').show();
});
function mbTrigger() {
	if($('#qcMbTrigger').is(':visible')) {
		$('#qcTabNav li').click(function() {
			$('#qcTabNav').hide();
			$('#qcMbTrigger').text($(this).text());
		});
	} else {
		$('#qcTabNav').show();
		$('#qcTabNav li').click(function() {
			$('#qcTabNav').show();
		});
	}
}
mbTrigger();
$(window).resize(function() {
	mbTrigger();
});

// --------------------  //

});



// --------- WINDOW ON LOAD -----------  //


$(window).load(function() {


// --------- 13. SLIDER ----------  //

if (jQuery.isFunction(jQuery.fn.owlCarousel)) {
	var owlSingle = $(".single-carousel");
	owlSingle.owlCarousel({
		singleItem: true,
		navigation: false,
		autoHeight: true,
		transitionStyle : "fadeUp"
	});
	// Custom Navigation Events
	$(".qcNext").click(function(){
		owlSingle.trigger('owl.next');
	});
	$(".qcPrev").click(function(){
		owlSingle.trigger('owl.prev');
	});
}



// --------- 14. GOOGLE MAPS ----------  //

if (document.getElementById('qcContactMap')) {
	var myLatlng = new google.maps.LatLng($('#qcMapAddress').attr('data-lat'),$('#qcMapAddress').attr('data-lng'));
	var mapOptions = {
		zoom: 15,
		center: myLatlng,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById('qcContactMap'), mapOptions);
	var contentString = '<div id="content">'+
	'<div id="siteNotice">'+
	'</div>'+
	'<div id="bodyContent">'+ $('#qcMapAddress').attr('data-add') +
	'</div>'+
	'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: ''
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
	
	/* RESIZE MAP ON TAB CHANGE */
	$('#qcTabNav li').click(function() {
		if($('#qcContactMap').is(':visible')) {
			google.maps.event.trigger(map, 'resize');
			map.setCenter(myLatlng);
		}
	});
}


// --------------------  //

});