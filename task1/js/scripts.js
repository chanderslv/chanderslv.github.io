// sidebar Open Close
$(function() {
    var $side = $('#side-wrapper');
    var $subscribe = $('#subscribe');
    var $openform = $('.open-form')

//    sidebar button name change
    $openform.on('click', function() {
        $side.toggleClass('open');
        $openform.toggleClass('open-forma');
    });

    $subscribe.on('click', function() {
        
    });

});