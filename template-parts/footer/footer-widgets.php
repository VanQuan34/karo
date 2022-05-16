<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Karo
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( 
	 is_active_sidebar( 'footer-middle' ) ) :
?>

		<?php
		if ( is_active_sidebar( 'footer-middle' ) ) { ?>
			<div class="widget-column footer-middle">
                            <div class="container">
				<?php dynamic_sidebar( 'footer-middle' ); ?>
                            </div>
			</div>
		<?php }
		 ?>

<?php endif; ?>
