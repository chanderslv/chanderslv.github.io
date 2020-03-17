// sidebar Open Close
$(function() {
    var $side = $('#mala-wrapper');
    var $subscribe = $('#subscribe');
    var $openform = $('.opn-form')

//    sidebar button change name
    $openform.on('click', function() {
        $side.toggleClass('open');
        $openform.toggleClass('opn-forma');
    });

    $subscribe.on('click', function() {
        
    });

});