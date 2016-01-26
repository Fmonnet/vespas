$(function() {

    $('#burger').on('click', function(){
    	$('.header').addClass('header-visible');

    });

    $('#burger').on('click', function(){
    	$('.overlay').addClass('overlay-visible');
    });

    $('.overlay').on('click', function(){
    	$(this).removeClass('overlay-visible');
    	$('.header').removeClass('header-visible');
    });

    $(".slider").owlCarousel({
    	items: 1,
    	loop: true,
    	nav: true,
    	navText: ['<i class="material-icons">keyboard_arrow_right</i>','<i class="material-icons">keyboard_arrow_left</i>']
    });

    $('.gallery-item').magnificPopup({type:'image',
        gallery:{
        enabled:true
    }});

     $(".partenaires-slider").owlCarousel({
        loop: true,
        nav: true,
        navText: ['<i class="material-icons">keyboard_arrow_right</i>','<i class="material-icons">keyboard_arrow_left</i>']
    });

     $(window).on('scroll', function(){
        if ($(this).scrollTop() > 1){
            $('.gotop').addClass('gotop-visible');
        }
        else{
            $('.gotop').removeClass('gotop-visible');
        }
     });

    $('.gotop').on('click', function(event){

        event.preventDefault();

        $('html,body').animate({
          scrollTop: 1
        }, 1500);
    });
});
