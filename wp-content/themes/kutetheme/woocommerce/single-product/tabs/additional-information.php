<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', esc_attr__( 'Additional Information', 'kutetheme' ) );

?>
<?php $product->list_attributes(); ?>
