siteObjJs.admin.commonJs = function () {

// Initialize all the page-specific event listeners here.

    var initializeListener = function () {
        console.log('I am inside common js initializeListener');
    };

   
    var handleAjaxRequest = function () {
        var formElement = $(this.currentForm); // Retrive form from DOM and convert it to jquery object
		
        var actionUrl = formElement.attr("action");
        var formId = formElement.attr("id");
		console.log(formId);
        var actionType = formElement.attr("method");
        var formData = formElement.serialize();
        var icon = "check";
        var messageType = "success";
		console.log(actionUrl);
		console.log(actionType);
		console.log(formData);

        $.ajax(
                {
                    url: actionUrl,
                    cache: false,
                    type: actionType,
                    data: formData,
                    success: function (data)
                    {
                        data=JSON.parse(data);
						var message = '';
						if(data.status=='success'){
							message = '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>'+data.message+"</span></div>";
						} else {
							message = '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span>'+data.message+"</span></div>";
						}
						$('#'+formId+"_message").html(message).fadeIn().delay(3000).fadeOut("slow", function () {
							$('#'+formId+"_message").html('');
						});
						$('#'+formId)[0].reset();
                       /* Metronic.alert({
                            type: messageType,
                            icon: icon,
                            message: data.message,
                            container: $('#ajax-response-text'),
                            place: 'prepend',
                            closeInSeconds: siteObjJs.admin.commonJs.constants.alertCloseSec
                        });*/
                    },
                    error: function (jqXhr, json, errorThrown)
                    {
                        var errors = jqXhr.responseJSON;
                        var errorsHtml = '';
                        $.each(errors, function (key, value) {
                            errorsHtml += value[0] + '<br />';
                        });
						$('#'+formId)[0].reset();
                        //alert(errorsHtml, "Error " + jqXhr.status + ': ' + errorThrown);
                       /* Metronic.alert({
                            type: 'danger',
                            message: errorsHtml,
                            container: $('#ajax-response-text'),
                            place: 'prepend',
                            closeInSeconds: siteObjJs.admin.commonJs.constants.alertCloseSec
                        });*/
                    }
					
                }
        );
    }

    
    return {
        //main function to initiate the module
        init: function () {
			
            initializeListener();
            siteObjJs.validation.formValidateInit('#contact-form', handleAjaxRequest);

        }
        
    };
}();