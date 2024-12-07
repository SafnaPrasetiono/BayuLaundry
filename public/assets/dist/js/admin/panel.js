$('#sliderButton').click(function(event) {
    if ($('#sliderExample').hasClass('active')) {
        $('#sliderExample').removeClass('active');
        $('#sliderBackground').removeClass('active');
    } else {
        $('#sliderExample').addClass('active');
        $('#sliderBackground').addClass('active');
    }
});
$('#sliderBackground').click(function() {
    $('#sliderExample').removeClass('active');
    $('#sliderBackground').removeClass('active');
})