<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>

<?php get_header(); ?>


<?php

if( have_rows('home_page') ):

    while( have_rows('home_page') ) : the_row();

        // get layout
        $layout = get_row_layout();

        // layout_1
        if( $layout === 'section1' ): ?>

            <div class="section1">
                <p><?php the_sub_field('heading'); ?></p>
                <img src="<?php the_sub_field('image'); ?>">
                <p><?php the_sub_field('main_text'); ?></p>
            </div>

        <?php // layout_2
        elseif( $layout === 'section2' ): ?>

            <div class="section2">
                <p><?php the_sub_field('heading'); ?></p>
                <img src="<?php the_sub_field('image'); ?>">
                <p><?php the_sub_field('main_text'); ?></p>
            </div>

        <?php endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>
