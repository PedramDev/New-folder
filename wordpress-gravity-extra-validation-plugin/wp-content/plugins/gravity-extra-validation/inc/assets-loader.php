<?php

namespace GRAV_VAL;

function plugin_assets(){
   wp_enqueue_script("grav_val_js", plugins_url( '/assets/gravity-extra-validation.js', GRAV_VAL_PLUGIN_FILE ),array(),true);
   // wp_enqueue_style("grav_val_css", plugins_url( '/assets/direct_contact.css', GRAV_VAL_PLUGIN_FILE ) );
}

add_action( 'admin_enqueue_scripts', 'GRAV_VAL\plugin_assets', 10, 1 );
add_action( 'wp_enqueue_scripts', 'GRAV_VAL\plugin_assets', 10, 1 );

?>