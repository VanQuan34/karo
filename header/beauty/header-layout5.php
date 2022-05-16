<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php global $smof_data; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebasneueregular" type="text/css"/>
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

     <!-- Page Slider -->

     <?php if( is_page() && isset($ftc_page_datas) ): ?>
     <?php if( $ftc_page_datas['ftc_page_slider'] && $ftc_page_datas['ftc_page_slider_position'] == 'before_header' ): ?>
        <div class="ftc-rev-slider">
            <?php ftc_show_page_slider(); ?>
        </div>
    <?php endif; ?>
<?php endif; ?>

<header id="masthead" class="site-header">
    <div class="header-ftc element-header-layout5">
        <div class="header-nav">
            <div class="container">
                <div class="mobile-button">
                            <div class="mobile-nav">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                <div class="nav-left">
                </div>
                <div class="logo-wrapper is-desktop"><?php ftc_theme_logo(); ?></div>
                <div class="logo-wrapper is-mobile"><?php ftc_theme_mobile_logo(); ?></div>
                <div class="nav-center">
                    <?php if( $smof_data['ftc_enable_search'] ): ?>
                    <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                    <?php endif; ?> 
                </div>
                <div class="nav-right">
                    <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                        <div class="ftc-shop-cart"><?php echo ftc_tiny_cart(); ?></div>
                    <?php endif; ?>
                    <div class="mobile-buttona btn-q">
                        <div class="mobile-nava nav-q">
                            <i class="fa fa-bars"></i>
                            <div class="nav-right">
                                <?php if( $smof_data['ftc_enable_tiny_account'] ): ?>
                                    <div class="ftc-sb-account"><?php echo ftc_tiny_account(); ?></div>
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
            </div>
        </div>
        <div class="header-content">
            <div class="container">

            <?php if ( has_nav_menu( 'vertical' ) ) : ?>
            <div class="navigation-vertical">
                    <h3 class="menu-our"><i class="fa fa-bars"></i><?php echo esc_html__('OUR CATEGORIES','karo'); ?></h3>
                    <?php get_template_part( 'template-parts/navigation/navigation', 'vertical' ); ?>              
            </div><!-- .navigation-top -->
        <?php endif; ?> 
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <div class="navigation-primary">
                
                    <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>              
            </div><!-- .navigation-top -->
        <?php endif; ?>        
            </div>
        </div>
            
    </div> 
</header><!-- #masthead -->

<?php if( is_page() && isset($ftc_page_datas) ): ?>
<?php if( $ftc_page_datas['ftc_page_slider'] && $ftc_page_datas['ftc_page_slider_position'] == 'before_main_content' ): ?>
    <!-- Page Slider -->
    <div class="ftc-rev-slider">
        <?php ftc_show_page_slider(); ?>
    </div>
<?php endif; ?>
<?php endif; ?>

<div class="site-content-contain">
  <div id="content" class="site-content">