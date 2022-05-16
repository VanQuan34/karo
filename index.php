<?php
global $smof_data;

$isset = isset($smof_data['ftc_style_for_elementor'])  && isset($smof_data['ftc_header_layout_beauty'])  && isset($smof_data['ftc_enable_header_topic']) ;
if ($isset && isset($smof_data['ftc_enable_header_topic']) && $smof_data['ftc_enable_header_topic'] && $ftc_page_datas['ftc_header_layout'] == 'default' ){

// if( $smof_data['ftc_style_for_elementor'] == 'jewelry' ){
// 	get_template_part('header/jewelry/header', $smof_data['ftc_header_layout_jewelry']);

if( isset($smof_data['ftc_style_for_elementor']) && $smof_data['ftc_style_for_elementor'] == 'beauty' ){
	get_template_part('header/beauty/header', $smof_data['ftc_header_layout_beauty']);
}
elseif( $smof_data['ftc_style_for_elementor'] == 'fashion' ){
	get_template_part('header/fashion/header', $smof_data['ftc_header_layout_fashion']);
}
// elseif( $smof_data['ftc_style_for_elementor'] == 'gifts' ){
// 	get_template_part('header/gifts/header', $smof_data['ftc_header_layout_gifts']);
// }
}
else{

	get_header($smof_data['ftc_header_layout']) ;
	
}

$page_column_class = ftc_page_layout_columns_class( $smof_data['ftc_blog_layout'] );
$page_title = esc_html__( 'Blog', 'karo' );
ftc_breadcrumbs_title(true, true, $page_title);
?>

<div class="container">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php esc_html_e( 'Posts', 'karo' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
            <div class="row">
               <!-- Left Sidebar -->
		<?php if( $page_column_class['left_sidebar'] ): ?>
			<aside id="left-sidebar" class="ftc-sidebar <?php echo esc_attr($page_column_class['left_sidebar_class']); ?>">
				<?php if( is_active_sidebar( $ftc_page_datas['ftc_left_sidebar'] ) ): ?>
						<?php dynamic_sidebar( $ftc_page_datas['ftc_left_sidebar'] ); ?>
				<?php endif; ?>
			</aside>
		<?php endif; ?>	
		<!-- end left sidebar -->
		<main id="main" class="site-main <?php echo esc_attr($page_column_class['main_class']); ?>">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . esc_html__( 'Previous', 'karo' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'karo' ) . '</span>' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( '', 'karo' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
               <!-- Right Sidebar -->
		<?php if( $page_column_class['right_sidebar'] ): ?>
			<aside id="right-sidebar" class="ftc-sidebar <?php echo esc_attr($page_column_class['right_sidebar_class']); ?>">
				<?php if( is_active_sidebar($ftc_page_datas['ftc_right_sidebar'])): ?>
						<?php dynamic_sidebar($ftc_page_datas['ftc_right_sidebar']); ?>
				<?php endif; ?>
			</aside>
		<?php endif; ?>	
		<!-- end right sidebar -->
            </div>
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer();
