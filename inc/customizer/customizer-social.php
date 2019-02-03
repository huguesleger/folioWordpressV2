<?php
/**
 * portfoliohl customizer-social
 *
 * @package portfoliohl
 */

/*------------------------------------------------------------------------*/
/* Social
/*------------------------------------------------------------------------*/
		$wp_customize->add_section(
				'social_type',
				array(
						'title'         => __('Social', 'portfoliohl'),
						'priority'      => 10
				)
		);

		////facebook-url
		$wp_customize->add_setting(
				'social_facebook_url',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
						'default'           => '',
				)
		);

		$wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'facebook', array(
				'label' => __('Facebook ', 'portfoliohl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 10
				) )
		);

		$wp_customize->add_control(
				'social_facebook_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Facebook url', 'portfoliohl'),
					'section'   => 'social_type',
					'priority'  => 12,
				)
		);

		//facebook-icon
		$wp_customize->add_setting(
				'social_facebook_icon',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_facebook_icon',
				array(
						'label'    =>__('Facebook icon','portfoliohl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 13,
						'choices'     => array(
						 'fa-facebook-f' => __( 'facebook-f'),
						 'fa-facebook'  => __( 'facebook'),
						 'fa-facebook-square'  => __( 'facebook-square'),
						)
				)
		);

		////linkedin-url
		$wp_customize->add_setting(
				'social_linkedin_url',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
				)
		);

		$wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'linkedin', array(
				'label' => __('Linkedin ', 'portfoliohl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 14,
				) )
		);

		$wp_customize->add_control(
				'social_linkedin_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Linkedin url', 'portfoliohl'),
					'section'   => 'social_type',
					'priority'  => 15,
				)
		);

		//linkedin-icon
		$wp_customize->add_setting(
				'social_linkedin_icon',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_linkedin_icon',
				array(
						'label'    =>__('Linkedin icon','portfoliohl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 15,
						'choices'     => array(
						 'fa-linkedin-in' => __( 'linkedin-in'),
						 'fa-linkedin'  => __( 'linkedin'),
						)
				)
		);

		////instagram-url
		$wp_customize->add_setting(
				'social_instagram_url',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
				)
		);

		$wp_customize->add_control( new portfoliohl_Info( $wp_customize, 'instagram', array(
				'label' => __('Instagram ', 'portfoliohl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 16,
				) )
		);

		$wp_customize->add_control(
				'social_instagram_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Instagram url', 'portfoliohl'),
					'section'   => 'social_type',
					'priority'  => 16,
				)
		);

		//linkedin-icon
		$wp_customize->add_setting(
				'social_instagram_icon',
				array(
						'sanitize_callback' => 'portfoliohl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_instagram_icon',
				array(
						'label'    =>__('Instagram icon','portfoliohl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 16,
						'choices'     => array(
						 'fa-instagram' => __( 'instagram'),
						)
				)
		);
