(function($){

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $('#header__icon').onScroll(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    /* Je veux pouvoir masquer le menu si on clique sur le cache */
    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

})(jQuery);


$(window).scroll(function() {

	if ((window).scrollTop())<($("div").position().top)	{
		$('body').toggleClass('with--sidebar');
	}


	}