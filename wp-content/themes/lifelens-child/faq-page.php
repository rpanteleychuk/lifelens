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
            elseif ($layout === 'section_2'): ?>
                <?php if (have_rows('faq_block')): ?>
                    <div class="faq-section2">
                    <?php while (have_rows('faq_block')): the_row();

                        // vars

                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');

                        ?>


                        <button class="accordion"><?php echo $question; ?></button>
                        <div class="panel">
                            <p><?php echo $answer; ?></p>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>

            <?php endif;

        endwhile;

    endif;

    ?>
</div>


<?php get_footer(); ?>
