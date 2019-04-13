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

                <div class="section1" style="background-image: url(<?php the_sub_field('image'); ?>);">
                    <div class="page-container">
                        <h3 class="font-heading-white"><?php the_sub_field('heading'); ?></h3>
                        <p><?php the_sub_field('main_text'); ?></p>
                        <?php
                        $link = get_sub_field('link');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>



            <?php // layout_2
            elseif ($layout === 'section2'): ?>

                <div class="section2">
                    <p><?php the_sub_field('heading'); ?></p>
                    <img src="<?php the_sub_field('image'); ?>">
                    <p><?php the_sub_field('main_text'); ?></p>
                </div>


            <?php endif;

        endwhile;

    endif;

    ?>

</div>

<?php get_footer(); ?>
