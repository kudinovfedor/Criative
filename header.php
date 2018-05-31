<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">

    <header class="header <?php echo is_front_page() ? 'is-front' : ''; ?>">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo header-logo on-mobile-hide"><?php get_default_logo_link(); ?></div>
                    </div>
                    <div class="col-lg-8 header-phone">
                        <?php if (has_phones()) { ?>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <ul class="phone">
                                <?php foreach (get_phones() as $phone) { ?>
                                    <li class="phone-item">
                                        <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                           class="phone-number">
                                            <?php echo esc_html($phone); ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 header-nav text-right">
                <div class="row">
                    <div class="col-lg-9">
                        <?php if (has_nav_menu('main-nav')) { ?>
                            <nav class="nav js-menu">
                                <button type="button" tabindex="0"
                                        class="menu-item-close menu-close js-menu-close"></button>
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'main-nav',
                                    'container'      => false,
                                    'menu_class'     => 'menu-container',
                                    'menu_id'        => '',
                                    'fallback_cb'    => 'wp_page_menu',
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'          => 3
                                )); ?>
                            </nav>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="button-medium header-btn">
                            <?php _e('Leave application', 'brainworks'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-wrapper container">

        <div class="nav-mobile-header <?php echo is_front_page() ? 'is-front' : ''; ?>">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link(); ?></div>
        </div>

        <?php /*

    get_default_logo_link();

    <?php if (function_exists('pll_the_languages')) { ?>
        <ul class="lang">
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0, 'hide_if_empty' => 0, 'display_names_as' => 'name')); ?>
        </ul>
    <?php } ?>

    <?php if (has_social()) { ?>
        <ul class="social">
            <?php foreach (get_social() as $social) { ?>
                <li class="social-item">
                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link" target="_blank">
                        <i class="fa <?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                           aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if (has_phones()) { ?>
        <ul class="phone">
            <?php foreach (get_phones() as $phone) { ?>
                <li class="phone-item">
                    <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number">
                        <?php echo esc_html($phone); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <button type="button" class="button-medium <?php the_lang_class('js-call-back'); ?>"><?php _e('Call back', 'brainworks'); ?></button>

    <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
    <h3><?php bloginfo('description'); ?></h3>
    <h3><?php bloginfo('admin_email'); ?></h3>
    */ ?>
