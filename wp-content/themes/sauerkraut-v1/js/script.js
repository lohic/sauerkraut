$(document).ready(function(){

	$('.container').stickem();
	

	$("#flip").click(function(){
		$("#panel").slideToggle("slow");
	});

	$('#sidebar').on("mouseenter", function(){ /*mouseenter*/
		$(this).addClass('top');
	});

	$('#sidebar').on("mouseleave", function(){ /*mouseleave*/
		$(this).removeClass('top');
	});

});