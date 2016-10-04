$(function(){
	$('.wpab_overlay').delay(wpab_slidein.delay).fadeIn(400);
	$('.wpab_slidein').delay(wpab_slidein.delay + 400).animate({left:0});
	$('.wpab_box, #wpab_close').delay(wpab_slidein.delay + 400).fadeIn(750);
	$('#wpab_close, .wpab_overlay').click(function(){
		$('.wpab_overlay, .wpab_box, #wpab_close, .wpab_slidein').fadeOut(400);
		Cookies.set('wpab_silent', 'true', { expires: wpab_slidein.expires });
	});
});