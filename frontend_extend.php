<?php
	/*
	Plugin name: Front End Extend
	Version: 0.1
	Description: Adds new CSS and JS to a wordrpess install without use of theme.
	Author: WJ Carey
	Author URI: https://wjcarey.io
	Plugin URI: https://github.com/wjcarey/wordpress-fontend-extend
	License: Apache License 2.0
	*/

	class WordPress_Frontend_Extend {

		function __construct() { 
            add_action( 'wp_enqueue_scripts', array(&$this, 'register_frontend_scripts') );
            add_action( 'wp_enqueue_scripts', array(&$this, 'load_frontend_scripts') );
        }
        
        public function register_frontend_scripts() {
            wp_register_style( 'frontend-extend', plugins_url( 'wordpress-frontend-extend/css/style.css' ) );
            wp_register_script( 'frontend-extend', plugins_url( 'wordpress-frontend-extend/js/scripts.js' ) );
        }

        public function load_frontend_scripts() {
            wp_enqueue_style( 'frontend-extend' );
            wp_enqueue_script( 'frontend-extend' );
        }
	}

	$frontend_extend = new WordPress_Frontend_Extend();
?>