<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

update_option( get_template() . '_wup_purchase_code', '*******' );
update_option( get_template() . '_wup_supported_until', '01.01.2024' );
update_option( get_template() . '_wup_buyer', 'GPL' );

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
