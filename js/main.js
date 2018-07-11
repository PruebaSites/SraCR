$('.btn-menu-responsive').click(function(){
	openMenu();
});

function openMenu(){
	var btn_menu        = $('.btn-menu-responsive');
	var menu            = $('#menu-responsive');
    var class_ouverture = 'animate';
    var class_fermeture = 'animated';
    var liste           = $('#liste li');
  
  // Si le menu est ouvert le ferme
	if( $(menu).hasClass('menu-open') )
	{
		$(btn_menu).removeClass('menu-open').addClass('menu-close');
		$('header').removeClass('menu-open').addClass('menu-close');
        $(menu).removeClass('menu-open '+class_ouverture).addClass('menu-close ');
        $("#liste1").attr("id","liste");
	// Sinon l'ouvre
	}else{
		$(btn_menu).removeClass('menu-close').addClass('menu-open');
		$('header').removeClass('menu-close').addClass('menu-open');
        $(menu).removeClass('menu-close ').addClass('menu-open '+class_ouverture);
        $("#liste").attr("id","liste1");

	}
}

$( document ).ready(function() {
    var heights = $(".height-max").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".height-max").height(maxHeight);


    var heights = $(".img-wrapper").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".img-wrapper").height(maxHeight);



    var heights = $(".col-news").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".col-news").height(maxHeight);


    var heights = $(".col-small-news").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".col-small-news").height(maxHeight);


    $('.aniview').AniView();

});

$(window).ready(function(){
    $(".boton").wrapInner('<div class=botontext></div>');
        
    $(".botontext").clone().appendTo( $(".boton") );
    
    $(".boton").append('<span class="twist"></span><span class="twist"></span><span class="twist"></span><span class="twist"></span>');
    
    $(".twist").css("width", "25%").css("width", "+=3px");
});




/* window.onload = function() {
	recCarouselEvents();
}

function recCarouselEvents() {


	var recTranslate = 0;
	var recTranslateIncrem = 904;
	var carRecsItems = $('.carousel-recs .carousel-listitem');
	var carRecsItem = $(carRecsItems[0]);
	var carRecsItemWidth = carRecsItem.outerWidth(true);
	var carRecsRowWidth = (carRecsItemWidth * 4);
	var carRecsMaxRowWidth = (carRecsItemWidth * carRecsItems.length);

	$('.carousel-prev-rec').click(function() {
		// PREV RECS
		carRecsList = $(this).parents('.carousel-header')
			.siblings('.carousel-body').find('.carousel-list');
		recTranslate += recTranslateIncrem;

		if (recTranslate <= 0) {
			carRecsList.css('transform', 'translatex(' + recTranslate + 'px)');
		} else {
			recTranslate = 0;
		}
	})

	$('.carousel-next-rec').click(function() {
		// NEXT RECS
		carRecsList = $(this).parents('.carousel-header')
			.siblings('.carousel-body').find('.carousel-list');
		recTranslate -= recTranslateIncrem;

		if (recTranslate >= -1808) {
			carRecsList.css('transform', 'translatex(' + recTranslate + 'px)');
		} else {
			recTranslate = -1808;
		}

	});
}
 */

    var $slider = $('.slider');
    var $slideBox = $slider.find('.slide-box');
    var $leftControl = $slider.find('.slide-left');
    var $rightControl = $slider.find('.slide-right');
    var $slides = $slider.find('.slide');
    var numItems = $slider.find('.slide').length;
    var position = 0;


   /*  var windowWidth = $(window).width();
    $slides.width(windowWidth); */
    $leftControl.on('click', function(){
    var width = $slider.width();
    position = position - 1 >= 0 ? position - 1 : numItems - 1;
    if(position != numItems-1){
        $slider.find('.slide').eq(position + 1).css('margin-left', 0);
    }
    else{
        $slider.find('.slide:gt(0)').each(function(index){
        $(this).css('margin-left', width * -1 + 'px');
        });
    }
    });

    $rightControl.on('click', function(){
    var width = $slider.width();
    position = position + 1 < numItems ? position + 1 : 0;
    if(position != 0){
        $slider.find('.slide').eq(position).css('margin-left',  width * -1 + 'px');
    }
    else{
        $slider.find('.slide').css('margin-left', 0);
    }
    });

    $(window).resize(function(){
    $slides.width($(window).width()).height($(window).height);
    });




$( document ).ready(function() {
    $(".slider-galeria").click(function(){
        var item = $(this).attr("id");
        console.log(item);

        if (item == "gala-2008") {
            $(".Gala2008").removeClass('hidden');
        }else{
            $(".Gala2008").addClass('hidden');
        }

        if (item == "gala-2009") {
            $(".Gala2009").removeClass('hidden');
            $(".carousel-header").addClass("hidden");
            $(".carousel-list").addClass("reset-style");
        }else{
            $(".Gala2009").addClass('hidden');
            $(".carousel-header").removeClass("hidden");
            $(".carousel-list").removeClass("reset-style");
        }

        if (item == "fundacion-2010") {
            $(".fundacion2010").removeClass('hidden');
        }else{
            $(".fundacion2010").addClass('hidden');
        }

        if (item == "gala-2010") {
            $(".Gala2010").removeClass('hidden');
        }else{
            $(".Gala2010").addClass('hidden');
        }

        if (item == "candidatas-2012") {
            $(".candidatas2012").removeClass('hidden');
        }else{
            $(".candidatas2012").addClass('hidden');
        }

        if (item == "fundacion-2012") {
            $(".fundacion2012").removeClass('hidden');
        }else{
            $(".fundacion2012").addClass('hidden');
        }

        if (item == "gala-2012") {
            $(".Gala2012").removeClass('hidden');
        }else{
            $(".Gala2012").addClass('hidden');
        }

        if (item == "candidatas-2015") {
            $(".candidatas2015").removeClass('hidden');
        }else{
            $(".candidatas2015").addClass('hidden');
        }

        if (item == "fundacion-2015") {
            $(".fundacion2015").removeClass('hidden');
        }else{
            $(".fundacion2015").addClass('hidden');
        }

        if (item == "gala-2015") {
            $(".Gala2015").removeClass('hidden');
        }else{
            $(".Gala2015").addClass('hidden');
        }

        if (item == "candidatas-2016") {
            $(".candidatas2016").removeClass('hidden');
        }else{
            $(".candidatas2016").addClass('hidden');
        }

        if (item == "fundacion-2016") {
            $(".fundacion2016").removeClass('hidden');
        }else{
            $(".fundacion2016").addClass('hidden');
        }

        if (item == "gala-2016") {
            $(".Gala2016").removeClass('hidden');
        }else{
            $(".Gala2016").addClass('hidden');
        }

        if (item == "candidatas-2017") {
            $(".candidatas2017").removeClass('hidden');
            $(".carousel-header").addClass("hidden");
        }else{
            $(".candidatas2017").addClass('hidden');
            $(".carousel-header").removeClass("hidden");
        }

        if (item == "fundacion-2017") {
            $(".fundacion2017").removeClass('hidden');
        }else{
            $(".fundacion2017").addClass('hidden');
        }

        if (item == "gala-2017") {
            $(".Gala2017").removeClass('hidden');
            $(".carousel-header").addClass("hidden");
        }else{
            $(".Gala2017").addClass('hidden');
            $(".carousel-header").removeClass("hidden");
        }
    });

});

/* $( document ).ready(function() {

    $("#cerrar").click(function(){
        $(".carousel-list").addClass("reset-style");
    })

}) */