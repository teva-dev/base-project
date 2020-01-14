<?php
/**
 * WP_Rig\WP_Rig\Customizer\Controls\Placeholder\Placeholder class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Customizer\Controls\Range;

/**
 * Placeholder class.
 */
class Placeholder extends \WP_Customize_Control {

	/**
	 * Control type
	 *
	 * @var string
	 */
	public $type = 'wp-rig-placeholder';

	/**
	 * Enqueue control related scripts/styles.
	 */
	public function enqueue() {
		
		wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
			'wp-rig-control-placeholder',
			get_theme_file_uri( '/inc/Customizer/Controls/Placeholder/dist/bundle.css' ),
			[],
			null
		);

		wp_enqueue_script( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
			'wp-rig-control-placeholder',
			get_theme_file_uri( '/inc/Customizer/Controls/Placeholder/dist/bundle.js' ),
			array( 'jquery' ),
			null,
			true
		);

	}

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 */
	public function to_json() {
		parent::to_json();
	}

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template().
	 */
	protected function content_template() {}

}
