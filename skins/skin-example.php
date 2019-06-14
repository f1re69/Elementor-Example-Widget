<?php
namespace ElementorExampleWidget\Skins;

use ElementorPro\Modules\Posts\Skins\Skin_Classic;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Skin_Example extends Skin_Classic {
    
    protected function _register_controls_actions() {
		add_action( 'elementor/element/elementor-example-widget/section_layout/before_section_end', [ $this, 'register_controls' ] );
		add_action( 'elementor/element/elementor-example-widget/section_layout/after_section_end', [ $this, 'register_style_sections' ] );
    }

    public function get_id() {
        return 'skin_example';
    }

    public function get_title() {
        return __( 'Skin Example', 'hyppomed-archive-post' );
    }
    
    public function render() {
        $this->parent->query_posts();

		$wp_query = $this->parent->get_query();

		if ( ! $wp_query->found_posts ) {
			$this->render_loop_header();

			$should_escape = apply_filters( 'elementor_pro/theme_builder/archive/escape_nothing_found_message', true );

			$message = $this->parent->get_settings_for_display( 'nothing_found_message' );
			if ( $should_escape ) {
				$message = esc_html( $message );
			}

			echo '<div class="elementor-posts-nothing-found">' . $message . '</div>';

			$this->render_loop_footer();

			return;
		}

		parent::render();
    }

}