<?php get_header(); ?>

<!--Flex Slider-->
<section class="eleven columns row">
    <div class="flexslider">
        <ul class="slides">

            <?php
            query_posts(array('category_name' => 'Featured', 'posts_per_page' => 3));
            if (have_posts()) : while (have_posts()) : the_post();
                    ?>

                    <li class="featured-game">
                        <?php the_post_thumbnail('Featured'); ?>
                        <div class="caption">
                            <a href="#" class="game-title"><?php the_title(); ?></a>
                            <?php the_excerpt(); ?>
                            <!--<a href="#" class="playnow">Play Now</a>-->
                        </div>
                    </li>

                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </ul>
    </div>
</section>

<div class="left_pannel">
<!--Android-->
<div id="android" class="app_cat">
    <?php query_posts('post_type=android'); ?>
    <?php if (have_posts()) : ?>
        <h3>Android</h3>
        <?php while (have_posts()) : the_post(); ?>

            <div class="accordion">
                <h3><?php the_title(); ?></h3>
                <div class="entry">   
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_date('d/m/Y'); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>

<!--Phone Gap-->
<div id="phonegap" class="app_cat">
    <?php query_posts('post_type=phone gap'); ?>
    <?php if (have_posts()) : ?>
        <h3>Phone Gap</h3>
        <?php while (have_posts()) : the_post(); ?>

            <div class="accordion">
                <h3><?php the_title(); ?></h3>
                <div class="entry">   
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_date('d/m/Y'); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>

</div>
<div class="right_pannel">

<!--Web Design-->
<div id="web_design" class="app_cat">
    <?php query_posts('post_type=web design'); ?>
    <?php if (have_posts()) : ?>
        <h3>Web Design</h3>
        <?php while (have_posts()) : the_post(); ?>

            <div class="accordion">
                <h3><?php the_title(); ?></h3>
                <div class="entry">   
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_date('d/m/Y'); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>


<!--Graphic Design-->
<div id="graphic_design" class="app_cat">
    <?php query_posts('post_type=graphic'); ?>
    <?php if (have_posts()) : ?>
        <h3>Grapgic Design</h3>
        <?php while (have_posts()) : the_post(); ?>

            <div class="accordion">
                <h3><?php the_title(); ?></h3>
                <div class="entry">   
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_date('d/m/Y'); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>

</div>

<?php //get_sidebar(); ?>   
<?php get_footer(); ?>