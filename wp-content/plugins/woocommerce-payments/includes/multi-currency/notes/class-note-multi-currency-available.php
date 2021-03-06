<?php
/**
 * Notify merchant that Multi-Currency is available.
 *
 * @package WooCommerce\Payments\Multi_Currency
 */

namespace WCPay\Multi_Currency;

use Automattic\WooCommerce\Admin\Notes\NoteTraits;

defined( 'ABSPATH' ) || exit;

/**
 * Class Note_Multi_Currency_Available
 */
class Note_Multi_Currency_Available {
	use NoteTraits;

	/**
	 * Name of the note for use in the database.
	 */
	const NOTE_NAME = 'wc-payments-notes-multi-currency-available';

	/**
	 * Url to start the setup process.
	 */
	// TODO: Proper url needed for setup process.
	const NOTE_SETUP_URL = 'admin.php?page=wc-settings&tab=wcpay_multi_currency';

	/**
	 * Get the note.
	 */
	public static function get_note() {
		$note_class = \WC_Payment_Woo_Compat_Utils::get_note_class();
		$note       = new $note_class();

		$note->set_title( __( 'Sell worldwide in multiple currencies', 'woocommerce-payments' ) );
		$note->set_content( __( 'Boost your international sales by allowing your customers to shop and pay in their local currency.', 'woocommerce-payments' ) );
		$note->set_content_data( (object) [] );
		$note->set_type( $note_class::E_WC_ADMIN_NOTE_INFORMATIONAL );
		$note->set_name( self::NOTE_NAME );
		$note->set_source( 'woocommerce-payments' );
		$note->add_action(
			self::NOTE_NAME,
			__( 'Set up now', 'woocommerce-payments' ),
			self::NOTE_SETUP_URL,
			'unactioned',
			true
		);

		return $note;
	}
}
