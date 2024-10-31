<?php
/**
 * Plugin Name: WPPLUGIN
 * Description: DESCRIPTION
 * Version:     1.0.0
 * Author:      Daniel Stadler
 * Author URI:  #
 * Text Domain: wpplugin
 */
class wpplugin {
    public function __construct() {
        
    }
    public function init() {
        register_activation_hook( __FILE__, [$this,'wpplugin_activate'] );
        register_deactivation_hook( __FILE__, [$this,'wpplugin_deactivate'] );

        add_action("wp_enqueue_scripts", [$this, "scripts"]);
        add_action("admin_enqueue_scripts", [$this, "adminscripts"]);
    }
    public function wpplugin_activate() {

    }
    public function wpplugin_deactivate() {

    }
    public function scripts() {
        wp_enqueue_style(
            "wpplugin-css",
            plugin_dir_url(__FILE__) . "scripts/wpplugin.css",
            [],
            fileatime(dirname(__FILE__) . "/scripts/wpplugin.css")
        );
        wp_enqueue_script(
            "wpplugin-js",
            plugin_dir_url(__FILE__) . "scripts/wpplugin.js",
            ["jquery"],
            fileatime(dirname(__FILE__) . "/scripts/wpplugin.js")
        );
    }
    public function adminscripts() {
        wp_enqueue_style(
            "wpplugin-admin-css",
            plugin_dir_url(__FILE__) . "scripts/wpplugin.admin.css",
            [],
            fileatime(dirname(__FILE__) . "/scripts/wpplugin-admin.css")
        );
        wp_enqueue_script(
            "wpplugin-admin-js",
            plugin_dir_url(__FILE__) . "scripts/wpplugin-admin.js",
            ["jquery"],
            fileatime(dirname(__FILE__) . "/scripts/wpplugin-admin.js")
        );
    }
}
$wpplugin = new wpplugin();
$wpplugin->init();
?>