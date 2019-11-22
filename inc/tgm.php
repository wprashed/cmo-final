<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Cmo for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'cmo_register_required_plugins' );

function cmo_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// Plugin bundled with a theme.
		array(
			'name'               => esc_html__('CMO Core','cmo'), // The plugin name.
			'slug'               => 'cmo_core', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/lib/plugins/cmo_core.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '0.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		),
		array(
			'name'               => esc_html__('CMO Elementor Widget','cmo'), // The plugin name.
			'slug'               => 'elementorcmowidgets', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/lib/plugins/elementorcmowidgets.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '0.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		),


		// Plugin from the WordPress Plugin Repository.
		array(
			'name'      => esc_html__('CMB2','cmo'),
			'slug'      => 'cmb2',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Contact Form 7','cmo'),
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Elementor','cmo'),
			'slug'      => 'elementor',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Google Language Translator','cmo'),
			'slug'      => 'google-language-translator',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Mailchimp','cmo'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Redux Framework','cmo'),
			'slug'      => 'redux-framework',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Regenerate Thumbnails','cmo'),
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
		array(
			'name'      => esc_html__('WP Google Maps','cmo'),
			'slug'      => 'wp-google-maps',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('One Click Demo Import','cmo'),
			'slug'      => 'one-click-demo-import',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'cmo',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',      
	);

	tgmpa( $plugins, $config );
}
