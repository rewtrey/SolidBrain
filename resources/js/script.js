$('.js-dropdown').on('show.bs.dropdown', function () {
	$('.header').addClass('header_bg');
});

$('.js-dropdown').on('hidden.bs.dropdown', function () {
    let header = $('.header').offset().top;
    if(header === 0){
        $('.header').removeClass('header_bg');
    }
});


/***carousel***/

    $('.carousel').each(function () {
        let id = $(this).attr('id');
        let idS = $('#'+id);
        let totalItems =  idS.find('.js-carousel-item').length;
        console.log( totalItems);
        let currentIndex = idS.find('.js-carousel-item.active').index() + 1;

        $('[data-counter='+id+']').html(currentIndex + '/' + totalItems);


        idS.on('slid.bs.carousel', function() {
            currentIndex = idS.find('.js-carousel-item.active').index() + 1;
            console.log(currentIndex);
            $('[data-counter='+id+']').html(currentIndex + '/' + totalItems);
        });
    });

/*************/

/****header_fixed****/
$(window).scroll(function(){
    let header = $('.header'),
        scroll = $(window).scrollTop();

    if (scroll > 0){
        header.addClass('header_bg');
    } else {
        let deopShow = header.find('.js-dropdown').is('.show');
        if(!deopShow){
            header.removeClass('header_bg');
        }

    }
});
/********************/


/*****carousel_tab*****/
$('.js-carousel-tab').click(function () {
    const $t = $(this);
    const parent = $t.parents('.nav');
    parent.find('.js-carousel-tab').removeClass('active');
    $t.addClass('active')
});