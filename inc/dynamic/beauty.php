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

.ftc_products_slider.swiper-container.style_2 .title-product-slider h2.title-product,
.bl-h19 .title-blogs-grid h2 p,
.elementor-element.bn-row3-h19-tx .elementor-text-editor p,
.ft-mid-h19 .title-h11,
.ft-bot-h19 p.copy,
.blog-ft-h19 .ftc-elements-blogs .post-text p,
.bn-row1-right-h20 p,
.ftc-portfolio-wrapper.style_1 .filter-bar li,
.title-blogs-grid h2 p.title-bl-h20,
.product-slider-h20 .ftc_products_slider.swiper-container.style_2 .title-product-slider h2 p.title-pr-h20,
.ftc-elements-blogs.style_v2 .ftc-blogs .post-text h4,
.heading-title .title-ft-top-h20,
p.title-h22,
.elementor-text-editor h1.title-port-h20,
.ftc_products_slider.swiper-container .ftc-product.product .item-description .product_title a,
.elementor-element.ft-mid-20-row2 .logo-ft,
.ftc-blogs-slider.style_v1 .blogs-slider .post-text h4,
.ftc-blogs-slider.style_v1 .blogs-slider .post-text p,
.ftc-image-caption .title-bn-big-h19,
.bl1-h22 .ftc-elements-blogs .post .post-text h4,
.ftc-elements-blogs .post-text p,
.banner-big-h19 .subtitle-bn-big-h19,
.elementor-text-editor h1,
.elementor-text-editor h2,
.elementor-text-editor h3,
.elementor-text-editor h4,
p.elementor-icon-box-description,
.title-h6 .ftc-image-content .ftc-image-caption,
.elementor-widget-ftc-posts-slider .post-text h4,
.elementor-widget-ftc_single_image .ftc-image-caption,
.elementor-widget-heading .elementor-heading-title,
.elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description,
.elementor-widget-ftc-nav .ftc-elements-nav-menu > .menu-item > .mme-navmenu-link,
.elementor-widget-ftc-posts-slider .post-text p,
.elementor-widget-text-editor
{
  font-family: <?php echo esc_html($ftc_body_font) ?>;
}

{
  font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
}

/* ========== 2. GENERAL COLORS ========== */
/* ========== Primary color ========== */

