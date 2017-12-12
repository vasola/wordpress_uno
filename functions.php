<?php

    function dl_enqueue_style() {
        $theme_data = wp_get_theme();
    
    /* Registrar estilos */
    wp_register_style('main', get_parent_theme_file_uri('/css/style.css'), null, $theme_data->'1.0'));
    
    /* Llamar estilos */
        
        wp_enqueue_style( 'style');

    
    }

add_action('wp_enqueue_scripts', 'dl_enqueuque_style');

// Registrar JS

function dl_enqueue_scripts() {

    wp_register_script('scripts', get_parent_theme_file_uri(js/script.js))}

?>