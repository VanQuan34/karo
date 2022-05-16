<?php
global $smof_data, $post;

$isset = isset($smof_data['ftc_style_for_elementor'])  && isset($smof_data['ftc_header_layout_beauty'])  && isset($smof_data['ftc_enable_header_topic']) ;
if ($isset && isset($smof_data['ftc_enable_header_topic']) && $smof_data['ftc_enable_header_topic'] && $ftc_page_datas['ftc_header_layout'] == 'default' ){

// if( $smof_data['ftc_style_for_elementor'] == 'jewelry' ){
//  get_template_part('header/jewelry/header', $smof_data['ftc_header_layout_jewelry']);

if( isset($smof_data['ftc_style_for_elementor']) && $smof_data['ftc_style_for_elementor'] == 'beauty' ){
    get_template_part('header/beauty/header', $smof_data['ftc_header_layout_beauty']);
}
elseif( $smof_data['ftc_style_for_elementor'] == 'fashion' ){
 get_template_part('header/fashion/header', $smof_data['ftc_header_layout_fashion']);
}
// elseif( $smof_data['ftc_style_for_elementor'] == 'gifts' ){
//  get_template_part('header/gifts/header', $smof_data['ftc_header_layout_gifts']);
// }
}
else{

    get_header($smof_data['ftc_header_layout']) ;
    
}

$page_column_class = ftc_page_layout_columns_class($smof_data['ftc_blog_details_layout']);
ftc_breadcrumbs_title(true, $smof_data['ftc_blog_details_title'], get_the_title());
?>

<div class="container">
	<div id="primary" class="content-area">
            <div class="row">
                <!-- Left Sidebar -->
                <?php if( $page_column_class['left_sidebar'] && $post->post_type != 'ftc_footer'): ?>
                        <aside id="left-sidebar" class="ftc-sidebar <?php echo esc_attr($page_column_class['left_sidebar_class']); ?>">
                        <?php if( is_active_sidebar($smof_data['ftc_blog_details_left_sidebar']) ): ?>
                                <?php dynamic_sidebar( $smof_data['ftc_blog_details_left_sidebar'] ); ?>
                        <?php endif; ?>
                        </aside>
                <?php endif; ?>	
                <!-- end left sidebar -->
                
		<main id="main" class="site-main col-sm-9"  style="<?php if( ($page_column_class['left_sidebar'] && $post->post_type != 'ftc_footer') || ($page_column_class['right_sidebar']) &&  $post->post_type != 'ftc_footer') { ?>width: 75%;<?php }else{ ?>width:100%;<?php } ?>">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/single-content', get_post_format() );

					the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous Post', 'karo' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . esc_html__( 'Previous', 'karo' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next Post', 'karo' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . esc_html__( 'Next', 'karo' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					) );

				endwhile; // End of the loop.
			?>
                    
		</main><!-- #main -->
                
                <!-- Right Sidebar -->
                <?php if( $page_column_class['right_sidebar'] && $post->post_type != 'ftc_footer'): ?>
                        <aside id="right-sidebar" class="ftc-sidebar <?php echo esc_attr($page_column_class['right_sidebar_class']); ?>">
                        <?php if( is_active_sidebar($smof_data['ftc_blog_details_right_sidebar']) ): ?>
                                <?php dynamic_sidebar( $smof_data['ftc_blog_details_right_sidebar'] ); ?>
                        <?php endif; ?>
                        </aside>
                <?php endif; ?>	
                <!-- end right sidebar -->
            </div>
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer();
