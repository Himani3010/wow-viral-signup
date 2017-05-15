jQuery(document).ready(function(){
	jQuery('.wp-color-picker-field').wpColorPicker();
    wpcalc();
	wptype();
	insertservise();
	chooseservice();	
})
function wptype() {
	var type = jQuery('#singnup').val();
	if (type == 1){		
		jQuery('#limited').css('display','');
		jQuery('#social').css('display','');		
	}
	if (type == 2){		
		jQuery('#limited').css('display','');
		jQuery('#social').css('display','none');		
	}
	if (type == 3){		
		jQuery('#limited').css('display','none');
		jQuery('#social').css('display','');		
	}
	if (type == 4){		
		jQuery('#limited').css('display','none');
		jQuery('#social').css('display','none');		
	}
}
function wpcalc(){   
  if (jQuery('#appid').prop('checked')){
	   jQuery('#app_block').css('display','');
   }
   else{
	   jQuery('#app_block').css('display','none');	   
   }    
}
function insertservise(){
	if (jQuery('[name="integration"]').is(':checked')){
		jQuery('#integration').css('display', '');
	}
	else {
		jQuery('#integration').css('display', 'none');
		}
}

function chooseservice(){	
	var service = jQuery('[name="choosservice"]').val();		
	if (service == 'mailchimp'){		
		jQuery('.wow-mailchimp').css('display', '');
		jQuery('.wow-getresponse').css('display', 'none');	
		jQuery('#registr').html('<a href="http://eepurl.com/cj7tkX" target="_blank">Register now</a>');
	}
	if (service == 'getresponse'){
		jQuery('.wow-mailchimp').css('display', 'none');
		jQuery('.wow-getresponse').css('display', '');
		jQuery('#registr').html('<a href="http://www.getresponse.com/create_free_account.html?a=wow-company&c=link_name" target="_blank">Register now</a>');
		
	}
}