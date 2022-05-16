<?php 
global $post, $wp_query, $smof_data;
$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
$post_class = 'post-item hentry ';
$show_blog_thumbnail = $smof_data['ftc_blog_thumbnail'];
?>
<article <?php post_class($post_class) ?>>

	<?php if( $post_format != 'quote' ): ?>

		<header class="post-img">
			<?php 
			
			if( $show_blog_thumbnail ){

				if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){
					?>
					<div class="blog-image <?php echo esc_attr($post_format); ?> <?php echo esc_attr(($post_format == 'gallery')?'loading owl-carousel':'') ?>">
						<?php 
						if( $post_format == 'gallery' ){
							$gallery = get_post_meta($post->ID, 'ftc_gallery', true);
							$gallery_ids = explode(',', $gallery);
							if( is_array($gallery_ids) && has_post_thumbnail() ){
								array_unshift($gallery_ids, get_post_thumbnail_id());
							}
							foreach( $gallery_ids as $gallery_id ){
								echo wp_get_attachment_image( $gallery_id, 'ftc_blog_thumb', 0, array('class' => 'thumbnail-blog') );
							}

							if( !has_post_thumbnail() && empty($gallery) ){ /* Fix date position */
								$show_blog_thumbnail = 0;
							}
						}

						if( $post_format === false || $post_format == 'standard' ){
							if( has_post_thumbnail() ){
								the_post_thumbnail('ftc_blog_thumb', array('class' => 'thumbnail-blog'));
							}
							else{ /* Fix date position */
								$show_blog_thumbnail = 0;
							}
						}
						?>
						<?php 
						$categories_list = get_the_category_list(', ');
						if ( ($categories_list && isset($smof_data['ftc_blog_categories']) && $smof_data['ftc_blog_categories']) || isset($smof_data['ftc_blog_author'] ) && $smof_data['ftc_blog_author'] ): 
							?>
						<!-- Blog Categories -->
						<?php if ( $categories_list && isset($smof_data['ftc_blog_categories']) && $smof_data['ftc_blog_categories'] ): ?>
							<div class="caftc-link">
								<span class="cat-links"><?php echo trim($categories_list); ?></span>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<?php
			}

			if( $post_format == 'video' ){
				$video_url = get_post_meta($post->ID, 'ftc_video_url', true);
				if( $video_url != '' ){
					print_r(do_shortcode('[ftc_video src="'.esc_url($video_url).'"]'));
				}
			}

			if( $post_format == 'audio' ){
				$audio_url = get_post_meta($post->ID, 'ftc_audio_url', true);
				if( strlen($audio_url) > 4 ){
					$file_format = substr($audio_url, -3, 3);
					if( in_array($file_format, array('mp3', 'ogg', 'wav')) ){
						print_r(do_shortcode('[audio '.$file_format.'="'.$audio_url.'"]'));
					}
					else{
						print_r( do_shortcode('[ftc_soundcloud url="'.$audio_url.'" width="100%" height="166"]'));
					}
				}
			}

		}
		?>

	</header>
	<div class="post-info">

		<div class="entry-info">
			<!-- Blog Title -->
			<?php if( isset($smof_data['ftc_blog_title']) && $smof_data['ftc_blog_title'] ): ?>
				<h3 class="product_title entry-title">
					<?php the_title(); ?>
				</h3>
			<?php endif; ?>
			
			<div class="info-category">

				<!-- Blog Date -->
				
				<div class="date-time">
					<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
				</div>


			</div>
			<div class="entry-summary">
				<div class="full-content"><?php the_content(); ?></div>
				<?php wp_link_pages(); ?>
			</div>
			<div class="share-detail-blog">
				<div class="text-share"><span class="icon-share"></span><?php esc_html_e('Share it on','karo') ?></div>
				<div class="social-share-detail-blog">
					<ul class="ftc-social-sharing-detail">
						<li class="facebook">
							<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>

						<li class="google-plus">
							<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
						</li>
						<li class="google-plus">
							<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tag-author-detail">
				<!-- Blog Tags -->
				<?php   
				$tags_list = get_the_tag_list('', ', '); 
				if ( $tags_list && isset($smof_data['ftc_blog_details_tags']) && $smof_data['ftc_blog_details_tags'] ):?>
					<div class="tags-link">
						<span><i class="fa fa-tags"></i></span>
						<span class="tag-links">
							<?php echo trim($tags_list); ?>
						</span>
					</div>
				<?php endif; ?>
				<!-- Blog Author -->
				<?php if( isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): ?>

					<span class="vcard author"><span><?php esc_html_e('Author: ','karo');?></span><?php the_author_posts_link(); ?></span>
				<?php endif; ?>	
			</div>
		</div>
	</div>

<?php else: /* Post format is quote */ ?>
	
	<blockquote class="blockquote-bg">
		<?php 
		$quote_content = get_the_excerpt();
		if( !$quote_content ){
			$quote_content = get_the_content();
		}
		 print_r(do_shortcode($quote_content));
		?>
		<!-- Blog Author -->
		<?php if( isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): ?>

			<div class="vcard author"><span><?php esc_html_e('- ','karo');?></span><?php the_author_posts_link(); ?></div>
		<?php endif; ?>	
	</blockquote>

	<div class="blockquote-meta">
		
		<!-- Blog Title -->
		<?php if( isset($smof_data['ftc_blog_title']) && $smof_data['ftc_blog_title'] ): ?>
			<h3 class="product_title entry-title">
				<?php the_title(); ?>
			</h3>
		<?php endif; ?>

		<div class="info-category">
			<!-- Blog Date -->
			<div class="date-time">
				<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
			</div>
		</div>
		<div class="entry-summary">
			<div class="full-content"><?php the_content(); ?></div>
			<?php wp_link_pages(); ?>
		</div>
		<div class="share-detail-blog">
			<div class="text-share"><span class="icon-share"></span><?php esc_html_e('Share it on','karo') ?></div>
			<div class="social-share-detail-blog">
				<ul class="ftc-social-sharing-detail">
					<li class="facebook">
						<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="twitter">
						<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>

					<li class="google-plus">
						<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
					</li>
					<li class="google-plus">
						<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="tag-author-detail">
			<!-- Blog Tags -->
			<?php   
			$tags_list = get_the_tag_list('', ', '); 
			if ( $tags_list && isset($smof_data['ftc_blog_details_tags']) && $smof_data['ftc_blog_details_tags'] ):?>
				<div class="tags-link">
					<span><i class="fa fa-tags"></i></span>
					<span class="tag-links">
						<?php echo trim($tags_list); ?>
					</span>
				</div>
			<?php endif; ?>
			<!-- Blog Author -->
			<?php if( isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): ?>

				<span class="vcard author"><span><?php esc_html_e('Author: ','karo');?></span><?php the_author_posts_link(); ?></span>
			<?php endif; ?>	
		</div>
	</div>

<?php endif; ?>

</article>
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;?>
<!-- Related Posts-->
<?php 
if( !is_singular('ftc_feature') && $smof_data['ftc_blog_details_related_posts'] ){
	get_template_part('template-parts/post/related-posts');
}
?>