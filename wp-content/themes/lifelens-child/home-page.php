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
                                        <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                             alt="<?php echo $image['alt'] ?>"/>

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

                <div class="section6">
                    <div class="page-container">
                        <h3 class="font-heading text-grey text-center"><?php the_sub_field('heading'); ?></h3>
                        <p class="section6-font text-grey text-center"><?php the_sub_field('text'); ?></p>

                        <div class="flex-content tab">
                            <div class="left-button-field">
                                <div>
                                    <button class="tablinks active"
                                            onclick="openTab(event, 'questionnare')"><?php the_sub_field('button_1'); ?></button>

                                </div>
                                <div>
                                    <button class="tablinks"
                                            onclick="openTab(event, 'dashboard')"><?php the_sub_field('button_2'); ?></button>
                                </div>
                            </div>

                            <div class="content-field">
                                <div id="questionnare" class="tabcontent" style="display: block;">
                                    <div class="card-img">
                                        <?php

                                        $image = get_sub_field('image_1');

                                        if (!empty($image)): ?>

                                            <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><?php the_sub_field('card_header_1'); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php the_sub_field('card_content_1'); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div id="dashboard" class="tabcontent">
                                    <div class="card-img">
                                        <?php

                                        $image = get_sub_field('image_2');

                                        if (!empty($image)): ?>

                                            <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><?php the_sub_field('card_header_2'); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php the_sub_field('card_content_2'); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div id="reporting" class="tabcontent">
                                    <div class="card-img">
                                        <?php

                                        $image = get_sub_field('image_3');

                                        if (!empty($image)): ?>

                                            <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><?php the_sub_field('card_header_3'); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php the_sub_field('card_content_3'); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div id="future" class="tabcontent">
                                    <div class="card-img">
                                        <?php

                                        $image = get_sub_field('image_4');

                                        if (!empty($image)): ?>

                                            <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                                 alt="<?php echo $image['alt']; ?>"/>

                                        <?php endif; ?>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><?php the_sub_field('card_header_4'); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php the_sub_field('card_content_4'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="right-button-field">
                                <div>
                                    <button class="tablinks"
                                            onclick="openTab(event, 'reporting')"><?php the_sub_field('button_3'); ?></button>
                                </div>
                                <div>
                                    <button class="tablinks"
                                            onclick="openTab(event, 'future')"><?php the_sub_field('button_4'); ?></button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
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


            <?php // layout_7
            elseif ($layout === 'section7'): ?>

                <div class="section7">
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
                            <h3 class="font-heading text-grey"><?php the_sub_field('heading'); ?></h3>
                            <p class="section7-font"><?php the_sub_field('text'); ?></p>
                        </div>
                        <div class="link-block">
                            <div>
                                <?php
                                $link = get_sub_field('link_1');
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
                                $link = get_sub_field('link_2');
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
                </div>


            <?php // layout_8
            elseif ($layout === 'section8'): ?>

                <div class="section8">
                    <div class="page-container">
                        <div class=" d-flex">
                            <div class="content-block">
                                <h3 class="font-heading text-white"><?php the_sub_field('heading'); ?></h3>
                                <p class="section3-font text-white"><?php the_sub_field('text'); ?></p>
                            </div>
                            <div class="img-block">
                                <?php

                                $image = get_sub_field('image');

                                if (!empty($image)): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>"
                                         alt="<?php echo $image['alt']; ?>"/>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


            <?php // layout_9
            elseif ($layout === 'section9'): ?>

                <div class="section7">
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
                            <h3 class="font-heading text-grey"><?php the_sub_field('heading'); ?></h3>
                            <p class="section7-font"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>


                <!--            --><?php //// layout_8
//            elseif ($layout === 'section8'): ?>
                <!---->
                <!--                <div class="section8">-->
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
