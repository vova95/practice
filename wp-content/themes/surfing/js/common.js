$(document).ready(function() {

    $("#portfolio_grid").mixItUp();

	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});

	$(".popup").magnificPopup({type:"image"});
	$(".popup_content").magnificPopup({
		type:"inline",
		midClick: true
	});

	$(".left .resume_item").animated("fadeInLeft", "fadeOutDown");
	$(".right .resume_item").animated("fadeInRight", "fadeOutDown");

	
	$(".portfolio_item").each(function(i) {
		$(this).find("a.popup_content").attr("href", "#work_" + i);
		$(this).find(".port_descr_full").attr("id", "work_" + i);
	});

	$("input, select, textarea").jqBootstrapValidation();

});