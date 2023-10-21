<?php
/**
 * Plugin Name: myplugin
 * Description: This is a test plugin.
 * Version: 1.0
 * Author: Chandransh
 */

 if(!defined("ABSPATH")){
    header("Location: /plugins");
    die("Can't access");
 }

function my_plugin_activation(){
    //
 }
 register_activation_hook( __FILE__, "my_plugin_activation" );

 function my_plugin_deactivation(){
    //
 }
 register_deactivation_hook( __FILE__, "my_plugin_deactivation" );

function forecast(){
   include 'func.php';

}

 add_shortcode('activate', 'forecast');



 