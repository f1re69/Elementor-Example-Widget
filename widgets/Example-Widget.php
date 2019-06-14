<?php
namespace ElementorExampleWidget\Widget;

use ElementorExampleWidget\Skins;


class Elementor_Example_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'elementor-example-widget';
	}

	public function get_title() {
		return __( 'Elementor Example Widget', 'elementor-example-widget' );
	}

	public function get_icon() {
		return 'fa fa-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_skins() {
		require_once( __DIR__ . '/../skins/skin-example.php' );
		$this->add_skin( new \ElementorExampleWidget\Skins\Skin_Example( $this ) );
	}

    protected function _register_controls() {

		// $this->start_controls_section(
		// 	'content_section',
		// 	[
		// 		'label' => __( 'Content', 'elementor-example-widget' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]
		// );

		// $this->add_control(
		// 	'url',
		// 	[
		// 		'label' => __( 'URL to embed', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'input_type' => 'url',
		// 		'placeholder' => __( 'https://your-link.com', 'elementor-example-widget' ),
		// 	]
		// );

		// $this->end_controls_section();
		
		// $this->start_controls_section(
		// 		'ma_section',
		// 		[
		// 				'label' => __( 'Ma section', 'elementor-example-widget' ),       
		// 				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 		]     
		// );

		// $this->add_control(
		// 	'activate_title_attribute',
		// 	[
		// 		'label' => __( 'Activer attribut title' , 'elementor-example-widget' ),
		// 		'description' => __( 'Activer ou désactiver l\'attribut title de la balise courante' , 'elementor-example-widget' ),
		// 		'separator' => 'after',
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'label_on' => __( 'Activer', 'elementor-example-widget' ),
		// 		'label_off' => __( 'Désactiver', 'elementor-example-widget' ),
		// 		'return_value' => 'yes',
		// 		'default' => 'yes',
		// 	]
		// );

		// $this->add_control(
		// 	'title_attribute',
		// 	[
		// 		'label' => __( 'Attribut title', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 	]
		// );

		// $this->end_controls_section();








		// $this->start_controls_section(
		// 	'data_control_section',
		// 	[
		// 			'label' => __( 'Section de controle de données', 'elementor-example-widget' ),       
		// 			'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]     
		// );





		// $this->add_control(
		// 	'text_control_email',
		// 	[
		// 		'label' => __( 'Enter the email', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'description' => __( 'Text description', 'elementor-example-widget' ),
		// 		'show_label' => 'true',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'input_type' => 'email',
		// 		'placeholder' => 'abc@xyz.com',
		// 		'title' => __( 'Enter the email here', 'elementor-example-widget' ),
		// 		'classes' => 'elementor-email',
		// 	]
		// );
		// $this->add_control(
		// 	'choose_multiple_of_3',
		// 	[
		// 		'label' => __( 'Choose a multiple of 3', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::NUMBER,
		// 		'description' => __( 'Choose a number', 'elementor-example-widget' ),
		// 		'show_label' => 'true',
		// 		'label_block' => 'true',
		// 		'separator' => 'none',
		// 		'min' => '33',
		// 		'max' => '99',
		// 		'step' => '3',
		// 		'placeholder' => '33 -> 99',
		// 		'title' => 'Choose a multiple of 3 between 33 to 99',
		// 		'default' => '72',
		// 	]
		// );
		// $this->add_control(
		// 	'text_area',
		// 	[
		// 		'label' => __( 'Insérez du texte ici', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::TEXTAREA,
		// 		'description' => __( 'Text description', 'elementor-example-widget' ),
		// 		'show_label' => 'true',
		// 		'label_block' => 'true',
		// 		'rows' => 3,
		// 		'separator' => 'after',
		// 		'placeholder' => file_get_contents('https://loripsum.net/api/5/plaintext'),
		// 		'title' => __( 'Textarea', 'elementor-example-widget' ),
		// 		'classes' => 'elementor-textarea',
		// 	]
		// );

		// $this->add_control(
		// 	'control_switcher',
		// 	[
		// 		'label' => __( 'Switch control', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::SWITCHER,
		// 		'description' => 'Switch',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'label_on' => 'Activé',
		// 		'label_off' => 'Desactivé',
		// 		'return_value' => 'yes',

		// 	]
		// );

		// $this->add_control(
		// 	'popover_hyppomed',
		// 	[
		// 		'label' => __( 'Popover déclencheur', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
		// 		'description' => 'popover',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'label_on' => 'Activé',
		// 		'label_off' => 'Desactivé',
		// 		'return_value' => 'yes',
		// 	]
		// );
		// $this->add_control(
		// 	'select_hyppomed',
		// 	[
		// 		'label' => __( 'SELECt', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::SELECT ,
		// 		'description' => 'select',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'options' => [
		// 			'key1' => '1',
		// 			'key2' => '2',
		// 			'key3' => '3',
		// 			'key4' => '4',
		// 		],

		// 	]
		// );
		// $this->add_control(
		// 	'select2_hyppomed',
		// 	[
		// 		'label' => __( 'select 2', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::SELECT2 ,
		// 		'description' => 'select',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'options' => [
		// 			'key1' => '1',
		// 			'key2' => '2',
		// 			'key3' => '3',
		// 			'key4' => '4',
		// 		],
		// 	]
		// );
		// $this->add_control(
		// 	'CHOOSE_hyppomed',
		// 	[
		// 		'label' => __( 'choose', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::CHOOSE,
		// 		'description' => 'choose',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'options' => [
		// 			'key1' => [
		// 				'title' => 'clé 1',
		// 				'icon' => 'fa fa-align-left',
		// 			],
		// 			'key2' => [
		// 				'title' => 'clé 2',
		// 				'icon' => 'fa fa-align-center',
		// 			],
		// 			'key3' => [
		// 				'title' => 'clé 3',
		// 				'icon' => 'fa fa-align-right',
		// 			],
		// 			'key4' =>[
		// 				'title' => 'clé 4',
		// 				'icon' => 'fa fa-youtube',
		// 			],
		// 		],
		// 	]
		// );
		// $this->add_control(
		// 	'color_hyppo',
		// 	[
		// 		'label' => __( 'Color', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::COLOR,
		// 		'description' => 'choose',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',

		// 	]
		// );
		// $this->add_control(
		// 	'ICON_hyppomed',
		// 	[
		// 		'label' => __( 'icon', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::ICON,
		// 		'description' => 'choose',
		// 		'show_label' => 'false',
		// 		'label_block' => 'true',
		// 		'separator' => 'after',
		// 		'include' => [
		// 			'fa fa-facebook',
		// 			'fa fa-flickr',
		// 			'fa fa-google-plus',
		// 			'fa fa-instagram',
		// 			'fa fa-linkedin',
		// 			'fa fa-pinterest',
		// 			'fa fa-reddit',
		// 			'fa fa-twitch',
		// 			'fa fa-twitter',
		// 			'fa fa-vimeo',
		// 			'fa fa-youtube',
		// 		],
		// 		'default' => 'fa fa-facebook',
		// 	]
		// );
		// $this->add_control(
		// 	'font_hyppo',
		// 	[
		// 		'label' => __( 'fonts', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::FONT,
		// 		'default' => "'Open Sans', sans-serif",
		// 		'selectors' => [
		// 			'{{WRAPPER}} .title' => 'font-family: {{VALUE}}',
		// 		],
		// 	]

		// );
		// $this->add_control(
		// 	'DATe_hyppo',
		// 	[
		// 		'label' => __( 'date time', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::DATE_TIME,

		// 	]
		// );
		// $this->add_control(
		// 	'',
		// 	[
		// 		'label' => __( '', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::ANIMATION,
		// 		'prefix_class' => 'animated ',
		// 	]
		// );
		// $this->add_control(
		// 	'hyppo_animaton',
		// 	[
		// 		'label' => __( 'Hover Animation', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
		// 		'prefix_class' => 'elementor-animation-',
		// 	]
		// );
		// $this->add_control(
		// 	'image',
		// 	[
		// 		'label' => __( 'Add Images', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );

		// $this->add_group_control(
		// 	\Elementor\Group_Control_Image_Size::get_type(),
		// 	[
		// 		'name' => 'image',
		// 		'default' => 'large',
		// 		'separator' => 'none',
		// 	]
		// );
		// // $this->add_control(
		// // 	'',
		// // 	[
		// // 		'label' => __( '', 'elementor-example-widget' ),
		// // 		'type' => \Elementor\Controls_Manager::TEXT,

		// // 	]
		// // );

		// $this->end_controls_section();


		// $this->start_controls_section(
		// 	'data_control_section_editor',
		// 	[
		// 			'label' => __( 'Section de controle de données avec éditeurs', 'elementor-example-widget' ),       
		// 			'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]     
		// );

		// $this->add_control(
		// 	'wysiwyg_hyppomed',
		// 	[
		// 		'label' => __( 'Wysiwyg HYPPOmed', 'elementor-example-widget' ),
		// 		'type' => \Elementor\Controls_Manager::WYSIWYG,
		// 		'description' => 'WYSIWYG',
		// 		'show_label' => 'true',
		// 		'label_block' => 'true',
		// 		'separator' => 'before',
		// 	]
		// );
		// $this->end_controls_section();

		// $this->start_controls_section(
		// 	'style_section',
		// 	[
		// 		'label' => __( 'Style section', 'elementor-example-widget' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		// 	]
		// );

		// $this->end_controls_section();
		
		// $this->end_controls_section();
    }
    
    protected function render() {

		// $settings = $this->get_settings_for_display();

		// echo '<h1>' . $settings['text_area'] .'</h1>';
		// echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings );
	}

	protected function _content_template() {}

}