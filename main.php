<?php 

class VC_ACS
{
	function __construct()
	{
		add_action( 'vc_before_init', array($this, 'vc_advanced_carousal_slider' ));
		add_action( 'wp_enqueue_scripts', array($this, 'adding_front_scripts' ));
		add_action( 'init', array( $this, 'check_if_vc_is_install' ) );
		remove_filter( 'the_content', 'wpautop' );
	}

		
	function vc_advanced_carousal_slider() {
		include 'render/carousel_father.php';
		include 'render/carousel_son.php';
	}

	function adding_front_scripts() {
		wp_enqueue_style( 'font-awesome', plugin_dir_url( __FILE__ ).'/css/css/font-awesome.min.css' );
	}


	function check_if_vc_is_install(){
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }			
	}

}


$tdt_object = new VC_ACS;
 ?>