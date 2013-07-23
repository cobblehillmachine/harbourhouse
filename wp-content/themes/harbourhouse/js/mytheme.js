$(document).ready(function() {
	centerItem('#disclaimer-popup',485, 255);

});

$(window).resize(function() {
	centerItem('#disclaimer-popup',485, 255);

});


function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}

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

function showDisclaimer() {
	var winH = $(document).height();
	var winW = $(window).width();
	$('#disclaimer-popup').fadeIn('slow');
	$('#overlay').css({'height': winH, 'width': winW});
	$('#overlay').fadeIn('slow');
}

function closeDisclaimer() {
	$('#disclaimer-popup').fadeOut('slow');
	$('#overlay').fadeOut('slow');
}