$(document).ready(function(){

    var owl = $('.banners-big__img-wrapper');

    owl.owlCarousel({
        loop: true,
        animateIn:'fadeIn',
        animateOut: 'fadeOut',
        mouseDrag: false,
        margin: 0,
        dots: false,
        nav: true,
        items: 1
    });

// Go to the next item
    $('.project__item-part.next.active').click(function() {
        owl.trigger('next.owl.carousel');
    })
// Go to the previous item
    $('.project__item-part.prev.active').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    });
    $('.project-example__icon').on('click', function(e){
        e.preventDefault();
        $('.banners-big').addClass('project-active');
        setTimeout(function(){
            $('.project-active .banners-big__img-wrapper iframe').css('width','100%');
        },300);
    });
    $('.banners-close__icon').on('click', function(e){
        e.preventDefault();
        $('.banners-big').removeClass('project-active');

    })

});