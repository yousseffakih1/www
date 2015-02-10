jQuery( document ).ready(function() {
jQuery('#upload_logo_button').click(function() {
	 uploadID = jQuery(this).prev('input'); /*grab the specific input*/
    formfield = jQuery('#upload_logo').attr('name');
	
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
});

window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 //alert(uploadID.attr('id'));
 uploadID.val(imgurl); /*assign the value to the input*/
 //jQuery('#upload_logo').val(imgurl);
 tb_remove();

 uploadID.prev('.wpss-file').html("<img height='65' src='"+imgurl+"'/>");
}

// baground

jQuery('#upload_background_button').click(function() {
    formfield = jQuery('#upload_background').attr('name');
	 uploadID = jQuery(this).prev('input'); /*grab the specific input*/
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
});

/*window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#upload_background').val(imgurl);
 tb_remove();

 jQuery('#upload_background_thumb').html("<img height='100' src='"+imgurl+"'/>");
}*/
});