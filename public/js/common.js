

jQuery( function( $ ){	
    

	jQuery.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
		}
	});

	
 	/*Action : ajax
 	* used to: submit forms
 	* Instance of: Jquery vailidate libaray
	* @JSON 
 	**/
	$("#form1").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			
			var formData = new FormData($("#form1")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$("#form1").find('button').attr('disabled',true);
					$("#form1").find('button>i').show(); 
			  	},
			  	url: $("#form1").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if (response.success) {
                    toastr.success(response.message, 'Success');
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                }
			  	},
			  	complete:function(){
			  		$("#form1").find('button').attr('disabled',false);
					$("#form1").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401){
	                    $("#form1").find('button').attr('disabled',false);
	                    $("#form1").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});
	
	$("#form2").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			
			var formData = new FormData($("#form2")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$("#form2").find('button').attr('disabled',true);
					$("#form2").find('button>i').show(); 
			  	},
			  	url: $("#form2").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if (response.success) {
                    toastr.success(response.message, 'Success');
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                }
			  	},
			  	complete:function(){
			  		$("#form2").find('button').attr('disabled',false);
					$("#form2").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401){
	                    $("#form2").find('button').attr('disabled',false);
	                    $("#form2").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});
	
	$("#form3").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			
			var formData = new FormData($("#form3")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$("#form3").find('button').attr('disabled',true);
					$("#form3").find('button>i').show(); 
			  	},
			  	url: $("#form3").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if (response.success) {
                    toastr.success(response.message, 'Success');
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                }
			  	},
			  	complete:function(){
			  		$("#form3").find('button').attr('disabled',false);
					$("#form3").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401){
	                    $("#form3").find('button').attr('disabled',false);
	                    $("#form3").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});
	
	$("#form4").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			
			var formData = new FormData($("#form4")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$("#form4").find('button').attr('disabled',true);
					$("#form4").find('button>i').show(); 
			  	},
			  	url: $("#form4").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if (response.success) {
                    toastr.success(response.message, 'Success');
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                }
			  	},
			  	complete:function(){
			  		$("#form4").find('button').attr('disabled',false);
					$("#form4").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401){
	                    $("#form4").find('button').attr('disabled',false);
	                    $("#form4").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});
	
	
	
	$(".formspop").validate({
		errorPlacement: function (error, element) {
			 return;
		},
		highlight: function(element) {
        	$(element).addClass('is-invalid');
        	$(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	    	$(element).parent().removeClass("error");
	        $(element).removeClass('is-invalid').addClass('is-valid');
	    },
		submitHandler: function(form){
			
			var formData = new FormData($(".formspop")[0]);
			$.ajax({
			  	beforeSend:function(){
			  		$(".formspop").find('button').attr('disabled',true);
					$(".formspop").find('button>i').show(); 
			  	},
			  	url: $(".formspop").attr('action'),
			  	data: formData,
			  	type: 'POST',
			  	processData: false,
    			contentType: false,
			  	success:function(response){
				  	if (response.success) {
                    toastr.success(response.message, 'Success');
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                }
			  	},
			  	complete:function(){
			  		$(".formspop").find('button').attr('disabled',false);
					$(".formspop").find('button>i').hide(); 
			  	},
              	error:function(status,error){
					var errors = JSON.parse(status.responseText);
					var msg_error = '';
					if(status.status == 401){
	                    $(".formspop").find('button').attr('disabled',false);
	                    $(".formspop").find('button>i').hide();  
						$.each(errors.error, function(i,v){	
							msg_error += v[0]+'!</br>';
						});
						toastr.error( msg_error,'Opps!'); 
					}else{
						toastr.error(errors.message,'Opps!');
					} 				
              	}		  
			});	
			return false;
		}
	});
});

