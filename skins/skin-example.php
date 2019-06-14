<?php
namespace ElementorExampleWidget\Skins;

use ElementorPro\Modules\Posts\Skins\Skin_Classic;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Skin_Example extends Skin_Classic {
    
    protected function _register_controls_actions() {
		add_action( 'elementor/element/elementor-example-widget/section_layout/before_section_end', [ $this, 'register_controls' ] );
		add_action( 'elementor/element/elementor-example-widget/section_layout/after_section_end', [ $this, 'register_style_sections' ] );
    }

    public function register_controls() {
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'elementor-example-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => __( 'URL to embed', 'elementor-example-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => __( 'https://your-link.com', 'elementor-example-widget' ),
			]
		);

		$this->end_controls_section();
		
		$this->start_controls_section(
				'ma_section',
				[
						'label' => __( 'Ma section', 'elementor-example-widget' ),       
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]     
		);

		$this->add_control(
			'activate_title_attribute',
			[
				'label' => __( 'Activer attribut title' , 'elementor-example-widget' ),
				'description' => __( 'Activer ou désactiver l\'attribut title de la balise courante' , 'elementor-example-widget' ),
				'separator' => 'after',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Activer', 'elementor-example-widget' ),
				'label_off' => __( 'Désactiver', 'elementor-example-widget' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'title_attribute',
			[
				'label' => __( 'Attribut title', 'elementor-example-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->end_controls_section();
    }

    public function register_style_sections() {
        $this->start_controls_section(
			'data_control_section_editor',
			[
					'label' => __( 'Section de controle de données avec éditeurs', 'elementor-example-widget' ),       
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]     
		);

		$this->add_control(
			'wysiwyg_hyppomed',
			[
				'label' => __( 'Wysiwyg HYPPOmed', 'elementor-example-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'description' => 'WYSIWYG',
				'show_label' => 'true',
				'label_block' => 'true',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style section', 'elementor-example-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->end_controls_section();
		
		$this->end_controls_section();
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