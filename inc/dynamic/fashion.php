<?php 
global $smof_data;
if( !isset($data) ){
	$data = $smof_data;
}

$data = ftc_array_atts(
 array(
    /* FONTS */
    'ftc_body_font_enable_google_font'					=> 1
    ,'ftc_body_font_family'								=> "Arial"
    ,'ftc_body_font_google'								=> "Montserrat"

    ,'ftc_secondary_body_font_enable_google_font'		=> 1
    ,'ftc_secondary_body_font_family'					=> "Arial"
    ,'ftc_secondary_body_font_google'					=> "Montserrat"

    /* COLORS */
    ,'ftc_primary_color'									=> "#a07936"

    ,'ftc_secondary_color'								=> "#444444"

    ,'ftc_body_background_color'								=> "#ffffff"
    /* RESPONSIVE */
    ,'ftc_responsive'									=> 1
    ,'ftc_layout_fullwidth'								=> 0
    ,'ftc_enable_rtl'									=> 0

    /* FONT SIZE */
    /* Body */
    ,'ftc_font_size_body'								=> 14
    ,'ftc_line_height_body'								=> 24

    /* Custom CSS */
    ,'ftc_custom_css_code'								=> ''
), $data);		

$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

if( $data['ftc_body_font_enable_google_font'] ){
  $ftc_body_font        = $data['ftc_body_font_google']['font-family'];
}
else{
  $ftc_body_font        = $data['ftc_body_font_family'];
}
if( $data['ftc_secondary_body_font_enable_google_font'] ){
     $ftc_secondary_body_font  = $data['ftc_secondary_body_font_google']['font-family'];
}
else{
   $ftc_secondary_body_font  = $data['ftc_secondary_body_font_family'];
}


?>  

/*
1. FONT FAMILY
2. GENERAL COLORS
*/


/* ============= 1. FONT FAMILY ============== */

.fashion .element-header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link .link_texts,.fs-title-nl,.elementor-widget-heading h1.elementor-heading-title,.fashion .element-header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link .link_text,.fs-blog .blogs-slider.style_2 .post-text h4 a,.fs-tab-right.elementor-element .tab-title,.fashion .element-header-layout1 .ftc-sb-account .ftc_login > a span,.fashion .element-header-layout1 span.text-cart,.fashion .element-header-layout1 span.cart-ico,.ftc-element-testimonial.style_2.swiper-container-horizontal h4.name,.woocommerce.widget_shopping_cart .total strong,p.woocommerce-mini-cart__buttons.buttons > a.button.wc-forward
{
  font-family: <?php echo esc_html($ftc_body_font) ?>;
}
.fashion .element-header-layout1 .ftc-search-product .ftc-search .search-button
{
  font-family: <?php echo esc_html($ftc_body_font) ?> !important;
}
span,.ftc-cookies-inner
{
  font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
}

/* ========== 2. GENERAL COLORS ========== */
/* ========== Primary color ========== */

.ftc-element-testimonial .infomation:before,.ftc-element-testimonial.style_2.swiper-container-horizontal .name a,.navigation-slider .style_2:hover,.ftc-product-categories .button-shop .btn-category:hover,.fs-tab-right .elementor-widget-ftc-products-tabs .tab-title.active .title,.tabs-content-wrapper.style_2 .group-button-product .compare .icon-refresh, .tabs-content-wrapper.style_2 .group-button-product .yith-wcwl-add-to-wishlist i, .tabs-content-wrapper.style_2 .woocommerce .products .product .images .add-to-cart a.add_to_cart_button:before,.fs-footer-bottom .elementor-widget-image-box .elementor-image-box-content h2:hover,.fashion .element-header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link .link_text:hover,.fs-blog .ftc-readmore:hover,.fashion .element-header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,.fashion .element-header-layout1 .mobile-button:hover .fa-bars:before, .fashion .element-header-layout1 .header-content .ftc-shop-cart:hover .ftc-cart-tini .cart-total,.fs-banner-h2 .elementor-button-text:hover,.elementor-social-icon i:hover:before,.tabs-content-wrapper.style_2 .woocommerce .products .product .images .compare.added:before,.tabs-content-wrapper.style_2 .woocommerce .product .images .group-button-product > div.add-to-cart a.added_to_cart.wc-forward:after,.tabs-content-wrapper.style_2 .woocommerce .products .product .images .add-to-cart a.button:before,.menu-mobile .mobile-wishlist .tini-wishlist:hover .count-wish ,.blogs-slider .post-text h4:hover a
,.fs-welcome .elementor-text-editor .fs-name-text a,.fs-blog .blogs-slider.style_2 .post-text h4 a:hover,.tabs-content-wrapper.style_2 .woocommerce .product .images .group-button-product > div.yith-wcwl-add-to-wishlist a,.fashion .element-header-layout1 .ftc-search-product:hover .ftc-search .search-button,.fashionelement-header-layout1 .ftc-sb-account .ftc_login > a:hover span,.fashion.element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,.fashion.element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *
{
    color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
    color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.fs-nav-slider .tp-bullet.selected,.fs-nav-slider .tp-bullet:hover
{
 background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}

.tabs-content-wrapper.style_2 .woocommerce .product .images .group-button-product > div:hover, .tabs-content-wrapper.style_2 .woocommerce .product .images .group-button-product > div a:hover, .tabs-content-wrapper.style_2 .woocommerce .product .images .group-button-product > a:hover,.newsletter-big-class .sub .button-sub input[type="submit"],.fs-ft-top .elementor-widget-container,.fashion.element-header-layout3 div.nav-right,.fashion.element-header-layout3 .ftc-search-product
{
    background-color: <?php echo esc_html($ftc_primary_color) ?>;
}

.navigation-slider .style_2:hover,.fs-tab-right .elementor-widget-ftc-products-tabs .tab-title.active .title,.fs-banner-h2 .elementor-button.elementor-size-sm,.fashion.element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *
{
    border-color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
border-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}

{
    border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
    border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
    border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
    border-right-color: <?php echo esc_html($ftc_primary_color) ?>;
}

/* ========== Secondary color ========== */

{
    color: <?php echo esc_html($ftc_secondary_color) ?>;
}

{
    background-color: <?php echo esc_html($ftc_secondary_color) ?>;
}

{
    border-color: <?php echo esc_html($ftc_secondary_color) ?>;
}

/* ========== Body Background color ========== */
