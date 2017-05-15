jQuery(document).ready(function($) {	
	$('#wow-preview-button').click( function(event){
		event.preventDefault(); 		
		$('#wow-preview-overlay').fadeIn(400, function(){
			$('#wow-preview-window').css('display', 'block').animate({opacity: 1}, 400); 
		}); 		
	    $('html, body').css('overflow', 'hidden', 'important');		
		showclose(); 
	});  	 
	$('#wow-preview-close').click( function(){
		$('#wow-preview-window').animate({opacity: 0}, 400, function(){
			$(this).css('display', 'none');
			$('#wow-preview-overlay').fadeOut(400); 
			$('#wow-preview-overlay').css('display', 'none');  
			$('html, body').css('overflow', ''); 
			$('#wow-preview-close').css('display', 'none');  
		}); 		
	}); 
	function showclose() { 
	var show_close = 0*1000; 
	setTimeout(function(){
		$('#wow-preview-close').css('display', 'block'); 
		}, show_close); 
	}  
}); 
jQuery(document).ready(function() {
	jQuery(".success").css('display', 'none');			
})
function mpwsignup() {	
	var id = 'signup';
	var email = jQuery("#" + id +" .signmail").val();
	if ( email == ''){
		jQuery("#" + id +" .signmail").attr("placeholder", "Enter e-mail");
        jQuery("#" + id +" .signmail").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
        jQuery("#" + id +" .signmail").focus();
		return false;
	} 
	if ( email != ''){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(email)){
			jQuery("#" + id +" .signmail").removeAttr('style');
		} 
		else {
			jQuery("#" + id +" .signmail").css({"border-color": 'red', "border-width":"1px", "border-style":"solid"});
			jQuery("#" + id +" .signmail").focus();
			return false;
            }
	}	
				jQuery('#'+id).css('display', 'none');				
				jQuery(".show").css('display', '');
				jQuery('#err').html('');
				jQuery('#yourlink').html('http://example.com?23463b99b62a72f26ed677cc556c44e8');
}