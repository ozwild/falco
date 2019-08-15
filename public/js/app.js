function hoverPulse(pulseTarget, hoverTarget){

    var $pulseTarget = $(pulseTarget);
    var $hoverTarget = $(hoverTarget? hoverTarget: pulseTarget);

    $hoverTarget.on('mouseenter', function(){
        console.log('on');
        console.log($hoverTarget, $pulseTarget);
        $pulseTarget.addClass("pulse");
    });

    $hoverTarget.on('mouseleave', function(){
        console.log('off');
        console.log($hoverTarget, $pulseTarget);
        $pulseTarget.removeClass("pulse");
    });

}

$(document).ready(function(){

    $.map($(".has-hovered-pulse"), function(hoverTarget){

        $.map($(hoverTarget).find(".hover-pulse"), function(pulseTarget){
            hoverPulse(pulseTarget, hoverTarget)
        });

    });

});