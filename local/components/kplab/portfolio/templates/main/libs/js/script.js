$(document).ready(function(){

    var owl = $('.banners-big__img-wrapper');
    var owl2 = $('#carouselWorks');

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
/*
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
*/

    owl2.owlCarousel({
        'items':1,
        'nav':false,
        'loop': false,
        'mouseDrag':false,
        'center': true,
        'margin': 0,
        'dotsContainer': '#carousel-custom-dots',
        'onInitialized': function(e) {

            $itemm = jQuery(e.target.children[0].children[0].children[0].children[0]);
            console.log($itemm);


            var $viewIdd = $itemm.attr('data-viewId');
            var $viewName = $itemm.data('name');
            var $viewCategory = $itemm.data('category');
            var $iframeViewGoogle = $itemm.data('view-google');
            var $iframeViewYandex = $itemm.data('view-yandex');
            var $iframeViewSite = $itemm.data('view-classic');

            $('.point-indicators .point').attr('data-id', $viewIdd);
            $('.carousel-caption h5').text($viewName);
            $('.carousel-caption .place-category').text($viewCategory);


            if($itemm.data('view-google') !== false){
                $('.point-indicators .point.varGoogle').removeClass('hidden');
                $('.point-indicators .point.varGoogle').attr('data-iframe', $iframeViewGoogle);
            }
            if($itemm.data('view-yandex') !== false) {
                $('.point-indicators .point.varYandex').removeClass('hidden');
                $('.point-indicators .point.varYandex').attr('data-iframe', $iframeViewYandex);
            }
            if($itemm.data('view-classic') !== false) {
                $('.point-indicators .point.varSite').removeClass('hidden');
                $('.point-indicators .point.varSite').attr('data-iframe', $iframeViewSite);
            }
        }
    });

    owl2.on('changed.owl.carousel', function(e) {

        $('.point-indicators .point').addClass('hidden');

        $item = jQuery(e.target.children[0].children[0].children[e.item.index].children[0]);

        var $viewId = $item.attr('data-viewId');
        var $vName = $item.data('name');
        var $vCategory = $item.data('category');
        var $iframeVGoogle = $item.data('view-google');
        var $iframeVYandex = $item.data('view-yandex');
        var $iframeVSite = $item.data('view-classic');

        $('.point-indicators .point').attr('data-id', $viewId);
        $('.carousel-caption h5').text($vName);
        $('.carousel-caption .place-category').text($vCategory);

        if($item.data('view-google') !== false){
            $('.point-indicators .point.varGoogle').removeClass('hidden');
            $('.point-indicators .point.varGoogle').attr('data-iframe', $iframeVGoogle);
        }
        if($item.data('view-yandex') !== false) {
            $('.point-indicators .point.varYandex').removeClass('hidden');
            $('.point-indicators .point.varYandex').attr('data-iframe', $iframeVYandex);
        }
        if($item.data('view-classic') !== false) {
            $('.point-indicators .point.varSite').removeClass('hidden');
            $('.point-indicators .point.varSite').attr('data-iframe', $iframeVSite);
        }
    });

    $('.owl-dot').click(function () {
        owl2.trigger('to.owl.carousel',
            [$(this).index(), 300]
        );
    });

});

window.BXDEBUG = true;
BX.ready(function(){

    var oPopup = new BX.PopupWindow('call_google_viewer', window.body, {

        autoHide : true,
        offsetTop : 0,
        offsetLeft : 0,
        lightShadow : true,
        closeIcon: {
            top : 'auto',
            bottom : 111,
        },
        closeByEsc : true,
        overlay: false
    });


    oPopup.setContent(BX('viewerPopup'));

    BX.bindDelegate(
        document.body, 'click', {className: 'point' },
        BX.proxy(function(e){
            if(!e)
                e = window.event;

            //console.log($(e.target.dataset.iframe));//[0].dataset.iframe

            oPopup.show();

            $dataIframe = '';
            $dataIframe = e.target.dataset.iframe;
            var $hBPanel = $('#viewerPopup .carousel-caption').outerHeight();

            $('#hideblock').attr('src', $dataIframe );
            $('#hideblock').css('height', 'calc(100% - '+$hBPanel+'px)');
            return BX.PreventDefault(e);
        }, oPopup)
    );

});