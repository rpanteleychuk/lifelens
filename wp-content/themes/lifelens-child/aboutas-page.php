<?php
/*
Template Name: About As
Template Post Type: page
*/
?>
<?php get_header(); ?>


<div class="main-container">

    <?php

    if (have_rows('about_us_page')):

        while (have_rows('about_us_page')) : the_row();

            // get layout
            $layout = get_row_layout();


            // layout_1
            if ($layout === 'section1'): ?>

                <div class="abus-section1">
                    <h3 class="font-heading text-grey"><?php the_sub_field('heading'); ?></h3>
                    <div class="dflex page-container">
                        <div class="first-block">
                            <h4 class="text-grey semi-bold-font"><?php the_sub_field('heading_block'); ?></h4>
                            <p class="section3-font"><?php the_sub_field('text_block'); ?></p>
                        </div>
                        <div class="second-block">
                            <div class="text-right">
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
                            <div>
                                <?php

                                $image = get_sub_field('image');

                                if (!empty($image)): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                            <p class="text-center text-grey p-about-as-font"><?php the_sub_field('post_image_text'); ?></p>
                        </div>
                    </div>
                </div>


            <?php // layout_2
            elseif ($layout === 'section2'): ?>

                <div class="abus-section2">
                    <div class="page-container d-flex">
                        <div class="img-block">
                            <?php

                            $image = get_sub_field('image');

                            if (!empty($image)): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>"/>

                            <?php endif; ?>
                        </div>
                        <div class="content-block">
                            <h3 class="semi-bold-font text-grey"><?php the_sub_field('heading'); ?></h3>
                            <p class="text-white section3-font"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>

            <?php // layout_3
            elseif( $layout === 'section3' ): ?>

                <div class="abus-section3">
                    <h3 class="font-heading text-grey"><?php the_sub_field('heading'); ?></h3>
                    <div class="d-flex page-container">
                        <div class="count-box">
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('head_text_1'); ?></p>
                            <p class="count count-font text-center"><?php the_sub_field('counter_1'); ?></p>
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('second_head_text_1'); ?></p>
                            <p class="count-font-box"><?php the_sub_field('counter_text_1'); ?></p>
                        </div>
                        <div class="count-box">
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('head_text_2'); ?></p>
                            <p class="count count-font text-center"><?php the_sub_field('counter_2'); ?></p>
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('second_head_text_2'); ?></p>
                            <p class="count-font-box"><?php the_sub_field('counter_text_2'); ?></p>
                        </div>
                        <div class="count-box">
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('head_text_3'); ?></p>
                            <p class="count count-font text-center"><?php the_sub_field('counter_3'); ?></p>
                            <p class="count-head-font text-grey text-center"><?php the_sub_field('second_head_text_3'); ?></p>
                            <p class="count-font-box"><?php the_sub_field('counter_text_3'); ?></p>
                        </div>
                    </div>
                </div>




<!--            --><?php //// layout_4
//            elseif( $layout === 'layout_2' ): ?>
<!---->
<!--                <div class="layout-2">-->
<!--                    <p>--><?php //the_sub_field('sub_field_2'); ?><!--</p>-->
<!--                </div>-->



            <?php endif;

        endwhile;

    endif;

    ?>
</div>


<?php get_footer(); ?>
