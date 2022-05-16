<?php

$isset = isset($smof_data['ftc_style_for_elementor'])  && isset($smof_data['ftc_header_layout_beauty'])  && isset($smof_data['ftc_enable_header_topic']) ;
if ( $isset && isset($smof_data['ftc_enable_header_topic']) && $smof_data['ftc_enable_header_topic'] && $ftc_page_datas['ftc_header_layout'] == 'default' ){

// if( $smof_data['ftc_style_for_elementor'] == 'jewelry' ){
// 	get_template_part('header/jewelry/header', $smof_data['ftc_header_layout_jewelry']);

if( $smof_data['ftc_style_for_elementor'] == 'beauty' ){
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
?>
<div class="container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'karo' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'karo' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . esc_html__( 'Previous page', 'karo' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'karo' ) . '</span>' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'karo' ) . ' </span>',
			) );

		else : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'karo' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer();
