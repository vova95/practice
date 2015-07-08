$(document).ready(function() {

    $("#portfolio_grid").mixItUp();

	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});

// Portfolio alignment of blocs
        width_row = $(".container").width();

        count_cols = ( 730 >= width_row )? 1 : ( 950 >= width_row )? 2 : 3;
        //$max_height = ;
        console.log($(document).width());
        counter = 0;
        $(" .hidden").each(function(i,elem){
            if( (i+1) % count_cols == 0 ){
                $(this).addClass("show col-md-12 col-sm-12 col-xs-12");
                $(this).removeClass("hidden");
            }
            console.log('counter='+counter);
            console.log('rez='+(counter % count_cols));
            counter++;
        });

// Portfolio alignment of blocs
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