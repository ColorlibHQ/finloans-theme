<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Finloans
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$finloans_reservation_title     = !empty( finloans_opt( 'finloans_reservation_title' ) ) ? finloans_opt( 'finloans_reservation_title' ) : '';
	$finloans_reservation_sub_title = !empty( finloans_opt( 'finloans_reservation_sub_title' ) ) ? finloans_opt( 'finloans_reservation_sub_title' ) : '';
	$finloans_reservation_btn_text  = !empty( finloans_opt( 'finloans_reservation_btn_text' ) ) ? finloans_opt( 'finloans_reservation_btn_text' ) : '';
	$finloans_reservation_btn_url	  = !empty( finloans_opt( 'finloans_reservation_btn_url' ) ) ? finloans_opt( 'finloans_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $finloans_reservation_title )?></h3>
			<p><?php echo esc_html( $finloans_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $finloans_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $finloans_reservation_btn_text )?></a>
		</div>
	</div>