.ftc-shop-cart a.ftc-cart-tini:hover .my-cart span.amount,
.home19.tp-bullets .tp-bullet.selected:before,
.home7.tp-bullets .tp-bullet.selected:before,
.ftc-element-testimonial.style_1 .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:before, .ftc-element-testimonial.style_1 .swiper-pagination-bullets .swiper-pagination-bullet:hover:before,
.ft-bot-h19 .footer-menu ul li:hover a,
.ft-bot-h19 p.copy .in-ft-h19,
.element-header-layout2 .header-nav.menu2 .container-fluid .nav-right .header-currency .wcml_currency_switcher ul li:hover,
.text-bn-row1-h20 .bn-row1-right-h20 p.tx-row5
, .sl-h21 .tp-bullet.selected:before
, .bn2-h21 .bn2-h21-tx1
, .ftc_products_slider.swiper-container.style_4 .navigation-slider .nav-next:hover:before
, .ftc_products_slider.swiper-container.style_4 .navigation-slider .nav-prev:hover:before
, .ftc_products_slider.swiper-container.style_8 .navigation-slider .nav-next:hover:before
, .ftc_products_slider.swiper-container.style_8 .navigation-slider .nav-prev:hover:before
, .element-header-layout3 .nav-left > div a:before
, .element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link > .link_content > .link_text
, .element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text
, .element-header-layout4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link > .link_content > .link_text
, .element-header-layout4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text
, .element-header-layout3 .ftc-search-product .ftc-search .search-button:before
, .element-header-layout3 .ftc-shop-cart a.ftc-cart-tini.cart-item-canvas:before
, .element-header-layout7 .ftc-search-product .ftc-search .search-button:before
, .element-header-layout7 .ftc-shop-cart a.ftc-cart-tini:before
, .testi-h19 .ftc-element-testimonial.style_1 .testimonial-content .content-info .byline
, .ft-mid-h20-row3 .menu-ft a:hover
, .product-slider-h20 .ftc_products_slider.swiper-container.style_2 .ftc-product.product .images .group-button-product div.add-to-cart a.added_to_cart:hover:after
, .product-slider-h20 .ftc_products_slider.swiper-container.style_2 .ftc-product.product .images .group-button-product a.quickview:hover .icon-magnifier:before
, .ftc_products_slider.swiper-container.style_2 .navigation-slider .nav-next:hover:before
, .ftc_products_slider.swiper-container.style_2 .navigation-slider .nav-prev:hover:before
, .header-ftc .header-currency ul li:hover
, .ftc_products_slider.swiper-container.style_2 .ftc-product.product .item-description .meta_info .yith-wcwl-add-to-wishlist a:hover:before
, .ftc-blogs-slider.swiper-container .blogs-slider .post-text .meta .author.vcard a:hover
, .elementor-widget-ftc-nav ul.ftc-elements-nav-menu > li.menu-item:hover .mme-navmenu-link
, .ft-mid-h20-menu.elementor-widget-ftc-nav ul.ftc-elements-nav-menu > li.menu-item:hover .mme-navmenu-link
, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a
, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover
, .contact_info_map .info_contact a:hover
, .widget-container ul.product-categories > li.cat-parent.active >span.icon-toggle
, .widget-container ul.product-categories > li.cat-parent.active >a
, .header-ftc.element-header-layout1 .mobile-button:hover .fa-bars:before
, .header-ftc a.ftc-cart-tini.cart-item-canvas:hover:before
, .header-ftc a.ftc-cart-tini.cart-item-canvas:hover .cart-total .cart-count
, .header-ftc a.ftc-cart-tini.cart-item-canvas:hover .cart-total .my-cart .cart-title
, .ftc-product-tabs.style_2 .tabs-wrapper .tab-title.active .title
, .ftc-product-tabs.style_2 .tabs-wrapper .tab-title:hover .title
, .beauty .element-header-layout6 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *
, .beauty .element-header-layout6:not(.header-sticky-mobile) #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *
, .beauty .element-header-layout6:not(.header-sticky-mobile) #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *
, .beauty .element-header-layout6 ul li:hover a i
, .feature-h6:hover .feature-h6-nb .elementor-text-editor p
, .beauty .element-header-layout7  #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *
, .ftc_products_slider.style_7 .ftc-product.product .images .group-button-product a.quickview:hover .icon-magnifier:before
, .ftc_products_slider.style_7 .ftc-product.product .images .group-button-product a.compare:hover i:before
, .ftc_products_slider.style_7 .ftc-product.product .images .group-button-product a.compare:hover
, .tx-color-h7
, .home8.tp-bullets .tp-bullet.selected:before
, .ftc_products_slider.style_8 .ftc-product .images .group-button-product a.quickview:hover i:before
, .sub-title-testi-h8
, .footer-h8 .mc4wp-form .sub .button-sub:before
, .beauty .element-header-layout7 .header-nav .mobile-button .fa-bars:before
, .beauty .element-header-layout6 .header-content .mobile-button .fa-bars:before
, .beauty .element-header-layout5 .navigation-vertical .menu-menu-category-container > ul >li:hover a
, .beauty .element-header-layout5 .navigation-vertical .menu-menu-category-container > ul >li:hover:before
, .ftc-product-tabs.style_2 .tabs-content-wrapper .ftc-product .images .quickview:hover i:before
, .ftc_products_slider.style_6 .ftc-product.product .images .quickview:hover i:before
, .ft-mid-h5 a.mail-ft-h5:hover
, .tx-ft-bot-h6 a
, .tx-ft-bot-h6 a:hover
, .ft-mid-h5 .elementor-widget-ftc-nav ul.ftc-elements-nav-menu li:hover:before
, .beauty .element-header-layout3 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link > .link_content > .link_text
, .beauty .element-header-layout3 #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover > .item_link > .link_content > .link_text
, .button-pr-tab-h5 .elementor-text-editor a
, .footer-top-h8 .footer-child1-h8 p:hover a
, .ftc-blogs-slider.style_v2 .blogs-slider .post-text h4:hover a
, .ft-mid-h19 .mc4wp-form .sub .button-sub:hover:before
{
    color: <?php echo esc_html($ftc_primary_color) ?>;
}

.ftc_products_slider.style_7 .ftc-product.product .images .group-button-product div.add-to-cart:hover a:before
, .ftc-product-tabs.style_2 .tabs-content-wrapper .ftc-product .item-description .meta_info a:hover i
, .ftc_products_slider.style_6 .ftc-product .item-description .meta_info a:hover i
, .ftc_products_slider.style_7 .ftc-product.product .images .group-button-product div.yith-wcwl-add-to-wishlist:hover a:before
, .ftc_products_slider.style_8 .ftc-product .item-description .meta_info a:hover i
{
    color: <?php echo esc_html($ftc_primary_color) ?> !important;
}

