		</div><!-- #content --> 
		<footer id="colophon" class="site-footer">
			<?php
			get_template_part( 'template-parts/footer/footer', 'widgets' );
			?>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->


<div class="ftc-close-popup"></div>
<?php
global $smof_data, $woocommerce;
if (isset($smof_data['ftc_mobile_layout']) && $smof_data['ftc_mobile_layout']): 
	?>
	<div class="footer-mobile">
		<div class="mobile-home">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
				<i class="fa fa-home"></i>
				<?php esc_html_e('Home','karo'); ?>
			</a>   
		</div>  
		<div class="mobile-view-cart" >
			<?php if( class_exists('Woocommerce')): ?>
				<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" >
					<i class="fa fa-shopping-cart"></i>
					<?php esc_html_e('Cart','karo'); ?>
					<?php echo esc_attr(ftc_cart_subtotal()) ; ?>
				</a>   
			<?php endif;?>
		</div>
		<div class="mobile-wishlist">
			<?php if( class_exists('YITH_WCWL')): ?>
				<div class="ftc-my-wishlist"><?php print_r(ftc_tini_wishlist()) ; ?></div>
			<?php endif; ?>

		</div>
		<div class="mobile-account">
			<?php 
			$_user_logged = is_user_logged_in();
			ob_start();
			?>
			<a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_html_e('Login','karo'); ?>">
				<i class="fa fa-user"></i>
				<?php if ($_user_logged): ?>
					<?php esc_html_e('Account','karo'); ?>
				<?php endif; ?>
				<?php if (!$_user_logged): ?>
					<?php esc_html_e('Login','karo'); ?>
				<?php endif; ?>
			</a>
		</div>
	</div>
<?php endif; ?>

<?php 
global $smof_data;
if( ( !wp_is_mobile() && isset($smof_data['ftc_back_to_top_button']) && $smof_data['ftc_back_to_top_button'] ) || ( wp_is_mobile() && isset($smof_data['ftc_back_to_top_button_on_mobile']) && $smof_data['ftc_back_to_top_button_on_mobile'] ) ): 
	?>
<div id="to-top" class="scroll-button">
	<a class="scroll-button" href="javascript:void(0)" title="<?php esc_html_e('Back to Top', 'karo'); ?>"><?php esc_html_e('Back to Top', 'karo'); ?></a>
</div>
<?php endif; ?>
<?php if((isset($smof_data['ftc_enable_popup']) && $smof_data['ftc_enable_popup']) && is_active_sidebar('popup-newletter')) : ?>
<?php carna_popup_newsletter(); ?>
<?php endif;  ?>
<?php wp_footer(); ?>

</body>
</html>
