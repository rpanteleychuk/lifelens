<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>

<?php get_header(); ?>


<?php

if( have_rows('content') ):

    while( have_rows('content') ) : the_row();

        // get layout
        $layout = get_row_layout();


        // layout_1
        if( $layout === 'text' ): ?>

            <div class="layout-1">
                <p><?php the_sub_field('colums'); ?></p>
                <p><?php the_sub_field('text'); ?></p>
                <p><?php the_sub_field('text_2'); ?></p>
            </div>

        <?php // layout_2
        elseif( $layout === 'image' ): ?>

            <div class="layout-2">

                <p><?php the_sub_field('caption'); ?></p>
            </div>

        <?php endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>
