<?php 
global $smof_data, $post;

$isset = isset($smof_data['ftc_style_for_elementor'])  && isset($smof_data['ftc_header_layout_beauty'])  && isset($smof_data['ftc_enable_header_topic']) ;
if ( $isset && isset($smof_data['ftc_enable_header_topic'] ) && $smof_data['ftc_enable_header_topic'] && $ftc_page_datas['ftc_header_layout'] == 'default' ){

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
ftc_breadcrumbs_title(true, true, get_the_title());
$is_accordion = isset($smof_data['ftc_port_single_style']) && $smof_data['ftc_port_single_style'];

?>
<div class="container">
	<div id="primary" class="content-area">
		<?php if( $is_accordion ): ?>
			<article class="single-post single-portfolio single-full" >
				<div class="row">
					<div class="col-md-12">
						<!-- Blog Thumbnail -->
						<div class="thumbnails">
							<figure>
								<?php
								$gallery = get_post_meta($post->ID, 'ftc_gallery', true);
								if( $gallery ){
									$gallery_ids = explode(',', $gallery);
								}
								else{
									$gallery_ids = array();
								}

								if( is_array($gallery_ids) && has_post_thumbnail() ){
									array_unshift($gallery_ids, get_post_thumbnail_id());
								}
								foreach( $gallery_ids as $gallery_id ){
									$image_url = '';
									$image_src = wp_get_attachment_image_src($gallery_id, 'full');
									if( $image_src ){
										$image_url = $image_src[0];
									}

									echo '<a href="'.$image_url.'" rel="prettyPhoto[portfolio-gallery]">';
									echo wp_get_attachment_image( $gallery_id, 'large' );
									echo '</a>';
								}						
								?>
							</figure>
						</div>
					</div>

					<div class="col-md-12">
						<div class="entry-content">	

							<div class="info-content">
								<!-- Portfolio Title -->
								<h2 class="entry-title"><?php the_title() ?></h2>

								<!-- Portfolio Content -->
								<div class="portfolio-content">
									<?php the_content(); ?>
								</div>
							</div>

							<div class="meta-content">

								<!-- Portfolio Date -->
								<div class="portfolio-info">
									<p class="ptsan"><?php esc_html_e('Date:', 'karo') ?></p>
									<span class="date-time"><?php echo get_the_time(get_option('date_format')); ?></span>
								</div>

								<!-- Portfolio Categories -->
								<?php
								$categories_list = get_the_term_list($post->ID, 'ftc_portfolio_cat', '', ', ', '');
								if ( $categories_list ):
									?>
									<div class="portfolio-info">
										<p class="ptsan"><?php esc_html_e('Categories:', 'karo'); ?></p>
										<span class="cat-links"><?php print_r($categories_list); ?></span>
									</div>
								<?php endif; ?>

							</div>

							<ul class="ftc-social-sharing">

								<li class="twitter">
									<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
								</li>

								<li class="facebook">
									<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i> Share</a>
								</li>

								<li class="google-plus">
									<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
								</li>

								<li class="pinterest">
									<?php $image_link = wp_get_attachment_url(get_post_thumbnail_id()); ?>
									<a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link); ?>" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
								</li>

							</ul>

							<!-- Next Prev Portfolio -->
							<div class="single-navigation">
								<?php
								previous_post_link('%link', esc_html__('Prev Project', 'karo'));
								next_post_link('%link', esc_html__('Next Project', 'karo'));
								?>
							</div>

						</div>
					</div>
				</div>
				<?php get_template_part('related-portfolio'); ?>
			</article>
	</div><!-- end -->
	<?php else: ?>
		<article class="single-post single-portfolio single-left" >
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="entry-content">	

							<div class="info-content">
								<!-- Portfolio Title -->
								<h2 class="entry-title"><?php the_title() ?></h2>

								<!-- Portfolio Content -->
								<div class="portfolio-content">
									<?php the_content(); ?>
								</div>
							</div>

							<div class="meta-content">

								<!-- Portfolio Date -->
								<div class="portfolio-info">
									<p class="ptsan"><?php esc_html_e('Date:', 'karo') ?></p>
									<span class="date-time"><?php echo get_the_time(get_option('date_format')); ?></span>
								</div>

								<!-- Portfolio Categories -->
								<?php
								$categories_list = get_the_term_list($post->ID, 'ftc_portfolio_cat', '', ', ', '');
								if ( $categories_list ):
									?>
									<div class="portfolio-info">
										<p class="ptsan"><?php esc_html_e('Categories:', 'karo'); ?></p>
										<span class="cat-links"><?php print_r($categories_list); ?></span>
									</div>
								<?php endif; ?>

							</div>

							<ul class="ftc-social-sharing">

								<li class="twitter">
									<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
								</li>

								<li class="facebook">
									<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i> Share</a>
								</li>

								<li class="google-plus">
									<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
								</li>

								<li class="pinterest">
									<?php $image_link = wp_get_attachment_url(get_post_thumbnail_id()); ?>
									<a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link); ?>" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
								</li>

							</ul>

							<!-- Next Prev Portfolio -->
							<div class="single-navigation">
								<?php
								previous_post_link('%link', esc_html__('Prev Project', 'karo'));
								next_post_link('%link', esc_html__('Next Project', 'karo'));
								?>
							</div>

						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<!-- Blog Thumbnail -->
						<div class="thumbnails">
							<figure>
								<?php
								$gallery = get_post_meta($post->ID, 'ftc_gallery', true);
								if( $gallery ){
									$gallery_ids = explode(',', $gallery);
									$gallerys=array_pop($gallery_ids);
								}
								else{
									$gallery_ids = array();
									$gallerys=array_pop($gallery_ids);
								}

								if( is_array($gallery_ids) && has_post_thumbnail() ){
									array_unshift($gallery_ids, get_post_thumbnail_id());
								}
								foreach( $gallery_ids as $gallery_id ){
									$image_url = '';
									$image_src = wp_get_attachment_image_src($gallery_id, 'full');
									if( $image_src ){
										$image_url = $image_src[0];
									}

									echo '<a href="'.$image_url.'" rel="prettyPhoto[portfolio-gallery]">';
									echo wp_get_attachment_image( $gallery_id, 'large' );
									echo '</a>';
								}						
								?>
							</figure>
						</div>
					</div>

					
				</div>
				<?php get_template_part('related-portfolio'); ?>
			</article>
	<?php endif; ?>
	
</div>
<?php get_footer(); ?>