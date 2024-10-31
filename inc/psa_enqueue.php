<?php 
function psa_filesSetup() {   
	wp_register_style( 'psa',  plugin_dir_url( __FILE__ ) . '../css/psa.css' );
    wp_enqueue_style( 'psa' );
    wp_enqueue_script( 'psa_scripts', plugin_dir_url( __FILE__ ) . '../js/psa_scripts.js', array('jquery') );
}
add_action('wp_enqueue_scripts', 'psa_filesSetup');

function psa_admincssSetup() {
         wp_enqueue_style( 'pas_admin-jax',  plugin_dir_url( __FILE__ ) . '../css/pas_admin-jax.css', false, '1.0.0' );
        wp_enqueue_style( 'pas_admin-jax' );
}
add_action( 'admin_enqueue_scripts', 'psa_admincssSetup' );
?>