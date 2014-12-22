<?php

function cwp_move_scripts() {
wp_register_script('cwp-footer-script', get_template_directory_uri() . '/js/cwp-footer-script.js','','1.1', true);
wp_enqueue_script('cwp-footer-script');
}
add_action( 'wp_enqueue_scripts', 'cwp_move_scripts' ); 


?>
