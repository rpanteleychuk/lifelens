<?php
/*
Template Name: About As
Template Post Type: page
*/
?>
<?php get_header(); ?>


<div class="main-container">

    <?php

    if( have_rows('parent_field') ):

        while( have_rows('parent_field') ) : the_row();

            // get layout
            $layout = get_row_layout();


            // layout_1
            if( $layout === 'layout_1' ): ?>

                <div class="layout-1">
                    <p><?php the_sub_field('sub_field_1'); ?></p>
                </div>

            <?php // layout_2
            elseif( $layout === 'layout_2' ): ?>

                <div class="layout-2">
                    <p><?php the_sub_field('sub_field_2'); ?></p>
                </div>

            <?php endif;

        endwhile;

    endif;

    ?>
</div>



<?php get_footer(); ?>
