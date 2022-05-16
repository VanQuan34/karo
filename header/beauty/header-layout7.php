<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php global $smof_data; ?>
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
       <a class="skip-link screen-reader-text" href="#content"></a>

       <header id="masthead" class="site-header">

        <div class="header-ftc element-header-layout7">

            <div class="header-content">
                <div class="header-nav menu2">

                    <div class="container-fluid">
                        <div class="mobile-button">
                            <div class="mobile-nav">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                        <div class="logo-wrapper is-desktop"><?php ftc_theme_logo(); ?></div>
                        <div class="logo-wrapper is-mobile"><?php ftc_theme_mobile_logo(); ?></div>
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <div class="navigation-primary">
                                <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                            </div><!-- .navigation-top -->
                        <?php endif; ?>
                        <div class="nav-right">
                        	<?php if( $smof_data['ftc_enable_search'] ): ?>
                                <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                            <?php endif; ?>
                            <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                                <div class="ftc-shop-cart"><?php echo ftc_tiny_cart(); ?></div>
                            <?php endif; ?>
                            <?php if( $smof_data['ftc_header_language'] ): ?>
                                <div class="ftc-sb-language"><?php echo ftc_wpml_language_selector(); ?></div>
                            <?php endif; ?>
                            <?php if( $smof_data['ftc_header_currency'] ): ?>
                                <div class="header-currency"><?php echo ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <div class="site-content-contain">
          <div id="content" class="site-content">
