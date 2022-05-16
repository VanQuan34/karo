<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php global $smof_data,$ftc_page_datas; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php 
    ftc_theme_favicon();
    wp_head(); 
    ?>
</head>
<?php
$header_classes = array();
if( isset($smof_data['ftc_enable_sticky_header']) && $smof_data['ftc_enable_sticky_header'] ){
    $header_classes[] = 'header-sticky';
}
?>
<body <?php body_class(); ?>>
    <?php giftsshop_header_mobile_navigation(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_attr( 'Skip to content', 'karo' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
                <div class="header-content ">
                    <div class="container flixer">
                        <div class="mobile-button">
                            <div class="mobile-nav">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>

                        <div class="logo-wrapper ftc-logo is-desktop"><?php ftc_theme_logo(); ?></div>
                        <div class="logo-wrapper ftc-logo is-mobile"><?php ftc_theme_mobile_logo(); ?></div>

                        <div class="header-hn">
                            <?php if( class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist'] || isset($smof_data['ftc_enable_tiny_account']) && $smof_data['ftc_enable_tiny_account']): ?>
                                <div class="mobile-buttona btn-q">
                                    <div class="mobile-nava nav-q">
                                        <i class="fa fa-bars"></i>
                                        <div class="nav-right">
                                            <div class="coco">
                                                <?php if( isset($smof_data['ftc_enable_tiny_account']) && $smof_data['ftc_enable_tiny_account'] ): ?>
                                                    <div class="ftc-sb-account"><?php print_r(ftc_tiny_account()) ; ?></div>
                                                <?php endif; ?>
                                                <?php if( class_exists('YITH_WCWL') && isset($smof_data['ftc_enable_tiny_wishlist']) && $smof_data['ftc_enable_tiny_wishlist'] ): ?>
                                                    <div class="ftc-my-wishlist"><?php echo wp_kses_post(ftc_tini_wishlist()); ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif?>	

                            <?php if( isset($smof_data['ftc_enable_tiny_shopping_cart']) && $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                                <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                            <?php endif; ?>

                            <?php if( isset($smof_data['ftc_enable_search']) && $smof_data['ftc_enable_search'] ): ?>
                                <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                            <?php endif; ?>  
                        </div>

                        <?php if (has_nav_menu('primary')) : ?>
                            <div class="navigation-primary">
                                <?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="lang-ver">
                            <?php if ( isset($smof_data['ftc_social_header_vertical']) && $smof_data['ftc_social_header_vertical']): ?>
                                <div class="header_extra_content"><?php echo wp_kses_post(do_shortcode(stripslashes($smof_data['ftc_social_header_vertical']))); ?>
                            </div>
                        <?php endif; ?>

                        <?php if( isset($smof_data['ftc_enable_tiny_shopping_cart']) && $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                            <div class="nav-right">
                                <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Page Slider -->
                <?php if( is_page() && isset($ftc_page_datas) ): ?>
                <?php if( $ftc_page_datas['ftc_page_slider'] && $ftc_page_datas['ftc_page_slider_position'] == 'before_main_content' ): ?>
                    <!-- Page Slider -->
                    <div class="ftc-rev-slider">
                        <?php ftc_show_page_slider(); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <!-- end page slide -->
        </div>
    </header>
    <!-- #masthead -->

    <div class="site-content-contain">
        <div id="content" class="site-content">
