
<?php get_header(); ?>


<script type="text/javascript">
    window.selectedMenu = "Gallery";
</script>

<section class="port_descr">
    <div class="s_content s_portfolio_full">
        <div class="container">
            <div class="row ">
                <?php if(have_posts()) : ?>
                    <?php  while(have_posts()) :the_post(); $first_post = $post->ID; ?>
<!---->
<!--                            <a href="--><?php
//                            $large_img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
//                            echo $large_img_url[0];
//                            ?><!--" class="grow popup" title="--><?php //the_title()?><!--">-->
<!--                                <div class="zoom_btn">-->
<!--                                    <img src="--><?php //bloginfo('template_url'); ?><!--/img/zoom.png">-->
<!--                                </div>-->
<!--                                --><?php //the_post_thumbnail(array( 270, 270 )); ?>
<!--                            </a>-->
<!---->
<!---->
<!--                                <h3><a href="#">--><?php //the_title()?><!--</a></h3>-->
<!---->
<!--                                --><?php //the_excerpt(); ?>

                <div class="col-md-7 left">
                    <div class="descr_img">
                        <img src="<?php $large_img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo $large_img_url[0]; ?>"
                             alt="" draggable="false">
                    </div>

                    <div class="port_item_switch">
                        <ul class="pager ">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <li >
                                        <a href="#">« Previous post</a>
                                    </li>
                                </div>
                                <div class="col-md-6 right">
                                    <li>
                                        <a href="#">Next Post »</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div> <!--Col-->

                <div class="col-md-5 right">
                    <div class="port_item_switch">
                        <div class="portfolio_meta">
                        <span class="post_category">
                            <i class="glyphicon glyphicon-bookmark"></i>


                            <a href="#" rel="tag"><?php the_category(' » ', ''); ?></a>
                        </span>
                        <span class="post_tag">
                            <i class="glyphicon glyphicon-tag"></i>
                            <a href="#" rel="tag">accusantium</a>,
                             <a href="#" rel="tag">consectetur</a>,
                              <a href="#" rel="tag">cumque</a>
                        </span>
                        </div>
                    </div>
                    <div class="portfolio_meta_list">
                        <ul class=" port_item_switch">
                            <li><strong>Client:</strong>Lorem ipsum</li>
                            <li><strong>Date:</strong>07/07/2012</li>
                            <li><strong>Info:</strong>Phasellus ultrices tellus eget ipsum</li>
                            <li><a target="_blank" href="http://demolink.org">Launch Project</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula.
                        </p>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros.
                        </p>
                        <p>
                            Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus.
                        </p>
                    </div>
                </div>
            </div> <!--IMG  row-->

            <div class="row">
                <div class="col-md-7 left">
                    <div  class="related-posts">
                        <h3>Related Posts</h3>
                        <ul class="related-posts_list">
                            <div class="row">
                                <div class="col-md-3">
                                    <li class="related-posts_item">
                                        <a href="#" title="Excepteur sint occ aecat cupidatat">
                                            <img alt="Excepteur sint occ aecat cupidatat" src="<?php bloginfo('template_url'); ?>/img/portfolio-images/slider/img-8-650x400.jpg">
                                        </a>
                                        <p>
                                            <a href="#">Excepteur sint occ aecat cupidatat</a>
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li class="related-posts_item">
                                        <a href="#" title="Excepteur sint occ aecat cupidatat">
                                            <img alt="Excepteur sint occ aecat cupidatat" src="<?php bloginfo('template_url'); ?>/img/portfolio-images/slider/img-8-650x400.jpg">
                                        </a>
                                        <p>
                                            <a href="#">tat</a>
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li class="related-posts_item">
                                        <a href="#" title="Excepteur sint occ aecat cupidatat">
                                            <img alt="Excepteur sint occ aecat cupidatat" src="<?php bloginfo('template_url'); ?>/img/portfolio-images/slider/img-8-650x400.jpg">
                                        </a>
                                        <p>
                                            <a href="#">Excepteur sint occ aecat cupidatat</a>
                                        </p>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li class="related-posts_item">
                                        <a href="#" title="Excepteur sint occ aecat cupidatat">
                                            <img alt="Excepteur sint occ aecat cupidatat" src="<?php bloginfo('template_url'); ?>/img/portfolio-images/slider/img-8-650x400.jpg">
                                        </a>
                                        <p>
                                            <a href="#">Excepteur sint occ aecat cupidatat</a>
                                        </p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <p class="nocomments">No Comments Yet.</p>

                    <div id="respond" class="respond">
                        <h3>Leave a comment</h3>

                        <form action="http://formspree.io/agragregra@ya.ru" class="main_form" novalidate target="_blank" method="post">
                            <label class="form-group">
                                <input type="text" name="name" placeholder="Name*" data-validation-required-message="Enter your name" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <input type="email" name="email" placeholder="E-mail" data-validation-required-message="Invalid e-mail" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <input type="url" name="website" placeholder="Enter the site" data-validation-required-message="The website address is not valid" required /><!--data-fv-field="website"-->
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <textarea name="message" rows="10" placeholder="Your comment*" data-validation-required-message="Enter your comment" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <a class="read-more-btn" href="">
                                <span>submit comment</span>
                            </a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

    <?php get_footer(); ?>

                <?php endwhile; ?>
            <?php endif; ?>
