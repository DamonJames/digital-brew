$(document).ready(function() {
    $('#loadScreen').delay(1000).animate({right: "100%"}, 1000)

    $('.logoCover').delay(2000).animate({right: "0%"}, 700, function() {
        $('.logo').css("visibility", "visible");
        $('.boxAnim4').css("visibility", "visible");
        $('.boxAnim3').css("visibility", "visible");
        $('.boxAnim2').css("visibility", "visible");
        $('.boxAnim1').css("visibility", "visible");
    });

    $('.boxAnim4').delay(2700).animate({width: "70px"}, 700)
    $('.boxAnim3').delay(2900).animate({width: "263px"}, 700)
    $('.boxAnim2').delay(3100).animate({width: "167px"}, 700)
    $('.boxAnim1').delay(3300).animate({width: "142px"}, 700, function() {
        $('.subHead').css("visibility", "visible");
    });

    $('.boxAnim4').delay(1200).animate({width: "0px"}, 700, function() {
        $('.boxAnim4').hide()
    })
    $('.boxAnim3').delay(1400).animate({width: "0px"}, 700, function() {
        $('.boxAnim3').hide()
    })
    $('.boxAnim2').delay(1600).animate({width: "0px"}, 700, function() {
        $('.boxAnim2').hide()
    })
    $('.boxAnim1').delay(1800).animate({width: "0px"}, 700, function() {
        $('.boxAnim1').hide()
    })

    $('.logoCover').delay(300).animate({right: "100%"}, 1500, function() {
        $('.logoCover').hide();
    });
})