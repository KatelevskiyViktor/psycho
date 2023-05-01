$('#reload').click(function (e){
    e.preventDefault();
    $.ajax({
        type: 'GET',
        url: 'reload',
        success: function (res){
            $('#captcha-img').html(res.captcha);
        }
    })
});
