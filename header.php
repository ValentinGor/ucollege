<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Universal_College
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="header">
        <div class="header__logo">
            <div class="header__logo_text">
                <h1>
                    <a href="<?php echo get_home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
            <div class="header__logo_slug">
                <?php bloginfo('description'); ?>
            </div>
        </div>
        <div class="header__info">
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-1',
                'menu' => 'Top menu',
                'container' => 'div',
                'container_class' => 'header__info_menu',
            ]);
            ?>
            <div class="header__info_contact">
                <ul>
                    <li>
                        <?php if (get_field('main_phone', 'option')) { ?>
                            <?php
                            $tel = (get_field('main_phone', 'option'));
                            $tel = preg_replace('![^0-9+]!', '', $tel);
                            ?>
                            <a href="tel:<?php echo $tel; ?>"><?php the_field('main_phone', 'option'); ?></a>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if (get_field('main_mail', 'option')) { ?>
                            <a href="mailto:<?php the_field('main_mail', 'option'); ?>">Mail: <?php the_field('main_mail', 'option'); ?></a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__menu">
            <div class="header__menu_link">
                <a id="mobile-menu-open" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>

            <div id="mobile-menu-list" class="header__menu_mobile">

                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-2',
                    'menu' => 'Primary menu',
                    'container' => 'div',
                    'container_class' => 'mobile__menu',
                ]);
                ?>
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu' => 'Top menu',
                    'container' => 'div',
                    'container_class' => 'mobile__menu',
                ]);
                ?>
                <div class="mobile__menu">
                    <ul>
                        <li>
                            <?php if (get_field('main_phone', 'option')) { ?>
                                <?php
                                $tel = (get_field('main_phone', 'option'));
                                $tel = preg_replace('![^0-9+]!', '', $tel);
                                ?>
                                <a href="tel:<?php echo $tel; ?>"><?php the_field('main_phone', 'option'); ?></a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php if (get_field('main_mail', 'option')) { ?>
                                <a href="mailto:<?php the_field('main_mail', 'option'); ?>">Mail: <?php the_field('main_mail', 'option'); ?></a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>


            </div>

        </div>
    </div>
</header>

<nav>
    <div class="nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-2',
            'menu' => 'Primary menu',
            'container' => 'div',
            'container_class' => 'nav__menu',
        ]);
        ?>
        <div class="nav__search">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/') ?>">
                <label class="display-none" for="s">Search</label>
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search this website..."/>
                <input type="submit" id="searchsubmit" value="SEARCH"/>
            </form>
        </div>
    </div>
</nav>