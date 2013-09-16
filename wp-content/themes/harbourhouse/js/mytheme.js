$(document).ready(function() {
	centerItem('#disclaimer-popup',485, 255);
	showBio();
	supportersHover();
	setInputFieldFunctions();
	showCategories();
	$('#tribe-events-content h2').addClass('page-title');
	$('#tribe-events').addClass('mid-cont');
	sortEvents();

});

$(window).resize(function() {
	centerItem('#disclaimer-popup',485, 255);

});

$(document).click(function() {
	$('#cat-cont .categories').fadeOut();
});

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(document).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
}

function showBio() {
	var winH = $(document).height();
	var winW = $(window).width();
	$('.overlay').css({'height': winH, 'width': winW});
	$('.member-cont .bio-link').each(function() {
		$(this).on({
			click: function() {$('.overlay').fadeIn('slow'); $(this).siblings('.bio-cont').fadeIn('slow');}
		});
	});	
}

function closeBio() {
	$('.bio-cont, .overlay').fadeOut('slow');
}

function supportersHover() {
	$('.supporter').each(function() {
		$(this).on({
			mouseenter: function() {$(this).children('.supporter-name').hide(); $(this).children('.supporter-logo').show();},
			mouseleave: function() {$(this).children('.supporter-name').show(); $(this).children('.supporter-logo').hide();}
		});
	});
}

function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));
		});
	});
}

function showCategories() {
	$('#cat-cont #sort-title').on({
		click: function(e) {$('#cat-cont .categories').slideToggle();e.stopPropagation();}
	});
}

function sortEvents() {
	$('#upcoming-events .sort-events').on({
		click: function() {$('#upcoming-events').hide(); $('#past-events').fadeIn();}
	});
	$('#past-events .sort-events').on({
		click: function() {$('#past-events').hide(); $('#upcoming-events').fadeIn();}
	});
}