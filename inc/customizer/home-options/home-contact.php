<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;
/*defaults values*/
$bizlight_customizer_defaults['keysist-home-contact-enable']           = 1;
$bizlight_customizer_defaults['keysist-home-contact-title'] = __( 'Contactanos', 'keysist' );
$bizlight_customizer_defaults['keysist-home-contact-content'] = __( 'Si tienes dudas escribenos', 'keysist' );
$bizlight_customizer_defaults['keysist-home-contact-shor-code'] = __( '', 'keysist' );
$bizlight_customizer_defaults['keysist-home-contact-url-map'] = __( '', 'keysist' );
/*testimonialsetting*/
$bizlight_sections['keysist-home-contact-enable-setting'] =
    array(
        'priority'       => 160,
        'title'          => __( 'Ajustes de Contacto', 'keysist' ),
    );

$bizlight_settings_controls['keysist-home-contact-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Activo', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'checkbox',
            'priority'              => 15,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['keysist-home-contact-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Titulo', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-home-contact-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-content'],
        ),
        'control' => array(
            'label'                 =>  __( 'Descripción', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-home-contact-shor-code'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-shor-code'],
        ),
        'control' => array(
            'label'                 =>  __( 'Short Code Form', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );
$bizlight_settings_controls['keysist-home-contact-url-map'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['keysist-home-contact-url-map'],
        ),
        'control' => array(
            'label'                 =>  __( 'URL Mapa', 'keysist' ),
            'section'               => 'keysist-home-contact-enable-setting',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );

