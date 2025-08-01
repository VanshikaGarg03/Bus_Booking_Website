<?php
/**
 * Plugin Name: Payment Plugins for Stripe WooCommerce
 * Plugin URI: https://docs.paymentplugins.com/wc-stripe/config/
 * Description: Accept Credit Cards, Google Pay, Apple Pay, ACH, Klarna and more using Stripe.
 * Version: 3.3.85
 * Author: Payment Plugins, support@paymentplugins.com
 * Text Domain: woo-stripe-payment
 * Domain Path: /i18n/languages/
 * Tested up to: 6.8
 * WC requires at least: 3.0.0
 * WC tested up to: 9.8
 * Requires Plugins: woocommerce
 */
defined( 'ABSPATH' ) || exit ();


define( 'WC_STRIPE_PLUGIN_FILE_PATH', plugin_dir_path( __FILE__ ) );
define( 'WC_STRIPE_ASSETS', plugin_dir_url( __FILE__ ) . 'assets/' );
define( 'WC_STRIPE_PLUGIN_NAME', plugin_basename( __FILE__ ) );

require_once( WC_STRIPE_PLUGIN_FILE_PATH . 'vendor/autoload.php' );

PaymentPlugins\Stripe\PluginValidation::is_valid( function () {
	require_once( WC_STRIPE_PLUGIN_FILE_PATH . 'includes/class-stripe.php' );
} );