feedUrl = 'http://www.sonypictures.com/tv/shows/wheel/minisites/wheelv8/channel.xml';

$(function() {
	initListeners();
	playVideo();
	var w = 640;
	var h = 480;
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	$('.popup').click(function(e){
		e.preventDefault();
		var hrefLink = $(this).attr('href');
		window.open(hrefLink, '', 'width='+w+', height='+h+', top='+top+', left='+left+', directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no');
	})
});
var alreadyloaded = false;
var scrolling = false;
function scrollIt (obj, dist) {
	if(scrolling) {
		var left = obj.scrollLeft();
		left += dist;
		obj.scrollLeft(left);
		setTimeout(function(){ scrollIt(obj, dist)}, 30);
	}
}

function playVideo() {
	$('#playvideo').bind('click',function(){
		var clipId;
		
		if($(this).attr('rel') != undefined) {
			clipId = $(this).attr('rel');
		} else {
			clipId = null;
		}
		
		openOverlay(clipId);
		return false;
	});		
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function initListeners() {
	// gallery
	$('.gallerycontainer .left').mousedown(function() {
		scrolling = true;
		scrollIt( $(this).siblings('.imagecontainer'), -10);
	});
	$('.gallerycontainer .right').mousedown(function() {
		scrolling = true;
		scrollIt( $(this).siblings('.imagecontainer'), 10);
	});
	$('.gallerycontainer .left, .gallerycontainer .right').mouseup(function() {
		scrolling = false;
	});

		//remove button hover property for first and last items
	 $('.right').on('mouseenter', function(e){
        e.preventDefault();
        e.stopPropagation();
        var lastItem = $('.gallerycontainer').find('li').last().position().left;
        if (lastItem > 535 && lastItem < 546) {
          $('.right').removeClass('r-arrow');
          $('.right').css('cursor', 'default');

        }  else {
        	$('.right').addClass('r-arrow');
        	$('.right').css('cursor', 'pointer');
        }
    })
  $('.right').on('mouseleave', function(e){
  			$('.right').removeClass('r-arrow');
    });

 $('.left').on('mouseenter', function(e){
        e.preventDefault();
        e.stopPropagation();
        var firstItem = $('.gallerycontainer').find('li').first().position().left;
       	 if (firstItem ==0) {
          $('.left').removeClass('l-arrow');
          $('.left').css('cursor', 'default');
        }  else {
        	$('.left').addClass('l-arrow');
        	$('.left').css('cursor', 'pointer');
        }
    })
  $('.left').on('mouseleave', function(e){
  			$('.left').removeClass('l-arrow');
    });
		
	// gallery tablet
	$('.gallerycontainer .left').bind('touchstart', function() {
		scrolling = true;
		scrollIt( $(this).siblings('.imagecontainer'), -10);
	});
	$('.gallerycontainer .right').bind('touchstart', function() {
		scrolling = true;
		scrollIt( $(this).siblings('.imagecontainer'), 10);
	});
	$('.gallerycontainer .left, .gallerycontainer .right').bind('touchend', function() {
		scrolling = false;
	});
	if('ontouchstart' in window) {
		$('#backstagesection li').click(function() {
			$(this).toggleClass('active');
		});
	}

	$(window).load(function() {
		$('.tooltip-container').mouseenter(function(){
				$('.tooltip').show();
			});
			$('.tooltip-container').mouseleave(function(){
				$('.tooltip').hide();
			});
	})

}