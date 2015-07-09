<footer class="main_footer">
<!-- <?php wp_footer(); ?> -->
    <div id="back-top-wrapper" class="visible-desktop">
        <div id="back-top">
            <a id="top" style="display: none">
                <span></span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#">Surfing</a> &copy; 2015. <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Gallery About -->
<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery/dist/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/libs/waypoints/waypoints.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/libs/magnific-popup/jquery.magnific-popup.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/libs/mixitup/mixitup.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/libs/animate/animate-css.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<!-- Gallery About -->

<!-- News -->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/wow/dist/wow.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main_menu.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main_menu_controller.js"></script>
  <!--  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.iu.toTop.js"></script> -->
<!-- /News -->


<!-- Home -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax/parallax.js"></script>
    <script type="text/javascript">
        //window.selectedMenu = "Home";

        new WOW().init();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });
            $('#top').click(function () {
                $('body,html').animate({scrollTop: 0}, 800);
            });

			
        });
		
		
	
</script>  
 <script type="text/javascript">
				
			$('.main-carousel').carousel({
				interval: 1000 * 10 
			});
</script>

<!-- /Home -->
<?php wp_footer()?>
</body>
</html>