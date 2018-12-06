$(document).ready(updateSize());
$(document).ready(resizePadding());
$(window).resize(updateSize());

var resizeTimer;

$(window).on('resize', function (e) {

    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {

        resizePadding();

    }, 250);

});

function resizePadding() {
    var width = $(window).width();
    var height = $(window).height();
    
    var surrealityRatio = 1.84094256259;
    var mindsparkRatio = 1.875;
    var dapRatio = 1.8515625;
    
    var padding = 0;

    padding += surrealityRatio * width / 2;
    padding += mindsparkRatio * width / 2;
    padding += dapRatio * width / 2;
    padding += 20;
    document.getElementById("works").style.paddingBottom = padding + "px";
    
    
   

    document.getElementById("surreality").style.height = surrealityRatio * width / 2 + "px";
    
    document.getElementById("mindspark").style.height = mindsparkRatio * width / 2 + "px";
}

function updateSize() {
    
}