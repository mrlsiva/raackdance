$(document).ready(function () {
	"use strict"; //Start of Use Strict	
	
	function addRemoveClass(div, ad_class, remv_class ) {		
		setTimeout(function() {
			div.removeClass(remv_class).addClass(ad_class);
		}, 5000);
	}
 
	//CONTACT FORM VALIDATION	
	if ($('.contactus-form').length) {
        $('.contactus-form').each(function() {
            $(this).validate({
                errorClass: 'error',
                submitHandler: function(form) {
					
					var actionUrl = $(form).attr('action');
					var successDiv = $(form).find('.successMessage');
					var errorDiv   = $(form).find('.failMessage');
					var loader   = $(form).find('.form-loader');
					loader.removeClass('d-none'); 
					
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: $(form).serialize(),
						dataType: 'json',
                        success: function(data) {							
                            if (data.success) {
								$(form)[0].reset();
                                successDiv.find('.alert').html('').html(data.message);
                                successDiv.show();
                                successDiv.delay(5000).fadeOut();
                            } 
							else if (data.error) {
								errorDiv.find('.alert').html('');
								$.each(data.error, function (index, value) {
									errorDiv.find('.alert').append('<span class="text-danger">'+value+'<span>'+'<br>');
								});
                                errorDiv.show();
                                errorDiv.delay(5000).fadeOut();
							}	
							else {
                                errorDiv.find('.alert').html('').html('<div class="alert alert-danger">Error. Please Try Again</div>');
                                errorDiv.show();
                                errorDiv.delay(5000).fadeOut();
                            }
							loader.addClass('d-none'); 
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            errorDiv.find('.alert').html('').html('<div class="alert alert-danger">'+textStatus+'</div>');
                            errorDiv.show();
                            errorDiv.delay(5000).fadeOut();
							loader.addClass('d-none'); 
                        }
                    });
                }
            });
        });
    }	
	
	
});
