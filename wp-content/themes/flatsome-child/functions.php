<?php
function initTheme(){
    add_filter('use_block_editor_for_post','__return_false');
}
add_action('init','initTheme');
// Add custom Theme Functions here
add_filter( 'woocommerce_is_purchasable', '__return_false');