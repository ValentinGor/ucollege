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
                <a href="<?php get_home_url(); ?>">
                    Universal College
                </a>
            </div>
            <div class="header__logo_slug">
                Free PSD Website Template
            </div>
        </div>
        <div class="header__info">
            <div class="header__info_menu">
                <ul>
                    <li><a href="#">Libero</a></li>
                    <li><a href="#">Maecenas</a></li>
                    <li><a href="#">Mauris</a></li>
                    <li><a href="#">Suspendisse</a></li>
                </ul>
            </div>
            <div class="header__info_contact">
                <ul>
                    <li><a href="tel:xxxxxxxxxxxxxxx">Tel: xxxxx xxxxxxxxxx</a></li>
                    <li><a href="mailto:info@domain.com">Mail: info@domain.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<nav>
    <div class="nav">
        <div class="nav__menu">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">DropDown</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </div>
        <div class="nav__search">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/') ?>">
                <label class="display-none" for="s">Search</label>
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search this website..."/>
                <input type="submit" id="searchsubmit" value="SEARCH"/>
            </form>
        </div>
    </div>
</nav>