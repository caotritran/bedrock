<?php
// Add custom Theme Functions here
add_action('woocommerce_after_add_to_cart_form', 'add_guarantee_box');
function add_guarantee_box(){
    ob_start();
    ?>
    <div class="product-widget">
        <div class="widget widget_text">
            <span class="gamma widget-title">
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/1f512.svg" alt="🔒" /> Secure Transaction
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/2b50.svg" alt="⭐" />
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/2b50.svg" alt="⭐" />
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/2b50.svg" alt="⭐" />
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/2b50.svg" alt="⭐" />
                <img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/13.0.1/svg/2b50.svg" alt="⭐" />
            </span>
            <div class="textwidget">
                <ul>
                    <li>Worldwide delivery to your doorstep</li>
                    <li>Tracking number provided for all parcels</li>
                    <li>Full refund if the product is not received</li>
                </ul>
                <fieldset>
                    <legend>Guaranteed Safe Checkout</legend>
                    <img class="alignnone size-large wp-image-1191" src="/wp-content/uploads/2023/03/No-edit-trust-symbols_a-2.jpg" alt="Guaranteed Safe Checkout" width="1024" height="108" />
                </fieldset>
            </div>
        </div>
    </div>

    <?php
    $content = ob_get_contents();
    ob_end_clean();
    echo $content;
}

add_filter( 'woocommerce_product_tabs', 'woo_policy_tab',99 );
function woo_policy_tab( $tabs ) {
	unset( $tabs['additional_information'] ); 	
	// Adds the new tab
	//$tabs['payment_tab'] = array(
	//	'title' 	=> __( 'Payment Methods', 'woocommerce' ),
	//	'priority' 	=> 10,
	//	'callback' 	=> 'woo_payment_tab_content'
	//);	
	//$tabs['shipping_tab'] = array(
	//	'title' 	=> __( 'Shipping & Delivery', 'woocommerce' ),
	//	'priority' 	=> 11,
	//	'callback' 	=> 'woo_policy_tab_content'
	//);
	// $tabs['size-chart_tab'] = array(
	// 	'title' 	=> __( 'Size Chart', 'woocommerce' ),
	// 	'priority' 	=> 12,
	// 	'callback' 	=> 'woo_size_tab_content'
	// );


	return $tabs;

}
function woo_policy_tab_content() {

	// The new tab content
    echo do_shortcode('[block id="shipping-returns-product-tab"]');
	
}
function woo_payment_tab_content() {
	
    echo do_shortcode('[block id="payment-product-tab"]');
}
add_filter( 'post_class', 'filter_product_post_class', 10, 3 );
function filter_product_post_class( $classes, $class, $product_id ){
if( in_the_loop() )
$classes[] = 'mainproduct';
return $classes;
}