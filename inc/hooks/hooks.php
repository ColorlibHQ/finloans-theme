<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'finloans_preloader', 'finloans_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'finloans_header', 'finloans_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'finloans_footer', 'finloans_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'finloans_wrp_start', 'finloans_wrp_start_cb', 10 );
	add_action( 'finloans_wrp_end', 'finloans_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'finloans_blog_col_start', 'finloans_blog_col_start_cb', 10 );
	add_action( 'finloans_blog_col_end', 'finloans_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'finloans_blog_posts_thumb', 'finloans_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'finloans_blog_details_wrap_start', 'finloans_blog_details_wrap_start_cb', 10 );
	add_action( 'finloans_blog_details_wrap_end', 'finloans_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'finloans_blog_posts_title', 'finloans_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'finloans_blog_posts_meta', 'finloans_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'finloans_blog_posts_excerpt', 'finloans_blog_posts_excerpt_cb', 10 );
	// add_action( 'finloans_blog_posts_excerpt', 'finloans_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'finloans_blog_posts_info_link', 'finloans_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'finloans_blog_posts_content', 'finloans_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'finloans_blog_posts_share', 'finloans_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'finloans_blog_sidebar', 'finloans_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'finloans_blog_single_meta', 'finloans_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'finloans_page_content', 'finloans_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'finloans_fof', 'finloans_fof_cb', 10 );

	

?>