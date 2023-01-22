<?php
/**
 * Related Products
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );?>
<?php if ( is_plugin_active( 'share-this/sharethis.php' ) ) { ?>

<div class="share-post">
		<p class="share-social">
			<?php get_template_part('share-this');?>
		</p>
</div>
<?php } else {
	$share_links = get_theme_mod('share_links');
	if (empty($share_links)) $share_links = 2;
	if($share_links == 2) : 
		get_template_part('share');
	endif;
	} ?>
		
<?php 				

if ( $related_products ) : ?>

	<section class="related products">

		<h2><?php esc_html_e( 'Related products', 'converio' ); ?></h2>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
