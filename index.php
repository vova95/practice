
<?php get_header(); ?>


<script type="text/javascript">
    window.selectedMenu = "Gallery";
</script>

<section id="portfolio" class="s_portfolio">

		<div class="container">
			<div class="row">
				<div class="filter_div controls">
                    <strong>Categories: </strong>
					<ul class="category_ul">

						<li class="filter active category_li" data-filter="all">Show all</li>

                        <?php if( have_posts() ) : ?>
                        <?php while( have_posts() ) : the_post(); ?>
                        <?php endwhile; ?>
                        <?php endif ?>
                            <li class="filter category_li" data-filter=".category-1">Gallery Category 1</li>
                            <li class="filter category_li" data-filter=".category-2">Gallery Category 2</li>
                            <li class="filter category_li" data-filter=".category-3">Gallery Category 3</li>

					</ul>
				</div>
                <script>
//                    $(document).ready(function(){
//                        width_row = $(".container").width();
//
//                        count_cols = ( 730 >= width_row )? 1 : ( 950 >= width_row )? 2 : 3;
//                        //$max_height = ;
//                        console.log($(document).width());
//                        counter = 0;
//                        $(" .hidden").each(function(i,elem){
//                            if( (i+1) % count_cols == 0 ){
//                                $(this).addClass("show col-md-12 col-sm-12 col-xs-12");
//                                $(this).removeClass("hidden");
//                            }
//                            console.log('counter='+counter);
//                            console.log('rez='+(counter % count_cols));
//                            counter++;
//                        });
//                    });
                </script>
				<div id="portfolio_grid">
                    <?php if(have_posts()) : ?>
                        <?php
                        while(have_posts()) :the_post(); $first_post = $post->ID; ?>

					<div class="mix col-md-4 col-sm-6 col-xs-12 portfolio_item category-1" >
                        <a href="<?php
                                    $large_img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo $large_img_url[0];
                                ?>" class="grow popup" title="<?php the_title()?>">
	                        	<div class="zoom_btn">
                           			<img src="<?php bloginfo('template_url'); ?>/img/zoom.png">
	                        	</div>
                                <?php the_post_thumbnail(array( 270, 270 )); ?>
                        </a>

						<div class="port_item_cont">
							<h3><a href="#"><?php the_title()?></a></h3>
							<?php the_excerpt(); ?>
                            <a class="read-more-btn" href="<?php the_permalink($first_post); ?>">
                            	<span>READ MORE</span>
                            </a>
						</div>
					</div>

                    <div class="hidden"></div>

                    <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagenavi">
                        <?php if(function_exists('wp_pagenavi')) { ?>
                            <?php wp_pagenavi();  ?>
                        <?php } ?>

                    </div>
                </div>
            </div>

</section>

<?php get_footer(); ?>