jQuery().ready(function(){
	$(".ascenseur").next("div").hide();
	$(".ascenseur").click(function(){
        // Si le sous-menu est ouvert, on le referme :
        if ($(this).next("div:visible").length != 0) {
            $(this).next("div").slideUp();
        }
        // Si le sous-menu est caché, on ferme les autres et on l'affiche :
        else {
            $(".ascenseur div").slideUp();
            $(this).next("div").slideDown();
        }

    });
});