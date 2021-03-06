<?php
/**
 * File containing the class WP_CROWDSIGNAL_FORMS\Admin\WP_CROWDSIGNAL_FORMS_Admin_Notices.
 *
 * @package WP_CROWDSIGNAL_FORMS\Admin
 */

namespace WP_CROWDSIGNAL_FORMS\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WP_CROWDSIGNAL_FORMS_Admin_Notices class.
 *
 * @since 0.9.0
 */
class WP_CROWDSIGNAL_FORMS_Admin_Notices {
	const STATE_OPTION      = 'WP_CROWDSIGNAL_FORMS_admin_notices';
	const NOTICE_CORE_SETUP = 'core_setup';
	const SETUP_SUCCESS     = 'setup_success';

	/**
	 * Current notices for admin user.
	 *
	 * @var array
	 */
	private static $notice_state;

	/**
	 * Initialize admin notice handling.
	 */
	public static function init() {
		add_action( 'WP_CROWDSIGNAL_FORMS_init_admin_notices', array( __CLASS__, 'init_core_notices' ) );
		add_action( 'admin_notices', array( __CLASS__, 'display_notices' ) );
		add_action( 'wp_loaded', array( __CLASS__, 'dismiss_notices' ) );
	}

	/**
	 * Add a notice to be displayed in WP admin.
	 *
	 * @since 0.9.0
	 *
	 * @param string $notice Name of the notice.
	 */
	public static function add_notice( $notice ) {
		$notice = sanitize_key( $notice );

		if ( ! in_array( $notice, self::get_notice_state(), true ) ) {
			self::$notice_state[] = $notice;
			self::save_notice_state();
		}
	}

	/**
	 * Remove a notice from those displayed in WP admin.
	 *
	 * @since 0.9.0
	 *
	 * @param string $notice Name of the notice.
	 */
	public static function remove_notice( $notice ) {
		$notice_state = self::get_notice_state();
		$notice       = sanitize_key( $notice );

		$notice_key = array_search( $notice, $notice_state, true );
		if ( false !== $notice_key ) {
			unset( $notice_state[ $notice_key ] );
			self::$notice_state = array_values( $notice_state );
			self::save_notice_state();
		}
	}

	/**
	 * Clears all enqueued notices.
	 */
	public static function reset_notices() {
		self::$notice_state = array();
		self::save_notice_state();
	}

	/**
	 * Check for a notice to be displayed in WP admin.
	 *
	 * @since 0.9.0
	 *
	 * @param string $notice Name of the notice. Name is not sanitized for this method.
	 * @return bool
	 */
	public static function has_notice( $notice ) {
		$notice_state = self::get_notice_state();
		return in_array( $notice, $notice_state, true );
	}

	/**
	 * Set up filters for core admin notices.
	 *
	 * Note: For internal use only. Do not call manually.
	 */
	public static function init_core_notices() {
		// core_setup: Notice is used when first activating plugin.
		add_action( 'WP_CROWDSIGNAL_FORMS_admin_notice_' . self::NOTICE_CORE_SETUP, array( __CLASS__, 'display_core_setup' ) );
	}

	/**
	 * Dismiss notices as requested by user. Inspired by WooCommerce's approach.
	 */
	public static function dismiss_notices() {
		if ( isset( $_GET['WP_CROWDSIGNAL_FORMS_hide_notice'] ) && isset( $_GET['_WP_CROWDSIGNAL_FORMS_notice_nonce'] ) ) {
			if ( ! wp_verify_nonce( wp_unslash( $_GET['_WP_CROWDSIGNAL_FORMS_notice_nonce'] ), 'WP_CROWDSIGNAL_FORMS_hide_notices_nonce' ) ) { // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Nonce should not be modified.
				wp_die( esc_html__( 'Action failed. Please refresh the page and retry.', 'crowdsignal-forms' ) );
			}

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_die( esc_html__( 'You don&#8217;t have permission to do this.', 'crowdsignal-forms' ) );
			}

			$hide_notice = sanitize_key( wp_unslash( $_GET['WP_CROWDSIGNAL_FORMS_hide_notice'] ) );
			self::remove_notice( $hide_notice );

			wp_safe_redirect( remove_query_arg( array( 'WP_CROWDSIGNAL_FORMS_hide_notice', '_WP_CROWDSIGNAL_FORMS_notice_nonce' ) ) );
			exit;
		}
	}

	/**
	 * Displays notices in WP admin.
	 *
	 * Note: For internal use only. Do not call manually.
	 */
	public static function display_notices() {
		/**
		 * Allows crowdsignal related plugins to set up their notice hooks.
		 *
		 * @since 0.9.0
		 */
		do_action( 'WP_CROWDSIGNAL_FORMS_init_admin_notices' );
		$notice_state = self::get_notice_state();
		foreach ( $notice_state as $notice ) {
			/**
			 * Allows suppression of individual admin notices.
			 *
			 * @since 0.9.0
			 *
			 * @param bool $do_show_notice Set to false to prevent an admin notice from showing up.
			 */

			if ( ! apply_filters( 'WP_CROWDSIGNAL_FORMS_show_admin_notice_' . $notice, true ) ) {
				continue;
			}

			/**
			 * Handle the display of the admin notice.
			 *
			 * @since 0.9.0
			 */
			do_action( 'WP_CROWDSIGNAL_FORMS_admin_notice_' . $notice );
		}
	}

	/**
	 * Helper for display functions to check if current request is for admin on a Crowdsignal screen.
	 *
	 * @param array $additional_screens Screen IDs to also show a notice on.
	 * @return bool
	 */
	public static function is_admin_on_standard_crowdsignal_screen( $additional_screens = array() ) {
		$screen          = get_current_screen();
		$screen_id       = $screen ? $screen->id : '';
		$show_on_screens = array_merge( array( 'crowdsignal-forms' ), $additional_screens );

		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		if ( ! in_array( $screen_id, $show_on_screens, true ) ) {
			return false;
		}

		return true;
	}

	/**
	 * Displays the setup wizard notice when crowdsignal is first activated.
	 *
	 * Note: For internal use only. Do not call manually.
	 */
	public static function display_core_setup() {
		if ( ! self::is_admin_on_standard_crowdsignal_screen( array( 'plugins', 'dashboard' ) ) ) {
			return;
		}
		include dirname( __FILE__ ) . '/views/html-admin-notice-core-setup.php';
	}

	/**
	 * Displays a success notification after API Key setup
	 */
	public static function display_setup_success() {
		include dirname( __FILE__ ) . '/views/html-admin-notice-setup-success.php';
	}

	/**
	 * Gets the current admin notices to be displayed.
	 *
	 * @return array
	 */
	private static function get_notice_state() {
		if ( null === self::$notice_state ) {
			self::$notice_state = json_decode( get_option( self::STATE_OPTION, '[]' ), true );
			if ( ! is_array( self::$notice_state ) ) {
				self::$notice_state = array();
			}
		}
		return self::$notice_state;
	}

	/**
	 * Saves the notice state on shutdown.
	 */
	private static function save_notice_state() {
		if ( null === self::$notice_state ) {
			return;
		}

		update_option( self::STATE_OPTION, wp_json_encode( self::get_notice_state() ), false );
	}
}