#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link
, #mega_main_menu > .menu_holder > .menu_inner > ul > li:hover .item_link
, .ftc_products_slider.swiper-container.style_2 .title-product-slider h2.title-product:before 
, .ftc_products_slider.swiper-container.style_2 .title-product-slider h2.title-product:after
, .ftc-element-testimonial.style_1 .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active:after
, .bl-h19 .title-blogs-grid h2:before
, .bl-h19 .title-blogs-grid h2:after
, .list-icon-ft-h19 ul.list-icons li:hover
, .ft-mid-h19 .title-h11:before
, .ftc_products_slider.swiper-container.style_3 .swiper-pagination-bullet-active
, .text-bn-row1-h20 .bn-row1-right-h20:before
, .text-bn-row1-h20 .bn-row1-right-h20 p.tx-row5:after
, .ftc-elements-blogs.style_v2 .ftc-blogs .post-text a.ftc-readmore:hover:after
, .ftc-elements-blogs.style_v2 .ftc-blogs .post-text a.ftc-readmore:hover:before
, .ft-top-h20 .mc4wp-form .sub input
, h2 .tit-pr-h21:before
, h2 .tit-pr-h21:after
, .home19.tp-bullets .tp-bullet.selected:after
, .home7.tp-bullets .tp-bullet.selected:after
, .ftc_products_slider.swiper-container.style_4 .ftc-product.product .images .group-button-product div.add-to-cart a
, .ftc_products_slider.swiper-container.style_5 .ftc-product.product .images .group-button-product div.add-to-cart a
, .tx1-sv1-h22:before
, .ftc-elements-blogs.style_v3 .inner-wrap .element-date-timeline
, .ftc-element-testimonial.style_1 .testimonial-content .content-info .byline:after
, .slider-h19 .sl1-h19 .btn-bor:hover:before
, .btn-bor:hover:before
, .ft-icon-h19.elementor-widget-icon-list:not(.ft-icon-h20) .elementor-icon-list-icon:hover
, .details_thumbnails .owl-nav .owl-prev:hover
, .details_thumbnails .owl-nav .owl-next:hover
, .single-product #right-sidebar>section.widget-container.widget_recently_viewed_products h3.widget-title:after
, .service02 .service-r >.wpb_wrapper:before
, .beauty .element-header-layout5
, .beauty .element-header-layout5 .header-nav
, .beauty .element-header-layout5 .ftc-search-product .ftc-search button.search-button
, .beauty .element-header-layout5.header-sticky-mobile
, .title-tab-sl-h5
, .beauty .element-header-layout6 .nav-right > div.mobile-buttona.btn-q .nav-right
, .title-h7 .elementor-heading-title:before
, .title-h7 .elementor-heading-title:after
, .button-bn1-h8:after
, .ftc-element-testimonial.style_4 .swiper-pagination-bullet-active
, .button-bn1-h8 .ftc-element-image .wp-caption:after
{
    background-color: <?php echo esc_html($ftc_primary_color) ?>;
}
{
    background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}

.ftc_products_slider.swiper-container.style_4 .ftc-products.swiper-wrapper .swiper-slide:hover, .ftc_products_slider.swiper-container.style_5 .ftc-products.swiper-wrapper .swiper-slide:hover,
.pr-deal-h5 .ftc_products_deal_slider.style_1 .ftc-deal-products .images a:before,
.ftc-element-testimonial.style_3 .testimonial-content .avatar-image:hover
{
    border-color: <?php echo esc_html($ftc_primary_color) ?>;
}

{
    border-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}

.beauty .ftc-sb-language .lang_sel_click ul li ul
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
@media only screen and (min-width: 992px){
    .ftc_products_slider.style_8 .ftc-product .item-description .meta_info a.add_to_cart_button
    , .ftc_products_slider.style_8 .ftc-product .item-description .meta_info a.added_to_cart
    , .beauty .element-header-layout6.header-sticky-mobile .header-content
    , .ftc_products_slider.style_6 .ftc-product .item-description .meta_info a.add_to_cart_button
    , .ftc_products_slider.style_6 .ftc-product .item-description .meta_info a.added_to_cart
    , .ftc-product-tabs.style_2 .tabs-content-wrapper .ftc-product .item-description .meta_info a.add_to_cart_button
    , .ftc-product-tabs.style_2 .tabs-content-wrapper .ftc-product .item-description .meta_info a.added_to_cart
    {
        background-color: <?php echo esc_html($ftc_primary_color) ?>;
    }
}
@media only screen and (min-width: 992px){
    .ftc_products_slider.style_8 .ftc-product .item-description .meta_info a:hover:before
    , .ftc_products_slider.style_6 .ftc-product .item-description .meta_info a:hover:before
    , .ftc-product-tabs.style_2 .tabs-content-wrapper .ftc-product .item-description .meta_info a:hover:before
    {
        color: <?php echo esc_html($ftc_primary_color) ?> !important;
    }
}
@media only screen and (max-width: 991px){
    .beauty .element-header-layout6 .nav-right .ftc-shop-cart a.ftc-cart-tini
    {
        color: <?php echo esc_html($ftc_primary_color) ?>;
    }
}
/* ========== Body Background color ========== */
