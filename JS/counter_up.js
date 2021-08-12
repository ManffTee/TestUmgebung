$(window).on('load', function() {
    $(".counter").each(function(){
        animation_count_up(0, $(this));
    })
});

function animation_count_up($start, $elem){
    
    $elem.delay(100).prop('Counter',$start).animate({
        Counter:  $elem.text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $elem.text(Math.ceil(now));
        }
    });
    
}