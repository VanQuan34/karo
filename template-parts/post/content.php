<?php 
global $post, $wp_query, $smof_data;
$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
$post_class = 'post-item hentry ';
$show_blog_thumbnail = $smof_data['ftc_blog_thumbnail'];
?>
<article <?php post_class($post_class) ?>>

	<?php if( $post_format != 'quote' ): ?>
		<div class="post-img">
			<header class="post-img">
				<?php 

				if( $show_blog_thumbnail ){

					if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){
						?>
						<!-- Blog Categories -->
						<?php 
						$categories_list = get_the_category_list(', ');
						if ( ($categories_list && isset($smof_data['ftc_blog_categories']) && $smof_data['ftc_blog_categories']) || isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): 
							?>
						<!-- Blog Categories -->
						<?php if ( $categories_list && isset($smof_data['ftc_blog_categories']) && $smof_data['ftc_blog_categories'] ): ?>
							<div class="caftc-link">
								<span class="cat-links"><?php echo trim($categories_list); ?></span>
							</div>
						<?php endif; ?>
					<?php endif;?>
					<a class="blog-image <?php echo esc_attr($post_format); ?> <?php echo esc_attr(($post_format == 'gallery')?'loading owl-carousel':'') ?>" href="<?php the_permalink() ?>">
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
					</a>
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
							print_r( do_shortcode('[audio '.$file_format.'="'.$audio_url.'"]'));
						}
						else{
							print_r( do_shortcode('[ftc_soundcloud url="'.$audio_url.'" width="100%" height="166"]'));
						}
					}
				}

			}
			?>


		</header>
	</div>
	<div class="post-info">

		<div class="entry-info">
			<!-- Blog Title -->
			<?php if( isset($smof_data['ftc_blog_title']) && $smof_data['ftc_blog_title'] ): ?>
				<h3 class="product_title entry-title">
					<a class="post-title product_title" href="<?php the_permalink() ; ?>"><?php the_title(); ?></a>
				<?php endif; ?>
				<?php if ( is_sticky() && is_home() && ! is_paged() ): {
					printf( '<span class="sticky-post">%s</span>', esc_html__( 'Featured', 'karo' ) );
				}?>

			<?php endif; ?>
		</h3>


		<?php 
		$categories_list = get_the_category_list(', ');
		if ( ($categories_list && isset($smof_data['ftc_blog_categories']) && $smof_data['ftc_blog_categories']) || isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): 
			?>
			<!-- Blog Date -->
			<?php if( isset($smof_data['ftc_blog_date']) && $smof_data['ftc_blog_date'] && $show_blog_thumbnail && ( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ) ): ?>
				<div class="date-time">
					<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
				</div>
			<?php endif; ?>

			<!-- Blog View -->
			<?php if( isset($smof_data['ftc_blog_count_view']) && $smof_data['ftc_blog_count_view'] ): ?>
				<span class="count-view">
					<i class="fa fa-eye"></i>
					<?php echo get_post_views(get_the_ID()); ?>
				</span>
			<?php endif; ?>

		</div>
	<?php endif; ?>
	<!-- Blog Date Time -->
	<?php if( isset($smof_data['ftc_blog_date']) && $smof_data['ftc_blog_date'] && ( !$show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ) : ?>
		<div class="date-time date-time-meta">
			<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
		</div>
	<?php endif; ?>

	<div class="entry-summary">
		<div class="full-content"><?php 
		$max_words = (int)$smof_data['ftc_blog_excerpt_max_words']?(int)$smof_data['ftc_blog_excerpt_max_words']:125;
		$strip_tags = $smof_data['ftc_blog_excerpt_strip_tags']?true:false;
		ftc_the_excerpt_max_words($max_words, $post,true, ' ', true); 
		?>

	</div>
	<?php wp_link_pages(); ?>
</div>
<div class="tab-blog-v3">
	<div class="readmore-blog-v3">
		<a href="<?php the_permalink(); ?>" class="button-readmore"><?php esc_html_e('Read More','karo') ?>
	</a>
</div>
<div class="tab-blog-content-v3">
	<div class="social-share-blog"><span class="icon-share"></span>
		<ul class="ftc-social-sharing">
			<li class="facebook">
				<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
			</li>
			<li class="twitter">
				<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
			</li>

			<li class="google-plus">
				<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
			</li>
		</ul>
	</div>
	<span class="comment-count">
		<span class="number">
			<?php 
			$comments_count = wp_count_comments($post->ID); 
			$comment_number = $comments_count->approved;
			if( $comment_number > 0 ){
				print_r(zeroise($comment_number, 2)); 

			}else{ 
				echo "0";
			} 
			?>
		</span>
	</span>
</div>
</div>


<?php else: /* Post format is quote */ ?>
	
	<blockquote class="blockquote-bg quote-bg">
		<?php 
		$quote_content = get_the_excerpt();
		if( !$quote_content ){
			$quote_content = get_the_content();
		}
		echo esc_html(do_shortcode($quote_content));

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
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
		<?php endif; ?>

		<div class="info-category">
			<!-- Blog Date -->
			<div class="date-time">
				<i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?>
			</div>
		</div>
		<div class="entry-summary">
			<div class="full-content"><?php 
			$max_words = (int)$smof_data['ftc_blog_excerpt_max_words']?(int)$smof_data['ftc_blog_excerpt_max_words']:125;
			$strip_tags = $smof_data['ftc_blog_excerpt_strip_tags']?true:false;
			ftc_the_excerpt_max_words($max_words, $post, $strip_tags, ' ', true); 
			?>

		</div>
		<?php wp_link_pages(); ?>
		<div class="tab-blog-v3">
			<div class="readmore-blog-v3">
				<a href="<?php the_permalink(); ?>" class="button-readmore"><?php esc_html_e('Read More','karo') ?>
			</a>
		</div>
		<div class="tab-blog-content-v3">
			<div class="social-share-blog"><span class="icon-share"></span>
				<ul class="ftc-social-sharing">
					<li class="facebook">
						<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="twitter">
						<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>

					<li class="google-plus">
						<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
					</li>
				</ul>
			</div>
			<span class="comment-count">
				<span class="number">
					<?php 
					$comments_count = wp_count_comments($post->ID); 
					$comment_number = $comments_count->approved;
					if( $comment_number > 0 ){
						print_r(zeroise($comment_number, 2)); 

					}else{ 
						echo "0";
					} 
					?>
				</span>
			</span>
		</div>
	</div>
</div>	
</div>

<?php endif; ?>

</article>
