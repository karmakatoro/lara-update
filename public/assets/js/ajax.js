$(document).ready(function ($) {
    $('#leave-form').submit(function (e) {
        e.preventDefault();

        var url = $(this).data('url');
        let formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            contentTpe: false,
            success:(response) =>{
                alert(response.success);
                location.reload();
            },
            error: function(response){
                $('#leave-form').find(".error").find("url").html('');
                $('#leave-form').find(".error").css('display:block');
                $.each(response.responseJSON.errors, function(key, value){
                    $('#leave-form').find(".error").find("ul").append('<li>'+value+'</li>');
                });
            }
        });
    });
});
