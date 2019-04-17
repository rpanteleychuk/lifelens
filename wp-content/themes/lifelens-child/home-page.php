<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="main-container">

    <?php

    if (have_rows('home_page')):

        while (have_rows('home_page')) : the_row();

            // get layout
            $layout = get_row_layout();

            // layout_1
            if ($layout === 'section1'): ?>

                <div class="section1"
                     style="background: url(<?php the_sub_field('image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="page-container">
                        <h3 class="font-heading text-white"><?php the_sub_field('heading'); ?></h3>
                        <p class="main-text-font"><?php the_sub_field('main_text'); ?></p>
                        <?php
                        $link = get_sub_field('link');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button-blue" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>


            <?php // layout_2
            elseif ($layout === 'section2'): ?>

                <div class="section2">
                    <div class="page-container section2-flex">
                        <p class="section2-font text-white"><?php the_sub_field('white_text'); ?><span
                                    class="text-light-green"><?php the_sub_field('green_text'); ?></span></p>
                        <div>
                            <?php
                            $link = get_sub_field('link');
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button-blue" href="<?php echo esc_url($link_url); ?>"
                                   target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>


            <?php // layout_3
            elseif ($layout === 'section3'): ?>

                <div class="section3">
                    <div class="page-container section3-flex">
                        <div>
                            <h3 class="font-heading text-white"><?php the_sub_field('heading'); ?></h3>
                            <p class="section3-font text-white"><?php the_sub_field('main_text'); ?></p>
                        </div>
                        <div>
                            <?php

                            $image = get_sub_field('image');

                            if (!empty($image)): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>"/>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>



            <?php // layout_4
            elseif ($layout === 'section4'): ?>

                <div class="section4">
                    <div>
                        <h3 class="font-heading text-grey"><?php the_sub_field('heading'); ?></h3>

                        <?php if (have_rows('gallery')): ?>

                            <div class="img-gallery">

                                <?php while (have_rows('gallery')): the_row();

                                    // vars
                                    $image = get_sub_field('image');
                                    $heading = get_sub_field('heading');
                                    $text = get_sub_field('text');

                                    ?>

                                    <div class="holder">
                                        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>

                                        <div class="block">
                                            <h4 class="gallery-head-font text-white text-center"><?php echo $heading; ?></h4>
                                            <p class="gallery-font text-white"><?php echo $text; ?></p>
                                        </div>

                                    </div>

                                <?php endwhile; ?>

                            </div>

                        <?php endif; ?>

                    </div>
                </div>


            <?php // layout_5
            elseif ($layout === 'section5'): ?>

                                <div class="section5">
                                    <div class="page-container">
                                        <h3 class="font-heading text-grey text-center"><?php the_sub_field('heading'); ?></h3>
                                        <?php echo do_shortcode('[slide-anything id="191"]'); ?>
                                    </div>
                                </div>





            <?php // layout_6
            elseif ($layout === 'section6'): ?>

                <div class="section5">
                    <p><?php the_sub_field('heading'); ?></p>
                    <img src="<?php the_sub_field('image'); ?>">
                    <p><?php the_sub_field('main_text'); ?></p>
                </div>




<!--            --><?php //// layout_6
//            elseif ($layout === 'section6'): ?>
<!---->
<!--                <div class="section5">-->
<!--                    <p>--><?php //the_sub_field('heading'); ?><!--</p>-->
<!--                    <img src="--><?php //the_sub_field('image'); ?><!--">-->
<!--                    <p>--><?php //the_sub_field('main_text'); ?><!--</p>-->
<!--                </div>-->


            <?php endif;

        endwhile;

    endif;

    ?>

</div>





<?php get_footer(); ?>
