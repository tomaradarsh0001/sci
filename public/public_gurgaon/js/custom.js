jQuery( function( $ ){
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    
    //multiple ajax form submit
    $('body').on('submit','.forms', function(e){
        e.preventDefault();  
        var that = $(this);
        var formData = new FormData(that[0]);
        $.ajax({
            beforeSend: function() {
                that.find('button').attr('disabled', true);
                that.find('button>i').show();
            },
            url: that.attr('action'),
            data: formData,
            type: 'POST',
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    if (Array.isArray(response.message)) {
                        $.each(response.message, function(i, v) {
                            if (v['type'] == 'success') {
                                toastr.success(v['message'], 'Success');
                            } else {
                                toastr.error(v['message'], 'Error');
                            }
                        });
                    } else {
                        toastr.success(response.message, 'Success');
                    }
                    if (response.reload != '') {
                        location.reload();
                    } else if (response.redirect_url != '') {
                        setTimeout(function() {
                            location.href = response.redirect_url;
                        }, 2000);
                    }
                } else {
                    toastr.error('Something going wrong!', 'Opps!');
                }
            },
            complete: function() {
                that.find('button').attr('disabled', false);
                that.find('button>i').hide();
            },
            error: function(status, error) {
                var errors = JSON.parse(status.responseText);
                if (status.status == 401) {
                    that.find('button').attr('disabled', false);
                    that.find('button>i').hide();
                    $.each(errors.error, function(i, v) {
                        toastr.error(v[0], 'Opps!');
                    });
                } else {
                    toastr.error(errors.message, 'Opps!');
                }
            }
        });
    })
});