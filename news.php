<?php get_header(); ?>
<section class="news_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="content block">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <article class="current_news">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                        <div class="container wow fadeIn">
                            <a href="<?php the_permalink(); ?>"><img class="news_image" src="<?php bloginfo('template_url'); ?>/img/img-10.jpg"
                                                    alt="Aliquam erat volutpat"/></a>
                        </div>
                        <?php the_excerpt(); ?>

                        <a class="read_more_btn btn_vertical" href="<?php the_permalink(); ?>"><span>READ MORE</span></a>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pages">
                        <!-- <ul class="pagination pagination-sm">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                        </ul> -->
                        <?php posts_nav_link() ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php get_sidebar(); ?>
                <div class="recent_posts block">
                    <h1>Recent posts</h1>

                    <div class="post">
                        <img class="recent_post_image" src="<?php bloginfo('template_url'); ?>/img/img-10.jpg" alt="Aliquam erat volutpat"/>
                        <span class="glyphicon glyphicon-calendar"></span>
                        <time class="post_date">May 27, 2014 6:31 am</time>

                        <h3><a href="#">Aliquam erat volutpat</a></h3>

                        <p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim,
                            pulvinar
                            ac,
                            lorem. Lorem ipsum dolor sit…</p>
                    </div>
                    <div class="post">
                        <img class="recent_post_image" src="<?php bloginfo('template_url'); ?>/img/img-11.jpg" alt="Mauris posuere"/>
                        <span class="glyphicon glyphicon-calendar"></span>
                        <time class="post_date">March 14, 2013 8:28 pm</time>

                        <h3><a href="#">Mauris posuere</a></h3>

                        <p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim,
                            pulvinar
                            ac,
                            lorem. Lorem ipsum dolor sit…</p>
                    </div>
                    <div class="post">
                        <img class="recent_post_image" src="<?php bloginfo('template_url'); ?>/img/img-12.jpg" alt="Mauris posuere"/>
                        <span class="glyphicon glyphicon-calendar"></span>
                        <time class="post_date">March 5, 2013 8:31 pm</time>

                        <h3><a href="#">Donec tempor libero</a></h3>

                        <p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim,
                            pulvinar
                            ac,
                            lorem. Lorem ipsum dolor sit…</p>
                    </div>
                </div>
                <div class="recent_comments block">
                    <h1>Recent Comments</h1>

                    <div class="comment">
                        <img class="avatar" src="<?php bloginfo('template_url'); ?>/img/avatar.png"/>
                        <span class="username"><span class="glyphicon glyphicon-user"></span>Admin</span>
                    <span class="comment_date"><time
                            class="glyphicon glyphicon-calendar"></time>May 27, 2014 8:09 am</span>
                        <a href="#">Aliquam erat volutpat</a>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.
                            Aenean...</p>
                    </div>
                    <div class="comment">
                        <img class="avatar" src="<?php bloginfo('template_url'); ?>/img/avatar.png"/>
                        <span class="username"><span class="glyphicon glyphicon-user"></span>Admin</span>
                    <span class="comment_date"><time
                            class="glyphicon glyphicon-calendar"></time>May 27, 2014 8:09 am</span>
                        <a href="#">Aliquam erat volutpat</a>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.
                            Aenean...</p>
                    </div>
                    <div class="comment">
                        <img class="avatar" src="<?php bloginfo('template_url'); ?>/img/avatar.png"/>
                        <span class="username"><span class="glyphicon glyphicon-user"></span>Admin</span>
                    <span class="comment_date"><time
                            class="glyphicon glyphicon-calendar"></time>May 27, 2014 8:09 am</span>
                        <a href="#">Aliquam erat volutpat</a>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.
                            Aenean...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>