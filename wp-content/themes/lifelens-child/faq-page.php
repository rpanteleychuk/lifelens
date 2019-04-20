<?php
/*
Template Name: FAQ Page
Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="main-container">
    <?php

    if (have_rows('faq_page')):

        while (have_rows('faq_page')) : the_row();

            // get layout
            $layout = get_row_layout();


            // layout_1
            if ($layout === 'section_1'): ?>

                <div class="faq-section1">
                    <h3 class="font-heading text-white text-center"><?php the_sub_field('page_name'); ?></h3>
                </div>

            <?php // layout_2
            elseif ($layout === 'layout_2'): ?>

                <div class="faq-section2">
                    <p><?php the_sub_field('sub_field_2'); ?></p>
                </div>

            <?php endif;

        endwhile;

    endif;

    ?>
</div>


<?php get_footer(); ?>
