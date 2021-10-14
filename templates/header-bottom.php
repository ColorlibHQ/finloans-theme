<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Finloans
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$headerimg = isset(finloans_meta( 'header-background' )['image']) ? finloans_meta( 'header-background' )['image'] : get_header_image();
$header_text = !empty(finloans_meta( 'header-text' )) ? finloans_meta( 'header-text' ) : '';
?>

<section class="hero-banner d-flex align-items-center zigzag_bg_2" <?php echo finloans_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row">
            <div class="breadcrumb_tittle col-xl-9">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'finloans') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'finloans') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'finloans' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'finloans' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'finloans' );

                    }
                    ?>
                </h2>
                <?php
                    if ( $header_text != '' ) {
                        echo '<p>'.wp_kses_post( $header_text ).'</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>