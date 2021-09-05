<?php

defined( 'ABSPATH' ) || exit;

/**
 * Implement Theme Customizer additions and adjustments.
 * https://codex.wordpress.org/Theme_Customization_API
 *
 * How do I "output" custom theme modification settings? https://developer.wordpress.org/reference/functions/get_theme_mod
 * echo get_theme_mod( 'copyright_info' );
 * or: echo get_theme_mod( 'copyright_info', 'Default (c) Copyright Info if nothing provided' );
 *
 * "sanitize_callback": https://codex.wordpress.org/Data_Validation
 */
function your_theme_customize( $wp_customize ) {
	/**
	 * Initialize sections
	 */
	$wp_customize->add_section(
		'theme_header_section',
		array(
			'title'    => __( 'Header', 'your-theme' ),
			'priority' => 1000,
		)
	);

	/**
	 * Section: Page Layout
	 */
	// Header Logo.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo',
			array(
				'label'       => __( 'Upload da imagem', 'your-theme' ),
				'section'     => 'theme_header_section',
				'settings'    => 'header_logo',
				'priority'    => 1,
			)
		)
	);
		// Title.
		$wp_customize->add_setting( 'header_title',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for title
		$wp_customize->add_control( 'header_title',
			array(
				'label'       => __( 'Titulo do banner', 'your-theme' ),
				'type'        => 'text',
				'section'     => 'theme_header_section',
				'priority'    => 2,
			)
		);
		// Text.
		$wp_customize->add_setting( 'header_texto',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for text
		$wp_customize->add_control( 'header_texto',
			array(
				'label'       => __( 'Texto para o banner', 'your-theme' ),
				'type'        => 'textarea',
				'section'     => 'theme_header_section',
				'priority'    => 3,
			)
		);
		// URL.
		$wp_customize->add_setting( 'header_url',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for URL
		$wp_customize->add_control( 'header_url',
			array(
				'label'       => __( 'Link para o botão', 'your-theme' ),
				'type'        => 'text',
				'section'     => 'theme_header_section',
				'priority'    => 4,
			)
		);


}
add_action( 'customize_register', 'your_theme_customize' );


/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function your_theme_customize_preview_js() {
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/inc/customizer.js', array( 'jquery' ), null, true );
}
add_action( 'customize_preview_init', 'your_theme_customize_preview_js' );
