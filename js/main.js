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
});