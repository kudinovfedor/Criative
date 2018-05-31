</div><!-- .page-wrapper end-->

<footer class="footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <?php
    $email    = get_theme_mod('bw_additional_email');
    $skype    = get_theme_mod('bw_additional_skype');
    $viber    = get_theme_mod('bw_additional_viber');
    $address  = get_theme_mod('bw_additional_address');
    $whatsapp = get_theme_mod('bw_additional_whatsapp');
    $telegram = get_theme_mod('bw_additional_telegram');
    ?>

    <div class="footer-info">
        <div class="row">
            <div class="col-lg-2 footer-logo text-left">
                <div class="logo"><?php get_default_logo_link(); ?></div>
            </div>
            <div class="col-lg-8 footer-details text-center">
                <div class="row">
                    <?php if ( ! empty($address)) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <b><?php _e('Address', 'brainworks'); ?>:</b>
                            <?php echo esc_html($address); ?>
                        </div>
                    <?php }
                    if (has_phones()) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <b><?php _e('Telephone', 'brainworks'); ?>:</b>
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
                        </div>
                    <?php }
                    if ( ! empty($email)) { ?>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <b><?php _e('Email', 'brainworks'); ?>:</b>
                            <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-2 footer-social text-right">
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
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
