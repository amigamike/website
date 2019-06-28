$(function(){
    $('.dropdown-item').bind('click', function(){
        $('#' + $(this).data('popup')).show();
    });

    $('.popup-close, .btn-close').bind('click', function() {
        $('#' + $(this).data('popup')).hide();
    });
});
