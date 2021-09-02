<footer>
    <div class="footer">
        <div class="footer__info">
            <div class="footer__info_block">
                <div class="footer__item">
                    <div class="footer__item_head">
                        <?php if (get_field('contact_form_head', 'option')) { ?>
                            <h4><?php the_field('contact_form_head', 'option'); ?></h4>
                        <?php } ?>
                    </div>
                    <div class="footer__item_info">
                        <div class="footer__item_info-form">
                            <?php if (get_field('contact_form_slug_before_form', 'option')) { ?>
                                <span><?php the_field('contact_form_slug_before_form', 'option'); ?></span>
                            <?php } ?>
                            <?php if (get_field('contact_form', 'option')) { ?>
                                <?php $contact_form = get_field('contact_form', 'option'); ?>
                                <?php echo do_shortcode('[contact-form-7 id="' . $contact_form . '"]'); ?>
                            <?php } ?>
                            <?php if (get_field('contact_form_slug_after_form', 'option')) { ?>
                                <span><?php the_field('contact_form_slug_after_form', 'option'); ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="footer__item_head">
                        <h4>
                            <?php
                            // Get the name of the menu assigned to a region
                            $name_menu = wp_get_nav_menu_name('menu-3');
                            // Displaying the menu name
                            echo $name_menu;
                            ?>
                        </h4>
                    </div>

                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-3',
                        'menu' => 'Footer menu 1',
                        'container' => 'div',
                        'container_class' => 'footer__item_info',
                    ]);
                    ?>

                </div>
                <div class="footer__item">
                    <div class="footer__item_head">
                        <h4>
                            <?php
                            // Get the name of the menu assigned to a region
                            $name_menu = wp_get_nav_menu_name('menu-4');
                            // Displaying the menu name
                            echo $name_menu;
                            ?>
                        </h4>
                    </div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-4',
                        'menu' => 'Footer menu 2',
                        'container' => 'div',
                        'container_class' => 'footer__item_info',
                    ]);
                    ?>
                </div>
                <div class="footer__item">
                    <div class="footer__item_head">
                        <h4>
                            <?php
                            // Get the name of the menu assigned to a region
                            $name_menu = wp_get_nav_menu_name('menu-5');

                            // Displaying the menu name
                            echo $name_menu;
                            ?>
                        </h4>
                    </div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-5',
                        'menu' => 'Footer menu 3',
                        'container' => 'div',
                        'container_class' => 'footer__item_info',
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="footer__copy_text">
                <?php if (get_field('copyright_link', 'option')) { ?>
                    <div class="footer__copy_text-copyright">
                        <a href="<?php the_field('copyright_link', 'option'); ?>">
                            <?php the_field('copyright_text', 'option'); ?>
                        </a>
                    </div>
                <?php } ?>
                <?php if (get_field('author_link', 'option')) { ?>
                    <div class="footer__copy_text-author">
                        <a href="<?php the_field('author_link', 'option'); ?>" target="_blank">
                            <?php the_field('author_text', 'option'); ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
