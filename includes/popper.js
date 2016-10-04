$(function(){
	$('#wpab_box').delay(wpab_slidein.delay + 400).slideToggle('slow');
	$( '#wpab_close' ).delay(wpab_slidein.delay + 800).show()
	$('#wpab_close').click(function(){
		$('#wpab_box').slideToggle('slow');
		$( '#wpab_close' ).hide();
		Cookies.set('wpab_silent', 'true', { expires: wpab_slidein.expires });
	});
});