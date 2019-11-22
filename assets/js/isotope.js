$('.portfolio-item').isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
});
$('.filtering ul li').click(function(){
    $('.filtering ul li').removeClass('active');
    $(this).addClass('active');

    var selector = $(this).attr('data-filter');
    $('div.portfolio-item').isotope({
        filter: selector
    });
    return false;

});