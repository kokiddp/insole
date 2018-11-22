<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.elk-lab.com
 * @since      1.0.0
 *
 * @package    Insole
 * @subpackage Insole/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Insole
 * @subpackage Insole/public
 * @author     Gabriele Coquillard <gabriele@visamultimedia.com>
 */
class Insole_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $environment    The environment state of the plugin.
	 */
	private $environment;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version, $environment ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->environment = $environment;

		$this::add_dependencies();

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Insole_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Insole_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/insole-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'angularjs', plugin_dir_url( __FILE__ ) . 'js/node_modules/angular/angular-csp.css', array( $this->plugin_name ), '1.7.5', 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Insole_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Insole_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if ( $this->environment == 'production' ) {
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/insole-public-min.js', array( 'jquery' ), $this->version, false );
		}
		else {
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/insole-public.js', array( 'jquery' ), time(), false );
		}

	}

	/**
	 * Load the dependencies for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function add_dependencies() {

	}

}
