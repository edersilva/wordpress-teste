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
				'default'           => 'Esta é minha página',
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
				'default'           => 'ut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet',
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
				'default'           => '#work',
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

			/**
	 * Initialize sections
	 */
	$wp_customize->add_section(
		'theme_social_section',
		array(
			'title'    => __( 'Redes Sociais', 'your-theme' ),
			'priority' => 1000,
		)
	);

		// Instagram.
		$wp_customize->add_setting( 'social_instagram',
			array(
				'default'           => 'http://instagram.com',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for Instagram
		$wp_customize->add_control( 'social_instagram',
			array(
				'label'       => __( 'Instagram URL', 'your-theme' ),
				'type'        => 'text',
				'section'     => 'theme_social_section',
				'priority'    => 1,
			)
		);

		// Linkedin.
		$wp_customize->add_setting( 'social_linkedin',
			array(
				'default'           => 'http://linkedin.com',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for Linkedin
		$wp_customize->add_control( 'social_linkedin',
			array(
				'label'       => __( 'Linkedin URL', 'your-theme' ),
				'type'        => 'text',
				'section'     => 'theme_social_section',
				'priority'    => 2,
			)
		);
		// GitHub.
		$wp_customize->add_setting( 'social_github',
			array(
				'default'           => 'http://github.com',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		// Control for Instagram
		$wp_customize->add_control( 'social_github',
			array(
				'label'       => __( 'Github URL', 'your-theme' ),
				'type'        => 'text',
				'section'     => 'theme_social_section',
				'priority'    => 3,
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
