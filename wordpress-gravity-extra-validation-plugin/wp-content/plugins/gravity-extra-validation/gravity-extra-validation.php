<?php
/**
 */
/*
Plugin Name: gravity-extra-validation
Plugin URI: https://github.com/PedramDev/wordpress-contract-plugin
Description: اعتبار سنجی موبایل ایران - استفاده Usage :css class => .rayabit-scroll-to
Version: 1.4
Author: پدرام کریمی
Author URI: https://github.com/PedramDev
License: GPLv2 or later
Text Domain: gravity_extra_validation
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

#region consts
const LOGGER_PATH = __FILE__;
const GRAV_VAL_PLUGIN_FILE = __FILE__;
const GRAV_VAL_VERSION = '1.4';

define( 'GRAV_VAL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'GRAV_VAL_PLUGIN_URL', plugins_url() );

#endregion

require_once( GRAV_VAL_PLUGIN_DIR . 'logger.php' );
require_once( GRAV_VAL_PLUGIN_DIR . 'inc/index.php' );



/* تماس گرویتی */
add_filter( 'gform_field_validation', 'validate_phone', 10, 4 );
function validate_phone( $result, $value, $form, $field ) {
    $pattern = "/^09[0-9]{9}$/s";
    if ( $field->type == 'phone' && $field->phoneFormat != 'standard' && ! preg_match( $pattern, $value ) && $value != '' ) {
        $result['is_valid'] = false;
        $result['message']  = 'لطفا شماره تلفن همراه خود را به صورت 09 بنویسید';
    }
  
    return $result;
}