<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>
    <main>
        <div class="slider">

            <?php if (have_rows('slider')): ?>
                <?php while (have_rows('slider')): the_row();
                    $image = get_sub_field('slider_image');
                    $slider_text = get_sub_field('slider_text');
                    ?>
                    <div class="slider__item">
                        <div class="slider__item_img">
                            <?php if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <div class="slider__item_text">
                            <?php echo $slider_text; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <div class="featured">

            <?php
            $featured_posts = get_field('articles');
            if( $featured_posts ): ?>
                    <?php foreach( $featured_posts as $post ):

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>

                    <div class="featured__item">
                        <div class="featured__item_img">
                            <?php
                            $image = get_field('article_img_sm');
                            if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <div class="featured__item_link">
                            <a href="<?php the_permalink(); ?>">
                                » Link Text Goes Here
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>

        <div class="content">
            <div class="content__article">

                <?php
                // we set the criteria we need for fetching data from the database
                $args = array(
                    'orderby' => 'DESC'
                );


                // query
                $query = new WP_Query($args); ?>

                <?php if ($query->have_posts()) : ?>

                    <!-- pagination -->

                    <!-- round -->
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <article>
                            <div class="article">
                                <div class="article__head">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="article__image">
                                    <?php
                                    $image = get_field('article_img_lg');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                    <?php endif; ?>
                                </div>
                                <div class="article__text">
                                    <?php if (get_field('article_description')) { ?>
                                        <?php the_field('article_description'); ?>
                                    <?php } ?>
                                </div>
                                <div class="article__link">
                                    <a href="<?php the_permalink(); ?>">
                                        Continue Reading »
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <!-- end round -->

                    <!-- pagination -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <article>
                        <div class="article">
                            <div class="article__head">
                                <h2><?php esc_html_e('No posts'); ?></h2>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>

            </div>
            <div class="content__sidebar">
                <aside>
                    <div class="content__sidebar_head">
                        <h3>Ametorci Phasellus</h3>
                    </div>

                    <?php
                    // we set the criteria we need for fetching data from the database
                    $args = array(
                        'orderby' => 'DESC'
                    );


                    // query
                    $query = new WP_Query($args); ?>

                    <?php if ($query->have_posts()) : ?>

                        <!-- pagination -->

                        <!-- round -->
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="content__sidebar_info">
                                <div class="content__sidebar_info-img">
                                    <?php
                                    $image = get_field('article_img_xs');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                    <?php endif; ?>
                                </div>
                                <div class="content__sidebar_info-txt">
                                    <h4><?php the_title(); ?></h4>
                                    <?php if (get_field('article_description')) { ?>

                                        <?php
                                        $mess = substr(get_field('article_description'), 0, 85);
                                        echo $mess;
                                        ?>

                                    <?php } ?>
                                    <a href="<?php the_permalink(); ?>">
                                        Continue Reading »
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <!-- end round -->

                        <!-- pagination -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <div class="content__sidebar_info">
                            <div class="content__sidebar_info-txt">
                                <h4><?php esc_html_e('No posts'); ?></h4>
                            </div>
                        </div>
                    <?php endif; ?>
                </aside>
                <aside>
                    <div class="content__sidebar_head">
                        <h3>Ametorci Phasellus</h3>
                    </div>
                    <div class="content__sidebar_fancybox">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/960 x 270px.png" data-fancybox="images">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80 x 80px.png" alt="img"/>
                        </a>

                    </div>
                </aside>
            </div>
        </div>

    </main>
<?php get_footer(); ?>