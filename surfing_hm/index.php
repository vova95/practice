<?php get_header(); 
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Surfing
 */
?>

<script type="text/javascript">
    window.selectedMenu = "Home";
</script>
<script type="text/javascript">
    $('.navigation_panel').hide();
</script>

<div class="facebook_lnk">
    <a href="#">
        <img src="<?php bloginfo('template_url'); ?>/img/facebook-link.png"/>
    </a>
</div>
<div id="carousel" class="carousel slide main-carousel">

    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <?php $posts = get_posts(array('post_type' => 'slider'));
        $i = 1;
        for ($i = 1; $i < count($posts); $i++) {
            ?>
            <li data-target="#carousel" data-slide-to="<?php echo $i ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <?php $post = $posts[0];
            the_post_thumbnail('full'); ?>
            <div class="carousel-caption">
                <h2><?php the_title() ?></h2>
            </div>
        </div>
        <? for ($i = 1; $i < count($posts); $i++) {
            $post = $posts[$i]; ?>

            <div class="item">
                <?php the_post_thumbnail('full'); ?>
                <div class="carousel-caption">
                    <h2><?php the_title() ?></h2>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<div class="container-fluid">
    <div id="member" class="row">
        <div class="container">
            <h2><?php
                $posts = get_posts(array('post_type' => 'become_member_list'));
                foreach ($posts as $post) {
                    if (get_post_meta($post->ID, 'header', true) != "") {
                        echo get_post_meta($post->ID, 'header', true);
                        break;
                    }
                }
                ?></h2>
            <?php
            $query = new WP_Query(array('post_type' => 'become_member_list',
                'post_status' => 'publish'));
            $i = 1;
            if ($query->have_posts()):
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-4 col-md-4">
                        <section class="row">
                            <span class="num"><?php echo $i;
                                $i++; ?></span>
                            <h4><?php the_title() ?></h4>
                        </section>
                        <p><?php the_content() ?></p>
                    </div>
                <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <div id="towards" class="row">
        <div class="container">
            <!--            <h2>Towards wind and waves</h2>-->
            <h2><?php
                $posts = get_posts(array('post_type' => 'portfolio'));
                foreach ($posts as $post) {
                    if (get_post_meta($post->ID, 'header', true) != "") {
                        echo get_post_meta($post->ID, 'header', true);
                        break;
                    }
                }
                ?></h2>

            <div class="col-lg-6 img-couple">
                <div class="row">
                <?php $query = new WP_Query(array('post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => 4));
                $i = 0;
                if ($query->have_posts()):
                while ($query->have_posts()) :
                $query->the_post();
                $attachments = get_posts(array(
                    'post_type' => 'attachment',
                    'numberposts' => -1,
                    'post_status' =>'any',
                    'post_parent' => $post->ID
                ));
                $urlArray=wp_get_attachment_image_src($attachments[1]->ID, 'full', true);
                ?>
                    <div
                        class="col-lg-6 col-md-4 col-sm-4 col-xs-4 col-lg-offset-0 col-md-offset-2  col-sm-offset-0 col-xs-offset-4 ">
                        <figure>
                            <a class="grow popup" href="<?php echo $urlArray[0] ?>" title="<?php the_title()?>">

                                <div class="zoom-btn">
                                    <img src="<?php bloginfo('template_url'); ?>/img/zoom.png">
                                </div>
                                <?php the_post_thumbnail() ?>
                            </a>
                        </figure>
                        <h5>
                            <a href="<?php echo the_permalink() ?>" title="<?php echo the_title() ?>">
                            <?php the_title()?></a>
                        </h5>
                    </div>
                    <?php if($i==1){
                        $i=0;
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='col-lg-6 img-couple'>";
                        echo "<div class='row'>";
                }else $i++;
                    ?>
                <?php endwhile;?>
                <?php endif; ?>
                </div>
            </div>

        </div>
        <div class="button">
            <?php $array=wp_get_nav_menu_items('home_read_more_btn');?>
            <a class="read_more_btn" href="<?php echo $array[0]->url;?>"><span>READ MORE</span></a>
        </div>
    </div>
    <div id="about" class="row">
        <div class="container">
            <h2><?php
                $posts = get_posts(array('post_type' => 'aboutus'));
                foreach ($posts as $post) {
                    if (get_post_meta($post->ID, 'header', true) != "") {
                        echo get_post_meta($post->ID, 'header', true);
                        break;
                    }
                }
                ?></h2>

            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-lg-6">
                        <h6><?php the_title() ?></h6>

                        <p><?php echo $post->post_content ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div id="contacts" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/cb.jpg">
        <div class="container">
            <section>
                <?php $query = new WP_Query(array('post_type' => 'contacts',
                    'post_status' => 'publish',
                    'posts_per_page' => '1'));
                if ($query->have_posts()):
                    while ($query->have_posts()):$query->the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>
